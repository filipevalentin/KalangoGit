<?php 
	
	class Aluno extends Eloquent{

		public $timestamps = false;

		public function turmas(){
        	return $this->belongsToMany('Turma', 'turmasalunos', 'idAluno', 'idTurma')->withPivot('status', 'pontuacao');	
        }

 		//foreach ($aluno->turmas as $turma)
		// {
		//     echo $turma->pivot->pontuacao;
		// }

        public function usuario(){
        	return $this->belongsTo('User', 'id');
        }

        public function respostas(){
        	return $this->belongsToMany('Questao', 'respostas', 'idAluno', 'idQuestao')->withPivot('correcao','respostaAluno');
        }

        public function
        

	}

 ?>