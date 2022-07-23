<?php 
    require "../pdo.php";
    if (isset($_GET['typeNoti'])) {
        $typeNoti = $_GET['typeNoti'];
        $linkNoti = $_GET['linkNoti'];
        $idUser1 = $_GET['idUser'];
        $idNotify1 = $_GET['idNotify'];
        if ($typeNoti == 'one') {
            $sql = "SELECT * FROM notify WHERE idNotify = ".$idNotify1."";
            $notify = select_one($sql);
            extract($notify);
            $notifyDaDocNew = trim($idUserDoc).' '.$idUser1;
            $sqlUpdate = "UPDATE `notify` SET `idUserDoc`='".$notifyDaDocNew."' WHERE idNotify=".$idNotify1."";
            pdo_execute($sqlUpdate);
        }
    }

    if (isset($linkNoti)) {
        header("location: ".$linkNoti."");
        die;
    }
?>