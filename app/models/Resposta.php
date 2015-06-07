<?php 
	class Resposta extends Eloquent{

		public $timestamps = false;

		public function topico(){
        	return $this->belongsTo('Topico', 'idTopico');	
        }
		
	}

 ?>