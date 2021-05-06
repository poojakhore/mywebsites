-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2021 at 03:27 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `madhumitra_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerorder`
--

CREATE TABLE IF NOT EXISTS `customerorder` (
  `order_id` int(30) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `customerorder`
--

INSERT INTO `customerorder` (`order_id`, `order_date`, `customer_name`, `itemname`, `unit`, `qty`) VALUES
(83, '2021-05-02', 'Pooja Khore', 'Watermelon', 'No', '5'),
(82, '2021-04-14', 'Pooja Khore', 'BANANA', 'Dozen', '2'),
(81, '2021-03-23', 'Prof. Sachin Khot', 'à¤ªà¤¾à¤²à¤•', 'No', '5'),
(80, '2021-03-22', 'Prof. Sachin Khot', 'BANANA', 'No', '12'),
(79, '2021-03-22', 'Prof. Sachin Khot', 'NARAL', 'No', '5'),
(78, '2021-03-20', 'Prof. Sachin Khot', 'BANANA', 'No', '12'),
(77, '2021-03-20', 'Prof. Sachin Khot', 'NARAL', 'No', '11'),
(76, '2021-03-20', 'Prof. Sachin Khot', 'PAPAI', 'No', '1'),
(75, '2021-02-25', 'Pooja Khore', 'BANANA', 'No', '6'),
(74, '2021-02-25', 'Pooja Khore', 'NARAL', 'No', '5'),
(73, '2021-02-25', 'Pooja Khore', 'Papai', 'No', '2'),
(72, '2021-02-25', 'Pooja Khore', 'KOBI', 'Kg', '1'),
(71, '2021-02-25', 'Prof. Sachin Khot', 'BANANA', 'No', '12');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `udate` date NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `name`, `contact`, `comment`, `udate`) VALUES
(1, 'pooja khore', '9765626598', 'very good', '2021-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `item_master`
--

CREATE TABLE IF NOT EXISTS `item_master` (
  `itemid` int(30) NOT NULL AUTO_INCREMENT,
  `iname` varchar(50) NOT NULL,
  `icategory` varchar(50) NOT NULL,
  `iunit` varchar(50) NOT NULL,
  `iprice` int(50) NOT NULL,
  `istatus` varchar(30) NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `item_master`
--

INSERT INTO `item_master` (`itemid`, `iname`, `icategory`, `iunit`, `iprice`, `istatus`) VALUES
(6, 'KOBI', 'Vegetables', 'Kg', 50, 'N'),
(2, 'PAPAI', 'Fruits', 'No', 500, 'Y'),
(4, 'NARAL', 'Other', 'No', 10, 'Y'),
(5, 'BANANA', 'Fruits', 'Dozen', 600, 'Y'),
(8, 'Watermelon', 'Fruits', 'No', 1000, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uname` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `pwd`, `role`) VALUES
('pk', 'pk', 'member'),
('mh', 'mh', 'member'),
('sir', 'sir', 'member'),
('admin', 'admin', 'admin'),
('maam', 'e051d8d20f76862b5c94', 'member'),
('priti', 'p', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `member_profile`
--

CREATE TABLE IF NOT EXISTS `member_profile` (
  `m_uname` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `delivery` varchar(30) DEFAULT NULL,
  `udate` date DEFAULT NULL,
  PRIMARY KEY (`m_uname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_profile`
--

INSERT INTO `member_profile` (`m_uname`, `fullname`, `contact`, `address`, `delivery`, `udate`) VALUES
('pk', 'Pooja Khore', '9765626598', 'Market Yard Sangli', 'Y', '2021-04-02'),
('mh', 'Monika Hasabe', '9878451605', 'Khanapur Vita', 'Y', '2021-02-24'),
('sir', 'Prof. Sachin Khot', '9878452689', 'Market Yard Sangli', 'N', '2021-02-24'),
('maam', '', '', '', NULL, NULL),
('priti', 'priti khore', '9378504656', 'miraj', 'Y', '2021-04-28');
