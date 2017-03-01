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
-- Table structure for table `BFramesChoices`
--

CREATE TABLE IF NOT EXISTS `BFramesChoices` (
  `FrameNo` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(35) NOT NULL,
  PRIMARY KEY (`FrameNo`),
  UNIQUE KEY `Description` (`Description`),
  UNIQUE KEY `Description_2` (`Description`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `BFramesChoices`
--

INSERT INTO `BFramesChoices` (`FrameNo`, `Description`) VALUES
(1, 'Αλουμινίου'),
(2, 'Κάγκελο'),
(3, 'Ξίλινα'),
(4, 'Θερμομονοτικά'),
(5, 'Μονά'),
(6, 'Διπλά'),
(7, 'Ασφαλείας'),
(8, 'Σίτες'),
(9, 'Ηλεκτρικά ρολά'),
(10, 'Blinds'),
(11, 'Τέντες'),
(12, 'Κουρτίνες'),
(13, 'Πόρτα ασφαλείας'),
(14, 'Ανακλεινόμενα παράθυρα'),
(15, 'Συρόμενες πόρτες'),
(16, 'Ανοιγόμενα'),
(17, 'Παράθυρα'),
(18, 'Συρόμενα παράθυρα');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
