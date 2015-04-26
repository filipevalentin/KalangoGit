<?php 
use Illuminate\Database\Eloquent\SoftDeletingTrait;

	class Idioma extends Eloquent{
		public $timestamps = false;

		use SoftDeletingTrait;
		protected $dates = ['deleted_at'];

		public function cursos(){
			return $this-> hasMany('Curso','idIdioma');
		}

		public function modulos(){
			return $this-> hasManyThrough('Modulo','Curso', 'idIdioma','idCurso');
		}
		
	}


 ?>