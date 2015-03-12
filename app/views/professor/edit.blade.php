<h1>{{ $professores->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($professores, array('route' => array('professores.update', $professores->id), 'method' => 'PUT')) }}

	{{ Form::hidden('id', null, array('class' => 'form-control')) }}
<div class="form-group">
{{ Form::label('codRegistro', 'CodRegistro') }}
{{ Form::text('codRegistro', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('sobreMim', 'SobreMim') }}
{{ Form::text('sobreMim', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('urlImagem', 'UrlImagem') }}
{{ Form::text('urlImagem', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('formacaoAcademica', 'FormacaoAcademica') }}
{{ Form::text('formacaoAcademica', null, array('class' => 'form-control', '')) }}
</div>



	{{ Form::submit('Editar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}