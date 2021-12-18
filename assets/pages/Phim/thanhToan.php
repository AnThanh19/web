<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/title-icon.png">
    <title>Thong tin tai khoan</title>
    <link rel="stylesheet" href="https://pagecdn.io/lib/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../../fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="../../css/base.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/grid.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    <link rel="stylesheet" href="./thanhToan.css">
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
                                <a href="../../pages/Phim/phimDangChieu.html" class="subnav-link">Phim đang chiếu</a>
                            </li>
                            <li class="subnav-item">
                                <a href="../../pages/Phim/phimSapChieu.html" class="subnav-link">Phim sắp chiếu</a>
                            </li>
                        </ul>
                    
                </li>
                <li class="navbar-item noHover">
                    <label for="subnav-rap-checkbox" class="navbar-link">Rạp Phim</label>
                    <input type="checkbox" hidden id="subnav-rap-checkbox" class="suvnav-checkbox">
                    
                        <ul class="subnav-list">
                            <li class="subnav-item">
                                <a href="../../pages/Rap/allRap.html" class="subnav-link">Tất cả rạp</a>
                            </li>
                            <li class="subnav-item">
                                <a href="../../pages/Rap/specialTheater.html" class="subnav-link">Rạp đặc biệt</a>
                            </li>
                        </ul>
                    
                </li>
                <li class="navbar-item noHover">
                    <a href="#" class="navbar-link">Tin tức</a>
                        
                    
                </li>
                <li class="navbar-item noHover">
                    <label for="subnav-cultural-checkbox" class="navbar-link">Cultureplex</label>
                        <input type="checkbox" hidden id="subnav-cultural-checkbox" class="suvnav-checkbox">

                    
                        <ul class="subnav-list">
                            <li class="subnav-item">
                                <a href="" class="subnav-link">Quầy Online</a>
                            </li>
                            <li class="subnav-item">
                                <a href="../../pages/Gift/suKienVaVeNhom.html" class="subnav-link">Sự kiện và vé nhóm</a>
                            </li>
                            <li class="subnav-item">
                                <a href="../../pages/Gift/theQuaTang.html" class="subnav-link">Thẻ quà tặng</a>
                            </li>
                        </ul>
                    
                </li>
            </ul>
            
        </nav>
        <div class="header__user">
            <div class="header__user-info">
                <i class="header__user-icon fas fa-user-circle"></i>
                <span class="header__user-name">Le Thanh Tin</span>
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
                        <a href="" class="user-option-link">Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="login">
            <ul class="login-list">
                <li class="login-item login-item-sign-in">
                    <label href="" class="login-link js-login-form">Đăng nhập</label>
                </li>
                <li class="login-item login-item-register">
                    <label href="" class="login-link js-register-form">Đăng ký</label>
                </li>
            </ul>
        </div>

    </header>

    <div class="content">
        <div class="grid wide">
            <label class="title-content">Bắp nước</label>
            <div class="row content-row">
                <div class="col l-2 m-2 c-4 content-item">
                    <img src="../../img/events/cgv-crm-team-chi-1-duoc-2-240x201_1.jpg" alt="">
                </div>
                <div class="col l-4 m-4 c-8 content-item">
                    <div class="product-title">Infuser Bottle My Combo</div>
                    <div class="product-desc">
                        1 bình ủ trà + 1 bắp ngọt lớn + 1 nước 32Oz <br>
                        * Miễn phí đổi vị bắp Phô mai, Caramel * <br>
                        **Nhận trong ngày xem phim**
                    </div>
                    <div class="product-num-price">
                        <div class="product-price">
                            <span>Giá:</span>
                            <span class="price">159.000 &nbsp;đ</span>
                        </div>
                        <div class="product-num">
                            <input onclick="var result = document.getElementById('quantity'); var qty = result.value; 
                            if( !isNaN(qty) && qty > 0 ) result.value--;return false;" type='button' value='-' />
                            <input style="text-align: center; width: 50px;" id='quantity' min='0' name='quantity' type='text' value='0' />
                            <input onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type='button' value='+' />
                        </div>
                    </div>
                </div>
                <div class="col l-2 m-2 c-4 content-item">
                    <img src="../../img/events/cgv-crm-team-chi-1-duoc-2-240x201_1.jpg" alt="">
                </div>
                <div class="col l-4 m-4 c-8 content-item">
                    <div class="product-title">FAST 9 SINGLE COMBO</div>
                    <div class="product-desc">
                        1 ly Fast 9 (kèm nước) + 1 bắp ngọt lớn<br>
                        * Miễn phí đổi vị bắp Phô mai, Caramel * <br>
                        **Nhận trong ngày xem phim**
                    </div>
                    <div class="product-num-price">
                        <div class="product-price">
                            <span>Giá:</span>
                            <span class="price">159.000 &nbsp;đ</span>
                        </div>
                        <div class="product-num">
                            <input onclick="var results = document.getElementById('quantity2'); var qty2 = results.value; 
                            if( !isNaN(qty2) && qty2 > 0 ) results.value--;return false;" type='button' value='-' />
                            <input style="text-align: center; width: 50px;" id='quantity2' min='0' name='quantity2' type='text' value='0' />
                            <input onclick="var results = document.getElementById('quantity2'); var qty2 = results.value; if( !isNaN(qty2)) results.value++;return false;" type='button' value='+' />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row content-row">
                <div class="col l-2 m-2 c-4 content-item">
                    <img src="../../img/events/cgv-crm-team-chi-1-duoc-2-240x201_1.jpg" alt="">
                </div>
                <div class="col l-4 m-4 c-8 content-item">
                    <div class="product-title">MY COMBO</div>
                    <div class="product-desc">
                        1 bắp vừa + 1 nước siêu lớn. Nhận trong ngày xem phim <br>
                        * Miễn phí đổi vị bắp Caramel * <br>
                        **Đổi vị phô mai phụ thu tiền**
                    </div>
                    <div class="product-num-price">
                        <div class="product-price">
                            <span>Giá:</span>
                            <span class="price">79.000 &nbsp;đ</span>
                        </div>
                        <div class="product-num">
                            <input onclick="var result3 = document.getElementById('quantity3'); var qty3 = result3.value; 
                            if( !isNaN(qty3) && qty3 > 0 ) result3.value--;return false;" type='button' value='-' />
                            <input style="text-align: center; width: 50px;" id='quantity3' min='0' name='quantity3' type='text' value='0' />
                            <input onclick="var result3 = document.getElementById('quantity3'); var qty3 = result3.value; if( !isNaN(qty3)) result3.value++;return false;" type='button' value='+' />
                        </div>
                    </div>
                </div>
                <div class="col l-2 m-2 c-4 content-item">
                    <img src="../../img/events/cgv-crm-team-chi-1-duoc-2-240x201_1.jpg" alt="">
                </div>
                <div class="col l-4 m-4 c-8 content-item">
                    <div class="product-title">CINESV COMBO</div>
                    <div class="product-desc">
                        1 bắp lớn + 2 nước lớn. Nhận trong ngày xem phim <br>
                        * Miễn phí đổi vị bắp Caramel * <br>
                        **Đổi vị phô mai phụ thu tiền**
                    </div>
                    <div class="product-num-price">
                        <div class="product-price">
                            <span>Giá:</span>
                            <span class="price">99.000 &nbsp;đ</span>
                        </div>
                        <div class="product-num">
                            <input onclick="var result4 = document.getElementById('quantity4'); var qty4 = result4.value; 
                            if( !isNaN(qty4) && qty4 > 0 ) result4.value--;return false;" type='button' value='-' />
                            <input style="text-align: center; width: 50px;" id='quantity4' min='0' name='quantity4' type='text' value='0' />
                            <input onclick="var result4 = document.getElementById('quantity4'); var qty4 = result4.value; if( !isNaN(qty4)) result4.value++;return false;" type='button' value='+' />
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-bill">
                <div class="col l-2 m-2 c-12">
                    <img src="../../img/events/cgv-crm-team-chi-1-duoc-2-240x201_1.jpg" alt="" class="bill-film img">
                    
                    
                </div>
                <div class="col l-6 m-6 c-8">
                    <div class="bill-film-info">
                        <span class="bill-film-header">Kong vs Godzilla</span>
                        <table>
                            <tbody>
                                <tr>
                                    <th>Rạp:</th>
                                    <td>CGV Blabla</td>
                                </tr>
                                <tr>
                                    <th>Suất chiếu:</th>
                                    <td>14:15, 17/12/2021</td>
                                </tr>
                                <tr>
                                    <th>Phòng:</th>
                                    <td>Cinema 6</td>
                                </tr>
                                <tr>
                                    <th>Ghế:</th>
                                    <td>D10</td>
                                </tr>    
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col l-4 m-4 c-4">
                    <div class="bill-film-info">
                        <div class="bill-price">
                            <div class="bill-film-header">Hóa đơn thanh toán</div>
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Phim:</th>
                                        <td>100.000 &nbsp;đ</td>
                                    </tr>
                                    <tr>
                                        <th>Combo:</th>
                                        <td>129.000 &nbsp;đ</td>
                                    </tr>
                                    <tr>
                                        <th>Tổng:</th>
                                        <td>229.000 &nbsp;đ</td>
                                    </tr>
                                     
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <button style="width: 120px;" class="btn primary-btn bill-btn">Thanh Toán</button>
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
                <div class="footer-logo" style="background-image: url(/assets/img/Slider/common_sprite_area.png);"></div>
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
  </div>

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

    
    
</script>
<!-- 
<script src="../../js/userInfo.js"></script> -->
</body>
</html>