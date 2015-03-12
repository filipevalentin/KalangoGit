<?php 
	class MaterialApoio extends Eloquent{

		protected $table = 'materialApoio';
		public $timestamps = false;

		public function aula(){
			return $this->belongsTo('Aula', "idAula");
		}

	}

 ?>