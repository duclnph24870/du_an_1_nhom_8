<?php 
    require "../../public.php";
    $CONTENT_URL = "../../content";
    $ADMIN_URL = "../../admin";
    $USER_URL = "../../user";
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