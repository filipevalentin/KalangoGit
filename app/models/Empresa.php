<?php 
	class Empresa extends Eloquent{

		public $timestamps = false;

        public function propagandas(){
			return $this-> hasMany('Propaganda','idEmpresa');
		}

	}

 ?>