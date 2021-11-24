<?php
require_once ('../../db/dbhelper.php');
$masc = $phong = '';
if (isset($_GET['masc'])) {
	$masc   = $_GET['masc'];
	$sql    = "select sc.PHONG,p.TENPHIM,rc.TENRAP,p.MAPHIM,rc.MARAP,sc.NGAYCHIEU
		from phim p join suatchieu sc on p.MAPHIM=sc.MAPHIM JOIN rapchieu rc ON rc.MARAP=sc.MARAP 
		where masc='$masc'";
	$result = executeSingleResult($sql);
	
	if ($result != null) {
		$phong = $result[0];
		$tenphim=  $result[1];
		$tenrap= $result[2];
		$maphim= $result[3];
		$marap=$result[4];
		$ngaychieu=$result[5];
	}

}
if (!empty($_POST)) {
	if (isset($_POST['phong'])) {
		$phong = $_POST['phong'];
		$maphim = $_POST['maphim'];
		$marap= $_POST['marap'];
		$ngaychieu = $_POST['ngaychieu'];
	}
	if (isset($_POST['masc'])) {
		$masc = $_POST['masc'];
	}

	if (!empty($phong)) {
		$sql = "UPDATE `suatchieu` SET `phong`='$phong',`maphim`='$maphim',`marap`='$marap',
		`ngaychieu`='$ngaychieu' WHERE `masc`='$masc' ";
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
				<h2 class="text-center">Sửa suất chiếu</h2>
			</div>
			<div class="panel-body">
				<form method="post">
				<div class="form-group">
					  <label for="maphim">Mã phim:</label>
					  <input required="true" type="text" class="form-control" id="maphim" name="maphim" value="<?=$maphim?>">
					</div>
					<div class="form-group">
					  <label for="phong">Phòng:</label><br>
					  <input required="true" type="number" min="1" max="5" class="form-control" id="phong" name="phong" value="<?=$phong?>">
					</div>
					<div class="form-group">
					  <label for="marap">Mã rạp:</label>
					  <input required="true" type="text" class="form-control" id="marap" name="marap" value="<?=$marap?>">
					</div>
					<div class="form-group">
					  <label for="ngaychieu">Ngày chiếu:</label>
					  <input required="true" type="text" class="form-control" id="ngaychieu" name="ngaychieu" value="<?=$ngaychieu?>">
					  <small class="form-text text-muted">*Lưu ý: sửa theo định dạng có sẵn</small>
					</div>
					
					<button class="btn btn-success">Lưu</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>