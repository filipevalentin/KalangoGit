<?php

class AulaController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the Aula
		$aulas = Aula::all();

		$this->layout->content = View::make('Aula.index')->with('aulas', $aulas);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		$modulos_list = Modulo::all()->lists('id', 'id');

		// load the create form (app/views/Aula/create.blade.php)
		$this->layout->content = View::make('Aula.create')
->with('modulos_list', $modulos_list);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$aulas = new Aula;
		$aulas->id       = Input::get('id');
		$aulas->titulo       = Input::get('titulo');
		$aulas->idModulo       = Input::get('idModulo');

		$aulas->save();

		// redirect
		Session::flash('message', 'Registro cadastrado com sucesso!');
		return Redirect::to('aulas');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the Aula
		$aulas = Aula::find($id);

		// show the view and pass the Aula to it
		$this->layout->content = View::make('Aula.show')->with('aulas', $aulas);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the Aula
		$aulas = Aula::find($id);

		$modulos_list = Modulo::all()->lists('id', 'id');

		// show the edit form and pass the Aula
		$this->layout->content = View::make('Aula.edit')
->with('aulas', $aulas)->with('modulos_list', $modulos_list);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$aulas = Aula::find($id);
		$aulas->id       = Input::get('id');
$aulas->titulo       = Input::get('titulo');
$aulas->idModulo       = Input::get('idModulo');

		$aulas->save();

		// redirect
		Session::flash('message', 'Registro atualizado com sucesso!');
		return Redirect::to('aulas');
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

			$aulas = Aula::find($id);

			$aulas->delete();
			
			Session::flash('message', 'Registro deletado com sucesso!');

		} catch (Exception $e) {
			Session::flash('message', 'Erro ao excluir registro!');
		}

		// redirect
		return Redirect::to('aulas');
	}


}
