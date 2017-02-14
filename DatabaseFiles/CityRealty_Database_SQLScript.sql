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
-- Table structure for table `RealEstate`
--

CREATE TABLE IF NOT EXISTS `RealEstate` (
  `RealEstateNo` int(11) NOT NULL COMMENT 'Primary Key',
  `Latitude` decimal(10,8) DEFAULT NULL COMMENT 'Basic Info',
  `Longitude` decimal(11,8) DEFAULT NULL COMMENT 'Basic Info',
  `AStreetNo` varchar(10) COLLATE utf8_bin DEFAULT NULL COMMENT 'Basic Info',
  `AStreet` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT 'Basic Info',
  `ACity` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT 'Basic Info',
  `AArea` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT 'Basic Info',
  `ACountry` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'Cyprus' COMMENT 'Basic Info',
  `APostalCode` varchar(10) COLLATE utf8_bin DEFAULT NULL COMMENT 'Basic Info',
  `RegistrationTitleNo` int(11) NOT NULL DEFAULT '0' COMMENT 'Common Info',
  `PieceNo` int(11) NOT NULL DEFAULT '0' COMMENT 'Common Info',
  `FolderNo` int(11) NOT NULL DEFAULT '0' COMMENT 'Common Info',
  `ArithmosFilSxed` int(11) NOT NULL DEFAULT '0' COMMENT 'Common Info',
  `ArithmosAdOik` int(11) NOT NULL DEFAULT '0' COMMENT 'Common Info',
  `LegalControl` tinyint(1) DEFAULT NULL COMMENT 'Common Info',
  `InitialPrice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Common Info',
  `EstimatedPrice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Common Info',
  `MortgageLoan` tinyint(1) DEFAULT NULL COMMENT 'Common Info',
  `ObjectiveValue` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Common Info',
  `FinalPrice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Common Info',
  PRIMARY KEY (`RealEstateNo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
