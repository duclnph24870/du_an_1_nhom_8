<?php
    ob_start();
    require "../../dao/pdo.php";
    require "../../public.php";
    $idUser = $_GET['idUser'];
    $type = $_GET['type'];
    $link = $_GET['link'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $timePr = date("Y-m-d H:i:s"); 
    // lấy ra user cần xử lý
    $user = select_one("SELECT * FROM user WHERE idUser=$idUser");
    if ($type == 'lock') {
        if ($user['trangThaiTk'] == 1) {
            // nếu đang mở thì chuyển sang khóa và ngược lại
            pdo_execute("UPDATE `user` SET `trangThaiTk`= 0  WHERE idUser=$idUser");
            header("location: ".$link."");
            die;
        }elseif ($user['trangThaiTk'] == 0) {
            pdo_execute("UPDATE `user` SET `trangThaiTk`= 1  WHERE idUser=$idUser");
            header("location: ".$link."");
            die;
        }
    }elseif ($type == 'up') {
        if ($user['quyenHan'] < 4) {
            pdo_execute("UPDATE `user` SET `quyenHan`= ".($user['quyenHan'] + 1)."  WHERE idUser=$idUser");
            // gửi thông báo
            pdo_execute("INSERT INTO `notify`(`tieuDe`,`idUser`,`kieuNotify`,`dateNotify`) 
                        VALUES ('Quyền hạn của bạn vừa được tăng lên 1 cấp','$idUser',2,'$timePr')");
            header("location: ".$link."");
            die;
        }
    }elseif ($type == 'down') {
        if ($user['quyenHan'] >= 2 && $user['quyenHan'] < 5) {
            pdo_execute("UPDATE `user` SET `quyenHan`= ".($user['quyenHan'] - 1)."  WHERE idUser=$idUser");
            // gửi thông báo
            pdo_execute("INSERT INTO `notify`(`tieuDe`,`idUser`,`kieuNotify`,`dateNotify`) 
                        VALUES ('Quyền hạn của bạn vừa bị giảm 1 cấp','$idUser',2,'$timePr')");
            header("location: ".$link."");
            die;
        }
    }elseif ($type == 'delete') {
        $idDelete = $_GET['idDelete'];
        delete_user($idUser,$idDelete);
        header("location: ".$link."");
        die;
    }
?>