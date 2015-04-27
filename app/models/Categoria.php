<?php 
	use Illuminate\Database\Eloquent\SoftDeletingTrait;
	
	class Categoria extends Eloquent{

		use SoftDeletingTrait;
		protected $dates = ['deleted_at'];

		public $timestamps = false;

		public function atividades(){
			return $this->hasMany("Atividade","idCategoria"); 
		}

	}

 ?>