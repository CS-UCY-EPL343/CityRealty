-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2017 at 01:25 PM
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
  `RealEstateNo` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
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
  `MortgageLoan` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Common Info',
  `ObjectiveValue` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Common Info',
  `FinalPrice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Common Info',
  `Corner` tinyint(1) NOT NULL DEFAULT '0',
  `Zone` varchar(150) COLLATE utf8_bin NOT NULL,
  `AvailableFrom` date NOT NULL,
  `DateRegistered` date NOT NULL,
  `RegistrationPurpose` enum('Πώληση','Ενοικίαση','Αντιπαροχή','Επένδυση') COLLATE utf8_bin NOT NULL DEFAULT 'Πώληση',
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
  `REState` enum('Published','Unpublished','To be published') COLLATE utf8_bin DEFAULT 'To be published',
  `TimesViewed` int(11) NOT NULL DEFAULT '0' COMMENT 'To determine the popular real estates',
  PRIMARY KEY (`RealEstateNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=19 ;

--
-- RELATIONS FOR TABLE `RealEstate`:
--   `AgentUsername`
--       `UserExtended` -> `Username`
--   `OwnerID`
--       `Contact` -> `ContactNo`
--

--
-- Dumping data for table `RealEstate`
--

INSERT INTO `RealEstate` (`RealEstateNo`, `AStreetNo`, `AStreet`, `ACity`, `ARegionCode`, `ACountry`, `APostalCode`, `RegistrationTitleNo`, `PieceNo`, `FolderNo`, `ArithmosFilSxed`, `ArithmosAdOik`, `LegalControl`, `InitialPrice`, `EstimatedPrice`, `MortgageLoan`, `ObjectiveValue`, `FinalPrice`, `Corner`, `Zone`, `AvailableFrom`, `DateRegistered`, `RegistrationPurpose`, `Price`, `Currency`, `PricePerTM`, `AreaTM`, `TM`, `VAT`, `ShortDescription`, `Description`, `AboutRenting`, `RecommendedBy`, `Rating`, `RegistrationTitle`, `OwnerID`, `OwnerRating`, `AgentRating`, `OrderCode`, `TypeOrder`, `Exclusive`, `OrderStart`, `OrderStop`, `Category`, `Notes`, `NotifyColleague`, `AgentUsername`, `RealEstateStatus`, `AgentRewardPercentage`, `AgentReward`, `ViewAddress`, `TransferCost`, `TransferVAT`, `ConsiderationExchange`, `REState`, `TimesViewed`) VALUES
(8, '', '', 'Λάρνακα', 21, 'Cyprus', 0, 0, 0, 0, 0, 0, '', 0.00, 0.00, 0, 0.00, 0.00, 0, '', '2017-03-01', '0000-00-00', 'Ενοικίαση', 550, '', 0, 0, 100, 0, 'jh', 'jh', '', 0, '', 1, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', 'ghj', 0, 'sg', '', 0, 0, '', 0, 0, 0, 'Unpublished', 0),
(7, '', '', 'Λάρνακα', 21, 'Cyprus', 0, 0, 0, 0, 0, 0, '', 0.00, 0.00, 0, 0.00, 0.00, 0, '', '2017-03-01', '0000-00-00', 'Ενοικίαση', 550, '', 0, 0, 100, 0, 'jh', 'jh', '', 0, '', 1, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', 'ghj', 0, 'sg', '', 0, 0, '', 0, 0, 0, 'Unpublished', 0),
(6, '', '', 'Λάρνακα', 21, 'Cyprus', 0, 0, 0, 0, 0, 0, '', 0.00, 0.00, 0, 0.00, 0.00, 0, '', '2017-03-01', '0000-00-00', 'Ενοικίαση', 550, '', 0, 0, 100, 0, 'jh', 'jh', '', 0, '', 1, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', 'ghj', 0, 'sg', '', 0, 0, '', 0, 0, 0, 'Unpublished', 0),
(5, '', '', 'Λάρνακα', 21, 'Cyprus', 0, 0, 0, 0, 0, 0, '', 0.00, 0.00, 0, 0.00, 0.00, 0, '', '2017-03-01', '0000-00-00', 'Ενοικίαση', 550, '', 0, 0, 100, 0, 'jh', 'jh', '', 0, '', 1, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', 'ghj', 0, 'sg', '', 0, 0, '', 0, 0, 0, 'Unpublished', 0),
(4, '', '', 'Λάρνακα', 21, 'Cyprus', 0, 0, 0, 0, 0, 0, '', 0.00, 0.00, 0, 0.00, 0.00, 0, '', '2017-03-01', '0000-00-00', 'Ενοικίαση', 550, '', 0, 0, 100, 0, 'jh', 'jh', '', 0, '', 1, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', 'ghj', 0, 'sg', '', 0, 0, '', 0, 0, 0, 'Unpublished', 0),
(3, '', '', 'Λάρνακα', 21, 'Cyprus', 0, 0, 0, 0, 0, 0, '', 0.00, 0.00, 0, 0.00, 0.00, 0, '', '2017-03-01', '0000-00-00', 'Ενοικίαση', 550, '', 0, 0, 100, 0, 'jh', 'jh', '', 0, '', 1, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', 'ghj', 0, 'sg', '', 0, 0, '', 0, 0, 0, 'Published', 0),
(2, '', '', 'Λάρνακα', 21, 'Cyprus', 0, 0, 0, 0, 0, 0, '', 0.00, 0.00, 0, 0.00, 0.00, 0, '', '2017-03-01', '0000-00-00', 'Ενοικίαση', 550, '', 0, 0, 100, 0, 'jh', 'jh', '', 0, '', 1, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', 'ghj', 0, 'sg', '', 0, 0, '', 0, 0, 0, 'Published', 0),
(1, '', '', 'Λάρνακα', 21, 'Cyprus', 0, 0, 0, 0, 0, 0, '', 0.00, 0.00, 0, 0.00, 0.00, 0, '', '2017-03-01', '0000-00-00', 'Ενοικίαση', 550, '', 0, 0, 100, 0, 'jh', 'jh', '', 0, '', 1, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', 'ghj', 0, 'sg', '', 0, 0, '', 0, 0, 0, 'Published', 0),
(9, '', '', 'Λάρνακα', 21, 'Cyprus', 0, 0, 0, 0, 0, 0, '', 0.00, 0.00, 0, 0.00, 0.00, 0, '', '2017-03-01', '0000-00-00', 'Ενοικίαση', 550, '', 0, 0, 100, 0, 'jh', 'jh', '', 0, '', 1, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', 'ghj', 0, 'sg', '', 0, 0, '', 0, 0, 0, 'Published', 0),
(10, '', '', 'Λάρνακα', 21, 'Cyprus', 0, 0, 0, 0, 0, 0, '', 0.00, 0.00, 0, 0.00, 0.00, 0, '', '2017-03-01', '0000-00-00', 'Ενοικίαση', 550, '', 0, 0, 100, 0, 'jh', 'jh', '', 0, '', 1, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', 'ghj', 0, 'sg', '', 0, 0, '', 0, 0, 0, 'Published', 0),
(11, '', '', 'Λάρνακα', 21, 'Cyprus', 0, 0, 0, 0, 0, 0, '', 0.00, 0.00, 0, 0.00, 0.00, 0, '', '2017-03-01', '0000-00-00', 'Ενοικίαση', 550, '', 0, 0, 100, 0, 'jh', 'jh', '', 0, '', 1, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', 'ghj', 0, 'sg', '', 0, 0, '', 0, 0, 0, 'Published', 0),
(12, '', '', 'Λάρνακα', 21, 'Cyprus', 0, 0, 0, 0, 0, 0, '', 0.00, 0.00, 0, 0.00, 0.00, 0, '', '2017-03-01', '0000-00-00', 'Ενοικίαση', 550, '', 0, 0, 100, 0, 'jh', 'jh', '', 0, '', 1, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', 'ghj', 0, 'sg', '', 0, 0, '', 0, 0, 0, 'Published', 0),
(13, '', '', 'Λάρνακα', 21, 'Cyprus', 0, 0, 0, 0, 0, 0, '', 0.00, 0.00, 0, 0.00, 0.00, 0, '', '2017-03-01', '0000-00-00', 'Ενοικίαση', 550, '', 0, 0, 100, 0, 'jh', 'jh', '', 0, '', 1, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', 'ghj', 0, 'sg', '', 0, 0, '', 0, 0, 0, 'Published', 0),
(14, '', '', 'Λάρνακα', 21, 'Cyprus', 0, 0, 0, 0, 0, 0, '', 0.00, 0.00, 0, 0.00, 0.00, 0, '', '2017-03-01', '0000-00-00', 'Ενοικίαση', 550, '', 0, 0, 100, 0, 'jh', 'jh', '', 0, '', 1, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', 'ghj', 0, 'sg', '', 0, 0, '', 0, 0, 0, 'Published', 0),
(16, '', '', 'Λάρνακα', 21, 'Cyprus', 0, 0, 0, 0, 0, 0, '', 0.00, 0.00, 0, 0.00, 0.00, 0, '', '2017-03-01', '0000-00-00', 'Ενοικίαση', 550, '', 0, 0, 100, 0, 'jh', 'jh', '', 0, '', 1, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', 'ghj', 0, 'sg', '', 0, 0, '', 0, 0, 0, 'Published', 0),
(15, '', '', 'Λάρνακα', 21, 'Cyprus', 0, 0, 0, 0, 0, 0, '', 0.00, 0.00, 0, 0.00, 0.00, 0, '', '2017-03-01', '0000-00-00', 'Ενοικίαση', 550, '', 0, 0, 100, 0, 'jh', 'jh', '', 0, '', 1, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', 'ghj', 0, 'sg', '', 0, 0, '', 0, 0, 0, 'Published', 0),
(17, '', '', 'Λάρνακα', 21, 'Cyprus', 0, 0, 0, 0, 0, 0, '', 0.00, 0.00, 0, 0.00, 0.00, 0, '', '2017-03-01', '0000-00-00', 'Ενοικίαση', 550, '', 0, 0, 100, 0, 'jh', 'jh', '', 0, '', 1, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', 'ghj', 0, 'sg', '', 0, 0, '', 0, 0, 0, 'Published', 0),
(18, '', '', 'Λάρνακα', 21, 'Cyprus', 0, 0, 0, 0, 0, 0, '', 0.00, 0.00, 0, 0.00, 0.00, 0, '', '2017-03-01', '0000-00-00', 'Ενοικίαση', 550, '', 0, 0, 100, 0, 'jh', 'jh', '', 0, '', 1, 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 'Κατοικία', 'ghj', 0, 'sg', '', 0, 0, '', 0, 0, 0, 'To be published', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
