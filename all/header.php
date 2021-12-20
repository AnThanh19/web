<!DOCTYPE html>
<html lang="en">
<head >
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineSV Cinema</title>
    <link rel="stylesheet" href="https://pagecdn.io/lib/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/grid.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
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