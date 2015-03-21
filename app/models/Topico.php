<?php 
	
	class Topico extends Eloquent{

		public $timestamps = false;

        public function questoes(){
        	return $this->hasMany('Questao', 'idTopico');	
        }

	}
	
 ?>