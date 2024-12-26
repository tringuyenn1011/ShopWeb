-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 26, 2024 lúc 08:17 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `name`, `url`) VALUES
(1, '1', 'https://www.shutterstock.com/image-vector/11-super-sale-promo-banner-260nw-2536043191.jpg'),
(2, '2', 'https://png.pngtree.com/png-vector/20220213/ourmid/pngtree-mega-sale-20-off-png-image_4387013.png'),
(3, '3', 'https://png.pngtree.com/png-vector/20190521/ourlarge/pngtree-classic-big-sale-discount-label-with-stroke-illustration-png-image_1055868.jpg'),
(4, '4', 'https://img.lovepik.com/original_origin_pic/18/06/08/826f808b481600a21c4cd99ab1447b12.png_wh860.png'),
(5, '5', 'https://png.pngtree.com/png-vector/20200320/ourmid/pngtree-special-offer-sale-50-off-red-tag-discount-offer-price-label-png-image_2163244.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `detail` text DEFAULT NULL,
  `urlimage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `detail`, `urlimage`) VALUES
(1, 'áo phông', 'áo', 200.00, 'Thoáng mắt, năng động, trẻ trung', 'https://down-vn.img.susercontent.com/file/vn-11134207-7qukw-lj4je3a7hl1ub8.webp'),
(2, 'áo hút đi', 'áo', 400.00, 'ấm áp giữa mùa đông khi không có NY', 'https://down-vn.img.susercontent.com/file/vn-11134207-7ras8-m12ykm5h6nj3d4.webp'),
(3, 'áo sơ mi', 'áo', 79.00, 'Lịch lãm phong độ khiến muốn có ny', 'https://down-vn.img.susercontent.com/file/vn-11134207-7qukw-lf96yzqqr4ay63.webp'),
(4, 'áo ba lỗ', 'áo', 50.00, 'Thoả sức khám phá', 'https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lmb9fpnkisprfa.webp'),
(5, 'váy', 'váy', 290.00, 'Mang gì nổi với thời tiết này', 'https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lz5pa75pwiht3c.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `day_of_birth` date DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `phonenumber` varchar(15) DEFAULT NULL,
  `vip` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `day_of_birth`, `gender`, `phonenumber`, `vip`) VALUES
(1, 'Nguyễn Văn A', 'nguyenvana', 'password123', '1995-06-15', 1, '0987654321', 0),
(2, 'Trần Thị B', 'tranthib', '123456', '1990-03-22', 0, '0912345678', 1),
(3, 'Lê Hoàng C', 'lehoangc', 'qwerty123', '2000-11-05', 1, '0909988776', 0),
(4, 'Phạm Mai D', 'phammaid', 'maiden123', '1992-09-30', 0, '0934567890', 1),
(5, 'Nguyễn Đình Nhật Minh', 'minh', '123123', '2003-05-17', 1, '0332991854', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
