<?php
    require "../../public.php";
    require "../../dao/pdo.php";

    $type = $_GET['type'];
    $link = $_GET['link'];

    if ($type == 'danhGia') {
        $idReply = $_GET['idReply'];
        //Xóa trả lời đánh giá
        pdo_execute("DELETE FROM `replydanhgia` WHERE idReply= $idReply");
        header("location: ".$link."");
        die;

    }elseif ($type=='comment') {
        // xóa comment
        $idReply = $_GET['idReply'];
        //Xóa trả lời comment
        pdo_execute("DELETE FROM `replycomment` WHERE idReply= $idReply");
        header("location: ".$link."");
        die;
    }
?>