<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/header__logo.png">
    <title>CineSV Cinema</title>
    <link rel="stylesheet" href="https://pagecdn.io/lib/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../../fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="../../css/base.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/grid.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    
</head>
<body>
    <div class="app">
    <header class="header">
            <a href="../../../index.php" class="header__logo hide-on-tablet-mobile">
                <img src="../../img/logo-sv" alt="" class="header__logo-img">
            </a>
            <label for="tablet-mobile-bars-checkbox" class="header__bars">
                <i class="header__bars-icon fas fa-bars"></i>
            </label>
            <input type="checkbox" hidden id="tablet-mobile-bars-checkbox" class="header__navbar-bars-checkbox">
            <label for="tablet-mobile-bars-checkbox" class="nav__overlay"></label>
            <nav class="navbar">
                <ul class="navbar-list">
                    <li class="navbar-item noHover">
                        <label for="subnav-film-checkbox" class="navbar-link">Phim</label>
                        <input type="checkbox" hidden id="subnav-film-checkbox" class="suvnav-checkbox">                      
                        
                            <ul class="subnav-list">
                                <li class="subnav-item">
                                    <a href="../../pages/Phim/phimDangChieu.php" class="subnav-link">Phim đang chiếu</a>
                                </li>
                                <li class="subnav-item">
                                    <a href="../../pages/Phim/phimSapChieu.php" class="subnav-link">Phim sắp chiếu</a>
                                </li>
                            </ul>
                        
                    </li>
                    <li class="navbar-item noHover">
                        <a href="../../pages/Rap/allRap.php" class="navbar-link">Rạp phim</a>
                    </li>
                    <li class="navbar-item noHover">
                        <a href="../../pages/tintuc/tinTuc.php" class="navbar-link">Tin tức</a>
                        
                    </li>
                    
                </ul>
                
            </nav>
            <div class="header__user" id="block_info_user">
                <div class="header__user-info">
                    <i class="header__user-icon fas fa-user-circle"></i>
                    <span id="usernameCineSV" class="header__user-name"></span>
                </div>
                <div class="header__user-options">
                    <ul class="user-options-list">
                        <li class="user-options-item">
                            <a href="" class="user-option-link">Tài khoản</a>
                        </li>
                        <li class="user-options-item">
                            <a href="" class="user-option-link">Cài đặt</a>
                        </li>
                        <li class="user-options-item">
                            <a href="./logout.php" class="user-option-link">Đăng xuất</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="login" id="block_login_register">
                <ul class="login-list">
                    <li class="login-item login-item-sign-in">
                        <label class="login-link js-login-form">Đăng nhập</label>
                    </li>
                    <li class="login-item login-item-register">
                        <label class="login-link js-register-form">Đăng ký</label>
                    </li>
                </ul>
            </div>

        </header>