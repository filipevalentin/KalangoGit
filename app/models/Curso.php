<?php 
	class Curso extends Eloquent{

		public $timestamps = false;

		public function modulos(){
			return $this->hasMany('Modulo', "idCurso");
		}

		public function turmas(){
	        return $this->hasManyThrough('Turma', 'Modulo', 'idCurso', 'idModulo');
	    }


		public function idioma(){
			return $this->belongsTo('idioma',"idIdioma");
		}

	}
	
 ?>