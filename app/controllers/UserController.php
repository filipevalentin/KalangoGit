<?php

class UserController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the User
		$user = User::all();

		$this->layout->content = View::make('User.index')->with('usuarios', $user);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		
		// load the create form (app/views/User/create.blade.php)
		$this->layout->content = View::make('User.create')
;
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new User;
		$user->id       = Input::get('id');
		$user->nome       = Input::get('nome');
		$user->sobrenome       = Input::get('sobrenome');
		$user->username       = Input::get('username');
		$user->password       = Input::get('password');
		$user->email       = Input::get('email');
		$user->respostaSecreta       = Input::get('respostaSecreta');
		$user->urlImagem       = Input::get('urlImagem');
		$user->remember_token       = Input::get('remember_token');
		$user->tipo       = Input::get('tipo');

		$user->save();

		// redirect
		Session::flash('message', 'Registro cadastrado com sucesso!');
		return Redirect::to('usuarios');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the User
		$user = User::find($id);

		// show the view and pass the User to it
		$this->layout->content = View::make('Usuarios.show')->with('usuarios', $user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the User
		$user = User::find($id);

		
		// show the edit form and pass the User
		$this->layout->content = View::make('User.edit')
->with('usuarios', $user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::find($id);
		$user->id       = Input::get('id');
		$user->nome       = Input::get('nome');
		$user->sobrenome       = Input::get('sobrenome');
		$user->username       = Input::get('username');
		$user->password       = Input::get('password');
		$user->email       = Input::get('email');
		$user->respostaSecreta       = Input::get('respostaSecreta');
		$user->urlImagem       = Input::get('urlImagem');
		$user->remember_token       = Input::get('remember_token');
		$user->tipo       = Input::get('tipo');

		$user->save();

		// redirect
		Session::flash('message', 'Registro atualizado com sucesso!');
		return Redirect::to('usuarios');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{	
		try {

			$user = User::find($id);

			$user->delete();
			
			Session::flash('message', 'Registro deletado com sucesso!');

		} catch (Exception $e) {
			Session::flash('message', 'Erro ao excluir registro!');
		}

		// redirect
		return Redirect::to('usuarios');
	}


}
