<?php 
    session_start();
    require "../../public.php";
    $ROOT_URL = "../../../du_an_hoan_thien";
    $CONTENT_URL = "$ROOT_URL/content";
    $ADMIN_URL = "$ROOT_URL/admin";
    $USER_URL = "$ROOT_URL/user";
    $DAO_URL = "$ROOT_URL/dao";
    $pageName = "Product";
    $link = "$USER_URL/truyen/index.php";
    $VIEW_NAME = "$USER_URL/truyen/mainTruyen.php";
    require "../layout.php";
?>
