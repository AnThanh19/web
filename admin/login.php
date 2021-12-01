<?php
    require_once ('../db/dbhelper.php');
    session_start();
    if(isset($_SESSION['admin_name'])){
        header("Location:  index.php");
    }
    if(isset($_POST['adminLoginSubmit'])){
        $username = $_POST['inputEmailLogin'];
        $password = md5($_POST['inputPasswordLogin']);
        $sql = "SELECT * FROM `taikhoan` WHERE `sdt` = '$username' and `matkhau` = '$password' and `loaitk`=1";
        $Result = executeSingleResult($sql);
        if($Result > 0){
                $_SESSION['admin_name'] = $getNameAdmin['admin_name'];
                $_SESSION['adminName'] = $username;
            header("Location: index.php");
        }
        else{
            echo "<script type='text/javascript'>alert('Sai Tài Khoản Hoặc Mật Khẩu');</script>";
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color: lavender;
        }
        .card{
            max-width: 330px;
            margin: 70px auto;
            border-radius: 0.36rem;
        }
    </style>
</head>
<body class="text-center">
    <div class="card shadow">
        <div class="card-body">
            <form class="form-signin" method="post">
                <img src="./img/logo.png" alt="" style="margin-bottom: 30px">
                <h1 class="h3 mb-3 font-weight-normal">Đăng Nhập</h1><br>
                <label for="inputEmail" class="sr-only">Tài Khoản/Email</label>
                <input type="email" id="inputEmailLogin" name = "inputEmailLogin" class="form-control" placeholder="Tài Khoản/Email" required="" autofocus=""><br>
                <label for="inputPassword" class="sr-only">Mật Khẩu</label>
                <input type="password" id="inputPassword" name = "inputPasswordLogin" class="form-control" placeholder="Mật Khẩu" required=""><br>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="adminLoginSubmit">Đăng Nhập</button>
                <p class="mt-5 mb-3 text-muted">© 2020-2021</p>
            </form>
        </div>
    </div>
</body>
</html>