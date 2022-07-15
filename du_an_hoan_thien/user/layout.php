<?php 
    require "../public.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="icon" href="https://metruyenchu.com/assets/images/logo.png?260329">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cf5472ea14.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/public.css">
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/index.css">
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/home-content.css">
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/responsive.css">
</head>
<body>
    <div class="container-fluid p-xl-0 p-lg-0 p-md-0">
        <div class="container-fluid" style="background: var(--back-color);">
            <div class="container">
                <!-- =======Header======== -->
                <header class="header d-none d-xl-flex d-lg-flex">
                    <div class="header__left">
                        <a href="index.html" class="header__logo logo">
                            <img src="https://metruyenchu.com/assets/images/logo.png?260329" alt="">
                        </a>
                        <!-- ======category======= -->
                        <div class="header__category">
                            <div class="block-icon header__category-icon">
                                <i class="fas fa-bars"></i>
                                <span>Thể Loại</span>
                            </div>
    
                            <div class="header__category-content category">
                                <div class="category-item">
                                    <a href="HTML/category.html" class="category-item-link">Tất Cả</a>
                                </div>
                                <div class="category-item">
                                    <a href="" class="category-item-link">Tiên Hiệp</a>
                                </div>
                                <div class="category-item">
                                    <a href="" class="category-item-link">Huyền Huyễn</a>
                                </div>
                                <div class="category-item">
                                    <a href="" class="category-item-link">Kỳ Ảo</a>
                                </div>
                                <div class="category-item">
                                    <a href="" class="category-item-link">Khoa Huyễn</a>
                                </div>
                                <div class="category-item">
                                    <a href="" class="category-item-link">Võng Du</a>
                                </div>
                                <div class="category-item">
                                    <a href="" class="category-item-link">Đô Thị</a>
                                </div>
                                <div class="category-item">
                                    <a href="" class="category-item-link">Đồng Nhân</a>
                                </div>
                                <div class="category-item">
                                    <a href="" class="category-item-link">Cạnh Kỹ</a>
                                </div>
                                <div class="category-item">
                                    <a href="" class="category-item-link">Kiếm Hiệp</a>
                                </div>
                            </div>
                        </div>
                        <!-- ===========rank========== -->
                        <div class="header__rank">
                            <div class="header__rank-text">Bảng Xếp Hạng</div>
                            <div class="header__rank-content category">
                                <div class="category-item">
                                    <a href="" class="category-item-link">Thịnh Hành</a>
                                </div>
                                <div class="category-item">
                                    <a href="" class="category-item-link">Đọc Nhiều</a>
                                </div>
                                <div class="category-item">
                                    <a href="" class="category-item-link">Tặng Thưởng</a>
                                </div>
                                <div class="category-item">
                                    <a href="" class="category-item-link">Đề Cử</a>
                                </div>
                                <div class="category-item">
                                    <a href="" class="category-item-link">Yêu Thích</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ===========search========= -->
                    <div class="header__search">
                        <form class="header__search-input">
                            <input type="text" name="header__search-input" autocomplete="off" placeholder="Tìm Kiếm">
                            <i class="fas fa-search header__search-icon"></i>
                        </form>
                    </div>
    
                    <div class="header__right">
                        <a href="" class="header__upload">
                            <div class="block-icon">
                                <i class="fas fa-upload"></i>
                                <span>Đăng Truyện</span>
                            </div>
                        </a>
        
                        <!-- ========đăng nhập,đăng kí=========== -->
                        <div class="header__login header__form">Đăng Nhập</div>
                        <div class="header__register header__form">Đăng Ký</div>
    
                        <!-- ======notify===== -->
                        <!--<div class="header__notify">
                            <div class="header__notify-icon">
                                <i class="fas fa-bell"></i>
                                <div class="notify-number">12</div>
                            </div>
                            
                            <ul class="header__notify-content-main category">
                                <li class="category-item watched">
                                    <div class="icon-cricle"></div>
                                    <a href="" class="category-item-link">Đức vừa trả lời bình luận của bạn</a>
                                </li>
                                <li class="category-item">
                                    <div class="icon-cricle"></div>
                                    <a href="" class="category-item-link">Truyện bạn đăng đang ở top 1 bảng tháng</a>
                                </li>
                                <li class="category-item">
                                    <div class="icon-cricle"></div>
                                    <a href="" class="category-item-link">Nhân dịp năm mới, thân chúc chư vị đạo hữu một năm mới An Khang, Thịnh Vượng</a>
                                </li>
                                <li class="category-item">
                                    <div class="icon-cricle"></div>
                                    <a href="" class="category-item-link">Nhân dịp năm mới, thân chúc chư vị đạo hữu một năm mới An Khang, Thịnh Vượng</a>
                                </li>
                                <li class="category-item">
                                    <div class="icon-cricle"></div>
                                    <a href="" class="category-item-link">Nhân dịp năm mới, thân chúc chư vị đạo hữu một năm mới An Khang, Thịnh Vượng</a>
                                </li>
                                <li class="category-item notify-hollow">
                                    <i class="fas fa-box-open"></i>
                                    <span>Bạn chưa có thông báo nào!</span>
                                </li>
                                <div class="header__notify-content-footer">
                                    <span>Xem tất cả</span>
                                </div>
                            </ul>
                            
                        </div>-->
    
                        <!-- ========user======== -->
                        <!-- <div class="header__user">
                            <div class="header__user-avt">
                                <img src="https://static.cdnno.com/user/d6cebf19fbb6661f86b87df067ab7bc2/50.jpg?1598008352" alt="">
                            </div>
                            <div class="header__user-name">
                                <div class="header__user-name-text">Đức Ngọc</div>
                            </div>
    
                            <div class="header__user-content category">
                                <div class="category-item">
                                    <a href="" class="category-item-link">Hồ Sơ</a>
                                </div>
                                <div class="category-item">
                                    <a href="" class="category-item-link">Tủ Truyện</a>
                                </div>
                                <div class="category-item">
                                    <a href="" class="category-item-link">Cài Đặt</a>
                                </div>
                                <div class="category-item">
                                    <a href="" class="category-item-link">Nhận Thưởng</a>
                                </div>
                                <div class="category-item">
                                    <a href="" class="category-item-link">Đăng Xuất</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </header>
    
                <header class="header__responsive d-lg-none">
                    <a href="index.html" class="header__responsive-logo">
                        <img src="https://metruyenchu.com/assets/images/logo-domain.png?260329" alt="">
                    </a>
    
                    <input type="checkbox" id="check__search-responsive" hidden>
                    <input type="checkbox" id="check__nav-responsive" hidden>
                    <div class="header__responsive-right">
                        <label for="check__search-responsive" class="header__responsive-search" style="margin-bottom: 0;">
                            <div class="header__responsive-search-icon">
                                <i class="fas fa-search"></i>
                                <i class="fa-solid fa-x"></i>
                            </div>
                        </label>
                        <label for="check__nav-responsive" class="mb-0 header__responsive-nav">
                            <i class="fas fa-bars"></i>
                            <i class="fa-solid fa-x"></i>
                        </label>
                    </div>
                    <div class="header__responsive-search-content">
                        <div class="header__responsive-search-input">
                            <form action="" method="post">
                                <input type="text" placeholder="Tìm kiếm tên truyện hoặc tên tác giả">
                                <div class="header__responsive-search-input-icon">
                                    <i class="fas fa-search"></i>
                                </div>
                            </form>
                        </div>
                    </div>
    
                    <div class="header__responsive-nav-content">
                        <input type="checkbox" id="check__nav-rank-child" hidden>
                        <input type="checkbox" id="check__nav-category-child" hidden>
                        <div class="header__responsive-nav-item">
                            <div class="header__responsive-nav-item-text header__login">Đăng Nhập</div>
                        </div>
                        <div class="header__responsive-nav-item">
                            <div class="header__responsive-nav-item-text header__register">Đăng Ký</div>
                        </div>
                        <div class="header__responsive-nav-item">
                            <div class="header__responsive-nav-item-icon">
                                <i class="fa-solid fa-ranking-star"></i>
                            </div>
                            <label for="check__nav-rank-child" class="mb-0 header__responsive-nav-item-text">Bảng Xếp Hạng</label>
                            <div class="header__responsive-nav-item-icon ml-auto">
                                <i class="fa-solid fa-angle-down"></i>
                            </div>
                        </div>
    
                        <div class="header__responsive-nav-item-child check__nav-rank-child">
                            <div class="header__responsive-nav-item-child-text">Đọc Nhiều</div>
                            <div class="header__responsive-nav-item-child-text">Tặng Thưởng</div>
                            <div class="header__responsive-nav-item-child-text">Đề Cử</div>
                            <div class="header__responsive-nav-item-child-text">Yêu Thích</div>
                            <div class="header__responsive-nav-item-child-text">Thảo Luận</div>
                        </div>
                        <div class="header__responsive-nav-item">
                            <div class="header__responsive-nav-item-icon">
                                <i class="fa-solid fa-table-cells-large"></i>
                            </div>
                            <label for="check__nav-category-child" class=" mb-0 header__responsive-nav-item-text">Thể Loại</label>
                            <div class="header__responsive-nav-item-icon ml-auto">
                                <i class="fa-solid fa-angle-down"></i>
                            </div>
                        </div>
                        <div class="header__responsive-nav-item-child check__nav-category-child">
                            <a href="HTML/category.html" class="header__responsive-nav-item-child-text">Tất Cả</a>
                            <div class="header__responsive-nav-item-child-text">Huyền Huyễn</div>
                            <div class="header__responsive-nav-item-child-text">Tiên Hiệp</div>
                            <div class="header__responsive-nav-item-child-text">Võng Du</div>
                            <div class="header__responsive-nav-item-child-text">Cạnh Kỹ</div>
                            <div class="header__responsive-nav-item-child-text">Đồng Nhân</div>
                            <div class="header__responsive-nav-item-child-text">Trinh Thám</div>
                            <div class="header__responsive-nav-item-child-text">Đời Thường</div>
                            <div class="header__responsive-nav-item-child-text">Trọng Sinh</div>
                            <div class="header__responsive-nav-item-child-text">Mạt Thế</div>
                            <div class="header__responsive-nav-item-child-text">Huyền Nghi</div>
                            <div class="header__responsive-nav-item-child-text">Kỳ Ảo</div>
                        </div>
                    </div>
    
                    <div class="header__responsive-bar">
                        <div class="row w-100" style="padding: 0 15px;">
                            <div class="col-4">
                                <a href="" class="header__responsive-bar-item">
                                    <div class="header__responsive-bar-icon">
                                        <i class="fa-solid fa-table-cells-large"></i>
                                    </div>
                                    <div class="header__responsive-bar-text">Danh Sách</div>
                                </a>
                            </div>
        
                            <div class="col-4">
                                <a href="" class="header__responsive-bar-item">
                                    <div class="header__responsive-bar-icon">
                                        <i class="fa-solid fa-ranking-star"></i>
                                    </div>
                                    <div class="header__responsive-bar-text">
                                        Xếp Hạng                                
                                    </div>
                                </a>
                            </div>
        
                            <div class="col-4">
                                <a href="" class="header__responsive-bar-item">
                                    <div class="header__responsive-bar-icon">
                                        <i class="fa-solid fa-paper-plane"></i>
                                    </div>
                                    <div class="header__responsive-bar-text">
                                        Đăng Truyện
                                    </div>
                                </a>
                            </div>
    
                        </div>
                    </div>
                </header>
            </div>
        </div>
        <div class="content">
            <!-- ===== banner ====== -->
            <div class="banner d-none d-md-block">
                <div class="banner__img"></div>
            </div>

            <div class="container-fluid p-0">
                <div class="container block-content">
                    <div class="content__section1">
                        <div class="row">
                            <div class="col-12 col-lg-8 col-xl-8 section1-left">
                                <div class="content__section-header">
                                    <div class="content__section-title title">Biên Tập Viên Đề Cử</div>
                                    <a href="" class="content__section-link link">Xem Tất Cả</a>
                                </div>

                                <div class="content__section1-main">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="content__section1-main-item">
                                                <a href="HTML/product.html" class="content__section1-main-item-img">
                                                    <img src="https://static.cdnno.com/poster/trach-nhat-phi-thang/150.jpg?1649217741" alt="">
                                                </a>
                                                <div class="content__section1-main-item-content">
                                                    <a href="HTML/product.html" class="content__section1-main-item-title text">Tu Luyện Theo Đấu Phá Thương Khung Bắt Đầu</a>
                                                    <div class="content__section1-main-item-demo">
                                                        Hệ thống nơi tay, thế giới ta có, thiếu niên người mang vạn năng hệ thống, theo Đấu Phá Thương Khung bắt đầu tu luyện, đây là một người hiện đại tại dị giới tu hành cố sự. . .
                                                    </div>
                                                    <div class="content__section1-main-item-footer">
                                                        <div class="content__section1-main-item-master">
                                                            <i class="fas fa-user-edit"></i>
                                                            Giang Hồ Hữu Tửu
                                                        </div>
                                                        <div class="content__section1-main-item-category btn">Đồng Nhân</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="content__section1-main-item">
                                                <a href="HTML/product.html" class="content__section1-main-item-img">
                                                    <img src="https://static.cdnno.com/poster/trach-nhat-phi-thang/150.jpg?1649217741" alt="">
                                                </a>
                                                <div class="content__section1-main-item-content">
                                                    <a href="HTML/product.html" class="content__section1-main-item-title text">Tu Luyện Theo Đấu Phá Thương Khung Bắt Đầu</a>
                                                    <div class="content__section1-main-item-demo">
                                                        Hệ thống nơi tay, thế giới ta có, thiếu niên người mang vạn năng hệ thống, theo Đấu Phá Thương Khung bắt đầu tu luyện, đây là một người hiện đại tại dị giới tu hành cố sự. . .
                                                    </div>
                                                    <div class="content__section1-main-item-footer">
                                                        <div class="content__section1-main-item-master">
                                                            <i class="fas fa-user-edit"></i>
                                                            Giang Hồ Hữu Tửu
                                                        </div>
                                                        <div class="content__section1-main-item-category btn">Đồng Nhân</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="content__section1-main-item">
                                                <a href="HTML/product.html" class="content__section1-main-item-img">
                                                    <img src="https://static.cdnno.com/poster/trach-nhat-phi-thang/150.jpg?1649217741" alt="">
                                                </a>
                                                <div class="content__section1-main-item-content">
                                                    <a href="HTML/product.html" class="content__section1-main-item-title text">Tu Luyện Theo Đấu Phá Thương Khung Bắt Đầu</a>
                                                    <div class="content__section1-main-item-demo">
                                                        Hệ thống nơi tay, thế giới ta có, thiếu niên người mang vạn năng hệ thống, theo Đấu Phá Thương Khung bắt đầu tu luyện, đây là một người hiện đại tại dị giới tu hành cố sự. . .
                                                    </div>
                                                    <div class="content__section1-main-item-footer">
                                                        <div class="content__section1-main-item-master">
                                                            <i class="fas fa-user-edit"></i>
                                                            Giang Hồ Hữu Tửu
                                                        </div>
                                                        <div class="content__section1-main-item-category btn">Đồng Nhân</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="content__section1-main-item">
                                                <a href="HTML/product.html" class="content__section1-main-item-img">
                                                    <img src="https://static.cdnno.com/poster/trach-nhat-phi-thang/150.jpg?1649217741" alt="">
                                                </a>
                                                <div class="content__section1-main-item-content">
                                                    <a href="HTML/product.html" class="content__section1-main-item-title text">Tu Luyện Theo Đấu Phá Thương Khung Bắt Đầu</a>
                                                    <div class="content__section1-main-item-demo">
                                                        Hệ thống nơi tay, thế giới ta có, thiếu niên người mang vạn năng hệ thống, theo Đấu Phá Thương Khung bắt đầu tu luyện, đây là một người hiện đại tại dị giới tu hành cố sự. . .
                                                    </div>
                                                    <div class="content__section1-main-item-footer">
                                                        <div class="content__section1-main-item-master">
                                                            <i class="fas fa-user-edit"></i>
                                                            Giang Hồ Hữu Tửu
                                                        </div>
                                                        <div class="content__section1-main-item-category btn">Đồng Nhân</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="content__section1-main-item">
                                                <a href="HTML/product.html" class="content__section1-main-item-img">
                                                    <img src="https://static.cdnno.com/poster/trach-nhat-phi-thang/150.jpg?1649217741" alt="">
                                                </a>
                                                <div class="content__section1-main-item-content">
                                                    <a href="HTML/product.html" class="content__section1-main-item-title text">Tu Luyện Theo Đấu Phá Thương Khung Bắt Đầu</a>
                                                    <div class="content__section1-main-item-demo">
                                                        Hệ thống nơi tay, thế giới ta có, thiếu niên người mang vạn năng hệ thống, theo Đấu Phá Thương Khung bắt đầu tu luyện, đây là một người hiện đại tại dị giới tu hành cố sự. . .
                                                    </div>
                                                    <div class="content__section1-main-item-footer">
                                                        <div class="content__section1-main-item-master">
                                                            <i class="fas fa-user-edit"></i>
                                                            Giang Hồ Hữu Tửu
                                                        </div>
                                                        <div class="content__section1-main-item-category btn">Đồng Nhân</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="content__section1-main-item">
                                                <a href="HTML/product.html" class="content__section1-main-item-img">
                                                    <img src="https://static.cdnno.com/poster/trach-nhat-phi-thang/150.jpg?1649217741" alt="">
                                                </a>
                                                <div class="content__section1-main-item-content">
                                                    <a href="HTML/product.html" class="content__section1-main-item-title text">Tu Luyện Theo Đấu Phá Thương Khung Bắt Đầu</a>
                                                    <div class="content__section1-main-item-demo">
                                                        Hệ thống nơi tay, thế giới ta có, thiếu niên người mang vạn năng hệ thống, theo Đấu Phá Thương Khung bắt đầu tu luyện, đây là một người hiện đại tại dị giới tu hành cố sự. . .
                                                    </div>
                                                    <div class="content__section1-main-item-footer">
                                                        <div class="content__section1-main-item-master">
                                                            <i class="fas fa-user-edit"></i>
                                                            Giang Hồ Hữu Tửu
                                                        </div>
                                                        <div class="content__section1-main-item-category btn">Đồng Nhân</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="content__section1-main-item">
                                                <a href="HTML/product.html" class="content__section1-main-item-img">
                                                    <img src="https://static.cdnno.com/poster/trach-nhat-phi-thang/150.jpg?1649217741" alt="">
                                                </a>
                                                <div class="content__section1-main-item-content">
                                                    <a href="HTML/product.html" class="content__section1-main-item-title text">Tu Luyện Theo Đấu Phá Thương Khung Bắt Đầu</a>
                                                    <div class="content__section1-main-item-demo">
                                                        Hệ thống nơi tay, thế giới ta có, thiếu niên người mang vạn năng hệ thống, theo Đấu Phá Thương Khung bắt đầu tu luyện, đây là một người hiện đại tại dị giới tu hành cố sự. . .
                                                    </div>
                                                    <div class="content__section1-main-item-footer">
                                                        <div class="content__section1-main-item-master">
                                                            <i class="fas fa-user-edit"></i>
                                                            Giang Hồ Hữu Tửu
                                                        </div>
                                                        <div class="content__section1-main-item-category btn">Đồng Nhân</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="content__section1-main-item">
                                                <a href="HTML/product.html" class="content__section1-main-item-img">
                                                    <img src="https://static.cdnno.com/poster/trach-nhat-phi-thang/150.jpg?1649217741" alt="">
                                                </a>
                                                <div class="content__section1-main-item-content">
                                                    <a href="HTML/product.html" class="content__section1-main-item-title text">Tu Luyện Theo Đấu Phá Thương Khung Bắt Đầu</a>
                                                    <div class="content__section1-main-item-demo">
                                                        Hệ thống nơi tay, thế giới ta có, thiếu niên người mang vạn năng hệ thống, theo Đấu Phá Thương Khung bắt đầu tu luyện, đây là một người hiện đại tại dị giới tu hành cố sự. . .
                                                    </div>
                                                    <div class="content__section1-main-item-footer">
                                                        <div class="content__section1-main-item-master">
                                                            <i class="fas fa-user-edit"></i>
                                                            Giang Hồ Hữu Tửu
                                                        </div>
                                                        <div class="content__section1-main-item-category btn">Đồng Nhân</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 d-none d-lg-block section1-right">
                                <div class="content__section1-top">
                                    <div class="content__section-header">
                                        <div class="content__section-title title">Đang Đọc</div>
                                        <a href="" class="content__section-link link">Xem Tất Cả</a>
                                    </div>
    
                                    <div class="content__section1-read">
                                        <div class="content__section1-read-item">
                                            <div class="content__section1-read-img">
                                                <img src="https://static.cdnno.com/poster/dau-la-dai-luc-iv-chung-cuc-dau-la/150.jpg?1585206132" alt="">
                                            </div>
                                            <div class="content__section1-read-content">
                                                <div class="content__section1-main-item-title text">Bán Tiên</div>
                                                <div class="content__section1-read-chap">
                                                    Đã Đọc: 12/615
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </div>
                                            <a href="" class="content__section1-read-continue">Đọc Tiếp</a>
                                        </div>
                                        <div class="content__section1-read-item">
                                            <div class="content__section1-read-img">
                                                <img src="https://static.cdnno.com/poster/dau-la-dai-luc-iv-chung-cuc-dau-la/150.jpg?1585206132" alt="">
                                            </div>
                                            <div class="content__section1-read-content">
                                                <div class="content__section1-main-item-title text">Bán Tiên</div>
                                                <div class="content__section1-read-chap">
                                                    Đã Đọc: 12/615
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </div>
                                            <a href="" class="content__section1-read-continue">Đọc Tiếp</a>
                                        </div>
                                        <div class="content__section1-read-item">
                                            <div class="content__section1-read-img">
                                                <img src="https://static.cdnno.com/poster/dau-la-dai-luc-iv-chung-cuc-dau-la/150.jpg?1585206132" alt="">
                                            </div>
                                            <div class="content__section1-read-content">
                                                <div class="content__section1-main-item-title text">Bán Tiên</div>
                                                <div class="content__section1-read-chap">
                                                    Đã Đọc: 12/615
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </div>
                                            <a href="" class="content__section1-read-continue">Đọc Tiếp</a>
                                        </div>
                                        <div class="content__section1-read-item">
                                            <div class="content__section1-read-img">
                                                <img src="https://static.cdnno.com/poster/dau-la-dai-luc-iv-chung-cuc-dau-la/150.jpg?1585206132" alt="">
                                            </div>
                                            <div class="content__section1-read-content">
                                                <div class="content__section1-main-item-title text">Bán Tiên</div>
                                                <div class="content__section1-read-chap">
                                                    Đã Đọc: 12/615
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </div>
                                            <a href="" class="content__section1-read-continue">Đọc Tiếp</a>
                                        </div>
                                        <div class="content__section1-read-item">
                                            <div class="content__section1-read-img">
                                                <img src="https://static.cdnno.com/poster/dau-la-dai-luc-iv-chung-cuc-dau-la/150.jpg?1585206132" alt="">
                                            </div>
                                            <div class="content__section1-read-content">
                                                <div class="content__section1-main-item-title text">Bán Tiên</div>
                                                <div class="content__section1-read-chap">
                                                    Đã Đọc: 12/615
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </div>
                                            <a href="" class="content__section1-read-continue">Đọc Tiếp</a>
                                        </div>

                                        <!-- Không có truyện đã đọc  -->
                                        <!-- <div class="content__section1-read-item no-read">
                                            <a href="" class="no-read-btn">Bắt đầu đọc truyện nào
                                                <div class="no-read-btn__block-icon">
                                                    <div class="no-read-btn__icon">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </div>
                                                    <div class="no-read-btn__icon">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div> -->
                                        <!-- chưa login  -->
                                        <!-- <div class="content__section1-read-item no-login">
                                            <i class="fas fa-frown"></i> Bạn cần đăng nhập để sử dụng chức năng này
                                        </div> -->
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
                        <div class="content__section-header">
                            <div class="content__section-title title">Mới Cập Nhập</div>
                            <a href="" class="content__section-link link">Xem Tất Cả</a>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="content__section2-item">
                                    <div class="content__section2-item-category-block">
                                        <div class="limit1 content__section2-item-category">Huyền Huyễn</div>
                                    </div>
                                    <div class="content__section2-item-name-block">
                                        <div class="limit1 content__section2-item-name text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum laboriosam architecto quisquam libero, est laudantium illo ex rem eius commodi repudiandae esse placeat deleniti eos a aut cumque. Sit, ut!</div>
                                    </div>
                                    <div class="col-3">
                                        <a href="" class="limit1 content__section2-item-name-chap text">	
                                            Chương 622: Dương Ngục kiện thứ nhất pháp</a>
                                    </div>
                                    <div class="col-2">
                                        <div class="limit1 content__section2-item-master">Dược Thiên Sầu</div>
                                    </div>
                                    <div class="col-1">
                                        <div class="limit1 content__section2-item-user">Ngọc Đức</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="limit1 content__section2-item-time">3 phút trước</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="content__section2-item">
                                    <div class="content__section2-item-category-block">
                                        <div class="limit1 content__section2-item-category">Huyền Huyễn</div>
                                    </div>
                                    <div class="content__section2-item-name-block">
                                        <div class="limit1 content__section2-item-name text">Bán Tiên</div>
                                    </div>
                                    <div class="col-3">
                                        <a href="" class="limit1 content__section2-item-name-chap text">	
                                            Chương 622: Dương Ngục kiện thứ nhất pháp</a>
                                    </div>
                                    <div class="col-2">
                                        <div class="limit1 content__section2-item-master">Dược Thiên Sầu</div>
                                    </div>
                                    <div class="col-1">
                                        <div class="limit1 content__section2-item-user">Ngọc Đức</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="limit1 content__section2-item-time">3 phút trước</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="content__section2-item">
                                    <div class="content__section2-item-category-block">
                                        <div class="limit1 content__section2-item-category">Huyền Huyễn</div>
                                    </div>
                                    <div class="content__section2-item-name-block">
                                        <div class="limit1 content__section2-item-name text">Bán Tiên</div>
                                    </div>
                                    <div class="col-3">
                                        <a href="" class="limit1 content__section2-item-name-chap text">	
                                            Chương 622: Dương Ngục kiện thứ nhất pháp</a>
                                    </div>
                                    <div class="col-2">
                                        <div class="limit1 content__section2-item-master">Dược Thiên Sầu</div>
                                    </div>
                                    <div class="col-1">
                                        <div class="limit1 content__section2-item-user">Ngọc Đức</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="limit1 content__section2-item-time">3 phút trước</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="content__section2-item">
                                    <div class="content__section2-item-category-block">
                                        <div class="limit1 content__section2-item-category">Huyền Huyễn</div>
                                    </div>
                                    <div class="content__section2-item-name-block">
                                        <div class="limit1 content__section2-item-name text">Bán Tiên</div>
                                    </div>
                                    <div class="col-3">
                                        <a href="" class="limit1 content__section2-item-name-chap text">	
                                            Chương 622: Dương Ngục kiện thứ nhất pháp</a>
                                    </div>
                                    <div class="col-2">
                                        <div class="limit1 content__section2-item-master">Dược Thiên Sầu</div>
                                    </div>
                                    <div class="col-1">
                                        <div class="limit1 content__section2-item-user">Ngọc Đức</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="limit1 content__section2-item-time">3 phút trước</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="content__section2-item">
                                    <div class="content__section2-item-category-block">
                                        <div class="limit1 content__section2-item-category">Huyền Huyễn</div>
                                    </div>
                                    <div class="content__section2-item-name-block">
                                        <div class="limit1 content__section2-item-name text">Bán Tiên</div>
                                    </div>
                                    <div class="col-3">
                                        <a href="" class="limit1 content__section2-item-name-chap text">	
                                            Chương 622: Dương Ngục kiện thứ nhất pháp</a>
                                    </div>
                                    <div class="col-2">
                                        <div class="limit1 content__section2-item-master">Dược Thiên Sầu</div>
                                    </div>
                                    <div class="col-1">
                                        <div class="limit1 content__section2-item-user">Ngọc Đức</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="limit1 content__section2-item-time">3 phút trước</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="content__section2-item">
                                    <div class="content__section2-item-category-block">
                                        <div class="limit1 content__section2-item-category">Huyền Huyễn</div>
                                    </div>
                                    <div class="content__section2-item-name-block">
                                        <div class="limit1 content__section2-item-name text">Bán Tiên</div>
                                    </div>
                                    <div class="col-3">
                                        <a href="" class="limit1 content__section2-item-name-chap text">	
                                            Chương 622: Dương Ngục kiện thứ nhất pháp</a>
                                    </div>
                                    <div class="col-2">
                                        <div class="limit1 content__section2-item-master">Dược Thiên Sầu</div>
                                    </div>
                                    <div class="col-1">
                                        <div class="limit1 content__section2-item-user">Ngọc Đức</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="limit1 content__section2-item-time">3 phút trước</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="content__section2-item">
                                    <div class="content__section2-item-category-block">
                                        <div class="limit1 content__section2-item-category">Huyền Huyễn</div>
                                    </div>
                                    <div class="content__section2-item-name-block">
                                        <div class="limit1 content__section2-item-name text">Bán Tiên</div>
                                    </div>
                                    <div class="col-3">
                                        <a href="" class="limit1 content__section2-item-name-chap text">	
                                            Chương 622: Dương Ngục kiện thứ nhất pháp</a>
                                    </div>
                                    <div class="col-2">
                                        <div class="limit1 content__section2-item-master">Dược Thiên Sầu</div>
                                    </div>
                                    <div class="col-1">
                                        <div class="limit1 content__section2-item-user">Ngọc Đức</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="limit1 content__section2-item-time">3 phút trước</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="content__section2-item">
                                    <div class="content__section2-item-category-block">
                                        <div class="limit1 content__section2-item-category">Huyền Huyễn</div>
                                    </div>
                                    <div class="content__section2-item-name-block">
                                        <div class="limit1 content__section2-item-name text">Bán Tiên</div>
                                    </div>
                                    <div class="col-3">
                                        <a href="" class="limit1 content__section2-item-name-chap text">	
                                            Chương 622: Dương Ngục kiện thứ nhất pháp</a>
                                    </div>
                                    <div class="col-2">
                                        <div class="limit1 content__section2-item-master">Dược Thiên Sầu</div>
                                    </div>
                                    <div class="col-1">
                                        <div class="limit1 content__section2-item-user">Ngọc Đức</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="limit1 content__section2-item-time">3 phút trước</div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                    <div class="content__section3">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                <div class="content__section3-block content__section3-block1">
                                    <div class="content__section-header">
                                        <div class="content__section-title title">Đọc Nhiều Tuần</div>
                                        <a href="" class="content__section-link link">Xem Tất Cả</a>
                                    </div>
                                    <div class="content__section3-list">
                                        <div class="content__section3-item especially">
                                            <div class="content__section3-item-rank">
                                                <div class="badge-rank">
                                                    <i class="fas fa-certificate"></i>
                                                </div>
                                            </div>
                                            <div class="content__section3-item-main">
                                                <div class="content__section3-item-title">
                                                    <span class="limit1 text">Đỉnh Cấp Khí Vận, Lặng Lẽ Tu</span>
                                                </div>
                                                <div class="content__section3-item-view d-flex">
                                                    <span class="limit1">455,555</span>
                                                    <i class="fas fa-glasses"></i>
                                                </div>
                                                <div class="content__section3-item-master d-flex">
                                                    <i class="fas fa-user-edit"></i>
                                                    <span class="limit1">Nhậm Ngã Tiếu</span>
                                                </div>
                                                <div class="content__section3-item-category d-flex">
                                                    <i class="fas fa-book"></i>
                                                    Tiên Hiệp
                                                </div>
                                            </div>
                                            <div class="content__section3-item-img">
                                                <img src="https://static.cdnno.com/poster/dinh-cap-khi-van-lang-le-tu-luyen-ngan-nam/150.jpg?1614159439" alt="">
                                            </div>
                                        </div>
                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                <div class="badge-rank silver">
                                                    <i class="fas fa-certificate"></i>
                                                </div>
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>
                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                <div class="badge-rank cu">
                                                    <i class="fas fa-certificate"></i>
                                                </div>
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                4
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                5
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                6
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                7
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                8
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                9
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                10
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                <div class="content__section3-block content__section3-block2">
                                    <div class="content__section-header">
                                        <div class="content__section-title title">Thịnh Hành Tuần</div>
                                        <a href="" class="content__section-link link">Xem Tất Cả</a>
                                    </div>
                                    <div class="content__section3-list">
                                        <div class="content__section3-item especially">
                                            <div class="content__section3-item-rank">
                                                <div class="badge-rank">
                                                    <i class="fas fa-certificate"></i>
                                                </div>
                                            </div>
                                            <div class="content__section3-item-main">
                                                <div class="content__section3-item-title">
                                                    <span class="limit1 text">Đỉnh Cấp Khí Vận, Lặng Lẽ Tu</span>
                                                </div>
                                                <div class="content__section3-item-view d-flex">
                                                    <span class="limit1">455,555</span>
                                                    <i class="fas fa-glasses"></i>
                                                </div>
                                                <div class="content__section3-item-master d-flex">
                                                    <i class="fas fa-user-edit"></i>
                                                    <span class="limit1">Nhậm Ngã Tiếu</span>
                                                </div>
                                                <div class="content__section3-item-category d-flex">
                                                    <i class="fas fa-book"></i>
                                                    Tiên Hiệp
                                                </div>
                                            </div>
                                            <div class="content__section3-item-img">
                                                <img src="https://static.cdnno.com/poster/dinh-cap-khi-van-lang-le-tu-luyen-ngan-nam/150.jpg?1614159439" alt="">
                                            </div>
                                        </div>
                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                <div class="badge-rank silver">
                                                    <i class="fas fa-certificate"></i>
                                                </div>
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>
                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                <div class="badge-rank cu">
                                                    <i class="fas fa-certificate"></i>
                                                </div>
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                4
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                5
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                6
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                7
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                8
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                9
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                10
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                <div class="content__section3-block content__section3-block3">
                                    <div class="content__section-header">
                                        <div class="content__section-title title">Đề Cử Tuần</div>
                                        <a href="" class="content__section-link link">Xem Tất Cả</a>
                                    </div>
                                    <div class="content__section3-list">
                                        <div class="content__section3-item especially">
                                            <div class="content__section3-item-rank">
                                                <div class="badge-rank">
                                                    <i class="fas fa-certificate"></i>
                                                </div>
                                            </div>
                                            <div class="content__section3-item-main">
                                                <div class="content__section3-item-title">
                                                    <span class="limit1 text">Đỉnh Cấp Khí Vận, Lặng Lẽ Tu</span>
                                                </div>
                                                <div class="content__section3-item-view d-flex">
                                                    <span class="limit1">455,555</span>
                                                    <i class="fas fa-glasses"></i>
                                                </div>
                                                <div class="content__section3-item-master d-flex">
                                                    <i class="fas fa-user-edit"></i>
                                                    <span class="limit1">Nhậm Ngã Tiếu</span>
                                                </div>
                                                <div class="content__section3-item-category d-flex">
                                                    <i class="fas fa-book"></i>
                                                    Tiên Hiệp
                                                </div>
                                            </div>
                                            <div class="content__section3-item-img">
                                                <img src="https://static.cdnno.com/poster/dinh-cap-khi-van-lang-le-tu-luyen-ngan-nam/150.jpg?1614159439" alt="">
                                            </div>
                                        </div>
                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                <div class="badge-rank silver">
                                                    <i class="fas fa-certificate"></i>
                                                </div>
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>
                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                <div class="badge-rank cu">
                                                    <i class="fas fa-certificate"></i>
                                                </div>
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                4
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                5
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                6
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                7
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                8
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                9
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>

                                        <div class="content__section3-item">
                                            <div class="content__section3-item-rank">
                                                10
                                            </div>
                                            <div class="content__section3-item-main d-flex">
                                                <div class="limit1 content__section3-item-title text">Coi Mắt Đi Nhầm Bàn, Ta Bị Đối</div>
                                                <div class="limit1 content__section3-item-view">225,666</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content__section1 content__section4">
                        <div class="row">
                            <div class="col-12 col-lg-8 col-xl-8 section1-left order-1">
                                <div class="content__section-header">
                                    <div class="content__section-title title">Mới Đăng</div>
                                    <a href="" class="content__section-link link">Xem Tất Cả</a>
                                </div>

                                <div class="content__section1-main">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="content__section1-main-item">
                                                <div class="content__section1-main-item-img">
                                                    <img src="https://static.cdnno.com/poster/cai-nay-vo-thanh-sieu-co-to-chat/150.jpg?1639326714" alt="">
                                                </div>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="content__section1-main-item">
                                                <div class="content__section1-main-item-img">
                                                    <img src="https://static.cdnno.com/poster/cai-nay-vo-thanh-sieu-co-to-chat/150.jpg?1639326714" alt="">
                                                </div>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="content__section1-main-item">
                                                <div class="content__section1-main-item-img">
                                                    <img src="https://static.cdnno.com/poster/cai-nay-vo-thanh-sieu-co-to-chat/150.jpg?1639326714" alt="">
                                                </div>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="content__section1-main-item">
                                                <div class="content__section1-main-item-img">
                                                    <img src="https://static.cdnno.com/poster/cai-nay-vo-thanh-sieu-co-to-chat/150.jpg?1639326714" alt="">
                                                </div>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="content__section1-main-item">
                                                <div class="content__section1-main-item-img">
                                                    <img src="https://static.cdnno.com/poster/cai-nay-vo-thanh-sieu-co-to-chat/150.jpg?1639326714" alt="">
                                                </div>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="content__section1-main-item">
                                                <div class="content__section1-main-item-img">
                                                    <img src="https://static.cdnno.com/poster/cai-nay-vo-thanh-sieu-co-to-chat/150.jpg?1639326714" alt="">
                                                </div>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="content__section1-main-item">
                                                <div class="content__section1-main-item-img">
                                                    <img src="https://static.cdnno.com/poster/cai-nay-vo-thanh-sieu-co-to-chat/150.jpg?1639326714" alt="">
                                                </div>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="content__section1-main-item">
                                                <div class="content__section1-main-item-img">
                                                    <img src="https://static.cdnno.com/poster/cai-nay-vo-thanh-sieu-co-to-chat/150.jpg?1639326714" alt="">
                                                </div>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 d-none d-lg-block section1-right order-0">
                                <div class="content__section1-top">
                                    <div class="content__section-header">
                                        <div class="content__section-title title">Mới Đánh Giá</div>
                                        <a href="" class="content__section-link link">Xem Tất Cả</a>
                                    </div>
    
                                    <div class="content__section4-assess">
                                        <div class="content__section4-assess-item">
                                            <div class="content__section4-assess-item-top">
                                                <div class="content__section4-assess-item-avt" style="background-image: url(https://static.cdnno.com/user/default/50.jpg);"></div>
                                                <div class="content__section4-assess-item-information">
                                                    <div class="content__section4-assess-item-nameUser">
                                                        <span style="font-weight: 600; color: #333;margin-right: 5px;" class="limit1">Boooom</span>
                                                        đánh giá
                                                    </div>
                                                    <div class="content__section4-assess-item-nameProduct limit1">Toàn Chức Nghệ Thuật Gia</div>
                                                </div>
                                                <div class="content__section4-assess-item-point">5.00</div>
                                            </div>
                                            <div class="content__section4-assess-item-bottom limit3">
                                                thật là đặc sắc cốt truyện, main tư tưởng hiện đại nên lúc bth k thích ứng đc thế giới mới, cơ mà lúc có quyền hành thì lãnh địa sẽ phát triển rất tốt. à
                                            </div>
                                        </div>
                                        <div class="content__section4-assess-item">
                                            <div class="content__section4-assess-item-top">
                                                <div class="content__section4-assess-item-avt" style="background-image: url(https://static.cdnno.com/user/default/50.jpg);"></div>
                                                <div class="content__section4-assess-item-information">
                                                    <div class="content__section4-assess-item-nameUser">
                                                        <span style="font-weight: 600; color: #333;margin-right: 5px;" class="limit1">Boooom</span>
                                                        đánh giá
                                                    </div>
                                                    <div class="content__section4-assess-item-nameProduct limit1">Toàn Chức Nghệ Thuật Gia</div>
                                                </div>
                                                <div class="content__section4-assess-item-point">5.00</div>
                                            </div>
                                            <div class="content__section4-assess-item-bottom limit3">
                                                thật là đặc sắc cốt truyện, main tư tưởng hiện đại nên lúc bth k thích ứng đc thế giới mới, cơ mà lúc có quyền hành thì lãnh địa sẽ phát triển rất tốt. à
                                            </div>
                                        </div>
                                        <div class="content__section4-assess-item">
                                            <div class="content__section4-assess-item-top">
                                                <div class="content__section4-assess-item-avt" style="background-image: url(https://static.cdnno.com/user/default/50.jpg);"></div>
                                                <div class="content__section4-assess-item-information">
                                                    <div class="content__section4-assess-item-nameUser">
                                                        <span style="font-weight: 600; color: #333;margin-right: 5px;" class="limit1">Boooom</span>
                                                        đánh giá
                                                    </div>
                                                    <div class="content__section4-assess-item-nameProduct limit1">Toàn Chức Nghệ Thuật Gia</div>
                                                </div>
                                                <div class="content__section4-assess-item-point">5.00</div>
                                            </div>
                                            <div class="content__section4-assess-item-bottom limit3">
                                                thật là đặc sắc cốt truyện, main tư tưởng hiện đại nên lúc bth k thích ứng đc thế giới mới, cơ mà lúc có quyền hành thì lãnh địa sẽ phát triển rất tốt. à
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

        <!-- ====Chat===== -->
        <div class="admin-chat" title="Đặt câu hỏi cho Admin">
            <form method="post" class="admin-held">
                <div class="admin-held-input">
                    <div>Username</div>
                    <input type="text" value="Ngọc Đức" placeholder="Username">
                </div>
                <div class="admin-held-input">
                    <div>Email</div>
                    <input type="email" value="zerotwo13102001@gmail.com" placeholder="Email">
                </div>
                <div class="admin-held-input">
                    <div>Câu hỏi</div>
                    <textarea name="" id="" cols="30" rows="3" placeholder="Câu hỏi"></textarea>
                </div>
                <input type="submit" value="Gửi đi" class="admin-chat-submit">
            </form>
            <div class="admin-chat-icon">
                <div class="admin-chat-icon-item"><i class="fas fa-comment"></i></div>
                <div class="admin-chat-icon-item"><i class="fas fa-times"></i></div>
            </div>
        </div>

        <!-- ===modifier==== -->
        <div class="modifier modifier-err">
            <div class="modifier-icon">
                <i class="fas fa-exclamation-circle"></i>
            </div>
            <div class="modifier-text">
                <div class="modifier-title">Thực hiện thao tác không thành công</div>
                <div class="modifier-content">Bạn cần đăng nhập để thực hiện chức năng này</div>
            </div>
        </div>
        <div class="modifier modifier-success">
            <div class="modifier-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <div class="modifier-text">
                <div class="modifier-title">Đăng nhập thành công</div>
                <div class="modifier-content">Chào Đức, Chúc bạn đọc truyện vui vẻ!</div>
            </div>
        </div>

        <!-- === nhiệm vụ event: tet,moon,noel ==== -->
        <a href="" class="event active">
            <div class="event__content">
                <i class="fad fa-moon-stars"></i>
                <i class="fas fa-stocking"></i>
                <i class="far fa-piggy-bank"></i>
            </div>
        </a>

        <!-- =======modal====== -->
        <div class="modal">
            <div class="modal__overlay"></div>
            <div class="modal__content">
                <div class="modal__form modal__form-login">
                    <div class="modal__form-header">
                        <div class="modal__form-header-text active" id="modal__form-login">Đăng Nhập</div>
                        <div class="modal__form-header-text" id="modal__form-register">Đăng Ký</div>
                    </div>
                    <div class="modal__form-content">
                        <form method="post" id="formLogin" class="modal__form-content-main">
                            <div class="modal__form-input">
                                <div class="modal__form-input-text">
                                    <span style="color: var(--text)">Email</span>
                                </div>
                                <input type="email" placeholder="Nhập Email" name="login__email">
                                <span class="modal__form-err"></span>
                            </div>
                            <div class="modal__form-input form-err">
                                <div class="modal__form-input-text">
                                    <span>Password</span>
                                    <span class="modal__form-forgotPassBtn">Quên Mật Khẩu?</span>
                                </div>
                                <input type="password" placeholder="Nhập Mật Khẩu" name="login__pass">
                                <span class="modal__form-err"></span>
                            </div>

                            <div class="modal__form-checkbox">
                                <input type="checkbox" id="modal__form-checkbox" hidden>
                                <label for="modal__form-checkbox" class="modal__form-checkbox">
                                    <div class="modal__form-checkbox-block">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="modal__form-checkbox-text">Nhớ Mật Khẩu?</div>
                                </label>
                            </div>

                            <input type="submit" value="Đăng Nhập" class="modal__form-submit">
                        </form>
                    </div>
                    <div class="modal__form-footer">
                        <div class="modal__form-footer-text">Bạn chưa có tài khoản?</div>
                        <label for="modal__form-register">Đăng Ký Ngay</label>
                    </div>
                </div>
                <div class="modal__form modal__form-register">
                    <div class="modal__form-header">
                        <div class="modal__form-header-text active" id="modal__form-register">Đăng Ký</div>
                        <div class="modal__form-header-text" id="modal__form-login">Đăng Nhập</div>
                    </div>
                    <div class="modal__form-content">
                        <form method="post" id="formRegister" class="modal__form-content-main">
                            <div class="modal__form-input">
                                <div class="modal__form-input-text">
                                    <span>Email</span>
                                </div>
                                <input type="email" name="registerEmail" placeholder="Nhập Email">
                                <span class="modal__form-err"></span>
                            </div>
                            <div class="modal__form-input">
                                <div class="modal__form-input-text">
                                    <span>Username</span>
                                </div>
                                <input type="text" name="registerUsername" placeholder="Nhập username">
                                <span class="modal__form-err"></span>
                            </div>
                            <div class="modal__form-input">
                                <div class="modal__form-input-text">
                                    <span>Password</span>
                                </div>
                                <input type="text" name="registerPass" placeholder="Nhập Mật Khẩu">
                                <span class="modal__form-err"></span>
                            </div>

                            <div class="modal__form-input">
                                <div class="modal__form-input-text">
                                    <span>Nhập Lại Password</span>
                                </div>
                                <input type="text" name="registerPassConfirmed" placeholder="Nhập Mật Khẩu">
                                <span class="modal__form-err"></span>
                            </div>

                            <input type="submit" value="Đăng Ký" class="modal__form-submit">

                        </form>
                    </div>
                    <div class="modal__form-footer">
                        <div class="modal__form-footer-text">Bạn đã có tài khoản?</div>
                        <label for="modal__form-login">Đăng Nhâp Ở Đây</label>
                    </div>
                </div>
                <div class="modal__form modal__form-forgotPass">
                    <div class="modal__form-header">
                        <div class="modal__form-header-text">Quên Mật Khẩu</div>
                    </div>
                    <div class="modal__form-content">
                        <form action="" method="post" id="forgotPass" class="modal__form-content-main">
                            <div class="modal__form-input">
                                <div class="modal__form-input-text">
                                    <span style="color: var(--text)">Email</span>
                                </div>
                                <input type="email" name="forgotPass-email" placeholder="Nhập Email">
                                <span class="modal__form-err"></span>
                            </div>
                            <input type="submit" value="Lấy Mật Khẩu" class="modal__form-submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=$CONTENT_URL?>/JS/public.js"></script>
    <script src="<?=$CONTENT_URL?>/JS/login.js"></script>
    <script src="<?=$CONTENT_URL?>/JS/validation.js"></script>
    <!-- validate form  -->
    <script>
        validator({
            form: '#formLogin',
            errSelector: '.modal__form-err',
            rules: [
                validator.isRequied('input[name="login__email"]','Trường email không được bỏ trống'),
                validator.isEmail('input[name="login__email"]','Bạn chưa nhập đúng định dạng email'),
                validator.isRequied('input[name="login__pass"]','Trường mật khẩu không được bỏ trống'),
                validator.minLength('input[name="login__pass"]',5,'Mật khẩu dài tối thiểu 5 ký tự'),
            ]
        });

        validator({
            form: '#formRegister',
            errSelector: '.modal__form-err',
            rules: [
                validator.isRequied('input[name="registerEmail"]','Trường email không được bỏ trống'),
                validator.isEmail('input[name="registerEmail"]','Bạn chưa nhập đúng định dạng email'),
                validator.isRequied('input[name="registerPass"]','Trường mật khẩu không được bỏ trống'),
                validator.isRequied('input[name="registerUsername"]','Không được bỏ trống Username'),
                validator.minLength('input[name="registerUsername"]',5,'Username dài tối thiểu 5 ký tự'),
                validator.minLength('input[name="registerPass"]',5,'Mật khẩu dài tối thiểu 5 ký tự'),
                validator.isRequied('input[name="registerPassConfirmed"]','Trường này không được bỏ trống'),
                validator.confirmed('input[name="registerPassConfirmed"]',function () {
                return document.querySelector('#formRegister input[name="registerPass"]').value;
                },'Mật khẩu nhập lại không chính xác'),
            ]
        });
        validator({
            form: '#forgotPass',
            errSelector: '.modal__form-err',
            rules: [
                validator.isRequied('input[name="forgotPass-email"]','Trường email không được bỏ trống'),
                validator.isEmail('input[name="forgotPass-email"]','Bạn chưa nhập đúng định dạng email'),
            ]
        });
    </script>
</body>
</html>