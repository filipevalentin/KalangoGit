create database KalanGO;

use KalanGO;

/* R1 - ENTIDADES */
create table usuarios(
	id							int(11)						auto_increment,
	constraint PK_idUsuar		primary key(id),
	nome 						varchar(255)				not null,
	sobrenome 					varchar(255)				not null,
	login 						varchar(50)					null,
	password 					varchar(255)				null,
	email 						varchar(255)				not null,
	urlImagem					varchar(500)				null,
	confirmed 					int(1)						not null		COMMENT 'Indica se o usuario confirmou o registro atraves do email enviado',
	confirmation_code 			varchar(255)				not null		COMMENT 'Codigo enviado por email ao se cadastrar um novo usuario',
	remember_token 				varchar(255)				not null		COMMENT 'Funcao "manter conectado"',
	tipo 						int(11)						not null 		COMMENT '1:Aluno  2:Professor  3:Admin',
	deleted_at					date						null			default null
);

create table idiomas(
	id							int(11)						auto_increment,
	constraint PK_idIdioma		primary key(id),
	nome 						varchar(255)				not null,
	deleted_at					date						null			default null
);

create table categorias(
	id							int(11)						auto_increment,
	constraint PK_idCategoria	primary key(id),
	nome 						varchar(255)				not null COMMENT 'Categoria serve para separar as Atividades Extras em grupos, como Atividades de: Reforço, Halloween, Past Perfect, etc...',
	deleted_at					date						null			default null
);

create table empresas(
	id							int(11)						auto_increment,
	constraint PK_idEmpresa		primary key(id),
	cnpj						int(15),
	constraint UK_Cnpj			unique(cnpj),		
	nome						varchar(255)				not null,
	razaoSocial					varchar(255)				not null,
	constraint UK_razaoSocial  	unique(razaoSocial)
);

create table topicos(
	id							int(11)						auto_increment,
	constraint PK_Topico		primary key(id),
	nome 						varchar(255)				not null,
	constraint UK_nomeTopico	unique(nome),
	deleted_at					date						null			default null
);

/* R3 - ESPECIALIZAÇÃO/GENERALIZAÇÃO */
create table alunos(
	id							int(11),
	constraint PK_idAluno		primary key(id),
	matricula 					int(11)						not null,
	sobreMim 					varchar(1000)				null,
	dataNascimento 				date						not null,
	dataVencimentoBoleto 		varchar(10)					not null,
	constraint CK_VenctoBoleto	check(dataVencimentoBoleto > 0 AND dataVencimentoBoleto < 29),
	deleted_at					date						null			default null
);

create table administradores(
	id							int(11),
	constraint PK_idAdmin		primary key(id),
	codRegistro 				int(11)						not null,
	cargo						varchar(100)				null,
	deleted_at					date						null			default null
);

create table professores(
	id							int(11),
	constraint PK_idProf		primary key(id),
	REProf 						int(11)						not null,
	ExperienciaProfissional 	varchar(1000)				null,
	formacaoAcademica 			varchar(255)				null,
	deleted_at					date						null			default null
);

/* R5 - RELACIONAMENTO 1:N */
create table cursos(
	id							int(11)						auto_increment,
	constraint PK_idCurso		primary key(id),
	nome 						varchar(255)				not null,
	idIdioma 					int(11)						null,
	constraint FK_idIdiomaCurso foreign key(idIdioma) 		references idiomas(id),
	deleted_at					date						null			default null
);

create table modulos(
	id							int(11)						auto_increment,
	constraint PK_idModulo		primary key(id),
	nome 						varchar(255)				not null,
	idCurso 					int(11)						null,
	constraint FK_idCurso		foreign key(idCurso) 		references cursos(id),
	deleted_at					date						null			default null
);

create table turmas(
	id							int(11)						auto_increment,
	constraint PK_idTurma		primary key(id),
	nome 						varchar(255)				not null,
	status 						int(1)						not null COMMENT '0:Turma fechada/modulo concluido  1: Turma ativa/Alunos com aula',
	constraint CK_status		check(status in (0,1)),
	idModulo 					int(11)						null,
	constraint FK_idModuloTurma	foreign key(idModulo) 		references modulos(id),
	idProfessor 				int(11)						null,
	constraint FK_idProfessor	foreign key(idProfessor)	references professores(id),
	deleted_at					date						null			default null
);

create table aulas(
	id							int(11)						auto_increment,
	constraint PK_Aula			primary key(id),
	titulo 						varchar(255)				not null,
	idModulo 					int(11)						null,
	constraint FK_idModuloAula	foreign key(idModulo) 		references modulos(id),
	deleted_at					date						null			default null
);

create table atividades(
	id							int(11)						auto_increment,
	constraint PK_Atividade		primary key(id),
	nome 						varchar(255)				not null,
	tipo 						int(1)						not null	COMMENT '1: Conteudo de aula, 2: ativ. extra',
	constraint CK_tipo			check(tipo in (1,2)),
	idAula 						int(11)						null		COMMENT 'Só haverá valor nesse atributo caso a atividade seja do tipo 1 - Conteudo de aula, do contrário será null',
	constraint FK_idAulaAtiv	foreign key(idAula) 		references aulas(id),
	idCategoria 				int(11)						null,
	constraint FK_idCategAtiv	foreign key(idCategoria) 	references categorias(id),
	idModulo 					int(11)						null		COMMENT 'Só haverá valor nesse atributo caso a atividade seja do tipo 2 - ativ extra, do contrário será null',
	constraint FK_idModuloAtiv	foreign key(idModulo) 		references modulos(id),
	idUsuario 					int(11)						null		COMMENT 'Professor (apenas atividades extras) ou admin que criou a atividade',
	constraint FK_idUsuarioAtiv	foreign key(idUsuario) 		references usuarios(id),
	DataElaboracao				date						not null,
	status						int(1)						null,
	constraint CK_statusAtiv	check(status in (0,1)),
	deleted_at					date						null			default null
);

create table questoes(
	id							int(11)						auto_increment,
	constraint PK_Questao		primary key(id),
	enunciado 					varchar(255)				not null,
	urlMidia 					varchar(255)				null,
	numero 						int(10)						null		COMMENT 'indica a posicao/ordem da questao dentro de uma atividade',
	tipo 						int(1)						null		COMMENT '1-Multipla Escolha, 2-Dissertativa',
	constraint CK_tipoQuestao	check(tipo in (1,2)),
	categoria 					int(2)						null		COMMENT '1:texto, 2:imagem, 3:audio - 2 digitos (pergunta/resposta: 12 = texto/imagem) Dissertativa: 3 = reconhecimento de voz',
	alternativaA				varchar(255)				null,
	alternativaB				varchar(255)				null,
	alternativaC				varchar(255)				null,
	alternativaD				varchar(255)				null,
	respostaCerta 				varchar(255)				null,
	pontos 						int(10)						null,
	idAtividade 				int(11)						null,
	constraint FK_idAtivQuestao	foreign key(idAtividade) 	references atividades(id),
	idTopico 					int(11)						null,
	constraint FK_idTopicoQuest	foreign key(idTopico) 		references topicos(id),
	deleted_at					date						null			default null
);

create table mensagens(
	id							int(11)						auto_increment,
	constraint PK_Mensagem		primary key(id),
	titulo 						varchar(255)				null,
	conteudo 					varchar(1500)				null,		
	lida 						int(1)						null,
	data 						date						not null,
	idUsuarioOrigem 			int(11)						null,
	constraint FK_idUsuarOrig	foreign key(idUsuarioOrigem) references usuarios(id),
	idUsuarioDestino 			int(11)						null,
	constraint FK_idUsuarDest	foreign key(idUsuarioDestino) references usuarios(id),
	idRE 						int(11)						null		COMMENT 'Indica o id da mensagem em resposta, caso exista', 
	constraint FK_idRE			foreign key(idRE) 			references mensagens(id)
);

create table avisos(
	id							int(11)						auto_increment,
	constraint PK_Aviso			primary key(id),
	titulo 						varchar(100)				not null,
	descricao 					varchar(500)				not null,
	urlImagem 					varchar(255)				null,
	dataExpiracao 				date						not null,
	idAdmin 					int(11)						not null,
	constraint FK_idAdminAviso	foreign key(idAdmin) 		references administradores(id)
);

create table propagandas(
	id							int(11)						auto_increment,
	constraint PK_Propaganda	primary key(id),
	titulo 						varchar(100)				not null,
	urlImagem					varchar(255)				not null,
	link 						varchar(350)				null,
	idEmpresa					int(11)						null,
	constraint FK_cnpjEmpresa	foreign key(idEmpresa)		references empresas(id),
	idUsuario 					int(11)						null,
	constraint FK_idUsuarProp	foreign key(idUsuario) 		references administradores(id)
);

create table materialapoio(
	id							int(11)						auto_increment,
	constraint PK_MaterialApoio	primary key(id),
	nome 						varchar(255)				not null,
	url 						varchar(255)				null,
	tipo						int(1)						null,
	idAula						int(11)						null,
	constraint FK_idAulaMat		foreign key(idAula)			references aulas(id)
);

/* R6 - RELACIONAMENTOS N-N */

create table avisosturmas(
	id 							int(11) 					auto_increment,
	constraint PK_idAvisoTurmas	primary key(id),
	idAviso						int(11),
	constraint FK_idAvisoTurma	foreign key(idAviso)		references avisos(id),
	idTurma						int(11),
	constraint FK_idTurmaAviso	foreign key(idTurma)		references turmas(id),
	constraint UK_idAvisoTurmas	unique(idAviso ,idTurma),
	dataAviso					date						not null
);

create table acessosatividades(
	id 							int(11) 					auto_increment,
	constraint PK_AcessosAtivi	primary key(id),
	idAluno 					int(11),
	constraint FK_idAlunoAcesso foreign key(idAluno)		references alunos(id),
	idAtividade 				int(11),
	constraint FK_idAtiviAcesso foreign key(idAtividade)	references atividades(id),
	constraint UK_AcessoAtivi	unique(idAluno, idAtividade),
	idQuestao 					int(11)						not null	COMMENT 'Indica qual questao o aluno parou, não é FK, pois ela indica o número da posição da questao',
	status 						int(1)						not null	COMMENT '0: Iniciado, 1: Concluído',
	constraint CK_statusAcesso	check(status in (0,1)),
	DataAcesso					date						not null
);

create table turmasalunos(
	id 							int(11) 					auto_increment,
	constraint PK_TurmasAlunos	primary key(id),
	idTurma 					int(11),
	constraint FK_idTurmaAluno	foreign key(idTurma)		references turmas(id),
	idAluno 					int(11),
	constraint FK_idAlunoTurma	foreign key(idAluno)		references alunos(id),
	constraint UK_TurmasAlunos	unique(idTurma, idAluno),
	pontuacao 					int(10)						not null COMMENT 'contabiliza os pontos adquiridos pelo aluno numa turma, é necessário para fazer o ranking do dashboard, e evitar que seja calculado o total de pontos toda vez que alguem acessar o dashboard, melhorando o desempenho'
);

create table respostas(
	id 							int(11) 					auto_increment,
	constraint PK_Respostas		primary key(id),
	idAluno 					int(11),
	constraint FK_idAlunoResp	foreign key(idAluno)		references alunos(id),
	idQuestao 					int(11),
	constraint FK_idQuestResp	foreign key(idQuestao)		references questoes(id),
	constraint UK_Respostas		unique(idAluno, idQuestao),
	respostaAluno 				varchar(100)				null,
	correcao 					int(1)						not null 					COMMENT '0: errou, 1: acertou',
	constraint CK_correcao		check(correcao in (0,1))
);

/* R8 - RELACIONAMENTO ENÁRIO */
create table contrata(
	idCurso						 int(11),
	constraint FK_idTCursoCtrata foreign key(idCurso)		references cursos(id),
	idTurma						 int(11),
	constraint FK_idTurmaCtrata	 foreign key(idTurma)		references turmas(id),
	idAluno						 int(11),
	constraint FK_idAlunoCtrata	 foreign key(idAluno)		references alunos(id),
	constraint PK_CursoTurmaAlu  primary key(idCurso,idTurma,idAluno),
	dtContratacao				 date						not null
);

-- Laravel

-- Tabela que faz controle dos tokens e envios de emails para recuperar a senha definindo uma nova

create table password_reminders(
	email varchar(255) NOT NULL,
	token varchar(255) NOT NULL,
	created_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  	KEY password_reminders_email_index (`email`),
  	KEY password_reminders_token_index (`token`)
);
