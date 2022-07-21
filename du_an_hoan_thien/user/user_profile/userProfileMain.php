<?php ?>

<script src="<?=$CONTENT_URL?>/JS/product.js"></script>
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
                        <div class="admin-left-icon text">
                            <i class="fas fa-comments"></i>
                            Bình Luận
                        </div>
                        <div class="admin-left-icon text">
                            <i class="fas fa-comment-alt-edit"></i>
                            Đánh Giá
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="admin-right">
                        <!-- == thông tin cơ bản === -->
                        <div class="admin-right-item">
                            <div class="row"> 
                                <div class="col-8">
                                    <!-- truyện đã đọc  -->
                                    <div class="userProfile__content-left-section1">
                                        <div class="content__section-header">
                                            <div class="content__section-title title">Truyện Đã Đọc</div>
                                        </div>
                                        <div class="userProfile__content-left-section1-content">
                                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                </ol>

                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <div class="d-flex">
                                                            <div class="carousel-item__left">
                                                                <img src="https://static.cdnno.com/poster/duy-do-xam-thuc-gia/150.jpg?1585207998" alt="">
                                                            </div>
                                                            <div class="carousel-item__right">
                                                                <a href="" class="carousel-item__right-title limit1 text">Duy độ xâm thực giả</a>
                                                                <a href="" class="carousel-item__right-master block-icon">
                                                                    <i class="fas fa-user-edit"></i>
                                                                    <span class="limit1">Tàn khốc xí thiên sứ</span>
                                                                </a>
                                                                <div class="carousel-item__right-demo limit5">
                                                                    Xa xưa trước đó, mục nát Chủ Thần Không Gian sụp đổ giải thể, hài cốt tản mát song song vũ trụ, dựng dục ra mới không gian. . .    Vô số bị chưởng khống 'Kịch bản thế giới' cũng rơi vào hư không khe hở, trùng hoạch tự do, bạo tẩu mất khống chế, thăng cấp thành chân thực, hóa thành hiện thực.    Ngay...
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero aliquid rerum est amet ex architecto, corporis hic praesentium asperiores odio atque, in, laborum cupiditate labore qui quia ipsam voluptatum placeat?
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="d-flex">
                                                            <div class="carousel-item__left">
                                                                <img src="https://static.cdnno.com/poster/de-ba/150.jpg?1585205580" alt="">
                                                            </div>
                                                            <div class="carousel-item__right">
                                                                <a href="" class="carousel-item__right-title limit1 text">Đế Bá</a>
                                                                <a href="" class="carousel-item__right-master block-icon">
                                                                    <i class="fas fa-user-edit"></i>
                                                                    <span class="limit1">Tàn khốc xí thiên sứ</span>
                                                                </a>
                                                                <div class="carousel-item__right-demo limit5">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero aliquid rerum est amet ex architecto, corporis hic praesentium asperiores odio atque, in, laborum cupiditate labore qui quia ipsam voluptatum placeat?
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quaerat ab esse distinctio dolores cum explicabo aspernatur! Veritatis atque saepe, ipsam natus voluptatum temporibus, labore at sint amet dolore ut!
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="d-flex">
                                                            <div class="carousel-item__left">
                                                                <img src="https://static.cdnno.com/poster/khung-bo-song-lai/150.jpg?1585205957" alt="">
                                                            </div>
                                                            <div class="carousel-item__right">
                                                                <a href="" class="carousel-item__right-title limit1 text">Khủng bố sống lại</a>
                                                                <a href="" class="carousel-item__right-master block-icon">
                                                                    <i class="fas fa-user-edit"></i>
                                                                    <span class="limit1">Tàn khốc xí thiên sứ</span>
                                                                </a>
                                                                <div class="carousel-item__right-demo limit5">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero aliquid rerum est amet ex architecto, corporis hic praesentium asperiores odio atque, in, laborum cupiditate labore qui quia ipsam voluptatum placeat?
                                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem iusto veniam explicabo laudantium impedit quis ut, eos in aspernatur a. Ullam et reiciendis suscipit ipsam aliquid fuga officia autem doloremque!
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                    <!-- truyện đã đăng  -->
                                    <div class="userProfile__content-left-section2">
                                        <div class="content__section-header">
                                            <div class="content__section-title title">Truyện Đã Đăng</div>
                                        </div>
                                        <div class="userProfile__content-left-section2-content">
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
                                                                <i class="fas fa-ticket-alt"></i>
                                                                12
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                                <i class="fas fa-ticket-alt"></i>
                                                                12
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                                <i class="fas fa-ticket-alt"></i>
                                                                12
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                                <i class="fas fa-ticket-alt"></i>
                                                                12
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                <div class="col-4">
                                    <div class="userProfile__content-right">
                                        <div class="userProfile__information">
                                            <div class="userProfile__information-avt">
                                                <img src="https://static.cdnno.com/user/e66174c2d569a2e847a94f7d1042cbd3/100.jpg?1635993328" alt="">
                                                <span>Tác Giả</span>
                                            </div>
                                            <div class="userProfile__information-content">
                                                <div class="userProfile__information-name limi1">Ngọc Đức</div>
                                                <div class="userProfile__information-level">lv.3</div>
                                                <div class="userProfile__information-date block-icon">
                                                    <i class="far fa-clock"></i>
                                                        2 năm trước
                                                </div>
                                            </div>
                                            <div class="userProfile__information-description">
                                                Boss của metruyenchu
                                            </div>
                                            <div class="expUser userProfile__information-exp">
                                                <div class="expUser__content">
                                                    <div class="expUser__content-text">
                                                    Exp: <span class="expUser__content-having">70</span> / <span class="expUser__content-required">1000</span>
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
                                                        <b>76</b>
                                                        truyện
                                                    </div>
                                                    <div class="userProfile__statistical-content-item">
                                                        <b>706</b>
                                                        chương
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="userProfile__statistical-item">
                                                <div class="userProfile__statistical-name">Xuất Bản</div>
                                                <div class="userProfile__statistical-content">
                                                    <div class="userProfile__statistical-content-item">
                                                        <b>286</b>
                                                        truyện
                                                    </div>
                                                    <div class="userProfile__statistical-content-item">
                                                        <b>1009</b>
                                                        chương
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="userProfile__statistical-item">
                                                <div class="userProfile__statistical-name">Bình Luận</div>
                                                <div class="userProfile__statistical-content">
                                                    <div class="userProfile__statistical-content-item">
                                                        <b>561</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="userProfile__statistical-item">
                                                <div class="userProfile__statistical-name">Cất Giữ</div>
                                                <div class="userProfile__statistical-content">
                                                    <div class="userProfile__statistical-content-item">
                                                        <b>43</b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ==== bình luận === -->
                        <div class="admin-right-item admin-right-item-comment userProfile__comment">
                            <div class="admin-right-item-notify-header d-flex align-items-center title pb-2">
                                <div class="checkbox-btn-block d-flex">
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
                        <!-- ==== Đánh giá === -->
                        <div class="admin-right-item admin-right-item-danhGia userProfile__danhGia">
                            <div class="admin-right-item-notify-header d-flex align-items-center title pb-2">
                                <div class="checkbox-btn-block d-flex ">
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
    checkAll('.admin-right-item-comment','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="commentCheckBox"]','.checkbox-btn-block-delete');
    checkAll('.admin-right-item-danhGia','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="danhGiaCheckBox"]','.checkbox-btn-block-delete');
    showRep('.showListRep','.hidden-listRep','.listRep');
    starColor('.product__navbar-item-danhGia-item-start');
</script>