<h1>{{ $aulas->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($aulas, array('route' => array('aulas.update', $aulas->id), 'method' => 'PUT')) }}

	{{ Form::hidden('id', null, array('class' => 'form-control')) }}
<div class="form-group">
{{ Form::label('titulo', 'Titulo') }}
{{ Form::text('titulo', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('idModulo', 'IdModulo') }}
{{ Form::select('idModulo', array('' => 'SELECIONE UMA OPÇÃO') + $modulos_list, Input::old('idModulo'), array( 'class' => 'form-control')) }}
</div>


	{{ Form::submit('Editar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}