<?php
    session_start(); 
    require "../../public.php";
    $ROOT_URL = "../../../du_an_hoan_thien";
    $CONTENT_URL = "$ROOT_URL/content";
    $ADMIN_URL = "$ROOT_URL/admin";
    $USER_URL = "$ROOT_URL/user";
    $DAO_URL = "$ROOT_URL/dao";
    $pageName = "Lọc truyện";
    $link = "$USER_URL/loctruyen/index.php";
    $VIEW_NAME = "$USER_URL/loctruyen/fillterMain.php";
    require "$DAO_URL/pdo.php";
    require "../layout.php";
?>
<script>
    scrollNoDrifted('userFillter');
</script>