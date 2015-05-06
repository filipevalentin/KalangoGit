@extends('master')

<?php
    $aux = -1;
?>

@section('content-header')
	<!-- Content Header (Page header) -->
    <h1>
        Cursos Anteriores
    </h1>
    <!--<ol class="breadcrumb">
        <li><a href="#" ><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Meus Cursos</li>
		<li class="active">Cursos Anteriores</li>
    </ol>-->
@stop

	<!-- Main content -->
@section('maincontent')
	<section class="content">
	    <div class="row">
	        <div class="col-xs-12">
	        	<div class="row">
        			@if($turmas->count() == 0)
	        			<div class="col-lg-12 center">
	        				<div class="callout center callout-danger ui-sortable-handle">
	                            <h4>Você ainda não concluiu nenhum curso</h4>
	                        </div>
	        			</div>
                    @endif

					<div class="col-lg-3" style="padding: 0;"> <!-- Coluna de cursos -->
	                    @foreach ( $turmas as $turma)
	                    	<a href="/aluno/modulo/{{$turma->modulo->id}}">
	                            <div class="col-md-12">
	                                <div id="div_card_{{++$aux}}" class="box" style="">
	                                    <div class="inner">
	                                        <h3>{{$turma->modulo->curso->idioma->nome.' - '}}{{$turma->modulo->curso->nome}}</h3>
	                                        <p style="font-size: 25px; font-weight: 600;">{{$turma->modulo->nome}}</p>
	                                        <p style="">{{$turma->modulo->descricao}}</p>
	                                    </div>
	                                    <div class="icon">
	                                        <i class="ion ion-paper-airplane"></i>
	                                    </div>
	                                    <a href="" class="small-box-footer">
	                                        Voltar para última lição <i class="fa fa-arrow-circle-right"></i>
	                                    </a>
	                              	</div>
	                            </div>
	                        </a>
	                    @endforeach
	                </div>
                </div> <!-- .row -->
            
	        </div>

	    </div> <!-- /.row -->

	</section><!-- /.content -->

@endsection

@section('scripts')
    <script language="javascript">
    $('#liCarousel').first().addClass('active');
    $('#divCarousel').first().addClass('active');

	    
	    for (var i = 0; i < valorMaximo; i++) {
	        // console.log(i);
	        // console.log('div_card_'+i);
	        // console.log(cores[(valor+i)%9]);
	        // console.log(document.getElementById('div_card_' + i));

	        //Gera numeros aleatorios baseado no valor maximo
	        $('#div_card_' + i).addClass(cores[(valor+i)%9]) //Colore card sequencialmente com cores aleatorias
	    }
	     
	</script>
@endsection