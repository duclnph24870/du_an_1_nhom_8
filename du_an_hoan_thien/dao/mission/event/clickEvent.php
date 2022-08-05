<?php 
    require "../../pdo.php";
    require "../../../public.php";
    $name = $_GET['nameEvent'];
    $idUser = $_GET['idUser'];
    $link = $_GET['link'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateTimeHt = date("Y-m-d H:i:s");
    $event = select_one("SELECT * FROM sukien WHERE idUser=$idUser");
    if (isset($event['idUser'])) {
        if (timeDate($event['dateClick'],$dateTimeHt) >= 10) {
            // cập nhập event cho user
            pdo_execute("UPDATE `sukien` SET `nameEvent`='$name',`point`='".($event['point'] + 1)."',`dateClick`='$dateTimeHt' WHERE idSuKien=".$event['idSuKien']."");
            header("location: ../".$link."");
            die;
        }
    }else {
        //thêm mới event 
        pdo_execute("INSERT INTO `sukien`(`nameEvent`,`point`, `idUser`, `dateClick`, `trangThai`) 
        VALUES ('$name',1,$idUser,'$dateTimeHt',1)");
        header("location: ../".$link."");
    }
?>