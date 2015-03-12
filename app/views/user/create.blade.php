<h1>Usuarios</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'usuarios')) }}

	<div class="form-group">
{{ Form::label('nome', 'Nome') }}
{{ Form::text('nome', Input::old('nome'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('sobrenome', 'Sobrenome') }}
{{ Form::text('sobrenome', Input::old('sobrenome'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('username', 'Username') }}
{{ Form::text('username', Input::old('username'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('password', 'Password') }}
{{ Form::text('password', Input::old('password'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('email', 'Email') }}
{{ Form::text('email', Input::old('email'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('respostaSecreta', 'RespostaSecreta') }}
{{ Form::text('respostaSecreta', Input::old('respostaSecreta'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('urlImagem', 'UrlImagem') }}
{{ Form::text('urlImagem', Input::old('urlImagem'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('remember_token', 'Remember Token') }}
{{ Form::text('remember_token', Input::old('remember_token'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('tipo', 'Tipo') }}
{{ Form::text('tipo', Input::old('tipo'), array('class' => 'form-control', '')) }}
</div>



	{{ Form::submit('Cadastrar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}