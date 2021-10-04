-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 02, 2021 lúc 03:20 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `ma_kh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `noi_dung` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `don_gia` float NOT NULL,
  `giam_gia` float NOT NULL,
  `hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `dac_biet` int(11) NOT NULL,
  `so_luot_xem` int(11) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ma_loai`, `dac_biet`, `so_luot_xem`, `ngay_nhap`, `mo_ta`) VALUES
(5, 'Samsung Galaxy Z Fold3 5G', 41990000, 40990000, 'samsung-galaxy-z-fold-3-green-1-600x600.jpg', 11, 2, 0, '2021-10-08', '<h3><a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-z-fold-3\" target=\"_blank\">Galaxy Z Fold3 5G</a>, chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">điện thoại</a>&nbsp;được n&acirc;ng cấp to&agrave;n diện về nhiều mặt, đặc biệt đ&acirc;y l&agrave; điện thoại m&agrave;n h&igrave;nh gập đầu ti&ecirc;n tr&ecirc;n thế giới c&oacute; camera ẩn (08/2021). Sản phẩm sẽ l&agrave; một &ldquo;c&uacute; hit&rdquo; của&nbsp;<a href=\"https://thegioididong.com/samsung\" target=\"_blank\">Samsung</a>&nbsp;g&oacute;p phần mang đến những trải nghiệm mới cho người d&ugrave;ng.</h3>\r\n\r\n<h3>Thiết kế n&acirc;ng tầm smartphone m&agrave;n h&igrave;nh gập</h3>\r\n\r\n<p>C&oacute; thể thấy mẫu smartphone Galaxy Z Fold3 lần n&agrave;y vẫn giữ nguy&ecirc;n ngoại h&igrave;nh c&ugrave;ng cơ chế m&agrave;n h&igrave;nh gập mở dạng quyển s&aacute;ch như của tiền nhiệm, hồ biến chiếc smartphone th&agrave;nh một chiếc m&aacute;y t&iacute;nh bảng mini một c&aacute;ch dễ d&agrave;ng v&agrave; ngược lại.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/226935/samsung-galaxy-z-fold-3-25.jpg\" onclick=\"return false;\"><img alt=\"Samsung Galaxy Z Fold3 5G | Thiết kế nâng tầm smartphone màn hình gập\" src=\"https://cdn.tgdd.vn/Products/Images/42/226935/samsung-galaxy-z-fold-3-25.jpg\" /></a></p>\r\n\r\n<p>Khung viền sử dụng hợp kim nh&ocirc;m Armor Aluminum cứng c&aacute;p, bền bỉ hơn 10% so với c&aacute;c vật liệu trước đ&acirc;y Samsung từng sản xuất. Với cấu tạo chắc chắn sẽ gi&uacute;p bạn y&ecirc;n t&acirc;m tận hưởng c&aacute;c hoạt động y&ecirc;u th&iacute;ch một c&aacute;ch trọn vẹn nhất.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/226935/samsung-galaxy-z-fold3-5g-256gb-9.jpg\" onclick=\"return false;\"><img alt=\"Samsung Galaxy Z Fold3 5G | Khung viền cao cấp, độ bền cao\" src=\"https://cdn.tgdd.vn/Products/Images/42/226935/samsung-galaxy-z-fold3-5g-256gb-9.jpg\" /></a></p>\r\n\r\n<p>Bộ khớp nối bản lề được thiết kế mới gi&uacute;p kết nối bộ khung của Galaxy Z Fold'),
(6, 'Acer Aspire 7 Gaming A715', 21490000, 20490000, 'acer-aspire-7-a715-41g-r150-r7-nhq8ssv004-600x600.jpg', 12, 1, 0, '2021-10-01', '<h3><a href=\"https://www.thegioididong.com/laptop/acer-aspire-7-a715-41g-r150-r7-nhq8ssv004\" target=\"_blank\">Acer Aspire 7 A715 41G R150 R7 (NH.Q8SSV.004)</a>&nbsp;được thi&ecirc;́t k&ecirc;́ gọn gàng với c&acirc;́u hình mạnh mẽ nhờ CPU AMD Ryzen 7 v&agrave; card đồ hoạ NVIDIA GeForce GTX 1650Ti gi&uacute;p t&ocirc;́i ưu trải nghi&ecirc;̣m chơi game, đ&aacute;p ứng đa dạng nhu c&acirc;̀u sử dụng.</h3>\r\n\r\n<h3>Hiệu năng mạnh mẽ với chip&nbsp;<a href=\"https://www.thegioididong.com/laptop-cpu-amd\" target=\"_blank\">AMD</a>&nbsp;Ryzen 7</h3>\r\n\r\n<p><a href=\"https://www.thegioididong.com/laptop-acer-aspire\" target=\"_blank\">Acer Aspire</a>&nbsp;sở hữu bộ vi xử l&yacute;&nbsp;<strong>3750H</strong>&nbsp;từ nh&agrave; AMD với tốc độ&nbsp;<strong>CPU 2.30 GHz</strong>&nbsp;v&agrave; &eacute;p xung nhờ&nbsp;<strong>Turbo Boost</strong>&nbsp;l&ecirc;n đến&nbsp;<strong>4.0 GHz,&nbsp;</strong>được sản xuất tr&ecirc;n tiến tr&igrave;nh 12 nm cho tốc độ xử l&yacute; nhanh ch&oacute;ng ở mọi t&aacute;c vụ c&ocirc;ng việc học tập văn ph&ograve;ng cho đến đồ hoạ v&agrave; chơi game.&nbsp;</p>\r\n\r\n<p><strong><a href=\"https://www.thegioididong.com/laptop-8-gb\" target=\"_blank\">RAM 8 GB</a>&nbsp;DDR4 (2 khe)</strong>&nbsp;với tốc độ Bus RAM<strong>&nbsp;2400 MHz</strong>&nbsp;cho ph&eacute;p bạn chạy nhiều chương tr&igrave;nh c&ugrave;ng l&uacute;c hay mở từ ứng dụng n&agrave;y sang ứng dụng kh&aacute;c vẫn trơn tru m&agrave; kh&ocirc;ng lo hiện tượng giật, lag.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/239538/acer-aspire-7-a715-41g-r150-r7-nhq8ssv004-4-1.jpg\" onclick=\"return false;\"><img alt=\"Acer Aspire 7 A715 41G R150 R7 3750H (NH.Q8SSV.004.) - Cấu hình\" src=\"https://cdn.tgdd.vn/Products/Images/44/239538/acer-aspire-7-a715-41g-r150-r7-nhq8ssv004-4-1.jpg\" /></a></p>\r\n\r\n<p><strong><a href=\"https://www.thegioididong.com/laptop?g=ssd-512-gb\" target=\"_blank\">SSD 512 GB</a>&nbsp;NVMe PCIe</strong>&nbsp;cho tốc độ khởi động m&aacute;y, mở ứng dụng, tải game, chạy đa nhiệm cực kỳ mượt m&agrave; v&agrave; nhanh ch&oacute;ng chỉ v&agrave;i gi&acirc;y, bạn sẽ kh&ocirc;ng cần phải mất nhiều thời gian chờ đợi nữa.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/239538/acer-aspire-7-a715-41g-r150-r7-nhq8ssv004-6-1.jpg\" onclick=\"return false;\"><img alt=\"Acer Aspire 7 A715 41G R150 R7 3750H (NH.Q8SSV.004.) - SSD\" src=\"https://cdn.tgdd.vn/Products/Images/44/239538/acer-aspire-7-a715-41g-r150-r7-nhq8ssv004-6-1.jpg\" /></a></p>\r\n\r\n<p>Card đồ hoạ&nbsp;<a href=\"https://www.thegioididong.com/laptop-geforce-gtx\" target=\"_blank\">NVIDIA GeForce GTX 1650Ti 4 GB</a>&nbsp;cho bạn th&ecirc;m nhiều sức mạnh hơn từ kiến tr&uacute;c đồ họa&nbsp;<strong>Turing&nbsp;</strong>ti&ecirc;n tiến. Bạn c&oacute; thể chơi tốt mọi tựa game phổ biến như PUBG, FIFA Online 4, Li&ecirc;n Minh Huyền Thoại,... hay chỉnh h&igrave;nh ảnh, video tr&ecirc;n c&aacute;c ứng dụng Adobe một c&aacute;ch mượt m&agrave;, trơn tru.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/239538/acer-aspire-7-a715-41g-r150-r7-nhq8ssv004-5-1.jpg\" onclick=\"return false;\"><img alt=\"Acer Aspire 7 A715 41G R150 R7 3750H (NH.Q8SSV.004.) - Card đồ hoạ\" src=\"https://cdn.tgdd.vn/Products/Images/44/239538/acer-aspire-7-a715-41g-r150-r7-nhq8ssv004-5-1.jpg\" /></a></p>\r\n\r\n<h3>Thiết kế tinh gọn, hiện đại</h3>\r\n\r\n<p>Aspire 7 A715 được&nbsp;<a href=\"https://www.thegioididong.com/laptop-acer\" target=\"_blank\">Acer</a>&nbsp;thiết kế&nbsp;mỏng nhẹ với trọng lượng chỉ&nbsp;<strong>2.1 kg</strong>, d&agrave;y<strong>&nbsp;23.25 mm</strong>, được xem l&agrave; gọn nhẹ&nbsp;đối với một chiếc laptop gaming, bạn c&oacute; thể dễ d&agrave;ng lu&ocirc;n mang theo đến mọi nơi. Phần bản l&ecirc;̀ chắc chắn, gi&uacute;p máy ít bị rung lắc và bảo v&ecirc;̣ máy t&ocirc;́t hơn khi chiến game.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/239538/acer-aspire-7-a715-41g-r150-r7-nhq8ssv004-2-1.jpg\" onclick=\"return false;\"><img alt=\"Acer Aspire 7 A715 41G R150 R7 3750H (NH.Q8SSV.004.) - Thiết kế\" src=\"https://cdn.tgdd.vn/Products/Images/44/239538/acer-aspire-7-a715-41g-r150-r7-nhq8ssv004-2-1.jpg\" /></a></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/laptop\" target=\"_blank\">Laptop</a>&nbsp;trang bị c&aacute;c cổng kết nối th&ocirc;ng dụng như: 1 cổng USB 3.2, HDMI, LAN (RJ45), USB 2.0, USB Type-C thuận tiện kết nối với c&aacute;c thiết bị ngoại vi kh&aacute;c. M&aacute;y c&ograve;n hỗ trợ th&ecirc;m c&aacute;c kết nối kh&ocirc;ng d&acirc;y Wi-Fi 6 AX201, Bluetooth 5.0 để bạn c&oacute; thể chơi game với chất lượng kết nối mạng ổn định.</p>\r\n\r\n<p>H&agrave;nh tr&igrave;nh ph&iacute;m ph&ugrave; hợp c&ugrave;ng b&agrave;n ph&iacute;m&nbsp;<strong>Fullsize</strong>&nbsp;độ nảy tốt, được trang bị đ&egrave;n nền, cho bạn những thao t&aacute;c nhanh nhạy v&agrave; ch&iacute;nh x&aacute;c, chiếm ưu thế hơn trong c&aacute;c trận đấu.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/239538/acer-aspire-7-a715-41g-r150-r7-nhq8ssv004-7-1.jpg\" onclick=\"return false;\"><img alt=\"Acer Aspire 7 A715 41G R150 R7 3750H (NH.Q8SSV.004.) - Đèn bàn phím\" src=\"https://cdn.tgdd.vn/Products/Images/44/239538/acer-aspire-7-a715-41g-r150-r7-nhq8ssv004-7-1.jpg\" /></a></p>\r\n\r\n<p>Hệ thống hai quạt tản nhiệt gi&uacute;p tối ưu hiệu năng d&ugrave; chơi game trong thời gian d&agrave;i, tr&aacute;nh t&igrave;nh trạng qu&aacute; nhiệt ở c&aacute;c linh kiện dẫn đến n&oacute;ng m&aacute;y v&agrave; đảm bảo hiệu năng ổn định trong suốt qu&aacute; tr&igrave;nh chơi game.</p>\r\n\r\n<h3>Trải nghiệm kh&ocirc;ng gian sống động với&nbsp;<a href=\"https://www.thegioididong.com/laptop-tren-15-inch\" target=\"_blank\">m&agrave;n h&igrave;nh 15.6 inch</a></h3>\r\n\r\n<p>M&agrave;n h&igrave;nh với độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>&nbsp;c&ugrave;ng tấm nền&nbsp;<strong>IPS</strong>&nbsp;tuyệt đẹp cho g&oacute;c nh&igrave;n rộng l&ecirc;n đến&nbsp;<strong>178 độ</strong>, mang đến những chuyển động game thực sự sống động, m&atilde;n nh&atilde;n người chơi.</p>\r\n\r\n<p>C&ocirc;ng nghệ chống ch&oacute;i&nbsp;<strong>Anti Glare&nbsp;</strong>c&acirc;n bằng &aacute;nh s&aacute;ng m&agrave;n h&igrave;nh với m&ocirc;i trường, tr&aacute;nh t&igrave;nh trạng mỏi mắt khi sử dụng m&aacute;y l&acirc;u. M&agrave;n h&igrave;nh<strong>&nbsp;</strong><a href=\"https://www.thegioididong.com/hoi-dap/cong-nghe-man-hinh-acer-comfyview-co-gi-dac-biet-1192380\" target=\"_blank\">ComfyView</a>&nbsp;được phủ một lớp &ldquo;nh&aacute;m mờ&rdquo; chống ch&oacute;i, gi&uacute;p giảm &aacute;nh s&aacute;ng xanh, cho m&agrave;u sắc ch&acirc;n thực, cũng như h&igrave;nh ảnh r&otilde; n&eacute;t hơn với độ tương phản tốt.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/239538/acer-aspire-7-a715-41g-r150-r7-nhq8ssv004-9-1.jpg\" onclick=\"return false;\"><img alt=\"Acer Aspire 7 A715 41G R150 R7 3750H (NH.Q8SSV.004.) - Màn hình\" src=\"https://cdn.tgdd.vn/Products/Images/44/239538/acer-aspire-7-a715-41g-r150-r7-nhq8ssv004-9-1.jpg\" /></a></p>\r\n\r\n<p>C&ocirc;ng nghệ &acirc;m thanh&nbsp;<strong>Stereo speakers</strong>&nbsp;cho bạn cảm nhận được kh&ocirc;ng gian, vị tr&iacute; của từng &acirc;m thanh ri&ecirc;ng biệt nhờ v&agrave;o việc &acirc;m thanh di chuyển qua lại giữa 2 loa. Đồng thời,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-trueharmony-co-gi-dac-biet-1017616\" target=\"_blank\"><strong>Acer TrueHarmony</strong></a>&nbsp;mang đến trải nghiệm &acirc;m thanh r&otilde; r&agrave;ng, c&ugrave;ng khả năng t&aacute;i tạo &acirc;m thanh v&ograve;m cho trải nghiệm khi xem phim, nghe nhạc tuyệt vời hơn.​<a href=\"https://www.thegioididong.com/images/44/239538/acer-aspire-7-a715-41g-r150-r7-nhq8ssv004-10-1.jpg\" onclick=\"return false;\"><img alt=\"Acer Aspire 7 A715 41G R150 R7 3750H (NH.Q8SSV.004.) - Âm thanh\" src=\"https://cdn.tgdd.vn/Products/Images/44/239538/acer-aspire-7-a715-41g-r150-r7-nhq8ssv004-10-1.jpg\" /></a></p>\r\n\r\n<p>Acer Aspire 7 A715 41G R150 R7 (NH.Q8SSV.004) với hiệu năng đa dạng như tr&ecirc;n, th&iacute;ch hợp cho những ai đang t&igrave;m cho m&igrave;nh một chiếc laptop ph&ugrave; hợp&nbsp;cả nhu cầu học tập, l&agrave;m việc với c&aacute;c t&aacute;c vụ&nbsp;<a href=\"https://www.thegioididong.com/laptop?g=do-hoa-ky-thuat\" target=\"_blank\">đồ hoạ, kỹ thuật</a>&nbsp;v&agrave; đ&aacute;p ứng tốt cả việc chơi game sau những giờ l&agrave;m việc căng thẳng.</p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kich_hoat` int(11) NOT NULL,
  `vai_tro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `mat_khau`, `ho_ten`, `email`, `hinh`, `kich_hoat`, `vai_tro`) VALUES
('phanvan0322', '982f32e5997d059c233151d7ae87fe01', 'Phan Tường Văn ', 'phanvan03222@gmail.com', 'html-la-gi-1280x720.jpg', 1, 1),
('phanvan123', 'e10adc3949ba59abbe56e057f20f883e', 'Phan Tường A', 'vanptpc123@fpt.edu.vn', 'hinh-nen-2k-dep.jpg', 1, 2),
('phanvan1234', '982f32e5997d059c233151d7ae87fe01', 'Phan Tuong Van', '122e33q4@gmail.com', 'fashion-logo3.png', 1, 2),
('vannlp123', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Văn A', 'vanptpc01874@fpt.edu.vn', 'html-la-gi-1280x720.jpg', 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(11, 'Điện thoại'),
(12, 'Máy tính'),
(13, 'Linh kiện'),
(14, 'Phụ kiện');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `fk_binh-luan_hang-hoa` (`ma_hh`),
  ADD KEY `fk_binh-luan_khach-hang` (`ma_kh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `fk_hang-hoa_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `fk_binh-luan_hang-hoa` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`),
  ADD CONSTRAINT `fk_binh-luan_khach-hang` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `fk_hang-hoa_loai` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
