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
-- Table structure for table `BDetailsChoices`
--

CREATE TABLE IF NOT EXISTS `BDetailsChoices` (
  `DetailΝο` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(35) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`DetailΝο`),
  UNIQUE KEY `Description` (`Description`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- Dumping data for table `BDetailsChoices`
--

INSERT INTO `BDetailsChoices` (`DetailΝο`, `Description`) VALUES
(1, 'Διατηρητέο'),
(2, 'Φωτεινό'),
(3, 'Μοντέρνα αρχιτεκτονική'),
(4, 'Ευρύχωρο'),
(5, 'Κλασσική αρχιτεκτονική'),
(6, 'Αέρινο'),
(7, 'Παλιό ανακαινισμένο'),
(8, 'Πέτρινο'),
(9, 'Πολυτελείας'),
(10, 'Με πισίνα');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
