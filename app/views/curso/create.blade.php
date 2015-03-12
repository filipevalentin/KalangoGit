<h1>Curso</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'cursos')) }}

	<div class="form-group">
{{ Form::label('nome', 'Nome') }}
{{ Form::text('nome', Input::old('nome'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('descricao', 'Descricao') }}
{{ Form::text('descricao', Input::old('descricao'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('idioma', 'Idioma') }}
{{ Form::text('idioma', Input::old('idioma'), array('class' => 'form-control', '')) }}
</div>



	{{ Form::submit('Cadastrar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}