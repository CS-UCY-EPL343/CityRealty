-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 14, 2017 at 04:03 PM
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
-- Table structure for table `CommunicationMessage`
--

CREATE TABLE IF NOT EXISTS `CommunicationMessage` (
  `MessageNo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `FullName` varchar(100) COLLATE utf8_bin NOT NULL,
  `Email` varchar(255) COLLATE utf8_bin NOT NULL,
  `PhoneNumber` bigint(20) NOT NULL,
  `Message` varchar(1500) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`MessageNo`),
  UNIQUE KEY `MessageNo` (`MessageNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `CommunicationMessage`
--

INSERT INTO `CommunicationMessage` (`MessageNo`, `FullName`, `Email`, `PhoneNumber`, `Message`) VALUES
(4, 'my name', 'my email', 35712345678, 'my message');

-- --------------------------------------------------------

--
-- Table structure for table `Office`
--

CREATE TABLE IF NOT EXISTS `Office` (
  `RealEstateNo` int(11) NOT NULL,
  `OfficeType` enum('Άλλο','Επαγγελματικός χώρος','Αποθήκη','Αίθουσα','Κτήριο','Κατάστημα','Γραφεία','Ιατρεία','Βιομηχανικός χώρος','Γυμναστήριο','Φροντιστήριο','Εκθεσιακός χώρος') NOT NULL DEFAULT 'Επαγγελματικός χώρος',
  `Investing` tinyint(1) NOT NULL DEFAULT '0',
  `NumOfBasements` smallint(6) NOT NULL DEFAULT '0',
  `NumOfBuildFloors` int(11) NOT NULL DEFAULT '0',
  `SurfaceArea` double NOT NULL DEFAULT '0',
  `NumOfSegments` int(11) NOT NULL DEFAULT '0',
  `StoreFrontArea` double NOT NULL DEFAULT '0',
  `GroundFloorArea` double NOT NULL DEFAULT '0',
  `LoftArea` double NOT NULL DEFAULT '0',
  `BasementArea` double NOT NULL DEFAULT '0',
  `FamePrice` double NOT NULL DEFAULT '0',
  `EquipmentIncluded` tinyint(1) NOT NULL DEFAULT '0',
  `AnnualRent` double NOT NULL DEFAULT '0',
  `AnnualGrossReturn` double NOT NULL DEFAULT '0',
  `AnnualNetReturn` double NOT NULL DEFAULT '0',
  `Teenant` varchar(50) NOT NULL,
  `AnnualExpenses` double NOT NULL DEFAULT '0',
  `AnnualProduction` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`RealEstateNo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `UserExtended`
--

CREATE TABLE IF NOT EXISTS `UserExtended` (
  `Username` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'Foreign Key -Inherits from SimpleEmployee',
  `ID` varchar(25) COLLATE utf8_bin NOT NULL,
  `SSN` int(10) unsigned DEFAULT NULL COMMENT 'Social Secutiry Number',
  `PrivatePhone` bigint(20) NOT NULL DEFAULT '0',
  `WorkPhone` bigint(20) NOT NULL DEFAULT '0',
  `Profession` varchar(35) COLLATE utf8_bin NOT NULL,
  `ANumber` varchar(10) COLLATE utf8_bin DEFAULT NULL COMMENT 'Address info',
  `AStreet` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT 'Address info',
  `ACity` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT 'Address info',
  `AArea` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT 'Address info',
  `ACountry` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT 'Address info',
  `APostalCode` varchar(10) COLLATE utf8_bin DEFAULT NULL COMMENT 'Address info',
  `Salary` decimal(10,2) DEFAULT NULL,
  `Notes` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  UNIQUE KEY `Username` (`Username`,`SSN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `UserSimple`
--

CREATE TABLE IF NOT EXISTS `UserSimple` (
  `Username` varchar(50) COLLATE utf8_bin NOT NULL,
  `Password` varchar(50) COLLATE utf8_bin NOT NULL,
  `Name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Surname` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_bin NOT NULL,
  `UserType` enum('Simple User','External Agent','Internal Agent','Admin') COLLATE utf8_bin NOT NULL DEFAULT 'Simple User',
  `UserStatus` enum('Active User','Inactive User','Not Specified') COLLATE utf8_bin NOT NULL DEFAULT 'Not Specified',
  `RegistrationDate` date NOT NULL,
  `LastLoggedin` date NOT NULL,
  `LoginCount` smallint(5) unsigned NOT NULL DEFAULT '1',
  `Photo` varchar(150) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`Username`),
  KEY `Status` (`UserStatus`),
  FULLTEXT KEY `Username` (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `UserSimple`
--

INSERT INTO `UserSimple` (`Username`, `Password`, `Name`, `Surname`, `Email`, `UserType`, `UserStatus`, `RegistrationDate`, `LastLoggedin`, `LoginCount`, `Photo`) VALUES
('lala', 'lala', 'la', 'la', 'lalala@hjfri.com', 'Simple User', 'Not Specified', '2016-11-17', '0000-00-00', 1, ''),
('sg', '123456', 'sotia', 'gregoriou', 'dn@hotmail.com', '', 'Active User', '2016-11-17', '2016-11-17', 1, ''),
('user1', 'pass1', NULL, NULL, 'user1@email.com', '', 'Active User', '2016-11-17', '2016-11-17', 1, ''),
('ematsi', '123456', 'elena', 'matsi', 'em@gmail.com', '', 'Active User', '2016-11-17', '2016-11-17', 1, ''),
('deee', '123456', 'de', 'de', 'de@gmail.com', '', 'Active User', '2016-11-17', '2016-11-17', 1, ''),
('kkk', '123456', 'Elena', 'Matsi', 'ematsi02@cs.ucy.ac.cy', '', 'Active User', '2016-11-18', '2016-11-18', 1, ''),
('trhtrh', '123456', 'efe', 'thbtfrhb', 'trhrt@hbfgb', 'Simple User', 'Active User', '2016-11-19', '2016-11-19', 1, ''),
('hjk', '123456', 'rg', 'tg', 'gfb@rtg', '', 'Active User', '2016-11-19', '2016-11-19', 1, ''),
('pamp', '123456', 'pampos', 'pampou', 'pamp01@gmail.com', 'Simple User', 'Active User', '2016-11-19', '2016-11-19', 1, ''),
('fdhfgh', '134354', 'sotia', 'gregoriou', 'dfgfd@fghbfh', 'Simple User', 'Active User', '2016-11-19', '2016-11-19', 1, ''),
('mkyria', '123456', 'Michalis', 'Kyriacou', 'mkyria@ucy.ac.cy', 'Simple User', 'Active User', '2016-11-19', '2016-11-19', 1, ''),
('sgrego02', '123456', 'sotia', 'gregoriou', 'erfes@rere', 'Simple User', 'Active User', '2016-11-19', '2016-11-19', 1, ''),
('edfrt', '123456', '', '', 're@rg', '', 'Active User', '2016-11-19', '2016-11-19', 1, ''),
('lala1', 'lalala', 'lala1', 'lala1', 'lala@lala.la', 'Simple User', 'Active User', '2016-11-22', '2016-11-22', 1, ''),
('team2', '123456', '', '', 'gg@gmail.com', 'Simple User', 'Active User', '2016-11-22', '2016-11-22', 1, ''),
('km', '123456', '', '', 'm@c.c', '', 'Active User', '2016-11-21', '2016-11-21', 1, ''),
('popopop', '345678', '', '', 'dfbdf@dbfd', '', 'Active User', '2016-11-19', '2016-11-19', 1, ''),
('abcdefg', '12345678', 'sotia', 'gregoriou', 'asfss@dfgvdf', 'Simple User', 'Active User', '2016-11-19', '2016-11-19', 1, ''),
('lalala', '123456', '', '', 'gfdd@dh', '', 'Active User', '2016-11-19', '2016-11-19', 1, ''),
('l', '123456', '', '', 'lo@jm.no', 'Simple User', 'Active User', '2016-11-25', '2016-11-25', 1, ''),
('sss', '123456', 'sss', 'sss', 'sss@sss', 'Simple User', 'Active User', '2016-11-27', '2016-11-27', 1, ''),
('ttt', '123456', 'ttt', 'ttt', 'ttt@ttt', '', 'Active User', '2016-11-27', '2016-11-27', 1, ''),
('rrr', '345678', 'rrr', 'rrr', 'rrr@rrr', '', 'Active User', '2016-11-27', '2016-11-27', 1, ''),
('fff@fff', '123456', 'fff', 'fff', 'fff@fff', '', 'Active User', '2016-11-27', '2016-11-27', 1, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
