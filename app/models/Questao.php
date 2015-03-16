<?php 
	
	class Questao extends Eloquent{

		protected $table = 'questoes';
		public $timestamps = false;

		public function atividade(){
        	return $this->belongsTo('Atividade', 'idAtividade');
        }

        // Agora a questao terá só um skill atrelado, então será hasOne
        public function skills(){
        	return $this->belongsToMany('Skill', 'QuestoesSkill', 'idQuestao', 'idSkill');	
        }

        public function respostas(){
        	return $this->belongsToMany('Aluno', 'respostas', 'idAluno', 'idQuestao')->withPivot('correcao','respostaAluno');
        }

	}
	
 ?>