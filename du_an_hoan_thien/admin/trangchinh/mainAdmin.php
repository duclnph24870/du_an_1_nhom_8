<?php
    // lấy ra bảng comment
    $comments = select_all("SELECT * FROM comment ORDER BY dateComment");

    // Lấy ra bảng đánh giá
    $danhGias = select_all("SELECT * FROM danhgia ORDER BY dateDanhGia");

    // lấy ra bảng user
    $users = select_all("SELECT * FROM user ORDER BY userDate");

    // lấy ra user theo quyền hạn
    $usersQh = select_all("SELECT * FROM user ORDER BY quyenHan DESC");

    // lấy ra bảng view truyện
    $truyens = select_all("SELECT * FROM truyen ORDER BY dateTruyen");

    // lấy ra bảng truyện chưa được duyệt
    $truyenDuyets = select_all("SELECT * FROM truyen WHERE trangThai=0 ORDER BY dateTruyen DESC");

    // lấy ra bảng chương
    $chuongs = select_all("SELECT * FROM chuong ORDER BY dateChuong");

    // lấy ra mảng comment có thời gian lâu nhất
    $commentDateOld = convert_date_to_number($comments[0]['dateComment']);

    // lấy ra view tổng của web
    $viewALlWeb = select_all("SELECT * FROM viewall ORDER BY dateView");
    
    //Tháng này
    $thisMonth = date("m");

    // năm arr
    $thisYear = date("Y");
    $arrYear = [];
    for ($i = 0;$i < 100;$i++) {
        $arrYear[] = $commentDateOld['year'] + $i;
        if ($commentDateOld['year'] + $i == (int)$thisYear) {
            break;
        }
    }
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/adminQl.css">
<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/product.css">
<link rel="stylesheet" href="<?=$CONTENT_URL?>/CSS/admin.css">
<script src="<?=$CONTENT_URL?>/JS/public.js"></script>
<script src="<?=$CONTENT_URL?>/JS/validation.js"></script>

<div class="row">
    <div class="col-2 px-0">
        <div class="admin-left">
            <div class="admin-left-icon text">
                <i class="fad fa-abacus"></i>
                Thống Kê
            </div>
            <div class="admin-left-icon text">
                <i class="fad fa-bell-plus"></i>
                Soạn Mới Thông Báo
            </div>
            <div class="admin-left-icon text">
                <i class="fad fa-users"></i>
                Danh Sách User
            </div>
            <div class="admin-left-icon text">
                <i class="fad fa-shield"></i>
                Duyệt Truyện
            </div>
            <a href="<?=$ADMIN_URL?>/truyen/indexAdminTruyen.php" class="admin-left-icon text">
                <i class="fad fa-books"></i>
                Quản Lí Truyện
            </a>
            <a href="<?=$ADMIN_URL?>/category/indexCategory.php" class="admin-left-icon text">
                <i class="fad fa-star"></i>
                Quản Lí Thể Loại
            </a>
        </div>
    </div>
    <div class="col-10">
        <div class="admin-right">
            <!-- == Thống kê === -->
            <div class="admin-right-item">
                <div class="admin-right-item-header">
                    <div class="admin-right-item-header-item">Bình Luận</div>
                    <div class="admin-right-item-header-item">Đánh Giá</div>
                    <div class="admin-right-item-header-item">User</div>
                    <div class="admin-right-item-header-item">Truyện</div>
                    <div class="admin-right-item-header-item">Chương</div>
                    <div class="admin-right-item-header-item">View</div>
                </div>
                <div class="admin-right-item-content">
                    <!-- == thống kê bình luận === -->
                    <div class="admin-right-item-content-item adminQl-statistical adminQl-statistical-comment">
                        <div class="adminQl-statistical-header">
                            Tổng Quan
                        </div>

                        <div class="adminQl-statistical-overview">
                            <div class="adminQl-statistical-overview-item day">
                                <div class="adminQl-statistical-overview-item-text">
                                    Bình Luận Hôm Nay
                                    <span class="title">55,000</span>
                                </div>
                                <div class="adminQl-statistical-overview-item-icon green">
                                    <i class="fas fa-sun"></i>
                                </div>
                                <div class="adminQl-statistical-overview-item-other">
                                    <span class="">+5%</span> so với hôm qua
                                </div>
                            </div>

                            <div class="adminQl-statistical-overview-item month">
                                <div class="adminQl-statistical-overview-item-text">
                                    Bình Luận Tháng Này
                                    <span class="title">55,000</span>
                                </div>
                                <div class="adminQl-statistical-overview-item-icon cam">
                                    <i class="fas fa-moon-stars"></i>
                                </div>
                                <div class="adminQl-statistical-overview-item-other">
                                    <span class="">+5%</span> so với tháng trước
                                </div>
                            </div>
                            <div class="adminQl-statistical-overview-item year">
                                <div class="adminQl-statistical-overview-item-text">
                                    Bình Luận Năm Nay
                                    <span class="title">55,000</span>
                                </div>
                                <div class="adminQl-statistical-overview-item-icon vang">
                                    <i class="fas fa-planet-moon"></i>
                                </div>
                                <div class="adminQl-statistical-overview-item-other">
                                    <span class="">+5%</span> so với năm trước
                                </div>
                            </div>
                            
                        </div>

                        <!-- tháng  -->
                        <div class="adminQl-statistical-header monthComment mt-5">
                            Tháng 
                            <select name="monthComment" id="">
                                <?php for ($i = 1;$i <= 12;$i++) :?>
                                <option value="<?=$i?>" <?=$i == (int)$thisMonth ? 'selected' : ''?>>Tháng <?=$i?></option>
                                <?php endfor?>
                            </select>

                            <select name="yearComment" id="">
                                <?php foreach ($arrYear as $y) :?>
                                    <option value="<?=$y?>" <?=$y == $thisYear ? 'selected' : ''?>>Năm <?=$y?>  </option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <!-- biểu đồ bình luận -->
                        <canvas id="myChartMonthComment" width="400" height="100"></canvas>

                        <!-- năm  -->
                        <div class="adminQl-statistical-header yearComment mt-5">
                            Năm 
                            <select name="yearComment" id="">
                                <?php foreach ($arrYear as $y) :?>
                                    <option value="<?=$y?>" <?=$y == $thisYear ? 'selected' : ''?>>Năm <?=$y?>  </option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <canvas id="myChartYearComment" width="400" height="100"></canvas>
                    </div>
                    <!-- === thống kê đánh giá ==== -->
                    <div class="admin-right-item-content-item adminQl-statistical adminQl-statistical-danhGia">
                        <div class="adminQl-statistical-header">
                            Tổng Quan
                        </div>

                        <div class="adminQl-statistical-overview">
                            <div class="adminQl-statistical-overview-item day">
                                <div class="adminQl-statistical-overview-item-text">
                                    Đánh Giá Hôm Nay
                                    <span class="title">55,000</span>
                                </div>
                                <div class="adminQl-statistical-overview-item-icon green">
                                    <i class="fas fa-sun"></i>
                                </div>
                                <div class="adminQl-statistical-overview-item-other">
                                    <span class="">+5%</span> so với hôm qua
                                </div>
                            </div>

                            <div class="adminQl-statistical-overview-item month">
                                <div class="adminQl-statistical-overview-item-text">
                                Đánh Giá Tháng Này
                                    <span class="title">55,000</span>
                                </div>
                                <div class="adminQl-statistical-overview-item-icon cam">
                                    <i class="fas fa-moon-stars"></i>
                                </div>
                                <div class="adminQl-statistical-overview-item-other">
                                    <span class="">+5%</span> so với tháng trước
                                </div>
                            </div>
                            <div class="adminQl-statistical-overview-item year">
                                <div class="adminQl-statistical-overview-item-text">
                                Đánh Giá Năm Nay
                                    <span class="title">55,000</span>
                                </div>
                                <div class="adminQl-statistical-overview-item-icon vang">
                                    <i class="fas fa-planet-moon"></i>
                                </div>
                                <div class="adminQl-statistical-overview-item-other">
                                    <span class="">+5%</span> so với năm trước
                                </div>
                            </div>
                            
                        </div>

                        <!-- tháng  -->
                        <div class="adminQl-statistical-header monthDanhGia mt-5">
                            Tháng 
                            <select name="monthDanhGia" id="">
                                <?php for ($i = 1;$i <= 12;$i++) :?>
                                <option value="<?=$i?>" <?=$i == (int)$thisMonth ? 'selected' : ''?>>Tháng <?=$i?></option>
                                <?php endfor?>
                            </select>

                            <select name="yearDanhGia" id="">
                                <?php foreach ($arrYear as $y) :?>
                                    <option value="<?=$y?>" <?=$y == $thisYear ? 'selected' : ''?>>Năm <?=$y?>  </option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <!-- biểu đồ Đánh giá -->
                        <canvas id="myChartMonthDanhGia" width="400" height="100"></canvas>

                        <!-- năm  -->
                        <div class="adminQl-statistical-header yearDanhGia mt-5">
                            Năm 
                            <select name="yearDanhGia" id="">
                                <?php foreach ($arrYear as $y) :?>
                                    <option value="<?=$y?>" <?=$y == $thisYear ? 'selected' : ''?>>Năm <?=$y?>  </option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <canvas id="myChartYearDanhGia" width="400" height="100"></canvas>
                    </div>
                    <!-- === thống kê user ==== -->
                    <div class="admin-right-item-content-item adminQl-statistical adminQl-statistical-user">
                        <div class="adminQl-statistical-header">
                            Tổng Quan
                        </div>

                        <div class="adminQl-statistical-overview">
                            <div class="adminQl-statistical-overview-item day">
                                <div class="adminQl-statistical-overview-item-text">
                                    User Đăng Ký Hôm Nay
                                    <span class="title">55,000</span>
                                </div>
                                <div class="adminQl-statistical-overview-item-icon green">
                                    <i class="fas fa-sun"></i>
                                </div>
                                <div class="adminQl-statistical-overview-item-other">
                                    <span class="">+5%</span> so với hôm qua
                                </div>
                            </div>

                            <div class="adminQl-statistical-overview-item month">
                                <div class="adminQl-statistical-overview-item-text">
                                User Đăng Ký Tháng Này
                                    <span class="title">55,000</span>
                                </div>
                                <div class="adminQl-statistical-overview-item-icon cam">
                                    <i class="fas fa-moon-stars"></i>
                                </div>
                                <div class="adminQl-statistical-overview-item-other">
                                    <span class="">+5%</span> so với tháng trước
                                </div>
                            </div>
                            <div class="adminQl-statistical-overview-item year">
                                <div class="adminQl-statistical-overview-item-text">
                                User Đăng Ký Năm Nay
                                    <span class="title">55,000</span>
                                </div>
                                <div class="adminQl-statistical-overview-item-icon vang">
                                    <i class="fas fa-planet-moon"></i>
                                </div>
                                <div class="adminQl-statistical-overview-item-other">
                                    <span class="">+5%</span> so với năm trước
                                </div>
                            </div>
                            
                        </div>

                        <!-- tháng  -->
                        <div class="adminQl-statistical-header monthUser mt-5">
                            Tháng 
                            <select name="monthUser" id="">
                                <?php for ($i = 1;$i <= 12;$i++) :?>
                                <option value="<?=$i?>" <?=$i == (int)$thisMonth ? 'selected' : ''?>>Tháng <?=$i?></option>
                                <?php endfor?>
                            </select>

                            <select name="yearUser" id="">
                                <?php foreach ($arrYear as $y) :?>
                                    <option value="<?=$y?>" <?=$y == $thisYear ? 'selected' : ''?>>Năm <?=$y?>  </option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <!-- biểu đồ Đánh giá -->
                        <canvas id="myChartMonthUser" width="400" height="100"></canvas>

                        <!-- năm  -->
                        <div class="adminQl-statistical-header yearUser mt-5">
                            Năm 
                            <select name="yearUser" id="">
                                <?php foreach ($arrYear as $y) :?>
                                    <option value="<?=$y?>" <?=$y == $thisYear ? 'selected' : ''?>>Năm <?=$y?>  </option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <canvas id="myChartYearUser" width="400" height="100"></canvas>
                    </div>
                    <!-- === thống kê truyện ==== -->
                    <div class="admin-right-item-content-item adminQl-statistical adminQl-statistical-truyen">
                        <div class="adminQl-statistical-header">
                            Tổng Quan
                        </div>

                        <div class="adminQl-statistical-overview">
                            <div class="adminQl-statistical-overview-item day">
                                <div class="adminQl-statistical-overview-item-text">
                                    Truyện Đăng Hôm Nay
                                    <span class="title">55,000</span>
                                </div>
                                <div class="adminQl-statistical-overview-item-icon green">
                                    <i class="fas fa-sun"></i>
                                </div>
                                <div class="adminQl-statistical-overview-item-other">
                                    <span class="">+5%</span> so với hôm qua
                                </div>
                            </div>

                            <div class="adminQl-statistical-overview-item month">
                                <div class="adminQl-statistical-overview-item-text">
                                Truyện Đăng Tháng Này
                                    <span class="title">55,000</span>
                                </div>
                                <div class="adminQl-statistical-overview-item-icon cam">
                                    <i class="fas fa-moon-stars"></i>
                                </div>
                                <div class="adminQl-statistical-overview-item-other">
                                    <span class="">+5%</span> so với tháng trước
                                </div>
                            </div>
                            <div class="adminQl-statistical-overview-item year">
                                <div class="adminQl-statistical-overview-item-text">
                                Truyện Đăng Năm Nay
                                    <span class="title">55,000</span>
                                </div>
                                <div class="adminQl-statistical-overview-item-icon vang">
                                    <i class="fas fa-planet-moon"></i>
                                </div>
                                <div class="adminQl-statistical-overview-item-other">
                                    <span class="">+5%</span> so với năm trước
                                </div>
                            </div>
                            
                        </div>

                        <!-- tháng  -->
                        <div class="adminQl-statistical-header monthTruyen mt-5">
                            Tháng 
                            <select name="monthTruyen" id="">
                                <?php for ($i = 1;$i <= 12;$i++) :?>
                                <option value="<?=$i?>" <?=$i == (int)$thisMonth ? 'selected' : ''?>>Tháng <?=$i?></option>
                                <?php endfor?>
                            </select>

                            <select name="yearTruyen" id="">
                                <?php foreach ($arrYear as $y) :?>
                                    <option value="<?=$y?>" <?=$y == $thisYear ? 'selected' : ''?>>Năm <?=$y?>  </option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <!-- biểu đồ Đánh giá -->
                        <canvas id="myChartMonthTruyen" width="400" height="100"></canvas>

                        <!-- năm  -->
                        <div class="adminQl-statistical-header yearTruyen mt-5">
                            Năm 
                            <select name="yearTruyen" id="">
                                <?php foreach ($arrYear as $y) :?>
                                    <option value="<?=$y?>" <?=$y == $thisYear ? 'selected' : ''?>>Năm <?=$y?>  </option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <canvas id="myChartYearTruyen" width="400" height="100"></canvas>
                    </div>
                    <!-- === thống kê chương==== -->
                    <div class="admin-right-item-content-item adminQl-statistical adminQl-statistical-chuong">
                        <div class="adminQl-statistical-header">
                            Tổng Quan
                        </div>

                        <div class="adminQl-statistical-overview">
                            <div class="adminQl-statistical-overview-item day">
                                <div class="adminQl-statistical-overview-item-text">
                                    Chương Đăng Hôm Nay
                                    <span class="title">55,000</span>
                                </div>
                                <div class="adminQl-statistical-overview-item-icon green">
                                    <i class="fas fa-sun"></i>
                                </div>
                                <div class="adminQl-statistical-overview-item-other">
                                    <span class="">+5%</span> so với hôm qua
                                </div>
                            </div>

                            <div class="adminQl-statistical-overview-item month">
                                <div class="adminQl-statistical-overview-item-text">
                                Chương Đăng Tháng Này
                                    <span class="title">55,000</span>
                                </div>
                                <div class="adminQl-statistical-overview-item-icon cam">
                                    <i class="fas fa-moon-stars"></i>
                                </div>
                                <div class="adminQl-statistical-overview-item-other">
                                    <span class="">+5%</span> so với tháng trước
                                </div>
                            </div>
                            <div class="adminQl-statistical-overview-item year">
                                <div class="adminQl-statistical-overview-item-text">
                                Chương Đăng Năm Nay
                                    <span class="title">55,000</span>
                                </div>
                                <div class="adminQl-statistical-overview-item-icon vang">
                                    <i class="fas fa-planet-moon"></i>
                                </div>
                                <div class="adminQl-statistical-overview-item-other">
                                    <span class="">+5%</span> so với năm trước
                                </div>
                            </div>
                            
                        </div>

                        <!-- tháng  -->
                        <div class="adminQl-statistical-header monthChuong mt-5">
                            Tháng 
                            <select name="monthChuong" id="">
                                <?php for ($i = 1;$i <= 12;$i++) :?>
                                <option value="<?=$i?>" <?=$i == (int)$thisMonth ? 'selected' : ''?>>Tháng <?=$i?></option>
                                <?php endfor?>
                            </select>

                            <select name="yearChuong" id="">
                                <?php foreach ($arrYear as $y) :?>
                                    <option value="<?=$y?>" <?=$y == $thisYear ? 'selected' : ''?>>Năm <?=$y?>  </option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <!-- biểu đồ Đánh giá -->
                        <canvas id="myChartMonthChuong" width="400" height="100"></canvas>

                        <!-- năm  -->
                        <div class="adminQl-statistical-header yearChuong mt-5">
                            Năm 
                            <select name="yearChuong" id="">
                                <?php foreach ($arrYear as $y) :?>
                                    <option value="<?=$y?>" <?=$y == $thisYear ? 'selected' : ''?>>Năm <?=$y?>  </option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <canvas id="myChartYearChuong" width="400" height="100"></canvas>
                    </div>
                    <!-- === thống kê chương==== -->
                    <div class="admin-right-item-content-item adminQl-statistical adminQl-statistical-view">
                        <div class="adminQl-statistical-header">
                            Tổng Quan
                        </div>

                        <div class="adminQl-statistical-overview">
                            <div class="adminQl-statistical-overview-item day">
                                <div class="adminQl-statistical-overview-item-text">
                                    View Hôm Nay
                                    <span class="title">55,000</span>
                                </div>
                                <div class="adminQl-statistical-overview-item-icon green">
                                    <i class="fas fa-sun"></i>
                                </div>
                                <div class="adminQl-statistical-overview-item-other">
                                    <span class="">+5%</span> so với hôm qua
                                </div>
                            </div>

                            <div class="adminQl-statistical-overview-item month">
                                <div class="adminQl-statistical-overview-item-text">
                                View Tháng Này
                                    <span class="title">55,000</span>
                                </div>
                                <div class="adminQl-statistical-overview-item-icon cam">
                                    <i class="fas fa-moon-stars"></i>
                                </div>
                                <div class="adminQl-statistical-overview-item-other">
                                    <span class="">+5%</span> so với tháng trước
                                </div>
                            </div>
                            <div class="adminQl-statistical-overview-item year">
                                <div class="adminQl-statistical-overview-item-text">
                                View Năm Nay
                                    <span class="title">55,000</span>
                                </div>
                                <div class="adminQl-statistical-overview-item-icon vang">
                                    <i class="fas fa-planet-moon"></i>
                                </div>
                                <div class="adminQl-statistical-overview-item-other">
                                    <span class="">+5%</span> so với năm trước
                                </div>
                            </div>
                            
                        </div>

                        <!-- tháng  -->
                        <div class="adminQl-statistical-header monthView mt-5">
                            Tháng 
                            <select name="monthView" id="">
                                <?php for ($i = 1;$i <= 12;$i++) :?>
                                <option value="<?=$i?>" <?=$i == (int)$thisMonth ? 'selected' : ''?>>Tháng <?=$i?></option>
                                <?php endfor?>
                            </select>

                            <select name="yearView" id="">
                                <?php foreach ($arrYear as $y) :?>
                                    <option value="<?=$y?>" <?=$y == $thisYear ? 'selected' : ''?>>Năm <?=$y?>  </option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <!-- biểu đồ Đánh giá -->
                        <canvas id="myChartMonthView" width="400" height="100"></canvas>

                        <!-- năm  -->
                        <div class="adminQl-statistical-header yearView mt-5">
                            Năm 
                            <select name="yearView" id="">
                                <?php foreach ($arrYear as $y) :?>
                                    <option value="<?=$y?>" <?=$y == $thisYear ? 'selected' : ''?>>Năm <?=$y?>  </option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <canvas id="myChartYearView" width="400" height="100"></canvas>
                    </div>
                </div>
            </div>
            <!-- == soạn thông báo === -->
            <div class="admin-right-item">
                <form method="post" action="insertNoti.php" id="addNotify-from" class="admin-right-item-content">
                    <input type="text" name="link" value="<?=$link?>" hidden>
                    <div class="addNotify-form-block-input">
                        <div class="addNotify-form-block-input-text">Tiêu đề</div>
                        <input type="text" name="tieuDe" class="addNotify-form-block-input-title" placeholder="Tiêu Đề Thông Báo">
                    </div>
                    <div class="gach-ngang"><span>Gửi cho</span></div>

                    <!-- table user  -->
                    <div class="table-list addNotify-user">
                        <!-- === header === -->
                        <div class="table-list__header">
                            <div class="table-list__header-input-block">
                                <input type="text" name="searchRealTime" placeholder="Search User">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="checkbox-btn-block d-flex ml-auto">
                                <label for="guiAll" class="guiAll mr-3">
                                    <input type="checkbox" name="userAddNotifyCheckbox[]" value="all" id="guiAll">
                                    Tất Cả
                                </label>            
                                <span class="btn-category block-icon blue checkbox-btn-block-iconCheck">
                                    <i class="fa-solid fa-x"></i>
                                    <span>Chọn</span>
                                    <span>Đóng</span>
                                </span>
                                <span class="btn-category cam btn-allCheck">
                                    <span>Chọn Tất Cả</span>
                                    <span> Bỏ Chọn Tất Cả</span>
                                </span>
                                <input type="submit" value="Gửi" class="submitAddNotify">
                            </div>
                        </div>

                        <!-- === table ==== -->
                        <table class="table-list__content addNotify-userList d-block">
                            <thead>
                                <th data-nameColumn="idUser" class="userArrangeNoti" name="number2">ID <i class="fad fa-sort-up"></i></th>
                                <th data-nameColumn="userName" class="userArrangeNoti" name="string">Username <i class="fad fa-sort-up"></i></th>
                                <th data-nameColumn="email" class="userArrangeNoti" name="string">Email<i class="fad fa-sort-up"></i></th>
                                <th data-nameColumn="quyenHan" class="userArrangeNoti" name="number">Quyền Hạn <i class="fad fa-sort-up"></i></th>
                                <th data-nameColumn="userDate" class="userArrangeNoti" name="date">Ngày Gia Nhập <i class="fad fa-sort-up"></i></th>
                                <th data-nameColumn="sex" class="userArrangeNoti" name="number">Giới Tính <i class="fad fa-sort-up"></i></th>
                                <th></th>
                            </thead>
                            <tbody id="listUserNoti">
                                <!-- list user  -->
                            </tbody>
                        </table>
                        <div class="pagination pagiListUserNoti">
    
                        </div>
                    </div>
                </form>
            </div>
            <!-- === Danh sách user === -->
            <div class="admin-right-item">
                <div class="admin-right-item-content">
                    <div class="table-list userList">
                        <!-- === header === -->
                        <div class="table-list__header">
                            <div class="table-list__header-input-block">
                                <input type="text" name="searchRealTime" placeholder="Search User">
                                <i class="fas fa-search"></i>
                            </div>
                            <?php if ((int)$_SESSION['user']['quyenHan'] == 5) :?>
                                <div class="checkbox-btn-block d-flex ml-auto">
                                    <div class="adminQl-content-addUser text" title="Thêm user">
                                        <i class="fad fa-user-plus"></i>
                                    </div>
                                </div>
                            <?php endif?>
                        </div>

                        <!-- === table ==== -->
                        <table class="table-list__content listUser">
                            <thead>
                                <th data-nameColumn="idUser" class="active userArrange" name="number2">ID <i class="fad fa-sort-up"></i></th>
                                <th data-nameColumn="userName" class="userArrange" name="string">Username <i class="fad fa-sort-up"></i></th>
                                <th data-nameColumn="email" class="userArrange" name="string">Email<i class="fad fa-sort-up"></i></th>
                                <th data-nameColumn="quyenHan" class="userArrange" name="number">Quyền Hạn <i class="fad fa-sort-up"></i></th>
                                <th data-nameColumn="userDate" class="userArrange" name="date">Ngày Gia Nhập <i class="fad fa-sort-up"></i></th>
                                <th data-nameColumn="sex" class="userArrange" name="number">Giới Tính <i class="fad fa-sort-up"></i></th>
                                <th></th>
                            </thead>
                            <tbody id="listUser">
                                <!-- list user  -->
                            </tbody>
                        </table>
                        <div class="pagination pagiListUser">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- == duyệt truyện === -->
            <div class="admin-right-item duyetTruyen">
                <div class="admin-right-item-content">
                    <!-- list  -->
                    <div class="adminQl-censorship">
                        <!-- item  -->
                        <div class="emtyList" style="padding-left: 15px;">
                            <i class="fad fa-heart-broken"></i>
                            Không có truyện nào cần duyệt!
                        </div>
                    </div>
                    <div class="pagination pagiDuyetTruyen">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal add user  -->
<div class="modal-addUser">
    <div class="addUser-overlay"></div>
    <div class="addUser-content">
        <form method="post" action="<?=$DAO_URL?>/sign_up_login/register.php" id="adminQl-form-addUser" class="modal__form-content-main modal-addUser-from">
            <input type="text" value="boss" name="type" hidden>
            <input type="text" value="<?=$link?>" name="link" hidden>
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

            <input type="submit" value="Thêm User" class="modal__form-submit">
        </form>
    </div>
</div>

<script src="<?=$CONTENT_URL?>/JS/adminQl.js"></script>

<script>
    nextPageAdmin('div.admin-left-icon','.admin-right-item','.admin-right-item-header-item','.admin-right-item-content-item','adminI','adminJ');
    modalShow('.adminQl-content-addUser','.modal-addUser','.addUser-overlay');
</script>
<?php if ((int)$_SESSION['user']['quyenHan'] == 5) :?>
    <script>
        validator({
            form: '#adminQl-form-addUser',
            errSelector: '.modal__form-err',
            rules: [
                validator.isRequied('input[name="registerEmail"]','Trường email không được bỏ trống'),
                validator.isEmail('input[name="registerEmail"]','Bạn chưa nhập đúng định dạng email'),
                validator.maxLength('input[name="registerEmail"]',100,'Email dài tối đa 100 ký tự'),
                validator.isRequied('input[name="registerPass"]','Trường mật khẩu không được bỏ trống'),
                validator.maxLength('input[name="registerPass"]',30,'Trường mật khẩu dài không quá 50 ký tự'),
                validator.maxLength('input[name="registerUsername"]',30,'Username dài không quá 50 ký tự'),
                validator.isRequied('input[name="registerUsername"]','Không được bỏ trống Username'),
                validator.minLength('input[name="registerUsername"]',5,'Username dài tối thiểu 5 ký tự'),
                validator.minLength('input[name="registerPass"]',5,'Mật khẩu dài tối thiểu 5 ký tự'),
                validator.isRequied('input[name="registerPassConfirmed"]','Trường này không được bỏ trống'),
                validator.confirmed('input[name="registerPassConfirmed"]',function () {
                return document.querySelector('#adminQl-form-addUser input[name="registerPass"]').value;
                },'Mật khẩu nhập lại không chính xác'),
            ]
        });
    </script>
<?php endif?>
<!-- ==== thống kê comment ===== -->
<script>
    var chartOldCommentMonth;
    var chartOldCommentYear;
    // thống kê comment 
    const optionsComment = {
        mainArr: phpArrayJs(<?=json_encode($comments)?>),
        selectorList: '.adminQl-statistical-comment',
        selectorDay: '.adminQl-statistical-overview-item.day',
        selectorMonth: '.adminQl-statistical-overview-item.month',
        selectorYear: '.adminQl-statistical-overview-item.year',
        selectorMonthBlock: '.adminQl-statistical-header.monthComment',
        selectorYearBlock: '.adminQl-statistical-header.yearComment',
        selectorMonthSl: 'select[name=monthComment]',
        selectorMonthYSl: 'select[name=yearComment]',
        selectorYearSl: 'select[name=yearComment]',
        nameIdCanvasMonth: 'myChartMonthComment',
        nameIdCanvasYear: 'myChartYearComment',
        column: {
            date: 'dateComment',
        },
        nameVariableM: chartOldCommentMonth,
        nameVariableY: chartOldCommentYear,
    }
    statistical(showChartComment,optionsComment);
</script>

<!-- ==== thống kê đánh giá ==== -->
<script>
    var chartOldDanhGiaMonth;
    var chartOldDanhGiaYear;
    // thống kê DanhGia 
    const optionsDanhGia = {
        mainArr: phpArrayJs(<?=json_encode($danhGias)?>),
        selectorList: '.adminQl-statistical-danhGia',
        selectorDay: '.adminQl-statistical-overview-item.day',
        selectorMonth: '.adminQl-statistical-overview-item.month',
        selectorYear: '.adminQl-statistical-overview-item.year',
        selectorMonthBlock: '.adminQl-statistical-header.monthDanhGia',
        selectorYearBlock: '.adminQl-statistical-header.yearDanhGia',
        selectorMonthSl: 'select[name=monthDanhGia]',
        selectorMonthYSl: 'select[name=yearDanhGia]',
        selectorYearSl: 'select[name=yearDanhGia]',
        nameIdCanvasMonth: 'myChartMonthDanhGia',
        nameIdCanvasYear: 'myChartYearDanhGia',
        column: {
            date: 'dateDanhGia',
        },
        nameVariableM: chartOldDanhGiaMonth,
        nameVariableY: chartOldDanhGiaYear,
    }
    statistical(showChartComment,optionsDanhGia);
</script>

<!-- ==== thống kê user ==== -->
<script>
    var chartOldUserMonth;
    var chartOldUserYear;
    // thống kê User 
    const optionsUser = {
        mainArr: phpArrayJs(<?=json_encode($users)?>),
        selectorList: '.adminQl-statistical-user',
        selectorDay: '.adminQl-statistical-overview-item.day',
        selectorMonth: '.adminQl-statistical-overview-item.month',
        selectorYear: '.adminQl-statistical-overview-item.year',
        selectorMonthBlock: '.adminQl-statistical-header.monthUser',
        selectorYearBlock: '.adminQl-statistical-header.yearUser',
        selectorMonthSl: 'select[name=monthUser]',
        selectorMonthYSl: 'select[name=yearUser]',
        selectorYearSl: 'select[name=yearUser]',
        nameIdCanvasMonth: 'myChartMonthUser',
        nameIdCanvasYear: 'myChartYearUser',
        column: {
            date: 'userDate',
        },
        nameVariableM: chartOldUserMonth,
        nameVariableY: chartOldUserYear,
    }
    statistical(showChartComment,optionsUser);
</script>

<!-- ==== thống kê truyện ==== -->
<script>
    var chartOldTruyenMonth;
    var chartOldTruyenYear;
    // thống kê Truyen 
    const optionsTruyen = {
        mainArr: phpArrayJs(<?=json_encode($truyens)?>),
        selectorList: '.adminQl-statistical-truyen',
        selectorDay: '.adminQl-statistical-overview-item.day',
        selectorMonth: '.adminQl-statistical-overview-item.month',
        selectorYear: '.adminQl-statistical-overview-item.year',
        selectorMonthBlock: '.adminQl-statistical-header.monthTruyen',
        selectorYearBlock: '.adminQl-statistical-header.yearTruyen',
        selectorMonthSl: 'select[name=monthTruyen]',
        selectorMonthYSl: 'select[name=yearTruyen]',
        selectorYearSl: 'select[name=yearTruyen]',
        nameIdCanvasMonth: 'myChartMonthTruyen',
        nameIdCanvasYear: 'myChartYearTruyen',
        column: {
            date: 'dateTruyen',
        },
        nameVariableM: chartOldTruyenMonth,
        nameVariableY: chartOldTruyenYear,
    }
    statistical(showChartComment,optionsTruyen);
</script>

<!-- ==== thống kê chương ==== -->
<script>
    var chartOldChuongMonth;
    var chartOldChuongYear;
    // thống kê Chuong 
    const optionsChuong = {
        mainArr: phpArrayJs(<?=json_encode($chuongs)?>),
        selectorList: '.adminQl-statistical-chuong',
        selectorDay: '.adminQl-statistical-overview-item.day',
        selectorMonth: '.adminQl-statistical-overview-item.month',
        selectorYear: '.adminQl-statistical-overview-item.year',
        selectorMonthBlock: '.adminQl-statistical-header.monthChuong',
        selectorYearBlock: '.adminQl-statistical-header.yearChuong',
        selectorMonthSl: 'select[name=monthChuong]',
        selectorMonthYSl: 'select[name=yearChuong]',
        selectorYearSl: 'select[name=yearChuong]',
        nameIdCanvasMonth: 'myChartMonthChuong',
        nameIdCanvasYear: 'myChartYearChuong',
        column: {
            date: 'dateChuong',
        },
        nameVariableM: chartOldChuongMonth,
        nameVariableY: chartOldChuongYear,
    }
    statistical(showChartComment,optionsChuong);
</script>

<!-- ==== thống kê view ==== -->
<script>
    var chartOldViewMonth;
    var chartOldViewYear;
    // thống kê View 
    const optionsView = {
        mainArr: phpArrayJs(<?=json_encode($viewALlWeb)?>),
        selectorList: '.adminQl-statistical-view',
        selectorDay: '.adminQl-statistical-overview-item.day',
        selectorMonth: '.adminQl-statistical-overview-item.month',
        selectorYear: '.adminQl-statistical-overview-item.year',
        selectorMonthBlock: '.adminQl-statistical-header.monthView',
        selectorYearBlock: '.adminQl-statistical-header.yearView',
        selectorMonthSl: 'select[name=monthView]',
        selectorMonthYSl: 'select[name=yearView]',
        selectorYearSl: 'select[name=yearView]',
        nameIdCanvasMonth: 'myChartMonthView',
        nameIdCanvasYear: 'myChartYearView',
        column: {
            date: 'dateView',
            numberView: 'numberView'
        },
        nameVariableM: chartOldViewMonth,
        nameVariableY: chartOldViewYear,
    }
    statisticalSum(showChartSum,optionsView);
</script>

<!-- ==== danh sách user ===== -->
<script>
    // phân trang, sắp xếp và hiển thị
    const opitionShow = {
        mainArr: phpArrayJs(<?=json_encode($usersQh)?>), // mảng hiển thị chính
        selectorList: '#listUser', // selector list chứa các user
        selectorPagi: '.pagiListUser', // selector pagination
        numberPagi : 10,// số item 1 page
        arrange: function () {
            // phương thức sắp xếp 
        },
        idLogin: '<?=$_SESSION['user']['idUser']?>', 
        userUrl: '<?=$USER_URL?>',
        adminUrl: '<?=$ADMIN_URL?>',
    };
    // selector pagination phải là duy nhất
    phanTrang(showListUser,opitionShow);
    // click sắp xếp
    clickArrange('.table-list__content.listUser thead','.table-list__content thead th.userArrange',arrangeWeb,showListUser,opitionShow);

    // search thời gian thực
    searchRealTime (phanTrang,opitionShow,showListUser,{
        searchForm: '.userList input[name="searchRealTime"]',
        selectorList: '#listUser',
        nameColumnSearch: [
            'idUser','userName','email'
        ],
    });
</script>


<?php if (count($truyenDuyets) > 0) :?>
<!-- === duyệt truyện === -->
<script>
    // phân trang, sắp xếp và hiển thị
    const opitionShowDuyet = {
        mainArr: phpArrayJs(<?=json_encode($truyenDuyets)?>), // mảng hiển thị chính
        subArr: phpArrayJs(<?=json_encode($users)?>), // mảng hiển thị phụ
        selectorList: '.adminQl-censorship', // selector list chứa các user
        selectorPagi: '.pagiDuyetTruyen', // selector pagination
        numberPagi : 10,// số item 1 page
        arrange: function () {
            // phương thức sắp xếp 
        },
        idLogin: '<?=$_SESSION['user']['idUser']?>', 
        userUrl: '<?=$USER_URL?>',
        adminUrl: '<?=$ADMIN_URL?>',
        contentUrl: '<?=$CONTENT_URL?>',
    };
    // selector pagination phải là duy nhất
    phanTrang(showListCensorship,opitionShowDuyet);
</script>
<?php endif?>

<!-- === Thêm thông báo === -->
<script>
    // phân trang, sắp xếp và hiển thị
    const opitionShowNoti = {
        mainArr: phpArrayJs(<?=json_encode($users)?>), // mảng hiển thị chính
        selectorList: '#listUserNoti', // selector list chứa các user
        selectorPagi: '.pagiListUserNoti', // selector pagination
        numberPagi : 10,// số item 1 page
        arrange: function () {
            // phương thức sắp xếp 
        },
        checkAllCallback: function () {
            checkAll('.addNotify-user','.checkbox-btn-block-iconCheck','.btn-allCheck','input[name="userAddNotifyCheckbox[]"]','.submitAddNotify');
        },
        userUrl: '<?=$USER_URL?>',
        adminUrl: '<?=$ADMIN_URL?>',
        contentUrl: '<?=$CONTENT_URL?>',
    };
    // selector pagination phải là duy nhất
    phanTrang(showListUserNoti,opitionShowNoti);

    // click sắp xếp
    clickArrange('.table-list__content.addNotify-userList thead','.table-list__content thead th.userArrangeNoti',arrangeWeb,showListUserNoti,opitionShowNoti);

    // search thời gian thực
    searchRealTime (phanTrang,opitionShowNoti,showListUserNoti,{
        searchForm: '.addNotify-user input[name="searchRealTime"]',
        selectorList: '#listUserNoti',
        nameColumnSearch: [
            'idUser','userName','email'
        ],
    });
</script>