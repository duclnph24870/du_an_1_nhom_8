<?php 
    require "../../public.php";
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date24h = date("Y-m-d").' 00:00:00';
    $dateTimePersent = date("Y-m-d H:i:s");
    echo timeDate($date24h,"2022-08-03 00:00:00")/60;
?>