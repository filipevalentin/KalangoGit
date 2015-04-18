<?php 
	class Contrata extends Eloquent{

		protected $table = 'contrata';
		public $timestamps = false;

		protected $primaryKey = array('idCurso','idTurma','idAluno');

	}

 ?>