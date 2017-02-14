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
-- Table structure for table `Residence`
--

CREATE TABLE IF NOT EXISTS `Residence` (
  `ResidenceType` enum('Άλλο','Ανεξάρτητη κατοικία','Μεζονέτα','Διαμέρισμα','Ρετιρέ') NOT NULL DEFAULT 'Ανεξάρτητη κατοικία',
  `TotalBedrooms` int(11) NOT NULL,
  `MasterBedroom` int(11) NOT NULL DEFAULT '0',
  `Kitchen` int(11) NOT NULL,
  `Fireplace` int(11) NOT NULL,
  `Bathrooms` int(11) NOT NULL,
  `LivingRooms` int(11) NOT NULL,
  `AreaOfBalcony` double NOT NULL,
  `RooftopArea` int(11) NOT NULL,
  `Furnished` tinytext NOT NULL,
  `RealEstateNo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
