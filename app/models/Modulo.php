<?php 
	class Modulo extends Eloquent{

		public $timestamps = false;

		public function turmas(){
        	return $this->hasMany('Turma', 'idModulo');
   		}

   		public function curso(){
        	return $this->belongsTo('Curso', 'idCurso');
        }

        public function aulas(){
			return $this-> hasMany('Aula','idModulo');
		}

		public function atividades(){
			return $this-> hasMany('Atividade','idModulo');
		}

		public function questoes(){
			return $this->hasManyThrough('Questao', 'Atividade', 'idModulo', 'idAtividade');
		}

	}

 ?>