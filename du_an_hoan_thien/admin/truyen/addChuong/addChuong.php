<?php 
    if (isset($_GET['idTruyen'])) {
        $idTruyen = $_GET['idTruyen'];
        //lấy ra truyện
        $sqlTruyen = "SELECT * FROM truyen WHERE idTruyen=$idTruyen";
        $truyenAddChuong = select_all($sqlTruyen);
        
        // lấy ra các chương của truyện
        $sqlChuongSelectAll = "SELECT * FROM chuong WHERE idTruyen=$idTruyen";
        $chuongAll = select_all($sqlChuongSelectAll);

        // Lấy ra user
        $sqlSelectUser = "SELECT * FROM user";
        $users = select_all($sqlSelectUser);


        if (!($_SESSION['user']['idUser'] == $truyenAddChuong[0]['idUser'] || (int)$_SESSION['user']['quyenHan'] > 2)) {
            echo 'Bạn không có quyền truy cập vào truyện này!!';
            die;
        }
    }


    if ((int)$_SESSION['user']['quyenHan'] > 2) {
        $sqlTruyenAll = "SELECT * FROM truyen";
        $truyenAll = select_all($sqlTruyenAll);
    }elseif ((int)$_SESSION['user']['quyenHan'] == 2) {
        // quyền hạn bằng 2 chỉ có thể đăng chương các truyện của mình đăng
        $sqlTruyenAll = "SELECT * FROM truyen WHERE idUser=".$_SESSION['user']['idUser']."";
        $truyenAll = select_all($sqlTruyenAll);
    }
?>

<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/product.css">
<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/admin.css">
<script src="<?=$CONTENT_URL?>/JS/public.js"></script>
<script src="<?=$CONTENT_URL?>/JS/validation.js"></script>

<div class="row">
    <div class="col-12">
        <div class="admin-right">
            <div class="admin-right-item active admin-right-item-productList">
                <div class="admin-right-item-header">
                    <div class="admin-right-item-header-item"><?=isset($_GET['idTruyen']) ? $truyenAddChuong[0]['tenTruyen'] : 'Thêm Chương'?></div>
                    <?php if (isset($_GET['idTruyen'])) :?>
                    <div class="admin-right-item-header-item">Danh Sách Chương</div>
                    <?php endif ?>
                </div>
                <div class="admin-right-item-content">
                    <div class="admin-right-item-content-item <?=isset($_GET['idTruyen']) ? '' : 'd-block'?> my-2">
                        <!-- === Tìm id truyện === -->
                        <form method="POST" action="addChuong/searchId.php" class="pb-4 admin-right-item-content-item-input idTruyenFrom d-block">
                            <div class="admin-right-item-content-item-input">
                                <div>Mã Truyện</div>
                                <input type="text" hidden name="link" value="<?=$link?>?addChuong=1">
                                <input type="text" name="idTruyen" value="<?=isset($idTruyen) ? $idTruyen : ''?>" autocomplete="off" placeholder="Mã Truyện">
                                <span class="addChuong-message"></span>
                            </div>
                            <div class="searchRealTime__tenTruyen">
                                <!-- <div class="searchRealTime__tenTruyen-item" data-idValue="1">Tên Truyện 1</div>
                                <div class="searchRealTime__tenTruyen-item" data-idValue="2">Tên Truyện 2</div> -->
                                </div>
                            <input type="submit" name="submitIdTruyen" class="mt-2" value="Tìm Kiếm" style="background: var(--primary);color: var(--white);">
                        </form>
    
                        <!-- form thêm chương  -->
                        <form method="post" action="addChuong/insertChuong.php" class="addChuongForm w-100">
                            <?php if (isset($_GET['idTruyen'])) :?>
                                <div class="admin-right-item-content-item-select">
                                    <div class="admin-right-item-content-item-select-block">
                                        <div>Tình Trạng</div>
                                        <select name="tinhTrang">
                                            <option value="1" <?=$truyenAddChuong[0]['tinhTrang'] == 1 ? 'selected' : ''?>>Đã Hoàn Thành</option>
                                            <option value="0" <?=$truyenAddChuong[0]['tinhTrang'] == 0 ? 'selected' : ''?>>Đang Ra</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="admin-right-item-content-item-input">
                                    <div>Chương </div>
                                    <input type="number" value="<?=count($chuongAll) + 1?>" hidden name="soChuong">
                                    <input type="number" value="<?=count($chuongAll) + 1?>" disabled>
                                    <span class="addChuong-message"></span>
                                </div>

                                <div class="admin-right-item-content-item-input">
                                    <div>Tiêu Đề Chương </div>
                                    <input type="text" name="tieuDe" placeholder="Nhập vào tiêu đề chương">
                                    <span class="addChuong-message"></span>
                                </div>

                                <div class="admin-right-item-content-item-input">
                                    <div>Nội Dung</div>
                                    <textarea name="noiDung" placeholder="Nhập vào nội dung chương" id="" cols="30" rows="10" class="w-100"></textarea>
                                    <span class="addChuong-message"></span>
                                </div>
                                <input type="text" name="idTruyen" value="<?=$idTruyen?>" hidden>
                                <input type="text" name="link" value="<?=$link?>?addChuong=1" hidden>
                                <input type="text" name="idUser" hidden value="<?=$_SESSION['user']['idUser']?>" >
                                <input type="submit" value="Đăng Chương">
                            <?php endif?>
                        </form>
                    </div>

                    <?php if (isset($_GET['idTruyen'])) :?>
                        <!-- ==== danh sách chương ==== -->
                        <form method="POST" action="addChuong/deleteChuong.php?link=<?=$link?>" class="admin-right-item-content-item">
                            <div class="table-list chuongList">
                                <!-- === header === -->
                                <div class="table-list__header">
                                    <div class="table-list__header-input-block">
                                        <input type="text" name="searchRealTime" placeholder="Search Chương">
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
                                        
                                        <input type="text" hidden name="idTruyen" value="<?=$idTruyen?>">
                                        <input type="submit" class="btn-category block-icon toi checkbox-btn-block-delete" value="Xóa các mục đã chọn">
                                    </div>
                                </div>

                                <!-- === table ==== -->
                                <table class="table-list__content">
                                    <thead>
                                        <th class="addPrArrange" name="number2" data-nameColumn="idChuong">ID <i class="fad fa-sort-up"></i></th>
                                        <th class="addPrArrange" name="number" data-nameColumn="soChuong">Chương <i class="fad fa-sort-up"></i></th>
                                        <th class="addPrArrange" name="string" data-nameColumn="tieuDe">Tên Chương <i class="fad fa-sort-up"></i></th>
                                        <th>Người Thêm</th>
                                        <th class="addPrArrange" name="date" data-nameColumn="dateChuong">Ngày Thêm <i class="fad fa-sort-up"></i></th>
                                        <th class="addPrArrange" name="number" data-nameColumn="viewChuong">View Chương <i class="fad fa-sort-up"></i></th>
                                        <th>Tên Truyện</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                                <?php if (count($chuongAll) == 0) :?>
                                    <div class="emtyList">
                                        <i class="fad fa-heart-broken"></i>
                                        Truyện <?=$truyenAddChuong[0]['tenTruyen']?> chưa có chương!
                                    </div>
                                <?php endif?>
                                <div class="pagination paginationChuongAdd">
                                    
                                </div>
                            </div>
                        </form>
                    <?php endif?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    nextPage('.admin-right-item-header-item','.admin-right-item-content-item','page','addChuong','off');
</script>
<script>
    validator({
        form: '.addChuongForm',
        errSelector: '.addChuong-message',
        rules: [
            validator.isRequied('textarea[name="noiDung"]','Nội dung không được bỏ trống'),
            validator.isRequied('input[name="tieuDe"]','Tiêu đề chương không được bỏ trống'),
            validator.countWord('textarea[name="noiDung"]',500,'Nội dung chương dài tối thiểu 500 chữ'),
            validator.minLength('input[name="tieuDe"]',3,'Tiêu đề chương phải tối thiểu 3 ký tự'),
            validator.maxLength('input[name="tieuDe"]',100,'Tiêu đề chương chỉ tối đa 100 ký tự'),
        ]
    });

    validator({
        form: '.idTruyenFrom',
        errSelector: '.addChuong-message',
        rules: [
            validator.isRequied('input[name="idTruyen"]','*Id truyện không được bỏ trống'),
            validator.isNumber('input[name="idTruyen"]','*Id truyện chỉ được là kiểu số'),
        ]
    });
</script>

<?php if(isset($_GET['idTruyen'])) :?>
    <script>
        // phân trang, sắp xếp và hiển thị
        const opitionShow = {
            subArr2: phpArrayJs(<?=json_encode($truyenAddChuong)?>),
            mainArr: phpArrayJs(<?=json_encode($chuongAll)?>),
            subArr: phpArrayJs(<?=json_encode($users)?>),
            linkTruyen: '../<?=$USER_URL?>/loctruyen/index.php?idCate=',
            linkUser: '../<?=$USER_URL?>/user_profile/index.php?idUser=',
            selectorList: '.table-list__content tbody', // selector list chứa các category
            selectorPagi: '.paginationChuongAdd', // selector pagination
            numberPagi : 10,// số item 1 page
            arrange: function () {
                // phương thức sắp xếp category
            },
            checkAllCallback: function () {
                checkAll('.chuongList','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="chuongCheckBox[]"]','.checkbox-btn-block-delete');
            }
        };
        // selector pagination phải là duy nhất
        phanTrang(showPageChuongAdd,opitionShow);
        // click sắp xếp
        clickArrange('.table-list__content thead','.table-list__content thead th.addPrArrange',arrangeWeb,showPageChuongAdd,opitionShow);

        // search thời gian thực

        searchRealTime (phanTrang,opitionShow,showPageChuongAdd,{
            searchForm: 'input[name="searchRealTime"]',
            selectorList: '.table-list__content tbody',
            nameColumnSearch: [
                'idChuong','tieuDe'
            ],
            checkAllCallback: function () {
                checkAll('.chuongList','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="chuongCheckBox[]"]','.checkbox-btn-block-delete');
            }
        });
    </script>

<?php endif?>

<script>
    searchAuto(phpArrayJs(<?=json_encode($truyenAll)?>),{
        selectorForm: '.idTruyenFrom input[name^="idTruyen"]',
        selectorList: '.searchRealTime__tenTruyen',
        selectorListItem: '.searchRealTime__tenTruyen-item',
    });
    checkAll('.chuongList','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="chuongCheckBox[]"]','.checkbox-btn-block-delete');
</script>