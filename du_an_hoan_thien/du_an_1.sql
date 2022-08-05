-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 05, 2022 lúc 11:36 AM
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
  `viewChuong` int(11) NOT NULL DEFAULT 0,
  `soChuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuong`
--

INSERT INTO `chuong` (`idChuong`, `idTruyen`, `idUser`, `tieuDe`, `noiDung`, `dateChuong`, `viewChuong`, `soChuong`) VALUES
(13, 48, 4, 'Thiên Tài Rơi Rụng', 'Tiên Hiệp\r\nHuyền Huyễn\r\nKhoa Huyễn\r\nVõng Du\r\nĐô Thị\r\nĐồng Nhân\r\nDã Sử\r\nCạnh Kỹ\r\nHuyền Nghi\r\nKiếm Hiệp\r\nKỳ Ảo\r\nTình trạng\r\nĐang ra\r\nHoàn thành\r\nThuộc tính\r\nChọn lọc\r\nChất lượng cao\r\nTính cách nhân vật chính\r\nĐiềm Đạm\r\nNhiệt Huyết\r\nVô Sỉ\r\nThiết Huyết\r\nNhẹ Nhàng\r\nCơ Trí\r\nLãnh Khốc\r\nKiêu Ngạo\r\nNgu Ngốc\r\nGiảo Hoạt\r\nBối cảnh thế giới\r\nĐông Phương Huyền Huyễn\r\nDị Thế Đại Lục\r\nVương Triều Tranh Bá\r\nCao Võ Thế Giới\r\nTây Phương Kỳ Huyễn\r\nHiện Đại Ma Pháp\r\nHắc Ám Huyễn Tưởng\r\nLịch Sử Thần Thoại\r\nVõ Hiệp Huyễn Tưởng\r\nCổ Võ Tương Lai\r\nTu Chân Văn Minh\r\nHuyễn Tưởng Tu Tiên\r\nHiện Đại Tu Chân\r\nThần Thoại Tu Chân\r\nCổ Điển Tiên Hiệp\r\nViễn Cổ Hồng Hoang\r\nĐô Thị Sinh Hoạt\r\nĐô Thị Dị Năng\r\nThanh Xuân Vườn Trường\r\nNgu Nhạc Minh Tinh\r\nThương Chiến Chức Tràng\r\nGiá Không Lịch Sử\r\nLịch Sử Quân Sự\r\nDân Gian Truyền Thuyết\r\nLịch Sử Quan Trường\r\nHư Nghĩ Võng Du\r\nDu Hí Dị Giới\r\nĐiện Tử Cạnh Kỹ\r\nThể Dục Cạnh Kỹ\r\nCổ Võ Cơ Giáp\r\nThế Giới Tương Lai\r\nTinh Tế Văn Minh\r\nTiến Hóa Biến Dị\r\nMạt Thế Nguy Cơ\r\nThời Không Xuyên Toa\r\nQuỷ Bí Huyền Nghi\r\nKỳ Diệu Thế Giới\r\nTrinh Tham Thôi Lý\r\nThám Hiểm Sinh Tồn\r\nCung Vi Trạch Đấu\r\nKinh Thương Chủng Điền\r\nTiên Lữ Kỳ Duyên\r\nHào Môn Thế Gia\r\nDị Tộc Luyến Tình\r\nMa Pháp Huyễn Tình\r\nTinh Tế Luyến Ca\r\nLinh Khí Khôi Phục\r\nChư Thiên Vạn Giới\r\nLưu phái\r\nHệ Thống\r\nLão Gia\r\nBàn Thờ\r\nTùy Thân\r\nPhàm Nhân\r\nVô Địch\r\nXuyên Qua\r\nNữ Cường\r\nKhế Ước\r\nTrọng Sinh\r\nHồng Lâu\r\nHọc Viện\r\nBiến Thân\r\nCổ Ngu\r\nChuyển Thế\r\nXuyên Sách\r\nĐàn Xuyên\r\nPhế Tài\r\nDưỡng Thành\r\nCơm Mềm\r\nVô Hạn\r\nMary Sue\r\nCá Mặn\r\nXây Dựng Thế Lực\r\nXuyên Nhanh\r\nNữ Phụ\r\nVả Mặt\r\nSảng Văn\r\nXuyên Không\r\nNgọt Sủng\r\nNgự Thú\r\nĐiền Viên\r\nToàn Dân\r\nMỹ Thực\r\nPhản Phái\r\nSau Màn\r\nThị giác\r\nGóc Nhìn Nam\r\nGóc Nhìn Nữ\r\nNgôi Thứ Nhất\r\nMới cập nhật\r\nLượt đọc\r\nĐiểm đánh giá\r\nCất giữ\r\nYêu thích\r\nĐề cử\r\nBình luận\r\nSố chương\r\nKết quả cho: đấu phá thương\r\n\r\n\r\nTu Luyện Theo Đấu Phá Thương Khung Bắt Đầu\r\nHệ thống nơi tay, thế giới ta có, thiếu niên người mang vạn năng hệ thống, theo Đấu Phá Thương Khung bắt đầu tu luyện, đây là một người hiện đại tại dị giới tu hành cố sự. . . Ps: truyện full\r\nGiang Hồ Hữu Tửu\r\n514 chươngTiên Hiệp\r\nHuyền Huyễn\r\nKhoa Huyễn\r\nVõng Du\r\nĐô Thị\r\nĐồng Nhân\r\nDã Sử\r\nCạnh Kỹ\r\nHuyền Nghi\r\nKiếm Hiệp\r\nKỳ Ảo\r\nTình trạng\r\nĐang ra\r\nHoàn thành\r\nThuộc tính\r\nChọn lọc\r\nChất lượng cao\r\nTính cách nhân vật chính\r\nĐiềm Đạm\r\nNhiệt Huyết\r\nVô Sỉ\r\nThiết Huyết\r\nNhẹ Nhàng\r\nCơ Trí\r\nLãnh Khốc\r\nKiêu Ngạo\r\nNgu Ngốc\r\nGiảo Hoạt\r\nBối cảnh thế giới\r\nĐông Phương Huyền Huyễn\r\nDị Thế Đại Lục\r\nVương Triều Tranh Bá\r\nCao Võ Thế Giới\r\nTây Phương Kỳ Huyễn\r\nHiện Đại Ma Pháp\r\nHắc Ám Huyễn Tưởng\r\nLịch Sử Thần Thoại\r\nVõ Hiệp Huyễn Tưởng\r\nCổ Võ Tương Lai\r\nTu Chân Văn Minh\r\nHuyễn Tưởng Tu Tiên\r\nHiện Đại Tu Chân\r\nThần Thoại Tu Chân\r\nCổ Điển Tiên Hiệp\r\nViễn Cổ Hồng Hoang\r\nĐô Thị Sinh Hoạt\r\nĐô Thị Dị Năng\r\nThanh Xuân Vườn Trường\r\nNgu Nhạc Minh Tinh\r\nThương Chiến Chức Tràng\r\nGiá Không Lịch Sử\r\nLịch Sử Quân Sự\r\nDân Gian Truyền Thuyết\r\nLịch Sử Quan Trường\r\nHư Nghĩ Võng Du\r\nDu Hí Dị Giới\r\nĐiện Tử Cạnh Kỹ\r\nThể Dục Cạnh Kỹ\r\nCổ Võ Cơ Giáp\r\nThế Giới Tương Lai\r\nTinh Tế Văn Minh\r\nTiến Hóa Biến Dị\r\nMạt Thế Nguy Cơ\r\nThời Không Xuyên Toa\r\nQuỷ Bí Huyền Nghi\r\nKỳ Diệu Thế Giới\r\nTrinh Tham Thôi Lý\r\nThám Hiểm Sinh Tồn\r\nCung Vi Trạch Đấu\r\nKinh Thương Chủng Điền\r\nTiên Lữ Kỳ Duyên\r\nHào Môn Thế Gia\r\nDị Tộc Luyến Tình\r\nMa Pháp Huyễn Tình\r\nTinh Tế Luyến Ca\r\nLinh Khí Khôi Phục\r\nChư Thiên Vạn Giới\r\nLưu phái\r\nHệ Thống\r\nLão Gia\r\nBàn Thờ\r\nTùy Thân\r\nPhàm Nhân\r\nVô Địch\r\nXuyên Qua\r\nNữ Cường\r\nKhế Ước\r\nTrọng Sinh\r\nHồng Lâu\r\nHọc Viện\r\nBiến Thân\r\nCổ Ngu\r\nChuyển Thế\r\nXuyên Sách\r\nĐàn Xuyên\r\nPhế Tài\r\nDưỡng Thành\r\nCơm Mềm\r\nVô Hạn\r\nMary Sue\r\nCá Mặn\r\nXây Dựng Thế Lực\r\nXuyên Nhanh\r\nNữ Phụ\r\nVả Mặt\r\nSảng Văn\r\nXuyên Không\r\nNgọt Sủng\r\nNgự Thú\r\nĐiền Viên\r\nToàn Dân\r\nMỹ Thực\r\nPhản Phái\r\nSau Màn\r\nThị giác\r\nGóc Nhìn Nam\r\nGóc Nhìn Nữ\r\nNgôi Thứ Nhất\r\nMới cập nhật\r\nLượt đọc\r\nĐiểm đánh giá\r\nCất giữ\r\nYêu thích\r\nĐề cử\r\nBình luận\r\nSố chương\r\nKết quả cho: đấu phá thương\r\n\r\n\r\nTu Luyện Theo Đấu Phá Thương Khung Bắt Đầu\r\nHệ thống nơi tay, thế giới ta có, thiếu niên người mang vạn năng hệ thống, theo Đấu Phá Thương Khung bắt đầu tu luyện, đây là một người hiện đại tại dị giới tu hành cố sự. . . Ps: truyện full\r\nGiang Hồ Hữu Tửu\r\n514 chương', '2022-07-29 19:31:50', 12, 1),
(14, 48, 4, 'Thiên Tài Rơi Rụng 2', 'Tiên Hiệp\r\nHuyền Huyễn\r\nKhoa Huyễn\r\nVõng Du\r\nĐô Thị\r\nĐồng Nhân\r\nDã Sử\r\nCạnh Kỹ\r\nHuyền Nghi\r\nKiếm Hiệp\r\nKỳ Ảo\r\nTình trạng\r\nĐang ra\r\nHoàn thành\r\nThuộc tính\r\nChọn lọc\r\nChất lượng cao\r\nTính cách nhân vật chính\r\nĐiềm Đạm\r\nNhiệt Huyết\r\nVô Sỉ\r\nThiết Huyết\r\nNhẹ Nhàng\r\nCơ Trí\r\nLãnh Khốc\r\nKiêu Ngạo\r\nNgu Ngốc\r\nGiảo Hoạt\r\nBối cảnh thế giới\r\nĐông Phương Huyền Huyễn\r\nDị Thế Đại Lục\r\nVương Triều Tranh Bá\r\nCao Võ Thế Giới\r\nTây Phương Kỳ Huyễn\r\nHiện Đại Ma Pháp\r\nHắc Ám Huyễn Tưởng\r\nLịch Sử Thần Thoại\r\nVõ Hiệp Huyễn Tưởng\r\nCổ Võ Tương Lai\r\nTu Chân Văn Minh\r\nHuyễn Tưởng Tu Tiên\r\nHiện Đại Tu Chân\r\nThần Thoại Tu Chân\r\nCổ Điển Tiên Hiệp\r\nViễn Cổ Hồng Hoang\r\nĐô Thị Sinh Hoạt\r\nĐô Thị Dị Năng\r\nThanh Xuân Vườn Trường\r\nNgu Nhạc Minh Tinh\r\nThương Chiến Chức Tràng\r\nGiá Không Lịch Sử\r\nLịch Sử Quân Sự\r\nDân Gian Truyền Thuyết\r\nLịch Sử Quan Trường\r\nHư Nghĩ Võng Du\r\nDu Hí Dị Giới\r\nĐiện Tử Cạnh Kỹ\r\nThể Dục Cạnh Kỹ\r\nCổ Võ Cơ Giáp\r\nThế Giới Tương Lai\r\nTinh Tế Văn Minh\r\nTiến Hóa Biến Dị\r\nMạt Thế Nguy Cơ\r\nThời Không Xuyên Toa\r\nQuỷ Bí Huyền Nghi\r\nKỳ Diệu Thế Giới\r\nTrinh Tham Thôi Lý\r\nThám Hiểm Sinh Tồn\r\nCung Vi Trạch Đấu\r\nKinh Thương Chủng Điền\r\nTiên Lữ Kỳ Duyên\r\nHào Môn Thế Gia\r\nDị Tộc Luyến Tình\r\nMa Pháp Huyễn Tình\r\nTinh Tế Luyến Ca\r\nLinh Khí Khôi Phục\r\nChư Thiên Vạn Giới\r\nLưu phái\r\nHệ Thống\r\nLão Gia\r\nBàn Thờ\r\nTùy Thân\r\nPhàm Nhân\r\nVô Địch\r\nXuyên Qua\r\nNữ Cường\r\nKhế Ước\r\nTrọng Sinh\r\nHồng Lâu\r\nHọc Viện\r\nBiến Thân\r\nCổ Ngu\r\nChuyển Thế\r\nXuyên Sách\r\nĐàn Xuyên\r\nPhế Tài\r\nDưỡng Thành\r\nCơm Mềm\r\nVô Hạn\r\nMary Sue\r\nCá Mặn\r\nXây Dựng Thế Lực\r\nXuyên Nhanh\r\nNữ Phụ\r\nVả Mặt\r\nSảng Văn\r\nXuyên Không\r\nNgọt Sủng\r\nNgự Thú\r\nĐiền Viên\r\nToàn Dân\r\nMỹ Thực\r\nPhản Phái\r\nSau Màn\r\nThị giác\r\nGóc Nhìn Nam\r\nGóc Nhìn Nữ\r\nNgôi Thứ Nhất\r\nMới cập nhật\r\nLượt đọc\r\nĐiểm đánh giá\r\nCất giữ\r\nYêu thích\r\nĐề cử\r\nBình luận\r\nSố chương\r\nKết quả cho: đấu phá thương\r\n\r\n\r\nTu Luyện Theo Đấu Phá Thương Khung Bắt Đầu\r\nHệ thống nơi tay, thế giới ta có, thiếu niên người mang vạn năng hệ thống, theo Đấu Phá Thương Khung bắt đầu tu luyện, đây là một người hiện đại tại dị giới tu hành cố sự. . . Ps: truyện full\r\nGiang Hồ Hữu Tửu\r\n514 chươngTiên Hiệp\r\nHuyền Huyễn\r\nKhoa Huyễn\r\nVõng Du\r\nĐô Thị\r\nĐồng Nhân\r\nDã Sử\r\nCạnh Kỹ\r\nHuyền Nghi\r\nKiếm Hiệp\r\nKỳ Ảo\r\nTình trạng\r\nĐang ra\r\nHoàn thành\r\nThuộc tính\r\nChọn lọc\r\nChất lượng cao\r\nTính cách nhân vật chính\r\nĐiềm Đạm\r\nNhiệt Huyết\r\nVô Sỉ\r\nThiết Huyết\r\nNhẹ Nhàng\r\nCơ Trí\r\nLãnh Khốc\r\nKiêu Ngạo\r\nNgu Ngốc\r\nGiảo Hoạt\r\nBối cảnh thế giới\r\nĐông Phương Huyền Huyễn\r\nDị Thế Đại Lục\r\nVương Triều Tranh Bá\r\nCao Võ Thế Giới\r\nTây Phương Kỳ Huyễn\r\nHiện Đại Ma Pháp\r\nHắc Ám Huyễn Tưởng\r\nLịch Sử Thần Thoại\r\nVõ Hiệp Huyễn Tưởng\r\nCổ Võ Tương Lai\r\nTu Chân Văn Minh\r\nHuyễn Tưởng Tu Tiên\r\nHiện Đại Tu Chân\r\nThần Thoại Tu Chân\r\nCổ Điển Tiên Hiệp\r\nViễn Cổ Hồng Hoang\r\nĐô Thị Sinh Hoạt\r\nĐô Thị Dị Năng\r\nThanh Xuân Vườn Trường\r\nNgu Nhạc Minh Tinh\r\nThương Chiến Chức Tràng\r\nGiá Không Lịch Sử\r\nLịch Sử Quân Sự\r\nDân Gian Truyền Thuyết\r\nLịch Sử Quan Trường\r\nHư Nghĩ Võng Du\r\nDu Hí Dị Giới\r\nĐiện Tử Cạnh Kỹ\r\nThể Dục Cạnh Kỹ\r\nCổ Võ Cơ Giáp\r\nThế Giới Tương Lai\r\nTinh Tế Văn Minh\r\nTiến Hóa Biến Dị\r\nMạt Thế Nguy Cơ\r\nThời Không Xuyên Toa\r\nQuỷ Bí Huyền Nghi\r\nKỳ Diệu Thế Giới\r\nTrinh Tham Thôi Lý\r\nThám Hiểm Sinh Tồn\r\nCung Vi Trạch Đấu\r\nKinh Thương Chủng Điền\r\nTiên Lữ Kỳ Duyên\r\nHào Môn Thế Gia\r\nDị Tộc Luyến Tình\r\nMa Pháp Huyễn Tình\r\nTinh Tế Luyến Ca\r\nLinh Khí Khôi Phục\r\nChư Thiên Vạn Giới\r\nLưu phái\r\nHệ Thống\r\nLão Gia\r\nBàn Thờ\r\nTùy Thân\r\nPhàm Nhân\r\nVô Địch\r\nXuyên Qua\r\nNữ Cường\r\nKhế Ước\r\nTrọng Sinh\r\nHồng Lâu\r\nHọc Viện\r\nBiến Thân\r\nCổ Ngu\r\nChuyển Thế\r\nXuyên Sách\r\nĐàn Xuyên\r\nPhế Tài\r\nDưỡng Thành\r\nCơm Mềm\r\nVô Hạn\r\nMary Sue\r\nCá Mặn\r\nXây Dựng Thế Lực\r\nXuyên Nhanh\r\nNữ Phụ\r\nVả Mặt\r\nSảng Văn\r\nXuyên Không\r\nNgọt Sủng\r\nNgự Thú\r\nĐiền Viên\r\nToàn Dân\r\nMỹ Thực\r\nPhản Phái\r\nSau Màn\r\nThị giác\r\nGóc Nhìn Nam\r\nGóc Nhìn Nữ\r\nNgôi Thứ Nhất\r\nMới cập nhật\r\nLượt đọc\r\nĐiểm đánh giá\r\nCất giữ\r\nYêu thích\r\nĐề cử\r\nBình luận\r\nSố chương\r\nKết quả cho: đấu phá thương\r\n\r\n\r\nTu Luyện Theo Đấu Phá Thương Khung Bắt Đầu\r\nHệ thống nơi tay, thế giới ta có, thiếu niên người mang vạn năng hệ thống, theo Đấu Phá Thương Khung bắt đầu tu luyện, đây là một người hiện đại tại dị giới tu hành cố sự. . . Ps: truyện full\r\nGiang Hồ Hữu Tửu\r\n514 chương', '2022-07-29 19:32:00', 6, 2),
(16, 45, 6, 'test tiêu', 'Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	lê ngọc đức\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	bvc\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa  bbỏ\r\n37\r\n1\r\n289\r\n312\r\n\r\nXóa bỏ Xóa  bbỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	lê ngọc Đức\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0\r\n Hiện tất	|			Số hàng: \r\n25\r\nSố hàng: \r\nTìm kiếm trong bảng này\r\nSort by key: \r\nKhông\r\n+ Tùy chọn\r\nToàn văn\r\nidTruyen	\r\nidUser	\r\nnhom1	\r\nnhom2	\r\nnhom3	\r\nnhom4	\r\nnhom5	\r\nnhom6	\r\ntenTruyen	\r\ngioiThieu	\r\ntacGia	\r\nimgTruyen	\r\ndateTruyen	\r\ndateCapNhap	\r\ntinhTrang	\r\ndeCu	\r\nsoChu Giảm dần 1	\r\ntrangThai	\r\nsoChuong	\r\nviewTruyen	\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n36\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-17 16:23:02\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n37\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 14:55:40\r\n2022-07-27 15:07:11\r\n0\r\n0\r\n0\r\n1\r\n0\r\n0\r\n	\r\nSửa Sửa\r\nChép Chép\r\nXóa bỏ Xóa bỏ\r\n39\r\n1\r\n289\r\n312\r\n299\r\n305\r\n361\r\n394\r\ntest efit truyện\r\n test thuitest thuitest thuitest thui\r\nNgọc Đức\r\n29816.jpg\r\n2022-06-18 17:47:10\r\n2022-07-27 15:0', '2022-07-29 19:41:37', 0, 1),
(17, 48, 4, 'Thiên Tài Rơi Rụng', 'Google Dịchhttps://translate.google.com › ...\r\nDịch vụ miễn phí của Google dịch nhanh các từ, cụm từ và trang web giữa tiếng Việt và hơn 100 ngôn ngữ khác.\r\nDịch\r\nDịch vụ miễn phí của Google dịch nhanh các từ, cụm từ và trang ...\r\nMỚI! Chép lời\r\nLiên tục dịch lời nói gần như tức thì. · Tải về trên Google Play ...\r\nNgôn ngữ\r\nKhám phá thế giới bằng hơn 100 ngôn ngữ. Tải về trên Google ...\r\nGoogle Translate Trợ giúp\r\nBạn có thể đóng góp cho Google Dịch khi xem xét các bản dịch ...\r\nMore results from google.com »\r\n\r\nGoogle Dịch - Ứng dụng trên Google Playhttps://play.google.com › store › apps › details › id=com....\r\nDịch văn bản: Dịch giữa 108 ngôn ngữ bằng cách nhập dữ liệu • Nhấn để dịch: Sao chép văn bản trong bất kỳ ứng dụng nào và nhấn vào biểu tượng Google Dịch để ...\r\n Rating: 4.4 · ‎8,481,652 votes · ‎Free · ‎Android · ‎Utilities/Tools\r\n\r\nMẹo sử dụng Google dịch để dịch thông tin chính xáchttps://www.thegioididong.com › me...· Translate this page\r\nGoogle Translate là ứng dụng dịch ngôn ngữ được sử dụng nhiều nhất hiện nay với hơn 100 ngôn ngữ trên khắp thế giới. Ứng dụng có giao diện đơn giản dễ sử ...\r\n\r\nTranslate t - Google Dịchhttp://translate.google.com.vn › trans...· Translate this page\r\nNo information is available for this page.\r\nLearn why\r\n\r\nGoogle Dịch trên App Store - Applehttps://apps.apple.com › app › googl...· Translate this page\r\nĐọc nhận xét, so sánh xếp hạng của khách hàng, xem ảnh chụp màn hình và tìm hiểu thêm về Google Dịch. Tải về và sử dụng Google Dịch trên iPhone, iPad, ...\r\n Rating: 4.1 · ‎17,116 reviews · ‎Free · ‎iOS\r\n\r\nGoogle Translate Helphttps://support.google.com › translate\r\nGet started with Google Translate · Translate text, images, handwGoogle Dịchhttps://translate.google.com › ...\r\nDịch vụ miễn phí của Google dịch nhanh các từ, cụm từ và trang web giữa tiếng Việt và hơn 100 ngôn ngữ khác.\r\nDịch\r\nDịch vụ miễn phí của Google dịch nhanh các từ, cụm từ và trang ...\r\nMỚI! Chép lời\r\nLiên tục dịch lời nói gần như tức thì. · Tải về trên Google Play ...\r\nNgôn ngữ\r\nKhám phá thế giới bằng hơn 100 ngôn ngữ. Tải về trên Google ...\r\nGoogle Translate Trợ giúp\r\nBạn có thể đóng góp cho Google Dịch khi xem xét các bản dịch ...\r\nMore results from google.com »\r\n\r\nGoogle Dịch - Ứng dụng trên Google Playhttps://play.google.com › store › apps › details › id=com....\r\nDịch văn bản: Dịch giữa 108 ngôn ngữ bằng cách nhập dữ liệu • Nhấn để dịch: Sao chép văn bản trong bất kỳ ứng dụng nào và nhấn vào biểu tượng Google Dịch để ...\r\n Rating: 4.4 · ‎8,481,652 votes · ‎Free · ‎Android · ‎Utilities/Tools\r\n\r\nMẹo sử dụng Google dịch để dịch thông tin chính xáchttps://www.thegioididong.com › me...· Translate this page\r\nGoogle Translate là ứng dụng dịch ngôn ngữ được sử dụng nhiều nhất hiện nay với hơn 100 ngôn ngữ trên khắp thế giới. Ứng dụng có giao diện đơn giản dễ sử ...\r\n\r\nTranslate t - Google Dịchhttp://translate.google.com.vn › trans...· Translate this page\r\nNo information is available for this page.\r\nLearn why\r\n\r\nGoogle Dịch trên App Store - Applehttps://apps.apple.com › app › googl...· Translate this page\r\nĐọc nhận xét, so sánh xếp hạng của khách hàng, xem ảnh chụp màn hình và tìm hiểu thêm về Google Dịch. Tải về và sử dụng Google Dịch trên iPhone, iPad, ...\r\n Rating: 4.1 · ‎17,116 reviews · ‎Free · ‎iOS\r\n\r\nGoogle Translate Helphttps://support.google.com › translate\r\nGet started with Google Translate · Translate text, images, handw', '2022-07-31 00:24:45', 6, 3),
(18, 48, 4, 'Sơ Lâm Dị Giới', 'Đấu La Đại Lục là một bộ phim truyền hình cổ trang huyền ảo Trung Quốc do Dương Chấn Vũ đạo diễn, Vương Quyện viết kịch bản và được chuyển thể từ truyện tranh cùng tên của tác giả Đường Gia Tam Thiếu. Nội dung phim xoay quanh các nhân vật Đường Tam và Tiểu Vũ. Wikipedia\r\nEnding theme: \"Starry River\" (星河) by Wu Xuanyi\r\nProduction companies: Tencent Penguin Pictures; New Classics Media\r\nGenre: Fantasy; Action; Adventure; Xianxia\r\nOpening theme: \"Standing Proudly at the Edge of the Clouds\" (傲立云端) by Gao Tai Yu, Ao Zi Yi and Liu Run Nan\r\nBased on: Douluo Dalu (斗罗大陆); by Tang Jia San Shao\r\nOriginal network: Tencent Video; CCTV\r\nClaim this knowledge panel\r\nFeedback\r\nĐánh giá\r\nRate and review\r\nProfile image\r\nLê Ngọc Đức PH 2 4 8 7 0\r\nPosting publicly.\r\n \r\n \r\n \r\n \r\nAudience reviews\r\nProfile image\r\n    \r\nI personally enjoyed watching Douluo Continent Drama. Some parts are really hilarious ! It is an inspiring and fascinating drama with great team spirit and promoting a positive culture....\r\nPeople also search for\r\n\r\nThe Rebel Princess\r\n2021\r\n\r\nRakshasa Street\r\n2017\r\n\r\nHot Girl\r\nĐấu La Đại Lục. Mở đầu câu chuyện xuất hiện một nam nhân tên Đường Tam bị Đường Môn truy sát, là tông môn nổi tiếng với các loại cơ quan ám khí nhất là ...\r\n\r\nĐấu La Đại Lục – Wikipedia tiếng Việthttps://vi.wikipedia.org › wiki › Đấu...· Translate this page\r\nđấu la đại lục from vi.wikipedia.org\r\nĐấu La Đại Lục (Giản thể: 斗罗大陆,D Bính âm: Dòu Luō Dà Lù) là một bộ phim truyền hình cổ trang huyền ảo Trung Quốc do Dương Chấn Vũ đạo diễn, ...\r\nQuốc gia chiếu đầu tiên: Trung Quốc\r\nSố tập: 40 (bản gốc); 33 (bản CCTV)\r\nĐạo diễn: Dương Chấn Vũ\r\nKịch bản: Vương Quyện\r\n\r\nĐấu La Đại Lục Tập 220 VIETSUB - Thuyết Minh - Motphimhttps://motchill.net › phim › dau-la-d...· Translate this page\r\nĐấu La Đại Lục. Douluo Dalu 2nd Season (2018). Trạng thái: Tập 219 Vietsub; Sắp chiếu: ...\r\n\r\nĐấu La Đại Lục - HHTQ.TVhttps://hhtq.tv › dau-la-dai-luc· Translate this page\r\nĐấu La Đại Lục là câu chuyện về quá trình trưởng thành của Đường Tam tại đại lục Đấu La, cùng tình cảm từ thuở thanh mai trúc mã với “đại tỷ” Tiểu Vũ đầy bí ...\r\n\r\nXem Phim Đấu La Đại Lục Vietsub | HHNINJA.XYZhttps://www.hhninja.xyz › dau-la-dai...· Translate this page\r\nHoạt Hình Ninja - Web phim Hoạt Hình Trung Quốc. Truy cập hhninja.xyz để xem những bộ phim mới và hay nhất.\r\nImages\r\nImage result for đấu la đại lục\r\nImage result for đấu la đại lục\r\nImage result for đấu la đại lục\r\nImage result for đấu la đại lục\r\nẢnh khác\r\nRelated searches\r\nđấu la đại lục vietsub\r\nđấu la đại lục truyenfull\r\nđấu la đại lục motchill\r\nđấu la đại lục tập 1\r\nđấu la đại lụchhkungfu\r\nđấu la đại lục vietsub full hd\r\nđấu la đại lục game\r\nđấu la đại lục animehay\r\n1	\r\n2\r\n3\r\n4\r\n5\r\n6\r\n7\r\n8\r\n9\r\n10\r\nNext\r\nAlready watched\r\nWant to watch\r\nAbout\r\n8.3/10 · IMDb\r\n91% liked this TV show\r\nGoogle users\r\nĐấu La Đại Lục là một bộ phim truyền hình cổ trang huyền ảo Trung Quốc do Dương Chấn Vũ đạo diễn, Vương Quyện viết kịch bản và được chuyển thể từ truyện tranh cùng tên của tác giả Đường Gia Tam Thiếu. Nội dung phim xoay quanh các nhân vật Đường Tam và Tiểu Vũ. Wikipedia\r\nEnding theme: \"Starry River\" (星河) by Wu Xuanyi\r\nProduction companies: Tencent Penguin Pictures; New Classics Media\r\nGenre: Fantasy; Action; Adventure; Xianxia\r\nOpening theme: \"Standing Proudly at the Edge of the Clouds\" (傲立云端) by Gao Tai Yu, Ao Zi Yi and Liu Run Nan\r\nBased on: Douluo Dalu (斗罗大陆); by Tang Jia San Shao\r\nOriginal network: Tencent Video; CCTV\r\nClaim this knowledge panel\r\nFeedback\r\nĐánh giá\r\nRate and review\r\nProfile image\r\nLê Ngọc Đức PH 2 4 8 7 0\r\nPosting publicly.\r\n \r\n \r\n \r\n \r\nAudience reviews\r\nProfile image\r\n    \r\nI personally enjoyed watching Douluo Continent Drama. Some parts are really hilarious ! It is an inspiring and fascinating drama with great team spirit and promoting a positive culture....\r\nPeople also search for\r\n\r\nThe Rebel Princess\r\n2021\r\n\r\nRakshasa Street\r\n2017\r\n\r\nHot Girl\r\n2016\r\n\r\nIf I Die Tomorrow\r\nSince 2018\r\nSee more\r\nVietnam\r\nHanoi - From your IP address\r\n - Update location\r\nHelpSend feedbackPrivacyTerms\r\n2016\r\n\r\nIf I Die Tomorrow\r\nSince 2018', '2022-08-02 17:19:05', 3, 4);
INSERT INTO `chuong` (`idChuong`, `idTruyen`, `idUser`, `tieuDe`, `noiDung`, `dateChuong`, `viewChuong`, `soChuong`) VALUES
(19, 62, 4, 'Ngự Thú Thế Giới', 'Dịch vụ miễn phí của Google dịch nhanh các từ, cụm từ và trang web giữa tiếng Việt và hơn 100 ngôn ngữ khác.\r\nDịch\r\nDịch vụ miễn phí của Google dịch nhanh các từ, cụm từ và trang ...\r\nCải thiện Dịch\r\nGiúp cải thiện Google Dịch cho ngôn ngữ bạn sử dụng. Góp ...\r\nGoogle Translate Trợ giúp\r\nBạn có thể đóng góp cho Google Dịch khi xem xét các bản dịch ...\r\nMore results from google.com »\r\n\r\nGoogle Dịchhttps://translate.google.com.vn\r\nDịch vụ miễn phí của Google dịch nhanh các từ, cụm từ và trang web giữa tiếng Việt và hơn 100 ngôn ngữ khác.\r\n\r\nGoogle Dịch - Ứng dụng trên Google Playhttps://play.google.com › apps › details· Translate this page\r\nDịch văn bản: Dịch giữa 108 ngôn ngữ bằng cách nhập dữ liệu • Nhấn để dịch: Sao chép văn bản trong bất kỳ ứng dụng nào và nhấn vào biểu tượng Google Dịch để ...\r\n Rating: 4.4 · ‎8,484,036 votes · ‎Free · ‎Android · ‎Utilities/Tools\r\n\r\nMẹo sử dụng Google dịch để dịch thông tin chính xáchttps://www.thegioididong.com › me...· Translate this page\r\nGoogle Translate là ứng dụng dịch ngôn ngữ được sử dụng nhiều nhất hiện nay với hơn 100 ngôn ngữ trên khắp thế giới. Ứng dụng có giao diện đơn giản dễ sử ...\r\n\r\nGoogle Dịch trên App Store - Applehttps://apps.apple.com › app › googl...· Translate this page\r\nĐọc nhận xét, so sánh xếp hạng của khách hàng, xem ảnh chụp màn hình và tìm hiểu thêm về Google Dịch. Tải về và sử dụng Google Dịch trên iPhone, iPad, ...\r\n Rating: 4.1 · ‎17,123 reviews · ‎Free · ‎iOS\r\n\r\nGoogle Translate Helphttps://support.google.com › translate\r\nGet started with Google Translate · Translate text, images, handwriting, or speech · Use your history & phrasebook · Make Translate work for you · Announcements.\r\n\r\nFBNC - Ra mắt cộng đồng Google Dịch tại Việt Nam - YouTubehttps://www.youtube.com › watch\r\n\r\nPREVIEW\r\n1:19\r\nHôm 18/3, Google chính thức giới thiệu Chức năng Cộng Đồng Google Dịch tại Việt Nam - Google Translate Community. Cộng đồng Google Dịch là ...\r\nYouTube · FBNC Vietnam · Mar 19, 2015Dịch vụ miễn phí của Google dịch nhanh các từ, cụm từ và trang web giữa tiếng Việt và hơn 100 ngôn ngữ khác.\r\nDịch\r\nDịch vụ miễn phí của Google dịch nhanh các từ, cụm từ và trang ...\r\nCải thiện Dịch\r\nGiúp cải thiện Google Dịch cho ngôn ngữ bạn sử dụng. Góp ...\r\nGoogle Translate Trợ giúp\r\nBạn có thể đóng góp cho Google Dịch khi xem xét các bản dịch ...\r\nMore results from google.com »\r\n\r\nGoogle Dịchhttps://translate.google.com.vn\r\nDịch vụ miễn phí của Google dịch nhanh các từ, cụm từ và trang web giữa tiếng Việt và hơn 100 ngôn ngữ khác.\r\n\r\nGoogle Dịch - Ứng dụng trên Google Playhttps://play.google.com › apps › details· Translate this page\r\nDịch văn bản: Dịch giữa 108 ngôn ngữ bằng cách nhập dữ liệu • Nhấn để dịch: Sao chép văn bản trong bất kỳ ứng dụng nào và nhấn vào biểu tượng Google Dịch để ...\r\n Rating: 4.4 · ‎8,484,036 votes · ‎Free · ‎Android · ‎Utilities/Tools\r\n\r\nMẹo sử dụng Google dịch để dịch thông tin chính xáchttps://www.thegioididong.com › me...· Translate this page\r\nGoogle Translate là ứng dụng dịch ngôn ngữ được sử dụng nhiều nhất hiện nay với hơn 100 ngôn ngữ trên khắp thế giới. Ứng dụng có giao diện đơn giản dễ sử ...\r\n\r\nGoogle Dịch trên App Store - Applehttps://apps.apple.com › app › googl...· Translate this page\r\nĐọc nhận xét, so sánh xếp hạng của khách hàng, xem ảnh chụp màn hình và tìm hiểu thêm về Google Dịch. Tải về và sử dụng Google Dịch trên iPhone, iPad, ...\r\n Rating: 4.1 · ‎17,123 reviews · ‎Free · ‎iOS\r\n\r\nGoogle Translate Helphttps://support.google.com › translate\r\nGet started with Google Translate · Translate text, images, handwriting, or speech · Use your history & phrasebook · Make Translate work for you · Announcements.\r\n\r\nFBNC - Ra mắt cộng đồng Google Dịch tại Việt Nam - YouTubehttps://www.youtube.com › watch\r\n\r\nPREVIEW\r\n1:19\r\nHôm 18/3, Google chính thức giới thiệu Chức năng Cộng Đồng Google Dịch tại Việt Nam - Google Translate Community. Cộng đồng Google Dịch là ...\r\nYouTube · FBNC Vietnam · Mar 19, 2015Dịch vụ miễn phí của Google dịch nhanh các từ, cụm từ và trang web giữa tiếng Việt và hơn 100 ngôn ngữ khác.\r\nDịch\r\nDịch vụ miễn phí của Google dịch nhanh các từ, cụm từ và trang ...\r\nCải thiện Dịch\r\nGiúp cải thiện Google Dịch cho ngôn ngữ bạn sử dụng. Góp ...\r\nGoogle Translate Trợ giúp\r\nBạn có thể đóng góp cho Google Dịch khi xem xét các bản dịch ...\r\nMore results from google.com »\r\n\r\nGoogle Dịchhttps://translate.google.com.vn\r\nDịch vụ miễn phí của Google dịch nhanh các từ, cụm từ và trang web giữa tiếng Việt và hơn 100 ngôn ngữ khác.\r\n\r\nGoogle Dịch - Ứng dụng trên Google Playhttps://play.google.com › apps › details· Translate this page\r\nDịch văn bản: Dịch giữa 108 ngôn ngữ bằng cách nhập dữ liệu • Nhấn để dịch: Sao chép văn bản trong bất kỳ ứng dụng nào và nhấn vào biểu tượng Google Dịch để ...\r\n Rating: 4.4 · ‎8,484,036 votes · ‎Free · ‎Android · ‎Utilities/Tools\r\n\r\nMẹo sử dụng Google dịch để dịch thông tin chính xáchttps://www.thegioididong.com › me...· Translate this page\r\nGoogle Translate là ứng dụng dịch ngôn ngữ được sử dụng nhiều nhất hiện nay với hơn 100 ngôn ngữ trên khắp thế giới. Ứng dụng có giao diện đơn giản dễ sử ...\r\n\r\nGoogle Dịch trên App Store - Applehttps://apps.apple.com › app › googl...· Translate this page\r\nĐọc nhận xét, so sánh xếp hạng của khách hàng, xem ảnh chụp màn hình và tìm hiểu thêm về Google Dịch. Tải về và sử dụng Google Dịch trên iPhone, iPad, ...\r\n Rating: 4.1 · ‎17,123 reviews · ‎Free · ‎iOS\r\n\r\nGoogle Translate Helphttps://support.google.com › translate\r\nGet started with Google Translate · Translate text, images, handwriting, or speech · Use your history & phrasebook · Make Translate work for you · Announcements.\r\n\r\nFBNC - Ra mắt cộng đồng Google Dịch tại Việt Nam - YouTubehttps://www.youtube.com › watch\r\n\r\nPREVIEW\r\n1:19\r\nHôm 18/3, Google chính thức giới thiệu Chức năng Cộng Đồng Google Dịch tại Việt Nam - Google Translate Community. Cộng đồng Google Dịch là ...\r\nYouTube · FBNC Vietnam · Mar 19, 2015', '2022-08-02 22:29:31', 2, 1),
(20, 62, 4, 'Đã Từng Thiên Tài', 'Google Dịch - Ứng dụng trên Google Playhttps://play.google.com › apps › details· Translate this page\r\nDịch văn bản: Dịch giữa 108 ngôn ngữ bằng cách nhập dữ liệu • Nhấn để dịch: Sao chép văn bản trong bất kỳ ứng dụng nào và nhấn vào biểu tượng Google Dịch để ...\r\n Rating: 4.4 · ‎8,484,036 votes · ‎Free · ‎Android · ‎Utilities/Tools\r\n\r\nMẹo sử dụng Google dịch để dịch thông tin chính xáchttps://www.thegioididong.com › me...· Translate this page\r\nGoogle Translate là ứng dụng dịch ngôn ngữ được sử dụng nhiều nhất hiện nay với hơn 100 ngôn ngữ trên khắp thế giới. Ứng dụng có giao diện đơn giản dễ sử ...\r\n\r\nGoogle Dịch trên App Store - Applehttps://apps.apple.com › app › googl...· Translate this page\r\nĐọc nhận xét, so sánh xếp hạng của khách hàng, xem ảnh chụp màn hình và tìm hiểu thêm về Google Dịch. Tải về và sử dụng Google Dịch trên iPhone, iPad, ...\r\n Rating: 4.1 · ‎17,123 reviews · ‎Free · ‎iOS\r\nGoogle Dịch - Ứng dụng trên Google Playhttps://play.google.com › apps › details· Translate this page\r\nDịch văn bản: Dịch giữa 108 ngôn ngữ bằng cách nhập dữ liệu • Nhấn để dịch: Sao chép văn bản trong bất kỳ ứng dụng nào và nhấn vào biểu tượng Google Dịch để ...\r\n Rating: 4.4 · ‎8,484,036 votes · ‎Free · ‎Android · ‎Utilities/Tools\r\n\r\nMẹo sử dụng Google dịch để dịch thông tin chính xáchttps://www.thegioididong.com › me...· Translate this page\r\nGoogle Translate là ứng dụng dịch ngôn ngữ được sử dụng nhiều nhất hiện nay với hơn 100 ngôn ngữ trên khắp thế giới. Ứng dụng có giao diện đơn giản dễ sử ...\r\n\r\nGoogle Dịch trên App Store - Applehttps://apps.apple.com › app › googl...· Translate this page\r\nĐọc nhận xét, so sánh xếp hạng của khách hàng, xem ảnh chụp màn hình và tìm hiểu thêm về Google Dịch. Tải về và sử dụng Google Dịch trên iPhone, iPad, ...\r\n Rating: 4.1 · ‎17,123 reviews · ‎Free · ‎iOS\r\nGoogle Dịch - Ứng dụng trên Google Playhttps://play.google.com › apps › details· Translate this page\r\nDịch văn bản: Dịch giữa 108 ngôn ngữ bằng cách nhập dữ liệu • Nhấn để dịch: Sao chép văn bản trong bất kỳ ứng dụng nào và nhấn vào biểu tượng Google Dịch để ...\r\n Rating: 4.4 · ‎8,484,036 votes · ‎Free · ‎Android · ‎Utilities/Tools\r\n\r\nMẹo sử dụng Google dịch để dịch thông tin chính xáchttps://www.thegioididong.com › me...· Translate this page\r\nGoogle Translate là ứng dụng dịch ngôn ngữ được sử dụng nhiều nhất hiện nay với hơn 100 ngôn ngữ trên khắp thế giới. Ứng dụng có giao diện đơn giản dễ sử ...\r\n\r\nGoogle Dịch trên App Store - Applehttps://apps.apple.com › app › googl...· Translate this page\r\nĐọc nhận xét, so sánh xếp hạng của khách hàng, xem ảnh chụp màn hình và tìm hiểu thêm về Google Dịch. Tải về và sử dụng Google Dịch trên iPhone, iPad, ...\r\n Rating: 4.1 · ‎17,123 reviews · ‎Free · ‎iOS\r\nGoogle Dịch - Ứng dụng trên Google Playhttps://play.google.com › apps › details· Translate this page\r\nDịch văn bản: Dịch giữa 108 ngôn ngữ bằng cách nhập dữ liệu • Nhấn để dịch: Sao chép văn bản trong bất kỳ ứng dụng nào và nhấn vào biểu tượng Google Dịch để ...\r\n Rating: 4.4 · ‎8,484,036 votes · ‎Free · ‎Android · ‎Utilities/Tools\r\n\r\nMẹo sử dụng Google dịch để dịch thông tin chính xáchttps://www.thegioididong.com › me...· Translate this page\r\nGoogle Translate là ứng dụng dịch ngôn ngữ được sử dụng nhiều nhất hiện nay với hơn 100 ngôn ngữ trên khắp thế giới. Ứng dụng có giao diện đơn giản dễ sử ...\r\n\r\nGoogle Dịch trên App Store - Applehttps://apps.apple.com › app › googl...· Translate this page\r\nĐọc nhận xét, so sánh xếp hạng của khách hàng, xem ảnh chụp màn hình và tìm hiểu thêm về Google Dịch. Tải về và sử dụng Google Dịch trên iPhone, iPad, ...\r\n Rating: 4.1 · ‎17,123 reviews · ‎Free · ‎iOS', '2022-08-02 22:36:22', 3, 2),
(21, 62, 4, 'Bắt Đầu Hành Trình', 'Mẹo sử dụng Google dịch để dịch thông tin chính xáchttps://www.thegioididong.com › me...· Translate this page\r\nGoogle Translate là ứng dụng dịch ngôn ngữ được sử dụng nhiều nhất hiện nay với hơn 100 ngôn ngữ trên khắp thế giới. Ứng dụng có giao diện đơn giản dễ sử ...\r\n\r\nGoogle Dịch trên App Store - Applehttps://apps.apple.com › app › googl...· Translate this page\r\nĐọc nhận xét, so sánh xếp hạng của khách hàng, xem ảnh chụp màn hình và tìm hiểu thêm về Google Dịch. Tải về và sử dụng Google Dịch trên iPhone, iPad, ...\r\n Rating: 4.1 · ‎17,123 reviews · ‎Free · ‎iOSMẹo sử dụng Google dịch để dịch thông tin chính xáchttps://www.thegioididong.com › me...· Translate this page\r\nGoogle Translate là ứng dụng dịch ngôn ngữ được sử dụng nhiều nhất hiện nay với hơn 100 ngôn ngữ trên khắp thế giới. Ứng dụng có giao diện đơn giản dễ sử ...\r\n\r\nGoogle Dịch trên App Store - Applehttps://apps.apple.com › app › googl...· Translate this page\r\nĐọc nhận xét, so sánh xếp hạng của khách hàng, xem ảnh chụp màn hình và tìm hiểu thêm về Google Dịch. Tải về và sử dụng Google Dịch trên iPhone, iPad, ...\r\n Rating: 4.1 · ‎17,123 reviews · ‎Free · ‎iOSMẹo sử dụng Google dịch để dịch thông tin chính xáchttps://www.thegioididong.com › me...· Translate this page\r\nGoogle Translate là ứng dụng dịch ngôn ngữ được sử dụng nhiều nhất hiện nay với hơn 100 ngôn ngữ trên khắp thế giới. Ứng dụng có giao diện đơn giản dễ sử ...\r\n\r\nGoogle Dịch trên App Store - Applehttps://apps.apple.com › app › googl...· Translate this page\r\nĐọc nhận xét, so sánh xếp hạng của khách hàng, xem ảnh chụp màn hình và tìm hiểu thêm về Google Dịch. Tải về và sử dụng Google Dịch trên iPhone, iPad, ...\r\n Rating: 4.1 · ‎17,123 reviews · ‎Free · ‎iOSMẹo sử dụng Google dịch để dịch thông tin chính xáchttps://www.thegioididong.com › me...· Translate this page\r\nGoogle Translate là ứng dụng dịch ngôn ngữ được sử dụng nhiều nhất hiện nay với hơn 100 ngôn ngữ trên khắp thế giới. Ứng dụng có giao diện đơn giản dễ sử ...\r\n\r\nGoogle Dịch trên App Store - Applehttps://apps.apple.com › app › googl...· Translate this page\r\nĐọc nhận xét, so sánh xếp hạng của khách hàng, xem ảnh chụp màn hình và tìm hiểu thêm về Google Dịch. Tải về và sử dụng Google Dịch trên iPhone, iPad, ...\r\n Rating: 4.1 · ‎17,123 reviews · ‎Free · ‎iOS\r\nMẹo sử dụng Google dịch để dịch thông tin chính xáchttps://www.thegioididong.com › me...· Translate this page\r\nGoogle Translate là ứng dụng dịch ngôn ngữ được sử dụng nhiều nhất hiện nay với hơn 100 ngôn ngữ trên khắp thế giới. Ứng dụng có giao diện đơn giản dễ sử ...\r\n\r\nGoogle Dịch trên App Store - Applehttps://apps.apple.com › app › googl...· Translate this page\r\nĐọc nhận xét, so sánh xếp hạng của khách hàng, xem ảnh chụp màn hình và tìm hiểu thêm về Google Dịch. Tải về và sử dụng Google Dịch trên iPhone, iPad, ...\r\n Rating: 4.1 · ‎17,123 reviews · ‎Free · ‎iOSMẹo sử dụng Google dịch để dịch thông tin chính xáchttps://www.thegioididong.com › me...· Translate this page\r\nGoogle Translate là ứng dụng dịch ngôn ngữ được sử dụng nhiều nhất hiện nay với hơn 100 ngôn ngữ trên khắp thế giới. Ứng dụng có giao diện đơn giản dễ sử ...\r\n\r\nGoogle Dịch trên App Store - Applehttps://apps.apple.com › app › googl...· Translate this page\r\nĐọc nhận xét, so sánh xếp hạng của khách hàng, xem ảnh chụp màn hình và tìm hiểu thêm về Google Dịch. Tải về và sử dụng Google Dịch trên iPhone, iPad, ...\r\n Rating: 4.1 · ‎17,123 reviews · ‎Free · ‎iOSMẹo sử dụng Google dịch để dịch thông tin chính xáchttps://www.thegioididong.com › me...· Translate this page\r\nGoogle Translate là ứng dụng dịch ngôn ngữ được sử dụng nhiều nhất hiện nay với hơn 100 ngôn ngữ trên khắp thế giới. Ứng dụng có giao diện đơn giản dễ sử ...\r\n\r\nGoogle Dịch trên App Store - Applehttps://apps.apple.com › app › googl...· Translate this page\r\nĐọc nhận xét, so sánh xếp hạng của khách hàng, xem ảnh chụp màn hình và tìm hiểu thêm về Google Dịch. Tải về và sử dụng Google Dịch trên iPhone, iPad, ...\r\n Rating: 4.1 · ‎17,123 reviews · ‎Free · ‎iOSMẹo sử dụng Google dịch để dịch thông tin chính xáchttps://www.thegioididong.com › me...· Translate this page\r\nGoogle Translate là ứng dụng dịch ngôn ngữ được sử dụng nhiều nhất hiện nay với hơn 100 ngôn ngữ trên khắp thế giới. Ứng dụng có giao diện đơn giản dễ sử ...\r\n\r\nGoogle Dịch trên App Store - Applehttps://apps.apple.com › app › googl...· Translate this page\r\nĐọc nhận xét, so sánh xếp hạng của khách hàng, xem ảnh chụp màn hình và tìm hiểu thêm về Google Dịch. Tải về và sử dụng Google Dịch trên iPhone, iPad, ...\r\n Rating: 4.1 · ‎17,123 reviews · ‎Free · ‎iOSMẹo sử dụng Google dịch để dịch thông tin chính xáchttps://www.thegioididong.com › me...· Translate this page\r\nGoogle Translate là ứng dụng dịch ngôn ngữ được sử dụng nhiều nhất hiện nay với hơn 100 ngôn ngữ trên khắp thế giới. Ứng dụng có giao diện đơn giản dễ sử ...\r\n\r\nGoogle Dịch trên App Store - Applehttps://apps.apple.com › app › googl...· Translate this page\r\nĐọc nhận xét, so sánh xếp hạng của khách hàng, xem ảnh chụp màn hình và tìm hiểu thêm về Google Dịch. Tải về và sử dụng Google Dịch trên iPhone, iPad, ...\r\n Rating: 4.1 · ‎17,123 reviews · ‎Free · ‎iOSMẹo sử dụng Google dịch để dịch thông tin chính xáchttps://www.thegioididong.com › me...· Translate this page\r\nGoogle Translate là ứng dụng dịch ngôn ngữ được sử dụng nhiều nhất hiện nay với hơn 100 ngôn ngữ trên khắp thế giới. Ứng dụng có giao diện đơn giản dễ sử ...\r\n\r\nGoogle Dịch trên App Store - Applehttps://apps.apple.com › app › googl...· Translate this page\r\nĐọc nhận xét, so sánh xếp hạng của khách hàng, xem ảnh chụp màn hình và tìm hiểu thêm về Google Dịch. Tải về và sử dụng Google Dịch trên iPhone, iPad, ...\r\n Rating: 4.1 · ‎17,123 reviews · ‎Free · ‎iOS', '2022-08-02 23:25:12', 1, 3),
(22, 60, 4, 'test tiêu 2', 'Tô Trạch xuyên qua đến vạn tộc thế giới, tại nơi này có đủ loại phương thức tu luyện. Có võ đạo, có thuật sĩ, có ngự thú sư! Đang thức tỉnh nghi thức bên trên, Tô Trạch thức tỉnh ngự thú sư thiên phú, cũng khóa lại Thần cấp ngự thú hệ thống, đem tu vi quán đỉnh cho linh thú, trực tiếp thu hoạch được mấy chục lần phản hồi! Thế là, một cái thực lực so khế ước linh thú còn cường đại hơn ngự thú sư sinh ra! \"Điên rồi đi? Tên kia ngự thú sư một quyền đem một dãy núi đánh nổ?\" \"Vì cái gì cái này ngự thú sư so với chính mình linh thú còn muốn mạnh hơn a? Đến cùng là ai ngự ai vậy?\" \"Quản quản cái tên điên này a! Ta một cái chuyên tu võ đạo người, kỹ xảo chiến đấu vậy mà không có một cái nào ngự thú sư cườngTô Trạch xuyên qua đến vạn tộc thế giới, tại nơi này có đủ loại phương thức tu luyện. Có võ đạo, có thuật sĩ, có ngự thú sư! Đang thức tỉnh nghi thức bên trên, Tô Trạch thức tỉnh ngự thú sư thiên phú, cũng khóa lại Thần cấp ngự thú hệ thống, đem tu vi quán đỉnh cho linh thú, trực tiếp thu hoạch được mấy chục lần phản hồi! Thế là, một cái thực lực so khế ước linh thú còn cường đại hơn ngự thú sư sinh ra! \"Điên rồi đi? Tên kia ngự thú sư một quyền đem một dãy núi đánh nổ?\" \"Vì cái gì cái này ngự thú sư so với chính mình linh thú còn muốn mạnh hơn a? Đến cùng là ai ngự ai vậy?\" \"Quản quản cái tên điên này a! Ta một cái chuyên tu võ đạo người, kỹ xảo chiến đấu vậy mà không có một cái nào ngự thú sư cườngTô Trạch xuyên qua đến vạn tộc thế giới, tại nơi này có đủ loại phương thức tu luyện. Có võ đạo, có thuật sĩ, có ngự thú sư! Đang thức tỉnh nghi thức bên trên, Tô Trạch thức tỉnh ngự thú sư thiên phú, cũng khóa lại Thần cấp ngự thú hệ thống, đem tu vi quán đỉnh cho linh thú, trực tiếp thu hoạch được mấy chục lần phản hồi! Thế là, một cái thực lực so khế ước linh thú còn cường đại hơn ngự thú sư sinh ra! \"Điên rồi đi? Tên kia ngự thú sư một quyền đem một dãy núi đánh nổ?\" \"Vì cái gì cái này ngự thú sư so với chính mình linh thú còn muốn mạnh hơn a? Đến cùng là ai ngự ai vậy?\" \"Quản quản cái tên điên này a! Ta một cái chuyên tu võ đạo người, kỹ xảo chiến đấu vậy mà không có một cái nào ngự thú sư cườngTô Trạch xuyên qua đến vạn tộc thế giới, tại nơi này có đủ loại phương thức tu luyện. Có võ đạo, có thuật sĩ, có ngự thú sư! Đang thức tỉnh nghi thức bên trên, Tô Trạch thức tỉnh ngự thú sư thiên phú, cũng khóa lại Thần cấp ngự thú hệ thống, đem tu vi quán đỉnh cho linh thú, trực tiếp thu hoạch được mấy chục lần phản hồi! Thế là, một cái thực lực so khế ước linh thú còn cường đại hơn ngự thú sư sinh ra! \"Điên rồi đi? Tên kia ngự thú sư một quyền đem một dãy núi đánh nổ?\" \"Vì cái gì cái này ngự thú sư so với chính mình linh thú còn muốn mạnh hơn a? Đến cùng là ai ngự ai vậy?\" \"Quản quản cái tên điên này a! Ta một cái chuyên tu võ đạo người, kỹ xảo chiến đấu vậy mà không có một cái nào ngự thú sư cườngTô Trạch xuyên qua đến vạn tộc thế giới, tại nơi này có đủ loại phương thức tu luyện. Có võ đạo, có thuật sĩ, có ngự thú sư! Đang thức tỉnh nghi thức bên trên, Tô Trạch thức tỉnh ngự thú sư thiên phú, cũng khóa lại Thần cấp ngự thú hệ thống, đem tu vi quán đỉnh cho linh thú, trực tiếp thu hoạch được mấy chục lần phản hồi! Thế là, một cái thực lực so khế ước linh thú còn cường đại hơn ngự thú sư sinh ra! \"Điên rồi đi? Tên kia ngự thú sư một quyền đem một dãy núi đánh nổ?\" \"Vì cái gì cái này ngự thú sư so với chính mình linh thú còn muốn mạnh hơn a? Đến cùng là ai ngự ai vậy?\" \"Quản quản cái tên điên này a! Ta một cái chuyên tu võ đạo người, kỹ xảo chiến đấu vậy mà không có một cái nào ngự thú sư cườngTô Trạch xuyên qua đến vạn tộc thế giới, tại nơi này có đủ loại phương thức tu luyện. Có võ đạo, có thuật sĩ, có ngự thú sư! Đang thức tỉnh nghi thức bên trên, Tô Trạch thức tỉnh ngự thú sư thiên phú, cũng khóa lại Thần cấp ngự thú hệ thống, đem tu vi quán đỉnh cho linh thú, trực tiếp thu hoạch được mấy chục lần phản hồi! Thế là, một cái thực lực so khế ước linh thú còn cường đại hơn ngự thú sư sinh ra! \"Điên rồi đi? Tên kia ngự thú sư một quyền đem một dãy núi đánh nổ?\" \"Vì cái gì cái này ngự thú sư so với chính mình linh thú còn muốn mạnh hơn a? Đến cùng là ai ngự ai vậy?\" \"Quản quản cái tên điên này a! Ta một cái chuyên tu võ đạo người, kỹ xảo chiến đấu vậy mà không có một cái nào ngự thú sư cườngTô Trạch xuyên qua đến vạn tộc thế giới, tại nơi này có đủ loại phương thức tu luyện. Có võ đạo, có thuật sĩ, có ngự thú sư! Đang thức tỉnh nghi thức bên trên, Tô Trạch thức tỉnh ngự thú sư thiên phú, cũng khóa lại Thần cấp ngự thú hệ thống, đem tu vi quán đỉnh cho linh thú, trực tiếp thu hoạch được mấy chục lần phản hồi! Thế là, một cái thực lực so khế ước linh thú còn cường đại hơn ngự thú sư sinh ra! \"Điên rồi đi? Tên kia ngự thú sư một quyền đem một dãy núi đánh nổ?\" \"Vì cái gì cái này ngự thú sư so với chính mình linh thú còn muốn mạnh hơn a? Đến cùng là ai ngự ai vậy?\" \"Quản quản cái tên điên này a! Ta một cái chuyên tu võ đạo người, kỹ xảo chiến đấu vậy mà không có một cái nào ngự thú sư cườngTô Trạch xuyên qua đến vạn tộc thế giới, tại nơi này có đủ loại phương thức tu luyện. Có võ đạo, có thuật sĩ, có ngự thú sư! Đang thức tỉnh nghi thức bên trên, Tô Trạch thức tỉnh ngự thú sư thiên phú, cũng khóa lại Thần cấp ngự thú hệ thống, đem tu vi quán đỉnh cho linh thú, trực tiếp thu hoạch được mấy chục lần phản hồi! Thế là, một cái thực lực so khế ước linh thú còn cường đại hơn ngự thú sư sinh ra! \"Điên rồi đi? Tên kia ngự thú sư một quyền đem một dãy núi đánh nổ?\" \"Vì cái gì cái này ngự thú sư so với chính mình linh thú còn muốn mạnh hơn a? Đến cùng là ai ngự ai vậy?\" \"Quản quản cái tên điên này a! Ta một cái chuyên tu võ đạo người, kỹ xảo chiến đấu vậy mà không có một cái nào ngự thú sư cườngTô Trạch xuyên qua đến vạn tộc thế giới, tại nơi này có đủ loại phương thức tu luyện. Có võ đạo, có thuật sĩ, có ngự thú sư! Đang thức tỉnh nghi thức bên trên, Tô Trạch thức tỉnh ngự thú sư thiên phú, cũng khóa lại Thần cấp ngự thú hệ thống, đem tu vi quán đỉnh cho linh thú, trực tiếp thu hoạch được mấy chục lần phản hồi! Thế là, một cái thực lực so khế ước linh thú còn cường đại hơn ngự thú sư sinh ra! \"Điên rồi đi? Tên kia ngự thú sư một quyền đem một dãy núi đánh nổ?\" \"Vì cái gì cái này ngự thú sư so với chính mình linh thú còn muốn mạnh hơn a? Đến cùng là ai ngự ai vậy?\" \"Quản quản cái tên điên này a! Ta một cái chuyên tu võ đạo người, kỹ xảo chiến đấu vậy mà không có một cái nào ngự thú sư cườngTô Trạch xuyên qua đến vạn tộc thế giới, tại nơi này có đủ loại phương thức tu luyện. Có võ đạo, có thuật sĩ, có ngự thú sư! Đang thức tỉnh nghi thức bên trên, Tô Trạch thức tỉnh ngự thú sư thiên phú, cũng khóa lại Thần cấp ngự thú hệ thống, đem tu vi quán đỉnh cho linh thú, trực tiếp thu hoạch được mấy chục lần phản hồi! Thế là, một cái thực lực so khế ước linh thú còn cường đại hơn ngự thú sư sinh ra! \"Điên rồi đi? Tên kia ngự thú sư một quyền đem một dãy núi đánh nổ?\" \"Vì cái gì cái này ngự thú sư so với chính mình linh thú còn muốn mạnh hơn a? Đến cùng là ai ngự ai vậy?\" \"Quản quản cái tên điên này a! Ta một cái chuyên tu võ đạo người, kỹ xảo chiến đấu vậy mà không có một cái nào ngự thú sư cường', '2022-08-04 13:19:14', 3, 1),
(23, 48, 4, 'Khổ Tu', '<p><em>\"B&aacute;t cực băng!\"</em><br><br>Trong một rừng c&acirc;y nhỏ tr&ecirc;n n&uacute;i, tiếng qu&aacute; thanh l&atilde;ng, đột nhi&ecirc;n vang l&ecirc;n.<br><br>Một th&acirc;n ảnh nhanh nhẹn di chuyển trong rừng, nhiều gai g&oacute;c rậm rạp, cũng kh&ocirc;ng mang đến cho hắn ch&uacute;t trở ngại n&agrave;o.</p>\r\n<p>Sau đ&oacute;, th&acirc;n ảnh đột ngột dừng lại trước một c&acirc;y đại thụ, th&acirc;n thể hơi nghi&ecirc;ng, khửu tay đ&aacute;nh mạnh l&ecirc;n tr&ecirc;n đại thụ.<br><br><em>\"Phanh!\"</em>&nbsp;Một tiếng, vụn gỗ bay khắp nơi, những c&aacute;i khe như mạng nhện, dọc theo chỗ bị đ&aacute;nh v&agrave;o, chậm r&atilde;i lan tr&agrave;n</p>\r\n<p><em>\"D&aacute;t chi&hellip;\"</em>&nbsp;C&acirc;y đại thụ bị đ&aacute;nh n&aacute;t một nửa, ph&aacute;t ra tiếng động d&aacute;t chi, một l&uacute;c sau, rốt cuộc cũng v&ocirc; lực ng&atilde; xuống đất.<br><br>Thời điểm đại thụ ng&atilde; xuống, đạo th&acirc;n ảnh tựa như linh hầu kia thối lui th&acirc;n h&igrave;nh một bước, sau đ&oacute; nhẹ nh&agrave;ng ngồi tr&ecirc;n một khối cự thạch m&agrave;u xanh.<br><br>Nh&igrave;n hiệu quả m&agrave; m&igrave;nh l&agrave;m ra, tr&ecirc;n khu&ocirc;n mặt thanh t&uacute; của Ti&ecirc;u Vi&ecirc;m, tr&agrave;n đầy nụ cười h&acirc;n hỉ, ba th&aacute;ng n&agrave;y, đ&acirc;y ch&iacute;nh l&agrave; lần đầu ti&ecirc;n hắn sử dụng th&agrave;nh c&ocirc;ng huyền giai cao cấp đấu kĩ b&aacute;t cực băng, m&agrave; đấu kĩ c&oacute; thể c&ugrave;ng địa giai so s&aacute;nh n&agrave;y đ&iacute;ch x&aacute;c kh&ocirc;ng l&agrave;m cho Ti&ecirc;u Vi&ecirc;m thất vọng, chỉ bằng s&aacute;u đoạn đấu kh&iacute;, ph&aacute; hư lực g&acirc;y ra, đủ để so s&aacute;nh với t&aacute;m đoạn đấu kh&iacute;!</p>\r\n<p>Sơ giai đấu kh&iacute; c&agrave;ng về sau, tốc độ cũng c&agrave;ng chậm, từ sau khi mua đủ dược vật, Ti&ecirc;u Vi&ecirc;m đ&atilde; đ&oacute;ng cửa khổ tu ba th&aacute;ng, tại mấy ng&agrave;y cuối của th&aacute;ng thứ ba, Ti&ecirc;u Vi&ecirc;m mới ngẫu nhi&ecirc;n, từ năm đoạn đấu kh&iacute; đột ph&aacute; l&ecirc;n s&aacute;u đoạn&hellip;<br><br>Ba th&aacute;ng tăng l&ecirc;n một đoạn đấu kh&iacute;, tuy tốc độ n&agrave;y chậm hơn hai th&aacute;ng trước rất nhiều, d&ugrave; vậy, Ti&ecirc;u Vi&ecirc;m cũng thập phần thỏa m&atilde;n, nhớ năm đ&oacute;, hắn tu luyện hơn nửa năm, mới từ năm đoạn đấu kh&iacute;, đến s&aacute;u đoạn, tốc độ h&ocirc;m nay, đ&atilde; rất khủng bố.</p>\r\n<p>Ph&aacute;t ra một đ&ograve;n b&aacute;t cực băng, cả người Ti&ecirc;u Vi&ecirc;m bỗng nhi&ecirc;n giống như một sinh vật biển bị mắc cạn, cảm gi&aacute;c đau đớn, kh&ocirc;ng ngừng ăn m&ograve;n thần kinh, g&acirc;n xanh tr&ecirc;n c&aacute;nh tay, giật giật nhẹ, đ&oacute; l&agrave; dấu hiệu của d&ugrave;ng sức qu&aacute; độ.<br><br>Liếm liếm m&ocirc;i, Ti&ecirc;u Vi&ecirc;m gian nan c&uacute;i đầu, nh&igrave;n khửu tay của m&igrave;nh, nơi đ&oacute;, đ&atilde; đỏ bừng một mảnh&hellip;</p>\r\n<div id=\"ads-chapter-middle\"></div>\r\n<p><br><em>\"T&ecirc;&hellip;\"</em>&nbsp;Kh&oacute;e miệng cứng đờ, Ti&ecirc;u Vi&ecirc;m h&iacute;t một hơi kh&iacute; lạnh, cười khổ n&oacute;i:<br><br><em>\"Kh&oacute; tr&aacute;ch phải chịu huấn luyện bị đ&aacute;nh t&agrave;n khốc như vậy, nếu kh&ocirc;ng, một k&iacute;ch n&agrave;y d&ugrave;ng đến, đứt kh&ocirc;ng phải thụ, m&agrave; l&agrave; tay của ta, b&aacute;t cực băng n&agrave;y,<br><br>quả thực l&agrave; cứng hơn th&acirc;n thể của bất cứ ai.\"</em></p>\r\n<p>To&agrave;n th&acirc;n mệt mỏi nằm tr&ecirc;n cự thạch lạnh lẽo, h&ocirc; hấp hơi dồn dập của Ti&ecirc;u Vi&ecirc;m, cũng chậm r&atilde;i vững v&agrave;ng lại, cảm gi&aacute;c r&atilde; rời của th&acirc;n thể, l&agrave;m hắn kh&ocirc;ng muốn di động một ng&oacute;n tay.<br><br>Lấy s&aacute;u đoạn đấu kh&iacute; của Ti&ecirc;u Vi&ecirc;m b&acirc;y giờ, nhiều lắm chỉ c&oacute; thể sử dụng một lần b&aacute;t cực băng, m&agrave; sau khi sử dụng, hắn sẽ gặp t&igrave;nh trạng to&agrave;n th&acirc;n tho&aacute;t lực, đến l&uacute;c thể lực hồi phục mới th&ocirc;i.<br><br>Ti&ecirc;u Vi&ecirc;m ngẩng đầu, h&iacute;p mắt lại, miễn cưỡng nh&igrave;n những đ&aacute;m m&acirc;y bay tr&ecirc;n bầu trời m&agrave;u xanh, gi&oacute; nhẹ thổi qua, thổi bay m&aacute;i t&oacute;c m&agrave;u đen phủ l&ecirc;n tr&ecirc;n tr&aacute;n.<br><br></p>\r\n<div id=\"ads-chapter-four-ads-middle\"></div>\r\n<p>S&acirc;u trong th&acirc;n thể, tr&uacute;c cơ linh dịch hấp thu trong mấy th&aacute;ng, cũng l&agrave; từng giờ từng ph&uacute;t thẩm thấu ra, kh&ocirc;ng dấu vết chữa trị cơ thể mệt mỏi v&agrave; tế b&agrave;o, khiến cho ch&uacute;ng c&oacute; thể bằng tốc độ nhanh nhất, mang đến lực lượng cho chủ nh&acirc;n.<br><br><em>\"L&atilde;o sư, ta c&ograve;n bao l&acirc;u nữa mới c&oacute; thể tấn nhập bảy đoạn đấu kh&iacute;?\"</em>&nbsp;Kh&eacute;p hờ hai mắt, Ti&ecirc;u Vi&ecirc;m bỗng nhi&ecirc;n thấp giọng n&oacute;i.<br><br>Chỉ cần tấn nhập bảy đoạn, vậy l&agrave; hắn đ&atilde; đủ tư c&aacute;ch tiến v&agrave;o đấu kh&iacute; c&aacute;c t&igrave;m c&ocirc;ng ph&aacute;p, tuy nhi&ecirc;n b&acirc;y giờ hắn đ&atilde; kh&ocirc;ng cần đấu kh&iacute; c&ocirc;ng ph&aacute;p của Ti&ecirc;u gia, nhưng ch&iacute;nh m&igrave;nh lại cần c&oacute; tư c&aacute;ch n&agrave;y, bởi v&igrave; n&oacute; sẽ quan hệ đến mặt mũi của phụ th&acirc;n.<br><br>Một trận gi&oacute; m&aacute;t thổi qua, th&acirc;n h&igrave;nh trong suốt của dược l&atilde;o, xuất hiện b&ecirc;n cạnh cự thạch. Bạn đang đọc truyện được lấy tại&nbsp;chấm cơm.<br><br>Trong mắt mang thanh tiếu &yacute; nh&igrave;n thiếu ni&ecirc;n, dược l&atilde;o đầu ti&ecirc;n l&agrave; d&ograve; x&eacute;t c&acirc;y đại thụ bị g&atilde;y, khẽ gật đầu, hơi trầm ng&acirc;m, cười n&oacute;i:&nbsp;<em>\"Tốc độ tu luyện đấu kh&iacute; của ngươi ngo&agrave;i dự kiến của ta, vốn ta nghĩ cho d&ugrave; ngươi c&oacute; linh dịch trợ gi&uacute;p, ngươi cũng cần một năm để tiến v&agrave;o bảy đoạn&hellip; C&oacute; lẽ &aacute;p lực phải chịu trước kia qu&aacute; kịch liệt, b&acirc;y giờ phản ngược lại, ngươi cũng c&agrave;ng th&ecirc;m đi&ecirc;n cuồng, theo tốc độ n&agrave;y, trong v&ograve;ng hai th&aacute;ng, nhất định c&oacute; thể tiến nhập bảy đoạn đấu kh&iacute;.\"</em><br><br>Nghe vậy, m&ocirc;i Ti&ecirc;u Vi&ecirc;m nhếch l&ecirc;n một hồ độ nh&agrave;n nhạt, hắn rất muốn biết, đ&aacute;m tộc nh&acirc;n trong ba năm ch&acirc;m chọc cười nhạo m&igrave;nh, l&uacute;c thấy m&igrave;nh triển hiện thực lực sẽ c&oacute; biểu t&igrave;nh thế n&agrave;o? Lời n&oacute;i ng&agrave;y đ&oacute; với Nạp Lan Y&ecirc;n<br><br>Nhi&ecirc;n trong đại sảnh, sao lại kh&ocirc;ng phải n&oacute;i với bọn họ?<br><br><em>\"Ti&ecirc;u Vi&ecirc;m ta ba năm trước c&oacute; thể s&aacute;ng tạo kỳ t&iacute;ch, ba năm sau, ta đương nhi&ecirc;n c&oacute; thể!\"</em>&nbsp;&Aacute;nh mắt khẽ l&oacute;e s&aacute;ng, Ti&ecirc;u Vi&ecirc;m nhớ đến những &aacute;nh mắt khinh thường m&igrave;nh trong đại sảnh, b&oacute;ng d&aacute;ng c&oacute; ch&uacute;t c&ocirc; đơn của thiếu ni&ecirc;n, quật cường m&agrave; chấp nhất!<br><br><em>\"Nạp Lan Y&ecirc;n Nhi&ecirc;n, ta đang từng bước từng bước đuổi theo ngươi, ngươi tĩnh t&acirc;m chờ đợi đi, ba năm sau, ch&uacute;ng ta, gặp tại V&acirc;n Lam t&ocirc;ng!\"</em><br><br>Kh&oacute;e miệng bỗng nhi&ecirc;n nổi l&ecirc;n một mạt kiệt ngạo, thiếu ni&ecirc;n đứng mạnh dậy, ngửa đầu nh&igrave;n bầu trời qu&aacute;t lớn.</p>', '2022-08-04 15:03:58', 2, 5);

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
  `like` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`idComment`, `idTruyen`, `idUser`, `noiDung`, `dateComment`, `like`) VALUES
(5, 62, 6, 'test thông báo comment', '2022-08-02 22:25:24', ' 4'),
(6, 62, 6, 'test comment pasrt 2', '2022-08-02 22:27:27', ''),
(8, 60, 4, 'tuyệt zời', '2022-08-04 11:52:50', ''),
(9, 48, 3, 'hêloo', '2022-08-04 13:31:51', ''),
(10, 48, 5, 'heleo', '2022-08-04 13:35:38', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangdoc`
--

CREATE TABLE `dangdoc` (
  `idDangDoc` int(11) NOT NULL,
  `idTruyen` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idChuong` int(11) NOT NULL,
  `soChuong` int(11) NOT NULL,
  `dateDangDoc` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangdoc`
--

INSERT INTO `dangdoc` (`idDangDoc`, `idTruyen`, `idUser`, `idChuong`, `soChuong`, `dateDangDoc`) VALUES
(7, 48, 3, 14, 2, '2022-08-04 13:09:16'),
(8, 62, 3, 19, 1, '2022-08-04 13:26:10'),
(9, 48, 4, 23, 5, '2022-08-04 15:07:18'),
(10, 60, 6, 22, 1, '2022-08-04 19:44:47'),
(11, 60, 4, 22, 1, '2022-08-05 15:08:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhdau`
--

CREATE TABLE `danhdau` (
  `idDanhDau` int(11) NOT NULL,
  `idTruyen` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhdau`
--

INSERT INTO `danhdau` (`idDanhDau`, `idTruyen`, `idUser`) VALUES
(1, -2, -2),
(6, 48, 4),
(10, 62, 6),
(11, 62, 5),
(13, 60, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `idDanhGia` int(11) NOT NULL,
  `idTruyen` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `like` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `noiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `dateDanhGia` datetime NOT NULL,
  `tinhCach` int(11) NOT NULL,
  `cotTruyen` int(11) NOT NULL,
  `boCuc` int(11) NOT NULL,
  `tongHop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`idDanhGia`, `idTruyen`, `idUser`, `like`, `noiDung`, `dateDanhGia`, `tinhCach`, `cotTruyen`, `boCuc`, `tongHop`) VALUES
(3, 62, 6, '4 6', 'truyện rất hay', '2022-07-31 19:41:15', 0, 0, 0, 0),
(7, 62, 6, ' 4', 'test thông báo ', '2022-08-02 22:25:10', 0, 0, 0, 0),
(9, 60, 4, '', '5 sao', '2022-08-04 11:52:38', 5, 5, 5, 5),
(10, 62, 3, NULL, 'hay', '2022-08-04 13:26:43', 5, 4, 3, 4),
(11, 62, 3, ' 3', 'hay', '2022-08-04 13:27:16', 5, 5, 5, 5),
(12, 48, 5, NULL, 'ffff', '2022-08-04 13:34:51', 4, 1, 1, 2),
(13, 48, 5, NULL, 'hay', '2022-08-04 13:35:05', 5, 5, 5, 5),
(14, 62, 4, ' 4', 'helo', '2022-08-04 13:38:07', 0, 0, 0, 0),
(15, 48, 5, NULL, '1111', '2022-08-04 19:52:20', 0, 0, 0, 0),
(16, 60, 4, NULL, 'hello', '2022-08-05 14:56:29', 0, 0, 0, 0);

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
  `dateHoanThanh` date NOT NULL,
  `idUser` int(11) NOT NULL,
  `tieuDe` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhiemvu`
--

INSERT INTO `nhiemvu` (`idNhiemVu`, `exp`, `dateHoanThanh`, `idUser`, `tieuDe`) VALUES
(5, 3, '2022-08-04', 4, 'Điểm Danh'),
(6, 3, '2022-08-04', 4, 'Đánh Giá'),
(7, 5, '2022-08-04', 4, 'Comment'),
(8, 3, '2022-08-04', 3, 'Điểm Danh'),
(9, 3, '2022-08-04', 3, 'Đánh Giá'),
(10, 5, '2022-08-04', 3, 'Comment'),
(11, 3, '2022-08-04', 5, 'Điểm Danh'),
(12, 3, '2022-08-04', 5, 'Đánh Giá'),
(13, 5, '2022-08-04', 5, 'Comment');

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
  `idUserXoa` text COLLATE utf8_unicode_ci DEFAULT '-1',
  `dateNotify` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `notify`
--

INSERT INTO `notify` (`idNotify`, `tieuDe`, `idUserDoc`, `idUser`, `idTruyen`, `kieuNotify`, `idUserXoa`, `dateNotify`) VALUES
(26, 'Boss Metruyenchu vừa trả lời đánh giá của bạn', ' 6', '6', 62, 1, '-1', '2022-08-02 23:08:13.000000'),
(27, 'Boss Metruyenchu vừa thích đánh giá của bạn', '6', '6', 62, 1, '-1', '2022-08-02 23:08:16.000000'),
(28, 'Truyện Điên Rồi ! Ngươi Xác Định Ngươi Là Ngự Thú Sư? vừa ra chương mới', '6 5 3', '6 5 3', 62, 1, '5 3', '2022-08-02 23:24:31.000000'),
(29, 'Truyện Điên Rồi ! Ngươi Xác Định Ngươi Là Ngự Thú Sư? vừa ra chương mới', '6 5 3', '6 5 3', 62, 1, '5 3', '2022-08-02 23:25:12.000000'),
(30, 'Boss Metruyenchu vừa thích comment của bạn', '6', '6', 62, 1, '-1', '2022-08-03 14:46:08.000000'),
(31, 'Boss Metruyenchu vừa thích comment của bạn', '6', '6', 62, 1, '-1', '2022-08-03 14:46:11.000000'),
(32, 'Boss Metruyenchu vừa thích trả lời comment của bạn', '6', '6', 62, 1, '-1', '2022-08-03 14:46:59.000000'),
(34, 'Sự kiện trung thu đã bắt đầu, Vào phần nhiệm vụ sự kiện trong hồ sơ để xem hướng dẫn ha!', '4 3 6', '3 4 5 6', -1, 2, '3 4', '2022-08-03 23:52:57.000000'),
(35, 'Sự kiện trung thu đã kết thúc, vào hồ sơ để xem thành quả của mình ha!', '4 3 6', '3 4 5 6', -1, 2, '3 4', '2022-08-03 23:55:52.000000'),
(36, 'Sự kiện trung thu đã bắt đầu, Vào phần nhiệm vụ sự kiện trong hồ sơ để xem hướng dẫn ha!', '4 3 6', '3 4 5 6', -1, 2, '3 4', '2022-08-03 23:58:56.000000'),
(37, 'Sự kiện trung thu đã kết thúc, vào hồ sơ để xem thành quả của mình ha!', '4 3 6', '3 4 5 6', -1, 2, '3 4', '2022-08-04 11:53:35.000000'),
(38, 'Truyện  Ngự Thú Không Phải Là Một Chuyện Rất Đơn Giản Sao? vừa ra chương mới', ' 5', '5', 60, 1, '-1', '2022-08-04 13:19:14.000000'),
(47, 'Sự kiện trung thu đã bắt đầu, Vào phần nhiệm vụ sự kiện trong hồ sơ để xem hướng dẫn ha!', '6 4', '3 4 5 6', -1, 2, '4', '2022-08-04 13:39:09.000000'),
(48, 'Sự kiện trung thu đã kết thúc, vào hồ sơ để xem thành quả của mình ha!', '6 4', '3 4 5 6', -1, 2, '4', '2022-08-04 13:48:08.000000');

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
  `likeRep` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `idTruyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `replycomment`
--

INSERT INTO `replycomment` (`idReply`, `idComment`, `idUser`, `noiDung`, `dateReply`, `likeRep`, `idTruyen`) VALUES
(5, 8, 4, 'hello', '2022-08-05 15:01:59', '', 60);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `replydanhgia`
--

CREATE TABLE `replydanhgia` (
  `idReply` int(11) NOT NULL,
  `idDanhGia` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `dateReply` datetime NOT NULL,
  `noiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `idTruyen` int(11) NOT NULL,
  `likeRep` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `replydanhgia`
--

INSERT INTO `replydanhgia` (`idReply`, `idDanhGia`, `idUser`, `dateReply`, `noiDung`, `idTruyen`, `likeRep`) VALUES
(1, 3, 4, '2022-08-01 16:50:51', 'Yepp truyện rất hay', 62, ' 6'),
(2, 3, 6, '2022-08-01 18:00:19', 'Cảm ơn bạn', 62, ' 4'),
(25, 7, 4, '2022-08-02 23:08:13', 'hello', 62, ''),
(29, 14, 4, '2022-08-04 13:38:27', 'jjfjjfjfjfjf', 62, ''),
(30, 16, 4, '2022-08-05 15:01:21', 'hello', 60, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sukien`
--

CREATE TABLE `sukien` (
  `idSuKien` int(11) NOT NULL,
  `nameEvent` text COLLATE utf8_unicode_ci NOT NULL,
  `point` int(11) NOT NULL DEFAULT 0,
  `idUser` int(11) NOT NULL,
  `dateClick` datetime NOT NULL,
  `trangThai` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sukien`
--

INSERT INTO `sukien` (`idSuKien`, `nameEvent`, `point`, `idUser`, `dateClick`, `trangThai`) VALUES
(1, 'moonEvent', 0, 4, '2022-08-04 13:39:53', 0),
(2, 'moonEvent', 0, 6, '2022-08-04 13:44:52', 0);

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
  `tinhTrang` int(11) NOT NULL DEFAULT 0,
  `deCu` int(11) NOT NULL DEFAULT 0,
  `soChu` int(11) NOT NULL DEFAULT 0,
  `trangThai` int(11) NOT NULL DEFAULT 0,
  `soChuong` int(11) NOT NULL DEFAULT 0,
  `viewTruyen` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `truyen`
--

INSERT INTO `truyen` (`idTruyen`, `idUser`, `nhom1`, `nhom2`, `nhom3`, `nhom4`, `nhom5`, `nhom6`, `tenTruyen`, `gioiThieu`, `tacGia`, `imgTruyen`, `dateTruyen`, `dateCapNhap`, `tinhTrang`, `deCu`, `soChu`, `trangThai`, `soChuong`, `viewTruyen`) VALUES
(48, 4, '288', '310', '299', '301', '359', '394', 'Đấu Phá Thương Khung', 'Đây là một thế giới thuộc về Đấu Khí, không hề có ma pháp hoa tiếu diễm lệ, chỉ có đấu khí cương mãnh phồn thịnh !\r\nTưởng tượng thế giới đó sẽ phát triển ra sao ? mời các bạn xem Đấu Phá Thương Khung !\r\nHệ Thống Tu Luyện : Đấu Giả, Đấu Sư, Đại Đấu Sư, Đấu Linh, Đấu Vương, Đấu Hoàng, Đấu Tông, Đấu Tôn, Đấu Thánh, Đấu Đế.\r\nHãy Bắt Đầu Từ Tiêu Viêm ! Một thiên tài tu luyện trong phút chốc trở thành phế vật, từ phế vật lại từng bước khẳng định lại chính mình !\r\nHãy cùng bắt đầu cuộc hành trình đó với Đấu Phá Thương Khung', 'Thiên Tằm Thổ Đậu', '150.jpg', '2022-07-29 15:53:04', '2022-08-04 15:03:58', 0, 0, 3372, 1, 5, 29),
(49, 4, '287', '324', '298', '301', '362', '394', 'Xích Tâm Tuần Thiên', 'Thời đại thượng cổ, Yêu tộc tuyệt tích. Thời đại cận cổ, Long tộc biến mất. Thần đạo đang thịnh thời đại đã như khói, phi kiếm đỉnh cao nhất thời đại cuối cùng trầm luân. . .\r\n\r\nThế giới này xảy ra chuyện gì?\r\n\r\nCái kia mai táng tại bên trong dòng sông thời gian chân tướng lịch sử, ai đến lắng nghe?\r\n\r\nNúi sông ngàn dặm viết thây nằm, càn khôn trăm năm tô lại hổ đói.\r\n\r\nThiên địa chí công như vô tình,\r\n\r\nTa có xích tâm một viên, lấy tuần thiên!\r\n-----------------------\r\nCảnh giới tu luyện chia làm cửu cấp, cửu thấp nhất:\r\nDu Mạch cảnh -> Chu Thiên cảnh -> Thông Thiên cảnh -> Đằng Long cảnh -> Nội Phủ cảnh -> Ngoại Lâu Cảnh -> Thần Lâm cảnh-> Động Chân cảnh--> Diễn Đạo cảnh.....', 'Tình Hà Dĩ Thậm', '150 (7).jpg', '2022-07-31 12:19:31', '2022-07-31 12:19:31', 0, 0, 0, 1, 0, 0),
(50, 4, '292', '346', '298', '305', '376', '394', 'Huấn Luyện Gia Tầng Lớp Thấp Nhất Của Thế Giới Pokemon', 'Cảm ơn Liên Minh trả lại thế giới Pokemon yên tĩnh tường hòa, bởi vì ta cái này Trainer \"Tầng lớp thấp nhất\", nhảy phản.\r\n\r\n—— nguồn gốc từ \"Tầng lớp thấp nhất\" Trainer, nhà chăn nuôi Natsuhiko « tự thuật »\r\n--------------------------------\r\nThời gian trước nguyên tác 8~10 năm.', 'Thuyết Xướng Cáp', '150 (2).webp', '2022-07-31 12:20:58', '2022-07-31 12:20:58', 0, 0, 0, 1, 0, 0),
(51, 4, '288', '310', '298', '301', '363', '394', ' Hạch Động Lực Kiếm Tiên', 'Hắn cúi đầu. . .\r\n\r\nNhìn từng chiếc từng chiếc phảng phất món đồ chơi chiến tranh vũ khí.\r\n\r\nDuỗi tay , một viên bom khinh khí rơi vào trong tay.\r\n\r\nTrong cơ thể điện tử giản cũng thái tinh hạch phóng xuất ra khí , khí nguyên tố bành trướng , nhiệt độ kinh khủng trong nháy mắt lệnh Hydrogen đồng vị nguyên tố đao cùng xuyên tụ hợp , năng lượng bạo phát , chợt hình thành sí bạch quang huy như trên mặt biển đốt sáng lên một vầng mặt trời.\r\n\r\nKhông đợi cái này cái mặt trời năng lượng thả ra , hắn hai tay hợp lại , lập loè sí bạch xen lẫn hàng trăm triệu nhiệt độ cao bị áp súc , phong tỏa tại trong lòng bàn tay , tiêu tán không ra nửa phần.\r\n\r\n\"Ta cảm thấy , các ngươi nên chọn hòa bình.\"', 'Thừa Phong Ngự Kiếm', '150 (12).jpg', '2022-07-31 12:22:47', '2022-07-31 12:22:47', 0, 0, 0, 1, 0, 0),
(52, 4, '288', '311', '298', '302', '363', '394', ' Mô Phỏng Nhân Sinh: Ta Thần Linh Thân Phận Đã Bị Lộ', 'Thu được chuyển sinh máy mô phỏng , Lâm Triều trải qua vô số nhân sinh.\r\n\r\nMột người làm vạn kỵ hiệp khách.\r\n\r\nTiêu dao thần bí phương sĩ.\r\n\r\nDi sơn đảo hải người tu tiên.\r\n\r\nTrong truyền thuyết thần thoại đại năng.\r\n\r\nLâm Triều tại chuyển sinh trở nên mạnh mẽ đồng thời , thế giới cũng tùy chi phát sinh kịch biến.\r\n\r\nĐã từng trấn áp tại núi băng bên dưới quái vật trồi lên mặt nước; chỉ chừa tồn tại khô vàng trong trang sách thần thoại truyền thuyết được chứng thực.\r\n\r\nMà những truyền thuyết này bên trong , đều có một cái cái khiến người say mê nhân vật chính.\r\n\r\nLâm Triều: \"Không có ý tứ , những người này đều là của ta áo lót.\"', 'Bạo Táo Tiểu Khí Bao', '300.jpg', '2022-07-31 12:24:33', '2022-07-31 12:24:33', 0, 0, 0, 1, 0, 0),
(53, 4, '287', '324', '298', '300', '362', '394', 'Hợp Đạo', 'Tu thần đạo môn mờ mịt hư vô , thần bí khó lường; luyện khí đạo môn siêu nhiên hậu thế , giám sát xã tắc; võ đạo thịnh hành hậu thế , tranh bá thiên hạ; ma môn yêu đảng ẩn vào chỗ tối , tùy thời tác loạn.\r\n\r\nĐại kiếp nạn buông xuống , thiên hạ dần dần loạn , quần hùng tịnh khởi.\r\n\r\nTần Tử Lăng trọng sinh tại lớn Tề Quốc xa xôi tiểu quận một vị bần hàn con em trẻ tuổi trên thân , bắt đầu lặp lại một cơn ác mộng.\r\n\r\nLão giả xấu xí , long thủ quái điểu , nghìn dặm truy sát. . .\r\n\r\nLoạn thế, một cái nghèo túng người trùng sinh , làm như thế nào tự bảo vệ mình?\r\n\r\nThẳng đến có một ngày , hắn trong mộng nhìn thấy , một ngón tay gãy đeo chiếc nhẫn rơi tòa nào đó đạo quan.\r\n\r\nQuan tên Xích Tiêu!', 'Đoạn Kiều Tàn Tuyết', '150 (14).jpg', '2022-07-31 12:25:59', '2022-07-31 12:25:59', 0, 0, 0, 1, 0, 0),
(54, 4, '288', '310', '298', '301', '358', '394', 'Từ Hồng Mông Thánh Thể Bắt Đầu Vô Địch', 'Thiếu niên Doanh Nhất ngoài ý muốn xuyên qua đến một cái Tiên Ma yêu Phật đủ lộ ra, vu quỷ nhân thần cộng sinh huyền huyễn đại thế giới, ngẫu đến Vô Địch hệ thống, trời sinh Hồng Mông Thánh thể, trở thành Tiên Cổ thế gia Thần tử.\r\n\r\nĐúng lúc gặp sáng chói thịnh thế, thiên kiêu cùng nổi lên, yêu nghiệt hoành hành, nhìn Doanh Nhất như thế nào từng bước một quét ngang hết thảy, vấn đỉnh chư thiên! Thiên kiêu tranh bá, xấu bụng Vô Địch, không ngựa giống!', 'Nguyệt Bán Tam Cân', '150 (1).webp', '2022-07-31 12:27:07', '2022-07-31 12:27:07', 0, 0, 0, 1, 0, 0),
(55, 4, '291', '356', '298', '300', '358', '394', 'Thả Câu Trái Pika Pika No Mi, Lóe Mù Sát Vách Giáo Hoa', 'Thiên địa biến đổi lớn, thần bí khôi phục, dị tộc giấu tại tinh không trường thành bên ngoài, bóng đêm vô tận bên trong, tổ tinh tình thế nghiêm trọng, tràn ngập nguy hiểm!\r\n\r\nLâm Độ đang thức tỉnh nghi thức bên trên cường thế thổ lộ giáo hoa!\r\n\r\n\"Triệu Tuyền Cơ, ngươi dung mạo rất khá, để ta động lòng!\"\r\n\r\n\"Cho ngươi một cơ hội, tự nghĩ biện pháp yêu ta!\"\r\n\r\n\"Hi vọng ngươi không muốn không biết điều!\"\r\n\r\n【 đinh! Thổ lộ thành công, ban thưởng: Chư thiên thả câu ao! 】\r\n\r\n【 chư thiên thả câu ao 】: Dùng giết chóc giá trị hối đoái không cùng cấp bậc lưỡi câu, liền có thể thả câu Chư Thiên Vạn Giới!\r\n\r\n【 hoàng kim lưỡi câu thả câu thành công: Thu hoạch được . . . . 】', 'Ngốc Đầu Lão Bối Bỉ', '300.webp', '2022-07-31 12:28:24', '2022-07-31 12:28:24', 0, 0, 0, 1, 0, 0),
(56, 4, '288', '342', '298', '304', '388', '394', 'Ngự Thú: Ta Có Thể Chiết Xuất Huyễn Thú Huyết Mạch!', 'Trần Hiên sở hữu một cái huyết mạch chiết xuất khí, có thể chiết xuất Huyễn Thú huyết mạch.\r\n\r\nThống Lĩnh huyết mạch độ tinh khiết phù hợp điều kiện, Phong Lang Khuyển tiến hóa thành Hắc Viêm Khuyển,\r\n\r\nLĩnh Chủ cấp huyết mạch độ tinh khiết phù hợp điều kiện, Hắc Viêm Khuyển tiến hóa thành Hắc Viêm Thần Khuyển,\r\n\r\nThú Vương huyết mạch độ tinh khiết phù hợp điều kiện, Hắc Viêm Khuyển tiến hóa thành Hắc Ngục Trấn Viêm Khuyển\r\n\r\nQuân Vương huyết mạch độ tinh khiết phù hợp điều kiện, Hắc Ngục Trấn Viêm Khuyển tiến hóa thành Địa Ngục Tam Đầu Trấn Viêm Khuyển.\r\n\r\nTự Phượng, Hỏa Phượng Điểu, Hỏa Diễm Phi Phượng, Liệt Diễm Đan Phượng, Sí Viêm Kim Sí Hỏa Phượng, Thần Viêm Kim Sí Hỏa Phượng, Thất Thải Thần Viêm Phượng Hoàng.\r\n\r\nKhông chút nào bắt mắt Huyễn Thú trong huyết mạch cũng có thể ẩn giấu cường đại tổ tiên huyết mạch.\r\n\r\nMà Trần Hiên thì có thể phát hiện bọn họ ưu tú chỗ, cũng tinh luyện bọn họ huyết mạch.', 'Cầu Cầu Nhĩ Thượng Thiên Ba', '300 (1).jpg', '2022-07-31 12:29:48', '2022-07-31 12:29:48', 0, 0, 0, 1, 0, 0),
(57, 4, '288', '321', '299', '304', '386', '394', ' Tổn Thọ Lạp! Ta Tu Tiên Công Pháp Có Thể Nói!', 'Lâm Huyền xuyên việt tu tiên thế giới, trở thành Thần Tiêu tông đệ tử ký danh, lại không có được hệ thống đại thần quan tâm!\r\n\r\nCũng may hắn tu tiên công pháp cũng biết nói chuyện!\r\n\r\nCơ Sở Luyện Khí Quyết: \"Lão đại, hài tử muốn tiến hóa, hài tử muốn nghe đạo!\"\r\n\r\nBất Phá Kim Chung Tráo (Tàn Thiên ): \"Tiểu Tăng Tiên Thiên không được đầy đủ, cũng xin thí chủ cứu ta! !\"\r\n\r\nNộ Huyết Tam Trọng Trảm: \"Sát sát sát! Trời sinh vạn vật lấy nuôi người, không một người đức lấy báo thiên!\"', 'Cẩn Công Công Bất Phục Thâu', '150 (11).jpg', '2022-07-31 12:31:17', '2022-07-31 12:31:17', 0, 0, 0, 1, 0, 0),
(58, 4, '288', '313', '298', '304', '358', '394', 'Võ Hiệp: Biếu Tặng Cơ Duyên, Bạo Kích Phản Hồi!', 'Xuyên việt tống võ thế giới, Triệu Vô Tiện thu được bạo kích phản hồi hệ thống, biếu tặng vật phẩm của mình, là có thể thu được bạo kích phản hồi.\r\n\r\n\"Ngài biếu tặng một viên Tiên Thiên đan, gây ra gấp mười lần bạo kích phản hồi, thu được Tiên Thiên đan * 10!\"\r\n\r\n\"Ngài biếu tặng « Tịch Tà Kiếm Phổ », gây ra gấp trăm lần bạo kích phản hồi, thu được Vô Khuyết « Quỳ Hoa Bảo Điển »!\"\r\n\r\n\"Ngài biếu tặng trăm năm công lực, gây ra nghìn lần bạo kích phản hồi, thu được trăm năm Tiên Nguyên!\"\r\n\r\n\"Ngài biếu tặng Phượng Nguyên, gây ra vạn lần bạo kích phản hồi, thu được Bất Tử Thần Hoàng trứng!\"\r\n\r\nVương Ngữ Yên: \"Xin lỗi, biểu ca, Triệu công tử đối với ta thật tốt quá, chỉ có làm nô tỳ, (tài năng)mới có thể báo đáp.\"\r\n\r\nKiều Phong: \"Thiên hạ to lớn, ta kiều mỗ chỉ phục Triệu công tử, nhân nghĩa vô song!\"\r\n\r\nYêu Nguyệt: \"Ta đã thành tiên, lại nguyện ở nơi này hồng trần chờ ngươi, chỉ nguyện uyên ương không nguyện tiên!\"', 'Ái Nghiên', '300 (2).jpg', '2022-07-31 12:32:50', '2022-07-31 12:32:50', 0, 0, 0, 1, 0, 0),
(59, 4, '287', '310', '298', '300', '363', '394', 'Những Năm Kia, Chúng Ta Cùng Một Chỗ Chặt Qua Tu Tiên Giả', 'Cùng truyền thống tiên hiệp phương pháp sáng tác khác biệt, không thích chớ nhập.\r\n\r\nMột năm kia, bảy tuổi nam hài nhi mang theo muội muội bước vào Tu Tiên Giới, sau đó, tu tiên toàn điên rồi!\r\n\r\nRa tới tu tiên, ngươi thiên phú tốt không tốt, bảo bối nhiều hay không, có hay không cơ duyên, những này đều không trọng yếu, nhưng ngươi nhất định phải nhớ kỹ, có một người ngươi không thể gây.\r\n\r\nMặc dù nhưng cái này người cũng không phải là cái gì người tu tiên.\r\n\r\nNhưng là đao của hắn, so ánh sáng còn nhanh hơn, nhanh đến ngươi căn bản không kịp điều động linh lực.\r\n\r\nQuyền của hắn, so trời còn nặng, nặng có thể một quyền để cái thế giới này đình chỉ tự quay.\r\n\r\nMiệng của hắn, so ta còn tiện, tiện có thể cho Liệt Dương lưu', 'Ma Cô Ốc Hạ Tùng Thử', '300 (3).jpg', '2022-07-31 12:34:13', '2022-07-31 12:34:13', 0, 0, 0, 1, 0, 0),
(60, 4, '291', '357', '299', '300', '388', '394', ' Ngự Thú Không Phải Là Một Chuyện Rất Đơn Giản Sao?', '( hoạt bát đáng yêu thập nhị dực thiên sứ ) ( uy nghiêm vô địch Hồng Liên Viêm Long )\r\n\r\n( uy vũ bá khí Địa Ngục Tam Đầu Khuyển )\r\n\r\n( phòng ngự kinh người Linh Thủy Quy )\r\n\r\n( lực lớn vô cùng Đại Lực Thần Kiến Vương )\r\n\r\n( xinh đẹp động lòng người Trường Cung Tinh Linh ). . .\r\n\r\nNhân vật chính Lưu Tinh xuyên qua đến một cái ngự thú thế giới, hắn thu được ngự thú hệ thống.\r\n\r\nỞ cái thế giới này, có rất nhiều bí cảnh chờ đợi mọi người đi thăm dò.\r\n\r\nNhân vật chính Lưu Tinh, dựa vào ngự thú hệ thống, nhân vật chính khế ước một đầu lại một đầu cường đại ngự thú, cuối cùng bò lên trên cái này cái đỉnh điểm của thế giới.', 'Thu Sơ Diệp Toàn', '300 (4).jpg', '2022-07-31 12:35:44', '2022-08-04 13:19:14', 0, 6, 1631, 1, 1, 3),
(61, 4, '288', '310', '298', '301', '358', '394', 'Linh Khí Khôi Phục: Cái Này Nữ Đế Quá Ngạo Kiều Rồi!', 'Ta, Lam Linh Nhi, kiếp trước chính là một tôn Vô Song nữ đế, ngoài ý muốn trùng sinh là Đại Viêm nước quý phi.\r\n\r\nCẩu hoàng đế tàn bạo không đức, hai năm sau liền muốn băng hà, ta muốn sớm một chút giết chết hắn.\r\n\r\nĐợi đến linh khí khôi phục, khôi phục tu vi, sau đó độc bá Thiên Nguyên đại lục.\r\n\r\nTa, Yến Vân Trung, kiếp trước liền là một tên điếu ti, ngoài ý muốn xuyên qua đến chín mươi bốn tuổi cao lão hoàng đế trên thân, hậu cung giai lệ ba ngàn, ta một cái không dám đụng vào.\r\n\r\nNghe nói Lam quý phi cũng là người xuyên việt, lai lịch không nhỏ, còn có tu tiên trường thọ công pháp.\r\n\r\nTrẫm không thể nhịn, nữ nhân trẫm muốn, công pháp trẫm chiếm.\r\n\r\nAi dám hỏng ta Đại Viêm giang sơn, trẫm nhất định không buông tha hắn, cái gì?\r\n\r\nLam quý phi lại tạo phản?', 'Tiếu Đông Qua', '300 (5).jpg', '2022-07-31 12:37:03', '2022-07-31 12:37:03', 0, 0, 0, 1, 0, 0),
(62, 4, '288', '310', '299', '301', '358', '394', 'Điên Rồi ! Ngươi Xác Định Ngươi Là Ngự Thú Sư?', 'Tô Trạch xuyên qua đến vạn tộc thế giới, tại nơi này có đủ loại phương thức tu luyện.\r\n\r\nCó võ đạo, có thuật sĩ, có ngự thú sư!\r\n\r\nĐang thức tỉnh nghi thức bên trên, Tô Trạch thức tỉnh ngự thú sư thiên phú, cũng khóa lại Thần cấp ngự thú hệ thống, đem tu vi quán đỉnh cho linh thú, trực tiếp thu hoạch được mấy chục lần phản hồi!\r\n\r\nThế là, một cái thực lực so khế ước linh thú còn cường đại hơn ngự thú sư sinh ra!\r\n\r\n\"Điên rồi đi? Tên kia ngự thú sư một quyền đem một dãy núi đánh nổ?\"\r\n\r\n\"Vì cái gì cái này ngự thú sư so với chính mình linh thú còn muốn mạnh hơn a? Đến cùng là ai ngự ai vậy?\"\r\n\r\n\"Quản quản cái tên điên này a! Ta một cái chuyên tu võ đạo người, kỹ xảo chiến đấu vậy mà không có một cái nào ngự thú sư cường?\"', 'Phẫn Nộ Bồ Đào', '300 (6).jpg', '2022-07-31 12:38:07', '2022-08-02 23:25:12', 0, 15, 3565, 1, 3, 6);

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
  `exp` int(11) NOT NULL DEFAULT 0,
  `phieuDeCu` int(11) NOT NULL DEFAULT 0,
  `dateNhanPhieu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`idUser`, `userName`, `password`, `email`, `quyenHan`, `userDate`, `imgUser`, `ngaySinh`, `sex`, `gioiThieu`, `trangThaiComment`, `trangThaiTk`, `exp`, `phieuDeCu`, `dateNhanPhieu`) VALUES
(3, 'Lê Ngọc Đức P H 2 4 8 7 0', '83c4f3bb6cce4dc5cf1452f4f182689f', 'duclnph24870@fpt.edu.vn', 3, '2022-03-29 00:00:00', 'hinhNen.jpg', '2001-12-10', 1, 'Leader dự án', 0, 1, 11, 4, NULL),
(4, 'Boss Metruyenchu', '21232f297a57a5a743894a0e4a801fc3', 'zerotwo13102001@gmail.com', 5, '2022-03-29 00:00:00', '314574.png', '2001-10-13', 1, 'Người điều hành và phát triển website Metruyenchu', 1, 1, 55, 0, '2022-08-05'),
(5, 'Quyền hạn 1', 'fdc9ac365e0b37b0fa012ae1491807cf', 'test@gmail.com', 1, '2022-03-29 00:00:00', 'userImg.webp', NULL, NULL, NULL, 1, 1, 11, 1, '2022-08-04'),
(6, 'Quyền hạn 2', 'bdfccc964a5fc0dfbc9bf19fd8305a3b', 'quyenHan2@gmail.com', 2, '2022-03-29 00:00:00', '00090172.jpg', '2001-10-13', 1, 'Người Đăng Truyện', 0, 1, 6, 0, '2022-08-04');

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
  MODIFY `idChuong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `idComment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `dangdoc`
--
ALTER TABLE `dangdoc`
  MODIFY `idDangDoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `danhdau`
--
ALTER TABLE `danhdau`
  MODIFY `idDanhDau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `idDanhGia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `idDanhMuc` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400;

--
-- AUTO_INCREMENT cho bảng `icon`
--
ALTER TABLE `icon`
  MODIFY `idIcon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhiemvu`
--
ALTER TABLE `nhiemvu`
  MODIFY `idNhiemVu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `notify`
--
ALTER TABLE `notify`
  MODIFY `idNotify` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `replycomment`
--
ALTER TABLE `replycomment`
  MODIFY `idReply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `replydanhgia`
--
ALTER TABLE `replydanhgia`
  MODIFY `idReply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `sukien`
--
ALTER TABLE `sukien`
  MODIFY `idSuKien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `truyen`
--
ALTER TABLE `truyen`
  MODIFY `idTruyen` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
