<?php
	
	use Illuminate\Database\Eloquent\SoftDeletingTrait; 
	
	class Atividade extends Eloquent{

		use SoftDeletingTrait;
		protected $dates = ['deleted_at'];
		public $timestamps = false;
		protected $table = 'atividades';

		public function categoria(){
			return $this->belongsTo("Categoria", "idCategoria");
		}

		public function modulo(){
        	return $this->belongsTo("Modulo", "idModulo");
        }

        public function aula(){
        	return $this->belongsTo("Aula", "idAula");
        }

        public function usuario(){
        	return $this->belongsTo("User", "idUsuario");
        }

        public function questoes(){
			return $this-> hasMany('Questao','idAtividade');
		}


	}

 ?>