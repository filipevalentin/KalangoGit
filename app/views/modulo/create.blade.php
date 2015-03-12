<h1>Modulos</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'modulos')) }}

	<div class="form-group">
{{ Form::label('nome', 'Nome') }}
{{ Form::text('nome', Input::old('nome'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('descricao', 'Descricao') }}
{{ Form::text('descricao', Input::old('descricao'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('idCurso', 'IdCurso') }}
{{ Form::select('idCurso', $cursos_list, null) }}
</div>


	{{ Form::submit('Cadastrar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}