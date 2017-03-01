-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 01, 2017 at 10:25 AM
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
-- Table structure for table `LDetailsChoices`
--

CREATE TABLE IF NOT EXISTS `LDetailsChoices` (
  `DetailNo` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(35) NOT NULL,
  PRIMARY KEY (`DetailNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `LDetailsChoices`
--

INSERT INTO `LDetailsChoices` (`DetailNo`, `Description`) VALUES
(1, 'Με βάθος'),
(2, 'Επικλινές'),
(4, 'Αμφιθεατρικό'),
(6, 'Γωνιακό'),
(7, 'Περιφραγμένο'),
(8, 'Ορθογώνιο'),
(9, 'Τετραγωνισμένο'),
(10, 'Επίπεδο');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
