<?php

class ProfessorController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the Professor
		$professores = Professor::all();

		$this->layout->content = View::make('Professor.index')->with('professores', $professores);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		
		// load the create form (app/views/Professor/create.blade.php)
		$this->layout->content = View::make('Professor.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$professores = new Professor;
		$professores->id       = Input::get('id');
$professores->codRegistro       = Input::get('codRegistro');
$professores->sobreMim       = Input::get('sobreMim');
$professores->urlImagem       = Input::get('urlImagem');
$professores->formacaoAcademica       = Input::get('formacaoAcademica');

		$professores->save();

		// redirect
		Session::flash('message', 'Registro cadastrado com sucesso!');
		return Redirect::to('professores');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the Professor
		$professores = Professor::find($id);

		// show the view and pass the Professor to it
		$this->layout->content = View::make('Professor.show')->with('Professor', $professores);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the Professor
		$professores = Professor::find($id);

		
		// show the edit form and pass the Professor
		$this->layout->content = View::make('Professor.edit')
->with('professores', $professores);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$professores = Professor::find($id);
		$professores->id       = Input::get('id');
$professores->codRegistro       = Input::get('codRegistro');
$professores->sobreMim       = Input::get('sobreMim');
$professores->urlImagem       = Input::get('urlImagem');
$professores->formacaoAcademica       = Input::get('formacaoAcademica');

		$professores->save();

		// redirect
		Session::flash('message', 'Registro atualizado com sucesso!');
		return Redirect::to('professores');
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

			$professores = Professor::find($id);

			$professores->delete();
			
			Session::flash('message', 'Registro deletado com sucesso!');

		} catch (Exception $e) {
			Session::flash('message', 'Erro ao excluir registro!');
		}

		// redirect
		return Redirect::to('professores');
	}


}
