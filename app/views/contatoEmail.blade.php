<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
		<p>Contato Aluno:</p>
		<p>Nome: {{Auth::user()->nome}} {{Auth::user()->sobrenome}}</p>
		<p>Mensagem:</p>
		<p>{{$conteudo}}</p>
	</body>
</html>