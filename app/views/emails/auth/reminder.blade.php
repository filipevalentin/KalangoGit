<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Recuperar senha</h2>

		<div>
			Use este link para resetar sua senha: {{ URL::to('password/reset', array($token)) }}.<br/>
			Este link expirará em {{ Config::get('auth.reminder.expire', 60) }} minutos.
		</div>
	</body>
</html>
