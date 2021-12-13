
<?php
require "../../../../config.php";
// Không hiện warming và lỗi của database
error_reporting(0);

// Kiểm tra xem người dùng có nhấn nút đăng nhập k?
if (isset($_POST['city'])) {

    // Lấy thông tin đăng nhập
    $diachi = ($_POST['city']);

    // Kết nối tới server
    $connect = new mysqli($server, $username_db, $password_db, $dbname);

        $sqlcmd = "Select TENrap from rap where (diachi=? )";
        $stmt = $connect->prepare($sqlcmd);
        $stmt->bind_param("ss", $diachi);
        $stmt->execute();
        $stmt->bind_result($fullName, $position);
        $stmt->fetch();

         echo "Thông tin tài khoản mật khẩu không chính xác";
        

        // Đóng  kết nối
        $connect->close();
    
}