<?php 
    require "../public.php";
    $keyword = $_POST['header__search-input'];
    $linkCate = $_POST['linkCate'];

    header('location: ../user/loctruyen/index.php?keyword='.trim($keyword).'');
?>