-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2016 at 01:00 PM
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
-- Table structure for table `ExtendedEmployee`
--

CREATE TABLE IF NOT EXISTS `ExtendedEmployee` (
  `Username` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'Foreign Key -Inherits from SimpleEmployee',
  `SSN` int(10) unsigned DEFAULT NULL COMMENT 'Social Secutiry Number',
  `Salary` decimal(10,2) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Notes` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  UNIQUE KEY `Username` (`Username`,`SSN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ExtendedEmployee`
--

INSERT INTO `ExtendedEmployee` (`Username`, `SSN`, `Salary`, `Birthday`, `Notes`) VALUES
('user1', 93485976, 9999.99, 'bla bla edhfwehfhweds hwedfh efdh erhg etiojfhgp3q4we trer peo34wet ');

-- --------------------------------------------------------

--
-- Table structure for table `SimpleEmployee`
--

CREATE TABLE IF NOT EXISTS `SimpleEmployee` (
  `Username` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'Foreign key - Inherits from User',
  `ID` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Company` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Gender` tinyint(1) DEFAULT NULL COMMENT '0 false male, 1 true female',
  UNIQUE KEY `Username` (`Username`),
  UNIQUE KEY `Username_2` (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `SimpleEmployee`
--

INSERT INTO `SimpleEmployee` (`Username`, `ID`, `Company`, `Birthday`, `Gender`) VALUES
('user1', '123abc456', 'Ucy', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `Username` varchar(50) COLLATE utf8_bin NOT NULL,
  `Password` varchar(50) COLLATE utf8_bin NOT NULL,
  `Name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Surname` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_bin NOT NULL,
  `UserType` enum('Simple User','External Broker','Internal Broker','Admin Broker') COLLATE utf8_bin NOT NULL DEFAULT 'Simple User',
  `Status` enum('Active User','Inactive User','Not Specified') COLLATE utf8_bin NOT NULL DEFAULT 'Not Specified',
  `RegistrationDate` date NOT NULL,
  `LastLoggedin` date NOT NULL,
  `LoginCount` smallint(5) unsigned NOT NULL DEFAULT '1',
  `PhoneNumber` bigint(20) unsigned DEFAULT NULL,
  `ANumber` varchar(10) COLLATE utf8_bin DEFAULT NULL COMMENT 'Address info',
  `AStreet` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT 'Address info',
  `ACity` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT 'Address info',
  `AArea` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT 'Address info',
  `ACountry` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT 'Address info',
  `APostalCode` varchar(10) COLLATE utf8_bin DEFAULT NULL COMMENT 'Address info',
  PRIMARY KEY (`Username`),
  KEY `Status` (`Status`),
  FULLTEXT KEY `Username` (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`Username`, `Password`, `Name`, `Surname`, `Email`, `UserType`, `Status`, `RegistrationDate`, `LastLoggedin`, `LoginCount`, `PhoneNumber`, `ANumber`, `AStreet`, `ACity`, `AArea`, `ACountry`, `APostalCode`) VALUES
('lala', 'lala', 'la', 'la', 'lalala@hjfri.com', 'Simple User', 'Not Specified', '2016-11-17', '0000-00-00', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('sg', '123456', 'sotia', 'gregoriou', 'dn@hotmail.com', 'External Broker', 'Active User', '2016-11-17', '2016-11-17', 1, 123, NULL, NULL, NULL, NULL, NULL, NULL),
('user1', 'pass1', NULL, NULL, 'user1@email.com', 'Admin Broker', 'Active User', '2016-11-17', '2016-11-17', 1, 35712345678, 'a3', 'kk', 'k', 'df', 'kdf', '2200'),
('ematsi', '123456', 'elena', 'matsi', 'em@gmail.com', 'External Broker', 'Active User', '2016-11-17', '2016-11-17', 1, 54895325, NULL, NULL, NULL, NULL, NULL, NULL),
('deee', '123456', 'de', 'de', 'de@gmail.com', 'External Broker', 'Active User', '2016-11-17', '2016-11-17', 1, 999999999, NULL, NULL, NULL, NULL, NULL, NULL),
('kkk', '123456', 'Elena', 'Matsi', 'ematsi02@cs.ucy.ac.cy', 'External Broker', 'Active User', '2016-11-18', '2016-11-18', 1, 99070979, NULL, NULL, NULL, NULL, NULL, NULL),
('trhtrh', '123456', 'efe', 'thbtfrhb', 'trhrt@hbfgb', 'Simple User', 'Active User', '2016-11-19', '2016-11-19', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('hjk', '123456', 'rg', 'tg', 'gfb@rtg', 'External Broker', 'Active User', '2016-11-19', '2016-11-19', 1, 123456, NULL, NULL, NULL, NULL, NULL, NULL),
('pamp', '123456', 'pampos', 'pampou', 'pamp01@gmail.com', 'Simple User', 'Active User', '2016-11-19', '2016-11-19', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('fdhfgh', '134354', 'sotia', 'gregoriou', 'dfgfd@fghbfh', 'Simple User', 'Active User', '2016-11-19', '2016-11-19', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('mkyria', '123456', 'Michalis', 'Kyriacou', 'mkyria@ucy.ac.cy', 'Simple User', 'Active User', '2016-11-19', '2016-11-19', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('sgrego02', '123456', 'sotia', 'gregoriou', 'erfes@rere', 'Simple User', 'Active User', '2016-11-19', '2016-11-19', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('edfrt', '123456', '', '', 're@rg', 'External Broker', 'Active User', '2016-11-19', '2016-11-19', 1, 3432, NULL, NULL, NULL, NULL, NULL, NULL),
('rdrgg', '123456', '', '', 'dfgdf@rgdr', 'External Broker', 'Active User', '2016-11-19', '2016-11-19', 1, 34342, NULL, NULL, NULL, NULL, NULL, NULL),
('fdbdghbg', '123456', '', '', 'sdbdf@rgd', 'External Broker', 'Active User', '2016-11-19', '2016-11-19', 1, 345, NULL, NULL, NULL, NULL, NULL, NULL),
('324rsf', '123456', '', '', '34@342', 'External Broker', 'Active User', '2016-11-19', '2016-11-19', 1, 2300, NULL, NULL, NULL, NULL, NULL, NULL),
('sgrego', '123456', 'sotia', 'gregoriou', 'skdjf@gmf', 'Simple User', 'Active User', '2016-11-19', '2016-11-19', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('dfgbdfbd', '123456', '', '', 'edge@dbd', 'External Broker', 'Active User', '2016-11-19', '2016-11-19', 1, 456, NULL, NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
