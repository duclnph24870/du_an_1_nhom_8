<?php 
    $ROOT_URL = "/du_an_hoan_thien";
    $CONTENT_URL = "$ROOT_URL/content";
    $ADMIN_URL = "$ROOT_URL/admin";
    $DAO_URL = "$ROOT_URL/dao";
    $USER_URL = "$ROOT_URL/user";

    function check_modul ($modul) {
        return array_key_exists($modul, $_REQUEST);
    }

    // kiểm tra sự tồn tại của 1 chuỗi
    function exist_string ($stringPr,$stringChild) {
        $check = null;
        if (strlen(strstr($stringPr, $stringChild)) > 0) {
            $check = true;
        }else {
            $check = false;
        }
        return $check;
    }
?>