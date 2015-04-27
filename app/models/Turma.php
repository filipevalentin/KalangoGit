<?php 
	
	use Illuminate\Database\Eloquent\SoftDeletingTrait;
	
	class Turma extends Eloquent{

		use SoftDeletingTrait;
		protected $dates = ['deleted_at'];

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

        public function avisos(){
        	return $this->belongsToMany('Aviso', 'avisosturmas', 'idTurma', 'idAviso')->withPivot('dataAviso');
        }

        //foreach ($turma->alunos as $aluno)
		// {
		//     echo $aluno->pivot->pontuacao;
		// }


	}

 ?>