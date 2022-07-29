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

    // chuyển chữ có dấu thành không dấu
    function convert_name($str) {
		$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
		$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
		$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
		$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
		$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
		$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
		$str = preg_replace("/(đ)/", 'd', $str);
		$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
		$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
		$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
		$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
		$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
		$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
		$str = preg_replace("/(Đ)/", 'D', $str);
		return strtolower($str);
	}

    // xóa truyện theo id
    function delete_truyen_one ($id) {
        // Xóa truyện
        $sql = "DELETE FROM `truyen` WHERE idTruyen=$id";
        pdo_execute($sql);

        // Xóa truyện đang đọc
        $sqlDangDoc = "DELETE FROM `dangdoc` WHERE idTruyen=$id";
        pdo_execute($sqlDangDoc);

        // Xoa truyện đánh dấu
        $sqlDanhDau = "DELETE FROM `danhdau` WHERE idTruyen=$id";
        pdo_execute($sqlDanhDau);

        //Xóa đánh giá truyện
        $sqlDanhGia = "DELETE FROM `danhgia` WHERE idTruyen=$id";
        pdo_execute($sqlDanhGia);

        // Xoa trả lời đánh giá
        $sqlRepDanhGia = "DELETE FROM `replydanhgia` WHERE idTruyen=$id";
        pdo_execute($sqlRepDanhGia);

        //Xóa comment truyện
        $sqlComment = "DELETE FROM `comment` WHERE idTruyen=$id";
        pdo_execute($sqlComment);

        // Xóa trả lời comment
        $sqlRepComment = "DELETE FROM `replycomment` WHERE idTruyen=$id";
        pdo_execute($sqlRepComment);
        
        //Xóa thông báo truyện
        $sqlNoti = "DELETE FROM `notify` WHERE idTruyen=$id";
        pdo_execute($sqlNoti);
    }

    function rand_string( $length ) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $size = strlen( $chars );
        $str = '';

        for( $i = 0; $i < $length; $i++ ) {
        $str .= $chars[ rand( 0, $size - 1 ) ];

        }

        return $str;
    }
?>