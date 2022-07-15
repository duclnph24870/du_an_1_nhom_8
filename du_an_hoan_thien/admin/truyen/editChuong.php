<?php 

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
                    <div class="admin-right-item-header-item active">Sửa Chương</div>
                    <div class="admin-right-item-header-item">Danh Sách Chương</div>
                    <a href="indexAdminTruyen.php?addChuong=1" class="admin-right-item-header-item-link">Thêm Chương</a>
                </div>
                <div class="admin-right-item-content">
                    <!-- === Sửa chương === -->
                    <form method="post" class="admin-right-item-content-item addChuongForm active">
                        <div class="admin-right-item-content-item-input d-block">
                            <div>Mã Truyện</div>
                            <input type="text" name="idTruyen" placeholder="Mã Truyện">
                            <span class="addChuong-message"></span>
                            <input type="submit" value="Tìm Kiếm">
                        </div>
                        <div class="admin-right-item-content-item-select">
                            <div class="admin-right-item-content-item-select-block">
                                <div>Tình Trạng</div>
                                <select name="" id="">
                                    <option value="1">Đã Hoàn Thành</option>
                                    <option value="1">Đang Ra</option>
                                </select>
                            </div>
                        </div>
                        <div class="admin-right-item-content-item-input">
                            <div>Chương </div>
                            <input type="number" hidden name="soChuong">
                            <input type="number" value="1" disabled>
                            <span class="addChuong-message"></span>

                        </div>
                        <div class="admin-right-item-content-item-input">
                            <div>Nội Dung</div>
                            <textarea name="noiDung" id="" cols="30" rows="10" class="w-100"></textarea>
                            <span class="addChuong-message"></span>
                        </div>
                        <input type="submit" value="Cập Nhập">
                    </form>
                    <!-- ==== danh sách chương ==== -->
                    <div class="admin-right-item-content-item">
                        <div class="table-list productList chuongList">
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
                                    <th>Chương</th>
                                    <th>Tên Chương</th>
                                    <th>Người Thêm <i class="fad fa-sort-up"></i></th>
                                    <th class="active">Ngày Thêm <i class="fad fa-sort-up"></i></th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>Sơ Lâm Dị Giới</td>
                                        <td><a href="" class="text">Ngọc Đức</a></td>
                                        <td>2 giờ trước</td>
                                        <td><a href="suaChuong.html" class="editTruyen" title="Sửa Chương"><i class="fad fa-edit"></i></a><input type="checkbox" name="chuongCheckBox" class="chonCheckBox"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>3</td>
                                        <td>2</td>
                                        <td>Sơ Lâm Dị Giới</td>
                                        <td><a href="" class="text">Ngọc Đức</a></td>
                                        <td>2 giờ trước</td>
                                        <td><a href="suaChuong.html" class="editTruyen" title="Sửa Chương"><i class="fad fa-edit"></i></a><input type="checkbox" name="chuongCheckBox" class="chonCheckBox"></td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>3</td>
                                        <td>Sơ Lâm Dị Giới</td>
                                        <td><a href="" class="text">Ngọc Đức</a></td>
                                        <td>2 giờ trước</td>
                                        <td><a href="suaChuong.html" class="editTruyen" title="Sửa Chương"><i class="fad fa-edit"></i></a><input type="checkbox" name="chuongCheckBox" class="chonCheckBox"></td>
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
    checkAll('.chuongList','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="chuongCheckBox"]','.checkbox-btn-block-delete');
</script>
<script>
    validator({
        form: '.addChuongForm',
        errSelector: '.addChuong-message',
        rules: [
            validator.isRequied('input[name="idTruyen"]','*Id truyện không được bỏ trống'),
            validator.isNumber('input[name="idTruyen"]','*Id truyện chỉ được là kiểu số'),
            validator.isRequied('textarea[name="noiDung"]','Nội dung không được bỏ trống'),
            validator.countWord('textarea[name="noiDung"]',5,'Nội dung chương dài tối thiểu 1000 chữ'),
        ]
    });
</script>