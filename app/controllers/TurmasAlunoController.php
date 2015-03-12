<?php

class TurmasAlunoController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the TurmasAluno
		$turmasalunos = TurmasAluno::all();

		$this->layout->content = View::make('TurmasAluno.index')->with('turmasalunos', $turmasalunos);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		$turmas_list = Turma::all()->lists('id', 'id');
$alunos_list = Aluno::all()->lists('id', 'id');

		// load the create form (app/views/TurmasAluno/create.blade.php)
		$this->layout->content = View::make('TurmasAluno.create')
->with('turmas_list', $turmas_list)
->with('alunos_list', $alunos_list);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$turmasalunos = new TurmasAluno;
		$turmasalunos->id       = Input::get('id');
$turmasalunos->idTurma       = Input::get('idTurma');
$turmasalunos->idAluno       = Input::get('idAluno');

		$turmasalunos->save();

		// redirect
		Session::flash('message', 'Registro cadastrado com sucesso!');
		return Redirect::to('turmasalunos');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the TurmasAluno
		$turmasalunos = TurmasAluno::find($id);

		// show the view and pass the TurmasAluno to it
		$this->layout->content = View::make('TurmasAluno.show')->with('TurmasAluno', $turmasalunos);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the TurmasAluno
		$turmasalunos = TurmasAluno::find($id);

		$turmas_list = Turma::all()->lists('id', 'id');
$alunos_list = Aluno::all()->lists('id', 'id');

		// show the edit form and pass the TurmasAluno
		$this->layout->content = View::make('TurmasAluno.edit')
->with('turmasalunos', $turmasalunos)->with('turmas_list', $turmas_list)
->with('alunos_list', $alunos_list);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$turmasalunos = TurmasAluno::find($id);
		$turmasalunos->id       = Input::get('id');
$turmasalunos->idTurma       = Input::get('idTurma');
$turmasalunos->idAluno       = Input::get('idAluno');

		$turmasalunos->save();

		// redirect
		Session::flash('message', 'Registro atualizado com sucesso!');
		return Redirect::to('turmasalunos');
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

			$turmasalunos = TurmasAluno::find($id);

			$turmasalunos->delete();
			
			Session::flash('message', 'Registro deletado com sucesso!');

		} catch (Exception $e) {
			Session::flash('message', 'Erro ao excluir registro!');
		}

		// redirect
		return Redirect::to('turmasalunos');
	}


}
