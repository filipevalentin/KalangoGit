<?php 
	class Idioma extends Eloquent{
		public $timestamps = false;


		public function cursos(){
			return $this-> hasMany('Curso','idIdioma');
		}
		
	}


 ?>