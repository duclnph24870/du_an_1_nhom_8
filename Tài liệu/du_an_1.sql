-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 12, 2022 lúc 08:52 AM
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
  `trangThai` int(11) NOT NULL,
  `idUser` text COLLATE utf8_unicode_ci NOT NULL,
  `idTruyen` int(11) NOT NULL,
  `kieuNotify` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `trangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `userName` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `quyenHan` int(11) NOT NULL,
  `userDate` datetime NOT NULL,
  `imgUser` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaySinh` date NOT NULL,
  `sex` int(11) NOT NULL,
  `gioiThieu` text COLLATE utf8_unicode_ci NOT NULL,
  `trangThaiComment` int(11) NOT NULL,
  `trangThaiTk` int(11) NOT NULL,
  `exp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  MODIFY `idDanhMuc` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhiemvu`
--
ALTER TABLE `nhiemvu`
  MODIFY `idNhiemVu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `notify`
--
ALTER TABLE `notify`
  MODIFY `idNotify` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT cho bảng `truyen`
--
ALTER TABLE `truyen`
  MODIFY `idTruyen` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
