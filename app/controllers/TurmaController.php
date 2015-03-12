<?php

class TurmaController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the Turma
		$turmas = Turma::all();

		$this->layout->content = View::make('Turma.index')->with('turmas', $turmas);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		$modulos_list = Modulo::all()->lists('id', 'id');
$professores_list = Professor::all()->lists('id', 'id');

		// load the create form (app/views/Turma/create.blade.php)
		$this->layout->content = View::make('Turma.create')
->with('modulos_list', $modulos_list)
->with('professores_list', $professores_list);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$turmas = new Turma;
		$turmas->id       = Input::get('id');
$turmas->nome       = Input::get('nome');
$turmas->idModulo       = Input::get('idModulo');
$turmas->idProfessor       = Input::get('idProfessor');

		$turmas->save();

		// redirect
		Session::flash('message', 'Registro cadastrado com sucesso!');
		return Redirect::to('turmas');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the Turma
		$turmas = Turma::find($id);

		// show the view and pass the Turma to it
		$this->layout->content = View::make('Turma.show')->with('Turma', $turmas);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the Turma
		$turmas = Turma::find($id);

		$modulos_list = Modulo::all()->lists('id', 'id');
$professores_list = Professor::all()->lists('id', 'id');

		// show the edit form and pass the Turma
		$this->layout->content = View::make('Turma.edit')
->with('turmas', $turmas)->with('modulos_list', $modulos_list)
->with('professores_list', $professores_list);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$turmas = Turma::find($id);
		$turmas->id       = Input::get('id');
$turmas->nome       = Input::get('nome');
$turmas->idModulo       = Input::get('idModulo');
$turmas->idProfessor       = Input::get('idProfessor');

		$turmas->save();

		// redirect
		Session::flash('message', 'Registro atualizado com sucesso!');
		return Redirect::to('turmas');
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

			$turmas = Turma::find($id);

			$turmas->delete();
			
			Session::flash('message', 'Registro deletado com sucesso!');

		} catch (Exception $e) {
			Session::flash('message', 'Erro ao excluir registro!');
		}

		// redirect
		return Redirect::to('Turma');
	}


}
