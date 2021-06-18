-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 18-Jun-2021 às 04:26
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `monitoramento`
--

CREATE TABLE IF NOT EXISTS `monitoramento` (
  `id_monitoramento` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) NOT NULL,
  `dominio_ponte` varchar(500) NOT NULL,
  `dominio_final` varchar(500) NOT NULL,
  `extensao_arquivo` varchar(10) NOT NULL,
  `periodicidade` int(11) NOT NULL,
  `codigo_rash` varchar(32) NOT NULL,
  `cod_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_monitoramento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `monitoramento`
--

INSERT INTO `monitoramento` (`id_monitoramento`, `titulo`, `dominio_ponte`, `dominio_final`, `extensao_arquivo`, `periodicidade`, `codigo_rash`, `cod_usuario`) VALUES
(1, 'Fundos de investimento, documentos: informes diarios ', 'http://landpage-h.cgu.gov.br/dadosabertos/index.php?url=http://dados.cvm.gov.br/dados/FI/DOC/INF_DIARIO/META/meta_inf_diario_fi.txt', 'http://dados.cvm.gov.br/dados/FI/DOC/INF_DIARIO/META/meta_inf_diario_fi.txt', 'csv', 1, 'd41d8cd98f00b204e9800998ecf8427e', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nome` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `cargo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `email`, `senha`, `cargo`, `id_usuario`) VALUES
('chris', 'Christian.c.g.f777@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2, 1),
('amanda', 'amanda@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2, 2),
('joana', 'joana@email.com', '202cb962ac59075b964b07152d234b70', 2, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
