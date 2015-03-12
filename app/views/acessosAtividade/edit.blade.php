<h1>{{ $acessos->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($acessos, array('route' => array('acessos.update', $acessos->id), 'method' => 'PUT')) }}

	{{ Form::hidden('id', null, array('class' => 'form-control')) }}
<div class="form-group">
{{ Form::label('data', 'Data') }}
{{ Form::text('data', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('idAluno', 'IdAluno') }}
{{ Form::select('idAluno', array('' => 'SELECIONE UMA OPÇÃO') + $alunos_list, Input::old('idAluno'), array( 'class' => 'form-control')) }}
</div>
<div class="form-group">
{{ Form::label('idAula', 'IdAula') }}
{{ Form::select('idAula', array('' => 'SELECIONE UMA OPÇÃO') + $aulas_list, Input::old('idAula'), array( 'class' => 'form-control')) }}
</div>


	{{ Form::submit('Editar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}