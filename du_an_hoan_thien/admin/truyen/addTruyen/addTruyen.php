<?php 
    //category
    $sqlCate = "SELECT * FROM danhmuc";
    $category = select_all($sqlCate);
    //user
    $sqlUser = "SELECT * FROM user";
    $userUpTruyen = select_all($sqlUser);

    if (isset($_GET['status'])) {
        $st = $_GET['status'];
    }

    if ((int)$_SESSION['user']['quyenHan'] == 2) {
        $sqlSelectTruyen = "SELECT * FROM truyen WHERE idUser=".$_SESSION['user']['idUser']."";
        $truyenList = select_all($sqlSelectTruyen);
    }elseif ((int)$_SESSION['user']['quyenHan'] > 2) {
        $sqlSelectTruyen = "SELECT * FROM truyen";
        $truyenList = select_all($sqlSelectTruyen);
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
                <div class="admin-right-item-header">
                    <div class="admin-right-item-header-item">Thêm Truyện</div>
                    <div class="admin-right-item-header-item">Danh Sách Truyện</div>
                    <a href="<?=$ADMIN_URL?>/truyen/indexAdminTruyen.php?addChuong=1" class="admin-right-item-header-item-link">Thêm Chương</a>
                </div>
                <div class="admin-right-item-content">
                    <!-- === thêm truyện === -->
                    <form method="POST" action="addTruyen/isertTruyen.php" enctype="multipart/form-data" id="product__qlAdd" class="admin-right-item-content-item">
                        <div class="admin-right-item-content-item-input">
                            <input type="file" hidden name="imgTruyen" id="admin-file-input">
                            <span class="addProduct-message d-none"></span>
                        </div>
                        <input type="number" value="<?=$_SESSION['user']['idUser']?>" name="idUser" hidden>
                        <input type="text" value="<?=$_SESSION['user']['quyenHan']?>" name="quyenHan" hidden>
                        <input type="text" value="<?=$link?>" name="link" hidden>
                        <label for="admin-file-input">
                            <div class="admin-file-input-img">
                                <img src="https://metruyenchu.com/assets/images/logo.png?260329" alt="">
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
                    <form method="POST" action="addTruyen/deleteTruyen.php?link=<?=$link?>" class="admin-right-item-content-item">
                        <div class="table-list productList">
                            <!-- === header === -->
                            <div class="table-list__header">
                                <div class="table-list__header-input-block">
                                    <input type="text" name="searchRealTime" placeholder="Search User">
                                    <i class="fas fa-search"></i>
                                </div>
                                <?php if (isset($_SESSION['user']) && $_SESSION['user']['quyenHan'] >= 4) :?>
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
                                        
                                        <input type="submit" class="btn-category block-icon toi checkbox-btn-block-delete" value="Xóa các mục đã chọn">
                                    </div>
                                <?php endif?>
                            </div>

                            <!-- === table ==== -->
                            <table class="table-list__content">
                                <thead>
                                    <th class="addPrArrange" name="number2" data-nameColumn="idTruyen">ID <i class="fad fa-sort-up"></i></th>
                                    <th class="addPrArrange" name="string" data-nameColumn="tenTruyen">Tên Truyện <i class="fad fa-sort-up"></i></th>
                                    <th>Người Thêm <i class="fad fa-sort-up"></i></th>
                                    <th class="addPrArrange" name="date" data-nameColumn="dateCapNhap">Cập Nhập <i class="fad fa-sort-up"></i></th>
                                    <th class="addPrArrange" name="date" data-nameColumn="dateTruyen">Ngày Thêm <i class="fad fa-sort-up"></i></th>
                                    <th class="addPrArrange" name="string" data-nameColumn="trangThai">Trạng Thái <i class="fad fa-sort-up"></i></th>
                                    <th class="addPrArrange"name="number" data-nameColumn="soChuong">Số Chương <i class="fad fa-sort-up"></i></th>
                                    <th class="addPrArrange" name="number" data-nameColumn="viewTruyen">View Truyện <i class="fad fa-sort-up"></i></th>
                                    <th></th>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>
                            <?php if (count($truyenList) == 0) :?>
                                <div class="emtyList">
                                    <i class="fad fa-heart-broken"></i>
                                    Bạn chưa bắt đầu đăng truyện nào!
                                </div>
                            <?php endif?>
                            <div class="pagination paginationTruyenAdd">
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    nextPage('.admin-right-item-header-item','.admin-right-item-content-item','page','addTruyen','off');
    nextPage('.arrange-btn','.arrange-child__btn');
    previewUpImg('#product__qlAdd','.admin-file-input-img','#admin-file-input','.imgErr','off');

    // phân trang, sắp xếp và hiển thị
    const opitionShow = {
        subArr: phpArrayJs(<?=json_encode($userUpTruyen)?>),
        mainArr: phpArrayJs(<?=json_encode($truyenList)?>),
        linkTruyen: '../<?=$USER_URL?>/loctruyen/index.php?idCate=',
        linkUser: '../<?=$USER_URL?>/user_profile/index.php?idUser=',
        selectorList: '.table-list__content tbody', // selector list chứa các category
        selectorPagi: '.paginationTruyenAdd', // selector pagination
        numberPagi : 10,// số item 1 page
        arrange: function () {
            // phương thức sắp xếp category
        },
        checkAllCallback: function () {
            checkAll('.productList','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="truyenCheckBox[]"]','.checkbox-btn-block-delete');
        }
    };
    // selector pagination phải là duy nhất
    phanTrang(showPagePrAdd,opitionShow);
    // click sắp xếp
    clickArrange('.table-list__content thead','.table-list__content thead th.addPrArrange',arrangeWeb,showPagePrAdd,opitionShow);

    // search thời gian thực

    searchRealTime (phanTrang,opitionShow,showPagePrAdd,{
        searchForm: 'input[name="searchRealTime"]',
        selectorList: '.table-list__content tbody',
        nameColumnSearch: [
            'idTruyen','tenTruyen','tacGia'
        ],
        checkAllCallback: function () {
            checkAll('.productList','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="truyenCheckBox[]"]','.checkbox-btn-block-delete');
        }
    });


    <?php if (isset($_SESSION['user']) && $_SESSION['user']['quyenHan'] >= 4) :?>
        checkAll('.productList','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="truyenCheckBox[]"]','.checkbox-btn-block-delete');
    <?php endif?>
</script>

 <!-- validata form  -->
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