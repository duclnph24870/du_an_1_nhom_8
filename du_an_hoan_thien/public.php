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

    // dòng chữ ngẫu nhiên
    function rand_string( $length ) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $size = strlen( $chars );
        $str = '';

        for( $i = 0; $i < $length; $i++ ) {
        $str .= $chars[ rand( 0, $size - 1 ) ];

        }

        return $str;
    }

    function timeDate($startdate,$enddate){ 
        $starttimestamp = strtotime($startdate); 
        $endtimestamp = strtotime($enddate); 
        $difference = abs($endtimestamp - $starttimestamp)/60; 
        return floor($difference); 
    }

    function timeDateS($startdate,$enddate){ 
        $starttimestamp = strtotime($startdate); 
        $endtimestamp = strtotime($enddate); 
        $difference = abs($endtimestamp - $starttimestamp); 
        return floor($difference); 
    }
    
    function timeCount($timeC) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $dateTimePersent = date("Y-m-d H:i:s");
        $late = timeDate($timeC,$dateTimePersent);
        $result = '';
        if ($late <= 1) {
            $result = 'Vừa xong';
        }elseif ($late > 1 && $late < 60) {
            $result = floor($late).' phút trước';
        }elseif ($late >= 60 && $late< 1440) {
            $result = floor($late/60).' giờ trước';
        }elseif ($late >= 1440 && $late<43200) {
            $result = floor($late/1440).' ngày trước';
        }elseif ($late >= 43200 && $late<518400) {
            $result = floor($late/43200).' tháng trước';
        }elseif ($late>=518400) {
            $result = floor($late/518400).' năm trước';
        }

        return $result;
    }

    function showQuyenHan ($quyenHan) {
        $result = '';
        if ($quyenHan == 1) {
            $result = 'Bạn Đọc';
        }elseif ($quyenHan == 2) {
            $result = 'Người Đăng Truyện';
        }elseif ($quyenHan == 3) {
            $result = 'Người Kiểm Duyệt';
        }elseif ($quyenHan == 4) {
            $result = 'Quản Trị Web';
        }elseif ($quyenHan == 5) {
            $result = "Boss";
        }
        return $result;
    }

    function select_idChuong($numberChuong,$chuongArr,$bo) {
        $idChuong = null;
        //true lấy chuong sau
        // false lấy chương trước
        if ($bo) {
            foreach ($chuongArr as $c) {
                if ($c['soChuong'] == (int)$numberChuong + 1) {
                    $idChuong = $c['idChuong'];
                    break;
                }
            }
        }else {
            foreach ($chuongArr as $c) {
                if ($c['soChuong'] == (int)$numberChuong - 1) {
                    $idChuong = $c['idChuong'];
                    break;
                }
            }
        }
        return $idChuong;
    }

    function checkMission ($type,$idUser) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $y = date("Y");
        $m = date("m");
        $d = date("d");
        
        switch ($type) {
            // key kiểm tra nhiệm vụ điểm danh
            case 'diemDanh':
                $result = true;
                $sql = "SELECT * FROM `nhiemvu` WHERE idUser=$idUser AND YEAR(dateHoanThanh) = $y AND MONTH(dateHoanThanh) = $m AND DAY(dateHoanThanh) = $d AND tieuDe LIKE '%Điểm%Danh%'";
                $nhiemVu = select_all($sql);
                if (count($nhiemVu) > 0) {
                    $result = false;
                }
                return $result;
                break;

            // key kiểm tra nhiệm vụ đánh giá 5* 1 truyện bất kỳ
            case 'danhGia':
                $ht = select_all("SELECT * FROM `nhiemvu` WHERE idUser=$idUser AND YEAR(dateHoanThanh) = $y AND MONTH(dateHoanThanh) = $m AND DAY(dateHoanThanh) = $d AND tieuDe LIKE '%Đánh%Giá%'");
                $sql = "SELECT * FROM `danhgia` WHERE idUser=$idUser AND YEAR(dateDanhGia) = $y AND MONTH(dateDanhGia) = $m AND DAY(dateDanhGia) = $d AND tongHop=5";
                $danhGia = select_all($sql);
                $result = false;
                if (count($danhGia) > 0 && count($ht) == 0) {
                    $result = true;
                }
                return $result;
                break;
            
            // key kiểm tra thêm 1 bình luận
            case 'comment':
                $result = false;
                $ht = select_all("SELECT * FROM `nhiemvu` WHERE idUser=$idUser AND YEAR(dateHoanThanh) = $y AND MONTH(dateHoanThanh) = $m AND DAY(dateHoanThanh) = $d AND tieuDe LIKE '%Comment%'");
                $sql = "SELECT * FROM `comment` WHERE idUser=$idUser AND YEAR(dateComment) = $y AND MONTH(dateComment) = $m AND DAY(dateComment) = $d";
                $comment = select_all($sql);
                if (count($comment) > 0 && count($ht) == 0) {
                    $result = true;
                }
                return $result;
                break;
        }
    }

    function compareDate ($date) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $dateTimePersent = date("Y-m-d");
        if (strtotime($date) < strtotime($dateTimePersent)) {
            return true;
        }else {
            return false;
        }
    }

    function selectAllIdUser () {
        $users = select_all("SELECT * FROM user");
        $idUser = [];
        for ($i = 0;$i < count($users);$i++) {
            $idUser[] = $users[$i]['idUser'];
        }
        return trim(implode(' ',$idUser));
    }

    function selectNameCate ($idCate) {
        $sql = "SELECT * FROM danhmuc WHERE idDanhMuc=$idCate";
        return select_one($sql)['tenDanhMuc'];
    }

    function checkTimeComment ($nameVariable) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $dateTimePersent = date("Y-m-d H:i:s");
        $timeCheck = $_SESSION[$nameVariable];
        if (isset($timeCheck)) {
            if (timeDate($timeCheck,$dateTimePersent) >= 5) {
                return true;
            }else {
                return false;
            }
        }else {
            return true;
        }
    }

    function checkView ($nameVariable) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $dateTimePersent = date("Y-m-d H:i:s");
        $timeCheck = $_SESSION[$nameVariable];
        if (isset($timeCheck)) {
            if (timeDateS($timeCheck,$dateTimePersent) >= 30) {
                return true;
            }else {
                return false;
            }
        }else {
            return true;
        }
    }
?>