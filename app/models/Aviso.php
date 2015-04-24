<?php 
	
	class Aviso extends Eloquent{

		public $timestamps = false;


                public function usuario(){
                	return $this->belongsTo("User", "idAdmin");
                }

                public function turmas(){
                	return $this->belongsToMany('Turma', 'avisosturmas', 'idAviso', 'idTurma')->withPivot('dataAviso');
                }

	}

 ?>