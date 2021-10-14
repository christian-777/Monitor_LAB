-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 05-Jul-2021 às 19:28
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
  `codificacao` varchar(300) NOT NULL,
  `cod_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_monitoramento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `monitoramento`
--

INSERT INTO `monitoramento` (`id_monitoramento`, `titulo`, `dominio_ponte`, `dominio_final`, `extensao_arquivo`, `periodicidade`, `codigo_rash`, `codificacao`, `cod_usuario`) VALUES
(1, 'Fundos de investimento, documentos: informes diarios ', 'http://landpage-h.cgu.gov.br/dadosabertos/index.php?url=http://dados.cvm.gov.br/dados/FI/DOC/INF_DIARIO/META/meta_inf_diario_fi.txt', 'http://dados.cvm.gov.br/dados/FI/DOC/INF_DIARIO/META/meta_inf_diario_fi.txt', 'csv', 1, 'bc055bead7c83810800956cd481974fe', '', 2),
(2, 'Teste - Beluzo', 'http://beluzo.com.br', 'http://beluzo.com.br/api/teste_monitor.php', 'csv', 1, '81a8d1a598ec28d07218e9694414c8f8', '', 2),
(3, 'teste php', 'localhost:8081', 'http://localhost:8081/monitor_lab/teste.php', 'php', 1, 'd41d8cd98f00b204e9800998ecf8427e', '', 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `email`, `senha`, `cargo`, `id_usuario`) VALUES
('chris', 'Christian.c.g.f777@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2, 1),
('amanda', 'amanda@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2, 2),
('joana', 'joana@email.com', '202cb962ac59075b964b07152d234b70', 2, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `versoes`
--

CREATE TABLE IF NOT EXISTS `versoes` (
  `id_versoes` int(11) NOT NULL AUTO_INCREMENT,
  `cod_monitoramento` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `dominio_final` varchar(300) NOT NULL,
  `extensao_arquivo` varchar(300) NOT NULL,
  `data` varchar(300) NOT NULL,
  `conteudo` longtext NOT NULL,
  `codificacao` varchar(300) NOT NULL,
  PRIMARY KEY (`id_versoes`),
  KEY `cod_monitoramento` (`cod_monitoramento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `versoes`
--

INSERT INTO `versoes` (`id_versoes`, `cod_monitoramento`, `titulo`, `dominio_final`, `extensao_arquivo`, `data`, `conteudo`, `codificacao`) VALUES
(10, 1, 'Fundos de investimento, documentos: informes diarios ', 'http://dados.cvm.gov.br/dados/FI/DOC/INF_DIARIO/META/meta_inf_diario_fi.txt', 'csv', '22-06-2021', '-----------------------\r\nCampo: CAPTC_DIA\r\n-----------------------\r\n   Descri??o : Capta??o do dia\r\n   Dom?nio   : Num?rico\r\n   Tipo Dados: numeric\r\n   Precis?o  : 17\r\n   Scale     : 2\r\n\r\n-----------------------\r\nCampo: CNPJ_FUNDO\r\n-----------------------\r\n   Descri??o : CNPJ do fundo\r\n   Dom?nio   : Alfanum?rico\r\n   Tipo Dados: varchar\r\n   Tamanho   : 20\r\n\r\n-----------------------\r\nCampo: DT_COMPTC\r\n-----------------------\r\n   Descri??o : Data de compet?ncia do documento\r\n   Dom?nio   : AAAA-MM-DD\r\n   Tipo Dados: date\r\n   Tamanho   : 10\r\n\r\n-----------------------\r\nCampo: NR_COTST\r\n-----------------------\r\n   Descri??o : N?mero de cotistas\r\n   Dom?nio   : Num?rico\r\n   Tipo Dados: int\r\n   Precis?o  : 10\r\n   Scale     : 0\r\n\r\n-----------------------\r\nCampo: RESG_DIA\r\n-----------------------\r\n   Descri??o : Resgate no dia\r\n   Dom?nio   : Num?rico\r\n   Tipo Dados: numeric\r\n   Precis?o  : 17\r\n   Scale     : 2\r\n\r\n-----------------------\r\nCampo: TP_FUNDO\r\n-----------------------\r\n   Descri??o : Tipo de fundo\r\n   Dom?nio   : Alfanum?rico\r\n   Tipo Dados: varchar\r\n   Tamanho   : 15\r\n\r\n-----------------------\r\nCampo: VL_PATRIM_LIQ\r\n-----------------------\r\n   Descri??o : Valor do patrim?nio l?quido\r\n   Dom?nio   : Num?rico\r\n   Tipo Dados: numeric\r\n   Precis?o  : 17\r\n   Scale     : 2\r\n\r\n-----------------------\r\nCampo: VL_QUOTA\r\n-----------------------\r\n   Descri??o : Valor da cota\r\n   Dom?nio   : Num?rico\r\n   Tipo Dados: numeric\r\n   Precis?o  : 27\r\n   Scale     : 12\r\n\r\n-----------------------\r\nCampo: VL_TOTAL\r\n-----------------------\r\n   Descri??o : Valor total da carteira\r\n   Dom?nio   : Num?rico\r\n   Tipo Dados: numeric\r\n   Precis?o  : 17\r\n   Scale     : 2\r\n\r\n', ''),
(11, 2, 'Teste - Beluzo', 'http://beluzo.com.br/api/teste_monitor.php', 'csv', '24/06/2021', 'Teste beluzo;teste X; teste Z', ''),
(18, 2, 'Teste - Beluzo', 'http://beluzo.com.br/api/teste_monitor.php', 'csv', '24/06/2021', 'Teste beluzo;teste X; teste a', ''),
(19, 2, 'Teste - Beluzo', 'http://beluzo.com.br/api/teste_monitor.php', 'csv', '24/06/2021', 'Teste beluzo;teste X; teste b', ''),
(20, 2, 'Teste - Beluzo', 'http://beluzo.com.br/api/teste_monitor.php', 'csv', '24/06/2021', 'Teste beluzo;teste X; teste g', ''),
(21, 2, 'Teste - Beluzo', 'http://beluzo.com.br/api/teste_monitor.php', 'csv', '24/06/2021', 'Teste beluzo;teste X; teste l', ''),
(22, 2, 'Teste - Beluzo', 'http://beluzo.com.br/api/teste_monitor.php', 'csv', '24/06/2021', 'Teste beluzo;teste X; teste m', ''),
(23, 3, 'teste php', 'http://localhost:8081/monitor_lab/teste.php', 'php', '29/06/2021 - 18:36:10', '', '');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `versoes`
--
ALTER TABLE `versoes`
  ADD CONSTRAINT `versoes_ibfk_1` FOREIGN KEY (`cod_monitoramento`) REFERENCES `monitoramento` (`id_monitoramento`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
