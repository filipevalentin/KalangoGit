<?php 

class ProfessorSeeder extends Seeder{

	public function run(){
		Eloquent::unguard();

		$user = User::create(array(
		  'nome' => 'Jéssica',
		  'sobrenome' => 'Matos',
		  'login' => 'jessica.matos@gmail.com',
		 'password' => Hash::make('111'),
		  'email' => 'jessica.matos@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '0'
		));
		$user = User::create(array(
		  'nome' => 'Milena',
		  'sobrenome' => 'Pádua',
		  'login' => 'milena.padua@gmail.com',
		 'password' => Hash::make('222'),
		  'email' => 'milena.padua@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '1'
		));
		$user = User::create(array(
		  'nome' => 'Sheeva',
		  'sobrenome' => 'Batista',
		  'login' => 'sheeva.batista@gmail.com',
		 'password' => Hash::make('333'),
		  'email' => 'sheeva.batista@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '2'
		));
		$user = User::create(array(
		  'nome' => 'Michele',
		  'sobrenome' => 'Carvalho',
		  'login' => 'michele.carvalho@gmail.com',
		 'password' => Hash::make('444'),
		  'email' => 'michele.carvalho@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '3'
		));
		$user = User::create(array(
		  'nome' => 'Lara',
		  'sobrenome' => 'da Silva',
		  'login' => 'lara.da silva@gmail.com',
		 'password' => Hash::make('555'),
		  'email' => 'lara.da silva@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '4'
		));
		$user = User::create(array(
		  'nome' => 'ChunLi',
		  'sobrenome' => 'Valverde',
		  'login' => 'chunli.valverde@gmail.com',
		 'password' => Hash::make('666'),
		  'email' => 'chunli.valverde@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '5'
		));
		$user = User::create(array(
		  'nome' => 'Otavio',
		  'sobrenome' => 'Gouveia',
		  'login' => 'otavio.gouveia@gmail.com',
		 'password' => Hash::make('777'),
		  'email' => 'otavio.gouveia@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '6'
		));
		$user = User::create(array(
		  'nome' => 'Dante',
		  'sobrenome' => 'Peixoto',
		  'login' => 'dante.peixoto@gmail.com',
		 'password' => Hash::make('888'),
		  'email' => 'dante.peixoto@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '7'
		));
		$user = User::create(array(
		  'nome' => 'Doulgas',
		  'sobrenome' => 'Takahashi',
		  'login' => 'doulgas.takahashi@gmail.com',
		 'password' => Hash::make('999'),
		  'email' => 'doulgas.takahashi@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '8'
		));
		$user = User::create(array(
		  'nome' => 'Jonas',
		  'sobrenome' => 'Franca',
		  'login' => 'jonas.franca@gmail.com',
		 'password' => Hash::make('aaa'),
		  'email' => 'jonas.franca@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '9'
		));
		$user = User::create(array(
		  'nome' => 'Daniela',
		  'sobrenome' => 'Leal',
		  'login' => 'daniela.leal@gmail.com',
		 'password' => Hash::make('bbb'),
		  'email' => 'daniela.leal@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '10'
		));
		$user = User::create(array(
		  'nome' => 'Aline',
		  'sobrenome' => 'Hernandes',
		  'login' => 'aline.hernandes@gmail.com',
		 'password' => Hash::make('ccc'),
		  'email' => 'aline.hernandes@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '20'
		));
		$user = User::create(array(
		  'nome' => 'Monica',
		  'sobrenome' => 'Lins',
		  'login' => 'monica.lins@gmail.com',
		 'password' => Hash::make('ddd'),
		  'email' => 'monica.lins@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '30'
		));
		$user = User::create(array(
		  'nome' => 'Leonidas',
		  'sobrenome' => 'Macedo',
		  'login' => 'leonidas.macedo@gmail.com',
		 'password' => Hash::make('eee'),
		  'email' => 'leonidas.macedo@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '40'
		));
		$user = User::create(array(
		  'nome' => 'Morpheu',
		  'sobrenome' => 'Sato',
		  'login' => 'morpheu.sato@gmail.com',
		 'password' => Hash::make('fff'),
		  'email' => 'morpheu.sato@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '50'
		));
		$user = User::create(array(
		  'nome' => 'Claudio',
		  'sobrenome' => 'Tanaka',
		  'login' => 'claudio.tanaka@gmail.com',
		 'password' => Hash::make('ggg'),
		  'email' => 'claudio.tanaka@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '60'
		));
		$user = User::create(array(
		  'nome' => 'Augusto',
		  'sobrenome' => 'Yamada',
		  'login' => 'augusto.yamada@gmail.com',
		 'password' => Hash::make('hhh'),
		  'email' => 'augusto.yamada@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '70'
		));
		$user = User::create(array(
		  'nome' => 'Eric',
		  'sobrenome' => 'Valentine',
		  'login' => 'eric.valentine@gmail.com',
		 'password' => Hash::make('iii'),
		  'email' => 'eric.valentine@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '80'
		));
		$user = User::create(array(
		  'nome' => 'Bruno',
		  'sobrenome' => 'Villablanca',
		  'login' => 'bruno.villablanca@gmail.com',
		 'password' => Hash::make('jjj'),
		  'email' => 'bruno.villablanca@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '90'
		));
		$user = User::create(array(
		  'nome' => 'Yori',
		  'sobrenome' => 'Salgueiro',
		  'login' => 'yori.salgueiro@gmail.com',
		 'password' => Hash::make('kkk'),
		  'email' => 'yori.salgueiro@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '100'
		));
		$user = User::create(array(
		  'nome' => 'Angelina',
		  'sobrenome' => 'Suzuki',
		  'login' => 'angelina.suzuki@gmail.com',
		 'password' => Hash::make('lll'),
		  'email' => 'angelina.suzuki@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '110'
		));
		$user = User::create(array(
		  'nome' => 'Trinity',
		  'sobrenome' => 'dos Santos',
		  'login' => 'trinity.dos santos@gmail.com',
		 'password' => Hash::make('mmm'),
		  'email' => 'trinity.dos santos@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '120'
		));
		$user = User::create(array(
		  'nome' => 'Akemi',
		  'sobrenome' => 'Costa',
		  'login' => 'akemi.costa@gmail.com',
		 'password' => Hash::make('nnn'),
		  'email' => 'akemi.costa@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '130'
		));
		$user = User::create(array(
		  'nome' => 'Yoko',
		  'sobrenome' => 'Rocha',
		  'login' => 'yoko.rocha@gmail.com',
		 'password' => Hash::make('ooo'),
		  'email' => 'yoko.rocha@gmail.com',
		 'confirmed' => '1',
		 'tipo' => '2',
		));
		$professor = Professor::create(array(
		  'id' => $user->id,
		  'formacaoAcademica' => '',
		  'REProf' => '140'
		));


	}

}


 ?>