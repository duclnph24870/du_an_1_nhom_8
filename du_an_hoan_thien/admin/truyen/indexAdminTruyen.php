<?php 
    session_start();
    require "../../public.php";
    $ROOT_URL = "../../../du_an_hoan_thien";
    $CONTENT_URL = "$ROOT_URL/content";
    $ADMIN_URL = "$ROOT_URL/admin";
    $USER_URL = "$ROOT_URL/user";
    $DAO_URL = "$ROOT_URL/dao";
    $link = "$ADMIN_URL/truyen/indexAdminTruyen.php";
    // require "$DAO_URL/pdo.php";
    extract($_REQUEST);
    // lấy ra các mảng chung cần dùng
    // $sqlTruyen = "SELECT * FROM truyen";
    // $truyen = select_all($sqlTruyen);

    // $sqlCate = "SELECT * FROM danhmuc";
    // $category = select_all($sqlCate);

    // $sqlChuong = "SELECT * FROM chuong";
    // $chuong = select_all($sqlChuong);

    // $sqlUser = "SELECT * FROM user";
    // $user = select_all($sqlUser);

    if (!isset($_SESSION['user']) || (int)$_SESSION['user']['quyenHan'] < 2) {
        header('location: '.$ROOT_URL.'/index.php');
    }

    if (check_modul("editTruyen")) {
        $pageName = "Sửa Truyện";
        $VIEW_NAME = "editTruyen/editTruyen.php";
    }elseif (check_modul("addChuong")) {
        $pageName = "Thêm Chương";
        $VIEW_NAME = "addChuong/addChuong.php";
    }elseif (check_modul("editChuong")) {
        $pageName = "Sửa Chương";
        $VIEW_NAME = "editChuong/editChuong.php";
    }else {
        $pageName = "Quản Lí Truyện";
        $VIEW_NAME = "addTruyen/addTruyen.php";
    }
    require "../layout.php";
?>