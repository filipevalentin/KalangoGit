<?php 

class AlunoSeeder extends Seeder{

	public function conf_code(){
		$confirmation_code = str_random(30);
		foreach(User::all() as $u){
			if($u->confirmation_code = $confirmation_code){
				$confirmation_code = str_random(30);
			}
		}
		return $confirmation_code;
	}

	public function run(){
		Eloquent::unguard();

		$user = User::create(array(
		  'nome' => 'Eduardo',
		  'sobrenome' => 'Minazuki',
		  'login' => '2544',
		 'password' => Hash::make('2544'),
		  'email' => 'eduardo.minazuki@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '39543',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(1);
		$user = User::create(array(
		  'nome' => 'Rafaela',
		  'sobrenome' => 'Ishida',
		  'login' => '1926',
		 'password' => Hash::make('1926'),
		  'email' => 'rafaela.ishida@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Rafaela, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '39633',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(1);
		$user = User::create(array(
		  'nome' => 'Caio',
		  'sobrenome' => 'Macedo',
		  'login' => '4787',
		 'password' => Hash::make('4787'),
		  'email' => 'caio.macedo@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '39620',
		'dataVencimentoBoleto' => '11'
		));
		$user->aluno->turmas()->attach(1);
		$user = User::create(array(
		  'nome' => 'Kitana',
		  'sobrenome' => 'Peixoto',
		  'login' => '4018',
		 'password' => Hash::make('4018'),
		  'email' => 'kitana.peixoto@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '39291',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(1);
		$user = User::create(array(
		  'nome' => 'Morpheu',
		  'sobrenome' => 'Villablanca',
		  'login' => '9275',
		 'password' => Hash::make('9275'),
		  'email' => 'morpheu.villablanca@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '39807',
		'dataVencimentoBoleto' => '01'
		));
		$user->aluno->turmas()->attach(1);
		$user = User::create(array(
		  'nome' => 'Chunli',
		  'sobrenome' => 'Neves',
		  'login' => '5807',
		 'password' => Hash::make('5807'),
		  'email' => 'chunli.neves@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a ChunLi e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '38804',
		'dataVencimentoBoleto' => '06'
		));
		$user->aluno->turmas()->attach(1);
		$user = User::create(array(
		  'nome' => 'Caroline',
		  'sobrenome' => 'Neves',
		  'login' => '8745',
		 'password' => Hash::make('8745'),
		  'email' => 'caroline.neves@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou a Caroline e amo assistir tv, séries e filmes',
		 'dataNascimento' => '38463',
		'dataVencimentoBoleto' => '08'
		));
		$user->aluno->turmas()->attach(2);
		$user = User::create(array(
		  'nome' => 'Caroline',
		  'sobrenome' => 'da Silva',
		  'login' => '5030',
		 'password' => Hash::make('5030'),
		  'email' => 'caroline.da silva@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '39293',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(2);
		$user = User::create(array(
		  'nome' => 'Cleber',
		  'sobrenome' => 'Sato',
		  'login' => '8129',
		 'password' => Hash::make('8129'),
		  'email' => 'cleber.sato@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Cleber e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '39807',
		'dataVencimentoBoleto' => '07'
		));
		$user->aluno->turmas()->attach(2);
		$user = User::create(array(
		  'nome' => 'Irene',
		  'sobrenome' => 'Salgueiro',
		  'login' => '4507',
		 'password' => Hash::make('4507'),
		  'email' => 'irene.salgueiro@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Irene e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '39723',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(2);
		$user = User::create(array(
		  'nome' => 'Filipe',
		  'sobrenome' => 'Neto',
		  'login' => '7502',
		 'password' => Hash::make('7502'),
		  'email' => 'filipe.neto@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Filipe, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '39223',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(2);
		$user = User::create(array(
		  'nome' => 'Filipe',
		  'sobrenome' => 'Nazário',
		  'login' => '7508',
		 'password' => Hash::make('7508'),
		  'email' => 'filipe.nazario@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '38679',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(2);
		$user = User::create(array(
		  'nome' => 'Barbara',
		  'sobrenome' => 'Nazário',
		  'login' => '6599',
		 'password' => Hash::make('6599'),
		  'email' => 'barbara.nazario@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Barbara, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '39643',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(3);
		$user = User::create(array(
		  'nome' => 'Sarah',
		  'sobrenome' => 'Ishida Silva',
		  'login' => '6314',
		 'password' => Hash::make('6314'),
		  'email' => 'sarah.ishida silva@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '39239',
		'dataVencimentoBoleto' => '03'
		));
		$user->aluno->turmas()->attach(3);
		$user = User::create(array(
		  'nome' => 'Akemi',
		  'sobrenome' => 'Semedo',
		  'login' => '2349',
		 'password' => Hash::make('2349'),
		  'email' => 'akemi.semedo@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '39120',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(3);
		$user = User::create(array(
		  'nome' => 'Milena',
		  'sobrenome' => 'Nazário',
		  'login' => '6821',
		 'password' => Hash::make('6821'),
		  'email' => 'milena.nazario@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '39715',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(3);
		$user = User::create(array(
		  'nome' => 'Milena',
		  'sobrenome' => 'Castanheira',
		  'login' => '3001',
		 'password' => Hash::make('3001'),
		  'email' => 'milena.castanheira@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Milena e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '39755',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(3);
		$user = User::create(array(
		  'nome' => 'Cleber',
		  'sobrenome' => 'Freire',
		  'login' => '9096',
		 'password' => Hash::make('9096'),
		  'email' => 'cleber.freire@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou o Cleber e amo assistir tv, séries e filmes',
		 'dataNascimento' => '39077',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(3);
		$user = User::create(array(
		  'nome' => 'Cleber',
		  'sobrenome' => 'Leal',
		  'login' => '3634',
		 'password' => Hash::make('3634'),
		  'email' => 'cleber.leal@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '38819',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(4);
		$user = User::create(array(
		  'nome' => 'Jonas',
		  'sobrenome' => 'Nazário',
		  'login' => '7255',
		 'password' => Hash::make('7255'),
		  'email' => 'jonas.nazario@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Jonas e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '39742',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(4);
		$user = User::create(array(
		  'nome' => 'Filipe',
		  'sobrenome' => 'Monteiro',
		  'login' => '7935',
		 'password' => Hash::make('7935'),
		  'email' => 'filipe.monteiro@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Filipe e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '38506',
		'dataVencimentoBoleto' => '11'
		));
		$user->aluno->turmas()->attach(4);
		$user = User::create(array(
		  'nome' => 'Otavio',
		  'sobrenome' => 'dos Santos',
		  'login' => '6521',
		 'password' => Hash::make('6521'),
		  'email' => 'otavio.dos santos@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Otavio, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '39559',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(4);
		$user = User::create(array(
		  'nome' => 'Jaime',
		  'sobrenome' => 'Valverde',
		  'login' => '8001',
		 'password' => Hash::make('8001'),
		  'email' => 'jaime.valverde@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '39306',
		'dataVencimentoBoleto' => '01'
		));
		$user->aluno->turmas()->attach(4);
		$user = User::create(array(
		  'nome' => 'Xerxes',
		  'sobrenome' => 'Rocha',
		  'login' => '2734',
		 'password' => Hash::make('2734'),
		  'email' => 'xerxes.rocha@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Xerxes, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '39749',
		'dataVencimentoBoleto' => '06'
		));
		$user->aluno->turmas()->attach(5);
		$user = User::create(array(
		  'nome' => 'Alexandra',
		  'sobrenome' => 'Pinheiro',
		  'login' => '1878',
		 'password' => Hash::make('1878'),
		  'email' => 'alexandra.pinheiro@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '38913',
		'dataVencimentoBoleto' => '08'
		));
		$user->aluno->turmas()->attach(5);
		$user = User::create(array(
		  'nome' => 'Sarah',
		  'sobrenome' => 'Carvalho',
		  'login' => '5117',
		 'password' => Hash::make('5117'),
		  'email' => 'sarah.carvalho@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '39051',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(5);
		$user = User::create(array(
		  'nome' => 'Sonia',
		  'sobrenome' => 'Takahashi',
		  'login' => '2985',
		 'password' => Hash::make('2985'),
		  'email' => 'sonia.takahashi@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '38408',
		'dataVencimentoBoleto' => '07'
		));
		$user->aluno->turmas()->attach(5);
		$user = User::create(array(
		  'nome' => 'Caio',
		  'sobrenome' => 'Nazário',
		  'login' => '1791',
		 'password' => Hash::make('1791'),
		  'email' => 'caio.nazario@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Caio e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '38580',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(6);
		$user = User::create(array(
		  'nome' => 'Jaime',
		  'sobrenome' => 'Takahashi',
		  'login' => '4089',
		 'password' => Hash::make('4089'),
		  'email' => 'jaime.takahashi@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou o Jaime e amo assistir tv, séries e filmes',
		 'dataNascimento' => '38910',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(6);
		$user = User::create(array(
		  'nome' => 'Akemi',
		  'sobrenome' => 'Takahashi',
		  'login' => '5490',
		 'password' => Hash::make('5490'),
		  'email' => 'akemi.takahashi@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '39081',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(6);
		$user = User::create(array(
		  'nome' => 'Peterson',
		  'sobrenome' => 'Torres',
		  'login' => '3641',
		 'password' => Hash::make('3641'),
		  'email' => 'peterson.torres@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Peterson e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '39173',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(6);
		$user = User::create(array(
		  'nome' => 'Simão',
		  'sobrenome' => 'Alves',
		  'login' => '5460',
		 'password' => Hash::make('5460'),
		  'email' => 'simao.alves@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Simão e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '39446',
		'dataVencimentoBoleto' => '03'
		));
		$user->aluno->turmas()->attach(7);
		$user = User::create(array(
		  'nome' => 'Sonia',
		  'sobrenome' => 'Nazário',
		  'login' => '3056',
		 'password' => Hash::make('3056'),
		  'email' => 'sonia.nazario@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Sonia, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '39315',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(7);
		$user = User::create(array(
		  'nome' => 'Fernando',
		  'sobrenome' => 'Hernandes',
		  'login' => '8385',
		 'password' => Hash::make('8385'),
		  'email' => 'fernando.hernandes@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '39770',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(7);
		$user = User::create(array(
		  'nome' => 'Claudio',
		  'sobrenome' => 'Severo',
		  'login' => '1487',
		 'password' => Hash::make('1487'),
		  'email' => 'claudio.severo@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Claudio, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '39609',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(7);
		$user = User::create(array(
		  'nome' => 'Milena',
		  'sobrenome' => 'Matos',
		  'login' => '4196',
		 'password' => Hash::make('4196'),
		  'email' => 'milena.matos@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '38533',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(8);
		$user = User::create(array(
		  'nome' => 'Cauê',
		  'sobrenome' => 'Carvalho',
		  'login' => '7113',
		 'password' => Hash::make('7113'),
		  'email' => 'caue.carvalho@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '38798',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(8);
		$user = User::create(array(
		  'nome' => 'Simão',
		  'sobrenome' => 'Freire',
		  'login' => '1023',
		 'password' => Hash::make('1023'),
		  'email' => 'simao.freire@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '39742',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(8);
		$user = User::create(array(
		  'nome' => 'Leonidas',
		  'sobrenome' => 'Semedo',
		  'login' => '1285',
		 'password' => Hash::make('1285'),
		  'email' => 'leonidas.semedo@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Leonidas e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '39769',
		'dataVencimentoBoleto' => '11'
		));
		$user->aluno->turmas()->attach(8);
		$user = User::create(array(
		  'nome' => 'Peterson',
		  'sobrenome' => 'Neto',
		  'login' => '1409',
		 'password' => Hash::make('1409'),
		  'email' => 'peterson.neto@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou o Peterson e amo assistir tv, séries e filmes',
		 'dataNascimento' => '39232',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(9);
		$user = User::create(array(
		  'nome' => 'Fernando',
		  'sobrenome' => 'Costa',
		  'login' => '9516',
		 'password' => Hash::make('9516'),
		  'email' => 'fernando.costa@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '39750',
		'dataVencimentoBoleto' => '01'
		));
		$user->aluno->turmas()->attach(9);
		$user = User::create(array(
		  'nome' => 'Andreia',
		  'sobrenome' => 'Jordão',
		  'login' => '6692',
		 'password' => Hash::make('6692'),
		  'email' => 'andreia.jordao@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Andreia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '39586',
		'dataVencimentoBoleto' => '06'
		));
		$user->aluno->turmas()->attach(9);
		$user = User::create(array(
		  'nome' => 'Caroline',
		  'sobrenome' => 'Rocha',
		  'login' => '8148',
		 'password' => Hash::make('8148'),
		  'email' => 'caroline.rocha@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Caroline e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '38803',
		'dataVencimentoBoleto' => '08'
		));
		$user->aluno->turmas()->attach(9);
		$user = User::create(array(
		  'nome' => 'Chunli',
		  'sobrenome' => 'Carvalho',
		  'login' => '5932',
		 'password' => Hash::make('5932'),
		  'email' => 'chunli.carvalho@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a ChunLi, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '38928',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(10);
		$user = User::create(array(
		  'nome' => 'Eric',
		  'sobrenome' => 'Ishida Silva',
		  'login' => '9277',
		 'password' => Hash::make('9277'),
		  'email' => 'eric.ishida silva@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '38498',
		'dataVencimentoBoleto' => '07'
		));
		$user->aluno->turmas()->attach(10);
		$user = User::create(array(
		  'nome' => 'Akemi',
		  'sobrenome' => 'Redfield',
		  'login' => '7605',
		 'password' => Hash::make('7605'),
		  'email' => 'akemi.redfield@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Akemi, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '39438',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(10);
		$user = User::create(array(
		  'nome' => 'Rafaela',
		  'sobrenome' => 'Tanaka',
		  'login' => '2312',
		 'password' => Hash::make('2312'),
		  'email' => 'rafaela.tanaka@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '38703',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(10);
		$user = User::create(array(
		  'nome' => 'Trinity',
		  'sobrenome' => 'Neto',
		  'login' => '4036',
		 'password' => Hash::make('4036'),
		  'email' => 'trinity.neto@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '38588',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(11);
		$user = User::create(array(
		  'nome' => 'Jéssica',
		  'sobrenome' => 'Freire',
		  'login' => '4663',
		 'password' => Hash::make('4663'),
		  'email' => 'jessica.freire@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '38562',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(11);
		$user = User::create(array(
		  'nome' => 'Otavio',
		  'sobrenome' => 'Pádua',
		  'login' => '8773',
		 'password' => Hash::make('8773'),
		  'email' => 'otavio.padua@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Otavio e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '38621',
		'dataVencimentoBoleto' => '03'
		));
		$user->aluno->turmas()->attach(11);
		$user = User::create(array(
		  'nome' => 'Xerxes',
		  'sobrenome' => 'Matos',
		  'login' => '2347',
		 'password' => Hash::make('2347'),
		  'email' => 'xerxes.matos@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou o Xerxes e amo assistir tv, séries e filmes',
		 'dataNascimento' => '38505',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(11);
		$user = User::create(array(
		  'nome' => 'Dante',
		  'sobrenome' => 'Minazuki',
		  'login' => '4867',
		 'password' => Hash::make('4867'),
		  'email' => 'dante.minazuki@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '38552',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(12);
		$user = User::create(array(
		  'nome' => 'Milena',
		  'sobrenome' => 'Batista',
		  'login' => '3715',
		 'password' => Hash::make('3715'),
		  'email' => 'milena.batista@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Milena e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '38790',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(12);
		$user = User::create(array(
		  'nome' => 'Eric',
		  'sobrenome' => 'Alves',
		  'login' => '9348',
		 'password' => Hash::make('9348'),
		  'email' => 'eric.alves@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Eric e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '39430',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(12);
		$user = User::create(array(
		  'nome' => 'Dante',
		  'sobrenome' => 'Macedo',
		  'login' => '4776',
		 'password' => Hash::make('4776'),
		  'email' => 'dante.macedo@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Dante, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '39453',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(12);
		$user = User::create(array(
		  'nome' => 'Jade',
		  'sobrenome' => 'Villablanca',
		  'login' => '1702',
		 'password' => Hash::make('1702'),
		  'email' => 'jade.villablanca@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '39325',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(13);
		$user = User::create(array(
		  'nome' => 'Daniela',
		  'sobrenome' => 'Monteiro',
		  'login' => '2722',
		 'password' => Hash::make('2722'),
		  'email' => 'daniela.monteiro@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Daniela, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '38674',
		'dataVencimentoBoleto' => '11'
		));
		$user->aluno->turmas()->attach(13);
		$user = User::create(array(
		  'nome' => 'Morpheu',
		  'sobrenome' => 'Matos',
		  'login' => '1501',
		 'password' => Hash::make('1501'),
		  'email' => 'morpheu.matos@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '38857',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(13);
		$user = User::create(array(
		  'nome' => 'Rafaela',
		  'sobrenome' => 'Alves',
		  'login' => '7815',
		 'password' => Hash::make('7815'),
		  'email' => 'rafaela.alves@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '39160',
		'dataVencimentoBoleto' => '01'
		));
		$user->aluno->turmas()->attach(13);
		$user = User::create(array(
		  'nome' => 'Fernando',
		  'sobrenome' => 'Takahashi',
		  'login' => '4804',
		 'password' => Hash::make('4804'),
		  'email' => 'fernando.takahashi@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '39223',
		'dataVencimentoBoleto' => '06'
		));
		$user->aluno->turmas()->attach(14);
		$user = User::create(array(
		  'nome' => 'Jaime',
		  'sobrenome' => 'Pinheiro',
		  'login' => '7148',
		 'password' => Hash::make('7148'),
		  'email' => 'jaime.pinheiro@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Jaime e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '39290',
		'dataVencimentoBoleto' => '08'
		));
		$user->aluno->turmas()->attach(14);
		$user = User::create(array(
		  'nome' => 'Xerxes',
		  'sobrenome' => 'Torres',
		  'login' => '4622',
		 'password' => Hash::make('4622'),
		  'email' => 'xerxes.torres@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou o Xerxes e amo assistir tv, séries e filmes',
		 'dataNascimento' => '38878',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(14);
		$user = User::create(array(
		  'nome' => 'Camila',
		  'sobrenome' => 'dos Santos',
		  'login' => '1582',
		 'password' => Hash::make('1582'),
		  'email' => 'camila.dos santos@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '38932',
		'dataVencimentoBoleto' => '07'
		));
		$user->aluno->turmas()->attach(14);
		$user = User::create(array(
		  'nome' => 'Bruna',
		  'sobrenome' => 'Faria',
		  'login' => '1365',
		 'password' => Hash::make('1365'),
		  'email' => 'bruna.faria@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Bruna e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '39753',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(15);
		$user = User::create(array(
		  'nome' => 'Odete',
		  'sobrenome' => 'Salgueiro',
		  'login' => '7025',
		 'password' => Hash::make('7025'),
		  'email' => 'odete.salgueiro@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Odete e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '39068',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(15);
		$user = User::create(array(
		  'nome' => 'Sarah',
		  'sobrenome' => 'Castanheira',
		  'login' => '7617',
		 'password' => Hash::make('7617'),
		  'email' => 'sarah.castanheira@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Sarah, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '38853',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(15);
		$user = User::create(array(
		  'nome' => 'Doulgas',
		  'sobrenome' => 'Gouveia',
		  'login' => '6606',
		 'password' => Hash::make('6606'),
		  'email' => 'doulgas.gouveia@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '39448',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(15);
		$user = User::create(array(
		  'nome' => 'Caio',
		  'sobrenome' => 'Costa',
		  'login' => '9210',
		 'password' => Hash::make('9210'),
		  'email' => 'caio.costa@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Caio, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '39260',
		'dataVencimentoBoleto' => '03'
		));
		$user->aluno->turmas()->attach(16);
		$user = User::create(array(
		  'nome' => 'Xerxes',
		  'sobrenome' => 'Minazuki',
		  'login' => '9643',
		 'password' => Hash::make('9643'),
		  'email' => 'xerxes.minazuki@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '38482',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(16);
		$user = User::create(array(
		  'nome' => 'Jade',
		  'sobrenome' => 'Lopes',
		  'login' => '3809',
		 'password' => Hash::make('3809'),
		  'email' => 'jade.lopes@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '38406',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(16);
		$user = User::create(array(
		  'nome' => 'Dante',
		  'sobrenome' => 'Camilo',
		  'login' => '8586',
		 'password' => Hash::make('8586'),
		  'email' => 'dante.camilo@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '38980',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(16);
		$user = User::create(array(
		  'nome' => 'Akemi',
		  'sobrenome' => 'Valentine',
		  'login' => '2385',
		 'password' => Hash::make('2385'),
		  'email' => 'akemi.valentine@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Akemi e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '39725',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(17);
		$user = User::create(array(
		  'nome' => 'Jill',
		  'sobrenome' => 'Castanheira',
		  'login' => '7985',
		 'password' => Hash::make('7985'),
		  'email' => 'jill.castanheira@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou a Jill e amo assistir tv, séries e filmes',
		 'dataNascimento' => '38505',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(17);
		$user = User::create(array(
		  'nome' => 'Trinity',
		  'sobrenome' => 'Redfield',
		  'login' => '8730',
		 'password' => Hash::make('8730'),
		  'email' => 'trinity.redfield@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '38707',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(17);
		$user = User::create(array(
		  'nome' => 'Sonia',
		  'sobrenome' => 'Pádua',
		  'login' => '8480',
		 'password' => Hash::make('8480'),
		  'email' => 'sonia.padua@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Sonia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '38453',
		'dataVencimentoBoleto' => '11'
		));
		$user->aluno->turmas()->attach(17);
		$user = User::create(array(
		  'nome' => 'Augusto',
		  'sobrenome' => 'Castanheira',
		  'login' => '7909',
		 'password' => Hash::make('7909'),
		  'email' => 'augusto.castanheira@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Augusto e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '39462',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(18);
		$user = User::create(array(
		  'nome' => 'Yoko',
		  'sobrenome' => 'Alves',
		  'login' => '7344',
		 'password' => Hash::make('7344'),
		  'email' => 'yoko.alves@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Yoko, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '38509',
		'dataVencimentoBoleto' => '01'
		));
		$user->aluno->turmas()->attach(18);
		$user = User::create(array(
		  'nome' => 'Michele',
		  'sobrenome' => 'Macedo',
		  'login' => '4368',
		 'password' => Hash::make('4368'),
		  'email' => 'michele.macedo@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '39575',
		'dataVencimentoBoleto' => '06'
		));
		$user->aluno->turmas()->attach(18);
		$user = User::create(array(
		  'nome' => 'Peterson',
		  'sobrenome' => 'Costa',
		  'login' => '9074',
		 'password' => Hash::make('9074'),
		  'email' => 'peterson.costa@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Peterson, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '39513',
		'dataVencimentoBoleto' => '08'
		));
		$user->aluno->turmas()->attach(18);
		$user = User::create(array(
		  'nome' => 'Bruno',
		  'sobrenome' => 'Monteiro',
		  'login' => '6180',
		 'password' => Hash::make('6180'),
		  'email' => 'bruno.monteiro@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '39198',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(19);
		$user = User::create(array(
		  'nome' => 'Jonas',
		  'sobrenome' => 'Matos',
		  'login' => '9653',
		 'password' => Hash::make('9653'),
		  'email' => 'jonas.matos@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '38864',
		'dataVencimentoBoleto' => '07'
		));
		$user->aluno->turmas()->attach(19);
		$user = User::create(array(
		  'nome' => 'Jade',
		  'sobrenome' => 'Franca',
		  'login' => '3738',
		 'password' => Hash::make('3738'),
		  'email' => 'jade.franca@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '39541',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(19);
		$user = User::create(array(
		  'nome' => 'Peterson',
		  'sobrenome' => 'Redfield',
		  'login' => '4685',
		 'password' => Hash::make('4685'),
		  'email' => 'peterson.redfield@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Peterson e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '38704',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(19);
		$user = User::create(array(
		  'nome' => 'Filipe',
		  'sobrenome' => 'Neves',
		  'login' => '1458',
		 'password' => Hash::make('1458'),
		  'email' => 'filipe.neves@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou o Filipe e amo assistir tv, séries e filmes',
		 'dataNascimento' => '39773',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(20);
		$user = User::create(array(
		  'nome' => 'Jill',
		  'sobrenome' => 'dos Santos',
		  'login' => '2063',
		 'password' => Hash::make('2063'),
		  'email' => 'jill.dos santos@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '39068',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(20);
		$user = User::create(array(
		  'nome' => 'Cauê',
		  'sobrenome' => 'Minazuki',
		  'login' => '1316',
		 'password' => Hash::make('1316'),
		  'email' => 'caue.minazuki@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Cauê e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '39481',
		'dataVencimentoBoleto' => '03'
		));
		$user->aluno->turmas()->attach(20);
		$user = User::create(array(
		  'nome' => 'Jonas',
		  'sobrenome' => 'Valentine',
		  'login' => '6061',
		 'password' => Hash::make('6061'),
		  'email' => 'jonas.valentine@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Jonas e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '39743',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(20);
		$user = User::create(array(
		  'nome' => 'Irene',
		  'sobrenome' => 'Camilo',
		  'login' => '6295',
		 'password' => Hash::make('6295'),
		  'email' => 'irene.camilo@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Irene, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '37693',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(21);
		$user = User::create(array(
		  'nome' => 'Doulgas',
		  'sobrenome' => 'Tanaka',
		  'login' => '5337',
		 'password' => Hash::make('5337'),
		  'email' => 'doulgas.tanaka@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '37756',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(21);
		$user = User::create(array(
		  'nome' => 'Angelina',
		  'sobrenome' => 'Valentine',
		  'login' => '5403',
		 'password' => Hash::make('5403'),
		  'email' => 'angelina.valentine@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Rafaela, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '37364',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(21);
		$user = User::create(array(
		  'nome' => 'Monica',
		  'sobrenome' => 'Suzuki',
		  'login' => '9171',
		 'password' => Hash::make('9171'),
		  'email' => 'monica.suzuki@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '37580',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(21);
		$user = User::create(array(
		  'nome' => 'Peterson',
		  'sobrenome' => 'Faria',
		  'login' => '3523',
		 'password' => Hash::make('3523'),
		  'email' => 'peterson.faria@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '38081',
		'dataVencimentoBoleto' => '11'
		));
		$user->aluno->turmas()->attach(22);
		$user = User::create(array(
		  'nome' => 'Leonidas',
		  'sobrenome' => 'Severo',
		  'login' => '4723',
		 'password' => Hash::make('4723'),
		  'email' => 'leonidas.severo@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '37847',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(22);
		$user = User::create(array(
		  'nome' => 'Augusto',
		  'sobrenome' => 'Neto',
		  'login' => '8450',
		 'password' => Hash::make('8450'),
		  'email' => 'augusto.neto@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o ChunLi e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '37991',
		'dataVencimentoBoleto' => '01'
		));
		$user->aluno->turmas()->attach(22);
		$user = User::create(array(
		  'nome' => 'Leonidas',
		  'sobrenome' => 'Nazário',
		  'login' => '8261',
		 'password' => Hash::make('8261'),
		  'email' => 'leonidas.nazario@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou o Caroline e amo assistir tv, séries e filmes',
		 'dataNascimento' => '36910',
		'dataVencimentoBoleto' => '06'
		));
		$user->aluno->turmas()->attach(22);
		$user = User::create(array(
		  'nome' => 'Eric',
		  'sobrenome' => 'Hernandes',
		  'login' => '3519',
		 'password' => Hash::make('3519'),
		  'email' => 'eric.hernandes@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '37982',
		'dataVencimentoBoleto' => '08'
		));
		$user->aluno->turmas()->attach(23);
		$user = User::create(array(
		  'nome' => 'Chunli',
		  'sobrenome' => 'Nazário',
		  'login' => '9654',
		 'password' => Hash::make('9654'),
		  'email' => 'chunli.nazario@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Cleber e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '37562',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(23);
		$user = User::create(array(
		  'nome' => 'Doulgas',
		  'sobrenome' => 'Castanheira',
		  'login' => '9473',
		 'password' => Hash::make('9473'),
		  'email' => 'doulgas.castanheira@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Irene e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '37625',
		'dataVencimentoBoleto' => '07'
		));
		$user->aluno->turmas()->attach(23);
		$user = User::create(array(
		  'nome' => 'Jéssica',
		  'sobrenome' => 'Franca',
		  'login' => '2957',
		 'password' => Hash::make('2957'),
		  'email' => 'jessica.franca@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Filipe, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '38199',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(23);
		$user = User::create(array(
		  'nome' => 'Jaime',
		  'sobrenome' => 'Villablanca',
		  'login' => '5694',
		 'password' => Hash::make('5694'),
		  'email' => 'jaime.villablanca@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '37296',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(24);
		$user = User::create(array(
		  'nome' => 'Peterson',
		  'sobrenome' => 'Minazuki',
		  'login' => '3068',
		 'password' => Hash::make('3068'),
		  'email' => 'peterson.minazuki@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Barbara, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '36887',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(24);
		$user = User::create(array(
		  'nome' => 'Cauê',
		  'sobrenome' => 'Gomes',
		  'login' => '8712',
		 'password' => Hash::make('8712'),
		  'email' => 'caue.gomes@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '36833',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(24);
		$user = User::create(array(
		  'nome' => 'Leonidas',
		  'sobrenome' => 'Yamada Silva',
		  'login' => '8234',
		 'password' => Hash::make('8234'),
		  'email' => 'leonidas.yamada silva@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '37590',
		'dataVencimentoBoleto' => '03'
		));
		$user->aluno->turmas()->attach(24);
		$user = User::create(array(
		  'nome' => 'Leonidas',
		  'sobrenome' => 'Matos',
		  'login' => '3977',
		 'password' => Hash::make('3977'),
		  'email' => 'leonidas.matos@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '36483',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(25);
		$user = User::create(array(
		  'nome' => 'Michele',
		  'sobrenome' => 'Valentine',
		  'login' => '5317',
		 'password' => Hash::make('5317'),
		  'email' => 'michele.valentine@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Milena e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '37000',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(25);
		$user = User::create(array(
		  'nome' => 'Doulgas',
		  'sobrenome' => 'Sato',
		  'login' => '7146',
		 'password' => Hash::make('7146'),
		  'email' => 'doulgas.sato@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou o Cleber e amo assistir tv, séries e filmes',
		 'dataNascimento' => '37114',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(25);
		$user = User::create(array(
		  'nome' => 'Doulgas',
		  'sobrenome' => 'Rocha',
		  'login' => '3428',
		 'password' => Hash::make('3428'),
		  'email' => 'doulgas.rocha@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '36875',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(25);
		$user = User::create(array(
		  'nome' => 'Dante',
		  'sobrenome' => 'Lins',
		  'login' => '6404',
		 'password' => Hash::make('6404'),
		  'email' => 'dante.lins@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Jonas e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '37204',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(26);
		$user = User::create(array(
		  'nome' => 'Cauê',
		  'sobrenome' => 'Takahashi',
		  'login' => '3117',
		 'password' => Hash::make('3117'),
		  'email' => 'caue.takahashi@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Filipe e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '37221',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(26);
		$user = User::create(array(
		  'nome' => 'Michele',
		  'sobrenome' => 'Rocha',
		  'login' => '6798',
		 'password' => Hash::make('6798'),
		  'email' => 'michele.rocha@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Otavio, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '37281',
		'dataVencimentoBoleto' => '11'
		));
		$user->aluno->turmas()->attach(26);
		$user = User::create(array(
		  'nome' => 'Tamires',
		  'sobrenome' => 'Matos',
		  'login' => '2909',
		 'password' => Hash::make('2909'),
		  'email' => 'tamires.matos@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '37177',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(26);
		$user = User::create(array(
		  'nome' => 'Aline',
		  'sobrenome' => 'Lins',
		  'login' => '4774',
		 'password' => Hash::make('4774'),
		  'email' => 'aline.lins@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Xerxes, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '38050',
		'dataVencimentoBoleto' => '01'
		));
		$user->aluno->turmas()->attach(27);
		$user = User::create(array(
		  'nome' => 'Monica',
		  'sobrenome' => 'Batista',
		  'login' => '3786',
		 'password' => Hash::make('3786'),
		  'email' => 'monica.batista@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '38133',
		'dataVencimentoBoleto' => '06'
		));
		$user->aluno->turmas()->attach(27);
		$user = User::create(array(
		  'nome' => 'Caio',
		  'sobrenome' => 'Hato',
		  'login' => '2209',
		 'password' => Hash::make('2209'),
		  'email' => 'caio.hato@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '37310',
		'dataVencimentoBoleto' => '08'
		));
		$user->aluno->turmas()->attach(27);
		$user = User::create(array(
		  'nome' => 'Eric',
		  'sobrenome' => 'Sato',
		  'login' => '5768',
		 'password' => Hash::make('5768'),
		  'email' => 'eric.sato@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '37552',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(27);
		$user = User::create(array(
		  'nome' => 'Akemi',
		  'sobrenome' => 'Costa',
		  'login' => '1718',
		 'password' => Hash::make('1718'),
		  'email' => 'akemi.costa@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Caio e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '37786',
		'dataVencimentoBoleto' => '07'
		));
		$user->aluno->turmas()->attach(28);
		$user = User::create(array(
		  'nome' => 'Milena',
		  'sobrenome' => 'Neves',
		  'login' => '2721',
		 'password' => Hash::make('2721'),
		  'email' => 'milena.neves@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou a Jaime e amo assistir tv, séries e filmes',
		 'dataNascimento' => '36828',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(28);
		$user = User::create(array(
		  'nome' => 'Bruno',
		  'sobrenome' => 'Semedo',
		  'login' => '8182',
		 'password' => Hash::make('8182'),
		  'email' => 'bruno.semedo@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '37733',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(28);
		$user = User::create(array(
		  'nome' => 'Odete',
		  'sobrenome' => 'dos Santos',
		  'login' => '3920',
		 'password' => Hash::make('3920'),
		  'email' => 'odete.dos santos@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Peterson e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '37142',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(28);
		$user = User::create(array(
		  'nome' => 'Jaime',
		  'sobrenome' => 'Nazário',
		  'login' => '5097',
		 'password' => Hash::make('5097'),
		  'email' => 'jaime.nazario@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Simão e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '37303',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(29);
		$user = User::create(array(
		  'nome' => 'Michele',
		  'sobrenome' => 'Castanheira',
		  'login' => '7016',
		 'password' => Hash::make('7016'),
		  'email' => 'michele.castanheira@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Sonia, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '38186',
		'dataVencimentoBoleto' => '03'
		));
		$user->aluno->turmas()->attach(29);
		$user = User::create(array(
		  'nome' => 'Caroline',
		  'sobrenome' => 'Minazuki',
		  'login' => '9003',
		 'password' => Hash::make('9003'),
		  'email' => 'caroline.minazuki@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '37776',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(29);
		$user = User::create(array(
		  'nome' => 'Sonia',
		  'sobrenome' => 'Macedo',
		  'login' => '5413',
		 'password' => Hash::make('5413'),
		  'email' => 'sonia.macedo@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Claudio, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '37224',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(29);
		$user = User::create(array(
		  'nome' => 'Kitana',
		  'sobrenome' => 'Lins',
		  'login' => '6896',
		 'password' => Hash::make('6896'),
		  'email' => 'kitana.lins@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '37918',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(30);
		$user = User::create(array(
		  'nome' => 'Dante',
		  'sobrenome' => 'Faria',
		  'login' => '9640',
		 'password' => Hash::make('9640'),
		  'email' => 'dante.faria@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '37570',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(30);
		$user = User::create(array(
		  'nome' => 'Claudio',
		  'sobrenome' => 'Faria',
		  'login' => '3020',
		 'password' => Hash::make('3020'),
		  'email' => 'claudio.faria@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '36560',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(30);
		$user = User::create(array(
		  'nome' => 'Sarah',
		  'sobrenome' => 'Peixoto',
		  'login' => '3321',
		 'password' => Hash::make('3321'),
		  'email' => 'sarah.peixoto@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Leonidas e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '37796',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(30);
		$user = User::create(array(
		  'nome' => 'Eduardo',
		  'sobrenome' => 'Pádua',
		  'login' => '6752',
		 'password' => Hash::make('6752'),
		  'email' => 'eduardo.padua@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou o Peterson e amo assistir tv, séries e filmes',
		 'dataNascimento' => '37426',
		'dataVencimentoBoleto' => '11'
		));
		$user->aluno->turmas()->attach(31);
		$user = User::create(array(
		  'nome' => 'Otavio',
		  'sobrenome' => 'Franca',
		  'login' => '1639',
		 'password' => Hash::make('1639'),
		  'email' => 'otavio.franca@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '38105',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(31);
		$user = User::create(array(
		  'nome' => 'Jill',
		  'sobrenome' => 'Salgueiro',
		  'login' => '6610',
		 'password' => Hash::make('6610'),
		  'email' => 'jill.salgueiro@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Andreia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '37847',
		'dataVencimentoBoleto' => '01'
		));
		$user->aluno->turmas()->attach(31);
		$user = User::create(array(
		  'nome' => 'Camila',
		  'sobrenome' => 'Nazário',
		  'login' => '9642',
		 'password' => Hash::make('9642'),
		  'email' => 'camila.nazario@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Caroline e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '37695',
		'dataVencimentoBoleto' => '06'
		));
		$user->aluno->turmas()->attach(31);
		$user = User::create(array(
		  'nome' => 'Camila',
		  'sobrenome' => 'Lopes',
		  'login' => '1631',
		 'password' => Hash::make('1631'),
		  'email' => 'camila.lopes@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a ChunLi, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '37571',
		'dataVencimentoBoleto' => '08'
		));
		$user->aluno->turmas()->attach(32);
		$user = User::create(array(
		  'nome' => 'Lara',
		  'sobrenome' => 'Nazário',
		  'login' => '3116',
		 'password' => Hash::make('3116'),
		  'email' => 'lara.nazario@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '37136',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(32);
		$user = User::create(array(
		  'nome' => 'Andreia',
		  'sobrenome' => 'Takahashi',
		  'login' => '1555',
		 'password' => Hash::make('1555'),
		  'email' => 'andreia.takahashi@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Akemi, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '38162',
		'dataVencimentoBoleto' => '07'
		));
		$user->aluno->turmas()->attach(32);
		$user = User::create(array(
		  'nome' => 'Yoko',
		  'sobrenome' => 'Franca',
		  'login' => '6337',
		 'password' => Hash::make('6337'),
		  'email' => 'yoko.franca@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '38165',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(32);
		$user = User::create(array(
		  'nome' => 'Claudio',
		  'sobrenome' => 'Nazário',
		  'login' => '8110',
		 'password' => Hash::make('8110'),
		  'email' => 'claudio.nazario@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '37754',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(32);
		$user = User::create(array(
		  'nome' => 'Barbara',
		  'sobrenome' => 'Tanaka',
		  'login' => '9031',
		 'password' => Hash::make('9031'),
		  'email' => 'barbara.tanaka@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '37525',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(33);
		$user = User::create(array(
		  'nome' => 'Jonas',
		  'sobrenome' => 'Lopes',
		  'login' => '5607',
		 'password' => Hash::make('5607'),
		  'email' => 'jonas.lopes@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Otavio e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '38041',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(33);
		$user = User::create(array(
		  'nome' => 'Fernando',
		  'sobrenome' => 'Castanheira',
		  'login' => '8016',
		 'password' => Hash::make('8016'),
		  'email' => 'fernando.castanheira@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou o Xerxes e amo assistir tv, séries e filmes',
		 'dataNascimento' => '37573',
		'dataVencimentoBoleto' => '03'
		));
		$user->aluno->turmas()->attach(33);
		$user = User::create(array(
		  'nome' => 'Jade',
		  'sobrenome' => 'Costa',
		  'login' => '9836',
		 'password' => Hash::make('9836'),
		  'email' => 'jade.costa@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '37960',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(33);
		$user = User::create(array(
		  'nome' => 'Peterson',
		  'sobrenome' => 'Sato',
		  'login' => '4785',
		 'password' => Hash::make('4785'),
		  'email' => 'peterson.sato@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Milena e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '36828',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(33);
		$user = User::create(array(
		  'nome' => 'Dante',
		  'sobrenome' => 'Lopes',
		  'login' => '8571',
		 'password' => Hash::make('8571'),
		  'email' => 'dante.lopes@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Eric e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '36856',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(33);
		$user = User::create(array(
		  'nome' => 'Eduardo',
		  'sobrenome' => 'Freire',
		  'login' => '3405',
		 'password' => Hash::make('3405'),
		  'email' => 'eduardo.freire@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Dante, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '37797',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(33);
		$user = User::create(array(
		  'nome' => 'Odete',
		  'sobrenome' => 'Lins',
		  'login' => '2620',
		 'password' => Hash::make('2620'),
		  'email' => 'odete.lins@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '37160',
		'dataVencimentoBoleto' => '03'
		));
		$user->aluno->turmas()->attach(34);
		$user = User::create(array(
		  'nome' => 'Simão',
		  'sobrenome' => 'Franca',
		  'login' => '9802',
		 'password' => Hash::make('9802'),
		  'email' => 'simao.franca@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Daniela, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '37686',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(34);
		$user = User::create(array(
		  'nome' => 'Yori',
		  'sobrenome' => 'Yamada Silva',
		  'login' => '6767',
		 'password' => Hash::make('6767'),
		  'email' => 'yori.yamada silva@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '37742',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(34);
		$user = User::create(array(
		  'nome' => 'Dante',
		  'sobrenome' => 'Leal',
		  'login' => '9057',
		 'password' => Hash::make('9057'),
		  'email' => 'dante.leal@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '37221',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(34);
		$user = User::create(array(
		  'nome' => 'Xerxes',
		  'sobrenome' => 'Monteiro',
		  'login' => '6601',
		 'password' => Hash::make('6601'),
		  'email' => 'xerxes.monteiro@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '37660',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(35);
		$user = User::create(array(
		  'nome' => 'Augusto',
		  'sobrenome' => 'Leal',
		  'login' => '7089',
		 'password' => Hash::make('7089'),
		  'email' => 'augusto.leal@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Jaime e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '38118',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(35);
		$user = User::create(array(
		  'nome' => 'Simão',
		  'sobrenome' => 'Pádua',
		  'login' => '8707',
		 'password' => Hash::make('8707'),
		  'email' => 'simao.padua@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou o Xerxes e amo assistir tv, séries e filmes',
		 'dataNascimento' => '37251',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(35);
		$user = User::create(array(
		  'nome' => 'Cauê',
		  'sobrenome' => 'dos Santos',
		  'login' => '8133',
		 'password' => Hash::make('8133'),
		  'email' => 'caue.dos santos@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '37976',
		'dataVencimentoBoleto' => '11'
		));
		$user->aluno->turmas()->attach(35);
		$user = User::create(array(
		  'nome' => 'Claudio',
		  'sobrenome' => 'Salgueiro',
		  'login' => '1299',
		 'password' => Hash::make('1299'),
		  'email' => 'claudio.salgueiro@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Bruna e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '36614',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(36);
		$user = User::create(array(
		  'nome' => 'Bruno',
		  'sobrenome' => 'Redfield',
		  'login' => '2484',
		 'password' => Hash::make('2484'),
		  'email' => 'bruno.redfield@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Odete e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '36622',
		'dataVencimentoBoleto' => '01'
		));
		$user->aluno->turmas()->attach(36);
		$user = User::create(array(
		  'nome' => 'Akemi',
		  'sobrenome' => 'Hernandes',
		  'login' => '2796',
		 'password' => Hash::make('2796'),
		  'email' => 'akemi.hernandes@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Sarah, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '37047',
		'dataVencimentoBoleto' => '06'
		));
		$user->aluno->turmas()->attach(36);
		$user = User::create(array(
		  'nome' => 'Rafaela',
		  'sobrenome' => 'Valentine',
		  'login' => '8602',
		 'password' => Hash::make('8602'),
		  'email' => 'rafaela.valentine@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '36509',
		'dataVencimentoBoleto' => '08'
		));
		$user->aluno->turmas()->attach(36);
		$user = User::create(array(
		  'nome' => 'Sheeva',
		  'sobrenome' => 'Pádua',
		  'login' => '8078',
		 'password' => Hash::make('8078'),
		  'email' => 'sheeva.padua@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Caio, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '36836',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(37);
		$user = User::create(array(
		  'nome' => 'Jade',
		  'sobrenome' => 'Batista',
		  'login' => '5012',
		 'password' => Hash::make('5012'),
		  'email' => 'jade.batista@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '36826',
		'dataVencimentoBoleto' => '07'
		));
		$user->aluno->turmas()->attach(37);
		$user = User::create(array(
		  'nome' => 'Peterson',
		  'sobrenome' => 'Takahashi',
		  'login' => '5062',
		 'password' => Hash::make('5062'),
		  'email' => 'peterson.takahashi@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '38114',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(37);
		$user = User::create(array(
		  'nome' => 'Fernanda',
		  'sobrenome' => 'Yamada Silva',
		  'login' => '6325',
		 'password' => Hash::make('6325'),
		  'email' => 'fernanda.yamada silva@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '37143',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(38);
		$user = User::create(array(
		  'nome' => 'Jill',
		  'sobrenome' => 'Severo',
		  'login' => '2519',
		 'password' => Hash::make('2519'),
		  'email' => 'jill.severo@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Akemi e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '37697',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(38);
		$user = User::create(array(
		  'nome' => 'Augusto',
		  'sobrenome' => 'Valentine',
		  'login' => '6575',
		 'password' => Hash::make('6575'),
		  'email' => 'augusto.valentine@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou o Jill e amo assistir tv, séries e filmes',
		 'dataNascimento' => '37969',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(38);
		$user = User::create(array(
		  'nome' => 'Filipe',
		  'sobrenome' => 'Faria',
		  'login' => '4226',
		 'password' => Hash::make('4226'),
		  'email' => 'filipe.faria@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '37909',
		'dataVencimentoBoleto' => '03'
		));
		$user->aluno->turmas()->attach(38);
		$user = User::create(array(
		  'nome' => 'Morpheu',
		  'sobrenome' => 'Faria',
		  'login' => '6371',
		 'password' => Hash::make('6371'),
		  'email' => 'morpheu.faria@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Sonia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '37347',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(39);
		$user = User::create(array(
		  'nome' => 'Cleber',
		  'sobrenome' => 'Torres',
		  'login' => '1142',
		 'password' => Hash::make('1142'),
		  'email' => 'cleber.torres@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Augusto e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '37264',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(39);
		$user = User::create(array(
		  'nome' => 'Eduardo',
		  'sobrenome' => 'Ishida Silva',
		  'login' => '1544',
		 'password' => Hash::make('1544'),
		  'email' => 'eduardo.ishida silva@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Yoko, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '37731',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(39);
		$user = User::create(array(
		  'nome' => 'Angelina',
		  'sobrenome' => 'Suzuki',
		  'login' => '4651',
		 'password' => Hash::make('4651'),
		  'email' => 'angelina.suzuki@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '37221',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(39);
		$user = User::create(array(
		  'nome' => 'Barbara',
		  'sobrenome' => 'Rocha',
		  'login' => '2968',
		 'password' => Hash::make('2968'),
		  'email' => 'barbara.rocha@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Peterson, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '36929',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(40);
		$user = User::create(array(
		  'nome' => 'Lara',
		  'sobrenome' => 'Valentine',
		  'login' => '8357',
		 'password' => Hash::make('8357'),
		  'email' => 'lara.valentine@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '38033',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(40);
		$user = User::create(array(
		  'nome' => 'Bruno',
		  'sobrenome' => 'Pádua',
		  'login' => '6907',
		 'password' => Hash::make('6907'),
		  'email' => 'bruno.padua@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '38183',
		'dataVencimentoBoleto' => '11'
		));
		$user->aluno->turmas()->attach(40);
		$user = User::create(array(
		  'nome' => 'Jade',
		  'sobrenome' => 'Alves',
		  'login' => '4331',
		 'password' => Hash::make('4331'),
		  'email' => 'jade.alves@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '38005',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(40);
		$user = User::create(array(
		  'nome' => 'Jonas',
		  'sobrenome' => 'Faria',
		  'login' => '1404',
		 'password' => Hash::make('1404'),
		  'email' => 'jonas.faria@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Peterson e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '37686',
		'dataVencimentoBoleto' => '01'
		));
		$user->aluno->turmas()->attach(40);
		$user = User::create(array(
		  'nome' => 'Fernando',
		  'sobrenome' => 'Suzuki',
		  'login' => '6269',
		 'password' => Hash::make('6269'),
		  'email' => 'fernando.suzuki@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '29955',
		'dataVencimentoBoleto' => '06'
		));
		$user->aluno->turmas()->attach(41);
		$user = User::create(array(
		  'nome' => 'Rafaela',
		  'sobrenome' => 'da Silva',
		  'login' => '5591',
		 'password' => Hash::make('5591'),
		  'email' => 'rafaela.da silva@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '27601',
		'dataVencimentoBoleto' => '08'
		));
		$user->aluno->turmas()->attach(41);
		$user = User::create(array(
		  'nome' => 'Tamires',
		  'sobrenome' => 'Faria',
		  'login' => '4702',
		 'password' => Hash::make('4702'),
		  'email' => 'tamires.faria@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '33586',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(41);
		$user = User::create(array(
		  'nome' => 'Eric',
		  'sobrenome' => 'Castanheira',
		  'login' => '3458',
		 'password' => Hash::make('3458'),
		  'email' => 'eric.castanheira@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o ChunLi e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '27041',
		'dataVencimentoBoleto' => '07'
		));
		$user->aluno->turmas()->attach(41);
		$user = User::create(array(
		  'nome' => 'Dante',
		  'sobrenome' => 'Takahashi',
		  'login' => '6963',
		 'password' => Hash::make('6963'),
		  'email' => 'dante.takahashi@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou o Caroline e amo assistir tv, séries e filmes',
		 'dataNascimento' => '22204',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(42);
		$user = User::create(array(
		  'nome' => 'Cleber',
		  'sobrenome' => 'Peixoto',
		  'login' => '5024',
		 'password' => Hash::make('5024'),
		  'email' => 'cleber.peixoto@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '22271',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(42);
		$user = User::create(array(
		  'nome' => 'Caio',
		  'sobrenome' => 'da Silva',
		  'login' => '2128',
		 'password' => Hash::make('2128'),
		  'email' => 'caio.da silva@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Cleber e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '29661',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(42);
		$user = User::create(array(
		  'nome' => 'Kitana',
		  'sobrenome' => 'Camilo',
		  'login' => '1246',
		 'password' => Hash::make('1246'),
		  'email' => 'kitana.camilo@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Irene e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '28722',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(42);
		$user = User::create(array(
		  'nome' => 'Yoko',
		  'sobrenome' => 'Lins',
		  'login' => '8183',
		 'password' => Hash::make('8183'),
		  'email' => 'yoko.lins@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Filipe, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '22487',
		'dataVencimentoBoleto' => '03'
		));
		$user->aluno->turmas()->attach(43);
		$user = User::create(array(
		  'nome' => 'Alexandra',
		  'sobrenome' => 'Torres',
		  'login' => '6682',
		 'password' => Hash::make('6682'),
		  'email' => 'alexandra.torres@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '35477',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(43);
		$user = User::create(array(
		  'nome' => 'Andreia',
		  'sobrenome' => 'Monteiro',
		  'login' => '8919',
		 'password' => Hash::make('8919'),
		  'email' => 'andreia.monteiro@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Barbara, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '21176',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(43);
		$user = User::create(array(
		  'nome' => 'Jonas',
		  'sobrenome' => 'da Silva',
		  'login' => '8553',
		 'password' => Hash::make('8553'),
		  'email' => 'jonas.da silva@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '28605',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(43);
		$user = User::create(array(
		  'nome' => 'Doulgas',
		  'sobrenome' => 'Monteiro',
		  'login' => '1636',
		 'password' => Hash::make('1636'),
		  'email' => 'doulgas.monteiro@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '29777',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(44);
		$user = User::create(array(
		  'nome' => 'Sheeva',
		  'sobrenome' => 'da Mata',
		  'login' => '8900',
		 'password' => Hash::make('8900'),
		  'email' => 'sheeva.da mata@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '32820',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(44);
		$user = User::create(array(
		  'nome' => 'Xerxes',
		  'sobrenome' => 'Peixoto',
		  'login' => '5937',
		 'password' => Hash::make('5937'),
		  'email' => 'xerxes.peixoto@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Milena e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '35759',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(44);
		$user = User::create(array(
		  'nome' => 'Filipe',
		  'sobrenome' => 'Franca',
		  'login' => '3814',
		 'password' => Hash::make('3814'),
		  'email' => 'filipe.franca@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou o Cleber e amo assistir tv, séries e filmes',
		 'dataNascimento' => '23815',
		'dataVencimentoBoleto' => '11'
		));
		$user->aluno->turmas()->attach(44);
		$user = User::create(array(
		  'nome' => 'Aline',
		  'sobrenome' => 'Neto',
		  'login' => '1561',
		 'password' => Hash::make('1561'),
		  'email' => 'aline.neto@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '24066',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(45);
		$user = User::create(array(
		  'nome' => 'Doulgas',
		  'sobrenome' => 'Torres',
		  'login' => '9245',
		 'password' => Hash::make('9245'),
		  'email' => 'doulgas.torres@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Jonas e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '28128',
		'dataVencimentoBoleto' => '01'
		));
		$user->aluno->turmas()->attach(45);
		$user = User::create(array(
		  'nome' => 'Sarah',
		  'sobrenome' => 'Valverde',
		  'login' => '4139',
		 'password' => Hash::make('4139'),
		  'email' => 'sarah.valverde@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Filipe e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '32559',
		'dataVencimentoBoleto' => '06'
		));
		$user->aluno->turmas()->attach(45);
		$user = User::create(array(
		  'nome' => 'Sheeva',
		  'sobrenome' => 'Macedo',
		  'login' => '5042',
		 'password' => Hash::make('5042'),
		  'email' => 'sheeva.macedo@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Otavio, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '20116',
		'dataVencimentoBoleto' => '08'
		));
		$user->aluno->turmas()->attach(45);
		$user = User::create(array(
		  'nome' => 'Andreia',
		  'sobrenome' => 'Porta',
		  'login' => '2550',
		 'password' => Hash::make('2550'),
		  'email' => 'andreia.porta@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '28587',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(46);
		$user = User::create(array(
		  'nome' => 'Chunli',
		  'sobrenome' => 'Neto',
		  'login' => '1121',
		 'password' => Hash::make('1121'),
		  'email' => 'chunli.neto@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Xerxes, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '26217',
		'dataVencimentoBoleto' => '07'
		));
		$user->aluno->turmas()->attach(46);
		$user = User::create(array(
		  'nome' => 'Bruno',
		  'sobrenome' => 'Nazário',
		  'login' => '4452',
		 'password' => Hash::make('4452'),
		  'email' => 'bruno.nazario@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '27731',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(46);
		$user = User::create(array(
		  'nome' => 'Otavio',
		  'sobrenome' => 'Monteiro',
		  'login' => '9380',
		 'password' => Hash::make('9380'),
		  'email' => 'otavio.monteiro@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '22025',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(46);
		$user = User::create(array(
		  'nome' => 'Jill',
		  'sobrenome' => 'Batista',
		  'login' => '7210',
		 'password' => Hash::make('7210'),
		  'email' => 'jill.batista@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '35142',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(47);
		$user = User::create(array(
		  'nome' => 'Filipe',
		  'sobrenome' => 'Torres',
		  'login' => '5163',
		 'password' => Hash::make('5163'),
		  'email' => 'filipe.torres@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Caio e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '24437',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(47);
		$user = User::create(array(
		  'nome' => 'Filipe',
		  'sobrenome' => 'Ishida Silva',
		  'login' => '6095',
		 'password' => Hash::make('6095'),
		  'email' => 'filipe.ishida silva@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou o Jaime e amo assistir tv, séries e filmes',
		 'dataNascimento' => '32740',
		'dataVencimentoBoleto' => '03'
		));
		$user->aluno->turmas()->attach(47);
		$user = User::create(array(
		  'nome' => 'Xerxes',
		  'sobrenome' => 'Severo',
		  'login' => '9767',
		 'password' => Hash::make('9767'),
		  'email' => 'xerxes.severo@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '35784',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(47);
		$user = User::create(array(
		  'nome' => 'Camila',
		  'sobrenome' => 'Suzuki',
		  'login' => '9138',
		 'password' => Hash::make('9138'),
		  'email' => 'camila.suzuki@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Peterson e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '35474',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(48);
		$user = User::create(array(
		  'nome' => 'Fernanda',
		  'sobrenome' => 'Minazuki',
		  'login' => '5181',
		 'password' => Hash::make('5181'),
		  'email' => 'fernanda.minazuki@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Simão e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '30717',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(48);
		$user = User::create(array(
		  'nome' => 'Dante',
		  'sobrenome' => 'Salgueiro',
		  'login' => '5936',
		 'password' => Hash::make('5936'),
		  'email' => 'dante.salgueiro@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Sonia, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '27857',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(48);
		$user = User::create(array(
		  'nome' => 'Doulgas',
		  'sobrenome' => 'Lopes',
		  'login' => '4582',
		 'password' => Hash::make('4582'),
		  'email' => 'doulgas.lopes@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '33619',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(48);
		$user = User::create(array(
		  'nome' => 'Filipe',
		  'sobrenome' => 'Carvalho',
		  'login' => '9826',
		 'password' => Hash::make('9826'),
		  'email' => 'filipe.carvalho@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Claudio, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '28893',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(49);
		$user = User::create(array(
		  'nome' => 'Augusto',
		  'sobrenome' => 'Hernandes',
		  'login' => '4376',
		 'password' => Hash::make('4376'),
		  'email' => 'augusto.hernandes@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '30293',
		'dataVencimentoBoleto' => '11'
		));
		$user->aluno->turmas()->attach(49);
		$user = User::create(array(
		  'nome' => 'Doulgas',
		  'sobrenome' => 'Yamada Silva',
		  'login' => '4975',
		 'password' => Hash::make('4975'),
		  'email' => 'doulgas.yamada silva@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '35290',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(49);
		$user = User::create(array(
		  'nome' => 'Caio',
		  'sobrenome' => 'Leal',
		  'login' => '3997',
		 'password' => Hash::make('3997'),
		  'email' => 'caio.leal@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '33802',
		'dataVencimentoBoleto' => '01'
		));
		$user->aluno->turmas()->attach(49);
		$user = User::create(array(
		  'nome' => 'Angelina',
		  'sobrenome' => 'Batista',
		  'login' => '7101',
		 'password' => Hash::make('7101'),
		  'email' => 'angelina.batista@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Leonidas e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '27661',
		'dataVencimentoBoleto' => '06'
		));
		$user->aluno->turmas()->attach(50);
		$user = User::create(array(
		  'nome' => 'Cauê',
		  'sobrenome' => 'Sato',
		  'login' => '5086',
		 'password' => Hash::make('5086'),
		  'email' => 'caue.sato@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou o Peterson e amo assistir tv, séries e filmes',
		 'dataNascimento' => '25268',
		'dataVencimentoBoleto' => '08'
		));
		$user->aluno->turmas()->attach(50);
		$user = User::create(array(
		  'nome' => 'Trinity',
		  'sobrenome' => 'Minazuki',
		  'login' => '6591',
		 'password' => Hash::make('6591'),
		  'email' => 'trinity.minazuki@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '32128',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(50);
		$user = User::create(array(
		  'nome' => 'Filipe',
		  'sobrenome' => 'Macedo',
		  'login' => '6623',
		 'password' => Hash::make('6623'),
		  'email' => 'filipe.macedo@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Andreia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '20046',
		'dataVencimentoBoleto' => '07'
		));
		$user->aluno->turmas()->attach(50);
		$user = User::create(array(
		  'nome' => 'Morpheu',
		  'sobrenome' => 'Peixoto',
		  'login' => '8609',
		 'password' => Hash::make('8609'),
		  'email' => 'morpheu.peixoto@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Caroline e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '35631',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(51);
		$user = User::create(array(
		  'nome' => 'Caroline',
		  'sobrenome' => 'Franca',
		  'login' => '8020',
		 'password' => Hash::make('8020'),
		  'email' => 'caroline.franca@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a ChunLi, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '29717',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(51);
		$user = User::create(array(
		  'nome' => 'Fernando',
		  'sobrenome' => 'Alves',
		  'login' => '9819',
		 'password' => Hash::make('9819'),
		  'email' => 'fernando.alves@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '22872',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(51);
		$user = User::create(array(
		  'nome' => 'Cleber',
		  'sobrenome' => 'Franca',
		  'login' => '8269',
		 'password' => Hash::make('8269'),
		  'email' => 'cleber.franca@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Akemi, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '26191',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(51);
		$user = User::create(array(
		  'nome' => 'Cleber',
		  'sobrenome' => 'Matos',
		  'login' => '5026',
		 'password' => Hash::make('5026'),
		  'email' => 'cleber.matos@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '22988',
		'dataVencimentoBoleto' => '03'
		));
		$user->aluno->turmas()->attach(52);
		$user = User::create(array(
		  'nome' => 'Dante',
		  'sobrenome' => 'Peixoto',
		  'login' => '8592',
		 'password' => Hash::make('8592'),
		  'email' => 'dante.peixoto@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '34415',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(52);
		$user = User::create(array(
		  'nome' => 'Leonidas',
		  'sobrenome' => 'Hernandes',
		  'login' => '2274',
		 'password' => Hash::make('2274'),
		  'email' => 'leonidas.hernandes@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '20920',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(52);
		$user = User::create(array(
		  'nome' => 'Otavio',
		  'sobrenome' => 'Alves',
		  'login' => '6710',
		 'password' => Hash::make('6710'),
		  'email' => 'otavio.alves@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Otavio e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '23499',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(52);
		$user = User::create(array(
		  'nome' => 'Yoko',
		  'sobrenome' => 'Valverde',
		  'login' => '2271',
		 'password' => Hash::make('2271'),
		  'email' => 'yoko.valverde@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou a Xerxes e amo assistir tv, séries e filmes',
		 'dataNascimento' => '30633',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(53);
		$user = User::create(array(
		  'nome' => 'Alexandra',
		  'sobrenome' => 'Takahashi',
		  'login' => '4791',
		 'password' => Hash::make('4791'),
		  'email' => 'alexandra.takahashi@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '31969',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(53);
		$user = User::create(array(
		  'nome' => 'Dante',
		  'sobrenome' => 'Tanaka',
		  'login' => '9449',
		 'password' => Hash::make('9449'),
		  'email' => 'dante.tanaka@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Milena e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '34105',
		'dataVencimentoBoleto' => '11'
		));
		$user->aluno->turmas()->attach(53);
		$user = User::create(array(
		  'nome' => 'Cleber',
		  'sobrenome' => 'Valverde',
		  'login' => '5698',
		 'password' => Hash::make('5698'),
		  'email' => 'cleber.valverde@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Eric e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '34769',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(53);
		$user = User::create(array(
		  'nome' => 'Caroline',
		  'sobrenome' => 'Takahashi',
		  'login' => '3118',
		 'password' => Hash::make('3118'),
		  'email' => 'caroline.takahashi@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Dante, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '26664',
		'dataVencimentoBoleto' => '01'
		));
		$user->aluno->turmas()->attach(54);
		$user = User::create(array(
		  'nome' => 'Jill',
		  'sobrenome' => 'Takahashi',
		  'login' => '7352',
		 'password' => Hash::make('7352'),
		  'email' => 'jill.takahashi@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '33033',
		'dataVencimentoBoleto' => '06'
		));
		$user->aluno->turmas()->attach(54);
		$user = User::create(array(
		  'nome' => 'Peterson',
		  'sobrenome' => 'Alves',
		  'login' => '8084',
		 'password' => Hash::make('8084'),
		  'email' => 'peterson.alves@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Daniela, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '28430',
		'dataVencimentoBoleto' => '08'
		));
		$user->aluno->turmas()->attach(54);
		$user = User::create(array(
		  'nome' => 'Filipe',
		  'sobrenome' => 'Tanaka',
		  'login' => '5381',
		 'password' => Hash::make('5381'),
		  'email' => 'filipe.tanaka@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '23378',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(54);
		$user = User::create(array(
		  'nome' => 'Fernanda',
		  'sobrenome' => 'Camilo',
		  'login' => '8926',
		 'password' => Hash::make('8926'),
		  'email' => 'fernanda.camilo@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '26434',
		'dataVencimentoBoleto' => '07'
		));
		$user->aluno->turmas()->attach(55);
		$user = User::create(array(
		  'nome' => 'Odete',
		  'sobrenome' => 'Carvalho',
		  'login' => '1947',
		 'password' => Hash::make('1947'),
		  'email' => 'odete.carvalho@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '28856',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(55);
		$user = User::create(array(
		  'nome' => 'Xerxes',
		  'sobrenome' => 'Costa',
		  'login' => '1104',
		 'password' => Hash::make('1104'),
		  'email' => 'xerxes.costa@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Jaime e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '21217',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(55);
		$user = User::create(array(
		  'nome' => 'Cleber',
		  'sobrenome' => 'Augusto',
		  'login' => '8212',
		 'password' => Hash::make('8212'),
		  'email' => 'cleber.augusto@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou o Xerxes e amo assistir tv, séries e filmes',
		 'dataNascimento' => '31200',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(55);
		$user = User::create(array(
		  'nome' => 'Michele',
		  'sobrenome' => 'Yamada Silva',
		  'login' => '2899',
		 'password' => Hash::make('2899'),
		  'email' => 'michele.yamada silva@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '23488',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(56);
		$user = User::create(array(
		  'nome' => 'Alexandra',
		  'sobrenome' => 'Vieira',
		  'login' => '4459',
		 'password' => Hash::make('4459'),
		  'email' => 'alexandra.vieira@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Bruna e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '33329',
		'dataVencimentoBoleto' => '03'
		));
		$user->aluno->turmas()->attach(56);
		$user = User::create(array(
		  'nome' => 'Camila',
		  'sobrenome' => 'Alves',
		  'login' => '6302',
		 'password' => Hash::make('6302'),
		  'email' => 'camila.alves@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Odete e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '30563',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(56);
		$user = User::create(array(
		  'nome' => 'Michele',
		  'sobrenome' => 'Redfield',
		  'login' => '6237',
		 'password' => Hash::make('6237'),
		  'email' => 'michele.redfield@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Sarah, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '22518',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(56);
		$user = User::create(array(
		  'nome' => 'Jonas',
		  'sobrenome' => 'Batista',
		  'login' => '6223',
		 'password' => Hash::make('6223'),
		  'email' => 'jonas.batista@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '21931',
		'dataVencimentoBoleto' => '02'
		));
		$user->aluno->turmas()->attach(57);
		$user = User::create(array(
		  'nome' => 'Fernanda',
		  'sobrenome' => 'Carvalho',
		  'login' => '2963',
		 'password' => Hash::make('2963'),
		  'email' => 'fernanda.carvalho@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Caio, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '29661',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(57);
		$user = User::create(array(
		  'nome' => 'Otavio',
		  'sobrenome' => 'Sato',
		  'login' => '6039',
		 'password' => Hash::make('6039'),
		  'email' => 'otavio.sato@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '27622',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(57);
		$user = User::create(array(
		  'nome' => 'Rafaela',
		  'sobrenome' => 'Ishida Silva',
		  'login' => '1004',
		 'password' => Hash::make('1004'),
		  'email' => 'rafaela.ishida silva@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '26026',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(57);
		$user = User::create(array(
		  'nome' => 'Kitana',
		  'sobrenome' => 'Sato',
		  'login' => '5283',
		 'password' => Hash::make('5283'),
		  'email' => 'kitana.sato@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '26543',
		'dataVencimentoBoleto' => '11'
		));
		$user->aluno->turmas()->attach(58);
		$user = User::create(array(
		  'nome' => 'Sheeva',
		  'sobrenome' => 'Jordão',
		  'login' => '5424',
		 'password' => Hash::make('5424'),
		  'email' => 'sheeva.jordao@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Akemi e gosto de brincar de boneca , estudar e fazer novos amigos',
		 'dataNascimento' => '29620',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(58);
		$user = User::create(array(
		  'nome' => 'Cauê',
		  'sobrenome' => 'da Silva',
		  'login' => '1880',
		 'password' => Hash::make('1880'),
		  'email' => 'caue.da silva@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Olá, sou o Jill e amo assistir tv, séries e filmes',
		 'dataNascimento' => '23542',
		'dataVencimentoBoleto' => '01'
		));
		$user->aluno->turmas()->attach(58);
		$user = User::create(array(
		  'nome' => 'Michele',
		  'sobrenome' => 'Franca',
		  'login' => '3716',
		 'password' => Hash::make('3716'),
		  'email' => 'michele.franca@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '23188',
		'dataVencimentoBoleto' => '06'
		));
		$user->aluno->turmas()->attach(58);
		$user = User::create(array(
		  'nome' => 'Irene',
		  'sobrenome' => 'Takahashi',
		  'login' => '3728',
		 'password' => Hash::make('3728'),
		  'email' => 'irene.takahashi@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Sonia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
		 'dataNascimento' => '21804',
		'dataVencimentoBoleto' => '08'
		));
		$user->aluno->turmas()->attach(59);
		$user = User::create(array(
		  'nome' => 'Andreia',
		  'sobrenome' => 'Gouveia',
		  'login' => '1535',
		 'password' => Hash::make('1535'),
		  'email' => 'andreia.gouveia@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Augusto e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
		 'dataNascimento' => '24439',
		'dataVencimentoBoleto' => '10'
		));
		$user->aluno->turmas()->attach(59);
		$user = User::create(array(
		  'nome' => 'Dante',
		  'sobrenome' => 'Hernandes',
		  'login' => '6032',
		 'password' => Hash::make('6032'),
		  'email' => 'dante.hernandes@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou o Yoko, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
		 'dataNascimento' => '29304',
		'dataVencimentoBoleto' => '07'
		));
		$user->aluno->turmas()->attach(59);
		$user = User::create(array(
		  'nome' => 'Trinity',
		  'sobrenome' => 'Macedo',
		  'login' => '8418',
		 'password' => Hash::make('8418'),
		  'email' => 'trinity.macedo@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
		 'dataNascimento' => '28221',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(59);
		$user = User::create(array(
		  'nome' => 'Jade',
		  'sobrenome' => 'Freire',
		  'login' => '6184',
		 'password' => Hash::make('6184'),
		  'email' => 'jade.freire@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Sou a Peterson, adoro cinema e o Justin Bieber! Sou fã do One Direction',
		 'dataNascimento' => '32772',
		'dataVencimentoBoleto' => '05'
		));
		$user->aluno->turmas()->attach(60);
		$user = User::create(array(
		  'nome' => 'Caio',
		  'sobrenome' => 'Pádua',
		  'login' => '5265',
		 'password' => Hash::make('5265'),
		  'email' => 'caio.padua@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Futebol, video game e internet',
		 'dataNascimento' => '25609',
		'dataVencimentoBoleto' => '09'
		));
		$user->aluno->turmas()->attach(60);
		$user = User::create(array(
		  'nome' => 'Doulgas',
		  'sobrenome' => 'Faria',
		  'login' => '4367',
		 'password' => Hash::make('4367'),
		  'email' => 'doulgas.faria@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
		 'dataNascimento' => '28056',
		'dataVencimentoBoleto' => '04'
		));
		$user->aluno->turmas()->attach(60);
		$user = User::create(array(
		  'nome' => 'Akemi',
		  'sobrenome' => 'Matos',
		  'login' => '3344',
		 'password' => Hash::make('3344'),
		  'email' => 'akemi.matos@gmail.com',
		 'confirmed' => '1',
		 'confirmation_code' => conf_code();
		 'tipo' => '1'
		));
		$Aluno = Aluno::create(array(
		  'id' => $user->id,
		  'matricula' => 'matriculaAlu',
		  'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
		 'dataNascimento' => '27916',
		'dataVencimentoBoleto' => '03'
		));
		$user->aluno->turmas()->attach(60);


	}

}


 ?>