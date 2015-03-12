<h1>Professores</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
<th>CodRegistro</th>
<th>SobreMim</th>
<th>UrlImagem</th>
<th>FormacaoAcademica</th>

			<td></td>
		</tr>
	</thead>
	<tbody>
	@foreach($professores as $key => $value)
		<tr>
			<td> {{ $value->id}} </td>
<td> {{ $value->codRegistro}} </td>
<td> {{ $value->sobreMim}} </td>
<td> {{ $value->urlImagem}} </td>
<td> {{ $value->formacaoAcademica}} </td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the professores (uses the destroy method DESTROY /professores/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				{{ Form::open(array('url' => 'professores/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Deletar', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the professores (uses the show method found at GET /professores/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('professores/' . $value->id) }}">Visualizar</a>

				<!-- edit this professores (uses the edit method found at GET /professores/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('professores/' . $value->id . '/edit') }}">Editar</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

<a class="btn btn-small btn-info" href="{{ URL::to('professores/create') }}">Novo</a>