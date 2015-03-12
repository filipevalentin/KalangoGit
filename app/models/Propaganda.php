<?php 
	class Propaganda extends Eloquent{

		public $timestamps = false;

   		public function usuario(){
        	return $this->belongsTo('User', 'idUsuario');
        }

	}

 ?>