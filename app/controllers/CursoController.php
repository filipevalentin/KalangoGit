<?php

class CursoController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the Curso
		$cursos = Curso::all();

		$this->layout->content = View::make('Curso.index')->with('cursos', $cursos);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		
		// load the create form (app/views/Curso/create.blade.php)
		$this->layout->content = View::make('Curso.create')
;
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$Curso = new Curso;
		$Curso->id       = Input::get('id');
		$Curso->nome       = Input::get('nome');
		$Curso->descricao       = Input::get('descricao');
		$Curso->idioma       = Input::get('idioma');

		$Curso->save();

		// redirect
		Session::flash('message', 'Registro cadastrado com sucesso!');
		return Redirect::to('cursos');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the Curso
		$Curso = Curso::find($id);

		// show the view and pass the Curso to it
		$this->layout->content = View::make('Curso.show')->with('cursos', $Curso);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the Curso
		$Curso = Curso::find($id);

		
		// show the edit form and pass the Curso
		$this->layout->content = View::make('Curso.edit')
->with('cursos', $Curso);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$Curso = Curso::find($id);
		$Curso->id       = Input::get('id');
$Curso->nome       = Input::get('nome');
$Curso->descricao       = Input::get('descricao');
$Curso->idioma       = Input::get('idioma');

		$Curso->save();

		// redirect
		Session::flash('message', 'Registro atualizado com sucesso!');
		return Redirect::to('cursos');
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

			$Curso = Curso::find($id);

			$Curso->delete();
			
			Session::flash('message', 'Registro deletado com sucesso!');

		} catch (Exception $e) {
			Session::flash('message', 'Erro ao excluir registro!');
		}

		// redirect
		return Redirect::to('cursos');
	}


}
