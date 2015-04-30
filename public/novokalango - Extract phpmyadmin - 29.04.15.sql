-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Abr-2015 às 23:48
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
(276, 789, NULL, NULL);

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
(31, 8745, 'Olá, sou a Caroline e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(32, 5030, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(33, 8129, 'Sou o Cleber e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(34, 4507, 'Sou a Irene e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(35, 7502, 'Sou o Filipe, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(36, 7508, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(37, 6599, 'Sou a Barbara, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(38, 6314, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(39, 2349, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(40, 6821, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(41, 3001, 'Sou a Milena e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(42, 9096, 'Olá, sou o Cleber e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(43, 3634, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(44, 7255, 'Sou a Jonas e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(45, 7935, 'Sou o Filipe e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(46, 6521, 'Sou o Otavio, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(47, 8001, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(48, 2734, 'Sou o Xerxes, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(49, 1878, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(50, 5117, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(51, 2985, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(52, 1791, 'Sou o Caio e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(53, 4089, 'Olá, sou o Jaime e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(54, 5490, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(55, 3641, 'Sou o Peterson e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(56, 5460, 'Sou o Simão e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(57, 3056, 'Sou a Sonia, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(58, 8385, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(59, 1487, 'Sou o Claudio, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(60, 4196, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(61, 7113, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(62, 1023, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(63, 1285, 'Sou o Leonidas e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(64, 1409, 'Olá, sou o Peterson e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(65, 9516, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(66, 6692, 'Sou a Andreia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(67, 8148, 'Sou a Caroline e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(68, 5932, 'Sou a ChunLi, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(69, 9277, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(70, 7605, 'Sou a Akemi, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(71, 2312, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(72, 4036, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(73, 4663, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(74, 8773, 'Sou o Otavio e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(75, 2347, 'Olá, sou o Xerxes e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(76, 4867, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(77, 3715, 'Sou a Milena e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(78, 9348, 'Sou o Eric e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(79, 4776, 'Sou o Dante, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(80, 1702, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(81, 2722, 'Sou a Daniela, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(82, 1501, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(83, 7815, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(84, 4804, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(85, 7148, 'Sou o Jaime e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(86, 4622, 'Olá, sou o Xerxes e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(87, 1582, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(88, 1365, 'Sou a Bruna e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(89, 7025, 'Sou a Odete e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(90, 7617, 'Sou a Sarah, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(91, 6606, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(92, 9210, 'Sou o Caio, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(93, 9643, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(94, 3809, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(95, 8586, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(96, 2385, 'Sou a Akemi e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(97, 7985, 'Olá, sou a Jill e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(98, 8730, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(99, 8480, 'Sou a Sonia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(100, 7909, 'Sou o Augusto e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(101, 7344, 'Sou a Yoko, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(102, 4368, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(103, 9074, 'Sou o Peterson, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(104, 6180, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(105, 9653, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(106, 3738, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(107, 4685, 'Sou o Peterson e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(108, 1458, 'Olá, sou o Filipe e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(109, 2063, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(110, 1316, 'Sou o Cauê e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(111, 6061, 'Sou a Jonas e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(112, 6295, 'Sou a Irene, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(113, 5337, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(114, 5403, 'Sou a Rafaela, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(115, 9171, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(116, 3523, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(117, 4723, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(118, 8450, 'Sou o ChunLi e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(119, 8261, 'Olá, sou o Caroline e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(120, 3519, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(121, 9654, 'Sou a Cleber e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(122, 9473, 'Sou o Irene e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(123, 2957, 'Sou a Filipe, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(124, 5694, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(125, 3068, 'Sou o Barbara, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(126, 8712, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(127, 8234, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(128, 3977, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(129, 5317, 'Sou a Milena e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(130, 7146, 'Olá, sou o Cleber e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(131, 3428, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(132, 6404, 'Sou o Jonas e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(133, 3117, 'Sou o Filipe e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(134, 6798, 'Sou a Otavio, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(135, 2909, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(136, 4774, 'Sou a Xerxes, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(137, 3786, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(138, 2209, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(139, 5768, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(140, 1718, 'Sou a Caio e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(141, 2721, 'Olá, sou a Jaime e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(142, 8182, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(143, 3920, 'Sou a Peterson e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(144, 5097, 'Sou o Simão e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(145, 7016, 'Sou a Sonia, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(146, 9003, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(147, 5413, 'Sou a Claudio, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(148, 6896, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(149, 9640, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(150, 3020, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(151, 3321, 'Sou a Leonidas e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(152, 6752, 'Olá, sou o Peterson e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(153, 1639, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(154, 6610, 'Sou a Andreia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(155, 9642, 'Sou a Caroline e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(156, 1631, 'Sou a ChunLi, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(157, 3116, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(158, 1555, 'Sou a Akemi, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(159, 6337, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(160, 8110, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(161, 9031, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(162, 5607, 'Sou a Otavio e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(163, 8016, 'Olá, sou o Xerxes e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(164, 9836, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(165, 4785, 'Sou o Milena e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(166, 8571, 'Sou o Eric e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(167, 3405, 'Sou o Dante, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(168, 2620, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(169, 9802, 'Sou o Daniela, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(170, 6767, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(171, 9057, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(172, 6601, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(173, 7089, 'Sou o Jaime e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(174, 8707, 'Olá, sou o Xerxes e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(175, 8133, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(176, 1299, 'Sou o Bruna e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(177, 2484, 'Sou o Odete e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(178, 2796, 'Sou a Sarah, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(179, 8602, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(180, 8078, 'Sou a Caio, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(181, 5012, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(182, 5062, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(183, 6325, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(184, 2519, 'Sou a Akemi e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(185, 6575, 'Olá, sou o Jill e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(186, 4226, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(187, 6371, 'Sou o Sonia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(188, 1142, 'Sou o Augusto e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(189, 1544, 'Sou o Yoko, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(190, 4651, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(191, 2968, 'Sou a Peterson, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(192, 8357, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(193, 6907, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(194, 4331, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(195, 1404, 'Sou a Peterson e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(196, 6269, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(197, 5591, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(198, 4702, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(199, 3458, 'Sou o ChunLi e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(200, 6963, 'Olá, sou o Caroline e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(201, 5024, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(202, 2128, 'Sou o Cleber e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(203, 1246, 'Sou a Irene e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(204, 8183, 'Sou a Filipe, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(205, 6682, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(206, 8919, 'Sou a Barbara, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(207, 8553, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(208, 1636, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(209, 8900, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(210, 5937, 'Sou o Milena e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(211, 3814, 'Olá, sou o Cleber e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(212, 1561, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(213, 9245, 'Sou o Jonas e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(214, 4139, 'Sou a Filipe e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(215, 5042, 'Sou a Otavio, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(216, 2550, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(217, 1121, 'Sou a Xerxes, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(218, 4452, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(219, 9380, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(220, 7210, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(221, 5163, 'Sou o Caio e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(222, 6095, 'Olá, sou o Jaime e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(223, 9767, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(224, 9138, 'Sou a Peterson e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(225, 5181, 'Sou a Simão e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(226, 5936, 'Sou o Sonia, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(227, 4582, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(228, 9826, 'Sou o Claudio, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(229, 4376, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(230, 4975, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(231, 3997, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(232, 7101, 'Sou a Leonidas e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(233, 5086, 'Olá, sou o Peterson e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(234, 6591, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(235, 6623, 'Sou o Andreia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(236, 8609, 'Sou o Caroline e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(237, 8020, 'Sou a ChunLi, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(238, 9819, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(239, 8269, 'Sou o Akemi, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(240, 5026, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(241, 8592, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(242, 2274, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(243, 6710, 'Sou o Otavio e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(244, 2271, 'Olá, sou a Xerxes e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(245, 4791, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(246, 9449, 'Sou o Milena e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(247, 5698, 'Sou o Eric e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(248, 3118, 'Sou a Dante, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(249, 7352, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(250, 8084, 'Sou o Daniela, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(251, 5381, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(252, 8926, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(253, 1947, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(254, 1104, 'Sou o Jaime e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(255, 8212, 'Olá, sou o Xerxes e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(256, 2899, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(257, 4459, 'Sou a Bruna e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(258, 6302, 'Sou a Odete e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(259, 6237, 'Sou a Sarah, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(260, 6223, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(261, 2963, 'Sou a Caio, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(262, 6039, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(263, 1004, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(264, 5283, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL),
(265, 5424, 'Sou a Akemi e gosto de brincar de boneca , estudar e fazer novos amigos', '0000-00-00', 'dataVencim', NULL),
(266, 1880, 'Olá, sou o Jill e amo assistir tv, séries e filmes', '0000-00-00', 'dataVencim', NULL),
(267, 3716, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(268, 3728, 'Sou a Sonia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '0000-00-00', 'dataVencim', NULL),
(269, 1535, 'Sou a Augusto e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '0000-00-00', 'dataVencim', NULL),
(270, 6032, 'Sou o Yoko, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '0000-00-00', 'dataVencim', NULL),
(271, 8418, 'Gosto de brincar, jogar video game e fazer amigos', '0000-00-00', 'dataVencim', NULL),
(272, 6184, 'Sou a Peterson, adoro cinema e o Justin Bieber! Sou fã do One Direction', '0000-00-00', 'dataVencim', NULL),
(273, 5265, 'Futebol, video game e internet', '0000-00-00', 'dataVencim', NULL),
(274, 4367, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '0000-00-00', 'dataVencim', NULL),
(275, 3344, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '0000-00-00', 'dataVencim', NULL);

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
(1, 'Atividade 1 - ', 1, 1, NULL, NULL, NULL, '0000-00-00', 0, NULL),
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
(31, 'Atividade 1 - ', 1, 16, NULL, NULL, NULL, '0000-00-00', 1, '2015-04-29'),
(32, 'Atividade 2 - ', 1, 16, NULL, NULL, NULL, '0000-00-00', 1, '2015-04-29'),
(33, 'Atividade 1 - ', 1, 17, NULL, NULL, NULL, '0000-00-00', 1, '2015-04-29'),
(34, 'Atividade 2 - ', 1, 17, NULL, NULL, NULL, '0000-00-00', 1, '2015-04-29'),
(35, 'Atividade 1 - ', 1, 18, NULL, NULL, NULL, '0000-00-00', 1, '2015-04-29'),
(36, 'Atividade 2 - ', 1, 18, NULL, NULL, NULL, '0000-00-00', 1, '2015-04-29'),
(37, 'Atividade 1 - ', 1, 19, NULL, NULL, NULL, '0000-00-00', 1, '2015-04-29'),
(38, 'Atividade 2 - ', 1, 19, NULL, NULL, NULL, '0000-00-00', 1, '2015-04-29'),
(39, 'Atividade 1 - ', 1, 20, NULL, NULL, NULL, '0000-00-00', 1, '2015-04-29'),
(40, 'Atividade 2 - ', 1, 20, NULL, NULL, NULL, '0000-00-00', 1, '2015-04-29'),
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
(16, 'Aula 1', 4, '2015-04-29'),
(17, 'Aula 2', 4, '2015-04-29'),
(18, 'Aula 3', 4, '2015-04-29'),
(19, 'Aula 4', 4, '2015-04-29'),
(20, 'Aula 5', 4, '2015-04-29'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `avisos`
--

INSERT INTO `avisos` (`id`, `titulo`, `descricao`, `urlImagem`, `dataExpiracao`, `idAdmin`) VALUES
(1, 'teste', 'teste', NULL, '2015-04-30', 276);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `avisosturmas`
--

INSERT INTO `avisosturmas` (`id`, `idAviso`, `idTurma`, `dataAviso`) VALUES
(1, 1, 1, '0000-00-00');

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

--
-- Extraindo dados da tabela `contrata`
--

INSERT INTO `contrata` (`idCurso`, `idTurma`, `idAluno`, `dtContratacao`) VALUES
(1, 1, 25, '1999-11-30');

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
(4, 'Módulo 4', 1, '2015-04-29'),
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
(16, 'ING-K401', 1, 4, 8, '2015-04-29'),
(17, 'ING-K402', 1, 4, 9, '2015-04-29'),
(18, 'ING-K403', 1, 4, 9, '2015-04-29'),
(19, 'ING-K404', 1, 4, 10, '2015-04-29'),
(20, 'ING-K405', 1, 4, 10, '2015-04-29'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=254 ;

--
-- Extraindo dados da tabela `turmasalunos`
--

INSERT INTO `turmasalunos` (`id`, `idTurma`, `idAluno`, `pontuacao`) VALUES
(2, 1, 26, 0),
(3, 1, 27, 0),
(4, 1, 28, 0),
(5, 1, 29, 0),
(6, 1, 30, 0),
(7, 2, 31, 0),
(8, 2, 32, 0),
(9, 2, 33, 0),
(10, 2, 34, 0),
(11, 2, 35, 0),
(12, 2, 36, 0),
(13, 3, 37, 0),
(14, 3, 38, 0),
(15, 3, 39, 0),
(16, 3, 40, 0),
(17, 3, 41, 0),
(18, 3, 42, 0),
(19, 4, 43, 0),
(20, 4, 44, 0),
(21, 4, 45, 0),
(22, 4, 46, 0),
(23, 4, 47, 0),
(24, 5, 48, 0),
(25, 5, 49, 0),
(26, 5, 50, 0),
(27, 5, 51, 0),
(28, 6, 52, 0),
(29, 6, 53, 0),
(30, 6, 54, 0),
(31, 6, 55, 0),
(32, 7, 56, 0),
(33, 7, 57, 0),
(34, 7, 58, 0),
(35, 7, 59, 0),
(36, 8, 60, 0),
(37, 8, 61, 0),
(38, 8, 62, 0),
(39, 8, 63, 0),
(40, 9, 64, 0),
(41, 9, 65, 0),
(42, 9, 66, 0),
(43, 9, 67, 0),
(44, 10, 68, 0),
(45, 10, 69, 0),
(46, 10, 70, 0),
(47, 10, 71, 0),
(48, 11, 72, 0),
(49, 11, 73, 0),
(50, 11, 74, 0),
(51, 11, 75, 0),
(52, 12, 76, 0),
(53, 12, 77, 0),
(54, 12, 78, 0),
(55, 12, 79, 0),
(56, 13, 80, 0),
(57, 13, 81, 0),
(58, 13, 82, 0),
(59, 13, 83, 0),
(60, 14, 84, 0),
(61, 14, 85, 0),
(62, 14, 86, 0),
(63, 14, 87, 0),
(64, 15, 88, 0),
(65, 15, 89, 0),
(66, 15, 90, 0),
(67, 15, 91, 0),
(68, 16, 92, 0),
(69, 16, 93, 0),
(70, 16, 94, 0),
(71, 16, 95, 0),
(72, 17, 96, 0),
(73, 17, 97, 0),
(74, 17, 98, 0),
(75, 17, 99, 0),
(76, 18, 100, 0),
(77, 18, 101, 0),
(78, 18, 102, 0),
(79, 18, 103, 0),
(80, 19, 104, 0),
(81, 19, 105, 0),
(82, 19, 106, 0),
(83, 19, 107, 0),
(84, 20, 108, 0),
(85, 20, 109, 0),
(86, 20, 110, 0),
(87, 20, 111, 0),
(88, 21, 112, 0),
(89, 21, 113, 0),
(90, 21, 114, 0),
(91, 21, 115, 0),
(92, 22, 116, 0),
(93, 22, 117, 0),
(94, 22, 118, 0),
(95, 22, 119, 0),
(96, 23, 120, 0),
(97, 23, 121, 0),
(98, 23, 122, 0),
(99, 23, 123, 0),
(100, 24, 124, 0),
(101, 24, 125, 0),
(102, 24, 126, 0),
(103, 24, 127, 0),
(104, 25, 128, 0),
(105, 25, 129, 0),
(106, 25, 130, 0),
(107, 25, 131, 0),
(108, 26, 132, 0),
(109, 26, 133, 0),
(110, 26, 134, 0),
(111, 26, 135, 0),
(112, 27, 136, 0),
(113, 27, 137, 0),
(114, 27, 138, 0),
(115, 27, 139, 0),
(116, 28, 140, 0),
(117, 28, 141, 0),
(118, 28, 142, 0),
(119, 28, 143, 0),
(120, 29, 144, 0),
(121, 29, 145, 0),
(122, 29, 146, 0),
(123, 29, 147, 0),
(124, 30, 148, 0),
(125, 30, 149, 0),
(126, 30, 150, 0),
(127, 30, 151, 0),
(128, 31, 152, 0),
(129, 31, 153, 0),
(130, 31, 154, 0),
(131, 31, 155, 0),
(132, 32, 156, 0),
(133, 32, 157, 0),
(134, 32, 158, 0),
(135, 32, 159, 0),
(136, 32, 160, 0),
(137, 33, 161, 0),
(138, 33, 162, 0),
(139, 33, 163, 0),
(140, 33, 164, 0),
(141, 33, 165, 0),
(142, 33, 166, 0),
(143, 33, 167, 0),
(144, 34, 168, 0),
(145, 34, 169, 0),
(146, 34, 170, 0),
(147, 34, 171, 0),
(148, 35, 172, 0),
(149, 35, 173, 0),
(150, 35, 174, 0),
(151, 35, 175, 0),
(152, 36, 176, 0),
(153, 36, 177, 0),
(154, 36, 178, 0),
(155, 36, 179, 0),
(156, 37, 180, 0),
(157, 37, 181, 0),
(158, 37, 182, 0),
(159, 38, 183, 0),
(160, 38, 184, 0),
(161, 38, 185, 0),
(162, 38, 186, 0),
(163, 39, 187, 0),
(164, 39, 188, 0),
(165, 39, 189, 0),
(166, 39, 190, 0),
(167, 40, 191, 0),
(168, 40, 192, 0),
(169, 40, 193, 0),
(170, 40, 194, 0),
(171, 40, 195, 0),
(172, 41, 196, 0),
(173, 41, 197, 0),
(174, 41, 198, 0),
(175, 41, 199, 0),
(176, 42, 200, 0),
(177, 42, 201, 0),
(178, 42, 202, 0),
(179, 42, 203, 0),
(180, 43, 204, 0),
(181, 43, 205, 0),
(182, 43, 206, 0),
(183, 43, 207, 0),
(184, 44, 208, 0),
(185, 44, 209, 0),
(186, 44, 210, 0),
(187, 44, 211, 0),
(188, 45, 212, 0),
(189, 45, 213, 0),
(190, 45, 214, 0),
(191, 45, 215, 0),
(192, 46, 216, 0),
(193, 46, 217, 0),
(194, 46, 218, 0),
(195, 46, 219, 0),
(196, 47, 220, 0),
(197, 47, 221, 0),
(198, 47, 222, 0),
(199, 47, 223, 0),
(200, 48, 224, 0),
(201, 48, 225, 0),
(202, 48, 226, 0),
(203, 48, 227, 0),
(204, 49, 228, 0),
(205, 49, 229, 0),
(206, 49, 230, 0),
(207, 49, 231, 0),
(208, 50, 232, 0),
(209, 50, 233, 0),
(210, 50, 234, 0),
(211, 50, 235, 0),
(212, 51, 236, 0),
(213, 51, 237, 0),
(214, 51, 238, 0),
(215, 51, 239, 0),
(216, 52, 240, 0),
(217, 52, 241, 0),
(218, 52, 242, 0),
(219, 52, 243, 0),
(220, 53, 244, 0),
(221, 53, 245, 0),
(222, 53, 246, 0),
(223, 53, 247, 0),
(224, 54, 248, 0),
(225, 54, 249, 0),
(226, 54, 250, 0),
(227, 54, 251, 0),
(228, 55, 252, 0),
(229, 55, 253, 0),
(230, 55, 254, 0),
(231, 55, 255, 0),
(232, 56, 256, 0),
(233, 56, 257, 0),
(234, 56, 258, 0),
(235, 56, 259, 0),
(236, 57, 260, 0),
(237, 57, 261, 0),
(238, 57, 262, 0),
(239, 57, 263, 0),
(240, 58, 264, 0),
(241, 58, 265, 0),
(242, 58, 266, 0),
(243, 58, 267, 0),
(244, 59, 268, 0),
(245, 59, 269, 0),
(246, 59, 270, 0),
(247, 59, 271, 0),
(248, 60, 272, 0),
(249, 60, 273, 0),
(250, 60, 274, 0),
(251, 60, 275, 0),
(253, 1, 25, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=277 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `login`, `password`, `email`, `urlImagem`, `confirmed`, `confirmation_code`, `remember_token`, `tipo`, `deleted_at`) VALUES
(1, 'Jéssica', 'Matos', 'jessica.matos@gmail.com', '$2y$10$5UPvULzbGyWBQNou4ehx2e6iXuDYr3ksWzOOu00SD05Snx39D.XRO', 'jessica.matos@gmail.com', NULL, 1, '', 'DwG7TqNtzIvZiKaUTq53AxduWSiezgXZGlHEi8ylJ6dWtLNOHHTFP6eiMuo2', 2, NULL),
(2, 'Milena', 'Pádua', 'milena.padua@gmail.com', '$2y$10$dXEEElxxSdaOmpoxlZSYE.XGxBr6NkF0AkabIz1JXPVDkYLXXAWoO', 'milena.padua@gmail.com', NULL, 1, '', '', 2, NULL),
(3, 'Sheeva', 'Batista', 'sheeva.batista@gmail.com', '$2y$10$V6/JfGnKq5BBk2heuJ0OReVnJ34XMy/ibsknhPvKSsYnVgH8B1BHq', 'sheeva.batista@gmail.com', NULL, 1, '', '', 2, NULL),
(4, 'Michele', 'Carvalho', 'michele.carvalho@gmail.com', '$2y$10$Q0iyTNVEW.hBy6kRiHWsc.pzAOFcUTDRsW7BWzlQIV2CkDV/ViSjK', 'michele.carvalho@gmail.com', NULL, 1, '', '', 2, NULL),
(5, 'Lara', 'da Silva', 'lara.da silva@gmail.com', '$2y$10$iqKWQe0iqHEMZB2UGl5Bauj5peybxfXb3Tn6sLw9AGUg373RFI3/i', 'lara.da silva@gmail.com', NULL, 1, '', '', 2, NULL),
(6, 'ChunLi', 'Valverde', 'chunli.valverde@gmail.com', '$2y$10$heBH.KyLRMl1HDtrhEhiHOMGGbtZOqmM/.LoPBR4H1N1O5DETOGA6', 'chunli.valverde@gmail.com', NULL, 1, '', '', 2, NULL),
(7, 'Otavio', 'Gouveia', 'otavio.gouveia@gmail.com', '$2y$10$fOXn6OIGjU/25t2N4MbcN.STcsLdCVP4gj9r4ikNpS30P3m2658GC', 'otavio.gouveia@gmail.com', NULL, 1, '', '', 2, NULL),
(8, 'Dante', 'Peixoto', 'dante.peixoto@gmail.com', '$2y$10$NumoPrkq5sbWj45eIqnSr.tt43FFSuh1M6bzqgbGkXZQRseHnEzGm', 'dante.peixoto@gmail.com', NULL, 1, '', '', 2, NULL),
(9, 'Doulgas', 'Takahashi', 'doulgas.takahashi@gmail.com', '$2y$10$wQjOhUSbnuYgciqMFdpE2.5K4NgUL2a8f5hya6YAxPxeaPBUCVtsu', 'doulgas.takahashi@gmail.com', NULL, 1, '', '', 2, NULL),
(10, 'Jonas', 'Franca', 'jonas.franca@gmail.com', '$2y$10$isd7ZrVhKD2iC9cn6DmrAOlMVJFtRTg5dd4HWyRalDKzt7JHt1TYK', 'jonas.franca@gmail.com', NULL, 1, '', '', 2, NULL),
(11, 'Daniela', 'Leal', 'daniela.leal@gmail.com', '$2y$10$9k4xlOmUwR43cJxpdCqMZursogLXzq5611ekfyp9.flr2r02FOUUO', 'daniela.leal@gmail.com', NULL, 1, '', '', 2, NULL),
(12, 'Aline', 'Hernandes', 'aline.hernandes@gmail.com', '$2y$10$xY50lxqPZJFFrkfDsm9gA.iVh11KFleKKq.VRVBlQybVUDBYKV0na', 'aline.hernandes@gmail.com', NULL, 1, '', '', 2, NULL),
(13, 'Monica', 'Lins', 'monica.lins@gmail.com', '$2y$10$o9vDo9H9vuOyjUxK5OxRd.6tiAjcG9P7PoMed1K5Vzgv5grLenpza', 'monica.lins@gmail.com', NULL, 1, '', '', 2, NULL),
(14, 'Leonidas', 'Macedo', 'leonidas.macedo@gmail.com', '$2y$10$/HOqMFot3XzCsd/xacfetuJWJYFc560o/QIlQSxZl0fU5W6QeVGV2', 'leonidas.macedo@gmail.com', NULL, 1, '', '', 2, NULL),
(15, 'Morpheu', 'Sato', 'morpheu.sato@gmail.com', '$2y$10$dCtQvY7zmd20t.gzYn2D6Ov6DPkqNrB5QG7mQHWyA4SB/TfNQyUIi', 'morpheu.sato@gmail.com', NULL, 1, '', '', 2, NULL),
(16, 'Claudio', 'Tanaka', 'claudio.tanaka@gmail.com', '$2y$10$g0BzKhwrysg8nF6scm4bze.e5OWnUrv9xtMrr/gxdX6lVtf42ordG', 'claudio.tanaka@gmail.com', NULL, 1, '', '', 2, NULL),
(17, 'Augusto', 'Yamada', 'augusto.yamada@gmail.com', '$2y$10$n6OkvaYn1YgDjYs7FMUJTeNyFrDC7TP5dlCUX2wLtYFBwPmvlxyPu', 'augusto.yamada@gmail.com', NULL, 1, '', '', 2, NULL),
(18, 'Eric', 'Valentine', 'eric.valentine@gmail.com', '$2y$10$3mjso5xROkTRStu.gimEOOHJw2ZVjUVLnj28dy488655FaL4n4GJ6', 'eric.valentine@gmail.com', NULL, 1, '', '', 2, NULL),
(19, 'Bruno', 'Villablanca', 'bruno.villablanca@gmail.com', '$2y$10$GODfnRsk2gDsgRfSQ01p/.WtMq4kauSEgRzXK40z3ibEaDyUCKpnG', 'bruno.villablanca@gmail.com', NULL, 1, '', '', 2, NULL),
(20, 'Yori', 'Salgueiro', 'yori.salgueiro@gmail.com', '$2y$10$wV5bh9AV18VvuQ7qSg6L9O0I4vqaENKmuqlsAdCcQTcwtnpvK9qMW', 'yori.salgueiro@gmail.com', NULL, 1, '', '', 2, NULL),
(21, 'Angelina', 'Suzuki', 'angelina.suzuki@gmail.com', '$2y$10$FMzXUFUp8qTgWn9M7VxYXe8zaOygjjF88g.tlNDOPktIwZQn5cccm', 'angelina.suzuki@gmail.com', NULL, 1, '', '', 2, NULL),
(22, 'Trinity', 'dos Santos', 'trinity.dos santos@gmail.com', '$2y$10$lNDP1FWCUsY4BACw5BVAQeQ/xGcD/cB27wWUrX8tOG81s7vVdF.Pu', 'trinity.dos santos@gmail.com', NULL, 1, '', '', 2, NULL),
(23, 'Akemi', 'Costa', 'akemi.costa@gmail.com', '$2y$10$mx1T2zMz2TDvj4U.Lx5UdOJUs0WnEmHv6I0e4Je35s9I8ct4upt3S', 'akemi.costa@gmail.com', NULL, 1, '', '', 2, NULL),
(24, 'Yoko', 'Rocha', 'yoko.rocha@gmail.com', '$2y$10$8sXLF3jUGP1sNNxGeLhuN.zRYciU3ewMvVhADc7Iy98RBuir2j4mm', 'yoko.rocha@gmail.com', NULL, 1, '', '', 2, NULL),
(25, 'Eduardo', 'Minazuki', '2544', '$2y$10$PW.fO82H9eeHU9bAdTSveu/vZW6UzFjU6Y6.29p9y4LJ0.qIZD2Qe', 'eduardo.minazuki@gmail.com', NULL, 1, '', 'cMwMmRh52q5Wg1F6ouyDMbOgXni2uiMPPIXOhO2m9oXlfQ3HKobKEbg7nlRf', 1, NULL),
(26, 'Rafaela', 'Ishida', '1926', '$2y$10$UnbHIPR4W7E5PndyGj0aVeLMWkrFKqOrqhOLkKVWGKG0NyOTQ9iDS', 'rafaela.ishida@gmail.com', NULL, 1, '', '', 1, NULL),
(27, 'Caio', 'Macedo', '4787', '$2y$10$JxTCxIgeDbzYS9QCn7ILG.HqH7esMr9Doks/JvZrTeyPmsbmK07mG', 'caio.macedo@gmail.com', NULL, 1, '', '', 1, NULL),
(28, 'Kitana', 'Peixoto', '4018', '$2y$10$bDXuKG84j7Rdo.0yIVHuEOyPyIJ0k1ck.fbvguiQuZgrI9ZTLWscy', 'kitana.peixoto@gmail.com', NULL, 1, '', '', 1, NULL),
(29, 'Morpheu', 'Villablanca', '9275', '$2y$10$weq2F6s9RzXLpSa6LjI1rO.3.lyKjTA861rCLO51HMFrdG/4WvYyC', 'morpheu.villablanca@gmail.com', NULL, 1, '', '', 1, NULL),
(30, 'Chunli', 'Neves', '5807', '$2y$10$iEMA1bGicR5ZPzpY2RFSjertS0kk84Ppe7zrIuRM.QzjG0dsHIVp2', 'chunli.neves@gmail.com', NULL, 1, '', '', 1, NULL),
(31, 'Caroline', 'Neves', '8745', '$2y$10$U3mUIhhnZ.lvWxX.5Oq/HuwoX1DoyUFW8XcQM7AwlDNjsGiMctAIe', 'caroline.neves@gmail.com', NULL, 1, '', '', 1, NULL),
(32, 'Caroline', 'da Silva', '5030', '$2y$10$2yTW5CfT2ROYBDnHMTbemuVn.E3fZ.6Vsrusiir.ZWx8zGoAnMDzO', 'caroline.da silva@gmail.com', NULL, 1, '', '', 1, NULL),
(33, 'Cleber', 'Sato', '8129', '$2y$10$bOgTCbWmaOG9cBaD6gHwdOupL1QTBvyzsN1Hg40rwID0GCnPxJb5O', 'cleber.sato@gmail.com', NULL, 1, '', '', 1, NULL),
(34, 'Irene', 'Salgueiro', '4507', '$2y$10$8Rd3lXLrapDeo/7lsruJmOIEN.ruMpP/IS/yScAW25gHH3.dqu2PG', 'irene.salgueiro@gmail.com', NULL, 1, '', '', 1, NULL),
(35, 'Filipe', 'Neto', '7502', '$2y$10$E9HIu0E8ONjF6xhS26XYruXO8vabMaquDT0jaNVqOZFDyPH5wru6W', 'filipe.neto@gmail.com', NULL, 1, '', '', 1, NULL),
(36, 'Filipe', 'Nazário', '7508', '$2y$10$5is61cL/AJUX2q3w9y8zge6Mnuc5FIgaBN2qGlB14VJS8ouu6ByL.', 'filipe.nazario@gmail.com', NULL, 1, '', '', 1, NULL),
(37, 'Barbara', 'Nazário', '6599', '$2y$10$J1VfWmHqhx/3jQ/jxtKpWu3BjlgdRPDj2NGEfHGTT2gPx3PIwmt8y', 'barbara.nazario@gmail.com', NULL, 1, '', '', 1, NULL),
(38, 'Sarah', 'Ishida Silva', '6314', '$2y$10$f4PzQSFNsSriXuo/74OW.eXhR6nGj4.erMyBkh70WM939f4tdp0ce', 'sarah.ishida silva@gmail.com', NULL, 1, '', '', 1, NULL),
(39, 'Akemi', 'Semedo', '2349', '$2y$10$0e0qymXrreIuLtqfeov8weFgrUdiafozlq6e2gE9goobC3EaP7nkO', 'akemi.semedo@gmail.com', NULL, 1, '', '', 1, NULL),
(40, 'Milena', 'Nazário', '6821', '$2y$10$gzqI8WoLC0VGLbFLXozvZug0YPcFtdJ6HC9khjaSO9ZRz08EFOsiu', 'milena.nazario@gmail.com', NULL, 1, '', '', 1, NULL),
(41, 'Milena', 'Castanheira', '3001', '$2y$10$6DEyfRUu5pgdc8NrvWuBSOArLST1XvpvAlnuL0HzTtH.DF7pUJgVC', 'milena.castanheira@gmail.com', NULL, 1, '', '', 1, NULL),
(42, 'Cleber', 'Freire', '9096', '$2y$10$APe2GQI1pddVxETdFknX8Oqk54qVPrlgrbKVvJnP7W2/5wxkdP6Ca', 'cleber.freire@gmail.com', NULL, 1, '', '', 1, NULL),
(43, 'Cleber', 'Leal', '3634', '$2y$10$Eqo/MDfRQANd6vFtOA192u2iV3mAkbAwTEMEWswSOOunNy6GjbztC', 'cleber.leal@gmail.com', NULL, 1, '', '', 1, NULL),
(44, 'Jonas', 'Nazário', '7255', '$2y$10$zg8gbfDGdzXu19Zryjh6le54Mz/qbFL3ZgCiTzB/sUBX83Iyb9nfS', 'jonas.nazario@gmail.com', NULL, 1, '', '', 1, NULL),
(45, 'Filipe', 'Monteiro', '7935', '$2y$10$jLBtGuABNuktBWU/afiY/ORspKrLeh0YTbcqrbe76bwGylHpNlUEa', 'filipe.monteiro@gmail.com', NULL, 1, '', '', 1, NULL),
(46, 'Otavio', 'dos Santos', '6521', '$2y$10$gYKUQP2TmmR49AAVwMSF6eflmt5CONK9IC6yy9n9mp0E4nN/EunQu', 'otavio.dos santos@gmail.com', NULL, 1, '', '', 1, NULL),
(47, 'Jaime', 'Valverde', '8001', '$2y$10$YE6jJTaaFRjNsdJjE6uXKOjc/OCivnTEJd1pYWEk2JduYg6dDOTjK', 'jaime.valverde@gmail.com', NULL, 1, '', '', 1, NULL),
(48, 'Xerxes', 'Rocha', '2734', '$2y$10$HjgtpF1omJV254uFC7q.1uzPAyqnCXMHSUqaL7rSixcBjr/jc5Zdy', 'xerxes.rocha@gmail.com', NULL, 1, '', '', 1, NULL),
(49, 'Alexandra', 'Pinheiro', '1878', '$2y$10$uyfsn3WIzOUnKRZ7di1xi.6yJTZ5ama56FPA.Le61h67NW6vvmaAO', 'alexandra.pinheiro@gmail.com', NULL, 1, '', '', 1, NULL),
(50, 'Sarah', 'Carvalho', '5117', '$2y$10$75mgJ8ib9MgUWAdadCKMh.EYFZTlC3tk1h4bEdKKIaj/4ZRlziEoy', 'sarah.carvalho@gmail.com', NULL, 1, '', '', 1, NULL),
(51, 'Sonia', 'Takahashi', '2985', '$2y$10$VrM/C2y6MlEAPz2c91Yfru2HOLZuiF4D0MQVBrNjaI1nbC57CJjyC', 'sonia.takahashi@gmail.com', NULL, 1, '', '', 1, NULL),
(52, 'Caio', 'Nazário', '1791', '$2y$10$GOEA1hRYMrtnKR6HpzkvMOHGExTpwScRcRd7K55idl4ATOVRKypKy', 'caio.nazario@gmail.com', NULL, 1, '', '', 1, NULL),
(53, 'Jaime', 'Takahashi', '4089', '$2y$10$sca30nxIb3KYWPApCyBW9.od2bW7ShpHQkxIuJty86jdUAZqSMZgG', 'jaime.takahashi@gmail.com', NULL, 1, '', '', 1, NULL),
(54, 'Akemi', 'Takahashi', '5490', '$2y$10$SHrmOpJbyYTgnxIcxkaRiupYoGDZWI9I42I5vHJ5WEslYTDsu8Wn6', 'akemi.takahashi@gmail.com', NULL, 1, '', '', 1, NULL),
(55, 'Peterson', 'Torres', '3641', '$2y$10$EwYdJO6tXQ06NvoQ/4GuvOOhKx8DNT.O4vxT7Q.zmJ8NObqtM7bAq', 'peterson.torres@gmail.com', NULL, 1, '', '', 1, NULL),
(56, 'Simão', 'Alves', '5460', '$2y$10$IM3kzeQElI31fPcTM5OJZukdCunGUUfgr8IdQ8bLYwYeDSMbVx0LW', 'simao.alves@gmail.com', NULL, 1, '', '', 1, NULL),
(57, 'Sonia', 'Nazário', '3056', '$2y$10$Ndjo4Xfnik7LwXq4biagSeDnjuzazWpbKy134BV.YYrvWEsXIEraG', 'sonia.nazario@gmail.com', NULL, 1, '', '', 1, NULL),
(58, 'Fernando', 'Hernandes', '8385', '$2y$10$mLlE3aFOFCqjMXyLTRjseO4iUUrBwN7sPfUk.FDxAcuIM6NhgZdTS', 'fernando.hernandes@gmail.com', NULL, 1, '', '', 1, NULL),
(59, 'Claudio', 'Severo', '1487', '$2y$10$SdnAKAzSaJvNe1/x.nLMBOWixxzWOhHu37FPMBokcNYuaSqm/bbSC', 'claudio.severo@gmail.com', NULL, 1, '', '', 1, NULL),
(60, 'Milena', 'Matos', '4196', '$2y$10$besFdM6FGpnXhVbOn8S1wuhuhAT2PJphwd58Qe9PY1z9/voiNUBWe', 'milena.matos@gmail.com', NULL, 1, '', '', 1, NULL),
(61, 'Cauê', 'Carvalho', '7113', '$2y$10$uWmqc5Z7elXdALvyuk6pi.YNywFTiBGBDDsSwI7EILT/TvWevVuUi', 'caue.carvalho@gmail.com', NULL, 1, '', '', 1, NULL),
(62, 'Simão', 'Freire', '1023', '$2y$10$INHNvrRclBPpS4W/PHj1NexkHeEd9I0izVWyN/104kiiVlIA62VYq', 'simao.freire@gmail.com', NULL, 1, '', '', 1, NULL),
(63, 'Leonidas', 'Semedo', '1285', '$2y$10$dPBr43wbimTEg1fY.JiDK.6quYb/3T8VtGCVK5cRFqg9MCgSmjqI2', 'leonidas.semedo@gmail.com', NULL, 1, '', '', 1, NULL),
(64, 'Peterson', 'Neto', '1409', '$2y$10$34O9vtXfO0jySP0lnXxYHO97PI8hjYflzoWa7X7qhtpd99UFTEbxi', 'peterson.neto@gmail.com', NULL, 1, '', '', 1, NULL),
(65, 'Fernando', 'Costa', '9516', '$2y$10$c1roOySl.hSF/LYIxtC4BereBNloSI7iKH1DCit3cK4A9g99sW5xy', 'fernando.costa@gmail.com', NULL, 1, '', '', 1, NULL),
(66, 'Andreia', 'Jordão', '6692', '$2y$10$wODeTl6kKT8I122VU9VmduoJ/yrdm0Hwm244Gts99e9PBtAYrKu4C', 'andreia.jordao@gmail.com', NULL, 1, '', '', 1, NULL),
(67, 'Caroline', 'Rocha', '8148', '$2y$10$XfPN1a9GcNUlOdnLLdfCjuNkyVlTgTgGJ9N0etVIhQ.G9sp0KmEU.', 'caroline.rocha@gmail.com', NULL, 1, '', '', 1, NULL),
(68, 'Chunli', 'Carvalho', '5932', '$2y$10$T8iJP1PHnCVJQW92ozGkEuEC/BH2oGYbAEW3Y5gQnjiNpCwfso7y2', 'chunli.carvalho@gmail.com', NULL, 1, '', '', 1, NULL),
(69, 'Eric', 'Ishida Silva', '9277', '$2y$10$p/lrziQgIAt9dVI9YtvWNOfY7g.HT1W4z2CTxdBx9ip/tq18X7pIa', 'eric.ishida silva@gmail.com', NULL, 1, '', '', 1, NULL),
(70, 'Akemi', 'Redfield', '7605', '$2y$10$rlTPo3boDRvAv1.fm7Bupe.hAqgu5CbdXrssm/oPuy9BabTeZWoVu', 'akemi.redfield@gmail.com', NULL, 1, '', '', 1, NULL),
(71, 'Rafaela', 'Tanaka', '2312', '$2y$10$UugZGX7gPUVVozz2w.oAxOc3XMeILTAeXwzUZGf5hzhkHYwgswkXK', 'rafaela.tanaka@gmail.com', NULL, 1, '', '', 1, NULL),
(72, 'Trinity', 'Neto', '4036', '$2y$10$hXHPjhNTh2qB1mX9p7QPeut/kyRTM4wxzGjjxtSlt0r6M5jSOkwre', 'trinity.neto@gmail.com', NULL, 1, '', '', 1, NULL),
(73, 'Jéssica', 'Freire', '4663', '$2y$10$AQrqtfPfbmaN5MiMftrcf.XtL3zW5PfP0WRAvmT2aZy36vpqArIlW', 'jessica.freire@gmail.com', NULL, 1, '', '', 1, NULL),
(74, 'Otavio', 'Pádua', '8773', '$2y$10$D.OWoMGkkK31BiBP5ygt4ua0Aj5IpdiKYm7cpymHSl7PJZpBqZsCy', 'otavio.padua@gmail.com', NULL, 1, '', '', 1, NULL),
(75, 'Xerxes', 'Matos', '2347', '$2y$10$6.esLPwuhmDChnrerf9N8OQcxu7KQUVbqSLZY56q5CETXQoFf9kIu', 'xerxes.matos@gmail.com', NULL, 1, '', '', 1, NULL),
(76, 'Dante', 'Minazuki', '4867', '$2y$10$YwYDYB8GftaLSyyI21ITyeNbuH1pxmY9qFTpohW912AQ2WlkDnZ5S', 'dante.minazuki@gmail.com', NULL, 1, '', '', 1, NULL),
(77, 'Milena', 'Batista', '3715', '$2y$10$6R113e7t70zXG0ezF.7Mgu2WFttIKM.3TXPGarv0WvVV4FloO88yu', 'milena.batista@gmail.com', NULL, 1, '', '', 1, NULL),
(78, 'Eric', 'Alves', '9348', '$2y$10$AFS0nRFySnQCvPLsa.a1SOY.otBgCYDfgZ9YE1KU7T/zwJ1zP88i2', 'eric.alves@gmail.com', NULL, 1, '', '', 1, NULL),
(79, 'Dante', 'Macedo', '4776', '$2y$10$8ywU4woNkM5IgbKFfYiiDuCJazd8Cx8ueD.CEbcVXGQhimNpFkER.', 'dante.macedo@gmail.com', NULL, 1, '', '', 1, NULL),
(80, 'Jade', 'Villablanca', '1702', '$2y$10$qYXKJYDJgC20Xv7t/JL7suytweR1jdoxWWLr3Ho8KeygB43ANc2Ca', 'jade.villablanca@gmail.com', NULL, 1, '', '', 1, NULL),
(81, 'Daniela', 'Monteiro', '2722', '$2y$10$rAvruif4bgeYFBVFUdPDAugApnRLAoXrAnTjBw6DIAJwV8JC.eCPi', 'daniela.monteiro@gmail.com', NULL, 1, '', '', 1, NULL),
(82, 'Morpheu', 'Matos', '1501', '$2y$10$ixXlJ.PaSWEkgPOyljTGl.sUuHurFiAU3oAiPXpGOPPuacUmg5nMm', 'morpheu.matos@gmail.com', NULL, 1, '', '', 1, NULL),
(83, 'Rafaela', 'Alves', '7815', '$2y$10$enBWX6zxpxaMmLsrAG8pNuq.3a7U7vTlFGeE4Ck4rOPaazM3uuYUG', 'rafaela.alves@gmail.com', NULL, 1, '', '', 1, NULL),
(84, 'Fernando', 'Takahashi', '4804', '$2y$10$G3C35bvsmVcmZCZietQQq.MieToFYIlxpV7v0Y.QQhedJ686HhTbi', 'fernando.takahashi@gmail.com', NULL, 1, '', '', 1, NULL),
(85, 'Jaime', 'Pinheiro', '7148', '$2y$10$tL9hK/BSUg5EMhgdYoz8aOJwcIwBbHBdPAJoQWsk3ZSPt/vKSOo/.', 'jaime.pinheiro@gmail.com', NULL, 1, '', '', 1, NULL),
(86, 'Xerxes', 'Torres', '4622', '$2y$10$9QOO2Adc7wQVKbWz.IA5jOVBoVqmB0vBJMCDxn2dR6EDYWgZD8JCC', 'xerxes.torres@gmail.com', NULL, 1, '', '', 1, NULL),
(87, 'Camila', 'dos Santos', '1582', '$2y$10$lWnTCnuDsxeqZrqJl8PbbuoxKkr2oGghKOdoDhLF.MYLxi.sGYjOq', 'camila.dos santos@gmail.com', NULL, 1, '', '', 1, NULL),
(88, 'Bruna', 'Faria', '1365', '$2y$10$Ix4Gd/A5BbuQlWu/2bXG2OmzX5CCa9bmZwafkkliwp.l/3dvJxCMK', 'bruna.faria@gmail.com', NULL, 1, '', '', 1, NULL),
(89, 'Odete', 'Salgueiro', '7025', '$2y$10$nnvREoRylcqJeGzCik4uIuv1XLr0Z8uP3ZW9k2r2ZzJqZrZ9jHGIW', 'odete.salgueiro@gmail.com', NULL, 1, '', '', 1, NULL),
(90, 'Sarah', 'Castanheira', '7617', '$2y$10$BgefwbyhXCnul.xJ5meyru/osHlGML2xJGIjbrjLzmF8JAdhEP8Eu', 'sarah.castanheira@gmail.com', NULL, 1, '', '', 1, NULL),
(91, 'Doulgas', 'Gouveia', '6606', '$2y$10$7TtY52JAy4k3tUjH88Rb9u.fD9j5A./7MsuVhn80axpFlM0EJL2PS', 'doulgas.gouveia@gmail.com', NULL, 1, '', '', 1, NULL),
(92, 'Caio', 'Costa', '9210', '$2y$10$qsf0tuCQ9fpmEbR/e1w8s.wPSWVhh6cAW4DYoKuD73N/4fvc.JK8u', 'caio.costa@gmail.com', NULL, 1, '', '', 1, NULL),
(93, 'Xerxes', 'Minazuki', '9643', '$2y$10$pjH8YCTVAEFPJI/ZmQo7qeMYnl2IflTMC65eVCES/BsJ4646wbiiG', 'xerxes.minazuki@gmail.com', NULL, 1, '', '', 1, NULL),
(94, 'Jade', 'Lopes', '3809', '$2y$10$JM4dEnB/0T9/TbBOMb4lxu.MImatmg7IAiEy7ckSADQ6AIQY1NGLe', 'jade.lopes@gmail.com', NULL, 1, '', '', 1, NULL),
(95, 'Dante', 'Camilo', '8586', '$2y$10$YLftroLY.XImgBdwdhRIjeE9WtAdCbhxJ4Z8rsHhozJpA8vXm7XR6', 'dante.camilo@gmail.com', NULL, 1, '', '', 1, NULL),
(96, 'Akemi', 'Valentine', '2385', '$2y$10$8u0OndgfGam83OEEpOeKsOUGzzhssTOTfgdsqggSs3xGpt5Q6oGQa', 'akemi.valentine@gmail.com', NULL, 1, '', '', 1, NULL),
(97, 'Jill', 'Castanheira', '7985', '$2y$10$tqNt11SSr8skbdK2OLaAJuHz35rYrxsgfFWLlYB3My/Rlp7HvV9u6', 'jill.castanheira@gmail.com', NULL, 1, '', '', 1, NULL),
(98, 'Trinity', 'Redfield', '8730', '$2y$10$d131QQnByMQd4PKCT0Eup.uCkY4tprICH.jzQ89jFsRvDe8CUmTBO', 'trinity.redfield@gmail.com', NULL, 1, '', '', 1, NULL),
(99, 'Sonia', 'Pádua', '8480', '$2y$10$T4tIC/B3gvEr7yb58/L5pecsDSwHmMIsNPnC3OElN2TANEDXmn.UC', 'sonia.padua@gmail.com', NULL, 1, '', '', 1, NULL),
(100, 'Augusto', 'Castanheira', '7909', '$2y$10$j99eMOq5ooLHMmPH6HgNjOksCtnzeLeku2Vns8eC.p699Y9UdY6M.', 'augusto.castanheira@gmail.com', NULL, 1, '', '', 1, NULL),
(101, 'Yoko', 'Alves', '7344', '$2y$10$hVqSKq1T78UMfQIM2xeOEurCasXtRCEILLrMWDbDmDpPT/eecitCm', 'yoko.alves@gmail.com', NULL, 1, '', '', 1, NULL),
(102, 'Michele', 'Macedo', '4368', '$2y$10$zr.iDPHklgJ7XKYg7r1Ah.N0Dsj1t5N2FKMIWJNHKokC8wD0M3R8K', 'michele.macedo@gmail.com', NULL, 1, '', '', 1, NULL),
(103, 'Peterson', 'Costa', '9074', '$2y$10$dCncP2jX6PfAIAOFTLs/6uhwPo5/JF/31ibXXnpoYDW/7qa1Wuq4q', 'peterson.costa@gmail.com', NULL, 1, '', '', 1, NULL),
(104, 'Bruno', 'Monteiro', '6180', '$2y$10$/xrIAA6P3MkvVxGPUBgfke2GS8zIcNOzs7stYIJc/MaPskNTISElS', 'bruno.monteiro@gmail.com', NULL, 1, '', '', 1, NULL),
(105, 'Jonas', 'Matos', '9653', '$2y$10$lHhq5rWUjjQ/3ZFYZQLQKO.YnJ9v/6S27XTCkWRSELd6CM.QXbDg6', 'jonas.matos@gmail.com', NULL, 1, '', '', 1, NULL),
(106, 'Jade', 'Franca', '3738', '$2y$10$didk.LJ9qryb3yUyCLPTGODgUxIROSksIYXHBKE5fEaz.QuJ0jvuC', 'jade.franca@gmail.com', NULL, 1, '', '', 1, NULL),
(107, 'Peterson', 'Redfield', '4685', '$2y$10$zOV4eq61ntHMVFkhusp9n.GdU.bJxG.wQ4lS7vnNUFYTmecbUvPqG', 'peterson.redfield@gmail.com', NULL, 1, '', '', 1, NULL),
(108, 'Filipe', 'Neves', '1458', '$2y$10$eHzRh29fhEFWKlOhmaa7Du/eCI1fo4EIR1mY1APWMp5HdzGBbAawe', 'filipe.neves@gmail.com', NULL, 1, '', '', 1, NULL),
(109, 'Jill', 'dos Santos', '2063', '$2y$10$docvI66cIVna8QUmM2UfWupBhsyloxZaunzY314aYCNx.H/UGZsju', 'jill.dos santos@gmail.com', NULL, 1, '', '', 1, NULL),
(110, 'Cauê', 'Minazuki', '1316', '$2y$10$Djy0frsBB8HuapmEyRWY1eZft46SIFVffnP9BtuLfOE4xwxYKxLVm', 'caue.minazuki@gmail.com', NULL, 1, '', '', 1, NULL),
(111, 'Jonas', 'Valentine', '6061', '$2y$10$78mntPQJSnKQPyoH6xOwLe.LW0lzKNklWb8z47vPLSWWexAtAf996', 'jonas.valentine@gmail.com', NULL, 1, '', '', 1, NULL),
(112, 'Irene', 'Camilo', '6295', '$2y$10$k2zlm1b5ia7vVU8bYxba0e2ILb3sZUYEF7KzZCjT/B7mCmqVkW.v.', 'irene.camilo@gmail.com', NULL, 1, '', '', 1, NULL),
(113, 'Doulgas', 'Tanaka', '5337', '$2y$10$x0FYU3kmQ7R0wKM3OZMuCebFEy21oj/JDXBum1ybuaF0gvZg0FaWC', 'doulgas.tanaka@gmail.com', NULL, 1, '', '', 1, NULL),
(114, 'Angelina', 'Valentine', '5403', '$2y$10$BLjS6ePpnhkpymwMWj7dPurl/UfYh6OI6via.bFKyqHOKyBoDet0e', 'angelina.valentine@gmail.com', NULL, 1, '', '', 1, NULL),
(115, 'Monica', 'Suzuki', '9171', '$2y$10$roap3EhNgjXPVZyg3jc4MuPmgGB0rtI8dTf1Twh1sJHjYoRRp.FGW', 'monica.suzuki@gmail.com', NULL, 1, '', '', 1, NULL),
(116, 'Peterson', 'Faria', '3523', '$2y$10$Zq2Wv08sO33Hb2g1UJ8JJedw79m6Iosjv5zKl7ssu.yC5WH48Jd3a', 'peterson.faria@gmail.com', NULL, 1, '', '', 1, NULL),
(117, 'Leonidas', 'Severo', '4723', '$2y$10$N2Akd7lf3sQ3MadUliEQXeOeTrRcecmpgGczWIzWLQy391jtrwACe', 'leonidas.severo@gmail.com', NULL, 1, '', '', 1, NULL),
(118, 'Augusto', 'Neto', '8450', '$2y$10$uV15pnroFlHbZrBU3oGQn.L0WK8NMIZfIY0kBSO6KLKW9v0Vp2eja', 'augusto.neto@gmail.com', NULL, 1, '', '', 1, NULL),
(119, 'Leonidas', 'Nazário', '8261', '$2y$10$cCCC4vWzkti0NpeO9/t/Iu6Pi.CkzcOAuR0Dljbsfkn48QKVPkMKO', 'leonidas.nazario@gmail.com', NULL, 1, '', '', 1, NULL),
(120, 'Eric', 'Hernandes', '3519', '$2y$10$2ycBvmP984T2pJ6EFlSy.O5Lkass3KZszopM.BEOfPVtObulh2ujW', 'eric.hernandes@gmail.com', NULL, 1, '', '', 1, NULL),
(121, 'Chunli', 'Nazário', '9654', '$2y$10$8B2BYztfrUtj.r3iGb87l.NmZFXJAmyKHe3wYyfzkLE2v/Z38THgC', 'chunli.nazario@gmail.com', NULL, 1, '', '', 1, NULL),
(122, 'Doulgas', 'Castanheira', '9473', '$2y$10$BJYFb3mgP4sYUCID3X0aheX5p9D4SOPOYKAaElJyuTaMzQVv/mWgq', 'doulgas.castanheira@gmail.com', NULL, 1, '', '', 1, NULL),
(123, 'Jéssica', 'Franca', '2957', '$2y$10$nk3N6hoFcVz/aHa85DOhduFDsTHGBtP7FE6qseNe84w29LASdV/Jy', 'jessica.franca@gmail.com', NULL, 1, '', '', 1, NULL),
(124, 'Jaime', 'Villablanca', '5694', '$2y$10$PGmPvgo/yjVBCnEBl5mZiehkyOegecHw4d5HILINB.NAXX51GUfbO', 'jaime.villablanca@gmail.com', NULL, 1, '', '', 1, NULL),
(125, 'Peterson', 'Minazuki', '3068', '$2y$10$DSHW7OB1tAIpEY2pK6MX9Oodtn9hHYsH9IdK8Hd5adqzEEcnHUSqW', 'peterson.minazuki@gmail.com', NULL, 1, '', '', 1, NULL),
(126, 'Cauê', 'Gomes', '8712', '$2y$10$syQmnJwxaZ3gcGgq9uPpI.SBcNZGbdCsNL0KrDjeKKTsZxFD6Vq0G', 'caue.gomes@gmail.com', NULL, 1, '', '', 1, NULL),
(127, 'Leonidas', 'Yamada Silva', '8234', '$2y$10$LPKFDKLHz76pAccd3LpuT.vDWD38lvnLY1qFRit9ggh6q.a/xiXm2', 'leonidas.yamada silva@gmail.com', NULL, 1, '', '', 1, NULL),
(128, 'Leonidas', 'Matos', '3977', '$2y$10$sCgSyM76savUOCKHqLjcVe35zjOpEagKkFLR5SYRQopLcYcwgONka', 'leonidas.matos@gmail.com', NULL, 1, '', '', 1, NULL),
(129, 'Michele', 'Valentine', '5317', '$2y$10$k8Ax1SgrYRe59Rdvg5JBx.ENkIRaUSTR9bIstc/idYrvNkwDclA8W', 'michele.valentine@gmail.com', NULL, 1, '', '', 1, NULL),
(130, 'Doulgas', 'Sato', '7146', '$2y$10$LNg.Jff6Dn.VN0ceOhc.k.ZvOkiJQdhuaVfnPslw4grE0pn8Mndfm', 'doulgas.sato@gmail.com', NULL, 1, '', '', 1, NULL),
(131, 'Doulgas', 'Rocha', '3428', '$2y$10$V6pV2ZPoRWoOkDVzbbaws.vL91.7x9i8j0zc9rcD61H5ruDARzp3K', 'doulgas.rocha@gmail.com', NULL, 1, '', '', 1, NULL),
(132, 'Dante', 'Lins', '6404', '$2y$10$PkD55UroDIcC75VPsX8ikeUbLsVuvuycSVfC2bYUSuGpUjyU1OKQi', 'dante.lins@gmail.com', NULL, 1, '', '', 1, NULL),
(133, 'Cauê', 'Takahashi', '3117', '$2y$10$Ifdt1z2BFzz3T0Ci5ahuy.8xYnOdGlNcPU.MI00963Aa1.Y25nxVS', 'caue.takahashi@gmail.com', NULL, 1, '', '', 1, NULL),
(134, 'Michele', 'Rocha', '6798', '$2y$10$2MaSEp9JZmFiejDBEn5R8OliaYxeTIw9/ncEb3Qnq8JQ5j1cf8R4q', 'michele.rocha@gmail.com', NULL, 1, '', '', 1, NULL),
(135, 'Tamires', 'Matos', '2909', '$2y$10$G7Ki.ZWp5g81QpsqrYFZ.uH.K8DdaT32vnsZ0eSXL99nz8wHfmZZi', 'tamires.matos@gmail.com', NULL, 1, '', '', 1, NULL),
(136, 'Aline', 'Lins', '4774', '$2y$10$3G3a.rZTFAW380AG1ux59ex8ShiYZBKbDHeVzJDaeMAeTTLTLzZKa', 'aline.lins@gmail.com', NULL, 1, '', '', 1, NULL),
(137, 'Monica', 'Batista', '3786', '$2y$10$59BsISZR27iaqOD5LW652ezzTMXunjK4DA20OgoKt3tZD3IQ09sOe', 'monica.batista@gmail.com', NULL, 1, '', '', 1, NULL),
(138, 'Caio', 'Hato', '2209', '$2y$10$dIVN/VkW7eTsTqtUZcq1EuKdiIxz8cjraDRkPkTLOvDH/cRT6SO4y', 'caio.hato@gmail.com', NULL, 1, '', '', 1, NULL),
(139, 'Eric', 'Sato', '5768', '$2y$10$TO.TNRIcYCqyHPevdGzhze11tECTZTT5cK9NwYgRStonAR0TKwTmq', 'eric.sato@gmail.com', NULL, 1, '', '', 1, NULL),
(140, 'Akemi', 'Costa', '1718', '$2y$10$X0SHtq/6xG7nzzENnmwnge5xY9dfJOopcD8pTP9YH9g3n/pPrphfO', 'akemi.costa@gmail.com', NULL, 1, '', '', 1, NULL),
(141, 'Milena', 'Neves', '2721', '$2y$10$cm16QZjwee96H8W3vLqpfOweYyzapcPKkjgsBWrw8Iep6/J/OrYx6', 'milena.neves@gmail.com', NULL, 1, '', '', 1, NULL),
(142, 'Bruno', 'Semedo', '8182', '$2y$10$HR/7fbhqnCwC18BrIgOkdOi.sbiScFwHQ8p1elm4rzw4rECjHauTS', 'bruno.semedo@gmail.com', NULL, 1, '', '', 1, NULL),
(143, 'Odete', 'dos Santos', '3920', '$2y$10$hA/R2oEUKVFICRUeYCGOSevKBx2GZyIZNBLggnn7yUxO9ceGSPLDK', 'odete.dos santos@gmail.com', NULL, 1, '', '', 1, NULL),
(144, 'Jaime', 'Nazário', '5097', '$2y$10$oYke6PONrGx.0J2tD8qic.Rus5SWlAgnJphb0TWGiMhs/ppXAcAOG', 'jaime.nazario@gmail.com', NULL, 1, '', '', 1, NULL),
(145, 'Michele', 'Castanheira', '7016', '$2y$10$vCktZseVBI.h.XxqtPP6Ce0EG.4XzjVMxOYfbfkPr7dPmU4c1y6Vi', 'michele.castanheira@gmail.com', NULL, 1, '', '', 1, NULL),
(146, 'Caroline', 'Minazuki', '9003', '$2y$10$dmWBhkmofKvh/0MVftxmTufAJj8F68lSC57k5P4O8xPelSSntuvL2', 'caroline.minazuki@gmail.com', NULL, 1, '', '', 1, NULL),
(147, 'Sonia', 'Macedo', '5413', '$2y$10$AmO6p414wrpLmipiBAzzLOFrAF7jjhf5mRzFt./xUD7MjQS3pQD4y', 'sonia.macedo@gmail.com', NULL, 1, '', '', 1, NULL),
(148, 'Kitana', 'Lins', '6896', '$2y$10$z8DHXJkLXfaFoON3Hd9xTO1j89UpS0/.pDjtPivTGKOvmnPa9bg9.', 'kitana.lins@gmail.com', NULL, 1, '', '', 1, NULL),
(149, 'Dante', 'Faria', '9640', '$2y$10$z2NCb8PsAyryES3sW8JxR.SURAnTKCUvAiN7ziW6QDPaZzALuM.my', 'dante.faria@gmail.com', NULL, 1, '', '', 1, NULL),
(150, 'Claudio', 'Faria', '3020', '$2y$10$aLnRFfOjpEGXmSK8csxWqeEvCEf0kqEGqHDc1SNijoL5DfpFf7Gcq', 'claudio.faria@gmail.com', NULL, 1, '', '', 1, NULL),
(151, 'Sarah', 'Peixoto', '3321', '$2y$10$yI9huSJXV8gprh5Wg4gTTewJGb6cY0ig1uEtBCu4WAKZVEsDXcpa6', 'sarah.peixoto@gmail.com', NULL, 1, '', '', 1, NULL),
(152, 'Eduardo', 'Pádua', '6752', '$2y$10$wxzGmCnLpLzpymyTdWEec.ifnC7ImdeeqotCD8Z62xGgTaKT1bD3a', 'eduardo.padua@gmail.com', NULL, 1, '', '', 1, NULL),
(153, 'Otavio', 'Franca', '1639', '$2y$10$lVxKCUxhEfeSmpXpSAErZ.bqCeINB.GNBKwKM02uoxpXg4UvoNvSe', 'otavio.franca@gmail.com', NULL, 1, '', '', 1, NULL),
(154, 'Jill', 'Salgueiro', '6610', '$2y$10$I//Uq3TtxLci2jlQZE69eehci5GcMIOdMeW69vanT4uaE5qGKd/V2', 'jill.salgueiro@gmail.com', NULL, 1, '', '', 1, NULL),
(155, 'Camila', 'Nazário', '9642', '$2y$10$tBTwfVuyJj9oMIMi4aWNrupqTvVZR.zbH2QdApCxm4OLA9K0Jsg8y', 'camila.nazario@gmail.com', NULL, 1, '', '', 1, NULL),
(156, 'Camila', 'Lopes', '1631', '$2y$10$A6QQWLZP1Vf/4yBpXMtUuufQJO.KVlFi0EUS08HVsxemBXOZ8mcnW', 'camila.lopes@gmail.com', NULL, 1, '', '', 1, NULL),
(157, 'Lara', 'Nazário', '3116', '$2y$10$jgeyMuY6lKF3/w3dAIPQwOF.qj0gD5/2cjod3I2brGvTLdMuL6MXi', 'lara.nazario@gmail.com', NULL, 1, '', '', 1, NULL),
(158, 'Andreia', 'Takahashi', '1555', '$2y$10$1mijcJOQixa0FmU46AwBG.pkloAwA4kpPfXwuTRN2ZMvofU6LH5aK', 'andreia.takahashi@gmail.com', NULL, 1, '', '', 1, NULL),
(159, 'Yoko', 'Franca', '6337', '$2y$10$Qw0fKVuM1HC/FKksu5799.JX/nCD3TH.lThOINaxzI.cDEvc0ky4q', 'yoko.franca@gmail.com', NULL, 1, '', '', 1, NULL),
(160, 'Claudio', 'Nazário', '8110', '$2y$10$QcziAsdpHHzYxGx4IiuM1ulMLuZIshaXDOSKk/uGK.vnGEsOKAqMm', 'claudio.nazario@gmail.com', NULL, 1, '', '', 1, NULL),
(161, 'Barbara', 'Tanaka', '9031', '$2y$10$Z1IRFVRXvGu/mALyd4aF1eNoYCE.detWB47vBQ9AA9L0N50Emf8P6', 'barbara.tanaka@gmail.com', NULL, 1, '', '', 1, NULL),
(162, 'Jonas', 'Lopes', '5607', '$2y$10$sN/hQ6F7KtKDI98y4oJ4Ee7GKLKReag44zA2wUSCZnMI6EC4NqsXu', 'jonas.lopes@gmail.com', NULL, 1, '', '', 1, NULL),
(163, 'Fernando', 'Castanheira', '8016', '$2y$10$Fi1.jnUc1OYm/NH0dgXeTu11thoquS2ou2UpqvUlfLIGCgwYxAYGu', 'fernando.castanheira@gmail.com', NULL, 1, '', '', 1, NULL),
(164, 'Jade', 'Costa', '9836', '$2y$10$1vzEKvFbVPEizWu0py8sgOG6Mga/xtexr/VHSjen/aW1lWNfEMNau', 'jade.costa@gmail.com', NULL, 1, '', '', 1, NULL),
(165, 'Peterson', 'Sato', '4785', '$2y$10$f2CLGgkcnL.CeeXMl4lE/eqLoCv5M8xhXueHYTj3EvCQ20RVJeOBG', 'peterson.sato@gmail.com', NULL, 1, '', '', 1, NULL),
(166, 'Dante', 'Lopes', '8571', '$2y$10$IbTUKzJYYehCbhjoFt4gZeHHtntIMNwSTgWmHuAzwqu5es/jlt5q2', 'dante.lopes@gmail.com', NULL, 1, '', '', 1, NULL),
(167, 'Eduardo', 'Freire', '3405', '$2y$10$cBWkyWN0HQO2IaDFPxdglO00KYX.K5iiunR/62AU4f5YEPeajmkmS', 'eduardo.freire@gmail.com', NULL, 1, '', '', 1, NULL),
(168, 'Odete', 'Lins', '2620', '$2y$10$tJzRfmioe.iq.QLTQfq5cu2R2M/bh4Asc/5xDzXMVmUQSDB6yv1ii', 'odete.lins@gmail.com', NULL, 1, '', '', 1, NULL),
(169, 'Simão', 'Franca', '9802', '$2y$10$rAVWuR0CLWXlkK0i2SqmC.6OwVfqJPWfg5KkBAJISieqNxGE7NPje', 'simao.franca@gmail.com', NULL, 1, '', '', 1, NULL),
(170, 'Yori', 'Yamada Silva', '6767', '$2y$10$x6mOMZCI./d5cpZ/zdn4k.jrm860lHg43rhr7OX7TswmipSWJIp8K', 'yori.yamada silva@gmail.com', NULL, 1, '', '', 1, NULL),
(171, 'Dante', 'Leal', '9057', '$2y$10$68CT4O8D6nBjiW9bsffCH.h5mMta48xt6e2CSzLw.O/qfD0mRlGIW', 'dante.leal@gmail.com', NULL, 1, '', '', 1, NULL),
(172, 'Xerxes', 'Monteiro', '6601', '$2y$10$swiDrsxm2cPOciu3Ql9s5uNIVxh1BzhRxiVcqAUCVY6y6eYSaG.a6', 'xerxes.monteiro@gmail.com', NULL, 1, '', '', 1, NULL),
(173, 'Augusto', 'Leal', '7089', '$2y$10$6MGjk6Lr2V9M.vey5lDHHu/iAxIZffES7xBo1v90iv4KPEib3gN4C', 'augusto.leal@gmail.com', NULL, 1, '', '', 1, NULL),
(174, 'Simão', 'Pádua', '8707', '$2y$10$7AGs4uNAeWS8SaILIFEf7.zl0ijSZRIzSTAz0zQS8dVLkKxJ3F5XO', 'simao.padua@gmail.com', NULL, 1, '', '', 1, NULL),
(175, 'Cauê', 'dos Santos', '8133', '$2y$10$fmaAs/igHN2h8twLpklytOhkvCmvsIWlUDUfQry5QNr/q4zAELWC2', 'caue.dos santos@gmail.com', NULL, 1, '', '', 1, NULL),
(176, 'Claudio', 'Salgueiro', '1299', '$2y$10$dHtwPGyzUczlgKv2TzHGx.C5ToXO1x6I5kRlRx.XGNVP.Dky/.FGe', 'claudio.salgueiro@gmail.com', NULL, 1, '', '', 1, NULL),
(177, 'Bruno', 'Redfield', '2484', '$2y$10$23nOWfpwdml1T8R5JR9yJO/pYpi5pRYsmksKuHuPzP0plVWDJmKGS', 'bruno.redfield@gmail.com', NULL, 1, '', '', 1, NULL),
(178, 'Akemi', 'Hernandes', '2796', '$2y$10$.V.87ZYutIERCUHRUSgFXOgBgkovLvKQzH0Ak7pL8MMNULzCp7FpW', 'akemi.hernandes@gmail.com', NULL, 1, '', '', 1, NULL),
(179, 'Rafaela', 'Valentine', '8602', '$2y$10$u3ykYhvRt4Y8X01dDrO6R.XqIWgkSJVrk6WYIhrt/QTGvFx3rD0o.', 'rafaela.valentine@gmail.com', NULL, 1, '', '', 1, NULL),
(180, 'Sheeva', 'Pádua', '8078', '$2y$10$AzLJdBoTCwXyp5ciPL9Pbukr09NIYPCQOJTBUjzn082n19mjlY88K', 'sheeva.padua@gmail.com', NULL, 1, '', '', 1, NULL),
(181, 'Jade', 'Batista', '5012', '$2y$10$OS.tla9WX1MGa4yjmOZBAuDj5o5DR/tXeH0tL0bfa.5DOBLGU7jN2', 'jade.batista@gmail.com', NULL, 1, '', '', 1, NULL),
(182, 'Peterson', 'Takahashi', '5062', '$2y$10$ru7UVwi2VUEswOXTCAkoMeWpo1ChuX9fxZMqxT4Mml8DJ63KlHwIC', 'peterson.takahashi@gmail.com', NULL, 1, '', '', 1, NULL),
(183, 'Fernanda', 'Yamada Silva', '6325', '$2y$10$whDeqXp82cu0HH45hsVzAePAb4w1iqAc7dt/7hnYJ4ZoBZXTvP2z.', 'fernanda.yamada silva@gmail.com', NULL, 1, '', '', 1, NULL),
(184, 'Jill', 'Severo', '2519', '$2y$10$o0foX/43TuLe06R7QcKKg.ADNBJwve8yYtUcXIJd7mj29ERoRsrOW', 'jill.severo@gmail.com', NULL, 1, '', '', 1, NULL),
(185, 'Augusto', 'Valentine', '6575', '$2y$10$799.5AnbrIqRm7v3QyTLp.s729mg8t6uMyLvxvCRnH3oPHMv65OkC', 'augusto.valentine@gmail.com', NULL, 1, '', '', 1, NULL),
(186, 'Filipe', 'Faria', '4226', '$2y$10$ubaqOl6mTKOvSgiDpFe6P.oaP3B/bCRixBm73JOb.6TYPIVn5Ijwm', 'filipe.faria@gmail.com', NULL, 1, '', '', 1, NULL),
(187, 'Morpheu', 'Faria', '6371', '$2y$10$cdbMMlDqJye.U1T6XqySTuRlImi37Yfj5kEj2vC2pijvJ/TOmv.ru', 'morpheu.faria@gmail.com', NULL, 1, '', '', 1, NULL),
(188, 'Cleber', 'Torres', '1142', '$2y$10$bR5fQZT.BDrWKqPI/x./Ge3a3CC6jmZnqw07qUBQdbcgqa71Dnl1.', 'cleber.torres@gmail.com', NULL, 1, '', '', 1, NULL),
(189, 'Eduardo', 'Ishida Silva', '1544', '$2y$10$rmD47upMYokwYyPkh6YypehT85rm13OxrL9Vl2bN8Wk.fEEgT41ai', 'eduardo.ishida silva@gmail.com', NULL, 1, '', '', 1, NULL),
(190, 'Angelina', 'Suzuki', '4651', '$2y$10$jlT13R/9c4owkoGBseDtYecO1dD9ZYchvewiK.y/KUKE21rpq63q2', 'angelina.suzuki@gmail.com', NULL, 1, '', '', 1, NULL),
(191, 'Barbara', 'Rocha', '2968', '$2y$10$trplyoUtrKtMM82PMPv21.nDL.NP271VY9X8UCjtl2uvZUYXFtp0G', 'barbara.rocha@gmail.com', NULL, 1, '', '', 1, NULL),
(192, 'Lara', 'Valentine', '8357', '$2y$10$43S.YDIkZXFLM.LgKZ5QKuJEMxI7GZ9XZTN7G8UbjtdxtKrCamzDu', 'lara.valentine@gmail.com', NULL, 1, '', '', 1, NULL),
(193, 'Bruno', 'Pádua', '6907', '$2y$10$1mevnPrZP82i6xvy/9ndH.QSflYnXgYMeeV8.8QYD3LYV06Ojnk4q', 'bruno.padua@gmail.com', NULL, 1, '', '', 1, NULL),
(194, 'Jade', 'Alves', '4331', '$2y$10$uSD8EJNRUEoMQdZbRv0YiuOP.BxeCi7VOfCm6IWkgvrN2tdZeiIjm', 'jade.alves@gmail.com', NULL, 1, '', '', 1, NULL),
(195, 'Jonas', 'Faria', '1404', '$2y$10$i/eDp87KgCCpJjTwrUcQju2eHFe0Hd.ZA3A9KSFSsuayUBgT9vZVW', 'jonas.faria@gmail.com', NULL, 1, '', '', 1, NULL),
(196, 'Fernando', 'Suzuki', '6269', '$2y$10$QGl43TCXgCfNQFc5h5zIneHmpsrQYzy0AakISNSUCOPEQhW18PcWe', 'fernando.suzuki@gmail.com', NULL, 1, '', '', 1, NULL),
(197, 'Rafaela', 'da Silva', '5591', '$2y$10$UEL1HoXKD0UIgxDG6vRAY.OXWHTH.aJRlxs9ThRw14b8lmaxID6ta', 'rafaela.da silva@gmail.com', NULL, 1, '', '', 1, NULL),
(198, 'Tamires', 'Faria', '4702', '$2y$10$HMPToBp2n8DYnGEU1dxo2eHCGx.7d.tKVroqbyGTW8XpVMSkUrKnK', 'tamires.faria@gmail.com', NULL, 1, '', '', 1, NULL),
(199, 'Eric', 'Castanheira', '3458', '$2y$10$ur3Frx9ao1gnXT7xjDha2egp3t/hOJHDEZScDR0OEpfoHZ39GenrW', 'eric.castanheira@gmail.com', NULL, 1, '', '', 1, NULL),
(200, 'Dante', 'Takahashi', '6963', '$2y$10$.8eE1wmebZB9nXkgSsyCy.4eMkNhGFJBFAq1yPYeOoCX7ic7o7ktK', 'dante.takahashi@gmail.com', NULL, 1, '', '', 1, NULL),
(201, 'Cleber', 'Peixoto', '5024', '$2y$10$BE6y4.kpSUCrzmnk48Lsle8zv97eebmDCFcg4Z3wbrrpq/lXVs6VC', 'cleber.peixoto@gmail.com', NULL, 1, '', '', 1, NULL),
(202, 'Caio', 'da Silva', '2128', '$2y$10$FgGc6kk2qt3QCzzEa3XKuukZrFZOwtna/FVCSRtr9pLupM1.1WeSO', 'caio.da silva@gmail.com', NULL, 1, '', '', 1, NULL),
(203, 'Kitana', 'Camilo', '1246', '$2y$10$DznKj/5U67rAFAdsCQEVU.rK1DR0D.Buotp7mDyO0aRmBxqSuUQsO', 'kitana.camilo@gmail.com', NULL, 1, '', '', 1, NULL),
(204, 'Yoko', 'Lins', '8183', '$2y$10$sNTrNw5TWRQ4fwO1/cZMHu0iNhRzPpVf4mnKg5bOdEhB5ZGF6ygM.', 'yoko.lins@gmail.com', NULL, 1, '', '', 1, NULL),
(205, 'Alexandra', 'Torres', '6682', '$2y$10$7FbRPne/6JAb8nICJHtOPeEODL88pwIsp4oBCdQ/Zy2Og3vspYTcu', 'alexandra.torres@gmail.com', NULL, 1, '', '', 1, NULL),
(206, 'Andreia', 'Monteiro', '8919', '$2y$10$jVwi.lP6Hjx7bA16IvgXfOG/j8v4V/l68AsJSxOPp6LdiRShgAWGe', 'andreia.monteiro@gmail.com', NULL, 1, '', '', 1, NULL),
(207, 'Jonas', 'da Silva', '8553', '$2y$10$Vz6G73M1GYE0nVoW5P5zOO9Req/xkce3dEHrk7oSQz3XGUxSl.Vn2', 'jonas.da silva@gmail.com', NULL, 1, '', '', 1, NULL),
(208, 'Doulgas', 'Monteiro', '1636', '$2y$10$gfm4ZJ2Qpzaman.jc.MlIe9zuWWD6izmflCFbAYYZG6JFNus720a6', 'doulgas.monteiro@gmail.com', NULL, 1, '', '', 1, NULL),
(209, 'Sheeva', 'da Mata', '8900', '$2y$10$AOIzlg40nQ7p7rVsU7nA8ODarDirOgTd2Tpq0LXjzHzeACkHIdeAq', 'sheeva.da mata@gmail.com', NULL, 1, '', '', 1, NULL),
(210, 'Xerxes', 'Peixoto', '5937', '$2y$10$nUiBHIZV/FLmzeXvPCc6v.PGiG0T7dzRT0u2uJP/Bsp7epDvkuVk.', 'xerxes.peixoto@gmail.com', NULL, 1, '', '', 1, NULL),
(211, 'Filipe', 'Franca', '3814', '$2y$10$9Ew65jLQS0.ax4O4TWCxWujwGkMYWNmyMvjxh1e9kowCeNNSJH1Ru', 'filipe.franca@gmail.com', NULL, 1, '', '', 1, NULL),
(212, 'Aline', 'Neto', '1561', '$2y$10$WRftjig34iL7DmLxqKFi.eK422LbSSSMfGN6SxRiJvNo41kYnL6iy', 'aline.neto@gmail.com', NULL, 1, '', '', 1, NULL),
(213, 'Doulgas', 'Torres', '9245', '$2y$10$RClNcOikjFepKg5HH5cW5.pCz2buxToHOtMnzxOH9GTi4E.1FhVkq', 'doulgas.torres@gmail.com', NULL, 1, '', '', 1, NULL),
(214, 'Sarah', 'Valverde', '4139', '$2y$10$ZFW1khga/SGqee0Iz19hSudDGrLQSeEhjiTHl01vJrJhkKH78iNm6', 'sarah.valverde@gmail.com', NULL, 1, '', '', 1, NULL),
(215, 'Sheeva', 'Macedo', '5042', '$2y$10$oDvycacq8eLVJJD8gLzFu.Zna0or0nMUC0hbGFLrXycXsWocQNxhK', 'sheeva.macedo@gmail.com', NULL, 1, '', '', 1, NULL),
(216, 'Andreia', 'Porta', '2550', '$2y$10$W33twF54fjBY5AYbbLuLw.Zs3Sg9ur6jmEjYGJgPa99qaIjjuslhK', 'andreia.porta@gmail.com', NULL, 1, '', '', 1, NULL),
(217, 'Chunli', 'Neto', '1121', '$2y$10$Fzkb3oFV5xzimp7OGtT3xeMJEFSwDxwBPOrmFA4Q7DxNOP2wP3zym', 'chunli.neto@gmail.com', NULL, 1, '', '', 1, NULL),
(218, 'Bruno', 'Nazário', '4452', '$2y$10$0ImIiySGu0Xe73.wj8pOKeNHUFwtTJecNxT0w5UjxJqkZcG677vGy', 'bruno.nazario@gmail.com', NULL, 1, '', '', 1, NULL),
(219, 'Otavio', 'Monteiro', '9380', '$2y$10$1LVfqk.zNsi1Z/9IMXHxCOge9HfpZ8xwc29IOIpDhQwr/7NMBglOW', 'otavio.monteiro@gmail.com', NULL, 1, '', '', 1, NULL),
(220, 'Jill', 'Batista', '7210', '$2y$10$NDLoUYYD1iUzhN81GH.phuuWbSvBLCeU/vFdWVEQPdi3Tj7jieak6', 'jill.batista@gmail.com', NULL, 1, '', '', 1, NULL),
(221, 'Filipe', 'Torres', '5163', '$2y$10$N.aLB4hdrjZnDwBz0tAnSuApe0iq.DXSSGNq8H/oPeAbcQkqCNlxC', 'filipe.torres@gmail.com', NULL, 1, '', '', 1, NULL),
(222, 'Filipe', 'Ishida Silva', '6095', '$2y$10$TGjIAzBmooBQdQEDJgMYwuG0P4QtVMA8SX2EVSaY9xXxQUas7ts7u', 'filipe.ishida silva@gmail.com', NULL, 1, '', '', 1, NULL),
(223, 'Xerxes', 'Severo', '9767', '$2y$10$RJXNeIW2xYsDRy6uY9Tf7u.3pLllQJRCEQS58x2T0lxaE7ZpSxYDC', 'xerxes.severo@gmail.com', NULL, 1, '', '', 1, NULL),
(224, 'Camila', 'Suzuki', '9138', '$2y$10$cvr52KYVXFev13jUjV50nuH8v0/YZlwilwP9JYxS/.8mg0sunlmTe', 'camila.suzuki@gmail.com', NULL, 1, '', '', 1, NULL),
(225, 'Fernanda', 'Minazuki', '5181', '$2y$10$I8Psc1JK8hlExptrK0hiN.Z/Fb8MkPDwUSXf5DHDFemNXq7LoDQYi', 'fernanda.minazuki@gmail.com', NULL, 1, '', '', 1, NULL),
(226, 'Dante', 'Salgueiro', '5936', '$2y$10$OoonBEkI.MJniSTqxCI.GeOBkH2twAivSv.GVSHBir/GmsAlINpyq', 'dante.salgueiro@gmail.com', NULL, 1, '', '', 1, NULL),
(227, 'Doulgas', 'Lopes', '4582', '$2y$10$F4x1t0L1ynbb/Otnt39Scu7jkWt1MehVRIEo7WONYZtiTfAdPqbI6', 'doulgas.lopes@gmail.com', NULL, 1, '', '', 1, NULL),
(228, 'Filipe', 'Carvalho', '9826', '$2y$10$6UzZTuSu128KnreC7ffgte83xdOWSJsGbhUeazM74jBsM7ecYMqee', 'filipe.carvalho@gmail.com', NULL, 1, '', '', 1, NULL),
(229, 'Augusto', 'Hernandes', '4376', '$2y$10$gu7C8LrGWHL9NZGiZwFmoOHpyj83patVLJOnwzwPWyowHKtYiAd.2', 'augusto.hernandes@gmail.com', NULL, 1, '', '', 1, NULL),
(230, 'Doulgas', 'Yamada Silva', '4975', '$2y$10$drr3qOQW29TwA0eT53ziBOqhBsafSVLfcax/Kpvy5ZBMisRU.TKTa', 'doulgas.yamada silva@gmail.com', NULL, 1, '', '', 1, NULL),
(231, 'Caio', 'Leal', '3997', '$2y$10$Da5slxEyr6dDCmyMQHLIV.cxotNdwJ.LfCD/tzh6vUcLpVpwQYrKu', 'caio.leal@gmail.com', NULL, 1, '', '', 1, NULL),
(232, 'Angelina', 'Batista', '7101', '$2y$10$L5b7sh6tetnN7ZbEbhwI8enveNIEw0./OHstkLXzOY.Nlgnj3V69m', 'angelina.batista@gmail.com', NULL, 1, '', '', 1, NULL),
(233, 'Cauê', 'Sato', '5086', '$2y$10$6SOBl./2SMq6/kRUwyXSkej3nSsrnmkgarTXQTWDoYdXxJ2pdOfTO', 'caue.sato@gmail.com', NULL, 1, '', '', 1, NULL),
(234, 'Trinity', 'Minazuki', '6591', '$2y$10$u9ldfltMgwiUF7B.pW4OH.1PTp/GlM8fNkUscFx34CE9/tkJmaVCi', 'trinity.minazuki@gmail.com', NULL, 1, '', '', 1, NULL),
(235, 'Filipe', 'Macedo', '6623', '$2y$10$WlDxqJiLuFnORfA.icZTBuAWyFHFGsYhvxUfPcScgfguH9lKhwVNu', 'filipe.macedo@gmail.com', NULL, 1, '', '', 1, NULL),
(236, 'Morpheu', 'Peixoto', '8609', '$2y$10$PwPsZiY4SFACGcYsbtOblO/sdktSu3Vlq/YVx31Egx0Jnlpq/GhKi', 'morpheu.peixoto@gmail.com', NULL, 1, '', '', 1, NULL),
(237, 'Caroline', 'Franca', '8020', '$2y$10$hh.OW/4zY6co3S7M9ZOULuimjnjrK/AC7r.uZbka.Zd46n3EbVrNe', 'caroline.franca@gmail.com', NULL, 1, '', '', 1, NULL),
(238, 'Fernando', 'Alves', '9819', '$2y$10$phccdblEYcWdc74fyJZkvOJPBGsd26KGc8dzEhmvIMO3b1CJXQfyG', 'fernando.alves@gmail.com', NULL, 1, '', '', 1, NULL),
(239, 'Cleber', 'Franca', '8269', '$2y$10$NIU5BD.E3axxO9qTws4n0uQMP63i6JJzyIIG4ri89EFE7tk/Y3i2e', 'cleber.franca@gmail.com', NULL, 1, '', '', 1, NULL),
(240, 'Cleber', 'Matos', '5026', '$2y$10$c87FbuYghICI3T2K8CUo1OSGtaDjf.YIDa5L5Utv7gajL50KQMm/q', 'cleber.matos@gmail.com', NULL, 1, '', '', 1, NULL),
(241, 'Dante', 'Peixoto', '8592', '$2y$10$rwX3gPXoOoQvBNeCaGXdl.6eglFGGlC7DH3zo34Du080Prkl7Szl2', 'dante.peixoto@gmail.com', NULL, 1, '', '', 1, NULL),
(242, 'Leonidas', 'Hernandes', '2274', '$2y$10$DrCBGKSLIEei.vCgX.k5.ebow704O09YGaAF4hPF802oNtQIF.vfa', 'leonidas.hernandes@gmail.com', NULL, 1, '', '', 1, NULL),
(243, 'Otavio', 'Alves', '6710', '$2y$10$AdjIoYFSaXB1qF1a6vIesO8GrQsRdRhGFsiBRddOZYPoX.Tdr2Br.', 'otavio.alves@gmail.com', NULL, 1, '', '', 1, NULL),
(244, 'Yoko', 'Valverde', '2271', '$2y$10$KME9ZnH2okX2o9mrsyDaNew1UmbJZ/Uz9Ks93opSCkhKNafQNDpHO', 'yoko.valverde@gmail.com', NULL, 1, '', '', 1, NULL),
(245, 'Alexandra', 'Takahashi', '4791', '$2y$10$lCP8n1t47ZCWwn9nL/tR0uI5X6we3TO8fHvNy7VEnNPYqJb.kf88u', 'alexandra.takahashi@gmail.com', NULL, 1, '', '', 1, NULL),
(246, 'Dante', 'Tanaka', '9449', '$2y$10$v2ok5l0iNcBlFz60tAmWYORdfEE4Wh/HFaKJOXIemNuTUtkVs30Ua', 'dante.tanaka@gmail.com', NULL, 1, '', '', 1, NULL),
(247, 'Cleber', 'Valverde', '5698', '$2y$10$B.HJOFdYLUXj1b3sRgdLouOBi2/mBCvtxFOuS35Ht41e/62Vu7YFi', 'cleber.valverde@gmail.com', NULL, 1, '', '', 1, NULL),
(248, 'Caroline', 'Takahashi', '3118', '$2y$10$7esXrljQK/akitQyKPuPMOuwfFBtvJfLkG/2uKlyU1/VQy4an6qba', 'caroline.takahashi@gmail.com', NULL, 1, '', '', 1, NULL),
(249, 'Jill', 'Takahashi', '7352', '$2y$10$9BPjgI4xflBr/L1GPPUknOqF2qtNuZU0gIwcextmEsxs61hxfRk6S', 'jill.takahashi@gmail.com', NULL, 1, '', '', 1, NULL),
(250, 'Peterson', 'Alves', '8084', '$2y$10$Ugu.3rd2L0/miXYhA1N0sOBprS3MsdNoLKe.vQPX7yDNfnHcyiRdG', 'peterson.alves@gmail.com', NULL, 1, '', '', 1, NULL),
(251, 'Filipe', 'Tanaka', '5381', '$2y$10$7ScRVHvkyRgLxp.MxBtyPeHgXuQK5B3PJ/N9GtE4G.Aw3q80v.nq2', 'filipe.tanaka@gmail.com', NULL, 1, '', '', 1, NULL),
(252, 'Fernanda', 'Camilo', '8926', '$2y$10$mcn860lM/mA0kXbpTB8dpOHrQeefbm1Nr76bXqLkfufp9JlhYuYWi', 'fernanda.camilo@gmail.com', NULL, 1, '', '', 1, NULL),
(253, 'Odete', 'Carvalho', '1947', '$2y$10$gVylsAqw627I3Eq28uIRcOsbvTbRLh6QrwymIMrlv9ghi47yo0yGa', 'odete.carvalho@gmail.com', NULL, 1, '', '', 1, NULL),
(254, 'Xerxes', 'Costa', '1104', '$2y$10$GjZnON84SQjDIytBfCk6c.kxLcC4NW12.D/dqv25clBxRWAJFPdva', 'xerxes.costa@gmail.com', NULL, 1, '', '', 1, NULL),
(255, 'Cleber', 'Augusto', '8212', '$2y$10$7fnp8JAEoEjl20Vl4LZQ8es1frR8mvbNZnezY9zrqMK5.FUT2lv7y', 'cleber.augusto@gmail.com', NULL, 1, '', '', 1, NULL),
(256, 'Michele', 'Yamada Silva', '2899', '$2y$10$4K6/0K0sUUOvN3CNfGYv0e67NrnZD292j2Ts4ivXD0tL0z2v.drbW', 'michele.yamada silva@gmail.com', NULL, 1, '', '', 1, NULL),
(257, 'Alexandra', 'Vieira', '4459', '$2y$10$AWD4YB2qY6fnb6zMaThkvee/B4yuRyC6sYL8Uzh08BJs1d4oGHDia', 'alexandra.vieira@gmail.com', NULL, 1, '', '', 1, NULL),
(258, 'Camila', 'Alves', '6302', '$2y$10$IdUR6q2tN5DnS9hg1aD1duYXRqKp6ZthIG5U0e6594HdVzG9BaFte', 'camila.alves@gmail.com', NULL, 1, '', '', 1, NULL),
(259, 'Michele', 'Redfield', '6237', '$2y$10$sVR2IGHTDcj5jmxIL8r6iee0gV80zRaFZpSZIco2OO1tVZBTQm4TK', 'michele.redfield@gmail.com', NULL, 1, '', '', 1, NULL),
(260, 'Jonas', 'Batista', '6223', '$2y$10$ANlA1BR9fxA8yMAGHCIVyOjFmqlHF1a/f1uJbirIgawlSC71LxVFa', 'jonas.batista@gmail.com', NULL, 1, '', '', 1, NULL),
(261, 'Fernanda', 'Carvalho', '2963', '$2y$10$sMsyAxfwiI9fChOjJWgrv.7dvJzU09IeAifrMOs9Hr.MGDRrKFI.W', 'fernanda.carvalho@gmail.com', NULL, 1, '', '', 1, NULL),
(262, 'Otavio', 'Sato', '6039', '$2y$10$mSTPrZug89snxrRs96GptOsWNz/S8f62Wigw2ajX3WXR.ijgX0/3K', 'otavio.sato@gmail.com', NULL, 1, '', '', 1, NULL),
(263, 'Rafaela', 'Ishida Silva', '1004', '$2y$10$punuK60nOjDv7cmdISAg8OG7O4fLzftO/JYESXm3Yls47vxEkRKg6', 'rafaela.ishida silva@gmail.com', NULL, 1, '', '', 1, NULL),
(264, 'Kitana', 'Sato', '5283', '$2y$10$7vpHEqr0Fu1UZKZrTq4Pte5jnGFpmODL.beyx/.AJmJpg5dMQozDu', 'kitana.sato@gmail.com', NULL, 1, '', '', 1, NULL),
(265, 'Sheeva', 'Jordão', '5424', '$2y$10$m9Jy2wGfKEuZKXnFFKHsp.nvVARuh5EWbTLUOXMZsedpUgtAG9ib2', 'sheeva.jordao@gmail.com', NULL, 1, '', '', 1, NULL),
(266, 'Cauê', 'da Silva', '1880', '$2y$10$ZJ9TM5Ylfa1Y2fsIiVdo9OPkWoT.lZrQS98EbLzElxME9HIlrSC2q', 'caue.da silva@gmail.com', NULL, 1, '', '', 1, NULL),
(267, 'Michele', 'Franca', '3716', '$2y$10$fuWHJuJJtm4NjRI/vcxkZOulwYbEEgRDpI6z/0rZnPUsXDPuhkYca', 'michele.franca@gmail.com', NULL, 1, '', '', 1, NULL),
(268, 'Irene', 'Takahashi', '3728', '$2y$10$5FTADZU0OeuYSNT2ep9PNuhkSFJGXDjuGwpjMdZKA5rm6Adf5CTQa', 'irene.takahashi@gmail.com', NULL, 1, '', '', 1, NULL),
(269, 'Andreia', 'Gouveia', '1535', '$2y$10$aWdqDc9pWRnzgfvjFUftyejUXN.ZvBQcRQEZNTCO7gmYczr8tuRMm', 'andreia.gouveia@gmail.com', NULL, 1, '', '', 1, NULL),
(270, 'Dante', 'Hernandes', '6032', '$2y$10$b9pqhGJS/JdO/OBiptFHbOoNyPIOn/qp/xw2rkwGHs0lJ4ZevARZW', 'dante.hernandes@gmail.com', NULL, 1, '', '', 1, NULL),
(271, 'Trinity', 'Macedo', '8418', '$2y$10$Dbu2.Vs1RcHmgtl4f/wgJ.icy/P4wAkD.ol2lbZ.bTBribLXMT4Li', 'trinity.macedo@gmail.com', NULL, 1, '', '', 1, NULL),
(272, 'Jade', 'Freire', '6184', '$2y$10$96ok9AeTqtN6vSmfwhCDu.fS0Jnx1FxktLvofcItYV8ekfGCw0plW', 'jade.freire@gmail.com', NULL, 1, '', '', 1, NULL),
(273, 'Caio', 'Pádua', '5265', '$2y$10$Z/AawKsJvlORtVB8koNKqeSAvqvoYkZrjbMo/4M4yxvfAi3fC8Jhe', 'caio.padua@gmail.com', NULL, 1, '', '', 1, NULL),
(274, 'Doulgas', 'Faria', '4367', '$2y$10$vVX1E9FscNQiYYgR7P12Pe3KCvEPfUwCDOWlIEdt7WiBRwq9e74Ii', 'doulgas.faria@gmail.com', NULL, 1, '', '', 1, NULL),
(275, 'Akemi', 'Matos', '3344', '$2y$10$cQhONtdQhVtoNU.worhOKO0jF1zcON3qSJTcfAJJ31uIhOvmY640O', 'akemi.matos@gmail.com', NULL, 1, '', '', 1, NULL),
(276, 'Administrador 1', '', '789', '$2y$10$ipoJP3nyeFOzIACj2tmnVOUE5aAduTA/40tnfrcTWbzCUDoP6sT0G', '', NULL, 1, '', 'Q98Gjo9WQ1KNhVZjrdo9iBdnYmu0ueHAU0BxfdDHfsTi8l3qdvpZzk1sVoyi', 3, NULL);

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
