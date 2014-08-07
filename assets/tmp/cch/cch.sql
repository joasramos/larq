-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 06/08/2014 às 23h32min
-- Versão do Servidor: 5.5.38
-- Versão do PHP: 5.3.10-1ubuntu3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `cch`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apendice`
--

CREATE TABLE IF NOT EXISTS `apendice` (
  `idapendice` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idapendice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `artefato`
--

CREATE TABLE IF NOT EXISTS `artefato` (
  `idartefato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idartefato`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `artefato`
--

INSERT INTO `artefato` (`idartefato`, `nome`) VALUES
(1, 'Vasilhame Inteiro'),
(2, 'Fragmento de Vasilhame'),
(3, 'Prato Inteiro'),
(4, 'Fragmento de Prato'),
(5, 'Estatueta Inteira'),
(6, 'Fragmento de Estatueta'),
(7, 'Fuso Inteiro'),
(8, 'Fragmento de Fuso'),
(9, 'Cálice Inteiro'),
(10, 'Fragmento de Cálice'),
(11, 'Fragmento');

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
  `idnatureza` int(11) NOT NULL,
  `idartefato` int(11) NOT NULL,
  `idcontorno` int(11) NOT NULL,
  `idforma` int(11) NOT NULL,
  `idlabio` int(11) NOT NULL,
  `idborda` int(11) NOT NULL,
  `idparede` int(11) NOT NULL,
  `idbase` int(11) NOT NULL,
  `idflexao` int(11) NOT NULL,
  `idapendice` int(11) NOT NULL,
  `idespessura` int(11) NOT NULL,
  `idqueima` int(11) NOT NULL,
  `idtempero` int(11) NOT NULL,
  `idtecnica` int(11) NOT NULL,
  `idtratamento` int(11) NOT NULL,
  `iddecoracao` int(11) NOT NULL,
  `id_local_decoracao` int(11) NOT NULL,
  `id_tipo_decoracao` int(11) NOT NULL,
  `idmotivo` int(11) NOT NULL,
  `iddecoracao_plastica` int(11) NOT NULL,
  `idtafonomia` int(11) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `base`
--

CREATE TABLE IF NOT EXISTS `base` (
  `idbase` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idbase`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `base`
--

INSERT INTO `base` (`idbase`, `nome`) VALUES
(1, 'Plana'),
(2, 'Côncava'),
(3, 'Plana Côncava'),
(4, 'Arredondada'),
(5, 'Em Pedestal'),
(6, 'Anelar'),
(7, 'Cônica'),
(8, 'Trípoda'),
(9, 'Tetrapoda'),
(10, 'Polípoda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `borda`
--

CREATE TABLE IF NOT EXISTS `borda` (
  `idborda` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idborda`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `borda`
--

INSERT INTO `borda` (`idborda`, `nome`) VALUES
(1, 'Direta'),
(2, 'Expandida'),
(3, 'Extrovertida'),
(4, 'Reforçada Internamente'),
(5, 'Dobrada'),
(6, 'Reforçada Externamente'),
(7, 'Cambada'),
(8, 'Contraída'),
(9, 'Vasada'),
(10, 'Introvertida'),
(11, 'Vertical'),
(12, 'Inclinada Interna'),
(13, 'Inclinada Externa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contorno`
--

CREATE TABLE IF NOT EXISTS `contorno` (
  `idcontorno` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idcontorno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `contorno`
--

INSERT INTO `contorno` (`idcontorno`, `nome`) VALUES
(1, 'Simples'),
(2, 'Composto'),
(3, 'Infletido'),
(4, 'Complexo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cor`
--

CREATE TABLE IF NOT EXISTS `cor` (
  `idcor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `cor_engobo` tinyint(1) DEFAULT NULL,
  `cor_super_externa` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idcor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `cor`
--

INSERT INTO `cor` (`idcor`, `nome`, `cor_engobo`, `cor_super_externa`) VALUES
(1, 'Branco', NULL, NULL),
(2, 'Vermelho', NULL, NULL),
(3, 'Preto', NULL, NULL),
(4, 'Vinho', NULL, NULL),
(5, 'Laranja', NULL, NULL),
(6, 'Creme', NULL, NULL),
(7, 'Amarelo', NULL, NULL),
(8, 'Marrom', NULL, NULL),
(9, 'Cinza', NULL, NULL),
(10, 'Negativo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `decoracao`
--

CREATE TABLE IF NOT EXISTS `decoracao` (
  `iddecoracao` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`iddecoracao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `decoracao`
--

INSERT INTO `decoracao` (`iddecoracao`, `nome`) VALUES
(1, 'Possui'),
(2, 'Não Possui');

-- --------------------------------------------------------

--
-- Estrutura da tabela `decoracao_plastica`
--

CREATE TABLE IF NOT EXISTS `decoracao_plastica` (
  `iddecoracao_plastica` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`iddecoracao_plastica`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `decoracao_plastica`
--

INSERT INTO `decoracao_plastica` (`iddecoracao_plastica`, `nome`) VALUES
(1, 'Incisão'),
(2, 'Incisão em zig zag'),
(3, 'Excisão'),
(4, 'Apliques'),
(5, 'Ungulado'),
(6, 'Corrugado'),
(7, 'Escovado'),
(8, 'Ponteado'),
(9, 'Acanalado'),
(10, 'Imbricado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `espessura`
--

CREATE TABLE IF NOT EXISTS `espessura` (
  `idespessura` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idespessura`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `espessura`
--

INSERT INTO `espessura` (`idespessura`, `nome`) VALUES
(1, 'Borda'),
(2, 'Base'),
(3, 'Parede');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forma`
--

CREATE TABLE IF NOT EXISTS `forma` (
  `idforma` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idforma`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `forma`
--

INSERT INTO `forma` (`idforma`, `nome`) VALUES
(1, 'Esférica'),
(2, 'Meia esfera'),
(3, 'Meia calota'),
(4, 'Cônica'),
(5, 'Ovoide'),
(6, 'Cilíndrica'),
(7, 'Carenada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `idartefato`
--

CREATE TABLE IF NOT EXISTS `idartefato` (
  `idartefato` int(11) NOT NULL,
  `idcor` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idartefato`,`idcor`),
  KEY `fk_idartefato_artefatos1` (`idartefato`),
  KEY `fk_idartefato_cor1` (`idcor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `inflexao`
--

CREATE TABLE IF NOT EXISTS `inflexao` (
  `idflexao` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idflexao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `inflexao`
--

INSERT INTO `inflexao` (`idflexao`, `nome`) VALUES
(1, 'Possui'),
(2, 'Não Possui');

-- --------------------------------------------------------

--
-- Estrutura da tabela `labio`
--

CREATE TABLE IF NOT EXISTS `labio` (
  `idlabio` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idlabio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `labio`
--

INSERT INTO `labio` (`idlabio`, `nome`) VALUES
(1, 'Plano'),
(2, 'Redondo'),
(3, 'Apontado'),
(4, 'Biselado'),
(5, 'Serrilhado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `local_decoracao`
--

CREATE TABLE IF NOT EXISTS `local_decoracao` (
  `id_local_decoracao` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_local_decoracao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `local_decoracao`
--

INSERT INTO `local_decoracao` (`id_local_decoracao`, `nome`) VALUES
(1, 'Interna'),
(2, 'Externa'),
(3, 'Ambas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `motivo`
--

CREATE TABLE IF NOT EXISTS `motivo` (
  `idmotivo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idmotivo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `motivo`
--

INSERT INTO `motivo` (`idmotivo`, `nome`) VALUES
(1, 'Linhas Horizontais'),
(2, 'Linhas Verticais'),
(3, 'Linhas Onduladas'),
(4, 'Círculos'),
(5, 'Triângulos'),
(6, 'Volutas'),
(7, 'Espirais'),
(8, 'Composição Antropomorfa'),
(9, 'Composição Zoomorfa'),
(10, 'Composição Antropozoomorfa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `natureza_peca`
--

CREATE TABLE IF NOT EXISTS `natureza_peca` (
  `idnatureza` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idnatureza`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `natureza_peca`
--

INSERT INTO `natureza_peca` (`idnatureza`, `nome`) VALUES
(1, 'Cerâmico'),
(2, 'Lítico'),
(3, 'Osso'),
(4, 'Malacológico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `parede`
--

CREATE TABLE IF NOT EXISTS `parede` (
  `idparede` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idparede`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `parede`
--

INSERT INTO `parede` (`idparede`, `nome`) VALUES
(1, 'Possui'),
(2, 'Não Possui');

-- --------------------------------------------------------

--
-- Estrutura da tabela `participante`
--

CREATE TABLE IF NOT EXISTS `participante` (
  `idparti` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `idade` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`idparti`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `participante`
--

INSERT INTO `participante` (`idparti`, `nome`, `idade`, `email`) VALUES
(1, 'Joas Ramos', 23, 'sirjoasramosaraujo@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `queima`
--

CREATE TABLE IF NOT EXISTS `queima` (
  `idqueima` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idqueima`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `queima`
--

INSERT INTO `queima` (`idqueima`, `nome`) VALUES
(1, 'Oxidante'),
(2, 'Redutora'),
(3, 'Sanduiche');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tafonomia`
--

CREATE TABLE IF NOT EXISTS `tafonomia` (
  `idtafonomia` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idtafonomia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `tafonomia`
--

INSERT INTO `tafonomia` (`idtafonomia`, `nome`) VALUES
(1, 'Bem Preservado'),
(2, 'Mal Preservado'),
(3, 'Erodido'),
(4, 'Sem a Camada Superficial'),
(5, 'Perda de Pintura'),
(6, 'Superfície Friável'),
(7, 'Acúmulo de Substâncias Externas'),
(8, 'Poeira'),
(9, 'Salinidade'),
(10, 'Umidade'),
(11, 'Ferrugem'),
(12, 'Fungo'),
(13, 'Estado Regular '),
(14, 'Sujidades ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnica_manufatura`
--

CREATE TABLE IF NOT EXISTS `tecnica_manufatura` (
  `idtecnica` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idtecnica`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tecnica_manufatura`
--

INSERT INTO `tecnica_manufatura` (`idtecnica`, `nome`) VALUES
(1, 'Acordelamento'),
(2, 'Modelado'),
(3, 'Moldado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tempero`
--

CREATE TABLE IF NOT EXISTS `tempero` (
  `idtempero` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idtempero`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `tempero`
--

INSERT INTO `tempero` (`idtempero`, `nome`) VALUES
(1, 'Mineral'),
(2, 'Quartzo'),
(3, 'Carvão'),
(4, 'Caco Moído'),
(5, 'Areia'),
(6, 'Argila'),
(7, 'Concha'),
(8, 'Osso'),
(9, 'Cauixi'),
(10, 'Cariapé');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_decoracao`
--

CREATE TABLE IF NOT EXISTS `tipo_decoracao` (
  `id_tipo_decoracao` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_decoracao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tipo_decoracao`
--

INSERT INTO `tipo_decoracao` (`id_tipo_decoracao`, `nome`) VALUES
(1, 'Pintada Externamente'),
(2, 'Pintada Internamente'),
(3, 'Decoração Plástica'),
(4, 'Engobo Interno'),
(5, 'Engobo Externo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tratamento_superficie`
--

CREATE TABLE IF NOT EXISTS `tratamento_superficie` (
  `idtratamento` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idtratamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `tratamento_superficie`
--

INSERT INTO `tratamento_superficie` (`idtratamento`, `nome`) VALUES
(1, 'Alisamento'),
(2, 'Escovado'),
(3, 'Polimento'),
(4, 'Brunidura'),
(5, 'Resina'),
(6, 'Engobo'),
(7, 'Estriado');

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `artefatos`
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

--
-- Restrições para a tabela `idartefato`
--
ALTER TABLE `idartefato`
  ADD CONSTRAINT `fk_idartefato_artefatos1` FOREIGN KEY (`idartefato`) REFERENCES `artefatos` (`idartefatos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_idartefato_cor1` FOREIGN KEY (`idcor`) REFERENCES `cor` (`idcor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
