<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	public $timestamps = false;

	use UserTrait, RemindableTrait;

	protected $table='usuarios';

	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function atividades(){
		return $this->hasMany('Atividade', 'idUsuario');
	}

	public function mensagensEnviadas(){
		return $this->hasMany('Mensagem', 'idUsuarioOrigem');
	}

	public function mensagensRecebidas(){
		return $this->hasMany('Mensagem', 'idUsuarioDestino');
	}

	public function professor(){
		return $this->hasOne('Professor', 'id');
	}

	public function aluno(){
		return $this->hasOne('Aluno', 'id');
	}

	public function administrador(){
		return $this->hasOne('Administrador', 'id');
	}

	public function avisos(){
		return $this->hasMany('Aviso', 'idAdmin');
	}

	protected $hidden = array('password', 'remember_token');

}
