<?php 
	
	class Professor extends Eloquent{
		protected $table = 'professores';
		public $timestamps = false;

		public function turmas(){
			return $this->hasMany('Turma', "idProfessor");
		}

		public function usuario(){
        	return $this->belongsTo('User', 'id');
        }
		
	}

 ?>