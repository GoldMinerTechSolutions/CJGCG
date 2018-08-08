-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Jul-2018 às 05:47
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydbpdo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `client`
--

CREATE TABLE `client` (
  `NO_CLIENTE` varchar(90) NOT NULL,
  `SEXO` enum('M','F') DEFAULT NULL,
  `DT_NASCIMENTO` date DEFAULT NULL,
  `NO_BAIRRO` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `NO_CIDADE` varchar(90) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `NO_ENDERECO` text CHARACTER SET utf8 COLLATE utf8_bin,
  `CEP` varchar(8) DEFAULT NULL,
  `TP_RESIDENCIA` varchar(25) DEFAULT NULL,
  `ALUGUEL` enum('S','N') DEFAULT NULL,
  `CLIENT_PAI` varchar(90) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `CLIENT_MAE` varchar(90) DEFAULT NULL,
  `NATURALIDADE` varchar(45) DEFAULT NULL,
  `NO_UF` varchar(2) DEFAULT NULL,
  `ESTADO_CIVIL` varchar(11) NOT NULL,
  `TELEFONE_RES` varchar(11) NOT NULL,
  `TELEFONE_CEL` varchar(11) NOT NULL,
  `EMAIL` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `client`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
