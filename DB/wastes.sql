-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 12:58 PM
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
-- Table structure for table `wastes`
--

CREATE TABLE `wastes` (
  `idwastes` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `detail` varchar(250) DEFAULT NULL,
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wastes`
--
ALTER TABLE `wastes`
  ADD PRIMARY KEY (`idwastes`,`waste_types_idwaste_types`),
  ADD UNIQUE KEY `idwastes_UNIQUE` (`idwastes`),
  ADD KEY `fk_wastes_waste_types_idx` (`waste_types_idwaste_types`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wastes`
--
ALTER TABLE `wastes`
  MODIFY `idwastes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wastes`
--
ALTER TABLE `wastes`
  ADD CONSTRAINT `fk_wastes_waste_types` FOREIGN KEY (`waste_types_idwaste_types`) REFERENCES `waste_types` (`idwaste_types`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
