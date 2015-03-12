<?php

class HomeController extends BaseController {

	public function __construct() {
    	$this->beforeFilter('csrf', array('on'=>'post'));
    	$this->beforeFilter('guest');
	}

	public function getIndex(){
		$turmas = Aluno::find(Auth::user()->id)->turmas()->get()->all();
		return View::make('index')->with('turmas', $turmas);
	}

	public function getLogout(){
		Auth::logout();
		return Redirect::to('login');
	}

}
