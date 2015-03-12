-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Fev-2015 às 19:12
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kalangov2.1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessos`
--

CREATE TABLE IF NOT EXISTS `acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idAluno` int(11) DEFAULT NULL,
  `idAula` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idAluno` (`idAluno`),
  KEY `idAula` (`idAula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codRegistro` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `administradores`
--

INSERT INTO `administradores` (`id`, `codRegistro`) VALUES
(1, 123456);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` int(11) DEFAULT NULL,
  `sobreMim` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urlImagem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dataNascimento` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dataVencimentoBoleto` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `matricula`, `sobreMim`, `urlImagem`, `dataNascimento`, `dataVencimentoBoleto`) VALUES
(1, 123456, 'Olá, sou o Aluno 1 de são paulo e estou estudando no kalango para conhecer pessoas que possam ajudar e queiram contribuir para o aprendizado do inglês.', 'img/camisasantos.png', '17/01/1993', '08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividadesextras`
--

CREATE TABLE IF NOT EXISTS `atividadesextras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urlImagem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idCurso` int(11) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idCurso` (`idCurso`),
  KEY `idCategoria` (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `aulas`
--

INSERT INTO `aulas` (`id`, `titulo`, `idModulo`) VALUES
(1, 'Introdução', 1),
(2, 'Aula 1', 1),
(3, 'Aula 2', 1),
(4, 'Aula 3', 1),
(5, 'Aula 4', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idioma` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`, `descricao`, `idioma`) VALUES
(1, 'Teens', 'Fazendo o Teen Course você será capaz de, já ao término do primeiro semestre, cumprimentar as pessoas, desculpar-se, pagar e falar sobre dinheiro (notas e moedas), entre várias outros temas. Ao final do curso você será capaz de se comunicar com total fluência com falantes nativos, usando o idioma de forma natural e eficaz', 'Inglês'),
(2, 'Adulto', 'Com o Adult Course você vai estar pronto para conquistar o mundo. Ao final do curso, além de dominar as 4 habilidades: ouvir, falar, ler e escrever, você vai se sair bem em qualquer situação como, por exemplo: Desafios da vida profissional, como reuniões, entrevistas e apresentações em inglês. Interação com pessoas de outros países de forma natural, seja ao vivo ou no mundo virtual', 'Inglês'),
(3, 'Kids', 'Seu filho vai aprender inglês de forma natural e prazerosa. E, ao final do curso, ele conseguirá usar o que aprendeu no para se garantir em situações como: Pedir e dar informações pessoais e de localização, Expressar opiniões, Falar sobre a natureza, esportes, profissões e muito mais!', 'Inglês');

-- --------------------------------------------------------

--
-- Estrutura da tabela `exercicios`
--

CREATE TABLE IF NOT EXISTS `exercicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `idAtividadesExtras` int(11) DEFAULT NULL,
  `idAula` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idAtividadesExtras` (`idAtividadesExtras`),
  KEY `idAula` (`idAula`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `exercicios`
--

INSERT INTO `exercicios` (`id`, `nome`, `descricao`, `tipo`, `idAtividadesExtras`, `idAula`) VALUES
(1, 'Quiz - como se apresentar', 'Aprenda como se apresentar em inglês', 1, NULL, 1),
(2, 'Quiz - Present Perfect', 'Aprenda o básico do present perfect', 1, NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `materialapoio`
--

CREATE TABLE IF NOT EXISTS `materialapoio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idAula` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idAula` (`idAula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `modulos`
--

CREATE TABLE IF NOT EXISTS `modulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idCurso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idCurso` (`idCurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `modulos`
--

INSERT INTO `modulos` (`id`, `nome`, `descricao`, `idCurso`) VALUES
(1, 'Módulo 1 - The basics', 'Neste módulo o aluno é apresentado ao novo idioma, e então é dado os primeiros passos no aprendizado da língua.', 1),
(2, 'Módulo 2 - Improving Vocabulary', 'Este módulo é voltado para a prática do conteúdo do módulo anterior junto com a ampliação do vocabulário, para assim fixar melhor o conteúdo.', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE IF NOT EXISTS `professores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codRegistro` int(11) DEFAULT NULL,
  `sobreMim` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urlImagem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `formacaoAcademica` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`id`, `codRegistro`, `sobreMim`, `urlImagem`, `formacaoAcademica`) VALUES
(2, 123456, 'Olá, sou professor de inglês do kalango e estou aqui para ajudar a todos os alunos a ter um bom resultado no aprendizado da nova língua. Dou aulas às segundas, quartas e sextas.\r\n\r\nFiquem livre para me contatar caso tenham dúvidas', NULL, 'Pedagogia - USP, Pós em línguas - Mackenzie');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questaomultiplaescolha`
--

CREATE TABLE IF NOT EXISTS `questaomultiplaescolha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urlMidia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alternativaA` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alternativaB` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alternativaC` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alternativaD` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `respostaCerta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoria` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '"Pergunta-Resposta": Audio-Audio(3-3), Imagem-Audio(2-3), Texto-Imagem(1-2),1-Texto,2-Imagem,3-Audio',
  `idExercicio` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idExercicio` (`idExercicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questaorespostaunica`
--

CREATE TABLE IF NOT EXISTS `questaorespostaunica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urlMidia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `respostaCerta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoria` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Tipo Pergunta: 1-Texto,2-Imagem,3-Audio',
  `idExercicio` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idExercicio` (`idExercicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostasmultiplaescolha`
--

CREATE TABLE IF NOT EXISTS `respostasmultiplaescolha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nota` float DEFAULT NULL,
  `idAluno` int(11) DEFAULT NULL,
  `idQuestao` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idAluno` (`idAluno`),
  KEY `idQuestao` (`idQuestao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostasrespostaunica`
--

CREATE TABLE IF NOT EXISTS `respostasrespostaunica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urlOuTextoResposta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nota` float DEFAULT NULL,
  `idAluno` int(11) DEFAULT NULL,
  `idQuestao` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idAluno` (`idAluno`),
  KEY `idQuestao` (`idQuestao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacaodeavaliacaorespostaunica`
--

CREATE TABLE IF NOT EXISTS `solicitacaodeavaliacaorespostaunica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `feedbackProfessor` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `idQuestaoRespostaUnica` int(11) DEFAULT NULL,
  `idQuestaoMultiplaEscolha` int(11) DEFAULT NULL,
  `idAluno` int(11) DEFAULT NULL,
  `idProfessor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idQuestaoRespostaUnica` (`idQuestaoRespostaUnica`),
  KEY `idQuestaoMultiplaEscolha` (`idQuestaoMultiplaEscolha`),
  KEY `idAluno` (`idAluno`),
  KEY `idProfessor` (`idProfessor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE IF NOT EXISTS `turmas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idModulo` int(11) DEFAULT NULL,
  `idProfessor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idModulo` (`idModulo`),
  KEY `idProfessor` (`idProfessor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `nome`, `idModulo`, `idProfessor`) VALUES
(1, 'M1-SQ-01', 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmasalunos`
--

CREATE TABLE IF NOT EXISTS `turmasalunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idTurma` int(11) DEFAULT NULL,
  `idAluno` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idTurma` (`idTurma`),
  KEY `idAluno` (`idAluno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `turmasalunos`
--

INSERT INTO `turmasalunos` (`id`, `idTurma`, `idAluno`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sobrenome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `respostaSecreta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urlImagem` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` int(10) DEFAULT NULL COMMENT '1 - Aluno   2 - Professor  3 - Admin',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `username`, `password`, `email`, `respostaSecreta`, `urlImagem`, `remember_token`, `tipo`) VALUES
(1, 'Filipe', 'Valentin', '123456', '$2y$10$HoHEtOHjLytwvw8AtfOO5.TCumjdSP8Mch79CDjd5VT9ZrLcKs3gS', 'filipethesnake2@gmail.com', 'Super macaco', 'img/camisasantos.png', 'NBhQQKN6mPQmtCAfb2kpvaQB2vT23aw9GAVb6RN3O95iIoXMalWh1oMGseiv', 1),
(2, 'Caio', 'Cavalcante', '1234567', '123456', 'filipethesnake2@gmail.com', 'super macaco', '', NULL, 3);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `acessos`
--
ALTER TABLE `acessos`
  ADD CONSTRAINT `acessos_ibfk_1` FOREIGN KEY (`idAluno`) REFERENCES `alunos` (`id`),
  ADD CONSTRAINT `acessos_ibfk_2` FOREIGN KEY (`idAula`) REFERENCES `aulas` (`id`);

--
-- Limitadores para a tabela `atividadesextras`
--
ALTER TABLE `atividadesextras`
  ADD CONSTRAINT `atividadesextras_ibfk_1` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`id`),
  ADD CONSTRAINT `atividadesextras_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`id`);

--
-- Limitadores para a tabela `aulas`
--
ALTER TABLE `aulas`
  ADD CONSTRAINT `aulas_ibfk_1` FOREIGN KEY (`idModulo`) REFERENCES `modulos` (`id`);

--
-- Limitadores para a tabela `exercicios`
--
ALTER TABLE `exercicios`
  ADD CONSTRAINT `exercicios_ibfk_1` FOREIGN KEY (`idAtividadesExtras`) REFERENCES `atividadesextras` (`id`),
  ADD CONSTRAINT `exercicios_ibfk_2` FOREIGN KEY (`idAula`) REFERENCES `aulas` (`id`);

--
-- Limitadores para a tabela `materialapoio`
--
ALTER TABLE `materialapoio`
  ADD CONSTRAINT `materialapoio_ibfk_1` FOREIGN KEY (`idAula`) REFERENCES `aulas` (`id`);

--
-- Limitadores para a tabela `modulos`
--
ALTER TABLE `modulos`
  ADD CONSTRAINT `modulos_ibfk_1` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`id`);

--
-- Limitadores para a tabela `questaomultiplaescolha`
--
ALTER TABLE `questaomultiplaescolha`
  ADD CONSTRAINT `questaomultiplaescolha_ibfk_1` FOREIGN KEY (`idExercicio`) REFERENCES `exercicios` (`id`);

--
-- Limitadores para a tabela `questaorespostaunica`
--
ALTER TABLE `questaorespostaunica`
  ADD CONSTRAINT `questaorespostaunica_ibfk_1` FOREIGN KEY (`idExercicio`) REFERENCES `exercicios` (`id`);

--
-- Limitadores para a tabela `respostasmultiplaescolha`
--
ALTER TABLE `respostasmultiplaescolha`
  ADD CONSTRAINT `respostasmultiplaescolha_ibfk_1` FOREIGN KEY (`idAluno`) REFERENCES `alunos` (`id`),
  ADD CONSTRAINT `respostasmultiplaescolha_ibfk_2` FOREIGN KEY (`idQuestao`) REFERENCES `questaomultiplaescolha` (`id`);

--
-- Limitadores para a tabela `respostasrespostaunica`
--
ALTER TABLE `respostasrespostaunica`
  ADD CONSTRAINT `respostasrespostaunica_ibfk_1` FOREIGN KEY (`idAluno`) REFERENCES `alunos` (`id`),
  ADD CONSTRAINT `respostasrespostaunica_ibfk_2` FOREIGN KEY (`idQuestao`) REFERENCES `questaorespostaunica` (`id`);

--
-- Limitadores para a tabela `solicitacaodeavaliacaorespostaunica`
--
ALTER TABLE `solicitacaodeavaliacaorespostaunica`
  ADD CONSTRAINT `solicitacaodeavaliacaorespostaunica_ibfk_1` FOREIGN KEY (`idQuestaoRespostaUnica`) REFERENCES `questaorespostaunica` (`id`),
  ADD CONSTRAINT `solicitacaodeavaliacaorespostaunica_ibfk_2` FOREIGN KEY (`idQuestaoMultiplaEscolha`) REFERENCES `questaomultiplaescolha` (`id`),
  ADD CONSTRAINT `solicitacaodeavaliacaorespostaunica_ibfk_3` FOREIGN KEY (`idAluno`) REFERENCES `alunos` (`id`),
  ADD CONSTRAINT `solicitacaodeavaliacaorespostaunica_ibfk_4` FOREIGN KEY (`idProfessor`) REFERENCES `professores` (`id`);

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
