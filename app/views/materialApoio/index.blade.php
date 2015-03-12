<h1>Materialapoio</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
<th>Nome</th>
<th>Descricao</th>
<th>Url</th>
<th>IdAula</th>

			<td></td>
		</tr>
	</thead>
	<tbody>
	@foreach($materialapoio as $key => $value)
		<tr>
			<td> {{ $value->id}} </td>
<td> {{ $value->nome}} </td>
<td> {{ $value->descricao}} </td>
<td> {{ $value->url}} </td>
<td> {{ $value->idAula}} </td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the materialapoio (uses the destroy method DESTROY /materialapoio/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				{{ Form::open(array('url' => 'materialapoio/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Deletar', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the materialapoio (uses the show method found at GET /materialapoio/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('materialapoio/' . $value->id) }}">Visualizar</a>

				<!-- edit this materialapoio (uses the edit method found at GET /materialapoio/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('materialapoio/' . $value->id . '/edit') }}">Editar</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

<a class="btn btn-small btn-info" href="{{ URL::to('materialapoio/create') }}">Novo</a>