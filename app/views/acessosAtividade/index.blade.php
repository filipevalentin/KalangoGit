<h1>Acessos</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
<th>Data</th>
<th>IdAluno</th>
<th>IdAula</th>

			<td></td>
		</tr>
	</thead>
	<tbody>
	@foreach($acessos as $key => $value)
		<tr>
			<td> {{ $value->id}} </td>
<td> {{ $value->data}} </td>
<td> {{ $value->idAluno}} </td>
<td> {{ $value->idAula}} </td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the acessos (uses the destroy method DESTROY /acessos/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				{{ Form::open(array('url' => 'acessos/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Deletar', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the acessos (uses the show method found at GET /acessos/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('acessos/' . $value->id) }}">Visualizar</a>

				<!-- edit this acessos (uses the edit method found at GET /acessos/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('acessos/' . $value->id . '/edit') }}">Editar</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

<a class="btn btn-small btn-info" href="{{ URL::to('acessos/create') }}">Novo</a>