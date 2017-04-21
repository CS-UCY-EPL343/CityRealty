-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2017 at 08:55 PM
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
-- Table structure for table `Land`
--

CREATE TABLE IF NOT EXISTS `Land` (
  `RealEstateNo` int(11) NOT NULL,
  `LandType` enum('Άλλο','Έκταση','Κτήμα','Οικόπεδο','Οικιστικό οικοόπεδο','Βιομηχανικό οικόπεδο','Επαγγελματικό οικόπεδο') NOT NULL DEFAULT 'Άλλο',
  `BuildIn` tinyint(1) NOT NULL DEFAULT '0',
  `TMLand` double NOT NULL,
  `TMBuilding` double NOT NULL,
  `SD` double NOT NULL,
  `SK` double NOT NULL,
  `Builded` double NOT NULL,
  `NotBuilded` double NOT NULL,
  `Front` double NOT NULL,
  `Depth` double NOT NULL,
  `CityPlan` enum('Άλλο','Εντός σχεδίου','Εκτός σχεδίου','Εντός οικισμού','Εκτός οικισμού') NOT NULL DEFAULT 'Άλλο',
  `AOT` varchar(50) NOT NULL,
  `InvestmentField` tinyint(1) NOT NULL DEFAULT '0',
  `NumOfPlots` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`RealEstateNo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `LDetails`
--

CREATE TABLE IF NOT EXISTS `LDetails` (
  `RealEstateNo` int(11) NOT NULL,
  `DetailNo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `LUse`
--

CREATE TABLE IF NOT EXISTS `LUse` (
  `RealEstateNo` int(11) NOT NULL,
  `UseNo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `LUseChoices`
--

CREATE TABLE IF NOT EXISTS `LUseChoices` (
  `UseNo` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(35) NOT NULL,
  PRIMARY KEY (`UseNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `LUseChoices`
--

INSERT INTO `LUseChoices` (`UseNo`, `Description`) VALUES
(1, 'Οικοδομήσιμο'),
(2, 'Αγροτικό τεμάχιο'),
(3, 'Τουριστική εκμετάλλευση');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
