<h1>{{ $usuarios->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($usuarios, array('route' => array('usuarios.update', $usuarios->id), 'method' => 'PUT')) }}

	{{ Form::hidden('id', null, array('class' => 'form-control')) }}
<div class="form-group">
{{ Form::label('nome', 'Nome') }}
{{ Form::text('nome', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('sobrenome', 'Sobrenome') }}
{{ Form::text('sobrenome', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('username', 'Username') }}
{{ Form::text('username', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('password', 'Password') }}
{{ Form::text('password', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('email', 'Email') }}
{{ Form::text('email', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('respostaSecreta', 'RespostaSecreta') }}
{{ Form::text('respostaSecreta', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('urlImagem', 'UrlImagem') }}
{{ Form::text('urlImagem', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('remember_token', 'Remember Token') }}
{{ Form::text('remember_token', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('tipo', 'Tipo') }}
{{ Form::text('tipo', null, array('class' => 'form-control', '')) }}
</div>



	{{ Form::submit('Editar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}