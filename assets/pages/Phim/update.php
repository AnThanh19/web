<?php
require_once "../../../db/dbhelper.php";
if (isset($_POST['masc'])) {
    $masc = $_POST['masc'];
    $matv = $_POST['matv'];
    $sohd = $_POST['sohd'];

    $sql2="SELECT COUNT(*) FROM suatchieu WHERE SOHD='$sohd'";
    $result2 = executeSingleResult($sql2);
    
    $sql3="SELECT  COUNT(*) FROM suatchieu JOIN ghe ON ghe.MAGHE=suatchieu.MAGHE 
            WHERE SOHD='$sohd' AND suatchieu.PHONG=ghe.PHONG AND ghe.stt<=80";
    $ghedon = executeSingleResult($sql3);

    $sql4="SELECT  COUNT(*) FROM suatchieu JOIN ghe ON ghe.MAGHE=suatchieu.MAGHE 
            WHERE SOHD='$sohd' AND suatchieu.PHONG=ghe.PHONG AND ghe.stt>80";
    $ghedoi = executeSingleResult($sql4);
    $gia=0;
    $gia= ($ghedon[0]*45000) + ($ghedoi[0]*120000);
    $sql = "UPDATE `hoadon` SET `TONG`='$gia' WHERE `SOHD`='$sohd'";
		
        execute($sql);
     
}
?>
