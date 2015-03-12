<h1>Turmasalunos</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
<th>IdTurma</th>
<th>IdAluno</th>

			<td></td>
		</tr>
	</thead>
	<tbody>
	@foreach($turmasalunos as $key => $value)
		<tr>
			<td> {{ $value->id}} </td>
<td> {{ $value->idTurma}} </td>
<td> {{ $value->idAluno}} </td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the turmasalunos (uses the destroy method DESTROY /turmasalunos/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				{{ Form::open(array('url' => 'turmasalunos/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Deletar', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the turmasalunos (uses the show method found at GET /turmasalunos/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('turmasalunos/' . $value->id) }}">Visualizar</a>

				<!-- edit this turmasalunos (uses the edit method found at GET /turmasalunos/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('turmasalunos/' . $value->id . '/edit') }}">Editar</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

<a class="btn btn-small btn-info" href="{{ URL::to('turmasalunos/create') }}">Novo</a>