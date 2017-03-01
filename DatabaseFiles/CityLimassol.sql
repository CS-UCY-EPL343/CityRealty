-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 01, 2017 at 10:27 AM
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
-- Table structure for table `CityLimassol`
--

CREATE TABLE IF NOT EXISTS `CityLimassol` (
  `CityName` varchar(15) COLLATE utf8_bin NOT NULL DEFAULT 'Limassol',
  `RegionCode` int(11) NOT NULL AUTO_INCREMENT,
  `RegionName` varchar(25) COLLATE utf8_bin NOT NULL,
  `NumOfListings` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`RegionCode`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=113 ;

--
-- Dumping data for table `CityLimassol`
--

INSERT INTO `CityLimassol` (`CityName`, `RegionCode`, `RegionName`, `NumOfListings`) VALUES
('Λεμεσός', 1, 'Άγιος Αθανάσιος', 0),
('Λεμεσός', 2, 'Άγιος Αμβρόσιος', 0),
('Λεμεσός', 3, 'Άγιος Γεώργιος', 0),
('Λεμεσός', 4, 'Άγιος Δημήτριος', 0),
('Λεμεσός', 5, 'Άγιος Θεόδωρος', 0),
('Λεμεσός', 6, 'Άγιος Θεράπων', 0),
('Λεμεσός', 7, 'Άγιος Θωμάς', 0),
('Λεμεσός', 8, 'Άγιος Ιωάννης', 0),
('Λεμεσός', 9, 'Άγιος Κωνσταντίνος', 0),
('Λεμεσός', 10, 'Άγιος Μάμας', 0),
('Λεμεσός', 11, 'Άγιος Παύλος', 0),
('Λεμεσός', 12, 'Άγιος Τύχωνας', 0),
('Λεμεσός', 13, 'Αγρίδια', 0),
('Λεμεσός', 14, 'Αγρός', 0),
('Λεμεσός', 15, 'Ακαπνού', 0),
('Λεμεσός', 16, 'Ακρούντα', 0),
('Λεμεσός', 17, 'Ακρωτήρι', 0),
('Λεμεσός', 18, 'Άλασσα', 0),
('Λεμεσός', 19, 'Αλέκτορα', 0),
('Λεμεσός', 20, 'Αμίαντος', 0),
('Λεμεσός', 21, 'Ανώγυρα', 0),
('Λεμεσός', 22, 'Απαισιά', 0),
('Λεμεσός', 23, 'Αρακαπάς', 0),
('Λεμεσός', 24, 'Αρμενοχώρι', 0),
('Λεμεσός', 25, 'Άρσος', 0),
('Λεμεσός', 26, 'Ασγάτα', 0),
('Λεμεσός', 27, 'Ασώματος', 0),
('Λεμεσός', 28, 'Αυδήμου', 0),
('Λεμεσός', 29, 'Αψιού', 0),
('Λεμεσός', 30, 'Βάσα', 0),
('Λεμεσός', 31, 'Βάσα', 0),
('Λεμεσός', 32, 'Βίκλα', 0),
('Λεμεσός', 33, 'Βουνί', 0),
('Λεμεσός', 34, 'Γερμασόγεια', 0),
('Λεμεσός', 35, 'Γεράσα', 0),
('Λεμεσός', 36, 'Γεροβάσα', 0),
('Λεμεσός', 37, 'Διερώνα', 0),
('Λεμεσός', 38, 'Δορά', 0),
('Λεμεσός', 39, 'Δύμες', 0),
('Λεμεσός', 40, 'Δωρός', 0),
('Λεμεσός', 41, 'Επισκοπή', 0),
('Λεμεσός', 42, 'Ερήμη', 0),
('Λεμεσός', 43, 'Εφταγώνια', 0),
('Λεμεσός', 44, 'Ζωοπηγή', 0),
('Λεμεσός', 45, 'Κάτω Πολεμίδια', 0),
('Λεμεσός', 46, 'Καλό Χωριό', 0),
('Λεμεσός', 47, 'Καμινάρια', 0),
('Λεμεσός', 48, 'Καντού', 0),
('Λεμεσός', 49, 'Καπηλειό', 0),
('Λεμεσός', 50, 'Κάτω Κυβίδες', 0),
('Λεμεσός', 51, 'Κάτω Μύλος', 0),
('Λεμεσός', 52, 'Κάτω Πλάτρες', 0),
('Λεμεσός', 53, 'Κελλάκι', 0),
('Λεμεσός', 54, 'Κισσούσα', 0),
('Λεμεσός', 55, 'Κλωνάρι', 0),
('Λεμεσός', 56, 'Κοιλάνι', 0),
('Λεμεσός', 57, 'Κολόσσι', 0),
('Λεμεσός', 58, 'Κορφή', 0),
('Λεμεσός', 59, 'Κουκά', 0),
('Λεμεσός', 60, 'Κυπερούντα', 0),
('Λεμεσός', 61, 'Λεμεσός', 0),
('Λεμεσός', 62, 'Λάνια', 0),
('Λεμεσός', 63, 'Λεμύθου', 0),
('Λεμεσός', 64, 'Λιμνάτης', 0),
('Λεμεσός', 65, 'Λουβαράς', 0),
('Λεμεσός', 66, 'Λόφου', 0),
('Λεμεσός', 67, 'Μέσα Γειτονιά', 0),
('Λεμεσός', 68, 'Μαθηκολώνη', 0),
('Λεμεσός', 69, 'Μαλλιά', 0),
('Λεμεσός', 70, 'Μαντριά', 0),
('Λεμεσός', 71, 'Μονάγρι', 0),
('Λεμεσός', 72, 'Μοναγρούλλι', 0),
('Λεμεσός', 73, 'Μονή', 0),
('Λεμεσός', 74, 'Μονιάτης', 0),
('Λεμεσός', 75, 'Μουτταγιάκα', 0),
('Λεμεσός', 76, 'Όμοδος', 0),
('Λεμεσός', 77, 'Παλαιόμυλος', 0),
('Λεμεσός', 78, 'Παλώδια', 0),
('Λεμεσός', 79, 'Πάνω Κυβίδες', 0),
('Λεμεσός', 80, 'Πάνω Πλάτρες', 0),
('Λεμεσός', 81, 'Πάνω Πολεμίδια', 0),
('Λεμεσός', 82, 'Παραμάλι', 0),
('Λεμεσός', 83, 'Παραμύθα', 0),
('Λεμεσός', 84, 'Παρεκκλήσια', 0),
('Λεμεσός', 85, 'Πάχνα', 0),
('Λεμεσός', 86, 'Πελαθούσα', 0),
('Λεμεσός', 87, 'Πελένδρι', 0),
('Λεμεσός', 88, 'Πεντάκωμο', 0),
('Λεμεσός', 89, 'Πέρα Πεδί', 0),
('Λεμεσός', 90, 'Πισσούρι', 0),
('Λεμεσός', 91, 'Πλατανίσκια', 0),
('Λεμεσός', 92, 'Ποταμιού', 0),
('Λεμεσός', 93, 'Ποταμίτισσα', 0),
('Λεμεσός', 94, 'Πραστειό', 0),
('Λεμεσός', 95, 'Πραστειό', 0),
('Λεμεσός', 96, 'Πρόδρομος', 0),
('Λεμεσός', 97, 'Πύργος', 0),
('Λεμεσός', 98, 'Σανίδα', 0),
('Λεμεσός', 99, 'Σούνι', 0),
('Λεμεσός', 100, 'Σπιτάλι', 0),
('Λεμεσός', 101, 'Συκόπετρα', 0),
('Λεμεσός', 102, 'Συλίκου', 0),
('Λεμεσός', 103, 'Σωτήρα', 0),
('Λεμεσός', 104, 'Τραχώνι', 0),
('Λεμεσός', 105, 'Τρεις Ελιές', 0),
('Λεμεσός', 106, 'Τριμίκλινη', 0),
('Λεμεσός', 107, 'Τσερκέζ Τσιφτλίκ', 0),
('Λεμεσός', 108, 'Ύψωνας', 0),
('Λεμεσός', 109, 'Φασούλα', 0),
('Λεμεσός', 110, 'Φοινί', 0),
('Λεμεσός', 111, 'Φοινικάρια', 0),
('Λεμεσός', 112, 'Χανδριά', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
