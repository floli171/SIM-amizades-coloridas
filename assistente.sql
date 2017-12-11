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
-- Table structure for table `assistente`
--

DROP TABLE IF EXISTS `assistente`;
CREATE TABLE IF NOT EXISTS `assistente` (
  `AS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Tipo` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'assistente',
  `Data de Registo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`AS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assistente`
--

INSERT INTO `assistente` (`AS_ID`, `Nome`, `Username`, `Password`, `Email`, `Tipo`, `Data de Registo`) VALUES
(1, 'Filipa Duque Fragoso Almeida Carvalho', 'Duque', 'Carvalho', 'fd.carvalho@campus.fct.unl.pt', 'assistente', '2017-12-08 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
