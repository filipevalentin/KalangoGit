<h1>Aulas</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
<th>Titulo</th>
<th>IdModulo</th>

			<td></td>
		</tr>
	</thead>
	<tbody>
	@foreach($aulas as $key => $value)
		<tr>
			<td> {{ $value->id}} </td>
<td> {{ $value->titulo}} </td>
<td> {{ $value->idModulo}} </td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the aulas (uses the destroy method DESTROY /aulas/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				{{ Form::open(array('url' => 'aulas/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Deletar', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the aulas (uses the show method found at GET /aulas/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('aulas/' . $value->id) }}">Visualizar</a>

				<!-- edit this aulas (uses the edit method found at GET /aulas/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('aulas/' . $value->id . '/edit') }}">Editar</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

<a class="btn btn-small btn-info" href="{{ URL::to('aulas/create') }}">Novo</a>