-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30-Mar-2015 às 23:26
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.9

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(1) DEFAULT NULL COMMENT '0: Iniciado, 1: Concluído',
  `idAluno` int(11) DEFAULT NULL,
  `idQuestao` int(11) DEFAULT NULL COMMENT 'Indica qual questao o aluno parou',
  `idAtividade` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idAluno` (`idAluno`),
  KEY `idAtividade` (`idAtividade`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `acessosatividades`
--

INSERT INTO `acessosatividades` (`id`, `status`, `idAluno`, `idQuestao`, `idAtividade`) VALUES
(16, 0, 25, 1, 121);

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codRegistro` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=277 ;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` int(11) DEFAULT NULL,
  `sobreMim` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dataNascimento` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dataVencimentoBoleto` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=276 ;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `matricula`, `sobreMim`, `dataNascimento`, `dataVencimentoBoleto`) VALUES
(25, 2544, 'Gosto de brincar, jogar video game e fazer amigos', '05/04/2008', 'dataVencim'),
(26, 1926, 'Sou a Rafaela, adoro cinema e o Justin Bieber! Sou fã do One Direction', '04/07/2008', 'dataVencim'),
(27, 4787, 'Futebol, video game e internet', '21/06/2008', 'dataVencim'),
(28, 4018, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '28/07/2007', 'dataVencim'),
(29, 9275, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '25/12/2008', 'dataVencim'),
(30, 5807, 'Sou a ChunLi e gosto de brincar de boneca , estudar e fazer novos amigos', '28/03/2006', 'dataVencim'),
(31, 8745, 'Olá, sou a Caroline e amo assistir tv, séries e filmes', '21/04/2005', 'dataVencim'),
(32, 5030, 'Gosto de brincar, jogar video game e fazer amigos', '30/07/2007', 'dataVencim'),
(33, 8129, 'Sou o Cleber e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '25/12/2008', 'dataVencim'),
(34, 4507, 'Sou a Irene e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '02/10/2008', 'dataVencim'),
(35, 7502, 'Sou o Filipe, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '21/05/2007', 'dataVencim'),
(36, 7508, 'Gosto de brincar, jogar video game e fazer amigos', '23/11/2005', 'dataVencim'),
(37, 6599, 'Sou a Barbara, adoro cinema e o Justin Bieber! Sou fã do One Direction', '14/07/2008', 'dataVencim'),
(38, 6314, 'Futebol, video game e internet', '06/06/2007', 'dataVencim'),
(39, 2349, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '07/02/2007', 'dataVencim'),
(40, 6821, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '24/09/2008', 'dataVencim'),
(41, 3001, 'Sou a Milena e gosto de brincar de boneca , estudar e fazer novos amigos', '03/11/2008', 'dataVencim'),
(42, 9096, 'Olá, sou o Cleber e amo assistir tv, séries e filmes', '26/12/2006', 'dataVencim'),
(43, 3634, 'Gosto de brincar, jogar video game e fazer amigos', '12/04/2006', 'dataVencim'),
(44, 7255, 'Sou a Jonas e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '21/10/2008', 'dataVencim'),
(45, 7935, 'Sou o Filipe e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '03/06/2005', 'dataVencim'),
(46, 6521, 'Sou o Otavio, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '21/04/2008', 'dataVencim'),
(47, 8001, 'Gosto de brincar, jogar video game e fazer amigos', '12/08/2007', 'dataVencim'),
(48, 2734, 'Sou o Xerxes, adoro cinema e o Justin Bieber! Sou fã do One Direction', '28/10/2008', 'dataVencim'),
(49, 1878, 'Futebol, video game e internet', '15/07/2006', 'dataVencim'),
(50, 5117, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '30/11/2006', 'dataVencim'),
(51, 2985, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '25/02/2005', 'dataVencim'),
(52, 1791, 'Sou o Caio e gosto de brincar de boneca , estudar e fazer novos amigos', '16/08/2005', 'dataVencim'),
(53, 4089, 'Olá, sou o Jaime e amo assistir tv, séries e filmes', '12/07/2006', 'dataVencim'),
(54, 5490, 'Gosto de brincar, jogar video game e fazer amigos', '30/12/2006', 'dataVencim'),
(55, 3641, 'Sou o Peterson e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '01/04/2007', 'dataVencim'),
(56, 5460, 'Sou o Simão e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '30/12/2007', 'dataVencim'),
(57, 3056, 'Sou a Sonia, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '21/08/2007', 'dataVencim'),
(58, 8385, 'Gosto de brincar, jogar video game e fazer amigos', '18/11/2008', 'dataVencim'),
(59, 1487, 'Sou o Claudio, adoro cinema e o Justin Bieber! Sou fã do One Direction', '10/06/2008', 'dataVencim'),
(60, 4196, 'Futebol, video game e internet', '30/06/2005', 'dataVencim'),
(61, 7113, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '22/03/2006', 'dataVencim'),
(62, 1023, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '21/10/2008', 'dataVencim'),
(63, 1285, 'Sou o Leonidas e gosto de brincar de boneca , estudar e fazer novos amigos', '17/11/2008', 'dataVencim'),
(64, 1409, 'Olá, sou o Peterson e amo assistir tv, séries e filmes', '30/05/2007', 'dataVencim'),
(65, 9516, 'Gosto de brincar, jogar video game e fazer amigos', '29/10/2008', 'dataVencim'),
(66, 6692, 'Sou a Andreia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '18/05/2008', 'dataVencim'),
(67, 8148, 'Sou a Caroline e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '27/03/2006', 'dataVencim'),
(68, 5932, 'Sou a ChunLi, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '30/07/2006', 'dataVencim'),
(69, 9277, 'Gosto de brincar, jogar video game e fazer amigos', '26/05/2005', 'dataVencim'),
(70, 7605, 'Sou a Akemi, adoro cinema e o Justin Bieber! Sou fã do One Direction', '22/12/2007', 'dataVencim'),
(71, 2312, 'Futebol, video game e internet', '17/12/2005', 'dataVencim'),
(72, 4036, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '24/08/2005', 'dataVencim'),
(73, 4663, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '29/07/2005', 'dataVencim'),
(74, 8773, 'Sou o Otavio e gosto de brincar de boneca , estudar e fazer novos amigos', '26/09/2005', 'dataVencim'),
(75, 2347, 'Olá, sou o Xerxes e amo assistir tv, séries e filmes', '02/06/2005', 'dataVencim'),
(76, 4867, 'Gosto de brincar, jogar video game e fazer amigos', '19/07/2005', 'dataVencim'),
(77, 3715, 'Sou a Milena e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '14/03/2006', 'dataVencim'),
(78, 9348, 'Sou o Eric e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '14/12/2007', 'dataVencim'),
(79, 4776, 'Sou o Dante, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '06/01/2008', 'dataVencim'),
(80, 1702, 'Gosto de brincar, jogar video game e fazer amigos', '31/08/2007', 'dataVencim'),
(81, 2722, 'Sou a Daniela, adoro cinema e o Justin Bieber! Sou fã do One Direction', '18/11/2005', 'dataVencim'),
(82, 1501, 'Futebol, video game e internet', '20/05/2006', 'dataVencim'),
(83, 7815, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '19/03/2007', 'dataVencim'),
(84, 4804, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '21/05/2007', 'dataVencim'),
(85, 7148, 'Sou o Jaime e gosto de brincar de boneca , estudar e fazer novos amigos', '27/07/2007', 'dataVencim'),
(86, 4622, 'Olá, sou o Xerxes e amo assistir tv, séries e filmes', '10/06/2006', 'dataVencim'),
(87, 1582, 'Gosto de brincar, jogar video game e fazer amigos', '03/08/2006', 'dataVencim'),
(88, 1365, 'Sou a Bruna e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '01/11/2008', 'dataVencim'),
(89, 7025, 'Sou a Odete e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '17/12/2006', 'dataVencim'),
(90, 7617, 'Sou a Sarah, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '16/05/2006', 'dataVencim'),
(91, 6606, 'Gosto de brincar, jogar video game e fazer amigos', '01/01/2008', 'dataVencim'),
(92, 9210, 'Sou o Caio, adoro cinema e o Justin Bieber! Sou fã do One Direction', '27/06/2007', 'dataVencim'),
(93, 9643, 'Futebol, video game e internet', '10/05/2005', 'dataVencim'),
(94, 3809, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '23/02/2005', 'dataVencim'),
(95, 8586, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '20/09/2006', 'dataVencim'),
(96, 2385, 'Sou a Akemi e gosto de brincar de boneca , estudar e fazer novos amigos', '04/10/2008', 'dataVencim'),
(97, 7985, 'Olá, sou a Jill e amo assistir tv, séries e filmes', '02/06/2005', 'dataVencim'),
(98, 8730, 'Gosto de brincar, jogar video game e fazer amigos', '21/12/2005', 'dataVencim'),
(99, 8480, 'Sou a Sonia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '11/04/2005', 'dataVencim'),
(100, 7909, 'Sou o Augusto e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '15/01/2008', 'dataVencim'),
(101, 7344, 'Sou a Yoko, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '06/06/2005', 'dataVencim'),
(102, 4368, 'Gosto de brincar, jogar video game e fazer amigos', '07/05/2008', 'dataVencim'),
(103, 9074, 'Sou o Peterson, adoro cinema e o Justin Bieber! Sou fã do One Direction', '06/03/2008', 'dataVencim'),
(104, 6180, 'Futebol, video game e internet', '26/04/2007', 'dataVencim'),
(105, 9653, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '27/05/2006', 'dataVencim'),
(106, 3738, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '03/04/2008', 'dataVencim'),
(107, 4685, 'Sou o Peterson e gosto de brincar de boneca , estudar e fazer novos amigos', '18/12/2005', 'dataVencim'),
(108, 1458, 'Olá, sou o Filipe e amo assistir tv, séries e filmes', '21/11/2008', 'dataVencim'),
(109, 2063, 'Gosto de brincar, jogar video game e fazer amigos', '17/12/2006', 'dataVencim'),
(110, 1316, 'Sou o Cauê e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '03/02/2008', 'dataVencim'),
(111, 6061, 'Sou a Jonas e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '22/10/2008', 'dataVencim'),
(112, 6295, 'Sou a Irene, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '13/03/2003', 'dataVencim'),
(113, 5337, 'Gosto de brincar, jogar video game e fazer amigos', '15/05/2003', 'dataVencim'),
(114, 5403, 'Sou a Rafaela, adoro cinema e o Justin Bieber! Sou fã do One Direction', '18/04/2002', 'dataVencim'),
(115, 9171, 'Futebol, video game e internet', '20/11/2002', 'dataVencim'),
(116, 3523, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '04/04/2004', 'dataVencim'),
(117, 4723, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '14/08/2003', 'dataVencim'),
(118, 8450, 'Sou o ChunLi e gosto de brincar de boneca , estudar e fazer novos amigos', '05/01/2004', 'dataVencim'),
(119, 8261, 'Olá, sou o Caroline e amo assistir tv, séries e filmes', '19/01/2001', 'dataVencim'),
(120, 3519, 'Gosto de brincar, jogar video game e fazer amigos', '27/12/2003', 'dataVencim'),
(121, 9654, 'Sou a Cleber e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '02/11/2002', 'dataVencim'),
(122, 9473, 'Sou o Irene e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '04/01/2003', 'dataVencim'),
(123, 2957, 'Sou a Filipe, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '31/07/2004', 'dataVencim'),
(124, 5694, 'Gosto de brincar, jogar video game e fazer amigos', '09/02/2002', 'dataVencim'),
(125, 3068, 'Sou o Barbara, adoro cinema e o Justin Bieber! Sou fã do One Direction', '27/12/2000', 'dataVencim'),
(126, 8712, 'Futebol, video game e internet', '03/11/2000', 'dataVencim'),
(127, 8234, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '30/11/2002', 'dataVencim'),
(128, 3977, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '19/11/1999', 'dataVencim'),
(129, 5317, 'Sou a Milena e gosto de brincar de boneca , estudar e fazer novos amigos', '19/04/2001', 'dataVencim'),
(130, 7146, 'Olá, sou o Cleber e amo assistir tv, séries e filmes', '11/08/2001', 'dataVencim'),
(131, 3428, 'Gosto de brincar, jogar video game e fazer amigos', '15/12/2000', 'dataVencim'),
(132, 6404, 'Sou o Jonas e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '09/11/2001', 'dataVencim'),
(133, 3117, 'Sou o Filipe e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '26/11/2001', 'dataVencim'),
(134, 6798, 'Sou a Otavio, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '25/01/2002', 'dataVencim'),
(135, 2909, 'Gosto de brincar, jogar video game e fazer amigos', '13/10/2001', 'dataVencim'),
(136, 4774, 'Sou a Xerxes, adoro cinema e o Justin Bieber! Sou fã do One Direction', '04/03/2004', 'dataVencim'),
(137, 3786, 'Futebol, video game e internet', '26/05/2004', 'dataVencim'),
(138, 2209, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '23/02/2002', 'dataVencim'),
(139, 5768, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '23/10/2002', 'dataVencim'),
(140, 1718, 'Sou a Caio e gosto de brincar de boneca , estudar e fazer novos amigos', '14/06/2003', 'dataVencim'),
(141, 2721, 'Olá, sou a Jaime e amo assistir tv, séries e filmes', '29/10/2000', 'dataVencim'),
(142, 8182, 'Gosto de brincar, jogar video game e fazer amigos', '22/04/2003', 'dataVencim'),
(143, 3920, 'Sou a Peterson e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '08/09/2001', 'dataVencim'),
(144, 5097, 'Sou o Simão e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '16/02/2002', 'dataVencim'),
(145, 7016, 'Sou a Sonia, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '18/07/2004', 'dataVencim'),
(146, 9003, 'Gosto de brincar, jogar video game e fazer amigos', '04/06/2003', 'dataVencim'),
(147, 5413, 'Sou a Claudio, adoro cinema e o Justin Bieber! Sou fã do One Direction', '29/11/2001', 'dataVencim'),
(148, 6896, 'Futebol, video game e internet', '24/10/2003', 'dataVencim'),
(149, 9640, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '10/11/2002', 'dataVencim'),
(150, 3020, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '04/02/2000', 'dataVencim'),
(151, 3321, 'Sou a Leonidas e gosto de brincar de boneca , estudar e fazer novos amigos', '24/06/2003', 'dataVencim'),
(152, 6752, 'Olá, sou o Peterson e amo assistir tv, séries e filmes', '19/06/2002', 'dataVencim'),
(153, 1639, 'Gosto de brincar, jogar video game e fazer amigos', '28/04/2004', 'dataVencim'),
(154, 6610, 'Sou a Andreia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '14/08/2003', 'dataVencim'),
(155, 9642, 'Sou a Caroline e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '15/03/2003', 'dataVencim'),
(156, 1631, 'Sou a ChunLi, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '11/11/2002', 'dataVencim'),
(157, 3116, 'Gosto de brincar, jogar video game e fazer amigos', '02/09/2001', 'dataVencim'),
(158, 1555, 'Sou a Akemi, adoro cinema e o Justin Bieber! Sou fã do One Direction', '24/06/2004', 'dataVencim'),
(159, 6337, 'Futebol, video game e internet', '27/06/2004', 'dataVencim'),
(160, 8110, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '13/05/2003', 'dataVencim'),
(161, 9031, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '26/09/2002', 'dataVencim'),
(162, 5607, 'Sou a Otavio e gosto de brincar de boneca , estudar e fazer novos amigos', '24/02/2004', 'dataVencim'),
(163, 8016, 'Olá, sou o Xerxes e amo assistir tv, séries e filmes', '13/11/2002', 'dataVencim'),
(164, 9836, 'Gosto de brincar, jogar video game e fazer amigos', '05/12/2003', 'dataVencim'),
(165, 4785, 'Sou o Milena e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '29/10/2000', 'dataVencim'),
(166, 8571, 'Sou o Eric e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '26/11/2000', 'dataVencim'),
(167, 3405, 'Sou o Dante, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '25/06/2003', 'dataVencim'),
(168, 2620, 'Gosto de brincar, jogar video game e fazer amigos', '26/09/2001', 'dataVencim'),
(169, 9802, 'Sou o Daniela, adoro cinema e o Justin Bieber! Sou fã do One Direction', '06/03/2003', 'dataVencim'),
(170, 6767, 'Futebol, video game e internet', '01/05/2003', 'dataVencim'),
(171, 9057, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '26/11/2001', 'dataVencim'),
(172, 6601, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '08/02/2003', 'dataVencim'),
(173, 7089, 'Sou o Jaime e gosto de brincar de boneca , estudar e fazer novos amigos', '11/05/2004', 'dataVencim'),
(174, 8707, 'Olá, sou o Xerxes e amo assistir tv, séries e filmes', '26/12/2001', 'dataVencim'),
(175, 8133, 'Gosto de brincar, jogar video game e fazer amigos', '21/12/2003', 'dataVencim'),
(176, 1299, 'Sou o Bruna e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '29/03/2000', 'dataVencim'),
(177, 2484, 'Sou o Odete e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '06/04/2000', 'dataVencim'),
(178, 2796, 'Sou a Sarah, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '05/06/2001', 'dataVencim'),
(179, 8602, 'Gosto de brincar, jogar video game e fazer amigos', '15/12/1999', 'dataVencim'),
(180, 8078, 'Sou a Caio, adoro cinema e o Justin Bieber! Sou fã do One Direction', '06/11/2000', 'dataVencim'),
(181, 5012, 'Futebol, video game e internet', '27/10/2000', 'dataVencim'),
(182, 5062, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '07/05/2004', 'dataVencim'),
(183, 6325, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '09/09/2001', 'dataVencim'),
(184, 2519, 'Sou a Akemi e gosto de brincar de boneca , estudar e fazer novos amigos', '17/03/2003', 'dataVencim'),
(185, 6575, 'Olá, sou o Jill e amo assistir tv, séries e filmes', '14/12/2003', 'dataVencim'),
(186, 4226, 'Gosto de brincar, jogar video game e fazer amigos', '15/10/2003', 'dataVencim'),
(187, 6371, 'Sou o Sonia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '01/04/2002', 'dataVencim'),
(188, 1142, 'Sou o Augusto e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '08/01/2002', 'dataVencim'),
(189, 1544, 'Sou o Yoko, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '20/04/2003', 'dataVencim'),
(190, 4651, 'Gosto de brincar, jogar video game e fazer amigos', '26/11/2001', 'dataVencim'),
(191, 2968, 'Sou a Peterson, adoro cinema e o Justin Bieber! Sou fã do One Direction', '07/02/2001', 'dataVencim'),
(192, 8357, 'Futebol, video game e internet', '16/02/2004', 'dataVencim'),
(193, 6907, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '15/07/2004', 'dataVencim'),
(194, 4331, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '19/01/2004', 'dataVencim'),
(195, 1404, 'Sou a Peterson e gosto de brincar de boneca , estudar e fazer novos amigos', '06/03/2003', 'dataVencim'),
(196, 6269, 'Futebol, video game e internet', '04/01/1982', 'dataVencim'),
(197, 5591, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '26/07/1975', 'dataVencim'),
(198, 4702, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '14/12/1991', 'dataVencim'),
(199, 3458, 'Sou o ChunLi e gosto de brincar de boneca , estudar e fazer novos amigos', '12/01/1974', 'dataVencim'),
(200, 6963, 'Olá, sou o Caroline e amo assistir tv, séries e filmes', '15/10/1960', 'dataVencim'),
(201, 5024, 'Gosto de brincar, jogar video game e fazer amigos', '21/12/1960', 'dataVencim'),
(202, 2128, 'Sou o Cleber e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '16/03/1981', 'dataVencim'),
(203, 1246, 'Sou a Irene e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '20/08/1978', 'dataVencim'),
(204, 8183, 'Sou a Filipe, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '25/07/1961', 'dataVencim'),
(205, 6682, 'Gosto de brincar, jogar video game e fazer amigos', '16/02/1997', 'dataVencim'),
(206, 8919, 'Sou a Barbara, adoro cinema e o Justin Bieber! Sou fã do One Direction', '22/12/1957', 'dataVencim'),
(207, 8553, 'Futebol, video game e internet', '25/04/1978', 'dataVencim'),
(208, 1636, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '10/07/1981', 'dataVencim'),
(209, 8900, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '08/11/1989', 'dataVencim'),
(210, 5937, 'Sou o Milena e gosto de brincar de boneca , estudar e fazer novos amigos', '25/11/1997', 'dataVencim'),
(211, 3814, 'Olá, sou o Cleber e amo assistir tv, séries e filmes', '14/03/1965', 'dataVencim'),
(212, 1561, 'Gosto de brincar, jogar video game e fazer amigos', '20/11/1965', 'dataVencim'),
(213, 9245, 'Sou o Jonas e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '03/01/1977', 'dataVencim'),
(214, 4139, 'Sou a Filipe e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '20/02/1989', 'dataVencim'),
(215, 5042, 'Sou a Otavio, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '27/01/1955', 'dataVencim'),
(216, 2550, 'Gosto de brincar, jogar video game e fazer amigos', '07/04/1978', 'dataVencim'),
(217, 1121, 'Sou a Xerxes, adoro cinema e o Justin Bieber! Sou fã do One Direction', '11/10/1971', 'dataVencim'),
(218, 4452, 'Futebol, video game e internet', '03/12/1975', 'dataVencim'),
(219, 9380, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '19/04/1960', 'dataVencim'),
(220, 7210, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '18/03/1996', 'dataVencim'),
(221, 5163, 'Sou o Caio e gosto de brincar de boneca , estudar e fazer novos amigos', '26/11/1966', 'dataVencim'),
(222, 6095, 'Olá, sou o Jaime e amo assistir tv, séries e filmes', '20/08/1989', 'dataVencim'),
(223, 9767, 'Gosto de brincar, jogar video game e fazer amigos', '20/12/1997', 'dataVencim'),
(224, 9138, 'Sou a Peterson e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '13/02/1997', 'dataVencim'),
(225, 5181, 'Sou a Simão e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '05/02/1984', 'dataVencim'),
(226, 5936, 'Sou o Sonia, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '07/04/1976', 'dataVencim'),
(227, 4582, 'Gosto de brincar, jogar video game e fazer amigos', '16/01/1992', 'dataVencim'),
(228, 9826, 'Sou o Claudio, adoro cinema e o Justin Bieber! Sou fã do One Direction', '07/02/1979', 'dataVencim'),
(229, 4376, 'Futebol, video game e internet', '08/12/1982', 'dataVencim'),
(230, 4975, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '13/08/1996', 'dataVencim'),
(231, 3997, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '17/07/1992', 'dataVencim'),
(232, 7101, 'Sou a Leonidas e gosto de brincar de boneca , estudar e fazer novos amigos', '24/09/1975', 'dataVencim'),
(233, 5086, 'Olá, sou o Peterson e amo assistir tv, séries e filmes', '06/03/1969', 'dataVencim'),
(234, 6591, 'Gosto de brincar, jogar video game e fazer amigos', '17/12/1987', 'dataVencim'),
(235, 6623, 'Sou o Andreia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '18/11/1954', 'dataVencim'),
(236, 8609, 'Sou o Caroline e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '20/07/1997', 'dataVencim'),
(237, 8020, 'Sou a ChunLi, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '11/05/1981', 'dataVencim'),
(238, 9819, 'Gosto de brincar, jogar video game e fazer amigos', '14/08/1962', 'dataVencim'),
(239, 8269, 'Sou o Akemi, adoro cinema e o Justin Bieber! Sou fã do One Direction', '15/09/1971', 'dataVencim'),
(240, 5026, 'Futebol, video game e internet', '08/12/1962', 'dataVencim'),
(241, 8592, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '22/03/1994', 'dataVencim'),
(242, 2274, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '10/04/1957', 'dataVencim'),
(243, 6710, 'Sou o Otavio e gosto de brincar de boneca , estudar e fazer novos amigos', '02/05/1964', 'dataVencim'),
(244, 2271, 'Olá, sou a Xerxes e amo assistir tv, séries e filmes', '13/11/1983', 'dataVencim'),
(245, 4791, 'Gosto de brincar, jogar video game e fazer amigos', '11/07/1987', 'dataVencim'),
(246, 9449, 'Sou o Milena e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '16/05/1993', 'dataVencim'),
(247, 5698, 'Sou o Eric e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '11/03/1995', 'dataVencim'),
(248, 3118, 'Sou a Dante, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '31/12/1972', 'dataVencim'),
(249, 7352, 'Gosto de brincar, jogar video game e fazer amigos', '09/06/1990', 'dataVencim'),
(250, 8084, 'Sou o Daniela, adoro cinema e o Justin Bieber! Sou fã do One Direction', '01/11/1977', 'dataVencim'),
(251, 5381, 'Futebol, video game e internet', '02/01/1964', 'dataVencim'),
(252, 8926, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '15/05/1972', 'dataVencim'),
(253, 1947, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '01/01/1979', 'dataVencim'),
(254, 1104, 'Sou o Jaime e gosto de brincar de boneca , estudar e fazer novos amigos', '01/02/1958', 'dataVencim'),
(255, 8212, 'Olá, sou o Xerxes e amo assistir tv, séries e filmes', '02/06/1985', 'dataVencim'),
(256, 2899, 'Gosto de brincar, jogar video game e fazer amigos', '21/04/1964', 'dataVencim'),
(257, 4459, 'Sou a Bruna e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '01/04/1991', 'dataVencim'),
(258, 6302, 'Sou a Odete e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '04/09/1983', 'dataVencim'),
(259, 6237, 'Sou a Sarah, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '25/08/1961', 'dataVencim'),
(260, 6223, 'Gosto de brincar, jogar video game e fazer amigos', '16/01/1960', 'dataVencim'),
(261, 2963, 'Sou a Caio, adoro cinema e o Justin Bieber! Sou fã do One Direction', '16/03/1981', 'dataVencim'),
(262, 6039, 'Futebol, video game e internet', '16/08/1975', 'dataVencim'),
(263, 1004, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '03/04/1971', 'dataVencim'),
(264, 5283, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '01/09/1972', 'dataVencim'),
(265, 5424, 'Sou a Akemi e gosto de brincar de boneca , estudar e fazer novos amigos', '03/02/1981', 'dataVencim'),
(266, 1880, 'Olá, sou o Jill e amo assistir tv, séries e filmes', '14/06/1964', 'dataVencim'),
(267, 3716, 'Gosto de brincar, jogar video game e fazer amigos', '26/06/1963', 'dataVencim'),
(268, 3728, 'Sou a Sonia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente', '11/09/1959', 'dataVencim'),
(269, 1535, 'Sou a Augusto e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente', '28/11/1966', 'dataVencim'),
(270, 6032, 'Sou o Yoko, não gosto de estudar, só estudo inglês porque minha mãe me obriga', '24/03/1980', 'dataVencim'),
(271, 8418, 'Gosto de brincar, jogar video game e fazer amigos', '06/04/1977', 'dataVencim'),
(272, 6184, 'Sou a Peterson, adoro cinema e o Justin Bieber! Sou fã do One Direction', '21/09/1989', 'dataVencim'),
(273, 5265, 'Futebol, video game e internet', '10/02/1970', 'dataVencim'),
(274, 4367, 'Gosto de jogar volei na praia com minhas amigas e adoro doces', '23/10/1976', 'dataVencim'),
(275, 3344, 'Gosto de bolo de choholate, jogar video game e do filme Matrix', '05/06/1976', 'dataVencim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades`
--

CREATE TABLE IF NOT EXISTS `atividades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` int(1) DEFAULT NULL COMMENT '1: Conteudo de aula, 2: extra',
  `status` int(1) DEFAULT NULL COMMENT '0: inativo, 1:ativo',
  `idAula` int(11) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `idModulo` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idAula` (`idAula`),
  KEY `idCategoria` (`idCategoria`),
  KEY `idModulo` (`idModulo`),
  KEY `idUsuario` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=123 ;

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
(120, 'Atividade 2 - ', 1, 1, 60, NULL, NULL, NULL),
(121, 'Ativ Extra Teste', 2, 0, NULL, 1, 1, 276),
(122, 'teste', 2, 1, NULL, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aulas`
--

CREATE TABLE IF NOT EXISTS `aulas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idModulo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idModulo` (`idModulo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=61 ;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urlImagem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dataExpiracao` date DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idCurso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idUsuario` (`idUsuario`),
  KEY `idCurso` (`idCurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `avisos`
--

INSERT INTO `avisos` (`id`, `titulo`, `descricao`, `urlImagem`, `dataExpiracao`, `idUsuario`, `idCurso`) VALUES
(1, 'Aviso TEste', 'DAsda', NULL, '2015-03-27', 276, NULL),
(2, 'asdas', 'dasdasd', 'img/profile.png', '2015-03-28', 276, 1),
(3, 'asdas', 'adsad', NULL, '2013-03-11', 276, NULL),
(5, 'teste', 'teste', NULL, '2015-03-07', 276, NULL),
(6, '', '', NULL, '2015-03-28', 276, NULL),
(7, 'teste 2 ', 'teste 2', NULL, '2015-03-28', 276, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Halloween');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idIdioma` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idAula` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idAula` (`idAula`)
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
  `data` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idUsuarioOrigem` int(11) DEFAULT NULL,
  `idUsuarioDestino` int(11) DEFAULT NULL,
  `idRE` int(11) DEFAULT NULL COMMENT 'Indica o id da mensagem em resposta, caso exista',
  PRIMARY KEY (`id`),
  KEY `idUsuarioOrigem` (`idUsuarioOrigem`),
  KEY `idUsuarioDestino` (`idUsuarioDestino`),
  KEY `idRE` (`idRE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `titulo`, `conteudo`, `lida`, `data`, `idUsuarioOrigem`, `idUsuarioDestino`, `idRE`) VALUES
(1, 'asdas', 'asdas', 1, '26-03-2015 03:54:06', 25, 1, NULL),
(2, NULL, 'teste 1', 1, '27-03-2015 05:42:06', 1, 25, NULL),
(3, NULL, 'teste 12 aluno', 1, '27-03-2015 05:54:21', 25, 1, NULL),
(4, 'RE: ', 'teste', 1, '27-03-2015 05:56:19', 1, 25, 3),
(5, 'RE: RE: ', '', 1, '27-03-2015 05:59:02', 25, 1, 4),
(6, 'RE: RE: RE: ', '', 1, '27-03-2015 05:59:55', 1, 25, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `modulos`
--

CREATE TABLE IF NOT EXISTS `modulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idCurso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idCurso` (`idCurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

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
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_reminders_email_index` (`email`),
  KEY `password_reminders_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE IF NOT EXISTS `professores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codRegistro` int(11) DEFAULT NULL,
  `sobreMim` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `formacaoAcademica` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`id`, `codRegistro`, `sobreMim`, `formacaoAcademica`) VALUES
(1, 0, NULL, 'Pedagogia'),
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(350) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idUsuario` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `propagandas`
--

INSERT INTO `propagandas` (`id`, `titulo`, `imagem`, `link`, `idUsuario`) VALUES
(1, 'teste', 'img/Banner-Digital-001.jpg', NULL, 276);

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE IF NOT EXISTS `questoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `idTopico` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idAtividade` (`idAtividade`),
  KEY `idTopico` (`idTopico`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `questoes`
--

INSERT INTO `questoes` (`id`, `textoPergunta`, `urlMidia`, `numero`, `tipo`, `categoria`, `alternativaA`, `alternativaB`, `alternativaC`, `alternativaD`, `respostaCerta`, `pontos`, `idAtividade`, `idTopico`) VALUES
(1, 'Qual é o passado do verbo to get ?', NULL, 1, 2, 1, NULL, NULL, NULL, NULL, 'Got', 200, 121, 1),
(2, 'Qual é o passado do verbo to get ?', NULL, 2, 2, 1, NULL, NULL, NULL, NULL, 'Got', 300, 121, 1),
(3, 'Qual é o passado do verbo to get ?', NULL, 3, 1, 12, 'files/1.jpg', 'files/2.jpg', 'files/3.jpg', 'files/4.jpg', 'a', 400, 121, 1),
(4, 'Qual é o passado do verbo to get ?', NULL, 4, 1, 11, 'Got', 'Gotten', 'Gotcha', 'Gotta', 'a', 200, 1, 1),
(5, 'Transcreva o áudio a seguir:', 'files/usa4.mp3', 5, 2, 3, NULL, NULL, NULL, NULL, 'What was James doing when his friends arrived ?', 400, 121, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE IF NOT EXISTS `respostas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `respostaAluno` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correcao` int(1) DEFAULT NULL COMMENT '0: errou, 1: acertou',
  `idAluno` int(11) DEFAULT NULL,
  `idQuestao` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idAluno` (`idAluno`),
  KEY `idQuestao` (`idQuestao`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=55 ;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`id`, `respostaAluno`, `correcao`, `idAluno`, `idQuestao`) VALUES
(53, 'got', 0, 25, 1),
(54, 'got', 0, 25, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `topicos`
--

CREATE TABLE IF NOT EXISTS `topicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idUsuario` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `topicos`
--

INSERT INTO `topicos` (`id`, `nome`, `idUsuario`) VALUES
(1, 'Verbos', 276),
(2, 'Adjetivos', 276);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE IF NOT EXISTS `turmas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(1) DEFAULT NULL COMMENT '0:Turma fechada/modulo concluido  1: Turma ativa/Alunos com aula',
  `idModulo` int(11) DEFAULT NULL,
  `idProfessor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idModulo` (`idModulo`),
  KEY `idProfessor` (`idProfessor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=61 ;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pontuacao` int(10) DEFAULT NULL,
  `idTurma` int(11) DEFAULT NULL,
  `idAluno` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idTurma` (`idTurma`),
  KEY `idAluno` (`idAluno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=252 ;

--
-- Extraindo dados da tabela `turmasalunos`
--

INSERT INTO `turmasalunos` (`id`, `pontuacao`, `idTurma`, `idAluno`) VALUES
(1, 5100, 1, 25),
(2, 0, 1, 26),
(3, 0, 1, 27),
(4, 0, 1, 28),
(5, 0, 1, 29),
(6, 0, 1, 30),
(7, 0, 2, 31),
(8, 0, 2, 32),
(9, 0, 2, 33),
(10, 0, 2, 34),
(11, 0, 2, 35),
(12, 0, 2, 36),
(13, 0, 3, 37),
(14, 0, 3, 38),
(15, 0, 3, 39),
(16, 0, 3, 40),
(17, 0, 3, 41),
(18, 0, 3, 42),
(19, 0, 4, 43),
(20, 0, 4, 44),
(21, 0, 4, 45),
(22, 0, 4, 46),
(23, 0, 4, 47),
(24, 0, 5, 48),
(25, 0, 5, 49),
(26, 0, 5, 50),
(27, 0, 5, 51),
(28, 0, 6, 52),
(29, 0, 6, 53),
(30, 0, 6, 54),
(31, 0, 6, 55),
(32, 0, 7, 56),
(33, 0, 7, 57),
(34, 0, 7, 58),
(35, 0, 7, 59),
(36, 0, 8, 60),
(37, 0, 8, 61),
(38, 0, 8, 62),
(39, 0, 8, 63),
(40, 0, 9, 64),
(41, 0, 9, 65),
(42, 0, 9, 66),
(43, 0, 9, 67),
(44, 0, 10, 68),
(45, 0, 10, 69),
(46, 0, 10, 70),
(47, 0, 10, 71),
(48, 0, 11, 72),
(49, 0, 11, 73),
(50, 0, 11, 74),
(51, 0, 11, 75),
(52, 0, 12, 76),
(53, 0, 12, 77),
(54, 0, 12, 78),
(55, 0, 12, 79),
(56, 0, 13, 80),
(57, 0, 13, 81),
(58, 0, 13, 82),
(59, 0, 13, 83),
(60, 0, 14, 84),
(61, 0, 14, 85),
(62, 0, 14, 86),
(63, 0, 14, 87),
(64, 0, 15, 88),
(65, 0, 15, 89),
(66, 0, 15, 90),
(67, 0, 15, 91),
(68, 0, 16, 92),
(69, 0, 16, 93),
(70, 0, 16, 94),
(71, 0, 16, 95),
(72, 0, 17, 96),
(73, 0, 17, 97),
(74, 0, 17, 98),
(75, 0, 17, 99),
(76, 0, 18, 100),
(77, 0, 18, 101),
(78, 0, 18, 102),
(79, 0, 18, 103),
(80, 0, 19, 104),
(81, 0, 19, 105),
(82, 0, 19, 106),
(83, 0, 19, 107),
(84, 0, 20, 108),
(85, 0, 20, 109),
(86, 0, 20, 110),
(87, 0, 20, 111),
(88, 0, 21, 112),
(89, 0, 21, 113),
(90, 0, 21, 114),
(91, 0, 21, 115),
(92, 0, 22, 116),
(93, 0, 22, 117),
(94, 0, 22, 118),
(95, 0, 22, 119),
(96, 0, 23, 120),
(97, 0, 23, 121),
(98, 0, 23, 122),
(99, 0, 23, 123),
(100, 0, 24, 124),
(101, 0, 24, 125),
(102, 0, 24, 126),
(103, 0, 24, 127),
(104, 0, 25, 128),
(105, 0, 25, 129),
(106, 0, 25, 130),
(107, 0, 25, 131),
(108, 0, 26, 132),
(109, 0, 26, 133),
(110, 0, 26, 134),
(111, 0, 26, 135),
(112, 0, 27, 136),
(113, 0, 27, 137),
(114, 0, 27, 138),
(115, 0, 27, 139),
(116, 0, 28, 140),
(117, 0, 28, 141),
(118, 0, 28, 142),
(119, 0, 28, 143),
(120, 0, 29, 144),
(121, 0, 29, 145),
(122, 0, 29, 146),
(123, 0, 29, 147),
(124, 0, 30, 148),
(125, 0, 30, 149),
(126, 0, 30, 150),
(127, 0, 30, 151),
(128, 0, 31, 152),
(129, 0, 31, 153),
(130, 0, 31, 154),
(131, 0, 31, 155),
(132, 0, 32, 156),
(133, 0, 32, 157),
(134, 0, 32, 158),
(135, 0, 32, 159),
(136, 0, 32, 160),
(137, 0, 33, 161),
(138, 0, 33, 162),
(139, 0, 33, 163),
(140, 0, 33, 164),
(141, 0, 33, 165),
(142, 0, 33, 166),
(143, 0, 33, 167),
(144, 0, 34, 168),
(145, 0, 34, 169),
(146, 0, 34, 170),
(147, 0, 34, 171),
(148, 0, 35, 172),
(149, 0, 35, 173),
(150, 0, 35, 174),
(151, 0, 35, 175),
(152, 0, 36, 176),
(153, 0, 36, 177),
(154, 0, 36, 178),
(155, 0, 36, 179),
(156, 0, 37, 180),
(157, 0, 37, 181),
(158, 0, 37, 182),
(159, 0, 38, 183),
(160, 0, 38, 184),
(161, 0, 38, 185),
(162, 0, 38, 186),
(163, 0, 39, 187),
(164, 0, 39, 188),
(165, 0, 39, 189),
(166, 0, 39, 190),
(167, 0, 40, 191),
(168, 0, 40, 192),
(169, 0, 40, 193),
(170, 0, 40, 194),
(171, 0, 40, 195),
(172, 0, 41, 196),
(173, 0, 41, 197),
(174, 0, 41, 198),
(175, 0, 41, 199),
(176, 0, 42, 200),
(177, 0, 42, 201),
(178, 0, 42, 202),
(179, 0, 42, 203),
(180, 0, 43, 204),
(181, 0, 43, 205),
(182, 0, 43, 206),
(183, 0, 43, 207),
(184, 0, 44, 208),
(185, 0, 44, 209),
(186, 0, 44, 210),
(187, 0, 44, 211),
(188, 0, 45, 212),
(189, 0, 45, 213),
(190, 0, 45, 214),
(191, 0, 45, 215),
(192, 0, 46, 216),
(193, 0, 46, 217),
(194, 0, 46, 218),
(195, 0, 46, 219),
(196, 0, 47, 220),
(197, 0, 47, 221),
(198, 0, 47, 222),
(199, 0, 47, 223),
(200, 0, 48, 224),
(201, 0, 48, 225),
(202, 0, 48, 226),
(203, 0, 48, 227),
(204, 0, 49, 228),
(205, 0, 49, 229),
(206, 0, 49, 230),
(207, 0, 49, 231),
(208, 0, 50, 232),
(209, 0, 50, 233),
(210, 0, 50, 234),
(211, 0, 50, 235),
(212, 0, 51, 236),
(213, 0, 51, 237),
(214, 0, 51, 238),
(215, 0, 51, 239),
(216, 0, 52, 240),
(217, 0, 52, 241),
(218, 0, 52, 242),
(219, 0, 52, 243),
(220, 0, 53, 244),
(221, 0, 53, 245),
(222, 0, 53, 246),
(223, 0, 53, 247),
(224, 0, 54, 248),
(225, 0, 54, 249),
(226, 0, 54, 250),
(227, 0, 54, 251),
(228, 0, 55, 252),
(229, 0, 55, 253),
(230, 0, 55, 254),
(231, 0, 55, 255),
(232, 0, 56, 256),
(233, 0, 56, 257),
(234, 0, 56, 258),
(235, 0, 56, 259),
(236, 0, 57, 260),
(237, 0, 57, 261),
(238, 0, 57, 262),
(239, 0, 57, 263),
(240, 0, 58, 264),
(241, 0, 58, 265),
(242, 0, 58, 266),
(243, 0, 58, 267),
(244, 0, 59, 268),
(245, 0, 59, 269),
(246, 0, 59, 270),
(247, 0, 59, 271),
(248, 0, 60, 272),
(249, 0, 60, 273),
(250, 0, 60, 274),
(251, 0, 60, 275);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sobrenome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urlImagem` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirmed` int(1) DEFAULT NULL COMMENT 'Indica se o usuario confirmou o registro atraves do email enviado',
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Codigo enviado por email ao se cadastrar um novo usuario',
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Funcao "manter conectado"',
  `tipo` int(11) DEFAULT NULL COMMENT '1:Aluno  2:Professor  3:Admin',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=277 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `login`, `password`, `email`, `urlImagem`, `confirmed`, `confirmation_code`, `remember_token`, `tipo`) VALUES
(1, 'Jéssica', 'Matos', '0', '$2y$10$7BNtCzd/agUzhYLi2b1HM.C4A8hiixBvz3tH8uDyPg7khbBfj7pS2', 'jessica.matos@gmail.com', 'img/profile.png', 1, NULL, 'tU9KBDkG59LHj7FPRBfakTY1fBBU6Srk0lKaURBhEOZqr9fG29MPZSPsKHKr', 2),
(2, 'Milena', 'Pádua', 'milena.padua@gmail.com', '$2y$10$lz9jMLszczcUQUCau8ZFgOsciBWHJ5jDmKjO6Y5jCq2z1ZZRs2fEO', 'milena.padua@gmail.com', NULL, 1, NULL, NULL, 2),
(3, 'Sheeva', 'Batista', 'sheeva.batista@gmail.com', '$2y$10$Qd2M3882PkkN5AoXR.yL0eKvVC.fH/5qBEQEnPlePjEqEaMVpcbhq', 'sheeva.batista@gmail.com', NULL, 1, NULL, NULL, 2),
(4, 'Michele', 'Carvalho', 'michele.carvalho@gmail.com', '$2y$10$UFCV2uF1HydXUt.HDsec1efzW85g3rqD9BqeFlo4iBPG3/CUk6xY2', 'michele.carvalho@gmail.com', NULL, 1, NULL, NULL, 2),
(5, 'Lara', 'da Silva', 'lara.da silva@gmail.com', '$2y$10$0pbCrmOycgXhu6eJxOxCUOanE8mmSnwLf2cQoTzpb9fYXP06vpojS', 'lara.da silva@gmail.com', NULL, 1, NULL, NULL, 2),
(6, 'ChunLi', 'Valverde', 'chunli.valverde@gmail.com', '$2y$10$JCOlR/FE9elqqs81R4b9xupG0nLEHGT19.48Er9rWQSS02g270vG.', 'chunli.valverde@gmail.com', NULL, 1, NULL, NULL, 2),
(7, 'Otavio', 'Gouveia', 'otavio.gouveia@gmail.com', '$2y$10$WADWmbnzAEwMp6.yqWa4T.LMTsj70GVnUH6QFUTxNF21xFRX9dDvS', 'otavio.gouveia@gmail.com', NULL, 1, NULL, NULL, 2),
(8, 'Dante', 'Peixoto', 'dante.peixoto@gmail.com', '$2y$10$AIl99wJmgSjfPlKU8ouFKOQ//BrtNwixP.Lf6NcKCDw7EoBpRfBuG', 'dante.peixoto@gmail.com', NULL, 1, NULL, NULL, 2),
(9, 'Doulgas', 'Takahashi', 'doulgas.takahashi@gmail.com', '$2y$10$vZUBkqCMJuBceffbpdaof.AITcr8k9.PSMnht.1oMRaMwOSXY2f5m', 'doulgas.takahashi@gmail.com', NULL, 1, NULL, NULL, 2),
(10, 'Jonas', 'Franca', 'jonas.franca@gmail.com', '$2y$10$N6jiGIuna.yXQVBxbMaGHu5ihEZDyuQGgs1SFDtkK.DcmxxuITKPW', 'jonas.franca@gmail.com', NULL, 1, NULL, NULL, 2),
(11, 'Daniela', 'Leal', 'daniela.leal@gmail.com', '$2y$10$pEfFx0vtA5U9DZ/SUIJuCO.NPK2PifR.OnKFuFg5xpaogORxHXcxS', 'daniela.leal@gmail.com', NULL, 1, NULL, NULL, 2),
(12, 'Aline', 'Hernandes', 'aline.hernandes@gmail.com', '$2y$10$y.uOKqsWvDadQx7IWGkBxOS1MPmiEKSBbrBNsXjpQuRPzIjBXyQPC', 'aline.hernandes@gmail.com', NULL, 1, NULL, NULL, 2),
(13, 'Monica', 'Lins', 'monica.lins@gmail.com', '$2y$10$fK4jGr5jetIlHyjTrDkA/uiy8k0yFJ5Qc.sMQQ37zI9Uidh4dhxJS', 'monica.lins@gmail.com', NULL, 1, NULL, NULL, 2),
(14, 'Leonidas', 'Macedo', 'leonidas.macedo@gmail.com', '$2y$10$mXcMi2BPR.5sL9nuuqK7gO9Hy7B65My4TMTDt3n3eSRopYEOoewVu', 'leonidas.macedo@gmail.com', NULL, 1, NULL, NULL, 2),
(15, 'Morpheu', 'Sato', 'morpheu.sato@gmail.com', '$2y$10$bnxc2b.3574VjCekYpZuH.qiKzAkWbZ8VN135Xsr9dLURUe3oWG5u', 'morpheu.sato@gmail.com', NULL, 1, NULL, NULL, 2),
(16, 'Claudio', 'Tanaka', 'claudio.tanaka@gmail.com', '$2y$10$ZD3K4zluL27sAjF4MG1x5etRF20ms9rIRCQyb6LzAE9su1P9lGgZG', 'claudio.tanaka@gmail.com', NULL, 1, NULL, NULL, 2),
(17, 'Augusto', 'Yamada', 'augusto.yamada@gmail.com', '$2y$10$moFht42S2Qn1jE4lpYwkSOtySN1GlA7tAcJvjVUxa281ddW6txjT2', 'augusto.yamada@gmail.com', NULL, 1, NULL, NULL, 2),
(18, 'Eric', 'Valentine', 'eric.valentine@gmail.com', '$2y$10$AKcB8TuKvfNL5fpWkk5f8.E3epn74zJ6nPLurrjI/fd7u2P5v6gkS', 'eric.valentine@gmail.com', NULL, 1, NULL, NULL, 2),
(19, 'Bruno', 'Villablanca', 'bruno.villablanca@gmail.com', '$2y$10$431UF5PfHdRbONg7TCk0Ge/wKAwkdbSxyChLqkXBSruYVP1WBUl9K', 'bruno.villablanca@gmail.com', NULL, 1, NULL, NULL, 2),
(20, 'Yori', 'Salgueiro', 'yori.salgueiro@gmail.com', '$2y$10$I5cbKJ2xe/p0Fy9iPbM/ROYRQtxoW8TS8wjEdeBSeUAC.vYr0KV0y', 'yori.salgueiro@gmail.com', NULL, 1, NULL, NULL, 2),
(21, 'Angelina', 'Suzuki', 'angelina.suzuki@gmail.com', '$2y$10$fR3qT6EUXeb/RLen1y9K.uxLjiA.2lpc8ygmFqZdhhaTm6mcaOdka', 'angelina.suzuki@gmail.com', NULL, 1, NULL, NULL, 2),
(22, 'Trinity', 'dos Santos', 'trinity.dos santos@gmail.com', '$2y$10$i9Cq6Wec.WQsla4UZJXqfencmxX4T1DMwVZimC0C994RH/kBmzd9K', 'trinity.dos santos@gmail.com', NULL, 1, NULL, NULL, 2),
(23, 'Akemi', 'Costa', 'akemi.costa@gmail.com', '$2y$10$ZMvuv.t3BfT4FTwW92fGFOt3x.GqVacNXeAgCbKOsFiFc6OAansp6', 'akemi.costa@gmail.com', NULL, 1, NULL, NULL, 2),
(24, 'Yoko', 'Rocha', 'yoko.rocha@gmail.com', '$2y$10$8nbhxPCb91SjK6X4jbqF/uX6JYAyTlJVlgilrlFcDgXr5T/yUiwme', 'yoko.rocha@gmail.com', NULL, 1, NULL, NULL, 2),
(25, 'Eduardo', 'Minazuki', '2544', '$2y$10$VhCfvoNxl/uxMhWEK.WcNelGokzc/vfhctkp1VcTfAvMUIbGOH.Xy', 'eduardo.minazuki@gmail.com', NULL, 1, NULL, 'pPxm4WFA7a4A44oOh65zESHV6J1E2UHZyVozaTiQJqzC4eVJpAFEsWbcThK5', 1),
(26, 'Rafaela', 'Ishida', '1926', '$2y$10$zeoOFfaUnB5kRQoEM2uuh.11USq6255ISQh621tMNVANnEcOWfH6.', 'rafaela.ishida@gmail.com', NULL, 1, NULL, NULL, 1),
(27, 'Caio', 'Macedo', '4787', '$2y$10$OAQ2X8hjYVfjxvPYqZUdhO0JKFf9SiNB9yZojDHR.NSAzorFGZ4nC', 'caio.macedo@gmail.com', NULL, 1, NULL, NULL, 1),
(28, 'Kitana', 'Peixoto', '4018', '$2y$10$KwJo5ohxNxtsc8wXCM7r6usluetxBxVOSrKQe5hjoF6hcG9.u1jRG', 'kitana.peixoto@gmail.com', NULL, 1, NULL, NULL, 1),
(29, 'Morpheu', 'Villablanca', '9275', '$2y$10$FEadyWuTELblrIx9plrqmeVlRbaI1HgjbNhr1a3OSOpca436LU87S', 'morpheu.villablanca@gmail.com', NULL, 1, NULL, NULL, 1),
(30, 'Chunli', 'Neves', '5807', '$2y$10$v.olg2wRPK2w2auRWXTmp.LgmfVLMuYyjzg1bEoXx91mU6YZYV/mK', 'chunli.neves@gmail.com', NULL, 1, NULL, NULL, 1),
(31, 'Caroline', 'Neves', '8745', '$2y$10$i01fvEgFGrY27R4SXelrru75vyuyKIxp0bArOi.xWexhvEbPL9QQ.', 'caroline.neves@gmail.com', NULL, 1, NULL, NULL, 1),
(32, 'Caroline', 'da Silva', '5030', '$2y$10$SbNfBrIFTfBUyhDrSeonFu0K6Q.bjHMASCFBrPdA7MLy240Bw8bLe', 'caroline.da silva@gmail.com', NULL, 1, NULL, NULL, 1),
(33, 'Cleber', 'Sato', '8129', '$2y$10$2.dzYLICatbxJ9dl4tgUG.ly/cH//yihbaGH/TQ2VFPEbjVgPUBHG', 'cleber.sato@gmail.com', NULL, 1, NULL, NULL, 1),
(34, 'Irene', 'Salgueiro', '4507', '$2y$10$h3f1WsiYSGMnM0xDejOCo.jsJ3aIgiGIqNCeEx47wu9jZgbH/EprS', 'irene.salgueiro@gmail.com', NULL, 1, NULL, NULL, 1),
(35, 'Filipe', 'Neto', '7502', '$2y$10$NmQBBin/qOjEsvPKzCmrQ.yOXMUYuYyipwJhBmN/gLJXB3vUisw2m', 'filipe.neto@gmail.com', NULL, 1, NULL, NULL, 1),
(36, 'Filipe', 'Nazário', '7508', '$2y$10$DM76EGv8lhk0/X9jpXcOve03L0WfqzK2.9ExDKRcI9EUHohUDMyOS', 'filipe.nazario@gmail.com', NULL, 1, NULL, NULL, 1),
(37, 'Barbara', 'Nazário', '6599', '$2y$10$QcRRmWsCwCXjK2C8v//dyu59MFegk.gVyLK9byohmpNnb9bC/Gb8i', 'barbara.nazario@gmail.com', NULL, 1, NULL, NULL, 1),
(38, 'Sarah', 'Ishida Silva', '6314', '$2y$10$rjXSSvsonEByDLPuRx/i8e0E8YvqeJYgteKBi8B0LMakiBGQxCD7W', 'sarah.ishida silva@gmail.com', NULL, 1, NULL, NULL, 1),
(39, 'Akemi', 'Semedo', '2349', '$2y$10$KI4Jye7NlrNoypIvJdWkIODnJgYDZHo8r3aL.5zy9bkEGx/HhJWVS', 'akemi.semedo@gmail.com', NULL, 1, NULL, NULL, 1),
(40, 'Milena', 'Nazário', '6821', '$2y$10$K/KoPiy42gjShMqHrAJjm.t/2ZX21kua2KaPR9UNwr.3H/gyfk6cy', 'milena.nazario@gmail.com', NULL, 1, NULL, NULL, 1),
(41, 'Milena', 'Castanheira', '3001', '$2y$10$itRSZ5A3lZkdPD0OZaP8seWFE6SwJjg0yk9eQ.ilREqT9zlSs.6ra', 'milena.castanheira@gmail.com', NULL, 1, NULL, NULL, 1),
(42, 'Cleber', 'Freire', '9096', '$2y$10$cKV2WUwu4f7x3ZGLOGwf2OGJyhHFJSeyPu2IYomRSzosfHwR6d64O', 'cleber.freire@gmail.com', NULL, 1, NULL, NULL, 1),
(43, 'Cleber', 'Leal', '3634', '$2y$10$fdj3laPOmK9oA.8E34dC/.xcgYzjE2xHmCTX9crKFsYAgS.MDnFtO', 'cleber.leal@gmail.com', NULL, 1, NULL, NULL, 1),
(44, 'Jonas', 'Nazário', '7255', '$2y$10$zedhgkWiNQm/SGdQAEEWruFS0CQ3PaTi7c1sf4vZVTF1ZbXHdJ1NS', 'jonas.nazario@gmail.com', NULL, 1, NULL, NULL, 1),
(45, 'Filipe', 'Monteiro', '7935', '$2y$10$RtXoG.uKYVDXa1SCaDULI.3c66XZOOray/AHBvFk8xjWi87y4Ofyy', 'filipe.monteiro@gmail.com', NULL, 1, NULL, NULL, 1),
(46, 'Otavio', 'dos Santos', '6521', '$2y$10$pnDjYqdmTeJ8HjaRqzAjH.cHsdzCMQllc6tSbyvlDJOjafahpXLJm', 'otavio.dos santos@gmail.com', NULL, 1, NULL, NULL, 1),
(47, 'Jaime', 'Valverde', '8001', '$2y$10$tE29hCVl0i.o7Nu0RHVfp.c4qNcMIvRZ/OFIB4IkRq5py1pcgkF.q', 'jaime.valverde@gmail.com', NULL, 1, NULL, NULL, 1),
(48, 'Xerxes', 'Rocha', '2734', '$2y$10$Kvmfbnu2MNFnc2067ZUgQuCYLDmr20IGA.xxp/VcfFn7k8oq18.wS', 'xerxes.rocha@gmail.com', NULL, 1, NULL, NULL, 1),
(49, 'Alexandra', 'Pinheiro', '1878', '$2y$10$ZWDzPf3Xet4Zbt70F52J/OeNx25ry0iMZVA8Dvxu/sqh2xfYHSRCm', 'alexandra.pinheiro@gmail.com', NULL, 1, NULL, NULL, 1),
(50, 'Sarah', 'Carvalho', '5117', '$2y$10$yf6kksYm6myunie8H7PNdeD4ok4Df72ycw3yRAPLKOPh8W9HTewFe', 'sarah.carvalho@gmail.com', NULL, 1, NULL, NULL, 1),
(51, 'Sonia', 'Takahashi', '2985', '$2y$10$mvFB5DlOCEkfYfAfDOYrKOcGyCnkYq.mqgKehHuDR79Wmxu7qiHo2', 'sonia.takahashi@gmail.com', NULL, 1, NULL, NULL, 1),
(52, 'Caio', 'Nazário', '1791', '$2y$10$1eTO/XI9vcSyHzFUn9ianeZBKukbwo52fs7WDYqlolkZ2jcNNi1VW', 'caio.nazario@gmail.com', NULL, 1, NULL, NULL, 1),
(53, 'Jaime', 'Takahashi', '4089', '$2y$10$OZp4Nq8HYGjMygBXQmdbXuRK1QIvUnqBqAa5KlCBV99KaVlHrAnIm', 'jaime.takahashi@gmail.com', NULL, 1, NULL, NULL, 1),
(54, 'Akemi', 'Takahashi', '5490', '$2y$10$coX3BFZe9Yjzbazp4/oTXedC3gM2/0hBpf5xaqqNhWGpXaeomVSY2', 'akemi.takahashi@gmail.com', NULL, 1, NULL, NULL, 1),
(55, 'Peterson', 'Torres', '3641', '$2y$10$X4jOdbOpKQrrSLqPrhA2U.s2JpiTXeUl13I7EGCbXI7g/toVJZbae', 'peterson.torres@gmail.com', NULL, 1, NULL, NULL, 1),
(56, 'Simão', 'Alves', '5460', '$2y$10$rKgkLzsk5.SsUr7J0gBJN.TWCwA4hkKzxsNNcFTFZA9tIvvOLm/My', 'simao.alves@gmail.com', NULL, 1, NULL, NULL, 1),
(57, 'Sonia', 'Nazário', '3056', '$2y$10$DXfvPE7XTeM8.wmylKLAcuLs9z76QQlTY8sTr7IdDXqZc0tkUoHI2', 'sonia.nazario@gmail.com', NULL, 1, NULL, NULL, 1),
(58, 'Fernando', 'Hernandes', '8385', '$2y$10$iV1ZCMajVdgJtAw0fM4g7.6u22BmyPEDB4eAW.GL353RMVrNasNUS', 'fernando.hernandes@gmail.com', NULL, 1, NULL, NULL, 1),
(59, 'Claudio', 'Severo', '1487', '$2y$10$rxavZDjaRJkyM3LyB3qFTOwbw2ISVqhOnur8yEf2Wctl.I0ionkBK', 'claudio.severo@gmail.com', NULL, 1, NULL, NULL, 1),
(60, 'Milena', 'Matos', '4196', '$2y$10$WwWqJrKGoFvkcM5ex1SxQ.dVAL8K1BmbnU1O0S13jzJnVom3VYIpC', 'milena.matos@gmail.com', NULL, 1, NULL, NULL, 1),
(61, 'Cauê', 'Carvalho', '7113', '$2y$10$ngKcQX7B2W/MGRJzs0MDr.DLws0eYutjGHvgYFBczCVAttwaLsqNm', 'caue.carvalho@gmail.com', NULL, 1, NULL, NULL, 1),
(62, 'Simão', 'Freire', '1023', '$2y$10$.6X3XnZAu/J/mFr908tbM.7F0ZpFt4gpZHrVXKWE.5Viviuq3AVRS', 'simao.freire@gmail.com', NULL, 1, NULL, NULL, 1),
(63, 'Leonidas', 'Semedo', '1285', '$2y$10$A0rXyQ./c95R9GqPV27hb.J/Pygn3zQj6lPsxGGNFpTR4.whhSoPG', 'leonidas.semedo@gmail.com', NULL, 1, NULL, NULL, 1),
(64, 'Peterson', 'Neto', '1409', '$2y$10$8Xf9kXN1mtGqwmIkBCxSYu2qewK.Txj4YcatT4c9e50vYZrqBQo0i', 'peterson.neto@gmail.com', NULL, 1, NULL, NULL, 1),
(65, 'Fernando', 'Costa', '9516', '$2y$10$DTeUVcyi0PLyO8uQDNxYIulAqkBfoJg7J8quKsYv8o/U/Lt/zbDoy', 'fernando.costa@gmail.com', NULL, 1, NULL, NULL, 1),
(66, 'Andreia', 'Jordão', '6692', '$2y$10$DRtE2E43eC2zBpOt7.4qoOHE6C/eKIGNt29ucY/87X0ZqIIrQAtNu', 'andreia.jordao@gmail.com', NULL, 1, NULL, NULL, 1),
(67, 'Caroline', 'Rocha', '8148', '$2y$10$8cAgoIsI4bahkIbVSpvWfe52OGvb0oLLClKxWQ78yly4CPznajfS6', 'caroline.rocha@gmail.com', NULL, 1, NULL, NULL, 1),
(68, 'Chunli', 'Carvalho', '5932', '$2y$10$Pe5a4baGxIeTOGFOQtSceu64WmAhhmp09ZemqJ.aIXp5tVQL6Gt9a', 'chunli.carvalho@gmail.com', NULL, 1, NULL, NULL, 1),
(69, 'Eric', 'Ishida Silva', '9277', '$2y$10$WaeUqvwcEPhx94ZI7DKVeupwd6rud16E4tmSn9VIJZ0xx2TdvmRzm', 'eric.ishida silva@gmail.com', NULL, 1, NULL, NULL, 1),
(70, 'Akemi', 'Redfield', '7605', '$2y$10$VeAtMlAEi6HMxLq.1FJN/.4578ktywXXz61ICmFR3g.2aLH1ZakYi', 'akemi.redfield@gmail.com', NULL, 1, NULL, NULL, 1),
(71, 'Rafaela', 'Tanaka', '2312', '$2y$10$20x0CsQvK/rJVSxlDarxGucTCnWNbr/Z8qoeMWxP1HCPHpZsxdHBy', 'rafaela.tanaka@gmail.com', NULL, 1, NULL, NULL, 1),
(72, 'Trinity', 'Neto', '4036', '$2y$10$AZSFV1tGbsHNFjY1qFUr8.HVWa/m30Wdeiy50ZsU4lwpv.hqMC3GK', 'trinity.neto@gmail.com', NULL, 1, NULL, NULL, 1),
(73, 'Jéssica', 'Freire', '4663', '$2y$10$96Xo1hTc.r8RvyQ8ugrG0ef26aCPhoTcRZhppfMk3QYAfwLVmV3Bm', 'jessica.freire@gmail.com', NULL, 1, NULL, NULL, 1),
(74, 'Otavio', 'Pádua', '8773', '$2y$10$jwaaubAuvXF7qMoW.EcfMuinq8G2ICTKuQ8k/caSGTj/2TLCAJKoq', 'otavio.padua@gmail.com', NULL, 1, NULL, NULL, 1),
(75, 'Xerxes', 'Matos', '2347', '$2y$10$vv1FTf9k6Ma1MwACGsUdXOj3HXXS92VrtUZ1XcKRusghbHhcJKjCC', 'xerxes.matos@gmail.com', NULL, 1, NULL, NULL, 1),
(76, 'Dante', 'Minazuki', '4867', '$2y$10$V.qszkYZjn3E6RXVAJCWfu9AGK5GUwu24BOdcw.tOTP/UD5TFlOV.', 'dante.minazuki@gmail.com', NULL, 1, NULL, NULL, 1),
(77, 'Milena', 'Batista', '3715', '$2y$10$0500Yp2QVkAdFi0Nd37NFees8syds.xVxBQrKWtCf3.laVN5rJmnC', 'milena.batista@gmail.com', NULL, 1, NULL, NULL, 1),
(78, 'Eric', 'Alves', '9348', '$2y$10$vwhAG1atI9QcYN4qkd0SmeruKBYdD6oMsB2LInFB6IUdN5/6MlqQi', 'eric.alves@gmail.com', NULL, 1, NULL, NULL, 1),
(79, 'Dante', 'Macedo', '4776', '$2y$10$1nBNgRhBMO7UMbxvxHaxlu1b8TrxSjGhKqJspTSHOhXON44FE9GES', 'dante.macedo@gmail.com', NULL, 1, NULL, NULL, 1),
(80, 'Jade', 'Villablanca', '1702', '$2y$10$B2ODweDxUL00kyg.gdlweuVGIZ5bNl5nk1fPSJkFkQ.n/Wqjdpc0K', 'jade.villablanca@gmail.com', NULL, 1, NULL, NULL, 1),
(81, 'Daniela', 'Monteiro', '2722', '$2y$10$cN4l3Lw.19S1pEfSubN3LehEBwiqXO4gWLFQDG7BFg13z.hT.yipC', 'daniela.monteiro@gmail.com', NULL, 1, NULL, NULL, 1),
(82, 'Morpheu', 'Matos', '1501', '$2y$10$shCke7tNG.8hdUJjriBI4O1aqI5x1Ad.IegZwDHIBAwDFrfUAfRay', 'morpheu.matos@gmail.com', NULL, 1, NULL, NULL, 1),
(83, 'Rafaela', 'Alves', '7815', '$2y$10$JPUMS4mnWwWQctBr5dF9mufQrFkvjxBzB2UOQvi30DdpjDOew9vyO', 'rafaela.alves@gmail.com', NULL, 1, NULL, NULL, 1),
(84, 'Fernando', 'Takahashi', '4804', '$2y$10$TwF73H4R3HnVCRs2/yFIvOWF3wzoouJ0KaCWs/41KIAwyhKjQdwQa', 'fernando.takahashi@gmail.com', NULL, 1, NULL, NULL, 1),
(85, 'Jaime', 'Pinheiro', '7148', '$2y$10$ttptGxKhZpRVJ38dHIHpjOums8HsnexVu15.saq7LwUURTOFVjS1u', 'jaime.pinheiro@gmail.com', NULL, 1, NULL, NULL, 1),
(86, 'Xerxes', 'Torres', '4622', '$2y$10$E/q8PAIIMxpW.Bx0RdD2ie14/Bbnbx.Jr7NjpplA.xiH2CcxPBmIG', 'xerxes.torres@gmail.com', NULL, 1, NULL, NULL, 1),
(87, 'Camila', 'dos Santos', '1582', '$2y$10$9gXFSCAydxSDnFfBn99RiusZ9d8dbTidFb0v6D3u27F9bHOtNfKJS', 'camila.dos santos@gmail.com', NULL, 1, NULL, NULL, 1),
(88, 'Bruna', 'Faria', '1365', '$2y$10$ZMhYq2VxATY9i0d/kcSFpOHjMePfZRTART3P.AVh29UcaItK89PPS', 'bruna.faria@gmail.com', NULL, 1, NULL, NULL, 1),
(89, 'Odete', 'Salgueiro', '7025', '$2y$10$D.WLXra9gwf3VqsWCsfLyO.6Z2jZgkC52WsBOpBoHfKnmnODkOIwy', 'odete.salgueiro@gmail.com', NULL, 1, NULL, NULL, 1),
(90, 'Sarah', 'Castanheira', '7617', '$2y$10$aDnNlF9EkvDOHigVYmKsMudL0bg.PTtbjykr0e9IvhrjcEC/I6WpS', 'sarah.castanheira@gmail.com', NULL, 1, NULL, NULL, 1),
(91, 'Doulgas', 'Gouveia', '6606', '$2y$10$oIRQk2y7N8fOJGUXeFaBPOcdzK9VsrW4uQTh4aOLYNwQ6tEV/hE3O', 'doulgas.gouveia@gmail.com', NULL, 1, NULL, NULL, 1),
(92, 'Caio', 'Costa', '9210', '$2y$10$jf7JVu0oJazp46Oxn87SrerCIfz74CoFTZT6krtxzFv3yKrqr0zBO', 'caio.costa@gmail.com', NULL, 1, NULL, NULL, 1),
(93, 'Xerxes', 'Minazuki', '9643', '$2y$10$W88w68/9O82TXrgreE6G2ujqO1gqUTDoEqBD8MIK3j6v/w8BqBZFC', 'xerxes.minazuki@gmail.com', NULL, 1, NULL, NULL, 1),
(94, 'Jade', 'Lopes', '3809', '$2y$10$pUDeqQDDkbwnltcLSpwLwOMMhL6ux3qPnUgZk.oo8S6kVC6d6.Ahe', 'jade.lopes@gmail.com', NULL, 1, NULL, NULL, 1),
(95, 'Dante', 'Camilo', '8586', '$2y$10$.OcV2MQ302FFGNjK5mDS2utaOKueBjF3w4caeRUGstRIswWSm.pda', 'dante.camilo@gmail.com', NULL, 1, NULL, NULL, 1),
(96, 'Akemi', 'Valentine', '2385', '$2y$10$10gIbAxNDZJ./GgvpZXGZulz4viNAyqyYA2an5rtLdA0P4mij5h/2', 'akemi.valentine@gmail.com', NULL, 1, NULL, NULL, 1),
(97, 'Jill', 'Castanheira', '7985', '$2y$10$V/6KVXiuBnsqiljxIlY.NeWOcIbSLZ7SFV09zpyZqjKgnZKk7nfwO', 'jill.castanheira@gmail.com', NULL, 1, NULL, NULL, 1),
(98, 'Trinity', 'Redfield', '8730', '$2y$10$QjLBQNmnZlvcc9C.OwUeCuv4HYrTJJ.m8yRTnhYICj4WbhxJMMfP6', 'trinity.redfield@gmail.com', NULL, 1, NULL, NULL, 1),
(99, 'Sonia', 'Pádua', '8480', '$2y$10$BgSAV/XOo3gqVrX0NtOlsOpCDbHcUz0LbZJSMVqs0T9g9Z4ALOLoa', 'sonia.padua@gmail.com', NULL, 1, NULL, NULL, 1),
(100, 'Augusto', 'Castanheira', '7909', '$2y$10$0FMMuu3FqY8aHs7fSlv5m.cp8Lh2p8nvHXtSEvSvojuVewkzRsG3e', 'augusto.castanheira@gmail.com', NULL, 1, NULL, NULL, 1),
(101, 'Yoko', 'Alves', '7344', '$2y$10$ZZrOJ669ofqefpATPmBxK.tomnozqEqVsHbOZdSq9xFZNHU63/Huq', 'yoko.alves@gmail.com', NULL, 1, NULL, NULL, 1),
(102, 'Michele', 'Macedo', '4368', '$2y$10$FVYvv.5o5FBvTcfqPubvpegZb6ozRsvF.UAEAUG1h1zCktpk9kCQS', 'michele.macedo@gmail.com', NULL, 1, NULL, NULL, 1),
(103, 'Peterson', 'Costa', '9074', '$2y$10$O/bGTG.PvWHklzBn9FsYneUWZT8j5Q.x90J2959gDgPabzjHh7sga', 'peterson.costa@gmail.com', NULL, 1, NULL, NULL, 1),
(104, 'Bruno', 'Monteiro', '6180', '$2y$10$tQLwfS3CT.Y13lh2E8FezOVrXrxatNZSPvZbqXple8Jsqnb35fS4K', 'bruno.monteiro@gmail.com', NULL, 1, NULL, NULL, 1),
(105, 'Jonas', 'Matos', '9653', '$2y$10$sNPs16o3kiSsBr7FdyCBoOl7kAxdyM13b6LHpQNisulM6goagQQru', 'jonas.matos@gmail.com', NULL, 1, NULL, NULL, 1),
(106, 'Jade', 'Franca', '3738', '$2y$10$W85S3BUKfzWIWzjUYSLti.Lp1/pS1K0g8qpidoQG0okmx9a4Gm36q', 'jade.franca@gmail.com', NULL, 1, NULL, NULL, 1),
(107, 'Peterson', 'Redfield', '4685', '$2y$10$XyuXb0mHdlaMxlJ0MWjygO2kex4EQR0/gRCScXDUK2r4i3ZMbqHty', 'peterson.redfield@gmail.com', NULL, 1, NULL, NULL, 1),
(108, 'Filipe', 'Neves', '1458', '$2y$10$bRnMatJVjdX4Q2z.CK6hFubQRr/WYObuclK2XqFQV4UGpXOWb4pEa', 'filipe.neves@gmail.com', NULL, 1, NULL, NULL, 1),
(109, 'Jill', 'dos Santos', '2063', '$2y$10$Qh1KufFTZ7YGxIdhVS.qNex9e8s6t3G1ZaoEzuSi4xG3gv9zWWqc.', 'jill.dos santos@gmail.com', NULL, 1, NULL, NULL, 1),
(110, 'Cauê', 'Minazuki', '1316', '$2y$10$7zykr.CqU6OTDjrtVFWSdOlaWKJrnmCQq9xN49MI2VorJL4aBp1Ui', 'caue.minazuki@gmail.com', NULL, 1, NULL, NULL, 1),
(111, 'Jonas', 'Valentine', '6061', '$2y$10$b0on1ExzPvngaKer2n61AOlFvW5yhiJhXaE/F.s7edKcFU8odBWFm', 'jonas.valentine@gmail.com', NULL, 1, NULL, NULL, 1),
(112, 'Irene', 'Camilo', '6295', '$2y$10$c2AsoUO97nUGXAjY0KXduOPj9k0mvQ38dBK8HitA7F9srocAnyYRq', 'irene.camilo@gmail.com', NULL, 1, NULL, NULL, 1),
(113, 'Doulgas', 'Tanaka', '5337', '$2y$10$fFVRrVpD875EqIuGPgYTC.3PjSptW1ItUF.r8WxZ39vGCbZlbi.hu', 'doulgas.tanaka@gmail.com', NULL, 1, NULL, NULL, 1),
(114, 'Angelina', 'Valentine', '5403', '$2y$10$5hxnT9tP0qngf4q6RocyS.neanSzO1RIHf6SnV6ozLbyr867rn9M2', 'angelina.valentine@gmail.com', NULL, 1, NULL, NULL, 1),
(115, 'Monica', 'Suzuki', '9171', '$2y$10$sCMmNZKhW2HXhwXCsKFcn.YBF9kWLiCPE.ZPkbcODcXy3nhU0I6yW', 'monica.suzuki@gmail.com', NULL, 1, NULL, NULL, 1),
(116, 'Peterson', 'Faria', '3523', '$2y$10$lbtW/E4MRBn6TBT9Nzyx5OLLaxyw3URs73RtPhdXjfIp4kdR4LwpW', 'peterson.faria@gmail.com', NULL, 1, NULL, NULL, 1),
(117, 'Leonidas', 'Severo', '4723', '$2y$10$YkvgkP.SfBYtPkHld84/M.UEzGZQkBkAMuE.qM5cy6EmFyAqJux3O', 'leonidas.severo@gmail.com', NULL, 1, NULL, NULL, 1),
(118, 'Augusto', 'Neto', '8450', '$2y$10$OYJ/uLfnF0JpSaK3SucHlOyEa/Urk/H3F81e3uS7KyQu8yHOvDLjC', 'augusto.neto@gmail.com', NULL, 1, NULL, NULL, 1),
(119, 'Leonidas', 'Nazário', '8261', '$2y$10$IJdCOIeEj53faNVI90kXueICel5kuGiZk5tgtU09pLeMIo6JBDyAa', 'leonidas.nazario@gmail.com', NULL, 1, NULL, NULL, 1),
(120, 'Eric', 'Hernandes', '3519', '$2y$10$caFSJBVb2kU4ZmmSWeJaBeBfcsZENMZ6B.pbk9pI8K87RJLn8k9SS', 'eric.hernandes@gmail.com', NULL, 1, NULL, NULL, 1),
(121, 'Chunli', 'Nazário', '9654', '$2y$10$efS//y5i86XmQ5HhsOEbuOEMT2uu3NmCkpVKYzeQwLv.dlIshcd/C', 'chunli.nazario@gmail.com', NULL, 1, NULL, NULL, 1),
(122, 'Doulgas', 'Castanheira', '9473', '$2y$10$Y7IFdapizLLTZrhwkX.KJ.VqLl288vB4simODZ5biuKbTgWLYnwRq', 'doulgas.castanheira@gmail.com', NULL, 1, NULL, NULL, 1),
(123, 'Jéssica', 'Franca', '2957', '$2y$10$kiuZI7Oj7G4BGzoIResEme9wmCJjU7uZfkix6jn0ueLtANFQfrk9e', 'jessica.franca@gmail.com', NULL, 1, NULL, NULL, 1),
(124, 'Jaime', 'Villablanca', '5694', '$2y$10$Jf/NCFCruYi95o5uu6o12eey.2CtQdqGcWrflmzl55n86AI2lNJeK', 'jaime.villablanca@gmail.com', NULL, 1, NULL, NULL, 1),
(125, 'Peterson', 'Minazuki', '3068', '$2y$10$9hlyICXQUX.wK6yMrwdQeOxy82RAF6dP7oEMYqbE4VP9opkhUL21u', 'peterson.minazuki@gmail.com', NULL, 1, NULL, NULL, 1),
(126, 'Cauê', 'Gomes', '8712', '$2y$10$pprwrCFfvJnYWva7Kz.6XeNz4/v95RCMkKoMjoKquuAXtzHhsym2y', 'caue.gomes@gmail.com', NULL, 1, NULL, NULL, 1),
(127, 'Leonidas', 'Yamada Silva', '8234', '$2y$10$NbxupH6bYXUobGaXzwgqx.vh6s4qQua6TvbG6mDoOe0Kgd87ZLLou', 'leonidas.yamada silva@gmail.com', NULL, 1, NULL, NULL, 1),
(128, 'Leonidas', 'Matos', '3977', '$2y$10$jHPBfZWNVlZTZcQRm5BoR.lBCH9krhHvvUCQR2oZQZinH/GgnWV3G', 'leonidas.matos@gmail.com', NULL, 1, NULL, NULL, 1),
(129, 'Michele', 'Valentine', '5317', '$2y$10$I5TL8guMrCIrzIniRm98EeRpWNsqlRF1/CB7YuOP/bvRX5IlFmFaG', 'michele.valentine@gmail.com', NULL, 1, NULL, NULL, 1),
(130, 'Doulgas', 'Sato', '7146', '$2y$10$pziTpu3GgrrxDu6Pcokvl.z34fmCBcVH6KSSYghpAqZmRDyTlkO3C', 'doulgas.sato@gmail.com', NULL, 1, NULL, NULL, 1),
(131, 'Doulgas', 'Rocha', '3428', '$2y$10$V0AKVeiH7HhJyIltbGHwCeCjgJWjkN.z0lgfrgtFl3v6fnd0rcGPS', 'doulgas.rocha@gmail.com', NULL, 1, NULL, NULL, 1),
(132, 'Dante', 'Lins', '6404', '$2y$10$kDrAve3zpz9hyYwUYXX1cOxc1b6ii.sM.stUnM/IF9..Deaf8AX/u', 'dante.lins@gmail.com', NULL, 1, NULL, NULL, 1),
(133, 'Cauê', 'Takahashi', '3117', '$2y$10$ugm8dTQzwCPhwElKW30Rh.oPBD3Lc2SS79xUnj2k1b0NuF.lvkmp.', 'caue.takahashi@gmail.com', NULL, 1, NULL, NULL, 1),
(134, 'Michele', 'Rocha', '6798', '$2y$10$KWb0/PKkFtlSD.j0SROV4O.eRy2tFS2Y9AnWfnheD1hqXp1hZ5V8q', 'michele.rocha@gmail.com', NULL, 1, NULL, NULL, 1),
(135, 'Tamires', 'Matos', '2909', '$2y$10$4dnnwqKHmbRTnEBxm1vpz.//4f.MBUUXh0RidQJ3k96mQgrypcpe6', 'tamires.matos@gmail.com', NULL, 1, NULL, NULL, 1),
(136, 'Aline', 'Lins', '4774', '$2y$10$whiambXtA2kX190cknzPfu1WSTaPfAI3plL1ehTXTdGucN640xv7K', 'aline.lins@gmail.com', NULL, 1, NULL, NULL, 1),
(137, 'Monica', 'Batista', '3786', '$2y$10$ORLqIzSEdWOl/jLGRSW21u5IHgNTUd1ZJLRTkzwbFnREdfvNsjKHy', 'monica.batista@gmail.com', NULL, 1, NULL, NULL, 1),
(138, 'Caio', 'Hato', '2209', '$2y$10$bILmXGIjLn9IIwwNgxqqE.nFG0g1O.7ZlApLNdkuFyBgVFpihHjqq', 'caio.hato@gmail.com', NULL, 1, NULL, NULL, 1),
(139, 'Eric', 'Sato', '5768', '$2y$10$Qh3/WwJCmSsN3UOqwQNScek/ACW3ayzXhJQXu2xEsQi5MbuEBTO.i', 'eric.sato@gmail.com', NULL, 1, NULL, NULL, 1),
(140, 'Akemi', 'Costa', '1718', '$2y$10$wq8blSjBtClpU2Mt4bHIheI9DgdgQiLISWYqYm55JxBkdr8i7O8WK', 'akemi.costa@gmail.com', NULL, 1, NULL, NULL, 1),
(141, 'Milena', 'Neves', '2721', '$2y$10$hAmq1yubC2zveA2bj9icDOPCOQnBNGyl2nJ0wxOMhrGE3O0Lx4sSG', 'milena.neves@gmail.com', NULL, 1, NULL, NULL, 1),
(142, 'Bruno', 'Semedo', '8182', '$2y$10$wh1vCdx.0jV79Ua7WAABJO.m0YL2LqG5fTR0BRrakfQYOXreju1dW', 'bruno.semedo@gmail.com', NULL, 1, NULL, NULL, 1),
(143, 'Odete', 'dos Santos', '3920', '$2y$10$4oT9GAqUtEe/pY.Yo8/vzeRv547NNoK0KI96waWbmRdlID7kScNoG', 'odete.dos santos@gmail.com', NULL, 1, NULL, NULL, 1),
(144, 'Jaime', 'Nazário', '5097', '$2y$10$KmYKoNsFs60siADfuwdiHup9fr8h41.oIFpEGQ6JfsGiLJO1HCxSq', 'jaime.nazario@gmail.com', NULL, 1, NULL, NULL, 1),
(145, 'Michele', 'Castanheira', '7016', '$2y$10$l2xpEIEzAMUNlNw7XOkbMOFRBkvblH.N9L.L4nRiHIEsTBkZdP.Pa', 'michele.castanheira@gmail.com', NULL, 1, NULL, NULL, 1),
(146, 'Caroline', 'Minazuki', '9003', '$2y$10$TlnBXYcZMrxI9/CzLCEw2O2SXsvVhMUmhjVbd3rgmgQWPbx6jrSWy', 'caroline.minazuki@gmail.com', NULL, 1, NULL, NULL, 1),
(147, 'Sonia', 'Macedo', '5413', '$2y$10$Bkf3vA8ZhLqNWFz9rkcxKezo37f7.p8bjKecTP3RyiNWobIjWiKni', 'sonia.macedo@gmail.com', NULL, 1, NULL, NULL, 1),
(148, 'Kitana', 'Lins', '6896', '$2y$10$QkRkn1BSTEeHn0U0A3fom.zXvRJMJzmBiANdd5TtXLYS9Exco19re', 'kitana.lins@gmail.com', NULL, 1, NULL, NULL, 1),
(149, 'Dante', 'Faria', '9640', '$2y$10$BmyqdroKpyj9Cs19ybhfZOy..KEDTGTyh1UiOkx3S84jCrZ0uN89e', 'dante.faria@gmail.com', NULL, 1, NULL, NULL, 1),
(150, 'Claudio', 'Faria', '3020', '$2y$10$WezVoHhuvLiVs9WH2ccYR.K8hWuRE5f485/UiwvOJ9M2CtAVGZyAK', 'claudio.faria@gmail.com', NULL, 1, NULL, NULL, 1),
(151, 'Sarah', 'Peixoto', '3321', '$2y$10$vFOpkoAEAwZsM7otuazGBu8bDTmsASE8B5sAAVok9FFbq8oe1mVd.', 'sarah.peixoto@gmail.com', NULL, 1, NULL, NULL, 1),
(152, 'Eduardo', 'Pádua', '6752', '$2y$10$OL2KK8eFqSnwek/2vs2qX.Hk66nXkaeFR2Adr6/WFFst3z7/ICBSK', 'eduardo.padua@gmail.com', NULL, 1, NULL, NULL, 1),
(153, 'Otavio', 'Franca', '1639', '$2y$10$BIV0dyYJMl4RErXqLvq.CuR70GK6iJ3B8H6H4D.bwNmGpHpS/Wnv6', 'otavio.franca@gmail.com', NULL, 1, NULL, NULL, 1),
(154, 'Jill', 'Salgueiro', '6610', '$2y$10$LBFLz/iw7iP7lVXZjIxMT.pOAKrQdbAHI8wfBmveBTclC8M7kWIXG', 'jill.salgueiro@gmail.com', NULL, 1, NULL, NULL, 1),
(155, 'Camila', 'Nazário', '9642', '$2y$10$deqnVeOntt09F/2f/iH.duO4e.RelKlLXTGG.nRdXIdvKsxE7QAhO', 'camila.nazario@gmail.com', NULL, 1, NULL, NULL, 1),
(156, 'Camila', 'Lopes', '1631', '$2y$10$SPbbsuCtmvYWrHF97chF7.LivGeLb2J2MHmDXmHPivjT1AzNc8U4K', 'camila.lopes@gmail.com', NULL, 1, NULL, NULL, 1),
(157, 'Lara', 'Nazário', '3116', '$2y$10$qKR/fCwDNbOEeZSUKkiUjuvpcwBPNk2do8OTfELxHLYU.SdLVfJ3G', 'lara.nazario@gmail.com', NULL, 1, NULL, NULL, 1),
(158, 'Andreia', 'Takahashi', '1555', '$2y$10$1lMd3Y9gyddIpe67ucvqwOhUOyTEy2LBhazQTmcGPbuuKclIGssmS', 'andreia.takahashi@gmail.com', NULL, 1, NULL, NULL, 1),
(159, 'Yoko', 'Franca', '6337', '$2y$10$S53xwStJed3dwC5f5XzFRO5HMkTIeYtS8A2FpAZHgEMRyVzW9yPVi', 'yoko.franca@gmail.com', NULL, 1, NULL, NULL, 1),
(160, 'Claudio', 'Nazário', '8110', '$2y$10$B1xkmJ7rs2MXiNtJwybTNe8nF20NfYPsppSvc//mo9C3cdNz0iPB.', 'claudio.nazario@gmail.com', NULL, 1, NULL, NULL, 1),
(161, 'Barbara', 'Tanaka', '9031', '$2y$10$5kQc0eu33k2YetV9SbrwwuDJDItaHAZ7oGL5dPN2R.XvsuTZJOVOy', 'barbara.tanaka@gmail.com', NULL, 1, NULL, NULL, 1),
(162, 'Jonas', 'Lopes', '5607', '$2y$10$l79Z68DiBO.JdVrtHQXo4OM6xErBZPtvVXyYGiwr.NAmeV0Q5iguS', 'jonas.lopes@gmail.com', NULL, 1, NULL, NULL, 1),
(163, 'Fernando', 'Castanheira', '8016', '$2y$10$EVRVak.sq2oVQboXujnwIeqUpTpqs19uUxciu6rLn9c0wy7igeSvy', 'fernando.castanheira@gmail.com', NULL, 1, NULL, NULL, 1),
(164, 'Jade', 'Costa', '9836', '$2y$10$Y7e7przqqoxTxe40314cpeMFoUpqW34/jTSl6jiI52TEvCDfYF09K', 'jade.costa@gmail.com', NULL, 1, NULL, NULL, 1),
(165, 'Peterson', 'Sato', '4785', '$2y$10$r3EkPvbPMQwEP4.Nbrjnf.m0fhTIpNcQYhAY09TQ8BgfXujEmAa72', 'peterson.sato@gmail.com', NULL, 1, NULL, NULL, 1),
(166, 'Dante', 'Lopes', '8571', '$2y$10$IlhSNujJkSrI27FIRrucseW2O4aQDoyoqpv4xBj1NaveFnQi35BJS', 'dante.lopes@gmail.com', NULL, 1, NULL, NULL, 1),
(167, 'Eduardo', 'Freire', '3405', '$2y$10$ySan9EoxePbkSK1kv1Yrm.xqRnVlOMoDU2DPszQZOJaft7hfYZBnu', 'eduardo.freire@gmail.com', NULL, 1, NULL, NULL, 1),
(168, 'Odete', 'Lins', '2620', '$2y$10$XtaMa3iVCcEUoUfmENeNw.bmLSWNmX8niyNiuHydBnNtr1K3jd.t6', 'odete.lins@gmail.com', NULL, 1, NULL, NULL, 1),
(169, 'Simão', 'Franca', '9802', '$2y$10$ZEYJMp/8C/pLCX2P7U7nqOD6kPP/hSc8cRMgSB1eE5phX5K05MryK', 'simao.franca@gmail.com', NULL, 1, NULL, NULL, 1),
(170, 'Yori', 'Yamada Silva', '6767', '$2y$10$5HlZmuKrOoDpyz8deNPCSObHSUlnaxL928N5SnxPkIJdlbCMQmyFm', 'yori.yamada silva@gmail.com', NULL, 1, NULL, NULL, 1),
(171, 'Dante', 'Leal', '9057', '$2y$10$Q.1UA3.FjLS64wymmQ9j5O3j980qK7QUUDoDtou/itta8E.KrmaDe', 'dante.leal@gmail.com', NULL, 1, NULL, NULL, 1),
(172, 'Xerxes', 'Monteiro', '6601', '$2y$10$ZS9NqViC0I7.CPd6Z2bIZOWegWisuLw8mmd7sdM92C3zaSqFC2OhK', 'xerxes.monteiro@gmail.com', NULL, 1, NULL, NULL, 1),
(173, 'Augusto', 'Leal', '7089', '$2y$10$I5CqQ.tox1geBRae.8XYUOHSRvCh4VJc8YhECNoizzmag5QlxI5IC', 'augusto.leal@gmail.com', NULL, 1, NULL, NULL, 1),
(174, 'Simão', 'Pádua', '8707', '$2y$10$41GjL29vzRAsHiMLvhXIReJzHNigSBxQOZunAUYY3La5yAAjOSxCO', 'simao.padua@gmail.com', NULL, 1, NULL, NULL, 1),
(175, 'Cauê', 'dos Santos', '8133', '$2y$10$cM3N/AqmRVDa6Cl2K6HIIeI8AVaRepFcBNq0u3FUS3nj2H6k0HhGe', 'caue.dos santos@gmail.com', NULL, 1, NULL, NULL, 1),
(176, 'Claudio', 'Salgueiro', '1299', '$2y$10$nIYY84wvBuzxaZ8j4BKfUuv0sJ9V6onhAmBtJUE9DkpIPS9w5.0xC', 'claudio.salgueiro@gmail.com', NULL, 1, NULL, NULL, 1),
(177, 'Bruno', 'Redfield', '2484', '$2y$10$x0g7oJ0fcEKDUY2oAKHMbeT/914ztdEv2doEql4dXEnaqn.DZjLSm', 'bruno.redfield@gmail.com', NULL, 1, NULL, NULL, 1),
(178, 'Akemi', 'Hernandes', '2796', '$2y$10$MwLN6sAufkOan2B8zjEglu1eGlIniXGM2KaigzGCSlzp6JxQ4hnny', 'akemi.hernandes@gmail.com', NULL, 1, NULL, NULL, 1),
(179, 'Rafaela', 'Valentine', '8602', '$2y$10$Oc/wPeDxbK86oUA.TZZO9O.mx8FuBqJGxEe/eh5z.vGIErAjrsqaS', 'rafaela.valentine@gmail.com', NULL, 1, NULL, NULL, 1),
(180, 'Sheeva', 'Pádua', '8078', '$2y$10$0m0WYQ4lEnj714p5tewnBOByI8kMszDvou2J9SxIUqdJTD5pbZN9K', 'sheeva.padua@gmail.com', NULL, 1, NULL, NULL, 1),
(181, 'Jade', 'Batista', '5012', '$2y$10$GpQIBltrDYGC.Jf/mgWtM.oZSgSEgEJcdwUKD9eqcnrzEt2/F0pKy', 'jade.batista@gmail.com', NULL, 1, NULL, NULL, 1),
(182, 'Peterson', 'Takahashi', '5062', '$2y$10$KrPsUnFiaSKUNTf2/YDN0u9t6WeFmZArYMPVsWB47IRgaOOPTJuXK', 'peterson.takahashi@gmail.com', NULL, 1, NULL, NULL, 1),
(183, 'Fernanda', 'Yamada Silva', '6325', '$2y$10$9z5/B2JNokahdQL4abqzjenB0mQDbACkSmSjyymuZf0OIEMSB3CMu', 'fernanda.yamada silva@gmail.com', NULL, 1, NULL, NULL, 1),
(184, 'Jill', 'Severo', '2519', '$2y$10$aNIaFpxcjLVsMS/vIYfh9OJEud92wpEwsA/J1CKyXgRYFGRoDKgbq', 'jill.severo@gmail.com', NULL, 1, NULL, NULL, 1),
(185, 'Augusto', 'Valentine', '6575', '$2y$10$xizY.MhlFa7ZeJbgRrGVSOQpjNKapK.N88Dh3dLThPMGPWO2bNo5u', 'augusto.valentine@gmail.com', NULL, 1, NULL, NULL, 1),
(186, 'Filipe', 'Faria', '4226', '$2y$10$i8ebixfhWj4Ia96IuFzY3eMIiFfic8ClqjxicX0tprcZOWS58m7n6', 'filipe.faria@gmail.com', NULL, 1, NULL, NULL, 1),
(187, 'Morpheu', 'Faria', '6371', '$2y$10$8Zzr/BjzZRh8CJYKaAGZbOZeAQUj4KhfaIhsr6ofyIGVGNOGKi7mq', 'morpheu.faria@gmail.com', NULL, 1, NULL, NULL, 1),
(188, 'Cleber', 'Torres', '1142', '$2y$10$QJYuvY1firiRpJLnrLlUMu1nglro3SUL5.Z9lJknoM6wS7o3vOalu', 'cleber.torres@gmail.com', NULL, 1, NULL, NULL, 1),
(189, 'Eduardo', 'Ishida Silva', '1544', '$2y$10$vrntn2QXdvpOElG30xGYVehfTqfjRpYQ0DEbGLtUkkwvsWITaz1Ha', 'eduardo.ishida silva@gmail.com', NULL, 1, NULL, NULL, 1),
(190, 'Angelina', 'Suzuki', '4651', '$2y$10$uRfr8Vmo7SENkSBfRDifLe7GNafeITLQtLeBZvZf..i/lECoZrYza', 'angelina.suzuki@gmail.com', NULL, 1, NULL, NULL, 1),
(191, 'Barbara', 'Rocha', '2968', '$2y$10$v.DwIUMg8gt1h0WMjmLhgex7d/ysYqOamlqcWLi6ShB.DnMI30WOK', 'barbara.rocha@gmail.com', NULL, 1, NULL, NULL, 1),
(192, 'Lara', 'Valentine', '8357', '$2y$10$wFTThiPR809cT1rOQTQou.a.crQ9fLBMBXde049udDp/FbdwS0b3y', 'lara.valentine@gmail.com', NULL, 1, NULL, NULL, 1),
(193, 'Bruno', 'Pádua', '6907', '$2y$10$kHwAAfTDB62SBEAJCWk4Fu21kxfj/8qXPsFXnlHK.GsRJg/LtNYFS', 'bruno.padua@gmail.com', NULL, 1, NULL, NULL, 1),
(194, 'Jade', 'Alves', '4331', '$2y$10$6LnLuEo.m.ZXTQK9J2YQauSvyhRl4QREYW6LMlU4MPrrCMDp04wOi', 'jade.alves@gmail.com', NULL, 1, NULL, NULL, 1),
(195, 'Jonas', 'Faria', '1404', '$2y$10$gGtEV.T/EUcKWGtHYMVUNux8Q12HltfX26ZB3Ebym2exs2aP2yhuK', 'jonas.faria@gmail.com', NULL, 1, NULL, NULL, 1),
(196, 'Fernando', 'Suzuki', '6269', '$2y$10$6NuzJk0DbHQ5wFoSu3Iqc.GIU6ZUI4FQukYalj2.Lxh8Gzqkj61v6', 'fernando.suzuki@gmail.com', NULL, 1, NULL, NULL, 1),
(197, 'Rafaela', 'da Silva', '5591', '$2y$10$.uvp9.i7EBdjDwdvWLwvt.hHbIAVeVP9cEjPbaE2SCiHtnxV50TdC', 'rafaela.da silva@gmail.com', NULL, 1, NULL, NULL, 1),
(198, 'Tamires', 'Faria', '4702', '$2y$10$xUwLGAun8M37WH1TzGzsF.sDwZjolU5RCf8D7U0jCkJBkdkgH9vou', 'tamires.faria@gmail.com', NULL, 1, NULL, NULL, 1),
(199, 'Eric', 'Castanheira', '3458', '$2y$10$Yk3KYIBQRkI24fjCpai/ReNCTm1OCppXHOXgYrC7IPY7ynhSzvffS', 'eric.castanheira@gmail.com', NULL, 1, NULL, NULL, 1),
(200, 'Dante', 'Takahashi', '6963', '$2y$10$QL2n/yNY7.NzWENqAnm.Zu6zrj37ojoVjnd.6wTMDjF..s0HFfRja', 'dante.takahashi@gmail.com', NULL, 1, NULL, NULL, 1),
(201, 'Cleber', 'Peixoto', '5024', '$2y$10$x4kzPMPQ0VgfZWuvrjEWr.FXSL7p8ouY8n8XYzCjdEK6fIxj/oity', 'cleber.peixoto@gmail.com', NULL, 1, NULL, NULL, 1),
(202, 'Caio', 'da Silva', '2128', '$2y$10$8xl0NuGr9UpDLq0hHNdwO.TrkYxnsi9VPzFjaj7cXCVRaK2CEkXES', 'caio.da silva@gmail.com', NULL, 1, NULL, NULL, 1),
(203, 'Kitana', 'Camilo', '1246', '$2y$10$GZq8bszzvcMM.Yeyf6pBEuJOgREagkodTKOKyAtIfjn808FNZun/a', 'kitana.camilo@gmail.com', NULL, 1, NULL, NULL, 1),
(204, 'Yoko', 'Lins', '8183', '$2y$10$Dlp/MDeL/gPGpcqXTalx9.DlQkruYM1MxsJMwop1zDaYH/hjA.of6', 'yoko.lins@gmail.com', NULL, 1, NULL, NULL, 1),
(205, 'Alexandra', 'Torres', '6682', '$2y$10$53UzMrJGU6Sp1iZtxgiZXuDF2GUT5J0Elf2CNEfzEjrk6TRG.Nn6K', 'alexandra.torres@gmail.com', NULL, 1, NULL, NULL, 1),
(206, 'Andreia', 'Monteiro', '8919', '$2y$10$7DlVSlm2DAQhSz5s6C1hqen4q8YaYLzk7VTmpR9HmkLl3De1xuynm', 'andreia.monteiro@gmail.com', NULL, 1, NULL, NULL, 1),
(207, 'Jonas', 'da Silva', '8553', '$2y$10$MK.xgqUQFSPDedJ8JY0O.OlRNXLzgJ/o8KVXS46/wt6h0HeMK0yKu', 'jonas.da silva@gmail.com', NULL, 1, NULL, NULL, 1),
(208, 'Doulgas', 'Monteiro', '1636', '$2y$10$Sn4P.Wyw8qsJwq4hK0uSgOZ8niaK5VlM1Ph7f1D86p48ShpzvHYPS', 'doulgas.monteiro@gmail.com', NULL, 1, NULL, NULL, 1),
(209, 'Sheeva', 'da Mata', '8900', '$2y$10$7KYIFq9l8m.RcrQfH7Naduh1YdVgBxQVdnv//bVPBDukQPyAO3Iam', 'sheeva.da mata@gmail.com', NULL, 1, NULL, NULL, 1),
(210, 'Xerxes', 'Peixoto', '5937', '$2y$10$Fv2n7AlOPsnjqmqYkRgoo.Hdwx1VJhJ4QNHzqSjnpFuoTnREueHOG', 'xerxes.peixoto@gmail.com', NULL, 1, NULL, NULL, 1),
(211, 'Filipe', 'Franca', '3814', '$2y$10$9TN3V/LJvWDHmcpG0W6AEe21EefBuHS6OQWtyyTcOK55VV15Bw8Vu', 'filipe.franca@gmail.com', NULL, 1, NULL, NULL, 1),
(212, 'Aline', 'Neto', '1561', '$2y$10$./7ljpCN/0ofCTFcAtTLMO2xlmkzGZzo2AqTxQ/BeFPB.ngzOfvrC', 'aline.neto@gmail.com', NULL, 1, NULL, NULL, 1),
(213, 'Doulgas', 'Torres', '9245', '$2y$10$KMQsuBDq5v6dt3bmSobfGuwZeGZsYiwaGIpYR1n3.a3CWtsPyB7DK', 'doulgas.torres@gmail.com', NULL, 1, NULL, NULL, 1),
(214, 'Sarah', 'Valverde', '4139', '$2y$10$jSL1sDbDtO03YiJC3gOGE..t7BJwyxJl13dcrjAXbqA1ATuXI.Ycu', 'sarah.valverde@gmail.com', NULL, 1, NULL, NULL, 1),
(215, 'Sheeva', 'Macedo', '5042', '$2y$10$.PnB2yx4WiV7XOid.a4jrep9v/0kkQ.3glX4ZSjsv.kmbGjn.rMd.', 'sheeva.macedo@gmail.com', NULL, 1, NULL, NULL, 1),
(216, 'Andreia', 'Porta', '2550', '$2y$10$Co4CDoGdURc3LLkLeKCE.eVnzUSqUUR2bQ5PLl83n8Ap0DdXSKloC', 'andreia.porta@gmail.com', NULL, 1, NULL, NULL, 1),
(217, 'Chunli', 'Neto', '1121', '$2y$10$U6txU2kxM55sk55yO47m8Ov1rQEB6TXDILJaIz2wRvClYULJvbaAm', 'chunli.neto@gmail.com', NULL, 1, NULL, NULL, 1),
(218, 'Bruno', 'Nazário', '4452', '$2y$10$TaW/n4JahP5qkz0ro2ngaegahiS6idrzbOVbw18DXFNlX3NL7k/ES', 'bruno.nazario@gmail.com', NULL, 1, NULL, NULL, 1),
(219, 'Otavio', 'Monteiro', '9380', '$2y$10$1LxU/HjoWg8ynJDEZvgti.QOk8VJ5nNxH0pyRNgtxmPRv6jxkBJIC', 'otavio.monteiro@gmail.com', NULL, 1, NULL, NULL, 1),
(220, 'Jill', 'Batista', '7210', '$2y$10$Z9eHz0bluHp9bsLgCIYHNuxxgto2wXgHEnGl7nwJP/y/uaofUusfG', 'jill.batista@gmail.com', NULL, 1, NULL, NULL, 1),
(221, 'Filipe', 'Torres', '5163', '$2y$10$CRWpsuHdMbEMHoU1XG2syeqKdwxC2L4BSAm7EeH7ZZCWMesnShtzm', 'filipe.torres@gmail.com', NULL, 1, NULL, NULL, 1),
(222, 'Filipe', 'Ishida Silva', '6095', '$2y$10$gXP5PmgCPcAUveySwq1th.XDmNfqrvgXmt.eJhG8Adks4F.SsTlVm', 'filipe.ishida silva@gmail.com', NULL, 1, NULL, NULL, 1),
(223, 'Xerxes', 'Severo', '9767', '$2y$10$64S7oCinPE3tQSTjdniC0O0rcTdEdr253xfVFP3sUhrTslTroPxhS', 'xerxes.severo@gmail.com', NULL, 1, NULL, NULL, 1),
(224, 'Camila', 'Suzuki', '9138', '$2y$10$KDnD/mH.DsHdaXUdu4eu/OlGKmvIxHqGdVwhe16n6PJbfbpASMMS6', 'camila.suzuki@gmail.com', NULL, 1, NULL, NULL, 1),
(225, 'Fernanda', 'Minazuki', '5181', '$2y$10$DS0s0eoGqKpgQRQtZxH6g.kzqJT/wRJN2nVchWrEKnaurnIYlv5kW', 'fernanda.minazuki@gmail.com', NULL, 1, NULL, NULL, 1),
(226, 'Dante', 'Salgueiro', '5936', '$2y$10$M4I/6kz6gVrT4LR84R4L/.4eo1MRv828RPYtFjLFgThzpoTvuNjBm', 'dante.salgueiro@gmail.com', NULL, 1, NULL, NULL, 1),
(227, 'Doulgas', 'Lopes', '4582', '$2y$10$/Y8OfMLEYrxTYKtpT..Bwe4DZh9EvMvLPAQt2RXAiUq0zIYNSS.Ny', 'doulgas.lopes@gmail.com', NULL, 1, NULL, NULL, 1),
(228, 'Filipe', 'Carvalho', '9826', '$2y$10$Bv0R7ZCajUQzwzUZOei03OBNS02L7.jE7A6kPHboiz151u/c3qtCO', 'filipe.carvalho@gmail.com', NULL, 1, NULL, NULL, 1),
(229, 'Augusto', 'Hernandes', '4376', '$2y$10$r3VAAoGSqKW/kh2EWopjp.LnlkgIihj339okfbAgOHS5Q0mJ1jOVW', 'augusto.hernandes@gmail.com', NULL, 1, NULL, NULL, 1),
(230, 'Doulgas', 'Yamada Silva', '4975', '$2y$10$eq6cqTka9DIaeaelaPIx8e1UX0pcxcaAtRvW0m8gUZl0YwK8OAHqO', 'doulgas.yamada silva@gmail.com', NULL, 1, NULL, NULL, 1),
(231, 'Caio', 'Leal', '3997', '$2y$10$yybuEOr2dznUVB.Zy9zHl.am6KFxKjvmmzwj/3X173o9FbPMvwKZa', 'caio.leal@gmail.com', NULL, 1, NULL, NULL, 1),
(232, 'Angelina', 'Batista', '7101', '$2y$10$U5bzotzs1rTE43LZYme5CeOYH0G66M44hpDOAEPJ4x2aKhE2O4Vzy', 'angelina.batista@gmail.com', NULL, 1, NULL, NULL, 1),
(233, 'Cauê', 'Sato', '5086', '$2y$10$Yj6xnl9jf0ptivVfL9iVs.Z.pidRB6WqcRJgKKmLA4fLUNlhDAet2', 'caue.sato@gmail.com', NULL, 1, NULL, NULL, 1),
(234, 'Trinity', 'Minazuki', '6591', '$2y$10$vIMWlop8yszG4sQ6Q/gj3OW0s8zhrB74SpXuTVZ9SXV8ex4iXNtxW', 'trinity.minazuki@gmail.com', NULL, 1, NULL, NULL, 1),
(235, 'Filipe', 'Macedo', '6623', '$2y$10$xHhVRj8KfYMEBUvsbvUEIuHETNX8sBBn3Wnz3z05/UDECAgxdSxpC', 'filipe.macedo@gmail.com', NULL, 1, NULL, NULL, 1),
(236, 'Morpheu', 'Peixoto', '8609', '$2y$10$PXd3rEhm74VTII2dPLk8sOLr2rYFkGo5zyCOFY.KZuKAkt7c9yIwi', 'morpheu.peixoto@gmail.com', NULL, 1, NULL, NULL, 1),
(237, 'Caroline', 'Franca', '8020', '$2y$10$oGPjG7wcNmMbrZSUT3UAnepebKN2hIHZuwlDVYL3R5TLF7zJXSUtW', 'caroline.franca@gmail.com', NULL, 1, NULL, NULL, 1),
(238, 'Fernando', 'Alves', '9819', '$2y$10$qc40fAzQioXZ6trNdnD7.OX/JaMseWXYJsb/kBm0fDhCk4cDcqME.', 'fernando.alves@gmail.com', NULL, 1, NULL, NULL, 1),
(239, 'Cleber', 'Franca', '8269', '$2y$10$uoYrLysWqNybdXPo8PB2hOu6LJmysU8YboigVYnsgf36yiKxJtsOu', 'cleber.franca@gmail.com', NULL, 1, NULL, NULL, 1),
(240, 'Cleber', 'Matos', '5026', '$2y$10$GgEAgLOU2CTTWrQd72sO4ukYdrFU6DmqtJgwwADHmUpJ95mnm7rXu', 'cleber.matos@gmail.com', NULL, 1, NULL, NULL, 1),
(241, 'Dante', 'Peixoto', '8592', '$2y$10$Sm.Z6txTbwWEnWlU1T7./Ox96hioV/DElePVDFQVP41Wv2NzjKDZO', 'dante.peixoto@gmail.com', NULL, 1, NULL, NULL, 1),
(242, 'Leonidas', 'Hernandes', '2274', '$2y$10$gMzHM5h3tTrfbgknAjRcxOc3.X4p6P/t36aUNepeKBvJj8XsUa40m', 'leonidas.hernandes@gmail.com', NULL, 1, NULL, NULL, 1),
(243, 'Otavio', 'Alves', '6710', '$2y$10$tpB/eZ8EOHHnCqGvw0yJiuNBIHFJhWfu/.VHjqPibuTkykpeG1CHC', 'otavio.alves@gmail.com', NULL, 1, NULL, NULL, 1),
(244, 'Yoko', 'Valverde', '2271', '$2y$10$3zb3jhBcY0QtVYl.QGKbxuqT.YcPZHVsa3mnslfb0TYl8IxF3Vd5e', 'yoko.valverde@gmail.com', NULL, 1, NULL, NULL, 1),
(245, 'Alexandra', 'Takahashi', '4791', '$2y$10$dqzkSh1mchfK1SwAKwuPvOfPJmJ7vR5i6TE/BZqACJBsjEnvPNxea', 'alexandra.takahashi@gmail.com', NULL, 1, NULL, NULL, 1),
(246, 'Dante', 'Tanaka', '9449', '$2y$10$DmguYgUIxwIP8.7/AOA2buw4TedlWidlktyo8kTjNBDz84C5z2MHu', 'dante.tanaka@gmail.com', NULL, 1, NULL, NULL, 1),
(247, 'Cleber', 'Valverde', '5698', '$2y$10$oMxocRX9arACRr.iYYYdrOVKc5mDlcxvIUF084TUrJYS8p3Fw97uy', 'cleber.valverde@gmail.com', NULL, 1, NULL, NULL, 1),
(248, 'Caroline', 'Takahashi', '3118', '$2y$10$a25NAlbhar7qR27q4sbRHO3JU9M.ewj8IqHyqvJxTr06QO.g0nwMi', 'caroline.takahashi@gmail.com', NULL, 1, NULL, NULL, 1),
(249, 'Jill', 'Takahashi', '7352', '$2y$10$A/jRmxVoBi9XvHWqm67BqekCTXO1SOXHDLUfySMoi1TvBGfCgKhBK', 'jill.takahashi@gmail.com', NULL, 1, NULL, NULL, 1),
(250, 'Peterson', 'Alves', '8084', '$2y$10$8UXtUud3ZeRWi9CNNpjyB.mII3mdQTuxhLpfn5E1V31x1/7vIg8gS', 'peterson.alves@gmail.com', NULL, 1, NULL, NULL, 1),
(251, 'Filipe', 'Tanaka', '5381', '$2y$10$EtZLQi61gmOtInjCG98zJu7G7LIr2sRhE3/jGIV7i8dlSYkHeu9ti', 'filipe.tanaka@gmail.com', NULL, 1, NULL, NULL, 1),
(252, 'Fernanda', 'Camilo', '8926', '$2y$10$mhSt6BYIdEGwrIG6ggX/Gu0h8624tVEskCyCKj/M9BWCgHHEKOGJS', 'fernanda.camilo@gmail.com', NULL, 1, NULL, NULL, 1),
(253, 'Odete', 'Carvalho', '1947', '$2y$10$E0.8/8bkb7alsmXCQIuOpeAhKeKflmfYNL2fqRDsALA3/c1Ik62f.', 'odete.carvalho@gmail.com', NULL, 1, NULL, NULL, 1),
(254, 'Xerxes', 'Costa', '1104', '$2y$10$ZbFsS/zFn2QKpSRK36o.D.20HJ0q1MDy5.1h8v/CMSddK/vOfkv1C', 'xerxes.costa@gmail.com', NULL, 1, NULL, NULL, 1),
(255, 'Cleber', 'Augusto', '8212', '$2y$10$W5H1Pq1IhwOILsIXCnwl4.N2gMeN9nJbTfqIDqbB0JDlBEUOmTrOG', 'cleber.augusto@gmail.com', NULL, 1, NULL, NULL, 1),
(256, 'Michele', 'Yamada Silva', '2899', '$2y$10$.3Oj/B9XprKhbUtusjGKsugYkr1K4tFhngU4tkTm1qLUFd8tnWHSi', 'michele.yamada silva@gmail.com', NULL, 1, NULL, NULL, 1),
(257, 'Alexandra', 'Vieira', '4459', '$2y$10$K7MZUgYGJiYMVFsx4y/GFOMIkWh2Cr6EGmrVdrYZL0Bi0UxAV3Mku', 'alexandra.vieira@gmail.com', NULL, 1, NULL, NULL, 1),
(258, 'Camila', 'Alves', '6302', '$2y$10$PMwhTb8se2jOEgPyDLjHtOSQPhtn3hmimHOE7XHpYwCgY0CHxk3Yq', 'camila.alves@gmail.com', NULL, 1, NULL, NULL, 1),
(259, 'Michele', 'Redfield', '6237', '$2y$10$MzQ3lQ3KyIBi7XbmFjcOiOEUGrV1t07Fbw5CdQcqyPicO8dbO7AkC', 'michele.redfield@gmail.com', NULL, 1, NULL, NULL, 1),
(260, 'Jonas', 'Batista', '6223', '$2y$10$uP2s0ZSCdOAqNX91a.jWbedrjRPSGc1isvwaTNnMBFqd4eHLc8f.G', 'jonas.batista@gmail.com', NULL, 1, NULL, NULL, 1),
(261, 'Fernanda', 'Carvalho', '2963', '$2y$10$AEz6.daY/39Ho0jyzLCnMOA4HfVppKLpbblH2Idtm7VkRlY0kTD16', 'fernanda.carvalho@gmail.com', NULL, 1, NULL, NULL, 1),
(262, 'Otavio', 'Sato', '6039', '$2y$10$mvPHH.CH/PTPad7U2CWgP.W5f/P3ikV2P8Q.QeO4ZBNYhLl7e6PKG', 'otavio.sato@gmail.com', NULL, 1, NULL, NULL, 1),
(263, 'Rafaela', 'Ishida Silva', '1004', '$2y$10$S7blVYsIvYE1IM1CMX0QouTQVwn39U6QmC47Zd7FZtU.SJ8Jj0NYe', 'rafaela.ishida silva@gmail.com', NULL, 1, NULL, NULL, 1),
(264, 'Kitana', 'Sato', '5283', '$2y$10$Axtbq5yEbBipl9/bnLRqq.sbxNmwhD7eQwlAF8qxlKDXXHMiS/0Va', 'kitana.sato@gmail.com', NULL, 1, NULL, NULL, 1),
(265, 'Sheeva', 'Jordão', '5424', '$2y$10$agxezhHZd2bfchDktPmX1u2i8T6ASb6nvJ7wpz6kwOQT96nKVptBS', 'sheeva.jordao@gmail.com', NULL, 1, NULL, NULL, 1),
(266, 'Cauê', 'da Silva', '1880', '$2y$10$EnO/xL84A60Ex731.1OVSOe3X9JiqPNpl07RAoZJBFRN2PcRpyBa2', 'caue.da silva@gmail.com', NULL, 1, NULL, NULL, 1),
(267, 'Michele', 'Franca', '3716', '$2y$10$oSu2zxyHqtu..2RATQ9Xp.oM4VukOwglRHnk2gj7aleRHQJN2j6mS', 'michele.franca@gmail.com', NULL, 1, NULL, NULL, 1),
(268, 'Irene', 'Takahashi', '3728', '$2y$10$ehg1DzQsqL.o1cKWS5XZR.lbzQL8NG3gbdmLqDAtJkJpCVjNumG8O', 'irene.takahashi@gmail.com', NULL, 1, NULL, NULL, 1),
(269, 'Andreia', 'Gouveia', '1535', '$2y$10$yER8fXpRcoic5eSJe6TGzOnNDedELnmnf71nWHEn.THWE97HGqJAO', 'andreia.gouveia@gmail.com', NULL, 1, NULL, NULL, 1),
(270, 'Dante', 'Hernandes', '6032', '$2y$10$GPIeHSAPlnnlrkSM.G16WO6mPODb9FKJuoF9Ru3k9nekyiy.ogYxe', 'dante.hernandes@gmail.com', NULL, 1, NULL, NULL, 1),
(271, 'Trinity', 'Macedo', '8418', '$2y$10$gUc.90uuyXA.XX95vqh5wOQUQv0l7VCxPC01K/vGGytFeoEm8b2qC', 'trinity.macedo@gmail.com', NULL, 1, NULL, NULL, 1),
(272, 'Jade', 'Freire', '6184', '$2y$10$3idxspUf2KfPRsB0gR86fO53pqUQhASQ8GM7eqZVoaeC9H/18/.om', 'jade.freire@gmail.com', NULL, 1, NULL, NULL, 1),
(273, 'Caio', 'Pádua', '5265', '$2y$10$ElkOhy.E3GiMOaYxHndsuOLrn.qYy556RC1A2HAD.S8dFKeuArwyi', 'caio.padua@gmail.com', NULL, 1, NULL, NULL, 1),
(274, 'Doulgas', 'Faria', '4367', '$2y$10$/n/FuIs64P2PX119NORrpujOVzyh.Lg44GldMIUsRo6hUvbzjgLhG', 'doulgas.faria@gmail.com', NULL, 1, NULL, NULL, 1),
(275, 'Akemi', 'Matos', '3344', '$2y$10$Ro9nWC5Wqh.kFUjZE.Uq7.9cV13hjUUCfFS20I5OM24lcd07YhX6K', 'akemi.matos@gmail.com', NULL, 1, NULL, NULL, 1),
(276, 'Administrador 1', NULL, '789', '$2y$10$c1yRwXmMnVEEWIiHotmCROsvhE1xJJ/Vx.l5g3CiRx8YhbYkLqiUa', NULL, NULL, 1, NULL, 'dm9vpfHM5Z7Or5nN73fFtUg7nd6384dylFtrWO7kZZdpvei7bvWh11rQxZ4q', 3);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `acessosatividades`
--
ALTER TABLE `acessosatividades`
  ADD CONSTRAINT `acessosatividades_ibfk_1` FOREIGN KEY (`idAluno`) REFERENCES `alunos` (`id`),
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
  ADD CONSTRAINT `avisos_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`),
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
