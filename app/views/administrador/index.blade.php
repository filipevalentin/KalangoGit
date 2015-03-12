<h1>Administradores</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>id</th>
			<th>CodRegistro</th>
			<td></td>
		</tr>
	</thead>
	<tbody>
	@foreach($administradores as $key => $value)
		<tr>
			<td> {{ $value->id}} </td>
<td> {{ $value->codRegistro}} </td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the administradores (uses the destroy method DESTROY /administradores/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				{{ Form::open(array('url' => 'administradores/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Deletar', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the administradores (uses the show method found at GET /administradores/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('administradores/' . $value->id) }}">Visualizar</a>

				<!-- edit this administradores (uses the edit method found at GET /administradores/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('administradores/' . $value->id . '/edit') }}">Editar</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

<a class="btn btn-small btn-info" href="{{ URL::to('administradores/create') }}">Novo</a>