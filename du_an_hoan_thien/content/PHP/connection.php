<?php
//Kết nối đến CSDL MySQL
//Tên server
$host = 'localhost';
//Tên CSDL
$dbname = 'damweb2041';
//User truy cập CSDL
$username = 'root';
//Mật khẩu
$password = '';
try {
    //Kết nối
    $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
    // echo "Kết nối dữ liệu thành công";
} catch (PDOException $e) {
    echo "Lỗi kết nối: <br>" . $e->getMessage();
}
