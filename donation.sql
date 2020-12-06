-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 12:16 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE IF NOT EXISTS `donate` (
  `ID` int(30) NOT NULL,
  `ID2` int(30) NOT NULL,
  `RID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`ID`, `ID2`, `RID`) VALUES
(2, 1, 1),
(1, 23, 8),
(0, 25, 2),
(1, 25, 2),
(0, 25, 2),
(0, 25, 2),
(0, 25, 2),
(0, 25, 2),
(0, 25, 2),
(0, 25, 2),
(0, 25, 2),
(0, 25, 2),
(1, 25, 7),
(1, 25, 7),
(1, 25, 7),
(1, 25, 7),
(1, 25, 7),
(1, 25, 7),
(0, 25, 3),
(0, 25, 3),
(0, 25, 6),
(0, 25, 3),
(24, 25, 9),
(24, 25, 9);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `itemname` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `uid` int(11) NOT NULL,
  `type` enum('expire','donate','cancel','') COLLATE utf8_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `donor` tinytext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`itemname`, `uid`, `type`, `time`, `date`, `donor`) VALUES
('Test', 25, 'donate', '23:09:13', '2020-10-13', 'Maung'),
('Endless', 25, 'donate', '23:10:54', '2020-10-13', 'Maung'),
('Endless', 0, 'donate', '23:12:29', '2020-10-13', 'Maung'),
('Axe', 25, 'expire', '23:23:55', '2020-10-13', 'null'),
('Endless', 0, 'donate', '23:24:28', '2020-10-13', 'Maung'),
('Endless', 0, 'donate', '23:57:40', '2020-10-13', 'Maung'),
('Phone', 24, 'donate', '00:00:33', '2020-10-14', 'Maung');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `ID` int(10) NOT NULL,
  `RID` int(10) NOT NULL AUTO_INCREMENT,
  `RName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `RQuantity` int(10) NOT NULL,
  `RDate` date NOT NULL,
  `RPurpose` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `RLocation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `RPhoto` blob,
  `RFinish` tinyint(1) NOT NULL,
  `ReqPerson` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `RTime` datetime NOT NULL,
  `expired` tinyint(1) NOT NULL,
  PRIMARY KEY (`RID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`ID`, `RID`, `RName`, `RQuantity`, `RDate`, `RPurpose`, `RLocation`, `RPhoto`, `RFinish`, `ReqPerson`, `RTime`, `expired`) VALUES
(1, 1, 'Mask', 100, '2020-10-08', 'Test', '', NULL, 1, '2', '0000-00-00 00:00:00', 1),
(1, 2, 'Test', 1, '2020-10-15', 'qq', '', NULL, 1, 'Admin', '0000-00-00 00:00:00', 0),
(0, 3, 'Endless', 11, '2020-11-06', 'test', 'Yangon', NULL, 0, '', '0000-00-00 00:00:00', 0),
(0, 4, 'Endless', 2, '2020-11-06', '1111', 'Yangon', NULL, 0, '', '0000-00-00 00:00:00', 0),
(0, 5, 'Hello', 2, '2020-11-06', 'qq', 'Yangon', NULL, 0, '', '0000-00-00 00:00:00', 0),
(0, 6, 'Endless', 2, '2020-10-08', '11', 'Yangon', NULL, 0, 'Admin', '0000-00-00 00:00:00', 1),
(1, 7, 'Test', 11, '2020-10-31', 'Test', 'Tewts', NULL, 1, 'Mg Mg', '2020-10-01 19:37:40', 0),
(1, 8, 'Endless', 2, '2020-11-07', 't', 'Yangon', NULL, 1, 'Admin', '2020-10-09 20:13:01', 0),
(24, 9, 'Phone', 100, '2020-10-31', 'To Use', 'GBK', NULL, 0, 'PZ', '2020-10-09 23:02:33', 0),
(25, 10, 'Demon Hunter', 1, '2020-10-21', 'something', 'LOD', NULL, 0, 'Maung', '2020-10-13 20:44:06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phoneNo` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `location` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `imagename` varchar(225) CHARACTER SET latin1 NOT NULL DEFAULT 'default.jpg',
  `createDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `id`, `phoneNo`, `location`, `imagename`, `createDate`) VALUES
('Admin', 'Admin', '', 1, '09123123', 'Yangon', 'default.jpg', '2020-10-08 09:51:46'),
('Mg Mg', 'Mg Mg', '', 23, '09123123123', 'Ygn', 'man2.png', '2020-10-09 19:31:53'),
('PZ', 'pz', 'pz@gmail.com', 24, '09999999', 'GBK', 'man.png', '2020-10-09 22:57:31'),
('Maung', 'testing', 'asdf@asdf.com', 25, '09123123123', 'Yangon', 'Sketch (1).png', '2020-10-13 11:25:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
