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
(1, '???????????????????????????', '????????????', NULL, NULL, 1),
(2, '???????????????????????????', '??????????????????????????????', NULL, NULL, 1),
(3, '??????????????????????????????', '????????????', NULL, NULL, 1),
(4, '??????????????????', '??????????????????', NULL, NULL, 1),
(5, '???????????????????????????????????????????????????', '?????????????????????????????????', NULL, NULL, 1),
(6, '???????????????????????????????????????????????????????????????????????????', '?????????????????????????????????', NULL, NULL, 1),
(7, 'power bank', '?????????????????????????????????', NULL, NULL, 1),
(8, '???????????????????????????????????????', '??????????????????????????????', NULL, NULL, 1),
(9, '?????????????????????????????????', '?????????????????????', NULL, NULL, 1),
(10, '?????????????????????????????????', '?????????????????????', NULL, NULL, 1),
(11, '???????????????????????????????????????', '?????????????????????', NULL, NULL, 1),
(12, '?????????????????????????????????????????????????????????', '?????????????????????', NULL, NULL, 1),
(13, '????????????????????????', '????????????????????????????????????????????????????????????', NULL, NULL, 1),
(14, '?????????????????????????????????', '???????????????????????????????????????????????????????????????', NULL, NULL, 1),
(15, '??????????????????', '???????????????????????????????????????????????????????????????', NULL, NULL, 1),
(16, '????????????????????????', '???????????????????????????????????????????????????????????????', NULL, NULL, 1),
(17, '???????????????????????????', '?????????????????????', NULL, NULL, 1),
(18, '?????????????????????????????????????????????', '?????????????????????', NULL, NULL, 1),
(19, '???????????????????????????', '?????????????????????', NULL, NULL, 1),
(20, '????????????????????????', '????????????????????????', NULL, NULL, 1),
(21, '?????????????????????', '????????????', NULL, NULL, 3),
(22, '??????????????????????????????', '?????????????????????', NULL, NULL, 3),
(23, '????????????????????????????????????', '??????????????????', NULL, NULL, 3),
(24, '??????????????????', '??????????????????', NULL, NULL, 3),
(25, '????????????????????????????????????????????????', '??????????????????', NULL, NULL, 3),
(26, '???????????????????????????????????????????????????', '??????????????????????????????', NULL, NULL, 3),
(27, '????????????????????????', '??????????????????', NULL, NULL, 3),
(28, '???????????????????????????', '??????????????????', NULL, NULL, 3),
(29, '??????????????????', '?????????', NULL, NULL, 3),
(30, '???????????????', '????????????', NULL, NULL, 3),
(31, '???????????????????????????????????????????????????', '?????????????????????', NULL, NULL, 3),
(32, '???????????????????????????', '???????????????', NULL, NULL, 3),
(33, '????????????????????????????????????????????????', '???????????????', NULL, NULL, 3),
(34, '??????????????????', '???????????????', NULL, NULL, 2),
(35, '???????????????', '???????????????', NULL, NULL, 2),
(36, '?????????????????????????????????', '???????????????', NULL, NULL, 2),
(37, '????????????????????????', '???????????????', NULL, NULL, 2),
(38, '???????????????', '?????????', NULL, NULL, 2),
(39, '????????????', '?????????', NULL, NULL, 2),
(40, '??????????????????????????????', '???????????????', NULL, NULL, 2),
(41, '?????????????????????????????????????????????', '?????????????????????', NULL, NULL, 4),
(42, '??????????????????????????????????????????????????????????????????', '?????????????????????', NULL, NULL, 4),
(43, '??????????????????????????????', '?????????????????????', NULL, NULL, 4),
(44, '?????????', '?????????', NULL, NULL, 4),
(45, '?????????????????????????????????????????????????????????', '???????????????', NULL, NULL, 4),
(46, '?????????????????????????????????', '????????????', NULL, NULL, 4),
(47, '?????????????????????????????????', '????????????', NULL, NULL, 4),
(48, '????????????????????????', '????????????', NULL, NULL, 4),
(49, '???????????????????????????????????????', '????????????', NULL, NULL, 4),
(50, '?????????????????????????????????', '????????????', NULL, NULL, 4),
(51, '??????????????????????????????', '????????????', NULL, NULL, 4),
(52, '??????????????????????????????', '?????????', NULL, NULL, 4),
(53, '??????????????????????????????', '?????????', NULL, NULL, 4),
(54, '?????????????????????', '?????????', NULL, NULL, 4),
(55, '????????????????????????????????????', '?????????', NULL, NULL, 4),
(56, '??????????????????????????????', '?????????', NULL, NULL, 4),
(57, '???????????????????????????', '?????????', NULL, NULL, 4);

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
(1, '??????????????????????????????', ' ???????????? ??????????????????????????????   ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????? ???????????? ??????????????????????????????????????????????????? ??????????????? ??????????????????????????? ????????????????????????????????????????????? ???????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????? ??? ???????????????????????????????????? ??????????????????????????? ?????????????????????  ????????????????????????????????????????????????????????????: ????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????? ???????????????????????? : ?????????????????????????????????????????????????????????????????????????????? ?????????????????? ??????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????', '?????????????????????.jpg'),
(2, '??????????????????????????????????????????', ' ???????????? ?????????????????????????????????   ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????? ???????????? ????????? ??????????????? ???????????????????????? ??????????????? ??????????????????????????????????????? ??????????????????????????????????????????????????? ????????? ????????? ?????????????????????????????????????????????????????????????????????????????????????????????????????? ?????????????????????  ???????????????????????????????????????????????????????????? : ???????????????????????????????????????????????????????????? ??????????????????????????? ??????????????????????????????????????????????????? ???????????????????????? : ?????????????????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????? ', '????????????????????????.jpg'),
(3, '?????????????????????????????????', ' ???????????? ?????????????????????????????????  ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????? ???????????? ?????????????????? ????????????????????? ???????????? ?????????????????????????????? ??????????????????????????? ???????????????????????????????????????????????? ?????????????????????????????????????????????????????? ?????????????????????  ???????????????????????????????????????????????????????????? : ????????????????????????????????????????????????????????????????????????????????????????????? ???????????? ?????????????????????????????????  ?????????????????????????????? ???????????????????????? : ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????? ?????????????????????????????????????????????????????????????????????????????????????????????????????????', '????????????.jpg'),
(4, '???????????????????????????', ' ???????????? ???????????????????????????  ???????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????? ????????????????????????????????????????????? ?????????????????????????????????????????????????????? ?????????????????????????????? ??????????????????????????????????????????????????????????????????????????? ?????????????????????????????? ????????????????????????????????????????????? ?????????????????????  ???????????????????????????????????????????????????????????? : ??????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????? : ??????????????????????????????????????????????????????????????????', '??????????????????.jpg');

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
