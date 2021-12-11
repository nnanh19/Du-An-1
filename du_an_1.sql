-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2021 lúc 05:34 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

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
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `ma_kh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ngay_lap` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_kh`, `ma_hh`, `ngay_lap`) VALUES
(150, 'trong đêm thâu', 'anh1234', 27, '2021-12-10 21:04:31'),
(153, 'Rất là đẹp trai', 'anh1234', 27, '2021-12-10 21:15:53'),
(154, 'Nếu', 'anh1234', 27, '2021-12-10 21:15:57'),
(155, 'Ay trà trà', 'anh1234', 27, '2021-12-10 21:18:27'),
(157, 'Rất là đẹp trai', 'anh1234', 29, '2021-12-11 11:13:01'),
(158, 'quần đẹp', 'anh1234', 29, '2021-12-11 11:13:34'),
(159, 'quần đẹp', 'anh1234', 29, '2021-12-11 11:13:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `don_gia` double NOT NULL,
  `giam_gia` int(2) NOT NULL,
  `hinh` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `luot_xem` int(11) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `dac_biet` tinyint(1) NOT NULL DEFAULT 0,
  `so_luong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `mo_ta`, `ma_loai`, `luot_xem`, `ngay_nhap`, `dac_biet`, `so_luong`) VALUES
(23, 'Áo sơ mi', 50001, 10, 'ANTTK204-3-400x600.jpg', 'abc', 1, 219, '2021-12-31', 1, 101),
(24, 'Áo sơ mi', 500000, 50, 'ANTTK204-3-400x600.jpg', 'Không có gì để mô tẩ', 1, 2, '2021-12-12', 1, 12),
(25, 'Áo jean', 500000, 20, 'ANTTK203-3-400x600.jpg', '- Hình in sau lưng nổi bật, sắc nét, được áp dụng công nghệ in vinyl hiện đại, khó bong tróc, bạc màu sau thời gian dài sử dụng.\r\n\r\n- Đường may cắt đúp tỉ mỉ, cẩn thận.\r\n\r\n- Khuy kim loại chống gỉ nước, được đơm chắc chắn.\r\n\r\n- Hai túi trước ngược có khuy cài chắc chắn. Hai túi bên hông sâu rộng.', 3, 113, '2021-12-08', 1, 10),
(26, 'Áo jean', 400000, 20, '1281__1__673f8ab5547541ef96b35c25686a9d23_master.jpg', '- Hình in sau lưng nổi bật, sắc nét, được áp dụng công nghệ in vinyl hiện đại, khó bong tróc, bạc màu sau thời gian dài sử dụng.\r\n\r\n- Đường may cắt đúp tỉ mỉ, cẩn thận.\r\n\r\n- Khuy kim loại chống gỉ nước, được đơm chắc chắn.\r\n\r\n- Hai túi trước ngược có khuy cài chắc chắn. Hai túi bên hông sâu rộng.', 3, 15, '2021-12-08', 1, 10),
(27, 'Giày #1', 240000, 20, '2.jpg', '- Không giặt nhiều lần sau khi mua để tránh bạc màu vải.\r\n\r\n- Dùng nước giặt thay vì bột giặt. Vì bề mặt vải dễ bám bột giặt, có thể gây phai màu hoặc ảnh hưởng đến một phần của sợi vải. Vậy nên, tốt nhất bạn nên dùng nước giặt để tránh trường hợp trên.\r\n\r\n- Giặt riêng với các loại đồ khác để tránh phai màu.\r\n\r\n- Không nên phơi trực tiếp dưới ánh mặt trời.', 4, 173, '2021-12-16', 1, 20),
(28, 'Giày #2', 240000, 20, '3.jpg', '- Không giặt nhiều lần sau khi mua để tránh bạc màu vải.\r\n\r\n- Dùng nước giặt thay vì bột giặt. Vì bề mặt vải dễ bám bột giặt, có thể gây phai màu hoặc ảnh hưởng đến một phần của sợi vải. Vậy nên, tốt nhất bạn nên dùng nước giặt để tránh trường hợp trên.\r\n\r\n- Giặt riêng với các loại đồ khác để tránh phai màu.\r\n\r\n- Không nên phơi trực tiếp dưới ánh mặt trời.', 4, 21, '2021-12-16', 1, 20),
(29, 'Giày #3', 240000, 20, '0679cfe6b6fa4d18a09b66b21e535999_9e8afb22ebfb4c848c896e05dfa9a809_master.jpg', '- Không giặt nhiều lần sau khi mua để tránh bạc màu vải.\r\n\r\n- Dùng nước giặt thay vì bột giặt. Vì bề mặt vải dễ bám bột giặt, có thể gây phai màu hoặc ảnh hưởng đến một phần của sợi vải. Vậy nên, tốt nhất bạn nên dùng nước giặt để tránh trường hợp trên.\r\n\r\n- Giặt riêng với các loại đồ khác để tránh phai màu.\r\n\r\n- Không nên phơi trực tiếp dưới ánh mặt trời.', 4, 148, '2021-12-16', 1, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hd` int(11) NOT NULL,
  `ma_kh` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nv` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ten_kh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_lap` date NOT NULL,
  `pttt` bit(1) NOT NULL DEFAULT b'0',
  `tinh_trang` int(1) NOT NULL DEFAULT 0,
  `tong_tien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`ma_hd`, `ma_kh`, `ma_nv`, `ten_kh`, `dia_chi`, `sdt`, `ngay_lap`, `pttt`, `tinh_trang`, `tong_tien`) VALUES
(73532561, 'anh1234', 'admin1', '', '', '', '2021-12-11', b'1', 3, 400000),
(116965852, 'anh1234', 'admin1', '', '', '', '2021-12-11', b'1', 2, 400000),
(1179548463, 'anh1234', 'admin1', 'Nhật Anh', 'PT', '09123123', '2021-12-11', b'1', 1, 192000),
(1443353766, 'anh1234', '', '', '', '', '2021-12-11', b'1', 0, 400000),
(1459676354, 'anh1234', '', 'Nhật Anh', 'PT', '0971145489', '2021-12-11', b'1', 0, 1888000),
(1624870153, 'anh1234', '', '', '', '', '2021-12-11', b'1', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `ma_cthd` int(11) NOT NULL,
  `ma_hd` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `size` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `don_gia` double NOT NULL,
  `so_luong` int(11) NOT NULL,
  `giam_gia` int(3) NOT NULL,
  `thanh_tien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don_chi_tiet`
--

INSERT INTO `hoa_don_chi_tiet` (`ma_cthd`, `ma_hd`, `ma_hh`, `size`, `don_gia`, `so_luong`, `giam_gia`, `thanh_tien`) VALUES
(88, 1179548463, 28, 'XXL', 240000, 1, 20, 192000),
(89, 1459676354, 29, 'XXL', 240000, 3, 20, 576000),
(90, 1459676354, 25, 'l', 500000, 2, 20, 800000),
(91, 1459676354, 28, 'xxl', 240000, 1, 20, 192000),
(92, 1459676354, 26, 'XL', 400000, 1, 20, 320000),
(93, 1443353766, 25, 'l', 500000, 1, 20, 400000),
(94, 116965852, 25, 'l', 500000, 1, 20, 400000),
(95, 73532561, 25, 'l', 500000, 1, 20, 400000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ten_kh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_sinh` date NOT NULL,
  `mat_khau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `gioi_tinh` bit(1) NOT NULL DEFAULT b'0',
  `kich_hoat` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ten_kh`, `email`, `sdt`, `dia_chi`, `ngay_sinh`, `mat_khau`, `hinh`, `gioi_tinh`, `kich_hoat`) VALUES
('anh1234', 'anh1234', 'anh123@a', '0971145489', 'PT', '0000-00-00', 'anh123', './content/images/users/61b21d1c24545-ANTTK203-3-400x600.jpg', b'1', b'1'),
('cus', 'cusa', 'nnanh99pt@gmail.com', '0971145489', 'PT', '2021-12-16', 'cus', 'ANTTK204-3-400x600.jpg', b'1', b'0'),
('nnanh99pt@g', 'anh123', 'anh123@aa.com', '0971145489', 'PT', '2021-12-31', 'anh123', 'ANTTK204-3-400x600.jpg', b'1', b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_hang`
--

CREATE TABLE `loai_hang` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_hang`
--

INSERT INTO `loai_hang` (`ma_loai`, `ten_loai`) VALUES
(1, 'Gucci'),
(2, 'Quần'),
(3, 'Áo'),
(4, 'Giày');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `ma_nv` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ten_nv` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_sinh` date NOT NULL,
  `mat_khau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `gioi_tinh` bit(1) NOT NULL DEFAULT b'0',
  `kich_hoat` bit(1) NOT NULL DEFAULT b'0',
  `vai_tro` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhan_vien`
--

INSERT INTO `nhan_vien` (`ma_nv`, `ten_nv`, `email`, `sdt`, `dia_chi`, `ngay_sinh`, `mat_khau`, `hinh`, `gioi_tinh`, `kich_hoat`, `vai_tro`) VALUES
('admin1', 'admin2', 'anhnn@gmail.com', '0971145489', 'PT', '2021-12-17', 'admin1', 'ANTTK204-3-400x600.jpg', b'1', b'1', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phan_hoi_binh_luan`
--

CREATE TABLE `phan_hoi_binh_luan` (
  `ma_phbl` int(11) NOT NULL,
  `ma_bl` int(11) NOT NULL,
  `ma_nv` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `phan_hoi` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay_them` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phan_hoi_binh_luan`
--

INSERT INTO `phan_hoi_binh_luan` (`ma_phbl`, `ma_bl`, `ma_nv`, `ma_hh`, `phan_hoi`, `ngay_them`) VALUES
(21, 150, 'admin1', 27, 'Không tốt', '2021-12-10 15:06:31'),
(22, 153, 'admin1', 0, 'lan nay sai em xin bo hoc', '2021-12-10 15:26:50'),
(23, 154, 'admin1', 0, 'Cháu chịu', '2021-12-10 15:28:27'),
(24, 155, 'admin1', 0, 'EM SAI RỒI  SQL ƠI', '2021-12-10 15:53:17'),
(25, 157, 'admin1', 0, 'lan nay sai em xin bo hoc', '2021-12-11 05:13:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `ma_size` int(11) NOT NULL,
  `size` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `so_luong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`ma_size`, `size`, `ma_hh`, `ma_loai`, `so_luong`) VALUES
(1, 'S', 23, 1, 12),
(3, 'M', 23, 1, 13),
(4, 'X', 24, 1, 12),
(5, 'l', 25, 3, 12),
(6, 'XL', 26, 3, 12),
(7, 'XXL', 27, 3, 12),
(8, 'XXL', 28, 4, 12),
(9, 'XXL', 29, 4, 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `ma_slide` int(11) NOT NULL,
  `tieu_de` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `duong_dan` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_them` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`ma_slide`, `tieu_de`, `noi_dung`, `duong_dan`, `hinh_anh`, `ngay_them`) VALUES
(20, 'Nhóm 6', 'Không biết để gì', 'http://localhost:81/du-an-1/', 'hinh-nen-slide-mo-dau-1.jpg', '0000-00-00'),
(21, 'Nhóm 6', 'Vào đây', 'http://localhost:81/du-an-1/', 'hinh-nen-slide-mo-dau-1.jpg', '0000-00-00'),
(22, 'Nhóm 6', 'abc', 'http://localhost:81/du-an-1/', 'hinh-nen-slide-mo-dau-1.jpg', '0000-00-00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hd`);

--
-- Chỉ mục cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD PRIMARY KEY (`ma_cthd`),
  ADD KEY `hoa_don_chi_tiet_ibfk_1` (`ma_hd`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`ma_nv`);

--
-- Chỉ mục cho bảng `phan_hoi_binh_luan`
--
ALTER TABLE `phan_hoi_binh_luan`
  ADD PRIMARY KEY (`ma_phbl`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`ma_size`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`ma_slide`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2146647625;

--
-- AUTO_INCREMENT cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  MODIFY `ma_cthd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `phan_hoi_binh_luan`
--
ALTER TABLE `phan_hoi_binh_luan`
  MODIFY `ma_phbl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `ma_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `ma_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_1` FOREIGN KEY (`ma_hd`) REFERENCES `hoa_don` (`ma_hd`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
