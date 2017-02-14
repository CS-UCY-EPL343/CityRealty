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
-- Table structure for table `RealEstate`
--

CREATE TABLE IF NOT EXISTS `RealEstate` (
  `RealEstateNo` int(11) unsigned NOT NULL COMMENT 'Primary Key',
  `AStreetNo` text COLLATE utf8_bin COMMENT 'Basic Info',
  `AStreet` text COLLATE utf8_bin COMMENT 'Basic Info',
  `ACity` text COLLATE utf8_bin COMMENT 'Basic Info',
  `Area` double DEFAULT NULL COMMENT 'Basic Info',
  `ACountry` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'Cyprus' COMMENT 'Basic Info',
  `APostalCode` int(10) DEFAULT NULL COMMENT 'Basic Info',
  `RegistrationTitleNo` int(11) NOT NULL DEFAULT '0' COMMENT 'Common Info',
  `PieceNo` int(11) NOT NULL DEFAULT '0' COMMENT 'Common Info',
  `FolderNo` int(11) NOT NULL DEFAULT '0' COMMENT 'Common Info',
  `ArithmosFilSxed` int(11) NOT NULL DEFAULT '0' COMMENT 'Common Info',
  `ArithmosAdOik` int(11) NOT NULL DEFAULT '0' COMMENT 'Common Info',
  `LegalControl` tinytext COLLATE utf8_bin COMMENT 'Common Info',
  `InitialPrice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Common Info',
  `EstimatedPrice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Common Info',
  `MortgageLoan` tinytext COLLATE utf8_bin COMMENT 'Common Info',
  `ObjectiveValue` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Common Info',
  `FinalPrice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Common Info',
  `AView` tinytext COLLATE utf8_bin NOT NULL,
  `Corner` tinytext COLLATE utf8_bin NOT NULL,
  `SubArea` tinytext COLLATE utf8_bin NOT NULL,
  `Zone` tinytext COLLATE utf8_bin NOT NULL,
  `AvailabilityFrom` datetime NOT NULL,
  `Status` text COLLATE utf8_bin NOT NULL,
  `DateAdded` datetime NOT NULL,
  `RegistrationPurpose` varchar(20) COLLATE utf8_bin NOT NULL,
  `Price` double NOT NULL,
  `Currency` tinytext COLLATE utf8_bin NOT NULL,
  `PricePerTM` double NOT NULL,
  `TM` double NOT NULL,
  `VAT` double NOT NULL,
  `ShortDescription` text COLLATE utf8_bin NOT NULL,
  `Description` text COLLATE utf8_bin NOT NULL,
  `ForRent` tinytext COLLATE utf8_bin NOT NULL,
  `View` text COLLATE utf8_bin NOT NULL,
  `ContactedVia` int(10) NOT NULL,
  `Rating` tinytext COLLATE utf8_bin NOT NULL,
  `RegistrationTitle` text COLLATE utf8_bin NOT NULL,
  `OwnerID` int(10) NOT NULL,
  `OwnerRating` tinytext COLLATE utf8_bin NOT NULL,
  `AgentRating` tinytext COLLATE utf8_bin NOT NULL,
  `OrderCode` tinytext COLLATE utf8_bin NOT NULL,
  `TypeOrder` tinytext COLLATE utf8_bin NOT NULL,
  `Exclusive` tinytext COLLATE utf8_bin NOT NULL,
  `NoAgentReward` tinytext COLLATE utf8_bin NOT NULL,
  `OrderStart` datetime NOT NULL,
  `OrderStop` datetime NOT NULL,
  `AArea` tinytext COLLATE utf8_bin NOT NULL,
  `Category` enum('Γη','Κατοικία','Επαγγελματικός χώρος','Ξενοδοχείο') COLLATE utf8_bin NOT NULL DEFAULT 'Κατοικία',
  `Notes` text COLLATE utf8_bin NOT NULL,
  `NotifyColleague` tinytext COLLATE utf8_bin NOT NULL,
  `AgentID` int(10) NOT NULL,
  `RealEstateStatus` tinytext COLLATE utf8_bin NOT NULL,
  `AgentRewardPercentage` double NOT NULL,
  `AgentReward` double NOT NULL,
  `ViewAddress` tinytext COLLATE utf8_bin NOT NULL,
  `EstateNo` int(11) NOT NULL,
  `TransferCost` double NOT NULL DEFAULT '0',
  `TransferVAT` double NOT NULL DEFAULT '0',
  `ConsiderationExchange` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`RealEstateNo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
