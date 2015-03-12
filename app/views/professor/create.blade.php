<h1>Professores</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'professores')) }}

	<div class="form-group">
{{ Form::label('codRegistro', 'CodRegistro') }}
{{ Form::text('codRegistro', Input::old('codRegistro'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('sobreMim', 'SobreMim') }}
{{ Form::text('sobreMim', Input::old('sobreMim'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('urlImagem', 'UrlImagem') }}
{{ Form::text('urlImagem', Input::old('urlImagem'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('formacaoAcademica', 'FormacaoAcademica') }}
{{ Form::text('formacaoAcademica', Input::old('formacaoAcademica'), array('class' => 'form-control', '')) }}
</div>



	{{ Form::submit('Cadastrar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}