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
                        <h4 class="footer-sub">COPYRIGHT 2021 CJ CINESV. All RIGHTS RESERVED</h4>
                    </div>

                </div>
            </div>
        </footer>
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
</footer>