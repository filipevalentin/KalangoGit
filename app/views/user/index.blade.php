<h1>Usuarios</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
<th>Nome</th>
<th>Sobrenome</th>
<th>Username</th>
<th>Password</th>
<th>Email</th>
<th>RespostaSecreta</th>
<th>UrlImagem</th>
<th>Remember Token</th>
<th>Tipo</th>

			<td></td>
		</tr>
	</thead>
	<tbody>
	@foreach($usuarios as $key => $value)
		<tr>
			<td> {{ $value->id}} </td>
			<td> {{ $value->nome}} </td>
			<td> {{ $value->sobrenome}} </td>
			<td> {{ $value->username}} </td>
			<td> {{ $value->password}} </td>
			<td> {{ $value->email}} </td>
			<td> {{ $value->respostaSecreta}} </td>
			<td> {{ $value->urlImagem}} </td>
			<td> {{ $value->remember_token}} </td>
			<td> {{ $value->tipo}} </td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the usuarios (uses the destroy method DESTROY /usuarios/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				{{ Form::open(array('url' => 'usuarios/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Deletar', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the usuarios (uses the show method found at GET /usuarios/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('usuarios/' . $value->id) }}">Visualizar</a>

				<!-- edit this usuarios (uses the edit method found at GET /usuarios/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('usuarios/' . $value->id . '/edit') }}">Editar</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

<a class="btn btn-small btn-info" href="{{ URL::to('usuarios/create') }}">Novo</a>