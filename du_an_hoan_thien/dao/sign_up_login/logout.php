<?php
    session_start();
    session_destroy();
    $url = $_GET['link'];
    header('location: '.$url.'?status=1&message="Đăng xuất thành công!"');
    die;
?>