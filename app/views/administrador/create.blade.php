<h1>Administradores</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'administradores')) }}

	<div class="form-group">
{{ Form::label('codRegistro', 'CodRegistro') }}
{{ Form::text('codRegistro', Input::old('codRegistro'), array('class' => 'form-control', '')) }}
</div>



	{{ Form::submit('Cadastrar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}