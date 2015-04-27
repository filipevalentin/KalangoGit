<?php 
	use Illuminate\Database\Eloquent\SoftDeletingTrait;
	class Questao extends Eloquent{
		use SoftDeletingTrait;

    	protected $dates = ['deleted_at'];
		protected $table = 'questoes';
		public $timestamps = false;

		public function atividade(){
	       return $this->belongsTo('Atividade', 'idAtividade');
        }

        // Agora a questao terá só um skill atrelado, então será hasOne
        public function topico(){
        	return $this->belongsTo('Topico', 'idTopico');	
        }

        public function respostas(){
        	return $this->belongsToMany('Aluno', 'respostas', 'idAluno', 'idQuestao')->withPivot('correcao','respostaAluno');
        }

	}
	
 ?>