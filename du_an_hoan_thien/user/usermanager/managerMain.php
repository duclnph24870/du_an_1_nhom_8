<?php
    $userLogin = $_SESSION['user'];

    //truyện đang đọc
    $dangDocs = select_all("SELECT * FROM dangdoc WHERE idUser=".$userLogin['idUser']."");

    // đánh dấu
    $danhDaus = select_all("SELECT * FROM danhdau WHERE idUser=".$userLogin['idUser']."");

    // đã đăng
    $daDangs = select_all("SELECT * FROM truyen WHERE idUser=".$userLogin['idUser']."");

    // user all
    $userAll = select_all("SELECT * FROM user");

    // đánh giá của user
    $danhGias = select_all("SELECT * FROM danhgia WHERE idUser=".$userLogin['idUser']." ORDER BY dateDanhGia DESC");

    // Rep đánh giá
    $repDanhGias = select_all("SELECT * FROM replydanhgia");

    //comment 
    $comments = select_all("SELECT * FROM comment WHERE idUser=".$userLogin['idUser']." ORDER BY dateComment DESC");

    //rep comment
    $repComments = select_all("SELECT * FROM replycomment WHERE idUser=".$userLogin['idUser']."");

?>

<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/product.css">
<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/admin.css">
<script src="<?=$CONTENT_URL?>/JS/product.js"></script>
<script src="<?=$CONTENT_URL?>/JS/public.js"></script>
<script src="<?=$CONTENT_URL?>/JS/userManager.js"></script>
<script src="<?=$CONTENT_URL?>/JS/validation.js"></script>

<div class="content">
    <!-- ===== banner ====== -->
    <div class="banner d-none d-md-block">
        <div class="banner__img"></div>
    </div>

    <div class="container-fluid p-0">
        <div class="container block-content">
            <div class="row">
                <div class="col-3">
                    <div class="admin-left">
                        <div class="admin-left-icon text">
                            <i class="fas fa-user"></i>
                            Hồ Sơ
                        </div>
                        <div class="admin-left-icon text">
                            <i class="fas fa-book"></i>
                            Tủ Truyện
                        </div>
                        <div class="admin-left-icon text">
                            <i class="fas fa-bell"></i>
                            Thông Báo
                        </div>
                        <div class="admin-left-icon text">
                            <i class="fas fa-info-circle"></i>
                            Trợ Giúp & Liên Hệ
                        </div>
                        <div class="admin-left-icon text">
                            <i class="fas fa-cogs"></i>
                            Cài Đặt
                        </div>
                        <div class="admin-left-icon text">
                            <i class="fas fa-comment"></i>
                            Bình Luận
                        </div>
                        <div class="admin-left-icon text">
                            <i class="fas fa-highlighter"></i>
                            Đánh Giá
                        </div>
                        <div class="admin-left-icon text">
                            <i class="fas fa-gifts"></i>
                            Nhiệm Vụ
                        </div>
                        <?php if ((int)$userLogin['quyenHan'] >= 3) :?>
                            <a href="product__ql.html" class="admin-left-icon text">
                                <i class="fas fa-book-reader"></i>
                                Quản Trị Website
                            </a>
                        <?php endif?>
                    </div>
                </div>
                <div class="col-9">
                    <div class="admin-right">
                        <!-- == hồ sơ === -->
                        <div class="admin-right-item">
                            <div class="admin-right-item-header">
                                <div class="admin-right-item-header-item">Hồ Sơ</div>
                                <div class="admin-right-item-header-item">Bảo Mật</div>
                            </div>
                            <div class="admin-right-item-content">
                                <!-- === from thông tin user === -->
                                <form method="post" enctype="multipart/form-data" action="updateUser.php" id="userProfile" class="admin-right-item-content-item">
                                    <input type="text" name="idUser" value="<?=$userLogin['idUser']?>" hidden>
                                    <input type="text" name="link" value="<?=$link?>" hidden>
                                    <input type="file" name="imgUser" hidden id="admin-file-input" multiple>
                                    <label for="admin-file-input">
                                        <div class="admin-file-input-img">
                                            <img src="<?=$CONTENT_URL?>/IMG/<?=$_SESSION['user']['imgUser']?>" alt="">
                                            <div class="admin-file-input-icon">
                                                <i class="fas fa-camera"></i>
                                            </div>
                                        </div>
                                        <div class="imgErr">Ấn vào ảnh để thay đổi ảnh đại diện</div>
                                    </label>
                                    <div class="w-100 mb-2" style="font-size: 1.5rem;text-align: center;color: var(--primary);">Phiếu đề cử: <?=$userLogin['phieuDeCu']?></div>
                                    <div class="expUser">
                                        <div class="expUser__content">
                                            <div class="expUser__content-text">
                                            Exp: <span class="expUser__content-having"><?=$_SESSION['user']['exp']?></span> / <span class="expUser__content-required"><?=((int)$userLogin['quyenHan'] * 1000)?></span>
                                            </div>
                                            <style>
                                                .expUser::after {
                                                    content: "Level <?=$userLogin['quyenHan']?>" !important;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="admin-right-item-content-item-input">
                                        <div>Tên Hiển Thị</div>
                                        <input type="text" name="userProfileName" value="<?=$userLogin['userName']?>">
                                        <span class="modal__form-err"></span>
                                    </div>
                                    <div class="admin-right-item-content-item-input">
                                        <div>Ngày Tháng Năm Sinh</div>
                                        <input type="date" name="ngaySinh" value="<?=isset($userLogin['ngaySinh']) ? $userLogin['ngaySinh'] : ''?>">
                                    </div>
                                    <div class="admin-right-item-content-item-input">
                                        <div>Giới Tính</div>
                                        <div class="admin-right-item-content-item-select-block">
                                            <select name="sex" >
                                                <option value="-1">Chưa xác định</option>
                                                <option value="1" <?=isset($userLogin['sex']) && $userLogin['sex'] == 1 ? 'selected' : ''?>>Nam</option>
                                                <option value="0" <?=isset($userLogin['sex']) && $userLogin['sex'] == 0 ? 'selected' : ''?>>Nữ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="admin-right-item-content-item-input">
                                        <div>Giới Thiệu Ngắn</div>
                                        <textarea name="gioiThieu" class="w-100" cols="30" rows="5" placeholder="Hãy giới thiệu một chút về bạn"><?=isset($userLogin['gioiThieu']) ? $userLogin['gioiThieu'] : ''?></textarea>
                                    </div>
                                    <div class="admin-right-item-content-item-input">
                                        <div>Email</div>
                                        <input type="text" name="userProfileEmail" hidden value="<?=$userLogin['email']?>">
                                        <input type="text" name="userProfileEmailShow" disabled value="<?=$userLogin['email']?>">
                                        <span class="modal__form-err"></span>
                                    </div>
                                    <input type="submit" value="Cập Nhập" class="userProfileSubmit active">
                                </form>
                                <!-- ==== quên mật khẩu ==== -->
                                <form method="post" action="changePass.php" class="admin-right-item-content-item" id="changePass">
                                    <input type="text" name="idUser" hidden value="<?=$userLogin['idUser']?>">
                                    <input type="text" name="link" hidden value="<?=$link?>">
                                    <div class="admin-right-item-content-item-input">
                                        <div>Mật Khẩu Hiện Tại</div>
                                        <input type="text" name="passOld">
                                        <span class="modal__form-err"></span>
                                    </div>
                                    <div class="admin-right-item-content-item-input">
                                        <div>Mật Khẩu Mới</div>
                                        <input type="text" name="passNew">
                                        <span class="modal__form-err"></span>
                                    </div>
                                    <div class="admin-right-item-content-item-input">
                                        <div>Nhập Lại Mật Khẩu Mới</div>
                                        <input type="text" name="confirmPass">
                                        <span class="modal__form-err"></span>
                                    </div>
                                    <input type="submit" value="Cập Nhập">
                                </form>
                            </div>
                        </div>
                        <!-- == tủ truyện === -->
                        <div class="admin-right-item">
                            <div class="admin-right-item-header">
                                <div class="admin-right-item-header-item">Đang Đọc</div>
                                <div class="admin-right-item-header-item">Đánh Dấu</div>
                                <div class="admin-right-item-header-item">Truyện Đã Đăng</div>
                            </div>
                            <div class="admin-right-item-content">
                                <!-- đang đọc  -->
                                <div class="admin-right-item-content-item admin-right-item-content-read">
                                    <?php if (count($dangDocs) > 0) {?>
                                        <?php foreach ($dangDocs as $dangDoc) :?>
                                            <?php $truyenDoc = select_one("SELECT * FROM truyen WHERE idTruyen=".$dangDoc['idTruyen']."")?>
                                            <div class="admin-right-item-content-read-item">
                                                <div class="admin-right-item-content-read-img">
                                                    <img src="<?=$CONTENT_URL?>/IMG/<?=$truyenDoc['imgTruyen']?>" alt="">
                                                </div>
                                                <div class="admin-right-item-content-read-main">
                                                    <a href="<?=$USER_URL?>/chuong/index.php?idTruyen=<?=$dangDoc['idTruyen']?>&idChuong=<?=$dangDoc['idChuong']?>" class="text title d-block"><?=$truyenDoc['tenTruyen']?></a>
                                                    <span>Đã Đọc: <?=$dangDoc['soChuong']?>/<?=$truyenDoc['soChuong']?></span>
                                                </div>
                                                <a href="deleteDangDoc.php?idDangDoc=<?=$dangDoc['idDangDoc']?>&link=<?=$link?>" class="admin-right-item-content-read-delete">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </div>
                                        <?php endforeach?>
                                    <?php }else {?>
                                        <div class="emtyList w-100 d-flex" style="padding-left: 15px;justify-content: flex-start;">
                                            <i class="fad fa-heart-broken"></i>
                                            Danh sách trống
                                        </div>
                                    <?php }?>
                                </div>
                                <!-- đánh dấu  -->
                                <div class="admin-right-item-content-item">
                                <?php if (count($danhDaus) > 0) {?>
                                    <?php foreach ($danhDaus as $danhDau) :?>
                                        <?php $truyenDanhDau = select_one("SELECT * FROM truyen WHERE idTruyen=".$danhDau['idTruyen']."")?>
                                        <div class="admin-right-item-content-read-item">
                                            <div class="admin-right-item-content-read-img">
                                                <img src="<?=$CONTENT_URL?>/IMG/<?=$truyenDanhDau['imgTruyen']?>" alt="">
                                            </div>
                                            <div class="admin-right-item-content-read-main">
                                                <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$danhDau['idTruyen']?>" class="text title d-block"><?=$truyenDanhDau['tenTruyen']?></a>
                                                <span><i class="far fa-book"></i> Số chương: <?=$truyenDanhDau['soChuong']?></span>
                                            </div>
                                            <a href="<?=$USER_URL?>/truyen/danhDau.php?idTruyen=<?=$truyenDanhDau['idTruyen']?>&idUser=<?=$userLogin['idUser']?>&link=<?=$link?>&type=userDelete" class="admin-right-item-content-read-delete">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    <?php endforeach?>
                                    <?php }else {?>
                                        <div class="emtyList w-100 d-flex" style="padding-left: 15px;justify-content: flex-start;">
                                            <i class="fad fa-heart-broken"></i>
                                            Danh sách trống
                                        </div>
                                    <?php }?>
                                    
                                </div>
                                <!-- đã đăng  -->
                                <div class="admin-right-item-content-item">
                                <?php if (count($daDangs) > 0) {?>
                                    <?php foreach ($daDangs as $daDang) :?>
                                        <?php $truyenDaDang = select_one("SELECT * FROM truyen WHERE idTruyen=".$daDang['idTruyen']."")?>
                                        <div class="admin-right-item-content-read-item">
                                            <div class="admin-right-item-content-read-img">
                                                <img src="<?=$CONTENT_URL?>/IMG/<?=$daDang['imgTruyen']?>" alt="">
                                            </div>
                                            <div class="admin-right-item-content-read-main">
                                                <a href="<?=$USER_URL?>/truyen/index.php?idTruyen=<?=$daDang['idTruyen']?>" class="text title d-block"><?=$daDang['tenTruyen']?></a>
                                                <span><i class="far fa-book"></i> Số chương: <?=$daDang['soChuong']?></span>
                                                <span class="ml-3"><i class="far fa-alarm-clock"></i> Thời Gian: <?=timeCount($daDang['dateTruyen'])?></span>
                                            </div>
                                        </div>
                                    <?php endforeach?>
                                    <?php }else {?>
                                        <div class="emtyList w-100 d-flex" style="padding-left: 15px;justify-content: flex-start;">
                                            <i class="fad fa-heart-broken"></i>
                                            Danh sách trống
                                        </div>
                                    <?php }?>

                                </div>
                            </div>
                        </div>
                        <!-- === thông báo === -->
                        <form method="POST" action="deleteNoti.php" class="admin-right-item admin-right-item-notify">
                            <input type="text" value="<?=$link?>" name="link" hidden>
                            <input type="text" value="<?=$userLogin['idUser']?>" name="idUser" hidden>
                            <div class="admin-right-item-header-item border-0 admin-right-item-notify-header d-flex align-items-center title pb-2">
                                Thông Báo
                                <div class="checkbox-btn-block d-flex ml-auto">
                                    <a href="readAll.php?idUser=<?=$userLogin['idUser']?>&link=<?=$link?>" class="btn-category block-icon primary">
                                        Đánh dấu tất cả đã đọc
                                    </a>
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
                            </div>
                            <div class="admin-right-item-content-item">
                            <?php if (count($notify) > 0) {?>
                                <?php foreach ($notify as $noti) :?>
                                    <div class="admin-right-item-content-read-item notify-item <?=exist_string($noti['idUserDoc'],$userLogin['idUser']) ? '' : 'active'?>">
                                        <div class="admin-right-item-content-read-main">
                                            <div class="text"><?=$noti['tieuDe']?></div>
                                            <span><?=timeCount($noti['dateNotify'])?></span>
                                        </div>
                                        <div class="admin-right-item-content-read-delete admin-right-item-content-read-delete-icon">
                                            <i class="fa-solid fa-caret-left"></i>
                                        </div>
                                        <div class="admin-right-item-content-read-delete-content">
                                            Xóa thông báo
                                        </div>
                                        <input type="checkbox" name="notifyCheckBox[]" value="<?=$noti['idNotify']?>" class="chonCheckBox">
                                    </div>
                                <?php endforeach?>
                            <?php }else {?>
                                <div class="emtyList w-100 d-flex" style="padding-left: 15px;justify-content: flex-start;">
                                    <i class="fad fa-heart-broken"></i>
                                    Bạn chưa có thông báo nào!!
                                </div>
                            <?php }?>
                            </div>
                        </form>
                        <!-- === Liên hệ trợ giúp === -->
                        <div class="admin-right-item admin-right-item-contact">
                            <div class="admin-right-item-notify-header title border-bottom pb-2">
                                Liên Hệ & Trợ Giúp
                            </div>
                            <div class="admin-right-item-contact-main">
                                Trước khi yêu cầu hỗ trợ vui lòng đọc kỹ <a href="" class="link">Những câu hỏi thường gặp</a>, nếu vấn đề bạn cần hỗ trợ không có trong những câu hỏi thường gặp hãy <span class="link admin-heald-2">để lại lời nhắn</span>, chúng tôi sẽ trả lời bạn qua email khi làm việc trở lại, giờ làm việc từ 8h - 20h (GMT+07)
                                <br><br>
                                - <span class="title">Lưu ý</span>: Vui lòng không hỏi cách làm nhiệm vụ nhận thưởng, hỗ trợ viên sẽ không trả lời bất cứ câu hỏi nào về vấn đề làm nhiệm vụ nhận thưởng
                            </div>
                        </div>
                        <!-- === Cài đặt === -->
                        <form method="post" class="admin-right-item admin-right-item-setting">
                            <div class="admin-right-item-notify-header title border-bottom pb-2">
                                Cài Đặt
                            </div>
                            <div class="admin-right-item-setting-item">
                                <div class="title py-2">Ẩn danh bình luận</div>
                                <div class="modal__form-checkbox mb-0 ml-3">
                                    <input type="checkbox" <?=$userLogin['trangThaiComment'] == 0 ? 'checked' : ''?> id="modal__form-checkbox" hidden>
                                    <label for="modal__form-checkbox" class="modal__form-checkbox">
                                        <a href="hiddenUserComment.php?idUser=<?=$userLogin['idUser']?>&link=<?=$link?>" class="d-flex">
                                            <div class="modal__form-checkbox-block">
                                                <i class="fas fa-check"></i>
                                            </div>
                                            <div class="modal__form-checkbox-text" style="color: var(--text);"> Ẩn danh bình luận</div>
                                        </a>
                                    </label>
                                </div>
                                <div class="admin-right-item-setting-item-moTa">
                                    <i>*Khi bật chức năng bình luận của bạn sẽ được ẩn Username</i>
                                </div>
                            </div>

                        </form>
                        <!-- ==== bình luận === -->
                        <form method="POST" action="deleteComment.php" class="admin-right-item admin-right-item-comment">
                            <input type="text" name="type" value="comment" hidden id="">
                            <input type="text" name="link" value="<?=$link?>" hidden>
                            <div class="admin-right-item-notify-header d-flex align-items-center title pb-2">
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
                        <!-- ==== đánh giá === -->
                        <form method="POST" action="deleteComment.php" class="admin-right-item admin-right-item-danhGia">
                            <input type="text" name="type" value="danhGia" hidden id="">
                            <input type="text" name="link" value="<?=$link?>" hidden>
                            <div class="admin-right-item-notify-header d-flex align-items-center title pb-2">
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
                        <!-- === nhiệm vụ ==== -->
                        <div class="admin-right-item">
                            <div class="admin-right-item-header">
                                <div class="admin-right-item-header-item">Nhiệm Vụ Ngày</div>
                                <div class="admin-right-item-header-item">Nhiệm Vụ Sự Kiện</div>
                            </div>
                            <div class="admin-right-item-content">
                                <!-- nhiệm vụ hằng ngày  -->
                                <div class="admin-right-item-content-item admin-right-item-content-mission-daily">
                                    <div class="admin-right-item-mission-item">
                                        <div class="admin-right-item-mission-item-right">
                                            <div class="admin-right-item-mission-item-title title">Điểm danh mỗi ngày</div>
                                            <div class="admin-right-item-mission-item-exp"> 3 exp</div>
                                        </div>
                                        <?php if (checkMission('diemDanh',$userLogin['idUser'])) {?>
                                            <a href="<?=$DAO_URL?>/mission/daily.php?idUser=<?=$userLogin['idUser']?>&type=diemDanh&link=<?=$link?>" class="admin-right-item-mission-item-submit">Nhận Thưởng</a>
                                        <?php }else {?>
                                            <div class="admin-right-item-mission-item-submit disabled">Nhận Thưởng</div>
                                        <?php }?>
                                    </div>
                                    <div class="admin-right-item-mission-item">
                                        <div class="admin-right-item-mission-item-right">
                                            <div class="admin-right-item-mission-item-title title">Đánh giá 5 sao một truyện bất kì</div>
                                            <div class="admin-right-item-mission-item-exp"> 3 exp</div>
                                        </div>
                                        <?php if (checkMission('danhGia',$userLogin['idUser'])) {?>
                                            <a href="<?=$DAO_URL?>/mission/daily.php?idUser=<?=$userLogin['idUser']?>&type=danhGia&link=<?=$link?>" class="admin-right-item-mission-item-submit">Nhận Thưởng</a>
                                        <?php }else {?>
                                            <div class="admin-right-item-mission-item-submit disabled">Nhận Thưởng</div>
                                        <?php }?>
                                    </div>
                                    <div class="admin-right-item-mission-item">
                                        <div class="admin-right-item-mission-item-right">
                                            <div class="admin-right-item-mission-item-title title">Thêm một bình luận</div>
                                            <div class="admin-right-item-mission-item-exp"> 5 exp</div>
                                        </div>
                                        <?php if (checkMission('comment',$userLogin['idUser'])) {?>
                                            <a href="<?=$DAO_URL?>/mission/daily.php?idUser=<?=$userLogin['idUser']?>&type=comment&link=<?=$link?>" class="admin-right-item-mission-item-submit">Nhận Thưởng</a>
                                        <?php }else {?>
                                            <div class="admin-right-item-mission-item-submit disabled">Nhận Thưởng</div>
                                        <?php }?>
                                    </div>
                                </div>
                                <!-- nhiệm vụ sự kiện  -->
                                <div class="admin-right-item-content-item admin-right-item-content-mission-event">
                                    <div class="admin-right-item-mission-item admin-right-item-mission-item-event">
                                        <div class="admin-right-item-mission-item-right">
                                            <div class="admin-right-item-mission-item-title title">Sự kiện tết trung thu <i class="fas fa-carrot"></i></div>
                                            <div class="admin-right-item-mission-item-exp"> 3 exp</div>
                                            <div class="event-child">
                                                <div class="admin-right-item-mission-item-date">Thời gian diễn ra: <span style="color: var(--primary);">5 ngày</span></div>
                                                <div class="admin-right-item-mission-item-moTa">Trong khoảng thời gian diễn ra sự kiện mặt trăng sẽ xuất hiện 20 phút 1 lần trên website, việc bạn phải làm là <b>click</b> vào mặt trăng để nhận điểm sự kiện ( 1 điểm sự kiện = 3 exp ). Chúc các bạn đọc truyện vui vẻ!</div>
                                            </div>
                                        </div>
                                        <?php if ((int)$userLogin['quyenHan'] >=4) {?>
                                            <?php
                                                $event = select_all("SELECT * FROM sukien WHERE trangThai=1");
                                                $eventUser = select_one("SELECT * FROM sukien WHERE idUser=".$userLogin['idUser']."");
                                                if (count($event) > 0) {?>
                                                <a href="<?=$DAO_URL?>/mission/event/kichHoat.php?type=moonEvent&link=<?=$link?>" class="admin-right-item-mission-item-submit">Kết Thúc</a>
                                                <div class="admin-right-item-mission-item-submit"><?=isset($eventUser['dateClick']) ? $eventUser['point'] : 0?></div>
                                            <?php }else {?>
                                                <a href="<?=$DAO_URL?>/mission/event/kichHoat.php?type=moonEvent&link=<?=$link?>" class="admin-right-item-mission-item-submit">Kích Hoạt</a>
                                            <?php }?>
                                        <?php }else {
                                                $event = select_all("SELECT * FROM sukien WHERE trangThai=1");
                                                $eventUser = select_one("SELECT * FROM sukien WHERE idUser=".$userLogin['idUser']."");
                                            ?>
                                            <?php if (count($event) == 0) {?>
                                                <!-- khi event chưa kích hoạt  -->
                                                <div class="admin-right-item-mission-item-submit disabled">Chưa Kích Hoạt</div>
                                            <?php }else {?>
                                                <!-- khi mà event đã kích hoạt  -->
                                                <div class="admin-right-item-mission-item-submit">Điểm sự kiện: <?=isset($eventUser['dateClick']) ? $eventUser['point'] : 0?></div>
                                            <?php }?>
                                        <?php }?>
                                    </div>
                                    <div class="admin-right-item-mission-item admin-right-item-mission-item-event">
                                        <div class="admin-right-item-mission-item-right">
                                            <div class="admin-right-item-mission-item-title title">Sự kiện tết nguyên đán <i class="fas fa-glass-cheers"></i></div>
                                            <div class="admin-right-item-mission-item-exp"> 3 exp</div>
                                            <div class="event-child">
                                                <div class="admin-right-item-mission-item-date">Thời gian diễn ra: <span style="color: var(--primary);">3 ngày</span></div>
                                                <div class="admin-right-item-mission-item-moTa">Trong khoảng thời gian diễn ra sự kiện heo đất sẽ xuất hiện 20 phút 1 lần trên website, việc bạn phải làm là <b>click</b> vào heo đất để nhận điểm sự kiện ( 1 điểm sự kiện = 3 exp ). Chúc các bạn đọc truyện vui vẻ!</div>
                                            </div>
                                        </div>
                                        <div class="admin-right-item-mission-item-submit disabled">Chưa Kích Hoạt</div>
                                    </div>
                                    <div class="admin-right-item-mission-item admin-right-item-mission-item-event">
                                        <div class="admin-right-item-mission-item-right">
                                            <div class="admin-right-item-mission-item-title title">Sự kiện noel <i class="fas fa-bells"></i></div>
                                            <div class="admin-right-item-mission-item-exp"> 3 exp</div>
                                            <div class="event-child">
                                                <div class="admin-right-item-mission-item-date">Thời gian diễn ra: <span style="color: var(--primary);">2 ngày</span></div>
                                                <div class="admin-right-item-mission-item-moTa">Trong khoảng thời gian diễn ra sự kiện chiếc tất sẽ xuất hiện 20 phút 1 lần trên website, việc bạn phải làm là <b>click</b> vào chiếc tất để nhận điểm sự kiện ( 1 điểm sự kiện = 3 exp ). Chúc các bạn đọc truyện vui vẻ!</div>
                                            </div>
                                        </div>
                                        <div class="admin-right-item-mission-item-submit disabled">Chưa Kích Hoạt</div>
                                    </div>
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


<script>
    nextPageAdmin('div.admin-left-icon','.admin-right-item','.admin-right-item-header-item','.admin-right-item-content-item');
    nextPage('.admin-right-item-content-read-delete-icon','.admin-right-item-content-read-delete-content');
    checkAll('.admin-right-item-notify','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="notifyCheckBox[]"]','.checkbox-btn-block-delete');
    checkAll('.admin-right-item-comment','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="commentCheckBox"]','.checkbox-btn-block-delete');
    showExp();
    previewUpImg('#userProfile','.admin-file-input-img','#admin-file-input','.imgErr');
    nextPage('.admin-right-item-mission-item-event','.event-child');
</script>

<script>
    // đổi mật khẩu
    validator({
    form: '#changePass',
    errSelector: '.modal__form-err',
    rules: [
        validator.isRequied('input[name="passOld"]','Trường này không được bỏ trống'),
        validator.isRequied('input[name="passNew"]','Trường này không được bỏ trống'),
        validator.minLength('input[name="passOld"]',5,'Password dài tối thiểu 5 ký tự'),
        validator.minLength('input[name="passNew"]',5,'Password dài tối thiểu 5 ký tự'),
        validator.maxLength('input[name="passNew"]',100,'Password dài tối đa 100 ký tự'),
        validator.maxLength('input[name="passOld"]',100,'Password dài tối đa 100 ký tự'),
        validator.isRequied('input[name="confirmPass"]','Trường này không được bỏ trống'),
        validator.confirmed('input[name="confirmPass"]',function () {
            return document.querySelector('#changePass input[name="passNew"]').value;
        },'Mật khẩu nhập lại không chính xác'),
    ]
});
</script>

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
            checkAll('.admin-right-item-danhGia','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="danhGiaCheckBox[]"]','.checkbox-btn-block-delete');
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
                checkAll('.admin-right-item-comment','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="commentCheckBox[]"]','.checkbox-btn-block-delete');
            },
            linkPage: '<?=$link?>',
            userManager: 'on',
        };
        phanTrangUserManager('comment',showListDanhGia,optionShowComment);
    </script>
<?php endif?>