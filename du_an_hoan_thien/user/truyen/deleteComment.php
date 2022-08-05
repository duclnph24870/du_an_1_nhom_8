<?php
    require "../../public.php";
    require "../../dao/pdo.php";
    // xóa comment thì phải xóa cả trả lời comment

    $type = $_GET['type'];
    $link = $_GET['link'];

    if ($type == 'danhGia') {
        $idDanhGia = $_GET['idDanhGia'];
        //Xóa trả lời đánh giá
        pdo_execute("DELETE FROM `replydanhgia` WHERE idDanhGia= $idDanhGia");
        // xóa đánh giá
        pdo_execute("DELETE FROM `danhgia` WHERE idDanhGia=$idDanhGia");
        header("location: ".$link."");
        die;

    }elseif ($type=='comment') {
        // xóa comment
        $idComment = $_GET['idComment'];
        //Xóa trả lời comment
        pdo_execute("DELETE FROM `replycomment` WHERE idComment= $idComment");
        // xóa comment
        pdo_execute("DELETE FROM `comment` WHERE idComment=$idComment");
        header("location: ".$link."");
        die;
    }
?>