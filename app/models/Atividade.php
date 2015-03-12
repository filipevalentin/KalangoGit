<?php 
	
	class Atividade extends Eloquent{

		public $timestamps = false;
		protected $table = 'atividades';

		public function categoria(){
			return $this->belongsTo("Categoria", "idCategoria");
		}

		public function modulo(){
        	return $this->belongsTo("Modulo", "idModulo");
        }

        public function usuario(){
        	return $this->belongsTo("User", "idUsuario");
        }

        public function questoes(){
			return $this-> hasMany('Questao','idAtividade');
		}


	}

 ?>