<?php
    // Lấy ra mảng truyện hiển thi phần biên tập viên đề cử 8 item
    $deCu = select_all("SELECT * FROM truyen ORDER BY deCu DESC LIMIT 0,8");

    // lấy ra mảng truyện đang đọc, 5 item
    if (isset($_SESSION['user'])) {
        $dangDoc = select_all("SELECT * FROM dangdoc WHERE idUser=".$_SESSION['user']['idUser']." ORDER BY dateDangDoc DESC LIMIT 0,5");
    }

    // lấy ra truyện mới cập nhập, 8 item
    $moiCapNhap = select_all("SELECT * FROM truyen ORDER BY dateCapNhap DESC LIMIT 0,8");

    //lấy ra bảng đọc nhiều của tuần
    $docNhieu = select_all("SELECT * FROM truyen ORDER BY viewTruyen DESC LIMIT 0,10");

    // lấy ra bảng thịnh hành của tuần
    $thinhHanh = select_all("SELECT * FROM truyen ORDER BY soChuong DESC LIMIT 0,10");

    // Đề cử tuần
    $deCu = select_all("SELECT * FROM truyen ORDER BY deCu DESC LIMIT 0,10");

    // mới đăng
    $moiDang = select_all("SELECT * FROM truyen ORDER BY dateTruyen DESC LIMIT 0,8");

    // đánh giá điểm cao
    $danhGia = select_all("SELECT * FROM danhgia ORDER BY tongHop DESC LIMIT 0,3");
?>

<div class="content">
    <!-- ===== banner ====== -->
    <div class="banner d-none d-md-block">
        <div class="banner__img"></div>
    </div>

    <div class="container-fluid p-0">
        <div class="container block-content">
            <div class="content__section1">
                <div class="row">
                    <!-- Truyện đề cử -->
                    <div class="col-12 col-lg-8 col-xl-8 section1-left">
                        <div class="content__section-header">
                            <div class="content__section-title title">Truyện Đề Cử</div>
                            <a href="<?=$USER_URL?>/loctruyen/index.php" class="content__section-link link">Xem Tất Cả</a>
                        </div>

                        <div class="content__section1-main">
                            <div class="row">
                                <?php foreach ($deCu as $d) :?>
                                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="content__section1-main-item">
                                            <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$d['idTruyen']?>" title="<?=$d['tenTruyen']?>" class="content__section1-main-item-img">
                                                <img src="<?=$CONTENT_URL?>/IMG/<?=$d['imgTruyen']?>" alt="">
                                            </a>
                                            <div class="content__section1-main-item-content">
                                                <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$d['idTruyen']?>" title="<?=$d['tenTruyen']?>" class="content__section1-main-item-title text"><?=$d['tenTruyen']?></a>
                                                <div class="content__section1-main-item-demo">
                                                    <?=$d['gioiThieu']?>
                                                </div>
                                                <div class="content__section1-main-item-footer">
                                                    <div class="content__section1-main-item-master">
                                                        <i class="fas fa-user-edit"></i>
                                                        <?=$d['tacGia']?>
                                                    </div>
                                                    <a href="<?=$USER_URL?>/loctruyen/index.php?nhom1=<?=$d['nhom1']?>" class="content__section1-main-item-category btn"><?=selectNameCate($d['nhom1'])?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach?>
                            </div>
                        </div>
                    </div>
                    <!-- đang đọc  -->
                    <div class="col-4 d-none d-lg-block section1-right">
                        <div class="content__section1-top">
                            <div class="content__section-header">
                                <div class="content__section-title title">Đang Đọc</div>
                                <a href="<?=$USER_URL?>/usermanager/index.php" class="content__section-link link">Xem Tất Cả</a>
                            </div>

                            <div class="content__section1-read">
                                <!-- trường hợp có truyện  -->
                                <?php if (isset($_SESSION['user']) && count($dangDoc) > 0 ) :?>
                                    <?php foreach ($dangDoc as $doc) :?>
                                        <?php $truyenDangDoc = select_one("SELECT * FROM truyen WHERE idTruyen=".$doc['idTruyen']."");?>
                                        <div class="content__section1-read-item">
                                            <div class="content__section1-read-img">
                                                <img src="<?=$CONTENT_URL?>/IMG/<?=$truyenDangDoc['imgTruyen']?>" alt="">
                                            </div>
                                            <div class="content__section1-read-content">
                                                <a href="<?=$USER_URL?>/chuong/index.php?idTruyen=<?=$doc['idTruyen']?>&idChuong=<?=$doc['idChuong']?>" class="content__section1-main-item-title text"><?=$truyenDangDoc['tenTruyen']?></a>
                                                <div class="content__section1-read-chap">
                                                    Đã Đọc: <?=$doc['soChuong']?>/<?=$truyenDangDoc['soChuong']?>
                                                    <a href="<?=$USER_URL?>/usermanager/deleteDangDoc.php?idDangDoc=<?=$doc['idDangDoc']?>&link=<?=$link?>" class="text">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="<?=$USER_URL?>/chuong/index.php?idTruyen=<?=$doc['idTruyen']?>&idChuong=<?=$doc['idChuong']?>" class="content__section1-read-continue">Đọc Tiếp</a>
                                        </div>
                                    <?php endforeach?>
                                <?php endif?>
                                <!-- Không có truyện đã đọc  -->
                                <?php if (isset($_SESSION['user']) && count($dangDoc) == 0) :?>
                                    <div class="content__section1-read-item no-read">
                                        <a href="<?=$USER_URL?>/loctruyen/index.php" class="no-read-btn">Bắt đầu đọc truyện nào
                                            <div class="no-read-btn__block-icon">
                                                <div class="no-read-btn__icon">
                                                    <i class="fas fa-arrow-right"></i>
                                                </div>
                                                <div class="no-read-btn__icon">
                                                    <i class="fas fa-arrow-right"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endif?>
                                <?php if (!isset($_SESSION['user'])) :?>
                                <!-- chưa login  -->
                                    <div class="content__section1-read-item no-login">
                                        <i class="fas fa-frown"></i> Bạn cần đăng nhập để sử dụng chức năng này
                                    </div>
                                <?php endif?>
                            </div>
                        </div>
                        <div class="content__section1-bottom">
                            <div class="content__section-header">
                                <div class="content__section-title title">Hướng Dẫn</div>
                                <a href="" class="content__section-link link">Xem Tất Cả</a>
                            </div>

                            <div class="content__section1-guide">
                                <div class="content__section1-guide-item">
                                    <div class="icon-cricle"></div>
                                    <span>Làm sao để tăng điểm hâm mộ?</span>
                                </div>

                                <div class="content__section1-guide-item">
                                    <div class="icon-cricle"></div>
                                    <span>Đừng để bị trừ Exp  </span>
                                </div>
                                <div class="content__section1-guide-item">
                                    <div class="icon-cricle"></div>
                                    <span>Hoa tồn tại được bao lâu? </span>
                                </div>
                                <div class="content__section1-guide-item">
                                    <div class="icon-cricle"></div>
                                    <span>Làm sao đổi màu nền, cỡ chữ, font chữ</span>
                                </div>
                                <div class="content__section1-guide-item">
                                    <div class="icon-cricle"></div>
                                    <span>Làm sao để có Hoa?</span>
                                </div>
                                <div class="content__section1-guide-item">
                                    <div class="icon-cricle"></div>
                                    <span>Tôi muốn xem điểm hâm mộ của mình, vào đâu để xem?</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content__section2">
                <!-- Các truyện mới cập nhập  -->
                <div class="content__section-header">
                    <div class="content__section-title title">Mới Cập Nhập</div>
                    <a href="<?=$USER_URL?>/loctruyen/index.php" class="content__section-link link">Xem Tất Cả</a>
                </div>

                <div class="row">
                    <!-- list truyện mới cập nhập  -->
                    <?php foreach ($moiCapNhap as $newCN) :?>
                        <!-- lấy ra chương mới nhất của truyện  -->
                        <?php $chuongNew = select_one("SELECT * FROM chuong WHERE idTruyen=".$newCN['idTruyen']." AND soChuong=".$newCN['soChuong']."");?>
                        <!-- lấy ra user đăng truyện  -->
                        <?php $userNewCn = select_one("SELECT * FROM user WHERE idUser=".$newCN['idUser']."")?>
                        <div class="col-12">
                            <div class="content__section2-item">
                                <div class="content__section2-item-category-block">
                                    <a href="<?=$USER_URL?>/loctruyen/index.php?nhom1=<?=$newCN['nhom1']?>" class="limit1 content__section2-item-category"><?=selectNameCate($newCN['nhom1'])?></a>
                                </div>
                                <div class="content__section2-item-name-block">
                                    <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$newCN['idTruyen']?>" class="limit1 content__section2-item-name text"><?=$newCN['tenTruyen']?></a>
                                </div>
                                <div class="col-3">
                                    <a href="" class="limit1 content__section2-item-name-chap text">	
                                        Chương <?=$newCN['soChuong']?>: <?=$chuongNew['tieuDe']?></a>
                                </div>
                                <div class="col-2">
                                    <div class="limit1 content__section2-item-master"><?=$newCN['tacGia']?></div>
                                </div>
                                <div class="col-1">
                                    <div class="limit1 content__section2-item-user"><?=$userNewCn['userName']?></div>
                                </div>
                                <div class="col-2">
                                    <div class="limit1 content__section2-item-time"><?=timeCount($newCN['dateTruyen'])?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach?>
                </div>
            </div>

            <div class="content__section3">
                <div class="row justify-content-center">
                    <!-- đọc nhiều trong tuần  -->
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="content__section3-block content__section3-block1">
                            <div class="content__section-header">
                                <div class="content__section-title title">Đọc Nhiều Tuần</div>
                                <a href="<?=$USER_URL?>/loctruyen/index.php" class="content__section-link link">Xem Tất Cả</a>
                            </div>
                            <div class="content__section3-list">
                                <?php foreach ($docNhieu as $k => $doc) :?>
                                    <?php if ($k == 0) :?>
                                        <div class="content__section3-item especially">
                                            <div class="content__section3-item-rank">
                                                <div class="badge-rank">
                                                    <i class="fas fa-certificate"></i>
                                                </div>
                                            </div>
                                            <div class="content__section3-item-main">
                                                <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$doc['idTruyen']?>" class="content__section3-item-title">
                                                    <span class="limit1 text"><?=$doc['tenTruyen']?></span>
                                                </a>
                                                <div class="content__section3-item-view d-flex">
                                                    <span class="limit1"><?=$doc['viewTruyen']?></span>
                                                    <i class="fas fa-glasses"></i>
                                                </div>
                                                <div class="content__section3-item-master d-flex">
                                                    <i class="fas fa-user-edit"></i>
                                                    <span class="limit1"><?=$doc['tacGia']?></span>
                                                </div>
                                                <div class="content__section3-item-category d-flex">
                                                    <i class="fas fa-book"></i>
                                                    <?=selectNameCate($doc['nhom1'])?>
                                                </div>
                                            </div>
                                            <div class="content__section3-item-img">
                                                <img src="<?=$CONTENT_URL?>/IMG/<?=$doc['imgTruyen']?>" alt="">
                                            </div>
                                        </div>
                                    <?php endif?>

                                    <?php if ($k == 1) :?>
                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                <div class="badge-rank silver">
                                                    <i class="fas fa-certificate"></i>
                                                </div>
                                            </div>
                                            <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$doc['idTruyen']?>" class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text"><?=$doc['tenTruyen']?></div>
                                                <div class="limit1 content__section3-item-view"><?=$doc['viewTruyen']?></div>
                                            </a>
                                        </div>
                                    <?php endif?>
                                    <?php if ($k == 2) :?>
                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                <div class="badge-rank cu">
                                                    <i class="fas fa-certificate"></i>
                                                </div>
                                            </div>
                                            <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$doc['idTruyen']?>" class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text"><?=$doc['tenTruyen']?></div>
                                                <div class="limit1 content__section3-item-view"><?=$doc['viewTruyen']?></div>
                                            </a>
                                        </div>
                                    <?php endif?>
                                    <?php if ($k > 2) :?>
                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                <?=$k + 1?>
                                            </div>
                                            <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$doc['idTruyen']?>" class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text"><?=$doc['tenTruyen']?></div>
                                                <div class="limit1 content__section3-item-view"><?=$doc['viewTruyen']?></div>
                                            </a>
                                        </div>
                                    <?php endif?>
                                <?php endforeach?>
                            </div>
                        </div>
                    </div>

                    <!-- Thịnh hành trong tuần  -->
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="content__section3-block content__section3-block1">
                            <div class="content__section-header">
                                <div class="content__section-title title">Thịnh Hành Tuần</div>
                                <a href="<?=$USER_URL?>/loctruyen/index.php" class="content__section-link link">Xem Tất Cả</a>
                            </div>
                            <div class="content__section3-list">
                                <?php foreach ($thinhHanh as $k => $doc) :?>
                                    <?php if ($k == 0) :?>
                                        <div class="content__section3-item especially">
                                            <div class="content__section3-item-rank">
                                                <div class="badge-rank">
                                                    <i class="fas fa-certificate"></i>
                                                </div>
                                            </div>
                                            <div class="content__section3-item-main">
                                                <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$doc['idTruyen']?>" class="content__section3-item-title">
                                                    <span class="limit1 text"><?=$doc['tenTruyen']?></span>
                                                </a>
                                                <div class="content__section3-item-view d-flex">
                                                    <span class="limit1"><?=$doc['soChuong']?></span>
                                                    <i class="fad fa-alicorn"></i>
                                                </div>
                                                <div class="content__section3-item-master d-flex">
                                                    <i class="fas fa-user-edit"></i>
                                                    <span class="limit1"><?=$doc['tacGia']?></span>
                                                </div>
                                                <div class="content__section3-item-category d-flex">
                                                    <i class="fas fa-book"></i>
                                                    <?=selectNameCate($doc['nhom1'])?>
                                                </div>
                                            </div>
                                            <div class="content__section3-item-img">
                                                <img src="<?=$CONTENT_URL?>/IMG/<?=$doc['imgTruyen']?>" alt="">
                                            </div>
                                        </div>
                                    <?php endif?>

                                    <?php if ($k == 1) :?>
                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                <div class="badge-rank silver">
                                                    <i class="fas fa-certificate"></i>
                                                </div>
                                            </div>
                                            <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$doc['idTruyen']?>" class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text"><?=$doc['tenTruyen']?></div>
                                                <div class="limit1 content__section3-item-view"><?=$doc['soChuong']?></div>
                                            </a>
                                        </div>
                                    <?php endif?>
                                    <?php if ($k == 2) :?>
                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                <div class="badge-rank cu">
                                                    <i class="fas fa-certificate"></i>
                                                </div>
                                            </div>
                                            <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$doc['idTruyen']?>" class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text"><?=$doc['tenTruyen']?></div>
                                                <div class="limit1 content__section3-item-view"><?=$doc['soChuong']?></div>
                                            </a>
                                        </div>
                                    <?php endif?>
                                    <?php if ($k > 2) :?>
                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                <?=$k + 1?>
                                            </div>
                                            <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$doc['idTruyen']?>" class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text"><?=$doc['tenTruyen']?></div>
                                                <div class="limit1 content__section3-item-view"><?=$doc['soChuong']?></div>
                                            </a>
                                        </div>
                                    <?php endif?>
                                <?php endforeach?>
                            </div>
                        </div>
                    </div>

                    <!-- đề cử của tuần  -->
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="content__section3-block content__section3-block1">
                            <div class="content__section-header">
                                <div class="content__section-title title">Đề Cử Tuần</div>
                                <a href="<?=$USER_URL?>/loctruyen/index.php" class="content__section-link link">Xem Tất Cả</a>
                            </div>
                            <div class="content__section3-list">
                                <?php foreach ($deCu as $k => $doc) :?>
                                    <?php if ($k == 0) :?>
                                        <div class="content__section3-item especially">
                                            <div class="content__section3-item-rank">
                                                <div class="badge-rank">
                                                    <i class="fas fa-certificate"></i>
                                                </div>
                                            </div>
                                            <div class="content__section3-item-main">
                                                <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$doc['idTruyen']?>" class="content__section3-item-title">
                                                    <span class="limit1 text"><?=$doc['tenTruyen']?></span>
                                                </a>
                                                <div class="content__section3-item-view d-flex">
                                                    <span class="limit1"><?=$doc['deCu']?></span>
                                                    <i class="far fa-leaf" aria-hidden="true"></i>
                                                </div>
                                                <div class="content__section3-item-master d-flex">
                                                    <i class="fas fa-user-edit"></i>
                                                    <span class="limit1"><?=$doc['tacGia']?></span>
                                                </div>
                                                <div class="content__section3-item-category d-flex">
                                                    <i class="fas fa-book"></i>
                                                    <?=selectNameCate($doc['nhom1'])?>
                                                </div>
                                            </div>
                                            <div class="content__section3-item-img">
                                                <img src="<?=$CONTENT_URL?>/IMG/<?=$doc['imgTruyen']?>" alt="">
                                            </div>
                                        </div>
                                    <?php endif?>

                                    <?php if ($k == 1) :?>
                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                <div class="badge-rank silver">
                                                    <i class="fas fa-certificate"></i>
                                                </div>
                                            </div>
                                            <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$doc['idTruyen']?>" class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text"><?=$doc['tenTruyen']?></div>
                                                <div class="limit1 content__section3-item-view"><?=$doc['deCu']?></div>
                                            </a>
                                        </div>
                                    <?php endif?>
                                    <?php if ($k == 2) :?>
                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                <div class="badge-rank cu">
                                                    <i class="fas fa-certificate"></i>
                                                </div>
                                            </div>
                                            <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$doc['idTruyen']?>" class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text"><?=$doc['tenTruyen']?></div>
                                                <div class="limit1 content__section3-item-view"><?=$doc['deCu']?></div>
                                            </a>
                                        </div>
                                    <?php endif?>
                                    <?php if ($k > 2) :?>
                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                <?=$k + 1?>
                                            </div>
                                            <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$doc['idTruyen']?>" class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text"><?=$doc['tenTruyen']?></div>
                                                <div class="limit1 content__section3-item-view"><?=$doc['deCu']?></div>
                                            </a>
                                        </div>
                                    <?php endif?>
                                <?php endforeach?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content__section1 content__section4">
                <div class="row">
                    <!-- mới đăng  -->
                    <div class="col-12 col-lg-8 col-xl-8 section1-left order-1">
                        <div class="content__section-header">
                            <div class="content__section-title title">Mới Đăng</div>
                            <a href="<?=$USER_URL?>/loctruyen/index.php" class="content__section-link link">Xem Tất Cả</a>
                        </div>

                        <div class="content__section1-main">
                            <div class="row">
                                <?php foreach ($moiDang as $doc) :?>
                                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="content__section1-main-item">
                                            <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$doc['idTruyen']?>" title="<?=$doc['tenTruyen']?>" class="content__section1-main-item-img">
                                                <img src="<?=$CONTENT_URL?>/IMG/<?=$doc['imgTruyen']?>" alt="">
                                            </a>
                                            <div class="content__section1-main-item-content">
                                                <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$doc['idTruyen']?>" class="content__section1-main-item-title text" title="<?=$doc['tenTruyen']?>"><?=$doc['tenTruyen']?></a>
                                                <div class="content__section1-main-item-demo">
                                                    <?=$doc['gioiThieu']?>
                                                </div>
                                                <div class="content__section1-main-item-footer">
                                                    <div class="content__section1-main-item-master">
                                                        <i class="fas fa-user-edit"></i>
                                                        <?=$doc['tacGia']?>
                                                    </div>
                                                    <a href="<?=$USER_URL?>/loctruyen/index.php?nhom1=<?=$doc['nhom1']?>" class="content__section1-main-item-category btn"><?=selectNameCate($doc['nhom1'])?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach?>
                            </div>
                        </div>
                    </div>
                    <!-- đánh giá  -->
                    <div class="col-4 d-none d-lg-block section1-right order-0">
                        <div class="content__section1-top">
                            <div class="content__section-header">
                                <div class="content__section-title title">Mới Đánh Giá</div>
                            </div>

                            <div class="content__section4-assess">
                                <?php foreach ($danhGia as $dg):?>
                                    <?php 
                                        // lấy ra user đánh giá    
                                        $userDg = select_one("SELECT * FROM user WHERE idUser=".$dg['idUser']."");
                                        // lấy ra truyện đánh giá
                                        $truyenDg = select_one("SELECT * FROM truyen WHERE idTruyen=".$dg['idTruyen']."");
                                    ?>
                                    <div class="content__section4-assess-item">
                                        <div class="content__section4-assess-item-top">
                                            <div class="content__section4-assess-item-avt">
                                                <img src="<?=$CONTENT_URL?>/IMG/<?=$userDg['imgUser']?>" alt="" style="width: 100%;height: 100%;border-radius: 50%;">
                                            </div>
                                            <div class="content__section4-assess-item-information">
                                                <a href="<?=$USER_URL?>/user_profile/index.php?idUser=<?=$userDg['idUser']?>" class="content__section4-assess-item-nameUser">
                                                    <span style="font-weight: 600; color: #333;margin-right: 5px;" class="limit1"><?=$userDg['trangThaiComment'] == 0 ? 'Một Bạn Đọc Ngại Ngùng' : $userDg['userName']?></span>
                                                    đánh giá
                                                </a>
                                                <div class="content__section4-assess-item-nameProduct limit1"><?=$truyenDg['tenTruyen']?></div>
                                            </div>
                                            <div class="content__section4-assess-item-point"><?=$dg['tongHop']?></div>
                                        </div>
                                        <div class="content__section4-assess-item-bottom limit3">
                                            <?=$dg['noiDung']?>
                                        </div>
                                    </div>
                                <?php endforeach?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="row">
                <div class="col-12">
                    <a href="index.html" class="footer__logo logo">
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