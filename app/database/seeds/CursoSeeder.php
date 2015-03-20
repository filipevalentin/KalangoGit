<?php 

class CursoSeeder extends Seeder{

	public function run(){
		Eloquent::unguard();

		$curso = Curso::create(array(
		  'nome' => 'Kids',
		  'idIdioma' => '1'
		));
		$curso = Curso::create(array(
		  'nome' => 'Teens',
		  'idIdioma' => '1'
		));
		$curso = Curso::create(array(
		  'nome' => 'Adult',
		  'idIdioma' => '1'
		));

	}

}


 ?>