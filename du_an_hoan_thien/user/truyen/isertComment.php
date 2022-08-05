<?php 
    session_start();
    ob_start();
    require "../../dao/pdo.php";
    require "../../public.php";
    $type = $_POST['type'];
    $idUser = $_POST['idUser'];
    $idTruyen = $_POST['idTruyen'];
    $link = $_POST['link'];
    $idUserUpTruyen = $_POST['idUserUpTruyen'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateTimeHt = date("Y-m-d H:i:s");
    if ($type == 'comment') {
        // nếu checktime đúng thì sẽ chạy code trong
        if (checkTimeComment('comment')) {

            $noiDung = $_POST['noiDung'];
            $userName = select_one("SELECT * FROM user WHERE idUser=$idUser")['userName'];

            //isert comment lên database
            pdo_execute("INSERT INTO `comment`(`idTruyen`, `idUser`, `noiDung`, `dateComment`) 
                        VALUES ($idTruyen,$idUser,'$noiDung','$dateTimeHt')");

            // Gửi thông báo đến người đăng truyện có người đánh giá truyện
            if ($idUser != $idUserUpTruyen) {
                pdo_execute("INSERT INTO `notify`(`tieuDe`, `idUser`, `idTruyen`, `kieuNotify`,`dateNotify`) VALUES
                ('$userName vừa bình luận truyện của bạn','$idUserUpTruyen',$idTruyen,1,'$dateTimeHt')");
            }
            // thêm khoảng thời gian bình luận hiện tại vào session
            $_SESSION['comment'] = $dateTimeHt;
            header('location: '.$link.'');
            die;
        }else {
            header('location: '.$link.'&status=0&message="Hãy quay lại sau '.(5 - timeDate($_SESSION['comment'],$dateTimeHt)).' phút nữa để có thể comment"');
            die;
        }
        
    }elseif ($type == 'danhGia') {
        if (checkTimeComment('danhGia')) {
            $tinhCach = (int)$_POST['tinhCach'];
            $cotTruyen = (int)$_POST['cotTruyen'];
            $boCuc = (int)$_POST['boCuc'];
            $noiDung = $_POST['noiDung'];
            $userName = select_one("SELECT * FROM user WHERE idUser=$idUser")['userName'];
            $tongHop = round(($tinhCach + $cotTruyen + $boCuc)/3,1);
    
            // thêm dữ liệu đánh giá lên database
            pdo_execute("INSERT INTO `danhgia`(`idTruyen`, `idUser`, `noiDung`, `dateDanhGia`, `tinhCach`, `cotTruyen`, `boCuc`, `tongHop`) VALUES 
                        ($idTruyen,$idUser,'$noiDung','$dateTimeHt',$tinhCach,$cotTruyen,$boCuc,$tongHop)");
            // Gửi thông báo đến người đăng truyện có người đánh giá truyện
            if ($idUser != $idUserUpTruyen) {
                pdo_execute("INSERT INTO `notify`(`tieuDe`, `idUser`, `idTruyen`, `kieuNotify`,`dateNotify`) VALUES
                 ('$userName vừa đánh giá truyện của bạn','$idUserUpTruyen',$idTruyen,1,'$dateTimeHt')");
    
            }
            // thêm khoảng thời gian đánh giá hiện tại vào session
            $_SESSION['danhGia'] = $dateTimeHt;
            header('location: '.$link.'');
            die;
        }else {
            header('location: '.$link.'&status=0&message="Hãy quay lại sau '.(5 - timeDate($_SESSION['danhGia'],$dateTimeHt)).' phút nữa để có thể đánh giá"');
            die;
        }
    }
?>