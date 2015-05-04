<?php 
	use Illuminate\Database\Eloquent\SoftDeletingTrait;
	class Professor extends Eloquent{
		protected $table = 'professores';
		public $timestamps = false;
		use SoftDeletingTrait;
		protected $dates = ['deleted_at'];

		public function turmas(){
			return $this->hasMany('Turma', "idProfessor");
		}

		public function usuario(){
        	return $this->belongsTo('User', 'id');
        }
		
	}

 ?>