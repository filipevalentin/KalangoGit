<h1>{{ $usuarios->name }}</h1>

<div class="jumbotron text-center">
	<h2>{{ $usuarios->name }}</h2>
	<p>
		<strong>Nome:</strong> {{ $usuarios->nome }}<br>
<strong>Sobrenome:</strong> {{ $usuarios->sobrenome }}<br>
<strong>Username:</strong> {{ $usuarios->username }}<br>
<strong>Password:</strong> {{ $usuarios->password }}<br>
<strong>Email:</strong> {{ $usuarios->email }}<br>
<strong>RespostaSecreta:</strong> {{ $usuarios->respostaSecreta }}<br>
<strong>UrlImagem:</strong> {{ $usuarios->urlImagem }}<br>
<strong>Remember Token:</strong> {{ $usuarios->remember_token }}<br>
<strong>Tipo:</strong> {{ $usuarios->tipo }}<br>

	</p>
</div>