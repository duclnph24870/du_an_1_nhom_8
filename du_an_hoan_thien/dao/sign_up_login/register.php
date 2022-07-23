<?php 
    require "../pdo.php";
    $sqlSlecUser = "SELECT * FROM user";
    $users = select_all($sqlSlecUser);
    $email = $_POST['registerEmail'];
    $userName = $_POST['registerUsername'];
    $pass = $_POST['registerPass'];
    $link = $_POST['link'];

    $checkEmail = true;
    foreach ($users as $u) {
        if ($u['email'] == $email) {
            $checkEmail = false;
        }
    }
    $newpass = md5($pass);

    if ($checkEmail) {
        $sqlInserUser = "INSERT INTO user (`userName`, `password`, `email`) VALUES ('$userName','$newpass','$email')";
        pdo_execute($sqlInserUser);
        header("location: ".$link."?status=1&message='Đăng ký thành công'");
    }else {
        header("location: ".$link."?status=0&message='Email bạn dùng đã tồn tại'");
    }
    
    // header('location: '.$link.'');

?>