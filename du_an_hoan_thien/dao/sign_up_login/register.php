<?php 
    require "../pdo.php";
    $sqlSlecUser = "SELECT * FROM user";
    $users = select_all($sqlSlecUser);
    $email = $_POST['registerEmail'];
    $userName = $_POST['registerUsername'];
    $pass = $_POST['registerPass'];
    $link = $_POST['link'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $timePr = date("Y-m-d H:i:s");  

    $checkEmail = true;
    foreach ($users as $u) {
        if ($u['email'] == $email) {
            $checkEmail = false;
        }
    }
    $newpass = md5($pass);

    if ($checkEmail) {
        $sqlInserUser = "INSERT INTO user (`userName`, `password`, `email`,`userDate`) VALUES ('$userName','$newpass','$email','$timePr')";
        if (isset($_POST['type']) && $_POST['type'] == 'boss') {
            // trường hợp admin thêm user không cần qua xác minh
            pdo_execute($sqlInserUser);
            header("location: ".$link."?status=1&message='Thêm user thành công'");
            die;
        }else {
            // khi email thỏa mãn điều kiện thì gửi mail cho người dùng xác minh
            header("location: ../phpMailler/mailRegister.php?sql=".$sqlInserUser."&email=".$email."");
            die;
        }
    }else {
        header("location: ".$link."?status=0&message='Email bạn dùng đã tồn tại'");
        die;
    }
?>