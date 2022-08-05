<?php 
    require "../../dao/pdo.php";
    require "../../public.php";
    $idUser = $_GET['idUser'];
    $link = $_GET['link'];
    $notifys = select_all("SELECT * FROM notify WHERE idUser LIKE '%$idUser%'");
    foreach ($notifys as $noti) {
        $idUserDoc = $noti['idUserDoc'];
        if (!exist_string($idUserDoc,$idUser)) {
            $idUserDocNew = trim(trim($idUserDoc).' '.$idUser);
            pdo_execute("UPDATE `notify` SET `idUserDoc`='$idUserDocNew' WHERE idNotify=".$noti['idNotify']."");
        }
    }
    header('location: '.$link.'');
    
?>