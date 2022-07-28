<?php 
    require "../../../dao/pdo.php";
    require "../../../public.php";

    $ten_truyen = $_POST['tenTruyen'];
    $tac_gia = $_POST['tacGia'];
    $gioi_thieu = $_POST['gioiThieu'];
    $img = $_FILES['imgTruyen'];
    $nhom1 = $_POST['nhom1'];
    $nhom2 = $_POST['nhom2'];
    $nhom3 = $_POST['nhom3'];
    $nhom4 = $_POST['nhom4'];
    $nhom5 = $_POST['nhom5'];
    $nhom6 = $_POST['nhom6'];
    $link = $_POST['link'];
    $idTruyenEdit = $_POST['idTruyenEdit'];
    $tinh_trang = $_POST['tinhTrang'];
    $quyenHan = $_POST['quyenHan'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateTimeHt = date("Y-m-d H:i:s");

    $sqlTruyenUp = "SELECT * FROM truyen WHERE idTruyen=$idTruyenEdit";
    $truyenUp = select_one($sqlTruyenUp);

    move_uploaded_file($_FILES['imgTruyen']['tmp_name'],'../../../content/IMG/'.$_FILES['imgTruyen']['name']);
    $imgName = $img['name'];

    if (isset($_POST['duyet'])) {
        $sqlUpDate = "UPDATE `truyen` SET 
        `nhom1`='$nhom1',`nhom2`='$nhom2',`nhom3`='$nhom3',`nhom4`='$nhom4',
        `nhom5`='$nhom5',`nhom6`='$nhom6',`tenTruyen`='$ten_truyen',`gioiThieu`='$gioi_thieu',
        `tacGia`='$tac_gia',`imgTruyen`='$imgName',`dateCapNhap`='$dateTimeHt',
        `tinhTrang`='$tinh_trang',`trangThai`=1 WHERE idTruyen=$idTruyenEdit";


        pdo_execute($sqlUpDate);
        header('location: ../'.$link.'?status=1&message="Truyện '.$ten_truyen.' đã được duyệt"');
        // gửi thông báo đến user đăng truyện
        $sqlNoti = "INSERT INTO `notify`(`tieuDe`, `idUser`, `idTruyen`, `kieuNotify`) VALUES ('Truyện $ten_truyen của bạn đã được duyệt','".$truyenUp['idUser']."',$idTruyenEdit,1)";
        pdo_execute($sqlNoti);
        die;
    }else {
        $sqlUpDate = "UPDATE `truyen` SET 
        `nhom1`='$nhom1',`nhom2`='$nhom2',`nhom3`='$nhom3',`nhom4`='$nhom4',
        `nhom5`='$nhom5',`nhom6`='$nhom6',`tenTruyen`='$ten_truyen',`gioiThieu`='$gioi_thieu',
        `tacGia`='$tac_gia',`imgTruyen`='$imgName',`dateCapNhap`='$dateTimeHt',
        `tinhTrang`='$tinh_trang' WHERE idTruyen=$idTruyenEdit";


        pdo_execute($sqlUpDate);
        header('location: ../'.$link.'?status=1&message="Đã cập nhập truyện '.$ten_truyen.'"');
    }



?>