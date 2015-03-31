@extends('master')

@section('css')

<style>

	#ola {
		font-size: 50px;
		color: #fff;
		text-align: center;
		text-shadow: -1px -1px 0 #ccc; margin: 50px 0 30px
	}

	#transcription {
		width: 50%;
		border-radius: 5px;
		height: 100px;
		margin: 0 auto;
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
		color: #fff;
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
		box-shadow: inset 0 0 20px #fff;
	}
	#gravar i:active {box-shadow: inset 0 0 20px 100px #fff; color:#E81D62;  }

	#status {color: #fff; text-align: center; display: block}
	#status span {font-weight: bold;}
	#status span.gravando {color: rgb(70, 232, 29);}
	#status span.pausado {color: rgb(173, 115, 229);}

	.hidden {display: none;}
</style>


<!-- Latest compiled and minified CSS -->

@endsection


@section('maincontent')

	<section class="content" style="overflow: hidden; background-color: red;">
		<div class="row">
			<div class="col-12">
				<p id="ola">Olá tableless, você falou:</p>
				<div id="transcription"></div>
		 
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
        		recognizer.stop();
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