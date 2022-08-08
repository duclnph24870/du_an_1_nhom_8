<?php 
    require "../../dao/pdo.php";
    require "../../public.php";
    $idTruyen = $_GET['idTruyen'];
    $type = $_GET['type'];
    $link = $_GET['link'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $timePr = date("Y-m-d H:i:s"); 
    $truyen = select_one("SELECT * FROM truyen WHERE idTruyen=$idTruyen");

    if ($type == 'approved') {
        // sửa trạng thái truyện
        pdo_execute("UPDATE `truyen` SET `trangThai`=1 WHERE idTruyen=$idTruyen");
        // thông báo 
        pdo_execute("INSERT INTO `notify`(`tieuDe`,`idUser`,`idTruyen`,`kieuNotify`,`dateNotify`) 
                        VALUES ('Truyện ".$truyen['tenTruyen']." đã được phê duyệt','".$truyen['idUser']."',".$truyen['idTruyen'].",1,'$timePr')");
        header('location: '.$link.'');
        die;
    }elseif ($type == 'delete') {
        // sửa trạng thái truyện
        delete_truyen_one($idTruyen);
        // thông báo 
        pdo_execute("INSERT INTO `notify`(`tieuDe`,`idUser`,`kieuNotify`,`dateNotify`) 
                        VALUES ('Truyện ".$truyen['tenTruyen']." của bạn đã bị xóa khỏi danh sách duyệt','".$truyen['idUser']."',0,'$timePr')");
        header('location: '.$link.'');
        die;
    }
?>