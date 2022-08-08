<?php 
    //category
    $sqlCate = "SELECT * FROM danhmuc";
    $category = select_all($sqlCate);

    // kiểm tra xem có phải để duyệt truyện hay không
    $checkDuyet = isset($_GET['duyet']);

    if (isset($_GET['idTruyen'])) {
        $idTruyenEdit = $_GET['idTruyen'];
        $sqlTruyenEdit = "SELECT * FROM truyen WHERE idTruyen=$idTruyenEdit";
        $truyenEdit = select_one($sqlTruyenEdit);
        extract($truyenEdit);
    }

?>

<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/product.css">
<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/admin.css">
<script src="<?=$CONTENT_URL?>/JS/public.js"></script>
<script src="<?=$CONTENT_URL?>/JS/validateFile.js"></script>

<div class="row">
    <div class="col-12">
        <div class="admin-right">
            <div class="admin-right-item active admin-right-item-productList">
                <div class="admin-right-item-content">
                    <!-- === Sửa truyện === -->
                    <form method="POST" action="editTruyen/updateTruyen.php" enctype="multipart/form-data" id="product__qlAdd" class="admin-right-item-content-item active">
                        <div class="admin-right-item-content-item-input">
                            <input type="file" hidden name="imgTruyen" id="admin-file-input">
                            <span class="addProduct-message d-none"></span>
                        </div>
                        <input type="number" value="<?=$_SESSION['user']['idUser']?>" name="idUser" hidden>
                        <input type="text" value="<?=$_SESSION['user']['quyenHan']?>" name="quyenHan" hidden>
                        <input type="text" value="<?=$link?>" name="link" hidden>
                        <input type="number" name="idTruyenEdit" hidden value="<?=$idTruyenEdit?>">
                        <label for="admin-file-input">
                            <div class="admin-file-input-img">
                                <img src="<?=$CONTENT_URL?>/IMG/<?=$imgTruyen?>" alt="">
                                <div class="admin-file-input-icon">
                                    <i class="fas fa-camera"></i>
                                </div>
                            </div>
                            <div class="imgErr">Chọn hình ảnh truyện</div>
                        </label>
                        <hr>
                        <div class="admin-right-item-content-item-input">
                            <div>Tên Truyện</div>
                            <input type="text" name="tenTruyen" value="<?=$tenTruyen?>">
                            <span class="addProduct-message"></span>
                        </div>
                        <div class="admin-right-item-content-item-input">
                            <div>Tác Giả</div>
                            <input type="text" name="tacGia" value="<?=$tacGia?>">
                            <span class="addProduct-message"></span>
                        </div>
                        <div class="admin-right-item-content-item-input">
                            <div>Giới Thiệu Ngắn</div>
                            <textarea name="gioiThieu" id="" cols="30" rows="5" class="w-100"><?=$gioiThieu?></textarea>
                            <span class="addProduct-message"></span>
                        </div>
                        <div class="admin-right-item-content-item-select">
                            <div class="admin-right-item-content-item-select-block">
                                <div>Thể Loại</div>
                                <select name="nhom1" id="">
                                    <?php foreach ($category as $k => $cate) :?>
                                        <?php extract($cate);
                                             if ($nhom === 'nhom1') :?>
                                            <option value="<?=$idDanhMuc?>" <?=$idDanhMuc == $nhom1 ? 'selected' : ''?>><?=$tenDanhMuc?></option>
                                        <?php endif?>
                                    <?php endforeach?>
                                </select>
                            </div>
                            <div class="admin-right-item-content-item-select-block">
                                <div>Thuộc Tính</div>
                                <select name="nhom3" id="">
                                    <?php foreach ($category as $k => $cate) :?>
                                        <?php extract($cate);
                                             if ($nhom === 'nhom3') :?>
                                            <option value="<?=$idDanhMuc?>" <?=$idDanhMuc == $nhom3 ? 'selected' : ''?>><?=$tenDanhMuc?></option>
                                        <?php endif?>
                                    <?php endforeach?>
                                </select>
                            </div>
                            <div class="admin-right-item-content-item-select-block">
                                <div>Tính Cách Nhân Vật</div>
                                <select name="nhom4" id="">
                                    <?php foreach ($category as $k => $cate) :?>
                                        <?php extract($cate);
                                             if ($nhom === 'nhom4') :?>
                                            <option value="<?=$idDanhMuc?>" <?=$idDanhMuc == $nhom4 ? 'selected' : ''?>><?=$tenDanhMuc?></option>
                                        <?php endif?>
                                    <?php endforeach?>
                                </select>
                            </div>
                            <div class="admin-right-item-content-item-select-block">
                                <div>Bối Cảnh Thế Giới</div>
                                <select name="nhom2" id="">
                                    <?php foreach ($category as $k => $cate) :?>
                                        <?php extract($cate);
                                             if ($nhom === 'nhom2') :?>
                                            <option value="<?=$idDanhMuc?>"<?=$idDanhMuc == $nhom2 ? 'selected' : ''?>><?=$tenDanhMuc?></option>
                                        <?php endif?>
                                    <?php endforeach?>
                                </select>
                            </div>
                            <div class="admin-right-item-content-item-select-block">
                                <div>Lưu Phái</div>
                                <select name="nhom5" id="">
                                    <?php foreach ($category as $k => $cate) :?>
                                        <?php extract($cate);
                                             if ($nhom === 'nhom5') :?>
                                            <option value="<?=$idDanhMuc?>" <?=$idDanhMuc == $nhom5 ? 'selected' : ''?>><?=$tenDanhMuc?></option>
                                        <?php endif?>
                                    <?php endforeach?>
                                </select>
                            </div>
                            <div class="admin-right-item-content-item-select-block">
                                <div>Thị Giác</div>
                                <select name="nhom6" id="">
                                    <?php foreach ($category as $k => $cate) :?>
                                        <?php extract($cate);
                                             if ($nhom === 'nhom6') :?>
                                            <option value="<?=$idDanhMuc?>" <?=$idDanhMuc == $nhom6 ? 'selected' : ''?>><?=$tenDanhMuc?></option>
                                        <?php endif?>
                                    <?php endforeach?>
                                </select>
                            </div>

                            <div class="admin-right-item-content-item-select-block">
                                <div>Tình Trạng</div>
                                <select name="tinhTrang">
                                    <option value="0" <?=$tinhTrang == 0 ? 'selected' : ''?>>Đang Ra</option>
                                    <option value="1" <?=$tinhTrang == 1 ? 'selected' : ''?>>Đã Hoàn Thành</option>
                                </select>
                            </div>
                        </div>
                        <?php if ($checkDuyet) :?>
                            <input type="submit" name="insertSubmit" value="Thông Qua">
                            <input type="text" name="duyet" value="0" hidden>
                        <?php endif?>

                        <?php if (!$checkDuyet) :?>
                            <input type="submit" name="insertSubmit" value="Cập Nhập">
                        <?php endif?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
        previewUpImg('#product__qlAdd','.admin-file-input-img','#admin-file-input','.imgErr','off');
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        validator({
            form: '#product__qlAdd',
            formGroupSelector: '.admin-right-item-content-item-input',
            errSelector: '.addProduct-message',
            rules: [
            validator.isRequied('textarea[name="gioiThieu"]','*Giới thiệu không được bỏ trống'),
            validator.isRequied('input[name="tenTruyen"]','*Tên truyện không được bỏ trống'),
            validator.isRequied('input[name="tacGia"]','*Tên tác giả không được bỏ trống'),
            validator.minLength('input[name="tacGia"]',5,'*Tên tác giả không dưới 5 ký tự'),
            validator.maxLength('input[name="tacGia"]',100,'*Tên tác giả dài tối đa 100 ký tự'),
            validator.minLength('input[name="tenTruyen"]',5,'*Tên truyện không dưới 5 ký tự'),
            validator.maxLength('input[name="tenTruyen"]',100,'*Tên truyện dài tối đa 100 ký tự'),
            validator.minLength('textarea[name="gioiThieu"]',20,'*Giới thiệu nội dung không dưới 20 ký tự'),
            validator.maxLength('textarea[name="gioiThieu"]',1000,'*Giới thiệu nội dung dài tối đa 1000 ký tự'),
            validator.isRequied('input[name="tacGia"]','*Tên tác giả không được bỏ trống'),
            validator.isRequied('input[name="imgTruyen"]',''),
            ],
        });
    })
</script>