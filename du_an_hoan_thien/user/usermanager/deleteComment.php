<?php 
    require "../../dao/pdo.php";
    $type = $_POST['type'];
    $link = $_POST['link'];

    if ($type == 'danhGia') {
        // lấy ra mảng id đánh giá
        $idDanhGia =  $_POST['danhGiaCheckBox'];
        foreach ($idDanhGia as $id) {
            //Xóa trả lời đánh giá
            pdo_execute("DELETE FROM `replydanhgia` WHERE idDanhGia= $id");
            // xóa đánh giá
            pdo_execute("DELETE FROM `danhgia` WHERE idDanhGia=$id");
        }
        header("location: ".$link."");
        die;
    }elseif ($type == 'comment') {
        $idComment = $_POST['commentCheckBox'];
        foreach ($idComment as $id) {
            //Xóa trả lời comment
            pdo_execute("DELETE FROM `replycomment` WHERE idComment= $id");
            // xóa comment
            pdo_execute("DELETE FROM `comment` WHERE idComment=$id");
        }
        header("location: ".$link."");
        die;
    }
?>