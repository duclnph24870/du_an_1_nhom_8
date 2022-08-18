<?php 
    if (isset($_GET['idTruyen']) && isset($_GET['idChuong'])) {
        $idTruyen = $_GET['idTruyen'];
        $idChuong = $_GET['idChuong'];
        $truyenEdit = select_all("SELECT * FROM truyen WHERE idTruyen=$idTruyen");
        $chuongAll = select_all("SELECT * FROM chuong WHERE idTruyen=$idTruyen");
        $chuongEdit = select_one("SELECT * FROM chuong WHERE idChuong=$idChuong");


        // Lấy ra user
        $sqlSelectUser = "SELECT * FROM user";
        $users = select_all($sqlSelectUser);

    }else {
        echo 'Hãy thao tác theo tuần tự';
        die;
    }


?>

<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/product.css">
<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/admin.css">
<script src="<?=$CONTENT_URL?>/JS/public.js"></script>
<script src="<?=$CONTENT_URL?>/JS/validation.js"></script>
<script src="https://cdn.tiny.cloud/1/n0w3znccmbe1olsksfz3ey52m36uf38jf2xhnh66xkcn7smy/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<div class="row">
    <div class="col-12">
        <div class="admin-right">
            <div class="admin-right-item active admin-right-item-productList">
                <div class="admin-right-item-header">
                    <div class="admin-right-item-header-item"><?=$chuongEdit['tieuDe']?></div>
                    <div class="admin-right-item-header-item">Danh Sách Chương</div>
                </div>
                <div class="admin-right-item-content">
                    <div class="admin-right-item-content-item <?=isset($_GET['idTruyen']) ? '' : 'd-block'?> my-2">
                        <!-- form thêm chương  -->
                        <form method="post" action="editChuong/updateChuong.php" class="addChuongForm w-100">
                            <div class="admin-right-item-content-item-select">
                                <div class="admin-right-item-content-item-select-block">
                                    <div>Tình Trạng</div>
                                    <select name="tinhTrang">
                                        <option value="1" <?=$truyenEdit[0]['tinhTrang'] == 1 ? 'selected' : ''?>>Đã Hoàn Thành</option>
                                        <option value="0" <?=$truyenEdit[0]['tinhTrang'] == 0 ? 'selected' : ''?>>Đang Ra</option>
                                    </select>
                                </div>
                            </div>

                            <div class="admin-right-item-content-item-input">
                                <div>Tiêu Đề Chương </div>
                                <input type="text" name="tieuDe" value="<?=$chuongEdit['tieuDe']?>" placeholder="Nhập vào tiêu đề chương">
                                <span class="addChuong-message"></span>
                            </div>

                            <div class="admin-right-item-content-item-input">
                                <div>Nội Dung</div>
                                <textarea name="noiDung" placeholder="Nhập vào nội dung chương" id="editChuongText" cols="30" rows="10" class="w-100"><?=$chuongEdit['noiDung']?></textarea>
                                <span class="addChuong-message"></span>
                            </div>
                            <input type="text" name="idTruyen" value="<?=$idTruyen?>" hidden>
                            <input type="text" name="idChuong" value="<?=$idChuong?>" hidden>
                            <input type="text" name="link" value="<?=$link?>?editChuong=1" hidden>
                            <input type="submit" value="Cập Nhập">
                        </form>
                    </div>

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
            subArr2: phpArrayJs(<?=json_encode($truyenEdit)?>),
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
    checkAll('.chuongList','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="chuongCheckBox[]"]','.checkbox-btn-block-delete');
</script>

<script>
    tinymce.init({
        selector: 'textarea#editChuongText',
        plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
        toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
        toolbar_mode: 'floating',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
    });
</script>