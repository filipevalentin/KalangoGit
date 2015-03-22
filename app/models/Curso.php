<?php 
	class Curso extends Eloquent{

		public $timestamps = false;

		public function modulos(){
			return $this->hasMany('Modulo', "idCurso");
		}

		public function avisos(){
			return $this->hasMany('Aviso', "idCurso");
		}

		public function turmas(){
	        return $this->hasManyThrough('Turma', 'Modulo', 'idCurso', 'idModulo');
	    }


		public function idioma(){
			return $this->belongsTo('Idioma',"idIdioma");
		}

	}
	
 ?>