<?php 
    require "../../dao/pdo.php";
    $passNew = md5(trim($_POST['passNew']));
    $idUser = $_POST['idUser'];
    $passOld = md5(trim($_POST['passOld']));
    $link = $_POST['link'];
    $user = select_one("SELECT * FROM user WHERE idUser=$idUser");

    if ($passOld == $user['password']) {
        pdo_execute("UPDATE `user` SET `password`='$passNew' WHERE idUser=$idUser");
        header('location: '.$link.'?status=1&message="Đổi mật khẩu thành công"&reload=1');
        die;
    }else {
        header('location: '.$link.'?status=0&message="Mật khẩu cũ của bạn không khớp"');
        die;
    }
?>