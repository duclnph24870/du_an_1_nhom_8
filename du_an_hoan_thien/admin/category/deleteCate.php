<?php 
    require "../../dao/pdo.php";
    $idCate = $_POST['checkList'];
    $url = $_GET['link'];
    foreach ($idCate as $i) {
        $sql = "DELETE FROM `danhmuc` WHERE idDanhMuc=$i";
        pdo_execute($sql);
    }
    header('location: '.$url.'?status=1&message="Xóa thành công '.count($idCate).' danh mục"');
    die;
?>