<?php 

class IdiomaSeeder extends Seeder{

	public function run(){

		Eloquent::unguard();

		$idioma = Idioma::create(array(
		  'nome' => 'Inglês'
		));
		$idioma = Idioma::create(array(
		  'nome' => 'Espanhol'
		));
		$idioma = Idioma::create(array(
		  'nome' => 'Francês'
		));
		$idioma = Idioma::create(array(
		  'nome' => 'Alemão'
		));
		$idioma = Idioma::create(array(
		  'nome' => 'Mandarim'
		));


	}

}


 ?>