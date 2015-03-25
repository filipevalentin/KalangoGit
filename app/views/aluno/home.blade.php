@extends('master')

<?php
    $aux = -1;
    $turmas = Auth::user()->aluno->turmas;
    $propagandas = Propaganda::all();
?>

@section('carrossel')
	<div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Novidades</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        @foreach($propagandas as $propaganda)
                            <li id="liCarousel" data-target="#carousel-example-generic" data-slide-to="{{$propaganda->id}}" class=""></li>
                        @endforeach
                        </ol>
                        <div class="carousel-inner">
                         @foreach($propagandas as $propaganda)
                            <div class="item" id="divCarousel">
                                <img src="/{{$propaganda->urlImagem}}" alt="{{$propaganda->titulo}}" style="max-height: 400px; margin:auto;">
                                <div class="carousel-caption">
                                    {{$propaganda->titulo}}
                                </div>
                            </div>
                         @endforeach
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
@stop


@section('content-header')
	<!-- Content Header (Page header) -->
    <h1>
        Bem vindo ao KalanGO!
        <!-- <small>Meus Cursos</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    </ol>
@stop

	<!-- Main content -->
@section('maincontent')
	<section class="content">
	    <div class="row">
	        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	        	<h2 class="page-header">Meus Cursos</h2>

                <div class="row">

					<div class="col-lg-6" style="padding: 0;"> <!-- Coluna de cursos -->
	                    @foreach ( $turmas as $turma)
	                    	<a {{'href=modulo/'.$turma->modulo->id}}>
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

						<div class="col-md-12">
							<div id="div_card_{{++$aux}}" class="box" >
								<a href="javascript:void(0);" onclick="javascript:fcn_indisponivel();">
									<div class="inner">
										<span style="color:#FFF;font-size:30px;"><b>Cursos Anteriores</b></span><br>
										<span style="color:#FFF;">
											Aqui você cosegue consultar os materiais dos cursos feitos previamente
										</span>
									</div>
									<div class="icon">
										<i class="fa fa-calendar"></i>
									</div>
								</a> 
								<a href="javascript:void(0);" onclick="javascript:fcn_indisponivel();" class="small-box-footer">
									Detalhes <i class="fa fa-arrow-circle-right"></i>
								</a>
							</div>
						</div>

	                </div> <!-- fim coluna de cursos -->
					
					<div class="col-lg-6" style="padding: 0;">
                    	<div class="col-md-12">
							<div id="div_card_{{++$aux}}" class="box" >
								<a href="#">
									<div class="inner">
										<span style="color:#FFF;font-size:30px;"><b>Atividades Extras</b></span><br>
										<span style="color:#FFF;">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
											Sed placerat tempus lectus id consectetur. 
											Praesent in metus nisl.
										</span>
									</div>
									<div class="icon">
										<i class="fa fa-gift"></i>
									</div>
								</a>
								<a href="vis_atividades.php" class="small-box-footer">
									Detalhes <i class="fa fa-arrow-circle-right"></i>
								</a>
							</div>
						</div>

						<div class="col-md-12">
							<div id="div_card_{{++$aux}}" class="box">
								<a href="/aluno/dashboard" onclick="javascript:fcn_indisponivel();">
									<div class="inner">
										<span style="color:#FFF;font-size:30px;"><b>Desempenho</b></span><br>
										<span style="color:#FFF;">
											Veja seus pontos, acertos e erros das atividades respondidas
										</span>
									</div>
									<div class="icon">
										<i class="fa fa-bar-chart-o"></i>
									</div>
								</a>
								<a href="javascript:void(0);" onclick="javascript:fcn_indisponivel();" class="small-box-footer">
									Detalhes <i class="fa fa-arrow-circle-right"></i>
								</a>
							</div>
						</div>
					</div>
                    
                </div> <!-- .row -->
            
	        </div>

			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	        	<h2 class="page-header">Comunicação</h2>
                	<div class="row">
                    	<div class="col-lg-6">
							<div id="div_card_{{++$aux}}" class="box" >
								<a href="/aluno/mensagens/entrada">
									<div class="inner">
										<span style="color:#FFF;font-size:30px;"><b>Mensagens</b></span><br>
										<span style="color:#FFF;">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
											Sed placerat tempus lectus id consectetur. 
											Praesent in metus nisl.
										</span>
									</div>
									<div class="icon">
										<i class="fa fa-gift"></i>
									</div>
								</a>
								<a href="#" class="small-box-footer">
									Detalhes <i class="fa fa-arrow-circle-right"></i>
								</a>
							</div>
						</div>

						<div class="col-lg-6">
							<div id="div_card_{{++$aux}}" class="box" >
								<a href="javascript:void(0);" onclick="javascript:fcn_indisponivel();">
									<div class="inner">
										<span style="color:#FFF;font-size:30px;"><b>Agenda</b></span><br>
										<span style="color:#FFF;">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
											Sed placerat tempus lectus id consectetur. 
											Praesent in metus nisl.
										</span>
									</div>
									<div class="icon">
										<i class="fa fa-bar-chart-o"></i>
									</div>
								</a>
								<a href="javascript:void(0);" onclick="javascript:fcn_indisponivel();" class="small-box-footer">
									Detalhes <i class="fa fa-arrow-circle-right"></i>
								</a>
							</div>
						</div>

						<div class="col-lg-6">
							<div id="div_card_{{++$aux}}" class="box" >
								<a href="/aluno/perfil">
									<div class="inner">
										<span style="color:#FFF;font-size:30px;"><b>Perfil</b></span><br>
										<span style="color:#FFF;">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
											Sed placerat tempus lectus id consectetur. 
											Praesent in metus nisl.
										</span>
									</div>
									<div class="icon">
										<i class="fa fa-gift"></i>
									</div>
								</a>
								<a href="#" class="small-box-footer">
									Detalhes <i class="fa fa-arrow-circle-right"></i>
								</a>
							</div>
						</div>

						<div class="col-lg-6">
							<div id="div_card_{{++$aux}}" class="box" >
								<a href="javascript:void(0);" onclick="javascript:fcn_indisponivel();">
									<div class="inner">
										<span style="color:#FFF;font-size:30px;"><b>Contato</b></span><br>
										<span style="color:#FFF;">
											Fazer uma rotina para que a mensagem do aluno vá para o e-mail da escola
										</span>
									</div>
									<div class="icon">
										<i class="fa fa-bar-chart-o"></i>
									</div>
								</a>
								<a href="javascript:void(0);" onclick="javascript:fcn_indisponivel();" class="small-box-footer">
									Detalhes <i class="fa fa-arrow-circle-right"></i>
								</a>
							</div>
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