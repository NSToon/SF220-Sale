-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:5000
-- Generation Time: May 03, 2024 at 05:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sf220_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL COMMENT 'ลำดับที่',
  `orderID` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'เลขที่คำสั่งซื้อ',
  `pro_id` int(6) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสสินค้า',
  `orderPrice` float NOT NULL COMMENT 'ราคาสินค้า',
  `orderQty` int(11) NOT NULL COMMENT 'จำนวนที่สั่งซื้อ',
  `Total` float NOT NULL COMMENT 'ราคารวม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `orderID`, `pro_id`, `orderPrice`, `orderQty`, `Total`) VALUES
(1, 0000000001, 000001, 690, 1, 690),
(2, 0000000002, 000001, 690, 2, 1380),
(3, 0000000002, 000002, 490, 2, 980),
(4, 0000000004, 000002, 490, 1, 490),
(5, 0000000005, 000001, 690, 2, 1380),
(6, 0000000006, 000001, 690, 4, 2760),
(7, 0000000006, 000007, 690, 2, 1380),
(8, 0000000006, 000008, 490, 1, 490),
(9, 0000000008, 000001, 690, 1, 690),
(10, 0000000009, 000001, 690, 1, 690),
(11, 0000000011, 000001, 690, 1, 690),
(12, 0000000013, 000001, 690, 1, 690),
(13, 0000000016, 000001, 690, 1, 690);

-- --------------------------------------------------------

--
-- Table structure for table `product2`
--

CREATE TABLE `product2` (
  `pro_id` int(6) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสสินค้า',
  `pro_name` varchar(100) NOT NULL COMMENT 'ชื่อสินค้า',
  `type_id` int(3) UNSIGNED ZEROFILL DEFAULT NULL COMMENT 'รหัสประเภทสินค้า',
  `price` float(8,2) DEFAULT NULL COMMENT 'ราคาขาย',
  `color` varchar(30) DEFAULT NULL COMMENT 'สี',
  `size` varchar(30) DEFAULT NULL COMMENT 'ไซส์',
  `amount` int(11) DEFAULT NULL COMMENT 'จำนวน',
  `image` varchar(50) DEFAULT NULL COMMENT 'รูปภาพ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product2`
--

INSERT INTO `product2` (`pro_id`, `pro_name`, `type_id`, `price`, `color`, `size`, `amount`, `image`) VALUES
(000001, 'Nillarut Original Bracetlets', 001, 690.00, 'Gold', 'Freesize', 7, 'uploads/Nillarut Original Bracetlets.png'),
(000002, 'Nillarut Original Earrings', 002, 490.00, 'Gold', 'Freesize', 17, 'uploads/Nillarut Original Earrings.png'),
(000003, 'Nillarut Original Hair-clip', 003, 390.00, 'Gold', 'Freesize', 17, 'uploads/Nillarut Original Hair-clip.png'),
(000004, 'Nillarut Original Necklaces', 004, 790.00, 'Gold', 'Freesize', 20, 'uploads/Nillarut Original Necklaces.png'),
(000005, 'Nillarut Original Pin', 005, 390.00, 'Gold', 'Freesize', 10, 'uploads/Nillarut Original Pin.png'),
(000006, 'Nillarut Original Ring', 006, 490.00, 'Gold', 'Freesize', 10, 'uploads/Nillarut Original Ring.png'),
(000007, 'Luxe Pearl Bracelects', 001, 690.00, 'Silver', 'Freesize', 8, 'uploads/Luxe Pearl Bracelects.png'),
(000008, 'Luxe Pearl Earrings', 002, 490.00, 'Silver', 'Freesize', 9, 'uploads/Luxe Pearl Earrings.png'),
(000009, 'Luxe Pearl Hair-clip', 003, 390.00, 'Silver', 'Freesize', 10, 'uploads/Luxe Pearl Hair-clip.png'),
(000010, 'Luxe Pearl Necklaces', 004, 690.00, 'Silver', 'Freesize', 10, 'uploads/Luxe Pearl Necklaces.png'),
(000011, 'Luxe Pearl Pin', 005, 350.00, 'Silver', 'Freesize', 10, 'uploads/Luxe Pearl Pin.png'),
(000012, 'Luxe Pearl Ring', 006, 490.00, 'Silver', 'Freesize', 10, 'uploads/Luxe Pearl Ring.png'),
(000013, 'Venus Bracelets', 001, 690.00, 'RoseGold', 'Freesize', 10, 'uploads/Venus Bracelets.png'),
(000014, 'Gaia Earrings', 002, 590.00, 'RoseGold', 'Freesize', 10, 'uploads/Gaia Earrings.png'),
(000015, 'Minera Hair-cilp', 003, 390.00, 'RoseGold', 'Freesize', 10, 'uploads/Minera Hair-cilp.png'),
(000016, 'Selene Necklaces', 004, 790.00, 'RoseGold', 'Freesize', 10, 'uploads/Selene Necklaces.png'),
(000017, 'Persephone Pin', 005, 350.00, 'RoseGold', 'Freesize', 10, 'uploads/Persephone Pin.png'),
(000018, 'Apollo Ring', 006, 490.00, 'RoseGold', 'Freesize', 10, 'uploads/Apollo Ring.png'),
(000019, 'Gemini Bracelets', 001, 590.00, '-', 'Freesize', 10, 'uploads/Gemini Bracelets.png'),
(000020, 'Virgo Earrings', 002, 490.00, '-', 'Freesize', 10, 'uploads/Virgo Earrings.png'),
(000021, 'Libra Hair-clip', 003, 390.00, '-', 'Freesize', 10, 'uploads/Libra Hair-clip.png'),
(000022, 'Scorpio Necklaces', 004, 790.00, '-', 'Freesize', 10, 'uploads/Scorpio Necklaces.png'),
(000023, 'Aquarius Pin', 005, 350.00, '-', 'Freesize', 10, 'uploads/Aquarius Pin.png'),
(000024, 'Leo Ring', 006, 390.00, '-', 'Freesize', 10, 'uploads/Leo Ring.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `orderID` int(11) UNSIGNED ZEROFILL NOT NULL,
  `cus_name` varchar(60) NOT NULL COMMENT 'ชื่อ-นามสกุล',
  `address` text NOT NULL COMMENT 'ที่อยู๋การจัดส่งสินค้า',
  `telephone` varchar(10) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `total_price` float NOT NULL COMMENT 'ราคารวมสุทธิ',
  `order_status` varchar(1) NOT NULL COMMENT '0 = ยกเลิก, 1 = ยังไม่ชำระเงิน, 2 = ชำระเงินแล้ว',
  `reg_data` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่สั่งซื้อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`orderID`, `cus_name`, `address`, `telephone`, `total_price`, `order_status`, `reg_data`) VALUES
(00000000001, 'สมชาย ใจดี', ' บ้านป่าเมืองเหนือ', '1111111111', 690, '1', '2024-05-02 22:48:43'),
(00000000002, 'hgik hdvhvkl', ' cdklv,;fskmbv', '0225557', 2360, '1', '2024-05-03 03:28:36'),
(00000000003, 'hgik hdvhvkl', ' cdklv,;fskmbv', '0225557', 0, '1', '2024-05-03 03:28:56'),
(00000000004, 'skgv;sjgbkdf', ' skdvgfsgvzk', '00254554', 490, '1', '2024-05-03 03:30:46'),
(00000000005, 'lafksekfosk', ' awekfowkgpwor', '2255655', 1380, '1', '2024-05-03 03:32:21'),
(00000000006, 'sfxc bfx', ' ดอิหผิ', '27507507', 4630, '1', '2024-05-03 04:33:34'),
(00000000007, 'sfxc bfx', ' ดอิหผิ', '27507507', 0, '1', '2024-05-03 04:33:56'),
(00000000008, 'toon', ' ggggg', '255555', 690, '1', '2024-05-03 04:34:37'),
(00000000009, 'dcs', ' dsv', '5245', 690, '1', '2024-05-03 04:43:18'),
(00000000010, 'dcs', ' dsv', '5245', 0, '1', '2024-05-03 04:44:54'),
(00000000011, 'vgssv', ' fbfd', '5888', 690, '1', '2024-05-03 04:45:11'),
(00000000012, 'vgssv', ' fbfd', '5888', 0, '1', '2024-05-03 04:47:01'),
(00000000013, 'dv', ' sdv', '52', 690, '1', '2024-05-03 04:47:14'),
(00000000014, 'dv', ' sdv', '52', 0, '1', '2024-05-03 04:47:46'),
(00000000015, 'dv', ' sdv', '52', 0, '1', '2024-05-03 04:49:17'),
(00000000016, 'njjjj', ' lljijoli', '022235', 690, '1', '2024-05-03 04:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(3) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสประเภทสินค้า',
  `type_name` varchar(50) NOT NULL COMMENT 'ชื่อประเภภทสินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(001, 'Bracelets'),
(002, 'Earrings'),
(003, 'Hair-clip'),
(004, 'Necklaces'),
(005, 'Pins'),
(006, 'Rings');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `userlevel` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `userlevel`) VALUES
(1, 'vc@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'qw', 'we', 'm'),
(2, 'pokkom88@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'chorm', 'lnwza', 'm'),
(3, 'po@gmail.com', 'dcddb75469b4b4875094e14561e573d8', 'po', 'ri', 'm'),
(4, 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'hjkd', 'hdhf', 'm'),
(5, 'HH@gmaul.com', '46d045ff5190f6ea93739da6c0aa19bc', 'ad', 'mn', 'm'),
(6, 'pp@gmaill.com', 'd3eb9a9233e52948740d7eb8c3062d14', 'dad', 'dfdf', 'm'),
(7, 'aH@gmaul.com', 'c5fe25896e49ddfe996db7508cf00534', 'adh', 'mnhf', 'm'),
(8, 'xx@gmail.com', '3d2172418ce305c7d16d4b05597c6a59', 'gdsg', 'gsddg', 'm'),
(9, 'nathitawanc@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'gvrvbtntg', 'tgngfn', 'm'),
(10, 'jjjjj@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'gvrvbtntg', 'scsdvv', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product2`
--
ALTER TABLE `product2`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product2`
--
ALTER TABLE `product2`
  MODIFY `pro_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัสสินค้า', AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `orderID` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัสประเภทสินค้า', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
