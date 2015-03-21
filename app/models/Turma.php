<?php 
	
	class Turma extends Eloquent{

		public $timestamps = false;

		public function professor(){
			return $this->belongsTo("Professor", "idProfessor");
		}


		public function modulo(){
        	return $this->belongsTo('Modulo', "idModulo");
        }

        public function alunos(){
        	return $this->belongsToMany('Aluno', 'turmasalunos', 'idTurma', 'idAluno')->withPivot('pontuacao');	
        }

        //foreach ($turma->alunos as $aluno)
		// {
		//     echo $aluno->pivot->pontuacao;
		// }


	}

 ?>