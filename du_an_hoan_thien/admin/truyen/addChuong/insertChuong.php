<?php
    require "../../../dao/pdo.php";
    $idTruyen = $_POST['idTruyen'];
    $noiDung = trim($_POST['noiDung']);
    $tieuDe = trim($_POST['tieuDe']);
    $tinhTrang = $_POST['tinhTrang'];
    $soChuong = $_POST['soChuong'];
    $link = $_POST['link'];
    $idUser = $_POST['idUser'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateTimeHt = date("Y-m-d H:i:s");
    
    $soChu = substr_count(trim($noiDung),' ') + 1;
    
    // Lấy ra bảng đánh dấu
    $sqlSelectDanhDau = "SELECT * FROM danhdau WHERE idTruyen=$idTruyen";
    $danhDauList = select_all($sqlSelectDanhDau);
    //Lấy ra truyện đang đăng chương
    $truyen = select_one("SELECT * FROM truyen WHERE idTruyen=$idTruyen");

    if (count($danhDauList) > 0) {
        $idUserDanhDau = [];
        foreach ($danhDauList as $k => $danhDau) {
            $idUserDanhDau[] = $danhDau['idUser'];
        }

        $idUserNhanNoti = implode(' ',$idUserDanhDau);
        $sqlNoti = "INSERT INTO `notify`(`tieuDe`, `idUser`, `idTruyen`, `kieuNotify`,`dateNotify`) VALUES ('Truyện ".$truyen['tenTruyen']." vừa ra chương mới','$idUserNhanNoti',$idTruyen,1,'$dateTimeHt')";
        pdo_execute($sqlNoti);// gửi thông báo đi
    }

    // update dữ liệu mới cho truyện
    $sqlUpdateTruyen = "UPDATE `truyen` SET `dateCapNhap`='$dateTimeHt',`tinhTrang`='$tinhTrang',`soChu`=".($truyen['soChu'] + $soChu).",`soChuong`='$soChuong' WHERE idTruyen = $idTruyen";
    pdo_execute($sqlUpdateTruyen);

    // Thêm chương lên database
    $sqlIsertChuong = "INSERT INTO `chuong`(`idTruyen`, `idUser`, `tieuDe`, `noiDung`, `dateChuong`, `soChuong`) VALUES ($idTruyen,$idUser,'$tieuDe','".trim($noiDung)."','$dateTimeHt','$soChuong')";
    pdo_execute($sqlIsertChuong);

    header('location: ../'.$link.'&idTruyen='.$idTruyen.'&status=1&message="Đăng chương thành công"');
    die;
?>