<h1>Categorias</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
<th>Nome</th>

			<td></td>
		</tr>
	</thead>
	<tbody>
	@foreach($categorias as $key => $value)
		<tr>
			<td> {{ $value->id}} </td>
<td> {{ $value->nome}} </td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the categorias (uses the destroy method DESTROY /categorias/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				{{ Form::open(array('url' => 'categorias/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Deletar', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the categorias (uses the show method found at GET /categorias/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('categorias/' . $value->id) }}">Visualizar</a>

				<!-- edit this categorias (uses the edit method found at GET /categorias/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('categorias/' . $value->id . '/edit') }}">Editar</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

<a class="btn btn-small btn-info" href="{{ URL::to('categorias/create') }}">Novo</a>