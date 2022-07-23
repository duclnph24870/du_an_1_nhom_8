<?php ?>

<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/product.css">
<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/admin.css">
<script src="<?=$CONTENT_URL?>/JS/product.js"></script>
<script src="<?=$CONTENT_URL?>/JS/public.js"></script>
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
                        <a href="product__ql.html" class="admin-left-icon text">
                            <i class="fas fa-book-reader"></i>
                            Quản Trị Website
                        </a>
                        <a href="product__ql.html" class="admin-left-icon text">
                            <i class="fas fa-comment-lines"></i>
                            Chat
                        </a>
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
                                <form method="post" id="userProfile" class="admin-right-item-content-item">
                                    <input type="file" hidden id="admin-file-input" multiple>
                                    <label for="admin-file-input">
                                        <div class="admin-file-input-img">
                                            <img src="https://static.cdnno.com/user/d6cebf19fbb6661f86b87df067ab7bc2/200.jpg?1598008352" alt="">
                                            <div class="admin-file-input-icon">
                                                <i class="fas fa-camera"></i>
                                            </div>
                                        </div>
                                        <div class="imgErr">Ấn vào ảnh để thay đổi ảnh đại diện</div>
                                    </label>
                                    <div class="expUser">
                                        <div class="expUser__content">
                                            <div class="expUser__content-text">
                                            Exp: <span class="expUser__content-having">999</span> / <span class="expUser__content-required">1000</span>
                                            </div>
                                            <style>
                                                .expUser::after {
                                                    content: "Level 2" !important;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="admin-right-item-content-item-input">
                                        <div>Tên Hiển Thị</div>
                                        <input type="text" name="userProfileName" value="Ngọc Đức">
                                        <span class="modal__form-err"></span>
                                    </div>
                                    <div class="admin-right-item-content-item-input">
                                        <div>Ngày Tháng Năm Sinh</div>
                                        <input type="date">
                                    </div>
                                    <div class="admin-right-item-content-item-input">
                                        <div>Giới Tính</div>
                                        <div class="admin-right-item-content-item-select-block">
                                            <select name="" >
                                                <option value="1">Nam</option>
                                                <option value="0">Nữ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="admin-right-item-content-item-input">
                                        <div>Giới Thiệu Ngắn</div>
                                        <textarea name="" class="w-100" cols="30" rows="5"></textarea>
                                    </div>
                                    <div class="admin-right-item-content-item-input">
                                        <div>Email</div>
                                        <input type="text" name="userProfileEmail" hidden value="zerotwo13102001@gmail.com">
                                        <input type="text" name="userProfileEmailShow" disabled value="zerotwo13102001@gmail.com">
                                        <span class="modal__form-err"></span>
                                    </div>
                                    <input type="submit" value="Cập Nhập" class="userProfileSubmit active">
                                </form>
                                <form method="post" class="admin-right-item-content-item" id="changePass">
                                    <input type="file" hidden id="admin-file-input">
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
                                <div class="admin-right-item-content-item admin-right-item-content-read">
                                    <div class="admin-right-item-content-read-item">
                                        <div class="admin-right-item-content-read-img">
                                            <img src="https://static.cdnno.com/poster/huyen-huyen-tu-hong-mong-thanh-the-bat-dau-vo-dich/150.jpg?1642181641" alt="">
                                        </div>
                                        <div class="admin-right-item-content-read-main">
                                            <div class="text title">Đấu Phá Thương Khung</div>
                                            <span>Đã Đọc: 30/182</span>
                                        </div>
                                        <div class="admin-right-item-content-read-bell active">
                                            <i class="fa-solid fa-bell"></i>
                                        </div>
                                        <div class="admin-right-item-content-read-delete">
                                            <i class="fas fa-trash"></i>
                                        </div>
                                    </div>
                                    <div class="admin-right-item-content-read-item">
                                        <div class="admin-right-item-content-read-img">
                                            <img src="https://static.cdnno.com/poster/huyen-huyen-tu-hong-mong-thanh-the-bat-dau-vo-dich/150.jpg?1642181641" alt="">
                                        </div>
                                        <div class="admin-right-item-content-read-main">
                                            <div class="text title">Đấu Phá Thương Khung</div>
                                            <span>Đã Đọc: 30/182</span>
                                        </div>
                                        <div class="admin-right-item-content-read-bell">
                                            <i class="fa-solid fa-bell"></i>
                                        </div>
                                        <div class="admin-right-item-content-read-delete">
                                            <i class="fas fa-trash"></i>
                                        </div>
                                    </div>
                                    <div class="admin-right-item-content-read-item">
                                        <div class="admin-right-item-content-read-img">
                                            <img src="https://static.cdnno.com/poster/huyen-huyen-tu-hong-mong-thanh-the-bat-dau-vo-dich/150.jpg?1642181641" alt="">
                                        </div>
                                        <div class="admin-right-item-content-read-main">
                                            <div class="text title">Đấu Phá Thương Khung</div>
                                            <span>Đã Đọc: 30/182</span>
                                        </div>
                                        <div class="admin-right-item-content-read-bell">
                                            <i class="fa-solid fa-bell"></i>
                                        </div>
                                        <div class="admin-right-item-content-read-delete">
                                            <i class="fas fa-trash"></i>
                                        </div>
                                    </div>
                                    <div class="admin-right-item-content-read-item">
                                        <div class="admin-right-item-content-read-img">
                                            <img src="https://static.cdnno.com/poster/huyen-huyen-tu-hong-mong-thanh-the-bat-dau-vo-dich/150.jpg?1642181641" alt="">
                                        </div>
                                        <div class="admin-right-item-content-read-main">
                                            <div class="text title">Đấu Phá Thương Khung</div>
                                            <span>Đã Đọc: 30/182</span>
                                        </div>
                                        <div class="admin-right-item-content-read-bell">
                                            <i class="fa-solid fa-bell"></i>
                                        </div>
                                        <div class="admin-right-item-content-read-delete">
                                            <i class="fas fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="admin-right-item-content-item">
                                    <div class="admin-right-item-content-read-item">
                                        <div class="admin-right-item-content-read-img">
                                            <img src="https://static.cdnno.com/poster/huyen-huyen-tu-hong-mong-thanh-the-bat-dau-vo-dich/150.jpg?1642181641" alt="">
                                        </div>
                                        <div class="admin-right-item-content-read-main">
                                            <div class="text title">Đấu Phá Thương Khung</div>
                                            <span>Đã Đọc: 30/182</span>
                                        </div>
                                        <div class="admin-right-item-content-read-bell">
                                            <i class="fa-solid fa-bell"></i>
                                        </div>
                                        <div class="admin-right-item-content-read-delete">
                                            <i class="fas fa-trash"></i>
                                        </div>
                                    </div>
                                    <div class="admin-right-item-content-read-item">
                                        <div class="admin-right-item-content-read-img">
                                            <img src="https://static.cdnno.com/poster/huyen-huyen-tu-hong-mong-thanh-the-bat-dau-vo-dich/150.jpg?1642181641" alt="">
                                        </div>
                                        <div class="admin-right-item-content-read-main">
                                            <div class="text title">Đấu Phá Thương Khung</div>
                                            <span>Đã Đọc: 30/182</span>
                                        </div>
                                        <div class="admin-right-item-content-read-bell">
                                            <i class="fa-solid fa-bell"></i>
                                        </div>
                                        <div class="admin-right-item-content-read-delete">
                                            <i class="fas fa-trash"></i>
                                        </div>
                                    </div>
                                    <div class="admin-right-item-content-read-item">
                                        <div class="admin-right-item-content-read-img">
                                            <img src="https://static.cdnno.com/poster/huyen-huyen-tu-hong-mong-thanh-the-bat-dau-vo-dich/150.jpg?1642181641" alt="">
                                        </div>
                                        <div class="admin-right-item-content-read-main">
                                            <div class="text title">Đấu Phá Thương Khung</div>
                                            <span>Đã Đọc: 30/182</span>
                                        </div>
                                        <div class="admin-right-item-content-read-bell">
                                            <i class="fa-solid fa-bell"></i>
                                        </div>
                                        <div class="admin-right-item-content-read-delete">
                                            <i class="fas fa-trash"></i>
                                        </div>
                                    </div>
                                    <div class="admin-right-item-content-read-item">
                                        <div class="admin-right-item-content-read-img">
                                            <img src="https://static.cdnno.com/poster/huyen-huyen-tu-hong-mong-thanh-the-bat-dau-vo-dich/150.jpg?1642181641" alt="">
                                        </div>
                                        <div class="admin-right-item-content-read-main">
                                            <div class="text title">Đấu Phá Thương Khung</div>
                                            <span>Đã Đọc: 30/182</span>
                                        </div>
                                        <div class="admin-right-item-content-read-bell">
                                            <i class="fa-solid fa-bell"></i>
                                        </div>
                                        <div class="admin-right-item-content-read-delete">
                                            <i class="fas fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="admin-right-item-content-item">
                                    <div class="admin-right-item-content-read-item">
                                        <div class="admin-right-item-content-read-img">
                                            <img src="https://static.cdnno.com/poster/huyen-huyen-tu-hong-mong-thanh-the-bat-dau-vo-dich/150.jpg?1642181641" alt="">
                                        </div>
                                        <div class="admin-right-item-content-read-main">
                                            <div class="text title">Đấu Phá Thương Khung</div>
                                            <span><i class="fa-solid fa-book"></i> Số chương: 30</span>
                                        </div>
                                        <div class="admin-right-item-content-read-delete">
                                            <i class="fas fa-trash"></i>
                                        </div>
                                    </div>
                                    <div class="admin-right-item-content-read-item">
                                        <div class="admin-right-item-content-read-img">
                                            <img src="https://static.cdnno.com/poster/huyen-huyen-tu-hong-mong-thanh-the-bat-dau-vo-dich/150.jpg?1642181641" alt="">
                                        </div>
                                        <div class="admin-right-item-content-read-main">
                                            <div class="text title">Đấu Phá Thương Khung</div>
                                            <span><i class="fa-solid fa-book"></i> Số chương: 30</span>
                                        </div>
                                        <div class="admin-right-item-content-read-delete">
                                            <i class="fas fa-trash"></i>
                                        </div>
                                    </div>
                                    <div class="admin-right-item-content-read-item">
                                        <div class="admin-right-item-content-read-img">
                                            <img src="https://static.cdnno.com/poster/huyen-huyen-tu-hong-mong-thanh-the-bat-dau-vo-dich/150.jpg?1642181641" alt="">
                                        </div>
                                        <div class="admin-right-item-content-read-main">
                                            <div class="text title">Đấu Phá Thương Khung</div>
                                            <span><i class="fa-solid fa-book"></i> Số chương: 30</span>
                                        </div>
                                        <div class="admin-right-item-content-read-delete">
                                            <i class="fas fa-trash"></i>
                                        </div>
                                    </div>
                                    <div class="admin-right-item-content-read-item">
                                        <div class="admin-right-item-content-read-img">
                                            <img src="https://static.cdnno.com/poster/huyen-huyen-tu-hong-mong-thanh-the-bat-dau-vo-dich/150.jpg?1642181641" alt="">
                                        </div>
                                        <div class="admin-right-item-content-read-main">
                                            <div class="text title">Đấu Phá Thương Khung</div>
                                            <span><i class="fa-solid fa-book"></i> Số chương: 30</span>
                                        </div>
                                        <div class="admin-right-item-content-read-delete">
                                            <i class="fas fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- === thông báo === -->
                        <div class="admin-right-item admin-right-item-notify">
                            <div class="admin-right-item-header-item border-0 admin-right-item-notify-header d-flex align-items-center title pb-2">
                                Thông Báo
                                <div class="checkbox-btn-block d-flex ml-auto">
                                    <a href="" class="btn-category block-icon primary">
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
                                    
                                    <a href="" class="btn-category block-icon toi checkbox-btn-block-delete">
                                        <i class="fa-solid fa-trash"></i>
                                        Xóa các mục đã chọn
                                    </a>
                                </div>
                            </div>
                            <div class="admin-right-item-content-item">
                                <div class="admin-right-item-content-read-item">
                                    <div class="admin-right-item-content-read-img">
                                        <img src="https://static.cdnno.com/poster/huyen-huyen-tu-hong-mong-thanh-the-bat-dau-vo-dich/150.jpg?1642181641" alt="">
                                    </div>
                                    <div class="admin-right-item-content-read-main">
                                        <div class="text">Ngọc đức đã trả lời bình luận của bạn</div>
                                        <span>7 ngày trước</span>
                                    </div>
                                    <div class="admin-right-item-content-read-delete admin-right-item-content-read-delete-icon">
                                        <i class="fa-solid fa-caret-left"></i>
                                    </div>
                                    <div class="admin-right-item-content-read-delete-content">
                                        Xóa thông báo
                                    </div>
                                    <input type="checkbox" name="notifyCheckBox" class="chonCheckBox">
                                </div>
                                <div class="admin-right-item-content-read-item">
                                    <div class="admin-right-item-content-read-img">
                                        <img src="https://static.cdnno.com/poster/huyen-huyen-tu-hong-mong-thanh-the-bat-dau-vo-dich/150.jpg?1642181641" alt="">
                                    </div>
                                    <div class="admin-right-item-content-read-main">
                                        <div class="text">Ngọc đức đã trả lời bình luận của bạn</div>
                                        <span>7 ngày trước</span>
                                    </div>
                                    <div class="admin-right-item-content-read-delete admin-right-item-content-read-delete-icon">
                                        <i class="fa-solid fa-caret-left"></i>
                                    </div>
                                    <div class="admin-right-item-content-read-delete-content">
                                        Xóa thông báo
                                    </div>
                                    <input type="checkbox" name="notifyCheckBox" class="chonCheckBox">
                                </div>
                            </div>
                        </div>
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
                                    <input type="checkbox" id="modal__form-checkbox" hidden>
                                    <label for="modal__form-checkbox" class="modal__form-checkbox">
                                        <div class="modal__form-checkbox-block">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="modal__form-checkbox-text"> Ẩn danh bình luận</div>
                                    </label>
                                </div>
                                <div class="admin-right-item-setting-item-moTa">
                                    <i>*Khi bật chức năng bình luận của bạn sẽ được ẩn Username</i>
                                </div>
                            </div>

                        </form>
                        <!-- ==== chức năng admin ===== -->
                        <!-- ==== bình luận === -->
                        <div class="admin-right-item admin-right-item-comment">
                            <div class="admin-right-item-notify-header d-flex align-items-center title pb-2">
                                Bình Luận
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
                                    
                                    <a href="" class="btn-category block-icon toi checkbox-btn-block-delete">
                                        <i class="fa-solid fa-trash"></i>
                                        Xóa các mục đã chọn
                                    </a>
                                </div>
                            </div>
                            <div class="admin-right-item-comment-content">
                                <div class="product__navbar-item-comment-item border-bottom-1 border-top-0">
                                    <div class="product__navbar-item-comment-item-img">
                                        <img src="https://metruyenchu.com/images/avatar-profile.png?97b80827721f6116c3dbc797d11d629b" alt="">
                                        <span>Cấp 0</span>
                                    </div>
                                    <div class="product__navbar-item-comment-item-right">
                                        <div class="product__navbar-item-comment-item-name text limit1">Ngọc Đức</div>
                                        <style>
                                            .product__navbar-item-comment-item:nth-child(2) .product__navbar-item-comment-item-name::after {
                                                content: "8 phút trước";
                                            }
                                        </style>
                                        <div class="product__navbar-item-comment-item-icon">
                                            Đấu Phá Thương Khung
                                        </div>
                                        <div class="product__navbar-item-comment-item-content">
                                            Truyện rất hay!!
                                        </div>
                                        <!-- like ,trả lời,...  -->
                                        <div class="product__navbar-item-comment-item-bottom">
                                            <div class="product__navbar-item-comment-item-bottom-item showListRep">
                                                Xem 1 câu trả lời
                                            </div>
                                            <div class="product__navbar-item-comment-item-bottom-item">
                                                <i class="fas fa-thumbs-up"></i>
                                                <span>20</span>
                                            </div>
                                            <div class="listRep w-100">
                                                <div class="product__navbar-item-comment-item">
                                                    <div class="product__navbar-item-comment-item-img">
                                                        <img src="https://metruyenchu.com/images/avatar-profile.png?97b80827721f6116c3dbc797d11d629b" alt="">
                                                        <span>Cấp 0</span>
                                                    </div>
                                                    <div class="product__navbar-item-comment-item-right">
                                                        <div class="product__navbar-item-comment-item-name text limit1" style="font-size: 1.6rem;">Ngọc Đức</div>
                                                        
                                                        <div class="product__navbar-item-comment-item-content">
                                                            Truyện rất hay!!
                                                        </div>
                                                        <div class="product__navbar-item-comment-item-bottom">
                                                            <div class="product__navbar-item-comment-item-bottom-item">
                                                                <i class="fas fa-thumbs-up"></i>
                                                                <span>20</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="admin-right-item-comment-delete text"><i class="fas fa-trash"></i></div>
                                                </div>
                                            </div>
                                            <div class="hidden-listRep">
                                                Ẩn câu trả lời
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin-right-item-comment-delete text"><i class="fas fa-trash"></i></div>
                                    <input type="checkbox" name="commentCheckBox" class="chonCheckBox ml-2">
                                </div>
                                <div class="product__navbar-item-comment-item border-bottom-1 border-top-0">
                                    <div class="product__navbar-item-comment-item-img">
                                        <img src="https://metruyenchu.com/images/avatar-profile.png?97b80827721f6116c3dbc797d11d629b" alt="">
                                        <span>Cấp 0</span>
                                    </div>
                                    <div class="product__navbar-item-comment-item-right">
                                        <div class="product__navbar-item-comment-item-name text limit1">Ngọc Đức</div>
                                        <style>
                                            .product__navbar-item-comment-item:nth-child(2) .product__navbar-item-comment-item-name::after {
                                                content: "8 phút trước";
                                            }
                                        </style>
                                        <div class="product__navbar-item-comment-item-icon">
                                            Đấu Phá Thương Khung
                                        </div>
                                        <div class="product__navbar-item-comment-item-content">
                                            Truyện rất hay!!
                                        </div>
                                        <!-- like ,trả lời,...  -->
                                        <div class="product__navbar-item-comment-item-bottom">
                                            <div class="product__navbar-item-comment-item-bottom-item showListRep">
                                                Xem 1 câu trả lời
                                            </div>
                                            <div class="product__navbar-item-comment-item-bottom-item">
                                                <i class="fas fa-thumbs-up"></i>
                                                <span>20</span>
                                            </div>
                                            <div class="listRep w-100">
                                                <div class="product__navbar-item-comment-item">
                                                    <div class="product__navbar-item-comment-item-img">
                                                        <img src="https://metruyenchu.com/images/avatar-profile.png?97b80827721f6116c3dbc797d11d629b" alt="">
                                                        <span>Cấp 0</span>
                                                    </div>
                                                    <div class="product__navbar-item-comment-item-right">
                                                        <div class="product__navbar-item-comment-item-name text limit1" style="font-size: 1.6rem;">Ngọc Đức</div>
                                                        
                                                        <div class="product__navbar-item-comment-item-content">
                                                            Truyện rất hay!!
                                                        </div>
                                                        <div class="product__navbar-item-comment-item-bottom">
                                                            <div class="product__navbar-item-comment-item-bottom-item">
                                                                <i class="fas fa-thumbs-up"></i>
                                                                <span>20</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="admin-right-item-comment-delete text"><i class="fas fa-trash"></i></div>
                                                </div>
                                            </div>
                                            <div class="hidden-listRep">
                                                Ẩn câu trả lời
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin-right-item-comment-delete text"><i class="fas fa-trash"></i></div>
                                    <input type="checkbox" name="commentCheckBox" class="chonCheckBox ml-2">
                                </div>
                                <div class="product__navbar-item-comment-item border-bottom-1 border-top-0">
                                    <div class="product__navbar-item-comment-item-img">
                                        <img src="https://metruyenchu.com/images/avatar-profile.png?97b80827721f6116c3dbc797d11d629b" alt="">
                                        <span>Cấp 0</span>
                                    </div>
                                    <div class="product__navbar-item-comment-item-right">
                                        <div class="product__navbar-item-comment-item-name text limit1">Ngọc Đức</div>
                                        <style>
                                            .product__navbar-item-comment-item:nth-child(2) .product__navbar-item-comment-item-name::after {
                                                content: "8 phút trước";
                                            }
                                        </style>
                                        <div class="product__navbar-item-comment-item-icon">
                                            Đấu Phá Thương Khung
                                        </div>
                                        <div class="product__navbar-item-comment-item-content">
                                            Truyện rất hay!!
                                        </div>
                                        <!-- like ,trả lời,...  -->
                                        <div class="product__navbar-item-comment-item-bottom">
                                            <div class="product__navbar-item-comment-item-bottom-item showListRep">
                                                Xem 1 câu trả lời
                                            </div>
                                            <div class="product__navbar-item-comment-item-bottom-item">
                                                <i class="fas fa-thumbs-up"></i>
                                                <span>20</span>
                                            </div>
                                            <div class="listRep w-100">
                                                <div class="product__navbar-item-comment-item">
                                                    <div class="product__navbar-item-comment-item-img">
                                                        <img src="https://metruyenchu.com/images/avatar-profile.png?97b80827721f6116c3dbc797d11d629b" alt="">
                                                        <span>Cấp 0</span>
                                                    </div>
                                                    <div class="product__navbar-item-comment-item-right">
                                                        <div class="product__navbar-item-comment-item-name text limit1" style="font-size: 1.6rem;">Ngọc Đức</div>
                                                        
                                                        <div class="product__navbar-item-comment-item-content">
                                                            Truyện rất hay!!
                                                        </div>
                                                        <div class="product__navbar-item-comment-item-bottom">
                                                            <div class="product__navbar-item-comment-item-bottom-item">
                                                                <i class="fas fa-thumbs-up"></i>
                                                                <span>20</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="admin-right-item-comment-delete text"><i class="fas fa-trash"></i></div>
                                                </div>
                                            </div>
                                            <div class="hidden-listRep">
                                                Ẩn câu trả lời
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin-right-item-comment-delete text"><i class="fas fa-trash"></i></div>
                                    <input type="checkbox" name="commentCheckBox" class="chonCheckBox ml-2">
                                </div>
                                <div class="col-12">
                                    <form method="post" class="pagination">
                                        <div class="pagination__item text"><</div>
                                        <div class="pagination__item text active">1</div>
                                        <div class="pagination__item text">2</div>
                                        <div class="pagination__item text">3</div>
                                        <div class="pagination__item text">4</div>
                                        <div class="pagination__item text">></div>
                                        <input type="text" value="1" class="pagination__input">
                                        <input type="submit" value="Go" class="pagination__submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ==== đánh giá === -->
                        <div class="admin-right-item admin-right-item-danhGia">
                            <div class="admin-right-item-notify-header d-flex align-items-center title pb-2">
                                Đánh Giá
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
                                    
                                    <a href="" class="btn-category block-icon toi checkbox-btn-block-delete">
                                        <i class="fa-solid fa-trash"></i>
                                        Xóa các mục đã chọn
                                    </a>
                                </div>
                            </div>
                            <div class="admin-right-item-comment-content">
                                <div class="product__navbar-item-comment-item border-bottom-1 border-top-0">
                                    <div class="product__navbar-item-comment-item-img">
                                        <img src="https://metruyenchu.com/images/avatar-profile.png?97b80827721f6116c3dbc797d11d629b" alt="">
                                        <span>Cấp 0</span>
                                    </div>
                                    <div class="product__navbar-item-comment-item-right">
                                        <div class="product__navbar-item-comment-item-name text limit1">Ngọc Đức</div>
                                        <style>
                                            .product__navbar-item-comment-item:nth-child(2) .product__navbar-item-comment-item-name::after {
                                                content: "8 phút trước";
                                            }
                                        </style>
                                        <div class="d-flex align-items-center">
                                            <div class="product__navbar-item-danhGia-item-start">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>3.5</span>
                                            </div>
                                            <div class="product__navbar-item-comment-item-icon">
                                                Đấu Phá Thương Khung
                                            </div>
                                        </div>
                                        <div class="product__navbar-item-comment-item-content">
                                            Truyện rất hay!!
                                        </div>
                                        <!-- like ,trả lời,...  -->
                                        <div class="product__navbar-item-comment-item-bottom">
                                            <div class="product__navbar-item-comment-item-bottom-item showListRep">
                                                Xem 1 câu trả lời
                                            </div>
                                            <div class="product__navbar-item-comment-item-bottom-item">
                                                <i class="fas fa-thumbs-up"></i>
                                                <span>20</span>
                                            </div>
                                            <div class="listRep w-100">
                                                <div class="product__navbar-item-comment-item">
                                                    <div class="product__navbar-item-comment-item-img">
                                                        <img src="https://metruyenchu.com/images/avatar-profile.png?97b80827721f6116c3dbc797d11d629b" alt="">
                                                        <span>Cấp 0</span>
                                                    </div>
                                                    <div class="product__navbar-item-comment-item-right">
                                                        <div class="product__navbar-item-comment-item-name text limit1" style="font-size: 1.6rem;">Ngọc Đức</div>
                                                        
                                                        <div class="product__navbar-item-comment-item-content">
                                                            Truyện rất hay!!
                                                        </div>
                                                        <div class="product__navbar-item-comment-item-bottom">
                                                            <div class="product__navbar-item-comment-item-bottom-item">
                                                                <i class="fas fa-thumbs-up"></i>
                                                                <span>20</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="admin-right-item-comment-delete text"><i class="fas fa-trash"></i></div>
                                                </div>
                                            </div>
                                            <div class="hidden-listRep">
                                                Ẩn câu trả lời
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin-right-item-comment-delete text"><i class="fas fa-trash"></i></div>
                                    <input type="checkbox" name="danhGiaCheckBox" class="chonCheckBox ml-2">
                                </div>
                                <div class="product__navbar-item-comment-item border-bottom-1 border-top-0">
                                    <div class="product__navbar-item-comment-item-img">
                                        <img src="https://metruyenchu.com/images/avatar-profile.png?97b80827721f6116c3dbc797d11d629b" alt="">
                                        <span>Cấp 0</span>
                                    </div>
                                    <div class="product__navbar-item-comment-item-right">
                                        <div class="product__navbar-item-comment-item-name text limit1">Ngọc Đức</div>
                                        <style>
                                            .product__navbar-item-comment-item:nth-child(2) .product__navbar-item-comment-item-name::after {
                                                content: "8 phút trước";
                                            }
                                        </style>
                                        <div class="d-flex align-items-center">
                                            <div class="product__navbar-item-danhGia-item-start">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>3.5</span>
                                            </div>
                                            <div class="product__navbar-item-comment-item-icon">
                                                Đấu Phá Thương Khung
                                            </div>
                                        </div>
                                        <div class="product__navbar-item-comment-item-content">
                                            Truyện rất hay!!
                                        </div>
                                        <!-- like ,trả lời,...  -->
                                        <div class="product__navbar-item-comment-item-bottom">
                                            <div class="product__navbar-item-comment-item-bottom-item showListRep">
                                                Xem 1 câu trả lời
                                            </div>
                                            <div class="product__navbar-item-comment-item-bottom-item">
                                                <i class="fas fa-thumbs-up"></i>
                                                <span>20</span>
                                            </div>
                                            <div class="listRep w-100">
                                                <div class="product__navbar-item-comment-item">
                                                    <div class="product__navbar-item-comment-item-img">
                                                        <img src="https://metruyenchu.com/images/avatar-profile.png?97b80827721f6116c3dbc797d11d629b" alt="">
                                                        <span>Cấp 0</span>
                                                    </div>
                                                    <div class="product__navbar-item-comment-item-right">
                                                        <div class="product__navbar-item-comment-item-name text limit1" style="font-size: 1.6rem;">Ngọc Đức</div>
                                                        
                                                        <div class="product__navbar-item-comment-item-content">
                                                            Truyện rất hay!!
                                                        </div>
                                                        <div class="product__navbar-item-comment-item-bottom">
                                                            <div class="product__navbar-item-comment-item-bottom-item">
                                                                <i class="fas fa-thumbs-up"></i>
                                                                <span>20</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="admin-right-item-comment-delete text"><i class="fas fa-trash"></i></div>
                                                </div>
                                            </div>
                                            <div class="hidden-listRep">
                                                Ẩn câu trả lời
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin-right-item-comment-delete text"><i class="fas fa-trash"></i></div>
                                    <input type="checkbox" name="danhGiaCheckBox" class="chonCheckBox ml-2">
                                </div>
                                <div class="product__navbar-item-comment-item border-bottom-1 border-top-0">
                                    <div class="product__navbar-item-comment-item-img">
                                        <img src="https://metruyenchu.com/images/avatar-profile.png?97b80827721f6116c3dbc797d11d629b" alt="">
                                        <span>Cấp 0</span>
                                    </div>
                                    <div class="product__navbar-item-comment-item-right">
                                        <div class="product__navbar-item-comment-item-name text limit1">Ngọc Đức</div>
                                        <style>
                                            .product__navbar-item-comment-item:nth-child(2) .product__navbar-item-comment-item-name::after {
                                                content: "8 phút trước";
                                            }
                                        </style>
                                        <div class="d-flex align-items-center">
                                            <div class="product__navbar-item-danhGia-item-start">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>3.5</span>
                                            </div>
                                            <div class="product__navbar-item-comment-item-icon">
                                                Đấu Phá Thương Khung
                                            </div>
                                        </div>
                                        <div class="product__navbar-item-comment-item-content">
                                            Truyện rất hay!!
                                        </div>
                                        <!-- like ,trả lời,...  -->
                                        <div class="product__navbar-item-comment-item-bottom">
                                            <div class="product__navbar-item-comment-item-bottom-item showListRep">
                                                Xem 1 câu trả lời
                                            </div>
                                            <div class="product__navbar-item-comment-item-bottom-item">
                                                <i class="fas fa-thumbs-up"></i>
                                                <span>20</span>
                                            </div>
                                            <div class="listRep w-100">
                                                <div class="product__navbar-item-comment-item">
                                                    <div class="product__navbar-item-comment-item-img">
                                                        <img src="https://metruyenchu.com/images/avatar-profile.png?97b80827721f6116c3dbc797d11d629b" alt="">
                                                        <span>Cấp 0</span>
                                                    </div>
                                                    <div class="product__navbar-item-comment-item-right">
                                                        <div class="product__navbar-item-comment-item-name text limit1" style="font-size: 1.6rem;">Ngọc Đức</div>
                                                        
                                                        <div class="product__navbar-item-comment-item-content">
                                                            Truyện rất hay!!
                                                        </div>
                                                        <div class="product__navbar-item-comment-item-bottom">
                                                            <div class="product__navbar-item-comment-item-bottom-item">
                                                                <i class="fas fa-thumbs-up"></i>
                                                                <span>20</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="admin-right-item-comment-delete text"><i class="fas fa-trash"></i></div>
                                                </div>
                                            </div>
                                            <div class="hidden-listRep">
                                                Ẩn câu trả lời
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin-right-item-comment-delete text"><i class="fas fa-trash"></i></div>
                                    <input type="checkbox" name="danhGiaCheckBox" class="chonCheckBox ml-2">
                                </div>
                                <div class="col-12">
                                    <form method="post" class="pagination">
                                        <div class="pagination__item text"><</div>
                                        <div class="pagination__item text active">1</div>
                                        <div class="pagination__item text">2</div>
                                        <div class="pagination__item text">3</div>
                                        <div class="pagination__item text">4</div>
                                        <div class="pagination__item text">></div>
                                        <input type="text" value="1" class="pagination__input">
                                        <input type="submit" value="Go" class="pagination__submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- === nhiệm vụ ==== -->
                        <div class="admin-right-item">
                            <div class="admin-right-item-header">
                                <div class="admin-right-item-header-item">Nhiệm Vụ Ngày</div>
                                <div class="admin-right-item-header-item">Nhiệm Vụ Sự Kiện</div>
                            </div>
                            <div class="admin-right-item-content">
                                <div class="admin-right-item-content-item admin-right-item-content-mission-daily">
                                    <form action="" class="admin-right-item-mission-item" method="post">
                                        <div class="admin-right-item-mission-item-right">
                                            <div class="admin-right-item-mission-item-title title">Điểm danh mỗi ngày</div>
                                            <div class="admin-right-item-mission-item-exp"> 3 exp</div>
                                        </div>
                                        <input type="submit" value="Nhận Thưởng" class="admin-right-item-mission-item-submit">
                                    </form>
                                    <form action="" class="admin-right-item-mission-item" method="post">
                                        <div class="admin-right-item-mission-item-right">
                                            <div class="admin-right-item-mission-item-title title">Đánh giá 5 sao một truyện bất kì</div>
                                            <div class="admin-right-item-mission-item-exp"> 3 exp</div>
                                        </div>
                                        <input type="submit" value="Nhận Thưởng" class="admin-right-item-mission-item-submit active">
                                    </form>
                                    <form action="" class="admin-right-item-mission-item" method="post">
                                        <div class="admin-right-item-mission-item-right">
                                            <div class="admin-right-item-mission-item-title title">Thêm một bình luận</div>
                                            <div class="admin-right-item-mission-item-exp"> 5 exp</div>
                                        </div>
                                        <input type="submit" disabled value="0 / 1" class="admin-right-item-mission-item-submit active">
                                    </form>
                                    <form action="" class="admin-right-item-mission-item" method="post">
                                        <div class="admin-right-item-mission-item-right">
                                            <div class="admin-right-item-mission-item-title title">Đọc một chương truyện</div>
                                            <div class="admin-right-item-mission-item-exp"> 2 exp</div>
                                        </div>
                                        <input type="submit" disabled value="0 / 1" class="admin-right-item-mission-item-submit active">
                                    </form>
                                </div>
                                <div class="admin-right-item-content-item admin-right-item-content-mission-event">
                                    <form action="" class="admin-right-item-mission-item admin-right-item-mission-item-event" method="post">
                                        <div class="admin-right-item-mission-item-right">
                                            <div class="admin-right-item-mission-item-title title">Sự kiện tết trung thu <i class="fas fa-carrot"></i></div>
                                            <div class="admin-right-item-mission-item-exp"> 3 exp</div>
                                            <div class="event-child">
                                                <div class="admin-right-item-mission-item-date">Thời gian diễn ra: <span style="color: var(--primary);">2 ngày</span></div>
                                                <div class="admin-right-item-mission-item-moTa">Trong khoảng thời gian diễn ra sự kiện mặt trăng sẽ xuất hiện 20 phút 1 lần trên website, việc bạn phải làm là <b>click</b> vào mặt trăng để nhận điểm sự kiện ( 1 điểm sự kiện = 3 exp ). Chúc các bạn đọc truyện vui vẻ!</div>
                                            </div>
                                        </div>
                                        <input type="submit" value="3 EXP" disabled class="admin-right-item-mission-item-submit active">
                                    </form>
                                    <form action="" class="admin-right-item-mission-item admin-right-item-mission-item-event" method="post">
                                        <div class="admin-right-item-mission-item-right">
                                            <div class="admin-right-item-mission-item-title title">Sự kiện tết nguyên đán <i class="fas fa-glass-cheers"></i></div>
                                            <div class="admin-right-item-mission-item-exp"> 3 exp</div>
                                            <div class="event-child">
                                                <div class="admin-right-item-mission-item-date">Thời gian diễn ra: <span style="color: var(--primary);">3 ngày</span></div>
                                                <div class="admin-right-item-mission-item-moTa">Trong khoảng thời gian diễn ra sự kiện heo đất sẽ xuất hiện 20 phút 1 lần trên website, việc bạn phải làm là <b>click</b> vào heo đất để nhận điểm sự kiện ( 1 điểm sự kiện = 3 exp ). Chúc các bạn đọc truyện vui vẻ!</div>
                                            </div>
                                        </div>
                                        <input type="submit" value="0 EXP" disabled class="admin-right-item-mission-item-submit active">
                                    </form>
                                    <form action="" class="admin-right-item-mission-item admin-right-item-mission-item-event" method="post">
                                        <div class="admin-right-item-mission-item-right">
                                            <div class="admin-right-item-mission-item-title title">Sự kiện noel <i class="fas fa-bells"></i></div>
                                            <div class="admin-right-item-mission-item-exp"> 3 exp</div>
                                            <div class="event-child">
                                                <div class="admin-right-item-mission-item-date">Thời gian diễn ra: <span style="color: var(--primary);">2 ngày</span></div>
                                                <div class="admin-right-item-mission-item-moTa">Trong khoảng thời gian diễn ra sự kiện chiếc tất sẽ xuất hiện 20 phút 1 lần trên website, việc bạn phải làm là <b>click</b> vào chiếc tất để nhận điểm sự kiện ( 1 điểm sự kiện = 3 exp ). Chúc các bạn đọc truyện vui vẻ!</div>
                                            </div>
                                        </div>
                                        <input type="submit" value="0 EXP" disabled class="admin-right-item-mission-item-submit active">
                                    </form>
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
    checkAll('.admin-right-item-notify','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="notifyCheckBox"]','.checkbox-btn-block-delete');
    checkAll('.admin-right-item-comment','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="commentCheckBox"]','.checkbox-btn-block-delete');
    checkAll('.admin-right-item-danhGia','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="danhGiaCheckBox"]','.checkbox-btn-block-delete');
    showRep('.showListRep','.hidden-listRep','.listRep');
    starColor('.product__navbar-item-danhGia-item-start');
    showExp();
    previewUpImg('#userProfile','.admin-file-input-img','#admin-file-input','.imgErr');
    nextPage('.admin-right-item-mission-item-event','.event-child');
    // setTimeout(function () {
    //     showModifier('.modifier-success','Đăng nhập thành công','Chào Đức, chúc bạn đọc truyện vui vẻ!');
    // },1000);
    // showEvent('noel',1000);
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
        return document.querySelector('#formRegister input[name="passNew"]').value;
        },'Mật khẩu nhập lại không chính xác'),
    ]
});
</script>