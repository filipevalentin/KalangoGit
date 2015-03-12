<h1>{{ $alunos->name }}</h1>

<div class="jumbotron text-center">
	<h2>{{ $alunos->name }}</h2>
	<p>
		<strong>Matricula:</strong> {{ $alunos->matricula }}<br>
<strong>SobreMim:</strong> {{ $alunos->sobreMim }}<br>
<strong>UrlImagem:</strong> {{ $alunos->urlImagem }}<br>
<strong>DataNascimento:</strong> {{ $alunos->dataNascimento }}<br>
<strong>DataVencimentoBoleto:</strong> {{ $alunos->dataVencimentoBoleto }}<br>

	</p>
</div>