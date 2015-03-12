<h1>Aulas</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'aulas')) }}

	<div class="form-group">
{{ Form::label('titulo', 'Titulo') }}
{{ Form::text('titulo', Input::old('titulo'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('idModulo', 'IdModulo') }}
{{ Form::select('idModulo', $modulos_list, null) }}
</div>


	{{ Form::submit('Cadastrar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}