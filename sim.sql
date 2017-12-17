-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 17-Dez-2017 às 18:38
-- Versão do servidor: 5.7.19
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
-- Estrutura da tabela `alimentos`
--

DROP TABLE IF EXISTS `alimentos`;
CREATE TABLE IF NOT EXISTS `alimentos` (
  `R_ID` int(11) NOT NULL AUTO_INCREMENT,
  `C_ID` int(11) NOT NULL,
  `Conselho` text NOT NULL,
  PRIMARY KEY (`R_ID`),
  KEY `C_ID` (`C_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Alimentação';

-- --------------------------------------------------------

--
-- Estrutura da tabela `assistente`
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
  `Actividade` tinyint(1) NOT NULL,
  PRIMARY KEY (`AS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `assistente`
--

INSERT INTO `assistente` (`AS_ID`, `Nome`, `Username`, `Password`, `Email`, `Tipo`, `Data de Registo`, `Actividade`) VALUES
(1, 'Filipa Duque Fragoso Almeida Carvalho', 'Duque', 'Carvalho', 'fd.carvalho@campus.fct.unl.pt', 'assistente', '2017-12-08 00:00:00', 1),
(2, 'AndrÃ© Oliveira', 'Oliveira', 'Ribeiro', 'ard.oliveira@campus.fct.unl.pt', 'assistente', '2017-12-11 20:55:48', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comida_dia`
--

DROP TABLE IF EXISTS `comida_dia`;
CREATE TABLE IF NOT EXISTS `comida_dia` (
  `C_ID` int(11) NOT NULL AUTO_INCREMENT,
  `U_ID` int(11) NOT NULL,
  `Leite` int(11) NOT NULL,
  `Pao` int(11) DEFAULT NULL,
  `Ovos` int(11) DEFAULT NULL,
  `Peixe` int(11) DEFAULT NULL,
  `Vaca` int(11) NOT NULL,
  `Frango` int(11) NOT NULL,
  `Vegetais` int(11) NOT NULL,
  `Batata` int(11) NOT NULL,
  `Arroz` int(11) NOT NULL,
  `Fruta` int(11) NOT NULL,
  `Actividade` varchar(100) CHARACTER SET utf8 NOT NULL,
  `T` int(11) NOT NULL,
  `V` int(11) NOT NULL,
  `DataDeRegisto` date NOT NULL,
  PRIMARY KEY (`C_ID`),
  KEY `U_ID` (`U_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1 COMMENT='Alimentação Diária';

--
-- Extraindo dados da tabela `comida_dia`
--

INSERT INTO `comida_dia` (`C_ID`, `U_ID`, `Leite`, `Pao`, `Ovos`, `Peixe`, `Vaca`, `Frango`, `Vegetais`, `Batata`, `Arroz`, `Fruta`, `Actividade`, `T`, `V`, `DataDeRegisto`) VALUES
(16, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '2017-12-16'),
(21, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'running', 0, 0, '2017-12-17'),
(22, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'running', 0, 0, '2017-12-17'),
(23, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'running', 0, 0, '2017-12-17'),
(24, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'running', 0, 0, '2017-12-17'),
(25, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'running', 0, 0, '2017-12-17'),
(26, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'running', 0, 0, '2017-12-17'),
(27, 8, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'running', 0, 0, '2017-12-15'),
(28, 8, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'running', 0, 0, '2017-12-16'),
(29, 8, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'running', 0, 0, '2017-12-17'),
(30, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'running', 0, 0, '2017-12-17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `investigador`
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Investigadores';

--
-- Extraindo dados da tabela `investigador`
--

INSERT INTO `investigador` (`I_ID`, `Nome`, `Username`, `Password`, `Email`, `Tipo`, `Data de Registo`, `Actividade`) VALUES
(1, 'Roberto Fonseca Dias', 'Roberto', 'InvRoberto', 'roberto79@gmail.com', 'investigador', '2017-12-08 17:17:34', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nutricionista`
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Nutricionistas';

--
-- Extraindo dados da tabela `nutricionista`
--

INSERT INTO `nutricionista` (`N_ID`, `Nome`, `Username`, `Password`, `Email`, `Data de Registo`, `Tipo`, `Actividade`) VALUES
(1, 'Sandra Melo dos Santos', 'Sandra', 'NutriSandra', 'sandramelo@sapo.pt', '2017-12-08 17:24:47', 'nutricionista', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `utente`
--

DROP TABLE IF EXISTS `utente`;
CREATE TABLE IF NOT EXISTS `utente` (
  `U_ID` int(11) NOT NULL AUTO_INCREMENT,
  `N_ID` int(11) DEFAULT NULL,
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
  PRIMARY KEY (`U_ID`),
  KEY `N_ID` (`N_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='Utentes';

--
-- Extraindo dados da tabela `utente`
--

INSERT INTO `utente` (`U_ID`, `N_ID`, `Nome`, `Username`, `Password`, `Gen`, `DataDeNascimento`, `Morada`, `Tel`, `CS`, `Peso`, `Altura`, `Fotografia`, `Email`, `Tipo`, `Data de Registo`, `Actividade`) VALUES
(2, 1, 'JosÃ© Francisco Fernandes', 'ze90', 'ze90', 'male', '1980-08-03', 'Rua Filetes de Pescada', 914204204, 420420420, 70, 170, 0x24666f746f677261666961, 'jose@campus.fct.unl.pt', 'utente', '2017-12-16 17:36:05', 1),
(3, 1, 'Francisca Almeida', 'Francisca', 'almeida', 'female', '1962-06-04', 'Rua da Alfazema', 888888888, 777777777, 77, 77, 0x24666f746f677261666961, 'fr.almeida', 'utente', '2017-12-16 18:52:03', 1),
(4, NULL, 'Ana Eloy', 'Eloy', 'eloy', 'Feminino', '1986-04-03', 'Avenida da de brasilia', 911890272, 234897654, 50, 157, 0x24666f746f677261666961, 'eloy@maat.pt', 'utente', '2017-12-17 14:58:55', 1),
(5, NULL, 'Carla Maria QuintÃ£o', 'Carla', 'Quintao', 'Masculino', '1979-04-04', 'fct.unl.pt', 918762738, 998989898, 60, 160, 0x24666f746f677261666961, 'c.quintao@fct.unl.pt', 'utente', '2017-12-17 15:03:14', 1),
(6, 1, 'Gustavo Ferreira', 'Guga', 'ferro', 'Feminino', '1979-03-05', 'Caralho', 666666666, 420420420, 80, 180, 0x24666f746f677261666961, 'gelados@ola.pt', 'utente', '2017-12-17 17:05:42', 1),
(7, NULL, 'Guilherme Oliveira', 'Guilherme', 'Oliveira', 'Masculino', '1992-06-03', 'Praceta do Alecrim', 913901040, 420420420, 90, 173, 0x24666f746f677261666961, 'gkidroliveira@hotmail.com', 'utente', '2017-12-17 17:59:06', 1),
(8, 1, 'Madalena Lourenco', 'Madalena', 'balecas', 'Feminino', '1996-12-03', 'Faro', 912738493, 383829283, 45, 165, 0x24666f746f677261666961, 'mada@fac.pt', 'utente', '2017-12-17 18:03:26', 1);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `alimentos`
--
ALTER TABLE `alimentos`
  ADD CONSTRAINT `C_ID` FOREIGN KEY (`C_ID`) REFERENCES `comida_dia` (`C_ID`);

--
-- Limitadores para a tabela `comida_dia`
--
ALTER TABLE `comida_dia`
  ADD CONSTRAINT `U_ID` FOREIGN KEY (`U_ID`) REFERENCES `utente` (`U_ID`);

--
-- Limitadores para a tabela `utente`
--
ALTER TABLE `utente`
  ADD CONSTRAINT `N_ID` FOREIGN KEY (`N_ID`) REFERENCES `nutricionista` (`N_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
