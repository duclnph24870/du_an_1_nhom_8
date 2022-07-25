<?php 
    $array1 = array('Huyền Huyễn','Tiên Hiệp'); 
    $array2 = array('Tiên Hiệp','Võng Du','Cạnh Kỹ','Cạnh 1 Kỹ');
    if (count($array1) > count($array2)) {
        $loopNumber = count($array1);
    }elseif (count($array1) < count($array2)) {
        $loopNumber = count($array2);
    }elseif (count($array1) == count($array2)) {
        $loopNumber = count($array2);
    }

    foreach ($array1 as $k => $arr1) {
        echo $k.'<br><br><br><br>';
        for ($i = 0; $i < $loopNumber;$i++) {
            if (isset($array2[$i])) {
                $check = $arr1 === $array2[$i];
                if ($check) {
                    $mess = 'Đúng';
                }else {
                    $mess = 'Sai';
                }
                echo $arr1.'==='.$array2[$i].'='.$mess.'<br>';
            }else {
                break;
            }
        }
        echo 'end'.$k.'<br><br><br><br>';
    }
?>