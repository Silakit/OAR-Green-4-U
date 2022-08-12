-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 05:38 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_waste`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `idmember` int(11) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `idrewards` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `img` varchar(45) DEFAULT NULL,
  `detail` varchar(500) DEFAULT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `idscore` int(11) NOT NULL,
  `proof` varchar(45) DEFAULT NULL,
  `no_throw` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `time` timestamp NULL DEFAULT NULL,
  `waste_types_idwaste_types` int(11) NOT NULL,
  `member_username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wastes`
--

CREATE TABLE `wastes` (
  `idwastes` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `detail` varchar(500) DEFAULT NULL,
  `images` varchar(45) DEFAULT NULL,
  `waste_types_idwaste_types` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wastes`
--

INSERT INTO `wastes` (`idwastes`, `name`, `type`, `detail`, `images`, `waste_types_idwaste_types`) VALUES
(1, 'ถ่านไฟฉาย', 'ถ่าน', NULL, NULL, 1),
(2, 'กระป๋องสี', 'อลูมิเนียม', NULL, NULL, 1),
(3, 'ถ่านกระดุม', 'ถ่าน', NULL, NULL, 1),
(4, 'หลอดไฟ', 'หลอดไฟ', NULL, NULL, 1),
(5, 'แบตเตอร์รี่รถยนต์', 'แบตเตอร์รี่', NULL, NULL, 1),
(6, 'แบตเตอร์รี่โทรศัพท์มือถือ', 'แบตเตอร์รี่', NULL, NULL, 1),
(7, 'power bank', 'แบตเตอร์รี่', NULL, NULL, 1),
(8, 'กระป๋องสเปรย์', 'อลูมิเนียม', NULL, NULL, 1),
(9, 'น้ำยาย้อมผม', 'สารเคมี', NULL, NULL, 1),
(10, 'น้ำยาทาเล็บ', 'สารเคมี', NULL, NULL, 1),
(11, 'น้ำยาล้างเล็บ', 'สารเคมี', NULL, NULL, 1),
(12, 'เครื่องสำอางหมดอายุ', 'สารเคมี', NULL, NULL, 1),
(13, 'โทรทัศน์', 'อุปกรณ์อิล็กทรอนิกส์', NULL, NULL, 1),
(14, 'คอมพิวเตอร์', 'อุปกรณ์อิเล็กทรอนิกส์', NULL, NULL, 1),
(15, 'เตารีด', 'อุปกรณ์อิเล็กทรอนิกส์', NULL, NULL, 1),
(16, 'โทรศัพท์', 'อุปกรณ์อิเล็กทรอนิกส์', NULL, NULL, 1),
(17, 'ยาหมดอายุ', 'สารเคมี', NULL, NULL, 1),
(18, 'น้ำยาขัดห้องน้ำ', 'สารเคมี', NULL, NULL, 1),
(19, 'ยาฆ่าแมลง', 'สารเคมี', NULL, NULL, 1),
(20, 'แผ่นซีดี', 'แผ่นซีดี', NULL, NULL, 1),
(21, 'ขวดแก้ว', 'แก้ว', NULL, NULL, 3),
(22, 'ขวดพลาสติก', 'พลาสติก', NULL, NULL, 3),
(23, 'หนังสือพิมพ์', 'กระดาษ', NULL, NULL, 3),
(24, 'กระดาษ', 'กระดาษ', NULL, NULL, 3),
(25, 'กล่องเครื่องดื่ม', 'กระดาษ', NULL, NULL, 3),
(26, 'กระป๋องอลูมิเนียม', 'อลูมิเนียม', NULL, NULL, 3),
(27, 'กล่องลัง', 'กระดาษ', NULL, NULL, 3),
(28, 'ถุงกระดาษ', 'กระดาษ', NULL, NULL, 3),
(29, 'ถุงผ้า', 'ผ้า', NULL, NULL, 3),
(30, 'เหล็ก', 'โลหะ', NULL, NULL, 3),
(31, 'แก้วพลาสติกแบบหนา', 'พลาสติก', NULL, NULL, 3),
(32, 'ยางรถยนต์', 'ยางรถ', NULL, NULL, 3),
(33, 'ยางรถจักรยานยนต์', 'ยางรถ', NULL, NULL, 3),
(34, 'เศษผัก', 'อาหาร', NULL, NULL, 2),
(35, 'ผลไม้', 'อาหาร', NULL, NULL, 2),
(36, 'เปลือกผลไม้', 'อาหาร', NULL, NULL, 2),
(37, 'เศษอาหาร', 'อาหาร', NULL, NULL, 2),
(38, 'ใบไม้', 'พืช', NULL, NULL, 2),
(39, 'หญ้า', 'พืช', NULL, NULL, 2),
(40, 'เนื้อสัตว์', 'อาหาร', NULL, NULL, 2),
(41, 'พลาสติกห่อลูกอม', 'พลาสติก', NULL, NULL, 4),
(42, 'ซองบะหมี่กึ่งสำเร็จรูป', 'พลาสติก', NULL, NULL, 4),
(43, 'ถุงพลาสติก', 'พลาสติก', NULL, NULL, 4),
(44, 'โฟม', 'โฟม', NULL, NULL, 4),
(45, 'ฟอล์ยที่เปื้อนอาหาร', 'ฟอล์ย', NULL, NULL, 4),
(46, 'ถ้วยพลาสติก', 'ถ้วย', NULL, NULL, 4),
(47, 'ถ้วยเซรามิค', 'ถ้วย', NULL, NULL, 4),
(48, 'ถ้วยแก้ว', 'ถ้วย', NULL, NULL, 4),
(49, 'ถ้วยกระเบื้อง', 'ถ้วย', NULL, NULL, 4),
(50, 'ถ้วยสังกีสี', 'ถ้วย', NULL, NULL, 4),
(51, 'ถ้วยกระดาษ', 'ถ้วย', NULL, NULL, 4),
(52, 'จานพลาสติก', 'จาน', NULL, NULL, 4),
(53, 'จานเซรามิค', 'จาน', NULL, NULL, 4),
(54, 'จานแก้ว', 'จาน', NULL, NULL, 4),
(55, 'จานกระเบื้อง', 'จาน', NULL, NULL, 4),
(56, 'จานสังกะสี', 'จาน', NULL, NULL, 4),
(57, 'จานกระดาษ', 'จาน', NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `waste_types`
--

CREATE TABLE `waste_types` (
  `idwaste_types` int(11) NOT NULL,
  `type_name` varchar(45) DEFAULT NULL,
  `detail` varchar(500) DEFAULT NULL,
  `images` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `waste_types`
--

INSERT INTO `waste_types` (`idwaste_types`, `type_name`, `detail`, `images`) VALUES
(1, 'ขยะอันตราย', ' หรือ ขยะอันตราย   เหมาะสำหรับขยะที่มีอันตรายต่อสิ่งมีชีวิต และสิ่งแวดล้อม เช่น หลอดฟลูออเรสเซนต์ ขวดยา ถ่านไฟฉาย กระป๋องสีสเปรย์ กระป๋องยาฆ่าแมลง ภาชนะบรรจุสารอันตรายต่าง ๆ อุปกรณ์ไฟฟ้า แบตเตอรี่ เป็นต้น  ประโยชน์จากการแยกขยะ: แยกขยะเพื่อนำไปกำจัดอย่างถูกวิธีตาม เพื่อไม่ไห้รั่วซึมลงแหล่งน้ำ หรือชั้นผิวดิน ข้อแนะนำ : ควรใส่ไว้ในภาชนะที่แข็งแรง มิดชิด และไม่รั่วไหล หรือใส่กล่องบรรจุภัณฑ์นั้นๆก่อนทิ้งลงถังขยะ', 'อันตราย.jpg'),
(2, 'ขยะย่อยสลายได้', ' หรือ ขยะอินทรีย์   เหมาะสำหรับขยะที่เน่าเสียและย่อยสลายได้เร็ว สามารถนำมาหมักทำปุ๋ยได้ เช่น ผัก ผลไม้ เศษอาหาร ใบไม้ เศษเนื้อสัตว์ แต่ไม่รวมเศษเนื้อ พืช ผัก ที่เกิดจากการทดลองในห้องปฏิบัติการ เป็นต้น  ประโยชน์จากการแยกขยะ : นำไปทำปุ๋ยหมักชีวภาพ ใส่ต้นไม้ แปลงผักสวนครัวได้ ข้อแนะนำ : ควรจะแยกระหว่างเศษอาหารกับเศษใบไม้ เพื่อการนำไปใช้ประโยชน์ที่แตกต่าง ', 'อินทรีย์.jpg'),
(3, 'ขยะรีไซเคิล', ' หรือ ขยะรีไซเคิล  เหมาะสำหรับขยะที่สามารถนำมารีไซเคิลหรือขายได้ เช่น แก้ว กระดาษ พลาสติก โลหะ อลูมิเนียม ยางรถยนต์ กล่องเครื่องดื่ม กระป๋องเครื่องดื่ม เป็นต้น  ประโยชน์จากการแยกขยะ : นำไปรีไซเคิลแล้วนำกลับมาใช้ใหม่ เช่น ผลิตขาเทียม  ผลิตหลอดไฟ ข้อแนะนำ : ควรจะกำจัดสิ่งที่อยู่ในบรรจุภัณฑ์ออกให้หมด เช่น เทน้ำในขวดออกให้หมดก่อนทิ้งลงถังขยะ', 'รีไซ.jpg'),
(4, 'ขยะทั่วไป', ' หรือ ขยะทั่วไป  เหมาะสำหรับขยะย่อยสลายไม่ได้ ไม่เป็นพิษและไม่คุ้มค่าการรีไซเคิล เช่น พลาสติกห่อลูกอม ซองบะหมี่สำเร็จรูป ถุงพลาสติก โฟมและฟอล์ยที่เปื้อนอาหาร หลอดดูดน้ำ เศษพลาสติกเล็กๆ เป็นต้น  ประโยชน์จากการแยกขยะ : ทำเชื้อเพลิงหรือสิ่งประดิษฐ์ต่างๆ ข้อแนะนำ : สามารถทิ้งรวมกันได้เลย', 'ทั่วไป.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idmember`,`username`) USING BTREE,
  ADD UNIQUE KEY `idmember_UNIQUE` (`idmember`),
  ADD KEY `fk_member_score_idx` (`username`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`idrewards`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`idscore`,`waste_types_idwaste_types`,`member_username`),
  ADD KEY `fk_score_waste_types1_idx` (`waste_types_idwaste_types`),
  ADD KEY `fk_score_member1_idx` (`member_username`);

--
-- Indexes for table `wastes`
--
ALTER TABLE `wastes`
  ADD PRIMARY KEY (`idwastes`,`waste_types_idwaste_types`),
  ADD UNIQUE KEY `idwastes_UNIQUE` (`idwastes`),
  ADD KEY `fk_wastes_waste_types_idx` (`waste_types_idwaste_types`);

--
-- Indexes for table `waste_types`
--
ALTER TABLE `waste_types`
  ADD PRIMARY KEY (`idwaste_types`),
  ADD UNIQUE KEY `idwaste_types_UNIQUE` (`idwaste_types`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `idmember` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `idrewards` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `idscore` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wastes`
--
ALTER TABLE `wastes`
  MODIFY `idwastes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `waste_types`
--
ALTER TABLE `waste_types`
  MODIFY `idwaste_types` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `fk_score_member1` FOREIGN KEY (`member_username`) REFERENCES `member` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_score_waste_types1` FOREIGN KEY (`waste_types_idwaste_types`) REFERENCES `waste_types` (`idwaste_types`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wastes`
--
ALTER TABLE `wastes`
  ADD CONSTRAINT `fk_wastes_waste_types` FOREIGN KEY (`waste_types_idwaste_types`) REFERENCES `waste_types` (`idwaste_types`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
