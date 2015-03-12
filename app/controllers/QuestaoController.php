<?php 
	
	class Questao extends Eloquent{

		protected $table = 'questoes';
		public $timestamps = false;

		public function atividade(){
        	return $this->belongsTo('Atividade', 'idAtividade');
        }

        public function skills(){
        	return $this->belongsToMany('Skill', 'QuestoesSkill', 'idQuestao', 'idSkill');	
        }

	}
	
 ?>