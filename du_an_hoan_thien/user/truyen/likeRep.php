<?php 
    ob_start();
    require "../../dao/pdo.php";
    require "../../public.php";
    // Việc cần làm
    /**
     * thêm id user vào cột like (string);
     * thông báo cho người đánh giá có người thích đánh giá của bạn
     */
    $idTruyen = $_GET['idTruyen'];
    $idUser = $_GET['idUser'];
    $idUserMain = $_GET['idUserMain'];
    $type = $_GET['type'];
    $link = $_GET['link'];
    $idReply = $_GET['idReply'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateTimeHt = date("Y-m-d H:i:s");
    if ($type == 'comment') {
        $userName = select_one("SELECT * FROM user WHERE idUser=$idUser")['userName'];
        $commentRep = select_one("SELECT * FROM replycomment WHERE idReply=$idReply");
        $check = exist_string(trim($commentRep['likeRep']),$idUser);
        if ($check) {
            // echo $danhGia['like'];
            $likeNew1 = str_replace($idUser,'',trim($commentRep['likeRep']));
            $likeNew = str_replace('  ',' ',trim($likeNew1));
        }else {
            $likeNew = trim($commentRep['like']).' '.$idUser;
            //thông báo cho người đánh giá biết có người like đánh giá
            if ($idUser != $idUserMain) {
                pdo_execute("INSERT INTO `notify`(`tieuDe`, `idUser`, `idTruyen`, `kieuNotify`,`dateNotify`) VALUES
                 ('$userName vừa thích trả lời comment của bạn','$idUserMain',$idTruyen,1,'$dateTimeHt')");
            }
        }
        //cập nhập lại côt like trong database
        pdo_execute("UPDATE `replycomment` SET `likeRep`='$likeNew' WHERE idReply=$idReply");
        header('location: '.$link.'');
        die;
    }elseif ($type == 'danhGia') {
        $userName = select_one("SELECT * FROM user WHERE idUser=$idUser")['userName'];
        $danhGiaRep = select_one("SELECT * FROM replydanhgia WHERE idReply=$idReply");
        $check = exist_string(trim($danhGiaRep['likeRep']),$idUser);
        if ($check) {
            // echo $danhGia['like'];
            $likeNew1 = str_replace($idUser,'',trim($danhGiaRep['likeRep']));
            $likeNew = str_replace('  ',' ',trim($likeNew1));
        }else {
            $likeNew = trim($danhGiaRep['like']).' '.$idUser;
            //thông báo cho người đánh giá biết có người like đánh giá
            if ($idUser != $idUserMain) {
                pdo_execute("INSERT INTO `notify`(`tieuDe`, `idUser`, `idTruyen`, `kieuNotify`,`dateNotify`) VALUES
                 ('$userName vừa thích trả lời đánh giá của bạn','$idUserMain',$idTruyen,1,'$dateTimeHt')");
            }
        }
        //cập nhập lại côt like trong database
        pdo_execute("UPDATE `replydanhgia` SET `likeRep`='$likeNew' WHERE idReply=$idReply");
        header('location: '.$link.'');
        die;
        
    }
?>