<h1>Acessos</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'acessos')) }}

	<div class="form-group">
{{ Form::label('data', 'Data') }}
{{ Form::text('data', Input::old('data'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('idAluno', 'IdAluno') }}
{{ Form::select('idAluno', $alunos_list, null) }}
</div>
<div class="form-group">
{{ Form::label('idAula', 'IdAula') }}
{{ Form::select('idAula', $aulas_list, null) }}
</div>


	{{ Form::submit('Cadastrar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}