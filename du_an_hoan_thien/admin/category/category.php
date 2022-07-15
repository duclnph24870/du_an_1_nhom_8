<?php 

?>

<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/product.css">
<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/admin.css">
<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/category__ql.css">
<script src="<?=$CONTENT_URL?>/JS/public.js"></script>
<script src="<?=$CONTENT_URL?>/JS/validation.js"></script>

<div class="row">
    <div class="col-12">
        <div class="admin-right">
            <div class="admin-right-item active admin-right-item-productList">
                <div class="admin-right-item-header">
                    <div class="admin-right-item-header-item active">Thêm Thể Loại</div>
                    <div class="admin-right-item-header-item">Danh Sách Thể Loại</div>
                </div>
                <div class="admin-right-item-content">
                    <!-- ==== thêm thể loại === -->
                    <form method="post" class="admin-right-item-content-item admin-right-item-content-item-addCategory active">
                        <div class="admin-right-item-content-item-input">
                            <div>Tên Thể Loại</div>
                            <input name="theLoai" type="text">
                            <span class="addCategory-message success">*Thành công thêm 2 danh mục: Tiên Hiệp, Kiếm Hiệp,<span class="err"><b>Huyền huyễn</b> đã tồn tại</span></span>
                        </div>
                        <div class="admin-right-item-content-item-input">
                            <div>Bối Cảnh Thế Giới</div>
                            <input name="boiCanh" type="text">
                            <span class="addCategory-message err">*hello</span>
                        </div>
                        <div class="admin-right-item-content-item-input">
                            <div>Thuộc Tính</div>
                            <input name="thuocTinh" type="text">
                            <span class="addCategory-message"></span>
                        </div>
                        <div class="admin-right-item-content-item-input">
                            <div>Tính Cách Nhân Vật</div>
                            <input name="tinhCach" type="text">
                            <span class="addCategory-message"></span>
                        </div>
                        <div class="admin-right-item-content-item-input">
                            <div>Lưu Phái</div>
                            <input name="luuPhai" type="text">
                            <span class="addCategory-message"></span>
                        </div>
                        <div class="admin-right-item-content-item-input">
                            <div>Thị Giác</div>
                            <input name="thiGiac" type="text">
                            <span class="addCategory-message"></span>
                        </div>
                        <input type="submit" value="Cập Nhập">
                        <span class="admin-right-item-content-item-ghiChu">*<b>Mẹo</b>: Bạn có thể thêm nhiều thể loại cùng 1 lúc bằng cách chèn dấu ' , ' vào giữa (A,B)</span>
                    </form>

                    <!-- === danh sách thể loại === -->
                    <form method="post" class="admin-right-item-content-item admin-right-item-content-item-list">
                        <div class="table-list">
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
                                            Nhóm
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
                                    <th>Tên Danh Mục</th>
                                    <th>Nhóm <i class="fad fa-sort-up"></i></th>
                                    <th>Người Thêm <i class="fad fa-sort-up"></i></th>
                                    <th class="active">Quyền Hạn <i class="fad fa-sort-up"></i></th>
                                    <th>Ngày Thêm <i class="fad fa-sort-up"></i></th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Tiên Hiệp</td>
                                        <td>Thể Loại</td>
                                        <td><a href="" class="text">Ngọc Đức</a></td>
                                        <td>Quản trị Web</td>
                                        <td> 2 giờ trước <span>( 13/10/2001 )</span></td>
                                        <td><input type="checkbox" name="categoryCheckBox" class="chonCheckBox"></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Tiên Hiệp</td>
                                        <td>Thể Loại</td>
                                        <!-- để link vào tên người thêm  -->
                                        <td><a href="" class="text">Ngọc Đức</a></td>
                                        <td>Quản trị Web</td>
                                        <td> 2 giờ trước <span>( 13/10/2001 )</span></td>
                                        <td><input type="checkbox" name="categoryCheckBox" class="chonCheckBox"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Tiên Hiệp</td>
                                        <td>Thể Loại</td>
                                        <td><a href="" class="text">Ngọc Đức</a></td>
                                        <td>Quản trị Web</td>
                                        <td> 2 giờ trước <span>( 13/10/2001 )</span></td>
                                        <td><input type="checkbox" name="categoryCheckBox" class="chonCheckBox"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Tiên Hiệp</td>
                                        <td>Thể Loại</td>
                                        <td><a href="" class="text">Ngọc Đức</a></td>
                                        <td>Quản trị Web</td>
                                        <td> 2 giờ trước <span>( 13/10/2001 )</span></td>
                                        <td><input type="checkbox" name="categoryCheckBox" class="chonCheckBox"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    validator({
        form: '.admin-right-item-content-item-addCategory',
        errSelector: '.addCategory-message',
        rules: [
            validator.isString('input[name="theLoai"]','Tên danh mục phải là kiểu chữ'),
            validator.maxLength('input[name="theLoai"]',50),
            validator.isString('input[name="boiCanh"]','Tên danh mục phải là kiểu chữ'),
            validator.maxLength('input[name="boiCanh"]',100),
            validator.isString('input[name="thuocTinh"]','Tên danh mục phải là kiểu chữ'),
            validator.maxLength('input[name="thuocTinh"]',50),
            validator.isString('input[name="tinhCach"]','Tên danh mục phải là kiểu chữ'),
            validator.maxLength('input[name="tinhCach"]',50),
            validator.isString('input[name="luuPhai"]','Tên danh mục phải là kiểu chữ'),
            validator.maxLength('input[name="luuPhai"]',50),
            validator.isString('input[name="thiGiac"]','Tên danh mục phải là kiểu chữ'),
            validator.maxLength('input[name="thiGiac"]',50),
        ]
    });
</script>
<script>
    nextPage('.admin-right-item-header-item','.admin-right-item-content-item');
    nextPage('.arrange-btn','.arrange-child__btn');
    kiemLoi('.addCategory-message.invalid');
    checkAll('.admin-right-item-content-item-list','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="categoryCheckBox"]','.checkbox-btn-block-delete');
</script>

