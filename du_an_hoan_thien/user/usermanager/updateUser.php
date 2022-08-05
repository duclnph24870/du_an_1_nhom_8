<?php 
    require "../../dao/pdo.php";
    $idUser = $_POST['idUser'];
    $img = $_FILES['imgUser'];
    $userName = $_POST['userProfileName'];
    $ngaySinh = $_POST['ngaySinh'];
    $sex = $_POST['sex'];
    $gioiThieu = $_POST['gioiThieu'];
    $link = $_POST['link'];

    if (strlen($userName) > 3) {
        move_uploaded_file($_FILES['imgUser']['tmp_name'],'../../content/IMG/'.$_FILES['imgUser']['name']);
        $imgName = $img['name'];
        pdo_execute("UPDATE `user` SET `userName`='$userName',`imgUser`='$imgName',`ngaySinh`='$ngaySinh',`sex`='$sex',`gioiThieu`='$gioiThieu' WHERE idUser=$idUser");
        header('location: '.$link.'?status=1&message="Cập nhập thông tin thành công"&reload=1');
        die;
    }else {
        header('location: '.$link.'?status=0&message="Username phải dài trên 3 ký tự"');
        die;
    }
?>