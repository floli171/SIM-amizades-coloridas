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
-- Table structure for table `investigador`
--

DROP TABLE IF EXISTS `investigador`;
CREATE TABLE IF NOT EXISTS `investigador` (
  `I_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Tipo` varchar(20) NOT NULL DEFAULT 'investigador',
  `Data de Registo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Actividade` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`I_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Investigadores';

--
-- Dumping data for table `investigador`
--

INSERT INTO `investigador` (`I_ID`, `Nome`, `Username`, `Password`, `Email`, `Tipo`, `Data de Registo`, `Actividade`) VALUES
(1, 'Roberto Fonseca Dias', 'Roberto', 'InvRoberto', 'roberto79@gmail.com', 'investigador', '2017-12-08 17:17:34', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
