@extends('master')

@section('css')

<style>

	#ola {
		font-size: 30px;
		text-align: center;
	}

	#transcription {
		width: 50%;
		border-radius: 5px;
		height: 100px;
		margin: 0 auto;
		border: solid;
		display: block;
		font-size: 16px;
		padding: 11px;
		color: #666;
		background: #fff;
	}

	#gravar {
		border: none;
		background: transparent;
		font-size: 40px;
		color: black;
		width: 100%;
		outline-color: transparent;
		padding-top: 20px;
	}

	#gravar i { 
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
		margin-bottom: 15px;
	}

	.sound{
		  box-shadow: inset 0 0 45px red;
		  -webkit-transition: all 0.2s linear;
		  -moz-transition: all 0.2s linear;
		  -ms-transition: all 0.2s linear;
		  -o-transition: all 0.2s linear;
		  transition: all 0.2s linear;
	}

	.speech{
		  box-shadow: inset 0 0 70px red;
		  -webkit-transition: all 0.2s linear;
		  -moz-transition: all 0.2s linear;
		  -ms-transition: all 0.2s linear;
		  -o-transition: all 0.2s linear;
		  transition: all 0.2s linear;
	}

	#gravar i:hover {
		box-shadow: inset 0 0 20px rgb(21, 211, 255);
	}
	#gravar i:active {box-shadow: inset 0 0 20px 100px #fff; color:#E81D62;  }

	#status { text-align: center; display: block}
	#status span {font-weight: bold;}
	#status span.gravando {color: rgb(70, 232, 29);}
	#status span.pausado {color: rgb(173, 115, 229);}

	.hidden {display: none;}
</style>


<!-- Latest compiled and minified CSS -->

@endsection


@section('maincontent')

	<section class="content" style="overflow: hidden; background: rgb(237, 237, 237)">
		<div class="row">
			<div class="col-12">
				<p id="ola">Leia a frase a Seguir:</p>
				
				<p id="ola" class="resposta" data-respostaCorreta="how are you">How are you?</p>

				<input type="text" id="transcription" style="" readonly="">
		 		
				<button id="gravar">
					<i class="fa fa-microphone"></i>
				</button>
				<p id="status">status: <span>aguardando permissão</span></p>
			</div>
		</div>
	</section>
	
@endsection

@section('scripts')
	
	<script src="/wizard/jquery-latest.js"></script>
	<!-- Latest compiled and minified JS -->
	<script src="/wizard/bootstrap.min.js"></script>

	<script>
		// Test browser support
      window.SpeechRecognition = window.SpeechRecognition       ||
                                 window.webkitSpeechRecognition ||
                                 null;

		var resposta = $('.resposta').data('respostacorreta');
		console.log(resposta);

		//caso não suporte esta API DE VOZ                              
		if (window.SpeechRecognition === null) {
	        document.getElementById('ws-unsupported').classList.remove('hidden');
	        $('#gravar').setAttribute('style','box-shadow: inset 0 0 20px 100px red;color:#000;');
	    }else {
	    	var recognizer = new window.SpeechRecognition();
	    	var transcription = $('#transcription');

	    	// variavel para detectar se o reconhecimento esta ativo ou nao, usado no botão
	    	var recognizing = false;

	    	recognizer.continuous = true;
	    	recognizer.interimResults = true;

	    	resultado = "";

        	//Para o reconhecedor de voz, não parar de ouvir, mesmo que tenha pausas no usuario
        	//recognizer.continuous = true;
        	recognizer.lang = "en";

        	recognizer.onsound = function() {
				$('#gravar').addClass('sound');
			};

			recognizer.onspeach = function() {
				$('#gravar').addClass('speach');
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
				$('#status>span').removeClass('gravando');
				$('#status>span').val("aguardando permissão");
				if(resposta == resultado){
        			alert('Resposta Correta!');
        		}else{
        			alert('tente outra vez...');
        		}
			};

        	recognizer.onresult = function(event){
        		console.log('Temos um resultado!');
        		transcription.val("");
        		for (var i = event.resultIndex; i < event.results.length; i++) {
        			if(event.results[i].isFinal){
        				resultado = event.results[i][0].transcript;
        				transcription.val(event.results[i][0].transcript+' (Taxa de acerto [0/1] : ' + event.results[i][0].confidence + ')');
        			}else{
		            	transcription.val(transcription.val() + event.results[i][0].transcript); 
        			}
        		}
        	}

        	$("#gravar").on("click",function(){
        		if (recognizing) {
					recognizer.stop();
					recognizing = false;
					console.log('Parou de gravar');
					console.log(recognizing);
					return;
				}
				try {
		        	recognizer.start();
		        }catch(ex) {
		        	alert("error: "+ex.message);
		        }
		        recognizing = true;
		        console.log('Gravando!');
				console.log(recognizing);

				transcription.textContent = "";
        	})
	    }
	</script>
	
@endsection