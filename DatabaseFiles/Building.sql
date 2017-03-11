-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2017 at 08:53 PM
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
-- Table structure for table `BDetails`
--

CREATE TABLE IF NOT EXISTS `BDetails` (
  `RealEstateNo` int(11) NOT NULL COMMENT 'Foreign Key of Building',
  `DetailNo` int(11) NOT NULL COMMENT 'Foreign Key of BDetailsChoices'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `BFloorType`
--

CREATE TABLE IF NOT EXISTS `BFloorType` (
  `RealEstateNo` int(11) NOT NULL COMMENT 'Foreign Key of Building',
  `FloorTypeNo` int(11) NOT NULL COMMENT 'Foreign Key of BFloorTypeChoices'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `BFrames`
--

CREATE TABLE IF NOT EXISTS `BFrames` (
  `RealEstateNo` int(11) NOT NULL COMMENT 'Foreign Key of Building',
  `FrameNo` int(11) NOT NULL COMMENT 'Foreign Key of BFloorTypeChoices'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `BLocationDetails`
--

CREATE TABLE IF NOT EXISTS `BLocationDetails` (
  `RealEstateNo` int(11) NOT NULL COMMENT 'Foreign Key of Building',
  `DetailNo` int(11) NOT NULL COMMENT 'Foreign Key of BDetailsChoices'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `Building`
--

CREATE TABLE IF NOT EXISTS `Building` (
  `RealEstateNo` int(10) unsigned NOT NULL,
  `BuildingType` enum('Άλλο','Κατοικία','Επαγγελματικός χώρος','Ξενοδοχείο') COLLATE utf8_bin NOT NULL DEFAULT 'Κατοικία',
  `ConstructionYear` year(4) NOT NULL,
  `Renovated` tinyint(1) NOT NULL DEFAULT '0',
  `RenovationYear` year(4) NOT NULL,
  `NumOfFloors` tinyint(4) NOT NULL DEFAULT '0',
  `ParkingSpots` tinyint(4) NOT NULL DEFAULT '0',
  `NumOfRooms` tinyint(4) NOT NULL DEFAULT '1',
  `NumOfWC` tinyint(4) NOT NULL DEFAULT '1',
  `Drainage` tinyint(1) NOT NULL DEFAULT '0',
  `EnergyCertificate` enum('Unknown','Class A','Class B','Class C','Class D') COLLATE utf8_bin NOT NULL DEFAULT 'Unknown',
  `Levels` enum('0','1','2','3','4','5') COLLATE utf8_bin NOT NULL DEFAULT '0',
  `HeatingFuel` enum('Άλλο','Πετρέλαιο','Γκάζι','Ηλεκτρική','Τζάκι','Κλιματισμός') COLLATE utf8_bin NOT NULL DEFAULT 'Άλλο',
  `HeatingType` enum('Άλλο','Κεντρική','Ανεξάρτητη','Κοινόχρηστη') COLLATE utf8_bin NOT NULL DEFAULT 'Άλλο',
  `AvgSharedCosts` double NOT NULL DEFAULT '0',
  `UnderConstruction` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`RealEstateNo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
