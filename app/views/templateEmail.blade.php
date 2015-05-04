<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
		<h2>Bem vindo ao KalanGO!</h2>

		<p>Para habilitar seu acesso ao KalanGO! você precisa confirmar seu endereço de e-mail usando o link abaixo:</p>

		<p> <a href="{{ URL::to('registro/verificar/' . $confirmation_code) }}"></a> REGISTRAR</p>


		<div>Att</div>

		<p>Equipe KalanGO!</p>
	</body>
</html>