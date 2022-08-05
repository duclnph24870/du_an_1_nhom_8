<?php 
    $sqlSelectAllCate = "SELECT * FROM danhmuc";      
    $category = select_all($sqlSelectAllCate);
    $sqlSelectAllUser = "SELECT * FROM user";
    $user = select_all($sqlSelectAllUser);
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
                    <div class="admin-right-item-header-item">Thêm Thể Loại</div>
                    <div class="admin-right-item-header-item">Danh Sách Thể Loại</div>
                </div>
                <div class="admin-right-item-content">
                    <!-- ==== thêm thể loại === -->
                    <form method="post" action="isertCategory.php" class="admin-right-item-content-item admin-right-item-content-item-addCategory">
                        <div class="admin-right-item-content-item-input">
                            <div>Tên Thể Loại</div>
                            <input name="theLoai" type="text">
                            <span class="addCategory-message <?=isset($_GET['nhom1Success']) || isset($_GET['nhom1Err']) ? 'success' : ''?>"><?=isset($_GET['nhom1Success']) ? 'Thành công thêm: '.$_GET['nhom1Success'] : ''?> <?=isset($_GET['nhom1Err']) ? '<span class="err"><b>'.$_GET['nhom1Err'].'</b> đã tồn tại</span>' : ''?></span>
                        </div>
                        <input type="text" value="<?=$link?>" hidden name="link">
                        <div class="admin-right-item-content-item-input">
                            <div>Bối Cảnh Thế Giới</div>
                            <input name="boiCanh" type="text">
                            <span class="addCategory-message <?=isset($_GET['nhom2Success']) || isset($_GET['nhom2Err']) ? 'success' : ''?>"><?=isset($_GET['nhom2Success']) ? 'Thành công thêm: '.$_GET['nhom2Success'] : ''?> <?=isset($_GET['nhom2Err']) ? '<span class="err"><b>'.$_GET['nhom2Err'].'</b> đã tồn tại</span>' : ''?></span>
                        </div>
                        <div class="admin-right-item-content-item-input">
                            <div>Thuộc Tính</div>
                            <input name="thuocTinh" type="text">
                            <span class="addCategory-message <?=isset($_GET['nhom3Success']) || isset($_GET['nhom3Err']) ? 'success' : ''?>"><?=isset($_GET['nhom3Success']) ? 'Thành công thêm: '.$_GET['nhom3Success'] : ''?> <?=isset($_GET['nhom3Err']) ? '<span class="err"><b>'.$_GET['nhom3Err'].'</b> đã tồn tại</span>' : ''?></span>
                        </div>
                        <div class="admin-right-item-content-item-input">
                            <div>Tính Cách Nhân Vật</div>
                            <input name="tinhCach" type="text">
                            <span class="addCategory-message <?=isset($_GET['nhom4Success']) || isset($_GET['nhom4Err']) ? 'success' : ''?>"><?=isset($_GET['nhom4Success']) ? 'Thành công thêm: '.$_GET['nhom4Success'] : ''?> <?=isset($_GET['nhom4Err']) ? '<span class="err"><b>'.$_GET['nhom4Err'].'</b> đã tồn tại</span>' : ''?></span>
                        </div>
                        <div class="admin-right-item-content-item-input">
                            <div>Lưu Phái</div>
                            <input name="luuPhai" type="text">
                            <span class="addCategory-message <?=isset($_GET['nhom5Success']) || isset($_GET['nhom5Err']) ? 'success' : ''?>"><?=isset($_GET['nhom5Success']) ? 'Thành công thêm: '.$_GET['nhom5Success'] : ''?> <?=isset($_GET['nhom5Err']) ? '<span class="err"><b>'.$_GET['nhom5Err'].'</b> đã tồn tại</span>' : ''?></span>
                        </div>
                        <div class="admin-right-item-content-item-input">
                            <div>Thị Giác</div>
                            <input name="thiGiac" type="text">
                            <span class="addCategory-message <?=isset($_GET['nhom6Success']) || isset($_GET['nhom6Err']) ? 'success' : ''?>"><?=isset($_GET['nhom6Success']) ? 'Thành công thêm: '.$_GET['nhom6Success'] : ''?> <?=isset($_GET['nhom6Err']) ? '<span class="err"><b>'.$_GET['nhom6Err'].'</b> đã tồn tại</span>' : ''?></span>
                        </div>
                        <input type="text" value="<?=isset($_SESSION['user']) ? $_SESSION['user']['idUser'] : ''?>" name="idUser" hidden id="">
                        <input type="submit" value="Cập Nhập">
                        <span class="admin-right-item-content-item-ghiChu">*<b>Mẹo</b>: Bạn có thể thêm nhiều thể loại cùng 1 lúc bằng cách chèn dấu ' , ' vào giữa (A,B)</span> <br>
                        <span class="admin-right-item-content-item-ghiChu">*<b>Mẹo</b>: Tên "Danh Mục" phải có tối thiểu 5 ký tự</span>
                    </form>

                    <!-- === danh sách thể loại === -->
                    <form method="post" action="deleteCate.php?link=<?=$link?>" class="admin-right-item-content-item admin-right-item-content-item-list">
                        <div class="table-list">
                            <!-- === header === -->
                            <div class="table-list__header">
                                <div class="table-list__header-input-block">
                                    <input type="text" placeholder="Search User" name="searchRealTime">
                                    <i class="fas fa-search"></i>
                                </div>
                                <div class="table-list__header-btn checkbox-btn-block d-flex justify-content-end">
                                    <?php if (isset($_SESSION['user']) && (int)$_SESSION['user']['quyenHan'] >= 4) :?>
                                        <span class="btn-category block-icon blue checkbox-btn-block-iconCheck">
                                            <i class="fa-solid fa-x"></i>
                                            <span>Chọn</span>
                                            <span>Đóng</span>
                                        </span>
                                        <span class="btn-category cam btn-allCheck">
                                            <span>Chọn Tất Cả</span>
                                            <span> Bỏ Chọn Tất Cả</span>
                                        </span>
                                        
                                        <input type="submit" class="btn-category block-icon toi checkbox-btn-block-delete" value="Xóa các mục đã chọn">
                                            
                                    <?php endif?>
                                </div>
                            </div>

                            <!-- === table ==== -->
                            <table class="table-list__content">
                                <thead>
                                    <th data-nameColumn="idDanhMuc" class="active cateArrange" name="number">ID <i class="fad fa-sort-up"></i></th>
                                    <th>Tên Danh Mục</th>
                                    <th data-nameColumn="nhom" class="cateArrange" name="string">Nhóm <i class="fad fa-sort-up"></i></th>
                                    <th>Người Thêm</th>
                                    <th>Quyền Hạn</th>
                                    <th class="cateArrange" data-nameColumn="ngayThem" name="date">Ngày Thêm <i class="fad fa-sort-up"></i></th>
                                    <th></th>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>

                            <!-- pagination  -->
                            <div class="col-12">
                                <div class="pagination pagination-categoryQl">
                                    <!-- <div class="pagination__item text"><</div>
                                    <div class="pagination__item text active">1</div>
                                    <div class="pagination__item text">2</div>
                                    <div class="pagination__item text">3</div>
                                    <div class="pagination__item text">4</div>
                                    <div class="pagination__item text">></div>
                                    <input type="text" value="1" class="pagination__input">
                                    <input type="submit" value="Go" class="pagination__submit"> -->
                                </div>
                            </div>
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
            validator.maxLength('input[name="theLoai"]',200),
            validator.isString('input[name="boiCanh"]','Tên danh mục phải là kiểu chữ'),
            validator.maxLength('input[name="boiCanh"]',500),
            validator.isString('input[name="thuocTinh"]','Tên danh mục phải là kiểu chữ'),
            validator.maxLength('input[name="thuocTinh"]',200),
            validator.isString('input[name="tinhCach"]','Tên danh mục phải là kiểu chữ'),
            validator.maxLength('input[name="tinhCach"]',200),
            validator.isString('input[name="luuPhai"]','Tên danh mục phải là kiểu chữ'),
            validator.maxLength('input[name="luuPhai"]',200),
            validator.isString('input[name="thiGiac"]','Tên danh mục phải là kiểu chữ'),
            validator.maxLength('input[name="thiGiac"]',200),
        ]
    });
</script>
<script>
    nextPage('.admin-right-item-header-item','.admin-right-item-content-item','page','cateQl','off');
    nextPage('.arrange-btn','.arrange-child__btn');
    kiemLoi('.addCategory-message.invalid');

    // phân trang, sắp xếp và hiển thị
    const opitionShow = {
        subArr: phpArrayJs(<?=json_encode($user)?>), // mảng hiển thị phụ (mảng user) 
        mainArr: phpArrayJs(<?=json_encode($category)?>), // mảng hiển thị chính (mảng category)
        linkCate: '<?=$USER_URL?>/loctruyen/index.php?idCate=',
        linkUser: '<?=$USER_URL?>/user_profile/index.php?idUser=',
        selectorList: '.table-list__content tbody', // selector list chứa các category
        selectorPagi: '.pagination-categoryQl', // selector pagination
        numberPagi : 10,// số item 1 page
        arrange: function () {
            // phương thức sắp xếp category
        },
        checkAllCallback: function () {
            console.log('hello');
            checkAll('.admin-right-item-content-item-list','.checkbox-btn-block-iconCheck','.btn-allCheck','.categoryCheckBox','.checkbox-btn-block-delete');
        }
    };
    // selector pagination phải là duy nhất
    phanTrang(showPageCateQlPagi,opitionShow);
    // click sắp xếp
    clickArrange('.table-list__content thead','.table-list__content thead th.cateArrange',arrangeWeb,showPageCateQlPagi,opitionShow);

    // search thời gian thực

    searchRealTime (phanTrang,opitionShow,showPageCateQlPagi,{
        searchForm: 'input[name="searchRealTime"]',
        selectorList: '.table-list__content tbody',
        nameColumnSearch: [
            'idDanhMuc','tenDanhMuc','nhom'
        ],
        checkAllCallback: function () {
            checkAll('.admin-right-item-content-item-list','.checkbox-btn-block-iconCheck','.btn-allCheck','.categoryCheckBox','.checkbox-btn-block-delete');
        }
    });

    <?php if (isset($_SESSION['user']) && $_SESSION['user']['quyenHan'] >= 4) :?>
        checkAll('.admin-right-item-content-item-list','.checkbox-btn-block-iconCheck','.btn-allCheck','.categoryCheckBox','.checkbox-btn-block-delete');
    <?php endif?>
    // Làm sạch url
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF'];?>');
    }
</script>

