<?php 
	use Illuminate\Database\Eloquent\SoftDeletingTrait;
	class Administrador extends Eloquent{

		public $timestamps = false;
		protected $table = 'administradores';
		use SoftDeletingTrait;
		protected $dates = ['deleted_at'];

		public function usuario(){
        	return $this->belongsTo('User', 'id');
        }
	}

 ?>