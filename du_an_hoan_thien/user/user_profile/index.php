<?php 
    session_start();
    require "../../public.php";
    $ROOT_URL = "../../../du_an_hoan_thien";
    $CONTENT_URL = "$ROOT_URL/content";
    $ADMIN_URL = "$ROOT_URL/admin";
    $USER_URL = "$ROOT_URL/user";
    $DAO_URL = "$ROOT_URL/dao";
    $VIEW_NAME = "$USER_URL/user_profile/userProfileMain.php";
    require "$DAO_URL/pdo.php";
    if (isset($_GET['idUser'])) {
        $idUserPro = $_GET['idUser'];
        $userProfile = select_one("SELECT * FROM user WHERE idUser=$idUserPro");
        $pageName = $userProfile['userName'];
        $link = "$USER_URL/user_profile/index.php";
    }else {
        header("location : ".$USER_URL."/trangchu/index.php");
        die;
    }
    require "../layout.php";
?>

<script>
    scrollNoDrifted('userProfile');
</script>
