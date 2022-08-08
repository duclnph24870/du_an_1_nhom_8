<?php 
    $idTruyen = $_GET['idTruyen'];
    $truyenShow = select_one("SELECT * FROM truyen WHERE idTruyen=$idTruyen AND trangThai=1");

    $userUpTruyen = select_one("SELECT * FROM user WHERE idUser=".$truyenShow['idUser']."");
    $truyenCungUser = select_all("SELECT * FROM truyen WHERE idUser=".$truyenShow['idUser']." AND trangThai=1");
    $userAll = select_all("SELECT * FROM user");
    $repDanhGias = select_all("SELECT * FROM replydanhgia WHERE idTruyen=$idTruyen");
    $repComments = select_all("SELECT * FROM replycomment WHERE idTruyen=$idTruyen");


    $chuongs = select_all("SELECT * FROM chuong WHERE idTruyen=$idTruyen ORDER BY soChuong");

    function showChu ($soChu) {
        $result = '';
        if ($soChu >= 1000 && $soChu < 1000000) {
            $result = round($soChu / 1000,1).'K';
        }elseif ($soChu >= 1000000) {
            $result = round($soChu / 1000000,1).' M';
        }elseif ($soChu < 1000) {
            $result = $soChu;
        }
        return $result;
    }

    function showPointDanhGia ($danhGiaArr,$nameColumn) {
        $sumPoint = 0;
        if (count($danhGiaArr) > 0) {
            foreach ($danhGiaArr as $item) {
                $sumPoint += $item[$nameColumn];
            }
            return round($sumPoint/count($danhGiaArr),1);
        }else {
            return 0;
        }
    }

    // các đánh giá 
    $danhGias = select_all("SELECT * FROM danhgia WHERE idTruyen=$idTruyen ORDER BY dateDanhGia DESC");
    $comments = select_all("SELECT * FROM comment WHERE idTruyen=$idTruyen ORDER BY dateComment DESC");
?>
<link rel="stylesheet" href="<?=$CONTENT_URL?>/JS/public.js">
<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/product.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    scrollNoDrifted('srollTruyen');
</script>

<div class="content">
    <!-- ===== banner ====== -->
    <div class="banner d-none d-md-block">
        <div class="banner__img"></div>
    </div>

    <div class="container-fluid p-0">
        <div class="container block-content">
            <div class="product__top">
                <div class="row w-100 m-0">
                    <div class="product__img">
                        <img src="<?=$CONTENT_URL?>/IMG/<?=$truyenShow['imgTruyen']?>" alt="" title="<?=$truyenShow['tenTruyen']?>">
                    </div>
                    
                    <div class="product__main">
                        <div class="product__title title limit1">
                            <?php if (isset($_SESSION['user']) && ((int)$_SESSION['user']['quyenHan'] >= 3 || $_SESSION['user']['idUser'] == $truyenShow['idUser'])) :?>
                                <a href="<?=$ADMIN_URL?>/truyen/indexAdminTruyen.php?editTruyen=1&idTruyen=<?=$idTruyen?>" class="admin-right-item-comment-delete text"><i class="fas fa-edit"></i></a>
                                <?php if ((int)$_SESSION['user']['quyenHan'] >= 4) :?>
                                <a href="<?=$ADMIN_URL?>/truyen/addTruyen/deleteTruyen.php?idTruyen=<?=$idTruyen?>&link=<?=$USER_URL?>/loctruyen/index.php" class="admin-right-item-comment-delete text"><i class="fas fa-trash"></i></a>
                                <?php endif?>
                            <?php endif?>
                            <?=$truyenShow['tenTruyen']?>
                        </div>
                        <div class="product__category">
                            <div class="product__category-item btn-category xam"><?=$truyenShow['tacGia']?></div>
                            <a href="<?=$USER_URL?>/loctruyen/index.php?tinhTrang=<?=$truyenShow['tinhTrang']?>" class="product__category-item btn-category vang"><?=$truyenShow['tinhTrang'] == 0 ? 'Đang Ra' : 'Đã Hoàn Thành'?></a>
                            <a href="<?=$USER_URL?>/loctruyen/index.php?nhom1=<?=$truyenShow['nhom1']?>" class="product__category-item btn-category toi"><?=selectNameCate($truyenShow['nhom1'])?></a>
                            <a href="<?=$USER_URL?>/loctruyen/index.php?nhom2=<?=$truyenShow['nhom2']?>" class="product__category-item btn-category primary"><?=selectNameCate($truyenShow['nhom2'])?></a>
                            <a href="<?=$USER_URL?>/loctruyen/index.php?nhom3=<?=$truyenShow['nhom3']?>" class="product__category-item btn-category green"><?=selectNameCate($truyenShow['nhom3'])?></a>
                            <a href="<?=$USER_URL?>/loctruyen/index.php?nhom4=<?=$truyenShow['nhom4']?>" class="product__category-item btn-category cam"><?=selectNameCate($truyenShow['nhom4'])?></a>
                            <a href="<?=$USER_URL?>/loctruyen/index.php?nhom5=<?=$truyenShow['nhom5']?>" class="product__category-item btn-category vang"><?=selectNameCate($truyenShow['nhom5'])?></a>
                            <a href="<?=$USER_URL?>/loctruyen/index.php?nhom6=<?=$truyenShow['nhom6']?>" class="product__category-item btn-category red"><?=selectNameCate($truyenShow['nhom6'])?></a>
                        </div>

                        <div class="product__information">
                            <div class="product__chapNumber product__information-item">
                                <div class="font-weight-bold"><?=count($chuongs)?></div>
                                <div>Chương</div>
                            </div>
                            <div class="product__wordNumber product__information-item">
                                <div class="font-weight-bold"><?=showChu($truyenShow['soChu'])?></div>
                                <div>Chữ</div>
                            </div>
                            <div class="product__viewNumber product__information-item">
                                <div class="font-weight-bold"><?=showChu($truyenShow['viewTruyen'])?></div>
                                <div>Lượt Xem</div>
                            </div>
                            <div class="product__likeNumber product__information-item">
                                <div class="font-weight-bold"><?=showChu(count(select_all("SELECT * FROM danhdau WHERE idTruyen=$idTruyen")))?></div>
                                <div>Cất Giữ</div>
                            </div>
                            <div class="product__likeNumber product__information-item">
                                <div class="font-weight-bold"><?=showChu($truyenShow['deCu'])?></div>
                                <div>Đề Cử</div>
                            </div>
                            
                        </div>
                        <div class="product__star">
                            <div class="product__navbar-item-danhGia-item-start">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span><?=showPointDanhGia($danhGias,'tongHop')?></span>
                            </div>
                            
                            <span style="color:#999;"> (<?=showChu(count(select_all("SELECT * FROM danhgia WHERE idTruyen=$idTruyen")))?> đánh giá) </span>
                        </div>
                        <div class="product__btn-block">
                            <?php if (count($chuongs) > 0) :?>
                                <a href="<?=$USER_URL?>/chuong/index.php?idTruyen=<?=$idTruyen?>&idChuong=<?=$chuongs[0]['idChuong']?>" class="product__btn-item btn-product">
                                    <i class="fas fa-glasses"></i>
                                    Đọc Truyện
                                </a>
                            <?php endif?>
                            <?php if (count($chuongs) == 0) :?>
                                <div style="opacity: 0.7;cursor: default;" onclick="showModifier('.modifier.modifier-err','Truyện hiện tại chưa có chương','');" class="product__btn-item btn-product">
                                    <i class="fas fa-glasses"></i>
                                    Đọc Truyện
                                </div>
                            <?php endif?>
                            <?php if (isset($_SESSION['user']) && count(select_all("SELECT * FROM danhdau WHERE idTruyen=$idTruyen AND idUser=".($_SESSION['user']['idUser'])."")) == 0) :?>
                                <a href="<?=$USER_URL?>/truyen/danhDau.php?type=insert&idTruyen=<?=$idTruyen?>&idUser=<?=$_SESSION['user']['idUser']?>" class="product__btn-item btn-category xam">
                                    <i class="fas fa-ticket"></i>
                                    Đánh Dấu
                                </a>
                            <?php endif?>

                            <?php if (!isset($_SESSION['user'])) :?>
                                <div onclick="showModifier('.modifier.modifier-err','Bạn cần đăng nhập để thực hiện chức năng này','');" class="product__btn-item btn-category xam">
                                    <i class="fas fa-ticket"></i>
                                    Đánh Dấu
                                </div>
                            <?php endif?>

                            <?php if (isset($_SESSION['user']) && count(select_all("SELECT * FROM danhdau WHERE idTruyen=$idTruyen AND idUser=".($_SESSION['user']['idUser'])."")) == 1) :?>
                                <a href="<?=$USER_URL?>/truyen/danhDau.php?type=delete&idTruyen=<?=$idTruyen?>&idUser=<?=$_SESSION['user']['idUser']?>" class="product__btn-item btn-category xam">
                                    <i class="fas fa-check"></i>
                                    Bỏ Đánh Dấu
                                </a>
                            <?php endif?>
                            <?php if (isset($_SESSION['user'])) :?>
                                <?php if ((int)$_SESSION['user']['phieuDeCu'] > 0) {?>
                                    <a href="<?=$USER_URL?>/truyen/deCu.php?idTruyen=<?=$idTruyen?>&link=<?=$link?>&idUser=<?=$_SESSION['user']['idUser']?>" class="product__btn-item btn-category green" style="border-color: var(--color);">
                                        <i class="far fa-leaf"></i>
                                        Đề cử
                                    </a>
                                <?php }else{?>
                                    <div onclick="showModifier('.modifier.modifier-err','Phiếu đề cử của bạn đã hết, hãy quay lại vào ngày mai!','');" class="product__btn-item btn-category green" style="border-color: var(--color);">
                                        <i class="far fa-leaf"></i>
                                        Đề cử
                                    </div>
                                <?php }?>
                            <?php endif?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product__navbar">
                <div class="product__navbar-btn-block">
                    <button class="product__navbar-btn">Giới Thiệu</button>
                    <button class="product__navbar-btn">Đánh Giá <span><?=showChu(count($danhGias))?></span></button>
                    <button class="product__navbar-btn">D.s Chương <span><?=count($chuongs)?></span></button>
                    <button class="product__navbar-btn">Bình Luận <span><?=showChu(count($comments))?></span></button>
                </div>
                <div class="product__navbar-block">
                    <!-- ==== thông tin truyện ==== -->
                    <div class="product__navbar-item">
                        <div class="row">
                            <div class="col-8">
                                <div class="product__navbar-item-left">
                                    <div class="product__navbar-item-left-demo">
                                        <?=$truyenShow['gioiThieu']?> 
                                    </div>  
                                    <div class="product__navbar-item-left-item">
                                        <div class="title">Cất Giữ</div>
                                        <?=showChu(count(select_all("SELECT * FROM danhdau WHERE idTruyen=$idTruyen")))?>
                                        <div class="title">No.0</div>
                                    </div>
                                    <div class="product__navbar-item-left-item">
                                        <div class="title" style="margin: unset;">Chương Mới</div>
                                        <?php if (count($chuongs) > 0) :?>
                                            <a href="<?=$USER_URL?>/chuong/index.php?idTruyen=<?=$idTruyen?>&idChuong=<?=$chuongs[count($chuongs) - 1]['idChuong']?>" class="text">Chương <?=$chuongs[count($chuongs) - 1]['soChuong']?>: <?=$chuongs[count($chuongs) - 1]['tieuDe']?></a>
                                            <div><?=timeCount($chuongs[count($chuongs) - 1]['dateChuong'])?></div>
                                        <?php endif?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="product__navbar-item-right product__navbar-item-introduce">
                                    <div class="product__navbar-item-introduce-avt">
                                        <img src="<?=$CONTENT_URL?>/IMG/<?=$userUpTruyen['imgUser']?>" alt="">
                                        <span><?=showQuyenHan($userUpTruyen['quyenHan'])?></span>
                                    </div>
                                    <div class="product__navbar-item-introduce-userName"><?=$userUpTruyen['userName']?></div>
                                    <div class="product__navbar-item-introduce-block">
                                        <div class="product__navbar-item-introduce-item">
                                            <i class="fas fa-book"></i>
                                            <span>Số Truyện</span>
                                            <?=count($truyenCungUser)?>
                                        </div>
                                        <div class="product__navbar-item-introduce-item">
                                            <i class="fas fa-layer-group"></i>
                                            <span>Số Chương</span>
                                            <?=count(select_all("SELECT * FROM chuong WHERE idUser=".$userUpTruyen['idUser'].""))?>
                                        </div>
                                        <div class="product__navbar-item-introduce-item">
                                            <i class="fas fa-database"></i>
                                            <span>Cấp</span>
                                            <?=$userUpTruyen['quyenHan']?>
                                        </div>
                                    </div>

                                    <?php 
                                        if (count($truyenCungUser) >= 3) {
                                            $numberItem = 2;
                                        }elseif (count($truyenCungUser) < 3) {
                                            $numberItem = count($truyenCungUser) - 1;
                                        }
                                    ?>
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php for ($i = 0; $i <= $numberItem;$i++) :?>
                                                <div class="carousel-item <?=$i == 0 ? 'active' : ''?>">
                                                    <img src="<?=$CONTENT_URL?>/IMG/<?=$truyenCungUser[$i]['imgTruyen']?>" alt="">
                                                    <div class="carousel-item-name limit1 text" title="<?=$truyenCungUser[$i]['tenTruyen']?>"><?=$truyenCungUser[$i]['tenTruyen']?></div>
                                                    <div class="carousel-item-demo limit3"><?=$truyenCungUser[$i]['gioiThieu']?></div>
                                                    <div class="carousel-item-btn btn"><?=selectNameCate($truyenCungUser[$i]['nhom1'])?></div>
                                                </div>
                                            <?php endfor?>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true">
                                            <i class="fas fa-arrow-left"></i>
                                            </span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true">
                                            <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ==== đánh giá ==== -->
                    <div class="product__navbar-item">
                        <div class="row">
                            <div class="col-8">
                                <div class="product__navbar-item-left">
                                    <form action="isertComment.php" class="danhGia-form" method="post">
                                        <input type="text" name="type" value="danhGia" hidden>
                                        <input type="text" hidden name="idUser" value="<?=isset($_SESSION['user']) ? $_SESSION['user']['idUser'] : ''?>">
                                        <input type="text" hidden name="idTruyen" value="<?=$idTruyen?>" id="">
                                        <input type="text" hidden name="link" value="<?=$link?>?idTruyen=<?=$idTruyen?>">
                                        <input type="text" hidden name="idUserUpTruyen" value="<?=$userUpTruyen['idUser']?>">
                                        <div class="product__navbar-item-left-top">
                                            <div class="product__navbar-item-left-top-item">
                                                <div class="title">Tính cách nhân vật</div>
                                                <input type="range" min="0" max="5" step="1" name="tinhCach" class="myRange" value="0"> 
                                                <span class="rangeValue"></span>
                                            </div>
                                            <div class="product__navbar-item-left-top-item">
                                                <div class="title">Nội dung cốt truyện</div>
                                                <input type="range" min="0" max="5" step="1" name="cotTruyen" class="myRange" value="0"> 
                                                <span class="rangeValue"></span>
                                            </div>
                                            <div class="product__navbar-item-left-top-item">
                                                <div class="title">Bố cục thế giới</div>
                                                <input type="range" min="0" max="5" step="1" name="boCuc" class="myRange" value="0"> 
                                                <span class="rangeValue"></span>
                                            </div>
                                        </div>
                                        <div class="product__navbar-item-left-bottom">
                                            <div class="form-input">
                                                <textarea cols="30" name="noiDung" rows="3" placeholder="Đánh giá của bạn về truyện này"></textarea>
                                                <input type="submit" <?=isset($_SESSION['user']) ? '' : 'disabled'?> hidden id="submit__danhGia">
                                                <label for="submit__danhGia" <?=isset($_SESSION['user']) ? '' : 'onclick="showModifier(\'.modifier.modifier-err\',\'Bạn cần đăng nhập để thực hiện chức năng này\',\'\');"'?>>
                                                    <i class="fas fa-paper-plane"></i>
                                                </label>
                                                <div class="danhGia-err"></div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Đánh giá list  -->
                                    <div class="product__navbar-item-list-danhGia">
                                        <!-- list danh sách câu trả lời  -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="product__navbar-item-right product__navbar-danhGia">
                                    <div class="product__navbar-danhGia-top">
                                        <div class="product__navbar-danhGia-title">
                                            <div class="title">Tổng Hợp Đánh Giá</div>
                                            <div class="title">
                                                <div class="product__navbar-item-danhGia-item-start">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span style="color:var(--primary);"><?=showPointDanhGia($danhGias,'tongHop')?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__navbar-danhGia-item">
                                            <div>Tính cách nhân vật</div>
                                            <div class="title">
                                                <div class="product__navbar-item-danhGia-item-start">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span style="color:var(--primary);"><?=showPointDanhGia($danhGias,'tinhCach')?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__navbar-danhGia-item">
                                            <div>Nội dung cốt truyện</div>
                                            <div class="title">
                                                <div class="product__navbar-item-danhGia-item-start">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span style="color:var(--primary);"><?=showPointDanhGia($danhGias,'cotTruyen')?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__navbar-danhGia-item">
                                            <div>Bố cục thế giới</div>
                                            <div class="title">
                                                <div class="product__navbar-item-danhGia-item-start">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span style="color:var(--primary);"><?=showPointDanhGia($danhGias,'boCuc')?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__navbar-danhGia-bottom">
                                        <div class="product__navbar-danhGia-title title">
                                            <div class="title">Lưu ý khi đánh giá</div>
                                        </div>
                                        <div class="product__navbar-danhGia-item">
                                            <div>1.Không được dẫn link đến những website khác</div>
                                        </div>
                                        <div class="product__navbar-danhGia-item">
                                            <div>2. Không được có những từ ngữ gay gắt, đả kích, xúc phạm người khác</div>
                                        </div>
                                        <div class="product__navbar-danhGia-item">
                                            <div>3. Đánh giá hoặc bình luận không liên quan tới truyện sẽ bị xóa</div>
                                        </div>
                                        <div class="product__navbar-danhGia-item">
                                            <div>4. Đánh giá hoặc bình luận chê truyện một cách chung chung không mang lại giá trị cho người đọc sẽ bị xóa</div>
                                        </div>
                                        <div class="product__navbar-danhGia-item">
                                            <div>5. Đánh giá có điểm số sai lệch với nội dung sẽ bị xóa</div>
                                        </div>
                                        <div class="product__navbar-danhGia-item">
                                            <div><i>Vui lòng xem và tuân theo đầy đủ các quy định tại Điều Khoản Dịch Vụ khi sử dụng website</i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- === danh sách chương ==== -->
                    <div class="product__navbar-item product__navbar-item-chap-list">
                        <div class="row">
                            <div class="col-12 border-0">
                                <div class="product__navbar-item-chap product__navbar-item-chap-header">
                                    <div class="title">Danh sách chương</div>
                                </div>
                            </div>
                            <?php foreach ($chuongs as $c) :?>
                                <div class="col-4">
                                    <a href="<?=$USER_URL?>/chuong/index.php?idTruyen=<?=$idTruyen?>&idChuong=<?=$c['idChuong']?>" class="product__navbar-item-chap text d-block">
                                        Chương <?=$c['soChuong']?>: <?=$c['tieuDe']?> 
                                        <span>(<?=timeCount($c['dateChuong'])?>)</span>
                                    </a> 
                                </div>
                            <?php endforeach?>
                            <?php if (count($chuongs) == 0) :?>
                                <div class="emtyList" style="padding-left: 15px;">
                                    <i class="fad fa-heart-broken"></i>
                                    Truyện hiện tại chưa có chương!
                                </div>
                            <?php endif?>
                        </div>
                    </div>
                    <!-- ====comment==== -->
                    <div class="product__navbar-item">
                        <div class="row">
                            <div class="col-8">
                                <div class="product__navbar-item-left">
                                    <div class="product__navbar-item-chap product__navbar-item-chap-header pb-0">
                                        <div class="title"><?=count($comments)?> Bình Luận</div>
                                    </div>
                                    <div class="product__navbar-item-comment">
                                        <?php if (isset($_SESSION['user'])) :?>
                                            <div class="product__navbar-item-comment-item border-0">
                                                <div class="product__navbar-item-comment-item-img">
                                                    <img src="<?=$CONTENT_URL?>/IMG/<?=$_SESSION['user']['imgUser']?>" alt="">
                                                </div>
                                                <form action="isertComment.php" method="POST" class="product__navbar-item-comment-item-right product__navbar-item-comment-item-input comment-from">
                                                    <input type="text" name="type" value="comment" hidden>
                                                    <input type="text" hidden name="idUser" value="<?=isset($_SESSION['user']) ? $_SESSION['user']['idUser'] : ''?>">
                                                    <input type="text" hidden name="idTruyen" value="<?=$idTruyen?>" id="">
                                                    <input type="text" hidden name="link" value="<?=$link?>?idTruyen=<?=$idTruyen?>">
                                                    <input type="text" hidden name="idUserUpTruyen" value="<?=$userUpTruyen['idUser']?>">
                                                    <input type="submit" id="check__submit-comment1" hidden>
                                                    <div class="form-input h-100">
                                                        <textarea cols="30" name="noiDung" rows="3" placeholder="Bình luận của bạn"></textarea>
                                                        <label for="check__submit-comment1">
                                                            <i class="fas fa-paper-plane"></i>
                                                        </label>
                                                        <div class="danhGia-err"></div>
                                                    </div>
                                                </form>
                                            </div>
                                        <?php endif?>
                                        <div class="product__navbar-item-list-comment w-100">
                                            <!-- list danh sách câu trả lời  -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="product__navbar-item-right">
                                    <a href="" class="product__navbar-itemcomment-right-link">
                                        <img src="https://static.cdnno.com/storage/topbox/1b5b186fc032f07a83ae7d9479d24799.jpg" alt="">
                                    </a>
                                    <a href="" class="product__navbar-itemcomment-right-link">
                                        <img src="https://static.cdnno.com/storage/topbox/1b5b186fc032f07a83ae7d9479d24799.jpg" alt="">
                                    </a>
                                    <a href="" class="product__navbar-itemcomment-right-link">
                                        <img src="https://static.cdnno.com/storage/topbox/1b5b186fc032f07a83ae7d9479d24799.jpg" alt="">
                                    </a>
                                    <a href="" class="product__navbar-itemcomment-right-link">
                                        <img src="https://static.cdnno.com/storage/topbox/1b5b186fc032f07a83ae7d9479d24799.jpg" alt="">
                                    </a>
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

<script src="<?=$CONTENT_URL?>/JS/product.js"></script>
<script src="<?=$CONTENT_URL?>/JS/validation.js"></script>

<script>
    const opitionShowDanhGia = {
        subArr: phpArrayJs(<?=json_encode($userAll)?>), 
        mainArr: phpArrayJs(<?=json_encode($danhGias)?>), 
        subArr2: phpArrayJs(<?=json_encode($repDanhGias)?>), 
        userUrl: '<?=$USER_URL?>',
        contentUrl: '<?=$CONTENT_URL?>',
        <?php if (isset($_SESSION['user'])) :?>
        idUser: <?=$_SESSION['user']['idUser']?>,
        <?php endif?>
        selectorList: '.product__navbar-item-list-danhGia', // selector list chứa các đánh giá
        selectorItem: '.product__navbar-item-comment-item', // selector item đánh giá
        selectorLike: '.product__navbar-item-comment-item-bottom-item.like', // selector nút like
        selectorRep:'.product__navbar-item-comment-item-bottom-item.btn-commentRep',// selector nút mở form trả lời
        selectorDelete: '.admin-right-item-comment-delete',// selector nút xóa đánh giá
        numberPagi : 20,// số item 1 page
        numberPagiChild:20, // số item 1 list rep
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
        idTruyen: <?=$idTruyen?>,
        linkPage: '<?=$link?>?idTruyen=<?=$idTruyen?>',
    };
    //option comment
    const opitionShowComment = {
        subArr: phpArrayJs(<?=json_encode($userAll)?>), 
        mainArr: phpArrayJs(<?=json_encode($comments)?>), 
        subArr2: phpArrayJs(<?=json_encode($repComments)?>), 
        userUrl: '<?=$USER_URL?>',
        contentUrl: '<?=$CONTENT_URL?>',
        <?php if (isset($_SESSION['user'])) :?>
        idUser: <?=$_SESSION['user']['idUser']?>,
        <?php endif?>
        selectorList: '.product__navbar-item-list-comment', // selector list chứa các đánh giá
        selectorItem: '.product__navbar-item-comment-item', // selector item đánh giá
        selectorLike: '.product__navbar-item-comment-item-bottom-item.like', // selector nút like
        selectorRep:'.product__navbar-item-comment-item-bottom-item.btn-commentRep',// selector nút mở form trả lời
        selectorDelete: '.admin-right-item-comment-delete',// selector nút xóa đánh giá
        numberPagi : 20,// số item 1 page
        numberPagiChild:20, // số item 1 list rep
        arrange: function () {
            // phương thức sắp xếp đánh giá
        },
        showListRep: function () {
            //show list trả lời đánh giá
        },
        showRepFrom: function () {
            //show form trả lời
            showFormRep('.btn-commentRep');
        },
        idTruyen: <?=$idTruyen?>,
        linkPage: '<?=$link?>?idTruyen=<?=$idTruyen?>',
    };
</script>

<script>
    nextPage('.product__navbar-btn','.product__navbar-item','page','truyenItem','off');
    showListDanhGia('danhGia',opitionShowDanhGia);
    showListDanhGia('comment',opitionShowComment);
</script>

<?php if (isset($_SESSION['user'])) :?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            validator({
                form: '.danhGia-form',
                formGroupSelector: '.form-input',
                errSelector: '.danhGia-err',
                rules: [
                validator.isRequied('textarea[name="noiDung"]','*Nội dung đánh giá không được bỏ trống'),
                validator.maxLength('textarea[name="noiDung"]',200,'*Nội dung đánh giá của bạn tối đa được 200 ký tự'),
                ],
            });
            // form comment
            validator({
                form: '.comment-from',
                formGroupSelector: '.form-input',
                errSelector: '.danhGia-err',
                rules: [
                validator.isRequied('textarea[name="noiDung"]','*Nội dung đánh giá không được bỏ trống'),
                validator.maxLength('textarea[name="noiDung"]',200,'*Nội dung đánh giá của bạn tối đa được 200 ký tự'),
                ],
            });
        })
    </script>
<?php endif?>