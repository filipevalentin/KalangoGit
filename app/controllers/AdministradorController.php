<?php

class AdministradorController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the Administrador
		$administradores = Administrador::all();

		$this->layout->content = View::make('Administrador.index')->with('administradores', $administradores);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		
		// load the create form (app/views/Administrador/create.blade.php)
		$this->layout->content = View::make('Administrador.create')
;
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$administradores = new Administrador;
		$administradores->id       = Input::get('id');
$administradores->codRegistro       = Input::get('codRegistro');

		$administradores->save();

		// redirect
		Session::flash('message', 'Registro cadastrado com sucesso!');
		return Redirect::to('Administrador');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the Administrador
		$administradores = Administrador::find($id);
		return dd($administradores);

		// show the view and pass the Administrador to it
		$this->layout->content = View::make('Administrador.show')->with('administradores', $administradores);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the Administrador
		$administradores = Administrador::find($id);

		
		// show the edit form and pass the Administrador
		$this->layout->content = View::make('Administrador.edit')
->with('administradores', $administradores);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$administradores = Administrador::find($id);
		$administradores->id       = Input::get('id');
$administradores->codRegistro       = Input::get('codRegistro');

		$administradores->save();

		// redirect
		Session::flash('message', 'Registro atualizado com sucesso!');
		return Redirect::to('Administrador');
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

			$administradores = Administrador::find($id);

			$administradores->delete();
			
			Session::flash('message', 'Registro deletado com sucesso!');

		} catch (Exception $e) {
			Session::flash('message', 'Erro ao excluir registro!');
		}

		// redirect
		return Redirect::to('Administrador');
	}


}
