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
