<?php

class ModuloController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the Modulo
		$modulos = Modulo::all();

		$this->layout->content = View::make('Modulo.index')->with('modulos', $modulos);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		$cursos_list = Curso::all()->lists('id', 'id');

		// load the create form (app/views/Modulo/create.blade.php)
		$this->layout->content = View::make('Modulo.create')
->with('cursos_list', $cursos_list);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$modulos = new Modulo;
		$modulos->id       = Input::get('id');
		$modulos->nome       = Input::get('nome');
		$modulos->descricao       = Input::get('descricao');
		$modulos->idCurso       = Input::get('idCurso');

		$modulos->save();

		// redirect
		Session::flash('message', 'Registro cadastrado com sucesso!');
		return Redirect::to('modulos');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the Modulo
		$modulos = Modulo::find($id);

		// show the view and pass the Modulo to it
		$this->layout->content = View::make('Modulo.show')->with('Modulo', $modulos);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the Modulo
		$modulos = Modulo::find($id);

		$cursos_list = Curso::all()->lists('id', 'id');

		// show the edit form and pass the Modulo
		$this->layout->content = View::make('Modulo.edit')
->with('modulos', $modulos)->with('cursos_list', $cursos_list);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$modulos = Modulo::find($id);
		$modulos->id       = Input::get('id');
$modulos->nome       = Input::get('nome');
$modulos->descricao       = Input::get('descricao');
$modulos->idCurso       = Input::get('idCurso');

		$modulos->save();

		// redirect
		Session::flash('message', 'Registro atualizado com sucesso!');
		return Redirect::to('modulos');
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

			$modulos = Modulo::find($id);

			$modulos->delete();
			
			Session::flash('message', 'Registro deletado com sucesso!');

		} catch (Exception $e) {
			Session::flash('message', 'Erro ao excluir registro!');
		}

		// redirect
		return Redirect::to('modulos');
	}


}
