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
        // Kiểm tra xem chương có tồn tại trong chương đã đọc không và xác định số chương
        $daDoc = select_one("SELECT * FROM dangdoc WHERE idChuong=$i");
        if (count($daDoc) == 1) {
            if ($chuong['soChuong'] == 1) { // nếu số chương bằng 1 thì xóa luôn đã đọc đi
                pdo_execute("DELETE FROM dangdoc WHERE idTruyen=$idTruyen");
            }elseif ($chuong['soChuong'] > 1) {
                // Lấy ra số chương đứng sau của chương xóa
                $numberChuongSau = select_one("SELECT * FROM chuong WHERE idTruyen=$idTruyen AND soChuong=".($chuong['soChuong'] - 1).""); 
                // Thay thế chương đang đọc tới bằng chương sau
                pdo_execute("UPDATE `dangdoc` SET `idChuong`='".($numberChuongSau['idChuong'])."' WHERE idTruyen=$idTruyen");
            }
        }

       
    }


    header('location: ../'.$url.'?addChuong=1&idTruyen='.$idTruyen.'&status=1&message="Xóa thành công '.count($idChuongs).' chương"');
    die;
?>