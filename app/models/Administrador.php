<?php 
	
	class Administrador extends Eloquent{

		public $timestamps = false;
		protected $table = 'administradores';

		public function usuario(){
        	return $this->belongsTo('User', 'id');
        }
	}

 ?>