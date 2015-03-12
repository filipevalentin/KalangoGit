<h1>{{ $turmas->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($turmas, array('route' => array('turmas.update', $turmas->id), 'method' => 'PUT')) }}

	{{ Form::hidden('id', null, array('class' => 'form-control')) }}
<div class="form-group">
{{ Form::label('nome', 'Nome') }}
{{ Form::text('nome', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('idModulo', 'IdModulo') }}
{{ Form::select('idModulo', array('' => 'SELECIONE UMA OPÇÃO') + $modulos_list, Input::old('idModulo'), array( 'class' => 'form-control')) }}
</div>
<div class="form-group">
{{ Form::label('idProfessor', 'IdProfessor') }}
{{ Form::select('idProfessor', array('' => 'SELECIONE UMA OPÇÃO') + $professores_list, Input::old('idProfessor'), array( 'class' => 'form-control')) }}
</div>


	{{ Form::submit('Editar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}