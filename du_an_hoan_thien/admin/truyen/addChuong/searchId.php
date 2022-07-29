<?php
    require "../../../dao/pdo.php";
    $link = $_POST['link'];
    $idTruyen = $_POST['idTruyen'];

    $sql = "SELECT * FROM truyen WHERE idTruyen=$idTruyen";

    if (count(select_all($sql)) > 0) {
        header('location: ../'.$link.'&idTruyen='.$idTruyen.'');
    }elseif (count(select_all($sql)) == 0) {
        header('location: ../'.$link.'&status=0&message="Truyện không tồn tại"');
    }
?>