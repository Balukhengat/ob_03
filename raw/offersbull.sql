-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2016 at 04:14 PM
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
  `lastlogin` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `useragent` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`, `lastlogin`, `ip`, `useragent`) VALUES
(1, 'rahul', 'rahul', NULL, NULL, NULL);

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
  `img1` varchar(255) DEFAULT NULL,
  `lattitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`autoid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `automobile`
--

INSERT INTO `automobile` (`autoid`, `name`, `title`, `type`, `address`, `description`, `mobile`, `email`, `city`, `area`, `date`, `img1`, `lattitude`, `longitude`, `tags`) VALUES
(1, 'abhijit auto', 'Car service', '', '', 'We provide best car services.', '', '', '', '', '2016-09-29 06:51:48', NULL, '', '', ''),
(3, 'bvalu', 'fasdf', 'sdf', 'asdfasdfa', '', '', '', '', '', '2016-09-29 07:07:26', NULL, '', '', ''),
(5, 'Honey', 'Honeys car wash', 'Car washing center', 'Kadegaon, Sangli', 'We provide best car wash in cheep rate...', '9876543211', 'Honey@carwash.com', 'Kadegaon', '', '2016-09-29 07:17:40', NULL, '', '', 'Car wash, honey, car services');

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `automobile_img`
--

INSERT INTO `automobile_img` (`id`, `path`, `autoid`) VALUES
(1, 'uploads/automobile/29-Sep-16/1-06-51-56-0-Youtube-PNG-Clipart.png', 1),
(2, 'uploads/automobile/29-Sep-16/2-07-06-50-0-19323130-fruits-and-vegetables-background.jpg', 2),
(3, 'uploads/automobile/29-Sep-16/3-07-09-08-0-concrete wall.jpg 1.jpg', 3),
(4, 'uploads/automobile/29-Sep-16/4-07-17-13-0-Civil.jpg', 4),
(5, 'uploads/automobile/29-Sep-16/5-07-18-05-0-3D-android-with-backpack.jpg', 5);

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
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `img4` varchar(255) DEFAULT NULL,
  `lattitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`hotelid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotelid`, `name`, `title`, `type`, `address`, `price`, `description`, `mobile`, `email`, `amenities`, `city`, `area`, `date`, `img1`, `img2`, `img3`, `img4`, `lattitude`, `longitude`, `tags`) VALUES
(1, 'hotel', 'hotel ', '', '', '', '', '', '', '', '', '', '2016-09-28 11:25:01', NULL, NULL, NULL, NULL, '', '', ''),
(4, 'asdfasd', 'asdfdf', '', '', '', '', '', '', '', '', '', '2016-09-28 11:50:54', NULL, NULL, NULL, NULL, '', '', ''),
(3, 'hotel 2', 'asdfsdf', '', '', '', '', '', '', '', '', '', '2016-09-28 11:39:41', NULL, NULL, NULL, NULL, '', '', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_img`
--

INSERT INTO `hotel_img` (`id`, `path`, `hotelid`) VALUES
(1, 'uploads/hotel/28-Sep-16/2-11-26-46-0-Civil.jpg', 2),
(2, 'uploads/hotel/28-Sep-16/3-11-39-46-0-a.jpg', 3),
(3, 'uploads/hotel/28-Sep-16/4-11-51-26-0-Youtube-PNG-Clipart.png', 4);

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
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `img4` varchar(255) DEFAULT NULL,
  `lattitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`realid`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `realestate`
--

INSERT INTO `realestate` (`realid`, `name`, `title`, `type`, `address`, `builtup`, `price`, `description`, `mobile`, `email`, `amenities`, `city`, `area`, `date`, `img1`, `img2`, `img3`, `img4`, `lattitude`, `longitude`, `tags`) VALUES
(29, 'hotel', 'hotel ', '', '', '', '', '', '43333333', '', '', '', '', '2016-09-28 11:22:37', NULL, NULL, NULL, NULL, '', '', ''),
(21, 'honey', 'row house near Narhe', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '2016-09-26 08:54:56', NULL, NULL, NULL, NULL, 'a', 'a', 'a'),
(22, 'abs', '2BHK Flats (Just 5 left hurry up)', 'a', 'Pimpri- chinchavad', 'a', 'a', 'a', 'a', 'abhijitkumbhar@offersbull.com', 'a', 'a', 'a', '2016-09-27 04:46:27', NULL, NULL, NULL, NULL, 'a', 'a', 'a'),
(23, 'rahul', 'Row house near Karve road', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '2016-09-27 07:35:46', NULL, NULL, NULL, NULL, 'a', 'a', 'a'),
(24, 'balu', '1 BHK Flat, Karvenagar', 'a', 'a', 'a', 'a', 'a', '98888888', 'a', 'a', 'a', 'a', '2016-09-27 08:18:35', NULL, NULL, NULL, NULL, 'a', 'a', 'a');

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
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `real_img`
--

INSERT INTO `real_img` (`id`, `path`, `realid`) VALUES
(3, 'uploads/realestate/27-Sep-16/22-12-56-29-0-1.png', 22),
(4, 'uploads/realestate/27-Sep-16/22-12-56-29-1-2.png', 22),
(5, 'uploads/realestate/27-Sep-16/22-12-56-29-2-3.png', 22),
(6, 'uploads/realestate/27-Sep-16/22-12-56-29-3-4.png', 22),
(7, 'uploads/realestate/27-Sep-16/22-12-58-50-0-logo.png', 22),
(8, 'uploads/realestate/27-Sep-16/22-01-03-04-0-gradient-black-background-wallpaper-2.jpg', 22),
(9, 'uploads/realestate/27-Sep-16/23-01-06-03-0-beechlawn-organic-farm-text-logo1.png', 23),
(10, 'uploads/realestate/27-Sep-16/24-01-48-58-0-concrete wall.jpg 1.jpg', 24),
(11, 'uploads/realestate/27-Sep-16/25-05-04-16-0-a.jpg', 25),
(12, 'uploads/realestate/27-Sep-16/26-05-09-00-0-a.jpg', 26),
(13, 'uploads/realestate/27-Sep-16/27-05-49-44-0-a.jpg', 27),
(14, 'uploads/realestate/27-Sep-16/28-05-51-15-0-a.jpg', 28),
(16, 'uploads/realestate/28-Sep-16/29-11-22-54-0-', 29);

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
  `dept_date` date DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`travelid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travelling`
--

INSERT INTO `travelling` (`travelid`, `name`, `title`, `address`, `price`, `description`, `mobile`, `email`, `city`, `area`, `dept_date`, `time`, `date`, `tags`) VALUES
(1, 'abhijit', 'Mumbai to Pune', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '2015-02-10', 'a', '2011-02-02 00:00:00', 'a'),
(5, 'asdfasd', 'asdfasd', '', '', '', '', '', '', '', '2016-09-29', '', '2016-09-29 06:29:18', ''),
(4, 'balu', 'Pune to Kolhapur', 'asdf', '', '', '', '', '', '', '2016-09-08', '', '2016-09-29 05:20:40', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travelling_img`
--

INSERT INTO `travelling_img` (`id`, `path`, `travelid`) VALUES
(1, 'uploads/travelling/29-Sep-16/3-04-59-01-0-Civil.jpg', 3),
(2, 'uploads/travelling/29-Sep-16/4-05-25-07-0-19323130-fruits-and-vegetables-background.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tution`
--

DROP TABLE IF EXISTS `tution`;
CREATE TABLE IF NOT EXISTS `tution` (
  `tutid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `address` text,
  `price` varchar(255) DEFAULT NULL,
  `description` text,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `lattitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tutid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tution`
--

INSERT INTO `tution` (`tutid`, `name`, `title`, `type`, `address`, `price`, `description`, `mobile`, `email`, `city`, `area`, `date`, `img1`, `img2`, `lattitude`, `longitude`, `tags`) VALUES
(7, 'rrrrrrrr', 'wefdfdsff', '', '', '', '', '3847582347', '', '', '', '2016-09-28 10:37:39', NULL, NULL, '', '', ''),
(6, 'ddddd', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, '', '', ''),
(3, 'alksjdf', 'jlskjdfasdf', 'rent', 'asdfasdf', '454544', '', 'asdfsdf', '', '', '', NULL, NULL, NULL, '', '', ''),
(4, 'asdfasd', 'asdfasd', 'df', 'fsdfdsf', 'ddf', '', '', '', '', '', NULL, NULL, NULL, '', '', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tut_img`
--

INSERT INTO `tut_img` (`id`, `path`, `tutid`) VALUES
(1, 'uploads/tution/27-Sep-16/2-07-02-42-0-Youtube-PNG-Clipart.png', 2),
(2, 'uploads/tution/27-Sep-16/3-08-51-40-0-uitWebandro.jpg', 3),
(3, 'uploads/tution/27-Sep-16/4-08-53-14-0-uityoutube.jpg', 4),
(4, 'uploads/tution/27-Sep-16/5-08-56-47-0-UIT.png', 5),
(5, 'uploads/tution/28-Sep-16/6-10-34-01-0-Youtube-PNG-Clipart.png', 6),
(6, 'uploads/tution/28-Sep-16/7-10-37-48-0-UIT.png', 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;