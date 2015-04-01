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

	#gravar i:hover {
		box-shadow: inset 0 0 20px red;
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
				
				<p id="ola" data-respostaCorreta="how are you">How are you?</p>

				<div id="transcription" style="display: none;"></div>
		 		
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

		var resposta = "how are you";
		alert(resposta);                           
		//caso não suporte esta API DE VOZ                              
		if (window.SpeechRecognition === null) {
	        document.getElementById('ws-unsupported').classList.remove('hidden');
	        $('#gravar').setAttribute('style','box-shadow: inset 0 0 20px 100px red;color:#000;');
	    }else {
	    	var recognizer = new window.SpeechRecognition();
	    	var transcription = document.getElementById("transcription");

        	//Para o reconhecedor de voz, não parar de ouvir, mesmo que tenha pausas no usuario
        	recognizer.continuous = true;
        	recognizer.lang = "en";

        	recognizer.onresult = function(event){
        		transcription.textContent = "";
        		for (var i = event.resultIndex; i < event.results.length; i++) {
        			if(event.results[i].isFinal){
        				transcription.textContent = event.results[i][0].transcript+' (Taxa de acerto [0/1] : ' + event.results[i][0].confidence + ')';
        			}else{
		            	transcription.textContent += event.results[i][0].transcript;
        			}
        		}
        		if(resposta == transcription.textContent){
        			alert('Resposta Correta!');
        		}else{
        			alert('Tente outra vez...');
        			alert(resposta+"\n"+transcription.textContent)
        		}
        		recognizer.stop();
        		$('#status>span').removeClass('gravando');
				document.getElementById("status").getElementsByTagName("span")[0].innerHTML = "aguardando permissão";
        	}

        	$("#gravar").on("click",function(){
        		try {
		            recognizer.start();
					document.getElementById("status").getElementsByTagName("span")[0].className = "gravando";
					document.getElementById("status").getElementsByTagName("span")[0].innerHTML = "gravando";
		          } catch(ex) {
		          	alert("error: "+ex.message);
		          }
        	})
	    }
	</script>
	
@endsection