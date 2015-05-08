@extends('master')

@section('maincontent')

	<section class="content-header">
	    <h1>
	        Bem vindo ao KalanGO!
	        <small>Meus Cursos</small>
	    </h1>
	    <ol class="breadcrumb">
		    <?php
		    	$aux2 = Session::get('bc');
		    ?>
	    	@foreach($aux2 as $b)
	        	<li><a href="{{$b['link']}}" >{{$b['nome']}}</a></li>
			@endforeach
	    </ol>
	</section>

	<section class="content">
		<h2 class="page-header">Questão 1</h2>
		<div class="row">
			<div class="col-md-2"></div>

			<div class="col-md-8 center">
				<div class="box">
                    <div class="box-header">
                        <h3 class="box-title center" style="float: none;">Qual é o animal da foto abaixo?</h3>
                    </div>
                    <div class="box-body">
                        <img src="img/leao.jpg" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 300px;">
                    </div>
					
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-5" style="padding-bottom: 5px;">
							<button class="btn btn-block btn-flat bg-aqua">Alternativa 1</button>
							<button class="btn btn-block btn-flat bg-red">Alternativa 2</button>
						</div>
						<div class="col-md-5">
							<button class="btn btn-block btn-flat bg-green">Alternativa 3</button>
							<button class="btn btn-block btn-flat bg-orange">Alternativa 4</button>
						</div>
					</div>
					</br>
					

                </div>
			</div>
		</div>
	</section>

@endsection