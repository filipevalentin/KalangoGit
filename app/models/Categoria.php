<?php 
	
	class Categoria extends Eloquent{

		public $timestamps = false;

		public function atividades(){
			return $this->hasMany("Atividade","idCategoria"); 
		}

	}

 ?>