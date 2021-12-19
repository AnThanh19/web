<?php
require_once ('../../db/dbhelper.php');

$masp = $tensp = '';

if (isset($_GET['masp'])) {
	$masp   = $_GET['masp'];
	$sql          = "select * from sanpham where masp='$masp'";
	$result = executeSingleResult($sql);
	
	if ($result != null) {
		$tensp = $result[1];
		$gia= $result[2];
		$anh= $result[3];
		$temp1=$result[3];
	}

}
if (!empty($_POST)) {
	if (isset($_POST['tensp'])) {
		$tensp = $_POST['tensp'];
		$gia = $_POST['gia'];
		$anh = $_POST['anh'];
	}
	if (isset($_POST['masp'])) {
		$masp = $_POST['masp'];
	}

	if (empty($anh)) {
		$anh= $temp1;
	}

	if (!empty($tensp)) {
		$sql = "UPDATE `sanpham` SET `TENSP`='$tensp',`GIA`='$gia' ,`anh`='$anh' WHERE `MASP`='$masp'";
		
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
				<h2 class="text-center">Sửa sản phẩm</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="name">Tên sản phẩm:</label>
					  <input required="true" type="text" class="form-control" id="tensp" name="tensp" value="<?=$tensp?>">
					  
					</div>
					<div class="form-group">
					  <label for="thoiluong">Giá:</label>
					  <input required="true" type="text" class="form-control" id="gia" name="gia" value="<?=$gia?>">
					</div>
					<div class="form-group">
					<label for="anh">Ảnh:</label><br>
					  <input class="inputfile"  type="file" name="anh" id="anh" value="<?=$anh?>"><br>
					  <br><img src="../../assets/img/bapnuoc/<?=$anh?>" style="max-width: 200px;" id="img_poster" alt="">
					</div>
					<button class="btn btn-success">Lưu</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>