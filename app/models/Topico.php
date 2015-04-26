<?php 
	use Illuminate\Database\Eloquent\SoftDeletingTrait;
	class Topico extends Eloquent{
		
		use SoftDeletingTrait;

    	protected $dates = ['deleted_at'];
		public $timestamps = false;

        public function questoes(){
        	return $this->hasMany('Questao', 'idTopico');	
        }

	}
	
 ?>