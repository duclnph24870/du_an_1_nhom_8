<?php 
    require "../../dao/pdo.php";
    $typeDD = $_GET['type'];
    $idTruyen = $_GET['idTruyen'];
    $idUser = $_GET['idUser'];
    if ($typeDD == 'insert') {
        pdo_execute("INSERT INTO `danhdau`(`idTruyen`, `idUser`) VALUES ($idTruyen,$idUser)");
        header('location: index.php?idTruyen='.$idTruyen.'');
        die;
    }elseif ($typeDD == 'delete') {
        pdo_execute("DELETE FROM `danhdau` WHERE idTruyen=$idTruyen AND idUser=$idUser");
        header('location: index.php?idTruyen='.$idTruyen.'');
        die;
    }elseif ($typeDD == 'userDelete') {
        $link = $_GET['link'];
        pdo_execute("DELETE FROM `danhdau` WHERE idTruyen=$idTruyen AND idUser=$idUser");
        header('location: '.$link.'');
        die;
    }
?>