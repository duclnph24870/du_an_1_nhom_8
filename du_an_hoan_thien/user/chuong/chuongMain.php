<?php 
    if (isset($_GET['idChuong'])) {
        $idTruyen = $_GET['idTruyen'];
        $chuongAll = select_all("SELECT * FROM chuong WHERE idTruyen=$idTruyen ORDER BY soChuong");
        $truyen = select_one("SELECT * FROM truyen WHERE idTruyen=$idTruyen");
    }
    
    if (isset($_SESSION['user'])) {
        $idUser = $_SESSION['user']['idUser'];
        // lấy ra mảng đang đọc của truyện
        $dangDoc = select_one("SELECT * FROM dangdoc WHERE idTruyen=$idTruyen AND idUser=$idUser");
        if (isset($dangDoc['idUser'])) {
            // nếu đã tồn tại
            pdo_execute("UPDATE `dangdoc` SET `idChuong`=$idChuong,`soChuong`=".$chuong['soChuong'].",`dateDangDoc`='$timePr' WHERE idDangDoc=".$dangDoc['idDangDoc']."");
        }else {
            // nếu chưa tồn tại
            pdo_execute("INSERT INTO `dangdoc`(`idTruyen`, `idUser`, `idChuong`,`soChuong`,`dateDangDoc`) VALUES ($idTruyen,".$_SESSION['user']['idUser'].",$idChuong,".$chuong['soChuong'].",'$timePr')");
        }
        if (checkView('view')) {
            // tăng view chương lên 1 và cập nhập lại
            $view = $chuong['viewChuong'] + 1;
            pdo_execute("UPDATE `chuong` SET `viewChuong`=$view WHERE idChuong=$idChuong");
            $viewAll = 1;
            foreach ($chuongAll as $c) {
                $viewAll += $c['viewChuong'];
            }
            // cập nhập lại view chương cho truyện
            pdo_execute("UPDATE `truyen` SET `viewTruyen`=$viewAll WHERE idTruyen=$idTruyen");
            // thêm thời gian nhận view của chương
            $_SESSION['view'] = $timePr;
        }
    }

?>


<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/chuong.css">

<!-- === content ==== -->
<div class="content">
    <div class="container content-khung">
        <div class="chuong-navbar">
            <div class="chuong-navbar-item block-icon navList-icon" title="Danh Sách Chương">
                <i class="fas fa-bars"></i>
            </div>
            <div class="chuong-navbar-list navList-content">
                <div class="w-100 chuong-navbar-list-title title">Danh Sách Chương
                </div>
                <?php foreach ($chuongAll as $c) :?>
                <div class="chuong-navbar-list-item">
                    <a href="<?=$USER_URL?>/chuong/index.php?idChuong=<?=$c['idChuong']?>&idTruyen=<?=$idTruyen?>" class="chuong-navbar-list-link limit1">
                        Chương <?=$c['soChuong']?>: <?=$c['tieuDe']?>
                    </a>
                </div>
                <?php endforeach?>
               
            </div>
            <div class="chuong-navbar-item block-icon navList-icon"  title="Cài Đăt" >
                <i class="fas fa-cog"></i>
            </div>
            <div class="navList-content chuong-navbar-item-setting">
                <div class="w-100 chuong-navbar-list-title title">Cài Đặt</div>
                <div class="chuong-navbar-item-setting-item">
                    <div class="chuong-navbar-item-setting-item-title">
                        <i class="fa-solid fa-font"></i>
                        <span>Cỡ Chữ</span>
                    </div>
                    <div class="chuong-navbar-item-setting-edit">
                        <div class="chuong-navbar-item-setting-edit-btn btn-minus-font btn-minus"><i class="fa-solid fa-minus"></i></div>
                        <div class="chuong-navbar-item-setting-edit-btn btn-number-font btn-number">26</div>
                        <div class="chuong-navbar-item-setting-edit-btn btn-plus-font btn-plus"><i class="fa-solid fa-plus"></i></div>
                    </div>
                </div>
                <div class="chuong-navbar-item-setting-item">
                    <div class="chuong-navbar-item-setting-item-title">
                        <i class="fa-solid fa-arrows-left-right"></i>
                        <span>Chiều rộng khung</span>
                    </div>
                    <div class="chuong-navbar-item-setting-edit">
                        <div class="chuong-navbar-item-setting-edit-btn btn-minus btn-minus-khung"><i class="fa-solid fa-minus"></i></div>
                        <div class="chuong-navbar-item-setting-edit-btn btn-number btn-number-khung">1100</div>
                        <div class="chuong-navbar-item-setting-edit-btn btn-plus btn-plus-khung"><i class="fa-solid fa-plus"></i></div>
                    </div>
                </div>
                <div class="chuong-navbar-item-setting-item">
                    <div class="chuong-navbar-item-setting-item-title">
                        <i class="fa-solid fa-text-height"></i>
                        <span>Dãn dòng</span>
                    </div>
                    <div class="chuong-navbar-item-setting-edit">
                        <div class="chuong-navbar-item-setting-edit-btn btn-minus btn-minus-height"><i class="fa-solid fa-minus"></i></div>
                        <div class="chuong-navbar-item-setting-edit-btn btn-number btn-number-height">1.5</div>
                        <div class="chuong-navbar-item-setting-edit-btn btn-plus btn-plus-height"><i class="fa-solid fa-plus"></i></div>
                    </div>
                </div>
            </div>
            <a style="color: var(--text);" href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$idTruyen?>" class="chuong-navbar-item block-icon" title="Thông Tin Truyện"><i class="fas fa-arrow-left"></i></a>
            <div class="chuong-navbar-item block-icon" title="Hướng Dẫn"><i class="fas fa-info-circle"></i></div>
        </div>
        <div class="chuong-content">
            <div class="row">
                <!-- === btn === -->
                <div class="col-12">
                    <div class="chuong-content__btn">
                        <?php if ($chuong['soChuong'] > 1) :?>
                            <a  style="color:var(--text);" href="<?=$USER_URL?>/chuong/index.php?idTruyen=<?=$idTruyen?>&idChuong=<?=select_idChuong($chuong['soChuong'],$chuongAll,false)?>" class="chuong-content__btn-item">
                                <i class="fas fa-arrow-left"></i>
                                Chương Trước
                            </a>
                        <?php endif?>
                        <?php if (!($chuong['soChuong'] > 1)) :?>
                            <div class="chuong-content__btn-item disabled" style="color:var(--text);">
                                <i class="fas fa-arrow-left"></i>
                                Chương Trước
                            </div>
                        <?php endif?>
                        <?php if (($chuong['soChuong'] < $chuongAll[(count($chuongAll) - 1)]['soChuong'])) :?>
                            <a href="<?=$USER_URL?>/chuong/index.php?idTruyen=<?=$idTruyen?>&idChuong=<?=select_idChuong($chuong['soChuong'],$chuongAll,true)?>" class="chuong-content__btn-item"  style="color:var(--text);">
                                Chương Sau
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        <?php endif?>
                        <?php if (!($chuong['soChuong'] < $chuongAll[(count($chuongAll) - 1)]['soChuong'])) :?>
                            <div class="chuong-content__btn-item disabled"  style="color:var(--text);">
                                Chương Sau
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        <?php endif?>
                    </div>
                </div>
                <!-- ==== thông tin chương === -->
                <div class="col-12">
                    <div class="chuong-content__title">Chương <?=$chuong['soChuong']?>: <?=$chuong['tieuDe']?></div>
                </div>
                <div class="col-12">
                    <div class="chuong-content__thongTin">
                        <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$idTruyen?>" class="chuong-content__titlePr block-icon text">
                            <i class="fas fa-book"></i>
                            <?=$truyen['tenTruyen']?>
                        </a>
                        <div class="chuong-content__tacGia block-icon text">
                            <i class="fas fa-user-edit"></i>
                            <?=$truyen['tacGia']?>
                        </div>
                        <div class="chuong-content__soChu block-icon">
                            <i class="fas fa-bold"></i>
                            <?=$truyen['soChu']?> Chữ
                        </div>
                        <div class="chuong-content__danhDau block-icon">
                            <i class="fas fa-ticket"></i>
                            <?=count(select_all("SELECT * FROM danhdau WHERE idTruyen=$idTruyen"))?> Đánh Dấu
                        </div>
                        <div class="chuong-content__dateChuong block-icon">
                            <i class="fas fa-clock"></i>
                            <?=$truyen['dateTruyen']?>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="chuong-content__noiDung">
                        <?=$chuong['noiDung']?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="chuong-content__btn-bottom">
                        <?php if ($chuong['soChuong'] > 1) :?>
                            <a href="<?=$USER_URL?>/chuong/index.php?idTruyen=<?=$idTruyen?>&idChuong=<?=select_idChuong($chuong['soChuong'],$chuongAll,false)?>" class="chuong-content__btn-bottom-item" style="color:var(--text);">
                                <i class="fas fa-arrow-left"></i>
                                Chương Trước
                            </a>
                        <?php endif?>
                        <?php if (!($chuong['soChuong'] > 1)) :?>
                            <div class="chuong-content__btn-bottom-item disabled" style="color:var(--text);">
                                <i class="fas fa-arrow-left"></i>
                                Chương Trước
                            </div>
                        <?php endif?>
                        <?php if (($chuong['soChuong'] < $chuongAll[(count($chuongAll) - 1)]['soChuong'])) :?>
                            <a href="<?=$USER_URL?>/chuong/index.php?idTruyen=<?=$idTruyen?>&idChuong=<?=select_idChuong($chuong['soChuong'],$chuongAll,true)?>" class="chuong-content__btn-bottom-item" style="color:var(--text);">
                                Chương Sau
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        <?php endif?>
                        <?php if (!($chuong['soChuong'] < $chuongAll[(count($chuongAll) - 1)]['soChuong'])) :?>
                            <div class="chuong-content__btn-bottom-item disabled"  style="color:var(--text);">
                                Chương Sau
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        <?php endif?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    nextPage('.navList-icon','.navList-content');
    editChuong('.btn-plus-font','.btn-minus-font','.btn-number-font',1,'.chuong-content__noiDung','font-size',30,17);
    editChuong('.btn-plus-height','.btn-minus-height','.btn-number-height',0.1,'.chuong-content__noiDung','line-height',2.1,1.5);
    editChuong('.btn-plus-khung','.btn-minus-khung','.btn-number-khung',100,'.content-khung','max-width',1100,800);
</script>
