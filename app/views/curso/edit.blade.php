<h1>{{ $cursos->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($cursos, array('route' => array('cursos.update', $cursos->id), 'method' => 'PUT')) }}

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
{{ Form::label('idioma', 'Idioma') }}
{{ Form::text('idioma', null, array('class' => 'form-control', '')) }}
</div>



	{{ Form::submit('Editar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}