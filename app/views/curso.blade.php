@extends('master')

@section('maincontent')

	<section class="content-header">
	    <h1>
	        Bem vindo ao KalanGO!
	        <small>Meus Cursos</small>
	    </h1>
	    <ol class="breadcrumb">
		    <?php
		    	$aux = Session::get('bc');
		    ?>
	    	@foreach($aux as $b)
	        	<li><a href="{{$b['link']}}" >{{$b['nome']}}</a></li>
			@endforeach
	    </ol>
	</section>

	<section class="content">
		<h2 class="page-header">Inglês - Teens 1</h2>
		<div class="row">
			<div class="col-md-8">
				<div class="box box-solid">
		            <div class="box-header">
		                <h3 class="box-title">Conteúdos</h3>
		            </div><!-- /.box-header -->
		            <div class="box-body">
		                <div class="box-group" id="accordion">
		                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
							
							@foreach ( ($modulo->aulas) as $aula)
								<div class="panel box box-success">
			                        <div class="box-header">
			                            <h4 class="box-title">
			                                <a data-toggle="collapse" data-parent="#accordion" {{'href="#'.$aula->id.'"'}}>
			                                    {{$aula->titulo}}
			                                </a>
			                            </h4>
			                        </div>
			                        <div id={{'"'.$aula->id.'"'}} class="panel-collapse collapse">
			                            <div class="box-body">
			                        
			                                	@foreach ($aula->materialApoio as $material)
				                                	<div class="alert alert-success alert-dismissable">
				                                        <i class="fa  fa-check-circle" style="left: -15px; top: 7px;"></i>
				                                        <p>{{$material->nome}}</p>
				                                    </div>
			                                	@endforeach

			                                	@foreach ($aula->exercicios as $exercicio)
			                                		<div class="alert alert-info alert-dismissable">
				                                        <i class="fa  fa-check-circle" style="left: -15px; top: 7px;"></i>
				                                        <p>{{$exercicio->nome}}</p>
				                                    </div>
			                                	@endforeach


			                            </div>
			                        </div>
			                    </div>
							@endforeach

		                </div>
		            </div><!-- /.box-body -->
		        </div>
		    </div>

			<div class="col-md-4">
				<div class="box box-solid bg-green-gradient">
                    <div class="box-header">
                        <i class="fa fa-calendar"></i>
                        <h3 class="box-title">Eventos</h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <!-- button with a dropdown -->
                            <div class="btn-group">
                                <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="#">Adicionar Evento</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Ver Calendário</a></li>
                                </ul>
                            </div>
                            <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>                                        
                        </div><!-- /. tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body no-padding">
                        <!--The calendar -->
                        <div id="calendar" style="width: 100%"><div class="datepicker datepicker-inline">
                        	
                        </div>
                    </div><!-- /.box-body -->  
                </div>
			</div>

		</div>
	</section>

@endsection