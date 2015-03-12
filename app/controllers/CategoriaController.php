<?php

class CategoriaController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the Categoria
		$categorias = Categoria::all();

		$this->layout->content = View::make('Categoria.index')->with('categorias', $categorias);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		
		// load the create form (app/views/Categoria/create.blade.php)
		$this->layout->content = View::make('Categoria.create')
;
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$categorias = new Categoria;
		$categorias->id       = Input::get('id');
$categorias->nome       = Input::get('nome');

		$categorias->save();

		// redirect
		Session::flash('message', 'Registro cadastrado com sucesso!');
		return Redirect::to('categorias');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the Categoria
		$categorias = Categoria::find($id);

		// show the view and pass the Categoria to it
		$this->layout->content = View::make('Categoria.show')->with('Categoria', $categorias);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the Categoria
		$categorias = Categoria::find($id);

		
		// show the edit form and pass the Categoria
		$this->layout->content = View::make('Categoria.edit')
->with('categorias', $categorias);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$categorias = Categoria::find($id);
		$categorias->id       = Input::get('id');
$categorias->nome       = Input::get('nome');

		$categorias->save();

		// redirect
		Session::flash('message', 'Registro atualizado com sucesso!');
		return Redirect::to('categorias');
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

			$categorias = Categoria::find($id);

			$categorias->delete();
			
			Session::flash('message', 'Registro deletado com sucesso!');

		} catch (Exception $e) {
			Session::flash('message', 'Erro ao excluir registro!');
		}

		// redirect
		return Redirect::to('categorias');
	}


}
