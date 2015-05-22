<?php 
	class Contrata extends Eloquent{

		protected $table = 'contrata';
		public $timestamps = false;

		public function curso(){
        	return $this->belongsTo('Curso', "idCurso");
        }

        public function turma(){
        	return $this->belongsTo('Turma', "idTurma");
        }

        public function aluno(){
        	return $this->belongsTo('Aluno', "idAluno");
        }

	}

 ?>