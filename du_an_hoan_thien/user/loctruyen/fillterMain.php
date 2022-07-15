<?php ?>

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
                    <div class="col-lg-3 col-xl-3 d-none d-lg-block d-xl-block section1-right order-0">
                        <form method="post" class="filter__category">
                            <div class="filter__category-item">
                                <div class="filter__category-title title">Filter</div>
                                <input type="submit" class="filter__category-submit btn-category" value="Lọc">
                                <button class="btn-category" style="background: var(--primary);color: #fff;border:none;">Ngự Thú</button>
                            </div>
                            <div class="filter__category-item filter__category-item-theLoai">
                                <div class="filter__category-title title">Thể Loại</div>
                                <input type="radio" name="theLoai" id="theLoai__0" hidden>
                                <input type="radio" name="theLoai" checked id="theLoai__1" hidden>
                                <input type="radio" name="theLoai" id="theLoai__2" hidden>
                                <input type="radio" name="theLoai" id="theLoai__3" hidden>
                                <input type="radio" name="theLoai" id="theLoai__4" hidden>
                                <label for="theLoai__0" class="filter__category-item-btn1 btn-category">Không chọn</label>
                                <label for="theLoai__1" class="filter__category-item-btn1 btn-category">Tiên Hiệp</label>
                                <label for="theLoai__2" class="filter__category-item-btn2 btn-category">Huyền Huyễn</label>
                                <label for="theLoai__3" class="filter__category-item-btn3 btn-category">Võng Du</label>
                                <label for="theLoai__4" class="filter__category-item-btn4 btn-category">Đồng Nhân</label>
                            </div>

                            <div class="filter__category-item filter__category-item-tinhTrang">
                                <div class="filter__category-title title">Tình Trạng</div>
                                <input type="radio" name="tinhTrang" id="tinhTrang__0" hidden>
                                <input type="radio" name="tinhTrang" id="tinhTrang__1" hidden>
                                <input type="radio" name="tinhTrang" id="tinhTrang__2" hidden>
                                <label for="tinhTrang__0" class="filter__category-item-btn1 btn-category">Không chọn</label>
                                <label for="tinhTrang__1" class="filter__category-item-btn1 btn-category">Đang Ra</label>
                                <label for="tinhTrang__2" class="filter__category-item-btn2 btn-category">Đã Hoàn Thành</label>
                            </div>

                            <div class="filter__category-item filter__category-item-thuocTinh">
                                <div class="filter__category-title title">Thuộc Tính</div>
                                <input type="radio" name="thuocTinh" id="thuocTinh__0" hidden>
                                <input type="radio" name="thuocTinh" id="thuocTinh__1" hidden>
                                <input type="radio" name="thuocTinh" id="thuocTinh__2" hidden>
                                <label for="thuocTinh__1" class="filter__category-item-btn3 btn-category">Không Chọn</label>
                                <label for="thuocTinh__2" class="filter__category-item-btn3 btn-category">Chọn Lọc</label>
                                <label for="thuocTinh__3" class="filter__category-item-btn4 btn-category">Chất Lượng Cao</label>
                            </div>

                            <div class="filter__category-item filter__category-item-tinhCach">
                                <div class="filter__category-title title">Tính Cách Nhân Vật Chính</div>
                                <input type="radio" name="tinhCach" id="tinhCach__0" hidden>
                                <input type="radio" name="tinhCach" id="tinhCach__1" hidden>
                                <input type="radio" name="tinhCach" id="tinhCach__2" hidden>
                                <input type="radio" name="tinhCach" id="tinhCach__3" hidden>
                                <input type="radio" name="tinhCach" id="tinhCach__4" hidden>
                                <label for="tinhCach__0" class="filter__category-item-btn1 btn-category">Không Chọn</label>
                                <label for="tinhCach__1" class="filter__category-item-btn1 btn-category">Điềm Đạm</label>
                                <label for="tinhCach__2" class="filter__category-item-btn2 btn-category">Nhiệt Huyết</label>
                                <label for="tinhCach__3" class="filter__category-item-btn3 btn-category">Vô Sỉ</label>
                                <label for="tinhCach__4" class="filter__category-item-btn4 btn-category">Thiết Huyết</label>
                            </div>

                            <div class="filter__category-item filter__category-item-boiCanh">
                                <div class="filter__category-title title">Bối Cảnh Thế Giới</div>
                                <input type="radio" name="boiCanh" id="boiCanh__0" hidden>
                                <input type="radio" name="boiCanh" id="boiCanh__1" hidden>
                                <input type="radio" name="boiCanh" id="boiCanh__2" hidden>
                                <input type="radio" name="boiCanh" id="boiCanh__3" hidden>
                                <input type="radio" name="boiCanh" id="boiCanh__4" hidden>
                                <label for="boiCanh__0" class="filter__category-item-btn1 btn-category">Không Chọn</label>
                                <label for="boiCanh__1" class="filter__category-item-btn1 btn-category">Đông Phương Huyền Huyễn</label>
                                <label for="boiCanh__2" class="filter__category-item-btn2 btn-category">Dị Thế Đại Lục</label>
                                <label for="boiCanh__3" class="filter__category-item-btn3 btn-category">Vương Triều Tranh Bá</label>
                                <label for="boiCanh__4" class="filter__category-item-btn4 btn-category">Tây Phương Kỳ Huyễn</label>
                            </div>

                            <div class="filter__category-item filter__category-item-luuPhai">
                                <div class="filter__category-title title">Lưu Phái</div>
                                <input type="radio" name="luuPhai" id="luuPhai__0" hidden>
                                <input type="radio" name="luuPhai" id="luuPhai__1" hidden>
                                <input type="radio" name="luuPhai" id="luuPhai__2" hidden>
                                <input type="radio" name="luuPhai" id="luuPhai__3" hidden>
                                <input type="radio" name="luuPhai" id="luuPhai__4" hidden>
                                <label for="luuPhai__0" class="filter__category-item-btn1 btn-category">Không Chọn</label>
                                <label for="luuPhai__1" class="filter__category-item-btn1 btn-category">Hệ Thống</label>
                                <label for="luuPhai__2" class="filter__category-item-btn2 btn-category">Lão Gia</label>
                                <label for="luuPhai__3" class="filter__category-item-btn3 btn-category">Bàn Thờ</label>
                                <label for="luuPhai__4" class="filter__category-item-btn4 btn-category">Tùy Thân</label>
                            </div>

                            <div class="filter__category-item filter__category-item-thiGiac">
                                <div class="filter__category-title title">Thị Giác</div>
                                <input type="radio" name="thiGiac" id="thiGiac__0" hidden>
                                <input type="radio" name="thiGiac" id="thiGiac__1" hidden>
                                <input type="radio" name="thiGiac" id="thiGiac__2" hidden>
                                <input type="radio" name="thiGiac" id="thiGiac__3" hidden>
                                <label for="thiGiac__0" class="filter__category-item-btn1 btn-category">Không Chọn</label>
                                <label for="thiGiac__1" class="filter__category-item-btn1 btn-category">Góc Nhìn Nam</label>
                                <label for="thiGiac__2" class="filter__category-item-btn2 btn-category">Góc Nhìn Nữ</label>
                                <label for="thiGiac__3" class="filter__category-item-btn3 btn-category">Ngôi Thứ Nhất</label>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-lg-9 col-xl-9 section1-left order-1">
                        <div class="content__section1-main">
                            <div class="row">
                                <div class="col-12">
                                    <div class="category__filter">
                                        <div class="category__filter-item filter-icon text">
                                            <i class="fas fa-sliders-h"></i>
                                        </div>
                                        <div class="category__filter-item text active">
                                            Mới Cập Nhập 
                                            <i class="fas fa-caret-down"></i>
                                            <div class="category__filter-update category">
                                                <div class="category-item">Mới Cập Nhập</div>
                                                <div class="category-item">Mới Đăng</div>
                                            </div>
                                        </div>
                                        <div class="category__filter-item text">
                                            Lượt Đọc
                                        </div>
                                        <div class="category__filter-item text">Yêu Thích</div>
                                        <div class="category__filter-item text">Bình Luận</div>
                                        <div class="category__filter-item text">Đề Cử</div>
                                        <div class="category__filter-item text">Số chương</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="filter__category-title-keyword limit1">Kết quả tìm kiếm cho: <b>Ngự thú</b></div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="content__section1-main-item">
                                        <a href="../HTML/product.html" class="content__section1-main-item-img" style="background-image: url(https://static.cdnno.com/poster/tu-luyen-theo-dau-pha-thuong-khung-bat-dau/150.jpg?1585210461);"></a>
                                        <div class="content__section1-main-item-content">
                                            <a href="../HTML/product.html" class="content__section1-main-item-title text">Tu Luyện Theo Đấu Phá Thương Khung Bắt Đầu</a>
                                            <div class="content__section1-main-item-demo">
                                                Hệ thống nơi tay, thế giới ta có, thiếu niên người mang vạn năng hệ thống, theo Đấu Phá Thương Khung bắt đầu tu luyện, đây là một người hiện đại tại dị giới tu hành cố sự. . .
                                            </div>
                                            <div class="content__section1-main-item-footer">
                                                <div class="content__section1-main-item-master">
                                                    <i class="fas fa-user-edit"></i>
                                                    Giang Hồ Hữu Tửu
                                                </div>
                                                <div class="content__section1-main-item-category btn">Đồng Nhân</div>
                                                <div class="content__section1-main-item-chap d-flex">
                                                    <i class="fas fa-bars"></i>
                                                    369 chương
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="content__section1-main-item">
                                        <div class="content__section1-main-item-img" style="background-image: url(https://static.cdnno.com/poster/ban-tien/150.jpg?1623342325);"></div>
                                        <div class="content__section1-main-item-content">
                                            <div class="content__section1-main-item-title text">Bán Tiên</div>
                                            <div class="content__section1-main-item-demo">
                                                Núi sâu có đạo quan, hương hỏa sớm tàn lụi.

                                                Kẻ hèn bất tài, tuổi vừa mới mười chín, từ nhỏ liền là một tên đạo sĩ, bên trên có sư huynh mười mấy vị, dưới chỉ còn nhỏ nhỏ nhất, tục xưng quan môn đệ tử. Sư môn nghèo quá, các sư huynh khó nhịn kham khổ, may mắn chưởng môn sư tôn rộng rãi , mặc cho các sư huynh giải thể mà đi.

                                                Sau có ba vị sư huynh sai đường biết quay lại, tuổi tác khá lớn, đều có bốn năm mươi.

                                                Được sư tôn xem trọng, chết trước truyền chức chưởng môn tại tiểu đạo, nhưng không luận niên tuế hoặc tư lịch đều không có thể phục chúng, ba vị sư huynh không phục. Sư môn bất hạnh, tiểu đạo không phải quả hồng mềm, tuyệt không nhượng bộ, tới tranh chấp nội bộ.

                                                Dưới núi trong thôn, có tân cử nhân, chính là tiểu đạo phát tiểu, sư tôn trôi qua trước cũng có bàn giao, hộ tống hắn vào kinh đi thi. Nghĩa bất dung từ, lại cho tiểu đạo nhân gian đi một lần, trở về sẽ cùng các sư huynh đấu!
                                            </div>
                                            <div class="content__section1-main-item-footer">
                                                <div class="content__section1-main-item-master">
                                                    <i class="fas fa-user-edit"></i>
                                                    Vãn Lâm Không
                                                </div>
                                                <div class="content__section1-main-item-category btn">Huyền Huyễn</div>
                                                <div class="content__section1-main-item-chap d-flex">
                                                    <i class="fas fa-bars"></i>
                                                    369 chương
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="content__section1-main-item">
                                        <div class="content__section1-main-item-img" style="background-image: url(https://static.cdnno.com/poster/tu-luyen-theo-dau-pha-thuong-khung-bat-dau/150.jpg?1585210461);"></div>
                                        <div class="content__section1-main-item-content">
                                            <div class="content__section1-main-item-title text">Tu Luyện Theo Đấu Phá Thương Khung Bắt Đầu</div>
                                            <div class="content__section1-main-item-demo">
                                                Hệ thống nơi tay, thế giới ta có, thiếu niên người mang vạn năng hệ thống, theo Đấu Phá Thương Khung bắt đầu tu luyện, đây là một người hiện đại tại dị giới tu hành cố sự. . .
                                            </div>
                                            <div class="content__section1-main-item-footer">
                                                <div class="content__section1-main-item-master">
                                                    <i class="fas fa-user-edit"></i>
                                                    Giang Hồ Hữu Tửu
                                                </div>
                                                <div class="content__section1-main-item-category btn">Đồng Nhân</div>
                                                <div class="content__section1-main-item-chap d-flex">
                                                    <i class="fas fa-bars"></i>
                                                    369 chương
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="content__section1-main-item">
                                        <div class="content__section1-main-item-img" style="background-image: url(https://static.cdnno.com/poster/ban-tien/150.jpg?1623342325);"></div>
                                        <div class="content__section1-main-item-content">
                                            <div class="content__section1-main-item-title text">Bán Tiên</div>
                                            <div class="content__section1-main-item-demo">
                                                Núi sâu có đạo quan, hương hỏa sớm tàn lụi.

                                                Kẻ hèn bất tài, tuổi vừa mới mười chín, từ nhỏ liền là một tên đạo sĩ, bên trên có sư huynh mười mấy vị, dưới chỉ còn nhỏ nhỏ nhất, tục xưng quan môn đệ tử. Sư môn nghèo quá, các sư huynh khó nhịn kham khổ, may mắn chưởng môn sư tôn rộng rãi , mặc cho các sư huynh giải thể mà đi.

                                                Sau có ba vị sư huynh sai đường biết quay lại, tuổi tác khá lớn, đều có bốn năm mươi.

                                                Được sư tôn xem trọng, chết trước truyền chức chưởng môn tại tiểu đạo, nhưng không luận niên tuế hoặc tư lịch đều không có thể phục chúng, ba vị sư huynh không phục. Sư môn bất hạnh, tiểu đạo không phải quả hồng mềm, tuyệt không nhượng bộ, tới tranh chấp nội bộ.

                                                Dưới núi trong thôn, có tân cử nhân, chính là tiểu đạo phát tiểu, sư tôn trôi qua trước cũng có bàn giao, hộ tống hắn vào kinh đi thi. Nghĩa bất dung từ, lại cho tiểu đạo nhân gian đi một lần, trở về sẽ cùng các sư huynh đấu!
                                            </div>
                                            <div class="content__section1-main-item-footer">
                                                <div class="content__section1-main-item-master">
                                                    <i class="fas fa-user-edit"></i>
                                                    Vãn Lâm Không
                                                </div>
                                                <div class="content__section1-main-item-category btn">Huyền Huyễn</div>
                                                <div class="content__section1-main-item-chap d-flex">
                                                    <i class="fas fa-bars"></i>
                                                    369 chương
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="content__section1-main-item">
                                        <div class="content__section1-main-item-img" style="background-image: url(https://static.cdnno.com/poster/tu-luyen-theo-dau-pha-thuong-khung-bat-dau/150.jpg?1585210461);"></div>
                                        <div class="content__section1-main-item-content">
                                            <div class="content__section1-main-item-title text">Tu Luyện Theo Đấu Phá Thương Khung Bắt Đầu</div>
                                            <div class="content__section1-main-item-demo">
                                                Hệ thống nơi tay, thế giới ta có, thiếu niên người mang vạn năng hệ thống, theo Đấu Phá Thương Khung bắt đầu tu luyện, đây là một người hiện đại tại dị giới tu hành cố sự. . .
                                            </div>
                                            <div class="content__section1-main-item-footer">
                                                <div class="content__section1-main-item-master">
                                                    <i class="fas fa-user-edit"></i>
                                                    Giang Hồ Hữu Tửu
                                                </div>
                                                <div class="content__section1-main-item-category btn">Đồng Nhân</div>
                                                <div class="content__section1-main-item-chap d-flex">
                                                    <i class="fas fa-bars"></i>
                                                    369 chương
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="content__section1-main-item">
                                        <div class="content__section1-main-item-img" style="background-image: url(https://static.cdnno.com/poster/ban-tien/150.jpg?1623342325);"></div>
                                        <div class="content__section1-main-item-content">
                                            <div class="content__section1-main-item-title text">Bán Tiên</div>
                                            <div class="content__section1-main-item-demo">
                                                Núi sâu có đạo quan, hương hỏa sớm tàn lụi.

                                                Kẻ hèn bất tài, tuổi vừa mới mười chín, từ nhỏ liền là một tên đạo sĩ, bên trên có sư huynh mười mấy vị, dưới chỉ còn nhỏ nhỏ nhất, tục xưng quan môn đệ tử. Sư môn nghèo quá, các sư huynh khó nhịn kham khổ, may mắn chưởng môn sư tôn rộng rãi , mặc cho các sư huynh giải thể mà đi.

                                                Sau có ba vị sư huynh sai đường biết quay lại, tuổi tác khá lớn, đều có bốn năm mươi.

                                                Được sư tôn xem trọng, chết trước truyền chức chưởng môn tại tiểu đạo, nhưng không luận niên tuế hoặc tư lịch đều không có thể phục chúng, ba vị sư huynh không phục. Sư môn bất hạnh, tiểu đạo không phải quả hồng mềm, tuyệt không nhượng bộ, tới tranh chấp nội bộ.

                                                Dưới núi trong thôn, có tân cử nhân, chính là tiểu đạo phát tiểu, sư tôn trôi qua trước cũng có bàn giao, hộ tống hắn vào kinh đi thi. Nghĩa bất dung từ, lại cho tiểu đạo nhân gian đi một lần, trở về sẽ cùng các sư huynh đấu!
                                            </div>
                                            <div class="content__section1-main-item-footer">
                                                <div class="content__section1-main-item-master">
                                                    <i class="fas fa-user-edit"></i>
                                                    Vãn Lâm Không
                                                </div>
                                                <div class="content__section1-main-item-category btn">Huyền Huyễn</div>
                                                <div class="content__section1-main-item-chap d-flex">
                                                    <i class="fas fa-bars"></i>
                                                    369 chương
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="content__section1-main-item">
                                        <div class="content__section1-main-item-img" style="background-image: url(https://static.cdnno.com/poster/tu-luyen-theo-dau-pha-thuong-khung-bat-dau/150.jpg?1585210461);"></div>
                                        <div class="content__section1-main-item-content">
                                            <div class="content__section1-main-item-title text">Tu Luyện Theo Đấu Phá Thương Khung Bắt Đầu</div>
                                            <div class="content__section1-main-item-demo">
                                                Hệ thống nơi tay, thế giới ta có, thiếu niên người mang vạn năng hệ thống, theo Đấu Phá Thương Khung bắt đầu tu luyện, đây là một người hiện đại tại dị giới tu hành cố sự. . .
                                            </div>
                                            <div class="content__section1-main-item-footer">
                                                <div class="content__section1-main-item-master">
                                                    <i class="fas fa-user-edit"></i>
                                                    Giang Hồ Hữu Tửu
                                                </div>
                                                <div class="content__section1-main-item-category btn">Đồng Nhân</div>
                                                <div class="content__section1-main-item-chap d-flex">
                                                    <i class="fas fa-bars"></i>
                                                    369 chương
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="content__section1-main-item">
                                        <div class="content__section1-main-item-img" style="background-image: url(https://static.cdnno.com/poster/ban-tien/150.jpg?1623342325);"></div>
                                        <div class="content__section1-main-item-content">
                                            <div class="content__section1-main-item-title text">Bán Tiên</div>
                                            <div class="content__section1-main-item-demo">
                                                Núi sâu có đạo quan, hương hỏa sớm tàn lụi.

                                                Kẻ hèn bất tài, tuổi vừa mới mười chín, từ nhỏ liền là một tên đạo sĩ, bên trên có sư huynh mười mấy vị, dưới chỉ còn nhỏ nhỏ nhất, tục xưng quan môn đệ tử. Sư môn nghèo quá, các sư huynh khó nhịn kham khổ, may mắn chưởng môn sư tôn rộng rãi , mặc cho các sư huynh giải thể mà đi.

                                                Sau có ba vị sư huynh sai đường biết quay lại, tuổi tác khá lớn, đều có bốn năm mươi.

                                                Được sư tôn xem trọng, chết trước truyền chức chưởng môn tại tiểu đạo, nhưng không luận niên tuế hoặc tư lịch đều không có thể phục chúng, ba vị sư huynh không phục. Sư môn bất hạnh, tiểu đạo không phải quả hồng mềm, tuyệt không nhượng bộ, tới tranh chấp nội bộ.

                                                Dưới núi trong thôn, có tân cử nhân, chính là tiểu đạo phát tiểu, sư tôn trôi qua trước cũng có bàn giao, hộ tống hắn vào kinh đi thi. Nghĩa bất dung từ, lại cho tiểu đạo nhân gian đi một lần, trở về sẽ cùng các sư huynh đấu!
                                            </div>
                                            <div class="content__section1-main-item-footer">
                                                <div class="content__section1-main-item-master">
                                                    <i class="fas fa-user-edit"></i>
                                                    Vãn Lâm Không
                                                </div>
                                                <div class="content__section1-main-item-category btn">Huyền Huyễn</div>
                                                <div class="content__section1-main-item-chap d-flex">
                                                    <i class="fas fa-bars"></i>
                                                    369 chương
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
</script>