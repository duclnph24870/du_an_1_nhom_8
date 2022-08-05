<?php 
    // lấy ra 5 truyện đang đọc gần nhất
    $dangDoc = select_all("SELECT * FROM dangdoc WHERE idUser=$idUserPro ORDER BY dateDangDoc DESC LIMIT 0,5");
    
    // lấy ra các truyện đã đăng của user
    $daDang = select_all("SELECT * FROM truyen WHERE idUser=$idUserPro ORDER BY dateTruyen DESC");

    // lấy ra mảng danh mục
    $category = select_all("SELECT * FROM danhmuc");

    // lấy ra mảng đánh giá
    $danhGias = select_all("SELECT * FROM danhgia WHERE idUser=$idUserPro ORDER BY dateDanhGia DESC");

    // lấy ra mảng comment 
    $comments = select_all("SELECT * FROM comment WHERE idUser=$idUserPro ORDER BY dateComment DESC");

    // user all 
    $userAll = select_all("SELECT * FROM user");

    // rep comment
    $repComments = select_all("SELECT * FROM replycomment");

    // rep danh gia
    $repDanhGias = select_all("SELECT * FROM replydanhgia");
?>

<script src="<?=$CONTENT_URL?>/JS/product.js"></script>
<script src="<?=$CONTENT_URL?>/JS/userManager.js"></script>
<script src="<?=$CONTENT_URL?>/JS/userProfile.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/product.css">
<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/admin.css">
<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/userProfile.css">


<div class="content userProfile">
    <!-- ===== banner ====== -->
    <div class="banner d-none d-md-block">
        <div class="banner__img"></div>
    </div>

    <div class="container-fluid p-0">
        <div class="container block-content">
            <div class="row">
                <div class="col-12">
                    <div class="admin-left d-flex">
                        <div class="admin-left-icon text">
                            <i class="fas fa-user"></i>
                            Thông Tin Cơ Bản
                        </div>
                        <?php if (isset($_SESSION['user']) && (int)$_SESSION['user']['quyenHan'] >= 3) :?>
                            <div class="admin-left-icon text">
                                <i class="fas fa-comments"></i>
                                Bình Luận
                            </div>
                            <div class="admin-left-icon text">
                                <i class="fas fa-comment-alt-edit"></i>
                                Đánh Giá
                            </div>
                        <?php endif?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="admin-right">
                        <!-- == thông tin cơ bản === -->
                        <div class="admin-right-item">
                            <div class="row"> 
                                <div class="col-8">
                                    <?php if (count($dangDoc) > 0) :?>
                                        <!-- truyện đã đọc  -->
                                        <div class="userProfile__content-left-section1">
                                            <div class="content__section-header">
                                                <div class="content__section-title title">Truyện Đã Đọc</div>
                                            </div>
                                            <div class="userProfile__content-left-section1-content">
                                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <?php for ($i = 0;$i < count($dangDoc);$i++) :?>
                                                            <li data-target="#carouselExampleIndicators" data-slide-to="<?=$i?>" class="<?=$i == 0 ? 'active' : ''?>"></li>
                                                        <?php endfor?>
                                                    </ol>

                                                    <div class="carousel-inner">
                                                        <?php foreach ($dangDoc as $k => $doc) :?>
                                                            <?php 
                                                                // Lấy ra truyện đang đọc
                                                                $truyenDangDoc = select_one("SELECT * FROM truyen WHERE idTruyen=".$doc['idTruyen']."");
                                                            ?>
                                                            <div class="carousel-item <?=$k == 0 ? 'active' : '' ?>">
                                                                <div class="d-flex">
                                                                    <div class="carousel-item__left">
                                                                        <img src="<?=$CONTENT_URL?>/IMG/<?=$truyenDangDoc['imgTruyen']?>" alt="">
                                                                    </div>
                                                                    <div class="carousel-item__right">
                                                                        <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$doc['idTruyen']?>" class="carousel-item__right-title limit1 text"><?=$truyenDangDoc['tenTruyen']?></a>
                                                                        <div class="carousel-item__right-master block-icon">
                                                                            <i class="fas fa-user-edit"></i>
                                                                            <span class="limit1"><?=$truyenDangDoc['tacGia']?></span>
                                                                        </div>
                                                                        <div class="carousel-item__right-demo limit5">
                                                                            <?=$truyenDangDoc['gioiThieu']?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach?>
                                                    </div>

                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true">
                                                        <i class="fas fa-arrow-left"></i>
                                                        </span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true">
                                                        <i class="fas fa-arrow-right"></i>
                                                        </span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                    </div>
                                            </div>
                                        </div>
                                    <?php endif?>
                                    <?php if (count($daDang) > 0) :?>
                                        <!-- truyện đã đăng  -->
                                        <div class="userProfile__content-left-section2">
                                            <div class="content__section-header">
                                                <div class="content__section-title title">Truyện Đã Đăng</div>
                                            </div>
                                            <div class="userProfile__content-left-section2-content">
                                                <!-- list truyện đã đăng  -->
                                                <div class="userProfile__content-left-section2-content-list">

                                                    <div class="content__section1-main-item">
                                                        <a href="../HTML/product.html" class="content__section1-main-item-img" style="background-image: url(https://static.cdnno.com/poster/tu-luyen-theo-dau-pha-thuong-khung-bat-dau/150.jpg?1585210461);"></a>
                                                        <div class="content__section1-main-item-content">
                                                            <a href="../HTML/product.html" class="content__section1-main-item-title text">Tu Luyện Theo Đấu Phá Thương Khung Bắt Đầu</a>
                                                            <div class="content__section1-main-item-demo">
                                                                Hệ thống nơi tay, thế giới ta có, thiếu niên người mang vạn năng hệ thống, theo Đấu Phá Thương Khung bắt đầu tu luyện, đây là một người hiện đại tại dị giới tu hành cố sự. . .
                                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam fugit, officia tenetur magni necessitatibus architecto quia dolor porro reiciendis, quidem voluptate, asperiores magnam. Maiores, saepe eos architecto vero quas ab.
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus pariatur neque accusamus molestiae tempore atque, consequuntur perspiciatis repellat tempora eaque voluptatem aperiam error autem, temporibus quidem, excepturi blanditiis veritatis ullam!
                                                            </div>
                                                            <div class="content__section1-main-item-footer">
                                                                <div class="content__section1-main-item-master">
                                                                    <i class="fas fa-user-edit"></i>
                                                                    Giang Hồ Hữu Tửu
                                                                </div>
                                                                <div class="content__section1-main-item-chap d-flex">
                                                                    <i class="fas fa-book"></i>
                                                                    369 chương
                                                                </div>
                                                                <div class="content__section1-main-item-category btn">Đồng Nhân</div>
                                                                <div class="content__section1-main-item-master userProfile__product-view">
                                                                    <i class="fas fa-glasses" aria-hidden="true"></i>
                                                                    123
                                                                </div>
                                                                <div class="content__section1-main-item-master userProfile__product-danhDau">
                                                                    <i class="far fa-leaf" aria-hidden="true"></i>
                                                                    12
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- pagination đã đăng  -->
                                                <div class="pagination pagiProfileDaDang">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif?>
                                </div>
                                <!-- thông tin  -->
                                <div class="col-4">
                                    <div class="userProfile__content-right">
                                        <div class="userProfile__information">
                                            <div class="userProfile__information-avt">
                                                <img src="<?=$CONTENT_URL?>/IMG/<?=$userProfile['imgUser']?>" alt="">
                                                <span><?=showQuyenHan($userProfile['quyenHan'])?></span>
                                            </div>
                                            <div class="userProfile__information-content">
                                                <div class="userProfile__information-name limi1"><?=$userProfile['trangThaiComment'] == 0 ? 'Một Bạn Đọc Ngại Ngùng' : $userProfile['userName']?></div>
                                                <div class="userProfile__information-level">lv.<?=$userProfile['quyenHan']?></div>
                                                <div class="userProfile__information-date block-icon">
                                                    <i class="far fa-clock"></i>
                                                        <?=timeCount($userProfile['userDate'])?>
                                                </div>
                                            </div>
                                            <div class="userProfile__information-description">
                                                <?=isset($userProfile['imgUser']) ? $userProfile['gioiThieu'] : 'Chưa có giới thiệu nào!'?>
                                            </div>
                                            <div class="expUser userProfile__information-exp">
                                                <div class="expUser__content">
                                                    <div class="expUser__content-text">
                                                    Exp: <span class="expUser__content-having"><?=$userProfile['exp']?></span> / <span class="expUser__content-required"><?=(int)$userProfile['quyenHan']*1000?></span>
                                                    </div>
                                                    <style>
                                                        .expUser::after {
                                                            content: "" !important;
                                                        }
                                                    </style>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="userProfile__statistical">
                                            <div class="userProfile__statistical-item">
                                                <div class="userProfile__statistical-name">Đã Đọc</div>
                                                <div class="userProfile__statistical-content">
                                                    <div class="userProfile__statistical-content-item">
                                                        <b><?=count($dangDoc)?></b>
                                                        truyện
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="userProfile__statistical-item">
                                                <div class="userProfile__statistical-name">Xuất Bản</div>
                                                <div class="userProfile__statistical-content">
                                                    <div class="userProfile__statistical-content-item">
                                                        <b><?=count($daDang)?></b>
                                                        truyện
                                                    </div>
                                                    <div class="userProfile__statistical-content-item">
                                                        <b><?=count(select_all("SELECT * FROM chuong WHERE idUser=$idUserPro"))?></b>
                                                        chương
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="userProfile__statistical-item">
                                                <div class="userProfile__statistical-name">Bình Luận</div>
                                                <div class="userProfile__statistical-content">
                                                    <div class="userProfile__statistical-content-item">
                                                        <b><?=count(select_all("SELECT * FROM comment WHERE idUser=$idUserPro"))?></b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="userProfile__statistical-item">
                                                <div class="userProfile__statistical-name">Cất Giữ</div>
                                                <div class="userProfile__statistical-content">
                                                    <div class="userProfile__statistical-content-item">
                                                        <b><?=count(select_all("SELECT * FROM danhdau WHERE idUser=$idUserPro"))?></b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (isset($_SESSION['user']) && (int)$_SESSION['user']['quyenHan'] >= 3) :?>
                            <!-- ==== bình luận === -->
                            <form method="POST" action="<?=$USER_URL?>/usermanager/deleteComment.php" class="admin-right-item userProfile-comment">
                                <input type="text" name="type" value="comment" hidden id="">
                                <input type="text" name="link" value="<?=$link?>?idUser=<?=$userProfile['idUser']?>" hidden>
                                <div class="admin-right-item-notify-header d-flex align-items-center title py-2 pt-4">
                                    Bình Luận
                                    <?php if (count($comments) > 0) :?>
                                        <div class="checkbox-btn-block d-flex ml-auto">
                                            <span class="btn-category block-icon blue checkbox-btn-block-iconCheck">
                                                <i class="fa-solid fa-x"></i>
                                                <span>Chọn</span>
                                                <span>Đóng</span>
                                            </span>
                                            <span class="btn-category cam btn-allCheck">
                                                <span>Chọn Tất Cả</span>
                                                <span> Bỏ Chọn Tất Cả</span>
                                            </span>
                                            
                                            <input type="submit" value="Xóa các mục đã chọn" class="btn-category block-icon toi checkbox-btn-block-delete">
                                            
                                        </div>
                                    <?php endif?>
                                </div>
                                <?php if (count($comments) > 0) :?>
                                    <div class="admin-right-item-comment-content listComment-userMannager">
                                        <!-- list comment  -->
                                    </div>
                                    <div class="col-12">
                                        <div class="pagination pagiComment-userManager">
                                            
                                        </div>
                                    </div>
                                <?php endif?>
                                <?php if (count($comments) == 0) :?>
                                    <div class="emtyList w-100 d-flex" style="padding-left: 15px;justify-content: flex-start;">
                                        <i class="fad fa-heart-broken"></i>
                                        Danh sách trống
                                    </div>
                                <?php endif?>
                            </form>
                            <!-- ==== Đánh giá === -->
                            <form method="POST" action="<?=$USER_URL?>/usermanager/deleteComment.php" class="admin-right-item userProfile-danhGia">
                                <input type="text" name="type" value="danhGia" hidden id="">
                                <input type="text" name="link" value="<?=$link?>?idUser=<?=$userProfile['idUser']?>" hidden>
                                <div class="admin-right-item-notify-header pt-4 d-flex align-items-center title py-2">
                                    Đánh Giá
                                    <?php if (count($danhGias) > 0) :?>
                                    <div class="checkbox-btn-block d-flex ml-auto">
                                        <span class="btn-category block-icon blue checkbox-btn-block-iconCheck">
                                            <i class="fa-solid fa-x"></i>
                                            <span>Chọn</span>
                                            <span>Đóng</span>
                                        </span>
                                        <span class="btn-category cam btn-allCheck">
                                            <span>Chọn Tất Cả</span>
                                            <span> Bỏ Chọn Tất Cả</span>
                                        </span>
                                        
                                        <input type="submit" value="Xóa các mục đã chọn" class="btn-category block-icon toi checkbox-btn-block-delete">
                                    </div>
                                    <?php endif?>
                                </div>
                                <?php if (count($danhGias) > 0) :?>
                                <div class="admin-right-item-comment-content listUser-danhGia">
                                    <!-- list đánh giá  -->
                                </div>
                                <div class="col-12">
                                    <div class="pagination danhGiaPagi-userManager">
                                        
                                    </div>
                                </div>
                                <?php endif?>
                                <?php if (count($danhGias) == 0) :?>
                                    <div class="emtyList w-100 d-flex" style="padding-left: 15px;justify-content: flex-start;">
                                        <i class="fad fa-heart-broken"></i>
                                        Danh sách trống
                                    </div>
                                <?php endif?>
                            </form>
                        <?php endif?>
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

<script>
    // nextPageAdmin('div.admin-left-icon','.admin-right-item','.admin-right-item-header-item','.admin-right-item-content-item');
    nextPage('.admin-right-item-content-read-delete-icon','.admin-right-item-content-read-delete-content');
    nextPage('div.admin-left-icon','.admin-right-item','page','profile')
    showExp();
</script>

<script>
    const optionProfileDaDang = {
        subArr: phpArrayJs(<?=json_encode($category)?>), // mảng hiển thị phụ (mảng category) 
        mainArr: phpArrayJs(<?=json_encode($daDang)?>), // mảng hiển thị chính (mảng truyện)
        contentUrl: '<?=$CONTENT_URL?>',
        userUrl: '<?=$USER_URL?>',
        selectorList: '.userProfile__content-left-section2-content-list', // selector list chứa các truyện
        selectorPagi: '.pagiProfileDaDang', // selector pagination
        numberPagi : 10,// số item 1 page
    };
    // selector pagination phải là duy nhất
    phanTrang(showDaDangProfile,optionProfileDaDang);
</script>

<?php if ((int)$userProfile['quyenHan'] >= 3) :?>
<!-- Hiển thị comment và đánh giá  -->
<?php if (count($danhGias) > 0) :?>
<script>
    const optionShowDanhGia = {
        subArr: phpArrayJs(<?=json_encode($userAll)?>), 
        mainArr: phpArrayJs(<?=json_encode($danhGias)?>), 
        subArr2: phpArrayJs(<?=json_encode($repDanhGias)?>), 
        subArr3: phpArrayJs(<?=json_encode(select_all("SELECT * FROM truyen"))?>),
        userUrl: '<?=$USER_URL?>',
        contentUrl: '<?=$CONTENT_URL?>',
        <?php if (isset($_SESSION['user'])) :?>
        idUser: <?=$_SESSION['user']['idUser']?>,
        <?php endif?>
        selectorList: '.listUser-danhGia', // selector list chứa các đánh giá
        selectorItem: '.product__navbar-item-comment-item', // selector item đánh giá
        selectorLike: '.product__navbar-item-comment-item-bottom-item.like', // selector nút like
        selectorRep:'.product__navbar-item-comment-item-bottom-item.btn-commentRep',// selector nút mở form trả lời
        selectorDelete: '.admin-right-item-comment-delete',// selector nút xóa đánh giá
        numberPagi : 10,// số item 1 page
        numberPagiChild:20, // số item 1 list rep
        selectorPagi: '.danhGiaPagi-userManager',
        arrange: function () {
            // phương thức sắp xếp đánh giá
        },
        showListRep: function () {
            //show list trả lời đánh giá
        },
        showColorStart: function () {
            //show màu sao
            starColor('.product__navbar-item-danhGia-item-start');
        },
        showRepFrom: function () {
            //show form trả lời
            showFormRep('.btn-commentRep');
        },
        checkAllCallback: function () {
            checkAll('.userProfile-danhGia','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="danhGiaCheckBox[]"]','.checkbox-btn-block-delete');
        },
        linkPage: '<?=$link?>',
        userManager: 'on',
    };
    phanTrangUserManager('danhGia',showListDanhGia,optionShowDanhGia);
</script>
<?php endif?>

<?php if (count($comments) > 0) :?>
    <script>
        const optionShowComment = {
            subArr: phpArrayJs(<?=json_encode($userAll)?>), 
            mainArr: phpArrayJs(<?=json_encode($comments)?>), 
            subArr2: phpArrayJs(<?=json_encode($repComments)?>), 
            subArr3: phpArrayJs(<?=json_encode(select_all("SELECT * FROM truyen"))?>),
            userUrl: '<?=$USER_URL?>',
            contentUrl: '<?=$CONTENT_URL?>',
            <?php if (isset($_SESSION['user'])) :?>
            idUser: <?=$_SESSION['user']['idUser']?>,
            <?php endif?>
            selectorList: '.listComment-userMannager', // selector list chứa các đánh giá
            selectorItem: '.product__navbar-item-comment-item', // selector item đánh giá
            selectorLike: '.product__navbar-item-comment-item-bottom-item.like', // selector nút like
            selectorRep:'.product__navbar-item-comment-item-bottom-item.btn-commentRep',// selector nút mở form trả lời
            selectorDelete: '.admin-right-item-comment-delete',// selector nút xóa đánh giá
            numberPagi : 10,// số item 1 page
            numberPagiChild:20, // số item 1 list rep
            selectorPagi: '.pagiComment-userManager',
            arrange: function () {
                // phương thức sắp xếp đánh giá
            },
            showListRep: function () {
                //show list trả lời đánh giá
            },
            showColorStart: function () {
                //show màu sao
                starColor('.product__navbar-item-danhGia-item-start');
            },
            showRepFrom: function () {
                //show form trả lời
                showFormRep('.btn-commentRep');
            },
            checkAllCallback: function () {
                checkAll('.userProfile-comment','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="commentCheckBox[]"]','.checkbox-btn-block-delete');
            },
            linkPage: '<?=$link?>',
            userManager: 'on',
        };
        phanTrangUserManager('comment',showListDanhGia,optionShowComment);
    </script>
<?php endif?>
<?php endif?>