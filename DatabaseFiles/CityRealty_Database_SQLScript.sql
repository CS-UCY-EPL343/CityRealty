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
-- Table structure for table `Building`
--

CREATE TABLE IF NOT EXISTS `Building` (
  `RealEstateNo` int(10) unsigned NOT NULL,
  `ConstructionYear` year(4) NOT NULL,
  `Renovated` tinyint(1) NOT NULL DEFAULT '0',
  `RenovationYear` year(4) NOT NULL,
  `NumOfFloors` tinyint(4) NOT NULL DEFAULT '0',
  `ParkingSpots` tinyint(4) NOT NULL DEFAULT '0',
  `NumOfRooms` tinyint(4) NOT NULL DEFAULT '1',
  `NumOfWC` tinyint(4) NOT NULL DEFAULT '1',
  `FloorType` int(11) NOT NULL,
  `Frames` int(11) NOT NULL,
  `Drainage` tinyint(1) NOT NULL DEFAULT '0',
  `EnergyCertificate` enum('Unknown','Class A','Class B','Class C','Class D') COLLATE utf8_bin NOT NULL DEFAULT 'Unknown',
  `LocationDetails` int(11) NOT NULL,
  `BuildingDetails` int(11) NOT NULL,
  `Levels` enum('0','1','2','3','4','5') COLLATE utf8_bin NOT NULL DEFAULT '0',
  `HeatingFuel` enum('Άλλο','Πετρέλαιο','Γκάζι','Ηλεκτρική','Τζάκι','Κλιματισμός') COLLATE utf8_bin NOT NULL DEFAULT 'Άλλο',
  `HeatingType` enum('Άλλο','Κεντρική','Ανεξάρτητη','Κοινόχρηστη') COLLATE utf8_bin NOT NULL DEFAULT 'Άλλο',
  `AvgSharedCosts` double NOT NULL DEFAULT '0',
  `UnderConstruction` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`RealEstateNo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `BuildingDetails`
--

CREATE TABLE IF NOT EXISTS `BuildingDetails` (
  `BDΝο` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(35) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`BDΝο`),
  UNIQUE KEY `Description` (`Description`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- Dumping data for table `BuildingDetails`
--

INSERT INTO `BuildingDetails` (`BDΝο`, `Description`) VALUES
(1, 'Διατηρητέο'),
(2, 'Φωτεινό'),
(3, 'Μοντέρνα αρχιτεκτονική'),
(4, 'Ευρύχωρο'),
(5, 'Κλασσική αρχιτεκτονική'),
(6, 'Αέρινο'),
(7, 'Παλιό ανακαινισμένο'),
(8, 'Πέτρινο'),
(9, 'Πολυτελείας'),
(10, 'Με πισίνα');

-- --------------------------------------------------------

--
-- Table structure for table `BuildingFloorType`
--

CREATE TABLE IF NOT EXISTS `BuildingFloorType` (
  `FloorTypeNo` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`FloorTypeNo`),
  UNIQUE KEY `Description` (`Description`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `BuildingFloorType`
--

INSERT INTO `BuildingFloorType` (`FloorTypeNo`, `Description`) VALUES
(1, 'Παρκέ'),
(2, 'Συνθετικό παρκέ'),
(3, 'Παραδοσιακό παρκέ'),
(4, 'Πλακάκια'),
(5, 'Μάρμαρα'),
(6, 'Τσιμεντοκονίαμα');

-- --------------------------------------------------------

--
-- Table structure for table `BuildingLocationDetails`
--

CREATE TABLE IF NOT EXISTS `BuildingLocationDetails` (
  `DetailNo` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(35) NOT NULL,
  PRIMARY KEY (`DetailNo`),
  UNIQUE KEY `Description` (`Description`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `BuildingLocationDetails`
--

INSERT INTO `BuildingLocationDetails` (`DetailNo`, `Description`) VALUES
(1, 'Σε καλή τοποθεσία'),
(2, 'Κεντρική τοποθεσία'),
(3, 'Κέντρο'),
(4, 'Κοντά σε σχολεία'),
(5, 'Κοντά σε καταστήματα'),
(6, 'Σε ήσυχη γειτονιά'),
(7, 'Σε αδιέξοδο'),
(8, 'Κοντά στο κέντρο'),
(9, 'Μακριά από το κέντρο'),
(10, 'Κοντά σε πανεπιστήμιο'),
(11, 'Κοντά σε εστιατόρια'),
(12, 'Κοντά σε mall');

-- --------------------------------------------------------

--
-- Table structure for table `CityFamagusta`
--

CREATE TABLE IF NOT EXISTS `CityFamagusta` (
  `Αμμόχωστος` varchar(25) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `CityFamagusta`
--

INSERT INTO `CityFamagusta` (`Αμμόχωστος`) VALUES
('Αγία Νάπα'),
('Ακανθού'),
('Αμμόχωστος'),
('Αυγόρου'),
('Αχερίτου'),
('Άχνα'),
('Άγιος Ανδρόνικος'),
('Άγιος Γεώργιος'),
('Άγιος Ευστάθιος'),
('Άγιος Ηλίας'),
('Άγιος Θεόδωρος'),
('Άγιος Ιάκωβος'),
('Άγιος Νικόλαος'),
('Άγιος Σέργιος'),
('Άγιος Συμεών'),
('Άγιος Χαρίτων'),
('Αγκαστίνα'),
('Αλόα'),
('Άρδανα'),
('Αρναδί'),
('Άρτεμη'),
('Άσσια'),
('Αυγολίδα'),
('Αμμοχώστου'),
('Βαθύλακας'),
('Βασίλι'),
('Βατυλή'),
('Βιτσάδα'),
('Βουκολίδα'),
('Γαϊδουράς'),
('Γαλάτεια'),
('Γαληνόπορνη'),
('Γαστριά'),
('Γέναγρα'),
('Γεράνι'),
('Γιαλούσα'),
('Γούφες'),
('Γύψου'),
('Δερύνεια'),
('Δαυλός'),
('Έγκωμη'),
('Εφτακώμη'),
('Καλοψίδα'),
('Κνώδαρα'),
('Κοιλάνεμος'),
('Κοντέα'),
('Κορνόκηπος'),
('Κορόβια'),
('Κούκλια'),
('Κρίδια'),
('Κώμα του Γιαλού'),
('Κώμη Κεπίρ'),
('Λευκόνοικο'),
('Λύση'),
('Λιοπέτρι'),
('Λάπαθος'),
('Λειβάδια'),
('Λεονάρισσο'),
('Λιμνιά'),
('Λυθράγκωμη'),
('Μακράσυκα'),
('Μάντρες'),
('Μαράθα'),
('Μαραθόβουνος'),
('Μελάναρκα'),
('Μελούντα'),
('Μηλιά'),
('Μοναρκά'),
('Μουσουλίτα'),
('Μπογάζι'),
('Νέτα'),
('Όβγορος'),
('Παραλίμνι'),
('Πατρίκι'),
('Περιβόλια'),
('Περιστερώνα'),
('Πηγή'),
('Πλατάνι'),
('Πλατανισσός'),
('Πραστειό'),
('Πυργά'),
('Ριζοκάρπασο'),
('Σωτήρα'),
('Σανταλάρης'),
('Σίντα'),
('Σπαθαρικό'),
('Στρογγυλός'),
('Στύλλοι'),
('Σύγκραση'),
('Ταύρου'),
('Τζιάος'),
('Τρίκωμο'),
('Τρυπημένη'),
('Φρέναρος'),
('Φλαμούδι'),
('Ψυλλάτος');

-- --------------------------------------------------------

--
-- Table structure for table `CityLarnaca`
--

CREATE TABLE IF NOT EXISTS `CityLarnaca` (
  `Λάρνακα` varchar(25) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `CityLarnaca`
--

INSERT INTO `CityLarnaca` (`Λάρνακα`) VALUES
('Περβόλια'),
('Πάνω Λεύκαρα'),
('Ορμήδεια'),
('Ορόκλινη'),
('Όρα'),
('Οδού'),
('Ξυλοφάγου'),
('Ξυλοτύμπου'),
('Μελούσια'),
('Μοσφιλωτή'),
('Μενόγια'),
('Μενού'),
('Μελίνη'),
('Μαρώνι'),
('Μαρί'),
('Μαζωτός'),
('Λειβάδια'),
('Λάγια'),
('Λάρνακα'),
('Κοφίνου'),
('Κόσιη'),
('Κόρνος'),
('Κλαυδιά'),
('Κίτι'),
('Κιβισίλι'),
('Κελλιά'),
('Κάτω Λεύκαρα'),
('Κάτω Δρυς'),
('Καλό Χωριό'),
('Καλαβασός'),
('Ζύγι'),
('Δρομολαξιά'),
('Δελίκηπος'),
('Βάβλα'),
('Βαβατσινιά'),
('Άρσος'),
('Απλάντα'),
('Αναφωτία'),
('Αλεθρικό'),
('Αλαμινός'),
('Άγιος Θεόδωρος'),
('Αγίοι Βαβατσινιάς'),
('Αγγλισίδες'),
('Αβδελλερό'),
('Αραδίππου'),
('Αθηένου'),
('Πετροφάνι'),
('Πύλα'),
('Πύργα'),
('Πέργαμος'),
('Σκαρίνου'),
('Σοφτάδες'),
('Τερσεφάνου'),
('Τόχνη'),
('Τρούλλοι'),
('Τρεμετουσιά'),
('Χοιροκοιτία'),
('Ψεματισμένος'),
('Ψευδάς');

-- --------------------------------------------------------

--
-- Table structure for table `CityLimassol`
--

CREATE TABLE IF NOT EXISTS `CityLimassol` (
  `Λεμεσός` varchar(25) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `CityLimassol`
--

INSERT INTO `CityLimassol` (`Λεμεσός`) VALUES
('Άγιος Αθανάσιος'),
('Άγιος Αμβρόσιος'),
('Άγιος Γεώργιος'),
('Άγιος Δημήτριος'),
('Άγιος Θεόδωρος'),
('Άγιος Θεράπων'),
('Άγιος Θωμάς'),
('Άγιος Ιωάννης'),
('Άγιος Κωνσταντίνος'),
('Άγιος Μάμας'),
('Άγιος Παύλος'),
('Άγιος Τύχωνας'),
('Αγρίδια'),
('Αγρός'),
('Ακαπνού'),
('Ακρούντα'),
('Ακρωτήρι'),
('Άλασσα'),
('Αλέκτορα'),
('Αμίαντος'),
('Ανώγυρα'),
('Απαισιά'),
('Αρακαπάς'),
('Αρμενοχώρι'),
('Άρσος'),
('Ασγάτα'),
('Ασώματος'),
('Αυδήμου'),
('Αψιού'),
('Βάσα'),
('Βάσα'),
('Βίκλα'),
('Βουνί'),
('Γερμασόγεια'),
('Γεράσα'),
('Γεροβάσα'),
('Διερώνα'),
('Δορά'),
('Δύμες'),
('Δωρός'),
('Επισκοπή'),
('Ερήμη'),
('Εφταγώνια'),
('Ζωοπηγή'),
('Κάτω Πολεμίδια'),
('Καλό Χωριό'),
('Καμινάρια'),
('Καντού'),
('Καπηλειό'),
('Κάτω Κυβίδες'),
('Κάτω Μύλος'),
('Κάτω Πλάτρες'),
('Κελλάκι'),
('Κισσούσα'),
('Κλωνάρι'),
('Κοιλάνι'),
('Κολόσσι'),
('Κορφή'),
('Κουκά'),
('Κυπερούντα'),
('Λεμεσός'),
('Λάνια'),
('Λεμύθου'),
('Λιμνάτης'),
('Λουβαράς'),
('Λόφου'),
('Μέσα Γειτονιά'),
('Μαθηκολώνη'),
('Μαλλιά'),
('Μαντριά'),
('Μονάγρι'),
('Μοναγρούλλι'),
('Μονή'),
('Μονιάτης'),
('Μουτταγιάκα'),
('Όμοδος'),
('Παλαιόμυλος'),
('Παλώδια'),
('Πάνω Κυβίδες'),
('Πάνω Πλάτρες'),
('Πάνω Πολεμίδια'),
('Παραμάλι'),
('Παραμύθα'),
('Παρεκκλήσια'),
('Πάχνα'),
('Πελαθούσα'),
('Πελένδρι'),
('Πεντάκωμο'),
('Πέρα Πεδί'),
('Πισσούρι'),
('Πλατανίσκια'),
('Ποταμιού'),
('Ποταμίτισσα'),
('Πραστειό'),
('Πραστειό'),
('Πρόδρομος'),
('Πύργος'),
('Σανίδα'),
('Σούνι'),
('Σπιτάλι'),
('Συκόπετρα'),
('Συλίκου'),
('Σωτήρα'),
('Τραχώνι'),
('Τρεις Ελιές'),
('Τριμίκλινη'),
('Τσερκέζ Τσιφτλίκ'),
('Ύψωνας'),
('Φασούλα'),
('Φοινί'),
('Φοινικάρια'),
('Χανδριά');

-- --------------------------------------------------------

--
-- Table structure for table `CityNicosia`
--

CREATE TABLE IF NOT EXISTS `CityNicosia` (
  `Λευκωσία` varchar(25) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `CityNicosia`
--

INSERT INTO `CityNicosia` (`Λευκωσία`) VALUES
('Παλαίκυθρο'),
('Ποταμιά'),
('Ποτάμι'),
('Πολύστυπος'),
('Πολιτικό'),
('Πλατανιστάσα'),
('Πηγαίνια'),
('Περιστερώνα'),
('Πέρα Χωριό'),
('Πέρα Ορεινής'),
('Πεδουλάς'),
('Παχύαμμος'),
('Πάνω Πύργος'),
('Πάνω Κουτραφάς'),
('Πάνω Δευτερά'),
('Παλαιχώρι'),
('Παλαιομέτοχο'),
('Ορτά Κιογιού'),
('Ορούντα'),
('Οίκος'),
('Ξερόβουνος'),
('Ξυλιάτος'),
('Νικήτας'),
('Νέο Χωριό'),
('Αληθινού'),
('Νικητάρι'),
('Νήσου'),
('Μπέη Κιογιού'),
('Μόρα'),
('Μια Μηλιά'),
('Μαρκό'),
('Μάσαρι'),
('Μουτουλλάς'),
('Μιτσερό'),
('Μηλικούρι'),
('Μένοικο'),
('Μαρκί'),
('Μάμμαρι'),
('Μαλούντα'),
('Μαθιάτης'),
('Λουτρός'),
('Μόρφου'),
(''),
('Άγιος Δομέτιος'),
('Αγλαντζιά'),
('Λουρουτζίνα'),
('Λύμπια'),
('Λυθροδόντας'),
('Λινού'),
('Λειβάδια'),
('Λαζανιά'),
('Λαγουδερά'),
('Λευκωσία'),
('Λεύκα'),
('Λατσιά'),
('Λακατάμια'),
('Κυρά'),
('Κουρού Μοναστήρι'),
('Κόκκινα'),
('Κιόνελι'),
('Κατωκοπιά'),
('Κάτω Ζώδια'),
('Καραβοστάσι'),
('Κανλί'),
('Καλυβάκια'),
('Καλό Χωριό'),
('Καζιβερά'),
('Κοράκου'),
('Κοτσιάτης'),
('Κοκκινοτριμιθιά'),
('Κλήρου'),
('Κάτω Πύργος'),
('Κάτω Μονή'),
('Κάτω Κουτραφάς'),
('Κάτω Δευτερά'),
('Κατύδατα'),
('Καταλυόντας'),
('Καπέδες'),
('Καννάβια'),
('Κάμπος'),
('Καμπιά'),
('Καμπί'),
('Καλοπαναγιώτης'),
('Καλλιάνα'),
('Καλό Χωριό'),
('Κακοπετριά'),
('Ακάκι'),
('Αλάμπρα'),
('Αλεύκα'),
('Άγιος Σωζόμενος'),
('Αγροκηπιά'),
('Άγιος Ιωάννης'),
('Άγιος Νικόλαος'),
('Άγιος Γεώργιος'),
('Άγιος Επιφάνειος'),
('Άγιος Θεόδωρος'),
('Αγία Άννα'),
('Αγία Βαρβάρα'),
('Αγία Ειρήνη'),
('Αγία Μαρίνα'),
('Αγίοι Ηλιόφωτοι'),
('Αγίοι Τριμιθιάς'),
('Κυθρέα'),
('Επηχώ'),
('Έξω Μετόχι'),
('Ελιά'),
('Ευρύχου'),
('Εργάτες'),
('Επισκοπειό'),
('Εγκώμη'),
('Δυο Ποταμοί'),
('Δένεια'),
('Δάλι'),
('Γερόλακκος'),
('Γαληνή'),
('Γούρρι'),
('Γέρι'),
('Γερακιές'),
('Γαλατά'),
('Βώνη'),
('Βυζακιά'),
('Βροΐσια'),
('Βαρίσια'),
('Αυλώνα'),
('Αργάκι'),
('Αμπελικού'),
('Αμμαδιές'),
('Αγυιά Κεπίρ'),
('Αγκολέμι'),
('Άγιος Βασίλειος'),
('Αγία Μαρίνα'),
('Αστρομερίτης'),
('Ασκάς'),
('Αρεδιού'),
('Απλίκι'),
('Ανθούπολη'),
('Αναλυόντας'),
('Αναδιού'),
('Ανάγυια'),
('Άλωνα'),
('Πάνω Ζώδια'),
('Πεντάγυια'),
('Περιστερωνάρι'),
('Πέτρα'),
('Πέτρα του Διγενή'),
('Πραστειό'),
('Πυρόι'),
('Στρόβολος'),
('Σαράντι'),
('Σελλάιν του Άππη'),
('Σιά'),
('Σινά Όρος'),
('Σκουριώτισσα'),
('Σπήλια'),
('Σκυλλούρα'),
('Συριανοχώρι'),
('Τεμπριά'),
('Τσακκίστρα'),
('Τσέρι'),
('Τράχωνας'),
('Τραχώνι'),
('Τύμπου'),
('Φαρμακάς'),
('Φλάσου'),
('Φτερικούδι'),
('Φυκάρδου'),
('Φιλιά'),
('Χαμίτ Μάντρες'),
('Ψημολόφου');

-- --------------------------------------------------------

--
-- Table structure for table `CityPafos`
--

CREATE TABLE IF NOT EXISTS `CityPafos` (
  `CityName` varchar(15) COLLATE utf8_bin NOT NULL DEFAULT 'Pafos',
  `RegionCode` varchar(4) COLLATE utf8_bin NOT NULL,
  `RegionName` varchar(25) COLLATE utf8_bin NOT NULL,
  `NumOfListings` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `CityPafos`
--

INSERT INTO `CityPafos` (`CityName`, `RegionCode`, `RegionName`, `NumOfListings`) VALUES
('Pafos', 'abar', 'Αγία Βαρβάρα', 0),
('Pafos', 'amar', 'Αγία Μαρίνα', 0),
('Pafos', 'smrd', 'Αγία Μαρινούδα', 0),
('Pafos', 'sgeo', 'Άγιος Γεώργιος', 0),
('Pafos', 'sdim', 'Άγιος Δημητριανός', 0),
('Pafos', 'sisi', 'Άγιος Ισίδωρος', 0),
('Pafos', 'sioa', 'Άγιος Ιωάννης', 0),
('Pafos', 'snik', 'Άγιος Νικόλαος', 0),
('Pafos', 'aku', 'Ακουρσός', 0),
('Pafos', 'amar', 'Αμαργέτη', 0),
('Pafos', 'anar', 'Αναρίτα', 0),
('Pafos', 'andr', 'Ανδρολύκου', 0),
('Pafos', 'axil', 'Αξύλου', 0),
('Pafos', 'arga', 'Αργάκα', 0),
('Pafos', 'armi', 'Αρμίνου', 0),
('Pafos', 'armu', 'Άρμου', 0),
('Pafos', 'aspr', 'Ασπρογιά', 0),
('Pafos', 'axel', 'Αχέλεια', 0),
('Pafos', 'bret', 'Βρέτσια', 0),
('Pafos', 'gero', 'Γεροσκήπου', 0),
('Pafos', 'gala', 'Γαλαταριά', 0),
('Pafos', 'gial', 'Γιαλιά', 0),
('Pafos', 'giol', 'Γιόλου', 0),
('Pafos', 'goud', 'Γουδί', 0),
('Pafos', 'drou', 'Δρούσια', 0),
('Pafos', 'drim', 'Δρύμου', 0),
('Pafos', 'drin', 'Δρυνιά', 0),
('Pafos', 'eled', 'Ελεδιώ', 0),
('Pafos', 'empa', 'Έμπα', 0),
('Pafos', 'epis', 'Επισκοπή', 0),
('Pafos', '', 'Ευρέτου', 0),
('Pafos', '', 'Ζαχαριά', 0),
('Pafos', '', 'Θελέτρα', 0),
('Pafos', '', 'Ίνια', 0),
('Pafos', '', 'Ιστιντζιόν', 0),
('Pafos', '', 'Κάθηκας', 0),
('Pafos', '', 'Καλλέπια', 0),
('Pafos', '', 'Κανναβιού', 0),
('Pafos', '', 'Καραμούλληδες', 0),
('Pafos', '', 'Κάτω Ακουρδάλια', 0),
('Pafos', '', 'Κάτω Αρόδες', 0),
('Pafos', '', 'Κέδαρες', 0),
('Pafos', '', 'Κελοκέδαρα', 0),
('Pafos', '', 'Κιδάσι', 0),
('Pafos', '', 'Κινούσα', 0),
('Pafos', '', 'Κισσόνεργα', 0),
('Pafos', '', 'Κοίλη', 0),
('Pafos', '', 'Κοιλίνια', 0),
('Pafos', '', 'Κονιά', 0),
('Pafos', '', 'Κούκλια', 0),
('Pafos', '', 'Κούρτακα', 0),
('Pafos', '', 'Κρήτου Μαρόττου', 0),
('Pafos', '', 'Κρήτου', 0),
('Pafos', '', 'Λαπηθιού', 0),
('Pafos', '', 'Λάσα', 0),
('Pafos', '', 'Λειβάδι', 0),
('Pafos', '', 'Λέμπα', 0),
('Pafos', '', 'Λεμώνα', 0),
('Pafos', '', 'Λετύμπου', 0),
('Pafos', '', 'Λουκρούνου', 0),
('Pafos', '', 'Λυσός', 0),
('Pafos', '', 'Μακούντα', 0),
('Pafos', '', 'Μαμούνταλι', 0),
('Pafos', '', 'Μαμώνια', 0),
('Pafos', '', 'Μαντριά', 0),
('Pafos', '', 'Μαραθούντα', 0),
('Pafos', '', 'Μάρωνας', 0),
('Pafos', '', 'Μελάδια', 0),
('Pafos', '', 'Μελάνδρα', 0),
('Pafos', '', 'Μέσα Χωριό', 0),
('Pafos', '', 'Μέσανα', 0),
('Pafos', '', 'Μεσόγη', 0),
('Pafos', '', 'Μηλιά', 0),
('Pafos', '', 'Μηλιού', 0),
('Pafos', '', 'Μούσερε', 0),
('Pafos', '', 'Νατά', 0),
('Pafos', '', 'Νέα Δήμματα', 0),
('Pafos', '', 'Νέο Χωριό', 0),
('Pafos', '', 'Νικόκλεια', 0),
('Pafos', '', 'Πάφος', 0),
('Pafos', '', 'Πέγεια', 0),
('Pafos', '', 'Πόλη Χρυσοχούς', 0),
('Pafos', '', 'Πάνω Ακουρδάλια', 0),
('Pafos', '', 'Πάνω Αρόδες', 0),
('Pafos', '', 'Πάνω Αρχιμανδρίτα', 0),
('Pafos', '', 'Πάνω Παναγιά', 0),
('Pafos', '', 'Πενταλιά', 0),
('Pafos', '', 'Περιστερώνα', 0),
('Pafos', '', 'Πιταρκού', 0),
('Pafos', '', 'Πολέμι', 0),
('Pafos', '', 'Πραιτώρι', 0),
('Pafos', '', 'Πραστειό', 0),
('Pafos', '', 'Πωμός', 0),
('Pafos', '', 'Σαλαμιού', 0),
('Pafos', '', 'Σαραμά', 0),
('Pafos', '', 'Σίμου', 0),
('Pafos', '', 'Σκούλλι', 0),
('Pafos', '', 'Σουσκιού', 0),
('Pafos', '', 'Στάτος', 0),
('Pafos', '', 'Σταυροκόννου', 0),
('Pafos', '', 'Στενή', 0),
('Pafos', '', 'Στρουμπί', 0),
('Pafos', '', 'Τάλα', 0),
('Pafos', '', 'Τέρρα', 0),
('Pafos', '', 'Τίμη', 0),
('Pafos', '', 'Τραχυπέδουλα', 0),
('Pafos', '', 'Τρεμιθούσα', 0),
('Pafos', '', 'Τσάδα', 0),
('Pafos', '', 'Φάλια', 0),
('Pafos', '', 'Φασλί', 0),
('Pafos', '', 'Φασούλα', 0),
('Pafos', '', 'Φιλούσα', 0),
('Pafos', '', 'Φοίνικας', 0),
('Pafos', '', 'Φοίτη', 0),
('Pafos', '', 'Χλώρακα', 0),
('Pafos', '', 'Χολέτρια', 0),
('Pafos', '', 'Χόλη', 0),
('Pafos', '', 'Χούλου', 0),
('Pafos', '', 'Χρυσοχού', 0),
('Pafos', '', 'Ψάθι', 0);

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
-- Table structure for table `Frames`
--

CREATE TABLE IF NOT EXISTS `Frames` (
  `FramesNo` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(35) NOT NULL,
  PRIMARY KEY (`FramesNo`),
  UNIQUE KEY `Description` (`Description`),
  UNIQUE KEY `Description_2` (`Description`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `Frames`
--

INSERT INTO `Frames` (`FramesNo`, `Description`) VALUES
(1, 'Αλουμινίου'),
(2, 'Κάγκελο'),
(3, 'Ξίλινα'),
(4, 'Θερμομονοτικά'),
(5, 'Μονά'),
(6, 'Διπλά'),
(7, 'Ασφαλείας'),
(8, 'Σίτες'),
(9, 'Ηλεκτρικά ρολά'),
(10, 'Blinds'),
(11, 'Τέντες'),
(12, 'Κουρτίνες'),
(13, 'Πόρτα ασφαλείας'),
(14, 'Ανακλεινόμενα παράθυρα'),
(15, 'Συρόμενες πόρτες'),
(16, 'Ανοιγόμενα'),
(17, 'Παράθυρα'),
(18, 'Συρόμενα παράθυρα');

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
