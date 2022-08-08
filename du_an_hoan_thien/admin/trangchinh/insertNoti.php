<?php 
    require "../../dao/pdo.php";
    require "../../public.php";
    $link = $_POST['link'];
    $idUser = $_POST['userAddNotifyCheckbox'];
    $tieuDe = $_POST['tieuDe'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $timePr = date("Y-m-d H:i:s");
    if (strlen($tieuDe) > 10) {
        if (in_array('all',$idUser)) {
            pdo_execute("INSERT INTO `notify`(`tieuDe`,`idUser`,`kieuNotify`,`dateNotify`) 
                            VALUES ('$tieuDe','".selectAllIdUser()."',0,'$timePr')");
            header('location: '.$link.'?status=1&message="Gửi thông báo tất cả user thành công!"');
            die;
        }else {
            pdo_execute("INSERT INTO `notify`(`tieuDe`,`idUser`,`kieuNotify`,`dateNotify`) 
                            VALUES ('$tieuDe','".trim(implode(' ',$idUser))."',0,'$timePr')");
            header('location: '.$link.'?status=1&message="Gửi thông báo cho '.count($idUser).' thành công!"');
            die;
        }
    }else {
        header('location: '.$link.'?status=0&message="Tiêu đề phải lớn hơn 10 ký tự"');
        die;
    }
?>