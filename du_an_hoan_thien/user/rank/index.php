<?php 
    session_start();
    require "../../public.php";
    $ROOT_URL = "../../../du_an_hoan_thien";
    $CONTENT_URL = "$ROOT_URL/content";
    $ADMIN_URL = "$ROOT_URL/admin";
    $USER_URL = "$ROOT_URL/user";
    $DAO_URL = "$ROOT_URL/dao";
    $pageName = "Bảng xếp hạng";
    $link = "$USER_URL/rank/index.php";
    $VIEW_NAME = "$USER_URL/rank/main_rank.php";
    require "$DAO_URL/pdo.php";
    require "../layout.php";
?>
<script>
    scrollNoDrifted('userRank');
</script>
