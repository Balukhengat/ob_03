-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2016 at 02:00 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `offersbull`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `lastlogin` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `useragent` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`, `name`, `lastlogin`, `ip`, `useragent`) VALUES
(0, 'rahul', 'rahul', 'rahul', NULL, NULL, NULL),
(1, 'abs@gmail.com', '33a485cb146e1153c69b588c671ab474f2e5b800', 'abs', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `automobile`
--

DROP TABLE IF EXISTS `automobile`;
CREATE TABLE IF NOT EXISTS `automobile` (
  `autoid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `address` text,
  `description` text,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `offerend` datetime DEFAULT NULL,
  `category` tinyint(4) DEFAULT NULL,
  `userid` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`autoid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `automobile`
--

INSERT INTO `automobile` (`autoid`, `name`, `title`, `type`, `address`, `description`, `mobile`, `email`, `city`, `area`, `date`, `offerend`, `category`, `userid`) VALUES
(11, 'abhijit', ' Where does it come from?', 'Service Center', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', '9168277713', 'abhijitkumbhar001@gmail.com', ' Where does it come from?', ' Where does it come from?', '2016-11-18 15:16:57', '0000-00-00 00:00:00', 4, 24),
(12, 'abhijit', 'What is Lorem Ipsum?', 'Showroom', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', '9168277713', 'abhijitkumbhar001@gmail.com', 'What is Lorem Ipsum?', 'What is Lorem Ipsum?', '2016-11-18 15:17:48', '0000-00-00 00:00:00', 4, 24),
(13, 'abhijit', 'What is Lorem Ipsum?', 'Showroom', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', '9168277713', 'abhijitkumbhar001@gmail.com', 'What is Lorem Ipsum?', 'Where does it come from?', '2016-11-18 15:18:53', '0000-00-00 00:00:00', 4, 24),
(14, 'abhijit', 'What is Lorem Ipsum?', 'Showroom', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', '9168277713', 'abhijitkumbhar001@gmail.com', 'werwer', 'Where does it come from?', '2016-11-18 15:19:43', '0000-00-00 00:00:00', 4, 24);

-- --------------------------------------------------------

--
-- Table structure for table `automobile_img`
--

DROP TABLE IF EXISTS `automobile_img`;
CREATE TABLE IF NOT EXISTS `automobile_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) DEFAULT NULL,
  `autoid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `autoid` (`autoid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `automobile_img`
--

INSERT INTO `automobile_img` (`id`, `path`, `autoid`) VALUES
(6, 'uploads/automobile/24/2016-11-18_20-46-57_0.jpg', 11),
(7, 'uploads/automobile/24/2016-11-18_20-47-48_0.jpg', 12),
(8, 'uploads/automobile/24/2016-11-18_20-48-53_0.jpg', 13),
(9, 'uploads/automobile/24/2016-11-18_20-49-43_0.jpg', 14);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `message` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE IF NOT EXISTS `hotel` (
  `hotelid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `address` text,
  `price` varchar(255) DEFAULT NULL,
  `description` text,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `amenities` text,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `offerend` datetime DEFAULT NULL,
  `category` tinyint(4) DEFAULT NULL,
  `userid` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`hotelid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotelid`, `name`, `title`, `type`, `address`, `price`, `description`, `mobile`, `email`, `amenities`, `city`, `area`, `date`, `offerend`, `category`, `userid`) VALUES
(9, 'abhijit', 'Joy Hotel', 'Hotel', 'Hadapsar, Pune', '', 'Enjoy 5 Strar leaving in Pune city', '9168277713', 'abhijitkumbhar001@gmail.com', 'Awesome ', 'Pune', 'Hadapsar', '2016-11-18 10:12:57', '0000-00-00 00:00:00', 2, 24),
(10, 'abhijit', 'Hotel JOY', 'Hotel', 'Chakan', '', 'Best hotel to stay', '9168277713', 'abhijitkumbhar001@gmail.com', 'NICE', 'Chakan', 'Chakan', '2016-11-18 10:14:58', '0000-00-00 00:00:00', 2, 24),
(11, 'abhijit', 'Where does it come from?', 'Hotel', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '9168277713', 'abhijitkumbhar001@gmail.com', 'Where does it come from?', 'Where does it come from?', 'Where does it come from?', '2016-11-18 15:14:49', '0000-00-00 00:00:00', 2, 24),
(12, 'abhijit', ' Where does it come from?', 'Hotel', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2300', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '9168277713', 'abhijitkumbhar001@gmail.com', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', ' Where does it come from?', ' Where does it come from?', '2016-11-18 15:15:51', '0000-00-00 00:00:00', 2, 24);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_img`
--

DROP TABLE IF EXISTS `hotel_img`;
CREATE TABLE IF NOT EXISTS `hotel_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) DEFAULT NULL,
  `hotelid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hotelid` (`hotelid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_img`
--

INSERT INTO `hotel_img` (`id`, `path`, `hotelid`) VALUES
(4, 'uploads/hotel/24/2016-11-18_15-42-57_0.jpg', 9),
(5, 'uploads/hotel/24/2016-11-18_15-44-58_0.jpg', 10),
(6, 'uploads/hotel/24/2016-11-18_20-44-49_0.jpg', 11),
(7, 'uploads/hotel/24/2016-11-18_20-45-51_0.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

DROP TABLE IF EXISTS `other`;
CREATE TABLE IF NOT EXISTS `other` (
  `otherid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `address` longtext,
  `description` longtext,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` longtext,
  `area` longtext,
  `offerend` datetime DEFAULT NULL,
  `category` tinyint(4) DEFAULT NULL,
  `userid` tinyint(4) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`otherid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`otherid`, `name`, `title`, `address`, `description`, `mobile`, `email`, `city`, `area`, `offerend`, `category`, `userid`, `date`) VALUES
(4, 'abhijit', 'What is Lorem Ipsum?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', '9168277713', 'abhijitkumbhar001@gmail.com', 'Where does it come from?', 'Where does it come from?', '0000-00-00 00:00:00', 5, 24, '2016-11-18 15:20:04');

-- --------------------------------------------------------

--
-- Table structure for table `realestate`
--

DROP TABLE IF EXISTS `realestate`;
CREATE TABLE IF NOT EXISTS `realestate` (
  `realid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `address` text,
  `builtup` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `description` text,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `amenities` text,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `offerend` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `category` tinyint(4) DEFAULT NULL,
  `userid` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`realid`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `realestate`
--

INSERT INTO `realestate` (`realid`, `name`, `title`, `type`, `address`, `builtup`, `price`, `description`, `mobile`, `email`, `amenities`, `city`, `area`, `date`, `offerend`, `category`, `userid`) VALUES
(25, 'Balu', 'Flat to rent', NULL, 'Pune', '', '', 'Nice flat', '48484848484', 'asdf', NULL, 'Pune', 'asdf', '2016-11-23 06:59:55', NULL, 0, 0),
(22, 'abhijit', 'Home to sell in pune', NULL, 'Kharadi, Pune', '2000', '', 'Nice and awesome home', '9168277713', 'abhijitkumbhar001@gmail.com', NULL, 'Pune', 'Kharadi', '2016-11-23 06:36:25', NULL, 0, 0),
(26, 'lkasdjf', 'kjsddfljasdf', NULL, 'ksdjf', 'asd', 'asdf', 'asdfa', 'dsfda', 'sff', NULL, 'asdfa', 'asdf', '2016-11-23 07:07:06', NULL, 0, 0),
(27, 'asdf', 'sqw', NULL, 'dwww', 'ee', '', 'eee', 'ee', 'eeee', NULL, 'asdf', 'eeeeee', '2016-11-23 07:08:10', NULL, 0, 0),
(28, 'asd', 'aaaaaaaaaa', NULL, 'aaaaaaaaaa', '', '', 'aaaaaaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaa', NULL, 'aaaaaaaaaa', 'aaaaaaaaaa', '2016-11-23 07:10:03', NULL, 0, 0),
(29, 'asdfsfd', 'sdfd', NULL, 'sdfs', '', '', 'sdf', 'sdf', 'sdf', NULL, 'sdf', 'sdf', '2016-11-23 07:12:19', NULL, 0, 0),
(30, 'abhijit', 'asdf', NULL, 'sdfdf', 'df', 'dfd', 'fdfdf', 'dfdf', 'ffffffffs', NULL, 'sssss', 'ssss', '2016-11-23 07:26:55', NULL, 0, 0),
(31, 'asdf', 'sdfd', NULL, 'fddfdffd', 'fdffdf', '', 'dfdf', 'fdfd', 'fdfdfdfd', NULL, 'fdfdfd', 'dffdf', '2016-11-23 07:33:46', NULL, 0, 0),
(32, 'asdf', 'dddd', NULL, 'dddddd', '', '', 'dddd', 'ddd', 'ddd', NULL, 'ddd', 'ddd', '2016-11-23 07:34:38', NULL, 0, 0),
(33, 'asdfsfdd', 'dd', NULL, 'ddddd', '', '', 'dddd', 'dfdfddf', 'dfdf', NULL, 'dfdfd', 'fdffd', '2016-11-23 07:35:20', NULL, 0, 0),
(36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-11-23 12:17:00', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `real_img`
--

DROP TABLE IF EXISTS `real_img`;
CREATE TABLE IF NOT EXISTS `real_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) DEFAULT NULL,
  `realid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `real_id` (`realid`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `real_img`
--

INSERT INTO `real_img` (`id`, `path`, `realid`) VALUES
(40, 'uploads/real/24/2016-11-18_15-24-08_0.jpg', 197),
(41, 'uploads/real/24/2016-11-18_15-24-08_1.jpg', 197),
(42, 'uploads/real/24/2016-11-18_15-31-12_0.jpg', 199),
(43, 'uploads/real/24/2016-11-18_15-31-12_1.jpg', 199),
(44, 'uploads/real/24/2016-11-18_20-38-06_0.jpg', 200),
(45, 'uploads/real/24/2016-11-18_20-38-54_0.jpg', 201),
(46, 'uploads/real/101/2016-11-23_09-44-36_0.jpg', 7),
(47, 'uploads/real/0/2016-11-23_09-54-28_0.jpg', 17),
(48, 'uploads/real/0/2016-11-23_09-54-28_1.jpg', 17),
(49, 'uploads/real/0/2016-11-23_10-12-50_0.jpg', 20),
(50, 'uploads/real/0/2016-11-23_10-26-41_0.jpg', 21),
(51, 'uploads/real/0/2016-11-23_10-28-35_0.jpg', 23),
(52, 'uploads/real/101/2016-11-23_10-49-58_0.jpg', 24),
(53, 'uploads/real/0/2016-11-23_12-29-55_0.jpg', 25),
(54, 'uploads/real/0/2016-11-23_12-37-06_0.jpg', 26),
(55, 'uploads/real/0/2016-11-23_12-38-10_0.jpg', 27),
(56, 'uploads/real/0/2016-11-23_12-40-03_0.jpg', 28),
(57, 'uploads/real/0/2016-11-23_12-42-19_0.jpg', 29),
(58, 'uploads/real/0/2016-11-23_12-56-55_0.jpg', 30),
(59, 'uploads/real/0/2016-11-23_13-03-46_0.jpg', 31),
(60, 'uploads/real/0/2016-11-23_13-04-38_0.jpg', 32),
(61, 'uploads/real/0/2016-11-23_13-05-20_0.jpg', 33),
(62, 'uploads/real/0/2016-11-23_13-05-43_0.jpg', 34),
(63, 'uploads/real/0/2016-11-23_13-08-51_0.jpg', 35);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` longtext CHARACTER SET utf8,
  `mobile` longtext CHARACTER SET utf8,
  `email` longtext CHARACTER SET utf8,
  `password` longtext CHARACTER SET utf8,
  `otp` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `city` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`reg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `username`, `mobile`, `email`, `password`, `otp`, `status`, `address`, `city`) VALUES
(0, 'abs', '9168277713', 'abhijitkumbhar001@gmail.com', '33a485cb146e1153c69b588c671ab474f2e5b800', NULL, 1, 'Karad', 'Karad'),
(101, 'balu', NULL, 'balu@gmail.com', '33a485cb146e1153c69b588c671ab474f2e5b800', NULL, 1, 'Khadaki', 'Nagar'),
(1, 'rahul', '9876543210', 'rahul@gmail.com', '33a485cb146e1153c69b588c671ab474f2e5b800', NULL, 1, 'Kolhapur', 'Kolhapur');

-- --------------------------------------------------------

--
-- Table structure for table `travelling`
--

DROP TABLE IF EXISTS `travelling`;
CREATE TABLE IF NOT EXISTS `travelling` (
  `travelid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `address` text,
  `price` varchar(255) DEFAULT NULL,
  `description` text,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `offerend` datetime DEFAULT NULL,
  `category` tinyint(4) DEFAULT NULL,
  `userid` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`travelid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travelling`
--

INSERT INTO `travelling` (`travelid`, `name`, `title`, `address`, `price`, `description`, `mobile`, `email`, `city`, `area`, `date`, `offerend`, `category`, `userid`) VALUES
(11, 'abhijit', 'Pune to Kolhaput', 'Kharadi', '', '', '9168277713', 'abhijitkumbhar001@gmail.com', 'Pune', 'Kharadi', '2016-11-18 14:57:27', '0000-00-00 00:00:00', 3, 24),
(12, 'abhijit', 'TrimiNits Travellers', 'Pune', '', 'We are the best travell agency in pune area \r\n> Just Rs 8/- per 1 Km', '9168277713', 'abhijitkumbhar001@gmail.com', 'Pune', 'Pune', '2016-11-18 14:58:46', '0000-00-00 00:00:00', 3, 24),
(13, 'abhijit', 'Minolsa Airlines', 'Travel and Fly to hell', '', '', '9168277713', 'abhijitkumbhar001@gmail.com', 'Kolhapur', 'RK Nagae', '2016-11-18 14:59:39', '0000-00-00 00:00:00', 3, 24),
(14, 'abhijit', 'Zeena World', 'Zeena World, Karad', '', '', '9168277713', 'abhijitkumbhar001@gmail.com', 'Karad', 'Karad', '2016-11-18 15:01:41', '0000-00-00 00:00:00', 3, 24);

-- --------------------------------------------------------

--
-- Table structure for table `travelling_img`
--

DROP TABLE IF EXISTS `travelling_img`;
CREATE TABLE IF NOT EXISTS `travelling_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) DEFAULT NULL,
  `travelid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `travelid` (`travelid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travelling_img`
--

INSERT INTO `travelling_img` (`id`, `path`, `travelid`) VALUES
(3, 'uploads/travelling/24/2016-11-18_20-27-27_0.jpg', 11),
(4, 'uploads/travelling/24/2016-11-18_20-28-46_0.jpg', 12),
(5, 'uploads/travelling/24/2016-11-18_20-29-39_0.jpg', 13),
(6, 'uploads/travelling/24/2016-11-18_20-31-41_0.jpg', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tution`
--

DROP TABLE IF EXISTS `tution`;
CREATE TABLE IF NOT EXISTS `tution` (
  `tutid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `address` text,
  `description` text,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `offerend` datetime DEFAULT NULL,
  `category` tinyint(4) DEFAULT NULL,
  `userid` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`tutid`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tution`
--

INSERT INTO `tution` (`tutid`, `name`, `title`, `address`, `description`, `mobile`, `email`, `city`, `area`, `date`, `offerend`, `category`, `userid`) VALUES
(16, 'abhijit', 'MPSC Classes', 'Karad ', 'Best\r\n100+ selected from our class', '9168277713', 'abhijitkumbhar001@gmail.com', 'Karad', 'Karad', '2016-11-18 15:03:18', '0000-00-00 00:00:00', 1, 24),
(15, 'abhijit', 'JAVA tution', 'Karve Road', 'Best Java tutions', '9168277713', 'abhijitkumbhar001@gmail.com', 'Pune', 'Karvenagar', '2016-11-18 10:07:39', '0000-00-00 00:00:00', 1, 24),
(17, 'abhijit', 'Where does it come from?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '9168277713', 'abhijitkumbhar001@gmail.com', 'Where does it come from?', 'Where does it come from?', '2016-11-18 15:09:59', '0000-00-00 00:00:00', 1, 24),
(18, 'abhijit', 'Where does it come', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '9168277713', 'abhijitkumbhar001@gmail.com', 'Where does it come from?', 'Where does it come from?', '2016-11-18 15:10:24', '0000-00-00 00:00:00', 1, 24);

-- --------------------------------------------------------

--
-- Table structure for table `tut_img`
--

DROP TABLE IF EXISTS `tut_img`;
CREATE TABLE IF NOT EXISTS `tut_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) DEFAULT NULL,
  `tutid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tutid` (`tutid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tut_img`
--

INSERT INTO `tut_img` (`id`, `path`, `tutid`) VALUES
(10, 'uploads/tution/24/2016-11-18_15-37-39_0.jpg', 15),
(11, 'uploads/tution/24/2016-11-18_20-33-18_0.jpg', 16),
(12, 'uploads/tution/24/2016-11-18_20-39-59_0.jpg', 17),
(13, 'uploads/tution/24/2016-11-18_20-40-59_0.jpg', 18);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
