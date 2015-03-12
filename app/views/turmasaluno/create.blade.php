<h1>Turmasalunos</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'turmasalunos')) }}

	<div class="form-group">
{{ Form::label('idTurma', 'IdTurma') }}
{{ Form::select('idTurma', $turmas_list, null) }}
</div>
<div class="form-group">
{{ Form::label('idAluno', 'IdAluno') }}
{{ Form::select('idAluno', $alunos_list, null) }}
</div>


	{{ Form::submit('Cadastrar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}