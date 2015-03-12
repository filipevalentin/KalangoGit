<h1>{{ $turmasalunos->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($turmasalunos, array('route' => array('turmasalunos.update', $turmasalunos->id), 'method' => 'PUT')) }}

	{{ Form::hidden('id', null, array('class' => 'form-control')) }}
<div class="form-group">
{{ Form::label('idTurma', 'IdTurma') }}
{{ Form::select('idTurma', array('' => 'SELECIONE UMA OPÇÃO') + $turmas_list, Input::old('idTurma'), array( 'class' => 'form-control')) }}
</div>
<div class="form-group">
{{ Form::label('idAluno', 'IdAluno') }}
{{ Form::select('idAluno', array('' => 'SELECIONE UMA OPÇÃO') + $alunos_list, Input::old('idAluno'), array( 'class' => 'form-control')) }}
</div>


	{{ Form::submit('Editar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}