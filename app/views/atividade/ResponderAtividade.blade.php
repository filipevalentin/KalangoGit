@extends('master')

@section('css')

<link rel="stylesheet" href="/wizard/custom.css" type="text/css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<style>

	.transcription {
		background: #fff;
	}

	.gravar {
		margin: auto;
		border: none;
		background: transparent;
		font-size: 40px;
		color: black;
		width: 80px;
		outline-color: transparent;
	}

	.gravar i { 
		cursor: pointer;
		width: 80px;
		height: 80px;
		line-height: 80px;
		border-radius: 100%;
		box-shadow: inset 0 0 0 transparent;
		-webkit-transition: all 0.5s linear;
		-moz-transition: all 0.5s linear;
		-ms-transition: all 0.5s linear;
		-o-transition: all 0.5s linear;
		transition: all 0.5s linear;
	}

	.speech{
		  box-shadow: inset 0 0 70px red !important;
		  -webkit-transition: all 0.3s linear !important;
		  -moz-transition: all 0.3s linear !important;
		  -ms-transition: all 0.3s linear !important;
		  -o-transition: all 0.3s linear !important;
		  transition: all 0.3s linear !important;
	}

	.gravar i:hover {
		box-shadow: inset 0 0 30px rgb(21, 211, 255);
	}
	.gravar i:active {box-shadow: inset 0 0 20px 100px #fff; color:#E81D62;  }

	.status { text-align: center; display: block}
	.status span {font-weight: bold;}
	.status span.gravando {color: rgb(70, 232, 29);}
	.status span.pausado {color: rgb(173, 115, 229);}

	.hidden {display: none;}
</style>

@endsection

<?php $aux = 1;
    $questoes = $atividade->questoes->sortBy('numero');
    $count = 1;
    if(!isset($ultimaQuestao)){
    	$ultimaQuestao = -1;
    }
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
		                                        	<small class="badge pull-right bg-green" style="margin: 0px 0px 0px 5px;"><?php if($questao->topico->nome != null) echo $questao->topico->nome ?></small>
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
                                                @if(substr($questao->categoria,1) == "4")
			                                          <small class="badge pull-right bg-red" style="margin: 0px 5px 0px 5px;"><i class="fa fa-microphone"></i>  Rec. de Voz</small>
			                                       @endif
                                                <small class="badge pull-right bg-green" ><?php if($questao->topico != null) echo $questao->topico->nome ?></small>
                                                </div>
                                                <h3 class="box-title center" style="float: none; ">{{$questao->textoPergunta}}</h3>
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

														@if(substr((string)$questao->categoria, 1)==4)
															<div class="col-10" style="padding-bottom: 5px;">
																
																<div class="input-group input-group-sm" style="margin: 0px 25px 0px 25px;">
																	<input type="text" id="" class="form-control resposta transcription" readonly="">
																	<span class="input-group-btn">
																		<button class="btn btn-info btn-flat resposta" type="button">Responder</button>
																	</span>
																</div>
																<button id="gravar" class="gravar" data-respostacorreta="{{$questao->respostaCerta}}"><i class="fa fa-microphone"></i></button>
																<p id="status" class="status">status: <span>aguardando permissão</span></p>
															</div>

														@else
	                                                	<div class="col-md-10" style="padding-bottom: 5px;">
	                                                		<div class="input-group input-group-sm">
	                                                			<input type="text" class="form-control resposta">
	                                                			<span class="input-group-btn">
	                                                				<button class="btn btn-info btn-flat resposta" type="button">Responder</button>
	                                                			</span>
	                                                		</div>
	                                                   </div>
                                                   @endif
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
	
	<!-- Reconhecimento de voz -->
	<script>
		// Test browser support
      window.SpeechRecognition = window.SpeechRecognition       ||
                                 window.webkitSpeechRecognition ||
                                 null;

		var resposta ="";
		console.log(resposta);

		//caso não suporte esta API DE VOZ                              
		if (window.SpeechRecognition === null) {
	        $('.gravar').setAttribute('style','box-shadow: inset 0 0 20px 100px red;color:#000;');
	    }else {
	    	var recognizer = new window.SpeechRecognition();
	    	var transcription = $('.transcription');

	    	// variavel para detectar se o reconhecimento esta ativo ou nao, usado no botão
	    	var recognizing = false;

	    	recognizer.continuous = true;
	    	recognizer.interimResults = true;

	    	resultado = "";

        	//Para o reconhecedor de voz, não parar de ouvir, mesmo que tenha pausas no usuario
        	//recognizer.continuous = true;
        	recognizer.lang = "en";


			recognizer.onspeechstart = function() {
				console.log('Speech START');
				$('.fa-microphone').addClass('speech');
			};

			recognizer.onspeechend = function() {
				console.log('Speech acabou');
				$('.fa-microphone').removeClass('speech');
			};

        	recognizer.onstart = function() {
				transcription.val("");
				recognizing = true;
				console.log('Começou');
				$('#status>span').addClass("gravando");
				$('#status>span').val("gravando");
			};

			recognizer.onend = function() {
				console.log('fim!');
				$('.status>span').removeClass('gravando');
				$('.status>span').val("aguardando permissão");
				if(resposta == resultado){
        			console.log('Resposta Correta!');
        		}else{
        			console.log('tente outra vez...');
        		}
			};

        	recognizer.onresult = function(event){
        		transcription.val("");
        		for (var i = event.resultIndex; i < event.results.length; i++) {
        			if(event.results[i].isFinal){
        				resultado = event.results[i][0].transcript;
        				transcription.val(event.results[i][0].transcript);
        				$('.fa-microphone').removeClass('speech');
        			}else{
		            	transcription.val(transcription.val() + event.results[i][0].transcript);
		            	$('.fa-microphone').addClass('speech');
		            	console.log('adicionou'); 
        			}
        		}
        	}

        	$(".gravar").on("click",function(){
        		resposta = $(this).data('respostacorreta');
        		if (recognizing) {
					recognizer.stop();
					recognizing = false;
					console.log('Parou de gravar');
					console.log(recognizing);
        			$('.fa-microphone').removeClass('speech');
					return;
				}
				try {
		        	recognizer.start();
		        	$('.fa-microphone').addClass('speech');
		        }catch(ex) {
		        	alert("error: "+ex.message);
		        }
		        recognizing = true;
				transcription.val("");
        	})
	    }
	</script>

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
					alert('Para ir para outra questão é necessário responder a atual ');
					return false;
				}
			});
		});
	</script>

	<script>
		$(function() {
			$('#rootwizard').bootstrapWizard('show',"{{++$ultimaQuestao}}");
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

			$.get('/aluno/responder/'+numeroQuestao+'/'+escape(resposta), function(data){
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
						$.get('/aluno/registrarAcesso/'+idAtividade+'/'+atual);
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

			$.get('/aluno/responder/'+numeroQuestao+'/'+escape(resposta), function(data){
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
						$.get('/aluno/registrarAcesso/'+idAtividade+'/'+atual);
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