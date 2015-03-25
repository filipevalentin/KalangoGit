<?php 

class AlunoSeeder extends Seeder{

	public function run(){
		Eloquent::unguard();

		$user = User::create(array(
			'nome' => 'Eduardo',
			'sobrenome' => 'Minazuki',
			'login' => '2544',
			'password' => Hash::make('2544'),
			'email' => 'eduardo.minazuki@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2544',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '05/04/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(1);
		$user = User::create(array(
			'nome' => 'Rafaela',
			'sobrenome' => 'Ishida',
			'login' => '1926',
			'password' => Hash::make('1926'),
			'email' => 'rafaela.ishida@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1926',
			'sobreMim' => 'Sou a Rafaela, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '04/07/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(1);
		$user = User::create(array(
			'nome' => 'Caio',
			'sobrenome' => 'Macedo',
			'login' => '4787',
			'password' => Hash::make('4787'),
			'email' => 'caio.macedo@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4787',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '21/06/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(1);
		$user = User::create(array(
			'nome' => 'Kitana',
			'sobrenome' => 'Peixoto',
			'login' => '4018',
			'password' => Hash::make('4018'),
			'email' => 'kitana.peixoto@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4018',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '28/07/2007',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(1);
		$user = User::create(array(
			'nome' => 'Morpheu',
			'sobrenome' => 'Villablanca',
			'login' => '9275',
			'password' => Hash::make('9275'),
			'email' => 'morpheu.villablanca@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9275',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '25/12/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(1);
		$user = User::create(array(
			'nome' => 'Chunli',
			'sobrenome' => 'Neves',
			'login' => '5807',
			'password' => Hash::make('5807'),
			'email' => 'chunli.neves@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5807',
			'sobreMim' => 'Sou a ChunLi e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '28/03/2006',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(1);
		$user = User::create(array(
			'nome' => 'Caroline',
			'sobrenome' => 'Neves',
			'login' => '8745',
			'password' => Hash::make('8745'),
			'email' => 'caroline.neves@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8745',
			'sobreMim' => 'Olá, sou a Caroline e amo assistir tv, séries e filmes',
			'dataNascimento' => '21/04/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(2);
		$user = User::create(array(
			'nome' => 'Caroline',
			'sobrenome' => 'da Silva',
			'login' => '5030',
			'password' => Hash::make('5030'),
			'email' => 'caroline.da silva@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5030',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '30/07/2007',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(2);
		$user = User::create(array(
			'nome' => 'Cleber',
			'sobrenome' => 'Sato',
			'login' => '8129',
			'password' => Hash::make('8129'),
			'email' => 'cleber.sato@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8129',
			'sobreMim' => 'Sou o Cleber e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '25/12/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(2);
		$user = User::create(array(
			'nome' => 'Irene',
			'sobrenome' => 'Salgueiro',
			'login' => '4507',
			'password' => Hash::make('4507'),
			'email' => 'irene.salgueiro@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4507',
			'sobreMim' => 'Sou a Irene e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '02/10/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(2);
		$user = User::create(array(
			'nome' => 'Filipe',
			'sobrenome' => 'Neto',
			'login' => '7502',
			'password' => Hash::make('7502'),
			'email' => 'filipe.neto@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '7502',
			'sobreMim' => 'Sou o Filipe, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '21/05/2007',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(2);
		$user = User::create(array(
			'nome' => 'Filipe',
			'sobrenome' => 'Nazário',
			'login' => '7508',
			'password' => Hash::make('7508'),
			'email' => 'filipe.nazario@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '7508',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '23/11/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(2);
		$user = User::create(array(
			'nome' => 'Barbara',
			'sobrenome' => 'Nazário',
			'login' => '6599',
			'password' => Hash::make('6599'),
			'email' => 'barbara.nazario@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6599',
			'sobreMim' => 'Sou a Barbara, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '14/07/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(3);
		$user = User::create(array(
			'nome' => 'Sarah',
			'sobrenome' => 'Ishida Silva',
			'login' => '6314',
			'password' => Hash::make('6314'),
			'email' => 'sarah.ishida silva@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6314',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '06/06/2007',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(3);
		$user = User::create(array(
			'nome' => 'Akemi',
			'sobrenome' => 'Semedo',
			'login' => '2349',
			'password' => Hash::make('2349'),
			'email' => 'akemi.semedo@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2349',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '07/02/2007',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(3);
		$user = User::create(array(
			'nome' => 'Milena',
			'sobrenome' => 'Nazário',
			'login' => '6821',
			'password' => Hash::make('6821'),
			'email' => 'milena.nazario@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6821',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '24/09/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(3);
		$user = User::create(array(
			'nome' => 'Milena',
			'sobrenome' => 'Castanheira',
			'login' => '3001',
			'password' => Hash::make('3001'),
			'email' => 'milena.castanheira@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3001',
			'sobreMim' => 'Sou a Milena e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '03/11/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(3);
		$user = User::create(array(
			'nome' => 'Cleber',
			'sobrenome' => 'Freire',
			'login' => '9096',
			'password' => Hash::make('9096'),
			'email' => 'cleber.freire@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9096',
			'sobreMim' => 'Olá, sou o Cleber e amo assistir tv, séries e filmes',
			'dataNascimento' => '26/12/2006',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(3);
		$user = User::create(array(
			'nome' => 'Cleber',
			'sobrenome' => 'Leal',
			'login' => '3634',
			'password' => Hash::make('3634'),
			'email' => 'cleber.leal@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3634',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '12/04/2006',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(4);
		$user = User::create(array(
			'nome' => 'Jonas',
			'sobrenome' => 'Nazário',
			'login' => '7255',
			'password' => Hash::make('7255'),
			'email' => 'jonas.nazario@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '7255',
			'sobreMim' => 'Sou a Jonas e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '21/10/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(4);
		$user = User::create(array(
			'nome' => 'Filipe',
			'sobrenome' => 'Monteiro',
			'login' => '7935',
			'password' => Hash::make('7935'),
			'email' => 'filipe.monteiro@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '7935',
			'sobreMim' => 'Sou o Filipe e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '03/06/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(4);
		$user = User::create(array(
			'nome' => 'Otavio',
			'sobrenome' => 'dos Santos',
			'login' => '6521',
			'password' => Hash::make('6521'),
			'email' => 'otavio.dos santos@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6521',
			'sobreMim' => 'Sou o Otavio, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '21/04/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(4);
		$user = User::create(array(
			'nome' => 'Jaime',
			'sobrenome' => 'Valverde',
			'login' => '8001',
			'password' => Hash::make('8001'),
			'email' => 'jaime.valverde@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8001',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '12/08/2007',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(4);
		$user = User::create(array(
			'nome' => 'Xerxes',
			'sobrenome' => 'Rocha',
			'login' => '2734',
			'password' => Hash::make('2734'),
			'email' => 'xerxes.rocha@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2734',
			'sobreMim' => 'Sou o Xerxes, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '28/10/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(5);
		$user = User::create(array(
			'nome' => 'Alexandra',
			'sobrenome' => 'Pinheiro',
			'login' => '1878',
			'password' => Hash::make('1878'),
			'email' => 'alexandra.pinheiro@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1878',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '15/07/2006',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(5);
		$user = User::create(array(
			'nome' => 'Sarah',
			'sobrenome' => 'Carvalho',
			'login' => '5117',
			'password' => Hash::make('5117'),
			'email' => 'sarah.carvalho@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5117',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '30/11/2006',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(5);
		$user = User::create(array(
			'nome' => 'Sonia',
			'sobrenome' => 'Takahashi',
			'login' => '2985',
			'password' => Hash::make('2985'),
			'email' => 'sonia.takahashi@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2985',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '25/02/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(5);
		$user = User::create(array(
			'nome' => 'Caio',
			'sobrenome' => 'Nazário',
			'login' => '1791',
			'password' => Hash::make('1791'),
			'email' => 'caio.nazario@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1791',
			'sobreMim' => 'Sou o Caio e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '16/08/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(6);
		$user = User::create(array(
			'nome' => 'Jaime',
			'sobrenome' => 'Takahashi',
			'login' => '4089',
			'password' => Hash::make('4089'),
			'email' => 'jaime.takahashi@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4089',
			'sobreMim' => 'Olá, sou o Jaime e amo assistir tv, séries e filmes',
			'dataNascimento' => '12/07/2006',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(6);
		$user = User::create(array(
			'nome' => 'Akemi',
			'sobrenome' => 'Takahashi',
			'login' => '5490',
			'password' => Hash::make('5490'),
			'email' => 'akemi.takahashi@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5490',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '30/12/2006',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(6);
		$user = User::create(array(
			'nome' => 'Peterson',
			'sobrenome' => 'Torres',
			'login' => '3641',
			'password' => Hash::make('3641'),
			'email' => 'peterson.torres@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3641',
			'sobreMim' => 'Sou o Peterson e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '01/04/2007',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(6);
		$user = User::create(array(
			'nome' => 'Simão',
			'sobrenome' => 'Alves',
			'login' => '5460',
			'password' => Hash::make('5460'),
			'email' => 'simao.alves@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5460',
			'sobreMim' => 'Sou o Simão e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '30/12/2007',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(7);
		$user = User::create(array(
			'nome' => 'Sonia',
			'sobrenome' => 'Nazário',
			'login' => '3056',
			'password' => Hash::make('3056'),
			'email' => 'sonia.nazario@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3056',
			'sobreMim' => 'Sou a Sonia, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '21/08/2007',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(7);
		$user = User::create(array(
			'nome' => 'Fernando',
			'sobrenome' => 'Hernandes',
			'login' => '8385',
			'password' => Hash::make('8385'),
			'email' => 'fernando.hernandes@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8385',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '18/11/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(7);
		$user = User::create(array(
			'nome' => 'Claudio',
			'sobrenome' => 'Severo',
			'login' => '1487',
			'password' => Hash::make('1487'),
			'email' => 'claudio.severo@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1487',
			'sobreMim' => 'Sou o Claudio, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '10/06/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(7);
		$user = User::create(array(
			'nome' => 'Milena',
			'sobrenome' => 'Matos',
			'login' => '4196',
			'password' => Hash::make('4196'),
			'email' => 'milena.matos@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4196',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '30/06/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(8);
		$user = User::create(array(
			'nome' => 'Cauê',
			'sobrenome' => 'Carvalho',
			'login' => '7113',
			'password' => Hash::make('7113'),
			'email' => 'caue.carvalho@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '7113',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '22/03/2006',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(8);
		$user = User::create(array(
			'nome' => 'Simão',
			'sobrenome' => 'Freire',
			'login' => '1023',
			'password' => Hash::make('1023'),
			'email' => 'simao.freire@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1023',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '21/10/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(8);
		$user = User::create(array(
			'nome' => 'Leonidas',
			'sobrenome' => 'Semedo',
			'login' => '1285',
			'password' => Hash::make('1285'),
			'email' => 'leonidas.semedo@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1285',
			'sobreMim' => 'Sou o Leonidas e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '17/11/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(8);
		$user = User::create(array(
			'nome' => 'Peterson',
			'sobrenome' => 'Neto',
			'login' => '1409',
			'password' => Hash::make('1409'),
			'email' => 'peterson.neto@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1409',
			'sobreMim' => 'Olá, sou o Peterson e amo assistir tv, séries e filmes',
			'dataNascimento' => '30/05/2007',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(9);
		$user = User::create(array(
			'nome' => 'Fernando',
			'sobrenome' => 'Costa',
			'login' => '9516',
			'password' => Hash::make('9516'),
			'email' => 'fernando.costa@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9516',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '29/10/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(9);
		$user = User::create(array(
			'nome' => 'Andreia',
			'sobrenome' => 'Jordão',
			'login' => '6692',
			'password' => Hash::make('6692'),
			'email' => 'andreia.jordao@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6692',
			'sobreMim' => 'Sou a Andreia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '18/05/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(9);
		$user = User::create(array(
			'nome' => 'Caroline',
			'sobrenome' => 'Rocha',
			'login' => '8148',
			'password' => Hash::make('8148'),
			'email' => 'caroline.rocha@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8148',
			'sobreMim' => 'Sou a Caroline e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '27/03/2006',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(9);
		$user = User::create(array(
			'nome' => 'Chunli',
			'sobrenome' => 'Carvalho',
			'login' => '5932',
			'password' => Hash::make('5932'),
			'email' => 'chunli.carvalho@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5932',
			'sobreMim' => 'Sou a ChunLi, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '30/07/2006',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(10);
		$user = User::create(array(
			'nome' => 'Eric',
			'sobrenome' => 'Ishida Silva',
			'login' => '9277',
			'password' => Hash::make('9277'),
			'email' => 'eric.ishida silva@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9277',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '26/05/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(10);
		$user = User::create(array(
			'nome' => 'Akemi',
			'sobrenome' => 'Redfield',
			'login' => '7605',
			'password' => Hash::make('7605'),
			'email' => 'akemi.redfield@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '7605',
			'sobreMim' => 'Sou a Akemi, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '22/12/2007',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(10);
		$user = User::create(array(
			'nome' => 'Rafaela',
			'sobrenome' => 'Tanaka',
			'login' => '2312',
			'password' => Hash::make('2312'),
			'email' => 'rafaela.tanaka@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2312',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '17/12/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(10);
		$user = User::create(array(
			'nome' => 'Trinity',
			'sobrenome' => 'Neto',
			'login' => '4036',
			'password' => Hash::make('4036'),
			'email' => 'trinity.neto@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4036',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '24/08/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(11);
		$user = User::create(array(
			'nome' => 'Jéssica',
			'sobrenome' => 'Freire',
			'login' => '4663',
			'password' => Hash::make('4663'),
			'email' => 'jessica.freire@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4663',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '29/07/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(11);
		$user = User::create(array(
			'nome' => 'Otavio',
			'sobrenome' => 'Pádua',
			'login' => '8773',
			'password' => Hash::make('8773'),
			'email' => 'otavio.padua@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8773',
			'sobreMim' => 'Sou o Otavio e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '26/09/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(11);
		$user = User::create(array(
			'nome' => 'Xerxes',
			'sobrenome' => 'Matos',
			'login' => '2347',
			'password' => Hash::make('2347'),
			'email' => 'xerxes.matos@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2347',
			'sobreMim' => 'Olá, sou o Xerxes e amo assistir tv, séries e filmes',
			'dataNascimento' => '02/06/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(11);
		$user = User::create(array(
			'nome' => 'Dante',
			'sobrenome' => 'Minazuki',
			'login' => '4867',
			'password' => Hash::make('4867'),
			'email' => 'dante.minazuki@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4867',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '19/07/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(12);
		$user = User::create(array(
			'nome' => 'Milena',
			'sobrenome' => 'Batista',
			'login' => '3715',
			'password' => Hash::make('3715'),
			'email' => 'milena.batista@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3715',
			'sobreMim' => 'Sou a Milena e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '14/03/2006',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(12);
		$user = User::create(array(
			'nome' => 'Eric',
			'sobrenome' => 'Alves',
			'login' => '9348',
			'password' => Hash::make('9348'),
			'email' => 'eric.alves@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9348',
			'sobreMim' => 'Sou o Eric e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '14/12/2007',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(12);
		$user = User::create(array(
			'nome' => 'Dante',
			'sobrenome' => 'Macedo',
			'login' => '4776',
			'password' => Hash::make('4776'),
			'email' => 'dante.macedo@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4776',
			'sobreMim' => 'Sou o Dante, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '06/01/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(12);
		$user = User::create(array(
			'nome' => 'Jade',
			'sobrenome' => 'Villablanca',
			'login' => '1702',
			'password' => Hash::make('1702'),
			'email' => 'jade.villablanca@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1702',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '31/08/2007',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(13);
		$user = User::create(array(
			'nome' => 'Daniela',
			'sobrenome' => 'Monteiro',
			'login' => '2722',
			'password' => Hash::make('2722'),
			'email' => 'daniela.monteiro@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2722',
			'sobreMim' => 'Sou a Daniela, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '18/11/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(13);
		$user = User::create(array(
			'nome' => 'Morpheu',
			'sobrenome' => 'Matos',
			'login' => '1501',
			'password' => Hash::make('1501'),
			'email' => 'morpheu.matos@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1501',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '20/05/2006',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(13);
		$user = User::create(array(
			'nome' => 'Rafaela',
			'sobrenome' => 'Alves',
			'login' => '7815',
			'password' => Hash::make('7815'),
			'email' => 'rafaela.alves@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '7815',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '19/03/2007',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(13);
		$user = User::create(array(
			'nome' => 'Fernando',
			'sobrenome' => 'Takahashi',
			'login' => '4804',
			'password' => Hash::make('4804'),
			'email' => 'fernando.takahashi@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4804',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '21/05/2007',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(14);
		$user = User::create(array(
			'nome' => 'Jaime',
			'sobrenome' => 'Pinheiro',
			'login' => '7148',
			'password' => Hash::make('7148'),
			'email' => 'jaime.pinheiro@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '7148',
			'sobreMim' => 'Sou o Jaime e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '27/07/2007',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(14);
		$user = User::create(array(
			'nome' => 'Xerxes',
			'sobrenome' => 'Torres',
			'login' => '4622',
			'password' => Hash::make('4622'),
			'email' => 'xerxes.torres@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4622',
			'sobreMim' => 'Olá, sou o Xerxes e amo assistir tv, séries e filmes',
			'dataNascimento' => '10/06/2006',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(14);
		$user = User::create(array(
			'nome' => 'Camila',
			'sobrenome' => 'dos Santos',
			'login' => '1582',
			'password' => Hash::make('1582'),
			'email' => 'camila.dos santos@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1582',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '03/08/2006',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(14);
		$user = User::create(array(
			'nome' => 'Bruna',
			'sobrenome' => 'Faria',
			'login' => '1365',
			'password' => Hash::make('1365'),
			'email' => 'bruna.faria@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1365',
			'sobreMim' => 'Sou a Bruna e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '01/11/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(15);
		$user = User::create(array(
			'nome' => 'Odete',
			'sobrenome' => 'Salgueiro',
			'login' => '7025',
			'password' => Hash::make('7025'),
			'email' => 'odete.salgueiro@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '7025',
			'sobreMim' => 'Sou a Odete e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '17/12/2006',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(15);
		$user = User::create(array(
			'nome' => 'Sarah',
			'sobrenome' => 'Castanheira',
			'login' => '7617',
			'password' => Hash::make('7617'),
			'email' => 'sarah.castanheira@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '7617',
			'sobreMim' => 'Sou a Sarah, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '16/05/2006',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(15);
		$user = User::create(array(
			'nome' => 'Doulgas',
			'sobrenome' => 'Gouveia',
			'login' => '6606',
			'password' => Hash::make('6606'),
			'email' => 'doulgas.gouveia@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6606',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '01/01/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(15);
		$user = User::create(array(
			'nome' => 'Caio',
			'sobrenome' => 'Costa',
			'login' => '9210',
			'password' => Hash::make('9210'),
			'email' => 'caio.costa@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9210',
			'sobreMim' => 'Sou o Caio, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '27/06/2007',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(16);
		$user = User::create(array(
			'nome' => 'Xerxes',
			'sobrenome' => 'Minazuki',
			'login' => '9643',
			'password' => Hash::make('9643'),
			'email' => 'xerxes.minazuki@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9643',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '10/05/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(16);
		$user = User::create(array(
			'nome' => 'Jade',
			'sobrenome' => 'Lopes',
			'login' => '3809',
			'password' => Hash::make('3809'),
			'email' => 'jade.lopes@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3809',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '23/02/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(16);
		$user = User::create(array(
			'nome' => 'Dante',
			'sobrenome' => 'Camilo',
			'login' => '8586',
			'password' => Hash::make('8586'),
			'email' => 'dante.camilo@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8586',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '20/09/2006',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(16);
		$user = User::create(array(
			'nome' => 'Akemi',
			'sobrenome' => 'Valentine',
			'login' => '2385',
			'password' => Hash::make('2385'),
			'email' => 'akemi.valentine@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2385',
			'sobreMim' => 'Sou a Akemi e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '04/10/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(17);
		$user = User::create(array(
			'nome' => 'Jill',
			'sobrenome' => 'Castanheira',
			'login' => '7985',
			'password' => Hash::make('7985'),
			'email' => 'jill.castanheira@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '7985',
			'sobreMim' => 'Olá, sou a Jill e amo assistir tv, séries e filmes',
			'dataNascimento' => '02/06/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(17);
		$user = User::create(array(
			'nome' => 'Trinity',
			'sobrenome' => 'Redfield',
			'login' => '8730',
			'password' => Hash::make('8730'),
			'email' => 'trinity.redfield@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8730',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '21/12/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(17);
		$user = User::create(array(
			'nome' => 'Sonia',
			'sobrenome' => 'Pádua',
			'login' => '8480',
			'password' => Hash::make('8480'),
			'email' => 'sonia.padua@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8480',
			'sobreMim' => 'Sou a Sonia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '11/04/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(17);
		$user = User::create(array(
			'nome' => 'Augusto',
			'sobrenome' => 'Castanheira',
			'login' => '7909',
			'password' => Hash::make('7909'),
			'email' => 'augusto.castanheira@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '7909',
			'sobreMim' => 'Sou o Augusto e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '15/01/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(18);
		$user = User::create(array(
			'nome' => 'Yoko',
			'sobrenome' => 'Alves',
			'login' => '7344',
			'password' => Hash::make('7344'),
			'email' => 'yoko.alves@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '7344',
			'sobreMim' => 'Sou a Yoko, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '06/06/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(18);
		$user = User::create(array(
			'nome' => 'Michele',
			'sobrenome' => 'Macedo',
			'login' => '4368',
			'password' => Hash::make('4368'),
			'email' => 'michele.macedo@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4368',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '07/05/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(18);
		$user = User::create(array(
			'nome' => 'Peterson',
			'sobrenome' => 'Costa',
			'login' => '9074',
			'password' => Hash::make('9074'),
			'email' => 'peterson.costa@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9074',
			'sobreMim' => 'Sou o Peterson, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '06/03/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(18);
		$user = User::create(array(
			'nome' => 'Bruno',
			'sobrenome' => 'Monteiro',
			'login' => '6180',
			'password' => Hash::make('6180'),
			'email' => 'bruno.monteiro@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6180',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '26/04/2007',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(19);
		$user = User::create(array(
			'nome' => 'Jonas',
			'sobrenome' => 'Matos',
			'login' => '9653',
			'password' => Hash::make('9653'),
			'email' => 'jonas.matos@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9653',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '27/05/2006',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(19);
		$user = User::create(array(
			'nome' => 'Jade',
			'sobrenome' => 'Franca',
			'login' => '3738',
			'password' => Hash::make('3738'),
			'email' => 'jade.franca@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3738',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '03/04/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(19);
		$user = User::create(array(
			'nome' => 'Peterson',
			'sobrenome' => 'Redfield',
			'login' => '4685',
			'password' => Hash::make('4685'),
			'email' => 'peterson.redfield@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4685',
			'sobreMim' => 'Sou o Peterson e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '18/12/2005',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(19);
		$user = User::create(array(
			'nome' => 'Filipe',
			'sobrenome' => 'Neves',
			'login' => '1458',
			'password' => Hash::make('1458'),
			'email' => 'filipe.neves@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1458',
			'sobreMim' => 'Olá, sou o Filipe e amo assistir tv, séries e filmes',
			'dataNascimento' => '21/11/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(20);
		$user = User::create(array(
			'nome' => 'Jill',
			'sobrenome' => 'dos Santos',
			'login' => '2063',
			'password' => Hash::make('2063'),
			'email' => 'jill.dos santos@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2063',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '17/12/2006',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(20);
		$user = User::create(array(
			'nome' => 'Cauê',
			'sobrenome' => 'Minazuki',
			'login' => '1316',
			'password' => Hash::make('1316'),
			'email' => 'caue.minazuki@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1316',
			'sobreMim' => 'Sou o Cauê e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '03/02/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(20);
		$user = User::create(array(
			'nome' => 'Jonas',
			'sobrenome' => 'Valentine',
			'login' => '6061',
			'password' => Hash::make('6061'),
			'email' => 'jonas.valentine@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6061',
			'sobreMim' => 'Sou a Jonas e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '22/10/2008',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(20);
		$user = User::create(array(
			'nome' => 'Irene',
			'sobrenome' => 'Camilo',
			'login' => '6295',
			'password' => Hash::make('6295'),
			'email' => 'irene.camilo@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6295',
			'sobreMim' => 'Sou a Irene, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '13/03/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(21);
		$user = User::create(array(
			'nome' => 'Doulgas',
			'sobrenome' => 'Tanaka',
			'login' => '5337',
			'password' => Hash::make('5337'),
			'email' => 'doulgas.tanaka@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5337',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '15/05/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(21);
		$user = User::create(array(
			'nome' => 'Angelina',
			'sobrenome' => 'Valentine',
			'login' => '5403',
			'password' => Hash::make('5403'),
			'email' => 'angelina.valentine@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5403',
			'sobreMim' => 'Sou a Rafaela, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '18/04/2002',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(21);
		$user = User::create(array(
			'nome' => 'Monica',
			'sobrenome' => 'Suzuki',
			'login' => '9171',
			'password' => Hash::make('9171'),
			'email' => 'monica.suzuki@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9171',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '20/11/2002',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(21);
		$user = User::create(array(
			'nome' => 'Peterson',
			'sobrenome' => 'Faria',
			'login' => '3523',
			'password' => Hash::make('3523'),
			'email' => 'peterson.faria@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3523',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '04/04/2004',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(22);
		$user = User::create(array(
			'nome' => 'Leonidas',
			'sobrenome' => 'Severo',
			'login' => '4723',
			'password' => Hash::make('4723'),
			'email' => 'leonidas.severo@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4723',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '14/08/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(22);
		$user = User::create(array(
			'nome' => 'Augusto',
			'sobrenome' => 'Neto',
			'login' => '8450',
			'password' => Hash::make('8450'),
			'email' => 'augusto.neto@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8450',
			'sobreMim' => 'Sou o ChunLi e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '05/01/2004',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(22);
		$user = User::create(array(
			'nome' => 'Leonidas',
			'sobrenome' => 'Nazário',
			'login' => '8261',
			'password' => Hash::make('8261'),
			'email' => 'leonidas.nazario@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8261',
			'sobreMim' => 'Olá, sou o Caroline e amo assistir tv, séries e filmes',
			'dataNascimento' => '19/01/2001',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(22);
		$user = User::create(array(
			'nome' => 'Eric',
			'sobrenome' => 'Hernandes',
			'login' => '3519',
			'password' => Hash::make('3519'),
			'email' => 'eric.hernandes@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3519',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '27/12/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(23);
		$user = User::create(array(
			'nome' => 'Chunli',
			'sobrenome' => 'Nazário',
			'login' => '9654',
			'password' => Hash::make('9654'),
			'email' => 'chunli.nazario@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9654',
			'sobreMim' => 'Sou a Cleber e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '02/11/2002',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(23);
		$user = User::create(array(
			'nome' => 'Doulgas',
			'sobrenome' => 'Castanheira',
			'login' => '9473',
			'password' => Hash::make('9473'),
			'email' => 'doulgas.castanheira@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9473',
			'sobreMim' => 'Sou o Irene e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '04/01/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(23);
		$user = User::create(array(
			'nome' => 'Jéssica',
			'sobrenome' => 'Franca',
			'login' => '2957',
			'password' => Hash::make('2957'),
			'email' => 'jessica.franca@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2957',
			'sobreMim' => 'Sou a Filipe, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '31/07/2004',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(23);
		$user = User::create(array(
			'nome' => 'Jaime',
			'sobrenome' => 'Villablanca',
			'login' => '5694',
			'password' => Hash::make('5694'),
			'email' => 'jaime.villablanca@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5694',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '09/02/2002',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(24);
		$user = User::create(array(
			'nome' => 'Peterson',
			'sobrenome' => 'Minazuki',
			'login' => '3068',
			'password' => Hash::make('3068'),
			'email' => 'peterson.minazuki@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3068',
			'sobreMim' => 'Sou o Barbara, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '27/12/2000',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(24);
		$user = User::create(array(
			'nome' => 'Cauê',
			'sobrenome' => 'Gomes',
			'login' => '8712',
			'password' => Hash::make('8712'),
			'email' => 'caue.gomes@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8712',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '03/11/2000',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(24);
		$user = User::create(array(
			'nome' => 'Leonidas',
			'sobrenome' => 'Yamada Silva',
			'login' => '8234',
			'password' => Hash::make('8234'),
			'email' => 'leonidas.yamada silva@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8234',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '30/11/2002',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(24);
		$user = User::create(array(
			'nome' => 'Leonidas',
			'sobrenome' => 'Matos',
			'login' => '3977',
			'password' => Hash::make('3977'),
			'email' => 'leonidas.matos@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3977',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '19/11/1999',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(25);
		$user = User::create(array(
			'nome' => 'Michele',
			'sobrenome' => 'Valentine',
			'login' => '5317',
			'password' => Hash::make('5317'),
			'email' => 'michele.valentine@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5317',
			'sobreMim' => 'Sou a Milena e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '19/04/2001',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(25);
		$user = User::create(array(
			'nome' => 'Doulgas',
			'sobrenome' => 'Sato',
			'login' => '7146',
			'password' => Hash::make('7146'),
			'email' => 'doulgas.sato@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '7146',
			'sobreMim' => 'Olá, sou o Cleber e amo assistir tv, séries e filmes',
			'dataNascimento' => '11/08/2001',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(25);
		$user = User::create(array(
			'nome' => 'Doulgas',
			'sobrenome' => 'Rocha',
			'login' => '3428',
			'password' => Hash::make('3428'),
			'email' => 'doulgas.rocha@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3428',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '15/12/2000',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(25);
		$user = User::create(array(
			'nome' => 'Dante',
			'sobrenome' => 'Lins',
			'login' => '6404',
			'password' => Hash::make('6404'),
			'email' => 'dante.lins@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6404',
			'sobreMim' => 'Sou o Jonas e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '09/11/2001',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(26);
		$user = User::create(array(
			'nome' => 'Cauê',
			'sobrenome' => 'Takahashi',
			'login' => '3117',
			'password' => Hash::make('3117'),
			'email' => 'caue.takahashi@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3117',
			'sobreMim' => 'Sou o Filipe e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '26/11/2001',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(26);
		$user = User::create(array(
			'nome' => 'Michele',
			'sobrenome' => 'Rocha',
			'login' => '6798',
			'password' => Hash::make('6798'),
			'email' => 'michele.rocha@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6798',
			'sobreMim' => 'Sou a Otavio, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '25/01/2002',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(26);
		$user = User::create(array(
			'nome' => 'Tamires',
			'sobrenome' => 'Matos',
			'login' => '2909',
			'password' => Hash::make('2909'),
			'email' => 'tamires.matos@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2909',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '13/10/2001',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(26);
		$user = User::create(array(
			'nome' => 'Aline',
			'sobrenome' => 'Lins',
			'login' => '4774',
			'password' => Hash::make('4774'),
			'email' => 'aline.lins@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4774',
			'sobreMim' => 'Sou a Xerxes, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '04/03/2004',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(27);
		$user = User::create(array(
			'nome' => 'Monica',
			'sobrenome' => 'Batista',
			'login' => '3786',
			'password' => Hash::make('3786'),
			'email' => 'monica.batista@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3786',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '26/05/2004',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(27);
		$user = User::create(array(
			'nome' => 'Caio',
			'sobrenome' => 'Hato',
			'login' => '2209',
			'password' => Hash::make('2209'),
			'email' => 'caio.hato@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2209',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '23/02/2002',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(27);
		$user = User::create(array(
			'nome' => 'Eric',
			'sobrenome' => 'Sato',
			'login' => '5768',
			'password' => Hash::make('5768'),
			'email' => 'eric.sato@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5768',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '23/10/2002',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(27);
		$user = User::create(array(
			'nome' => 'Akemi',
			'sobrenome' => 'Costa',
			'login' => '1718',
			'password' => Hash::make('1718'),
			'email' => 'akemi.costa@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1718',
			'sobreMim' => 'Sou a Caio e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '14/06/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(28);
		$user = User::create(array(
			'nome' => 'Milena',
			'sobrenome' => 'Neves',
			'login' => '2721',
			'password' => Hash::make('2721'),
			'email' => 'milena.neves@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2721',
			'sobreMim' => 'Olá, sou a Jaime e amo assistir tv, séries e filmes',
			'dataNascimento' => '29/10/2000',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(28);
		$user = User::create(array(
			'nome' => 'Bruno',
			'sobrenome' => 'Semedo',
			'login' => '8182',
			'password' => Hash::make('8182'),
			'email' => 'bruno.semedo@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8182',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '22/04/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(28);
		$user = User::create(array(
			'nome' => 'Odete',
			'sobrenome' => 'dos Santos',
			'login' => '3920',
			'password' => Hash::make('3920'),
			'email' => 'odete.dos santos@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3920',
			'sobreMim' => 'Sou a Peterson e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '08/09/2001',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(28);
		$user = User::create(array(
			'nome' => 'Jaime',
			'sobrenome' => 'Nazário',
			'login' => '5097',
			'password' => Hash::make('5097'),
			'email' => 'jaime.nazario@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5097',
			'sobreMim' => 'Sou o Simão e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '16/02/2002',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(29);
		$user = User::create(array(
			'nome' => 'Michele',
			'sobrenome' => 'Castanheira',
			'login' => '7016',
			'password' => Hash::make('7016'),
			'email' => 'michele.castanheira@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '7016',
			'sobreMim' => 'Sou a Sonia, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '18/07/2004',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(29);
		$user = User::create(array(
			'nome' => 'Caroline',
			'sobrenome' => 'Minazuki',
			'login' => '9003',
			'password' => Hash::make('9003'),
			'email' => 'caroline.minazuki@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9003',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '04/06/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(29);
		$user = User::create(array(
			'nome' => 'Sonia',
			'sobrenome' => 'Macedo',
			'login' => '5413',
			'password' => Hash::make('5413'),
			'email' => 'sonia.macedo@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5413',
			'sobreMim' => 'Sou a Claudio, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '29/11/2001',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(29);
		$user = User::create(array(
			'nome' => 'Kitana',
			'sobrenome' => 'Lins',
			'login' => '6896',
			'password' => Hash::make('6896'),
			'email' => 'kitana.lins@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6896',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '24/10/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(30);
		$user = User::create(array(
			'nome' => 'Dante',
			'sobrenome' => 'Faria',
			'login' => '9640',
			'password' => Hash::make('9640'),
			'email' => 'dante.faria@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9640',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '10/11/2002',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(30);
		$user = User::create(array(
			'nome' => 'Claudio',
			'sobrenome' => 'Faria',
			'login' => '3020',
			'password' => Hash::make('3020'),
			'email' => 'claudio.faria@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3020',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '04/02/2000',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(30);
		$user = User::create(array(
			'nome' => 'Sarah',
			'sobrenome' => 'Peixoto',
			'login' => '3321',
			'password' => Hash::make('3321'),
			'email' => 'sarah.peixoto@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3321',
			'sobreMim' => 'Sou a Leonidas e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '24/06/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(30);
		$user = User::create(array(
			'nome' => 'Eduardo',
			'sobrenome' => 'Pádua',
			'login' => '6752',
			'password' => Hash::make('6752'),
			'email' => 'eduardo.padua@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6752',
			'sobreMim' => 'Olá, sou o Peterson e amo assistir tv, séries e filmes',
			'dataNascimento' => '19/06/2002',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(31);
		$user = User::create(array(
			'nome' => 'Otavio',
			'sobrenome' => 'Franca',
			'login' => '1639',
			'password' => Hash::make('1639'),
			'email' => 'otavio.franca@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1639',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '28/04/2004',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(31);
		$user = User::create(array(
			'nome' => 'Jill',
			'sobrenome' => 'Salgueiro',
			'login' => '6610',
			'password' => Hash::make('6610'),
			'email' => 'jill.salgueiro@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6610',
			'sobreMim' => 'Sou a Andreia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '14/08/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(31);
		$user = User::create(array(
			'nome' => 'Camila',
			'sobrenome' => 'Nazário',
			'login' => '9642',
			'password' => Hash::make('9642'),
			'email' => 'camila.nazario@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9642',
			'sobreMim' => 'Sou a Caroline e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '15/03/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(31);
		$user = User::create(array(
			'nome' => 'Camila',
			'sobrenome' => 'Lopes',
			'login' => '1631',
			'password' => Hash::make('1631'),
			'email' => 'camila.lopes@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1631',
			'sobreMim' => 'Sou a ChunLi, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '11/11/2002',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(32);
		$user = User::create(array(
			'nome' => 'Lara',
			'sobrenome' => 'Nazário',
			'login' => '3116',
			'password' => Hash::make('3116'),
			'email' => 'lara.nazario@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3116',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '02/09/2001',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(32);
		$user = User::create(array(
			'nome' => 'Andreia',
			'sobrenome' => 'Takahashi',
			'login' => '1555',
			'password' => Hash::make('1555'),
			'email' => 'andreia.takahashi@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1555',
			'sobreMim' => 'Sou a Akemi, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '24/06/2004',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(32);
		$user = User::create(array(
			'nome' => 'Yoko',
			'sobrenome' => 'Franca',
			'login' => '6337',
			'password' => Hash::make('6337'),
			'email' => 'yoko.franca@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6337',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '27/06/2004',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(32);
		$user = User::create(array(
			'nome' => 'Claudio',
			'sobrenome' => 'Nazário',
			'login' => '8110',
			'password' => Hash::make('8110'),
			'email' => 'claudio.nazario@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8110',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '13/05/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(32);
		$user = User::create(array(
			'nome' => 'Barbara',
			'sobrenome' => 'Tanaka',
			'login' => '9031',
			'password' => Hash::make('9031'),
			'email' => 'barbara.tanaka@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9031',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '26/09/2002',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(33);
		$user = User::create(array(
			'nome' => 'Jonas',
			'sobrenome' => 'Lopes',
			'login' => '5607',
			'password' => Hash::make('5607'),
			'email' => 'jonas.lopes@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5607',
			'sobreMim' => 'Sou a Otavio e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '24/02/2004',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(33);
		$user = User::create(array(
			'nome' => 'Fernando',
			'sobrenome' => 'Castanheira',
			'login' => '8016',
			'password' => Hash::make('8016'),
			'email' => 'fernando.castanheira@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8016',
			'sobreMim' => 'Olá, sou o Xerxes e amo assistir tv, séries e filmes',
			'dataNascimento' => '13/11/2002',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(33);
		$user = User::create(array(
			'nome' => 'Jade',
			'sobrenome' => 'Costa',
			'login' => '9836',
			'password' => Hash::make('9836'),
			'email' => 'jade.costa@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9836',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '05/12/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(33);
		$user = User::create(array(
			'nome' => 'Peterson',
			'sobrenome' => 'Sato',
			'login' => '4785',
			'password' => Hash::make('4785'),
			'email' => 'peterson.sato@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4785',
			'sobreMim' => 'Sou o Milena e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '29/10/2000',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(33);
		$user = User::create(array(
			'nome' => 'Dante',
			'sobrenome' => 'Lopes',
			'login' => '8571',
			'password' => Hash::make('8571'),
			'email' => 'dante.lopes@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8571',
			'sobreMim' => 'Sou o Eric e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '26/11/2000',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(33);
		$user = User::create(array(
			'nome' => 'Eduardo',
			'sobrenome' => 'Freire',
			'login' => '3405',
			'password' => Hash::make('3405'),
			'email' => 'eduardo.freire@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3405',
			'sobreMim' => 'Sou o Dante, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '25/06/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(33);
		$user = User::create(array(
			'nome' => 'Odete',
			'sobrenome' => 'Lins',
			'login' => '2620',
			'password' => Hash::make('2620'),
			'email' => 'odete.lins@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2620',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '26/09/2001',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(34);
		$user = User::create(array(
			'nome' => 'Simão',
			'sobrenome' => 'Franca',
			'login' => '9802',
			'password' => Hash::make('9802'),
			'email' => 'simao.franca@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9802',
			'sobreMim' => 'Sou o Daniela, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '06/03/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(34);
		$user = User::create(array(
			'nome' => 'Yori',
			'sobrenome' => 'Yamada Silva',
			'login' => '6767',
			'password' => Hash::make('6767'),
			'email' => 'yori.yamada silva@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6767',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '01/05/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(34);
		$user = User::create(array(
			'nome' => 'Dante',
			'sobrenome' => 'Leal',
			'login' => '9057',
			'password' => Hash::make('9057'),
			'email' => 'dante.leal@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9057',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '26/11/2001',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(34);
		$user = User::create(array(
			'nome' => 'Xerxes',
			'sobrenome' => 'Monteiro',
			'login' => '6601',
			'password' => Hash::make('6601'),
			'email' => 'xerxes.monteiro@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6601',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '08/02/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(35);
		$user = User::create(array(
			'nome' => 'Augusto',
			'sobrenome' => 'Leal',
			'login' => '7089',
			'password' => Hash::make('7089'),
			'email' => 'augusto.leal@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '7089',
			'sobreMim' => 'Sou o Jaime e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '11/05/2004',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(35);
		$user = User::create(array(
			'nome' => 'Simão',
			'sobrenome' => 'Pádua',
			'login' => '8707',
			'password' => Hash::make('8707'),
			'email' => 'simao.padua@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8707',
			'sobreMim' => 'Olá, sou o Xerxes e amo assistir tv, séries e filmes',
			'dataNascimento' => '26/12/2001',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(35);
		$user = User::create(array(
			'nome' => 'Cauê',
			'sobrenome' => 'dos Santos',
			'login' => '8133',
			'password' => Hash::make('8133'),
			'email' => 'caue.dos santos@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8133',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '21/12/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(35);
		$user = User::create(array(
			'nome' => 'Claudio',
			'sobrenome' => 'Salgueiro',
			'login' => '1299',
			'password' => Hash::make('1299'),
			'email' => 'claudio.salgueiro@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1299',
			'sobreMim' => 'Sou o Bruna e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '29/03/2000',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(36);
		$user = User::create(array(
			'nome' => 'Bruno',
			'sobrenome' => 'Redfield',
			'login' => '2484',
			'password' => Hash::make('2484'),
			'email' => 'bruno.redfield@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2484',
			'sobreMim' => 'Sou o Odete e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '06/04/2000',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(36);
		$user = User::create(array(
			'nome' => 'Akemi',
			'sobrenome' => 'Hernandes',
			'login' => '2796',
			'password' => Hash::make('2796'),
			'email' => 'akemi.hernandes@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2796',
			'sobreMim' => 'Sou a Sarah, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '05/06/2001',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(36);
		$user = User::create(array(
			'nome' => 'Rafaela',
			'sobrenome' => 'Valentine',
			'login' => '8602',
			'password' => Hash::make('8602'),
			'email' => 'rafaela.valentine@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8602',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '15/12/1999',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(36);
		$user = User::create(array(
			'nome' => 'Sheeva',
			'sobrenome' => 'Pádua',
			'login' => '8078',
			'password' => Hash::make('8078'),
			'email' => 'sheeva.padua@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8078',
			'sobreMim' => 'Sou a Caio, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '06/11/2000',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(37);
		$user = User::create(array(
			'nome' => 'Jade',
			'sobrenome' => 'Batista',
			'login' => '5012',
			'password' => Hash::make('5012'),
			'email' => 'jade.batista@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5012',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '27/10/2000',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(37);
		$user = User::create(array(
			'nome' => 'Peterson',
			'sobrenome' => 'Takahashi',
			'login' => '5062',
			'password' => Hash::make('5062'),
			'email' => 'peterson.takahashi@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5062',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '07/05/2004',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(37);
		$user = User::create(array(
			'nome' => 'Fernanda',
			'sobrenome' => 'Yamada Silva',
			'login' => '6325',
			'password' => Hash::make('6325'),
			'email' => 'fernanda.yamada silva@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6325',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '09/09/2001',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(38);
		$user = User::create(array(
			'nome' => 'Jill',
			'sobrenome' => 'Severo',
			'login' => '2519',
			'password' => Hash::make('2519'),
			'email' => 'jill.severo@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2519',
			'sobreMim' => 'Sou a Akemi e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '17/03/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(38);
		$user = User::create(array(
			'nome' => 'Augusto',
			'sobrenome' => 'Valentine',
			'login' => '6575',
			'password' => Hash::make('6575'),
			'email' => 'augusto.valentine@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6575',
			'sobreMim' => 'Olá, sou o Jill e amo assistir tv, séries e filmes',
			'dataNascimento' => '14/12/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(38);
		$user = User::create(array(
			'nome' => 'Filipe',
			'sobrenome' => 'Faria',
			'login' => '4226',
			'password' => Hash::make('4226'),
			'email' => 'filipe.faria@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4226',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '15/10/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(38);
		$user = User::create(array(
			'nome' => 'Morpheu',
			'sobrenome' => 'Faria',
			'login' => '6371',
			'password' => Hash::make('6371'),
			'email' => 'morpheu.faria@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6371',
			'sobreMim' => 'Sou o Sonia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '01/04/2002',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(39);
		$user = User::create(array(
			'nome' => 'Cleber',
			'sobrenome' => 'Torres',
			'login' => '1142',
			'password' => Hash::make('1142'),
			'email' => 'cleber.torres@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1142',
			'sobreMim' => 'Sou o Augusto e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '08/01/2002',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(39);
		$user = User::create(array(
			'nome' => 'Eduardo',
			'sobrenome' => 'Ishida Silva',
			'login' => '1544',
			'password' => Hash::make('1544'),
			'email' => 'eduardo.ishida silva@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1544',
			'sobreMim' => 'Sou o Yoko, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '20/04/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(39);
		$user = User::create(array(
			'nome' => 'Angelina',
			'sobrenome' => 'Suzuki',
			'login' => '4651',
			'password' => Hash::make('4651'),
			'email' => 'angelina.suzuki@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4651',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '26/11/2001',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(39);
		$user = User::create(array(
			'nome' => 'Barbara',
			'sobrenome' => 'Rocha',
			'login' => '2968',
			'password' => Hash::make('2968'),
			'email' => 'barbara.rocha@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2968',
			'sobreMim' => 'Sou a Peterson, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '07/02/2001',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(40);
		$user = User::create(array(
			'nome' => 'Lara',
			'sobrenome' => 'Valentine',
			'login' => '8357',
			'password' => Hash::make('8357'),
			'email' => 'lara.valentine@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8357',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '16/02/2004',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(40);
		$user = User::create(array(
			'nome' => 'Bruno',
			'sobrenome' => 'Pádua',
			'login' => '6907',
			'password' => Hash::make('6907'),
			'email' => 'bruno.padua@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6907',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '15/07/2004',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(40);
		$user = User::create(array(
			'nome' => 'Jade',
			'sobrenome' => 'Alves',
			'login' => '4331',
			'password' => Hash::make('4331'),
			'email' => 'jade.alves@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4331',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '19/01/2004',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(40);
		$user = User::create(array(
			'nome' => 'Jonas',
			'sobrenome' => 'Faria',
			'login' => '1404',
			'password' => Hash::make('1404'),
			'email' => 'jonas.faria@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1404',
			'sobreMim' => 'Sou a Peterson e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '06/03/2003',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(40);
		$user = User::create(array(
			'nome' => 'Fernando',
			'sobrenome' => 'Suzuki',
			'login' => '6269',
			'password' => Hash::make('6269'),
			'email' => 'fernando.suzuki@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6269',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '04/01/1982',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(41);
		$user = User::create(array(
			'nome' => 'Rafaela',
			'sobrenome' => 'da Silva',
			'login' => '5591',
			'password' => Hash::make('5591'),
			'email' => 'rafaela.da silva@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5591',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '26/07/1975',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(41);
		$user = User::create(array(
			'nome' => 'Tamires',
			'sobrenome' => 'Faria',
			'login' => '4702',
			'password' => Hash::make('4702'),
			'email' => 'tamires.faria@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4702',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '14/12/1991',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(41);
		$user = User::create(array(
			'nome' => 'Eric',
			'sobrenome' => 'Castanheira',
			'login' => '3458',
			'password' => Hash::make('3458'),
			'email' => 'eric.castanheira@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3458',
			'sobreMim' => 'Sou o ChunLi e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '12/01/1974',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(41);
		$user = User::create(array(
			'nome' => 'Dante',
			'sobrenome' => 'Takahashi',
			'login' => '6963',
			'password' => Hash::make('6963'),
			'email' => 'dante.takahashi@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6963',
			'sobreMim' => 'Olá, sou o Caroline e amo assistir tv, séries e filmes',
			'dataNascimento' => '15/10/1960',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(42);
		$user = User::create(array(
			'nome' => 'Cleber',
			'sobrenome' => 'Peixoto',
			'login' => '5024',
			'password' => Hash::make('5024'),
			'email' => 'cleber.peixoto@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5024',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '21/12/1960',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(42);
		$user = User::create(array(
			'nome' => 'Caio',
			'sobrenome' => 'da Silva',
			'login' => '2128',
			'password' => Hash::make('2128'),
			'email' => 'caio.da silva@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2128',
			'sobreMim' => 'Sou o Cleber e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '16/03/1981',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(42);
		$user = User::create(array(
			'nome' => 'Kitana',
			'sobrenome' => 'Camilo',
			'login' => '1246',
			'password' => Hash::make('1246'),
			'email' => 'kitana.camilo@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1246',
			'sobreMim' => 'Sou a Irene e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '20/08/1978',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(42);
		$user = User::create(array(
			'nome' => 'Yoko',
			'sobrenome' => 'Lins',
			'login' => '8183',
			'password' => Hash::make('8183'),
			'email' => 'yoko.lins@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8183',
			'sobreMim' => 'Sou a Filipe, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '25/07/1961',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(43);
		$user = User::create(array(
			'nome' => 'Alexandra',
			'sobrenome' => 'Torres',
			'login' => '6682',
			'password' => Hash::make('6682'),
			'email' => 'alexandra.torres@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6682',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '16/02/1997',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(43);
		$user = User::create(array(
			'nome' => 'Andreia',
			'sobrenome' => 'Monteiro',
			'login' => '8919',
			'password' => Hash::make('8919'),
			'email' => 'andreia.monteiro@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8919',
			'sobreMim' => 'Sou a Barbara, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '22/12/1957',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(43);
		$user = User::create(array(
			'nome' => 'Jonas',
			'sobrenome' => 'da Silva',
			'login' => '8553',
			'password' => Hash::make('8553'),
			'email' => 'jonas.da silva@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8553',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '25/04/1978',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(43);
		$user = User::create(array(
			'nome' => 'Doulgas',
			'sobrenome' => 'Monteiro',
			'login' => '1636',
			'password' => Hash::make('1636'),
			'email' => 'doulgas.monteiro@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1636',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '10/07/1981',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(44);
		$user = User::create(array(
			'nome' => 'Sheeva',
			'sobrenome' => 'da Mata',
			'login' => '8900',
			'password' => Hash::make('8900'),
			'email' => 'sheeva.da mata@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8900',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '08/11/1989',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(44);
		$user = User::create(array(
			'nome' => 'Xerxes',
			'sobrenome' => 'Peixoto',
			'login' => '5937',
			'password' => Hash::make('5937'),
			'email' => 'xerxes.peixoto@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5937',
			'sobreMim' => 'Sou o Milena e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '25/11/1997',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(44);
		$user = User::create(array(
			'nome' => 'Filipe',
			'sobrenome' => 'Franca',
			'login' => '3814',
			'password' => Hash::make('3814'),
			'email' => 'filipe.franca@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3814',
			'sobreMim' => 'Olá, sou o Cleber e amo assistir tv, séries e filmes',
			'dataNascimento' => '14/03/1965',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(44);
		$user = User::create(array(
			'nome' => 'Aline',
			'sobrenome' => 'Neto',
			'login' => '1561',
			'password' => Hash::make('1561'),
			'email' => 'aline.neto@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1561',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '20/11/1965',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(45);
		$user = User::create(array(
			'nome' => 'Doulgas',
			'sobrenome' => 'Torres',
			'login' => '9245',
			'password' => Hash::make('9245'),
			'email' => 'doulgas.torres@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9245',
			'sobreMim' => 'Sou o Jonas e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '03/01/1977',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(45);
		$user = User::create(array(
			'nome' => 'Sarah',
			'sobrenome' => 'Valverde',
			'login' => '4139',
			'password' => Hash::make('4139'),
			'email' => 'sarah.valverde@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4139',
			'sobreMim' => 'Sou a Filipe e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '20/02/1989',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(45);
		$user = User::create(array(
			'nome' => 'Sheeva',
			'sobrenome' => 'Macedo',
			'login' => '5042',
			'password' => Hash::make('5042'),
			'email' => 'sheeva.macedo@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5042',
			'sobreMim' => 'Sou a Otavio, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '27/01/1955',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(45);
		$user = User::create(array(
			'nome' => 'Andreia',
			'sobrenome' => 'Porta',
			'login' => '2550',
			'password' => Hash::make('2550'),
			'email' => 'andreia.porta@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2550',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '07/04/1978',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(46);
		$user = User::create(array(
			'nome' => 'Chunli',
			'sobrenome' => 'Neto',
			'login' => '1121',
			'password' => Hash::make('1121'),
			'email' => 'chunli.neto@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1121',
			'sobreMim' => 'Sou a Xerxes, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '11/10/1971',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(46);
		$user = User::create(array(
			'nome' => 'Bruno',
			'sobrenome' => 'Nazário',
			'login' => '4452',
			'password' => Hash::make('4452'),
			'email' => 'bruno.nazario@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4452',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '03/12/1975',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(46);
		$user = User::create(array(
			'nome' => 'Otavio',
			'sobrenome' => 'Monteiro',
			'login' => '9380',
			'password' => Hash::make('9380'),
			'email' => 'otavio.monteiro@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9380',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '19/04/1960',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(46);
		$user = User::create(array(
			'nome' => 'Jill',
			'sobrenome' => 'Batista',
			'login' => '7210',
			'password' => Hash::make('7210'),
			'email' => 'jill.batista@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '7210',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '18/03/1996',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(47);
		$user = User::create(array(
			'nome' => 'Filipe',
			'sobrenome' => 'Torres',
			'login' => '5163',
			'password' => Hash::make('5163'),
			'email' => 'filipe.torres@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5163',
			'sobreMim' => 'Sou o Caio e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '26/11/1966',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(47);
		$user = User::create(array(
			'nome' => 'Filipe',
			'sobrenome' => 'Ishida Silva',
			'login' => '6095',
			'password' => Hash::make('6095'),
			'email' => 'filipe.ishida silva@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6095',
			'sobreMim' => 'Olá, sou o Jaime e amo assistir tv, séries e filmes',
			'dataNascimento' => '20/08/1989',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(47);
		$user = User::create(array(
			'nome' => 'Xerxes',
			'sobrenome' => 'Severo',
			'login' => '9767',
			'password' => Hash::make('9767'),
			'email' => 'xerxes.severo@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9767',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '20/12/1997',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(47);
		$user = User::create(array(
			'nome' => 'Camila',
			'sobrenome' => 'Suzuki',
			'login' => '9138',
			'password' => Hash::make('9138'),
			'email' => 'camila.suzuki@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9138',
			'sobreMim' => 'Sou a Peterson e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '13/02/1997',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(48);
		$user = User::create(array(
			'nome' => 'Fernanda',
			'sobrenome' => 'Minazuki',
			'login' => '5181',
			'password' => Hash::make('5181'),
			'email' => 'fernanda.minazuki@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5181',
			'sobreMim' => 'Sou a Simão e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '05/02/1984',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(48);
		$user = User::create(array(
			'nome' => 'Dante',
			'sobrenome' => 'Salgueiro',
			'login' => '5936',
			'password' => Hash::make('5936'),
			'email' => 'dante.salgueiro@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5936',
			'sobreMim' => 'Sou o Sonia, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '07/04/1976',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(48);
		$user = User::create(array(
			'nome' => 'Doulgas',
			'sobrenome' => 'Lopes',
			'login' => '4582',
			'password' => Hash::make('4582'),
			'email' => 'doulgas.lopes@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4582',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '16/01/1992',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(48);
		$user = User::create(array(
			'nome' => 'Filipe',
			'sobrenome' => 'Carvalho',
			'login' => '9826',
			'password' => Hash::make('9826'),
			'email' => 'filipe.carvalho@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9826',
			'sobreMim' => 'Sou o Claudio, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '07/02/1979',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(49);
		$user = User::create(array(
			'nome' => 'Augusto',
			'sobrenome' => 'Hernandes',
			'login' => '4376',
			'password' => Hash::make('4376'),
			'email' => 'augusto.hernandes@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4376',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '08/12/1982',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(49);
		$user = User::create(array(
			'nome' => 'Doulgas',
			'sobrenome' => 'Yamada Silva',
			'login' => '4975',
			'password' => Hash::make('4975'),
			'email' => 'doulgas.yamada silva@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4975',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '13/08/1996',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(49);
		$user = User::create(array(
			'nome' => 'Caio',
			'sobrenome' => 'Leal',
			'login' => '3997',
			'password' => Hash::make('3997'),
			'email' => 'caio.leal@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3997',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '17/07/1992',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(49);
		$user = User::create(array(
			'nome' => 'Angelina',
			'sobrenome' => 'Batista',
			'login' => '7101',
			'password' => Hash::make('7101'),
			'email' => 'angelina.batista@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '7101',
			'sobreMim' => 'Sou a Leonidas e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '24/09/1975',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(50);
		$user = User::create(array(
			'nome' => 'Cauê',
			'sobrenome' => 'Sato',
			'login' => '5086',
			'password' => Hash::make('5086'),
			'email' => 'caue.sato@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5086',
			'sobreMim' => 'Olá, sou o Peterson e amo assistir tv, séries e filmes',
			'dataNascimento' => '06/03/1969',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(50);
		$user = User::create(array(
			'nome' => 'Trinity',
			'sobrenome' => 'Minazuki',
			'login' => '6591',
			'password' => Hash::make('6591'),
			'email' => 'trinity.minazuki@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6591',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '17/12/1987',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(50);
		$user = User::create(array(
			'nome' => 'Filipe',
			'sobrenome' => 'Macedo',
			'login' => '6623',
			'password' => Hash::make('6623'),
			'email' => 'filipe.macedo@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6623',
			'sobreMim' => 'Sou o Andreia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '18/11/1954',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(50);
		$user = User::create(array(
			'nome' => 'Morpheu',
			'sobrenome' => 'Peixoto',
			'login' => '8609',
			'password' => Hash::make('8609'),
			'email' => 'morpheu.peixoto@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8609',
			'sobreMim' => 'Sou o Caroline e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '20/07/1997',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(51);
		$user = User::create(array(
			'nome' => 'Caroline',
			'sobrenome' => 'Franca',
			'login' => '8020',
			'password' => Hash::make('8020'),
			'email' => 'caroline.franca@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8020',
			'sobreMim' => 'Sou a ChunLi, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '11/05/1981',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(51);
		$user = User::create(array(
			'nome' => 'Fernando',
			'sobrenome' => 'Alves',
			'login' => '9819',
			'password' => Hash::make('9819'),
			'email' => 'fernando.alves@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9819',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '14/08/1962',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(51);
		$user = User::create(array(
			'nome' => 'Cleber',
			'sobrenome' => 'Franca',
			'login' => '8269',
			'password' => Hash::make('8269'),
			'email' => 'cleber.franca@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8269',
			'sobreMim' => 'Sou o Akemi, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '15/09/1971',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(51);
		$user = User::create(array(
			'nome' => 'Cleber',
			'sobrenome' => 'Matos',
			'login' => '5026',
			'password' => Hash::make('5026'),
			'email' => 'cleber.matos@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5026',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '08/12/1962',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(52);
		$user = User::create(array(
			'nome' => 'Dante',
			'sobrenome' => 'Peixoto',
			'login' => '8592',
			'password' => Hash::make('8592'),
			'email' => 'dante.peixoto@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8592',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '22/03/1994',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(52);
		$user = User::create(array(
			'nome' => 'Leonidas',
			'sobrenome' => 'Hernandes',
			'login' => '2274',
			'password' => Hash::make('2274'),
			'email' => 'leonidas.hernandes@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2274',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '10/04/1957',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(52);
		$user = User::create(array(
			'nome' => 'Otavio',
			'sobrenome' => 'Alves',
			'login' => '6710',
			'password' => Hash::make('6710'),
			'email' => 'otavio.alves@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6710',
			'sobreMim' => 'Sou o Otavio e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '02/05/1964',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(52);
		$user = User::create(array(
			'nome' => 'Yoko',
			'sobrenome' => 'Valverde',
			'login' => '2271',
			'password' => Hash::make('2271'),
			'email' => 'yoko.valverde@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2271',
			'sobreMim' => 'Olá, sou a Xerxes e amo assistir tv, séries e filmes',
			'dataNascimento' => '13/11/1983',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(53);
		$user = User::create(array(
			'nome' => 'Alexandra',
			'sobrenome' => 'Takahashi',
			'login' => '4791',
			'password' => Hash::make('4791'),
			'email' => 'alexandra.takahashi@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4791',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '11/07/1987',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(53);
		$user = User::create(array(
			'nome' => 'Dante',
			'sobrenome' => 'Tanaka',
			'login' => '9449',
			'password' => Hash::make('9449'),
			'email' => 'dante.tanaka@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '9449',
			'sobreMim' => 'Sou o Milena e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '16/05/1993',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(53);
		$user = User::create(array(
			'nome' => 'Cleber',
			'sobrenome' => 'Valverde',
			'login' => '5698',
			'password' => Hash::make('5698'),
			'email' => 'cleber.valverde@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5698',
			'sobreMim' => 'Sou o Eric e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '11/03/1995',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(53);
		$user = User::create(array(
			'nome' => 'Caroline',
			'sobrenome' => 'Takahashi',
			'login' => '3118',
			'password' => Hash::make('3118'),
			'email' => 'caroline.takahashi@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3118',
			'sobreMim' => 'Sou a Dante, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '31/12/1972',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(54);
		$user = User::create(array(
			'nome' => 'Jill',
			'sobrenome' => 'Takahashi',
			'login' => '7352',
			'password' => Hash::make('7352'),
			'email' => 'jill.takahashi@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '7352',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '09/06/1990',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(54);
		$user = User::create(array(
			'nome' => 'Peterson',
			'sobrenome' => 'Alves',
			'login' => '8084',
			'password' => Hash::make('8084'),
			'email' => 'peterson.alves@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8084',
			'sobreMim' => 'Sou o Daniela, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '01/11/1977',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(54);
		$user = User::create(array(
			'nome' => 'Filipe',
			'sobrenome' => 'Tanaka',
			'login' => '5381',
			'password' => Hash::make('5381'),
			'email' => 'filipe.tanaka@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5381',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '02/01/1964',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(54);
		$user = User::create(array(
			'nome' => 'Fernanda',
			'sobrenome' => 'Camilo',
			'login' => '8926',
			'password' => Hash::make('8926'),
			'email' => 'fernanda.camilo@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8926',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '15/05/1972',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(55);
		$user = User::create(array(
			'nome' => 'Odete',
			'sobrenome' => 'Carvalho',
			'login' => '1947',
			'password' => Hash::make('1947'),
			'email' => 'odete.carvalho@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1947',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '01/01/1979',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(55);
		$user = User::create(array(
			'nome' => 'Xerxes',
			'sobrenome' => 'Costa',
			'login' => '1104',
			'password' => Hash::make('1104'),
			'email' => 'xerxes.costa@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1104',
			'sobreMim' => 'Sou o Jaime e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '01/02/1958',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(55);
		$user = User::create(array(
			'nome' => 'Cleber',
			'sobrenome' => 'Augusto',
			'login' => '8212',
			'password' => Hash::make('8212'),
			'email' => 'cleber.augusto@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8212',
			'sobreMim' => 'Olá, sou o Xerxes e amo assistir tv, séries e filmes',
			'dataNascimento' => '02/06/1985',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(55);
		$user = User::create(array(
			'nome' => 'Michele',
			'sobrenome' => 'Yamada Silva',
			'login' => '2899',
			'password' => Hash::make('2899'),
			'email' => 'michele.yamada silva@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2899',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '21/04/1964',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(56);
		$user = User::create(array(
			'nome' => 'Alexandra',
			'sobrenome' => 'Vieira',
			'login' => '4459',
			'password' => Hash::make('4459'),
			'email' => 'alexandra.vieira@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4459',
			'sobreMim' => 'Sou a Bruna e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '01/04/1991',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(56);
		$user = User::create(array(
			'nome' => 'Camila',
			'sobrenome' => 'Alves',
			'login' => '6302',
			'password' => Hash::make('6302'),
			'email' => 'camila.alves@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6302',
			'sobreMim' => 'Sou a Odete e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '04/09/1983',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(56);
		$user = User::create(array(
			'nome' => 'Michele',
			'sobrenome' => 'Redfield',
			'login' => '6237',
			'password' => Hash::make('6237'),
			'email' => 'michele.redfield@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6237',
			'sobreMim' => 'Sou a Sarah, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '25/08/1961',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(56);
		$user = User::create(array(
			'nome' => 'Jonas',
			'sobrenome' => 'Batista',
			'login' => '6223',
			'password' => Hash::make('6223'),
			'email' => 'jonas.batista@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6223',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '16/01/1960',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(57);
		$user = User::create(array(
			'nome' => 'Fernanda',
			'sobrenome' => 'Carvalho',
			'login' => '2963',
			'password' => Hash::make('2963'),
			'email' => 'fernanda.carvalho@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '2963',
			'sobreMim' => 'Sou a Caio, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '16/03/1981',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(57);
		$user = User::create(array(
			'nome' => 'Otavio',
			'sobrenome' => 'Sato',
			'login' => '6039',
			'password' => Hash::make('6039'),
			'email' => 'otavio.sato@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6039',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '16/08/1975',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(57);
		$user = User::create(array(
			'nome' => 'Rafaela',
			'sobrenome' => 'Ishida Silva',
			'login' => '1004',
			'password' => Hash::make('1004'),
			'email' => 'rafaela.ishida silva@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1004',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '03/04/1971',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(57);
		$user = User::create(array(
			'nome' => 'Kitana',
			'sobrenome' => 'Sato',
			'login' => '5283',
			'password' => Hash::make('5283'),
			'email' => 'kitana.sato@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5283',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '01/09/1972',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(58);
		$user = User::create(array(
			'nome' => 'Sheeva',
			'sobrenome' => 'Jordão',
			'login' => '5424',
			'password' => Hash::make('5424'),
			'email' => 'sheeva.jordao@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5424',
			'sobreMim' => 'Sou a Akemi e gosto de brincar de boneca , estudar e fazer novos amigos',
			'dataNascimento' => '03/02/1981',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(58);
		$user = User::create(array(
			'nome' => 'Cauê',
			'sobrenome' => 'da Silva',
			'login' => '1880',
			'password' => Hash::make('1880'),
			'email' => 'caue.da silva@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1880',
			'sobreMim' => 'Olá, sou o Jill e amo assistir tv, séries e filmes',
			'dataNascimento' => '14/06/1964',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(58);
		$user = User::create(array(
			'nome' => 'Michele',
			'sobrenome' => 'Franca',
			'login' => '3716',
			'password' => Hash::make('3716'),
			'email' => 'michele.franca@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3716',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '26/06/1963',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(58);
		$user = User::create(array(
			'nome' => 'Irene',
			'sobrenome' => 'Takahashi',
			'login' => '3728',
			'password' => Hash::make('3728'),
			'email' => 'irene.takahashi@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3728',
			'sobreMim' => 'Sou a Sonia e gosto de brincar de qualquer coisa com meus amigos, sempre jogo videogame e futebol. Sou muito inteligente',
			'dataNascimento' => '11/09/1959',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(59);
		$user = User::create(array(
			'nome' => 'Andreia',
			'sobrenome' => 'Gouveia',
			'login' => '1535',
			'password' => Hash::make('1535'),
			'email' => 'andreia.gouveia@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '1535',
			'sobreMim' => 'Sou a Augusto e gosto de brincar de qualquer coisa com meus amigos, sempre brinco com eles em casa e minha mãe faz vários comidas pra gente',
			'dataNascimento' => '28/11/1966',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(59);
		$user = User::create(array(
			'nome' => 'Dante',
			'sobrenome' => 'Hernandes',
			'login' => '6032',
			'password' => Hash::make('6032'),
			'email' => 'dante.hernandes@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6032',
			'sobreMim' => 'Sou o Yoko, não gosto de estudar, só estudo inglês porque minha mãe me obriga',
			'dataNascimento' => '24/03/1980',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(59);
		$user = User::create(array(
			'nome' => 'Trinity',
			'sobrenome' => 'Macedo',
			'login' => '8418',
			'password' => Hash::make('8418'),
			'email' => 'trinity.macedo@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '8418',
			'sobreMim' => 'Gosto de brincar, jogar video game e fazer amigos',
			'dataNascimento' => '06/04/1977',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(59);
		$user = User::create(array(
			'nome' => 'Jade',
			'sobrenome' => 'Freire',
			'login' => '6184',
			'password' => Hash::make('6184'),
			'email' => 'jade.freire@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '6184',
			'sobreMim' => 'Sou a Peterson, adoro cinema e o Justin Bieber! Sou fã do One Direction',
			'dataNascimento' => '21/09/1989',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(60);
		$user = User::create(array(
			'nome' => 'Caio',
			'sobrenome' => 'Pádua',
			'login' => '5265',
			'password' => Hash::make('5265'),
			'email' => 'caio.padua@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '5265',
			'sobreMim' => 'Futebol, video game e internet',
			'dataNascimento' => '10/02/1970',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(60);
		$user = User::create(array(
			'nome' => 'Doulgas',
			'sobrenome' => 'Faria',
			'login' => '4367',
			'password' => Hash::make('4367'),
			'email' => 'doulgas.faria@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '4367',
			'sobreMim' => 'Gosto de jogar volei na praia com minhas amigas e adoro doces',
			'dataNascimento' => '23/10/1976',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(60);
		$user = User::create(array(
			'nome' => 'Akemi',
			'sobrenome' => 'Matos',
			'login' => '3344',
			'password' => Hash::make('3344'),
			'email' => 'akemi.matos@gmail.com',
			'confirmed' => '1',
			'tipo' => '1'
			));
		$Aluno = Aluno::create(array(
			'id' => $user->id,
			'matricula' => '3344',
			'sobreMim' => 'Gosto de bolo de choholate, jogar video game e do filme Matrix',
			'dataNascimento' => '05/06/1976',
			'dataVencimentoBoleto' => 'dataVencimentoBoletoAlu'
			));
		$user->aluno->turmas()->attach(60);


	}

}


 ?>