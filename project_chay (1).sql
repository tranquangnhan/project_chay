-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 28, 2021 lúc 11:25 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project_chay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_ge` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_ge` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort` tinyint(2) DEFAULT 0,
  `parent` int(11) NOT NULL DEFAULT 0,
  `ctrl` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `name_ge`, `slug`, `description`, `description_ge`, `sort`, `parent`, `ctrl`) VALUES
(1, 'HOME', 'HOME', 'home', 'sản phẩm này siêu xịn ', NULL, 0, 0, 'home'),
(2, 'OBAGI', 'OBAGI', 'obagi', 'sản phẩm này siêu xịn ', NULL, 0, 0, 'product'),
(3, 'DIETARY SUPPLEMENT', 'NAHRUNGSERGÄNZUNGSMITTEL', 'dietary-supplement', 'sản phẩm này siêu xịn ', NULL, 0, 0, 'trademark'),
(6, 'Prefume', 'perfume đức', 'prefume', 'sản phẩm này siêu xịn ', 'sản phẩm xịn đức', 0, 2, NULL),
(7, 'Shower gel', '', 'shower-gel', 'sản phẩm này siêu xịn ', NULL, 0, 2, NULL),
(8, 'Scented candles', '', 'scented-candles', 'sản phẩm này siêu cực xịn', NULL, 0, 2, NULL),
(9, 'Lipstick', '', 'Lipstick', 'sản phẩm này siêu cực xịn', NULL, 0, 2, NULL),
(10, 'Miss Việt Nam', '', 'miss-viet-nam', 'sản phẩm này siêu cực xịn', NULL, 0, 3, NULL),
(11, 'Miss Saigon The Essence', '', 'miss-saigon-the-essence', 'sản phẩm này siêu cực xịn', NULL, 0, 3, NULL),
(12, 'Miss Saigon Elegance', '', NULL, 'sản phẩm này siêu cực xịn', NULL, 0, 3, NULL),
(13, 'Orientica', '', NULL, 'sản phẩm này siêu cực xịn', NULL, 0, 3, NULL),
(17, 'Notes Of Mekong', '', 'notes-of-mekong', 'sản phẩm này siêu cực xịn', NULL, 0, 3, NULL),
(18, 'DeAndre', '', 'deandre', 'sản phẩm này siêu cực xịn', NULL, 0, 3, NULL),
(19, 'Aroma Link', '', 'aroma-link', '<p>sản phẩm n&agrave;y si&ecirc;u cực xịn 1</p>\r\n', NULL, 0, 3, NULL),
(20, 'CONTACT', '', 'contact', 'sản phẩm này siêu xịn ', 'sản phẩm xịn đức', 0, 20, NULL),
(22, 'FENG SHUI BRACELETS(comming soon)', 'FENG SHUI BRACELETS (DEMNÄCHST VERFÜGBAR)', 'feng-shui-bracelets(comming-soon)', 'sản phẩm này siêu cực xịn', NULL, 0, 0, NULL),
(24, 'CONTACT', 'KONTAKT', 'contact', 'sản phẩm này siêu cực xịn', NULL, 0, 0, 'contact');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` tinyint(2) DEFAULT NULL,
  `email` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `messeges` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `idsp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `subject`, `email`, `messeges`, `idsp`) VALUES
(1, 'asd', 2, 'asd', 'asd', NULL),
(2, 'asd', 2, 'zxczxczxc', 'asd', NULL),
(3, 'asd', 2, 'asd', 'asd', NULL),
(4, 'nhan', 2, 'tranquangnhan1606@gmail.com', 'dsadsadsasadsda', NULL),
(5, 'nhan', 1, 'tamtran9250@gmail.com', 'dasdasdsa', NULL),
(6, 'nhan', 1, 'tranquangnhan1606@gmail.com', 'sadad', NULL),
(7, 'nhan', 1, 'tranquangnhan1606@gmail.com', 'dsdada', NULL),
(8, 'nhan', 1, 'tranquangnhan1606@gmail.com', 'dadsdasad', NULL),
(9, 'nhan', 1, 'tranquangnhan1606@gmail.com', 'dsdaasdsad', NULL),
(10, 'nhan', 1, 'tranquangnhan1606@gmail.com', 'ddaadsasd', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` double DEFAULT NULL,
  `ngaydat` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `name`, `phone`, `email`, `address`, `note`, `total`, `ngaydat`, `status`) VALUES
(5, 'Đào Nhật Anh', '0394501430', NULL, '289/12 nguyễn thái sơn phường 5 gò vấp', 'asd', 570000, '2020-10-18', 1),
(6, 'nhan', '0924698776', 'tranquangnhan1606@gmail.com', '16 tranquangnhan, hcm', 'dấda', NULL, '2021-04-26', 1),
(7, 'nhan', '0924698776', 'tranquangnhan1606@gmail.com', '16 tranquangnhan, hcm', 'dsadsadasdas', 408, '2021-04-26', 0),
(8, 'Dao Nhat Anh', '0394501430', 'daonhatanh630@gmail.com', '289/12 nguyễn thái sơn phường 5 gò vấp', 'asd', 670.2, '2021-04-27', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `id` int(11) NOT NULL,
  `donhang_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name_product` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_product` int(11) DEFAULT NULL,
  `size` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(5) DEFAULT NULL,
  `price` double DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhangchitiet`
--

INSERT INTO `donhangchitiet` (`id`, `donhang_id`, `product_id`, `name_product`, `img_product`, `size`, `color`, `quantity`, `price`) VALUES
(6, 7, 3, NULL, NULL, 'null', 'null', 6, 63),
(7, 7, 2, NULL, NULL, 'null', '#fff', 1, 30),
(8, 8, 8, NULL, NULL, 'null', 'null', 4, 25.8),
(9, 8, 8, 'Combo DeAndre N5 for her', 0, 'null', 'null', 4, 25.8),
(10, 8, 3, 'Nu derm', 0, 'null', 'null', 9, 63),
(11, 8, 8, 'Combo DeAndre N5 for her', 0, 'null', 'null', 4, 25.8),
(12, 8, 3, 'Nu derm', 0, 'null', 'null', 9, 63),
(13, 8, 8, 'Combo DeAndre N5 for her', 0, 'null', 'null', 4, 25.8),
(14, 8, 3, 'Nu derm', 0, 'null', 'null', 9, 63),
(15, 8, 8, 'Combo DeAndre N5 for her', 0, 'null', 'null', 4, 25.8),
(16, 8, 3, 'Nu derm', 0, 'null', 'null', 9, 63);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `name_ge` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `discount` int(2) DEFAULT 0,
  `image_list` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `buyed` int(11) DEFAULT NULL,
  `hot` tinyint(1) NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ge` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8_unicode_ci NOT NULL,
  `properties_ge` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `catalog_id`, `name`, `name_ge`, `slug`, `price`, `discount`, `image_list`, `view`, `buyed`, `hot`, `color`, `size`, `description`, `description_ge`, `properties`, `properties_ge`) VALUES
(2, 6, 'obagi 360', 'okella', 'obagi-360', 0.00, 0, 'XfX-C-bA.png', 5, NULL, 1, '#000,#fff,#001', 'S,L,XL', '<p>d&acirc;sd&aacute;dsa</p>\r\n', 'duc', '<p>asd</p>\r\n', 'pro duc'),
(3, 6, 'Nu derm', 'Nu derm đức', 'nu-derm', 90.00, 30, '8VZBApYA.jpeg,cK5yk7_A.jpeg,h9T0dZZA.jpeg,OpSvWj5Q.jpeg,TmWMbLoQ.jpeg', 56, NULL, 1, '#000,#fff,#001', '', '                                        \r\n                                                                                ', NULL, '                                                                                ', NULL),
(4, 6, 'Obagi-C', NULL, 'obagi-c', 69.00, 57, '3QNpMLPA.jpeg,IxzhE3Kw.jpeg,jZRnpGXQ.jpeg,S_cQb24g.jpeg', 23, 32, 0, '', '', '                                        \r\n                                                                                \r\n                                                                                                                        ', NULL, '                                                                                                                                                                ', NULL),
(5, 20, 'Professional-C', NULL, 'Professional-C', 69.00, 57, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 3431232, NULL, 0, '', '', '', NULL, '', NULL),
(6, 6, 'Specifics', NULL, 'specifics', 69.00, 57, '5Y2UvxFQ.jpeg,i4PRRifQ.jpeg,jDgc9KHA.jpeg,TB-XlUeQ.png,Tgo5vtOA.jpeg', 563123, NULL, 0, '', '', '', NULL, '                                                                                ', NULL),
(7, 6, 'Suzan Obagi MD', NULL, 'suzan-obagi-md', 90.00, 57, 'EjIDiQlA.png,EwEw9ObQ.png,G3GsRM5g.png,TB-XlUeQ.png', 213313, 43, 0, '', '', '                                        \r\n                                                                                ', NULL, '                                                                                ', NULL),
(9, 6, 'Combo DeAndre N6 for her', NULL, 'Combo-DeAndre-N6-for-her', 699000.00, 57, 'brown-bear-cushion.jpg,brown-bear-vector-graphics.jpg', 234, NULL, 0, '', '', '', NULL, '', NULL),
(10, 6, 'DeAndre,Nước Hoa DeAndre Delicate For Her - N5', NULL, 'DeAndre,Nuoc-Hoa-DeAndre-Delicate-For-Her---N5', 600000.00, 0, 'EjIDiQlA.png,EwEw9ObQ.png,Tgo5vtOA.jpeg', 46, 45, 0, '', '', '', NULL, '', NULL),
(11, 6, 'Nước hoa Come Back Home - Vũ Cát Tường EDP 30ml', NULL, 'Nuoc-hoa-Come-Back-Home---Vu-Cat-Tuong-EDP-30ml', 500000.00, 15, 'G3GsRM5g.png,i4PRRifQ.jpeg,jDgc9KHA.jpeg', 2121212, NULL, 0, '', '', '', NULL, '', NULL),
(12, 6, 'Nước hoa Garden Of The Muse - Garden in the Rain', NULL, 'Nuoc-hoa-Garden-Of-The-Muse---Garden-in-the-Rain', 1500000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', NULL, 2, 0, '', '', '', NULL, '', NULL),
(13, 6, 'Nước hoa Garden Of The Muse - Jasmine', NULL, 'Nuoc-hoa-Garden-Of-The-Muse---Jasmine', 1500000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 23, NULL, 0, '', '', '', NULL, '', NULL),
(14, 6, 'Nước hoa Garden Of The Muse - Lily Of The Valley', NULL, 'Nuoc-hoa-Garden-Of-The-Muse---Lily-Of-The-Valley', 1500000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 1, NULL, 0, '', '', '', NULL, '', NULL),
(15, 6, 'Nước hoa Garden Of The Muse - Rose', NULL, 'Nuoc-hoa-Garden-Of-The-Muse---Rose', 1500000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 5, NULL, 0, '', '', '', NULL, '', NULL),
(16, 6, 'Nước hoa Garden Of The Muse - Tuberose', NULL, 'Nuoc-hoa-Garden-Of-The-Muse---Tuberose', 1500000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 3, NULL, 0, '', '', '', NULL, '', NULL),
(17, 7, 'Nước Hoa nữ Miss Saigon Elegance N1 EDP 50ml', NULL, 'Nuoc-Hoa-nu-Miss-Saigon-Elegance-N1-EDP-50ml', 65.00, 30, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 2, 23, 1, '#000,#fff,#001', 'S,M,XL', '<p>asd</p>\r\n', NULL, '<p>asd</p>\r\n', NULL),
(18, 7, 'Nước Hoa nữ Miss Saigon Elegance N10 EDP 15ml', NULL, 'Nuoc-Hoa-nu-Miss-Saigon-Elegance-N10-EDP-15ml', 250000.00, 30, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 12, NULL, 0, '', '', '', NULL, '', NULL),
(19, 7, 'Nước Hoa nữ Miss Saigon Elegance N11 EDP 15ml', NULL, 'Nuoc-Hoa-nu-Miss-Saigon-Elegance-N11-EDP-15ml', 250000.00, 30, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 56, 2, 0, '', '', '', NULL, '', NULL),
(20, 7, 'Nước Hoa nữ Miss Saigon Elegance N12 EDP 15ml', NULL, 'Nuoc-Hoa-nu-Miss-Saigon-Elegance-N12-EDP-15ml', 250000.00, 30, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 87, NULL, 0, '', '', '', NULL, '', NULL),
(21, 7, 'Nước Hoa nữ Miss Saigon Elegance N2 EDP 50ml', NULL, 'Nuoc-Hoa-nu-Miss-Saigon-Elegance-N2-EDP-50ml', 650000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 56, NULL, 0, '', '', '', NULL, '', NULL),
(22, 7, 'Nước Hoa nữ Miss Saigon Elegance N3 EDP 50ml', NULL, 'Nuoc-Hoa-nu-Miss-Saigon-Elegance-N3-EDP-50ml', 650000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 34, NULL, 0, '', '', '', NULL, '', NULL),
(23, 7, 'Nước hoa nữ Miss Saigon Elegance N5 EDP 50ml', NULL, 'Nuoc-hoa-nu-Miss-Saigon-Elegance-N5-EDP-50ml', 650000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 456, NULL, 0, '', '', '', NULL, '', NULL),
(24, 7, 'Nước Hoa nữ Miss Saigon Elegance N6 EDP 50ml', NULL, 'Nuoc-Hoa-nu-Miss-Saigon-Elegance-N6-EDP-50ml', 650000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 564, NULL, 0, '', '', '', NULL, '', NULL),
(25, 7, 'Nước Hoa nữ Miss Saigon Elegance N8 EDP 15ml', NULL, 'Nuoc-Hoa-nu-Miss-Saigon-Elegance-N8-EDP-15ml', 250000.00, 30, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 78, 1, 0, '', '', '', NULL, '', NULL),
(26, 7, 'Nước Hoa nữ Miss Saigon Elegance N9 EDP 15ml', NULL, 'Nuoc-Hoa-nu-Miss-Saigon-Elegance-N9-EDP-15ml', 250000.00, 30, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 234, NULL, 0, '', '', '', NULL, '', NULL),
(27, 7, 'Nước hoa nữ Miss Saigon The Essence – Aurora Fragrance EDP 50ml', NULL, 'Nuoc-hoa-nu-Miss-Saigon-The-Essence-–-Aurora-Fragrance-EDP-50ml', 1200000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 45, 1, 0, '', '', '', NULL, '', NULL),
(28, 6, 'Nước hoa nữ Miss Saigon The Essence - Oriental Pearl Fragrance EDP 50ml', NULL, 'Nuoc-hoa-nu-Miss-Saigon-The-Essence---Oriental-Pearl-Fragrance-EDP-50ml', 1200000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 5, NULL, 0, '', '', '', NULL, '', NULL),
(29, 6, 'Nước hoa nữ Miss Saigon The Essence - The Lover EDP 50ml', NULL, 'Nuoc-hoa-nu-Miss-Saigon-The-Essence---The-Lover-EDP-50ml', 1200000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 3, NULL, 0, '', '', '', NULL, '', NULL),
(30, 6, 'Nước hoa nữ Miss Saigon The Essence Aurora EDP 10ml (green)', NULL, 'Nuoc-hoa-nu-Miss-Saigon-The-Essence-Aurora-EDP-10ml-(green)', 280000.00, 30, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 234, NULL, 0, '', '', '', NULL, '', NULL),
(31, 7, 'Nước hoa nữ Miss Saigon The Essence x Công Trí EDP 50ml (phiên bản giới hạn)', NULL, 'Nuoc-hoa-nu-Miss-Saigon-The-Essence-x-Cong-Tri-EDP-50ml-(phien-ban-gioi-han)', 1200000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 234, 43, 0, '', '', '', NULL, '', NULL),
(32, 20, 'Nước hoa nữ Miss Saigon The Essence- Oriental Pearl EDP 10ml (amber)', NULL, 'Nuoc-hoa-nu-Miss-Saigon-The-Essence--Oriental-Pearl-EDP-10ml-(amber)', 280000.00, 30, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 345, NULL, 0, '', '', '', NULL, '', NULL),
(33, 20, 'Nước hoa nữ Miss Saigon The Essence- The Lover EDP 10ml (pink)', NULL, 'Nuoc-hoa-nu-Miss-Saigon-The-Essence--The-Lover-EDP-10ml-(pink)', 280000.00, 30, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(34, 20, 'Nước hoa nữ Miss Vietnam - Hanoi N29 EDP 35ml (mới)', NULL, 'Nuoc-hoa-nu-Miss-Vietnam---Hanoi-N29-EDP-35ml-(moi)', 1200000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', 34, 23, 0, '', '', '', NULL, '', NULL),
(35, 20, 'Nước hoa nữ Miss Vietnam - Hanoi N33 EDP 35ml (mới)', NULL, 'Nuoc-hoa-nu-Miss-Vietnam---Hanoi-N33-EDP-35ml-(moi)', 1200000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(36, 20, 'Nước hoa nữ Miss Vietnam - Hue N28 EDP 35ml (mới)', NULL, 'Nuoc-hoa-nu-Miss-Vietnam---Hue-N28-EDP-35ml-(moi)', 1200000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(37, 20, 'Nước hoa nữ Miss Vietnam - Hue N32 EDP 35ml (mới)', NULL, 'Nuoc-hoa-nu-Miss-Vietnam---Hue-N32-EDP-35ml-(moi)', 1200000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(38, 20, 'Nước hoa nữ Miss Vietnam - Saigon N27 EDP 35ml (mới)', NULL, 'Nuoc-hoa-nu-Miss-Vietnam---Saigon-N27-EDP-35ml-(moi)', 1200000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(39, 20, 'Nước hoa nữ Miss Vietnam - Saigon N31 EDP 35ml (mới)', NULL, 'Nuoc-hoa-nu-Miss-Vietnam---Saigon-N31-EDP-35ml-(moi)', 1200000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(40, 20, 'Nước hoa nữ Notes Of Mekong - The Delta EDP 30ml', NULL, 'Nuoc-hoa-nu-Notes-Of-Mekong---The-Delta-EDP-30ml', 600000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(41, 20, 'Nước hoa nữ Notes Of Mekong - The Source EDP 30ml', NULL, 'Nuoc-hoa-nu-Notes-Of-Mekong---The-Source-EDP-30ml', 600000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(42, 20, 'Nước hoa Orientica- Harmony', NULL, 'Nuoc-hoa-Orientica--Harmony', 2000000.00, 15, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(43, 20, 'Combo 2 Sữa tắm De Andre', NULL, 'Combo-2-Sua-tam-De-Andre', 198000.00, 50, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(44, 7, 'DeAndre,Sữa tắm DeAndre Gorgeous For Her N2', NULL, '', 99000.00, NULL, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(45, 20, 'DeAndre,Sữa tắm DeAndre Invincible For Him N3', NULL, 'DeAndre,Sua-tam-DeAndre-Invincible-For-Him-N3', 99000.00, 0, NULL, NULL, NULL, 0, '', '', '', NULL, '', NULL),
(46, 20, 'Sữa tắm Miss Saigon The Essence - Aurora 250ml', NULL, 'Sua-tam-Miss-Saigon-The-Essence---Aurora-250ml', 280000.00, 0, NULL, NULL, NULL, 0, '', '', '', NULL, '', NULL),
(47, 20, 'Sữa tắm Miss Saigon The Essence - Oriental Pearl 250ml', NULL, 'Sua-tam-Miss-Saigon-The-Essence---Oriental-Pearl-250ml', 280000.00, 0, NULL, NULL, NULL, 0, '', '', '', NULL, '', NULL),
(48, 20, 'Sữa tắm Miss Saigon The Essence - The Lover 250ml', NULL, 'Sua-tam-Miss-Saigon-The-Essence---The-Lover-250ml', 280000.00, 0, NULL, NULL, NULL, 0, '', '', '', NULL, '', NULL),
(49, 20, 'Nến thơm Miss Saigon The Essence - Aurora', NULL, 'Nen-thom-Miss-Saigon-The-Essence---Aurora', 150000.00, 0, NULL, NULL, NULL, 0, '', '', '', NULL, '', NULL),
(50, 20, 'Nến thơm Miss Saigon The Essence - Oriental Pearl', NULL, 'Nen-thom-Miss-Saigon-The-Essence---Oriental-Pearl', 150000.00, 0, NULL, NULL, NULL, 0, '', '', '', NULL, '', NULL),
(51, 20, 'Nến thơm Miss Saigon The Essence - The Lover', NULL, 'Nen-thom-Miss-Saigon-The-Essence---The-Lover', 150000.00, 0, NULL, NULL, NULL, 0, '', '', '', NULL, '', NULL),
(52, 20, 'Son Miss Saigon BREATH TAKING', NULL, 'Son-Miss-Saigon-BREATH-TAKING', 550000.00, 15, 'breath_6fbbe3e7248146c4a919a66e690173ec_master.jpg,breathtaking1_f5de44148396403aa89d3bd8dff8b667_master.png', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(53, 20, 'Son Miss Saigon FASHIONISTA', NULL, 'Son-Miss-Saigon-FASHIONISTA', 550000.00, 15, 'fashion_553fdddd8f5544a38e629732dc0ef7da_master.webp,fashionista2_cbfaee8ff03b488dab90fea6dd3ed8b3_master.webp', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(54, 20, 'Son Miss Saigon GIRLS NIGHT OUT', NULL, 'Son-Miss-Saigon-GIRLS-NIGHT-OUT', 550000.00, 15, 'girls_049bba52211f4bf48d76951d3ec9ebdf_master.webp,girlsnightout2_9a8c19b73ad14d7084c8e00f0b215063_master.webp', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(55, 20, 'Son Miss Saigon LADY IN RED', NULL, 'Son-Miss-Saigon-LADY-IN-RED', 550000.00, 15, 'lady_1d4bd5d131604815b5082e6881ba80f7_master.webp,ladyinred2_f77647169c424af6b56adb6f31164c35_master.webp', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(56, 20, 'Son Miss Saigon PERFECT KISS', NULL, 'Son-Miss-Saigon-PERFECT-KISS', 550000.00, 15, 'kiss_eb4379d0cec24f52b76ae81d35b95391_master.webp,perfectkiss2_533524908a3341b392b1b2f5763c314f_master.webp', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(57, 20, 'Aroma Link, Nước Hoa Aromalink Rose N6,50ml', NULL, 'Aroma-Link,-Nuoc-Hoa-Aromalink-Rose-N6,50ml', 390000.00, 62, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(58, 20, 'Aroma Link,Nước Hoa Aroma Link Heaven N31,50ml', NULL, 'Aroma-Link,Nuoc-Hoa-Aroma-Link-Heaven-N31,50ml', 390000.00, 62, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(59, 20, 'Aroma Link,Nước Hoa Aroma Link Lotus N5,50ml', NULL, 'Aroma-Link,Nuoc-Hoa-Aroma-Link-Lotus-N5,50ml', 390000.00, 62, 'imKYi0Ew.jpeg,PaNUSzdA.jpeg,q6Vxs9lg.jpeg,S_cQb24g.jpeg', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(60, 20, 'Aroma Link,Nước Hoa Aroma Link Rice Scent For Her N4,50ml', NULL, 'Aroma-Link,Nuoc-Hoa-Aroma-Link-Rice-Scent-For-Her-N4,50ml', 390000.00, 62, 'rice_-_cung_5456f3a77da9438f9eb20e985b6fe37a_master.webp,rice_-_note_huong_f3db22e82010418e96efd45050073156_master.webp', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(61, 19, 'asd', NULL, 'asd', 123.00, 123, '78039436_128014308641971_8882173521258610688_n.png,81741817_145841556859246_3715721974664658944_n.jpg,110131888_183922583162380_2301235879477721428_n.jpg78039436_128014308641971_8882173521258610688_n.png,81741817_145841556859246_3715721974664658944_n.jpg,', NULL, NULL, 1, '#000,#fff,#001', 'S,M,XL', '', NULL, '<p>asd</p>\r\n', NULL),
(62, 20, 'asd', NULL, 'asd', 123.55, 150, '78039436_128014308641971_8882173521258610688_n.png,81741817_145841556859246_3715721974664658944_n.jpg,110131888_183922583162380_2301235879477721428_n.jpg', NULL, NULL, 1, '#000,#fff,#001', 'S,M,XL', '', NULL, '<p>asd</p>\r\n', NULL),
(63, 6, 'asd', NULL, 'asd', 123.00, 12, '78039436_128014308641971_8882173521258610688_n.png,81741817_145841556859246_3715721974664658944_n.jpg,110131888_183922583162380_2301235879477721428_n.jpg', NULL, NULL, 1, 'asd', 'S,M,L,XL', '', NULL, '<p>ads</p>\r\n', NULL),
(64, 13, 'vbn', NULL, 'vbn', 123.00, 12, 'tu-ao-dep-1.jpg,thiet-ke-noi-that-phong-ngu-12m2-57-.jpg,thiet-ke-nha-cap-4-co-gac-lung-60m2-3.jpg', NULL, NULL, 0, '#000,#fff,#001', 'S,M,L,XL', '', NULL, '', NULL),
(65, 9, 'Nu derm', NULL, 'nu-derm', 500000.00, 5, 'LFN6kslw.png', NULL, NULL, 1, '', '', '<p>addaads</p>\r\n', NULL, '<p>ấdsasdasđ</p>\r\n', NULL),
(69, 19, 'a\'\" asd \"', NULL, 'a-asd', 0.00, 0, '', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(70, 20, 'testcheck 12', NULL, 'testcheck-12', 0.00, 0, 'plan_ew016_sp_6bb7e73b10254f6eb617e79f001fa8cb.jpg,phong-khach-nha-cap-4-6.jpg', NULL, NULL, 1, '#asa,#zcx', 'S,XL', '<p>fgh</p>\r\n', NULL, '<p>fghfgh</p>\r\n', NULL),
(71, 19, 'asd', NULL, 'asd', 0.00, 0, '78039436_128014308641971_8882173521258610688_n.png', NULL, NULL, 0, '', '', '', NULL, '', NULL),
(73, 20, 'anh', 'đức', 'anh', 0.00, 0, '', NULL, NULL, 1, '', 'M,L', '<p>asd</p>\r\n', NULL, '<p>asd</p>\r\n', NULL),
(74, 20, 'test', 'test đức', 'test', 0.00, 0, '', NULL, NULL, 0, '', '', '<p>asd&nbsp;</p>\r\n', '<p>asd okelaa</p>\r\n', '', NULL),
(75, 20, 'zcxzxczxc', 'zxczxc đức', 'zcxzxczxc', 0.00, 0, '', NULL, NULL, 0, '', '', '', '', '<p>asd duc</p>\r\n', '<p>asdasda ud7c91 asdasdas</p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`idUser`, `name`, `email`, `pass`, `role`) VALUES
(1, 'nhat anh 1', 'daonhatanh630@gmail.com', 'asdasd', 1),
(3, 'Dao Nhat Anh', 'anhdnps12765@fpt.edu.vn', 'asdasd', 0),
(4, 'nhan', 'tranquangnhan1606@gmail.com', '111111', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dh_dhct` (`donhang_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cata_pro` (`catalog_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD CONSTRAINT `fk_dh_dhct` FOREIGN KEY (`donhang_id`) REFERENCES `donhang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_cata_pro` FOREIGN KEY (`catalog_id`) REFERENCES `catalog` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
