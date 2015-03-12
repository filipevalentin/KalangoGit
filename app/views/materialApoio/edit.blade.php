<h1>{{ $materialapoio->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($materialapoio, array('route' => array('materialapoio.update', $materialapoio->id), 'method' => 'PUT')) }}

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
{{ Form::label('url', 'Url') }}
{{ Form::text('url', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('idAula', 'IdAula') }}
{{ Form::select('idAula', array('' => 'SELECIONE UMA OPÇÃO') + $aulas_list, Input::old('idAula'), array( 'class' => 'form-control')) }}
</div>


	{{ Form::submit('Editar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}