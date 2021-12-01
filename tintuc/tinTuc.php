<?php
require('/xampp/htdocs/WebCinema/assets/all/page/header.php');
require_once('/xampp/htdocs/WebCinema/db/dbhelper.php');
?>
<head>  
    <link rel="stylesheet" href="../../pages/tintuc/tintuc.css">
</head>        
        <div class="content">
            <div class="grid wide">
                <div class="grid__row">
                    
                    <?php
                        $sql          = "select * from khuyenmai ";
                        $result = executeResult($sql);
                        foreach ($result as $row) 
                        {
                                    echo"<div class='col l-4 m-4 c-6'>   
                                            <ul class='content-event-list'>
                                                <li class='content-event-item'>
                                                    <a href='' class='content-event-link'>
                                                        <img src='../../../admin/img/khuyenmai/$row[4]' style='max-width: 150px;max-height: 195px; '  class='event-link-img'></img>
                                                        <h2 class='event-link-title'>KHUYẾN MÃI GIẢM TỚI $row[3] %</h2>
                                                        <p class='event-link-info'>Khi mua N95 Combo giá 139k bao gồm 1 bắp Caramel 44oz, 2 Coke 32oz, và 1 snack, khách hàng sẽ được tặng 1 lần refill nước miễn phí và 1 khẩu trang kháng khuẩn cao cấp 3P-N95.</p>
                                                    </a>
                                                </li>
                                            </ul> 
                                        </div> ";
                        }
                        ?>
                </div>
            </div>
        </div>
    
        <?php
        require "/xampp/htdocs/WebCinema/assets/all/page/footer.php"
    ?>
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
</body>

</html>