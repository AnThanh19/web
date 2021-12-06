<?php
require_once('/xampp/htdocs/WebCinema/db/dbhelper.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/header__logo.png">
    <title>Phim đang chiếu</title>
    <link rel="stylesheet" href="https://pagecdn.io/lib/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../../fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./phimDangChieu.css">
    <link rel="stylesheet" href="../../css/base.css">
</head>
<body>
    <div class="app">
    <header class="header">
            <a href="../../../index.php" class="header__logo hide-on-tablet-mobile">
                <img src="../../img/logo-sv" alt="" class="header__logo-img">
            </a>
            <nav class="navbar">
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="" class="navbar-link">Phim</a>
                        <div class="subnav">
                            <ul class="subnav-list">
                                <li class="subnav-item">
                                    <a href="#" class="subnav-link">Phim đang chiếu</a>
                                </li>
                                <li class="subnav-item">
                                    <a href="./phimSapChieu.php" class="subnav-link">Phim sắp chiếu</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="navbar-item">
                        <a href="../Rap/allRap.php" class="navbar-link">Rạp phim</a>
    
                    </li>
                    <li class="navbar-item">
                        <a href="../tintuc/tinTuc.php" class="navbar-link">Tin tức</a>
    
                    </li>
                    
                </ul>
    
            </nav>
    
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
        
        <!-- CONTENT -->
        <div class="content">
            <div class="content__header">
                <div class="grid content__header-nav">
                    <div class="home__logo">
                        <a href="../../../index.php" class="home__logo-link"><i class="fas fa-home home-icon"></i></a>
                    </div>
                    <i class="fas fa-angle-right angle-right-icon"></i>
                    <div class="content__header-title">Phim</div>
                    <i class="fas fa-angle-right angle-right-icon"></i>
                    <div class="content__header-title">Phim đang chiếu</div>

                </div>
            </div>

            <div class="grid">
                <div class="content-title">
                    <h1 class="content-title-name">Phim Đang Chiếu</h1>
                </div>
                <div class="grid__row">


                <?php
                        $sql          = "SELECT DISTINCT p.TENPHIM,p.POSTER, p.MAPHIM,sc.MASC,p.THOILUONG,sc.NGAYCHIEU,p.THELOAI,p.trailer FROM `phim` p JOIN `suatchieu` sc 
                        WHERE p.MAPHIM=sc.MAPHIM and sc.MAGHE='0' and p.KHOICHIEU<= now() and DATEDIFF(sc.NGAYCHIEU,CURDATE())<=5 GROUP BY p.TENPHIM  ORDER BY sc.NGAYCHIEU ";
                        $result = executeResult($sql);
                        foreach ($result as $row) 
                        {
                                    echo"<div class='grid__column-fourth film-items'>
                                        <div class='film-item'>
                                            <a href='./chitietPhim.php?masc=$row[3]' class='film-item-link'>
                                                <img src='../../../admin/img/phim/$row[1]' class='film-item-img'>
                                            </a>
                                        </div>
                                        <div class='film-book-titket'>
                                            <button class='btn btn-book-tickets js-btn-book-tickets'>Mua vé</button>
                                            <a href='$row[7]'><button class='btn btn-book-tickets js-trailer-btn' >Trailer</button></a>
                                        </div>
                                    </div>";
                        }
                ?>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- MODAL TRAILER -->
        <!-- <div class="modal modal-trailer js-modal-trailer" id="myModal">
                    <div class="modal__overlay"></div>
                    <div class="modal__body js-modal__body">
                        <iframe width="800" height="540" class="embed-responsive-item" src="<?=$view?>" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
        
         -->

       
        <footer class="footer">
            <div class="grid">
                <div class="grid__row-home footer-row">
                    <div class="grid__column-fourth-home">
                        <h3 class="footer-title">CineSV</h3>
                        <ul class="footer-list">
                            <a href="" class="footer-link">Giới thiệu</a>
                            <a href="" class="footer-link">Tiện ích Online</a>
                            <a href="" class="footer-link">Thẻ quà tặng</a>
                            <a href="" class="footer-link">Tuyển dụng</a>
                            <a href="" class="footer-link">Liên hệ quảng cáo CGV</a>
                        </ul>
                    </div>

                    <div class="grid__column-fourth-home">
                        <h3 class="footer-title">Điều khoản sử dụng</h3>
                        <ul class="footer-list">
                            <a href="" class="footer-link">Điều khoản chung</a>
                            <a href="" class="footer-link">Điều khoản giao dịch</a>
                            <a href="" class="footer-link">Chính sách thanh toán</a>
                            <a href="" class="footer-link">Chính sách bảo mật</a>
                            <a href="" class="footer-link">Câu hỏi thường gặp</a>
                        </ul>
                    </div>

                    <div class="grid__column-fourth-home">
                        <h3 class="footer-title">CineSV</h3>
                        <a href="https://www.facebook.com/cgvcinemavietnam" target="_blank" class="footer-link-socials">
                            <i class="footer-icon-socials fab fa-facebook-square" style="color: rgb(12, 55, 150); padding-left: 0;"></i>
                        </a>
                        <a href="https://www.instagram.com/cgvcinemasvietnam/" target="_blank" class="footer-link-socials">
                            <i class="footer-icon-socials fab fa-instagram-square"  style="color: rgb(219, 58, 152);"></i>
                        </a>
                        <a href="https://www.youtube.com/cgvvietnam" target="_blank" class="footer-link-socials">
                            <i class="footer-icon-socials fab fa-youtube-square" style="color: rgb(161, 31, 31);"></i>
                        </a>
                        <a href="https://twitter.com/CGV_ID" target="_blank" class="footer-link-socials">
                            <i class="footer-icon-socials fab fa-twitter-square" style="color: rgb(42, 146, 187);"></i>
                        </a>
                        <a href="http://online.gov.vn/Home/WebDetails/30270" target="_blank" class="bo-cong-thuong"></a>
                    </div>

                    <div class="grid__column-fourth-home">
                        <h3 class="footer-title">Chăm sóc khách hàng</h3>
                        <ul class="footer-list">
                            <h4 href="" class="footer-link">Hotline: 1900 6017</h4>
                            <h4 href="" class="footer-link">Giờ làm việc: 8:00 - 22:00 (Tất cả các ngày bao gồm cả Lễ Tết)</h4>
                            <h4 href="" class="footer-link">Email hỗ trợ: hoidap@cinesv.vn</h4>
                        </ul>
                    </div>
                </div>

                <div class="footer__about">
                    <div class="footer-logo" style="background-image: url(/assets/img/Slider/common_sprite_area.png);"></div>
                    <div class="footer__contact">
                    <h3 class="footer-name">CÔNG TY TNHH MTV CineSV</h3>
                        <h4 class="footer-sub">Giấy CNĐKDN: 0303675393, đăng ký lần đầu ngày 31/7/2008, đăng ký thay đổi lần thứ 5 ngày 14/10/2015, cấp bởi Sở KHĐT thành phố Hồ Chí Minh.</h4>
                        <h4 class="footer-sub">Địa Chỉ: Khu phố 6, Phường Linh Trung, Thành Phố Thủ Đức, TPHCM.</h4>
                        <h4 class="footer-sub">COPYRIGHT 2021 CINESV. All RIGHTS RESERVED</h4>
                    </div>

                </div>
            </div>
        </footer>


        <!-- MODAL-LOGIN -->
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
                                    <input type="text" class="auth-form__input" required placeholder="Tài khoản">
                                </div>
    
                                <div class="auth-form__group">
                                    <input type="password" class="auth-form__input" required placeholder="Mật khẩu">
                                </div>
                        </div>
    
                        <div class="auth-form__controls">
                                <button class="btn btn--primary">ĐĂNG NHẬP</button>
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
                                <div class="auth-form__group">
                                    <input type="text" class="auth-form__input" required placeholder="Tài khoản">
                                </div>
    
                                <div class="auth-form__group">
                                    <input type="email" class="auth-form__input" required placeholder="Email">
                                </div>
    
                                <div class="auth-form__group">
                                    <input type="tel" class="auth-form__input" required placeholder="Số điện thoại">
                                </div>
    
                                <div class="auth-form__group">
                                    <input type="password" class="auth-form__input" required placeholder="Mật khẩu">
                                </div>
    
                                <div class="auth-form__group">
                                    <input type="password" class="auth-form__input" required placeholder="Nhập lại mật khẩu">
                                </div>
                        </div>
    
                        <div class="auth-form__controls">
                                <button class="btn btn--primary">ĐĂNG KÝ</button>
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
            <div class="modal-ticket">
              <div class="modal-content">
                <i class="fa fa-times modal-close js-modal-close"></i>
                <h1 class="premiere-title">CHỌN SUẤT CHIẾU</h1>
                <form action="" class="premiere-form">
                    <div class="form-item">
                        <label for="city">Thành Phố:</label>
                        <select name="city" id="city" class="form-control">
                            <option value="">Hồ Chí Minh</option>
                            <option value="">Hà Nội</option>
                            <option value="">Hải Phòng</option>
                            <option value="">Đà nẵng</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="theater">Danh Sách Rạp:</label>
                        <select name="theater" id="theater" class="form-control">
                            <option class="" disabled selected>Chọn Rạp</option>
                            
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="premiere">Xuất Chiếu:</label>
                        <select name="premiere" id="premiere" class="form-control">
                            
                        </select>
                    </div>
                    <button class="btn btn-primary" style="width: 30%; border-radius: 5px; font-weight: 600;">Đăng ký</button>
                </form>

                <div class="noPremiere">Xin Lỗi Không Có Suất Chiếu!</div>
              </div>
            </div>
        </script>
    

        <script>


            
            var loginForm = document.querySelector('.js-login-form');
            var registerForm = document.querySelector('.js-register-form');
            var modal = document.querySelector('.js-modal');
            var modalBodyLogin = document.querySelector('.js-modal__body--login');
            var modalBodyRegister = document.querySelector('.js-modal__body--register');
    
            var switchFormLogin = document.querySelector('.js-login');
            var switchFormRegister = document.querySelector('.js-register');

            
            // Hàm mở gogin Form
            function openLoginForm(){
                modal.classList.add('open__modal');
                modalBodyRegister.classList.remove('modal-body__open');
                modalBodyLogin.classList.add('modal-body__open');
            }
            // Hàm mở register Form
            function openRegisterForm(){
                modal.classList.add('open__modal');
                modalBodyLogin.classList.remove('modal-body__open');
                modalBodyRegister.classList.add('modal-body__open');
            }
            // Hàm ẩn modal 
            function closeModal(){
                modal.classList.remove('open__modal');
            }
    
            // Hàm chuyển form login-regisrer
            function switchToLogin(){
                modalBodyRegister.classList.remove('modal-body__open');
                modalBodyLogin.classList.add('modal-body__open');
            }
    
            function switchToRegister(){
                modalBodyLogin.classList.remove('modal-body__open');
                modalBodyRegister.classList.add('modal-body__open');
            }
    
            loginForm.addEventListener('click', openLoginForm);
    
            registerForm.addEventListener('click', openRegisterForm);
    
            switchFormRegister.addEventListener('click', switchToRegister);
            switchFormLogin.addEventListener('click', switchToLogin);
            //Đóng modal
            modal.addEventListener('click', closeModal);
            modalBodyLogin.addEventListener('click', function(event){
                event.stopPropagation();
            })
    
            modalBodyRegister.addEventListener('click', function(event){
                event.stopPropagation();
            })


            // TRAILER
            var modalTrailer = document.querySelector('.js-modal-trailer');
            var trailerBtns = document.querySelectorAll('.js-trailer-btn');
            var modalBodyTrailer = document.querySelector('.js-modal__body');
            
            
            function openTrailerForm(){
                modalTrailer.classList.add('open');
                modalBodyTrailer.classList.add('open');
                
            }
            

            function closeModalTrailer(){
                modalBodyTrailer.classList.remove('open');
                modalTrailer.classList.remove('open');
            }
            
            for(const trailerBtn of trailerBtns){
                trailerBtn.addEventListener('click', openTrailerForm);
            }
            modalTrailer.addEventListener('click', closeModalTrailer);
    


            
        </script>
        <script src="../../js/modalTickets.js"></script>
    </div>
</body>
</html>