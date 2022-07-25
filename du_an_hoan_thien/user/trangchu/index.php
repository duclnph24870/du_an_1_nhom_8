<?php 
    session_start();
    require "../../public.php";
    $ROOT_URL = "../../../du_an_hoan_thien";
    $CONTENT_URL = "$ROOT_URL/content";
    $ADMIN_URL = "$ROOT_URL/admin";
    $USER_URL = "$ROOT_URL/user";
    $DAO_URL = "$ROOT_URL/dao";
    $pageName = "Trang chủ";
    $VIEW_NAME = "$USER_URL/trangchu/main.php";
    $link = "$USER_URL/trangchu/index.php";
    require "../layout.php";
?>
