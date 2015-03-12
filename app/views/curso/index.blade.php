<h1>Curso</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
<th>Nome</th>
<th>Descricao</th>
<th>Idioma</th>

			<td></td>
		</tr>
	</thead>
	<tbody>
	@foreach($cursos as $key => $value)
		<tr>
			<td> {{ $value->id}} </td>
			<td> {{ $value->nome}} </td>
			<td> {{ $value->descricao}} </td>
			<td> {{ $value->idioma}} </td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the Curso (uses the destroy method DESTROY /Curso/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				{{ Form::open(array('url' => 'cursos/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Deletar', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the Curso (uses the show method found at GET /Curso/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('cursos/' . $value->id) }}">Visualizar</a>

				<!-- edit this Curso (uses the edit method found at GET /Curso/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('cursos/' . $value->id . '/edit') }}">Editar</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

<a class="btn btn-small btn-info" href="{{ URL::to('cursos/create') }}">Novo</a>