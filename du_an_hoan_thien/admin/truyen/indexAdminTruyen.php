<?php 
    require "../../public.php";
    $ROOT_URL = "../../../du_an_hoan_thien";
    $CONTENT_URL = "$ROOT_URL/content";
    $ADMIN_URL = "$ROOT_URL/admin";
    $USER_URL = "$ROOT_URL/user";
    $DAO_URL = "$ROOT_URL/dao";
    $link = "$ADMIN_URL/truyen/indexAdminTruyen.php";
    extract($_REQUEST);
    if (check_modul("editTruyen")) {
        $pageName = "Sửa Truyện";
        $VIEW_NAME = "editTruyen.php";
    }elseif (check_modul("addChuong")) {
        $pageName = "Thêm Chương";
        $VIEW_NAME = "addChuong.php";
    }elseif (check_modul("editChuong")) {
        $pageName = "Sửa Chương";
        $VIEW_NAME = "editChuong.php";
    }else {
        $pageName = "Quản Lí Truyện";
        $VIEW_NAME = "addTruyen.php";
    }
    require "../layout.php";
?>