<?php 
    require "../../../dao/pdo.php";
    require "../../../public.php";
    $idChuongs = $_POST['chuongCheckBox'];
    $idTruyen = $_POST['idTruyen'];
    $url = $_GET['link'];

    foreach ($idChuongs as $i) {
        $truyen = select_one("SELECT * FROM truyen WHERE idTruyen=$idTruyen");
        $chuong = select_one("SELECT * FROM chuong WHERE idChuong=$i");
        // trừ số chữ, số chương, lượt view
        $sqlUpDateTruyen = "UPDATE `truyen` SET `soChu`=".($truyen['soChu'] - (substr_count(trim($chuong['noiDung']),' ') + 1)).",`soChuong`=".($truyen['soChuong'] - 1).",`viewTruyen`=".($truyen['viewTruyen'] - $chuong['viewChuong'])." WHERE idTruyen=$idTruyen";
        pdo_execute($sqlUpDateTruyen);
        // xóa chương
        pdo_execute("DELETE FROM `chuong` WHERE idChuong=$i");
       
    }


    header('location: ../'.$url.'?addChuong=1&idTruyen='.$idTruyen.'&status=1&message="Xóa thành công '.count($idChuongs).' chương"');
    die;
?>