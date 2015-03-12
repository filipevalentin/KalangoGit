<?php

class MaterialApoioController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the MaterialApoio
		$materialapoio = MaterialApoio::all();

		$this->layout->content = View::make('MaterialApoio.index')->with('materialapoio', $materialapoio);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		$aulas_list = Aula::all()->lists('id', 'id');

		// load the create form (app/views/MaterialApoio/create.blade.php)
		$this->layout->content = View::make('MaterialApoio.create')
->with('aulas_list', $aulas_list);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$materialapoio = new MaterialApoio;
		$materialapoio->id       = Input::get('id');
$materialapoio->nome       = Input::get('nome');
$materialapoio->descricao       = Input::get('descricao');
$materialapoio->url       = Input::get('url');
$materialapoio->idAula       = Input::get('idAula');

		$materialapoio->save();

		// redirect
		Session::flash('message', 'Registro cadastrado com sucesso!');
		return Redirect::to('MaterialApoio');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the MaterialApoio
		$materialapoio = MaterialApoio::find($id);

		// show the view and pass the MaterialApoio to it
		$this->layout->content = View::make('MaterialApoio.show')->with('MaterialApoio', $materialapoio);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the MaterialApoio
		$materialapoio = MaterialApoio::find($id);

		$aulas_list = Aula::all()->lists('id', 'id');

		// show the edit form and pass the MaterialApoio
		$this->layout->content = View::make('MaterialApoio.edit')
->with('materialapoio', $materialapoio)->with('aulas_list', $aulas_list);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$materialapoio = MaterialApoio::find($id);
		$materialapoio->id       = Input::get('id');
$materialapoio->nome       = Input::get('nome');
$materialapoio->descricao       = Input::get('descricao');
$materialapoio->url       = Input::get('url');
$materialapoio->idAula       = Input::get('idAula');

		$materialapoio->save();

		// redirect
		Session::flash('message', 'Registro atualizado com sucesso!');
		return Redirect::to('MaterialApoio');
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

			$materialapoio = MaterialApoio::find($id);

			$materialapoio->delete();
			
			Session::flash('message', 'Registro deletado com sucesso!');

		} catch (Exception $e) {
			Session::flash('message', 'Erro ao excluir registro!');
		}

		// redirect
		return Redirect::to('MaterialApoio');
	}


}
