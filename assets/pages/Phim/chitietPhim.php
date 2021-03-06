<?php
require_once('/xampp/htdocs/WebCinema/db/dbhelper.php');
$masc='';
if (isset($_GET['masc'])) {
	$masc   = $_GET['masc'];
	$sql    = "SELECT p.MAPHIM, p.TENPHIM, p.THOILUONG, p.NGONNGU, p.THELOAI, p.DAODIEN, p.DIENVIEN, p.MOTA, p.DOTUOI, p.TRAILER, p.POSTER, DATE_FORMAT(p.KHOICHIEU,'%d-%m-%Y') 
                 from phim p join suatchieu sc on p.MAPHIM=sc.MAPHIM JOIN rapchieu rc 
                ON rc.MARAP=sc.MARAP where masc='$masc'";
	$result = executeSingleResult($sql);
	
	if ($result != null) {
		$tenphim=  $result[1];
        $thoiluong= $result[2];
		$ngonngu=$result[3];
		$theloai=$result[4];
		$daodien=$result[5];
		$dienvien=$result[6];
		$mota=$result[7];
		$dotuoi=$result[8];
		$trailer=$result[9];
		$poster=$result[10];
		$ngaychieu=$result[11];
	}
}

?>

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
    <link rel="stylesheet" href="../../css/grid.css">
    <link rel="stylesheet" href="../../css/base.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    <link rel="stylesheet" href="./chitietphim.css">
    <link rel="stylesheet" href="../../css/datGhe.css">
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
                                    <a href="../Phim/phimDangChieu.php" class="subnav-link">Phim ??ang chi???u</a>
                                </li>
                                <li class="subnav-item">
                                    <a href="../Phim/phimSapChieu.php" class="subnav-link">Phim s???p chi???u</a>
                                </li>
                            </ul>
                        
                    </li>
                    <li class="navbar-item noHover">
                        <a href="../tintuc/tinTuc.php" class="navbar-link">R???p chi???u</a>
                            
                    </li>
                    <li class="navbar-item noHover">
                        <a href="../tintuc/tinTuc.php" class="navbar-link">Tin t???c</a>
                            
                    </li>
                  
                </ul>
                
            </nav>
            <div>
            <div class="header__user" id="block_info_user">
                <div class="header__user-info">
                    <i class="header__user-icon fas fa-user-circle"></i>
                    <span id="usernameCineSV" class="header__user-name"></span>
                </div>
                <div class="header__user-options">
                    <ul class="user-options-list">
                        <li class="user-options-item">
                            <a href="../../users/userInfo.php" class="user-option-link">T??i kho???n</a>
                        </li>
                        <!-- <li class="user-options-item">
                            <a href="" class="user-option-link">C??i ?????t</a>
                        </li> -->
                        <li class="user-options-item">
                            <a href="../../../logout.php" class="user-option-link">????ng xu???t</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="login" id="block_login_register">
                <ul class="login-list">
                    <li class="login-item login-item-sign-in">
                        <label class="login-link js-login-form">????ng nh???p</label>
                    </li>
                    <li class="login-item login-item-register">
                        <label class="login-link js-register-form">????ng k??</label>
                    </li>
                </ul>
            </div>
            </div>
        </header>
        
        <div class="content">
            <div class="content__header">
                <div class="grid content__header-nav">
                    <div class="home__logo">
                        <a href="/index.html" class="home__logo-link"><i class="fas fa-home home-icon"></i></a>
                    </div>
                    <i class="fas fa-angle-right angle-right-icon"></i>
                    <div class="content__header-title">Phim</div>
                    <i class="fas fa-angle-right angle-right-icon"></i>
                    <div class="content__header-title"><?=$tenphim?></div>

                </div>
            </div>
            
            <div class="grid wide">
                <div class="grid__row content-film">
                    <div class="col l-3 m-3 c-12">
                        <img src="../../../admin/img/phim/<?=$poster?>" alt="" class="film-img">
                    </div>
                    <div class="col l-9 m-9 c-12">
                        <div class="film-about-item"> 
                            <h1 class="film-name"><?=$tenphim?></h1>
                            <div class="film-info">
                                <span class="film-title">?????o di???n:</span>
                                <span class="film-value">&nbsp; <?=$daodien?></span>
                            </div>
                            <div class="film-info">
                                <span class="film-title">Di???n vi??n:</span>
                                <span class="film-value">&nbsp; <?=$dienvien?> </span>
                            </div>
                            <div class="film-info">
                                <span class="film-title">Th??? lo???i:</span>
                                <span class="film-value">&nbsp; <?=$theloai?></span>
                            </div>
                            <div class="film-info">
                                <span class="film-title">Kh???i chi???u:</span>
                                <span class="film-value">&nbsp; <?=$ngaychieu?></span>
                            </div>
                            <div class="film-info">
                                <span class="film-title">Rated:</span>
                                <span class="film-value">&nbsp; PHIM C???M KH??N GI??? D?????I <?=$dotuoi?> TU???I</span>
                            </div>
                            
                        </div>
                        <div class="">
                            <button class="btn js-btn-book-tickets film-btn hidden">Mua v??</button>
                        </div>
                    </div>
                </div>
                <p class="film-about">
                    <?=$mota?>
                </p>

                <div class="film-trailer">
                    <iframe width="100%" height="500" src="<?=$trailer?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    
        
        <footer class="footer">
            <div class="grid">
                <div class="grid__row-home footer-row">
                    <div class="grid__column-fourth-home">
                        <h3 class="footer-title">CineSV</h3>
                        <ul class="footer-list">
                            <a href="" class="footer-link">Gi???i thi???u</a>
                            <a href="" class="footer-link">Ti???n ??ch Online</a>
                            <a href="" class="footer-link">Th??? qu?? t???ng</a>
                            <a href="" class="footer-link">Tuy???n d???ng</a>
                            <a href="" class="footer-link">Li??n h??? qu???ng c??o</a>
                        </ul>
                    </div>

                    <div class="grid__column-fourth-home">
                        <h3 class="footer-title">??i???u kho???n s??? d???ng</h3>
                        <ul class="footer-list">
                            <a href="" class="footer-link">??i???u kho???n chung</a>
                            <a href="" class="footer-link">??i???u kho???n giao d???ch</a>
                            <a href="" class="footer-link">Ch??nh s??ch thanh to??n</a>
                            <a href="" class="footer-link">Ch??nh s??ch b???o m???t</a>
                            <a href="" class="footer-link">C??u h???i th?????ng g???p</a>
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
                        <h3 class="footer-title">Ch??m s??c kh??ch h??ng</h3>
                        <ul class="footer-list">
                            <h4 href="" class="footer-link">Hotline: 1900 6017</h4>
                            <h4 href="" class="footer-link">Gi??? l??m vi???c: 8:00 - 22:00 (T???t c??? c??c ng??y bao g???m c??? L??? T???t)</h4>
                            <h4 href="" class="footer-link">Email h??? tr???: hoidap@cinesv.vn</h4>
                        </ul>
                    </div>
                </div>

                <div class="footer__about">
                    <div class="footer-logo" style="background-image: url(/assets/img/Slider/common_sprite_area.png);"></div>
                    <div class="footer__contact">
                    <h3 class="footer-name">C??NG TY TNHH MTV CineSV</h3>
                        <h4 class="footer-sub">Gi???y CN??KDN: 0303675393, ????ng k?? l???n ?????u ng??y 31/7/2008, ????ng k?? thay ?????i l???n th??? 5 ng??y 14/10/2015, c???p b???i S??? KH??T th??nh ph??? H??? Ch?? Minh.</h4>
                        <h4 class="footer-sub">?????a Ch???: Khu ph??? 6, Ph?????ng Linh Trung, Th??nh Ph??? Th??? ?????c, TPHCM.</h4>
                        <h4 class="footer-sub">COPYRIGHT 2021 CINESV. All RIGHTS RESERVED</h4>
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
                            <h3 class="auth-form__heading">????ng nh???p</h3>
                            <span class="auth-form__switch--btn js-register">????ng k??</span>   
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" required placeholder="S??? ??i???n tho???i" name="username" id="username">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" required placeholder="M???t kh???u" name="password" id="password">
                        </div>
                        <div>
                            <p id="notificationLogin"></p>
                        </div>
                    </div>
                    <div class="auth-form__controls">
                        <!-- <input type="submit" value="Login" name="Login"> -->
                        <button class="btn btn--primary" onclick="Login()">????NG NH???P</button>
                    </div>
                </div>
            </div>   
        </div>
        
        <div class="modal__body js-modal__body--register">
            <!-- Auth-form register -->

            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <span class="auth-form__switch--btn js-login">????ng nh???p</span>
                        <h3 class="auth-form__heading">????ng k??</h3>        
                    </div>

                    <div class="auth-form__form">
                        <form>
                            <div class="auth-form__group">
                                <input type="text" class="auth-form__input" required placeholder="H??? v?? t??n" id="reg_fullname">
                            </div>
                            <div class="auth-form__group">
                                <input type="email" class="auth-form__input" required placeholder="Email" id="reg_email">
                            </div>
                            <div class="auth-form__group">
                                <input type="tel" class="auth-form__input" required placeholder="S??? ??i???n tho???i" id="reg_telephone">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" required placeholder="M???t kh???u" id="reg_password">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" required placeholder="Nh???p l???i m???t kh???u" id="reg_password_confirm">
                            </div>
                            <div>
                                <p id="notificationRegister"></p>
                            </div>
                        </form>
                        <div class="auth-form__controls">
                            <button class="btn btn--primary" onclick="Register()">????NG K??</button>
                        </div>
                    </div>

                    <div class="auth-form__aside">
                        <p class="auth-form__policy-text">B???ng vi???c ????ng k??, b???n ???? ?????ng ?? v???i LTT-Shop v???
                            <span href="" class="auth-form__text-link">??i???u kho???n d???ch v???</span> &
                            <span href="" class="auth-form__text-link">Ch??nh s??ch b???o m???t</span>
                        </p>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    

    
    <!-- MODAL TiCKET -->
    <!-- <div class="modal-ticket js-modal-ticket">
        <div class="modal-content">
          <i class="fa fa-times modal-close js-modal-close"></i>
          <h1 class="premiere-title">CH???N SU???T CHI???U</h1>
          <form action="" class="premiere-form">
          
              <div class="form-item">
                  <label for="city">Th??nh Ph???:</label>
                  <select name="city" id="city" class="form-control">
                      <option value="">H??? Ch?? Minh</option>
                      <option value="">H?? N???i</option>
                      <option value="">H???i Ph??ng</option>
                      <option value="">???? n???ng</option>
                  </select>
              </div>
              <div class="form-item">
                  <label for="theater">Danh S??ch R???p:</label>
                  <select name="theater" id="theater" class="form-control">
                      <option class="" disabled selected>Ch???n R???p</option>
                      
                  </select>
              </div>
              <div class="form-item">
                  <label for="premiere">Xu???t Chi???u:</label>
                  <select name="premiere" id="premiere" class="form-control">
                      
                  </select>
              </div>
              <div class="btn btn-primary premiere-sub-btn" style="width: 30%; border-radius: 5px; font-weight: 600; text-align: center; padding-top: 10px;">????ng k??</div>
          </form>

          <div class="noPremiere">Xin L???i Kh??ng C?? Su???t Chi???u!</div>

        </div>
    </div>

    <div class="modal-ticket js-datghe-modal">
        <div class="modal-content">
          <i class="fa fa-times modal-close js-modal-close"></i>


          
          <div class="film-infomation film-info">
                <div>Phim: <span>Bo Gia</span></div>
                <div>Suat chieu: <span>2020-05-12 19:00:00</span></div>
                <div>Rap: <span>CGV Parkson ?????ng Kh???i</span></div>
                <div>Phong: <span>1</span></div>
                <div>Ghe: <span></span></div>
          </div>
          
          <div class="modal-content-main">
              <span class="screen">SCREEN</span>
              <div class="grid seat-select">
                <div class="seat-row">
                      
                    <div class="seat seat-standard empty"></div>
                    <div class="seat seat-standard empty">A10</div>
                    <div class="seat seat-standard empty">A9</div>
                    <div class="seat seat-standard empty">A8</div>
                    <div class="seat seat-standard empty">A7</div>
                    <div class="seat seat-standard empty">A6</div>
                    <div class="seat seat-standard empty">A5</div>
                    <div class="seat seat-standard empty">A4</div>
                    <div class="seat seat-standard empty">A3</div>
                    <div class="seat seat-standard empty">A2</div>
                    <div class="seat">
                        <i class="fas fa-angle-double-right door-arrow-icon"></i>
                    </div>
                    <div class="seat" style="font-size: 1.2rem; font-weight: 600; line-height: 3.4;">Exit</div>
                </div>
                  <div class="seat-row">
                      
                      <div class="seat seat-standard empty"></div>
                      <div class="seat seat-standard active seat-unavailable disabled">A10</div>
                      <div class="seat seat-standard active">A9</div>
                      <div class="seat seat-standard active">A8</div>
                      <div class="seat seat-standard active">A7</div>
                      <div class="seat seat-standard active">A6</div>
                      <div class="seat seat-standard active">A5</div>
                      <div class="seat seat-standard active">A4</div>
                      <div class="seat seat-standard active">A3</div>
                      <div class="seat seat-standard active">A2</div>
                      <div class="seat seat-standard active">A1</div>
                      <div class="seat seat-standard empty"></div>
                  </div>
                  <div class="seat-row">
                    
                    <div class="seat seat-standard empty"></div>
                    <div class="seat seat-standard active">B10</div>
                    <div class="seat seat-standard active">B9</div>
                    <div class="seat seat-standard active">B8</div>
                    <div class="seat seat-standard active">B7</div>
                    <div class="seat seat-standard active">B6</div>
                    <div class="seat seat-standard active">B5</div>
                    <div class="seat seat-standard active">B4</div>
                    <div class="seat seat-standard active">B3</div>
                    <div class="seat seat-standard active">B2</div>
                    <div class="seat seat-standard active">B1</div>
                    <div class="seat seat-standard empty"></div>
                </div>
                <div class="seat-row">
                    
                    <div class="seat seat-standard empty"></div>
                    <div class="seat seat-standard active">C10</div>
                    <div class="seat seat-standard active">C9</div>
                    <div class="seat seat-standard active">C8</div>
                    <div class="seat seat-standard active">C7</div>
                    <div class="seat seat-standard active">C6</div>
                    <div class="seat seat-standard active">C5</div>
                    <div class="seat seat-standard active">C4</div>
                    <div class="seat seat-standard active">C3</div>
                    <div class="seat seat-standard active">C2</div>
                    <div class="seat seat-standard active">C1</div>
                    <div class="seat seat-standard empty"></div>
                </div>
                <div class="seat-row">
                    
                    <div class="seat seat-standard empty"></div>
                    <div class="seat seat-standard active">D10</div>
                    <div class="seat seat-standard active">D9</div>
                    <div class="seat seat-standard active">D8</div>
                    <div class="seat seat-standard active">D7</div>
                    <div class="seat seat-standard active">D6</div>
                    <div class="seat seat-standard active">D5</div>
                    <div class="seat seat-standard active">D4</div>
                    <div class="seat seat-standard active">D3</div>
                    <div class="seat seat-standard active">D2</div>
                    <div class="seat seat-standard active">D1</div>
                    <div class="seat seat-standard empty"></div>
                </div>
                <div class="seat-row">
                    
                    <div class="seat seat-standard empty"></div>
                    <div class="seat seat-standard active">E10</div>
                    <div class="seat seat-standard active">E9</div>
                    <div class="seat seat-standard active">E8</div>
                    <div class="seat seat-standard active">E7</div>
                    <div class="seat seat-standard active">E6</div>
                    <div class="seat seat-standard active">E5</div>
                    <div class="seat seat-standard active">E4</div>
                    <div class="seat seat-standard active">E3</div>
                    <div class="seat seat-standard active">E2</div>
                    <div class="seat seat-standard active">E1</div>
                    <div class="seat seat-standard empty"></div>
                </div>
                <div class="seat-row">
                    
                    <div class="seat seat-standard empty"></div>
                    <div class="seat seat-standard active">F10</div>
                    <div class="seat seat-standard active">F9</div>
                    <div class="seat seat-standard active">F8</div>
                    <div class="seat seat-standard active">F7</div>
                    <div class="seat seat-standard active">F6</div>
                    <div class="seat seat-standard active">F5</div>
                    <div class="seat seat-standard active">F4</div>
                    <div class="seat seat-standard active">F3</div>
                    <div class="seat seat-standard active">F2</div>
                    <div class="seat seat-standard active">F1</div>
                    <div class="seat seat-standard empty"></div>
                </div>
                <div class="seat-row">
                    
                    <div class="seat seat-standard empty"></div>
                    <div class="seat seat-standard active">G10</div>
                    <div class="seat seat-standard active">G9</div>
                    <div class="seat seat-standard active">G8</div>
                    <div class="seat seat-standard active">G7</div>
                    <div class="seat seat-standard active">G6</div>
                    <div class="seat seat-standard active">G5</div>
                    <div class="seat seat-standard active">G4</div>
                    <div class="seat seat-standard active">G3</div>
                    <div class="seat seat-standard active">G2</div>
                    <div class="seat seat-standard active">G1</div>
                    <div class="seat seat-standard empty"></div>
                </div>
                <div class="seat-row">
                   
                    <div class="seat">
                        <i class="fas fa-angle-double-up door-arrow-icon"></i>
                    </div>
                    <div class="seat seat-standard active">H10</div>
                    <div class="seat seat-standard active">H9</div>
                    <div class="seat seat-standard active">H8</div>
                    <div class="seat seat-standard active">H7</div>
                    <div class="seat seat-standard active">H6</div>
                    <div class="seat seat-standard active">H5</div>
                    <div class="seat seat-standard active">H4</div>
                    <div class="seat seat-standard active">H3</div>
                    <div class="seat seat-standard active">H2</div>
                    <div class="seat seat-standard active">H1</div>
                    <div class="seat seat-standard empty"></div>
                </div>
                <div class="seat-row">
                    
                    
                    <div class="seat" style="font-size: 1.2rem;font-weight: 600;">L???i v??o</div>
                    <div class="seat active seat-couple">I10</div>
                    <div class="seat active seat-couple">I9</div>
                    <div class="seat active seat-couple">I8</div>
                    <div class="seat active seat-couple">I7</div>
                    <div class="seat active seat-couple">I6</div>
                    <div class="seat active seat-couple">I5</div>
                    <div class="seat active seat-couple">I4</div>
                    <div class="seat active seat-couple">I3</div>
                    <div class="seat active seat-couple">I2</div>
                    <div class="seat active seat-couple">I1</div>
                    <div class="seat seat-standard empty"></div>
                </div>
          </div>
          
          <input type="submit" class="btn primary-btn" value="?????t v??" style="float: right; width: 200px; margin-top: 24px;"></input>
        </div>

    </div> -->


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
        // H??m m??? gogin Form
        function openLoginForm() {
            modal.classList.add('open__modal');
            modalBodyRegister.classList.remove('modal-body__open');
            modalBodyLogin.classList.add('modal-body__open');
        }
        // H??m m??? register Form
        function openRegisterForm() {
            modal.classList.add('open__modal');
            modalBodyLogin.classList.remove('modal-body__open');
            modalBodyRegister.classList.add('modal-body__open');
        }
        // H??m ???n modal 
        function closeModal() {
            modal.classList.remove('open__modal');
        }
        // H??m chuy???n form login-regisrer
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
        //????ng modal
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
            var url = "../../../login.php";
            var param = "username=" + username.value + "&password=" + password.value;
            xmlHttp.open("POST", url, true);
            xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xmlHttp.send(param);
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    if (xmlHttp.responseText == "ok") {
                        location.replace("./phimDangChieu.php");
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
                obj.innerHTML = "M???t kh???u kh??ng kh???p";
                // location.replace("https://www.fb.com");
            } else {
                var url = "../../../register.php";
                var param = "fullname=" + reg_fullname.value + "&email=" + reg_email.value + "&telephone=" + reg_telephone.value + "&password=" + reg_password.value;
                xmlHttp.open("POST", url, true);
                xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xmlHttp.send(param);
                xmlHttp.onreadystatechange = function() {
                    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                        if (xmlHttp.responseText == "ok") {                        
                            window.alert("????ng k?? th??nh c??ng");
                            location.replace("./phimDangChieu.php");
                        } else {
                            obj.innerHTML = xmlHttp.responseText;
                        }
                    }
                }
            }  
        }
        
    </script>
    <script src="/assets/js/modalTickets.js"></script>
</body>

</html>