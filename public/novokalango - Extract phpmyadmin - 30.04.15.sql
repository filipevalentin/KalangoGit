-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Maio-2015 às 04:32
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `novokalango`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessosatividades`
--

CREATE TABLE IF NOT EXISTS `acessosatividades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idAluno` int(11) DEFAULT NULL,
  `idAtividade` int(11) DEFAULT NULL,
  `idQuestao` int(11) NOT NULL COMMENT 'Indica qual questao o aluno parou, não é FK, pois ela indica o número da posição da questao',
  `status` int(1) NOT NULL COMMENT '0: Iniciado, 1: Concluído',
  `DataAcesso` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_AcessoAtivi` (`idAluno`,`idAtividade`),
  KEY `FK_idAtiviAcesso` (`idAtividade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `id` int(11) NOT NULL DEFAULT '0',
  `codRegistro` int(11) NOT NULL,
  `cargo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_codRegistro` (`codRegistro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `administradores`
--

INSERT INTO `administradores` (`id`, `codRegistro`, `cargo`, `deleted_at`) VALUES
(1, 789, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(11) NOT NULL DEFAULT '0',
  `matricula` int(11) NOT NULL,
  `sobreMim` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dataNascimento` date NOT NULL,
  `dataVencimentoBoleto` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_matricula` (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `matricula`, `sobreMim`, `dataNascimento`, `dataVencimentoBoleto`, `deleted_at`) VALUES
(25, 2544, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(26, 1926, 'Sou a Rafaela, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(27, 4787, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(28, 4018, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(29, 9275, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(30, 5807, 'Sou a ChunLi e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(31, 8745, 'Olá, sou a Caroline e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades`
--

CREATE TABLE IF NOT EXISTS `atividades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` int(1) NOT NULL COMMENT '1: Conteudo de aula, 2: ativ. extra',
  `idAula` int(11) DEFAULT NULL COMMENT 'Só haverá valor nesse atributo caso a atividade seja do tipo 1 - Conteudo de aula, do contrário será null',
  `idCategoria` int(11) DEFAULT NULL,
  `idModulo` int(11) DEFAULT NULL COMMENT 'Só haverá valor nesse atributo caso a atividade seja do tipo 2 - ativ extra, do contrário será null',
  `idUsuario` int(11) DEFAULT NULL COMMENT 'Professor (apenas atividades extras) ou admin que criou a atividade',
  `DataElaboracao` date NOT NULL,
  `status` int(1) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_Atividade1` (`nome`,`idAula`),
  UNIQUE KEY `UK_Atividade2` (`nome`,`idModulo`),
  KEY `FK_idAulaAtiv` (`idAula`),
  KEY `FK_idCategAtiv` (`idCategoria`),
  KEY `FK_idModuloAtiv` (`idModulo`),
  KEY `FK_idUsuarioAtiv` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=121 ;

--
-- Extraindo dados da tabela `atividades`
--

INSERT INTO `atividades` (`id`, `nome`, `tipo`, `idAula`, `idCategoria`, `idModulo`, `idUsuario`, `DataElaboracao`, `status`, `deleted_at`) VALUES
(1, 'Atividade 1 - ', 1, 1, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(2, 'Atividade 2 - ', 1, 1, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(3, 'Atividade 1 - ', 1, 2, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(4, 'Atividade 2 - ', 1, 2, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(5, 'Atividade 1 - ', 1, 3, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(6, 'Atividade 2 - ', 1, 3, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(7, 'Atividade 1 - ', 1, 4, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(8, 'Atividade 2 - ', 1, 4, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(9, 'Atividade 1 - ', 1, 5, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(10, 'Atividade 2 - ', 1, 5, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(11, 'Atividade 1 - ', 1, 6, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(12, 'Atividade 2 - ', 1, 6, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(13, 'Atividade 1 - ', 1, 7, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(14, 'Atividade 2 - ', 1, 7, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(15, 'Atividade 1 - ', 1, 8, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(16, 'Atividade 2 - ', 1, 8, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(17, 'Atividade 1 - ', 1, 9, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(18, 'Atividade 2 - ', 1, 9, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(19, 'Atividade 1 - ', 1, 10, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(20, 'Atividade 2 - ', 1, 10, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(21, 'Atividade 1 - ', 1, 11, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(22, 'Atividade 2 - ', 1, 11, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(23, 'Atividade 1 - ', 1, 12, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(24, 'Atividade 2 - ', 1, 12, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(25, 'Atividade 1 - ', 1, 13, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(26, 'Atividade 2 - ', 1, 13, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(27, 'Atividade 1 - ', 1, 14, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(28, 'Atividade 2 - ', 1, 14, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(29, 'Atividade 1 - ', 1, 15, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(30, 'Atividade 2 - ', 1, 15, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(31, 'Atividade 1 - ', 1, 16, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(32, 'Atividade 2 - ', 1, 16, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(33, 'Atividade 1 - ', 1, 17, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(34, 'Atividade 2 - ', 1, 17, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(35, 'Atividade 1 - ', 1, 18, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(36, 'Atividade 2 - ', 1, 18, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(37, 'Atividade 1 - ', 1, 19, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(38, 'Atividade 2 - ', 1, 19, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(39, 'Atividade 1 - ', 1, 20, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(40, 'Atividade 2 - ', 1, 20, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(41, 'Atividade 1 - ', 1, 21, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(42, 'Atividade 2 - ', 1, 21, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(43, 'Atividade 1 - ', 1, 22, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(44, 'Atividade 2 - ', 1, 22, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(45, 'Atividade 1 - ', 1, 23, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(46, 'Atividade 2 - ', 1, 23, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(47, 'Atividade 1 - ', 1, 24, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(48, 'Atividade 2 - ', 1, 24, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(49, 'Atividade 1 - ', 1, 25, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(50, 'Atividade 2 - ', 1, 25, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(51, 'Atividade 1 - ', 1, 26, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(52, 'Atividade 2 - ', 1, 26, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(53, 'Atividade 1 - ', 1, 27, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(54, 'Atividade 2 - ', 1, 27, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(55, 'Atividade 1 - ', 1, 28, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(56, 'Atividade 2 - ', 1, 28, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(57, 'Atividade 1 - ', 1, 29, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(58, 'Atividade 2 - ', 1, 29, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(59, 'Atividade 1 - ', 1, 30, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(60, 'Atividade 2 - ', 1, 30, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(61, 'Atividade 1 - ', 1, 31, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(62, 'Atividade 2 - ', 1, 31, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(63, 'Atividade 1 - ', 1, 32, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(64, 'Atividade 2 - ', 1, 32, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(65, 'Atividade 1 - ', 1, 33, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(66, 'Atividade 2 - ', 1, 33, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(67, 'Atividade 1 - ', 1, 34, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(68, 'Atividade 2 - ', 1, 34, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(69, 'Atividade 1 - ', 1, 35, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(70, 'Atividade 2 - ', 1, 35, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(71, 'Atividade 1 - ', 1, 36, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(72, 'Atividade 2 - ', 1, 36, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(73, 'Atividade 1 - ', 1, 37, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(74, 'Atividade 2 - ', 1, 37, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(75, 'Atividade 1 - ', 1, 38, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(76, 'Atividade 2 - ', 1, 38, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(77, 'Atividade 1 - ', 1, 39, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(78, 'Atividade 2 - ', 1, 39, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(79, 'Atividade 1 - ', 1, 40, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(80, 'Atividade 2 - ', 1, 40, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(81, 'Atividade 1 - ', 1, 41, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(82, 'Atividade 2 - ', 1, 41, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(83, 'Atividade 1 - ', 1, 42, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(84, 'Atividade 2 - ', 1, 42, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(85, 'Atividade 1 - ', 1, 43, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(86, 'Atividade 2 - ', 1, 43, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(87, 'Atividade 1 - ', 1, 44, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(88, 'Atividade 2 - ', 1, 44, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(89, 'Atividade 1 - ', 1, 45, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(90, 'Atividade 2 - ', 1, 45, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(91, 'Atividade 1 - ', 1, 46, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(92, 'Atividade 2 - ', 1, 46, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(93, 'Atividade 1 - ', 1, 47, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(94, 'Atividade 2 - ', 1, 47, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(95, 'Atividade 1 - ', 1, 48, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(96, 'Atividade 2 - ', 1, 48, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(97, 'Atividade 1 - ', 1, 49, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(98, 'Atividade 2 - ', 1, 49, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(99, 'Atividade 1 - ', 1, 50, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(100, 'Atividade 2 - ', 1, 50, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(101, 'Atividade 1 - ', 1, 51, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(102, 'Atividade 2 - ', 1, 51, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(103, 'Atividade 1 - ', 1, 52, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(104, 'Atividade 2 - ', 1, 52, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(105, 'Atividade 1 - ', 1, 53, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(106, 'Atividade 2 - ', 1, 53, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(107, 'Atividade 1 - ', 1, 54, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(108, 'Atividade 2 - ', 1, 54, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(109, 'Atividade 1 - ', 1, 55, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(110, 'Atividade 2 - ', 1, 55, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(111, 'Atividade 1 - ', 1, 56, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(112, 'Atividade 2 - ', 1, 56, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(113, 'Atividade 1 - ', 1, 57, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(114, 'Atividade 2 - ', 1, 57, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(115, 'Atividade 1 - ', 1, 58, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(116, 'Atividade 2 - ', 1, 58, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(117, 'Atividade 1 - ', 1, 59, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(118, 'Atividade 2 - ', 1, 59, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(119, 'Atividade 1 - ', 1, 60, NULL, NULL, NULL, '0000-00-00', 1, NULL),
(120, 'Atividade 2 - ', 1, 60, NULL, NULL, NULL, '0000-00-00', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aulas`
--

CREATE TABLE IF NOT EXISTS `aulas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idModulo` int(11) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_Aula` (`titulo`,`idModulo`),
  KEY `FK_idModuloAula` (`idModulo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=61 ;

--
-- Extraindo dados da tabela `aulas`
--

INSERT INTO `aulas` (`id`, `titulo`, `idModulo`, `deleted_at`) VALUES
(1, 'Aula 1', 1, NULL),
(2, 'Aula 2', 1, NULL),
(3, 'Aula 3', 1, NULL),
(4, 'Aula 4', 1, NULL),
(5, 'Aula 5', 1, NULL),
(6, 'Aula 1', 2, NULL),
(7, 'Aula 2', 2, NULL),
(8, 'Aula 3', 2, NULL),
(9, 'Aula 4', 2, NULL),
(10, 'Aula 5', 2, NULL),
(11, 'Aula 1', 3, NULL),
(12, 'Aula 2', 3, NULL),
(13, 'Aula 3', 3, NULL),
(14, 'Aula 4', 3, NULL),
(15, 'Aula 5', 3, NULL),
(16, 'Aula 1', 4, NULL),
(17, 'Aula 2', 4, NULL),
(18, 'Aula 3', 4, NULL),
(19, 'Aula 4', 4, NULL),
(20, 'Aula 5', 4, NULL),
(21, 'Aula 1', 5, NULL),
(22, 'Aula 2', 5, NULL),
(23, 'Aula 3', 5, NULL),
(24, 'Aula 4', 5, NULL),
(25, 'Aula 5', 5, NULL),
(26, 'Aula 1', 6, NULL),
(27, 'Aula 2', 6, NULL),
(28, 'Aula 3', 6, NULL),
(29, 'Aula 4', 6, NULL),
(30, 'Aula 5', 6, NULL),
(31, 'Aula 1', 7, NULL),
(32, 'Aula 2', 7, NULL),
(33, 'Aula 3', 7, NULL),
(34, 'Aula 4', 7, NULL),
(35, 'Aula 5', 7, NULL),
(36, 'Aula 1', 8, NULL),
(37, 'Aula 2', 8, NULL),
(38, 'Aula 3', 8, NULL),
(39, 'Aula 4', 8, NULL),
(40, 'Aula 5', 8, NULL),
(41, 'Aula 1', 9, NULL),
(42, 'Aula 2', 9, NULL),
(43, 'Aula 3', 9, NULL),
(44, 'Aula 4', 9, NULL),
(45, 'Aula 5', 9, NULL),
(46, 'Aula 1', 10, NULL),
(47, 'Aula 2', 10, NULL),
(48, 'Aula 3', 10, NULL),
(49, 'Aula 4', 10, NULL),
(50, 'Aula 5', 10, NULL),
(51, 'Aula 1', 11, NULL),
(52, 'Aula 2', 11, NULL),
(53, 'Aula 3', 11, NULL),
(54, 'Aula 4', 11, NULL),
(55, 'Aula 5', 11, NULL),
(56, 'Aula 1', 12, NULL),
(57, 'Aula 2', 12, NULL),
(58, 'Aula 3', 12, NULL),
(59, 'Aula 4', 12, NULL),
(60, 'Aula 5', 12, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `avisos`
--

CREATE TABLE IF NOT EXISTS `avisos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `urlImagem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dataExpiracao` date NOT NULL,
  `idAdmin` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_idAdminAviso` (`idAdmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avisosturmas`
--

CREATE TABLE IF NOT EXISTS `avisosturmas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idAviso` int(11) DEFAULT NULL,
  `idTurma` int(11) DEFAULT NULL,
  `dataAviso` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_idAvisoTurmas` (`idAviso`,`idTurma`),
  KEY `FK_idTurmaAviso` (`idTurma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Categoria serve para separar as Atividades Extras em grupos, como Atividades de: Reforço, Halloween, Past Perfect, etc...',
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_nomeCategoria` (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contrata`
--

CREATE TABLE IF NOT EXISTS `contrata` (
  `idCurso` int(11) NOT NULL DEFAULT '0',
  `idTurma` int(11) NOT NULL DEFAULT '0',
  `idAluno` int(11) NOT NULL DEFAULT '0',
  `dtContratacao` date NOT NULL,
  PRIMARY KEY (`idCurso`,`idTurma`,`idAluno`),
  KEY `FK_idTurmaCtrata` (`idTurma`),
  KEY `FK_idAlunoCtrata` (`idAluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idIdioma` int(11) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_Curso` (`nome`,`idIdioma`),
  KEY `FK_idIdiomaCurso` (`idIdioma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`, `idIdioma`, `deleted_at`) VALUES
(1, 'Kids', 1, NULL),
(2, 'Teens', 1, NULL),
(3, 'Adult', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cnpj` int(15) DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `razaoSocial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_razaoSocial` (`razaoSocial`),
  UNIQUE KEY `UK_Cnpj` (`cnpj`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `idiomas`
--

CREATE TABLE IF NOT EXISTS `idiomas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_nomeIdioma` (`nome`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `idiomas`
--

INSERT INTO `idiomas` (`id`, `nome`, `deleted_at`) VALUES
(1, 'Inglês', NULL),
(2, 'Espanhol', NULL),
(3, 'Francês', NULL),
(4, 'Alemão', NULL),
(5, 'Mandarim', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `materialapoio`
--

CREATE TABLE IF NOT EXISTS `materialapoio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` int(1) DEFAULT NULL COMMENT '1 - Documento, 2 - Vídeo, 3 -Link',
  `idAula` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_idAulaMat` (`idAula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE IF NOT EXISTS `mensagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conteudo` varchar(1500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lida` int(1) DEFAULT NULL,
  `data` date NOT NULL,
  `idUsuarioOrigem` int(11) DEFAULT NULL,
  `idUsuarioDestino` int(11) DEFAULT NULL,
  `idRE` int(11) DEFAULT NULL COMMENT 'Indica o id da mensagem em resposta, caso exista',
  PRIMARY KEY (`id`),
  KEY `FK_idUsuarOrig` (`idUsuarioOrigem`),
  KEY `FK_idUsuarDest` (`idUsuarioDestino`),
  KEY `FK_idRE` (`idRE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `modulos`
--

CREATE TABLE IF NOT EXISTS `modulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idCurso` int(11) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_Modulo` (`nome`,`idCurso`),
  KEY `FK_idCurso` (`idCurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `modulos`
--

INSERT INTO `modulos` (`id`, `nome`, `idCurso`, `deleted_at`) VALUES
(1, 'Módulo 1', 1, NULL),
(2, 'Módulo 2', 1, NULL),
(3, 'Módulo 3', 1, NULL),
(4, 'Módulo 4', 1, NULL),
(5, 'Módulo 1', 2, NULL),
(6, 'Módulo 2', 2, NULL),
(7, 'Módulo 3', 2, NULL),
(8, 'Módulo 4', 2, NULL),
(9, 'Módulo 1', 3, NULL),
(10, 'Módulo 2', 3, NULL),
(11, 'Módulo 3', 3, NULL),
(12, 'Módulo 4', 3, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reminders`
--

CREATE TABLE IF NOT EXISTS `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_reminders_email_index` (`email`),
  KEY `password_reminders_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE IF NOT EXISTS `professores` (
  `id` int(11) NOT NULL DEFAULT '0',
  `REProf` int(11) NOT NULL,
  `ExperienciaProfissional` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `formacaoAcademica` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_REProf` (`REProf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`id`, `REProf`, `ExperienciaProfissional`, `formacaoAcademica`, `deleted_at`) VALUES
(1, 0, NULL, '', NULL),
(2, 1, NULL, '', NULL),
(3, 2, NULL, '', NULL),
(4, 3, NULL, '', NULL),
(5, 4, NULL, '', NULL),
(6, 5, NULL, '', NULL),
(7, 6, NULL, '', NULL),
(8, 7, NULL, '', NULL),
(9, 8, NULL, '', NULL),
(10, 9, NULL, '', NULL),
(11, 10, NULL, '', NULL),
(12, 20, NULL, '', NULL),
(13, 30, NULL, '', NULL),
(14, 40, NULL, '', NULL),
(15, 50, NULL, '', NULL),
(16, 60, NULL, '', NULL),
(17, 70, NULL, '', NULL),
(18, 80, NULL, '', NULL),
(19, 90, NULL, '', NULL),
(20, 100, NULL, '', NULL),
(21, 110, NULL, '', NULL),
(22, 120, NULL, '', NULL),
(23, 130, NULL, '', NULL),
(24, 140, NULL, '', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `propagandas`
--

CREATE TABLE IF NOT EXISTS `propagandas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `urlImagem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(350) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idEmpresa` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_cnpjEmpresa` (`idEmpresa`),
  KEY `FK_idUsuarProp` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE IF NOT EXISTS `questoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enunciado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `urlMidia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` int(10) DEFAULT NULL COMMENT 'indica a posicao/ordem da questao dentro de uma atividade',
  `tipo` int(1) DEFAULT NULL COMMENT '1-Multipla Escolha, 2-Dissertativa',
  `categoria` int(2) DEFAULT NULL COMMENT '1:texto, 2:imagem, 3:audio - 2 digitos (pergunta/resposta: 12 = texto/imagem) Dissertativa: 3 = reconhecimento de voz',
  `alternativaA` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alternativaB` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alternativaC` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alternativaD` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `respostaCerta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pontos` int(10) DEFAULT NULL,
  `idAtividade` int(11) DEFAULT NULL,
  `idTopico` int(11) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_idAtivQuestao` (`idAtividade`),
  KEY `FK_idTopicoQuest` (`idTopico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE IF NOT EXISTS `respostas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idAluno` int(11) DEFAULT NULL,
  `idQuestao` int(11) DEFAULT NULL,
  `respostaAluno` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correcao` int(1) NOT NULL COMMENT '0: errou, 1: acertou',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_Respostas` (`idAluno`,`idQuestao`),
  KEY `FK_idQuestResp` (`idQuestao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `topicos`
--

CREATE TABLE IF NOT EXISTS `topicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_nomeTopico` (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE IF NOT EXISTS `turmas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL COMMENT '0:Turma fechada/modulo concluido  1: Turma ativa/Alunos com aula',
  `idModulo` int(11) DEFAULT NULL,
  `idProfessor` int(11) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_Turma` (`nome`,`idModulo`),
  KEY `FK_idModuloTurma` (`idModulo`),
  KEY `FK_idProfessor` (`idProfessor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=61 ;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `nome`, `status`, `idModulo`, `idProfessor`, `deleted_at`) VALUES
(1, 'ING-K101', 1, 1, 1, NULL),
(2, 'ING-K102', 1, 1, 1, NULL),
(3, 'ING-K103', 1, 1, 2, NULL),
(4, 'ING-K104', 1, 1, 2, NULL),
(5, 'ING-K105', 1, 1, 3, NULL),
(6, 'ING-K201', 1, 2, 3, NULL),
(7, 'ING-K202', 1, 2, 4, NULL),
(8, 'ING-K203', 1, 2, 4, NULL),
(9, 'ING-K204', 1, 2, 5, NULL),
(10, 'ING-K205', 1, 2, 5, NULL),
(11, 'ING-K301', 1, 3, 6, NULL),
(12, 'ING-K302', 1, 3, 6, NULL),
(13, 'ING-K303', 1, 3, 7, NULL),
(14, 'ING-K304', 1, 3, 7, NULL),
(15, 'ING-K305', 1, 3, 8, NULL),
(16, 'ING-K401', 1, 4, 8, NULL),
(17, 'ING-K402', 1, 4, 9, NULL),
(18, 'ING-K403', 1, 4, 9, NULL),
(19, 'ING-K404', 1, 4, 10, NULL),
(20, 'ING-K405', 1, 4, 10, NULL),
(21, 'ING-T101', 1, 5, 11, NULL),
(22, 'ING-T102', 1, 5, 11, NULL),
(23, 'ING-T103', 1, 5, 12, NULL),
(24, 'ING-T104', 1, 5, 12, NULL),
(25, 'ING-T105', 1, 5, 13, NULL),
(26, 'ING-T201', 1, 6, 13, NULL),
(27, 'ING-T202', 1, 6, 14, NULL),
(28, 'ING-T203', 1, 6, 14, NULL),
(29, 'ING-T204', 1, 6, 15, NULL),
(30, 'ING-T205', 1, 6, 15, NULL),
(31, 'ING-T301', 1, 7, 16, NULL),
(32, 'ING-T302', 1, 7, 16, NULL),
(33, 'ING-T303', 1, 7, 17, NULL),
(34, 'ING-T304', 1, 7, 17, NULL),
(35, 'ING-T305', 1, 7, 18, NULL),
(36, 'ING-T401', 1, 8, 18, NULL),
(37, 'ING-T402', 1, 8, 19, NULL),
(38, 'ING-T403', 1, 8, 19, NULL),
(39, 'ING-T404', 1, 8, 20, NULL),
(40, 'ING-T405', 1, 8, 20, NULL),
(41, 'ING-A101', 1, 9, 21, NULL),
(42, 'ING-A102', 1, 9, 21, NULL),
(43, 'ING-A103', 1, 9, 22, NULL),
(44, 'ING-A104', 1, 9, 22, NULL),
(45, 'ING-A105', 1, 9, 23, NULL),
(46, 'ING-A201', 1, 10, 23, NULL),
(47, 'ING-A202', 1, 10, 24, NULL),
(48, 'ING-A203', 1, 10, 24, NULL),
(49, 'ING-A204', 1, 10, 1, NULL),
(50, 'ING-A205', 1, 10, 1, NULL),
(51, 'ING-A301', 1, 11, 2, NULL),
(52, 'ING-A302', 1, 11, 2, NULL),
(53, 'ING-A303', 1, 11, 3, NULL),
(54, 'ING-A304', 1, 11, 3, NULL),
(55, 'ING-A305', 1, 11, 4, NULL),
(56, 'ING-A401', 1, 12, 4, NULL),
(57, 'ING-A402', 1, 12, 5, NULL),
(58, 'ING-A403', 1, 12, 5, NULL),
(59, 'ING-A404', 1, 12, 6, NULL),
(60, 'ING-A405', 1, 12, 6, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmasalunos`
--

CREATE TABLE IF NOT EXISTS `turmasalunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idTurma` int(11) DEFAULT NULL,
  `idAluno` int(11) DEFAULT NULL,
  `pontuacao` int(10) NOT NULL COMMENT 'contabiliza os pontos adquiridos pelo aluno numa turma, é necessário para fazer o ranking do dashboard, e evitar que seja calculado o total de pontos toda vez que alguem acessar o dashboard, melhorando o desempenho',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_TurmasAlunos` (`idTurma`,`idAluno`),
  KEY `FK_idAlunoTurma` (`idAluno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `turmasalunos`
--

INSERT INTO `turmasalunos` (`id`, `idTurma`, `idAluno`, `pontuacao`) VALUES
(1, 1, 25, 0),
(2, 1, 26, 0),
(3, 1, 27, 0),
(4, 1, 28, 0),
(5, 1, 29, 0),
(6, 1, 30, 0),
(7, 2, 31, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `urlImagem` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirmed` int(1) NOT NULL COMMENT 'Indica se o usuario confirmou o registro atraves do email enviado',
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Codigo enviado por email ao se cadastrar um novo usuario',
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Funcao "manter conectado"',
  `tipo` int(11) NOT NULL COMMENT '1:Aluno  2:Professor  3:Admin',
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `login`, `password`, `email`, `urlImagem`, `confirmed`, `confirmation_code`, `remember_token`, `tipo`, `deleted_at`) VALUES
(1, 'Jéssica', 'Matos', 'jessica.matos@gmail.com', '$2y$10$7R6GNTIU7ymoQ0oM7BnPhORBmGtFrtO4I6LhoxJOwjJr5vpFUy8gy', 'jessica.matos@gmail.com', NULL, 1, '', '', 2, NULL),
(2, 'Milena', 'Pádua', 'milena.padua@gmail.com', '$2y$10$MIhD0dn0liGb69RWGnnN4eo3er8RBSCkkfqH9NVXd1bqkCuqtvCMi', 'milena.padua@gmail.com', NULL, 1, '', '', 2, NULL),
(3, 'Sheeva', 'Batista', 'sheeva.batista@gmail.com', '$2y$10$b/Z5GGAbMWzKlleBqhU7I.WydF3.TGO/hdyGmZMOObou8q0EvVdU6', 'sheeva.batista@gmail.com', NULL, 1, '', '', 2, NULL),
(4, 'Michele', 'Carvalho', 'michele.carvalho@gmail.com', '$2y$10$xTglPlVsS5kxD8xIkIZ7Z.4OeHBVQHCHfpNjuGkP6DL5pIM08HcM2', 'michele.carvalho@gmail.com', NULL, 1, '', '', 2, NULL),
(5, 'Lara', 'da Silva', 'lara.da silva@gmail.com', '$2y$10$eVFi.q.Xuyfv5hHfTgkYG.clruVf2IPQza4JInO5wbxMp1q3KPNme', 'lara.da silva@gmail.com', NULL, 1, '', '', 2, NULL),
(6, 'ChunLi', 'Valverde', 'chunli.valverde@gmail.com', '$2y$10$VjlPC1fF6TwPvt3XKzb6k.1PMLogf4/r1LE.BXhHlDmQPqdWuzcOy', 'chunli.valverde@gmail.com', NULL, 1, '', '', 2, NULL),
(7, 'Otavio', 'Gouveia', 'otavio.gouveia@gmail.com', '$2y$10$DVJiarnwg.j/9wLys.J.luLXOJCjOZVYSy30ci8K7sXmPvwasGHoy', 'otavio.gouveia@gmail.com', NULL, 1, '', '', 2, NULL),
(8, 'Dante', 'Peixoto', 'dante.peixoto@gmail.com', '$2y$10$fOB/0aRCIql5OjHxwLALo.Y/7/zdasfs4oG3N6/BnGAhiZTbLOkuC', 'dante.peixoto@gmail.com', NULL, 1, '', '', 2, NULL),
(9, 'Doulgas', 'Takahashi', 'doulgas.takahashi@gmail.com', '$2y$10$z91Va.Qa/qDPG./ukVAMkuwr9p6PIpuwGnsTndwdtDORFyg9/T/BC', 'doulgas.takahashi@gmail.com', NULL, 1, '', '', 2, NULL),
(10, 'Jonas', 'Franca', 'jonas.franca@gmail.com', '$2y$10$Ma3MAQ/bM7C1YoYCNnIAnuSmcvPQQ/Zp9SHynbPuhRWFYHpYqZLlu', 'jonas.franca@gmail.com', NULL, 1, '', '', 2, NULL),
(11, 'Daniela', 'Leal', 'daniela.leal@gmail.com', '$2y$10$l9caJVdjrUsYSp.AjjRfQ.VYV3rVwTEzxlLq6Pd.RLPkdBXTi6cW2', 'daniela.leal@gmail.com', NULL, 1, '', '', 2, NULL),
(12, 'Aline', 'Hernandes', 'aline.hernandes@gmail.com', '$2y$10$VQrfM4t1w5ts43FLnvDmMulfkaeR6lD/mGmzoMfBYDgVoDVXQc0o.', 'aline.hernandes@gmail.com', NULL, 1, '', '', 2, NULL),
(13, 'Monica', 'Lins', 'monica.lins@gmail.com', '$2y$10$S0LQ7jGXkHlTzLXKKNUdaekv2v9WL48Ec0c.d6PEF0tNloRZhGsOm', 'monica.lins@gmail.com', NULL, 1, '', '', 2, NULL),
(14, 'Leonidas', 'Macedo', 'leonidas.macedo@gmail.com', '$2y$10$QlX1K.HCH81QzPqaMYtxC.QLsnuE86CcFVgTyWdF34Akl5oyYMFRu', 'leonidas.macedo@gmail.com', NULL, 1, '', '', 2, NULL),
(15, 'Morpheu', 'Sato', 'morpheu.sato@gmail.com', '$2y$10$suo59kZ5XD4p9I2.9vG6n.h6gjO2yAZSzInVil34VyzU7L.vvmOz.', 'morpheu.sato@gmail.com', NULL, 1, '', '', 2, NULL),
(16, 'Claudio', 'Tanaka', 'claudio.tanaka@gmail.com', '$2y$10$8yXjHWuVauSeP7bzhhumU.EZi.1JKkhpIYeH2POz44m2TL9apfixS', 'claudio.tanaka@gmail.com', NULL, 1, '', '', 2, NULL),
(17, 'Augusto', 'Yamada', 'augusto.yamada@gmail.com', '$2y$10$IfmKXBXR/pZBDcmUmBUZ0.FWYURyO5Dp3MUlJL9iWQUSoGa2C9k1a', 'augusto.yamada@gmail.com', NULL, 1, '', '', 2, NULL),
(18, 'Eric', 'Valentine', 'eric.valentine@gmail.com', '$2y$10$VFgv52NfLxGkeOZERFmffuXv9NukAwJ93U9YL1kPrgn54ctKYtn/u', 'eric.valentine@gmail.com', NULL, 1, '', '', 2, NULL),
(19, 'Bruno', 'Villablanca', 'bruno.villablanca@gmail.com', '$2y$10$ZMBVFJe8kavORmHmJixR4.HPA9X4y16u1AgHdgZDHKaG1H.SkYx.a', 'bruno.villablanca@gmail.com', NULL, 1, '', '', 2, NULL),
(20, 'Yori', 'Salgueiro', 'yori.salgueiro@gmail.com', '$2y$10$kQVMdIDK/brlbFz2bC6GP.NS/cBszOPnHK4X4OL.e0RIRBFPFuxWO', 'yori.salgueiro@gmail.com', NULL, 1, '', '', 2, NULL),
(21, 'Angelina', 'Suzuki', 'angelina.suzuki@gmail.com', '$2y$10$ThO5gVdPMtTD43ygz1FSbuPUIZoWk2AysVj9Ic2xeU9MASYfwwYga', 'angelina.suzuki@gmail.com', NULL, 1, '', '', 2, NULL),
(22, 'Trinity', 'dos Santos', 'trinity.dos santos@gmail.com', '$2y$10$i6SwutlN0hzpLHX8lJURqeBnxe98nzrpxzB4LGCe.z6MYXoRUfxkq', 'trinity.dos santos@gmail.com', NULL, 1, '', '', 2, NULL),
(23, 'Akemi', 'Costa', 'akemi.costa@gmail.com', '$2y$10$7fdsbVizzpN/I83RtBRG/.yTrgk5B9TwsOG7ry96EoYnKND0ROHIK', 'akemi.costa@gmail.com', NULL, 1, '', '', 2, NULL),
(24, 'Yoko', 'Rocha', 'yoko.rocha@gmail.com', '$2y$10$kUjPZ9SXTUQmcgIJHa3uQeoIRKljwOtc1v4siwHN76j9blkZzYCTC', 'yoko.rocha@gmail.com', NULL, 1, '', '', 2, NULL),
(25, 'Eduardo', 'Minazuki', '2544', '$2y$10$FA/hMWxxVa3a1yNmKZF11.KQRjTo0TQSMwSpOhHCuwWi.PEM5DaEi', 'eduardo.minazuki@gmail.com', NULL, 1, '', '', 1, NULL),
(26, 'Rafaela', 'Ishida', '1926', '$2y$10$S4DdeFczdVh.t13bb3sa8uUpntlZ4t.OpbwfmT2ioer1jgPDoitnq', 'rafaela.ishida@gmail.com', NULL, 1, '', '', 1, NULL),
(27, 'Caio', 'Macedo', '4787', '$2y$10$fjvkHF3NlrYVdCrXwLQnoOTfmFPg.N5Ca8d1nM81VCL.44au6WcB.', 'caio.macedo@gmail.com', NULL, 1, '', '', 1, NULL),
(28, 'Kitana', 'Peixoto', '4018', '$2y$10$yWGKah546dtHlFw9IsJ06e7Tg7uSifVPIWRMBIo0h/e3.CaNMt0bK', 'kitana.peixoto@gmail.com', NULL, 1, '', '', 1, NULL),
(29, 'Morpheu', 'Villablanca', '9275', '$2y$10$kBaUA44aLtGKtjav.TNj6u2lk42GzGDVqCZz6FzJ5.AcS1RBGhGWi', 'morpheu.villablanca@gmail.com', NULL, 1, '', '', 1, NULL),
(30, 'Chunli', 'Neves', '5807', '$2y$10$7AYyGxjBodF554DJi5BOI.vwzBzc0D5USOx8eGaCCRHk/Cm8QRrga', 'chunli.neves@gmail.com', NULL, 1, '', '', 1, NULL),
(31, 'Caroline', 'Neves', '8745', '$2y$10$RAx19tgYDYSD0CbJf.SBruz9vntiWkVFWWm3TsI7RnGrSe0chRu/e', 'caroline.neves@gmail.com', NULL, 1, '', '', 1, NULL);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `acessosatividades`
--
ALTER TABLE `acessosatividades`
  ADD CONSTRAINT `FK_idAlunoAcesso` FOREIGN KEY (`idAluno`) REFERENCES `alunos` (`id`),
  ADD CONSTRAINT `FK_idAtiviAcesso` FOREIGN KEY (`idAtividade`) REFERENCES `atividades` (`id`);

--
-- Limitadores para a tabela `atividades`
--
ALTER TABLE `atividades`
  ADD CONSTRAINT `FK_idAulaAtiv` FOREIGN KEY (`idAula`) REFERENCES `aulas` (`id`),
  ADD CONSTRAINT `FK_idCategAtiv` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `FK_idModuloAtiv` FOREIGN KEY (`idModulo`) REFERENCES `modulos` (`id`),
  ADD CONSTRAINT `FK_idUsuarioAtiv` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `aulas`
--
ALTER TABLE `aulas`
  ADD CONSTRAINT `FK_idModuloAula` FOREIGN KEY (`idModulo`) REFERENCES `modulos` (`id`);

--
-- Limitadores para a tabela `avisos`
--
ALTER TABLE `avisos`
  ADD CONSTRAINT `FK_idAdminAviso` FOREIGN KEY (`idAdmin`) REFERENCES `administradores` (`id`);

--
-- Limitadores para a tabela `avisosturmas`
--
ALTER TABLE `avisosturmas`
  ADD CONSTRAINT `FK_idAvisoTurma` FOREIGN KEY (`idAviso`) REFERENCES `avisos` (`id`),
  ADD CONSTRAINT `FK_idTurmaAviso` FOREIGN KEY (`idTurma`) REFERENCES `turmas` (`id`);

--
-- Limitadores para a tabela `contrata`
--
ALTER TABLE `contrata`
  ADD CONSTRAINT `FK_idAlunoCtrata` FOREIGN KEY (`idAluno`) REFERENCES `alunos` (`id`),
  ADD CONSTRAINT `FK_idTCursoCtrata` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`id`),
  ADD CONSTRAINT `FK_idTurmaCtrata` FOREIGN KEY (`idTurma`) REFERENCES `turmas` (`id`);

--
-- Limitadores para a tabela `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `FK_idIdiomaCurso` FOREIGN KEY (`idIdioma`) REFERENCES `idiomas` (`id`);

--
-- Limitadores para a tabela `materialapoio`
--
ALTER TABLE `materialapoio`
  ADD CONSTRAINT `FK_idAulaMat` FOREIGN KEY (`idAula`) REFERENCES `aulas` (`id`);

--
-- Limitadores para a tabela `mensagens`
--
ALTER TABLE `mensagens`
  ADD CONSTRAINT `FK_idRE` FOREIGN KEY (`idRE`) REFERENCES `mensagens` (`id`),
  ADD CONSTRAINT `FK_idUsuarDest` FOREIGN KEY (`idUsuarioDestino`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `FK_idUsuarOrig` FOREIGN KEY (`idUsuarioOrigem`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `modulos`
--
ALTER TABLE `modulos`
  ADD CONSTRAINT `FK_idCurso` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`id`);

--
-- Limitadores para a tabela `propagandas`
--
ALTER TABLE `propagandas`
  ADD CONSTRAINT `FK_cnpjEmpresa` FOREIGN KEY (`idEmpresa`) REFERENCES `empresas` (`id`),
  ADD CONSTRAINT `FK_idUsuarProp` FOREIGN KEY (`idUsuario`) REFERENCES `administradores` (`id`);

--
-- Limitadores para a tabela `questoes`
--
ALTER TABLE `questoes`
  ADD CONSTRAINT `FK_idAtivQuestao` FOREIGN KEY (`idAtividade`) REFERENCES `atividades` (`id`),
  ADD CONSTRAINT `FK_idTopicoQuest` FOREIGN KEY (`idTopico`) REFERENCES `topicos` (`id`);

--
-- Limitadores para a tabela `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `FK_idAlunoResp` FOREIGN KEY (`idAluno`) REFERENCES `alunos` (`id`),
  ADD CONSTRAINT `FK_idQuestResp` FOREIGN KEY (`idQuestao`) REFERENCES `questoes` (`id`);

--
-- Limitadores para a tabela `turmas`
--
ALTER TABLE `turmas`
  ADD CONSTRAINT `FK_idModuloTurma` FOREIGN KEY (`idModulo`) REFERENCES `modulos` (`id`),
  ADD CONSTRAINT `FK_idProfessor` FOREIGN KEY (`idProfessor`) REFERENCES `professores` (`id`);

--
-- Limitadores para a tabela `turmasalunos`
--
ALTER TABLE `turmasalunos`
  ADD CONSTRAINT `FK_idAlunoTurma` FOREIGN KEY (`idAluno`) REFERENCES `alunos` (`id`),
  ADD CONSTRAINT `FK_idTurmaAluno` FOREIGN KEY (`idTurma`) REFERENCES `turmas` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
