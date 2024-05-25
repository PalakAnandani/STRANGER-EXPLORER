-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2024 at 11:14 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clg_traveller`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_locations`
--

CREATE TABLE IF NOT EXISTS `add_locations` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `ldate` varchar(12) NOT NULL,
  `area` varchar(50) NOT NULL,
  `subarea` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `title` varchar(70) NOT NULL,
  `description` varchar(500) NOT NULL,
  `glink` varchar(200) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `add_locations`
--

INSERT INTO `add_locations` (`lid`, `ldate`, `area`, `subarea`, `photo`, `title`, `description`, `glink`) VALUES
(1, '2024-04-06', 'Dharampeth', 'Bunglows', 'eLighthouse.jpg', 'abc', 'g jkh hkj h', 'http://maps.google.com/?q=21.1429706,79.0642891'),
(2, '2024-04-07', 'Chhaoni', 'Fort', 'eTulips.jpg', 'HIstoric Fort', 'We are a group of volunteers who review and approve themes submitted to be included in the official WordPress Theme directory.', 'http://maps.google.com/?q=21.1458004,79.0881546'),
(3, '2024-04-07', 'Dharampeth', 'Fort', 'eDesert.jpg', 'New Fort', 'We help build and maintain default themes.\r\n\r\nThe primary focus of the team is to help theme authors transition to block-based themes.', 'http://maps.google.com/?q=21.1458004,79.0881546');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(12) NOT NULL,
  `password` varchar(11) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_area`
--

CREATE TABLE IF NOT EXISTS `tbl_area` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(30) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_area`
--

INSERT INTO `tbl_area` (`aid`, `area`) VALUES
(1, 'Manewada'),
(2, 'Dharampeth'),
(3, 'Chhaoni');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE IF NOT EXISTS `tbl_book` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `hidid` int(11) NOT NULL,
  `hidname` varchar(50) NOT NULL,
  `hidphoto` varchar(100) NOT NULL,
  `hidarea` varchar(40) NOT NULL,
  `hidsubarea` varchar(40) NOT NULL,
  `hidtitle` varchar(40) NOT NULL,
  `hiddesc` varchar(500) NOT NULL,
  `bdate` varchar(14) NOT NULL,
  `btime` varchar(10) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`bid`, `hidid`, `hidname`, `hidphoto`, `hidarea`, `hidsubarea`, `hidtitle`, `hiddesc`, `bdate`, `btime`) VALUES
(1, 1, 'Anup Kumar', 'eKoala.jpg', 'Dharampeth', 'Fort', 'New Fort', 'We help build and maintain default themes.\r\n\r\nThe primary focus of the team is to help theme authors transition to block-based themes.', '2024-04-08', '10 AM'),
(2, 2, 'Pankaj jha', 'eLighthouse.jpg', 'Dharampeth', 'Fort', 'New Fort', 'We help build and maintain default themes.\r\n\r\nThe primary focus of the team is to help theme authors transition to block-based themes.', '2024-04-08', '10 AM'),
(3, 1, 'Anup Kumar', 'eKoala.jpg', 'Chhaoni', 'Fort', 'HIstoric Fort', 'We are a group of volunteers who review and approve themes submitted to be included in the official WordPress Theme directory.', '2024-04-09', '9 AM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE IF NOT EXISTS `tbl_enquiry` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `edate` varchar(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `msg` varchar(300) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`eid`, `edate`, `name`, `contact`, `msg`) VALUES
(1, '2024-04-06', 'Anup K', '9579047478', 'Hello I am a good person');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE IF NOT EXISTS `tbl_message` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `mdate` varchar(12) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ouid` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`mid`, `mdate`, `user_id`, `name`, `ouid`, `message`) VALUES
(1, '2024-04-06', 1, 'Anup Kumar', 2, 'Hello i want to go with u'),
(2, '2024-04-06', 2, 'Pankaj jha', 1, 'there is something new information');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(44) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `name`, `contact`, `address`, `city`, `photo`, `username`, `password`) VALUES
(1, 'Anup Kumar', '9579047478', 'v ghgg g 7676 bnbn bb gh gh 123', 'Nagpur', 'eKoala.jpg', 'anup', 'a123'),
(2, 'Pankaj jha', '676767', 'ghgy68 bb 868 bb ', 'Bhandara', 'eLighthouse.jpg', 'pankaj', 'p123'),
(3, 'Neha Sharma', '7711', 'bungloe no 33, new colony, ngp 10', 'Nagpur', 'eJellyfish.jpg', 'neha', 'n123');
