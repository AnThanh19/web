<?php
require_once "../../../db/dbhelper.php";
if (isset($_POST['masc'])) {
    $masc = $_POST['masc'];
    $matv = $_POST['matv'];
    $sohd = $_POST['sohd'];

    $sql2="SELECT * FROM `khuyenmai` WHERE ngaybatdau<=now() and NGAYKETTHUC>=now()";
        $km = executeSingleResult($sql2);
        $giam= $km[3];

    $sql3="SELECT  sum(ghe.gia) FROM suatchieu JOIN ghe ON ghe.MAGHE=suatchieu.MAGHE 
            WHERE SOHD='$sohd' AND suatchieu.PHONG=ghe.PHONG ";
    $gia = executeSingleResult($sql3);
        $tonghd=0;
    $tonghd += $gia[0] * (1-$giam/100);   

    $sql = "UPDATE `hoadon` SET `TONG`='$tonghd',`MAKM`='$km[0]' WHERE `SOHD`='$sohd'";
	execute($sql);

    
     
}
?>
