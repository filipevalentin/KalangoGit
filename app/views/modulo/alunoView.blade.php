@extends('master')


@section('content-header')
	<!-- Content Header (Page header) -->
    <h1>
	        Aulas
	    </h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Meus Cursos</li>
			<li class="active">Aulas</li>
	    </ol>
@stop

@section('maincontent')

	<section class="content">
		<h2 class="page-header">Inglês - Teens 1</h2>
		<div class="row">
			<div class="col-md-12">
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
				                                	<div class="alert alert-success alert-dismissable" style="min-height: 55px;">
				                                        <i class="fa  fa-check-circle" style="left: -15px; top: 7px;"></i>
				                                        <p style="float:left;">{{$material->nome}}</p>
				                                        <div class="box-tools pull-right">
                                                        	<a href="/Viewer#/{{$material->url}}"><button class="btn btn-primary btn-xs"><i class="fa fa-external-link"></i></button></a>
                                                        </div>
				                                    </div>
			                                	@endforeach

			                                	@foreach (Atividade::where('status','=','1')->whereIn('id',$aula->atividades->lists('id'))->get() as $atividade)
			                                		<div class="alert bg-primary alert-dismissable" style="min-height: 55px;">
				                                        <i class="fa  fa-check-circle" style="left: -15px; top: 7px;"></i>
				                                        <p style="float:left;">{{$atividade->nome}}</p>
				                                        <div class="box-tools pull-right">
				                                        	
                                                        	<a href="/aluno/atividade/{{$atividade->id}}"><button class="btn btn-primary btn-xs"><i class="fa fa-external-link"></i></button></a>
                                                        </div>
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

			
		</div>
	</section>

@endsection