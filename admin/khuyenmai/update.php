<?php
require_once ('../../db/dbhelper.php');

$makm = $ngaybatdau = '';

if (isset($_GET['makm'])) {
	$makm   = $_GET['makm'];
	$sql    = "select * from khuyenmai where makm='$makm'";
	$result = executeSingleResult($sql);
	
	if ($result != null) {
		$ngaybatdau = $result[1];
		$ngayketthuc= $result[2];
		$phantram= $result[3];
		$poster= $result[4];
		$mota= $result[5];
	}

}
if (!empty($_POST)) {
	if (isset($_POST['ngaybatdau'])) {
		$ngaybatdau = $_POST['ngaybatdau'];
		$ngayketthuc = $_POST['ngayketthuc'];
		$phantram= $_POST['phantram'];
		$poster= $_POST['poster'];
		$mota= $_POST['mota'];
	}
	if (isset($_POST['makm'])) {
		$makm = $_POST['makm'];
	}
	if (!empty($ngaybatdau)) {
		$sql = "UPDATE `khuyenmai` SET `ngaybatdau`='$ngaybatdau',`ngayketthuc`='$ngayketthuc',
			`phantram`='$phantram' ,`poster`='$poster',`mota`='$mota' WHERE `MAKM`='$makm'";
        execute($sql);

		header('Location: index.php');
		die();
	}
}
require('../../all/header.php')
?>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Sửa khuyến mãi</h2>
			</div>
			<div class="panel-body">
				<h3>Lưu ý: sửa theo format có sẵn</h3>
				<form method="post">
					<div class="form-group">
					  <label for="ngaybatdau">Ngày bắt đầu:</label>
					  <input required="true" type="text" class="form-control" id="ngaybatdau" name="ngaybatdau" value="<?=$ngaybatdau?>">
					</div>
					<div class="form-group">
					  <label for="ngayketthuc">Ngày kết thúc:</label>
					  <input required="true" type="text" class="form-control" id="ngayketthuc" name="ngayketthuc" value="<?=$ngayketthuc?>">
					</div>
					<div class="form-group">
					  <label for="thoiluong">Phần trăm:</label>
					  <input required="true" type="number" min="0" max="50" step ="5" class="form-control" id="phantram" name="phantram" value="<?=$phantram?>">
					</div>	
					<div class="form-group">
					  <label for="poster">Poster:</label>
					  <input required="false" type="text" class="form-control" id="poster" name="poster" value="<?=$poster?>">
					</div>
					<div class="form-group">
					  <label for="mota">Mô tả:</label>
					  <input type="text" class="form-control" id="mota" name="mota" value="<?=$mota?>">
					</div>		
					<button class="btn btn-success">Lưu</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>