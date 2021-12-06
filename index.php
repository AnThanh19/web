<!DOCTYPE html>
<html lang="vi-vn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/img/title-icon.png">
    <title>CineSV Cinema</title>
    <link rel="stylesheet" href="https://pagecdn.io/lib/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
</head>
<body>
    <div class="app">
        <header class="header">
            <a href="" class="header__logo hide-on-tablet-mobile">
                <img src="./assets/img/logo-sv" alt="" class="header__logo-img">
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
                                <a href="./assets/pages/Phim/phimDangChieu.php" class="subnav-link">Phim đang chiếu</a>
                            </li>
                            <li class="subnav-item">
                                <a href="./assets/pages/Phim/phimSapChieu.php" class="subnav-link">Phim sắp chiếu</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-item noHover">
                        <a href="./assets/pages/Rap/allRap.php" class="navbar-link">Rạp phim</a>
                    </li>
                    <li class="navbar-item noHover">
                        <a href="./assets/pages/tintuc/tinTuc.php" class="navbar-link">Tin tức</a>
                    </li>
                    <li class="navbar-item noHover">
                        <label for="subnav-cultural-checkbox" class="navbar-link">Cultureplex</label>
                        <input type="checkbox" hidden id="subnav-cultural-checkbox" class="suvnav-checkbox">
                        <ul class="subnav-list">
                            <li class="subnav-item">
                                <a href="" class="subnav-link">Quầy Online</a>
                            </li>
                            <li class="subnav-item">
                                <a href="/assets/pages/Gift/suKienVaVeNhom.html" class="subnav-link">Sự kiện và vé nhóm</a>
                            </li>
                            <li class="subnav-item">
                                <a href="./assets/pages/Gift/theQuaTang.html" class="subnav-link">Thẻ quà tặng</a>
                            </li>
                        </ul>
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
        <!-- SLIDER -->
        <div class="slider">
            <div class="grid wide">
                <a href="./assets/pages/Phim/phimDangChieu.php" class="slider-link">
                    <img src="./assets/img/Slider/slider1.jpg" alt="" class="slider-img">
                </a>
            </div>
        </div>
        <div class="content">
            <div class="grid wide">
                <!-- MOVE SELECTION -->
                <div class="home-movie-selection">
                    <div class="movie-selection-title">
                        <h2>Movie Seletion</h2>
                    </div>
                </div>
                <div class="grid__row-home home-film-item">
                <?php
                        require('./db/dbhelper.php');
                        $sql          = "SELECT DISTINCT p.TENPHIM,p.POSTER, p.MAPHIM,sc.MASC,p.THOILUONG,sc.NGAYCHIEU,p.THELOAI FROM `phim` p JOIN `suatchieu` sc 
                        WHERE p.MAPHIM=sc.MAPHIM and sc.MAGHE='0' and p.KHOICHIEU<= now() GROUP BY p.TENPHIM  ORDER BY sc.NGAYCHIEU ";
                        $result = executeResult($sql);
                        foreach ($result as $row) 
                        {
                                    echo"<div class='col l-3 m-4 c-6'>
                                            <a href='./assets/pages/Phim/chitietPhim.php?masc=$row[3]' class='home-film-item-link' style='background-image: '>
                                            <img src='./admin/img/phim/$row[1]' class='film-item-img'>
                                            
                                            </a>
                                        </div>
                                        ";
                        }
                ?>
                              
                    
                </div>
                <!-- EVENT SELECTION -->
                <div class="home-events-selection">
                    <div class="events-selection-title">
                        <h2>events selection</h2>
                    </div>
                </div>
                <div class="grid__row-home events-item">
                    <div class="col l-3 m-4 c-6">
                        <a href="./assets/pages/tintuc/tinTuc.php" class="home-event-link">
                            <img src="./admin/img/khuyenmai/big-sale-poster-vector-easy-to-edit-34462902.jpg" style="max-width: 200px; max-height: 240px;" alt="" class="home-event-img">
                        </a>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <a href="./assets/pages/tintuc/tinTuc.php" class="home-event-link">
                            <img src="./admin/img/khuyenmai/SP004130_1.jpg" style="max-width: 200px;max-height: 240px;" alt="" class="home-event-img">
                        </a>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <a href="./assets/pages/tintuc/tinTuc.php" class="home-event-link">
                            <img src="./admin/img/khuyenmai/lillyskids_f1.jpg" style="max-width: 200px;max-height: 240px;" alt="" class="home-event-img">
                        </a>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <a href="./assets/pages/tintuc/tinTuc.php" class="home-event-link">
                            <img src="./admin/img/khuyenmai/tải xuống.png" style="max-width: 200px; max-height: 240px;" alt="" class="home-event-img">
                        </a>
                    </div>
                   
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="grid wide">
                <div class="row footer-row">
                    <div class="col l-3 m-4 c-6">
                        <h3 class="footer-title">CineSV</h3>
                        <ul class="footer-list">
                            <a href="" class="footer-link">Giới thiệu</a>
                            <a href="" class="footer-link">Tiện ích Online</a>
                            <a href="" class="footer-link">Thẻ quà tặng</a>
                            <a href="" class="footer-link">Tuyển dụng</a>
                            <a href="" class="footer-link">Liên hệ quảng cáo CGV</a>
                        </ul>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <h3 class="footer-title">Điều khoản sử dụng</h3>
                        <ul class="footer-list">
                            <a href="" class="footer-link">Điều khoản chung</a>
                            <a href="" class="footer-link">Điều khoản giao dịch</a>
                            <a href="" class="footer-link">Chính sách thanh toán</a>
                            <a href="" class="footer-link">Chính sách bảo mật</a>
                            <a href="" class="footer-link">Câu hỏi thường gặp</a>
                        </ul>
                    </div>
                    <div class="col l-3 m-4 c-6 footer-socials">
                        <h3 class="footer-title">CineSV</h3>
                        <a href="https://www.facebook.com/Tins.Grace.vl/" target="_blank" class="footer-link-socials">
                            <i class="footer-icon-socials fab fa-facebook-square" style="color: rgb(12, 55, 150); padding-left: 0;"></i>
                        </a>
                        <a href="https://www.instagram.com/lethanhtin____/" target="_blank" class="footer-link-socials">
                            <i class="footer-icon-socials fab fa-instagram-square" style="color: rgb(219, 58, 152);"></i>
                        </a>
                        <a href="https://www.youtube.com/cgvvietnam" target="_blank" class="footer-link-socials">
                            <i class="footer-icon-socials fab fa-youtube-square" style="color: rgb(161, 31, 31);"></i>
                        </a>
                        <a href="https://twitter.com/CGV_ID" target="_blank" class="footer-link-socials">
                            <i class="footer-icon-socials fab fa-twitter-square" style="color: rgb(42, 146, 187);"></i>
                        </a>
                        <a href="http://online.gov.vn/Home/WebDetails/30270" target="_blank" class="bo-cong-thuong"></a>
                    </div>
                    <div class="col l-3 m-4 c-6 hide-on-tablet">
                        <h3 class="footer-title">Chăm sóc khách hàng</h3>
                        <ul class="footer-list">
                            <h4 href="" class="footer-link">Hotline: 0978827442</h4>
                            <h4 href="" class="footer-link">Giờ làm việc: 8:00 - 22:00 (Tất cả các ngày bao gồm cả Lễ Tết)</h4>
                            <h4 href="" class="footer-link">Email hỗ trợ: thanlonglua97@gmail.com</h4>
                        </ul>
                    </div>
                </div>
                <div class="footer__about">
                    <div class="footer-logo" style="background-image: url(./assets/img/Slider/common_sprite_area.png);"></div>
                    <div class="footer__contact">
                        <h3 class="footer-name">CÔNG TY TNHH MTV LTT</h3>
                        <h4 class="footer-sub">Giấy CNĐKDN: 0303675393, đăng ký lần đầu ngày 31/7/2008, đăng ký thay đổi lần thứ 5 ngày 14/10/2015, cấp bởi Sở KHĐT thành phố Hồ Chí Minh.</h4>
                        <h4 class="footer-sub">Địa Chỉ: Tầng 2, Rivera Park Saigon - Số 7/28 Thành Thái, P.14, Q.10, TPHCM.</h4>
                        <h4 class="footer-sub">COPYRIGHT 2017 CJ CGV. All RIGHTS RESERVED</h4>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="modal js-modal">
        <div class="modal__overlay"></div>
        <div class="modal__body js-modal__body--login">
            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng nhập</h3>
                        <span class="auth-form__switch--btn js-register">Đăng ký</span>
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" required placeholder="Số điện thoại" name="username" id="username">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" required placeholder="Mật khẩu" name="password" id="password">
                        </div>
                        <div>
                            <p id="notificationLogin"></p>
                        </div>
                    </div>
                    <div class="auth-form__controls">
                        <!-- <input type="submit" value="Login" name="Login"> -->
                        <button class="btn btn--primary" onclick="Login()">ĐĂNG NHẬP</button>
                    </div>
                    <div class="auth-form__help">
                        <a href="#" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu?</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal__body js-modal__body--register">
            <!-- Auth-form register -->
            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <span class="auth-form__switch--btn js-login">Đăng nhập</span>
                        <h3 class="auth-form__heading">Đăng ký</h3>
                    </div>
                    <div class="auth-form__form">
                        <form>
                            <div class="auth-form__group">
                                <input type="text" class="auth-form__input" required placeholder="Họ và tên" id="reg_fullname">
                            </div>
                            <div class="auth-form__group">
                                <input type="email" class="auth-form__input" required placeholder="Email" id="reg_email">
                            </div>
                            <div class="auth-form__group">
                                <input type="tel" class="auth-form__input" required placeholder="Số điện thoại" id="reg_telephone">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" required placeholder="Mật khẩu" id="reg_password">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" required placeholder="Nhập lại mật khẩu" id="reg_password_confirm">
                            </div>
                            <div>
                                <p id="notificationRegister"></p>
                            </div>
                        </form>
                        <div class="auth-form__controls">
                            <button class="btn btn--primary" onclick="Register()">ĐĂNG KÝ</button>
                        </div>
                    </div>
                    <div class="auth-form__aside">
                        <p class="auth-form__policy-text">Bằng việc đăng ký, bạn đã đồng ý với LTT-Shop về
                            <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a> &
                            <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var loginForm = document.querySelector('.js-login-form');
        var registerForm = document.querySelector('.js-register-form');
        var modal = document.querySelector('.js-modal');
        var modalBodyLogin = document.querySelector('.js-modal__body--login');
        var modalBodyRegister = document.querySelector('.js-modal__body--register');
        var switchFormLogin = document.querySelector('.js-login');
        var switchFormRegister = document.querySelector('.js-register');
        if (getCookie("fullName") != "") {
            block_login_register.innerHTML = "";
            usernameCineSV.innerHTML = getCookie("fullName");
        } else {
            block_info_user.innerHTML = "";
        }
        // Hàm mở gogin Form
        function openLoginForm() {
            modal.classList.add('open__modal');
            modalBodyRegister.classList.remove('modal-body__open');
            modalBodyLogin.classList.add('modal-body__open');
        }
        // Hàm mở register Form
        function openRegisterForm() {
            modal.classList.add('open__modal');
            modalBodyLogin.classList.remove('modal-body__open');
            modalBodyRegister.classList.add('modal-body__open');
        }
        // Hàm ẩn modal 
        function closeModal() {
            modal.classList.remove('open__modal');
        }
        // Hàm chuyển form login-regisrer
        function switchToLogin() {
            modalBodyRegister.classList.remove('modal-body__open');
            modalBodyLogin.classList.add('modal-body__open');
        }
        function switchToRegister() {
            modalBodyLogin.classList.remove('modal-body__open');
            modalBodyRegister.classList.add('modal-body__open');
        }
        loginForm.addEventListener('click', openLoginForm);
        registerForm.addEventListener('click', openRegisterForm);
        switchFormRegister.addEventListener('click', switchToRegister);
        switchFormLogin.addEventListener('click', switchToLogin);
        //Đóng modal
        modal.addEventListener('click', closeModal);
        modalBodyLogin.addEventListener('click', function(event) {
            event.stopPropagation();
        })
        modalBodyRegister.addEventListener('click', function(event) {
            event.stopPropagation();
        })
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
        function Register() {
            var xmlHttp = new XMLHttpRequest();
            var obj = document.getElementById("notificationRegister");
            if (reg_password.value != reg_password_confirm.value) {
                obj.innerHTML = "Mật khẩu không khớp";
                // location.replace("https://www.fb.com");
            } else {
                var url = "register.php";
                var param = "fullname=" + reg_fullname.value + "&email=" + reg_email.value + "&telephone=" + reg_telephone.value + "&password=" + reg_password.value;
                xmlHttp.open("POST", url, true);
                xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xmlHttp.send(param);
                xmlHttp.onreadystatechange = function() {
                    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                        if (xmlHttp.responseText == "ok") {                        
                            window.alert("Đăng kí thành công");
                            location.replace("./");
                        } else {
                            obj.innerHTML = xmlHttp.responseText;
                        }
                    }
                }
            }  
        }
    </script>
</body>
</html>