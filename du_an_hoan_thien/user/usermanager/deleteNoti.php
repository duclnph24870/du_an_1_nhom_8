<?php 
    require "../../dao/pdo.php";
    $idNoti = $_POST['notifyCheckBox'];
    $link = $_POST['link'];
    $idUser = $_POST['idUser'];

    foreach ($idNoti as $idNoti) {
        // pdo_execute("UPDATE `notify` SET`idUserXoa`='' WHERE idNotify=$idNoti");
        $notify = select_one("SELECT * FROM notify WHERE idNotify=$idNoti");
        $idNotiXoa = $notify['idUserXoa'];
        $newIdUserXoa = str_replace('-1 ','',trim($idNotiXoa).' '.$idUser);
        if (trim($newIdUserXoa) == trim($notify['idUser'])) {
            pdo_execute("DELETE FROM notify WHERE idNotify=$idNoti");
        }else {
            pdo_execute("UPDATE `notify` SET`idUserXoa`='$newIdUserXoa' WHERE idNotify=$idNoti");
        }
    }
    header('location: '.$link.'');
    die;
?>