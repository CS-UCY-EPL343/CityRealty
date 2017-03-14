-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2017 at 01:48 PM
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
  `AStreetNo` varchar(5) COLLATE utf8_bin DEFAULT NULL COMMENT 'Basic Info',
  `AStreet` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT 'Basic Info',
  `ACity` enum('Λευκωσία','Λάρνακα','Λεμεσός','Πάφος','Αμμόχωστος') COLLATE utf8_bin DEFAULT 'Λευκωσία' COMMENT 'Basic Info',
  `ARegionCode` int(11) NOT NULL COMMENT 'Address',
  `ACountry` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'Cyprus' COMMENT 'Basic Info',
  `APostalCode` int(10) DEFAULT NULL COMMENT 'Basic Info',
  `RegistrationTitleNo` int(11) NOT NULL DEFAULT '0' COMMENT 'Common Info',
  `PieceNo` int(11) NOT NULL DEFAULT '0' COMMENT 'Common Info',
  `FolderNo` int(11) NOT NULL DEFAULT '0' COMMENT 'Common Info',
  `ArithmosFilSxed` int(11) NOT NULL DEFAULT '0' COMMENT 'Common Info',
  `ArithmosAdOik` int(11) NOT NULL DEFAULT '0' COMMENT 'Common Info',
  `LegalControl` varchar(100) COLLATE utf8_bin DEFAULT NULL COMMENT 'Common Info',
  `InitialPrice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Common Info',
  `EstimatedPrice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Common Info',
  `MortgageLoan` varchar(100) COLLATE utf8_bin DEFAULT NULL COMMENT 'Common Info',
  `ObjectiveValue` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Common Info',
  `FinalPrice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Common Info',
  `Corner` tinyint(1) NOT NULL DEFAULT '0',
  `Zone` varchar(150) COLLATE utf8_bin NOT NULL,
  `AvailableFrom` date NOT NULL,
  `Status` varchar(100) COLLATE utf8_bin NOT NULL,
  `DateRegistered` date NOT NULL,
  `RegistrationPurpose` varchar(35) COLLATE utf8_bin NOT NULL,
  `Price` double NOT NULL DEFAULT '0',
  `Currency` enum('EUR','GBP','RUS','USD','Other') COLLATE utf8_bin NOT NULL DEFAULT 'EUR',
  `PricePerTM` double NOT NULL,
  `AreaTM` double NOT NULL DEFAULT '0',
  `TM` double NOT NULL,
  `VAT` double NOT NULL,
  `ShortDescription` varchar(300) COLLATE utf8_bin NOT NULL,
  `Description` varchar(500) COLLATE utf8_bin NOT NULL,
  `AboutRenting` varchar(100) COLLATE utf8_bin NOT NULL,
  `RecommendedBy` int(10) NOT NULL COMMENT 'ContactNo',
  `Rating` varchar(300) COLLATE utf8_bin NOT NULL,
  `RegistrationTitle` tinyint(1) NOT NULL DEFAULT '0',
  `OwnerID` int(11) NOT NULL,
  `OwnerRating` varchar(300) COLLATE utf8_bin NOT NULL,
  `AgentRating` varchar(300) COLLATE utf8_bin NOT NULL,
  `OrderCode` varchar(100) COLLATE utf8_bin NOT NULL,
  `TypeOrder` varchar(100) COLLATE utf8_bin NOT NULL,
  `Exclusive` tinyint(1) NOT NULL DEFAULT '0',
  `OrderStart` date NOT NULL,
  `OrderStop` date NOT NULL,
  `Category` enum('Γη','Κατοικία','Επαγγελματικός χώρος','Ξενοδοχείο') COLLATE utf8_bin NOT NULL DEFAULT 'Κατοικία',
  `Notes` varchar(500) COLLATE utf8_bin NOT NULL,
  `NotifyColleague` tinyint(1) NOT NULL DEFAULT '0',
  `AgentUsername` varchar(50) COLLATE utf8_bin NOT NULL,
  `RealEstateStatus` varchar(100) COLLATE utf8_bin NOT NULL,
  `AgentRewardPercentage` double NOT NULL DEFAULT '0',
  `AgentReward` double NOT NULL DEFAULT '0',
  `ViewAddress` varchar(300) COLLATE utf8_bin NOT NULL,
  `TransferCost` double NOT NULL DEFAULT '0',
  `TransferVAT` double NOT NULL DEFAULT '0',
  `ConsiderationExchange` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`RealEstateNo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `RealEstate`
--

INSERT INTO `RealEstate` (`RealEstateNo`, `AStreetNo`, `AStreet`, `ACity`, `ARegionCode`, `ACountry`, `APostalCode`, `RegistrationTitleNo`, `PieceNo`, `FolderNo`, `ArithmosFilSxed`, `ArithmosAdOik`, `LegalControl`, `InitialPrice`, `EstimatedPrice`, `MortgageLoan`, `ObjectiveValue`, `FinalPrice`, `Corner`, `Zone`, `AvailableFrom`, `Status`, `DateRegistered`, `RegistrationPurpose`, `Price`, `Currency`, `PricePerTM`, `AreaTM`, `TM`, `VAT`, `ShortDescription`, `Description`, `AboutRenting`, `RecommendedBy`, `Rating`, `RegistrationTitle`, `OwnerID`, `OwnerRating`, `AgentRating`, `OrderCode`, `TypeOrder`, `Exclusive`, `OrderStart`, `OrderStop`, `Category`, `Notes`, `NotifyColleague`, `AgentUsername`, `RealEstateStatus`, `AgentRewardPercentage`, `AgentReward`, `ViewAddress`, `TransferCost`, `TransferVAT`, `ConsiderationExchange`) VALUES
(1, '', NULL, 'Λάρνακα', 21, 'Cyprus', NULL, 0, 0, 0, 0, 0, NULL, 0.00, 0.00, NULL, 0.00, 0.00, 0, '', '0000-00-00', '', '0000-00-00', '', 550, 'EUR', 0, 0, 100, 0, '', '', '', 0, '', 0, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', '', 0, '0', '', 0, 0, '', 0, 0, 0),
(2, '', NULL, 'Λάρνακα', 21, 'Cyprus', NULL, 0, 0, 0, 0, 0, NULL, 0.00, 0.00, NULL, 0.00, 0.00, 0, '', '0000-00-00', '', '0000-00-00', '', 550, 'EUR', 0, 0, 100, 0, '', '', '', 0, '', 0, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', '', 0, '0', '', 0, 0, '', 0, 0, 0),
(3, '', NULL, 'Λάρνακα', 21, 'Cyprus', NULL, 0, 0, 0, 0, 0, NULL, 0.00, 0.00, NULL, 0.00, 0.00, 0, '', '0000-00-00', '', '0000-00-00', '', 550, 'EUR', 0, 0, 100, 0, '', '', '', 0, '', 0, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', '', 0, '0', '', 0, 0, '', 0, 0, 0),
(4, '', NULL, 'Λάρνακα', 21, 'Cyprus', NULL, 0, 0, 0, 0, 0, NULL, 0.00, 0.00, NULL, 0.00, 0.00, 0, '', '0000-00-00', '', '0000-00-00', '', 550, 'EUR', 0, 0, 100, 0, '', '', '', 0, '', 0, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', '', 0, '0', '', 0, 0, '', 0, 0, 0),
(5, '', NULL, 'Λάρνακα', 21, 'Cyprus', NULL, 0, 0, 0, 0, 0, NULL, 0.00, 0.00, NULL, 0.00, 0.00, 0, '', '0000-00-00', '', '0000-00-00', '', 550, 'EUR', 0, 0, 100, 0, '', '', '', 0, '', 0, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', '', 0, '0', '', 0, 0, '', 0, 0, 0),
(6, '', NULL, 'Λάρνακα', 21, 'Cyprus', NULL, 0, 0, 0, 0, 0, NULL, 0.00, 0.00, NULL, 0.00, 0.00, 0, '', '0000-00-00', '', '0000-00-00', '', 550, 'EUR', 0, 0, 100, 0, '', '', '', 0, '', 0, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', '', 0, '0', '', 0, 0, '', 0, 0, 0),
(7, '', NULL, 'Λάρνακα', 21, 'Cyprus', NULL, 0, 0, 0, 0, 0, NULL, 0.00, 0.00, NULL, 0.00, 0.00, 0, '', '0000-00-00', '', '0000-00-00', '', 550, 'EUR', 0, 0, 100, 0, '', '', '', 0, '', 0, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', '', 0, '0', '', 0, 0, '', 0, 0, 0),
(8, '', NULL, 'Λάρνακα', 21, 'Cyprus', NULL, 0, 0, 0, 0, 0, NULL, 0.00, 0.00, NULL, 0.00, 0.00, 0, '', '0000-00-00', '', '0000-00-00', '', 550, 'EUR', 0, 0, 100, 0, '', '', '', 0, '', 0, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', '', 0, '0', '', 0, 0, '', 0, 0, 0),
(9, '', NULL, 'Λάρνακα', 21, 'Cyprus', NULL, 0, 0, 0, 0, 0, NULL, 0.00, 0.00, NULL, 0.00, 0.00, 0, '', '0000-00-00', '', '0000-00-00', '', 550, 'EUR', 0, 0, 100, 0, '', '', '', 0, '', 0, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', '', 0, '0', '', 0, 0, '', 0, 0, 0),
(10, '', NULL, 'Λάρνακα', 21, 'Cyprus', NULL, 0, 0, 0, 0, 0, NULL, 0.00, 0.00, NULL, 0.00, 0.00, 0, '', '0000-00-00', '', '0000-00-00', '', 550, 'EUR', 0, 0, 100, 0, '', '', '', 0, '', 0, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', '', 0, '0', '', 0, 0, '', 0, 0, 0),
(11, '', NULL, 'Λάρνακα', 21, 'Cyprus', NULL, 0, 0, 0, 0, 0, NULL, 0.00, 0.00, NULL, 0.00, 0.00, 0, '', '0000-00-00', '', '0000-00-00', '', 550, 'EUR', 0, 0, 100, 0, '', '', '', 0, '', 0, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', '', 0, '0', '', 0, 0, '', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- Table structure for table `REAppearance`
--

CREATE TABLE IF NOT EXISTS `REAppearance` (
  `RealEstateNo` int(11) NOT NULL,
  `AppearanceNo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `REAppearanceChoices`
--

CREATE TABLE IF NOT EXISTS `REAppearanceChoices` (
  `AppearanceNo` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(35) NOT NULL,
  PRIMARY KEY (`AppearanceNo`),
  UNIQUE KEY `Description` (`Description`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `REAppearanceChoices`
--

INSERT INTO `REAppearanceChoices` (`AppearanceNo`, `Description`) VALUES
(1, 'Διατηρητέο'),
(2, 'Φωτεινό'),
(3, 'Μοντέρνα αρχιτεκτονική'),
(4, 'Κλασσική αρχιτεκτονική'),
(5, 'Ευρύχωρο'),
(6, 'Αέρινο'),
(7, 'Παλιό ανακαινισμένο'),
(8, 'Πέτρινο'),
(9, 'Πολυτελείας');

-- --------------------------------------------------------

--
-- Table structure for table `REView`
--

CREATE TABLE IF NOT EXISTS `REView` (
  `RealEstateNo` int(11) NOT NULL,
  `ViewNo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `REViewChoices`
--

CREATE TABLE IF NOT EXISTS `REViewChoices` (
  `ViewNo` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(35) NOT NULL,
  PRIMARY KEY (`ViewNo`),
  UNIQUE KEY `Description` (`Description`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `REViewChoices`
--

INSERT INTO `REViewChoices` (`ViewNo`, `Description`) VALUES
(1, 'Υπέροχη'),
(2, 'Κεντρική'),
(3, 'Βουνό'),
(4, 'Θάλασσα'),
(5, 'Πάρκο'),
(6, 'Καλή');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
