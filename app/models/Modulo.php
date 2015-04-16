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

		//Só atividades De aula
		public function atividades(){
			return $this-> hasManyThrough('Atividade','Aula', 'idModulo', 'idAula');
		}

		public function atividadesExtras(){
			return $this-> hasMany('Atividade','idModulo');
		}

		//Categorias das atividades Extras
		public function categorias(){
			return $this-> hasManyThrough('Categoria','Atividade', 'idModulo', 'id');
		}

		public function questoes(){
			return $this->hasManyThrough('Questao', 'Atividade', 'idModulo', 'idAtividade');
		}

		public function alunos(){
			return $this->hasManyThrough('Aluno', 'Turma', 'idModulo', 'idTurma');
		}

	}

 ?>