@extends('master-admin')

@section('maincontent')

<link rel="stylesheet" href="../../plugins/jQueryUI/calendario/jquery-ui.css">
<script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>

<script>
  $(function() {
    $( "#dataNascimento" ).datepicker({
		dateFormat: 'dd/mm/yy',
		dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
		dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
		dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
		monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
		monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
		nextText: 'Próximo',
		prevText: 'Anterior',
        changeMonth: true,
        changeYear: true
	});
  });
</script>

    <section class="content-header">
        <h1>
            Gerenciar Alunos
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Gerenciar Alunos</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content" id="profile">
        
        <div class="row">
            
            <div class="">
                <div id="user-profile-2" class="user-profile" style="margin: 0px 5px 0px 5px;"> 
                    <div class="tabbable">                  
                        <ul class="nav nav-tabs padding-18">    <!-- Abas - Menu -->
                            <li class="active">
                                <a data-toggle="tab" href="#home">
                                    <i class="green ace-icon fa fa-user bigger-120">&nbsp;</i>
                                    Perfil
                                </a>
                            </li>

                            <li class="">
                                <a data-toggle="tab" href="#editar">
                                    <i class="orange ace-icon fa fa-pencil bigger-120">&nbsp;</i>
                                    Editar
                                </a>
                            </li>

                        </ul>                                   <!-- Fim Abas - Menu -->

                        <div class="tab-content no-border padding-24 profile">
                            <div id="home" class="tab-pane active">     <!-- Aba "home" -->
                                <div class="row">
                                    <div class="col-xs-12 col-sm-3 center" style="text-align: center">  <!-- FotoPerfil+Botões -->
                                        <span class="profile-picture">
                                            @if($aluno->urlImagem != null)
                                                <img class="editable img-responsive" style="height: 200px;" alt="Alex's Avatar" id="avatar2" style="height: 200px;" src="/{{$aluno->urlImagem}}">
                                            @else
                                                 <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" style="max-height: 200px;" src="/images/default.png">
                                            @endif
                                        </span>

                                        <div class="space space-4"></div></br>

                                        <a data-toggle="tab" href="#editar" class="btn btn-sm btn-block btn-success">
                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                            <span class="bigger-110">Editar Perfil</span>
                                        </a>

                                    </div>                                                              <!--Fim FotoPerfil+Botões  -->

                                    <div class="col-xs-12 col-sm-9">
                                        <h4 class="blue">
                                            <span class="middle">{{$aluno->nome}} {{" "}} {{$aluno->sobrenome}}</span>
                                        </h4> <!-- Fim Nome -->

                                        <div class="profile-user-info">     <!-- Conjunto de Info do Usuário -->

                                            <div class="profile-info-row">  <!-- Username -->
                                                <div class="profile-info-name">Nome</div>

                                                <div class="profile-info-value">
                                                    <span>{{$aluno->nome}}</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Sobrenome</div>

                                                <div class="profile-info-value">
                                                    <span>{{$aluno->sobrenome}}</span>
                                                </div>
                                            </div>

											<div class="profile-info-row">
                                                <div class="profile-info-name">Data de Nascimento</div>

                                                <div class="profile-info-value">
                                                    <span>{{$aluno->dataNascimento}}</span>
                                                </div>
                                            </div>
											
                                            <div class="profile-info-row">
                                                <div class="profile-info-name">E-mail</div>

                                                <div class="profile-info-value">
                                                    <span>{{$aluno->email}}</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Dia Venc. Boleto</div>

                                                <div class="profile-info-value">
                                                    <span>{{$aluno->dataVencimentoBoleto}}</span>
                                                </div>
                                            </div>
											
											<div class="profile-info-row">
                                                <div class="profile-info-name">Matrícula</div>

                                                <div class="profile-info-value">
                                                    <span>{{$aluno->matricula}}</span>
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
                                                    <p>{{$aluno->sobreMim}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                  <!-- Fim Texto do Usuário -->
                                               <!-- Fim Habilidades -->
                                </div>
                            </div><!-- /#home -->
                            
                            <div id="editar" class="tab-pane"> <!-- Aba "editar" -->
                                <div id="edit-basic" class="tab-pane active">
                                    {{ Form::open(array('url'=>'/admin/atualizarAluno', 'files'=>true)) }}
                                        <h4 class="header">Perfil</h4>
                                        <hr>
                                        <div class="box box-primary">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-3 center" style="text-align: center; padding: 30px 0 0 30px;">  <!-- FotoPerfil+Botões -->
                                                    <span class="profile-picture">
                                                     @if($aluno->urlImagem != null)
                                                        <img class="editable img-responsive" style="height: 200px;" alt="Alex's Avatar" id="avatar2" style="height: 200px;" src="/{{$aluno->urlImagem}}">
                                                    @else
                                                         <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" style="max-height: 200px;" src="/images/default.png">
                                                    @endif
                                                        
                                                    </span>

                                                    <div class="space space-4"></div><br>

                                                    <a href="" class="btn btn-sm btn-block btn-success">
                                                        {{ Form::file('urlImagem') }}             
                                                    </a>

                                                </div>

                                                <div class="col-sm-9 col-xs-12">
                                                    <input type="text" name="id" class="form-control" style="display:none;" value={{$aluno->id}}>
                                                    <div id="div_nome" class="form-group margin">
                                                        <label class="control-label" for="nome"><i id="icone_nome" class="fa"></i> Nome</label>
                                                        <input type="text" autocomplete="off" name="nome" id="nome" onblur="fcn_recarregaCores();" maxlength="50" class="form-control somenteLetras nomeObrigatorio" value={{$aluno->nome}}>
                                                    </div>
                                                    <div id="div_sobrenome" class="form-group margin">
                                                        <label class="control-label" for="sobrenome"><i id="icone_sobrenome" class="fa"></i> Sobrenome</label>
                                                        <input type="text" autocomplete="off" name="sobrenome" id="sobrenome" onblur="fcn_recarregaCores();" maxlength="50" class="form-control somenteLetras sobrenomeObrigatorio" value={{$aluno->sobrenome}}>
                                                    </div>
                                                    <div id="div_dataNascimento" class="form-group margin">
                                                         <label class="control-label" for="dataNascimento"><i id="icone_dataNascimento" class="fa"></i> Data de Nascimento</label>
                                                        <input type="text" autocomplete="off" name="dataNascimento" id="dataNascimento" onblur="fcn_recarregaCores();" class="form-control validaData dataNascimentoObrigatorio" value={{$aluno->dataNascimento}}>
                                                    </div>
                                                    <div id="div_email" class="form-group margin">
                                                        <label class="control-label" for="email"><i id="icone_email" class="fa"></i> E-mail</label>
                                                        <input type="text" autocomplete="off" name="email" id="email" maxlength="50" class="form-control emailObrigatorio" onblur="fcn_recarregaCores();fcn_validaEmail(this);" value={{$aluno->email}}>
                                                    </div>
													<div id="div_diaVencimentoBoleto" class="form-group margin">
                                                        <label class="control-label" for="dataVencimentoBoleto"><i id="icone_diaVencimentoBoleto" class="fa"></i> Dia do Vencimento do Boleto</label>
														<select name="dataVencimentoBoleto" id="diaVencimentoBoleto" onblur="fcn_recarregaCores();" class="form-control diaVencimentoObrigatorio">
															<option value="" >Selecione</option>
															<option value="1" <?php if($aluno->dataVencimentoBoleto == '1') echo ' selected="selected"'?> >1</option>
															<option value="2" <?php if($aluno->dataVencimentoBoleto == '2') echo ' selected="selected"'?>>2</option>
															<option value="3" <?php if($aluno->dataVencimentoBoleto == '3') echo ' selected="selected"'?>>3</option>
															<option value="4" <?php if($aluno->dataVencimentoBoleto == '4') echo ' selected="selected"'?>>4</option>
															<option value="5" <?php if($aluno->dataVencimentoBoleto == '5') echo ' selected="selected"'?>>5</option>
															<option value="6" <?php if($aluno->dataVencimentoBoleto == '6') echo ' selected="selected"'?>>6</option>
															<option value="7" <?php if($aluno->dataVencimentoBoleto == '7') echo ' selected="selected"'?>>7</option>
															<option value="8" <?php if($aluno->dataVencimentoBoleto == '8') echo ' selected="selected"'?>>8</option>
															<option value="9" <?php if($aluno->dataVencimentoBoleto == '9') echo ' selected="selected"'?>>9</option>
															<option value="10" <?php if($aluno->dataVencimentoBoleto == '10') echo ' selected="selected"'?>>10</option>
															<option value="11" <?php if($aluno->dataVencimentoBoleto == '11') echo ' selected="selected"'?>>11</option>
															<option value="12" <?php if($aluno->dataVencimentoBoleto == '12') echo ' selected="selected"'?>>12</option>
															<option value="13" <?php if($aluno->dataVencimentoBoleto == '13') echo ' selected="selected"'?>>13</option>
															<option value="14" <?php if($aluno->dataVencimentoBoleto == '14') echo ' selected="selected"'?>>14</option>
															<option value="15" <?php if($aluno->dataVencimentoBoleto == '15') echo ' selected="selected"'?>>15</option>
															<option value="16" <?php if($aluno->dataVencimentoBoleto == '16') echo ' selected="selected"'?>>16</option>
															<option value="17" <?php if($aluno->dataVencimentoBoleto == '17') echo ' selected="selected"'?>>17</option>
															<option value="18" <?php if($aluno->dataVencimentoBoleto == '18') echo ' selected="selected"'?>>18</option>
															<option value="19" <?php if($aluno->dataVencimentoBoleto == '19') echo ' selected="selected"'?>>19</option>
															<option value="20" <?php if($aluno->dataVencimentoBoleto == '20') echo ' selected="selected"'?>>20</option>
															<option value="21" <?php if($aluno->dataVencimentoBoleto == '21') echo ' selected="selected"'?>>21</option>
															<option value="22" <?php if($aluno->dataVencimentoBoleto == '22') echo ' selected="selected"'?>>22</option>
															<option value="23" <?php if($aluno->dataVencimentoBoleto == '23') echo ' selected="selected"'?>>23</option>
															<option value="24" <?php if($aluno->dataVencimentoBoleto == '24') echo ' selected="selected"'?>>24</option>
															<option value="25" <?php if($aluno->dataVencimentoBoleto == '25') echo ' selected="selected"'?>>25</option>
															<option value="26" <?php if($aluno->dataVencimentoBoleto == '26') echo ' selected="selected"'?>>26</option>
															<option value="27" <?php if($aluno->dataVencimentoBoleto == '27') echo ' selected="selected"'?>>27</option>
															<option value="28" <?php if($aluno->dataVencimentoBoleto == '28') echo ' selected="selected"'?>>28</option>
														</select>
                                                    </div>
                                                    <div id="div_matricula" class="form-group margin">
                                                        <label class="control-label" for="matricula"><i id="icone_matricula" class="fa"></i> Matrícula</label>
                                                        <input type="text" autocomplete="off" name="matricula" id="matricula" maxlength="10" onblur="fcn_recarregaCores();" class="form-control somenteNumeros matriculaObrigatoria" value={{$aluno->matricula}}>
                                                    </div>
													<div class="form-group margin">
                                                        <label class="control-label" for="sobreMim">Sobre Mim</label>
                                                        <textarea id="sobreMim" name="sobreMim" maxlength="8000" onblur="fcn_recarregaCores();" class="form-control" rows="3">{{''.$aluno->sobreMim.''}}</textarea>
													</div>
                                                    <div class="margin" style="padding-bottom:10px;">
                                                        <button type="submit" class="btn btn-primary btn-block btn-salvar-dados">Salvar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {{Form::close()}}
                                    
                                    <form action="/admin/atualizaSenha" method="POST" role="form">
                                        <input type="text" name="id" class="form-control" style="display:none;" value={{$aluno->id}}>
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
                                                    <div id="div_novaSenha" class="form-group margin">
                                                        <label class="control-label" for="inputSuccess"><i id="icone_novaSenha" class="fa"></i><b> Nova Senha</b></label>
                                                        <input autocomplete="off" type="password" maxlength="12" class="form-control novaSenhaObrigatoria" name="senha" id="senha" onblur="fcn_recarregaCoresSenha();fcn_validaNovaSenha(6, 12, this.value);" >
                                                    </div>
                                                    <div id="div_confirmarNovaSenha" class="form-group margin">
                                                        <label class="control-label" for="inputSuccess"><i id="icone_confirmarNovaSenha" class="fa"></i><b> Confirmar Nova Senha</b></label>
                                                        <input autocomplete="off" type="password" maxlength="12" class="form-control confirmaNovaSenhaObrigatoria" name="novaSenha" id="novaSenha" onblur="fcn_recarregaCoresSenha();fcn_validaConfirmaNovaSenha(6, 12, this.value);" >
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
			
			fcn_validaDtNascimento($(".dataNascimentoObrigatorio").val());
			
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
			
			if($(".diaVencimentoObrigatorio").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_diaVencimentoBoleto" ).removeClass("has-success");
				$( "#icone_diaVencimentoBoleto" ).removeClass("fa-check");
				$( "#div_diaVencimentoBoleto" ).addClass("has-error");
				$( "#icone_diaVencimentoBoleto" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_diaVencimentoBoleto" ).removeClass("has-error");
				$( "#icone_diaVencimentoBoleto" ).removeClass("fa-times-circle-o");
				$( "#div_diaVencimentoBoleto" ).addClass("has-success");
				$( "#icone_diaVencimentoBoleto" ).addClass("fa-check");
			}
			
			if($(".matriculaObrigatoria").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_matricula" ).removeClass("has-success");
				$( "#icone_matricula" ).removeClass("fa-check");
				$( "#div_matricula" ).addClass("has-error");
				$( "#icone_matricula" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_matricula" ).removeClass("has-error");
				$( "#icone_matricula" ).removeClass("fa-times-circle-o");
				$( "#div_matricula" ).addClass("has-success");
				$( "#icone_matricula" ).addClass("fa-check");
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
			
			if($(".diaVencimentoObrigatorio").val() == ""){
				$( "#div_diaVencimentoBoleto" ).removeClass("has-success");
				$( "#icone_diaVencimentoBoleto" ).removeClass("fa-check");
				$( "#div_diaVencimentoBoleto" ).addClass("has-error");
				$( "#icone_diaVencimentoBoleto" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_diaVencimentoBoleto" ).removeClass("has-error");
				$( "#icone_diaVencimentoBoleto" ).removeClass("fa-times-circle-o");
				$( "#div_diaVencimentoBoleto" ).addClass("has-success");
				$( "#icone_diaVencimentoBoleto" ).addClass("fa-check");
			}
			
			if($(".matriculaObrigatoria").val() == ""){
				$( "#div_matricula" ).removeClass("has-success");
				$( "#icone_matricula" ).removeClass("fa-check");
				$( "#div_matricula" ).addClass("has-error");
				$( "#icone_matricula" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_matricula" ).removeClass("has-error");
				$( "#icone_matricula" ).removeClass("fa-times-circle-o");
				$( "#div_matricula" ).addClass("has-success");
				$( "#icone_matricula" ).addClass("fa-check");
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
			if(element != "" && element != "__/__/____"){
				regex = /^((((0?[1-9]|1\d|2[0-8])\/(0?[1-9]|1[0-2]))|((29|30)\/(0?[13456789]|1[0-2]))|(31\/(0?[13578]|1[02])))\/((19|20)?\d\d))$|((29\/0?2\/)((19|20)?(0[48]|[2468][048]|[13579][26])|(20)?00))$/;
				
				resultado = regex.exec(element);
				if(!resultado || element.length != 10)
				{
					
					$( "#div_dataNascimento" ).removeClass("has-success");
					$( "#icone_dataNascimento" ).removeClass("fa-check");
					$( "#div_dataNascimento" ).addClass("has-error");
					$( "#icone_dataNascimento" ).addClass("fa-times-circle-o");
					
					document.getElementById('dataNascimento').value = "";
					alert("Data de Nascimento inválida!");
					return false;
				}
				
				var data = element;
				var objDate = new Date();
				objDate.setYear(data.split("/")[2]);
				objDate.setMonth(data.split("/")[1]  - 1);//- 1 pq em js é de 0 a 11 os meses
				objDate.setDate(data.split("/")[0]);

				if(objDate.getTime() > new Date().getTime()){
					
					$( "#div_dataNascimento" ).removeClass("has-success");
					$( "#icone_dataNascimento" ).removeClass("fa-check");
					$( "#div_dataNascimento" ).addClass("has-error");
					$( "#icone_dataNascimento" ).addClass("fa-times-circle-o");
					
					document.getElementById('dataNascimento').value = "";
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