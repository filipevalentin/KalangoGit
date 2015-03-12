<h1>Modulos</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
<th>Nome</th>
<th>Descricao</th>
<th>IdCurso</th>

			<td></td>
		</tr>
	</thead>
	<tbody>
	@foreach($modulos as $key => $value)
		<tr>
			<td> {{ $value->id}} </td>
<td> {{ $value->nome}} </td>
<td> {{ $value->descricao}} </td>
<td> {{ $value->idCurso}} </td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the modulos (uses the destroy method DESTROY /modulos/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				{{ Form::open(array('url' => 'modulos/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Deletar', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the modulos (uses the show method found at GET /modulos/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('modulos/' . $value->id) }}">Visualizar</a>

				<!-- edit this modulos (uses the edit method found at GET /modulos/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('modulos/' . $value->id . '/edit') }}">Editar</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

<a class="btn btn-small btn-info" href="{{ URL::to('modulos/create') }}">Novo</a>