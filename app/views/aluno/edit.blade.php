<h1>{{ $alunos->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($alunos, array('route' => array('alunos.update', $alunos->id), 'method' => 'PUT')) }}

	{{ Form::hidden('id', null, array('class' => 'form-control')) }}
<div class="form-group">
{{ Form::label('matricula', 'Matricula') }}
{{ Form::text('matricula', null, array('class' => 'form-control', '')) }}
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
{{ Form::label('dataNascimento', 'DataNascimento') }}
{{ Form::text('dataNascimento', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('dataVencimentoBoleto', 'DataVencimentoBoleto') }}
{{ Form::text('dataVencimentoBoleto', null, array('class' => 'form-control', '')) }}
</div>



	{{ Form::submit('Editar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}