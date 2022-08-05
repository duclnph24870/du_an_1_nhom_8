<?php
    require "../pdo.php";
    $sql = $_GET['sql'];
    $email = $_GET['email'];
    $users = select_all("SELECT * FROM user WHERE email='$email'");
    if (count($users) == 0) {
        // nếu email chưa tồn tại thì thêm vào database
        pdo_execute($sql);
        header('location: http://metruyenchu8.ml/du_an_hoan_thien/user/trangchu/index.php?status=1&message="Đăng ký tài khoản thành công"');
        die;
    }else {
        // Nếu email đã tồn tại thì bỏ qua và thông báo
        header('location: http://metruyenchu8.ml/du_an_hoan_thien/user/trangchu/index.php?status=1&message="Email của bạn đã xác minh rồi"');
        die;
    }
?>