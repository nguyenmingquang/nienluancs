-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 07, 2022 lúc 06:08 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_sach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `total` int(12) NOT NULL DEFAULT 0,
  `pttt` tinytext NOT NULL DEFAULT 'Thanh toán khi nhận hàng',
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `name`, `address`, `phone`, `email`, `total`, `pttt`, `created_at`) VALUES
(1, 'Nguyễn Hữu Vui', 'Mạc Thiên Tích, phường Xuân Khánh, quận Ninh Kiều ', '1234567891', 'vui123@gmail.com', 57000, 'Thanh toán qua thẻ', '2022-12-07 11:39:48'),
(2, 'Nguyễn Minh Quang', 'Mạc Thiên Tích, phường Xuân Khánh, quận Ninh Kiều ', '1234567890', 'quang123@gmail.com', 57000, 'Thanh toán qua thẻ', '2022-12-07 11:59:31'),
(3, 'Nguyễn Hữu Vui', ' Nguyễn Tri Phương, phường An Khánh, quận Ninh Kiề', '1234567891', 'huuvui123@gmail.com', 56000, 'Thanh toán qua thẻ', '2022-12-07 12:04:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(12) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `hinhsp` varchar(100) NOT NULL,
  `dongia` int(12) NOT NULL DEFAULT 0,
  `soluong` int(10) NOT NULL DEFAULT 0,
  `thanhtien` int(12) NOT NULL DEFAULT 0,
  `idbill` int(12) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `tensp`, `hinhsp`, `dongia`, `soluong`, `thanhtien`, `idbill`, `created_at`) VALUES
(1, 'Doraemon', 'doraemon.jpg', 57000, 1, 57000, 1, '2022-12-07 11:39:48'),
(2, 'Doraemon', 'doraemon.jpg', 57000, 1, 57000, 2, '2022-12-07 11:59:31'),
(3, 'Rave Master', 'Rave_Master.jpg', 56000, 1, 56000, 3, '2022-12-07 12:04:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `note` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `name`, `phone`, `email`, `note`, `created_at`) VALUES
(1, 'Nguyễn Hữu Vui', '1010101021', 'vui@gmail.com', 'Sản phẩm của tôi bị lỗi ở nhiều trang cuối. Cần cửa hàng hỗ trợ.', '2022-12-07 11:40:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`, `address`, `email`, `phone`, `user_type`, `created_at`) VALUES
(1, 'admin', '$2y$10$aPBB7UiV85OIPWdliHo2pOxhokVS.8fmMKC8TInJ3diEaJ7ID58GW', 'Nguyễn Hữu Vui', '123, Nguyễn Tri Phương, Ninh Kiều, Cần Thơ', 'vui123@gmail.com', 1234567890, 2, '2022-12-07 11:32:53'),
(2, 'pandas', '$2y$10$4nPUTz7cIEQOeZGai9p70ORZA7cAGPiYw0DTmEMzxirrmvu4klF62', 'Gấu Trúc', '789, Nguyễn Tri Phương, Ninh Kiều, Cần Thơ', 'gautruc@gmail.com', 1010101021, 1, '2022-12-07 11:34:35'),
(3, 'vui123', '$2y$10$Als2paJYm6I6U5PGgGEXLOFyonAGK8lsAXuR9coEvCgWH0Jy/F2.C', 'Nguyễn Hữu Vui', '456, Nguyễn Tri Phương, Ninh Kiều, Cần Thơ', 'vui@gmail.com', 1212121212, 1, '2022-12-07 11:35:38'),
(4, 'quang123', '$2y$10$fjsjrN.Fxqf/QYmjQWeru.cG6B2OMvWAKfr8RT4TkXKn/TAwKfSby', 'Nguyễn Minh Quang', '478,Mạc Thiên Tích, Ninh Kiều, Cần Thơ', 'quang123@gmail.com', 1234567890, 1, '2022-12-07 11:58:29'),
(5, 'huuvui123', '$2y$10$khHvi.jpixI9uRNqOBMeb.IzRaU88DiyskRgpqs9phnvGLPxa6l9W', 'Nguyễn Hữu Vui', '123, Nguyễn Tri Phương, Ninh Kiều, Cần Thơ', 'huuvui123@gmail.com', 123456789, 1, '2022-12-07 12:03:16');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
