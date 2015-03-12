<h1>Alunos</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
<th>Matricula</th>
<th>SobreMim</th>
<th>UrlImagem</th>
<th>DataNascimento</th>
<th>DataVencimentoBoleto</th>

			<td></td>
		</tr>
	</thead>
	<tbody>
	@foreach($alunos as $key => $value)
		<tr>
			<td> {{ $value->id}} </td>
<td> {{ $value->matricula}} </td>
<td> {{ $value->sobreMim}} </td>
<td> {{ $value->urlImagem}} </td>
<td> {{ $value->dataNascimento}} </td>
<td> {{ $value->dataVencimentoBoleto}} </td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the alunos (uses the destroy method DESTROY /alunos/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				{{ Form::open(array('url' => 'alunos/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Deletar', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the alunos (uses the show method found at GET /alunos/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('alunos/' . $value->id) }}">Visualizar</a>

				<!-- edit this alunos (uses the edit method found at GET /alunos/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('alunos/' . $value->id . '/edit') }}">Editar</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

<a class="btn btn-small btn-info" href="{{ URL::to('alunos/create') }}">Novo</a>