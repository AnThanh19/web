<?php
require_once('/xampp/htdocs/WebCinema/db/dbhelper.php');
$sdt='';
if (isset($_POST['usernameCineSV'])) {
	$sdt   = $_POST['usernameCineSV'];
	$sql          = "select * from thanhvien where sdt='$sdt'";
	$result = executeSingleResult($sql);
	echo $sdt;
	if ($result != null) {
		$tentv = $result[1];
		$gioitinh= $result[2];
		$ngaysinh=$result[3];
		$diachi=$result[4];
		$cccd=$result[6];
		$ngaydk=$result[7];
		$diemtichluy=$result[8];
		$loaitk=$result[9];
		$email=$result[10];
	}
}
?>


                            <ul class="user-info-list">
                                <li>Họ tên: <span>Le Thanh Tin</span></li>
                                <li>Giới tính: <span><?=$sdt?></span></li>
                                <li>Ngày sinh: <span></span></li>
                                <li>Địa chỉ: <span></span></li>
                                <li>SDT: <span></span></li>
                                <li>CCCD: <span></span></li>
                                <li>Ngày đăng ký: <span></span></li>
                                <li>Điểm tích lũy: <span></span></li>
                                <li>Loại tài khoản: <span></span></li>
                                <li>Email: <span></span></li>
                            </ul>