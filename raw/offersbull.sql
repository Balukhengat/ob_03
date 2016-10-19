-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2016 at 02:50 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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
  `lattitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `offer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`autoid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `automobile`
--

INSERT INTO `automobile` (`autoid`, `name`, `title`, `type`, `address`, `description`, `mobile`, `email`, `city`, `area`, `date`, `lattitude`, `longitude`, `tags`, `offer`) VALUES
(1, 'shree car services', 'best car service providers in pune', 'car', 'Pune', 'car repair, car services, car wash , car paint', '9898989898', 'shreecar@gmail.com', 'pune', 'hadapsar', '2016-10-04 14:28:08', NULL, NULL, 'car service', 'car servicing just in Rs: 500'),
(2, 'Agustin Car Care ', 'Bosch car service\r\n1 review', 'car', 'Baner - Pashan Link Rd, Baner, Pune, Maharashtra 411045', 'Car Service Station', '9422036327', NULL, 'Pune', 'Baner', '2016-10-19 16:17:41', NULL, NULL, 'car service', ''),
(6, 'R K auto', 'R. K. Auto Services', 'car', '1034, Annapurna Model Colony, Sahasrabuddhe Rd, Model Colony, Shivajinagar, Pune, Maharashtra 411016', 'Car Service Station', '020 2565 6640', NULL, 'Pune', 'Shivajinagar', '2016-10-19 16:19:43', NULL, NULL, 'car', NULL),
(7, '3M Car Care', 'Car wash', 'car', 'Shop No 2, Iriz Building, Below Calsoft, Pashan Baner Link Road, Pashan, Pune, Maharashtra 411021', 'car wash', '91589 66624', NULL, 'Pune', 'pashan', '2016-10-19 16:22:07', NULL, NULL, 'car wash', NULL);

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
  `lattitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `offer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`hotelid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotelid`, `name`, `title`, `type`, `address`, `price`, `description`, `mobile`, `email`, `amenities`, `city`, `area`, `date`, `lattitude`, `longitude`, `tags`, `offer`) VALUES
(5, 'Sayaji Hotel, Pune', 'Sayaji Hotel, Pune', 'hotel', '135 / 136, Mumbai-Banglore Bypass Hwy,, (Off Hinjewadi) Wakad, Pimpri-Chinchwad, Maharashtra 411057', NULL, NULL, '9876543212', NULL, 'Off the AH47 highway, this contemporary hotel with a glass and concrete exterior is 8 km from Balaji Mandir temple and 25 km from Pune Airport.\r\nThe relaxed rooms and suites feature free Wi-Fi, stocked minibars, fruit baskets, and tea and coffeemaking facilities, as well as flat-screen TVs and computers. Suites add lounges with massage chairs. Butler service is offered.\r\nEach floor is themed and has its own reception, staff and lounge. Freebies include breakfast, welcome drinks, parking and an airport shuttle. There are also 2 restaurants, plus an outdoor rooftop pool with a bar. Gym access, a spa and a steam room are available for a surcharge.', 'Pimpri', 'wakad', '2016-10-19 16:26:29', NULL, NULL, 'hotel', NULL),
(6, 'Pancard Clubs, Pune', 'Pancard Clubs, Pune', 'hotel', '8/1, Baner Hills, Baner, Baner Gaon, Baner, Pune, Maharashtra 411045', NULL, NULL, '020 6725 1111', NULL, 'Laid-back hotel offering international dining, plus a buzzy nightclub with a revolving dance floor.', 'Pune', 'Baner', '2016-10-19 16:28:00', NULL, NULL, 'hotel', NULL),
(7, 'Hotel Aundh Retreat', 'Hotel Aundh Retreat', 'hotel', 'Aundh Dp Road, Behind Kaka Halwai, Aundh, Raagdari Society, Aundh, Pune, Maharashtra 411007', NULL, NULL, '020 4122 2201', NULL, 'Reasonable rates and friendly staff', 'Pune', 'Aundh', '2016-10-19 16:29:16', NULL, NULL, 'hotel', NULL),
(8, 'Gordon House Hotel', 'Gordon House Hotel', 'hotel', '132, Ganeshkhind Rd, Premnagar, Ashok Nagar, Premnagar, Ashok Nagar, Pune, Maharashtra 411016', NULL, NULL, '020 6604 4244', NULL, 'nice and best in less cost', 'Pune', 'Ashoknagar', '2016-10-19 16:30:44', NULL, NULL, NULL, NULL);

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
  `lattitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `offer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`realid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `realestate`
--

INSERT INTO `realestate` (`realid`, `name`, `title`, `type`, `address`, `builtup`, `price`, `description`, `mobile`, `email`, `amenities`, `city`, `area`, `date`, `lattitude`, `longitude`, `tags`, `offer`) VALUES
(1, 'rahul', 'Room in Hadapasar', 'rent', 'Pune, Hadapasar', '200', '5000', 'Nice room ', '9898987654', 'rahulsrooms@gmail.com', 'fan,ac', 'pune', 'hadapsar', '2016-10-16 16:05:59', NULL, NULL, 'room', NULL),
(2, 'hemant', '1 BHK flat', 'rent', 'Pune, KarveNagar', '650', '10000', 'Nice Flat at low cost', '9876765434', 'hemantsflat@gmail.com', 'Bus Stop', 'pune', 'Karvenagar', '2016-10-08 16:09:02', NULL, NULL, 'flat', NULL),
(3, 'abhijit', '2 BHK flat', 'purchase', 'Pimpri, Morwadi', '800', '8000000', 'New luxarious flat', '9181928190', 'absflat@flats.com', 'National Highway 5KM, Pune airport 20 Km', 'Pimpri', 'Morwadi', '2016-10-19 14:38:25', NULL, NULL, 'flat', NULL),
(4, 'Ashiyana Real Estate', 'Real Estate Agency', 'purchase', 'S No 53, Karve Nagar, Opposite Karve Social Inst, Hingane Home Colony, Karve Nagar, Pune, ', NULL, NULL, NULL, '020 2545 4934', NULL, NULL, 'Pune', 'Karvenagar', '2016-10-19 16:37:18', NULL, NULL, 'flat', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

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
  `offer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`travelid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travelling`
--

INSERT INTO `travelling` (`travelid`, `name`, `title`, `address`, `price`, `description`, `mobile`, `email`, `city`, `area`, `dept_date`, `time`, `date`, `tags`, `offer`) VALUES
(6, 'Prasanna Travels', 'Prasanna Travels', 'Paud Rd, Bhusari Colony, Kothrud, Pune, Maharashtra 411038', NULL, 'we provide best travelling experience in less rates', '095756 52281', NULL, 'Pune', 'Kothrud', '2016-10-19', '6 pm', '2016-10-19 16:40:52', 'pune', NULL),
(7, 'Cox and Kings Ltd.', 'Travel Agency', NULL, NULL, 'travel agency', '020 6530 3081', NULL, 'Pune', 'Baner', NULL, NULL, NULL, NULL, NULL),
(8, 'Shreenath Tours And Travels', 'Shreenath Tours And Travels Pune - Kolhapur Daily', 'Parihar Chowk, Aundh, Hotel Shreenath Palace, Aundh, Sindh Society, Ward No. 8, Sadhu Vasvani Nagar, Aundh, Pune, Maharashtra 411007', NULL, 'Pune - Kolhapur', '93710 46368', NULL, 'Pune', 'Aundh', NULL, '8 am', NULL, 'pune, kolhapur', NULL),
(9, 'MD travels', 'Travelling agency', 'Pune', NULL, 'Pune - Mumbai | Pune - Kolhapur', '8337377383', NULL, 'Pune', 'Bawadhan', NULL, NULL, NULL, NULL, NULL);

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
  `lattitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `offer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tutid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tution`
--

INSERT INTO `tution` (`tutid`, `name`, `title`, `type`, `address`, `price`, `description`, `mobile`, `email`, `city`, `area`, `date`, `lattitude`, `longitude`, `tags`, `offer`) VALUES
(8, 'Java By Kiran', 'Java and Selenium', '', 'No.53, Karve Road-Karve Nagar Bus Stop, Above Pragati Hardware, Sramik Vasahat, Karve Nagar, Pune, Maharashtra 411052', NULL, 'Best tution for java and seleniun', '88888 09416', 'kiranjava@tution.com', 'Pune', 'Karve Nagar', '2016-10-19 16:47:01', NULL, NULL, 'Java', NULL),
(9, 'MindScripts Technologies', 'Java', NULL, '2nd Floor, Siddharth Hall, Karve Road, Near Ranka Jewellers, Behind HP Petrol Pump, Kothrud, Khilarewadi, Erandwane, Pune, Maharashtra 411004', NULL, 'We provide java tution plus placements too ? :(', '97645 60238', NULL, 'Pune', 'Kothrud', '2016-10-19 16:48:50', NULL, NULL, 'Java', NULL),
(10, '7 Chords Music and Arts Academy', 'Guitar training institute', NULL, 'Sr. No.-163/2, Plot No-61, Sparkles Nursery School, Opposite DAV Public School,, Kotbagi Hospital Lane, Near Indus Ind Bank, Harmony Society, Ward No. 8, Wireless Colony, Aundh, Pune, Maharashtra 411007', NULL, 'Guitar training', '96895 63377 ', NULL, 'Pune', 'Aundh', '2016-10-19 16:50:24', NULL, NULL, 'Guitar', NULL),
(11, 'Igniters Academy of Performing Arts', 'Singing class', NULL, '\r\nIgniters Academy of Performing Arts Office no. 22, 2nd Floor, Heritage Plaza, Near Morya Hospital,, Link Road, Chinchwad Gaon, Chinchwad, Pimpri-Chinchwad, Maharashtra 411033', NULL, 'Sing like pro', '96042 34779', NULL, 'Chinchwad', 'Chinchwad gaon', '2016-10-19 16:51:52', NULL, NULL, 'Singing', NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `mobile` longtext,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'0',
  `lastlogin` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `mobile`, `email`, `password`, `status`, `lastlogin`) VALUES
(1, 'abs', '9168277713', 'abhijitkumbhar001@gmail.com', 'abs', b'0', '2016-10-18 09:54:41');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
