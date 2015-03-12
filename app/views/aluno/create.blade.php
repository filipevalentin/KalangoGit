<h1>Alunos</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'alunos')) }}

	<div class="form-group">
{{ Form::label('matricula', 'Matricula') }}
{{ Form::text('matricula', Input::old('matricula'), array('class' => 'form-control', '')) }}
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
{{ Form::label('dataNascimento', 'DataNascimento') }}
{{ Form::text('dataNascimento', Input::old('dataNascimento'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('dataVencimentoBoleto', 'DataVencimentoBoleto') }}
{{ Form::text('dataVencimentoBoleto', Input::old('dataVencimentoBoleto'), array('class' => 'form-control', '')) }}
</div>



	{{ Form::submit('Cadastrar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}