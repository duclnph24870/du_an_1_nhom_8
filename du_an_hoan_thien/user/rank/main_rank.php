<??>
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
                            <i class="fa-solid fa-gift"></i>
                            Tặng thưởng
                        </div>
                        <div class="admin-left-icon text">
                            <i class="fa-solid fa-fan"></i>
                            Đề cử 
                        </div>
                        <div class="admin-left-icon text">
                            <i class="fa-solid fa-thumbs-up"></i>
                            Yêu thích
                        </div>
                        <div class="admin-left-icon text">
                            <i class="fa-solid fa-comment"></i>
                            Thảo Luận
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
                                <form method="post" class="pagination">
                                    <div class="pagination__item text"><i class="fa-solid fa-chevron-left"></i>
                                    </div>
                                    <div class="pagination__item text active">1</div>
                                    <div class="pagination__item text">2</div>
                                    <div class="pagination__item text">3</div>
                                    <div class="pagination__item text">4</div>
                                    <div class="pagination__item text"><i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                    <input type="text" value="1" class="pagination__input">
                                    <input type="submit" value="Go" class="pagination__submit">
                                </form>
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
                                <form method="post" class="pagination">
                                    <div class="pagination__item text"><i class="fa-solid fa-chevron-left"></i>
                                    </div>
                                    <div class="pagination__item text active">1</div>
                                    <div class="pagination__item text">2</div>
                                    <div class="pagination__item text">3</div>
                                    <div class="pagination__item text">4</div>
                                    <div class="pagination__item text"><i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                    <input type="text" value="1" class="pagination__input">
                                    <input type="submit" value="Go" class="pagination__submit">
                                </form>
                            </div>
                        </div>
                        <!-- == Tặng thưởng === -->
                        <div class="admin-right-item">
                            <div class="admin-right-item-content">
                                <div class="admin-right-item-content-item">
                                    <ul class="render_gif p-0">
                                    </ul>

                                </div>
                                <form method="post" class="pagination">
                                    <div class="pagination__item text"><i class="fa-solid fa-chevron-left"></i>
                                    </div>
                                    <div class="pagination__item text active">1</div>
                                    <div class="pagination__item text">2</div>
                                    <div class="pagination__item text">3</div>
                                    <div class="pagination__item text">4</div>
                                    <div class="pagination__item text"><i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                    <input type="text" value="1" class="pagination__input">
                                    <input type="submit" value="Go" class="pagination__submit">
                                </form>

                            </div>
                        </div>
                        <!-- == Đề xuất=== -->
                        <div class="admin-right-item">
                            <div class="admin-right-item-content">
                                <div class="admin-right-item-content-item">
                                    <ul class="render_offer p-0">
                                    </ul>

                                </div>
                                <form method="post" class="pagination">
                                    <div class="pagination__item text"><i class="fa-solid fa-chevron-left"></i>
                                    </div>
                                    <div class="pagination__item text active">1</div>
                                    <div class="pagination__item text">2</div>
                                    <div class="pagination__item text">3</div>
                                    <div class="pagination__item text">4</div>
                                    <div class="pagination__item text"><i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                    <input type="text" value="1" class="pagination__input">
                                    <input type="submit" value="Go" class="pagination__submit">
                                </form>

                            </div>
                        </div>
                        <!-- == Yêu thích === -->
                        <div class="admin-right-item">
                            <div class="admin-right-item-content">
                                <div class="admin-right-item-content-item">
                                    <ul class="render_facvarite p-0">
                                    </ul>

                                </div>
                                <form method="post" class="pagination">
                                    <div class="pagination__item text"><i class="fa-solid fa-chevron-left"></i>
                                    </div>
                                    <div class="pagination__item text active">1</div>
                                    <div class="pagination__item text">2</div>
                                    <div class="pagination__item text">3</div>
                                    <div class="pagination__item text">4</div>
                                    <div class="pagination__item text"><i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                    <input type="text" value="1" class="pagination__input">
                                    <input type="submit" value="Go" class="pagination__submit">
                                </form>

                            </div>
                        </div>
                        <!-- == thảo luận === -->
                        <div class="admin-right-item">
                            <div class="admin-right-item-content">
                                <div class="admin-right-item-content-item ">
                                    <ul class="render_comment p-0">
                                    </ul>

                                </div>
                                <form method="post" class="pagination">
                                    <div class="pagination__item text"><i class="fa-solid fa-chevron-left"></i>
                                    </div>
                                    <div class="pagination__item text active">1</div>
                                    <div class="pagination__item text">2</div>
                                    <div class="pagination__item text">3</div>
                                    <div class="pagination__item text">4</div>
                                    <div class="pagination__item text"><i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                    <input type="text" value="1" class="pagination__input">
                                    <input type="submit" value="Go" class="pagination__submit">
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
    const listRender = [
        {
            img: "https://static.cdnno.com/poster/thien-lao-danh-dau-20-nam-ta-cu-the-vo-dich/150.jpg?1656379210",
            content: `Sở Huyền xuyên qua huyền huyễn thế giới, trở thành Đại Hạ
                vương triều bị phế thái tử.Bắt đầu bị đánh nhập thiên lao, may ra thức tỉnh đánh dấu hệ
                thống.Chỉ cần ở đặc thù địa điểm đánh dấu, là hắn có thể thu được
                phong phú ban thưởng."Đinh, đánh dấu thành công, thu được Hàn Băng Thánh Thể!"
                "Đinh, đánh dấu thành công, thu được chín con rồng kéohòm quan tài!""Đinh, đánh dấu thành công, thu được Long Tượng 
                Trấn Ngục Kình!"Nhiều năm về sau, làm Sở Huyền đi ra thiên lao, lại phát hiện mình đã cử thế vô địch!`,
            author: "Thiết Chung",
            downloaded: 9202,
            name: "Huyền Huyễn",
            title: "Thiên Lao Đánh Dấu 20 Năm, Ta Cử Thế Vô Địch"
        },
        {
            img: "https://static.cdnno.com/poster/linh-khi-khoi-phuc-ta-co-van-nang-hop-thanh-dai/150.jpg?1657522606",
            content: `Sở Huyền xuyên qua huyền huyễn thế giới, trở thành Đại Hạ
                vương triều bị phế thái tử.Bắt đầu bị đánh nhập thiên lao, may ra thức tỉnh đánh dấu hệ
                thống.Chỉ cần ở đặc thù địa điểm đánh dấu, là hắn có thể thu được
                phong phú ban thưởng."Đinh, đánh dấu thành công, thu được Hàn Băng Thánh Thể!"
                "Đinh, đánh dấu thành công, thu được chín con rồng kéohòm quan tài!""Đinh, đánh dấu thành công, thu được Long Tượng 
                Trấn Ngục Kình!"Nhiều năm về sau, làm Sở Huyền đi ra thiên lao, lại phát hiện mình đã cử thế vô địch!`,
            author: "Thiết Chung",
            downloaded: 9202,
            name: "Huyền Huyễn",
            title: "Thiên Lao Đánh Dấu 20 Năm, Ta Cử Thế Vô Địch"
        },
        {
            img: "https://static.cdnno.com/poster/thien-lao-danh-dau-20-nam-ta-cu-the-vo-dich/150.jpg?1656379210",
            content: `Sở Huyền xuyên qua huyền huyễn thế giới, trở thành Đại Hạ
                vương triều bị phế thái tử.Bắt đầu bị đánh nhập thiên lao, may ra thức tỉnh đánh dấu hệ
                thống.Chỉ cần ở đặc thù địa điểm đánh dấu, là hắn có thể thu được
                phong phú ban thưởng."Đinh, đánh dấu thành công, thu được Hàn Băng Thánh Thể!"
                "Đinh, đánh dấu thành công, thu được chín con rồng kéohòm quan tài!""Đinh, đánh dấu thành công, thu được Long Tượng 
                Trấn Ngục Kình!"Nhiều năm về sau, làm Sở Huyền đi ra thiên lao, lại phát hiện mình đã cử thế vô địch!`,
            author: "Thiết Chung",
            downloaded: 9202,
            name: "Huyền Huyễn",
            title: "Thiên Lao Đánh Dấu 20 Năm, Ta Cử Thế Vô Địch"
        },
        {
            img: "https://static.cdnno.com/poster/thien-lao-danh-dau-20-nam-ta-cu-the-vo-dich/150.jpg?1656379210",
            content: `Sở Huyền xuyên qua huyền huyễn thế giới, trở thành Đại Hạ
                vương triều bị phế thái tử.Bắt đầu bị đánh nhập thiên lao, may ra thức tỉnh đánh dấu hệ
                thống.Chỉ cần ở đặc thù địa điểm đánh dấu, là hắn có thể thu được
                phong phú ban thưởng."Đinh, đánh dấu thành công, thu được Hàn Băng Thánh Thể!"
                "Đinh, đánh dấu thành công, thu được chín con rồng kéohòm quan tài!""Đinh, đánh dấu thành công, thu được Long Tượng 
                Trấn Ngục Kình!"Nhiều năm về sau, làm Sở Huyền đi ra thiên lao, lại phát hiện mình đã cử thế vô địch!`,
            author: "Thiết Chung",
            downloaded: 9202,
            name: "Huyền Huyễn",
            title: "Thiên Lao Đánh Dấu 20 Năm, Ta Cử Thế Vô Địch"
        },
        {
            img: "https://static.cdnno.com/poster/thien-lao-danh-dau-20-nam-ta-cu-the-vo-dich/150.jpg?1656379210",
            content: `Sở Huyền xuyên qua huyền huyễn thế giới, trở thành Đại Hạ
                vương triều bị phế thái tử.Bắt đầu bị đánh nhập thiên lao, may ra thức tỉnh đánh dấu hệ
                thống.Chỉ cần ở đặc thù địa điểm đánh dấu, là hắn có thể thu được
                phong phú ban thưởng."Đinh, đánh dấu thành công, thu được Hàn Băng Thánh Thể!"
                "Đinh, đánh dấu thành công, thu được chín con rồng kéohòm quan tài!""Đinh, đánh dấu thành công.`,
            author: "Thiết Chung",
            downloaded: 9202,
            name: "Huyền Huyễn",
            title: "Thiên Lao Đánh Dấu 20 Năm, Ta Cử Thế Vô Địch"
        },
    ]
        //    Line 290/public.js
        handleRender(listRender, ".render_trend")
        handleRender(listRender, ".render_topRead")
        handleRender(listRender, ".render_gif")
        handleRender(listRender, ".render_offer")
        handleRender(listRender, ".render_facvarite")
        handleRender(listRender, ".render_comment")
</script>