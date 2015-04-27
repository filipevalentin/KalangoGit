<?php 
	class MaterialApoio extends Eloquent{

		protected $table = 'materialapoio';
		public $timestamps = false;

		public function aula(){
			return $this->belongsTo('Aula','idAula');
		}

	}

 ?>