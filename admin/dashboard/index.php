<?php
require_once('../../db/dbhelper.php');

?>
<!DOCTYPE html>
<html lang="en">
<head >
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineSV Cinema</title>
    <link rel="stylesheet" href="https://pagecdn.io/lib/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
        .nav-link:hover{
            color:rgb(223, 50, 50);
        }
    </style>
</head>
<body style="background-image: url(../img/bg.jpg); width :100%">
	<header>
        
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div  class="header-logo" style="display:flex;">
               <a href="../dashboard/" style="font-size: 2.8rem; font-weight: 500; color: rgb(223, 50, 50);text-decoration:none;"> CineSV  </a>
                <div class="nav-item">
							<a class="nav-link " href="../dashboard/"><b>ADMIN</b> </a>
                </div>  
            </div>
            
            <div class="container" >
                
                <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse" style="margin-right :180px;">
					<ul class="nav nav-tabs">
                    
						<li class="nav-item">
							<a class="nav-link " href="../phim/"><b>Phim</b> </a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="../lichchieu/"><b>Lịch Chiếu</b> </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../sanpham/"><b>Sản Phẩm</b> </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../khuyenmai/"><b>Khuyến Mãi</b> </a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="../nhanvien/"><b>Nhân Viên</b> </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../thanhvien/"><b>Thành Viên</b> </a>
						</li>
                        
                    </ul>

                </div>
                    <div class="header__user-options" >
                                <div class="nav-item" >
                                <a href="../dashboard/logout.php" class="nav-link" ><b>Đăng xuất</b></a>
                    </div>
                    </div>
            </div>
					</ul>
				</div>
            </div>
        </nav>
    </header>
<div class="container">
		<div class="panel panel-primary">
            
        <h1 class="mainContent-title">DashBoard</h1><br>
		<div class="row card-list">
                <div class="col-md-3">
                    <div class="card shadow" style="border-left: .25rem solid #4e73df;border-radius: 0.36rem">
                        <div class="card-body">
                            <h4 class="card-title" style="color:#4e73df ">Doanh Thu</h4>
                            <?php
                                $sql    = "SELECT SUM(TONG) FROM `hoadon`";
                                $result = executeResult($sql);
                                
                                if ($result != null) {
                                    $tong = $result[0];
                                }
                            ?>
                            <p class="card-text"><?php echo $tong[0]. " VNĐ" ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow" style="border-left: .25rem solid #1cc88a;border-radius: 0.36rem">
                        <div class="card-body">
                            <h4 class="card-title" style="color:#1cc88a ">Số Rạp Toàn Quốc</h4>
                            <?php
                                $sql    = "SELECT count(*) FROM `rapchieu`";
                                $result = executeResult($sql);
                                
                                if ($result != null) {
                                    $tong = $result[0];
                                }
                            ?>
                            <p class="card-text"><?php echo $tong[0]. " rạp" ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow" style="border-left: .25rem solid #36b9cc;border-radius: 0.36rem">
                        <div class="card-body">
                            <h4 class="card-title" style="color:#36b9cc ">Số Thành viên</h4>
                            <?php
                                $sql    = "SELECT count(*) FROM `thanhvien`";
                                $result = executeResult($sql);
                                
                                if ($result != null) {
                                    $tong = $result[0];
                                }
                            ?>
                            <p class="card-text"><?php echo $tong[0]." Người" ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow" style="border-left: .25rem solid #f6c23e;border-radius: 0.36rem">
                        <div class="card-body">
                            <h4 class="card-title" style="color:#f6c23e ">Tổng Số Vé Đã Bán</h4>
                            <?php
                                $sql    = "SELECT COUNT(*) FROM `suatchieu` WHERE MAGHE NOT LIKE '0'";
                                $result = executeResult($sql);
                                
                                if ($result != null) {
                                    $tong = $result[0];
                                }
                            ?>
                            <p class="card-text"><?php echo $tong[0]." Vé" ?></p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <script >
       
        if (getCookie("abc") != "") {
            usernameCineSV.innerHTML = getCookie("abc");
        } else {
            location.replace("./login.php");
        }
        
        function getCookie(cname) {
            let name = cname + "=";
            let decodedCookie = decodeURIComponent(document.cookie);
            let ca = decodedCookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
        function Login() {
            var xmlHttp = new XMLHttpRequest();
            var obj = document.getElementById("notificationLogin");
            var url = "login.php";
            var param = "username=" + username.value + "&password=" + password.value;
            xmlHttp.open("POST", url, true);
            xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xmlHttp.send(param);
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    if (xmlHttp.responseText == "ok") {
                        location.replace("./");
                    } else {
                        obj.innerHTML = xmlHttp.responseText;
                    }
                }
            }
        }
        
    </script>

</body>
</html>
