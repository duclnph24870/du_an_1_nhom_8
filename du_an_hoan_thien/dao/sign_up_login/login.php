<?php 
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $sqlUser = "SELECT * FROM user";
        $users = select_all($sqlUser);
        
        $email = $_POST['login__email'];
        $pass = $_POST['login__pass'];
        $link = $_POST['link'];
    
        $passNew = md5($pass);
        $checkLogin = 0;
    
        $check = false;
        // $user = [];
        foreach ($users as $k => $u) {
            if ($u['email'] == $email && $u['password'] == $passNew) {
                $check = true;
                $user = $u;
            }
        }
    
        if ($check == true) {
            if ($user['trangThaiTk'] == 0) {
                header("location: ".$link."?status=0&message='Tài khoản của bạn đã bị khóa do vi phạm điều khoản của website'");
                die;
            }else {
                $_SESSION['checkLogin'] = 1;
                $_SESSION['user'] = $user;
                header("location: ".$link."?status=1&message='Chào ".$user['userName'].", chúc bạn đọc truyện vui vẻ'");
                die;
            }

        }else {
            header("location: ".$link."?status=0&message='Tài khoản hoặc mật khẩu không chính xác'");
            die;
        }

    }
?>