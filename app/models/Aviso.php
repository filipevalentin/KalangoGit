<?php 
	
	class Aviso extends Eloquent{

		public $timestamps = false;


        public function usuario(){
        	return $this->belongsTo("User", "idAdmin");
        }

        public function turma(){
        	return $this->belongsToMany('Turma', 'avisosturmas', 'idAviso', 'idTurma')->withPivot('dataAviso');
        }


	}

 ?>