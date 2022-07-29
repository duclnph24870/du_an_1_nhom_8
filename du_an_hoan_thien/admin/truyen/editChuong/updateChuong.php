<?php 
    require "../../../dao/pdo.php";
    require "../../../public.php";
    $tinhTrang = $_POST['tinhTrang'];
    $tieuDe = trim($_POST['tieuDe']);
    $noiDung = trim($_POST['noiDung']);
    $idTruyen = $_POST['idTruyen'];
    $idChuong = $_POST['idChuong'];
    $link = $_POST['link'];

    $chuong = select_one("SELECT * FROM chuong WHERE idChuong=$idChuong");
    $soChuCu = substr_count(trim($chuong['noiDung']),' ') + 1;
    $soChuNew = substr_count($noiDung,' ') + 1;
    if ($soChuCu == $soChuNew) {
        pdo_execute("UPDATE `truyen` SET `tinhTrang`='$tinhTrang' WHERE idTruyen=$idTruyen");
        pdo_execute("UPDATE `chuong` SET `tieuDe`='$tieuDe',`noiDung`='$noiDung' WHERE idChuong=$idChuong");
        header('location: ../'.$link.'&status=1&message="Cập nhập chương thành công"&idChuong='.$idChuong.'&idTruyen='.$idTruyen.'');
        die;
    }else {
        $truyen = select_one("SELECT * FROM truyen WHERE idTruyen=$idTruyen");
        pdo_execute("UPDATE `truyen` SET `tinhTrang`='$tinhTrang',`soChu`=".($truyen['soChu'] - $soChuCu + $soChuNew)." WHERE idTruyen=$idTruyen");
        pdo_execute("UPDATE `chuong` SET `tieuDe`='$tieuDe',`noiDung`='$noiDung' WHERE idChuong=$idChuong");
        header('location: ../'.$link.'&status=1&message="Cập nhập chương thành công"&idChuong='.$idChuong.'&idTruyen='.$idTruyen.'');
        die;
    }
?>