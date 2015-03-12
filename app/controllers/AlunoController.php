<?php

class AlunoController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the Aluno
		$alunos = Aluno::all();

		$this->layout->content = View::make('Aluno.index')->with('alunos', $alunos);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		
		// load the create form (app/views/Aluno/create.blade.php)
		$this->layout->content = View::make('Aluno.create')
;
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$alunos = new Aluno;
		$alunos->id       = Input::get('id');
$alunos->matricula       = Input::get('matricula');
$alunos->sobreMim       = Input::get('sobreMim');
$alunos->urlImagem       = Input::get('urlImagem');
$alunos->dataNascimento       = Input::get('dataNascimento');
$alunos->dataVencimentoBoleto       = Input::get('dataVencimentoBoleto');

		$alunos->save();

		// redirect
		Session::flash('message', 'Registro cadastrado com sucesso!');
		return Redirect::to('Aluno');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the Aluno
		$alunos = Aluno::find($id)->toArray();
		return dd($alunos);

		// show the view and pass the Aluno to it
		$this->layout->content = View::make('Aluno.show')->with('alunos', $alunos);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the Aluno
		$alunos = Aluno::find($id);

		
		// show the edit form and pass the Aluno
		$this->layout->content = View::make('Aluno.edit')
->with('alunos', $alunos);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$alunos = Aluno::find($id);
		$alunos->id       = Input::get('id');
$alunos->matricula       = Input::get('matricula');
$alunos->sobreMim       = Input::get('sobreMim');
$alunos->urlImagem       = Input::get('urlImagem');
$alunos->dataNascimento       = Input::get('dataNascimento');
$alunos->dataVencimentoBoleto       = Input::get('dataVencimentoBoleto');

		$alunos->save();

		// redirect
		Session::flash('message', 'Registro atualizado com sucesso!');
		return Redirect::to('Aluno');
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

			$alunos = Aluno::find($id);

			$alunos->delete();
			
			Session::flash('message', 'Registro deletado com sucesso!');

		} catch (Exception $e) {
			Session::flash('message', 'Erro ao excluir registro!');
		}

		// redirect
		return Redirect::to('Aluno');
	}


}
