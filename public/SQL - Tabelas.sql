
create table usuarios(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(255),
	sobrenome varchar(255),
	login varchar(255),
	password varchar(255),
	email varchar(255),
	urlImagem varchar(500),
	confirmed int(1),
	confirmation_code varchar(255),
	tipo int(11) COMMENT '1 - Aluno  2 - Professor  3 - Admin'
);

create table alunos(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	matricula int(11),
	sobreMim varchar(1000),
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
	formacaoAcademica varchar(255)

);

create table idiomas(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(255)
);

create table cursos(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(255),
	idIdioma int(1)
);

create table modulos(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(255),
	idCurso int(11),
	CONSTRAINT FOREIGN KEY(idCurso) REFERENCES cursos(id)
);

create table turmas(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(255),
	status int(1) COMMENT '0:Turma fechada/modulo concluido  1: Turma ativa/Alunos com aula',
	idModulo int(11),
	CONSTRAINT FOREIGN KEY(idModulo) REFERENCES modulos(id),
	idProfessor int(11),
	CONSTRAINT FOREIGN KEY(idProfessor) REFERENCES professores(id)
);

create table categorias(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(255)
);

create table aulas(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	titulo varchar(255),
	idModulo int(11),
	CONSTRAINT FOREIGN KEY(idModulo) REFERENCES modulos(id)
);

create table atividades(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
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

);

create table materialapoio(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(255),
	url varchar(255),
	idAula int(11),
	CONSTRAINT FOREIGN KEY(idAula) REFERENCES aulas(id)
);

create table topicos(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(255),
	idUsuario int(11),
	FOREIGN KEY (idUsuario) REFERENCES usuarios(id)
);


create table questoes(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	textoPergunta varchar(255),
	urlMidia varchar(255),
	numero int(10) COMMENT 'indica a posicao/ordem da questao dentro de uma atividade',
	tipo int(1) COMMENT '1-Multipla Escolha, 2-Dissertativa',
	categoria int(2) COMMENT '1:texto, 2:imagem, 3:audio - Mult.Esc:2 digitos (pergunta/resposta: 12 = texto/imagem)',
	alternativaA varchar(255),
	alternativaB varchar(255),
	alternativaC varchar(255),
	alternativaD varchar(255),
	respostaCerta varchar(255),
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
);

create table propagandas(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	titulo varchar(100),
	imagem1 varchar(255),
	imagem2 varchar(255),
	imagem3 varchar(255),
	imagem4 varchar(255),
	imagem5 varchar(255),
	idUsuario int(11),
	FOREIGN KEY (idUsuario) REFERENCES usuarios(id)
);

/* Relacionamentos N-N */

create table acessosatividades(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	status int(1) COMMENT '0: Iniciado, 1: Concluído',
	idAluno int(11),
	CONSTRAINT FOREIGN KEY(idAluno) REFERENCES alunos(id),
	idQuestao int(11) COMMENT 'Indica qual questao o aluno parou',
	CONSTRAINT FOREIGN KEY(idQuestao) REFERENCES questoes(id),
	idAtividade int(11),
	CONSTRAINT FOREIGN KEY (idAtividade) REFERENCES atividades(id)
);

create table turmasalunos(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	pontuacao int(10),
	idTurma int(11),
	CONSTRAINT FOREIGN KEY(idTurma) REFERENCES turmas(id),
	idAluno int(11),
	CONSTRAINT FOREIGN KEY(idAluno) REFERENCES alunos(id)
);

create table respostas(
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	respostaAluno varchar(100),
	correcao int(1) COMMENT '0: errou, 1: acertou',
	idAluno int(11),
	CONSTRAINT FOREIGN KEY(idAluno) REFERENCES alunos(id),
	idQuestao int(11),
	CONSTRAINT FOREIGN KEY(idQuestao) REFERENCES questoes(id)
);

-- Laravel

create table password_reminders(
	email varchar(255) NOT NULL,
	token varchar(255) NOT NULL,
	created_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  	KEY password_reminders_email_index (`email`),
  	KEY password_reminders_token_index (`token`)
);


-- INSERTS
