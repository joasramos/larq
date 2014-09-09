-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Set-2014 às 02:12
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `larq`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artefatos`
--

CREATE TABLE IF NOT EXISTS `artefatos` (
  `idartefatos` int(11) NOT NULL AUTO_INCREMENT,
  `numero_inventario` varchar(45) DEFAULT NULL,
  `flange_labial` varchar(45) DEFAULT NULL,
  `flange_mesial` varchar(45) DEFAULT NULL,
  `altura` varchar(45) DEFAULT NULL,
  `diametro` varchar(45) DEFAULT NULL,
  `marcas_uso` varchar(45) DEFAULT NULL,
  `filiacao_cultural` varchar(45) DEFAULT NULL,
  `filiacao` varchar(45) DEFAULT NULL,
  `perfil_borda` varchar(45) DEFAULT NULL,
  `reconstituicao_artefato` varchar(45) DEFAULT NULL,
  `fotografia` varchar(45) DEFAULT NULL,
  `data` varchar(45) DEFAULT NULL,
  `idnatureza` int(11) DEFAULT NULL,
  `idartefato` int(11) DEFAULT NULL,
  `idcontorno` int(11) DEFAULT NULL,
  `idforma` int(11) DEFAULT NULL,
  `idlabio` int(11) DEFAULT NULL,
  `idborda` int(11) DEFAULT NULL,
  `idparede` int(11) DEFAULT NULL,
  `idbase` int(11) DEFAULT NULL,
  `idflexao` int(11) DEFAULT NULL,
  `idapendice` int(11) DEFAULT NULL,
  `idespessura` int(11) DEFAULT NULL,
  `idqueima` int(11) DEFAULT NULL,
  `idtempero` int(11) DEFAULT NULL,
  `idtecnica` int(11) DEFAULT NULL,
  `idtratamento` int(11) DEFAULT NULL,
  `iddecoracao` int(11) DEFAULT NULL,
  `id_local_decoracao` int(11) DEFAULT NULL,
  `id_tipo_decoracao` int(11) DEFAULT NULL,
  `idmotivo` int(11) DEFAULT NULL,
  `iddecoracao_plastica` int(11) DEFAULT NULL,
  `idtafonomia` int(11) DEFAULT NULL,
  PRIMARY KEY (`idartefatos`),
  KEY `fk_artefatos_natureza_peca` (`idnatureza`),
  KEY `fk_artefatos_artefato1` (`idartefato`),
  KEY `fk_artefatos_contorno1` (`idcontorno`),
  KEY `fk_artefatos_forma1` (`idforma`),
  KEY `fk_artefatos_labio1` (`idlabio`),
  KEY `fk_artefatos_borda1` (`idborda`),
  KEY `fk_artefatos_parede1` (`idparede`),
  KEY `fk_artefatos_base1` (`idbase`),
  KEY `fk_artefatos_inflexao1` (`idflexao`),
  KEY `fk_artefatos_apendice1` (`idapendice`),
  KEY `fk_artefatos_espessura1` (`idespessura`),
  KEY `fk_artefatos_queima1` (`idqueima`),
  KEY `fk_artefatos_tempero1` (`idtempero`),
  KEY `fk_artefatos_tecnica_manufatura1` (`idtecnica`),
  KEY `fk_artefatos_tratamento_superficie1` (`idtratamento`),
  KEY `fk_artefatos_decoracao1` (`iddecoracao`),
  KEY `fk_artefatos_local_decoracao1` (`id_local_decoracao`),
  KEY `fk_artefatos_tipo_decoracao1` (`id_tipo_decoracao`),
  KEY `fk_artefatos_motivo1` (`idmotivo`),
  KEY `fk_artefatos_decoracao_plastica1` (`iddecoracao_plastica`),
  KEY `fk_artefatos_tafonomia1` (`idtafonomia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `artefatos`
--

INSERT INTO `artefatos` (`idartefatos`, `numero_inventario`, `flange_labial`, `flange_mesial`, `altura`, `diametro`, `marcas_uso`, `filiacao_cultural`, `filiacao`, `perfil_borda`, `reconstituicao_artefato`, `fotografia`, `data`, `idnatureza`, `idartefato`, `idcontorno`, `idforma`, `idlabio`, `idborda`, `idparede`, `idbase`, `idflexao`, `idapendice`, `idespessura`, `idqueima`, `idtempero`, `idtecnica`, `idtratamento`, `iddecoracao`, `id_local_decoracao`, `id_tipo_decoracao`, `idmotivo`, `iddecoracao_plastica`, `idtafonomia`) VALUES
(1, '1235', '', '', '', '', '', '', '', '', '', '', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `artefatos`
--
ALTER TABLE `artefatos`
  ADD CONSTRAINT `fk_artefatos_apendice1` FOREIGN KEY (`idapendice`) REFERENCES `apendice` (`idapendice`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artefatos_artefato1` FOREIGN KEY (`idartefato`) REFERENCES `artefato` (`idartefato`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artefatos_base1` FOREIGN KEY (`idbase`) REFERENCES `base` (`idbase`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artefatos_borda1` FOREIGN KEY (`idborda`) REFERENCES `borda` (`idborda`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artefatos_contorno1` FOREIGN KEY (`idcontorno`) REFERENCES `contorno` (`idcontorno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artefatos_decoracao1` FOREIGN KEY (`iddecoracao`) REFERENCES `decoracao` (`iddecoracao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artefatos_decoracao_plastica1` FOREIGN KEY (`iddecoracao_plastica`) REFERENCES `decoracao_plastica` (`iddecoracao_plastica`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artefatos_espessura1` FOREIGN KEY (`idespessura`) REFERENCES `espessura` (`idespessura`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artefatos_forma1` FOREIGN KEY (`idforma`) REFERENCES `forma` (`idforma`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artefatos_inflexao1` FOREIGN KEY (`idflexao`) REFERENCES `inflexao` (`idflexao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artefatos_labio1` FOREIGN KEY (`idlabio`) REFERENCES `labio` (`idlabio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artefatos_local_decoracao1` FOREIGN KEY (`id_local_decoracao`) REFERENCES `local_decoracao` (`id_local_decoracao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artefatos_motivo1` FOREIGN KEY (`idmotivo`) REFERENCES `motivo` (`idmotivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artefatos_natureza_peca` FOREIGN KEY (`idnatureza`) REFERENCES `natureza_peca` (`idnatureza`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artefatos_parede1` FOREIGN KEY (`idparede`) REFERENCES `parede` (`idparede`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artefatos_queima1` FOREIGN KEY (`idqueima`) REFERENCES `queima` (`idqueima`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artefatos_tafonomia1` FOREIGN KEY (`idtafonomia`) REFERENCES `tafonomia` (`idtafonomia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artefatos_tecnica_manufatura1` FOREIGN KEY (`idtecnica`) REFERENCES `tecnica_manufatura` (`idtecnica`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artefatos_tempero1` FOREIGN KEY (`idtempero`) REFERENCES `tempero` (`idtempero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artefatos_tipo_decoracao1` FOREIGN KEY (`id_tipo_decoracao`) REFERENCES `tipo_decoracao` (`id_tipo_decoracao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artefatos_tratamento_superficie1` FOREIGN KEY (`idtratamento`) REFERENCES `tratamento_superficie` (`idtratamento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
