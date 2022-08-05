<?php 
    require "../pdo.php";
    require "../../public.php";
    $type = $_GET['type'];
    $idUser = $_GET['idUser'];
    $link = $_GET['link'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $datePersent = date("Y-m-d");
    if ($type == 'diemDanh') {
        if (checkMission('diemDanh',$idUser)) {
            $nhiemVu = select_all("SELECT * FROM nhiemvu WHERE idUser=$idUser AND tieuDe LIKE '%Điểm%Danh%'");
            if (count($nhiemVu) > 0) {
                // Cập nhập lại thời gian hoàn thành nhiệm vụ
                pdo_execute("UPDATE `nhiemvu` SET `dateHoanThanh`='$datePersent' WHERE idNhiemVu=".$nhiemVu[0]['idNhiemVu']."");
            }else {
                // thêm thời gian hoàn thành vào nhiệm vụ
                pdo_execute("INSERT INTO `nhiemvu`(`exp`, `dateHoanThanh`, `idUser`, `tieuDe`) 
                            VALUES (3,'$datePersent',$idUser,'Điểm Danh')");
            }
            // Cộng exp vào database của user
            $user = select_one("SELECT * FROM user WHERE idUser=$idUser"); 
            pdo_execute("UPDATE `user` SET `exp`=".($user['exp'] + 3)." WHERE idUser=$idUser");
            header('location: '.$link.'?status=1&message="Bạn nhận được 3 EXP!"&reload=1');
            die;
        }else {
            header('location: '.$link.'?status=0&message="Bạn đã hoàn thành nhiệm vụ hôm nay rồi!"&reload=1');
            die;
        }
    }elseif ($type == 'danhGia') {
        if (checkMission('danhGia',$idUser)) {
            $nhiemVu = select_all("SELECT * FROM nhiemvu WHERE idUser=$idUser AND tieuDe LIKE '%Đánh%Giá%'");
            if (count($nhiemVu) > 0) {
                // Cập nhập lại thời gian hoàn thành nhiệm vụ
                pdo_execute("UPDATE `nhiemvu` SET `dateHoanThanh`='$datePersent' WHERE idNhiemVu=".$nhiemVu[0]['idNhiemVu']."");
            }else {
                // thêm thời gian hoàn thành vào nhiệm vụ
                pdo_execute("INSERT INTO `nhiemvu`(`exp`, `dateHoanThanh`, `idUser`, `tieuDe`) 
                            VALUES (3,'$datePersent',$idUser,'Đánh Giá')");
            }
            // Cộng exp vào database của user
            $user = select_one("SELECT * FROM user WHERE idUser=$idUser"); 
            pdo_execute("UPDATE `user` SET `exp`=".($user['exp'] + 3)." WHERE idUser=$idUser");
            header('location: '.$link.'?status=1&message="Bạn nhận được 3 EXP!"&reload=1');
            die;
        }else {
            header('location: '.$link.'?status=0&message="Bạn đã hoàn thành nhiệm vụ hôm nay rồi!"&reload=1');
            die;
        }
    }elseif ($type == 'comment') {
        if (checkMission('comment',$idUser)) {
            $nhiemVu = select_all("SELECT * FROM nhiemvu WHERE idUser=$idUser AND tieuDe LIKE '%Comment%'");
            if (count($nhiemVu) > 0) {
                // Cập nhập lại thời gian hoàn thành nhiệm vụ
                pdo_execute("UPDATE `nhiemvu` SET `dateHoanThanh`='$datePersent' WHERE idNhiemVu=".$nhiemVu[0]['idNhiemVu']."");
            }else {
                // thêm thời gian hoàn thành vào nhiệm vụ
                pdo_execute("INSERT INTO `nhiemvu`(`exp`, `dateHoanThanh`, `idUser`, `tieuDe`) 
                            VALUES (5,'$datePersent',$idUser,'Comment')");
            }
            // Cộng exp vào database của user
            $user = select_one("SELECT * FROM user WHERE idUser=$idUser"); 
            pdo_execute("UPDATE `user` SET `exp`=".($user['exp'] + 5)." WHERE idUser=$idUser");
            header('location: '.$link.'?status=1&message="Bạn nhận được 5 EXP!"&reload=1');
            die;
        }else {
            header('location: '.$link.'?status=0&message="Bạn đã hoàn thành nhiệm vụ hôm nay rồi!"&reload=1');
            die;
        }
    }
?>