<?php 
    ob_start();
    session_start();
    require "../../dao/pdo.php";
    require "../../public.php";
    $type = $_POST['type'];
    $idUser = $_POST['idUser'];
    $idTruyen = $_POST['idTruyen'];
    $link = $_POST['link'];
    $idUserDanhGia = $_POST['idUserDanhGia'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateTimeHt = date("Y-m-d H:i:s");
    if ($type == 'repComment') {
        if (checkTimeComment('repComment')) {
            $noiDung = $_POST['noiDung'];
            $idComment = $_POST['idComment'];
            $userName = select_one("SELECT * FROM user WHERE idUser=$idUser")['userName'];
            // thêm dữ liệu đánh giá lên database
            pdo_execute("INSERT INTO `replycomment`(`idComment`, `idUser`, `dateReply`, `noiDung`, `idTruyen`) 
                        VALUES ($idComment,$idUser,'$dateTimeHt','$noiDung',$idTruyen)");
            if ($idUser != $idUserDanhGia) {
                // Gửi thông báo đến người đánh giá truyện
                pdo_execute("INSERT INTO `notify`(`tieuDe`, `idUser`, `idTruyen`, `kieuNotify`,`dateNotify`) VALUES
                 ('$userName vừa trả lời comment của bạn','$idUserDanhGia',$idTruyen,1,'$dateTimeHt')");
            }
            // thêm thời gian rep comment hiện tại
            $_SESSION['repComment'] = $dateTimeHt;
            header('location: '.$link.'');
            die;
        }else {
            header('location: '.$link.'&status=0&message="Hãy quay lại sau '.(5 - timeDate($_SESSION['repComment'],$dateTimeHt)).' phút nữa để có thể trả lời comment"');
            die;
        }

    }elseif ($type == 'repDanhGia') {
        if (checkTimeComment('repDanhGia')) {
            $noiDung = $_POST['noiDung'];
            $idDanhGia = $_POST['idDanhGia'];
            $userName = select_one("SELECT * FROM user WHERE idUser=$idUser")['userName'];
            // thêm dữ liệu đánh giá lên database
            pdo_execute("INSERT INTO `replydanhgia`(`idDanhGia`, `idUser`, `dateReply`, `noiDung`, `idTruyen`) 
                        VALUES ($idDanhGia,$idUser,'$dateTimeHt','$noiDung',$idTruyen)");
            if ($idUser != $idUserDanhGia) {
                // Gửi thông báo đến người đánh giá truyện
                pdo_execute("INSERT INTO `notify`(`tieuDe`, `idUser`, `idTruyen`, `kieuNotify`,`dateNotify`) VALUES
                 ('$userName vừa trả lời đánh giá của bạn','$idUserDanhGia',$idTruyen,1,'$dateTimeHt')");
            }
            // thêm thời gian rep đánh giá hiện tại
            $_SESSION['repDanhGia'] = $dateTimeHt;
            header('location: '.$link.'');
            die;
        }else {
            header('location: '.$link.'&status=0&message="Hãy quay lại sau '.(5 - timeDate($_SESSION['repDanhGia'],$dateTimeHt)).' phút nữa để có thể trả lời đánh giá"');
            die;
        }
    }
?>