-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 08-Jun-2021 às 04:26
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `monitor_lab`
--
CREATE DATABASE IF NOT EXISTS `monitor_lab` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `monitor_lab`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `id_adm` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id_adm`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id_adm`, `email`, `senha`) VALUES
(1, 'christian.g@aluno.ifsp.edu.br', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_a_monitorar`
--

CREATE TABLE IF NOT EXISTS `dados_a_monitorar` (
  `id_dados_a_monitorar` int(11) NOT NULL DEFAULT '0',
  `titulo` varchar(500) NOT NULL,
  `dominio_ponte` varchar(500) NOT NULL,
  `dominio_principal` varchar(500) NOT NULL,
  `extencao_arquivo` varchar(10) NOT NULL,
  `periodicidade` float NOT NULL,
  `disponibilidade` int(11) NOT NULL,
  PRIMARY KEY (`id_dados_a_monitorar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nome` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
