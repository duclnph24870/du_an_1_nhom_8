<?php 
    $sqlCate = "SELECT * FROM danhmuc";
    $category = select_all($sqlCate);
?>

<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/product.css">
<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/admin.css">
<script src="<?=$CONTENT_URL?>/JS/public.js"></script>
<script src="<?=$CONTENT_URL?>/JS/validateFile.js"></script>

<div class="row">
    <div class="col-12">
        <div class="admin-right">
            <div class="admin-right-item active admin-right-item-productList">
                <div class="admin-right-item-header">
                    <div class="admin-right-item-header-item active">Thêm Truyện</div>
                    <div class="admin-right-item-header-item">Danh Sách Truyện</div>
                    <a href="<?=$ADMIN_URL?>/truyen/indexAdminTruyen.php?addChuong=1" class="admin-right-item-header-item-link">Thêm Chương</a>
                </div>
                <div class="admin-right-item-content">
                    <!-- === thêm truyện === -->
                    <form method="POST" enctype="multipart/form-data" id="product__qlAdd" class="admin-right-item-content-item active">
                        <div class="admin-right-item-content-item-input">
                            <input type="file" hidden name="imgTruyen" id="admin-file-input">
                            <span class="addProduct-message d-none"></span>
                        </div>
                        <label for="admin-file-input">
                            <div class="admin-file-input-img">
                                <img src="https://static.cdnno.com/user/d6cebf19fbb6661f86b87df067ab7bc2/200.jpg?1598008352" alt="">
                                <div class="admin-file-input-icon">
                                    <i class="fas fa-camera"></i>
                                </div>
                            </div>
                            <div class="imgErr">Chọn hình ảnh truyện</div>
                        </label>
                        <hr>
                        <div class="admin-right-item-content-item-input">
                            <div>Tên Truyện</div>
                            <input type="text" name="tenTruyen">
                            <span class="addProduct-message"></span>
                        </div>
                        <div class="admin-right-item-content-item-input">
                            <div>Tác Giả</div>
                            <input type="text" name="tacGia">
                            <span class="addProduct-message"></span>
                        </div>
                        <div class="admin-right-item-content-item-input">
                            <div>Giới Thiệu Ngắn</div>
                            <textarea name="gioiThieu" id="" cols="30" rows="5" class="w-100"></textarea>
                            <span class="addProduct-message"></span>
                        </div>
                        <div class="admin-right-item-content-item-select">
                            <div class="admin-right-item-content-item-select-block">
                                <div>Thể Loại</div>
                                <select name="nhom1" id="">
                                    <?php foreach ($category as $k => $cate) :?>
                                        <?php extract($cate);
                                             if ($nhom === 'nhom1') :?>
                                            <option value="<?=$idDanhMuc?>"><?=$tenDanhMuc?></option>
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
                                            <option value="<?=$idDanhMuc?>"><?=$tenDanhMuc?></option>
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
                                            <option value="<?=$idDanhMuc?>"><?=$tenDanhMuc?></option>
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
                                            <option value="<?=$idDanhMuc?>"><?=$tenDanhMuc?></option>
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
                                            <option value="<?=$idDanhMuc?>"><?=$tenDanhMuc?></option>
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
                                            <option value="<?=$idDanhMuc?>"><?=$tenDanhMuc?></option>
                                        <?php endif?>
                                    <?php endforeach?>
                                </select>
                            </div>
                        </div>
                        <input type="submit" name="insertSubmit" value="Đăng Truyện">
                    </form>
                    <!-- ==== danh sách truyện ==== -->
                    <div class="admin-right-item-content-item">
                        <div class="table-list productList">
                            <!-- === header === -->
                            <div class="table-list__header">
                                <div class="table-list__header-input-block">
                                    <input type="text" placeholder="Search User">
                                    <i class="fas fa-search"></i>
                                </div>
                                <div class="table-list__header-btn checkbox-btn-block d-flex justify-content-end">
                                    <span class="btn-category block-icon blue checkbox-btn-block-iconCheck">
                                        <i class="fa-solid fa-x"></i>
                                        <span>Chọn</span>
                                        <span>Đóng</span>
                                    </span>
                                    <span class="btn-category cam btn-allCheck">
                                        <span>Chọn Tất Cả</span>
                                        <span> Bỏ Chọn Tất Cả</span>
                                    </span>
                                    
                                    <a href="" class="btn-category block-icon toi checkbox-btn-block-delete">
                                        <i class="fa-solid fa-trash"></i>
                                        Xóa các mục đã chọn
                                    </a>
                                    <span class="btn-category block-icon vang arrange-btn">
                                        <i class="fa-solid fa-arrow-down-short-wide"></i>
                                        Sắp Xếp
                                    </span>
                                    <div class="arrange-child__btn">
                                        <span class="btn-category block-icon green">
                                            <i class="fa-solid fa-clock"></i>
                                            Ngày Thêm
                                        </span>
                                        <span class="btn-category block-icon toi">
                                            <i class="fa-solid fa-arrow-down-a-z"></i>
                                            Tên Truyện
                                        </span>
                                        <span class="btn-category block-icon primary">
                                            <i class="fa-solid fa-user-tie"></i>
                                            Người Thêm
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- === table ==== -->
                            <table class="table-list__content">
                                <thead>
                                    <th>ID <i class="fad fa-sort-up"></i></th>
                                    <th>Tên Truyện</th>
                                    <th>Tác Giả <i class="fad fa-sort-up"></i></th>
                                    <th>Người Thêm <i class="fad fa-sort-up"></i></th>
                                    <th class="active">Cập Nhập <i class="fad fa-sort-up"></i></th>
                                    <th>Ngày Thêm <i class="fad fa-sort-up"></i></th>
                                    <th>Tình Trạng <i class="fad fa-sort-up"></i></th>
                                    <th>Số Chương <i class="fad fa-sort-up"></i></th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Đấu Phá Thương Khung</td>
                                        <td>Thiên Tằm Thổ Đậu</td>
                                        <td><a href="" class="text">Ngọc Đức</a></td>
                                        <td>2 giờ trước</td>
                                        <td> 2 giờ trước</td>
                                        <td>Đang Ra</td>
                                        <td>24</td>
                                        <td><a href="indexAdminTruyen.php?editTruyen=0?idTruyen=0" class="editTruyen" title="Sửa Truyện"><i class="fad fa-edit"></i></a><a href="indexAdminTruyen.php?addChuong=0?idChuong=0" class="addChuong" title="Đăng Chương"><i class="fad fa-books-medical"></i></a><input type="checkbox" name="truyenCheckBox" class="chonCheckBox"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>1</td>
                                        <td>Đấu Phá Thương Khung</td>
                                        <td>Thiên Tằm Thổ Đậu</td>
                                        <td><a href="" class="text">Ngọc Đức</a></td>
                                        <td>2 giờ trước</td>
                                        <td> 2 giờ trước</td>
                                        <td>Đang Ra</td>
                                        <td>24</td>
                                        <td><a href="" class="editTruyen" title="Sửa Truyện"><i class="fad fa-edit"></i></a><a href="" class="addChuong" title="Đăng Chương"><i class="fad fa-books-medical"></i></a><input type="checkbox" name="truyenCheckBox" class="chonCheckBox"></td>
                                    </tr>

                                    <tr>
                                        <td>1</td>
                                        <td>Đấu Phá Thương Khung</td>
                                        <td>Thiên Tằm Thổ Đậu</td>
                                        <td><a href="" class="text">Ngọc Đức</a></td>
                                        <td>2 giờ trước</td>
                                        <td> 2 giờ trước</td>
                                        <td>Đang Ra</td>
                                        <td>24</td>
                                        <td><a href="" class="editTruyen" title="Sửa Truyện"><i class="fad fa-edit"></i></a><a href="" class="addChuong" title="Đăng Chương"><i class="fad fa-books-medical"></i></a><input type="checkbox" name="truyenCheckBox" class="chonCheckBox"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <form method="post" class="pagination">
                                <div class="pagination__item text"><</div>
                                <div class="pagination__item text active">1</div>
                                <div class="pagination__item text">2</div>
                                <div class="pagination__item text">3</div>
                                <div class="pagination__item text">4</div>
                                <div class="pagination__item text">></div>
                                <input type="text" value="1" class="pagination__input">
                                <input type="submit" value="Go" class="pagination__submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    nextPage('.admin-right-item-header-item','.admin-right-item-content-item');
    nextPage('.arrange-btn','.arrange-child__btn');
    // previewUpImg('#product__qlAdd','.admin-file-input-img','#admin-file-input','.imgErr','off');
    checkAll('.productList','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="truyenCheckBox"]','.checkbox-btn-block-delete');
</script>
<!-- <script>
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
</script> -->