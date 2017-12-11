-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 11, 2017 at 02:02 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim`
--

-- --------------------------------------------------------

--
-- Table structure for table `nutricionista`
--

DROP TABLE IF EXISTS `nutricionista`;
CREATE TABLE IF NOT EXISTS `nutricionista` (
  `N_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Data de Registo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Tipo` varchar(20) NOT NULL DEFAULT 'nutricionista',
  `Actividade` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`N_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='Nutricionistas';

--
-- Dumping data for table `nutricionista`
--

INSERT INTO `nutricionista` (`N_ID`, `Nome`, `Username`, `Password`, `Email`, `Data de Registo`, `Tipo`, `Actividade`) VALUES
(1, 'Sandra Melo dos Santos', 'Sandra', 'NutriSandra', 'sandramelo@sapo.pt', '2017-12-08 17:24:47', 'nutricionista', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
