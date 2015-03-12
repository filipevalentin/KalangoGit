<h1>{{ $administradores->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($administradores, array('route' => array('administradores.update', $administradores->id), 'method' => 'PUT')) }}

	{{ Form::hidden('id', null, array('class' => 'form-control')) }}
<div class="form-group">
{{ Form::label('codRegistro', 'CodRegistro') }}
{{ Form::text('codRegistro', null, array('class' => 'form-control', '')) }}
</div>



	{{ Form::submit('Editar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}