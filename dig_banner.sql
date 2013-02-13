-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 13, 2013 at 02:09 PM
-- Server version: 5.5.21
-- PHP Version: 5.3.9-ZS5.6.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wp_kuassa`
--

-- --------------------------------------------------------

--
-- Table structure for table `dig_banner`
--

DROP TABLE IF EXISTS `dig_banner`;
CREATE TABLE IF NOT EXISTS `dig_banner` (
  `banner_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `banner_name` varchar(255) DEFAULT NULL,
  `banner_link` text,
  `banner_status` smallint(6) DEFAULT '1',
  `banner_onpage` varchar(255) DEFAULT NULL,
  `banner_dateadd` datetime DEFAULT NULL,
  `banner_dateupdate` datetime DEFAULT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
