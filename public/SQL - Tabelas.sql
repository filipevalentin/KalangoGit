create database kalangov2.1;

use kalangov2.1;

create table usuarios(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(255),
	sobrenome varchar(255),
	username varchar(255),
	password varchar(255),
	email varchar(255),
	respostaSecreta varchar(255),
	urlImagem varchar(500),
<<<<<<< HEAD
	confirmed int(1),
	confirmation_code varchar(255),
	tipo int(11) COMMENT '1 - Aluno  2 - Professor  3 - Admin'
=======
	remember_token varchar(255), /* Laravel: Usado para permanecer logado */
	tipo int(11) /* 1 - Aluno  2 - Professor  3 - Admin */
>>>>>>> parent of 93dc774... Atualização Para o novo banco
);

create table alunos(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	matricula int(11),
	sobreMim varchar(1000),
	urlImagem varchar(255),
	dataNascimento varchar(10),
	dataVencimentoBoleto varchar(10)

);

create table administradores(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	codRegistro int(11)
);

create table professores(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	codRegistro int(11),
	sobreMim varchar(1000),
	urlImagem varchar(255),
	formacaoAcademica varchar(255)

);

create table cursos(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(255),
	descricao varchar(1000),
	idioma varchar(100)
);

create table modulos(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(255),
	descricao varchar(1000),
	idCurso int(11),
	CONSTRAINT FOREIGN KEY(idCurso) REFERENCES cursos(id)
);

create table turmas(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(255),
	idModulo int(11),
	CONSTRAINT FOREIGN KEY(idModulo) REFERENCES modulos(id),
	idProfessor int(11),
	CONSTRAINT FOREIGN KEY(idProfessor) REFERENCES professores(id)
);

create table categorias(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(255)
);

create table atividadesExtras(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	titulo varchar(255),
	descricao varchar(255),
	urlImagem varchar(255),
	idCurso int(11),
	CONSTRAINT FOREIGN KEY(idCurso) REFERENCES cursos(id),
	idCategoria int(11),
	CONSTRAINT FOREIGN KEY(idCategoria) REFERENCES categorias(id)

);

create table aulas(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
<<<<<<< HEAD
	nome varchar(255),
	tipo int(1) COMMENT '1: Conteudo de aula, 2: extra',
	status int(1) COMMENT '0: inativo, 1:ativo',
	idAula int(11),
	CONSTRAINT FOREIGN KEY(idAula) REFERENCES aulas(id),
	idCategoria int(11),
	CONSTRAINT FOREIGN KEY(idCategoria) REFERENCES categorias(id),
	idModulo int(11),
	CONSTRAINT FOREIGN KEY(idModulo) REFERENCES modulos(id),
	idUsuario int(11),
	CONSTRAINT FOREIGN KEY(idUsuario) REFERENCES usuarios(id)

=======
	titulo varchar(255),
	idModulo int(11),
	CONSTRAINT FOREIGN KEY(idModulo) REFERENCES modulos(id)
>>>>>>> parent of 93dc774... Atualização Para o novo banco
);

create table materialApoio(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(255),
	descricao varchar(255),
	url varchar(255),
	idAula int(11),
	CONSTRAINT FOREIGN KEY(idAula) REFERENCES aulas(id));

create table exercicios(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(255),
<<<<<<< HEAD
	idUsuario int(11),
	FOREIGN KEY (idUsuario) REFERENCES usuarios(id)
=======
	descricao varchar(255),
	tipo int(11),  /* 1 - Quiz   Obs:Por enquanto só existe um tipo: "quiz"*/
	idAtividadesExtras int,
	CONSTRAINT FOREIGN KEY(idAtividadesExtras) REFERENCES atividadesExtras(id),
	idAula int,
	CONSTRAINT FOREIGN KEY(idAula) REFERENCES aulas(id)
>>>>>>> parent of 93dc774... Atualização Para o novo banco
);

/* outros tipos de exercicios aqui ! */
/* Nesse SQL exercicio não é uma superEntidade (pai) ela se relaciona diretamente com questão Mult Escolha e Resp Unica! */

create table questaoMultiplaEscolha(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
<<<<<<< HEAD
	textoPergunta varchar(255),
	urlMidia varchar(255),
	numero int(10) COMMENT 'indica a posicao/ordem da questao dentro de uma atividade',
	tipo int(1) COMMENT '1-Multipla Escolha, 2-Dissertativa',
	categoria int(2) COMMENT '1:texto, 2:imagem, 3:audio - Mult.Esc:2 digitos (pergunta/resposta: 12 = texto/imagem)',
=======
	titulo varchar(255),
	urlMidia varchar(255),
>>>>>>> parent of 93dc774... Atualização Para o novo banco
	alternativaA varchar(255),
	alternativaB varchar(255),
	alternativaC varchar(255),
	alternativaD varchar(255),
	respostaCerta varchar(255),
<<<<<<< HEAD
	pontos int(10),
	idAtividade int(11),
	CONSTRAINT FOREIGN KEY(idAtividade) REFERENCES atividades(id),
	idTopico int(11),
	CONSTRAINT FOREIGN KEY(idTopico) REFERENCES topicos(id)
);

create table mensagens(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	titulo varchar(255),
	conteudo varchar(1500),
	lida int(1),
	data varchar(20),
	idUsuarioOrigem int(11),
	FOREIGN KEY (idUsuarioOrigem) REFERENCES usuarios(id),
	idUsuarioDestino int(11),
	FOREIGN KEY (idUsuarioDestino) REFERENCES usuarios(id),
	idRE int(11),
	FOREIGN KEY (idRE) REFERENCES mensagens(id)
);

create table avisos(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	titulo varchar(100),
	urlImagem varchar(255),
	dataExpiracao varchar(8),
	idUsuario int(11),
	FOREIGN KEY (idUsuario) REFERENCES usuarios(id)
=======
	categoria varchar(70), /*("Pergunta-Resposta": Audio-Audio, Imagem-Audio, Texto-Imagem, etc....)*/
	idExercicio int(11),
	CONSTRAINT FOREIGN KEY(idExercicio) REFERENCES exercicios(id)
>>>>>>> parent of 93dc774... Atualização Para o novo banco
);

create table questaoRespostaUnica(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
<<<<<<< HEAD
	titulo varchar(100),
	imagem1 varchar(255),
	imagem2 varchar(255),
	imagem3 varchar(255),
	imagem4 varchar(255),
	imagem5 varchar(255),
	idUsuario int(11),
	FOREIGN KEY (idUsuario) REFERENCES usuarios(id)
=======
	titulo varchar(255),
	urlMidia varchar(255),
	respostaCerta varchar(255),
	categoria varchar(70), /*("Pergunta-Resposta": Audio-Audio, Imagem-Audio, Texto-Imagem, etc....)*/
	idExercicio int(11),
	CONSTRAINT FOREIGN KEY(idExercicio) REFERENCES exercicios(id)
>>>>>>> parent of 93dc774... Atualização Para o novo banco
);

/* Relacionamentos N-N */

create table acessos(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	data varchar(10),
	idAluno int(11),
	CONSTRAINT FOREIGN KEY(idAluno) REFERENCES alunos(id),
	idAula int(11),
	CONSTRAINT FOREIGN KEY(idAula) REFERENCES aulas(id)
);

create table turmasAlunos(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	idTurma int(11),
	CONSTRAINT FOREIGN KEY(idTurma) REFERENCES turmas(id),
	idAluno int(11),
	CONSTRAINT FOREIGN KEY(idAluno) REFERENCES alunos(id)
);

create table respostasMultiplaEscolha(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nota float(2.2),
	idAluno int(11),
	CONSTRAINT FOREIGN KEY(idAluno) REFERENCES alunos(id),
	idQuestao int(11),
	CONSTRAINT FOREIGN KEY(idQuestao) REFERENCES questaoMultiplaEscolha(id)
);

create table respostasRespostaUnica(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	urlOuTextoResposta varchar(255),  /*para casos de resposta escrita pelo usuário e que ele tenha pedido avaliação, será necessário ter a resposta que foi submetida */
	nota float(2.2),
	idAluno int(11),
	CONSTRAINT FOREIGN KEY(idAluno) REFERENCES alunos(id),
	idQuestao int(11),
	CONSTRAINT FOREIGN KEY(idQuestao) REFERENCES questaoRespostaUnica(id)
);


/* 22/Nov/14 - este relacionamento não esta no MER */
create table solicitacaoDeAvaliacaoRespostaUnica(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	data varchar(10),
	feedbackProfessor varchar(1000),
	status int(1), /* 1 - atendida  / 0 - Ñ atendida */
	idQuestaoRespostaUnica int(11),
	CONSTRAINT FOREIGN KEY(idQuestaoRespostaUnica) REFERENCES questaoRespostaUnica(id),
	idQuestaoMultiplaEscolha int(11),
	CONSTRAINT FOREIGN KEY(idQuestaoMultiplaEscolha) REFERENCES questaoMultiplaEscolha(id),
	idAluno int(11),
	CONSTRAINT FOREIGN KEY(idAluno) REFERENCES alunos(id),
	idProfessor int(11),
	CONSTRAINT FOREIGN KEY(idProfessor) REFERENCES professores(id)
);

-- INSERTS

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `matricula`, `sobreMim`, `urlImagem`, `dataNascimento`, `dataVencimentoBoleto`) VALUES
(1, 123456, 'Olá, sou o Aluno 1 de são paulo e estou estudando no kalango para conhecer pessoas que possam ajudar e queiram contribuir para o aprendizado do inglês', NULL, '17/01/1990', '08');


--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`, `descricao`) VALUES
(1, 'Teens', 'Fazendo o Teen Course você será capaz de, já ao término do primeiro semestre, cumprimentar as pessoas, desculpar-se, pagar e falar sobre dinheiro (notas e moedas), entre várias outros temas. Ao final do curso você será capaz de se comunicar com total fluência com falantes nativos, usando o idioma de forma natural e eficaz'),
(2, 'Adulto', 'Com o Adult Course você vai estar pronto para conquistar o mundo. Ao final do curso, além de dominar as 4 habilidades: ouvir, falar, ler e escrever, você vai se sair bem em qualquer situação como, por exemplo: Desafios da vida profissional, como reuniões, entrevistas e apresentações em inglês. Interação com pessoas de outros países de forma natural, seja ao vivo ou no mundo virtual'),
(3, 'Kids', 'Seu filho vai aprender inglês de forma natural e prazerosa. E, ao final do curso, ele conseguirá usar o que aprendeu no para se garantir em situações como: Pedir e dar informações pessoais e de localização, Expressar opiniões, Falar sobre a natureza, esportes, profissões e muito mais!');

--
-- Extraindo dados da tabela `modulos`
--

INSERT INTO `modulos` (`id`, `nome`, `descricao`, `idCurso`) VALUES
(1, 'Módulo 1 - The basics', 'Neste módulo o aluno é apresentado ao novo idioma, e então é dado os primeiros passos no aprendizado da língua.', 1),
(2, 'Módulo 2 - Improving Vocabulary', 'Este módulo é voltado para a prática do conteúdo do módulo anterior junto com a ampliação do vocabulário, para assim fixar melhor o conteúdo.', 1);

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`id`, `codRegistro`, `sobreMim`, `urlImagem`, `formacaoAcademica`) VALUES
(2, 123456, 'Olá, sou professor de inglês do kalango e estou aqui para ajudar a todos os alunos a ter um bom resultado no aprendizado da nova língua. Dou aulas às segundas, quartas e sextas.\r\n\r\nFiquem livre para me contatar caso tenham dúvidas', NULL, 'Pedagogia - USP, Pós em línguas - Mackenzie');


--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `nome`, `idModulo`, `idProfessor`) VALUES
(1, 'M1-SQ-01', 1, 2);

--
-- Extraindo dados da tabela `turmasalunos`
--

INSERT INTO `turmasalunos` (`id`, `idTurma`, `idAluno`) VALUES
(1, 1, 1);

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `login`, `senha`, `email`, `respostaSecreta`, `tipo`) VALUES
(1, 'Aluno', '1', '123456', '123456', 'filipethesnake2@gmail.com', 'Super macaco', 1),
(2, 'Caio', 'Cavalcante', '123456', '123456', 'filipethesnake2@gmail.com', 'super macaco', 2);
