<?php 
    require "../../public.php";
    require "../../dao/pdo.php";
    $sql = "SELECT * FROM danhMuc";
    $categorys = select_all($sql);
    
    $theLoai = $_POST['theLoai'];
    $boiCanh = $_POST['boiCanh'];
    $thuocTinh = $_POST['thuocTinh'];
    $tinhCach = $_POST['tinhCach'];
    $luuPhai = $_POST['luuPhai'];
    $thiGiac = $_POST['thiGiac'];
    $link = $_POST['link'];
    $idUser = $_POST['idUser'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateTimeHt = date("Y-m-d H:i:s");

    $arr = [
        'nhom1' => $theLoai,
        'nhom2' => $boiCanh,
        'nhom3' => $thuocTinh,
        'nhom4' => $tinhCach,
        'nhom5' => $luuPhai,
        'nhom6' => $thiGiac,
    ];

    $feedback = [
        'nhom1' => [
            'success' => [],
            'err' => []
        ],
        'nhom2' => [
            'success' => [],
            'err' => []
        ],
        'nhom3' => [
            'success' => [],
            'err' => []
        ],
        'nhom4' => [
            'success' => [],
            'err' => []
        ],
        'nhom5' => [
            'success' => [],
            'err' => []
        ],
        'nhom6' => [
            'success' => [],
            'err' => []
        ],
    ];
   
    foreach ($arr as $k => $cate) {
        // trim($cate);
        if (strlen(trim($cate)) > 0) {
            if (exist_string($cate,',')) {
                $cateArrs = explode(',',$cate);

                // Quyết định số vòng lặp cho vòng con

                if (count($cateArrs) > count($categorys)) {
                    $loopNumber = count($cateArrs);
                }elseif (count($cateArrs) < count($categorys)) {
                    $loopNumber = count($categorys);
                }elseif (count($cateArrs) == count($categorys)) {
                    $loopNumber = count($categorys);
                }

                foreach ($cateArrs as $kArr => $cateArr) {
                    if (strlen(trim($cateArr)) > 5) {
                        $check = true;
                        for ($i = 0; $i < $loopNumber; $i++) {
                            if (isset($categorys[$i])) {
                                if (convert_name(trim($categorys[$i]['tenDanhMuc'])) === convert_name(trim($cateArr))) {
                                    $check = false;
                                    break;
                                }
                            }
                        }
                        if ($check) {
                            if (!isset($feedback[$k]['success'][$cateArr])) {
                                $feedback[$k]['success'][$cateArr] = trim($cateArr);
                            }
                        }else {
                            if (!isset($feedback[$k]['err'][$cateArr])) {
                                $feedback[$k]['err'][$cateArr] = trim($cateArr);
                            }
                        }
                    }
                }
            }else {
                $check1 = true;
                foreach ($categorys as $catePr) {
                    if (convert_name(trim($catePr['tenDanhMuc'])) === convert_name(trim($cate))) {
                        $check1 = false;
                    }
                }

                if ($check1) {
                    if (!isset($feedback[$k]['success'][$cate])) {
                        $feedback[$k]['success'][$cate] = trim($cate);
                    }
                }else {
                    if (!isset($feedback[$k]['err'][$cate])) {
                        $feedback[$k]['err'][$cate] = trim($cate);
                    }
                }
            }
        }else {
            continue;
        }
    }

    
    $messArr = [];
    foreach ($feedback as $k => $fb) {
        // print_r($fb);echo '<br>';
        if (count($fb['success']) > 0) {
            $messArr[$k]['success'] = implode(',',$fb['success']);
            foreach ($fb['success'] as $sc) {
                // isert danh mục vào database
                $sqlIsertCate = "INSERT INTO `danhmuc`(`nhom`, `tenDanhMuc`, `ngayThem`, `idUser`) VALUES ('$k','$sc','$dateTimeHt','$idUser')";
                pdo_execute($sqlIsertCate);
            }
        }

        if (count($fb['err']) > 0) {
            $messArr[$k]['err'] = implode(',',$fb['err']);
        }
    }

    // link phẩn hồi hiển thị cho index
    $linkMess = '';
    foreach ($messArr as $k => $mess) {
        if (isset($mess['success']) && strlen($mess['success']) > 0) {
            $linkMess .= $k.'Success='.$mess['success'].'&';
        }
        if (isset($mess['err']) && strlen($mess['err']) > 0) {
            $linkMess .= $k.'Err='.$mess['err'].'&';
        }
    }

    header("location: ".$link."?".trim($linkMess,'&')."");

?>