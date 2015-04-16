<?php 
	class Propaganda extends Eloquent{

		public $timestamps = false;

   		public function usuario(){
        	return $this->belongsTo('User', 'idUsuario');
        }

        public function empresa(){
        	return $this->belongsTo('Empresa', 'idEmpresa');
        }

	}

 ?>