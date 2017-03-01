-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 01, 2017 at 10:27 AM
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
-- Table structure for table `BLocationDetailsChoices`
--

CREATE TABLE IF NOT EXISTS `BLocationDetailsChoices` (
  `DetailNo` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(35) NOT NULL,
  PRIMARY KEY (`DetailNo`),
  UNIQUE KEY `Description` (`Description`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `BLocationDetailsChoices`
--

INSERT INTO `BLocationDetailsChoices` (`DetailNo`, `Description`) VALUES
(1, 'Σε καλή τοποθεσία'),
(2, 'Κεντρική τοποθεσία'),
(3, 'Κέντρο'),
(4, 'Κοντά σε σχολεία'),
(5, 'Κοντά σε καταστήματα'),
(6, 'Σε ήσυχη γειτονιά'),
(7, 'Σε αδιέξοδο'),
(8, 'Κοντά στο κέντρο'),
(9, 'Μακριά από το κέντρο'),
(10, 'Κοντά σε πανεπιστήμιο'),
(11, 'Κοντά σε εστιατόρια'),
(12, 'Κοντά σε mall');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
