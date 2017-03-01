-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 01, 2017 at 10:26 AM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `CityRealty`
--

-- --------------------------------------------------------

--
-- Table structure for table `BFloorTypeChoices`
--

CREATE TABLE IF NOT EXISTS `BFloorTypeChoices` (
  `FloorTypeNo` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`FloorTypeNo`),
  UNIQUE KEY `Description` (`Description`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `BFloorTypeChoices`
--

INSERT INTO `BFloorTypeChoices` (`FloorTypeNo`, `Description`) VALUES
(1, 'Παρκέ'),
(2, 'Συνθετικό παρκέ'),
(3, 'Παραδοσιακό παρκέ'),
(4, 'Πλακάκια'),
(5, 'Μάρμαρα'),
(6, 'Τσιμεντοκονίαμα');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
