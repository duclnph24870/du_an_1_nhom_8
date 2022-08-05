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
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateTimeHt = date("Y-m-d H:i:s");
    if ($type == 'comment') {
        $idComment = $_GET['idComment'];
        $userName = select_one("SELECT * FROM user WHERE idUser=$idUser")['userName'];
        $comment = select_one("SELECT * FROM comment WHERE idComment=$idComment");
        $check = exist_string(trim($comment['like']),$idUser);
        if ($check) {
            // echo $comment['like'];
            $likeNew1 = str_replace($idUser,'',trim($comment['like']));
            $likeNew = str_replace('  ',' ',trim($likeNew1));
        }else {
            $likeNew = trim($comment['like']).' '.$idUser;
            //thông báo cho người comment biết có người like comment
            if ($idUser != $idUserMain) {
                pdo_execute("INSERT INTO `notify`(`tieuDe`, `idUser`, `idTruyen`, `kieuNotify`,`dateNotify`) VALUES
                 ('$userName vừa thích comment của bạn','$idUserMain',$idTruyen,1,'$dateTimeHt')");
            }
        }
        //cập nhập lại côt like trong database
        pdo_execute("UPDATE `comment` SET `like`='$likeNew' WHERE idComment=$idComment");
        header('location: '.$link.'');
        die;
    }elseif ($type == 'danhGia') {
        $idDanhGia = $_GET['idDanhGia'];
        $userName = select_one("SELECT * FROM user WHERE idUser=$idUser")['userName'];
        $danhGia = select_one("SELECT * FROM danhgia WHERE idDanhGia=$idDanhGia");
        $check = exist_string(trim($danhGia['like']),$idUser);
        if ($check) {
            // echo $danhGia['like'];
            $likeNew1 = str_replace($idUser,'',trim($danhGia['like']));
            $likeNew = str_replace('  ',' ',trim($likeNew1));
        }else {
            $likeNew = trim($danhGia['like']).' '.$idUser;
            //thông báo cho người đánh giá biết có người like đánh giá
            if ($idUser != $idUserMain) {
                pdo_execute("INSERT INTO `notify`(`tieuDe`, `idUser`, `idTruyen`, `kieuNotify`,`dateNotify`) VALUES
                 ('$userName vừa thích đánh giá của bạn','$idUserMain',$idTruyen,1,'$dateTimeHt')");
            }
        }
        //cập nhập lại côt like trong database
        pdo_execute("UPDATE `danhgia` SET `like`='$likeNew' WHERE idDanhGia=$idDanhGia");
        header('location: '.$link.'');
        die;
    }
?>