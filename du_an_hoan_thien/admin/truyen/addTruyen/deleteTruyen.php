<?php 
    require "../../../dao/pdo.php";
    require "../../../public.php";
    $url = $_GET['link'];
    if (isset($_POST['truyenCheckBox'])) {
        $idTruyens = $_POST['truyenCheckBox'];
        foreach ($idTruyens as $i) {
            // xóa truyện
            delete_truyen_one($i);
        }
        header('location: ../'.$url.'?status=1&message="Xóa thành công '.count($idTruyens).' truyện"');
        die;
    }else {
        $idTruyens = $_GET['idTruyen'];
        delete_truyen_one($idTruyens);
        header('location: ../'.$url.'?status=1&message="Xóa truyện thành công"');
        die;
    }


    


    
?>