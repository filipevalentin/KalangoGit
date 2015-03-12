<?php 
	
	class Skill extends Eloquent{

		public $timestamps = false;

        public function questoes(){
        	return $this->belongsToMany('Questao', 'QuestoesSkill', 'idQuestao', 'idSkill');	
        }

	}
	
 ?>