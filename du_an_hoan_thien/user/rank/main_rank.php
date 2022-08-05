<?php 
    // lấy tất cả danh mục
    $category = select_all("SELECT * FROM danhmuc");

    // lấy ra bảng thịnh hành 
    $thinhHanh = select_all("SELECT * FROM truyen ORDER BY soChuong DESC");

    // Đề cử
    $deCu = select_all("SELECT * FROM truyen ORDER BY deCu DESC");

    // view 
    $truyenView = select_all("SELECT * FROM truyen ORDER BY viewTruyen DESC");
?>
<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/product.css">
<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/admin.css">
<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/rank.css">

<script src="<?=$CONTENT_URL?>/JS/rank.js"></script>
<script src="<?=$CONTENT_URL?>/JS/public.js"></script>
<script src="<?=$CONTENT_URL?>/JS/login.js"></script>
<script src="<?=$CONTENT_URL?>/JS/validation.js"></script>

<div class="content">
    <!-- ===== banner ====== -->
    <div class="banner d-none d-md-block">
        <div class="banner__img"></div>
    </div>

    <div class="container-fluid p-0">
        <div class="container block-content rank">
            <div class="row">
                <div class="col-3">
                    <div class="admin-left">
                        <div class="admin-left-icon text">
                            <i class="fas fa-user"></i>
                            Thịnh hành
                        </div>
                        <div class="admin-left-icon text">
                            <i class="fas fa-book"></i>
                            Đọc nhiều
                        </div>
                        <div class="admin-left-icon text">
                            <i class="fa-solid fa-fan"></i>
                            Đề cử 
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="admin-right">
                        <!-- == Thịnh hành === -->
                        <div class="admin-right-item">
                            <div class="admin-right-item-content ">
                                <div class="admin-right-item-content-item firstShow">
                                    <ul class="render_trend p-0">
                                    </ul>
                                </div>
                                <div class="pagination pagiRankTrend">
                                    
                                </div>
                            </div>
                        </div>
                        <!-- == Đọc nhiều === -->
                        <div class="admin-right-item">
                            <div class="admin-right-item-content">
                                <div class="admin-right-item-content-item">
                                    <ul class="render_topRead p-0">
                                    </ul>
                                    bảng xếp hạng đọc nhiều
                                </div>
                                <div class="pagination pagiTopRead">
                                    
                                </div>
                            </div>
                        </div>
                        <!-- == Đề cử=== -->
                        <div class="admin-right-item">
                            <div class="admin-right-item-content">
                                <div class="admin-right-item-content-item">
                                    <ul class="render_offer p-0">
                                    </ul>

                                </div>
                                <div class="pagination pagiOffer">
                                    
                                </div>

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
                        Mê Truyện Chữ là nền tảng mở trực tuyến, miễn phí đọc truyện chữ được convert hoặc dịch
                        kỹ lưỡng, do các converter và dịch giả đóng góp, rất nhiều truyện hay và nổi bật được
                        cập nhật nhanh nhất với đủ các thể loại tiên hiệp, kiếm hiệp, huyền ảo ,...
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

<script>
    nextPage('.admin-left-icon', '.admin-right-item','page','rank','off');
    // thịnh hành
    const optionTrend = {
        subArr: phpArrayJs(<?=json_encode($category)?>), // mảng hiển thị phụ (mảng category) 
        mainArr: phpArrayJs(<?=json_encode($thinhHanh)?>), // mảng hiển thị chính (mảng truyện)
        contentUrl: '<?=$CONTENT_URL?>',
        userUrl: '<?=$USER_URL?>',
        selectorList: '.render_trend', // selector list chứa các truyện
        selectorPagi: '.pagiRankTrend', // selector pagination
        numberPagi : 10,// số item 1 page
        numberPrivate: function (arr,i) {
            return arr[i]['soChuong'];
        },
        icon: '<i class="fa-solid fa-arrow-up-from-bracket"></i>',
    };
    // selector pagination phải là duy nhất
    phanTrang(showRank,optionTrend);

    // đọc nhiều
    const optionRead = {
        subArr: phpArrayJs(<?=json_encode($category)?>), // mảng hiển thị phụ (mảng category) 
        mainArr: phpArrayJs(<?=json_encode($truyenView)?>), // mảng hiển thị chính (mảng truyện)
        contentUrl: '<?=$CONTENT_URL?>',
        userUrl: '<?=$USER_URL?>',
        selectorList: '.render_topRead', // selector list chứa các truyện
        selectorPagi: '.pagiTopRead', // selector pagination
        numberPagi : 10,// số item 1 page
        numberPrivate: function (arr,i) {
            return arr[i]['viewTruyen'];
        },
        icon: '<i class="fas fa-glasses" aria-hidden="true"></i>',
    };
    // selector pagination phải là duy nhất
    phanTrang(showRank,optionRead);

    // đề cử
    const optionOffer = {
        subArr: phpArrayJs(<?=json_encode($category)?>), // mảng hiển thị phụ (mảng category) 
        mainArr: phpArrayJs(<?=json_encode($deCu)?>), // mảng hiển thị chính (mảng truyện)
        contentUrl: '<?=$CONTENT_URL?>',
        userUrl: '<?=$USER_URL?>',
        selectorList: '.render_offer', // selector list chứa các truyện
        selectorPagi: '.pagiOffer', // selector pagination
        numberPagi : 10,// số item 1 page
        numberPrivate: function (arr,i) {
            return arr[i]['deCu'];
        },
        icon: '<i class="far fa-leaf" aria-hidden="true"></i>',
    };
    // selector pagination phải là duy nhất
    phanTrang(showRank,optionOffer);
</script>