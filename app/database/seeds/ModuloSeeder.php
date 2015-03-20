<?php 

class ModuloSeeder extends Seeder{

	public function run(){
		Eloquent::unguard();

		$modulo = Modulo::create(array(
		  'nome' => 'Módulo 1',
		  'idCurso' => '1'
		));
		$modulo = Modulo::create(array(
		  'nome' => 'Módulo 2',
		  'idCurso' => '1'
		));
		$modulo = Modulo::create(array(
		  'nome' => 'Módulo 3',
		  'idCurso' => '1'
		));
		$modulo = Modulo::create(array(
		  'nome' => 'Módulo 4',
		  'idCurso' => '1'
		));
		$modulo = Modulo::create(array(
		  'nome' => 'Módulo 1',
		  'idCurso' => '2'
		));
		$modulo = Modulo::create(array(
		  'nome' => 'Módulo 2',
		  'idCurso' => '2'
		));
		$modulo = Modulo::create(array(
		  'nome' => 'Módulo 3',
		  'idCurso' => '2'
		));
		$modulo = Modulo::create(array(
		  'nome' => 'Módulo 4',
		  'idCurso' => '2'
		));
		$modulo = Modulo::create(array(
		  'nome' => 'Módulo 1',
		  'idCurso' => '3'
		));
		$modulo = Modulo::create(array(
		  'nome' => 'Módulo 2',
		  'idCurso' => '3'
		));
		$modulo = Modulo::create(array(
		  'nome' => 'Módulo 3',
		  'idCurso' => '3'
		));
		$modulo = Modulo::create(array(
		  'nome' => 'Módulo 4',
		  'idCurso' => '3'
		));


	}

}


 ?>