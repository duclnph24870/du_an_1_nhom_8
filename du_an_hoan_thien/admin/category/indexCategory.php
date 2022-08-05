<?php 
    session_start();
    require "../../public.php";
    $ROOT_URL = "../../../du_an_hoan_thien";
    $CONTENT_URL = "$ROOT_URL/content";
    $ADMIN_URL = "$ROOT_URL/admin";
    $USER_URL = "$ROOT_URL/user";
    $DAO_URL = "$ROOT_URL/dao";

    if (!isset($_SESSION['user']) || (int)$_SESSION['user']['quyenHan'] < 3) {
        header('location: '.$ROOT_URL.'/index.php');
    }

    $pageName = "Thêm thể loại";
    $link = "$ADMIN_URL/category/indexCategory.php";
    $VIEW_NAME = "category.php";
    require "../layout.php";
?>
<script>
    scrollNoDrifted('adminCate');
</script>