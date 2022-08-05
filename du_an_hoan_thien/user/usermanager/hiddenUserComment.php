<?php 
    require "../../dao/pdo.php";
    $link = $_GET['link'];
    $user = select_one("SELECT * FROM user WHERE idUser=".$_GET['idUser']."");
    if ($user['trangThaiComment'] == 0) {
        pdo_execute("UPDATE `user` SET `trangThaiComment`= 1  WHERE idUser=".$user['idUser']."");
        header('location: '.$link.'?reload=1');
        die;
    }else {
        pdo_execute("UPDATE `user` SET `trangThaiComment`= 0  WHERE idUser=".$user['idUser']."");
        header('location: '.$link.'?reload=1');
        die;
    }
?>