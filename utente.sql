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
-- Table structure for table `utente`
--

DROP TABLE IF EXISTS `utente`;
CREATE TABLE IF NOT EXISTS `utente` (
  `U_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Gen` varchar(9) NOT NULL,
  `DataDeNascimento` date NOT NULL,
  `Morada` varchar(100) NOT NULL,
  `Tel` int(9) NOT NULL,
  `CS` int(9) NOT NULL,
  `Peso` int(3) NOT NULL,
  `Altura` int(5) NOT NULL,
  `Fotografia` blob NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Tipo` varchar(20) NOT NULL DEFAULT 'utente',
  `Data de Registo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Actividade` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`U_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='Utentes';

--
-- Dumping data for table `utente`
--

INSERT INTO `utente` (`U_ID`, `Nome`, `Username`, `Password`, `Gen`, `DataDeNascimento`, `Morada`, `Tel`, `CS`, `Peso`, `Altura`, `Fotografia`, `Email`, `Tipo`, `Data de Registo`, `Actividade`) VALUES
(10, 'JosÃ© Francisco Fernandes', 'ze90', 'ze90', 'male', '1990-10-09', 'Rua dos Bombeiros', 923545446, 142316765, 87, 183, 0x24666f746f677261666961, 'zefernandes90@gmail.com', 'utente', '2017-12-09 19:54:02', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
