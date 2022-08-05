<?php
    require "../../dao/pdo.php";
    $id = $_GET['idDangDoc'];
    $link = $_GET['link'];
    
    pdo_execute("DELETE FROM dangdoc WHERE idDangDoc=$id");
    header('location: '.$link.'');
    die;
?>