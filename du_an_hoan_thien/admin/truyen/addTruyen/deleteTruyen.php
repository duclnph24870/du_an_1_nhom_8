<?php 
    require "../../../dao/pdo.php";
    require "../../../public.php";
    $idTruyens = $_POST['truyenCheckBox'];
    $url = $_GET['link'];

    foreach ($idTruyens as $i) {
        // xóa truyện
        delete_truyen_one($i);
    }   


    header('location: ../'.$url.'?status=1&message="Xóa thành công '.count($idTruyens).' truyện"');
    die;
?>