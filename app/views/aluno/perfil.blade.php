@extends('master')

@section('maincontent')
    <section class="content-header">
        <h1>
            Bem vindo ao KalanGO!
            <small>Meus Cursos</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Meus Cursos</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content" id="profile">
        
        <div class="row">
            
            <div class="">
                <div id="user-profile-2" class="user-profile"> 
                    <div class="tabbable">                  
                        <ul class="nav nav-tabs padding-18">    <!-- Abas - Menu -->
                            <li class="active">
                                <a data-toggle="tab" href="#home">
                                    <i class="green ace-icon fa fa-user bigger-120"></i>
                                    Profile
                                </a>
                            </li>

                            <li class="">
                                <a data-toggle="tab" href="#editar">
                                    <i class="orange ace-icon fa fa-pencil bigger-120"></i>
                                    Editar
                                </a>
                            </li>

                        </ul>                                   <!-- Fim Abas - Menu -->

                        <div class="tab-content no-border padding-24 profile">
                            <div id="home" class="tab-pane active">     <!-- Aba "home" -->
                                <div class="row">
                                    <div class="col-xs-12 col-sm-3 center" style="text-align: center">  <!-- FotoPerfil+Botões -->
                                        <span class="profile-picture">
                                            <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" style="height: 200px;" src="/{{Auth::user()->urlImagem}}">
                                        </span>

                                        <div class="space space-4"></div></br>

                                        <a data-toggle="tab" href="#editar" class="btn btn-sm btn-block btn-success">
                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                            <span class="bigger-110">Editar Perfil</span>
                                        </a>

                                    </div>                                                              <!--Fim FotoPerfil+Botões  -->

                                    <div class="col-xs-12 col-sm-9">
                                        <h4 class="blue">
                                            <span class="middle">{{Auth::user()->nome}} {{" "}} {{Auth::user()->sobrenome}}</span>
                                        </h4> <!-- Fim Nome -->

                                        <div class="profile-user-info">     <!-- Conjunto de Info do Usuário -->

                                            <div class="profile-info-row">  <!-- Username -->
                                                <div class="profile-info-name">Nome</div>

                                                <div class="profile-info-value">
                                                    <span>{{Auth::user()->nome}}</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Sobrenome</div>

                                                <div class="profile-info-value">
                                                    <span>{{Auth::user()->sobrenome}}</span>
                                                </div>
                                            </div>
											
											<div class="profile-info-row">
                                                <div class="profile-info-name">Data de Nascimento</div>

                                                <div class="profile-info-value">
                                                    <span>{{Aluno::find(Auth::user()->id)->dataNascimento}}</span>
                                                </div>
                                            </div>
											
                                            <div class="profile-info-row">
                                                <div class="profile-info-name">E-mail</div>

                                                <div class="profile-info-value">
                                                    <span>{{Auth::user()->email}}</span>
                                                </div>
                                            </div>
											
											<div class="profile-info-row">
                                                <div class="profile-info-name">Dia Venc. Boleto</div>

                                                <div class="profile-info-value">
                                                    <span>{{Aluno::find(Auth::user()->id)->dataVencimentoBoleto}}</span>
                                                </div>
                                            </div>
											
											<div class="profile-info-row">
                                                <div class="profile-info-name">Matrícula</div>

                                                <div class="profile-info-value">
                                                    <span>{{Aluno::find(Auth::user()->id)->matricula}}</span>
                                                </div>
                                            </div>

                                            

                                        </div>                              <!-- Fim Conjunto de Info do Usuário -->

                                        <div class="hr hr-8 dotted"></div> </br>

                                    </div><!-- /.col -->
                                </div><!-- /.row -->

                                </br>

                                <div class="row">                                       
                                    <div class="col-xs-12 col-sm-6">        <!-- Texto do Usuário -->
                                        <div class="widget-box transparent">
                                            <div class="widget-header widget-header-small">
                                                <h4 class="widget-title smaller">
                                                    <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                    Sobre Mim
                                                </h4>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main">
                                                    <p>{{Aluno::find(Auth::user()->id)->sobreMim}}</p>
                                                </div>
                                            </div>

                                            <div class="info-box bg-green">
                                                <span class="info-box-icon" style="font-size: -webkit-xxx-large;float: left;padding: 10px 20px 10px 20px;height: 100%;"><i class="fa fa-thumbs-o-up"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Likes</span>
                                                    <span class="info-box-number" style="display: block;">41,410</span>
                                                    <div class="progress" style="height: 5px;background: rgb(0, 134, 73);">
                                                        <div class="progress-bar" style="width: 70%;background-color: white;">
                                                        </div>
                                                    </div>
                                                    <span class="progress-description">
                                                        70% Increase in 30 Days
                                                    </span>
                                                </div><!-- /.info-box-content -->
                                            </div>

                                        </div>
                                    </div>                                  <!-- Fim Texto do Usuário -->

                                    <div class="col-xs-12 col-sm-6">        <!-- Habilidades -->
                                        <div class="widget-box transparent">
                                            <div class="widget-header widget-header-small header-color-blue2">
                                                <h4 class="widget-title smaller">
                                                    <i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
                                                    Habilidades
                                                </h4>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main padding-16">
                                                    <div class="clearfix">
                                                        <div class="grid3 center">
                                                            <div style="display: inline; width: 90px; height: 90px;"><input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgcolor="#3c8dbc" data-readonly="true" readonly="readonly" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 18px; line-height: normal; font-family: Arial; text-align: center; color: rgb(60, 141, 188); padding: 0px; -webkit-appearance: none; background: none;"></div>
                                                            <div class="knob-label">Respostas Corretas</div>
                                                        </div>

                                                        <div class="grid3 center">
                                                            <div style="display: inline; width: 90px; height: 90px;"><input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgcolor="#3c8dbc" data-readonly="true" readonly="readonly" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 18px; line-height: normal; font-family: Arial; text-align: center; color: rgb(60, 141, 188); padding: 0px; -webkit-appearance: none; background: none;"></div>
                                                            <div class="knob-label">Respostas Erradas</div>
                                                        </div>

                                                        <div class="grid3 center">
                                                            <div style="display: inline; width: 90px; height: 90px;"><input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgcolor="#3c8dbc" data-readonly="true" readonly="readonly" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 18px; line-height: normal; font-family: Arial; text-align: center; color: rgb(60, 141, 188); padding: 0px; -webkit-appearance: none; background: none;"></div>
                                                            <div class="knob-label">Atividades Extras</div>
                                                        </div>
                                                    </div>

                                                    <div class="hr hr-16"></div>

                                                    <div class="profile-skills">
                                                        <div class="progress">
                                                            <div class="progress-bar" style="width:80%">
                                                                <span class="pull-left">HTML5 &amp; CSS3</span>
                                                                <span class="pull-right">80%</span>
                                                            </div>
                                                        </div>

                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-success" style="width:72%">
                                                                <span class="pull-left">Javascript &amp; jQuery</span>

                                                                <span class="pull-right">72%</span>
                                                            </div>
                                                        </div>

                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-purple" style="width:70%">
                                                                <span class="pull-left">PHP &amp; MySQL</span>

                                                                <span class="pull-right">70%</span>
                                                            </div>
                                                        </div>

                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-warning" style="width:50%">
                                                                <span class="pull-left">Wordpress</span>

                                                                <span class="pull-right">50%</span>
                                                            </div>
                                                        </div>

                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-danger" style="width:38%">
                                                                <span class="pull-left">Photoshop</span>

                                                                <span class="pull-right">38%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                  <!-- Fim Habilidades -->
                                </div>
                            </div><!-- /#home -->
                            
                            <div id="editar" class="tab-pane"> <!-- Aba "editar" -->
                                <div id="edit-basic" class="tab-pane active">
                                    {{ Form::open(array('url'=>'/aluno/atualizaCadastro', 'files'=>true)) }}
                                        <h4 class="header">Perfil</h4>
                                        <hr>
                                        <div class="box box-primary">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-3 center" style="text-align: center; padding: 30px 0 0 30px;">  <!-- FotoPerfil+Botões -->
                                                    <span class="profile-picture">
                                                        <img class="editable img-responsive" style="height: 200px;" alt="Alex's Avatar" id="avatar2" style="height: 200px;" {{'src="'.Aluno::find(Auth::user()->id)->urlImagem.'"'}}>
                                                    </span>

                                                    <div class="space space-4"></div><br>

                                                    <a href="" class="btn btn-sm btn-block btn-success">
                                                        {{ Form::file('urlImagem') }}             
                                                    </a>

                                                </div>

                                                <div class="col-sm-9 col-xs-12">
                                                    <input type="text" name="id" class="form-control" style="display:none;" value={{Auth::user()->id}}>
                                                    <div id="div_nome" class="form-group margin">
                                                        <label class="control-label" for="nome"><i id="icone_nome" class="fa"></i></label> <b>Nome</b>
                                                        <input type="text" autocomplete="off" name="nome" id="nome" onblur="fcn_recarregaCores();" maxlength="50" class="form-control somenteLetras nomeObrigatorio" value={{Auth::user()->nome}}>
                                                    </div>
                                                    <div id="div_sobrenome" class="form-group margin">
                                                        <label class="control-label" for="sobrenome"><i id="icone_sobrenome" class="fa"></i></label> <b>Sobrenome</b>
                                                        <input type="text" autocomplete="off" name="sobrenome" id="sobrenome" class="form-control somenteLetras sobrenomeObrigatorio" onblur="fcn_recarregaCores();" maxlength="50" value={{Auth::user()->sobrenome}}>
                                                    </div>
                                                    <div id="div_dataNascimento" class="form-group margin">
                                                        <label class="control-label" for="dataNascimento"><i id="icone_dataNascimento" class="fa"></i></label> <b>Data de nascimento</b>
                                                        <input type="text" autocomplete="off" name="dataNascimento" id="dataNascimento" onblur="fcn_recarregaCores();fcn_validaDtNascimento(this)" class="form-control validaData dataNascimentoObrigatorio" value={{Aluno::find(Auth::user()->id)->dataNascimento}}>
                                                    </div>
                                                    <div id="div_email" class="form-group margin">
                                                        <label class="control-label" for="email"><i id="icone_email" class="fa"></i></label> <b>E-mail</b>
                                                        <input type="text" autocomplete="off" name="email" id="email" maxlength="50" class="form-control emailObrigatorio" onblur="fcn_recarregaCores();fcn_validaEmail(this);" value={{Auth::user()->email}}>
                                                    </div>
													<div id="div_sobreMim" class="form-group margin">
                                                        <label class="control-label" for="sobreMim"><i id="icone_sobreMim" class="fa"></i></label> <b>Sobre mim</b>
                                                        <textarea id="sobreMim" name="sobreMim" id="sobreMim" maxlength="8000" onblur="fcn_recarregaCores();" class="form-control sobreMimObrigatorio" rows="3">{{'value="'.Aluno::find(Auth::user()->id)->sobreMim.'"'}}</textarea>
                                                    </div>
                                                    <div class="margin" style="padding-bottom:10px;">
                                                        <button type="submit" class="btn btn-primary btn-block btn-salvar-dados">Salvar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {{Form::close()}}
                                    
                                    <form action="atualizaSenha" method="POST" role="form">
                                        <input type="text" name="id" class="form-control" style="display:none;" value={{Auth::user()->id}}>
                                        <h4 class="header">Acesso</h4>
                                        <hr>
                                        <div class="box box-primary">
                                            <div class="row">
                                            <div class="col-sm-3">
                                                <div class="callout callout-info">
                                                    <h4>Segurança da Senha</h4>
                                                    <p>A senha deve conter:</p>
                                                    <p> Mínimo de 6 caracteres</p>
													<p> Máximo de 12 caracteres</p>
                                                    <p> Ao menos 1 número ou caractere especial</p>
                                                </div>
                                            </div>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <div id="div_senhaAtual" class="form-group margin">
                                                        <label class="control-label" for="inputSuccess"><i id="icone_senhaAtual" class="fa"></i></label> <b>Senha Atual</b>
                                                        <input type="password" maxlength="12" class="form-control senhaAtualObrigatoria" name="senhaAtual" id="senhaAtual" onblur="fcn_recarregaCoresSenha();fcn_validaSenhaAtual(6, 12, this.value);" >
                                                    </div>
                                                    <div id="div_novaSenha" class="form-group margin">
                                                        <label class="control-label" for="inputSuccess"><i id="icone_novaSenha" class="fa"></i></label> <b>Nova Senha</b>
                                                        <input type="password" maxlength="12" class="form-control novaSenhaObrigatoria" name="senha" id="senha" onblur="fcn_recarregaCoresSenha();fcn_validaNovaSenha(6, 12, this.value);" >
                                                    </div>
                                                    <div id="div_confirmarNovaSenha" class="form-group margin">
                                                        <label class="control-label" for="inputSuccess"><i id="icone_confirmarNovaSenha" class="fa"></i></label> <b>Confirmar Nova Senha</b>
                                                        <input type="password" maxlength="12" class="form-control confirmaNovaSenhaObrigatoria" name="novaSenha" id="novaSenha" onblur="fcn_recarregaCoresSenha();fcn_validaConfirmaNovaSenha(6, 12, this.value);" >
                                                    </div>
                                                    <div class="margin" style="padding-bottom:10px;">
                                                        <button type="submit" class="btn btn-primary btn-block btn-alterar-senha">Alterar Senha</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </form>
                                </div>  
                            </div> <!-- /#editar -->

                        </div>
                    </div>
                </div>
            </div>
                  
        </div>

    </section><!-- /.content -->
@endsection

@section('scripts')
	
	<script src="../../js/jquery.maskedinput.min.js"></script>
	<script> //Validações
		$( ".somenteLetras" ).keyup(function() {
			//Não ativa função ao clicar tecla direção esquerda e direito, botão apagar e botão deletar
			if(event.keyCode != 37 && event.keyCode != 39 && event.keyCode != 46 && event.keyCode != 8){
				var valor = $(this).val().replace(/[^a-zA-ZãÃáÁàÀâÂéÉèÈêÊíÍìÌîÎõÕóÓòÒôÔúÚùÙûÛÇç ]+/g,'');
				$(this).val(valor);
			}
		});
		
		$( ".somenteNumeros" ).keyup(function() {
			//Não ativa função ao clicar tecla direção esquerda e direito, botão apagar e botão deletar
			if(event.keyCode != 37 && event.keyCode != 39 && event.keyCode != 46 && event.keyCode != 8){
				var valor = $(this).val().replace(/[^0-9]+/g,'');
				$(this).val(valor);
			}
		});
		
		$(".validaData").mask("99/99/9999");
		
		$(".btn-salvar-dados").click(function(event){
			
			var obrigatorioPendente = 0;
			
			if($(".nomeObrigatorio").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_nome" ).removeClass("has-success");
				$( "#icone_nome" ).removeClass("fa-check");
				$( "#div_nome" ).addClass("has-error");
				$( "#icone_nome" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_nome" ).removeClass("has-error");
				$( "#icone_nome" ).removeClass("fa-times-circle-o");
				$( "#div_nome" ).addClass("has-success");
				$( "#icone_nome" ).addClass("fa-check");
			}
			
			if($(".sobrenomeObrigatorio").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_sobrenome" ).removeClass("has-success");
				$( "#icone_sobrenome" ).removeClass("fa-check");
				$( "#div_sobrenome" ).addClass("has-error");
				$( "#icone_sobrenome" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_sobrenome" ).removeClass("has-error");
				$( "#icone_sobrenome" ).removeClass("fa-times-circle-o");
				$( "#div_sobrenome" ).addClass("has-success");
				$( "#icone_sobrenome" ).addClass("fa-check");
			}
			
			if($(".emailObrigatorio").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_email" ).removeClass("has-success");
				$( "#icone_email" ).removeClass("fa-check");
				$( "#div_email" ).addClass("has-error");
				$( "#icone_email" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_email" ).removeClass("has-error");
				$( "#icone_email" ).removeClass("fa-times-circle-o");
				$( "#div_email" ).addClass("has-success");
				$( "#icone_email" ).addClass("fa-check");
			}
			
			if($(".dataNascimentoObrigatorio").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_dataNascimento" ).removeClass("has-success");
				$( "#icone_dataNascimento" ).removeClass("fa-check");
				$( "#div_dataNascimento" ).addClass("has-error");
				$( "#icone_dataNascimento" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_dataNascimento" ).removeClass("has-error");
				$( "#icone_dataNascimento" ).removeClass("fa-times-circle-o");
				$( "#div_dataNascimento" ).addClass("has-success");
				$( "#icone_dataNascimento" ).addClass("fa-check");
			}
			
			if($(".sobreMimObrigatorio").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_sobreMim" ).removeClass("has-success");
				$( "#icone_sobreMim" ).removeClass("fa-check");
				$( "#div_sobreMim" ).addClass("has-error");
				$( "#icone_sobreMim" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_sobreMim" ).removeClass("has-error");
				$( "#icone_sobreMim" ).removeClass("fa-times-circle-o");
				$( "#div_sobreMim" ).addClass("has-success");
				$( "#icone_sobreMim" ).addClass("fa-check");
			}
			
			if(obrigatorioPendente == 1){
				alert("É necessário preencher todos os campos obrigatórios!");
				return false;
			}
			
		})
		
		$(".btn-alterar-senha").click(function(event){
			
			var obrigatorioPendente = 0;
			
			if($(".senhaAtualObrigatoria").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_senhaAtual" ).removeClass("has-success");
				$( "#icone_senhaAtual" ).removeClass("fa-check");
				$( "#div_senhaAtual" ).addClass("has-error");
				$( "#icone_senhaAtual" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_senhaAtual" ).removeClass("has-error");
				$( "#icone_senhaAtual" ).removeClass("fa-times-circle-o");
				$( "#div_senhaAtual" ).addClass("has-success");
				$( "#icone_senhaAtual" ).addClass("fa-check");
			}
			
			if($(".novaSenhaObrigatoria").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_novaSenha" ).removeClass("has-success");
				$( "#icone_novaSenha" ).removeClass("fa-check");
				$( "#div_novaSenha" ).addClass("has-error");
				$( "#icone_novaSenha" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_novaSenha" ).removeClass("has-error");
				$( "#icone_novaSenha" ).removeClass("fa-times-circle-o");
				$( "#div_novaSenha" ).addClass("has-success");
				$( "#icone_novaSenha" ).addClass("fa-check");
			}
			
			if($(".confirmaNovaSenhaObrigatoria").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_confirmarNovaSenha" ).removeClass("has-success");
				$( "#icone_confirmarNovaSenha" ).removeClass("fa-check");
				$( "#div_confirmarNovaSenha" ).addClass("has-error");
				$( "#icone_confirmarNovaSenha" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_confirmarNovaSenha" ).removeClass("has-error");
				$( "#icone_confirmarNovaSenha" ).removeClass("fa-times-circle-o");
				$( "#div_confirmarNovaSenha" ).addClass("has-success");
				$( "#icone_confirmarNovaSenha" ).addClass("fa-check");
			}
			
			if(obrigatorioPendente == 1){
				alert("É necessário preencher todos os campos obrigatórios!");
				return false;
			}
			
			if(document.getElementById('senha').value != document.getElementById('novaSenha').value){
				
				$( "#div_novaSenha" ).removeClass("has-success");
				$( "#icone_novaSenha" ).removeClass("fa-check");
				$( "#div_novaSenha" ).addClass("has-error");
				$( "#icone_novaSenha" ).addClass("fa-times-circle-o");
				$( "#div_confirmarNovaSenha" ).removeClass("has-success");
				$( "#icone_confirmarNovaSenha" ).removeClass("fa-check");
				$( "#div_confirmarNovaSenha" ).addClass("has-error");
				$( "#icone_confirmarNovaSenha" ).addClass("fa-times-circle-o");
				
				alert("O campo Confirmar Nova Senha está diferente do campo Nova Senha!");
				return false;
			}
			
		})
		
		function fcn_recarregaCores(){
			
			if($(".nomeObrigatorio").val() == ""){
				$( "#div_nome" ).removeClass("has-success");
				$( "#icone_nome" ).removeClass("fa-check");
				$( "#div_nome" ).addClass("has-error");
				$( "#icone_nome" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_nome" ).removeClass("has-error");
				$( "#icone_nome" ).removeClass("fa-times-circle-o");
				$( "#div_nome" ).addClass("has-success");
				$( "#icone_nome" ).addClass("fa-check");
			}
			
			if($(".sobrenomeObrigatorio").val() == ""){
				$( "#div_sobrenome" ).removeClass("has-success");
				$( "#icone_sobrenome" ).removeClass("fa-check");
				$( "#div_sobrenome" ).addClass("has-error");
				$( "#icone_sobrenome" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_sobrenome" ).removeClass("has-error");
				$( "#icone_sobrenome" ).removeClass("fa-times-circle-o");
				$( "#div_sobrenome" ).addClass("has-success");
				$( "#icone_sobrenome" ).addClass("fa-check");
			}
			
			if($(".emailObrigatorio").val() == ""){
				$( "#div_email" ).removeClass("has-success");
				$( "#icone_email" ).removeClass("fa-check");
				$( "#div_email" ).addClass("has-error");
				$( "#icone_email" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_email" ).removeClass("has-error");
				$( "#icone_email" ).removeClass("fa-times-circle-o");
				$( "#div_email" ).addClass("has-success");
				$( "#icone_email" ).addClass("fa-check");
			}
			
			if($(".dataNascimentoObrigatorio").val() == ""){
				$( "#div_dataNascimento" ).removeClass("has-success");
				$( "#icone_dataNascimento" ).removeClass("fa-check");
				$( "#div_dataNascimento" ).addClass("has-error");
				$( "#icone_dataNascimento" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_dataNascimento" ).removeClass("has-error");
				$( "#icone_dataNascimento" ).removeClass("fa-times-circle-o");
				$( "#div_dataNascimento" ).addClass("has-success");
				$( "#icone_dataNascimento" ).addClass("fa-check");
			}
			
			if($(".sobreMimObrigatorio").val() == ""){
				$( "#div_sobreMim" ).removeClass("has-success");
				$( "#icone_sobreMim" ).removeClass("fa-check");
				$( "#div_sobreMim" ).addClass("has-error");
				$( "#icone_sobreMim" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_sobreMim" ).removeClass("has-error");
				$( "#icone_sobreMim" ).removeClass("fa-times-circle-o");
				$( "#div_sobreMim" ).addClass("has-success");
				$( "#icone_sobreMim" ).addClass("fa-check");
			}
						
		}
		
		function fcn_recarregaCoresSenha(){
			
			if($(".senhaAtualObrigatoria").val() == ""){
				$( "#div_senhaAtual" ).removeClass("has-success");
				$( "#icone_senhaAtual" ).removeClass("fa-check");
				$( "#div_senhaAtual" ).addClass("has-error");
				$( "#icone_senhaAtual" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_senhaAtual" ).removeClass("has-error");
				$( "#icone_senhaAtual" ).removeClass("fa-times-circle-o");
				$( "#div_senhaAtual" ).addClass("has-success");
				$( "#icone_senhaAtual" ).addClass("fa-check");
			}
			
			if($(".novaSenhaObrigatoria").val() == ""){
				$( "#div_novaSenha" ).removeClass("has-success");
				$( "#icone_novaSenha" ).removeClass("fa-check");
				$( "#div_novaSenha" ).addClass("has-error");
				$( "#icone_novaSenha" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_novaSenha" ).removeClass("has-error");
				$( "#icone_novaSenha" ).removeClass("fa-times-circle-o");
				$( "#div_novaSenha" ).addClass("has-success");
				$( "#icone_novaSenha" ).addClass("fa-check");
			}
			
			if($(".confirmaNovaSenhaObrigatoria").val() == ""){
				$( "#div_confirmarNovaSenha" ).removeClass("has-success");
				$( "#icone_confirmarNovaSenha" ).removeClass("fa-check");
				$( "#div_confirmarNovaSenha" ).addClass("has-error");
				$( "#icone_confirmarNovaSenha" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_confirmarNovaSenha" ).removeClass("has-error");
				$( "#icone_confirmarNovaSenha" ).removeClass("fa-times-circle-o");
				$( "#div_confirmarNovaSenha" ).addClass("has-success");
				$( "#icone_confirmarNovaSenha" ).addClass("fa-check");
			}
						
		}
		
		function fcn_validaDtNascimento(element) 
		{
			if(element.value != "" && element.value != "__/__/____"){
				regex = /^((((0?[1-9]|1\d|2[0-8])\/(0?[1-9]|1[0-2]))|((29|30)\/(0?[13456789]|1[0-2]))|(31\/(0?[13578]|1[02])))\/((19|20)?\d\d))$|((29\/0?2\/)((19|20)?(0[48]|[2468][048]|[13579][26])|(20)?00))$/;
				
				resultado = regex.exec(element.value);
				if(!resultado)
				{
					
					$( "#div_dataNascimento" ).removeClass("has-success");
					$( "#icone_dataNascimento" ).removeClass("fa-check");
					$( "#div_dataNascimento" ).addClass("has-error");
					$( "#icone_dataNascimento" ).addClass("fa-times-circle-o");
					
					document.getElementById('dataNascimento').focus();
					alert("Data de Nascimento inválida!");
					return false;
				}
				
				var data = element.value;
				var objDate = new Date();
				objDate.setYear(data.split("/")[2]);
				objDate.setMonth(data.split("/")[1]  - 1);//- 1 pq em js é de 0 a 11 os meses
				objDate.setDate(data.split("/")[0]);

				if(objDate.getTime() > new Date().getTime()){
					
					$( "#div_dataNascimento" ).removeClass("has-success");
					$( "#icone_dataNascimento" ).removeClass("fa-check");
					$( "#div_dataNascimento" ).addClass("has-error");
					$( "#icone_dataNascimento" ).addClass("fa-times-circle-o");
					
					document.getElementById('dataNascimento').focus();
					alert("A data de nascimento deve ser menor ou igual à data atual.");
					return false;
				}
				
			}
		}
		
		function fcn_validaEmail(pstr_email){
			if (pstr_email.value != '') {	
				er = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}/;
				if (!er.exec(pstr_email.value)) {
					
					$( "#div_email" ).removeClass("has-success");
					$( "#icone_email" ).removeClass("fa-check");
					$( "#div_email" ).addClass("has-error");
					$( "#icone_email" ).addClass("fa-times-circle-o");
					
					pstr_email.focus();
					alert("É necessário o preenchimento de um endereço de e-mail válido.");
					return false;
				}
			}
		};
		
		function fcn_validaSenhaAtual(minimo, maximo, pstr_valor){
			
			var senha = document.getElementById('senhaAtual').value;
			var str = pstr_valor;
			
			if(senha != ""){
			
				if (senha.length > maximo) {
					document.getElementById('senhaAtual').value = senha.substring(0, maximo);
				} else {
					
					if(senha.length < minimo){
						
						$( "#div_senhaAtual" ).removeClass("has-success");
						$( "#icone_senhaAtual" ).removeClass("fa-check");
						$( "#div_senhaAtual" ).addClass("has-error");
						$( "#icone_senhaAtual" ).addClass("fa-times-circle-o");
						
						alert("A senha deve ter entre 6 e 12 caracteres.");
						document.getElementById('senhaAtual').focus();
						return false;
					}
					
				}
				
				//Caracteres especiais
				if (!(
						str.indexOf('"') > 0 || str.indexOf('!') > 0 || str.indexOf('@') > 0 || str.indexOf('#') > 0 || str.indexOf('$') > 0 || 
						str.indexOf('%') > 0 || str.indexOf('¨') > 0 || str.indexOf('&') > 0 || str.indexOf('*') > 0 ||	str.indexOf('(') > 0 || 
						str.indexOf(')') > 0 || str.indexOf('-') > 0 ||	str.indexOf('_') > 0 || str.indexOf('=') > 0 || str.indexOf('+') > 0 || 
						str.indexOf('¹') > 0 || str.indexOf('²') > 0 || str.indexOf('³') > 0 || str.indexOf('£') > 0 || str.indexOf('¢') > 0 || 
						str.indexOf('¬') > 0 || str.indexOf(',') > 0 || str.indexOf('.') > 0 || str.indexOf(';') > 0 || str.indexOf('/') > 0 || 
						str.indexOf('<') > 0 || str.indexOf('>') > 0 || str.indexOf(':') > 0 || str.indexOf('?') > 0 || str.indexOf('~') > 0 || 
						str.indexOf('^') > 0 || str.indexOf(']') > 0 || str.indexOf('}') > 0 || str.indexOf('{') > 0 || str.indexOf('[') > 0 || 
						str.indexOf('º') > 0 || str.indexOf('ª') > 0 || str.indexOf('§') > 0 || str.indexOf('*') > 0 || str.indexOf('°') > 0
					)) {
					
					$( "#div_senhaAtual" ).removeClass("has-success");
					$( "#icone_senhaAtual" ).removeClass("fa-check");
					$( "#div_senhaAtual" ).addClass("has-error");
					$( "#icone_senhaAtual" ).addClass("fa-times-circle-o");
					
					alert("A senha deve ter pelo menos 1 caracter especial.");
					document.getElementById('senhaAtual').focus();
					return false;
				}
				
			}
			
		}
		
		function fcn_validaNovaSenha(minimo, maximo, pstr_valor){
			
			var senha = document.getElementById('senha').value;
			var str = pstr_valor;
			
			if(senha != ""){
			
				if (senha.length > maximo) {
					document.getElementById('senha').value = senha.substring(0, maximo);
				} else {
					
					if(senha.length < minimo){
						
						$( "#div_novaSenha" ).removeClass("has-success");
						$( "#icone_novaSenha" ).removeClass("fa-check");
						$( "#div_novaSenha" ).addClass("has-error");
						$( "#icone_novaSenha" ).addClass("fa-times-circle-o");
						
						alert("A senha deve ter entre 6 e 12 caracteres.");
						document.getElementById('senha').focus();
						return false;
					}
					
				}
				
				//Caracteres especiais
				if (!(
						str.indexOf('"') > 0 || str.indexOf('!') > 0 || str.indexOf('@') > 0 || str.indexOf('#') > 0 || str.indexOf('$') > 0 || 
						str.indexOf('%') > 0 || str.indexOf('¨') > 0 || str.indexOf('&') > 0 || str.indexOf('*') > 0 ||	str.indexOf('(') > 0 || 
						str.indexOf(')') > 0 || str.indexOf('-') > 0 ||	str.indexOf('_') > 0 || str.indexOf('=') > 0 || str.indexOf('+') > 0 || 
						str.indexOf('¹') > 0 || str.indexOf('²') > 0 || str.indexOf('³') > 0 || str.indexOf('£') > 0 || str.indexOf('¢') > 0 || 
						str.indexOf('¬') > 0 || str.indexOf(',') > 0 || str.indexOf('.') > 0 || str.indexOf(';') > 0 || str.indexOf('/') > 0 || 
						str.indexOf('<') > 0 || str.indexOf('>') > 0 || str.indexOf(':') > 0 || str.indexOf('?') > 0 || str.indexOf('~') > 0 || 
						str.indexOf('^') > 0 || str.indexOf(']') > 0 || str.indexOf('}') > 0 || str.indexOf('{') > 0 || str.indexOf('[') > 0 || 
						str.indexOf('º') > 0 || str.indexOf('ª') > 0 || str.indexOf('§') > 0 || str.indexOf('*') > 0 || str.indexOf('°') > 0
					)) {
					
					$( "#div_novaSenha" ).removeClass("has-success");
					$( "#icone_novaSenha" ).removeClass("fa-check");
					$( "#div_novaSenha" ).addClass("has-error");
					$( "#icone_novaSenha" ).addClass("fa-times-circle-o");
					
					alert("A senha deve ter pelo menos 1 caracter especial.");
					document.getElementById('senha').focus();
					return false;
				}
				
			}
			
		}
		
		function fcn_validaConfirmaNovaSenha(minimo, maximo, pstr_valor){
			
			var senha = document.getElementById('novaSenha').value;
			var str = pstr_valor;
			
			if(senha != ""){
			
				if (senha.length > maximo) {
					document.getElementById('novaSenha').value = senha.substring(0, maximo);
				} else {
					
					if(senha.length < minimo){
						
						$( "#div_confirmarNovaSenha" ).removeClass("has-success");
						$( "#icone_confirmarNovaSenha" ).removeClass("fa-check");
						$( "#div_confirmarNovaSenha" ).addClass("has-error");
						$( "#icone_confirmarNovaSenha" ).addClass("fa-times-circle-o");
						
						alert("A senha deve ter entre 6 e 12 caracteres.");
						document.getElementById('novaSenha').focus();
						return false;
					}
					
				}
				
				//Caracteres especiais
				if (!(
						str.indexOf('"') > 0 || str.indexOf('!') > 0 || str.indexOf('@') > 0 || str.indexOf('#') > 0 || str.indexOf('$') > 0 || 
						str.indexOf('%') > 0 || str.indexOf('¨') > 0 || str.indexOf('&') > 0 || str.indexOf('*') > 0 ||	str.indexOf('(') > 0 || 
						str.indexOf(')') > 0 || str.indexOf('-') > 0 ||	str.indexOf('_') > 0 || str.indexOf('=') > 0 || str.indexOf('+') > 0 || 
						str.indexOf('¹') > 0 || str.indexOf('²') > 0 || str.indexOf('³') > 0 || str.indexOf('£') > 0 || str.indexOf('¢') > 0 || 
						str.indexOf('¬') > 0 || str.indexOf(',') > 0 || str.indexOf('.') > 0 || str.indexOf(';') > 0 || str.indexOf('/') > 0 || 
						str.indexOf('<') > 0 || str.indexOf('>') > 0 || str.indexOf(':') > 0 || str.indexOf('?') > 0 || str.indexOf('~') > 0 || 
						str.indexOf('^') > 0 || str.indexOf(']') > 0 || str.indexOf('}') > 0 || str.indexOf('{') > 0 || str.indexOf('[') > 0 || 
						str.indexOf('º') > 0 || str.indexOf('ª') > 0 || str.indexOf('§') > 0 || str.indexOf('*') > 0 || str.indexOf('°') > 0
					)) {
					
					$( "#div_confirmarNovaSenha" ).removeClass("has-success");
					$( "#icone_confirmarNovaSenha" ).removeClass("fa-check");
					$( "#div_confirmarNovaSenha" ).addClass("has-error");
					$( "#icone_confirmarNovaSenha" ).addClass("fa-times-circle-o");
					
					alert("A senha deve ter pelo menos 1 caracter especial.");
					document.getElementById('novaSenha').focus();
					return false;
				}
				
			}
			
		}
		 
	</script>
	
@endsection