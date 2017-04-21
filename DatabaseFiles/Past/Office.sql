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
-- Table structure for table `Office`
--

CREATE TABLE IF NOT EXISTS `Office` (
  `RealEstateNo` int(11) NOT NULL,
  `OfficeType` enum('Άλλο','Επαγγελματικός χώρος','Αποθήκη','Αίθουσα','Κτήριο','Κατάστημα','Γραφεία','Ιατρεία','Βιομηχανικός χώρος','Γυμναστήριο','Φροντιστήριο','Εκθεσιακός χώρος') NOT NULL DEFAULT 'Επαγγελματικός χώρος',
  `Investment` tinyint(1) NOT NULL DEFAULT '0',
  `NumOfBasements` smallint(6) NOT NULL DEFAULT '0',
  `NumOfFloors` int(11) NOT NULL DEFAULT '0',
  `SurfaceArea` double NOT NULL DEFAULT '0',
  `NumOfSegments` int(11) NOT NULL DEFAULT '0',
  `StoreFrontArea` double NOT NULL DEFAULT '0',
  `GroundFloorArea` double NOT NULL DEFAULT '0',
  `LoftArea` double NOT NULL DEFAULT '0',
  `BasementArea` double NOT NULL DEFAULT '0',
  `AirPrice` double NOT NULL DEFAULT '0',
  `EquipmentIncluded` tinyint(1) NOT NULL DEFAULT '0',
  `AnnualRent` double NOT NULL DEFAULT '0',
  `AnnualGrossReturn` double NOT NULL DEFAULT '0',
  `AnnualNetReturn` double NOT NULL DEFAULT '0',
  `AnnualExpenses` double NOT NULL DEFAULT '0',
  `AnnualProduction` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`RealEstateNo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `OfficeTeenant`
--

CREATE TABLE IF NOT EXISTS `OfficeTeenant` (
  `RealEstateNo` int(11) NOT NULL,
  `ContactID` int(11) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
