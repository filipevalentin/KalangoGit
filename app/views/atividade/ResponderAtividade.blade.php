@extends('master')

@section('css')

<link rel="stylesheet" href="/wizard/custom.css" type="text/css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->

@endsection

<?php $aux = 1;
    $questoes = $atividade->questoes->sortBy('numero');
    $count = 1;
?>

@section('maincontent')

	<section class="content" style="overflow: hidden;">
		<div class="row">
			<div class="col-12">
				<div id="rootwizard">
					<div class="navbar">
					  <div class="navbar-inner">
					    <div style="padding: 1px 10px 0px 10px;">
							<ul class="nav nav-pills">
							  	<li class=""><a href="#tab1" data-toggle="tab" aria-expanded="true">Questão 1</a></li>
							  	@for($i = 1; $i < $questoes->count(); $i++)
									<li class=""><a href="#tab{{$i+1}}" data-toggle="tab" aria-expanded="false">Questão {{$i+1}}</a></li>
								@endfor
							</ul>
					 	</div>
					  </div>
					</div>
		            <div id="bar" class="progress">
				    	<div class="progress-bar" role="progressbar" aria-valuemax="100" style="width: 0%;" style="background-color:white;"></div>
				    </div>

					<div class="tab-content">

		                @foreach($questoes as $questao)
						    <div class="tab-pane row" id="tab{{$count++}}">
						      	
								@if($questao->tipo == "1") <!--Multipla Escolha -->
									<div class="col-md-2"></div>

					    			<div class="col-md-8 center">

		                                <div class="box box-solid">
		                                
		                                    <div class="box text-center">
		                                        <div class="box-header">
		                                            <h3 class="box-title center" style="float: none;">{{$questao->textoPergunta}}</h3>
		                                        </div>
		                                        <div class="box-body">
		                                            <?php $categoria = (string)($questao->categoria);?>

		                                            @if(substr($categoria, 0, 1)==2)
		                                                <img src="/{{$questao->urlMidia}}" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 300px;">
		                                            @elseif(substr($categoria, 0, 1)==3)
		                                                <audio id="audio" controls="controls" style="display:none;">  
		                                                    <source src="/{{$questao->urlMidia}}" />
		                                                </audio>
		                                                <div id="playParent" class="row">
		                                                    <div class="small-box bg-aqua" style="width: 100px; margin:auto; font-size: -webkit-xxx-large;">
		                                                        <i id="play" class="ion ion-play" style=""></i>
		                                                    </div>
		                                                </div>
		                                            @endif
		                                        
		                                        </div>
		                                        
		                                        <div class="row respostas" data-idatividade="{{$questao->idAtividade}}" data-numeroQuestao="{{$questao->numero}}" style="width: 98%; margin: auto;">
													<input type="hidden" id="respostaCerta" value="{{$questao->respostaCerta}}">	
		                                            @if(substr($categoria, 1)==2)
		                                                <div class="col-md-6" style="padding-bottom: 5px;">
		                                                    <button class="btn btn-block btn-flat bg-aqua" style="border-radius: 16px;" data-alternativa="A">
		                                                        <img src="/{{$questao->alternativaA}}" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 100px;">
		                                                    </button>
		                                                    <button class="btn btn-block btn-flat bg-red" style="border-radius: 16px;" data-alternativa="B">
		                                                         <img src="/{{$questao->alternativaB}}" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 100px;">
		                                                    </button>
		                                                </div>
		                                                <div class="col-md-6">
		                                                    <button class="btn btn-block btn-flat bg-green" style="border-radius: 16px;" data-alternativa="C">
		                                                         <img src="/{{$questao->alternativaC}}" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 100px;">
		                                                    </button>
		                                                    <button class="btn btn-block btn-flat bg-orange" style="border-radius: 16px;" data-alternativa="D">
		                                                         <img src="/{{$questao->alternativaD}}" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 100px;">
		                                                    </button>
		                                                </div>

		                                            @elseif(substr($questao->categoria, 1)==3)
		                                                <div class="col-md-6 " style="padding-bottom: 5px;">
		                                                    <audio id="audio" controls="controls" style="display:none;">  
		                                                        <source src="/{{$questao->alternativaA}}">
		                                                    </audio>
		                                                    <div id="playParent" class="row" style="margin: auto;padding-left: 30px;">
		                                                        <button class="btn btn-primary" style="  font-size: xx-large;">
		                                                            <i id="play" class="ion ion-play" style=""></i>
		                                                        </button>
		                                                        <button class="btn btn-info" style="width: 140px;  font-size: xx-large;" data-alternativa="A">
		                                                            <i id="enviar" class="ion ion-checkmark" style=""></i>
		                                                        </button>
		                                                    </div>
		                                                </div>

		                                                <div class="col-md-6 " style="padding-bottom: 5px;">
		                                                    <audio id="audio" controls="controls" style="display:none;">  
		                                                        <source src="/{{$questao->alternativaB}}">
		                                                    </audio>
		                                                    <div id="playParent" class="row" style="margin: auto;padding-left: 30px;">
		                                                        <button class="btn btn-primary" style="  font-size: xx-large;">
		                                                            <i id="play" class="ion ion-play" style=""></i>
		                                                        </button>
		                                                        <button class="btn btn-danger" style="width: 140px;  font-size: xx-large;" data-alternativa="B">
		                                                            <i id="enviar" class="ion ion-checkmark" style=""></i>
		                                                        </button>
		                                                    </div>
		                                                </div>

		                                                <div class="col-md-6 " style="padding-bottom: 5px;">
		                                                    <audio id="audio" controls="controls" style="display:none;">  
		                                                        <source src="/{{$questao->alternativaC}}">
		                                                    </audio>
		                                                    <div id="playParent" class="row" style="margin: auto;padding-left: 30px;">
		                                                        <button class="btn btn-primary" style="  font-size: xx-large;">
		                                                            <i id="play" class="ion ion-play" style=""></i>
		                                                        </button>
		                                                        <button class="btn btn-success" style="width: 140px;  font-size: xx-large;" data-alternativa="C">
		                                                            <i id="enviar" class="ion ion-checkmark" style=""></i>
		                                                        </button>
		                                                    </div>
		                                                </div>

		                                                <div class="col-md-6 " style="padding-bottom: 5px;">
		                                                    <audio id="audio" controls="controls" style="display:none;">  
		                                                        <source src="/{{$questao->alternativaD}}">
		                                                    </audio>
		                                                    <div id="playParent" class="row" style="margin: auto;padding-left: 30px;">
		                                                        <button class="btn btn-primary" style="  font-size: xx-large;">
		                                                            <i id="play" class="ion ion-play" style=""></i>
		                                                        </button>
		                                                        <button class="btn btn-warning" style="width: 140px;  font-size: xx-large;" data-alternativa="D">
		                                                            <i id="enviar" class="ion ion-checkmark" style=""></i>
		                                                        </button>
		                                                    </div>
		                                                </div>


		                                            @elseif(substr($categoria, 1)==1)
		                                                <div class="col-md-6" style="padding-bottom: 5px;">
		                                                    <button class="btn btn-block btn-flat bg-aqua" data-alternativa="A">{{$questao->alternativaA}}</button>
		                                                    <button class="btn btn-block btn-flat bg-red" data-alternativa="B">{{$questao->alternativaB}}</button>
		                                                </div>
		                                                <div class="col-md-6">
		                                                    <button class="btn btn-block btn-flat bg-green" data-alternativa="C">{{$questao->alternativaC}}</button>
		                                                    <button class="btn btn-block btn-flat bg-orange" data-alternativa="D">{{$questao->alternativaD}}</button>
		                                                </div>
		                                            @endif
		                                            

		                                        </div>
		                                        <br>
		                                    </div>
		                                </div>

		                            </div>

		                        @endif

		                        @if($questao->tipo == "2") <!--dissertativa -->

									<div class="col-md-2"></div>

					    			<div class="col-md-8 center">
	                            
	                                    <div class="box-body">
	                                        <div class="row" style="margin:0px;">
	                                            <div class="box text-center">
	                                                <div class="box-header">
	                                                    <h3 class="box-title center" style="float: none;">{{$questao->textoPergunta}}</h3>
	                                                </div>
	                                                <div class="box-body">

	                                                    @if(substr((string)$questao->categoria, 0, 1)==2)
	                                                        <img src="/{{$questao->urlMidia}}" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 300px;">
	                                                    @elseif(substr((string)$questao->categoria, 0, 1)==3)
	                                                        <audio id="audio" controls="controls" style="display:none;">  
	                                                            <source src="/{{$questao->urlMidia}}" />
	                                                        </audio>
	                                                        <div id="playParent" class="row">
	                                                            <div class="small-box bg-aqua" style="width: 100px; margin:auto; font-size: -webkit-xxx-large;">
	                                                                <i id="play" class="ion ion-play" style=""></i>
	                                                            </div>
	                                                        </div>

	                                                    
	                                                @endif

	                                                </div>

	                                                <div class="row respostas" data-idatividade="{{$questao->idAtividade}}" data-numeroQuestao="{{$questao->numero}}">
	                                                	<input type="hidden" id="respostaCerta" value="{{$questao->respostaCerta}}">
	                                                    <div class="col-md-1"></div>

	                                                    <div class="col-md-10" style="padding-bottom: 5px;">
										                    <div class="input-group input-group-sm">
																<input type="text" class="form-control resposta">
																<span class="input-group-btn">
																	<button class="btn btn-info btn-flat resposta" type="button">Responder</button>
																</span>
															</div>
	                                                    </div>

	                                                </div>
	                                                <br>
	                                            </div>
	                                        </div>
	                                    </div>

	                                </div>
	                            
		                        @endif


						    </div>
		                @endforeach
						<ul class="pager wizard">
							<li class="previous first disabled" style="display:none;"><a href="#">First</a></li>
							<li class="previous disabled" style="display:none;"><a href="#">Previous</a></li>
							<li class="last" style="display:none;"><a href="#">Last</a></li>
						  	<li class="next" style="display:none;"><a href="#">Próximo</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	
@endsection

@section('scripts')
	
	<script src="/wizard/jquery-latest.js"></script>
	<!-- Latest compiled and minified JS -->
	<script src="/wizard/bootstrap.min.js"></script>

	<script src="/wizard/jquery.bootstrap.wizard.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
		  	$('#rootwizard').bootstrapWizard({
		  		onTabShow: function(tab, navigation, index) {
					var $total = navigation.find('li').length;
					var $current = index+1;
					var $percent = ($current/$total) * 100;
					$('#rootwizard .progress-bar').css({width:$percent+'%'});
				},
				onTabClick: function(tab, navigation, index) {
					alert('Use os botão "Próximo" localizado no canto inferior direito da página');
					return false;
				}
			});
		});

	</script>

	<script>

	    $('#audio, #audioA, #audioB, #audioC, #audioD').on('ended', function(){
	        $(this).siblings("div#playParent").find('i#play').removeClass('ion-pause').addClass('ion-play');
	    });


	    $('i#play').click(function () {
	        console.log('Fui clicado');
	        var button = $(this);
	        var audio = $(this).closest('div#playParent').siblings('#audio')[0];

	        if (audio.paused){
	            audio.play();
	            button.removeClass("ion ion-play").addClass('ion ion-pause');
	        }else{
	            audio.pause();
	            button.removeClass("ion ion-pause").addClass('ion ion-play');
	        }
	    });

	</script>

	<script>
		// escutar quando um botão de resposta é clicado
		// desabilitar botões da questão
		$('button[data-alternativa]').click(function() {
			var atual = $('#rootwizard').bootstrapWizard('currentIndex');
			var total = $('#rootwizard').bootstrapWizard('navigationLength');
			
			// pegar os atibutos dele: id questão, tipo, e resposta correta
			var idAluno = {{Auth::user()->id}};
			var botao = $(this);
			var numeroQuestao = botao.parents('.respostas').data('numeroquestao');
			var resposta = botao.data('alternativa').toLowerCase();
			var respostaCerta = botao.parents('.respostas').find('input#respostaCerta').val();
			var idAtividade = botao.parents('.respostas').data('idatividade');
			$(this).parents('.respostas').find('button').attr("disabled","disabled");


			$.get('/aluno/responder/'+numeroQuestao+'/'+resposta, function(data){
				if(data == 'negado'){
					alert("Você já concluiu essa atividade.\nVocê será redirecionado para a página inicial");
					window.location.href = '/aluno/home';
				}else{
					// corrigir a questão e dar feedback: colorir a TAB conforme a correção
					if(resposta == respostaCerta){
						alert('Parabéns, Resposta Certa!')
					}else{
						alert('Opa, você errou :/')
					}
					if(atual != total){
						console.log('Questao numero '+'atual');
						// atualiza a última questao respondida
						$.get('/aluno/registrarAcesso/'+idAtividade+'/'+numeroQuestao);
					}else{
						console.log('Última Questao');
						// se for a última questão, mudar o status do atividade para o aluno como "concluido" e redirecionar a página para a lista de atividades
						$.get('/aluno/registrarConclusao/'+idAtividade, function(data){
							window.history.back();
						})
					}

					$('li.next').click();

				}
			});

		});

		//$('#rootwizard').bootstrapWizard('show',;{{$questao}});

		$('button.resposta').click(function() {

			var atual = $('#rootwizard').bootstrapWizard('currentIndex');
			var total = $('#rootwizard').bootstrapWizard('navigationLength');

			console.log(atual+' de '+total);

			// pegar os atibutos dele: id questão, tipo, e resposta correta
			var idAluno = {{Auth::user()->id}};
			var botao = $(this);
			var numeroQuestao = botao.parents('.respostas').data('numeroquestao');
			var resposta = botao.parents('.respostas').find('input.resposta').val();
			var respostaCerta = botao.parents('.respostas').find('input#respostaCerta').val();
			var idAtividade = botao.parents('.respostas').data('idatividade');
			$(this).parents('.respostas').find('button').attr("disabled","disabled");

			//substitui resposta vazias por "null" para não dar erro ao montar a url para o ajax
			resposta = resposta.trim();

			if(resposta.length <=0){
				resposta = 'null';
			}

			$.get('/aluno/responder/'+numeroQuestao+'/'+resposta, function(data){
				if(data == 'negado'){
					alert("Você já concluiu essa atividade.\nVocê será redirecionado para a página inicial");
					window.location.href = '/aluno/home';
				}else{
					// corrigir a questão e dar feedback: colorir a TAB conforme a correção
					if(resposta == respostaCerta){
						alert('Parabéns, Resposta Certa!')
					}else{
						alert('Opa, você errou :/')
					}
					if(atual != total){
						console.log('Questao numero '+'atual');
						// atualiza a última questao respondida
						$.get('/aluno/registrarAcesso/'+idAtividade+'/'+numeroQuestao);
					}else{
						console.log('Última Questao');
						// se for a última questão, mudar o status do atividade para o aluno como "concluido" e redirecionar a página para a lista de atividades
						$.get('/aluno/registrarConclusao/'+idAtividade, function(data){
							window.history.back();
						})
					}

					$('li.next').click();

				}
			});

		});

		
	</script>
	
@endsection