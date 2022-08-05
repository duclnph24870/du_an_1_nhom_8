<?php 
    session_start();
    require "../../public.php";
    $ROOT_URL = "../../../du_an_hoan_thien";
    $CONTENT_URL = "$ROOT_URL/content";
    $ADMIN_URL = "$ROOT_URL/admin";
    $USER_URL = "$ROOT_URL/user";
    $DAO_URL = "$ROOT_URL/dao";
    require "$DAO_URL/pdo.php";
    if(isset($_GET['idChuong'])) {
        $idChuong = $_GET['idChuong'];
        $chuong = select_one("SELECT * FROM chuong WHERE idChuong=$idChuong");
    }
    $pageName = "Chương ".$chuong['soChuong'].": ".$chuong['tieuDe'];
    $link = "$USER_URL/loctruyen/index.php";
    $VIEW_NAME = "$USER_URL/chuong/chuongMain.php";
    require "../layout.php";
?>
<script>
    scrollNoDrifted('userChuong');
</script>
