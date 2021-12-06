</html>
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
                <label for="inputEmail" class="sr-only">Tài Khoản/</label>
                <input type="text" id="username" name = "username" class="form-control" placeholder="Số điện thoại" required="" autofocus=""><br>
                <label for="inputPassword" class="sr-only">Mật Khẩu</label>
                <input type="password" id="password" name = "password" class="form-control" placeholder="Mật Khẩu" required=""><br>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="adminLoginSubmit">Đăng Nhập</button>
                <p class="mt-5 mb-3 text-muted">© 2020-2021</p>
            </form>
        </div>
    </div>
    
</body>
</html>
