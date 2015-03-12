<?php 
	
	class Aluno extends Eloquent{

		public $timestamps = false;

		public function turmas(){
        	return $this->belongsToMany('Turma', 'turmasalunos', 'idAluno', 'idTurma');	
        }

        public function usuario(){
        	return $this->belongsTo('User', 'id');
        }
        

	}

 ?>