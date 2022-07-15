<?php ?>

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
                <div class="chuong-navbar-list-item">
                    <a href="" class="chuong-navbar-list-link limit1">
                        Chương 1: Sơ Lâm Dị Giới
                    </a>
                </div>
                <div class="chuong-navbar-list-item">
                    <a href="" class="chuong-navbar-list-link limit1">
                        Chương 1: Sơ Lâm Dị Giới
                    </a>
                </div>
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
            <div class="chuong-navbar-item block-icon" title="Thông Tin Truyện"><i class="fas fa-arrow-left"></i></div>
            <div class="chuong-navbar-item block-icon" title="Hướng Dẫn"><i class="fas fa-info-circle"></i></div>
        </div>
        <!-- <script>
            const chuongNav = document.querySelector('.navList-icon');
            const chuongNavContent = document.querySelector('.chuong-navbar-list');

            chuongNav.addEventListener('click',()=> {
                chuongNavContent.classList.toggle('active');
            });
        </script> -->
        <div class="chuong-content">
            <div class="row">
                <!-- === btn === -->
                <div class="col-12">
                    <div class="chuong-content__btn">
                        <div class="chuong-content__btn-item disabled">
                            <i class="fas fa-arrow-left"></i>
                            Chương Trước
                        </div>
                        <div class="chuong-content__btn-item">
                            Chương Sau
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <!-- ==== thông tin chương === -->
                <div class="col-12">
                    <div class="chuong-content__title">Chương 1: Sơ Lâm Dị Giới</div>
                </div>
                <div class="col-12">
                    <div class="chuong-content__thongTin">
                        <div class="chuong-content__titlePr block-icon text">
                            <i class="fas fa-book"></i>
                            Đấu La Đại Lục IV
                        </div>
                        <div class="chuong-content__tacGia block-icon text">
                            <i class="fas fa-user-edit"></i>
                            Thiên Tằm Thổ Đậu
                        </div>
                        <div class="chuong-content__soChu block-icon">
                            <i class="fas fa-bold"></i>
                            1400 Chữ
                        </div>
                        <div class="chuong-content__danhDau block-icon">
                            <i class="fas fa-ticket"></i>
                            12 Đánh Dấu
                        </div>
                        <div class="chuong-content__dateChuong block-icon">
                            <i class="fas fa-clock"></i>
                            12-10-2001
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="chuong-content__noiDung">
                        Truyện được đăng tại https://sangtacviet.me/truyen/faloo/1/803629/16/
                        hứ 16 chương; Bách hoa hóa hình, Yêu Tộc lập
                        Từng cái Đại Đạo Pháp Tắc hiện ra tại trước mặt Hạo Thiên.
                        Hạo Thiên trong lòng cuồng hỉ.
                        Hắn không nghĩ tới, cái này Tạo Hóa Ngọc Điệp trong mảnh vỡ có hoàn chỉnh Đại Đạo Pháp Tắc một trong Đế Đạo pháp tắc.
                        Còn có hắn một mực khát vọng sức mạnh pháp tắc, thời gian pháp tắc, không gian pháp tắc, nhân quả, Luân Hồi, tạo hóa,,,,,,
                        Những thứ này hoàn chỉnh Đại Đạo Pháp Tắc, mỗi một đầu tu đến phần cuối, đều có thể chân chính để cho người ta thành đạo.
                        Là chân chính thành đạo, mà không phải thành Thánh.
                        Để bảo đảm không có sơ hở nào, Hạo Thiên không chút do dự đem cái này Tạo Hóa Ngọc Điệp mảnh vụn sáp nhập vào chính mình trong nguyên thần.
                        Nguyên thần chấn động.
                        Hạo Thiên nguyên thần thật giống như đắm chìm trong trong hải dương Đại Đạo Pháp Tắc, Hạo Thiên nguyên thần đang nhanh chóng phát sinh thuế biến.
                        Lúc này những thứ này nhật nguyệt tinh thần, Hồng Hoang đại địa nguyên bản rất là mơ hồ, bây giờ lại từng điểm từng điểm trở nên rõ ràng.
                        “Ông!”
                        Truyện được đăng tại https://sangtacviet.me/truyen/faloo/1/803629/16/
                        hứ 16 chương; Bách hoa hóa hình, Yêu Tộc lập
                        Từng cái Đại Đạo Pháp Tắc hiện ra tại trước mặt Hạo Thiên.
                        Hạo Thiên trong lòng cuồng hỉ.
                        Hắn không nghĩ tới, cái này Tạo Hóa Ngọc Điệp trong mảnh vỡ có hoàn chỉnh Đại Đạo Pháp Tắc một trong Đế Đạo pháp tắc.
                        Còn có hắn một mực khát vọng sức mạnh pháp tắc, thời gian pháp tắc, không gian pháp tắc, nhân quả, Luân Hồi, tạo hóa,,,,,,
                        Những thứ này hoàn chỉnh Đại Đạo Pháp Tắc, mỗi một đầu tu đến phần cuối, đều có thể chân chính để cho người ta thành đạo.
                        Là chân chính thành đạo, mà không phải thành Thánh.
                        Để bảo đảm không có sơ hở nào, Hạo Thiên không chút do dự đem cái này Tạo Hóa Ngọc Điệp mảnh vụn sáp nhập vào chính mình trong nguyên thần.
                        Nguyên thần chấn động.
                        Hạo Thiên nguyên thần thật giống như đắm chìm trong trong hải dương Đại Đạo Pháp Tắc, Hạo Thiên nguyên thần đang nhanh chóng phát sinh thuế biến.
                        Lúc này những thứ này nhật nguyệt tinh thần, Hồng Hoang đại địa nguyên bản rất là mơ hồ, bây giờ lại từng điểm từng điểm trở nên rõ ràng.
                        “Ông!”
                        Truyện được đăng tại https://sangtacviet.me/truyen/faloo/1/803629/16/
                        hứ 16 chương; Bách hoa hóa hình, Yêu Tộc lập
                        Từng cái Đại Đạo Pháp Tắc hiện ra tại trước mặt Hạo Thiên.
                        Hạo Thiên trong lòng cuồng hỉ.
                        Hắn không nghĩ tới, cái này Tạo Hóa Ngọc Điệp trong mảnh vỡ có hoàn chỉnh Đại Đạo Pháp Tắc một trong Đế Đạo pháp tắc.
                        Còn có hắn một mực khát vọng sức mạnh pháp tắc, thời gian pháp tắc, không gian pháp tắc, nhân quả, Luân Hồi, tạo hóa,,,,,,
                        Những thứ này hoàn chỉnh Đại Đạo Pháp Tắc, mỗi một đầu tu đến phần cuối, đều có thể chân chính để cho người ta thành đạo.
                        Là chân chính thành đạo, mà không phải thành Thánh.
                        Để bảo đảm không có sơ hở nào, Hạo Thiên không chút do dự đem cái này Tạo Hóa Ngọc Điệp mảnh vụn sáp nhập vào chính mình trong nguyên thần.
                        Nguyên thần chấn động.
                        Hạo Thiên nguyên thần thật giống như đắm chìm trong trong hải dương Đại Đạo Pháp Tắc, Hạo Thiên nguyên thần đang nhanh chóng phát sinh thuế biến.
                        Lúc này những thứ này nhật nguyệt tinh thần, Hồng Hoang đại địa nguyên bản rất là mơ hồ, bây giờ lại từng điểm từng điểm trở nên rõ ràng.
                        “Ông!”
                        Truyện được đăng tại https://sangtacviet.me/truyen/faloo/1/803629/16/
                        hứ 16 chương; Bách hoa hóa hình, Yêu Tộc lập
                        Từng cái Đại Đạo Pháp Tắc hiện ra tại trước mặt Hạo Thiên.
                        Hạo Thiên trong lòng cuồng hỉ.
                        Hắn không nghĩ tới, cái này Tạo Hóa Ngọc Điệp trong mảnh vỡ có hoàn chỉnh Đại Đạo Pháp Tắc một trong Đế Đạo pháp tắc.
                        Còn có hắn một mực khát vọng sức mạnh pháp tắc, thời gian pháp tắc, không gian pháp tắc, nhân quả, Luân Hồi, tạo hóa,,,,,,
                        Những thứ này hoàn chỉnh Đại Đạo Pháp Tắc, mỗi một đầu tu đến phần cuối, đều có thể chân chính để cho người ta thành đạo.
                        Là chân chính thành đạo, mà không phải thành Thánh.
                        Để bảo đảm không có sơ hở nào, Hạo Thiên không chút do dự đem cái này Tạo Hóa Ngọc Điệp mảnh vụn sáp nhập vào chính mình trong nguyên thần.
                        Nguyên thần chấn động.
                        Hạo Thiên nguyên thần thật giống như đắm chìm trong trong hải dương Đại Đạo Pháp Tắc, Hạo Thiên nguyên thần đang nhanh chóng phát sinh thuế biến.
                        Lúc này những thứ này nhật nguyệt tinh thần, Hồng Hoang đại địa nguyên bản rất là mơ hồ, bây giờ lại từng điểm từng điểm trở nên rõ ràng.
                        “Ông!”
                    </div>
                </div>
                <div class="col-12">
                    <div class="chuong-content__btn-bottom">
                        <div class="chuong-content__btn-bottom-item disabled">
                            <i class="fas fa-arrow-left"></i>
                            Chương Trước
                        </div>
                        <div class="chuong-content__btn-bottom-item">
                            Chương Sau
                            <i class="fas fa-arrow-right"></i>
                        </div>
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
