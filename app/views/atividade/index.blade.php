<h1>Atividadesextras</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
<th>Titulo</th>
<th>Descricao</th>
<th>UrlImagem</th>
<th>IdCurso</th>
<th>IdCategoria</th>

			<td></td>
		</tr>
	</thead>
	<tbody>
	@foreach($atividadesextras as $key => $value)
		<tr>
			<td> {{ $value->id}} </td>
<td> {{ $value->titulo}} </td>
<td> {{ $value->descricao}} </td>
<td> {{ $value->urlImagem}} </td>
<td> {{ $value->idCurso}} </td>
<td> {{ $value->idCategoria}} </td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the atividadesextras (uses the destroy method DESTROY /atividadesextras/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				{{ Form::open(array('url' => 'atividadesextras/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Deletar', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the atividadesextras (uses the show method found at GET /atividadesextras/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('atividadesextras/' . $value->id) }}">Visualizar</a>

				<!-- edit this atividadesextras (uses the edit method found at GET /atividadesextras/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('atividadesextras/' . $value->id . '/edit') }}">Editar</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

<a class="btn btn-small btn-info" href="{{ URL::to('atividadesextras/create') }}">Novo</a>