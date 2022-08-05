<?php 
    session_start();
    require "../../public.php";
    $ROOT_URL = "../../../du_an_hoan_thien";
    $CONTENT_URL = "$ROOT_URL/content";
    $ADMIN_URL = "$ROOT_URL/admin";
    $USER_URL = "$ROOT_URL/user";
    $DAO_URL = "$ROOT_URL/dao";
    $pageName = "Quản lí tài khoản";
    $VIEW_NAME = "$USER_URL/usermanager/managerMain.php";
    require "$DAO_URL/pdo.php";
    if (isset($_SESSION['user'])) {
        $pageName = $_SESSION['user']['userName'];
        $link = "$USER_URL/usermanager/index.php";
    }else {
        header('location: '.$ROOT_URL.'/index.php?status=0&message="Bạn cần đăng nhập để thực hiện chức năng này"');
        die;
    }
    require "../layout.php";
?>
<script>
    scrollNoDrifted('userManager');
</script>