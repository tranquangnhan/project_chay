-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 10, 2021 lúc 11:13 AM
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
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `bannerImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bannerStatus` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_list` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `style` tinyint(2) DEFAULT 0,
  `hangcosan` tinyint(2) DEFAULT 0,
  `parent` int(11) NOT NULL DEFAULT 0,
  `ctrl` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `slug`, `image_list`, `description`, `style`, `hangcosan`, `parent`, `ctrl`) VALUES
(1, 'TRANG CHỦ', 'trang-chu', NULL, 'sản phẩm này siêu xịn ', 0, 0, 0, 'home'),
(2, 'SẢN PHẨM', 'san-pham', NULL, 'sản phẩm này siêu xịn ', 0, 0, 0, 'product'),
(3, 'CHÍNH SÁCH', 'chinh-sach', NULL, 'sản phẩm này siêu xịn ', 0, 0, 0, 'dietary-supplement'),
(4, 'LIÊN HỆ', 'lien-he', NULL, 'sản phẩm này siêu cực xịn', 0, 0, 0, 'contact'),
(6, 'Giày', 'giay', NULL, 'sản phẩm này siêu xịn ', 0, 0, 2, NULL),
(7, 'Quần áo', 'quan-ao', NULL, 'sản phẩm này siêu xịn ', 0, 0, 2, NULL),
(8, 'Phụ kiện', 'phu-kien', NULL, 'sản phẩm này siêu cực xịn', 0, 0, 2, NULL),
(124, 'Hàng có sẵn', 'hang-co-san', '', '', 0, 0, 6, NULL),
(125, 'Hàng order', 'hang-order', '', '', 0, 1, 6, NULL),
(126, 'Hàng order', 'hang-order', '', '', 0, 1, 7, NULL),
(127, 'Hàng order', 'hang-order', '', '', 0, 1, 8, NULL),
(128, 'Hàng có sẵn', 'hang-co-san', '', '', 0, 0, 7, NULL),
(129, 'Hàng có sẵn', 'hang-co-san', '', '', 1, 0, 0, NULL),
(130, 'Hàng order', 'hang-order', '', '', 1, 1, 0, NULL),
(131, 'Adidas', 'adidas', '', '', 1, 0, 129, NULL),
(132, 'Nike', 'nike', '', '', 1, 0, 129, NULL),
(133, 'Nike', 'nike', '', '', 1, 1, 130, NULL),
(134, 'Luxury', 'luxury', '', '', 1, 0, 129, NULL),
(135, 'Adidas', 'adidas', '', '', 1, 1, 130, NULL),
(136, 'Gucci', 'gucci', '', '', 1, 1, 130, NULL),
(137, 'Dior', 'dior', '', '', 1, 1, 130, NULL),
(138, 'Louis Vuitton', 'louis-vuitton', '', '', 1, 1, 130, NULL),
(139, 'Chanel', 'chanel', '', '', 1, 1, 130, NULL),
(140, 'Prada', 'prada', '', '', 1, 1, 130, NULL),
(153, 'Vans', 'vans', '', '', 1, 1, 129, NULL);

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
  `firstname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `housenumber` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` double DEFAULT NULL,
  `ngaydat` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `payments` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `firstname`, `lastname`, `phone`, `email`, `address`, `street`, `housenumber`, `city`, `country`, `note`, `total`, `ngaydat`, `status`, `payments`, `postcode`) VALUES
(26, 'Dao Anh lov 12', '', '0394501430', 'daonhatanh630@gmail.com', '289/12 nguyễn thái sơn phường 5 gò vấp', '289/12 nguyễn thái sơn phường 5 gò vấp', NULL, NULL, NULL, 'giao đi a', 936969, '2021-05-08', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `id` int(11) NOT NULL,
  `donhang_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name_product` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_product` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(5) DEFAULT NULL,
  `price` double DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhangchitiet`
--

INSERT INTO `donhangchitiet` (`id`, `donhang_id`, `product_id`, `name_product`, `img_product`, `size`, `color`, `quantity`, `price`) VALUES
(106, 26, 83, 'quần short Adidas SPORT ID', '../uploads/5d0894de0b9b6-quan-short-adidas-liteflex-DQ1528-06.jpg', 'null', 'null', 3, 312323);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `discount` int(2) DEFAULT 0,
  `image_list` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `buyed` int(11) DEFAULT NULL,
  `hot` tinyint(1) NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cosan` tinyint(2) NOT NULL DEFAULT 0,
  `Brand` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `properties` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `catalog_id`, `name`, `slug`, `price`, `discount`, `image_list`, `view`, `buyed`, `hot`, `color`, `size`, `cosan`, `Brand`, `description`, `properties`) VALUES
(1, 8, 'Găng tay adidas', 'gang-tay-adidas', 1212320, 0, 'adidas_chính.jpg,GĂNG_TAY_13153-4-5-6_(1)_-_Copy.jpg', NULL, NULL, 0, '', '', 0, 'adidas', '', ''),
(79, 6, 'Nike Flyknit Racer rainbow', 'nike-flyknit-racer-rainbow', 1512320, 1, 'nike-flyknit-racer-rainbow-1-600x450.jpg,nike-flyknit-racer-rainbow-2-590x443.jpg', NULL, NULL, 1, '', '', 1, 'nike', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:503px; position:absolute; top:194.6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', ''),
(80, 6, 'Air Force 1 Low Travis Scott Cactus Jack', 'air-force-1-low-travis-scott-cactus-jack', 0, 10, 'air-force-1-low-travis-scott-cactus-jack-1-600x450.jpg,air-force-1-low-travis-scott-cactus-jack-2-590x443.jpg', NULL, NULL, 0, '', '', 1, 'nike', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:686px; position:absolute; top:140px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:776px; position:absolute; top:72.4px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n'),
(81, 6, 'Nike Air Max 95 Triple Black', 'nike-air-max-95-triple-black', 12312300, 20, 'nike-air-max-95-triple-black-1-600x450.jpg,nike-air-max-95-triple-black-2-590x443.jpg', NULL, NULL, 1, '', '', 0, 'nike', '', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:578px; position:absolute; top:72.4px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n'),
(82, 8, 'Cài áo Chanel', 'cai-ao-chanel', 1023120, 2, 'phukien-chanel.png', NULL, NULL, 0, '', '', 1, 'chanel', '', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:709px; position:absolute; top:29px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n'),
(83, 7, 'quần short Adidas SPORT ID', 'quan-short-adidas-sport-id', 312323, 0, '5d0894de0b9b6-quan-short-adidas-liteflex-DQ1528-06.jpg,fl4389-01-6fd62ae1997f47079276ddee63f5c40f-master.jpg', NULL, NULL, 0, '', '', 0, 'adidas', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:623px; position:absolute; top:140px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:597px; position:absolute; top:72.4px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n'),
(84, 7, 'Jean nam gucci', 'jean-nam-gucci', 545323, 0, '52884260_2229255920671340_6206757264942956544_n.jpg,jean-gucci-nam.jpg', NULL, NULL, 0, '', '', 1, 'gucci', '<p>Non-comedogenic formula provides eight-hour</p>\r\n\r\n<p>moisture protection. Designed for all skin types.</p>\r\n\r\n<p><strong>AMOUNT: 1/2 GRAM USE DAILY:&nbsp;AM PM</strong></p>\r\n\r\n<p>Use daily or as needed. Apply evenly to skin and&nbsp;feather onto neck. Allow to absorb and follow with next recommended product.</p>\r\n', '<p><strong>KEY INGREDIENTS</strong></p>\r\n\r\n<p>Hydromanil (derived from Tara Tree Seed), Shea Butter, Mango Butter, Avocado Oil, Glycerin</p>\r\n'),
(85, 7, 'Quần thun dài adias', 'quan-thun-dai-adias', 564523, 0, 'ao_khoac__4__44ffae0a75254ccfb13512b740bf2429_master.jpg,quan-adidas-3-soc-03-6212.jpg', NULL, NULL, 0, '', '', 0, 'adidas', '', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:659px; position:absolute; top:72.4px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n'),
(86, 8, 'Túi adidas mini', 'tui-adidas-mini', 456456, 0, 'adidas-mini.png', NULL, NULL, 0, '', '', 0, 'adidas', '', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:471px; position:absolute; top:25.8px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n'),
(95, 7, 'Áo thun Nike', 'ao-thun-nike', 100000, 0, 'aothunike.jpg', NULL, NULL, 0, '', '', 1, 'nike', '', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:726px; position:absolute; top:72.4px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n'),
(99, 6, 'Gucci Ace embroidered low-top men\'s sneaker bee', 'gucci-ace-embroidered-lowtop-mens-sneaker-bee', 3312210, 10, 'gucci-ace-embroidered-low-top-sneaker-bee-1-600x450.jpg,gucci-ace-embroidered-low-top-sneaker-bee-3-590x443.jpg', NULL, NULL, 1, '', '', 1, 'gucci', '<p>Non-comedogenic formula provides eight-hour&nbsp;moisture protection. Designed for all skin types.</p>\r\n\r\n<p><strong>AMOUNT: 1/2 GRAM USE DAILY:&nbsp;AM PM</strong></p>\r\n\r\n<p>Use daily or as needed. Apply evenly to skin and&nbsp;feather onto neck. Allow to absorb and follow with next recommended product.</p>\r\n', '<p><strong>KEY INGREDIENTS</strong></p>\r\n\r\n<p>Hydromanil (derived from Tara Tree Seed), Shea Butter, Mango Butter, Avocado Oil, Glycerin</p>\r\n'),
(100, 6, 'Giày running adidas ALPHABOUNCE', 'giay-running-adidas-alphabounce', 300000, 0, 'giay-running-adidas-nam-g54125-1_3b59393ef5a2419c8e2d328b054a839a_master.jpg,giay-running-adidas-nam-g54125-3_a9377ff2df1444be9138c45bd755fb4c_master.jpg', NULL, NULL, 0, '', '', 0, 'adidas', '<p>Specifically engineered with key biomimetic peptides, this non-comedogenic moisturizer provides overnight, ultrarich moisturization and has a luxurious, balm-like texture.</p>\r\n\r\n<p><strong>MORNING USE:&nbsp;AM</strong></p>\r\n\r\n<p>Apply a pea-sized amount to face, neck, and chest as&nbsp;needed after other products and prior to sunscreen.</p>\r\n\r\n<p><strong>EVENING USE:&nbsp;PM</strong>&nbsp;</p>\r\n\r\n<p>Apply a pea-sized amount to face, neck, and chest as&nbsp;needed as last step in your night regimen.</p>\r\n', '<p><strong>KEY INGREDIENTS</strong></p>\r\n\r\n<p>Hydromanil (derived from Tara Tree Seed), Chronoline, Kollaren, Shea Butter, Mango Butter, Avocado Oil, Glycerin</p>\r\n'),
(101, 6, 'Nike Air Max 1 Parra 2018', 'nike-air-max-1-parra-2018', 33333300, 0, 'img32.jpg,maxresdefault.jpg', NULL, NULL, 0, '', '', 1, 'nike', '', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:610px; position:absolute; top:72.4px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n'),
(102, 6, 'Nike Kyrie 4 “Wheaties”', 'nike-kyrie-4-“wheaties”', 44445400, 0, 'Jayson-Tatum-Wheaties-Nike-Kyrie-4.jpg', NULL, NULL, 0, '', '', 1, 'nike', '', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:237px; position:absolute; top:72.4px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n'),
(103, 6, 'Air Jordan 4', 'air-jordan-4', 45555600, 0, 'Air-Jordan-4-Retro-Oregon-Ducks.png', NULL, NULL, 1, '', '', 1, 'nike', '', '<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:748px; position:absolute; top:72.4px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n'),
(104, 6, 'Nike Uptempo', 'nike-uptempo', 123123, 0, 'Nike Uptempo.png', NULL, NULL, 0, '', '', 1, 'nike', '', ''),
(105, 6, 'Nike Jordan 1', 'nike-jordan-1', 12343500, 0, 'Nike Jordan 1.png', NULL, NULL, 0, '', '', 1, 'nike', '', ''),
(106, 6, 'Nike Air Force 1', 'nike-air-force-1', 9000000, 10, 'Nike Air Force 1.png', NULL, NULL, 0, '', '', 1, 'nike', '', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(107, 6, 'Adidas Ultraboost 19', 'adidas-ultraboost-19', 1000000, 0, 'Adidas Ultraboost 19.jpg,Adidas Ultraboost 19-2.png', NULL, NULL, 0, '', 'S,XL', 0, 'adidas', '<p><span style=\"font-size:14px\"><strong>Product information:</strong> </span></p>\r\n\r\n<p><span style=\"font-size:14px\">Glutathione Fort is a dietary supplement with glutathione and vitamin C developed by Fenioux Laboratories.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Glutathione is a substance made up of amino acids that is present in the cells of our body and is involved in the transport of hydrogen. Hydrogen is an essential substance in the transfer of nutrients and in acid-base reactions. Vitamin C helps protect cells from oxidative stress.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Box of 30 tablets - 300 mg / 950 mg</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Box for 1 month</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Net weight: 28.5 g</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Use: 1 tablet per day to be sucked outside of meals.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Food supplements with sugar and sweeteners.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Keep out of reach of small children.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Do not exceed the recommended daily dose.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">A dietary supplement should not replace a varied and balanced diet and a healthy lifestyle.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Keep the product away from light, heat and moisture.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">For pregnant or breastfeeding women, consult a health professional.</span></p>\r\n', '<p><span style=\"font-size:14px\"><strong>Ingredients:</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">1 tablet a day will bring you:</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:14px\">L-glutathione: 300 mg</span></li>\r\n	<li><span style=\"font-size:14px\">Acerola extract: 200 mg&nbsp;or vitamin C: 50 mg (62.5% NRV *)</span></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\">* NRV: Nutritional reference values</span></p>\r\n'),
(113, 6, 'Giày Adidas Classic 3 sọc', 'giay-adidas-classic-3-soc', 12312400, 12, 'adidas-3-soc.png,adidas-3-soc-1-2.png', NULL, NULL, 1, '#000', 'S,M,L,XL', 1, 'adidas', '<p>test 1</p>\r\n', '<p>test 1</p>\r\n'),
(114, 8, 'Túi gucci', 'tui-gucci', 1000000, 12, 'tui-gucci.jpg,tui-gucci-1-2.jpg', NULL, NULL, 0, '#000', '', 1, 'gucci', '<p>asd</p>\r\n', '<p>asd</p>\r\n'),
(115, 7, 'áo thun adidas', 'ao-thun-adidas', 70000, 2, 'ao-adidas-1.jpg,ao-adidas-1-2.jpg', NULL, NULL, 1, '', '', 1, 'adidas', '', ''),
(116, 6, 'Gucci 1', 'gucci-1', 200000, 0, 'gucci-1.jpg,gucci-1-2.jpg', NULL, NULL, 1, '', '', 1, 'gucci', '<p style=\"text-align:center\">Đ&acirc;y l&agrave; sản phẩm 1</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://webofnhan.tk/uploads/logo.png\" style=\"height:300px; width:300px\" /></p>\r\n\r\n<p style=\"text-align:center\">asdaksjdbasjkdhahdbsdhbashbdjkashbdhasbdjkbsdjh</p>\r\n', '');

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
(4, 'nhan', 'tranquangnhan1606@gmail.com', '111111', 1),
(10, 'Dao Nhat Anh', 'anhdnps12765@fpt.edu.vn', 'asdasd', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
