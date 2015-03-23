-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-Mar-2015 às 01:57
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kalangov2.3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessosatividades`
--

CREATE TABLE IF NOT EXISTS `acessosatividades` (
`id` int(11) NOT NULL,
  `status` int(1) DEFAULT NULL COMMENT '0: Iniciado, 1: Concluído',
  `idAluno` int(11) DEFAULT NULL,
  `idQuestao` int(11) DEFAULT NULL COMMENT 'Indica qual questao o aluno parou',
  `idAtividade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
`id` int(11) NOT NULL,
  `codRegistro` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=277 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `administradores`
--

INSERT INTO `administradores` (`id`, `codRegistro`) VALUES
(276, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
`id` int(11) NOT NULL,
  `matricula` int(11) DEFAULT NULL,
  `sobreMim` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dataNascimento` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dataVencimentoBoleto` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=276 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `matricula`, `sobreMim`, `dataNascimento`, `dataVencimentoBoleto`) VALUES
(25, 0, 'Gosto de brincar, jogar video game e fazer amigos', '39543', '09'),
(26, 0, 'Sou a Rafaela, adoro cinema e o Justin Bieber! Sou fã do One Direction', '39633', '10'),
(27, 0, 'Futebol, video game e internet', '39620', '11'),
(28, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '39291', '05'),
(29, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '39807', '01'),
(30, 0, 'Sou a ChunLi e gosto de brincar de boneca , estudar e fazer novos amigos', '38804', '06'),
(31, 0, 'Olá, sou a Caroline e amo assistir tv, séries e filmes', '38463', '08'),
(32, 0, 'Gosto de brincar, jogar video game e fazer amigos', '39293', '10'),
(33, 0, 'Sou o Cleber e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '39807', '07'),
(34, 0, 'Sou a Irene e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '39723', '05'),
(35, 0, 'Sou o Filipe, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '39223', '05'),
(36, 0, 'Gosto de brincar, jogar video game e fazer amigos', '38679', '09'),
(37, 0, 'Sou a Barbara, adoro cinema e o Justin Bieber! Sou fã do One Direction', '39643', '04'),
(38, 0, 'Futebol, video game e internet', '39239', '03'),
(39, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '39120', '04'),
(40, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '39715', '02'),
(41, 0, 'Sou a Milena e gosto de brincar de boneca , estudar e fazer novos amigos', '39755', '02'),
(42, 0, 'Olá, sou o Cleber e amo assistir tv, séries e filmes', '39077', '10'),
(43, 0, 'Gosto de brincar, jogar video game e fazer amigos', '38819', '09'),
(44, 0, 'Sou a Jonas e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '39742', '10'),
(45, 0, 'Sou o Filipe e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '38506', '11'),
(46, 0, 'Sou o Otavio, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '39559', '05'),
(47, 0, 'Gosto de brincar, jogar video game e fazer amigos', '39306', '01'),
(48, 0, 'Sou o Xerxes, adoro cinema e o Justin Bieber! Sou fã do One Direction', '39749', '06'),
(49, 0, 'Futebol, video game e internet', '38913', '08'),
(50, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '39051', '10'),
(51, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '38408', '07'),
(52, 0, 'Sou o Caio e gosto de brincar de boneca , estudar e fazer novos amigos', '38580', '05'),
(53, 0, 'Olá, sou o Jaime e amo assistir tv, séries e filmes', '38910', '05'),
(54, 0, 'Gosto de brincar, jogar video game e fazer amigos', '39081', '09'),
(55, 0, 'Sou o Peterson e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '39173', '04'),
(56, 0, 'Sou o Simão e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '39446', '03'),
(57, 0, 'Sou a Sonia, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '39315', '04'),
(58, 0, 'Gosto de brincar, jogar video game e fazer amigos', '39770', '02'),
(59, 0, 'Sou o Claudio, adoro cinema e o Justin Bieber! Sou fã do One Direction', '39609', '02'),
(60, 0, 'Futebol, video game e internet', '38533', '10'),
(61, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '38798', '09'),
(62, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '39742', '10'),
(63, 0, 'Sou o Leonidas e gosto de brincar de boneca , estudar e fazer novos amigos', '39769', '11'),
(64, 0, 'Olá, sou o Peterson e amo assistir tv, séries e filmes', '39232', '05'),
(65, 0, 'Gosto de brincar, jogar video game e fazer amigos', '39750', '01'),
(66, 0, 'Sou a Andreia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '39586', '06'),
(67, 0, 'Sou a Caroline e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '38803', '08'),
(68, 0, 'Sou a ChunLi, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '38928', '10'),
(69, 0, 'Gosto de brincar, jogar video game e fazer amigos', '38498', '07'),
(70, 0, 'Sou a Akemi, adoro cinema e o Justin Bieber! Sou fã do One Direction', '39438', '05'),
(71, 0, 'Futebol, video game e internet', '38703', '05'),
(72, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '38588', '09'),
(73, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '38562', '04'),
(74, 0, 'Sou o Otavio e gosto de brincar de boneca , estudar e fazer novos amigos', '38621', '03'),
(75, 0, 'Olá, sou o Xerxes e amo assistir tv, séries e filmes', '38505', '04'),
(76, 0, 'Gosto de brincar, jogar video game e fazer amigos', '38552', '02'),
(77, 0, 'Sou a Milena e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '38790', '02'),
(78, 0, 'Sou o Eric e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '39430', '10'),
(79, 0, 'Sou o Dante, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '39453', '09'),
(80, 0, 'Gosto de brincar, jogar video game e fazer amigos', '39325', '10'),
(81, 0, 'Sou a Daniela, adoro cinema e o Justin Bieber! Sou fã do One Direction', '38674', '11'),
(82, 0, 'Futebol, video game e internet', '38857', '05'),
(83, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '39160', '01'),
(84, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '39223', '06'),
(85, 0, 'Sou o Jaime e gosto de brincar de boneca , estudar e fazer novos amigos', '39290', '08'),
(86, 0, 'Olá, sou o Xerxes e amo assistir tv, séries e filmes', '38878', '10'),
(87, 0, 'Gosto de brincar, jogar video game e fazer amigos', '38932', '07'),
(88, 0, 'Sou a Bruna e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '39753', '05'),
(89, 0, 'Sou a Odete e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '39068', '05'),
(90, 0, 'Sou a Sarah, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '38853', '09'),
(91, 0, 'Gosto de brincar, jogar video game e fazer amigos', '39448', '04'),
(92, 0, 'Sou o Caio, adoro cinema e o Justin Bieber! Sou fã do One Direction', '39260', '03'),
(93, 0, 'Futebol, video game e internet', '38482', '04'),
(94, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '38406', '02'),
(95, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '38980', '02'),
(96, 0, 'Sou a Akemi e gosto de brincar de boneca , estudar e fazer novos amigos', '39725', '10'),
(97, 0, 'Olá, sou a Jill e amo assistir tv, séries e filmes', '38505', '09'),
(98, 0, 'Gosto de brincar, jogar video game e fazer amigos', '38707', '10'),
(99, 0, 'Sou a Sonia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '38453', '11'),
(100, 0, 'Sou o Augusto e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '39462', '05'),
(101, 0, 'Sou a Yoko, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '38509', '01'),
(102, 0, 'Gosto de brincar, jogar video game e fazer amigos', '39575', '06'),
(103, 0, 'Sou o Peterson, adoro cinema e o Justin Bieber! Sou fã do One Direction', '39513', '08'),
(104, 0, 'Futebol, video game e internet', '39198', '10'),
(105, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '38864', '07'),
(106, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '39541', '05'),
(107, 0, 'Sou o Peterson e gosto de brincar de boneca , estudar e fazer novos amigos', '38704', '05'),
(108, 0, 'Olá, sou o Filipe e amo assistir tv, séries e filmes', '39773', '09'),
(109, 0, 'Gosto de brincar, jogar video game e fazer amigos', '39068', '04'),
(110, 0, 'Sou o Cauê e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '39481', '03'),
(111, 0, 'Sou a Jonas e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '39743', '04'),
(112, 0, 'Sou a Irene, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '37693', '02'),
(113, 0, 'Gosto de brincar, jogar video game e fazer amigos', '37756', '02'),
(114, 0, 'Sou a Rafaela, adoro cinema e o Justin Bieber! Sou fã do One Direction', '37364', '09'),
(115, 0, 'Futebol, video game e internet', '37580', '10'),
(116, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '38081', '11'),
(117, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '37847', '05'),
(118, 0, 'Sou o ChunLi e gosto de brincar de boneca , estudar e fazer novos amigos', '37991', '01'),
(119, 0, 'Olá, sou o Caroline e amo assistir tv, séries e filmes', '36910', '06'),
(120, 0, 'Gosto de brincar, jogar video game e fazer amigos', '37982', '08'),
(121, 0, 'Sou a Cleber e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '37562', '10'),
(122, 0, 'Sou o Irene e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '37625', '07'),
(123, 0, 'Sou a Filipe, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '38199', '05'),
(124, 0, 'Gosto de brincar, jogar video game e fazer amigos', '37296', '05'),
(125, 0, 'Sou o Barbara, adoro cinema e o Justin Bieber! Sou fã do One Direction', '36887', '09'),
(126, 0, 'Futebol, video game e internet', '36833', '04'),
(127, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '37590', '03'),
(128, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '36483', '04'),
(129, 0, 'Sou a Milena e gosto de brincar de boneca , estudar e fazer novos amigos', '37000', '02'),
(130, 0, 'Olá, sou o Cleber e amo assistir tv, séries e filmes', '37114', '02'),
(131, 0, 'Gosto de brincar, jogar video game e fazer amigos', '36875', '10'),
(132, 0, 'Sou o Jonas e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '37204', '09'),
(133, 0, 'Sou o Filipe e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '37221', '10'),
(134, 0, 'Sou a Otavio, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '37281', '11'),
(135, 0, 'Gosto de brincar, jogar video game e fazer amigos', '37177', '05'),
(136, 0, 'Sou a Xerxes, adoro cinema e o Justin Bieber! Sou fã do One Direction', '38050', '01'),
(137, 0, 'Futebol, video game e internet', '38133', '06'),
(138, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '37310', '08'),
(139, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '37552', '10'),
(140, 0, 'Sou a Caio e gosto de brincar de boneca , estudar e fazer novos amigos', '37786', '07'),
(141, 0, 'Olá, sou a Jaime e amo assistir tv, séries e filmes', '36828', '05'),
(142, 0, 'Gosto de brincar, jogar video game e fazer amigos', '37733', '05'),
(143, 0, 'Sou a Peterson e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '37142', '09'),
(144, 0, 'Sou o Simão e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '37303', '04'),
(145, 0, 'Sou a Sonia, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '38186', '03'),
(146, 0, 'Gosto de brincar, jogar video game e fazer amigos', '37776', '04'),
(147, 0, 'Sou a Claudio, adoro cinema e o Justin Bieber! Sou fã do One Direction', '37224', '02'),
(148, 0, 'Futebol, video game e internet', '37918', '02'),
(149, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '37570', '10'),
(150, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '36560', '09'),
(151, 0, 'Sou a Leonidas e gosto de brincar de boneca , estudar e fazer novos amigos', '37796', '10'),
(152, 0, 'Olá, sou o Peterson e amo assistir tv, séries e filmes', '37426', '11'),
(153, 0, 'Gosto de brincar, jogar video game e fazer amigos', '38105', '05'),
(154, 0, 'Sou a Andreia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '37847', '01'),
(155, 0, 'Sou a Caroline e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '37695', '06'),
(156, 0, 'Sou a ChunLi, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '37571', '08'),
(157, 0, 'Gosto de brincar, jogar video game e fazer amigos', '37136', '10'),
(158, 0, 'Sou a Akemi, adoro cinema e o Justin Bieber! Sou fã do One Direction', '38162', '07'),
(159, 0, 'Futebol, video game e internet', '38165', '05'),
(160, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '37754', '05'),
(161, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '37525', '09'),
(162, 0, 'Sou a Otavio e gosto de brincar de boneca , estudar e fazer novos amigos', '38041', '04'),
(163, 0, 'Olá, sou o Xerxes e amo assistir tv, séries e filmes', '37573', '03'),
(164, 0, 'Gosto de brincar, jogar video game e fazer amigos', '37960', '04'),
(165, 0, 'Sou o Milena e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '36828', '02'),
(166, 0, 'Sou o Eric e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '36856', '02'),
(167, 0, 'Sou o Dante, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '37797', '10'),
(168, 0, 'Gosto de brincar, jogar video game e fazer amigos', '37160', '03'),
(169, 0, 'Sou o Daniela, adoro cinema e o Justin Bieber! Sou fã do One Direction', '37686', '04'),
(170, 0, 'Futebol, video game e internet', '37742', '02'),
(171, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '37221', '02'),
(172, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '37660', '10'),
(173, 0, 'Sou o Jaime e gosto de brincar de boneca , estudar e fazer novos amigos', '38118', '09'),
(174, 0, 'Olá, sou o Xerxes e amo assistir tv, séries e filmes', '37251', '10'),
(175, 0, 'Gosto de brincar, jogar video game e fazer amigos', '37976', '11'),
(176, 0, 'Sou o Bruna e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '36614', '05'),
(177, 0, 'Sou o Odete e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '36622', '01'),
(178, 0, 'Sou a Sarah, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '37047', '06'),
(179, 0, 'Gosto de brincar, jogar video game e fazer amigos', '36509', '08'),
(180, 0, 'Sou a Caio, adoro cinema e o Justin Bieber! Sou fã do One Direction', '36836', '10'),
(181, 0, 'Futebol, video game e internet', '36826', '07'),
(182, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '38114', '05'),
(183, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '37143', '05'),
(184, 0, 'Sou a Akemi e gosto de brincar de boneca , estudar e fazer novos amigos', '37697', '09'),
(185, 0, 'Olá, sou o Jill e amo assistir tv, séries e filmes', '37969', '04'),
(186, 0, 'Gosto de brincar, jogar video game e fazer amigos', '37909', '03'),
(187, 0, 'Sou o Sonia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '37347', '04'),
(188, 0, 'Sou o Augusto e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '37264', '02'),
(189, 0, 'Sou o Yoko, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '37731', '02'),
(190, 0, 'Gosto de brincar, jogar video game e fazer amigos', '37221', '10'),
(191, 0, 'Sou a Peterson, adoro cinema e o Justin Bieber! Sou fã do One Direction', '36929', '09'),
(192, 0, 'Futebol, video game e internet', '38033', '10'),
(193, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '38183', '11'),
(194, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '38005', '05'),
(195, 0, 'Sou a Peterson e gosto de brincar de boneca , estudar e fazer novos amigos', '37686', '01'),
(196, 0, 'Futebol, video game e internet', '29955', '06'),
(197, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '27601', '08'),
(198, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '33586', '10'),
(199, 0, 'Sou o ChunLi e gosto de brincar de boneca , estudar e fazer novos amigos', '27041', '07'),
(200, 0, 'Olá, sou o Caroline e amo assistir tv, séries e filmes', '22204', '05'),
(201, 0, 'Gosto de brincar, jogar video game e fazer amigos', '22271', '05'),
(202, 0, 'Sou o Cleber e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '29661', '09'),
(203, 0, 'Sou a Irene e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '28722', '04'),
(204, 0, 'Sou a Filipe, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '22487', '03'),
(205, 0, 'Gosto de brincar, jogar video game e fazer amigos', '35477', '04'),
(206, 0, 'Sou a Barbara, adoro cinema e o Justin Bieber! Sou fã do One Direction', '21176', '02'),
(207, 0, 'Futebol, video game e internet', '28605', '02'),
(208, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '29777', '10'),
(209, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '32820', '09'),
(210, 0, 'Sou o Milena e gosto de brincar de boneca , estudar e fazer novos amigos', '35759', '10'),
(211, 0, 'Olá, sou o Cleber e amo assistir tv, séries e filmes', '23815', '11'),
(212, 0, 'Gosto de brincar, jogar video game e fazer amigos', '24066', '05'),
(213, 0, 'Sou o Jonas e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '28128', '01'),
(214, 0, 'Sou a Filipe e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '32559', '06'),
(215, 0, 'Sou a Otavio, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '20116', '08'),
(216, 0, 'Gosto de brincar, jogar video game e fazer amigos', '28587', '10'),
(217, 0, 'Sou a Xerxes, adoro cinema e o Justin Bieber! Sou fã do One Direction', '26217', '07'),
(218, 0, 'Futebol, video game e internet', '27731', '05'),
(219, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '22025', '05'),
(220, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '35142', '09'),
(221, 0, 'Sou o Caio e gosto de brincar de boneca , estudar e fazer novos amigos', '24437', '04'),
(222, 0, 'Olá, sou o Jaime e amo assistir tv, séries e filmes', '32740', '03'),
(223, 0, 'Gosto de brincar, jogar video game e fazer amigos', '35784', '04'),
(224, 0, 'Sou a Peterson e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '35474', '02'),
(225, 0, 'Sou a Simão e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '30717', '02'),
(226, 0, 'Sou o Sonia, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '27857', '10'),
(227, 0, 'Gosto de brincar, jogar video game e fazer amigos', '33619', '09'),
(228, 0, 'Sou o Claudio, adoro cinema e o Justin Bieber! Sou fã do One Direction', '28893', '10'),
(229, 0, 'Futebol, video game e internet', '30293', '11'),
(230, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '35290', '05'),
(231, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '33802', '01'),
(232, 0, 'Sou a Leonidas e gosto de brincar de boneca , estudar e fazer novos amigos', '27661', '06'),
(233, 0, 'Olá, sou o Peterson e amo assistir tv, séries e filmes', '25268', '08'),
(234, 0, 'Gosto de brincar, jogar video game e fazer amigos', '32128', '10'),
(235, 0, 'Sou o Andreia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '20046', '07'),
(236, 0, 'Sou o Caroline e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '35631', '05'),
(237, 0, 'Sou a ChunLi, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '29717', '05'),
(238, 0, 'Gosto de brincar, jogar video game e fazer amigos', '22872', '09'),
(239, 0, 'Sou o Akemi, adoro cinema e o Justin Bieber! Sou fã do One Direction', '26191', '04'),
(240, 0, 'Futebol, video game e internet', '22988', '03'),
(241, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '34415', '04'),
(242, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '20920', '02'),
(243, 0, 'Sou o Otavio e gosto de brincar de boneca , estudar e fazer novos amigos', '23499', '02'),
(244, 0, 'Olá, sou a Xerxes e amo assistir tv, séries e filmes', '30633', '09'),
(245, 0, 'Gosto de brincar, jogar video game e fazer amigos', '31969', '10'),
(246, 0, 'Sou o Milena e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '34105', '11'),
(247, 0, 'Sou o Eric e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '34769', '05'),
(248, 0, 'Sou a Dante, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '26664', '01'),
(249, 0, 'Gosto de brincar, jogar video game e fazer amigos', '33033', '06'),
(250, 0, 'Sou o Daniela, adoro cinema e o Justin Bieber! Sou fã do One Direction', '28430', '08'),
(251, 0, 'Futebol, video game e internet', '23378', '10'),
(252, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '26434', '07'),
(253, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '28856', '05'),
(254, 0, 'Sou o Jaime e gosto de brincar de boneca , estudar e fazer novos amigos', '21217', '05'),
(255, 0, 'Olá, sou o Xerxes e amo assistir tv, séries e filmes', '31200', '09'),
(256, 0, 'Gosto de brincar, jogar video game e fazer amigos', '23488', '04'),
(257, 0, 'Sou a Bruna e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '33329', '03'),
(258, 0, 'Sou a Odete e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '30563', '04'),
(259, 0, 'Sou a Sarah, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '22518', '02'),
(260, 0, 'Gosto de brincar, jogar video game e fazer amigos', '21931', '02'),
(261, 0, 'Sou a Caio, adoro cinema e o Justin Bieber! Sou fã do One Direction', '29661', '10'),
(262, 0, 'Futebol, video game e internet', '27622', '09'),
(263, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '26026', '10'),
(264, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '26543', '11'),
(265, 0, 'Sou a Akemi e gosto de brincar de boneca , estudar e fazer novos amigos', '29620', '05'),
(266, 0, 'Olá, sou o Jill e amo assistir tv, séries e filmes', '23542', '01'),
(267, 0, 'Gosto de brincar, jogar video game e fazer amigos', '23188', '06'),
(268, 0, 'Sou a Sonia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '21804', '08'),
(269, 0, 'Sou a Augusto e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '24439', '10'),
(270, 0, 'Sou o Yoko, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '29304', '07'),
(271, 0, 'Gosto de brincar, jogar video game e fazer amigos', '28221', '05'),
(272, 0, 'Sou a Peterson, adoro cinema e o Justin Bieber! Sou fã do One Direction', '32772', '05'),
(273, 0, 'Futebol, video game e internet', '25609', '09'),
(274, 0, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '28056', '04'),
(275, 0, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '27916', '03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades`
--

CREATE TABLE IF NOT EXISTS `atividades` (
`id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` int(1) DEFAULT NULL COMMENT '1: Conteudo de aula, 2: extra',
  `status` int(1) DEFAULT NULL COMMENT '0: inativo, 1:ativo',
  `idAula` int(11) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `idModulo` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `atividades`
--

INSERT INTO `atividades` (`id`, `nome`, `tipo`, `status`, `idAula`, `idCategoria`, `idModulo`, `idUsuario`) VALUES
(1, 'Atividade 1 - ', 1, 1, 1, NULL, NULL, NULL),
(2, 'Atividade 2 - ', 1, 1, 1, NULL, NULL, NULL),
(3, 'Atividade 1 - ', 1, 1, 2, NULL, NULL, NULL),
(4, 'Atividade 2 - ', 1, 1, 2, NULL, NULL, NULL),
(5, 'Atividade 1 - ', 1, 1, 3, NULL, NULL, NULL),
(6, 'Atividade 2 - ', 1, 1, 3, NULL, NULL, NULL),
(7, 'Atividade 1 - ', 1, 1, 4, NULL, NULL, NULL),
(8, 'Atividade 2 - ', 1, 1, 4, NULL, NULL, NULL),
(9, 'Atividade 1 - ', 1, 1, 5, NULL, NULL, NULL),
(10, 'Atividade 2 - ', 1, 1, 5, NULL, NULL, NULL),
(11, 'Atividade 1 - ', 1, 1, 6, NULL, NULL, NULL),
(12, 'Atividade 2 - ', 1, 1, 6, NULL, NULL, NULL),
(13, 'Atividade 1 - ', 1, 1, 7, NULL, NULL, NULL),
(14, 'Atividade 2 - ', 1, 1, 7, NULL, NULL, NULL),
(15, 'Atividade 1 - ', 1, 1, 8, NULL, NULL, NULL),
(16, 'Atividade 2 - ', 1, 1, 8, NULL, NULL, NULL),
(17, 'Atividade 1 - ', 1, 1, 9, NULL, NULL, NULL),
(18, 'Atividade 2 - ', 1, 1, 9, NULL, NULL, NULL),
(19, 'Atividade 1 - ', 1, 1, 10, NULL, NULL, NULL),
(20, 'Atividade 2 - ', 1, 1, 10, NULL, NULL, NULL),
(21, 'Atividade 1 - ', 1, 1, 11, NULL, NULL, NULL),
(22, 'Atividade 2 - ', 1, 1, 11, NULL, NULL, NULL),
(23, 'Atividade 1 - ', 1, 1, 12, NULL, NULL, NULL),
(24, 'Atividade 2 - ', 1, 1, 12, NULL, NULL, NULL),
(25, 'Atividade 1 - ', 1, 1, 13, NULL, NULL, NULL),
(26, 'Atividade 2 - ', 1, 1, 13, NULL, NULL, NULL),
(27, 'Atividade 1 - ', 1, 1, 14, NULL, NULL, NULL),
(28, 'Atividade 2 - ', 1, 1, 14, NULL, NULL, NULL),
(29, 'Atividade 1 - ', 1, 1, 15, NULL, NULL, NULL),
(30, 'Atividade 2 - ', 1, 1, 15, NULL, NULL, NULL),
(31, 'Atividade 1 - ', 1, 1, 16, NULL, NULL, NULL),
(32, 'Atividade 2 - ', 1, 1, 16, NULL, NULL, NULL),
(33, 'Atividade 1 - ', 1, 1, 17, NULL, NULL, NULL),
(34, 'Atividade 2 - ', 1, 1, 17, NULL, NULL, NULL),
(35, 'Atividade 1 - ', 1, 1, 18, NULL, NULL, NULL),
(36, 'Atividade 2 - ', 1, 1, 18, NULL, NULL, NULL),
(37, 'Atividade 1 - ', 1, 1, 19, NULL, NULL, NULL),
(38, 'Atividade 2 - ', 1, 1, 19, NULL, NULL, NULL),
(39, 'Atividade 1 - ', 1, 1, 20, NULL, NULL, NULL),
(40, 'Atividade 2 - ', 1, 1, 20, NULL, NULL, NULL),
(41, 'Atividade 1 - ', 1, 1, 21, NULL, NULL, NULL),
(42, 'Atividade 2 - ', 1, 1, 21, NULL, NULL, NULL),
(43, 'Atividade 1 - ', 1, 1, 22, NULL, NULL, NULL),
(44, 'Atividade 2 - ', 1, 1, 22, NULL, NULL, NULL),
(45, 'Atividade 1 - ', 1, 1, 23, NULL, NULL, NULL),
(46, 'Atividade 2 - ', 1, 1, 23, NULL, NULL, NULL),
(47, 'Atividade 1 - ', 1, 1, 24, NULL, NULL, NULL),
(48, 'Atividade 2 - ', 1, 1, 24, NULL, NULL, NULL),
(49, 'Atividade 1 - ', 1, 1, 25, NULL, NULL, NULL),
(50, 'Atividade 2 - ', 1, 1, 25, NULL, NULL, NULL),
(51, 'Atividade 1 - ', 1, 1, 26, NULL, NULL, NULL),
(52, 'Atividade 2 - ', 1, 1, 26, NULL, NULL, NULL),
(53, 'Atividade 1 - ', 1, 1, 27, NULL, NULL, NULL),
(54, 'Atividade 2 - ', 1, 1, 27, NULL, NULL, NULL),
(55, 'Atividade 1 - ', 1, 1, 28, NULL, NULL, NULL),
(56, 'Atividade 2 - ', 1, 1, 28, NULL, NULL, NULL),
(57, 'Atividade 1 - ', 1, 1, 29, NULL, NULL, NULL),
(58, 'Atividade 2 - ', 1, 1, 29, NULL, NULL, NULL),
(59, 'Atividade 1 - ', 1, 1, 30, NULL, NULL, NULL),
(60, 'Atividade 2 - ', 1, 1, 30, NULL, NULL, NULL),
(61, 'Atividade 1 - ', 1, 1, 31, NULL, NULL, NULL),
(62, 'Atividade 2 - ', 1, 1, 31, NULL, NULL, NULL),
(63, 'Atividade 1 - ', 1, 1, 32, NULL, NULL, NULL),
(64, 'Atividade 2 - ', 1, 1, 32, NULL, NULL, NULL),
(65, 'Atividade 1 - ', 1, 1, 33, NULL, NULL, NULL),
(66, 'Atividade 2 - ', 1, 1, 33, NULL, NULL, NULL),
(67, 'Atividade 1 - ', 1, 1, 34, NULL, NULL, NULL),
(68, 'Atividade 2 - ', 1, 1, 34, NULL, NULL, NULL),
(69, 'Atividade 1 - ', 1, 1, 35, NULL, NULL, NULL),
(70, 'Atividade 2 - ', 1, 1, 35, NULL, NULL, NULL),
(71, 'Atividade 1 - ', 1, 1, 36, NULL, NULL, NULL),
(72, 'Atividade 2 - ', 1, 1, 36, NULL, NULL, NULL),
(73, 'Atividade 1 - ', 1, 1, 37, NULL, NULL, NULL),
(74, 'Atividade 2 - ', 1, 1, 37, NULL, NULL, NULL),
(75, 'Atividade 1 - ', 1, 1, 38, NULL, NULL, NULL),
(76, 'Atividade 2 - ', 1, 1, 38, NULL, NULL, NULL),
(77, 'Atividade 1 - ', 1, 1, 39, NULL, NULL, NULL),
(78, 'Atividade 2 - ', 1, 1, 39, NULL, NULL, NULL),
(79, 'Atividade 1 - ', 1, 1, 40, NULL, NULL, NULL),
(80, 'Atividade 2 - ', 1, 1, 40, NULL, NULL, NULL),
(81, 'Atividade 1 - ', 1, 1, 41, NULL, NULL, NULL),
(82, 'Atividade 2 - ', 1, 1, 41, NULL, NULL, NULL),
(83, 'Atividade 1 - ', 1, 1, 42, NULL, NULL, NULL),
(84, 'Atividade 2 - ', 1, 1, 42, NULL, NULL, NULL),
(85, 'Atividade 1 - ', 1, 1, 43, NULL, NULL, NULL),
(86, 'Atividade 2 - ', 1, 1, 43, NULL, NULL, NULL),
(87, 'Atividade 1 - ', 1, 1, 44, NULL, NULL, NULL),
(88, 'Atividade 2 - ', 1, 1, 44, NULL, NULL, NULL),
(89, 'Atividade 1 - ', 1, 1, 45, NULL, NULL, NULL),
(90, 'Atividade 2 - ', 1, 1, 45, NULL, NULL, NULL),
(91, 'Atividade 1 - ', 1, 1, 46, NULL, NULL, NULL),
(92, 'Atividade 2 - ', 1, 1, 46, NULL, NULL, NULL),
(93, 'Atividade 1 - ', 1, 1, 47, NULL, NULL, NULL),
(94, 'Atividade 2 - ', 1, 1, 47, NULL, NULL, NULL),
(95, 'Atividade 1 - ', 1, 1, 48, NULL, NULL, NULL),
(96, 'Atividade 2 - ', 1, 1, 48, NULL, NULL, NULL),
(97, 'Atividade 1 - ', 1, 1, 49, NULL, NULL, NULL),
(98, 'Atividade 2 - ', 1, 1, 49, NULL, NULL, NULL),
(99, 'Atividade 1 - ', 1, 1, 50, NULL, NULL, NULL),
(100, 'Atividade 2 - ', 1, 1, 50, NULL, NULL, NULL),
(101, 'Atividade 1 - ', 1, 1, 51, NULL, NULL, NULL),
(102, 'Atividade 2 - ', 1, 1, 51, NULL, NULL, NULL),
(103, 'Atividade 1 - ', 1, 1, 52, NULL, NULL, NULL),
(104, 'Atividade 2 - ', 1, 1, 52, NULL, NULL, NULL),
(105, 'Atividade 1 - ', 1, 1, 53, NULL, NULL, NULL),
(106, 'Atividade 2 - ', 1, 1, 53, NULL, NULL, NULL),
(107, 'Atividade 1 - ', 1, 1, 54, NULL, NULL, NULL),
(108, 'Atividade 2 - ', 1, 1, 54, NULL, NULL, NULL),
(109, 'Atividade 1 - ', 1, 1, 55, NULL, NULL, NULL),
(110, 'Atividade 2 - ', 1, 1, 55, NULL, NULL, NULL),
(111, 'Atividade 1 - ', 1, 1, 56, NULL, NULL, NULL),
(112, 'Atividade 2 - ', 1, 1, 56, NULL, NULL, NULL),
(113, 'Atividade 1 - ', 1, 1, 57, NULL, NULL, NULL),
(114, 'Atividade 2 - ', 1, 1, 57, NULL, NULL, NULL),
(115, 'Atividade 1 - ', 1, 1, 58, NULL, NULL, NULL),
(116, 'Atividade 2 - ', 1, 1, 58, NULL, NULL, NULL),
(117, 'Atividade 1 - ', 1, 1, 59, NULL, NULL, NULL),
(118, 'Atividade 2 - ', 1, 1, 59, NULL, NULL, NULL),
(119, 'Atividade 2 - ', 1, 1, 60, NULL, NULL, NULL),
(120, 'Atividade 2 - ', 1, 1, 60, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aulas`
--

CREATE TABLE IF NOT EXISTS `aulas` (
`id` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idModulo` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `aulas`
--

INSERT INTO `aulas` (`id`, `titulo`, `idModulo`) VALUES
(1, 'Aula 1', 1),
(2, 'Aula 2', 1),
(3, 'Aula 3', 1),
(4, 'Aula 4', 1),
(5, 'Aula 5', 1),
(6, 'Aula 1', 2),
(7, 'Aula 2', 2),
(8, 'Aula 3', 2),
(9, 'Aula 4', 2),
(10, 'Aula 5', 2),
(11, 'Aula 1', 3),
(12, 'Aula 2', 3),
(13, 'Aula 3', 3),
(14, 'Aula 4', 3),
(15, 'Aula 5', 3),
(16, 'Aula 1', 4),
(17, 'Aula 2', 4),
(18, 'Aula 3', 4),
(19, 'Aula 4', 4),
(20, 'Aula 5', 4),
(21, 'Aula 1', 5),
(22, 'Aula 2', 5),
(23, 'Aula 3', 5),
(24, 'Aula 4', 5),
(25, 'Aula 5', 5),
(26, 'Aula 1', 6),
(27, 'Aula 2', 6),
(28, 'Aula 3', 6),
(29, 'Aula 4', 6),
(30, 'Aula 5', 6),
(31, 'Aula 1', 7),
(32, 'Aula 2', 7),
(33, 'Aula 3', 7),
(34, 'Aula 4', 7),
(35, 'Aula 5', 7),
(36, 'Aula 1', 8),
(37, 'Aula 2', 8),
(38, 'Aula 3', 8),
(39, 'Aula 4', 8),
(40, 'Aula 5', 8),
(41, 'Aula 1', 9),
(42, 'Aula 2', 9),
(43, 'Aula 3', 9),
(44, 'Aula 4', 9),
(45, 'Aula 5', 9),
(46, 'Aula 1', 10),
(47, 'Aula 2', 10),
(48, 'Aula 3', 10),
(49, 'Aula 4', 10),
(50, 'Aula 5', 10),
(51, 'Aula 1', 11),
(52, 'Aula 2', 11),
(53, 'Aula 3', 11),
(54, 'Aula 4', 11),
(55, 'Aula 5', 11),
(56, 'Aula 1', 12),
(57, 'Aula 2', 12),
(58, 'Aula 3', 12),
(59, 'Aula 4', 12),
(60, 'Aula 5', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `avisos`
--

CREATE TABLE IF NOT EXISTS `avisos` (
`id` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urlImagem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dataExpiracao` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idCurso` int(11) DEFAULT NULL
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
`id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
`id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idIdioma` int(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`, `idIdioma`) VALUES
(1, 'Kids', 1),
(2, 'Teens', 1),
(3, 'Adult', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `idiomas`
--

CREATE TABLE IF NOT EXISTS `idiomas` (
`id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `idiomas`
--

INSERT INTO `idiomas` (`id`, `nome`) VALUES
(1, 'Inglês'),
(2, 'Espanhol'),
(3, 'Francês'),
(4, 'Alemão'),
(5, 'Mandarim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materialapoio`
--

CREATE TABLE IF NOT EXISTS `materialapoio` (
`id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idAula` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE IF NOT EXISTS `mensagens` (
`id` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conteudo` varchar(1500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lida` int(1) DEFAULT NULL,
  `data` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idUsuarioOrigem` int(11) DEFAULT NULL,
  `idUsuarioDestino` int(11) DEFAULT NULL,
  `idRE` int(11) DEFAULT NULL COMMENT 'Indica o id da mensagem em resposta, caso exista'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `modulos`
--

CREATE TABLE IF NOT EXISTS `modulos` (
`id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idCurso` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `modulos`
--

INSERT INTO `modulos` (`id`, `nome`, `idCurso`) VALUES
(1, 'Módulo 1', 1),
(2, 'Módulo 2', 1),
(3, 'Módulo 3', 1),
(4, 'Módulo 4', 1),
(5, 'Módulo 1', 2),
(6, 'Módulo 2', 2),
(7, 'Módulo 3', 2),
(8, 'Módulo 4', 2),
(9, 'Módulo 1', 3),
(10, 'Módulo 2', 3),
(11, 'Módulo 3', 3),
(12, 'Módulo 4', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reminders`
--

CREATE TABLE IF NOT EXISTS `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE IF NOT EXISTS `professores` (
`id` int(11) NOT NULL,
  `codRegistro` int(11) DEFAULT NULL,
  `sobreMim` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `formacaoAcademica` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`id`, `codRegistro`, `sobreMim`, `formacaoAcademica`) VALUES
(1, 0, '', ''),
(2, 0, '', ''),
(3, 0, '', ''),
(4, 0, '', ''),
(5, 0, '', ''),
(6, 0, '', ''),
(7, 0, '', ''),
(8, 0, '', ''),
(9, 0, '', ''),
(10, 0, '', ''),
(11, 0, '', ''),
(12, 0, '', ''),
(13, 0, '', ''),
(14, 0, '', ''),
(15, 0, '', ''),
(16, 0, '', ''),
(17, 0, '', ''),
(18, 0, '', ''),
(19, 0, '', ''),
(20, 0, '', ''),
(21, 0, '', ''),
(22, 0, '', ''),
(23, 0, '', ''),
(24, 0, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `propagandas`
--

CREATE TABLE IF NOT EXISTS `propagandas` (
`id` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE IF NOT EXISTS `questoes` (
`id` int(11) NOT NULL,
  `textoPergunta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urlMidia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` int(10) DEFAULT NULL COMMENT 'indica a posicao/ordem da questao dentro de uma atividade',
  `tipo` int(1) DEFAULT NULL COMMENT '1-Multipla Escolha, 2-Dissertativa',
  `categoria` int(2) DEFAULT NULL COMMENT '1:texto, 2:imagem, 3:audio - Mult.Esc:2 digitos (pergunta/resposta: 12 = texto/imagem)',
  `alternativaA` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alternativaB` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alternativaC` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alternativaD` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `respostaCerta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pontos` int(10) DEFAULT NULL,
  `idAtividade` int(11) DEFAULT NULL,
  `idTopico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE IF NOT EXISTS `respostas` (
`id` int(11) NOT NULL,
  `respostaAluno` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correcao` int(1) DEFAULT NULL COMMENT '0: errou, 1: acertou',
  `idAluno` int(11) DEFAULT NULL,
  `idQuestao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `topicos`
--

CREATE TABLE IF NOT EXISTS `topicos` (
`id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE IF NOT EXISTS `turmas` (
`id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(1) DEFAULT NULL COMMENT '0:Turma fechada/modulo concluido  1: Turma ativa/Alunos com aula',
  `idModulo` int(11) DEFAULT NULL,
  `idProfessor` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `nome`, `status`, `idModulo`, `idProfessor`) VALUES
(1, 'ING-K101', 1, 1, 1),
(2, 'ING-K102', 1, 1, 1),
(3, 'ING-K103', 1, 1, 2),
(4, 'ING-K104', 1, 1, 2),
(5, 'ING-K105', 1, 1, 3),
(6, 'ING-K201', 1, 2, 3),
(7, 'ING-K202', 1, 2, 4),
(8, 'ING-K203', 1, 2, 4),
(9, 'ING-K204', 1, 2, 5),
(10, 'ING-K205', 1, 2, 5),
(11, 'ING-K301', 1, 3, 6),
(12, 'ING-K302', 1, 3, 6),
(13, 'ING-K303', 1, 3, 7),
(14, 'ING-K304', 1, 3, 7),
(15, 'ING-K305', 1, 3, 8),
(16, 'ING-K401', 1, 4, 8),
(17, 'ING-K402', 1, 4, 9),
(18, 'ING-K403', 1, 4, 9),
(19, 'ING-K404', 1, 4, 10),
(20, 'ING-K405', 1, 4, 10),
(21, 'ING-T101', 1, 5, 11),
(22, 'ING-T102', 1, 5, 11),
(23, 'ING-T103', 1, 5, 12),
(24, 'ING-T104', 1, 5, 12),
(25, 'ING-T105', 1, 5, 13),
(26, 'ING-T201', 1, 6, 13),
(27, 'ING-T202', 1, 6, 14),
(28, 'ING-T203', 1, 6, 14),
(29, 'ING-T204', 1, 6, 15),
(30, 'ING-T205', 1, 6, 15),
(31, 'ING-T301', 1, 7, 16),
(32, 'ING-T302', 1, 7, 16),
(33, 'ING-T303', 1, 7, 17),
(34, 'ING-T304', 1, 7, 17),
(35, 'ING-T305', 1, 7, 18),
(36, 'ING-T401', 1, 8, 18),
(37, 'ING-T402', 1, 8, 19),
(38, 'ING-T403', 1, 8, 19),
(39, 'ING-T404', 1, 8, 20),
(40, 'ING-T405', 1, 8, 20),
(41, 'ING-A101', 1, 9, 21),
(42, 'ING-A102', 1, 9, 21),
(43, 'ING-A103', 1, 9, 22),
(44, 'ING-A104', 1, 9, 22),
(45, 'ING-A105', 1, 9, 23),
(46, 'ING-A201', 1, 10, 23),
(47, 'ING-A202', 1, 10, 24),
(48, 'ING-A203', 1, 10, 24),
(49, 'ING-A204', 1, 10, 1),
(50, 'ING-A205', 1, 10, 1),
(51, 'ING-A301', 1, 11, 2),
(52, 'ING-A302', 1, 11, 2),
(53, 'ING-A303', 1, 11, 3),
(54, 'ING-A304', 1, 11, 3),
(55, 'ING-A305', 1, 11, 4),
(56, 'ING-A401', 1, 12, 4),
(57, 'ING-A402', 1, 12, 5),
(58, 'ING-A403', 1, 12, 5),
(59, 'ING-A404', 1, 12, 6),
(60, 'ING-A405', 1, 12, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmasalunos`
--

CREATE TABLE IF NOT EXISTS `turmasalunos` (
`id` int(11) NOT NULL,
  `pontuacao` int(10) DEFAULT NULL,
  `idTurma` int(11) DEFAULT NULL,
  `idAluno` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=252 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `turmasalunos`
--

INSERT INTO `turmasalunos` (`id`, `pontuacao`, `idTurma`, `idAluno`) VALUES
(1, NULL, 1, 25),
(2, NULL, 1, 26),
(3, NULL, 1, 27),
(4, NULL, 1, 28),
(5, NULL, 1, 29),
(6, NULL, 1, 30),
(7, NULL, 2, 31),
(8, NULL, 2, 32),
(9, NULL, 2, 33),
(10, NULL, 2, 34),
(11, NULL, 2, 35),
(12, NULL, 2, 36),
(13, NULL, 3, 37),
(14, NULL, 3, 38),
(15, NULL, 3, 39),
(16, NULL, 3, 40),
(17, NULL, 3, 41),
(18, NULL, 3, 42),
(19, NULL, 4, 43),
(20, NULL, 4, 44),
(21, NULL, 4, 45),
(22, NULL, 4, 46),
(23, NULL, 4, 47),
(24, NULL, 5, 48),
(25, NULL, 5, 49),
(26, NULL, 5, 50),
(27, NULL, 5, 51),
(28, NULL, 6, 52),
(29, NULL, 6, 53),
(30, NULL, 6, 54),
(31, NULL, 6, 55),
(32, NULL, 7, 56),
(33, NULL, 7, 57),
(34, NULL, 7, 58),
(35, NULL, 7, 59),
(36, NULL, 8, 60),
(37, NULL, 8, 61),
(38, NULL, 8, 62),
(39, NULL, 8, 63),
(40, NULL, 9, 64),
(41, NULL, 9, 65),
(42, NULL, 9, 66),
(43, NULL, 9, 67),
(44, NULL, 10, 68),
(45, NULL, 10, 69),
(46, NULL, 10, 70),
(47, NULL, 10, 71),
(48, NULL, 11, 72),
(49, NULL, 11, 73),
(50, NULL, 11, 74),
(51, NULL, 11, 75),
(52, NULL, 12, 76),
(53, NULL, 12, 77),
(54, NULL, 12, 78),
(55, NULL, 12, 79),
(56, NULL, 13, 80),
(57, NULL, 13, 81),
(58, NULL, 13, 82),
(59, NULL, 13, 83),
(60, NULL, 14, 84),
(61, NULL, 14, 85),
(62, NULL, 14, 86),
(63, NULL, 14, 87),
(64, NULL, 15, 88),
(65, NULL, 15, 89),
(66, NULL, 15, 90),
(67, NULL, 15, 91),
(68, NULL, 16, 92),
(69, NULL, 16, 93),
(70, NULL, 16, 94),
(71, NULL, 16, 95),
(72, NULL, 17, 96),
(73, NULL, 17, 97),
(74, NULL, 17, 98),
(75, NULL, 17, 99),
(76, NULL, 18, 100),
(77, NULL, 18, 101),
(78, NULL, 18, 102),
(79, NULL, 18, 103),
(80, NULL, 19, 104),
(81, NULL, 19, 105),
(82, NULL, 19, 106),
(83, NULL, 19, 107),
(84, NULL, 20, 108),
(85, NULL, 20, 109),
(86, NULL, 20, 110),
(87, NULL, 20, 111),
(88, NULL, 21, 112),
(89, NULL, 21, 113),
(90, NULL, 21, 114),
(91, NULL, 21, 115),
(92, NULL, 22, 116),
(93, NULL, 22, 117),
(94, NULL, 22, 118),
(95, NULL, 22, 119),
(96, NULL, 23, 120),
(97, NULL, 23, 121),
(98, NULL, 23, 122),
(99, NULL, 23, 123),
(100, NULL, 24, 124),
(101, NULL, 24, 125),
(102, NULL, 24, 126),
(103, NULL, 24, 127),
(104, NULL, 25, 128),
(105, NULL, 25, 129),
(106, NULL, 25, 130),
(107, NULL, 25, 131),
(108, NULL, 26, 132),
(109, NULL, 26, 133),
(110, NULL, 26, 134),
(111, NULL, 26, 135),
(112, NULL, 27, 136),
(113, NULL, 27, 137),
(114, NULL, 27, 138),
(115, NULL, 27, 139),
(116, NULL, 28, 140),
(117, NULL, 28, 141),
(118, NULL, 28, 142),
(119, NULL, 28, 143),
(120, NULL, 29, 144),
(121, NULL, 29, 145),
(122, NULL, 29, 146),
(123, NULL, 29, 147),
(124, NULL, 30, 148),
(125, NULL, 30, 149),
(126, NULL, 30, 150),
(127, NULL, 30, 151),
(128, NULL, 31, 152),
(129, NULL, 31, 153),
(130, NULL, 31, 154),
(131, NULL, 31, 155),
(132, NULL, 32, 156),
(133, NULL, 32, 157),
(134, NULL, 32, 158),
(135, NULL, 32, 159),
(136, NULL, 32, 160),
(137, NULL, 33, 161),
(138, NULL, 33, 162),
(139, NULL, 33, 163),
(140, NULL, 33, 164),
(141, NULL, 33, 165),
(142, NULL, 33, 166),
(143, NULL, 33, 167),
(144, NULL, 34, 168),
(145, NULL, 34, 169),
(146, NULL, 34, 170),
(147, NULL, 34, 171),
(148, NULL, 35, 172),
(149, NULL, 35, 173),
(150, NULL, 35, 174),
(151, NULL, 35, 175),
(152, NULL, 36, 176),
(153, NULL, 36, 177),
(154, NULL, 36, 178),
(155, NULL, 36, 179),
(156, NULL, 37, 180),
(157, NULL, 37, 181),
(158, NULL, 37, 182),
(159, NULL, 38, 183),
(160, NULL, 38, 184),
(161, NULL, 38, 185),
(162, NULL, 38, 186),
(163, NULL, 39, 187),
(164, NULL, 39, 188),
(165, NULL, 39, 189),
(166, NULL, 39, 190),
(167, NULL, 40, 191),
(168, NULL, 40, 192),
(169, NULL, 40, 193),
(170, NULL, 40, 194),
(171, NULL, 40, 195),
(172, NULL, 41, 196),
(173, NULL, 41, 197),
(174, NULL, 41, 198),
(175, NULL, 41, 199),
(176, NULL, 42, 200),
(177, NULL, 42, 201),
(178, NULL, 42, 202),
(179, NULL, 42, 203),
(180, NULL, 43, 204),
(181, NULL, 43, 205),
(182, NULL, 43, 206),
(183, NULL, 43, 207),
(184, NULL, 44, 208),
(185, NULL, 44, 209),
(186, NULL, 44, 210),
(187, NULL, 44, 211),
(188, NULL, 45, 212),
(189, NULL, 45, 213),
(190, NULL, 45, 214),
(191, NULL, 45, 215),
(192, NULL, 46, 216),
(193, NULL, 46, 217),
(194, NULL, 46, 218),
(195, NULL, 46, 219),
(196, NULL, 47, 220),
(197, NULL, 47, 221),
(198, NULL, 47, 222),
(199, NULL, 47, 223),
(200, NULL, 48, 224),
(201, NULL, 48, 225),
(202, NULL, 48, 226),
(203, NULL, 48, 227),
(204, NULL, 49, 228),
(205, NULL, 49, 229),
(206, NULL, 49, 230),
(207, NULL, 49, 231),
(208, NULL, 50, 232),
(209, NULL, 50, 233),
(210, NULL, 50, 234),
(211, NULL, 50, 235),
(212, NULL, 51, 236),
(213, NULL, 51, 237),
(214, NULL, 51, 238),
(215, NULL, 51, 239),
(216, NULL, 52, 240),
(217, NULL, 52, 241),
(218, NULL, 52, 242),
(219, NULL, 52, 243),
(220, NULL, 53, 244),
(221, NULL, 53, 245),
(222, NULL, 53, 246),
(223, NULL, 53, 247),
(224, NULL, 54, 248),
(225, NULL, 54, 249),
(226, NULL, 54, 250),
(227, NULL, 54, 251),
(228, NULL, 55, 252),
(229, NULL, 55, 253),
(230, NULL, 55, 254),
(231, NULL, 55, 255),
(232, NULL, 56, 256),
(233, NULL, 56, 257),
(234, NULL, 56, 258),
(235, NULL, 56, 259),
(236, NULL, 57, 260),
(237, NULL, 57, 261),
(238, NULL, 57, 262),
(239, NULL, 57, 263),
(240, NULL, 58, 264),
(241, NULL, 58, 265),
(242, NULL, 58, 266),
(243, NULL, 58, 267),
(244, NULL, 59, 268),
(245, NULL, 59, 269),
(246, NULL, 59, 270),
(247, NULL, 59, 271),
(248, NULL, 60, 272),
(249, NULL, 60, 273),
(250, NULL, 60, 274),
(251, NULL, 60, 275);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sobrenome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urlImagem` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirmed` int(1) DEFAULT NULL COMMENT 'Indica se o usuario confirmou o registro atraves do email enviado',
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Codigo enviado por email ao se cadastrar um novo usuario',
  `remember_token` varchar(255) COMMENT 'Funcao "manter conectado"',
  `tipo` int(11) DEFAULT NULL COMMENT '1:Aluno  2:Professor  3:Admin'
) ENGINE=InnoDB AUTO_INCREMENT=277 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `login`, `password`, `email`, `urlImagem`, `confirmed`, `confirmation_code`, `tipo`) VALUES
(1, 'Jéssica', 'Matos', 'jessica.matos@gmail.com', '$2y$10$GSGO1sSNFBWivOaqShg0huumaLYtKfWal4scpfdgs6KXBrKvVhR/W', 'jessica.matos@gmail.com', NULL, 1, NULL, 2),
(2, 'Milena', 'Pádua', 'milena.padua@gmail.com', '$2y$10$.Na4JmuW1CIYyXTw80dmFuuKQXPVVyTxw4qVXcHea0dI.M1B3jzIy', 'milena.padua@gmail.com', NULL, 1, NULL, 2),
(3, 'Sheeva', 'Batista', 'sheeva.batista@gmail.com', '$2y$10$VdnpkAz8ykHEMoDyDjwS4er1dUjcz6sRGWvkhQyO75SfqffuT/do6', 'sheeva.batista@gmail.com', NULL, 1, NULL, 2),
(4, 'Michele', 'Carvalho', 'michele.carvalho@gmail.com', '$2y$10$eESOYCKhBePAlrgQM.98ZeMTboxajHj2t0UhtZnKAGXNYkICsF9G.', 'michele.carvalho@gmail.com', NULL, 1, NULL, 2),
(5, 'Lara', 'da Silva', 'lara.da silva@gmail.com', '$2y$10$I3eWLn2Qz0vRZluWS6U9ROVBMtuVktCwDJeGWOD58wzNpNsJ1aLCC', 'lara.da silva@gmail.com', NULL, 1, NULL, 2),
(6, 'ChunLi', 'Valverde', 'chunli.valverde@gmail.com', '$2y$10$Se8gGne7qxrUx/BOduLFT.VOnA0gmURM/bayBbYf9/Z2WBsT6fLVa', 'chunli.valverde@gmail.com', NULL, 1, NULL, 2),
(7, 'Otavio', 'Gouveia', 'otavio.gouveia@gmail.com', '$2y$10$.m47i3OX0k5jXvxm5wR/JulEdvLKu4JSY7/1BFLJfcYZbEEM/XWrm', 'otavio.gouveia@gmail.com', NULL, 1, NULL, 2),
(8, 'Dante', 'Peixoto', 'dante.peixoto@gmail.com', '$2y$10$cDB2hXT777Cj5KJbinp7NOfsuwy1V374bkVkw7trzktC0zXPv2nRq', 'dante.peixoto@gmail.com', NULL, 1, NULL, 2),
(9, 'Doulgas', 'Takahashi', 'doulgas.takahashi@gmail.com', '$2y$10$2tnuo0zFnofbb8.PI96ko.p0bDYzgo7vlTIQ5PL/GV8bbGtyS6IT6', 'doulgas.takahashi@gmail.com', NULL, 1, NULL, 2),
(10, 'Jonas', 'Franca', 'jonas.franca@gmail.com', '$2y$10$Z1UE.Awr8UNyptnBp0sEkOPhr.jzEBHq6Su9BVx9LibigQ9X.NpY2', 'jonas.franca@gmail.com', NULL, 1, NULL, 2),
(11, 'Daniela', 'Leal', 'daniela.leal@gmail.com', '$2y$10$O333SMfQPBNbNLjKJpyaAOoEFBneJCaSd5hVh6oPAHAfktplGwWz2', 'daniela.leal@gmail.com', NULL, 1, NULL, 2),
(12, 'Aline', 'Hernandes', 'aline.hernandes@gmail.com', '$2y$10$CVwMKRaASTEtBuiDLbQapOUZYAOVQWPzI4nau3gPIYaKN7TxXRa1e', 'aline.hernandes@gmail.com', NULL, 1, NULL, 2),
(13, 'Monica', 'Lins', 'monica.lins@gmail.com', '$2y$10$fOjdFwJ1Vnu2T9bd9IajlOMh7vG0GJuu9ZPW8siw/s99MeYQK2IZK', 'monica.lins@gmail.com', NULL, 1, NULL, 2),
(14, 'Leonidas', 'Macedo', 'leonidas.macedo@gmail.com', '$2y$10$wxRnj9IhtwvyiVjIL13y6OiEcM8R3XeVKMf9EHdcKegPc.LlMue4.', 'leonidas.macedo@gmail.com', NULL, 1, NULL, 2),
(15, 'Morpheu', 'Sato', 'morpheu.sato@gmail.com', '$2y$10$A1cFSZSaBibAZLCqXhuvpusKtYa0m8ybwpc0OPJJXfX5rflf.rx5e', 'morpheu.sato@gmail.com', NULL, 1, NULL, 2),
(16, 'Claudio', 'Tanaka', 'claudio.tanaka@gmail.com', '$2y$10$p34asSPVM1uluUFdR1G5xO8ShURmnAsf1/tgi9PAoYm6hlTPGN.k.', 'claudio.tanaka@gmail.com', NULL, 1, NULL, 2),
(17, 'Augusto', 'Yamada', 'augusto.yamada@gmail.com', '$2y$10$qgcHsJp0pvmKuTBVINxOM.kkO7oHA7cg1iI1Jh6zs3XpBM6fKw3VC', 'augusto.yamada@gmail.com', NULL, 1, NULL, 2),
(18, 'Eric', 'Valentine', 'eric.valentine@gmail.com', '$2y$10$yA7Ru0gRAropvz9OohJtPOxv6/sV.yS72ulZPK6ntFgaBKDAlJR22', 'eric.valentine@gmail.com', NULL, 1, NULL, 2),
(19, 'Bruno', 'Villablanca', 'bruno.villablanca@gmail.com', '$2y$10$oSarno80a9yZ0Wa/k.f73equyWWL7XnFaKvI6cMyuwAK6IHD83YIe', 'bruno.villablanca@gmail.com', NULL, 1, NULL, 2),
(20, 'Yori', 'Salgueiro', 'yori.salgueiro@gmail.com', '$2y$10$BfreXYGH/7m.A8mLpMmVW.YShqsZJ0RocVg9mTfsn44EQBbz..pHa', 'yori.salgueiro@gmail.com', NULL, 1, NULL, 2),
(21, 'Angelina', 'Suzuki', 'angelina.suzuki@gmail.com', '$2y$10$stCnJkGytbUJskY1SwGoauhzULqTvh.2pwY/MG9hi5tmWZeS2HSui', 'angelina.suzuki@gmail.com', NULL, 1, NULL, 2),
(22, 'Trinity', 'dos Santos', 'trinity.dos santos@gmail.com', '$2y$10$Why9EoueXTjgJ5HvMCCHe.V97YLgPHZ9t29Ud6UYp.8m0vnNE3rfy', 'trinity.dos santos@gmail.com', NULL, 1, NULL, 2),
(23, 'Akemi', 'Costa', 'akemi.costa@gmail.com', '$2y$10$tF4galceEex7dJ4IGVa2GeGMwDuf40fKuYUeY826y.e0xnha.iJi6', 'akemi.costa@gmail.com', NULL, 1, NULL, 2),
(24, 'Yoko', 'Rocha', 'yoko.rocha@gmail.com', '$2y$10$ygpDA4SJ0SA9OhSa.S8X9uVzjOdzIyXqi5wU0Rp1Qj5SjK9QgGTsq', 'yoko.rocha@gmail.com', NULL, 1, NULL, 2),
(25, 'Eduardo', 'Minazuki', '2544', '$2y$10$IBeq1Gbd3679Mg0mFoPLwuizHq228zQ1o.7hGeiBrf79UdY6VYoOG', 'eduardo.minazuki@gmail.com', NULL, 1, NULL, 1),
(26, 'Rafaela', 'Ishida', '1926', '$2y$10$qibWpeUSNiYoQ08dGw.e/.Ax2P5TZABzFHuxnmXPMsrtr5O7sttq2', 'rafaela.ishida@gmail.com', NULL, 1, NULL, 1),
(27, 'Caio', 'Macedo', '4787', '$2y$10$V8vNDZTJk0rWRpwzT6nuAeYVNBglwQz4bQQFlcReytEhGAaV/DsZO', 'caio.macedo@gmail.com', NULL, 1, NULL, 1),
(28, 'Kitana', 'Peixoto', '4018', '$2y$10$m7YjaCpjP1aglL6bIsDATeDwPD.f4/K864JX.jVp38UUOkv8pvv56', 'kitana.peixoto@gmail.com', NULL, 1, NULL, 1),
(29, 'Morpheu', 'Villablanca', '9275', '$2y$10$WvzmhsgSfIlWRTlzgb12TeE.WU/vm95cap9H7zdgqyMqg5R4Kx9JS', 'morpheu.villablanca@gmail.com', NULL, 1, NULL, 1),
(30, 'Chunli', 'Neves', '5807', '$2y$10$vU.dBp0KhKMobLIt8EMnMu2/jve9NNfSMEJ6c97lHORQ/PS.Nz2Ri', 'chunli.neves@gmail.com', NULL, 1, NULL, 1),
(31, 'Caroline', 'Neves', '8745', '$2y$10$2T9ADrqf2qZGvuoVfPEM.ucccvIsHlYDEbM//c5XdBjZqB0b/4OBG', 'caroline.neves@gmail.com', NULL, 1, NULL, 1),
(32, 'Caroline', 'da Silva', '5030', '$2y$10$IIQH8h26qCMAN5oymForo.lvxAbqNIzUqE7iSB5hn/n.3sdG7k.gC', 'caroline.da silva@gmail.com', NULL, 1, NULL, 1),
(33, 'Cleber', 'Sato', '8129', '$2y$10$JA9iNsW9QUXBTJFQ/8Eem.eckTbz9RWd2Tv.8vmd4Eoo0W97fCVf.', 'cleber.sato@gmail.com', NULL, 1, NULL, 1),
(34, 'Irene', 'Salgueiro', '4507', '$2y$10$VGkBn8hc5TJlSD.S/OZqZe6t4gFfmFvMuSo6kRVie8OCB5eTEhVuq', 'irene.salgueiro@gmail.com', NULL, 1, NULL, 1),
(35, 'Filipe', 'Neto', '7502', '$2y$10$8Kz85EVEMZhPrqrA/HiEPuo/LIt8n1U1Rjtrs4jqbdI7Sjn3D4E52', 'filipe.neto@gmail.com', NULL, 1, NULL, 1),
(36, 'Filipe', 'Nazário', '7508', '$2y$10$aoutrHG6H0q/tMy1DNmezu0hpKBNeSe4BusKu3wIy825UK9.Ky9Oq', 'filipe.nazario@gmail.com', NULL, 1, NULL, 1),
(37, 'Barbara', 'Nazário', '6599', '$2y$10$GNDX9ahX4WwG6FIMdI6oWenArPWM55BqcXac16W9kjxw6LPzYN9ca', 'barbara.nazario@gmail.com', NULL, 1, NULL, 1),
(38, 'Sarah', 'Ishida Silva', '6314', '$2y$10$CRGLIwZRsKFIhUwlB.EoXO6ZXSjR99Q6kaZlhHudreer7hdm5SkT.', 'sarah.ishida silva@gmail.com', NULL, 1, NULL, 1),
(39, 'Akemi', 'Semedo', '2349', '$2y$10$6jeJ6Zm8ZLZJ/E/2F6WEAOfQu5ToVTSOy1xcz6vXbHGM.cu6SsO7.', 'akemi.semedo@gmail.com', NULL, 1, NULL, 1),
(40, 'Milena', 'Nazário', '6821', '$2y$10$IctG7i98sk7GNn5rQlOmHucjJPT/Hl1IJiK3GLSu7EX00oipw5tz6', 'milena.nazario@gmail.com', NULL, 1, NULL, 1),
(41, 'Milena', 'Castanheira', '3001', '$2y$10$aT9sxApM3Wi80wKborAK9efHkYWKJGS9ilzUlj3uAH1alzzfwtKeC', 'milena.castanheira@gmail.com', NULL, 1, NULL, 1),
(42, 'Cleber', 'Freire', '9096', '$2y$10$E0AjwaKqXQfyO40iGzpYkum5DJyzqCCC1fowbo0DwvRrXqOzKpNrC', 'cleber.freire@gmail.com', NULL, 1, NULL, 1),
(43, 'Cleber', 'Leal', '3634', '$2y$10$5kK93RXhOnmr2Fa1YptqYu5sURFb41Fyrzff1XLpJ6sQKrmcK/R4W', 'cleber.leal@gmail.com', NULL, 1, NULL, 1),
(44, 'Jonas', 'Nazário', '7255', '$2y$10$bIOC2H/91G5nOhoXumwuTOLmxTsrBkl890I4Y50XZ.wYmgvPkQWG6', 'jonas.nazario@gmail.com', NULL, 1, NULL, 1),
(45, 'Filipe', 'Monteiro', '7935', '$2y$10$bnjv/ohrNRRrSfv5FRpg5O1XWfoGOSEplnEVrVTZjpZ5zNIxuv/fq', 'filipe.monteiro@gmail.com', NULL, 1, NULL, 1),
(46, 'Otavio', 'dos Santos', '6521', '$2y$10$YpUqlhjanVOsbfWq36wWRu3CU/kl4Wpl6Ke18A/dRAxpZHXNEMNxC', 'otavio.dos santos@gmail.com', NULL, 1, NULL, 1),
(47, 'Jaime', 'Valverde', '8001', '$2y$10$UYvQFrdmB.3UMJ.bkqXlPOI/AEEmLJmHczHkauxrKZQAbsPDpi/NW', 'jaime.valverde@gmail.com', NULL, 1, NULL, 1),
(48, 'Xerxes', 'Rocha', '2734', '$2y$10$zq1ddHpvndBAA3sF2gjGzOk.M3zxoxsBA2EBR19jhPGTH.856T4k6', 'xerxes.rocha@gmail.com', NULL, 1, NULL, 1),
(49, 'Alexandra', 'Pinheiro', '1878', '$2y$10$va7MtPv9zDlUFcFW4RRsrevOdq6Dt1hxDJBhAA7FI2xPEcv5U/mG2', 'alexandra.pinheiro@gmail.com', NULL, 1, NULL, 1),
(50, 'Sarah', 'Carvalho', '5117', '$2y$10$VV9x0QxISR7zkmxkWKyC.uKkXJ1vlq18DXgMoRqOw3Hxr/KR3Fsr6', 'sarah.carvalho@gmail.com', NULL, 1, NULL, 1),
(51, 'Sonia', 'Takahashi', '2985', '$2y$10$z7lHx/q8ATo91XgNuOnMJeLHR.dTQc9nELTeoLyzsUuGI7atNzBCK', 'sonia.takahashi@gmail.com', NULL, 1, NULL, 1),
(52, 'Caio', 'Nazário', '1791', '$2y$10$eLr/Wr.1ktlrdnFI6xO3C.GVC8QiMQZy48Hx5ysH7frfDExaz5stu', 'caio.nazario@gmail.com', NULL, 1, NULL, 1),
(53, 'Jaime', 'Takahashi', '4089', '$2y$10$0Qe6lmf/9qvp1MKWkONDSuGg8c.pyS4RW5sfDyAyxWVTf1mhRRJu2', 'jaime.takahashi@gmail.com', NULL, 1, NULL, 1),
(54, 'Akemi', 'Takahashi', '5490', '$2y$10$TaoasqBzjDK7krs8YdKO/OSKAH7u9DuF0QoiD3EO/5dtqSOEfD80W', 'akemi.takahashi@gmail.com', NULL, 1, NULL, 1),
(55, 'Peterson', 'Torres', '3641', '$2y$10$wOQHHX.aUkZo7v8vsLi08OEpziS.IdAVFXLtQIR0gmyL8Urms4THW', 'peterson.torres@gmail.com', NULL, 1, NULL, 1),
(56, 'Simão', 'Alves', '5460', '$2y$10$Z66l.zAdcNzAXX57lVT/XOiRzMMiI55cFLMD8tOBqyOgRGQthteCu', 'simao.alves@gmail.com', NULL, 1, NULL, 1),
(57, 'Sonia', 'Nazário', '3056', '$2y$10$pnhKx.hF2eP7SdSmnhur3en0JCKuqZAct3s0coLPPxWczEA.tMJ9m', 'sonia.nazario@gmail.com', NULL, 1, NULL, 1),
(58, 'Fernando', 'Hernandes', '8385', '$2y$10$1ADoKSKdO6e5PTfTHlIvnePNeHWFdtbcMA4GO7GWfDoEe6r52aN7G', 'fernando.hernandes@gmail.com', NULL, 1, NULL, 1),
(59, 'Claudio', 'Severo', '1487', '$2y$10$47a/OwWuzO5TEkluGj0k0uBtPxXcnGCANQp45O.v9Y3Ii/Fz5xdM2', 'claudio.severo@gmail.com', NULL, 1, NULL, 1),
(60, 'Milena', 'Matos', '4196', '$2y$10$i2PLaQnGimGnvJzxYkfoeOPzfojnrvR0abM3Mo6pj3k2kKTrP0hBe', 'milena.matos@gmail.com', NULL, 1, NULL, 1),
(61, 'Cauê', 'Carvalho', '7113', '$2y$10$9q2HpHkVG64SCbp3uvILSuEzIdE9kkP.xynVBjdSAldjVuafMyWJi', 'caue.carvalho@gmail.com', NULL, 1, NULL, 1),
(62, 'Simão', 'Freire', '1023', '$2y$10$nF1Uo5Z0weM6pXfQXybXEeJi4JadOl.n7N9v.TzEjLJatnUXjj/Ay', 'simao.freire@gmail.com', NULL, 1, NULL, 1),
(63, 'Leonidas', 'Semedo', '1285', '$2y$10$1GAKV2xXO4j9SpAxoRJzzeai05fYMBgTAfa.eT0wZJfJpWZjiQDy.', 'leonidas.semedo@gmail.com', NULL, 1, NULL, 1),
(64, 'Peterson', 'Neto', '1409', '$2y$10$JgPkviAP5WuDR/kLSWhJi.iq/9zSc9X2rU2j1UQRVTzr1HngnQjtS', 'peterson.neto@gmail.com', NULL, 1, NULL, 1),
(65, 'Fernando', 'Costa', '9516', '$2y$10$C60uC8LBlUaQIm4mCZ53KOuZ16TtEdJcbbk7pj3iJnxkOcBLTxpH.', 'fernando.costa@gmail.com', NULL, 1, NULL, 1),
(66, 'Andreia', 'Jordão', '6692', '$2y$10$Z4UHpFVeL/ORgsAzUv3xjOyaY9whNjYbRIgh/c03FYPW9VkPjheya', 'andreia.jordao@gmail.com', NULL, 1, NULL, 1),
(67, 'Caroline', 'Rocha', '8148', '$2y$10$eFM3HGghRnIxir2WOfQbaePAEiqywJuoHBu2.XvoFRY7aY0toHpSm', 'caroline.rocha@gmail.com', NULL, 1, NULL, 1),
(68, 'Chunli', 'Carvalho', '5932', '$2y$10$vpB5SWhowE90mJ9D1HzIKu/8AcHrEXTcDmGLmih26aljfXj8jXXby', 'chunli.carvalho@gmail.com', NULL, 1, NULL, 1),
(69, 'Eric', 'Ishida Silva', '9277', '$2y$10$Il0Crju5V7gKkwLDObO1NOmzAmv3wf0WdpnfS4xAfn50IevOwe7q6', 'eric.ishida silva@gmail.com', NULL, 1, NULL, 1),
(70, 'Akemi', 'Redfield', '7605', '$2y$10$zi8HZZKUyS782zuZSdgz0OqWO4s07Fw22QAFsOQPuxIqlBBFYLIz6', 'akemi.redfield@gmail.com', NULL, 1, NULL, 1),
(71, 'Rafaela', 'Tanaka', '2312', '$2y$10$khXMVF9UU7FDViuRxWhnvuAMTQbB6CRKgD7M9Kzkl4IFJK/KHFB7S', 'rafaela.tanaka@gmail.com', NULL, 1, NULL, 1),
(72, 'Trinity', 'Neto', '4036', '$2y$10$RltmJRlKsb5Rl9byO8mVrOl0WUBa74rr9Y.AN6msDbfTmrKGq4QNu', 'trinity.neto@gmail.com', NULL, 1, NULL, 1),
(73, 'Jéssica', 'Freire', '4663', '$2y$10$UmgfOksBn/PnEl9i8nJpM.GmuULvn5EEQNRxCsjKY6FABQYIzrX8a', 'jessica.freire@gmail.com', NULL, 1, NULL, 1),
(74, 'Otavio', 'Pádua', '8773', '$2y$10$QNa4WMRYLZ0wtBFNGUZQ6.LKRZz3vRbN/cUxpH3ebpPlRPW1p4HrC', 'otavio.padua@gmail.com', NULL, 1, NULL, 1),
(75, 'Xerxes', 'Matos', '2347', '$2y$10$RWmCD39nG5or6G/alwvyIOZZs44hxy6vBF4ylV7bz44NLA5Uuwoiq', 'xerxes.matos@gmail.com', NULL, 1, NULL, 1),
(76, 'Dante', 'Minazuki', '4867', '$2y$10$ku4Fsv8jNTx87AlwfvNGe.h5uzrOpdVX6J9gzCp88S5mIUoBbspAu', 'dante.minazuki@gmail.com', NULL, 1, NULL, 1),
(77, 'Milena', 'Batista', '3715', '$2y$10$3vbeYCHVghhSTCFjeabgHOwRqxYFxSe3erhyTjCwoFmyySi1IzGsa', 'milena.batista@gmail.com', NULL, 1, NULL, 1),
(78, 'Eric', 'Alves', '9348', '$2y$10$UVzJ7oMe40dcNa1g4UkrLeQzt.R3Ef08wc67EvuvLmQnf.KgMKRbW', 'eric.alves@gmail.com', NULL, 1, NULL, 1),
(79, 'Dante', 'Macedo', '4776', '$2y$10$Bgcnun0bGwkMNDKyRRSCK.RVXNJ/WJSZvqQLIlyISkYhcaQ5oFfr.', 'dante.macedo@gmail.com', NULL, 1, NULL, 1),
(80, 'Jade', 'Villablanca', '1702', '$2y$10$Pqvp0AwxEhyRGd.yX66pQOQfIr3kzAGgzFSogAF4plu3lNRHb55gq', 'jade.villablanca@gmail.com', NULL, 1, NULL, 1),
(81, 'Daniela', 'Monteiro', '2722', '$2y$10$dwCC2psWzguDvwzaSy4Dde0oxwMWY05xJ6VAXtFoXU2jysVm7hKVK', 'daniela.monteiro@gmail.com', NULL, 1, NULL, 1),
(82, 'Morpheu', 'Matos', '1501', '$2y$10$imSJpYmfM.TdO2Uq0CjhOune..UATBsWptvgSGVQckl//aEeQ3wlm', 'morpheu.matos@gmail.com', NULL, 1, NULL, 1),
(83, 'Rafaela', 'Alves', '7815', '$2y$10$qxYUyG0gbv6EZ0RRCNZxwuMSvB/rooLr/29Tyw2Z01/solGSyH1Y2', 'rafaela.alves@gmail.com', NULL, 1, NULL, 1),
(84, 'Fernando', 'Takahashi', '4804', '$2y$10$5.HW1190W8IaWlp0dUGToegsfOuA/6Po/0eV1MmiAHt.VbD6YLkqe', 'fernando.takahashi@gmail.com', NULL, 1, NULL, 1),
(85, 'Jaime', 'Pinheiro', '7148', '$2y$10$TllP0Crljdf4XXRj4MHB9ewXwUKp69u9rxFN.yhob9G2/CcJS58cC', 'jaime.pinheiro@gmail.com', NULL, 1, NULL, 1),
(86, 'Xerxes', 'Torres', '4622', '$2y$10$WJdFB1qpn8xWilhtO2JUB.rz4iSlvq98ia06aSRNsmMt5PIPcYYSK', 'xerxes.torres@gmail.com', NULL, 1, NULL, 1),
(87, 'Camila', 'dos Santos', '1582', '$2y$10$Z4.cx8qMdnyq9ytKTdFToeH8BaoyMDWl9CwsTtIS/YWTw9iWGQPfi', 'camila.dos santos@gmail.com', NULL, 1, NULL, 1),
(88, 'Bruna', 'Faria', '1365', '$2y$10$1yywH38Sdwvmjjsn8nN61.xRkfxgyRBbOdXadv2bZD5sDw/IMbb1K', 'bruna.faria@gmail.com', NULL, 1, NULL, 1),
(89, 'Odete', 'Salgueiro', '7025', '$2y$10$dEsUuQS9WeDxwU944NGHIOTbun4ZmVhRWggW1XQXZ9dloElW8klyS', 'odete.salgueiro@gmail.com', NULL, 1, NULL, 1),
(90, 'Sarah', 'Castanheira', '7617', '$2y$10$CSp7pWla6xkIVzB1pubIMuGe5MiFZ.o4rqJBJvIWYRV0x3j1Jq5tK', 'sarah.castanheira@gmail.com', NULL, 1, NULL, 1),
(91, 'Doulgas', 'Gouveia', '6606', '$2y$10$44sg87OUJly39oSZ7wprpuixxfaE/DVWQaYMMrL3CVEV7kR3EkSwG', 'doulgas.gouveia@gmail.com', NULL, 1, NULL, 1),
(92, 'Caio', 'Costa', '9210', '$2y$10$QMssiSZzsjwIw/p.N8Q.qO3VecDVE3x7u6BDRLeM1p9UK0jmTxKzu', 'caio.costa@gmail.com', NULL, 1, NULL, 1),
(93, 'Xerxes', 'Minazuki', '9643', '$2y$10$3fBihUGS.yfAs88s0dLDk.cwCiQwsyshp6UPgzhbLJkTJOWr5zVsG', 'xerxes.minazuki@gmail.com', NULL, 1, NULL, 1),
(94, 'Jade', 'Lopes', '3809', '$2y$10$hQzrF5NnbHDjCnokQFE9j.vFdq7hQzIkSMBBuGnuGF6YB3Z5xtoPa', 'jade.lopes@gmail.com', NULL, 1, NULL, 1),
(95, 'Dante', 'Camilo', '8586', '$2y$10$pgeVjUycUEMhkZ9g4K9CLOdVbdED1BGesXpIVLXPndw3VFCWh8yJ2', 'dante.camilo@gmail.com', NULL, 1, NULL, 1),
(96, 'Akemi', 'Valentine', '2385', '$2y$10$5RXFP.rouWG1REiKSSsb6OTFjc41s.UPOWpiVaGCV4CcdyO2tvVyi', 'akemi.valentine@gmail.com', NULL, 1, NULL, 1),
(97, 'Jill', 'Castanheira', '7985', '$2y$10$lLZhxrF8ztjKZHKkS0at.uFuDILEAPv6QTdRj5eW2J.G49kKRsmXS', 'jill.castanheira@gmail.com', NULL, 1, NULL, 1),
(98, 'Trinity', 'Redfield', '8730', '$2y$10$fwgL2EDB9CvCRwjfkUbHnuHHsONacTQLekYePp2Z0WZX0puUUV736', 'trinity.redfield@gmail.com', NULL, 1, NULL, 1),
(99, 'Sonia', 'Pádua', '8480', '$2y$10$9i7LJk2vKOxX6Ok6DRY8DuLAgBH4M2LTZ8m1VnyOOxesJCmSOxXGS', 'sonia.padua@gmail.com', NULL, 1, NULL, 1),
(100, 'Augusto', 'Castanheira', '7909', '$2y$10$aKujJu672Vc4p952g.bDaOVfxexmQinOXwaSA.CpJaAD/H2q0Bbcy', 'augusto.castanheira@gmail.com', NULL, 1, NULL, 1),
(101, 'Yoko', 'Alves', '7344', '$2y$10$zHGatsIR3o66.gK7FuBw7Onna9l1WBJOGR14wRFZphWTvZ34l6ThO', 'yoko.alves@gmail.com', NULL, 1, NULL, 1),
(102, 'Michele', 'Macedo', '4368', '$2y$10$QLjeaHu3Q6cRor4BCMqKue39Tvy5Jum1CCzg4ziA2gkEl6K4OZa2W', 'michele.macedo@gmail.com', NULL, 1, NULL, 1),
(103, 'Peterson', 'Costa', '9074', '$2y$10$5yjVVcIJ2WlYM0PwoD97Bum58/wBpD6p6I8a43OhtlO1hENKYMon6', 'peterson.costa@gmail.com', NULL, 1, NULL, 1),
(104, 'Bruno', 'Monteiro', '6180', '$2y$10$bXMeZUO3cwFBFghgde8BGu0qN9aQKUtLC30IvHomBvAWedS7JZHZe', 'bruno.monteiro@gmail.com', NULL, 1, NULL, 1),
(105, 'Jonas', 'Matos', '9653', '$2y$10$YYLJF8hvLM/KSPwF1eGYc.o9dzfEAavimykrgqT5qeDcxfFpDAyDi', 'jonas.matos@gmail.com', NULL, 1, NULL, 1),
(106, 'Jade', 'Franca', '3738', '$2y$10$RyTOw9FC9k1RILMlbehBZeovAfVr/Pc4JkEUxj41WwRsynyzVQITi', 'jade.franca@gmail.com', NULL, 1, NULL, 1),
(107, 'Peterson', 'Redfield', '4685', '$2y$10$5cB3blNOT66I3hI8OADwMuGsG8fnchoMCbjSf5RxyCbx6K5/YBEn2', 'peterson.redfield@gmail.com', NULL, 1, NULL, 1),
(108, 'Filipe', 'Neves', '1458', '$2y$10$hOn2K9EAeqooyKJf5yJoJ.Y4gSS17R16jA9.hHCh2eqFyGc69cAVi', 'filipe.neves@gmail.com', NULL, 1, NULL, 1),
(109, 'Jill', 'dos Santos', '2063', '$2y$10$HKQO.PXPMejBwE.eeJ1FXeadOl3trSR9tAdsS.eTVVNlM10ZUmqPm', 'jill.dos santos@gmail.com', NULL, 1, NULL, 1),
(110, 'Cauê', 'Minazuki', '1316', '$2y$10$bqij8zEz7LHLsENmnktjCeHEHZG44/D0jd7QvUgvXRNL1DZOFXbUC', 'caue.minazuki@gmail.com', NULL, 1, NULL, 1),
(111, 'Jonas', 'Valentine', '6061', '$2y$10$GIcHth7ryW5CpQ.UPlmQT.pJPkCqH.GZr6ZFy1V5WkcC8lWUwNvzK', 'jonas.valentine@gmail.com', NULL, 1, NULL, 1),
(112, 'Irene', 'Camilo', '6295', '$2y$10$wED/kDsoocZMAf0MD.7QjOWH39gMxViwManQSoBLjaVxvoeYtqTnK', 'irene.camilo@gmail.com', NULL, 1, NULL, 1),
(113, 'Doulgas', 'Tanaka', '5337', '$2y$10$Ov2pbXyLhbcHLdOAEHwn8eT8iQzHZVUZADzMqWOs77h17xYT5xHLS', 'doulgas.tanaka@gmail.com', NULL, 1, NULL, 1),
(114, 'Angelina', 'Valentine', '5403', '$2y$10$HDA4NhU6wuzn5t0bsjLlOuBx0PzWaxQYO.x8xLnjML4Gv1N3yti9e', 'angelina.valentine@gmail.com', NULL, 1, NULL, 1),
(115, 'Monica', 'Suzuki', '9171', '$2y$10$sZdeWsc29pnvEdTbQaPWh.S1k4NX/5etfbv0O/rO8HKnblatEn9B2', 'monica.suzuki@gmail.com', NULL, 1, NULL, 1),
(116, 'Peterson', 'Faria', '3523', '$2y$10$POxug9li8lyb74rAvqeAs.Ms1naLfNDic5gKlTM30dpH6hVAsaldu', 'peterson.faria@gmail.com', NULL, 1, NULL, 1),
(117, 'Leonidas', 'Severo', '4723', '$2y$10$ur/cUaR8fLqnkB1q04B77ePHVkfEw75gzgXeEFZpBVNyTGI7VzI7S', 'leonidas.severo@gmail.com', NULL, 1, NULL, 1),
(118, 'Augusto', 'Neto', '8450', '$2y$10$CjAcme3VYOqK0zBKX9OIgezxi/Wo69/lonsJ0b8GIsxh8nQwPGItm', 'augusto.neto@gmail.com', NULL, 1, NULL, 1),
(119, 'Leonidas', 'Nazário', '8261', '$2y$10$47wx8mPDfxWzNF0k7FvTL.fcRRVUoVB8M7tH/NP.LNSpiOAoO8ftq', 'leonidas.nazario@gmail.com', NULL, 1, NULL, 1),
(120, 'Eric', 'Hernandes', '3519', '$2y$10$aIn5Nvix5xkB71Jlnh27Ae85PfRtMijdpSVf7fK/Rmo1v8kczBZ5O', 'eric.hernandes@gmail.com', NULL, 1, NULL, 1),
(121, 'Chunli', 'Nazário', '9654', '$2y$10$y1OX7ongrOaisq5sb5M.Pegbpi9UwaTgMYTMZDBSqJsds/GZUirAi', 'chunli.nazario@gmail.com', NULL, 1, NULL, 1),
(122, 'Doulgas', 'Castanheira', '9473', '$2y$10$QutLLViWaUswQLFJ02KSKe/jXfb.G5lFBGThu.OvQM18OE2Z/Sxhy', 'doulgas.castanheira@gmail.com', NULL, 1, NULL, 1),
(123, 'Jéssica', 'Franca', '2957', '$2y$10$x8fp8BPXeYniTLfLVXRlnOrbR9resd0B3FNE5TcsSW5vW2KQkQDpa', 'jessica.franca@gmail.com', NULL, 1, NULL, 1),
(124, 'Jaime', 'Villablanca', '5694', '$2y$10$gQUQyQQLUG/v4K62o91oqurl59oF6Igfqi2ptZXrbTf/.NrF9.Vz6', 'jaime.villablanca@gmail.com', NULL, 1, NULL, 1),
(125, 'Peterson', 'Minazuki', '3068', '$2y$10$SAUXkHdC5aQr40rDAoEKV.9qHJTqNbJajz6zriGV0eQkvw3DEp0AO', 'peterson.minazuki@gmail.com', NULL, 1, NULL, 1),
(126, 'Cauê', 'Gomes', '8712', '$2y$10$OQY91v.j8eM1Q8I8C8oXp.Up7Y5Ir.1OUQ2t3LcZEKOCkUc3c56KK', 'caue.gomes@gmail.com', NULL, 1, NULL, 1),
(127, 'Leonidas', 'Yamada Silva', '8234', '$2y$10$ASqCfXBjEFManZjyorjY8OkYAJQvl.ZCSyjI3cT5TGcH97AFOyinq', 'leonidas.yamada silva@gmail.com', NULL, 1, NULL, 1),
(128, 'Leonidas', 'Matos', '3977', '$2y$10$.awEqMdrTKvAzhnsqiQTG.3wYDVbE.vK9RnaYPwDSrCPVAwMRUwPG', 'leonidas.matos@gmail.com', NULL, 1, NULL, 1),
(129, 'Michele', 'Valentine', '5317', '$2y$10$znJF6ps/hYZ.VD3Fx22ZP.hMxBGLwWOXR/AWeF5IsUFXLxl55Ub.K', 'michele.valentine@gmail.com', NULL, 1, NULL, 1),
(130, 'Doulgas', 'Sato', '7146', '$2y$10$F/h/oxmfQK2h7Z.g3qLnMuq3/w4Xo4hMNFh8UtreOsGLEqlPt2J22', 'doulgas.sato@gmail.com', NULL, 1, NULL, 1),
(131, 'Doulgas', 'Rocha', '3428', '$2y$10$sxAfFX1mkuLtM2cDm4/U1..uxRdAi/YGciAr5w49gJt5egFxBfdv2', 'doulgas.rocha@gmail.com', NULL, 1, NULL, 1),
(132, 'Dante', 'Lins', '6404', '$2y$10$Y8eqt8qvTJp/lwplMPdq5.Z4B/dAdnh0pe3eZc1dRZD3/kJT/z9Yu', 'dante.lins@gmail.com', NULL, 1, NULL, 1),
(133, 'Cauê', 'Takahashi', '3117', '$2y$10$o5D1s18mxEIMOhrnkooa3.8cSBB7YCrTDyG9Y8Jll8NNln5deyA4y', 'caue.takahashi@gmail.com', NULL, 1, NULL, 1),
(134, 'Michele', 'Rocha', '6798', '$2y$10$HC8LmRuNspZkT8JeNFLSEOEm/bzLB3k8nDXtm82u4thApmJ14X1VK', 'michele.rocha@gmail.com', NULL, 1, NULL, 1),
(135, 'Tamires', 'Matos', '2909', '$2y$10$hM3ux.dPgplc.sdUW2euR.44L.Hv6PycYpywOw.hwZoMu2O281DEG', 'tamires.matos@gmail.com', NULL, 1, NULL, 1),
(136, 'Aline', 'Lins', '4774', '$2y$10$I/mQhWhL7gSrG9Kt1tDZk.y9Kotm0GDKxsBr7fmYkuFw/MIsxeK0y', 'aline.lins@gmail.com', NULL, 1, NULL, 1),
(137, 'Monica', 'Batista', '3786', '$2y$10$iOLURLlD/9NNILxqZvs4XeO7q3G4iJbl9CYgPEepB5dnO2fngEeTm', 'monica.batista@gmail.com', NULL, 1, NULL, 1),
(138, 'Caio', 'Hato', '2209', '$2y$10$e1f.tO131bsZ2uURaMWQvehniGIXvpu0uq4prSQeHfDvNBQmipFma', 'caio.hato@gmail.com', NULL, 1, NULL, 1),
(139, 'Eric', 'Sato', '5768', '$2y$10$l5fC5AoFcvLiIY9stVfVG.dhcfzFXeJAXo/5mMabjPE2pBh315DjG', 'eric.sato@gmail.com', NULL, 1, NULL, 1),
(140, 'Akemi', 'Costa', '1718', '$2y$10$YA00H5xjKa2cunh6V1t7i.Eq/Iv0XszWcLW2/mZe0zLDBaFHRfjkC', 'akemi.costa@gmail.com', NULL, 1, NULL, 1),
(141, 'Milena', 'Neves', '2721', '$2y$10$cbePQ9urmg2.dK1LPkzlnOoCoOPKbB7K5/pNyZgsOhsvRV5PMdA/2', 'milena.neves@gmail.com', NULL, 1, NULL, 1),
(142, 'Bruno', 'Semedo', '8182', '$2y$10$f3BEQJiRRZ2VClzpp1JSDeuAc8EU7PsoZ.sH9BjkZlEuuUQfPxgGW', 'bruno.semedo@gmail.com', NULL, 1, NULL, 1),
(143, 'Odete', 'dos Santos', '3920', '$2y$10$JAcMNYVcppSSGvZtJ0uCX.uA7OHOifCGJS9XLuuPKNMBcOhZxm7Ny', 'odete.dos santos@gmail.com', NULL, 1, NULL, 1),
(144, 'Jaime', 'Nazário', '5097', '$2y$10$PjF/qnvJZrNw.SIRHxmk/uzik6k6xaDGINCTTN2yhFLfgqPoRGMSK', 'jaime.nazario@gmail.com', NULL, 1, NULL, 1),
(145, 'Michele', 'Castanheira', '7016', '$2y$10$MzU7nuhvgO25Mi.PO89NBOMQprXbiyGD3KkCsStuHM8s7GdTbn7ye', 'michele.castanheira@gmail.com', NULL, 1, NULL, 1),
(146, 'Caroline', 'Minazuki', '9003', '$2y$10$iPtThqPMZvnfc0dSVD8LmuSeoQUYnykqlSIGrvT1gFyfg9Do4OBY6', 'caroline.minazuki@gmail.com', NULL, 1, NULL, 1),
(147, 'Sonia', 'Macedo', '5413', '$2y$10$Ea.Hn/27xzo1py0fe2CA9uxcxMxs/lVwAPlHs99ObZlGmHYmlC7QO', 'sonia.macedo@gmail.com', NULL, 1, NULL, 1),
(148, 'Kitana', 'Lins', '6896', '$2y$10$LHdssxn6W6KFImhiDwHHOu8hffcqg7U19WdPvBM20lDj2rlC.xD32', 'kitana.lins@gmail.com', NULL, 1, NULL, 1),
(149, 'Dante', 'Faria', '9640', '$2y$10$RRIhtw6ixSwJwG2zZMGDsuodEt5POd75vC8iFan.X4vUADoLRDJaO', 'dante.faria@gmail.com', NULL, 1, NULL, 1),
(150, 'Claudio', 'Faria', '3020', '$2y$10$egAENa0V.rntWbUG/lp0U.dmrfNM91rxoMNzR.15pBG5/FLRqE8S.', 'claudio.faria@gmail.com', NULL, 1, NULL, 1),
(151, 'Sarah', 'Peixoto', '3321', '$2y$10$2v1C.Ketz9u8GcxWNWKC.OojdmRV1CVrO5A2Dfa2HeC2qa8BQhUc2', 'sarah.peixoto@gmail.com', NULL, 1, NULL, 1),
(152, 'Eduardo', 'Pádua', '6752', '$2y$10$.8ru4rv9UDEe3oEfN1pJSO1jpeI0D7F4S0q.7klzAt4C2LJ5.vs3S', 'eduardo.padua@gmail.com', NULL, 1, NULL, 1),
(153, 'Otavio', 'Franca', '1639', '$2y$10$PzL19GWnErIvN562.iMrf.wMZd7DNh.I/dT1V4LGVNnTXXWNfZ6hW', 'otavio.franca@gmail.com', NULL, 1, NULL, 1),
(154, 'Jill', 'Salgueiro', '6610', '$2y$10$prPbn3wTQYmTnCp5zqerbuxVlZKCZcmgJj4y/41mMnX5095wzcgBC', 'jill.salgueiro@gmail.com', NULL, 1, NULL, 1),
(155, 'Camila', 'Nazário', '9642', '$2y$10$MAZwok.5dskegmXOwCLFSeKYLvRDlX1DUbVSV7v17vLygUge/0T6y', 'camila.nazario@gmail.com', NULL, 1, NULL, 1),
(156, 'Camila', 'Lopes', '1631', '$2y$10$bMttM/AWAcRCNVZV0IGigu3qQwkL34JriHvsUZpS0yQvW5J8ovzdC', 'camila.lopes@gmail.com', NULL, 1, NULL, 1),
(157, 'Lara', 'Nazário', '3116', '$2y$10$gRwalgwwQWKZwbsusdEfUO2S7mVRT1bhX5lLTyZYK7zxAYj0aC03C', 'lara.nazario@gmail.com', NULL, 1, NULL, 1),
(158, 'Andreia', 'Takahashi', '1555', '$2y$10$Bnt/2XlMhdr8V4MgcN2GWuexU6FJpbNLkwV/fAXhs47JIQUOL6.vy', 'andreia.takahashi@gmail.com', NULL, 1, NULL, 1),
(159, 'Yoko', 'Franca', '6337', '$2y$10$z1z4HeIVCMr0lF8f2.BOVel01qObWr/eI4Y3eRbK93LVtES1.TiGy', 'yoko.franca@gmail.com', NULL, 1, NULL, 1),
(160, 'Claudio', 'Nazário', '8110', '$2y$10$ndG5N7mCuogzTxF05n0gc.LEz6tYP9sIEGCZO3hrPPBZzZ7Mcpbou', 'claudio.nazario@gmail.com', NULL, 1, NULL, 1),
(161, 'Barbara', 'Tanaka', '9031', '$2y$10$nIyqKLC.ufISpuvi2RnQ2eDBcn8kA42EBhFKTnqYfsn9AptVLW71.', 'barbara.tanaka@gmail.com', NULL, 1, NULL, 1),
(162, 'Jonas', 'Lopes', '5607', '$2y$10$FGaqJIQP4fL.zvPWPv2YneBK.mpiCOJytwgYcjcpfJMpTwE4nILUC', 'jonas.lopes@gmail.com', NULL, 1, NULL, 1),
(163, 'Fernando', 'Castanheira', '8016', '$2y$10$.m94MnEBN/t9sFop6KNXLe9sn49eGIMBm5BMd5CbZZe.pUMo.c8DW', 'fernando.castanheira@gmail.com', NULL, 1, NULL, 1),
(164, 'Jade', 'Costa', '9836', '$2y$10$DzNSN0rh4F4ZGATkygrBKu1U6QGGoZP30yBSTUtGqBppt3e439Xn.', 'jade.costa@gmail.com', NULL, 1, NULL, 1),
(165, 'Peterson', 'Sato', '4785', '$2y$10$48gYXBHizebn/O4B4Uc1TOU3R8/c9tH.QPPYLyKSNNBRbV8haMplu', 'peterson.sato@gmail.com', NULL, 1, NULL, 1),
(166, 'Dante', 'Lopes', '8571', '$2y$10$rlHWbHRBe5PL4hcH/eNy9ufwCCyEKpO9C7ZEAI9O6ejp.rXm6/GrC', 'dante.lopes@gmail.com', NULL, 1, NULL, 1),
(167, 'Eduardo', 'Freire', '3405', '$2y$10$c.NsgpM9SxtlMm0Vmg/3C.xOTvGXRkJS6nKcYAU1/YsteCA6c0HHm', 'eduardo.freire@gmail.com', NULL, 1, NULL, 1),
(168, 'Odete', 'Lins', '2620', '$2y$10$0ta0RUhxTg/oK/bT8U7hIu.CwxUWeF77k325RsyccWLyV/M1kGVFa', 'odete.lins@gmail.com', NULL, 1, NULL, 1),
(169, 'Simão', 'Franca', '9802', '$2y$10$RDyCfXPJNo1y3ynSuAAbbOfr.PUlxYZAeUVgmr9ol8hqyPL//hNMS', 'simao.franca@gmail.com', NULL, 1, NULL, 1),
(170, 'Yori', 'Yamada Silva', '6767', '$2y$10$KLxnD8LoikRcw44QNDomle1UibhgIjVlVuIoKYLHr1jIis0LlPSMC', 'yori.yamada silva@gmail.com', NULL, 1, NULL, 1),
(171, 'Dante', 'Leal', '9057', '$2y$10$2y963B8DuCcAkR6Is8IHFOQaG24SGdMtbNgG7XwI6JU96ODTXHUcC', 'dante.leal@gmail.com', NULL, 1, NULL, 1),
(172, 'Xerxes', 'Monteiro', '6601', '$2y$10$uq/33OXG/ABgETrCsXxUr.uZtVuZothH6X5ZhZiIHGK58h6qOqIIy', 'xerxes.monteiro@gmail.com', NULL, 1, NULL, 1),
(173, 'Augusto', 'Leal', '7089', '$2y$10$cwD4j4hA6N7Zr73p3acakOdrmxg021Voj/cz5L6zCJcP2tYm9ybyO', 'augusto.leal@gmail.com', NULL, 1, NULL, 1),
(174, 'Simão', 'Pádua', '8707', '$2y$10$OK/v22MG9Lry1RUrYQLuY.hLJCleS4Tn2/rDXJi4oJsnRiakXBSNe', 'simao.padua@gmail.com', NULL, 1, NULL, 1),
(175, 'Cauê', 'dos Santos', '8133', '$2y$10$.4O8tPkeJKIbKZnePb.dKu6x2SZWe49tef6CtAxdOfOlFP22j83zK', 'caue.dos santos@gmail.com', NULL, 1, NULL, 1),
(176, 'Claudio', 'Salgueiro', '1299', '$2y$10$xol.ug0qtpucAVeggYhrMOQ0mV6.7C479RtRX/au46KtppuNt6T3u', 'claudio.salgueiro@gmail.com', NULL, 1, NULL, 1),
(177, 'Bruno', 'Redfield', '2484', '$2y$10$yH31bdMmW2.vYM8rcEJ4A.HaQu2JcaqoIzqTcaLgyyRiQOX.pz8OW', 'bruno.redfield@gmail.com', NULL, 1, NULL, 1),
(178, 'Akemi', 'Hernandes', '2796', '$2y$10$/62pgpSlHuJOpJGTG0fXpuf5l7ioszs2es7whTdrsdcfT0gaMb7Ya', 'akemi.hernandes@gmail.com', NULL, 1, NULL, 1),
(179, 'Rafaela', 'Valentine', '8602', '$2y$10$SA..lfbqa2ASeKgWGcSLD.u4iQhfpD0L0btvVoGyKn6FT8F8SDaOe', 'rafaela.valentine@gmail.com', NULL, 1, NULL, 1),
(180, 'Sheeva', 'Pádua', '8078', '$2y$10$69XrbhUCZcnNFkHLN5lTaOHogoSwfunPqZ3B4XwvLFLroe44d.xLW', 'sheeva.padua@gmail.com', NULL, 1, NULL, 1),
(181, 'Jade', 'Batista', '5012', '$2y$10$dw2BMz7vADH3Wq/dVSRng.dsGEw6x7RyzhKlhScG1r/Y4.2uc3AFa', 'jade.batista@gmail.com', NULL, 1, NULL, 1),
(182, 'Peterson', 'Takahashi', '5062', '$2y$10$3Bij4UcCvUVtA/m5nJCQO.WMg653fy3obkaZ4ipVccHspv.kuSaqi', 'peterson.takahashi@gmail.com', NULL, 1, NULL, 1),
(183, 'Fernanda', 'Yamada Silva', '6325', '$2y$10$9c2UNojm7.7uQ3r4bCaNzu9QIj4h3eGvaIPDe8spfZADEV8xPoDtW', 'fernanda.yamada silva@gmail.com', NULL, 1, NULL, 1),
(184, 'Jill', 'Severo', '2519', '$2y$10$cACkjVzAFYEnw287cgLoR.p9MEGHt5R8gsiAJ24ZdF.Dcy/7/glVy', 'jill.severo@gmail.com', NULL, 1, NULL, 1),
(185, 'Augusto', 'Valentine', '6575', '$2y$10$AJ/rx77ECT4GMdQ7ZmfWUujgVzZz4fu5vOXMAsjlKk1GdeBCC1j3q', 'augusto.valentine@gmail.com', NULL, 1, NULL, 1),
(186, 'Filipe', 'Faria', '4226', '$2y$10$lkJTaZWsbuC7AQo1Gc20zO8s3E5Cd9Mk/4Olyu8e9c5Fsg9U7IHG.', 'filipe.faria@gmail.com', NULL, 1, NULL, 1),
(187, 'Morpheu', 'Faria', '6371', '$2y$10$C/RZNJQV/899pHTcFgSkyei0eZfY0hPOAQvkaiuDgGsh0Z2AuCddK', 'morpheu.faria@gmail.com', NULL, 1, NULL, 1),
(188, 'Cleber', 'Torres', '1142', '$2y$10$k97GXlq4olw2iXyxmOTVUOhLgawA7.PkaZrLwQYbLn4jEy32RRPzu', 'cleber.torres@gmail.com', NULL, 1, NULL, 1),
(189, 'Eduardo', 'Ishida Silva', '1544', '$2y$10$3Tjbm2n3P3rhxeyMbqOUy.nwbQKvUunhFb1PDwQH7Th6XEo8rSqAK', 'eduardo.ishida silva@gmail.com', NULL, 1, NULL, 1),
(190, 'Angelina', 'Suzuki', '4651', '$2y$10$OLVpFv0Lxy9R71J0yDvrkO2MPiLwDvgqy6oiXQPDxDFVtTUZOeiba', 'angelina.suzuki@gmail.com', NULL, 1, NULL, 1),
(191, 'Barbara', 'Rocha', '2968', '$2y$10$lee03.Szbm7ZHYjDB3Oj1OUx40P84/MKpZbR.QnRPW7klK/DJ5ipG', 'barbara.rocha@gmail.com', NULL, 1, NULL, 1),
(192, 'Lara', 'Valentine', '8357', '$2y$10$T96CSWUznp4A1gIuwyP06.f0DWaJkLnJFo/RYhMvePjFImMOX0C2C', 'lara.valentine@gmail.com', NULL, 1, NULL, 1),
(193, 'Bruno', 'Pádua', '6907', '$2y$10$n1ohdSNgu1ObTvVUooxwW.bfRUIP8FdywSUUsL8YiQldWADri04rW', 'bruno.padua@gmail.com', NULL, 1, NULL, 1),
(194, 'Jade', 'Alves', '4331', '$2y$10$peKpGeibnSmUBb8GTyMDpOh7cJxDoMABd.6JVYv3fnMlTpblDBJ3q', 'jade.alves@gmail.com', NULL, 1, NULL, 1),
(195, 'Jonas', 'Faria', '1404', '$2y$10$L37Vnxw2hK4RdYKA/tJIYObi4k5srgs7fHLTKtTQoSHwYSSG5vt/q', 'jonas.faria@gmail.com', NULL, 1, NULL, 1),
(196, 'Fernando', 'Suzuki', '6269', '$2y$10$lLT2DIw262nLrOpRlPwMXedYq8WLYb3rnbwz496H4ZvzQ/XZbI1k.', 'fernando.suzuki@gmail.com', NULL, 1, NULL, 1),
(197, 'Rafaela', 'da Silva', '5591', '$2y$10$Utgwg69jbow/qBg13J6XmuNhkGhOY4OG1OxTYys5LEJDqUh2cg8F2', 'rafaela.da silva@gmail.com', NULL, 1, NULL, 1),
(198, 'Tamires', 'Faria', '4702', '$2y$10$dxan.2BOh.e5dCHiptlloubRwDreYRJrQevabt99Mhk5aM.VUB7r.', 'tamires.faria@gmail.com', NULL, 1, NULL, 1),
(199, 'Eric', 'Castanheira', '3458', '$2y$10$.y2gjlWtOl6x5YAVGiGwjevKdxkU5UDT8AloS682ivcpObwwxJdSK', 'eric.castanheira@gmail.com', NULL, 1, NULL, 1),
(200, 'Dante', 'Takahashi', '6963', '$2y$10$c6Dm6ptQGg.peuZX1GEKCuB3Um7MNRk35DlO5elEu.To6mVkdrYFm', 'dante.takahashi@gmail.com', NULL, 1, NULL, 1),
(201, 'Cleber', 'Peixoto', '5024', '$2y$10$zaVRewYo9RlPUQHHiMh/tuKSTAZ/AivMT0PLO8EJmWSGWPoWPIYLi', 'cleber.peixoto@gmail.com', NULL, 1, NULL, 1),
(202, 'Caio', 'da Silva', '2128', '$2y$10$TPFMgkS3xqvndE/Vl62O1.2fIL78v9uEBGX0aqHe16mpwQPYgyMr.', 'caio.da silva@gmail.com', NULL, 1, NULL, 1),
(203, 'Kitana', 'Camilo', '1246', '$2y$10$534hOsI/0kQSTw/TcRpZou0Lcfvpeakjf5dwgH4Ybu.UxZLIFQWcO', 'kitana.camilo@gmail.com', NULL, 1, NULL, 1),
(204, 'Yoko', 'Lins', '8183', '$2y$10$IYJLmDe.a2Xc6s7fsco4quYPl5rzA2.pKo74OVMkFk2uS4uCnJh6a', 'yoko.lins@gmail.com', NULL, 1, NULL, 1),
(205, 'Alexandra', 'Torres', '6682', '$2y$10$2IK7zBEFfVr77z9iJRFc1.4DbHkbzRwTwnuyfpQSELI65JVcmj6FC', 'alexandra.torres@gmail.com', NULL, 1, NULL, 1),
(206, 'Andreia', 'Monteiro', '8919', '$2y$10$looC5ILkYOiYpICw1fROK.O/YE.g0MU5uXLfkq28jvpNjsK2MJpba', 'andreia.monteiro@gmail.com', NULL, 1, NULL, 1),
(207, 'Jonas', 'da Silva', '8553', '$2y$10$XPHFlWjrP89c/hr6Y4OX1.TQz7x9r0cvIyOvkMbVBaQPBCKXBdMKO', 'jonas.da silva@gmail.com', NULL, 1, NULL, 1),
(208, 'Doulgas', 'Monteiro', '1636', '$2y$10$1PrRe2mkMDtslWKI8T1sfuug8uL.ASMvnduZaxRdtrOOt6uDcBNke', 'doulgas.monteiro@gmail.com', NULL, 1, NULL, 1),
(209, 'Sheeva', 'da Mata', '8900', '$2y$10$A12LpY8NqtjnZ4qD5./lJ.ZmjEhylyRIQw6U8BCSa2u5mm6f7LxJC', 'sheeva.da mata@gmail.com', NULL, 1, NULL, 1),
(210, 'Xerxes', 'Peixoto', '5937', '$2y$10$TuNpJsSBlw1bjTvttQnHuuFhiSrEuZFjaU6wjo7vWbOvc7aiPVSga', 'xerxes.peixoto@gmail.com', NULL, 1, NULL, 1),
(211, 'Filipe', 'Franca', '3814', '$2y$10$PH42lJhSV98CWX0N1jEqSeYM8F0..qJpEkYO4hzLxUvWl2R/kMvDq', 'filipe.franca@gmail.com', NULL, 1, NULL, 1),
(212, 'Aline', 'Neto', '1561', '$2y$10$HdEbR7r.52vg5ihUO3.wT.tl0zKP/2Ajqk9xKHbXAxtbvC03u13pe', 'aline.neto@gmail.com', NULL, 1, NULL, 1),
(213, 'Doulgas', 'Torres', '9245', '$2y$10$3xDPkWEXpfTsyyBn0jmXge5WTXTW30jRU6BdTvZhO9xjvRCCh2ndC', 'doulgas.torres@gmail.com', NULL, 1, NULL, 1),
(214, 'Sarah', 'Valverde', '4139', '$2y$10$w/KEwSYoeOHdSqZP1kuwBeBAFC3cEgatJVx.csig8XEn/8r4MAhNy', 'sarah.valverde@gmail.com', NULL, 1, NULL, 1),
(215, 'Sheeva', 'Macedo', '5042', '$2y$10$JQFKKa5yfI.9CwB.cX6OkuDbZiBhWR8Rzxzvqk6NmMd2V7WObj85m', 'sheeva.macedo@gmail.com', NULL, 1, NULL, 1),
(216, 'Andreia', 'Porta', '2550', '$2y$10$A7gPMrNAxYlzkj35/7GZzeyysoS1UR0R8d20lt.RXRP.ja6loUUxK', 'andreia.porta@gmail.com', NULL, 1, NULL, 1),
(217, 'Chunli', 'Neto', '1121', '$2y$10$3gt4UUxuTvP46VpNvAqYlu0R4QyvWWgz/PBBtfDssFQ1KacOTvVeW', 'chunli.neto@gmail.com', NULL, 1, NULL, 1),
(218, 'Bruno', 'Nazário', '4452', '$2y$10$mvdHCG2DO/8V.8n3K5c...Y7rM6Vs33pxzKzUvRIyAELcODkjNQUW', 'bruno.nazario@gmail.com', NULL, 1, NULL, 1),
(219, 'Otavio', 'Monteiro', '9380', '$2y$10$R8oZ29GnmdGHKgkhSghxhuT1Cik6shABZsBx0qxGKg0QOSZblc1.y', 'otavio.monteiro@gmail.com', NULL, 1, NULL, 1),
(220, 'Jill', 'Batista', '7210', '$2y$10$AiacgZTfv6.VLXzt6oWGvOWo5fJAaAGHHe.oSJ7.pGtp4gL4jWJMe', 'jill.batista@gmail.com', NULL, 1, NULL, 1),
(221, 'Filipe', 'Torres', '5163', '$2y$10$mao54xISOMgfWE8Et7t1Zu15OnIqwmMPZZxLMSGl2QtivU3nvghJy', 'filipe.torres@gmail.com', NULL, 1, NULL, 1),
(222, 'Filipe', 'Ishida Silva', '6095', '$2y$10$73Anbi0gZ5I2XWdMbDUT9exNvWNEiftbeLeukPvAhJir9QNi9uTAi', 'filipe.ishida silva@gmail.com', NULL, 1, NULL, 1),
(223, 'Xerxes', 'Severo', '9767', '$2y$10$MoFuO4fmBMoDGXbhilgHYe9.NJ88/FZG2SzgoxOd/PHO3amXJWU4u', 'xerxes.severo@gmail.com', NULL, 1, NULL, 1),
(224, 'Camila', 'Suzuki', '9138', '$2y$10$d/PEwduB5Su9PLIJZ9AYMeR151pyWi4Uety/h.ydQV5rQcupkJdhK', 'camila.suzuki@gmail.com', NULL, 1, NULL, 1),
(225, 'Fernanda', 'Minazuki', '5181', '$2y$10$T2C8YOrhnle1GDr0IHmZKu2Vl5TNY14HUJpVsLOpAb4P1boKzggui', 'fernanda.minazuki@gmail.com', NULL, 1, NULL, 1),
(226, 'Dante', 'Salgueiro', '5936', '$2y$10$34oI221ugxhngj3nRQ30yOoqlbBw4tgZ2aAdDs289EPsAA63ZDiDG', 'dante.salgueiro@gmail.com', NULL, 1, NULL, 1),
(227, 'Doulgas', 'Lopes', '4582', '$2y$10$wndxpuZNF7oI5P79Bp0QVeYA00PiT5blzIxCzNRDeAFU/C3f5u5iS', 'doulgas.lopes@gmail.com', NULL, 1, NULL, 1),
(228, 'Filipe', 'Carvalho', '9826', '$2y$10$6tyPjAcMJ1LxNZF4GGfA9.tYsDcaJleuYbU4/O6jX9mOG784X07ha', 'filipe.carvalho@gmail.com', NULL, 1, NULL, 1),
(229, 'Augusto', 'Hernandes', '4376', '$2y$10$LKkzuuT8Gnjlw/C8zTzeje7AbclUkuo.06iak72sVXtxkuhSwPyrK', 'augusto.hernandes@gmail.com', NULL, 1, NULL, 1),
(230, 'Doulgas', 'Yamada Silva', '4975', '$2y$10$35RhbWTod1DHawuLZqR4qOhsQw/lntZD5gYuppmuShqOnMbew67Ga', 'doulgas.yamada silva@gmail.com', NULL, 1, NULL, 1),
(231, 'Caio', 'Leal', '3997', '$2y$10$A5Zntefo5ErZ1H1/yV9HfOUQczCMu10miZ/y.IL0c7I1bJUmZXICy', 'caio.leal@gmail.com', NULL, 1, NULL, 1),
(232, 'Angelina', 'Batista', '7101', '$2y$10$HaZvfyLOIMYjC1Q1iGSwOeicJQI0R.OOSGK7B.PYPKUkUT808bAyW', 'angelina.batista@gmail.com', NULL, 1, NULL, 1),
(233, 'Cauê', 'Sato', '5086', '$2y$10$vhfP3.gDF37Gw2y56KkvHu0E3D4QYfatVHwMT02iJcg5uwMXqCYIe', 'caue.sato@gmail.com', NULL, 1, NULL, 1),
(234, 'Trinity', 'Minazuki', '6591', '$2y$10$KFr3rHVGzfgJXIx/vGDGVOEnsgXClOiR/wjdPhbuzc.e5DKUYzpby', 'trinity.minazuki@gmail.com', NULL, 1, NULL, 1),
(235, 'Filipe', 'Macedo', '6623', '$2y$10$dK6Rx1T7Aej75iHjgz2jh.8Nt9i9j65EqGoZLaTPtnn41UaabrcTK', 'filipe.macedo@gmail.com', NULL, 1, NULL, 1),
(236, 'Morpheu', 'Peixoto', '8609', '$2y$10$V9YIJtXWnzieiu2ETZXXNu8ZDkduiHZe6WuvjLxFnH7BP8r0oQ2CK', 'morpheu.peixoto@gmail.com', NULL, 1, NULL, 1),
(237, 'Caroline', 'Franca', '8020', '$2y$10$cj4QAEHvf/65dh0BIu23xu0uGCToW/Cq8KyM6s.eYjuIZjuyydnXq', 'caroline.franca@gmail.com', NULL, 1, NULL, 1),
(238, 'Fernando', 'Alves', '9819', '$2y$10$F2iBHSeruWFwHbfhSL/TzerahBW.hKwM/6wMw9hxpT4i0cmQMwJQe', 'fernando.alves@gmail.com', NULL, 1, NULL, 1),
(239, 'Cleber', 'Franca', '8269', '$2y$10$fRks7fedTRgaYblr/2wfdO5Cug2bZmwrPPFGWTjpRPGV.yLg3wEjm', 'cleber.franca@gmail.com', NULL, 1, NULL, 1),
(240, 'Cleber', 'Matos', '5026', '$2y$10$7/hWH/5B3NqjEdj/0GqdauAbVkr1oQEdr18bZGeI3csDKjxuyQtVe', 'cleber.matos@gmail.com', NULL, 1, NULL, 1),
(241, 'Dante', 'Peixoto', '8592', '$2y$10$kIJ/l6dJtrd0AuUd4oMicO6d2/cyWhUhmddszCdfmhZ.92V6kkV5y', 'dante.peixoto@gmail.com', NULL, 1, NULL, 1),
(242, 'Leonidas', 'Hernandes', '2274', '$2y$10$gwG58sJXaENPAHz.HOyt9uyXJyGAV9AXMQ/3GisLYqbpjedtVaDUW', 'leonidas.hernandes@gmail.com', NULL, 1, NULL, 1),
(243, 'Otavio', 'Alves', '6710', '$2y$10$.ywIEslG6KDJyAxwim1.VucOvXZ/WPYPYoIjrxJnsdK6flkCTPDRi', 'otavio.alves@gmail.com', NULL, 1, NULL, 1),
(244, 'Yoko', 'Valverde', '2271', '$2y$10$3nTHUnrawc5FM5CJ8AwXfuGm4fToZ/8MMdYziiQezEPJSbJUPsQde', 'yoko.valverde@gmail.com', NULL, 1, NULL, 1),
(245, 'Alexandra', 'Takahashi', '4791', '$2y$10$DBoZ5n50/WUtjP39Pw569eBobmsQqbFwOv/C3KM/Cc2.HiZoKpDPG', 'alexandra.takahashi@gmail.com', NULL, 1, NULL, 1),
(246, 'Dante', 'Tanaka', '9449', '$2y$10$zoQTb/uqnIwjfRlzPmgiU.TWjeNmIcH8s9IILmXP1B8z6BI16fWie', 'dante.tanaka@gmail.com', NULL, 1, NULL, 1),
(247, 'Cleber', 'Valverde', '5698', '$2y$10$X6/9ZVMu5DvXPQIz7eKpPu1b70qCAJFzy5BUBzJdbh45aBUb.8Tgu', 'cleber.valverde@gmail.com', NULL, 1, NULL, 1),
(248, 'Caroline', 'Takahashi', '3118', '$2y$10$2PXCHLMr7IP/5VpiZDaI9.ROr4JeuRb2uTROb9bV6C3GK.QvWxHIy', 'caroline.takahashi@gmail.com', NULL, 1, NULL, 1),
(249, 'Jill', 'Takahashi', '7352', '$2y$10$hlK6J5nX0yyRMrrqmLkn9.bC.jJ8fhux6nI9E1RMmHkjnvHW.dgGi', 'jill.takahashi@gmail.com', NULL, 1, NULL, 1),
(250, 'Peterson', 'Alves', '8084', '$2y$10$9VhTgS.a.q4W9btcUlr.I.vctDeI9kwkq7ANSp0QvtDWnLXERHo0O', 'peterson.alves@gmail.com', NULL, 1, NULL, 1),
(251, 'Filipe', 'Tanaka', '5381', '$2y$10$MP2Y4P.CElZLa1ws63p9Z.Tm4ZNpVuCyBkSIr0kZYmg3ngs26DNNG', 'filipe.tanaka@gmail.com', NULL, 1, NULL, 1),
(252, 'Fernanda', 'Camilo', '8926', '$2y$10$j7sTCESa/LnudrYq4W1wfuWMoE/3easCQylg3bsrEMXrEhO3Z1Ph.', 'fernanda.camilo@gmail.com', NULL, 1, NULL, 1),
(253, 'Odete', 'Carvalho', '1947', '$2y$10$Qy0HEgGhimYGP9olVT9xSOZTLA0Iwc8ZIzmpsACmybC.IcNYbYEqS', 'odete.carvalho@gmail.com', NULL, 1, NULL, 1),
(254, 'Xerxes', 'Costa', '1104', '$2y$10$kVmFyys9RtevH6CEF3RYEule/1tyr/7bn1401OCtlg3SZBsae1YaO', 'xerxes.costa@gmail.com', NULL, 1, NULL, 1),
(255, 'Cleber', 'Augusto', '8212', '$2y$10$4PTrByVH9OYVGH19efu8luZNa.aZNK6QcFNg/nGPSTRDxU5UXg73.', 'cleber.augusto@gmail.com', NULL, 1, NULL, 1),
(256, 'Michele', 'Yamada Silva', '2899', '$2y$10$rBhPKtR1PPVdLXP.5sjiXeJn80QRdchxv7Yci9jkxKB/mIeDfewai', 'michele.yamada silva@gmail.com', NULL, 1, NULL, 1),
(257, 'Alexandra', 'Vieira', '4459', '$2y$10$eID2d8IZC6EC9EYbrwYtYeyu7jfeh1CxQHrfu6rupr2PE/A26gLF6', 'alexandra.vieira@gmail.com', NULL, 1, NULL, 1),
(258, 'Camila', 'Alves', '6302', '$2y$10$E997uvsOlqdyIqH1GEGXxubAbd.dnxTXsKTE3QKnr7pHOTp7TqXTi', 'camila.alves@gmail.com', NULL, 1, NULL, 1),
(259, 'Michele', 'Redfield', '6237', '$2y$10$jpZ6GT0EHwifO0Tdr/ojpOc9oH7j4XXjeXc7EchWELIKYDRT93Mn6', 'michele.redfield@gmail.com', NULL, 1, NULL, 1),
(260, 'Jonas', 'Batista', '6223', '$2y$10$1o9AJaJ4h447CQrTT0fOGO8UtWDiuzwZoiOGnZ0gYEr/SCb6duoUK', 'jonas.batista@gmail.com', NULL, 1, NULL, 1),
(261, 'Fernanda', 'Carvalho', '2963', '$2y$10$X9SdYuKbTY/NqmHhsfbzQ.uG3uQTVSISDGthIDyFAMy153NXespc.', 'fernanda.carvalho@gmail.com', NULL, 1, NULL, 1),
(262, 'Otavio', 'Sato', '6039', '$2y$10$TaeqfgoJdzm0EZICtFRemO8GMrfIbM80pltQbFfcJ.hEtP0y50sRK', 'otavio.sato@gmail.com', NULL, 1, NULL, 1),
(263, 'Rafaela', 'Ishida Silva', '1004', '$2y$10$VBkUuHAYnjbPxr5KIRwZ6.1Me6K8LpFKm5JWtqHCO1sYPV/4XgjX6', 'rafaela.ishida silva@gmail.com', NULL, 1, NULL, 1),
(264, 'Kitana', 'Sato', '5283', '$2y$10$LLc.B7s6aKq/HHaNb3Ux.Oo9fYNZUyIl7ebejaawbBWmHS1VSF7Fu', 'kitana.sato@gmail.com', NULL, 1, NULL, 1),
(265, 'Sheeva', 'Jordão', '5424', '$2y$10$JE0lskakQE4GnDUaNMlhOOYKRWaFbT3Wrle0SB7zKkO7YWliR4Q92', 'sheeva.jordao@gmail.com', NULL, 1, NULL, 1),
(266, 'Cauê', 'da Silva', '1880', '$2y$10$YGieSJHR9wya16VaoBBf3OJSQocRmp26OOgwMuuGiM0tvaKvgWh2S', 'caue.da silva@gmail.com', NULL, 1, NULL, 1),
(267, 'Michele', 'Franca', '3716', '$2y$10$qgCdRxNXExGq0iMpjyuzk.80gyVuhbBNJhXoT/6Y0KtQikUCboK62', 'michele.franca@gmail.com', NULL, 1, NULL, 1),
(268, 'Irene', 'Takahashi', '3728', '$2y$10$pjeyq6ykV4Yf/GQzWz4r0.YVdrPU0W6C62MuATAR/rh0UMwYyz6hq', 'irene.takahashi@gmail.com', NULL, 1, NULL, 1),
(269, 'Andreia', 'Gouveia', '1535', '$2y$10$ywy9a7IbgOOHMMjosVaVq.c.7AAj4xE2m8dtVOphBvBV8jV84Rwtq', 'andreia.gouveia@gmail.com', NULL, 1, NULL, 1),
(270, 'Dante', 'Hernandes', '6032', '$2y$10$i67eP.ugam0EcgZa.RFMzu2YtSt.glCA1jAEtopOMc05K5PI1b2qq', 'dante.hernandes@gmail.com', NULL, 1, NULL, 1),
(271, 'Trinity', 'Macedo', '8418', '$2y$10$DSa9QeUxSlbAMAvwkE5mXe1eJyATwwJpz.M7oCviOK6xrQKMsjrnm', 'trinity.macedo@gmail.com', NULL, 1, NULL, 1),
(272, 'Jade', 'Freire', '6184', '$2y$10$.Ebb4/z0ZP9qVvnkeu3mJuBOoti3E3WmMvEslJ8cl69X1Pt6sSySe', 'jade.freire@gmail.com', NULL, 1, NULL, 1),
(273, 'Caio', 'Pádua', '5265', '$2y$10$ZSOZQ/Pq7Z2YiWajKLq95OuINFmhZe0.PmjU/0vGN17v9i35NXlC2', 'caio.padua@gmail.com', NULL, 1, NULL, 1),
(274, 'Doulgas', 'Faria', '4367', '$2y$10$yac/6t7rI.wpHEiym.AANeek8pnrY5aUe/CFZBvCsgnEbOdWKFjN6', 'doulgas.faria@gmail.com', NULL, 1, NULL, 1),
(275, 'Akemi', 'Matos', '3344', '$2y$10$6lDRo2elbmtmY1ORDkhcdeF8eTWp5zB72ySaV6sNIAKABQ190xcoy', 'akemi.matos@gmail.com', NULL, 1, NULL, 1),
(276, 'Administrador 1', NULL, '789', '$2y$10$mEBZpW6lzGSEzhtUYUysRuReW6LqKFMDelqkMm.AvUbXroKf0loF.', NULL, NULL, 1, NULL, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acessosatividades`
--
ALTER TABLE `acessosatividades`
 ADD PRIMARY KEY (`id`), ADD KEY `idAluno` (`idAluno`), ADD KEY `idQuestao` (`idQuestao`), ADD KEY `idAtividade` (`idAtividade`);

--
-- Indexes for table `administradores`
--
ALTER TABLE `administradores`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atividades`
--
ALTER TABLE `atividades`
 ADD PRIMARY KEY (`id`), ADD KEY `idAula` (`idAula`), ADD KEY `idCategoria` (`idCategoria`), ADD KEY `idModulo` (`idModulo`), ADD KEY `idUsuario` (`idUsuario`);

--
-- Indexes for table `aulas`
--
ALTER TABLE `aulas`
 ADD PRIMARY KEY (`id`), ADD KEY `idModulo` (`idModulo`);

--
-- Indexes for table `avisos`
--
ALTER TABLE `avisos`
 ADD PRIMARY KEY (`id`), ADD KEY `idUsuario` (`idUsuario`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idiomas`
--
ALTER TABLE `idiomas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materialapoio`
--
ALTER TABLE `materialapoio`
 ADD PRIMARY KEY (`id`), ADD KEY `idAula` (`idAula`);

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
 ADD PRIMARY KEY (`id`), ADD KEY `idUsuarioOrigem` (`idUsuarioOrigem`), ADD KEY `idUsuarioDestino` (`idUsuarioDestino`), ADD KEY `idRE` (`idRE`);

--
-- Indexes for table `modulos`
--
ALTER TABLE `modulos`
 ADD PRIMARY KEY (`id`), ADD KEY `idCurso` (`idCurso`);

--
-- Indexes for table `password_reminders`
--
ALTER TABLE `password_reminders`
 ADD KEY `password_reminders_email_index` (`email`), ADD KEY `password_reminders_token_index` (`token`);

--
-- Indexes for table `professores`
--
ALTER TABLE `professores`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propagandas`
--
ALTER TABLE `propagandas`
 ADD PRIMARY KEY (`id`), ADD KEY `idUsuario` (`idUsuario`);

--
-- Indexes for table `questoes`
--
ALTER TABLE `questoes`
 ADD PRIMARY KEY (`id`), ADD KEY `idAtividade` (`idAtividade`), ADD KEY `idTopico` (`idTopico`);

--
-- Indexes for table `respostas`
--
ALTER TABLE `respostas`
 ADD PRIMARY KEY (`id`), ADD KEY `idAluno` (`idAluno`), ADD KEY `idQuestao` (`idQuestao`);

--
-- Indexes for table `topicos`
--
ALTER TABLE `topicos`
 ADD PRIMARY KEY (`id`), ADD KEY `idUsuario` (`idUsuario`);

--
-- Indexes for table `turmas`
--
ALTER TABLE `turmas`
 ADD PRIMARY KEY (`id`), ADD KEY `idModulo` (`idModulo`), ADD KEY `idProfessor` (`idProfessor`);

--
-- Indexes for table `turmasalunos`
--
ALTER TABLE `turmasalunos`
 ADD PRIMARY KEY (`id`), ADD KEY `idTurma` (`idTurma`), ADD KEY `idAluno` (`idAluno`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acessosatividades`
--
ALTER TABLE `acessosatividades`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `administradores`
--
ALTER TABLE `administradores`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=277;
--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=276;
--
-- AUTO_INCREMENT for table `atividades`
--
ALTER TABLE `atividades`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `aulas`
--
ALTER TABLE `aulas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `avisos`
--
ALTER TABLE `avisos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `idiomas`
--
ALTER TABLE `idiomas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `materialapoio`
--
ALTER TABLE `materialapoio`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `modulos`
--
ALTER TABLE `modulos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `professores`
--
ALTER TABLE `professores`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `propagandas`
--
ALTER TABLE `propagandas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questoes`
--
ALTER TABLE `questoes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `respostas`
--
ALTER TABLE `respostas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `topicos`
--
ALTER TABLE `topicos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `turmas`
--
ALTER TABLE `turmas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `turmasalunos`
--
ALTER TABLE `turmasalunos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=252;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=277;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `acessosatividades`
--
ALTER TABLE `acessosatividades`
ADD CONSTRAINT `acessosatividades_ibfk_1` FOREIGN KEY (`idAluno`) REFERENCES `alunos` (`id`),
ADD CONSTRAINT `acessosatividades_ibfk_2` FOREIGN KEY (`idQuestao`) REFERENCES `questoes` (`id`),
ADD CONSTRAINT `acessosatividades_ibfk_3` FOREIGN KEY (`idAtividade`) REFERENCES `atividades` (`id`);

--
-- Limitadores para a tabela `atividades`
--
ALTER TABLE `atividades`
ADD CONSTRAINT `atividades_ibfk_1` FOREIGN KEY (`idAula`) REFERENCES `aulas` (`id`),
ADD CONSTRAINT `atividades_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`id`),
ADD CONSTRAINT `atividades_ibfk_3` FOREIGN KEY (`idModulo`) REFERENCES `modulos` (`id`),
ADD CONSTRAINT `atividades_ibfk_4` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `aulas`
--
ALTER TABLE `aulas`
ADD CONSTRAINT `aulas_ibfk_1` FOREIGN KEY (`idModulo`) REFERENCES `modulos` (`id`);

--
-- Limitadores para a tabela `avisos`
--
ALTER TABLE `avisos`
ADD CONSTRAINT `avisos_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`);
ADD CONSTRAINT `avisos_ibfk_2` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`id`);

--
-- Limitadores para a tabela `materialapoio`
--
ALTER TABLE `materialapoio`
ADD CONSTRAINT `materialapoio_ibfk_1` FOREIGN KEY (`idAula`) REFERENCES `aulas` (`id`);

--
-- Limitadores para a tabela `mensagens`
--
ALTER TABLE `mensagens`
ADD CONSTRAINT `mensagens_ibfk_1` FOREIGN KEY (`idUsuarioOrigem`) REFERENCES `usuarios` (`id`),
ADD CONSTRAINT `mensagens_ibfk_2` FOREIGN KEY (`idUsuarioDestino`) REFERENCES `usuarios` (`id`),
ADD CONSTRAINT `mensagens_ibfk_3` FOREIGN KEY (`idRE`) REFERENCES `mensagens` (`id`);

--
-- Limitadores para a tabela `modulos`
--
ALTER TABLE `modulos`
ADD CONSTRAINT `modulos_ibfk_1` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`id`);

--
-- Limitadores para a tabela `propagandas`
--
ALTER TABLE `propagandas`
ADD CONSTRAINT `propagandas_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `questoes`
--
ALTER TABLE `questoes`
ADD CONSTRAINT `questoes_ibfk_1` FOREIGN KEY (`idAtividade`) REFERENCES `atividades` (`id`),
ADD CONSTRAINT `questoes_ibfk_2` FOREIGN KEY (`idTopico`) REFERENCES `topicos` (`id`);

--
-- Limitadores para a tabela `respostas`
--
ALTER TABLE `respostas`
ADD CONSTRAINT `respostas_ibfk_1` FOREIGN KEY (`idAluno`) REFERENCES `alunos` (`id`),
ADD CONSTRAINT `respostas_ibfk_2` FOREIGN KEY (`idQuestao`) REFERENCES `questoes` (`id`);

--
-- Limitadores para a tabela `topicos`
--
ALTER TABLE `topicos`
ADD CONSTRAINT `topicos_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `turmas`
--
ALTER TABLE `turmas`
ADD CONSTRAINT `turmas_ibfk_1` FOREIGN KEY (`idModulo`) REFERENCES `modulos` (`id`),
ADD CONSTRAINT `turmas_ibfk_2` FOREIGN KEY (`idProfessor`) REFERENCES `professores` (`id`);

--
-- Limitadores para a tabela `turmasalunos`
--
ALTER TABLE `turmasalunos`
ADD CONSTRAINT `turmasalunos_ibfk_1` FOREIGN KEY (`idTurma`) REFERENCES `turmas` (`id`),
ADD CONSTRAINT `turmasalunos_ibfk_2` FOREIGN KEY (`idAluno`) REFERENCES `alunos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
