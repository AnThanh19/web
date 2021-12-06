<?php
require "./config.php";
if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['password'])) {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $password = md5($_POST['password']);
    if (!checkTelephone($telephone)) {
        echo "Số điện thoại nhập sai";
    } else {
        // Kết nối tới server
        $connect = new mysqli($server, $username_db, $password_db, $dbname);
        $connect->autocommit(false);

        // Thêm thông tin thành viên vào bảng THANHVIEN
        $sqlcmd = "INSERT INTO THANHVIEN(`TENTV`,`SDT`,`EMAIL`) VALUES(?,?,?)";
        $stmt = $connect->prepare($sqlcmd);
        $stmt->bind_param('sss', $fullname, $telephone, $email);

        // Kiểm tra thực thi câu lệnh thêm thông tin vào bảng THANHVIEN
        if (!$stmt->execute()) {
            $connect->rollback();
            echo "Số điện thoại này đã được đăng kí";
        } else {

            // Thêm thông tin tài khoản cho thành viên
            $sqlcmd = "INSERT INTO users values(?,?,1)";
            $stmt = $connect->prepare($sqlcmd);
            $stmt->bind_param('ss', $telephone, $password);

            // Kiểm tra thực thi câu lệnh thêm tài khoản cho thành viên
            if (!$stmt->execute()) {
                $connect->rollback();
                echo "Lỗi";
            } else {
                // Commit và đóng kết nối
                $connect->commit();
                $connect->close();

                //Thông báo thành công
                echo "ok";
            }
        }
    }
} else {
    header("Location: ./");
}
function checkTelephone($telephone)
{
    for ($i = 0; $i < strlen($telephone); $i++) {
        if (!($telephone[$i] >= '0' && $telephone[$i] <= '9')) {
            return false;
        }
    }
    return true;
}