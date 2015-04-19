<html lang="pt-br"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Filipe Valentin Costa">

<title>KalanGO! - Login</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/loginCSS.css" rel="stylesheet">

<!-- Mensagem de erro, caso o login falhe -->
@if (isset($mensagem))
    <script>alert("{{$mensagem}}");</script>
@endif

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="">
                <div class="account-wall center-block">
                    <div id="my-tab-content" class="tab-content">
                        
                        <div class="tab-pane active" id="login">
                            <h3 style="text-align: center;">KalanGO!</h3>
                            <hr>
                            <img class="profile-img" src="img/KalangoVerde.png" alt="">
                            
                            <!-- LOGIN -->
                            <!-- Pode colocar #Id's nos elementosque ainda não tem um para funcionar no seu código, se já tiver um id é melhor mudar o seu para não dar erro no form aqui-->
                            <form class="form-signin" action="" method="POST">
                                <input type="text" autocomplete="off" class="form-control usuarioObrigatorio" maxlength="50" placeholder="Usuário" name="usuario" >
                                <input type="password" class="form-control senhaObrigatoria" maxlength="12" placeholder="Senha" name="senha" >
                                <input type="submit" class="btn btn-lg btn-default btn-block btn-entrar" value="Entrar">
                            </form>

                            <!-- LOGIN -->
                            <div id="tabs" data-tabs="tabs">
                                <p class="text-center"><a href="#esqueci" data-toggle="tab">Esqueci a senha</a></p>
                            </div>

                        </div>

                        <div class="tab-pane" id="esqueci">
                            <h3 style="text-align: center;">KalanGO!</h3>
                            <hr>
                            <img class="profile-img" src="img/KalangoVerde.png" alt="">

                            <!-- Ativar conta -->

                            <form class="form-signin" action="{{ action('RemindersController@postRemind') }}" method="POST">
                                <input class="form-control emailObrigatorio" type="email" maxlength="50" autocomplete="off" name="email" onblur="fcn_validaEmail(this);" placeholder="E-mail" >
                                <input class="form-control btn-recuperaSenha" type="submit" value="Mandar e-mail de recuperação">

                            <!-- Ativar conta ### Nao terá mais isso !!-->

                                 <!-- Modal termos e Condições -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Termos e Condições</h4>
                                      </div>
                                      <div class="modal-body">
                                        <p>§ 1o Aceitação de Termos e Condições </p>
                                        <p>Este website é oferecido a você sob a condição de que sejam aceitos os Termos e Condições de Uso aqui apresentados. O uso deste website representa sua concordância com todos os termos, condições e notificações, que podem ser alterados ao longo do tempo.</p>                                        <p>§ 2o Propriedade Intelectual </p>
                                        <p>Este website, suas páginas, as telas que apresentem as páginas, as informações e os materiais nelas contidos e sua distribuição e composição, salvo se indicado de outra forma, são de propriedade do KalanGO!. Todos os direitos são protegidos por direitos autorais, marcas registradas e marcas de serviços, tratados internacionais e/ou outros direitos exclusivos e leis do Brasil e de outros países. Você concorda em observar todas as leis aplicáveis, assim como quaisquer notificações ou restrições adicionais contidas no website. </p>
                                        <p>§ 3o Uso Pessoal Este website é para seu uso pessoal e não para uso comercial. Salvo se expressamente permitido, você não poderá modificar, copiar, distribuir, transmitir, exibir, executar, reproduzir, publicar, licenciar, criar trabalhos derivados, transferir ou vender as informações, programas de computador (software), produtos ou serviços obtidos neste website.Todos os Cursos deverão ser utilizados pelo próprio aluno, e não podem ser cedidos a nenhuma outra pessoa. O uso da senha pessoal de acesso não deverá ser emprestada, cedida ou doada a nenhuma outra pessoa. </p>
                                        </p>§ 4o Uso Ilegal Ou ProibidoComo condição para o uso deste website, você garante ao KalanGO! e reconhece que o website ou o seu conteúdo não serão utilizados para nenhum propósito que seja ilegal ou proibido por esses Termos e Condições, notificações ou por qualquer legislação aplicável.</p>
                                      </div>
                                      <div class="modal-footer">
                                        <label class="checkbox"  for="check1">
                                            <input type="checkbox" name="checkboxes" id="check1" value="Li e Concordo">
                                                Li e Concordo
                                        </label>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                        <input id="reg" class="btn btn-default" type="submit" value="Registrar" disabled>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                            </form>
                                
                             <!-- Button trigger modal -->
                             {{-- <div class="form-signin">    
                                <button class="btn btn-lg btn-default btn-block" data-toggle="modal" data-target="#myModal">
                                  Mandar e-mail de recuperação
                                </button>
                             </div> --}}

                            <div id="tabs" data-tabs="tabs">
                                <p class="text-center"><a href="#login" data-toggle="tab">Já tem uma conta?</a></p>
                            </div>

                           
                        </div>
                     </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- jQuery Version 1.11.0 -->
<script src="plugins/JQuery/jQuery-2.1.3.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/bootstrap/js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
$( document ).ready(function() {
    $("#check1").on('click', function(event) {
        if ($('#check1').is(':checked')) {
            $('#reg').prop('disabled', false);
    }
    else{
        $('#reg').prop('disabled', true);
    }
    });
});
</script>

<script>
	
	$(".btn-entrar").click(function(event){
			
		if($(".usuarioObrigatorio").val() == ""){
			alert("É necessário preencher o Usuário!");
			$(".usuarioObrigatorio").focus();
			return false;
		} 
		
		if($(".senhaObrigatoria").val() == ""){
			alert("É necessário preencher a Senha!");
			$(".senhaObrigatoria").focus();
			return false;
		} 
		
	})
	
	$(".btn-recuperaSenha").click(function(event){
	
		if($(".emailObrigatorio").val() == ""){
			alert("É necessário preencher o E-mail!");
			$(".emailObrigatorio").focus();
			return false;
		} 
		
	})
	
	function fcn_validaEmail(pstr_email){
		if (pstr_email.value != '') {	
			er = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}/;
			if (!er.exec(pstr_email.value)) {
				alert("É necessário o preenchimento de um endereço de e-mail válido.");
				$(".emailObrigatorio").focus();
				return false;
			}
		}
	}
	
</script>

</body>
</html>