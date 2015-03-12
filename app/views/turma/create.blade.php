<h1>Turmas</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'turmas')) }}

	<div class="form-group">
{{ Form::label('nome', 'Nome') }}
{{ Form::text('nome', Input::old('nome'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('idModulo', 'IdModulo') }}
{{ Form::select('idModulo', $modulos_list, null) }}
</div>
<div class="form-group">
{{ Form::label('idProfessor', 'IdProfessor') }}
{{ Form::select('idProfessor', $professores_list, null) }}
</div>


	{{ Form::submit('Cadastrar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}