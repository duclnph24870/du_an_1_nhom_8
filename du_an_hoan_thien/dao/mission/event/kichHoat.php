<?php 
    require "../../pdo.php";
    require "../../../public.php";
    $type = $_GET['type'];
    $link = $_GET['link'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateTimeHt = date("Y-m-d H:i:s");
    $event = select_all("SELECT * FROM sukien WHERE trangThai=1 AND nameEvent='$type'");
    if (count($event) > 0) {
        foreach ($event as $e) {
            // lấy ra user để cộng exp
            $user = select_one("SELECT * FROM user WHERE idUser=".$e['idUser']."");
            pdo_execute("UPDATE `user` SET `exp`=".($e['point']*3 + $user['exp'])." WHERE idUser=".$e['idUser']."");
        }
        // cập nhập lại trạng thái sự kiện
        pdo_execute("UPDATE `sukien` SET `trangThai`= 0,`point`=0 WHERE nameEvent='$type'");
        // gửi thông báo đến tất cả user
        pdo_execute("INSERT INTO `notify`( `tieuDe`, `idUser`, `kieuNotify`, `dateNotify`) 
        VALUES ('Sự kiện trung thu đã kết thúc, vào hồ sơ để xem thành quả của mình ha!','".selectAllIdUser()."',2,'$dateTimeHt')");
        header("location: ../".$link."?reload=1");
        die;
    }else {
        // cập nhập lại trạng thái sự kiện
        pdo_execute("UPDATE `sukien` SET `trangThai`= 1 WHERE nameEvent='$type'");
        // gửi thông báo đến tất cả user
        pdo_execute("INSERT INTO `notify`( `tieuDe`, `idUser`, `kieuNotify`, `dateNotify`) 
        VALUES ('Sự kiện trung thu đã bắt đầu, Vào phần nhiệm vụ sự kiện trong hồ sơ để xem hướng dẫn ha!','".selectAllIdUser()."',2,'$dateTimeHt')");
        header("location: ../".$link."?reload=1");
        die;
    }
?>