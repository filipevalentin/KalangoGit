<?php 
	class MaterialApoio extends Eloquent{

		protected $table = 'materialapoio';
		public $timestamps = false;

		public function aula(){
			return $this->belongsToMany('Aula', 'materialapoioaula', 'idMaterialApoio', 'idAula');
		}

	}

 ?>