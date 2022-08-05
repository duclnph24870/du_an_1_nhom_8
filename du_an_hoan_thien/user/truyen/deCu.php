<?php 
    require "../../dao/pdo.php";
    $idTruyen = $_GET['idTruyen'];
    $link = $_GET['link'];
    $idUser = $_GET['idUser'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateTimeHt = date("Y-m-d H:i:s");

    // lấy đề cử cũ cộng 1
    $truyen = select_one("SELECT * FROM truyen WHERE idTruyen=$idTruyen");
    $truyenDeCu = $truyen['deCu'];
    pdo_execute("UPDATE `truyen` SET `deCu`= ".($truyenDeCu + 1)." WHERE idTruyen=$idTruyen");
    // trừ đi 1 phiếu đề cử của user
    $user = select_one("SELECT * FROM user WHERE idUser=$idUser");
    pdo_execute("UPDATE `user` SET phieuDeCu=".($user['phieuDeCu'] - 1)." WHERE idUser=$idUser");
    // gửi thông báo đến cho user đăng truyện khi người đề cử không phải người đăng truyện
    if ($idUser != $truyen['idUser']) {
        pdo_execute("INSERT INTO `notify`(`tieuDe`, `idUser`, `idTruyen`, `kieuNotify`,`dateNotify`) VALUES
                 ('Truyện của bạn vừa được ".$user['userName']." tặng 1 phiếu đề cử','".$truyen['idUser']."',$idTruyen,1,'$dateTimeHt')");
    }
    header("location: ".$link."?status=1&message='Đề cử thành công'&reload=1&idTruyen=$idTruyen");
    die;
?>