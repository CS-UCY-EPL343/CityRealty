-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 01, 2017 at 10:24 AM
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
  `LandType` enum('Άλλο','Γη','Οικόπεδο') NOT NULL DEFAULT 'Γη',
  `BuildIn` tinytext NOT NULL,
  `TMLand` double NOT NULL,
  `TMBuilding` double NOT NULL,
  `SD` double NOT NULL,
  `SK` double NOT NULL,
  `Builded` double NOT NULL,
  `NotBuilded` double NOT NULL,
  `LandUse` tinytext NOT NULL,
  `Front` double NOT NULL,
  `Depth` double NOT NULL,
  `CityPlan` tinytext NOT NULL,
  `AOT` tinytext NOT NULL,
  `InvestmentField` tinytext NOT NULL,
  `NumOfPlots` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`RealEstateNo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
