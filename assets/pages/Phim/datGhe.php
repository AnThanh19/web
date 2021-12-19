<?php
require_once('/xampp/htdocs/WebCinema/db/dbhelper.php');
$masc='';
if (isset($_GET['masc'])) {
    $masc = $_GET['masc'];
}
?>
<?php
require_once('/xampp/htdocs/WebCinema/db/dbhelper.php');
    $sdt=$_COOKIE['fullName'];
	$sql          = "SELECT * FROM thanhvien where sdt='$sdt'";
	$result = executeSingleResult($sql);
	if ($result != null) {
        $matv=  $result[0];
		$tentv = $result[1];
        $gioitinh=  $result[2];
		$ngaysinh=$result[3];
		$diachi=$result[4];
		$cccd=$result[6];
		$ngaydk=$result[7];
		$diemtichluy=$result[8];
		$loaitk=$result[9];
		$email=$result[10];
	}
    $tim ="SELECT * FROM `hoadon` WHERE MATV=$matv and MANV=$masc";
    $kq = executeSingleResult($tim);
    if ($kq==null)
    {
        $sql1="INSERT INTO `hoadon`(`SOHD`, `MATV`, `MAKM`, `MANV`, `NGAYHD`, `TONG`) 
        VALUES ('','$matv','','$masc',now(),'')";
        execute($sql1);

        $sql2= "SELECT * FROM hoadon WHERE hoadon.MATV='$matv' AND hoadon.MANV='$masc'";
        $result2 = executeSingleResult($sql2);
        $sohd= $result2[0];
    }
    else
        $sohd=$kq[0];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/header__logo.png">
    <title>CineSV</title>
    <link rel="stylesheet" href="https://pagecdn.io/lib/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../../fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="../../css/grid.css">
    <link rel="stylesheet" href="../../css/base.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    <link rel="stylesheet" href="./datVe.css">
    <link rel="stylesheet" href="../../css/datGhe.css">
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    
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
                                    <a href="./phimDangChieu.php" class="subnav-link">Phim đang chiếu</a>
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
            <div class="header__user" id="block_info_user">
                <div class="header__user-info">
                    <i class="header__user-icon fas fa-user-circle"></i>
                    <span id="usernameCineSV" class="header__user-name"></span>
                </div>
                <div class="header__user-options">
                    <ul class="user-options-list">
                        <li class="user-options-item">
                            <a href="../../users/userInfo.php" class="user-option-link">Tài khoản</a>
                        </li>
                        <!-- <li class="user-options-item">
                            <a href="" class="user-option-link">Cài đặt</a>
                        </li> -->
                        <li class="user-options-item">
                            <a href="../../../logout.php" class="user-option-link">Đăng xuất</a>
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
  
  
        <!-- CONTENT -->
        <div class="content">
            <div class="grid wide">
                <h1 class="content-title">Đặt Vé</h1>
                <input hidden type="text" id="masc" value="<?=$masc?>">
                <input hidden type="text" id="sohd" value="<?=$sohd?>">
                <input hidden type="text" id="matv" value="<?=$matv?>">
            
                <div>
                    
                    <div class="modal-content dat-ghe">
                        <!-- <div class="btn btn-primary back-btn" style="width: 15%; border-radius: 5px;font-size: 1.6rem; font-weight: 600; text-align: center; padding-top: 4px; float: right; margin-bottom: 200px;">
                            <i class="fas fa-arrow-circle-left" style="margin-right: 4px;"></i>
                            Trở lại
                        </div> -->
                        

                        <div class="modal-content-main">
                            
                            <div class="grid seat-select">
                            <span class="screen">SCREEN</span>
                                    <div class="seat">
                                        <i class="fas fa-angle-double-right door-arrow-icon"></i>
                                    </div>
                                    <div class="seat" style="font-size: 1.2rem; font-weight: 600; line-height: 3.4;">Exit</div>
                                    
                                    <?php
                                        $sql          = "SELECT phong FROM suatchieu WHERE masc='$masc'";
                                        $phong = executeSingleResult($sql);

                                        $sghe          = "SELECT * from ghe WHERE phong='$phong[0]' and maghe!='0' ORDER by stt";
                                        $result = executeResult($sghe);

                                        $sdat= "SELECT DISTINCT suatchieu.MAGHE, ghe.stt FROM suatchieu JOIN ghe ON suatchieu.MAGHE=ghe.MAGHE  
                                                WHERE suat=$masc ORDER BY ghe.stt";
                                        $re = executeResult($sdat);

                                foreach ($result as $i) 
                                {
                                    if ($re !=null)
                                    {
                                        foreach ($re as $j) 
                                        {
                                            if ($j[1] == $i[4])
                                            {
                                                {
                                                    if (($i[4]-1) %10 == 0 )
                                                    {
                                                    
                                                        if (($i[4]<81))
                                                        {
                                                            echo "</div>
                                                            <div class='seat-row'>";
                                                            if (($i[4]==71))
                                                            { 
                                                                echo "<div class='seat'>
                                                                                <i class='fas fa-angle-double-up door-arrow-icon'></i>
                                                                            </div>
                                                                            <div class='seat seat-standard active seat-unavailable disabled'>$i[0]</div>";
                                                                break;
                                                            }
                                                            else
                                                            {
                                                                echo" <div class='seat seat-standard empty'></div>
                                                                <div class='seat seat-standard active seat-unavailable disabled'>$i[0]</div>";
                                                                break;
                                                            }
                                                        }
                                                        else
                                                        {
                                                            echo "</div>
                                                                <div class='seat-row'>
                                                                <div class='seat' style='font-size: 1.2rem;font-weight: 600;'>Lối vào</div>
                                                            <div class='seat active seat-couple seat-unavailable disabled'>$i[0]</div>";
                                                            break;
                                                        }
                                                       
                                                    }
                                                    else
                                                        if (($i[4]<81))
                                                        {
                                                            echo "<div class='seat seat-standard active seat-unavailable disabled'>$i[0]</div>";
                                                            break;
                                                        }
                                                        else 
                                                        {
                                                            echo "<div class='seat active seat-couple seat-unavailable disabled'>$i[0]</div>";
                                                            break;
                                                        }
                                                    }
                                            }
                                            else 
                                            {
                                                if ($j[1] >= $i[4])
                                                {
                                                    if (($i[4]-1) %10 == 0 )
                                                    {
                                                    
                                                        if (($i[4]<81))
                                                        {
                                                            echo "</div>
                                                            <div class='seat-row'>";
                                                            if (($i[4]==71))
                                                            { 
                                                                echo "<div class='seat'>
                                                                                <i class='fas fa-angle-double-up door-arrow-icon'></i>
                                                                            </div>
                                                                            <div class='seat seat-standard active'>$i[0]</div>";
                                                                break;
                                                            }
                                                            else
                                                            {
                                                                echo" <div class='seat seat-standard empty'></div>
                                                                <div class='seat seat-standard active'>$i[0]</div>";
                                                                break;
                                                            }
                                                        }
                                                        else
                                                        {
                                                            echo "</div>
                                                                <div class='seat-row'>
                                                                <div class='seat' style='font-size: 1.2rem;font-weight: 600;'>Lối vào</div>
                                                            <div class='seat active seat-couple'>$i[0]</div>";
                                                            break;
                                                        }
                                                    
                                                    }
                                                    else
                                                        if (($i[4]<81))
                                                        {
                                                            echo "<div class='seat seat-standard active'>$i[0]</div>";
                                                            break;
                                                        }
                                                        else 
                                                        {
                                                            echo "<div class='seat active seat-couple'>$i[0]</div>";
                                                            break;
                                                        }
                                                }
                                            }
                                        }
                                        if ($i[4]>$j[1])
                                        {
                                            if (($i[4]-1) %10 == 0 )
                                            {
                                            
                                                if (($i[4]<81))
                                                {
                                                    echo "</div>
                                                    <div class='seat-row'>";
                                                    if (($i[4]==71))
                                                    { 
                                                        echo "<div class='seat'>
                                                                        <i class='fas fa-angle-double-up door-arrow-icon'></i>
                                                                    </div>
                                                                    <div class='seat seat-standard active'>$i[0]</div>";
                                                        
                                                    }
                                                    else
                                                    {
                                                        echo" <div class='seat seat-standard empty'></div>
                                                        <div class='seat seat-standard active'>$i[0]</div>";
                                                       
                                                    }
                                                }
                                                else
                                                {
                                                    echo "</div>
                                                        <div class='seat-row'>
                                                        <div class='seat' style='font-size: 1.2rem;font-weight: 600;'>Lối vào</div>
                                                    <div class='seat active seat-couple'>$i[0]</div>";
                                                    
                                                }
                                            
                                            }
                                            else
                                            {
                                                if (($i[4]<81))
                                                {
                                                    echo "<div class='seat seat-standard active'>$i[0]</div>";
                                                    
                                                }
                                                else 
                                                {
                                                    echo "<div class='seat active seat-couple'>$i[0]</div>";
                                                    
                                                }
                                            }

                                            
                                        }
                                    }
                                    else
                                    {
                                        if (($i[4]-1) %10 == 0 )
                                        {
                                            if (($i[4]<81))
                                            {
                                                echo "</div>
                                                        <div class='seat-row'>";
                                                        if (($i[4]==71))
                                                        { 
                                                            echo "<div class='seat'>
                                                                            <i class='fas fa-angle-double-up door-arrow-icon'></i>
                                                                        </div>
                                                                        <div class='seat seat-standard active'>$i[0]</div>";
                                                            
                                                        }
                                                        else
                                                        {
                                                            echo" <div class='seat seat-standard empty'></div>
                                                            <div class='seat seat-standard active'>$i[0]</div>";
                                                            
                                                        }
                                                    }
                                                    else
                                                    {
                                                        echo "</div>
                                                            <div class='seat-row'>
                                                            <div class='seat' style='font-size: 1.2rem;font-weight: 600;'>Lối vào</div>
                                                        <div class='seat active seat-couple'>$i[0]</div>";
                                                        
                                                    }
                                                
                                                }
                                                else
                                                    if (($i[4]<81))
                                                    {
                                                        echo "<div class='seat seat-standard active'>$i[0]</div>";
                                                        
                                                    }
                                                    else 
                                                    {
                                                        echo "<div class='seat active seat-couple'>$i[0]</div>";
                                                        
                                                    }
                                    }
                                }
                                        // echo "</div>";
                                    ?>
                                
                        </div>
                        <button  type="submit" class="btn primary-btn js-datghe-btn" style="float: right; width: 200px; margin-top: 24px;">Tiếp Tục</button>
                        </div>
            
                        <div class="note" style="margin-top: 80px;">
                            <ul style="list-style: none;">
                            <li class="note-list">
                                <div class="note-item" style="background-color: #505050;"> </div>
                                <span>Đã đặt</span>
                            </li> 
                            <li class="note-list">
                                <div class="note-item" style="border: 1px solid #01c73c;"></div>
                                Ghế trống
                            </li> 
                            <li class="note-list">
                                <div class="note-item" style="background-color: #a02b8c;"></div>
                                Ghế đôi
                            </li>
                            </ul>
                        </div>
                </div>
            </div>
            
        </div>
    
        </div>
 
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
                            <a href="" class="footer-link">Liên hệ quảng cáo</a>
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
        
var array = new Array();
var datGheBtn = document.querySelector('.js-datghe-btn');

datGheBtn.addEventListener('click', function(){
    for(const seatSelect of seatSelects){
        if(seatSelect.classList.contains('checked')){
            array.push(seatSelect.innerHTML);
        }
    }

    var seatCoupleSelects = document.querySelectorAll('.seat.seat-couple');
    for(const seatCoupleSelect of seatCoupleSelects){
        if(seatCoupleSelect.classList.contains('checked')){
            array.push(seatCoupleSelect.innerHTML);
        }
    }

    for (var i = 0; i < array.length; i++){
            var xmlHttp = new XMLHttpRequest();
            var obj = document.querySelector('.js-datghe-btn');
            var url = "Luu.php";
            var param = "ghe=" + array[i]+ "&masc=" + masc.value+ "&sohd=" + sohd.value+ "&matv=" + matv.value;
            xmlHttp.open("POST", url, true);
            xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xmlHttp.send(param);
    }
    var xmlHttp1 = new XMLHttpRequest();
    var url1 = "update.php";
    var param1 =  "masc=" + masc.value+ "&sohd=" + sohd.value+ "&matv=" + matv.value;
    xmlHttp1.open("POST", url1, true);
    xmlHttp1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlHttp1.send(param1);
    location.replace("./thanhToan.php");
    
})

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
        function Phim() {
            var xmlHttp = new XMLHttpRequest();
            var obj = document.getElementById("time");
            var url = "TimTime.php";
            var param = "marap=" + marap.value + "&maphim=" + maphim.value;
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

        function Rap() {
            var xmlHttp = new XMLHttpRequest();
            var obj = document.getElementById("targetDiv");
            var url = "Timrap.php";
            var param = "diachi=" + diachi.value+ "&maphim=" + maphim.value;
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

        function Login() {
            var xmlHttp = new XMLHttpRequest();
            var obj = document.getElementById("notificationLogin");
            var url = "../../login.php";
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
                var url = "../../register.php";
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
        <script src="../../js/modalTickets.js"></script>
    </div>
</body>
</html>