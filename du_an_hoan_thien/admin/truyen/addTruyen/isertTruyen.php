<?php
    require "../../../dao/pdo.php";
    require "../../../public.php";
    //category
    $sqlCate = "SELECT * FROM danhmuc";
    $category = select_all($sqlCate);
    //truyen
    $sqlTruyen = "SELECT * FROM truyen";
    $truyen = select_all($sqlTruyen);

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
    $quyenHan = $_POST['quyenHan'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateTimeHt = date("Y-m-d H:i:s");

    $check = true;
    foreach ($truyen as $item) {
        if (convert_name($item['tenTruyen']) == convert_name($ten_truyen) && convert_name($item['tacGia']) == convert_name($tac_gia)) {
            $check = false;
            break;
        }
    }
    $idUser = $_POST['idUser'];    

    if ($check) {
        move_uploaded_file($_FILES['imgTruyen']['tmp_name'],'../../../content/IMG/'.$_FILES['imgTruyen']['name']);
        $imgName = $img['name'];
        if ($quyenHan == 2) {
            $sqlIsert = "INSERT INTO `truyen`(`idUser`, `nhom1`, `nhom2`, `nhom3`, `nhom4`, `nhom5`, `nhom6`, `tenTruyen`, `gioiThieu`, `tacGia`, `imgTruyen`, `dateTruyen`, `dateCapNhap`, `trangThai`)
                         VALUES ($idUser,'$nhom1','$nhom2','$nhom3','$nhom4','$nhom5','$nhom6','$ten_truyen','$gioi_thieu','$tac_gia','$imgName','$dateTimeHt','$dateTimeHt',0)";
            pdo_execute($sqlIsert);
            header('location: ../'.$link.'?status=1&message="Truyện bạn đăng đang được xét duyệt"');
            die;
        }elseif ((int)$quyenHan >= 3) {
            $sqlIsert = "INSERT INTO `truyen`(`idUser`, `nhom1`, `nhom2`, `nhom3`, `nhom4`, `nhom5`, `nhom6`, `tenTruyen`, `gioiThieu`, `tacGia`, `imgTruyen`, `dateTruyen`, `dateCapNhap`, `trangThai`)
                        VALUES ($idUser,'$nhom1','$nhom2','$nhom3','$nhom4','$nhom5','$nhom6','$ten_truyen','$gioi_thieu','$tac_gia','$imgName','$dateTimeHt','$dateTimeHt',1)";
            pdo_execute($sqlIsert);
            header('location: ../'.$link.'?status=1&message="Đăng truyện thành công"');
            die;
        }
    }else {
        header('location: ../'.$link.'?status=0&message="Truyện bạn đăng đã tồn tại"');
        die;
    }
?>