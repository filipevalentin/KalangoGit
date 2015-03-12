<h1>{{ $modulos->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($modulos, array('route' => array('modulos.update', $modulos->id), 'method' => 'PUT')) }}

	{{ Form::hidden('id', null, array('class' => 'form-control')) }}
<div class="form-group">
{{ Form::label('nome', 'Nome') }}
{{ Form::text('nome', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('descricao', 'Descricao') }}
{{ Form::text('descricao', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('idCurso', 'IdCurso') }}
{{ Form::select('idCurso', array('' => 'SELECIONE UMA OPÇÃO') + $cursos_list, Input::old('idCurso'), array( 'class' => 'form-control')) }}
</div>


	{{ Form::submit('Editar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}