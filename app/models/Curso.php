<?php
	use Illuminate\Database\Eloquent\SoftDeletingTrait; 
	class Curso extends Eloquent{

		use SoftDeletingTrait;
		protected $dates = ['deleted_at'];

		public $timestamps = false;

		public function modulos(){
			return $this->hasMany('Modulo', "idCurso");
		}

		public function turmas(){
	        return $this->hasManyThrough('Turma', 'Modulo', 'idCurso', 'idModulo');
	    }


		public function idioma(){
			return $this->belongsTo('Idioma',"idIdioma");
		}

	}
	
 ?>