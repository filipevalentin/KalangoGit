<?php 
	class Mensagem extends Eloquent{

		public $timestamps = false;
		protected $table = 'mensagens';

   		public function usuarioDestino(){
        	return $this->belongsTo('User', 'idUsuarioDestino');
        }

        public function usuarioOrigem(){
        	return $this->belongsTo('User', 'idUsuarioOrgiem');
        }

     	public function emResposta(){
        	return $this->belongsTo('Mensagem', 'idRE');
        }

	}

 ?>