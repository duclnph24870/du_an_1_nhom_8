<?php 
    session_start();
    require "../../public.php";
    $ROOT_URL = "../../../du_an_hoan_thien";
    $CONTENT_URL = "$ROOT_URL/content";
    $ADMIN_URL = "$ROOT_URL/admin";
    $USER_URL = "$ROOT_URL/user";
    $DAO_URL = "$ROOT_URL/dao";
    $link = "$USER_URL/truyen/index.php";
    $VIEW_NAME = "$USER_URL/truyen/mainTruyen.php";
    require "$DAO_URL/pdo.php";
    if (!isset($_GET['idTruyen'])) {
        header('location: '.$USER_URL.'/loctruyen/index.php');
    }else {
        $pageName = select_one("SELECT * FROM truyen WHERE idTruyen=".$_GET['idTruyen']."")['tenTruyen'];

    }
    require "../layout.php";
?>
