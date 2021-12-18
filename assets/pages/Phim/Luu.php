<?php
require_once "../../../db/dbhelper.php";
if (isset($_POST['ghe'])) {
    $ghe = $_POST['ghe'];
    $masc = $_POST['masc'];
    $matv = $_POST['matv'];
    $sohd = $_POST['sohd'];

    $sql2="SELECT * FROM `suatchieu` WHERE suatchieu.MASC='$masc'";
    $result2 = executeSingleResult($sql2);

    $sql = "INSERT INTO `suatchieu`(`MASC`, `MAGHE`, `PHONG`, `MAPHIM`, `MARAP`, `SOHD`, `NGAYCHIEU`, `suat`) 
            VALUES ('','$ghe','$result2[2]','$result2[3]','$result2[4]','$sohd','$result2[6]','$masc')";
		
        execute($sql);
     
}
?>
