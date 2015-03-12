<h1>Turmas</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
<th>Nome</th>
<th>IdModulo</th>
<th>IdProfessor</th>

			<td></td>
		</tr>
	</thead>
	<tbody>
	@foreach($turmas as $key => $value)
		<tr>
			<td> {{ $value->id}} </td>
<td> {{ $value->nome}} </td>
<td> {{ $value->idModulo}} </td>
<td> {{ $value->idProfessor}} </td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the turmas (uses the destroy method DESTROY /turmas/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				{{ Form::open(array('url' => 'turmas/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Deletar', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the turmas (uses the show method found at GET /turmas/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('turmas/' . $value->id) }}">Visualizar</a>

				<!-- edit this turmas (uses the edit method found at GET /turmas/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('turmas/' . $value->id . '/edit') }}">Editar</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

<a class="btn btn-small btn-info" href="{{ URL::to('turmas/create') }}">Novo</a>