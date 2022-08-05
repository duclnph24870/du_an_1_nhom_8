<?php 
    $sql1 = "SELECT * FROM danhmuc";      
    $category = select_all($sql1);

    // kiểm tra xem từng danh mục có được chọn không
    $arrFillter = [
        'keyword' => isset($_GET['keyword']),
        'nhom1' => isset($_GET['nhom1']),
        'nhom2' => isset($_GET['nhom2']),
        'nhom3' => isset($_GET['nhom3']),
        'nhom4' => isset($_GET['nhom4']),
        'nhom5' => isset($_GET['nhom5']),
        'nhom6' => isset($_GET['nhom6']),
        'tinhTrang' => isset($_GET['tinhTrang']),
    ];

    $arrFillterValue = [];
    foreach ($arrFillter as $k => $item) {
        if ($item) {
            $arrFillterValue[$k] = $_GET[$k];
        }else {
            $k = 0;
        }
    }

    $sqlFillter = [];
    foreach ($arrFillterValue as $k => $valueFillter) {
        if ($valueFillter != -1) {
            $sqlFillter[$k] = $k."=".$valueFillter;
        }
    }

    if (isset($sqlFillter['keyword'])) {
        $keyword = $arrFillterValue['keyword'];
        $sqlFillter['keyword'] = "( tenTruyen LIKE '%".$arrFillterValue['keyword']."%' OR tacGia LIKE '%".$arrFillterValue['keyword']."%' )";
    }

    $sqlSelect = "";
    if (count($sqlFillter) > 0) {
        $sqlSelect = "SELECT * FROM truyen WHERE ";
        foreach ($sqlFillter as $sqlF) {
            $sqlSelect .= $sqlF." AND ";
        }
    }else {
        $sqlSelect = "SELECT * FROM truyen"; 
    }

    // echo trim($sqlSelect,' AND ');
    $sqlSelectTruyen = trim($sqlSelect,' AND ');
    $truyen = select_all($sqlSelectTruyen);


?>

<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/category.css">

<div class="content">
    <!-- ===== banner ====== -->
    <div class="banner d-none d-md-block">
        <div class="banner__img"></div>
    </div>

    <div class="container-fluid p-0">
        <div class="container block-content">
            <div class="content__section1">
                <div class="row" style="flex-wrap: nowrap;">
                    <!-- Phần này bên trái ( phần lọc truyện ) -->
                    <div class="col-lg-3 col-xl-3 d-none d-lg-block d-xl-block section1-right order-0">
                        <form method="get" class="filter__category">
                            <div class="filter__category-item">
                                <div class="filter__category-title title">Filter</div>
                                <input type="submit" class="filter__category-submit btn-category" value="Lọc">
                                <!-- keyword tìm kiếm -->
                                <?php if (isset($_GET['keyword'])) :?>
                                    <button class="btn-category" style="background: var(--primary);color: #fff;border:none;"><?=$_GET['keyword']?></button>
                                    <input type="text" hidden value="<?=$_GET['keyword']?>" name="keyword">
                                <?php endif?>
                            </div>
                            <div class="filter__category-item filter__category-item-theLoai">
                                <div class="filter__category-title title">Thể Loại</div>
                                <input type="radio" name="nhom1" value="-1" id="theLoai__0" hidden>
                                <label for="theLoai__0" class="filter__category-item-btn btn-category">Không chọn</label>
                                <?php foreach ($category as $cate) :?>
                                    <?php if ($cate['nhom'] == 'nhom1') :?>
                                        <input type="radio" <?=(isset($_GET['nhom1']) && $_GET['nhom1'] == $cate['idDanhMuc']) ? 'checked' : ''?> name="nhom1" value="<?=$cate['idDanhMuc']?>" id="theLoai__<?=$cate['idDanhMuc']?>" hidden>
                                        <label for="theLoai__<?=$cate['idDanhMuc']?>" class="filter__category-item-btn btn-category"><?=$cate['tenDanhMuc']?></label>
                                    <?php endif?>
                                <?php endforeach?>
                            </div>

                            <div class="filter__category-item filter__category-item-tinhTrang">
                                <div class="filter__category-title title">Tình Trạng</div>
                                <input type="radio" name="tinhTrang" value="-1" id="tinhTrang__0" hidden>
                                <input type="radio" name="tinhTrang" <?=(isset($_GET['tinhTrang']) && $_GET['tinhTrang'] == 0) ? 'checked' : ''?> value="0" id="tinhTrang__1" hidden>
                                <input type="radio" name="tinhTrang" <?=(isset($_GET['tinhTrang']) && $_GET['tinhTrang'] == 1) ? 'checked' : ''?> value="1" id="tinhTrang__2" hidden>
                                <label for="tinhTrang__0" class="filter__category-item-btn btn-category">Không chọn</label>
                                <label for="tinhTrang__1" class="filter__category-item-btn btn-category">Đang Ra</label>
                                <label for="tinhTrang__2" class="filter__category-item-btn btn-category">Đã Hoàn Thành</label>
                            </div>

                            <div class="filter__category-item filter__category-item-thuocTinh">
                                <div class="filter__category-title title">Thuộc Tính</div>
                                <input type="radio" name="nhom3" value="-1" id="thuocTinh__0" hidden>
                                <label for="thuocTinh__0" class="filter__category-item-btn btn-category">Không Chọn</label>
                                <?php foreach ($category as $cate) :?>
                                    <?php if ($cate['nhom'] == 'nhom3') :?>
                                        <input type="radio" name="nhom3" <?=(isset($_GET['nhom3']) && $_GET['nhom3'] == $cate['idDanhMuc']) ? 'checked' : ''?> value="<?=$cate['idDanhMuc']?>" id="thuocTinh__<?=$cate['idDanhMuc']?>" hidden>
                                        <label for="thuocTinh__<?=$cate['idDanhMuc']?>" class="filter__category-item-btn btn-category"><?=$cate['tenDanhMuc']?></label>
                                    <?php endif?>
                                <?php endforeach?>
                            </div>

                            <div class="filter__category-item filter__category-item-tinhCach">
                                <div class="filter__category-title title">Tính Cách Nhân Vật Chính</div>
                                <input type="radio" name="nhom4" value="-1" id="tinhCach__0" hidden>
                                <label for="tinhCach__0" class="filter__category-item-btn btn-category">Không Chọn</label>
                                <?php foreach ($category as $cate) :?>
                                    <?php if ($cate['nhom'] == 'nhom4') :?>
                                        <input type="radio" <?=(isset($_GET['nhom4']) && $_GET['nhom4'] == $cate['idDanhMuc']) ? 'checked' : ''?> name="nhom4" value="<?=$cate['idDanhMuc']?>" id="tinhCach__<?=$cate['idDanhMuc']?>" hidden>
                                        <label for="tinhCach__<?=$cate['idDanhMuc']?>" class="filter__category-item-btn btn-category"><?=$cate['tenDanhMuc']?></label>
                                    <?php endif?>
                                <?php endforeach?>
                            </div>

                            <div class="filter__category-item filter__category-item-boiCanh">
                                <div class="filter__category-title title">Bối Cảnh Thế Giới</div>
                                <input type="radio" name="nhom2" value="-1" id="boiCanh__0" hidden>
                                <label for="boiCanh__0" class="filter__category-item-btn btn-category">Không Chọn</label>
                                <?php foreach ($category as $cate) :?>
                                    <?php if ($cate['nhom'] == 'nhom2') :?>
                                        <input type="radio" name="nhom2" <?=(isset($_GET['nhom2']) && $_GET['nhom2'] == $cate['idDanhMuc']) ? 'checked' : ''?> value="<?=$cate['idDanhMuc']?>" id="boiCanh__<?=$cate['idDanhMuc']?>" hidden>
                                        <label for="boiCanh__<?=$cate['idDanhMuc']?>" class="filter__category-item-btn btn-category"><?=$cate['tenDanhMuc']?></label>
                                    <?php endif?>
                                <?php endforeach?>
                            </div>

                            <div class="filter__category-item filter__category-item-luuPhai">
                                <div class="filter__category-title title">Lưu Phái</div>
                                <input type="radio" name="nhom5" value="-1" id="luuPhai__0" hidden>
                                <label for="luuPhai__0" class="filter__category-item-btn btn-category">Không Chọn</label>
                                <?php foreach ($category as $cate) :?>
                                    <?php if ($cate['nhom'] == 'nhom5') :?>
                                        <input type="radio" name="nhom5" <?=(isset($_GET['nhom5']) && $_GET['nhom5'] == $cate['idDanhMuc']) ? 'checked' : ''?> value="<?=$cate['idDanhMuc']?>" id="luuPhai__<?=$cate['idDanhMuc']?>" hidden>
                                        <label for="luuPhai__<?=$cate['idDanhMuc']?>" class="filter__category-item-btn btn-category"><?=$cate['tenDanhMuc']?></label>
                                    <?php endif?>
                                <?php endforeach?>
                            </div>

                            <div class="filter__category-item filter__category-item-thiGiac">
                                <div class="filter__category-title title">Thị Giác</div>
                                <input type="radio" name="nhom6" value="-1" id="thiGiac__0" hidden>
                                <label for="thiGiac__0" class="filter__category-item-btn btn-category">Không Chọn</label>
                                <?php foreach ($category as $cate) :?>
                                    <?php if ($cate['nhom'] == 'nhom6') :?>
                                        <input type="radio" name="nhom6" <?=(isset($_GET['nhom6']) && $_GET['nhom6'] == $cate['idDanhMuc']) ? 'checked' : ''?> value="<?=$cate['idDanhMuc']?>" id="thiGiac__<?=$cate['idDanhMuc']?>" hidden>
                                        <label for="thiGiac__<?=$cate['idDanhMuc']?>" class="filter__category-item-btn btn-category"><?=$cate['tenDanhMuc']?></label>
                                    <?php endif?>
                                <?php endforeach?>
                            </div>
                        </form>
                    </div>

                    <!-- phàn bên phải  -->
                    <div class="col-12 col-lg-9 col-xl-9 section1-left order-1">
                        <div class="content__section1-main">
                            <div class="row">
                                <div class="col-12">
                                    <div class="category__filter">
                                        <div class="filter-icon text mr-3">
                                            <i class="fas fa-sliders-h"></i>
                                        </div>
                                        <div class="category__filter-item text" data-nameColumn="dateTruyen" name="date">
                                            Mới Cập Nhập 
                                        </div>
                                        <div class="category__filter-item text" data-nameColumn="dateCapNhap" name="date">
                                            Mới Đăng 
                                        </div>
                                        <div class="category__filter-item text" data-nameColumn="viewTruyen" name="number">
                                            Lượt Đọc
                                        </div>
                                        <div class="category__filter-item text" data-nameColumn="soChuong" name="number">Số chương</div>
                                        <div class="category__filter-item text" data-nameColumn="deCu" name="number">Đề Cử</div>
                                    </div>
                                </div>

                                <!-- hiển thị keyword tìm kiếm -->
                                <?php if (isset($_GET['keyword'])) :?>
                                    <div class="col-12">
                                        <div class="filter__category-title-keyword limit1">Kết quả tìm kiếm cho: <b><?=$_GET['keyword']?></b></div>
                                    </div>
                                <?php endif?>
                                <div class="itemList d-flex" style="flex-wrap: wrap;">
                                    <!-- list truyện  -->
                                    <?php if (count($truyen) == 0) :?>
                                        <div class="emtyList" style="padding-left: 15px;">
                                            <i class="fad fa-heart-broken"></i>
                                            Không có truyện thỏa mãn yêu cầu!
                                        </div>
                                    <?php endif?>
                                </div>
                                
                                <div class="col-12">
                                    <form method="post" class="pagination pagination-category">
                                        <!-- list item pagi  -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="row">
                    <div class="col-12">
                        <a href="../index.html" class="footer__logo logo">
                            <img src="https://metruyenchu.com/assets/images/logo.png?260329" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <div class="footer__introduce limit3">
                            Mê Truyện Chữ là nền tảng mở trực tuyến, miễn phí đọc truyện chữ được convert hoặc dịch kỹ lưỡng, do các converter và dịch giả đóng góp, rất nhiều truyện hay và nổi bật được cập nhật nhanh nhất với đủ các thể loại tiên hiệp, kiếm hiệp, huyền ảo ,...
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="" class="footer__btn">
                            <img src="https://metruyenchu.com/assets/images/app-store.png?260329" alt="">
                        </a>
                        <a href="" class="footer__btn">
                            <img src="https://metruyenchu.com/assets/images/google-play.png?260329" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <div class="footer__link link ">Điều Khoản Dịch Vụ</div>
                        <div class="footer__link link">Chính Sách Bảo Mật</div>
                        <div class="footer__link link">Về Bản Quyền</div>
                        <div class="footer__link link">Hướng Dẫn Sử Dụng</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>

<script>
    filterCategory('.filter__category-item-theLoai');
    filterCategory('.filter__category-item-tinhTrang');
    filterCategory('.filter__category-item-thuocTinh');
    filterCategory('.filter__category-item-tinhCach');
    filterCategory('.filter__category-item-boiCanh');
    filterCategory('.filter__category-item-luuPhai');
    filterCategory('.filter__category-item-thiGiac');

    const opitionShow = {
        subArr: phpArrayJs(<?=json_encode($category)?>), // mảng hiển thị phụ (mảng category) 
        mainArr: phpArrayJs(<?=json_encode($truyen)?>), // mảng hiển thị chính (mảng truyện)
        linkImg: '<?=$CONTENT_URL?>/IMG/',
        linkTruyen: '<?=$USER_URL?>/truyen/index.php?idTruyen=',
        selectorList: '.itemList', // selector list chứa các truyện
        selectorPagi: '.pagination-category', // selector pagination
        numberPagi : 20,// số item 1 page
        arrange: function () {
            // phương thức sắp xếp truyện
        },
    };
    // selector pagination phải là duy nhất
    phanTrang(showPagePagi,opitionShow);
    clickArrange('.category__filter','.category__filter-item',arrangeWeb,showPagePagi,opitionShow);
</script>