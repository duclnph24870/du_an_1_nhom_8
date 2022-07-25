-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 25, 2022 lúc 04:38 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chat`
--

CREATE TABLE `chat` (
  `idChat` int(11) NOT NULL,
  `idUser` text COLLATE utf8_unicode_ci NOT NULL,
  `idUserXoa` int(11) NOT NULL DEFAULT -10,
  `idUserXoa1` int(11) NOT NULL DEFAULT -10
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chatchitiet`
--

CREATE TABLE `chatchitiet` (
  `idChatChiTiet` int(11) NOT NULL,
  `idChat` int(11) NOT NULL,
  `noiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `dateChat` datetime NOT NULL,
  `trangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuong`
--

CREATE TABLE `chuong` (
  `idChuong` int(11) NOT NULL,
  `idTruyen` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `tieuDe` text COLLATE utf8_unicode_ci NOT NULL,
  `noiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `dateChuong` datetime NOT NULL,
  `viewChuong` int(11) NOT NULL,
  `soChuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `idComment` int(11) NOT NULL,
  `idTruyen` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `noiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `dateComment` datetime NOT NULL,
  `numberLike` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangdoc`
--

CREATE TABLE `dangdoc` (
  `idDangDoc` int(11) NOT NULL,
  `idTruyen` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idChuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhdau`
--

CREATE TABLE `danhdau` (
  `idDanhDau` int(11) NOT NULL,
  `idTruyen` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `idDanhGia` int(11) NOT NULL,
  `idTruyen` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `numberLike` int(11) NOT NULL,
  `noiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `dateDanhGia` datetime NOT NULL,
  `tinhCach` int(11) NOT NULL,
  `cotTruyen` int(11) NOT NULL,
  `boCuc` int(11) NOT NULL,
  `tongHop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `idDanhMuc` int(100) NOT NULL,
  `nhom` text COLLATE utf8_unicode_ci NOT NULL,
  `tenDanhMuc` text COLLATE utf8_unicode_ci NOT NULL,
  `ngayThem` datetime(6) NOT NULL,
  `idUser` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`idDanhMuc`, `nhom`, `tenDanhMuc`, `ngayThem`, `idUser`) VALUES
(255, 'nhom5', ' Xuyên Không', '2022-07-25 18:13:05.000000', 3),
(287, 'nhom1', 'Tiên Hiệp', '2022-07-25 18:13:05.000000', 3),
(288, 'nhom1', 'Huyền Huyễn', '2022-07-25 18:13:05.000000', 3),
(289, 'nhom1', 'Khoa Huyễn', '2022-07-25 18:13:05.000000', 3),
(290, 'nhom1', 'Võng Du', '2022-07-25 18:13:05.000000', 3),
(291, 'nhom1', 'Đô Thị', '2022-07-25 18:13:05.000000', 3),
(292, 'nhom1', 'Đồng Nhân', '2022-07-25 18:13:05.000000', 3),
(293, 'nhom1', 'Dã Sử', '2022-07-25 18:13:05.000000', 3),
(294, 'nhom1', 'Cạnh Kỹ', '2022-07-25 18:13:05.000000', 3),
(295, 'nhom1', 'Huyền Nghi', '2022-07-25 18:13:05.000000', 3),
(296, 'nhom1', 'Kiếm Hiệp', '2022-07-25 18:13:05.000000', 3),
(297, 'nhom1', 'Kỳ Ảo', '2022-07-25 18:13:05.000000', 3),
(298, 'nhom3', 'Chọn Lọc', '2022-07-25 18:13:05.000000', 3),
(299, 'nhom3', 'Chất Lượng Cao', '2022-07-25 18:13:05.000000', 3),
(300, 'nhom4', 'Điềm Đạm', '2022-07-25 18:13:05.000000', 3),
(301, 'nhom4', 'Nhiệt Huyết', '2022-07-25 18:13:05.000000', 3),
(302, 'nhom4', 'Vô Sỉ', '2022-07-25 18:13:05.000000', 3),
(303, 'nhom4', 'Thiết Huyết', '2022-07-25 18:13:05.000000', 3),
(304, 'nhom4', 'Nhẹ Nhàng', '2022-07-25 18:13:05.000000', 3),
(305, 'nhom4', 'Cơ Trí', '2022-07-25 18:13:05.000000', 3),
(306, 'nhom4', 'Lãnh Khốc', '2022-07-25 18:13:05.000000', 3),
(307, 'nhom4', 'Kiêu Ngạo', '2022-07-25 18:13:05.000000', 3),
(308, 'nhom4', 'Ngu Ngốc', '2022-07-25 18:13:05.000000', 3),
(309, 'nhom4', 'Giảo Hoạt', '2022-07-25 18:13:05.000000', 3),
(310, 'nhom2', 'Đông Phương Huyền Huyễn', '2022-07-25 18:13:05.000000', 3),
(311, 'nhom2', 'Dị Thế Đại Lục', '2022-07-25 18:13:05.000000', 3),
(312, 'nhom2', 'Vương Triều Tranh Bá', '2022-07-25 18:13:05.000000', 3),
(313, 'nhom2', 'Cao Võ Thế Giới', '2022-07-25 18:13:05.000000', 3),
(314, 'nhom2', 'Tây Phương Kỳ Huyễn', '2022-07-25 18:13:05.000000', 3),
(315, 'nhom2', 'Hiện Đại Ma Pháp', '2022-07-25 18:13:05.000000', 3),
(316, 'nhom2', 'Hắc Ám Huyễn Tưởng', '2022-07-25 18:13:05.000000', 3),
(317, 'nhom2', 'Lịch Sử Thần Thoại', '2022-07-25 18:13:05.000000', 3),
(318, 'nhom2', 'Võ Hiệp Huyễn Tưởng', '2022-07-25 18:13:05.000000', 3),
(319, 'nhom2', 'Cổ Võ Tương Lai', '2022-07-25 18:13:05.000000', 3),
(320, 'nhom2', 'Tu Chân Văn Minh', '2022-07-25 18:13:05.000000', 3),
(321, 'nhom2', 'Huyễn Tưởng Tu Tiên', '2022-07-25 18:13:05.000000', 3),
(322, 'nhom2', 'Hiện Đại Tu Chân', '2022-07-25 18:13:05.000000', 3),
(323, 'nhom2', 'Thần Thoại Tu Chân', '2022-07-25 18:13:05.000000', 3),
(324, 'nhom2', 'Cổ Điển Tiên Hiệp', '2022-07-25 18:13:05.000000', 3),
(325, 'nhom2', 'Viễn Cổ Hồng Hoang', '2022-07-25 18:13:05.000000', 3),
(326, 'nhom2', 'Đô Thị Sinh Hoạt', '2022-07-25 18:13:05.000000', 3),
(327, 'nhom2', 'Đô Thị Dị Năng', '2022-07-25 18:13:05.000000', 3),
(328, 'nhom2', 'Thanh Xuân Vườn Trường', '2022-07-25 18:13:05.000000', 3),
(329, 'nhom2', 'Ngu Nhạc Minh Tinh', '2022-07-25 18:13:05.000000', 3),
(330, 'nhom2', 'Thương Chiến Chức Tràng', '2022-07-25 18:13:05.000000', 3),
(331, 'nhom2', 'Giá Không Lịch Sử', '2022-07-25 18:13:05.000000', 3),
(332, 'nhom2', 'Lịch Sử Quân Sự', '2022-07-25 18:13:05.000000', 3),
(333, 'nhom2', 'Dân Gian Truyền Thuyết', '2022-07-25 18:13:05.000000', 3),
(334, 'nhom2', 'Lịch Sử Quan Trường', '2022-07-25 18:13:05.000000', 3),
(335, 'nhom2', 'Hư Nghĩ Võng Du', '2022-07-25 18:13:05.000000', 3),
(336, 'nhom2', 'Du Hí Dị Giới', '2022-07-25 18:13:05.000000', 3),
(337, 'nhom2', 'Điện Tử Cạnh Kỹ', '2022-07-25 18:13:05.000000', 3),
(338, 'nhom2', 'Thể Dục Cạnh Kỹ', '2022-07-25 18:13:05.000000', 3),
(339, 'nhom2', 'Cổ Võ Cơ Giáp', '2022-07-25 18:13:05.000000', 3),
(340, 'nhom2', 'Thế Giới Tương Lai', '2022-07-25 18:13:05.000000', 3),
(341, 'nhom2', 'Tinh Tế Văn Minh', '2022-07-25 18:13:05.000000', 3),
(342, 'nhom2', 'Tiến Hóa Biến Dị', '2022-07-25 18:13:05.000000', 3),
(343, 'nhom2', 'Mạt Thế Nguy Cơ', '2022-07-25 18:13:05.000000', 3),
(344, 'nhom2', 'Thời Không Xuyên Toa', '2022-07-25 18:13:05.000000', 3),
(345, 'nhom2', 'Quỷ Bí Huyền Nghi', '2022-07-25 18:13:05.000000', 3),
(346, 'nhom2', 'Kỳ Diệu Thế Giới', '2022-07-25 18:13:05.000000', 3),
(347, 'nhom2', 'Trinh Tham Thôi Lý', '2022-07-25 18:13:05.000000', 3),
(348, 'nhom2', 'Thám Hiểm Sinh Tồn', '2022-07-25 18:13:05.000000', 3),
(349, 'nhom2', 'Cung Vi Trạch Đấu', '2022-07-25 18:13:05.000000', 3),
(350, 'nhom2', 'Kinh Thương Chủng Điền', '2022-07-25 18:13:05.000000', 3),
(351, 'nhom2', 'Tiên Lữ Kỳ Duyên', '2022-07-25 18:13:05.000000', 3),
(352, 'nhom2', 'Hào Môn Thế Gia', '2022-07-25 18:13:05.000000', 3),
(353, 'nhom2', 'Dị Tộc Luyến Tình', '2022-07-25 18:13:05.000000', 3),
(354, 'nhom2', 'Ma Pháp Huyễn Tình', '2022-07-25 18:13:05.000000', 3),
(355, 'nhom2', 'Tinh Tế Luyến Ca', '2022-07-25 18:13:05.000000', 3),
(356, 'nhom2', 'Linh Khí Khôi Phục', '2022-07-25 18:13:05.000000', 3),
(357, 'nhom2', 'Chư Thiên Vạn Giới', '2022-07-25 18:13:05.000000', 3),
(358, 'nhom5', 'Hệ Thống', '2022-07-25 18:13:05.000000', 3),
(359, 'nhom5', 'Lão Gia', '2022-07-25 18:13:05.000000', 3),
(360, 'nhom5', 'Bàn Thờ', '2022-07-25 18:13:05.000000', 3),
(361, 'nhom5', 'Tùy Thân', '2022-07-25 18:13:05.000000', 3),
(362, 'nhom5', 'Phàm Nhân', '2022-07-25 18:13:05.000000', 3),
(363, 'nhom5', 'Vô Địch', '2022-07-25 18:13:05.000000', 3),
(364, 'nhom5', 'Xuyên Qua', '2022-07-25 18:13:05.000000', 3),
(365, 'nhom5', 'Nữ Cường', '2022-07-25 18:13:05.000000', 3),
(366, 'nhom5', 'Khế Ước', '2022-07-25 18:13:05.000000', 3),
(367, 'nhom5', 'Trọng Sinh', '2022-07-25 18:13:05.000000', 3),
(368, 'nhom5', 'Hồng Lâu', '2022-07-25 18:13:05.000000', 3),
(369, 'nhom5', 'Học Viện', '2022-07-25 18:13:05.000000', 3),
(370, 'nhom5', 'Biến Thân', '2022-07-25 18:13:05.000000', 3),
(371, 'nhom5', 'Cổ Ngu', '2022-07-25 18:13:05.000000', 3),
(372, 'nhom5', 'Chuyển Thế', '2022-07-25 18:13:05.000000', 3),
(373, 'nhom5', 'Xuyên Sách', '2022-07-25 18:13:05.000000', 3),
(374, 'nhom5', 'Đàn Xuyên', '2022-07-25 18:13:05.000000', 3),
(375, 'nhom5', 'Phế Tài', '2022-07-25 18:13:05.000000', 3),
(376, 'nhom5', 'Dưỡng Thành', '2022-07-25 18:13:05.000000', 3),
(377, 'nhom5', 'Cơm Mềm', '2022-07-25 18:13:05.000000', 3),
(378, 'nhom5', 'Vô Hạn', '2022-07-25 18:13:05.000000', 3),
(379, 'nhom5', 'Mary Sue', '2022-07-25 18:13:05.000000', 3),
(380, 'nhom5', 'Cá Mặn', '2022-07-25 18:13:05.000000', 3),
(381, 'nhom5', 'Xây Dựng', '2022-07-25 18:13:05.000000', 3),
(382, 'nhom5', 'Thế Lực', '2022-07-25 18:13:05.000000', 3),
(383, 'nhom5', 'Xuyên Nhanh', '2022-07-25 18:13:05.000000', 3),
(384, 'nhom5', 'Nữ Phụ', '2022-07-25 18:13:05.000000', 3),
(385, 'nhom5', 'Vả Mặt', '2022-07-25 18:13:05.000000', 3),
(386, 'nhom5', 'Sảng Văn', '2022-07-25 18:13:05.000000', 3),
(387, 'nhom5', 'Ngọt Sủng', '2022-07-25 18:13:05.000000', 3),
(388, 'nhom5', 'Ngự Thú', '2022-07-25 18:13:05.000000', 3),
(389, 'nhom5', 'Điền Viên', '2022-07-25 18:13:05.000000', 3),
(390, 'nhom5', 'Toàn Dân', '2022-07-25 18:13:05.000000', 3),
(391, 'nhom5', 'Mỹ Thực', '2022-07-25 18:13:05.000000', 3),
(392, 'nhom5', 'Phản Phái', '2022-07-25 18:13:05.000000', 3),
(393, 'nhom5', 'Sau Màn', '2022-07-25 18:13:05.000000', 3),
(394, 'nhom6', 'Góc Nhìn Nam', '2022-07-25 18:13:05.000000', 3),
(395, 'nhom6', 'Góc Nhìn Nữ', '2022-07-25 18:13:05.000000', 3),
(396, 'nhom6', 'Ngôi Thứ Nhất', '2022-07-25 18:13:05.000000', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `icon`
--

CREATE TABLE `icon` (
  `idIcon` int(11) NOT NULL,
  `iconText` text COLLATE utf8_unicode_ci NOT NULL,
  `iconUnicode` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhiemvu`
--

CREATE TABLE `nhiemvu` (
  `idNhiemVu` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `tienDo` int(11) NOT NULL,
  `dateHoanThanh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notify`
--

CREATE TABLE `notify` (
  `idNotify` int(11) NOT NULL,
  `tieuDe` text COLLATE utf8_unicode_ci NOT NULL,
  `idUserDoc` text COLLATE utf8_unicode_ci NOT NULL,
  `idUser` text COLLATE utf8_unicode_ci NOT NULL,
  `idTruyen` int(11) NOT NULL DEFAULT -1,
  `kieuNotify` int(11) NOT NULL,
  `idUserXoa` text COLLATE utf8_unicode_ci DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `notify`
--

INSERT INTO `notify` (`idNotify`, `tieuDe`, `idUserDoc`, `idUser`, `idTruyen`, `kieuNotify`, `idUserXoa`) VALUES
(1, 'Chúc mừng năm mới!', '2 3', '2 3', -1, 0, '-1'),
(2, 'Trung thu vui vẻ! ', ' 3', '2 3', -1, 0, '3'),
(3, 'Truyện của bạn vừa ra chương mới!', '3 3 3', '3', 3, 1, '-1'),
(4, 'Bạn vừa được tăng chức', ' 4', '4', -1, 2, '-1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `replycomment`
--

CREATE TABLE `replycomment` (
  `idReply` int(11) NOT NULL,
  `idComment` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `noiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `dateReply` datetime NOT NULL,
  `numberLike` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `replydanhgia`
--

CREATE TABLE `replydanhgia` (
  `idReply` int(11) NOT NULL,
  `idDanhGia` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `numberLike` int(11) NOT NULL,
  `dateReply` datetime NOT NULL,
  `noiDung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sukien`
--

CREATE TABLE `sukien` (
  `idSuKien` int(11) NOT NULL,
  `classSuKien` text COLLATE utf8_unicode_ci NOT NULL,
  `exp` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `trangThai` int(11) NOT NULL,
  `dateKichHoat` datetime NOT NULL,
  `dateClick` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truyen`
--

CREATE TABLE `truyen` (
  `idTruyen` int(100) NOT NULL,
  `idUser` int(100) NOT NULL,
  `nhom1` text COLLATE utf8_unicode_ci NOT NULL,
  `nhom2` text COLLATE utf8_unicode_ci NOT NULL,
  `nhom3` text COLLATE utf8_unicode_ci NOT NULL,
  `nhom4` text COLLATE utf8_unicode_ci NOT NULL,
  `nhom5` text COLLATE utf8_unicode_ci NOT NULL,
  `nhom6` text COLLATE utf8_unicode_ci NOT NULL,
  `tenTruyen` text COLLATE utf8_unicode_ci NOT NULL,
  `gioiThieu` text COLLATE utf8_unicode_ci NOT NULL,
  `tacGia` text COLLATE utf8_unicode_ci NOT NULL,
  `imgTruyen` text COLLATE utf8_unicode_ci NOT NULL,
  `dateTruyen` datetime NOT NULL,
  `dateCapNhap` datetime NOT NULL,
  `tinhTrang` int(11) NOT NULL,
  `deCu` int(11) NOT NULL,
  `soChu` int(11) NOT NULL,
  `trangThai` int(11) NOT NULL,
  `soChuong` int(11) NOT NULL DEFAULT 0,
  `viewTruyen` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `truyen`
--

INSERT INTO `truyen` (`idTruyen`, `idUser`, `nhom1`, `nhom2`, `nhom3`, `nhom4`, `nhom5`, `nhom6`, `tenTruyen`, `gioiThieu`, `tacGia`, `imgTruyen`, `dateTruyen`, `dateCapNhap`, `tinhTrang`, `deCu`, `soChu`, `trangThai`, `soChuong`, `viewTruyen`) VALUES
(16, 1, '100', '112', '113', '87', '128', '89', 'Tuyệt Thế Đương Môn', 'Một vạn năm về sau, băng tan.\r\n\r\nĐấu La liên bang đội khảo sát khoa học tại vùng Cực Bắc khoa khảo lúc phát hiện một cái có kim ngân song sắc hoa văn trứng.\r\n\r\nDùng dụng cụ tìm kiếm về sau, phát hiện bên trong lại có sinh mạng thể dấu hiệu, vội vàng đem mang về sở nghiên cứu tiến hành ấp.\r\n<br><br>\r\n\r\nTrứng ấp đi ra, có thể ấp ra lại là một đứa con nít, cùng nhân loại giống nhau như đúc hài nhi, một cái trứng sinh hài tử.\r\n<br><br>\r\n\r\nĐường Gia Tam Thiếu sách mới, Đấu La IV cũng là phần cuối cùng của Đấu La hệ liệt.\r\n<br><br>', 'Thiên Tằm Thổ Đậu', 'kt.jpg', '2022-06-16 15:44:34', '2022-06-21 12:20:14', 0, 0, 0, 1, 0, 0),
(18, 1, '100', '112', '113', '87', '128', '89', 'Đấu La Đại Lục 1', 'Một vạn năm về sau, băng tan.\r\n\r\nĐấu La liên bang đội khảo sát khoa học tại vùng Cực Bắc khoa khảo lúc phát hiện một cái có kim ngân song sắc hoa văn trứng.\r\n\r\nDùng dụng cụ tìm kiếm về sau, phát hiện bên trong lại có sinh mạng thể dấu hiệu, vội vàng đem mang về sở nghiên cứu tiến hành ấp.\r\n<br><br>\r\n\r\nTrứng ấp đi ra, có thể ấp ra lại là một đứa con nít, cùng nhân loại giống nhau như đúc hài nhi, một cái trứng sinh hài tử.\r\n<br><br>\r\n\r\nĐường Gia Tam Thiếu sách mới, Đấu La IV cũng là phần cuối cùng của Đấu La hệ liệt.\r\n<br><br>', 'Thiên Tằm Thổ Đậu 2', 'kt.jpg', '2022-06-16 20:23:25', '2022-06-16 20:23:25', 0, 0, 0, 1, 0, 0),
(19, 1, '107', '123', '86', '87', '127', '89', 'Làm Thanh Xuân Ảo Tưởng Đồ Vật Sau', 'Làm thời gian ngừng lại một giờ, chỉ có ngươi có thể tự do di động thì, ngươi biết làm gì ?\r\n\r\nTạ Yêu, vấn đề này đừng hỏi ta à! Ngươi hỏi nàng ——\r\n\r\nĐúng ! Chính là cái này thừa dịp thời gian ngừng lại đi tới bên cạnh ta, hướng ta đưa tay ra nữ hài!\r\n\r\n------\r\n\r\nThời gian ngừng lại, phản lão hoàn đồng, thời không điện thoại, mèo báo ân. . . Làm trong thanh xuân xuất hiện một món lại một cái hoang đường thêm thần kỳ sự kiện thì, chúng ta cố sự bắt đầu.\r\n\r\n(mấu chốt từ: Ảo tưởng đồ vật, thường ngày, yêu đương)', 'Chuyển Giác Vẫn Trư', '150.webp', '2022-06-17 14:57:42', '2022-06-17 14:57:42', 0, 0, 0, 1, 3, 4),
(21, 1, '100', '124', '113', '114', '88', '89', 'Ta Nhiên Đăng Cũng Có Người Theo Đuổi', 'Chu Nhiên trọng sinh đến trong Hồng Hoang, thành tương lai cũng là tiếng tăm lừng lẫy đại năng một trong, Nhiên Đăng đạo nhân.\r\n\r\n\"Ta tức thân là trong Tử Tiêu Cung 3000 khách một trong, còn có thể làm đến Xiển giáo phó giáo chủ, càng có thể đổi môn đình, trở thành Phật giáo dựng thẳng Tam Thế Phật Nhiên Đăng Thượng Cổ Phật, vì sao không thể tiến thêm một bước? Trước định ra cái nhỏ mục tiêu, trở thành Thánh Nhân phía dưới người số một?\r\n\r\nThành Thánh, ngươi cho rằng rất dễ dàng?\r\n\r\nBất quá vậy liền làm thành đại mục tiêu đi!', 'Tối Ái Sinh Tiếu Thỏ', '150 (1).jpg', '2022-06-17 15:03:25', '2022-06-17 15:50:20', 0, 0, 0, 1, 0, 0),
(22, 1, '100', '97', '113', '129', '88', '89', 'Thần Toán: Bắt Đầu Từ Chối Nữ Đế!', 'Hệ thống + Nữ Đế + đơn nữ + cẩu\r\n\r\nTiêu Phàm, Trái Đất người bình thường xuyên việt đến Tiềm Long đại lục, thức tỉnh Thiên Cơ Thần Toán hệ thống.\r\n\r\nHệ thống có thể toán tận cổ kim!\r\n\r\nLàm người đoán mệnh Tiêu Phàm có thể thu được điểm.\r\n\r\nĐiểm có thể hối đoái đủ loại khác nhau năng lực.\r\n\r\n. . .\r\n\r\nTiêu Phàm không cách nào tu luyện, bình thường cũng chỉ là người bình thường, nhưng tiêu hao điểm có thể để cho nhân vật chính trong thời gian ngắn nắm giữ vô địch thực lực.\r\n\r\nNữ Đế tuyệt mỹ, thực lực mạnh mẽ.\r\n\r\nCho rằng Tiêu Phàm tay trói gà không chặt.\r\n\r\nKhắp nơi bảo vệ Tiêu Phàm.\r\n\r\nMãi đến tận có một ngày, Tiêu Phàm đột nhiên bộc phát ra tuyệt cường thực lực, khiếp sợ vô số người!', 'Nữ Đế 666', '150 (13).jpg', '2022-06-17 15:46:18', '2022-06-17 15:50:31', 0, 0, 0, 1, 0, 0),
(23, 1, '107', '124', '113', '87', '88', '89', 'Trực Tiếp: Cõi Âm Chữa Trị Hằng Ngày, Ta Là Bạch Vô Thường', 'Giang Lâm là một tên Bạch Vô Thường, hằng ngày tiếp dẫn vong hồn, báo mộng.\r\n\r\nNgày nào đó thu được cõi âm trực tiếp hệ thống, tuyên dương địa phủ văn hóa liền có thể có khen thưởng.\r\n\r\nTừ đây, nhân gian có thêm một cái thần kỳ phòng trực tiếp, liên tiếp nhân gian cùng cõi âm.\r\n\r\nPhòng trực tiếp hằng ngày: \"Quỷ: Ngươi đừng tới đây!\"\r\n\r\n\"Này thật là · trầm cảm hằng ngày!\"\r\n\r\n\"Người dẫn chương trình, ngươi giúp ta hỏi một chút bà nội ta, có hay không ngàn tỉ gia sản để cho ta?\"\r\n\r\n\"Vô Thường đại nhân, lại có người ở tìm đường chết, ngươi nhanh cho hắn khoa phổ một xuống Địa ngục.\" . . .\r\n\r\nTìm đường chết? Làm việc? Mười tám tầng Địa ngục tìm hiểu một chút?', 'Mỹ Vị Khẩu Ma', '150 (11).jpg', '2022-06-17 15:56:21', '2022-06-17 15:56:21', 0, 0, 0, 1, 0, 0),
(24, 1, '100', '97', '86', '87', '130', '89', ' Ta Có Thể Cho Ngự Thú Tăng Thêm Đóng Vai Mô Bản', 'Hoang Tiên Vực, từ xưa chính tà bất lưỡng lập!\r\n\r\nNhư thế nào chính?\r\n\r\nNhư thế nào tà?\r\n\r\nĐối mặt thế gian vạn hóa!\r\n\r\nTa từ một kiếm lăng không trung, duy tiện tay bên trong một kiếm!\r\n\r\np/s: truyện này motip lạ, main không có trọng sinh hay là phế vật hoàn khố. Main từ đầu là thiên tài , vừa vào đã bật pk đồ sát mấy thằng công tử bột luôn mà không cần kiêng nể ai hết.', 'Bàn Chi Mãnh Hổ', '150 (8).jpg', '2022-06-17 16:04:18', '2022-06-17 16:04:18', 0, 0, 0, 1, 0, 0),
(25, 1, '100', '97', '86', '129', '128', '89', 'Kiếm Chủ Bát Hoang', 'Hoang Tiên Vực, từ xưa chính tà bất lưỡng lập!\r\n\r\nNhư thế nào chính?\r\n\r\nNhư thế nào tà?\r\n\r\nĐối mặt thế gian vạn hóa!\r\n\r\nTa từ một kiếm lăng không trung, duy tiện tay bên trong một kiếm!\r\n\r\np/s: truyện này motip lạ, main không có trọng sinh hay là phế vật hoàn khố. Main từ đầu là thiên tài , vừa vào đã bật pk đồ sát mấy thằng công tử bột luôn mà không cần kiêng nể ai hết.', 'Hàn Vô Phong', '150 (14).jpg', '2022-06-17 16:05:03', '2022-06-17 16:05:03', 0, 0, 0, 1, 1, 2),
(26, 1, '100', '97', '86', '129', '141', '89', 'Thần Thoại Phân Tích, Biết Rõ Kịch Bản Ta Vô Địch', 'Ngàn năm trước, có một không hai đại tai biến quét sạch Lam Tinh.\r\n\r\nTai nạn khi còn bé, đại địa xuất hiện nguyên một đám kỳ dị mảnh vỡ, mảnh vỡ bên trong là nguyên một đám thế giới.\r\n\r\nNhững thế giới này cũng không giống nhau, có thông qua nội công thi triển võ đạo thế giới, có thông qua pháp nguyên hiện ra tu đạo thế giới, cũng có tiên nhân giáng lâm hủy thiên diệt địa thế giới. Đồng thời đám người phát hiện, mình có thể tiến vào bên trong thế giới kia, cúi người tại mỗi nhân vật trên người, nếu là có thể sống đến thế giới kia kết thúc, liền có thể thu hoạch được thế giới kia vĩ lực', 'Kim Phong Vô Khuyết', '150 (15).jpg', '2022-06-17 16:06:52', '2022-06-17 16:06:52', 0, 0, 0, 1, 0, 0),
(27, 1, '100', '97', '86', '114', '128', '89', 'Lục Địa Kiện Tiên', 'Bị sét đánh thiếu niên tỉnh lại phát hiện mình trở thành Công Tước Phủ ở rể, đêm tân hôn bị phát hiện ngủ ở dì nhỏ trên giường, đối mặt cái này Địa Ngục bắt đầu nhìn hắn như thế nào dựa vào một khối bàn phím gặp dữ hóa lành. Trời không sinh ta Tổ An, phun đạo Vạn Cổ như đêm dài. Phím đến!\r\n\r\nP/s: Các bạn trong quá trình chờ chương có thể kham khảo mấy bộ truyện sau theo mình nghĩ là hay vô cùng :)\r\n1 . Thâu Hương Cao Thủ\r\n\r\n2. Vạn Cổ Tà Đế\r\n\r\n3. Cực Phẩm Toàn Năng Cuồng Y', 'Lục Như Hòa Thượng', '150 (9).jpg', '2022-06-17 16:07:58', '2022-06-17 16:07:58', 0, 0, 0, 1, 0, 0),
(28, 1, '98', '143', '86', '144', '127', '89', 'Phàm Nhân Tu Tiên Chi Phàm Trần Tiên', 'Một cái thâm niên chơi mô hình bất ngờ đi đến Phàm Nhân Tu Tiên truyện thế giới, đưa mắt chung quanh, bên người sát cơ khắp nơi. Đi nhầm một bước chính là bỏ mình hồn tán. Muốn ở thế giới như thế này bên trong sinh tồn được, đúng là cái rất gian nan sự.\r\n\r\n\"Nếu không trước tiên tìm nhân vật chính chứ?\" Người nào đó nghĩ như vậy đến.\r\n\r\nNhưng mà ...\r\n\r\n\"Nhớ không lầm lời nói nhân vật chính thật giống họ Hàn, dài đến khá giống Tống Tiểu Bảo, sau đó ... Còn có cái gì tới?\"\r\n\r\n\r\n', 'Nha La', '150 (12).jpg', '2022-06-17 16:09:52', '2022-06-17 16:09:52', 0, 0, 0, 1, 0, 0),
(29, 1, '101', '140', '86', '129', '88', '89', 'Điên Rồi Sao! Ngươi Nói Cái Này Gọi Là Mục Sư?', 'Hắn phát hiện, chính mình mục sư cùng người khác không giống nhau lắm.\r\n\r\nHắn tăng máu kỹ năng, có thể biến thành trừ máu kỹ năng;\r\n\r\nHắn chúc phúc kỹ năng, có thể biến thành nguyền rủa kỹ năng;\r\n\r\nMà khi hắn sử dụng Phục Hoạt thuật thời điểm. . . Toàn thế giới đều đang kinh ngạc thốt lên: \"Điên rồi sao! Ngươi nói cái này gọi là phụ trợ?\"', 'Mã Linh Thự Đôn Tây Hồng Thị', '150 (16).jpg', '2022-06-17 16:11:27', '2022-06-17 16:11:27', 0, 0, 0, 1, 0, 0),
(30, 1, '100', '124', '86', '114', '128', '89', ' Bắt Đầu 100 Triệu Năm Tu Vi', '【 Vô địch + tông môn + thu đồ đệ + nhiệt huyết sảng văn 】 xuyên việt dị thế giới, thức tỉnh nhiệm vụ hệ thống, bắt đầu chính là 100 triệu năm tu vi.\r\n\r\nKhai sáng tông môn, rộng rãi thu thiên mệnh chi tử.\r\n\r\nMở miệng thành phép thuật, nghịch chuyển sinh tử.\r\n\r\nPhất tay, có thể thuấn sát thiên đạo, có thể chém vĩnh hằng! Trên chín tầng trời, ta là Dạ tôn. La Dạ: Vô địch, từ thời khắc này bắt đầu!', 'Đạo Như Thị', '150 (3).webp', '2022-06-17 16:13:08', '2022-06-17 16:13:08', 0, 0, 0, 1, 0, 0),
(31, 1, '107', '140', '86', '133', '88', '89', 'Toàn Cầu Thú Hóa: Ta Sắp Trở Thành Titan Cự Viên', 'Không biết năng lượng cảm hoá toàn cầu, nhân loại xuất hiện thú hóa bệnh trạng.\r\n\r\nCó người lưng mọc điểu dực, giương cánh lăng không!\r\n\r\nCó người thân thể hóa mãng, mài răng hút máu! Có người kinh biến hổ báo, khiếu chấn động núi rừng!\r\n\r\nSống lại trở về tần không mở ra gien hệ thống, giết địch liền có thể cướp đoạt gien mảnh vỡ, cường hóa tự thân. Bất kể là Titan thần tộc, vẫn là hỗn thế tứ hầu, đều sắp trở thành hắn tiến hóa chất dinh dưỡng! . . .\r\n\r\nTinh thần vạn tộc vĩnh viễn cũng không quên được ngày ấy, thân cao vạn trượng Titan cự viên chỉ điểm một quyền, liền nổ nát chúng nó vũ trụ hạm đội!', 'Ngã Bất Tố Nhân Lạp', '150 (17).jpg', '2022-06-17 16:14:33', '2022-06-17 16:14:33', 0, 0, 0, 1, 0, 0),
(32, 1, '100', '97', '86', '114', '88', '89', 'Nữ Đế: Dưỡng Thành Liễu Thần, Ta Trở Thành Vô Thượng Thần Đế', 'Bắt đầu vượt qua huyền huyễn thế giới, Diệp Thần thu được Nữ Đế Dưỡng Thành Hệ Thống. Nhưng ở hệ thống tiến hành khóa lại thời điểm, chung quanh cũng không có nhân tộc sinh linh, Diệp Thần dưỡng thành đối tượng, bị ép khóa lại vì. . . Một gốc cây liễu! ! Càng làm cho hắn không có nghĩ tới là, Lạc Thần giới một vị vô thượng Nữ Đế, vậy mà trọng sinh ở gốc cây liễu này lên. Sau đó. . .\r\n\r\n\"Đinh! Xét thấy kí chủ dưỡng thành đối tượng tại trong tuyệt cảnh giành lấy cuộc sống mới, kí chủ nhận phản hồi thu được Hỗn Độn Thể truyền thừa!\"\r\n\r\n\"Đinh! Xét thấy kí chủ dưỡng thành đối tượng tiến hóa làm thảo mộc tinh linh, kí chủ nhận phản hồi thu được Chí Tôn Cốt truyền thừa!\"', 'Ngã Hội Trảo Tiểu Ngư', '150 (18).jpg', '2022-06-17 16:16:07', '2022-06-17 16:16:07', 0, 0, 0, 1, 0, 0),
(33, 1, '107', '118', '86', '146', '88', '89', ' Thiên Hàng Quỷ Tài', 'Ta sẽ không kỳ môn độn giáp, cũng không hiểu phong thuỷ bát quái, nhưng người giang hồ đều gọi ta tuyệt thế quỷ tài.\r\n\r\nVì cái gì? Bởi vì ta đầu óc có vũng hố! Tràn đầy đến đến thế kỷ mới hiện đại học thức!\r\n\r\nGiảng đạo lý, kỳ thật ta là rất thuần khiết người có văn hóa, không quản các ngươi tin hay không, dù sao ta là tin.\r\n\r\nP/s: Truyện có yếu tố Harem, anh em đọc cho vui, không hợp thể loại thì bỏ nhé :D', 'Vũ Dị', '150 (4).jpg', '2022-06-17 16:17:48', '2022-06-17 16:17:48', 0, 0, 0, 1, 0, 0),
(34, 1, '98', '147', '86', '131', '141', '89', 'Đạo Hữu Kịch Bản Của Ngươi Thật Dễ Nhìn', '\"Mưa xối bầu trời, hủy đến rất có ý tứ.\"\r\n\r\nTa gọi Tô Ly, là Vũ Thường phong vạn năm đơn truyền (mở phong đến nay) khó gặp một lần (duy nhất). . . Nam đệ tử. . .\r\n\r\nChín tuổi năm đó, sư phụ mang cho ta trở về cái sư muội.\r\n\r\nMười tuổi năm đó, sư phụ đường chạy.\r\n\r\nNgày đó, ta khép lại sách, con mắt cực kỳ chăm chú:\r\n\r\n\"Cô nương, ta xem ngươi ấn đường biến thành màu đen, tất có họa sát thân!\"', 'Lạt Tương Phối Hàm Ngư', '150 (19).jpg', '2022-06-17 16:19:49', '2022-06-17 16:19:49', 0, 0, 0, 1, 0, 0),
(35, 1, '107', '148', '113', '131', '88', '89', ' Bạn Gái Của Ta Dĩ Nhiên Là Ca Sĩ Thần Tượng', 'Xuyên việt thế giới song song, Tô Vũ bất ngờ thức tỉnh rồi giải trí hệ thống\r\n\r\nBởi vì đời trước trải qua, hắn chỉ muốn điệu thấp kiếm tiền, liền lựa chọn trở thành một tên nhà sản xuất âm nhạc\r\n\r\nCó điều, hắn dần dần phát hiện, tự mình nghĩ biết điều, nhưng là hiện thực không cho phép a. . .\r\n\r\nĐại học khai giảng, hoa khôi chủ động dẫn đường, còn tự tay trải giường chiếu, gây nên náo động!\r\n\r\nTùy tiện viết bài ca, liền đem một đường ca sĩ đạp ở dưới chân điên cuồng ma sát!\r\n\r\nBất tri bất giác, hắn danh hiệu càng ngày càng nhiều: Cổ phong tài tử, \"Chữa trị hệ\" nhà sản xuất, \"Âm\" nhạc gia. . .\r\n\r\nLàm Sing! China trận chung kết, hoa khôi hát xong hắn viết 《 Sứ Thanh Hoa 》, ngay ở trước mặt toàn quốc người đối với hắn biểu lộ lúc\r\n\r\nTô Vũ bất đắc dĩ thở dài: \"Ta cmn thật sự chỉ muốn điệu thấp a. . .\"', 'Hương Quả Vô Ngữ', '150 (20).jpg', '2022-06-17 16:21:48', '2022-06-17 16:21:48', 0, 0, 0, 1, 0, 0),
(36, 1, '107', '140', '113', '114', '88', '89', 'Linh Khí Thức Tỉnh: Ta! Bắt Đầu Dùng Hoa Khôi Tế Thiên', 'Linh khí thức tỉnh, yêu ma họa thế, Tần Minh hỉ đề Tế Thiên hệ thống, vạn vật đều có thể hiến tế!\r\n\r\n\"Hệ thống, người sống có thể hay không tế hiến?\"\r\n\r\n\"Có thể!\"\r\n\r\n\"Có thể hay không quá tàn nhẫn?\"\r\n\r\n\"Sẽ không! Bị tế hiến quá người chỉ có thể cảm thấy một chút uể oải mà thôi.\"\r\n\r\nNhưng là. . . Tại sao hoa khôi xem ta ánh mắt như thế u oán?\r\n\r\nTần Minh thức tỉnh đặc thù nghề nghiệp Thánh chức giả, hóa thân mạnh nhất nãi ba, tập công kích, trị liệu, khống chế, phụ trợ làm một thể, lập chí tạo phúc thế nhân.\r\n\r\n\"Mỹ nữ đừng chạy, để ta cho ngươi thêm cái trạng thái!\"\r\n\r\n\"Minh thần, cầu buông tha!\"\r\n\r\n\"Cái kia, hệ thống ngươi có thể tế thiên sao?\"\r\n\r\n\"Đừng nói, hủy diệt đi, ta mệt mỏi!\"\r\n', 'Nhữ Hữu Thần Trư', '150 (21).jpg', '2022-06-17 16:23:02', '2022-06-17 16:23:02', 0, 0, 0, 1, 0, 0),
(37, 1, '100', '112', '113', '87', '130', '89', 'Điên Rồi Ngươi, Người Quản Cái Này Gọi Ngự Thú Sư', 'Một vạn năm về sau, băng tan.\r\n\r\nĐấu La liên bang đội khảo sát khoa học tại vùng Cực Bắc khoa khảo lúc phát hiện một cái có kim ngân song sắc hoa văn trứng.\r\n\r\nDùng dụng cụ tìm kiếm về sau, phát hiện bên trong lại có sinh mạng thể dấu hiệu, vội vàng đem mang về sở nghiên cứu tiến hành ấp.\r\n\r\nTrứng ấp đi ra, có thể ấp ra lại là một đứa con nít, cùng nhân loại giống nhau như đúc hài nhi, một cái trứng sinh hài tử.\r\n\r\nĐường Gia Tam Thiếu sách mới, Đấu La IV cũng là phần cuối cùng của Đấu La hệ liệt.', 'Đường La Tam Thiếu', '150 (12).jpg', '2022-06-18 14:55:40', '2022-06-18 14:55:40', 0, 0, 0, 1, 0, 0),
(39, 1, '111', '117', '86', '87', '127', '89', ' Đệ Nhất Đế Quốc', 'Bạn đã chán ngán với những thể loại cũ, ưa thích sự mới mẻ,\r\n\r\nBạn muốn hóa thân vào nhân vật trong truyện đang đọc, phiêu lưu giữa không gian hiện đại và đầy khoa huyễn.\r\n\r\nBạn có ý tưởng mà chưa có thời gian viết, muốn chia sẻ nó với mọi người, không để rơi vào quên lãng.\r\n\r\nTất cả điều đó có ở truyện [Đệ Nhất Đế Quốc], nơi tác giả luôn lắng nghe, luôn cập nhập và thay đổi. Truyện Lịch sử kết hợp võng du và đô thị.\r\n\r\n(Tất cả tình tiết, nhân vật trong truyện hoàn toàn là hư cấu, không phản ánh bất cứ sự thật lịch sử nào, nếu có trùng lặp chỉ là ngẫu nhiên không bắt chước. Sự kiện lịch sử sẽ bắt đầu từ thế kỷ 0 đến trước những năm 2000.)', 'Thành nobi', '150 (4).jpg', '2022-06-18 17:47:10', '2022-06-18 17:47:10', 0, 0, 0, 1, 0, 0),
(41, 1, '103', '97', '86', '109', '154', '89', ' Trở Thành Thánh Nhân Là Loại Gì Trải Nghiệm', 'Phong thần sau đó, đã ngàn năm.\r\n\r\nTiệt Giáo Thánh Nhân tự khốn Bích Du Cung, tam giới thái bình.\r\n\r\nLúc này, Nhiên Đăng Cổ Phật còn chưa nhập diệt, Thích Già Như Lai còn chưa sinh ra.\r\n\r\nLúc này, Tây Phương Bà Sa Thế Giới, còn chưa mở mang.\r\n\r\nLúc này, Bát Giới vẫn là Thiên Bồng tiên, hầu tử vẫn là thạch đầu, Kim Cô Bổng cũng vẫn chỉ là Định Hải Thần Châm, liền ngay cả Kim Thiền Tử, cũng chỉ là một đầu Kim Thiền.\r\n\r\nTrong Bích Du Cung Thông Thiên Giáo Chủ, cũng đã lặng lẽ mở ra một đoạn kỳ diệu hành trình, cùng tới từ hiện đại cửa hàng giá rẻ lão bản Từ Cát, mỗi ngày trao đổi một lần thân thể.\r\n\r\nThế là, xã hội hiện đại nhiều một cái Hỗn Nguyên Vô Cực Thánh Nhân.\r\n\r\nMà Hồng Hoang Tam Giới, chính là nhiều một cái tỉnh tỉnh mê mê, không biết đạo pháp thần thông, nhưng lại có Thánh Nhân đạo thể, vô số Tiên Thiên Linh Bảo phàm nhân.', 'Yếu Ly Thứ Kinh Kha', '150 (17).jpg', '2022-06-20 19:50:44', '2022-06-20 19:51:42', 0, 0, 0, 1, 4, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `userName` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `quyenHan` int(11) NOT NULL DEFAULT 1,
  `userDate` datetime DEFAULT NULL,
  `imgUser` text COLLATE utf8_unicode_ci DEFAULT 'userImg.webp',
  `ngaySinh` date DEFAULT NULL,
  `sex` int(11) DEFAULT NULL,
  `gioiThieu` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangThaiComment` int(11) NOT NULL DEFAULT 1,
  `trangThaiTk` int(11) NOT NULL DEFAULT 1,
  `exp` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`idUser`, `userName`, `password`, `email`, `quyenHan`, `userDate`, `imgUser`, `ngaySinh`, `sex`, `gioiThieu`, `trangThaiComment`, `trangThaiTk`, `exp`) VALUES
(3, 'Lê Ngọc Đức P H 2 4 8 7 0', '83c4f3bb6cce4dc5cf1452f4f182689f', 'duclnph24870@fpt.edu.vn', 3, NULL, 'userImg.webp', NULL, NULL, NULL, 1, 1, 0),
(4, 'Boss Metruyenchu', '21232f297a57a5a743894a0e4a801fc3', 'zerotwo13102001@gmail.com', 5, NULL, 'userImg.webp', NULL, NULL, NULL, 1, 1, 0),
(5, 'Quyền hạn 1', 'fdc9ac365e0b37b0fa012ae1491807cf', 'test@gmail.com', 1, NULL, 'userImg.webp', NULL, NULL, NULL, 1, 1, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chatchitiet`
--
ALTER TABLE `chatchitiet`
  ADD PRIMARY KEY (`idChatChiTiet`);

--
-- Chỉ mục cho bảng `chuong`
--
ALTER TABLE `chuong`
  ADD PRIMARY KEY (`idChuong`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idComment`);

--
-- Chỉ mục cho bảng `dangdoc`
--
ALTER TABLE `dangdoc`
  ADD PRIMARY KEY (`idDangDoc`);

--
-- Chỉ mục cho bảng `danhdau`
--
ALTER TABLE `danhdau`
  ADD PRIMARY KEY (`idDanhDau`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`idDanhGia`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`idDanhMuc`);

--
-- Chỉ mục cho bảng `icon`
--
ALTER TABLE `icon`
  ADD PRIMARY KEY (`idIcon`);

--
-- Chỉ mục cho bảng `nhiemvu`
--
ALTER TABLE `nhiemvu`
  ADD PRIMARY KEY (`idNhiemVu`);

--
-- Chỉ mục cho bảng `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`idNotify`);

--
-- Chỉ mục cho bảng `replycomment`
--
ALTER TABLE `replycomment`
  ADD PRIMARY KEY (`idReply`);

--
-- Chỉ mục cho bảng `replydanhgia`
--
ALTER TABLE `replydanhgia`
  ADD PRIMARY KEY (`idReply`);

--
-- Chỉ mục cho bảng `sukien`
--
ALTER TABLE `sukien`
  ADD PRIMARY KEY (`idSuKien`);

--
-- Chỉ mục cho bảng `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`idTruyen`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chatchitiet`
--
ALTER TABLE `chatchitiet`
  MODIFY `idChatChiTiet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chuong`
--
ALTER TABLE `chuong`
  MODIFY `idChuong` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `idComment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dangdoc`
--
ALTER TABLE `dangdoc`
  MODIFY `idDangDoc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhdau`
--
ALTER TABLE `danhdau`
  MODIFY `idDanhDau` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `idDanhGia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `idDanhMuc` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=399;

--
-- AUTO_INCREMENT cho bảng `icon`
--
ALTER TABLE `icon`
  MODIFY `idIcon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhiemvu`
--
ALTER TABLE `nhiemvu`
  MODIFY `idNhiemVu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `notify`
--
ALTER TABLE `notify`
  MODIFY `idNotify` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `replycomment`
--
ALTER TABLE `replycomment`
  MODIFY `idReply` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `replydanhgia`
--
ALTER TABLE `replydanhgia`
  MODIFY `idReply` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sukien`
--
ALTER TABLE `sukien`
  MODIFY `idSuKien` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `truyen`
--
ALTER TABLE `truyen`
  MODIFY `idTruyen` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
