@extends('master')

<?php
    $aux = -1;
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
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="http://placehold.it/1980x450/39CCCC/ffffff&amp;text=KalanGO!" alt="First slide">
                                        <div class="carousel-caption">
                                            <!-- Legenda do banner -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="http://placehold.it/1980x450/3c8dbc/ffffff&amp;text=KalanGO!" alt="Second slide">
                                        <div class="carousel-caption">
                                            <!-- Legenda do banner -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="http://placehold.it/1980x450/f39c12/ffffff&amp;text=KalanGO!" alt="Third slide">
                                        <div class="carousel-caption">
                                           <!-- Legenda do banner -->
                                        </div>
                                    </div>
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
@endsection


@section('maincontent')
	<!-- Content Header (Page header) -->
	<section class="content-header">
	    <h1>
	        Bem vindo ao KalanGO!
	        <!-- <small>Meus Cursos</small> -->
	    </h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Meus Cursos</li>
	    </ol>
	</section>

	<!-- Main content -->

	<section class="content">
	    <div class="row">
	        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	        	<h2 class="page-header">Meu Curso</h2>

                <div class="row">

					<div class="col-lg-6" style="padding: 0;"> <!-- Coluna de cursos -->
	                    @foreach ($turmas as $turma)
	                    	<a {{'href=curso/'.$turma->modulo->id}}>
	                            <div class="col-md-12">
	                                <div id="div_card_{{++$aux}}" class="" style=";">
	                                    <div class="inner">
	                                        <h3>{{$turma->modulo->curso->idioma.' - '}}{{$turma->modulo->curso->nome}}</h3>
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
							<div id="div_card_{{++$aux}}" >
								<a href="javascript:void(0);" onclick="javascript:fcn_indisponivel();">
									<div class="inner">
										<span style="color:#FFF;font-size:30px;"><b>Espanhol</b></span><br>
										<span style="color:#FFF;">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
											Sed placerat tempus lectus id consectetur. 
											Praesent in metus nisl.
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
							<div id="div_card_{{++$aux}}" class="" >
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
							<div id="div_card_{{++$aux}}" >
								<a href="javascript:void(0);" onclick="javascript:fcn_indisponivel();">
									<div class="inner">
										<span style="color:#FFF;font-size:30px;"><b>Desempenho</b></span><br>
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
					</div>
                    
                </div> <!-- .row -->
            
	        </div>

			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	        	<h2 class="page-header">Comunicação</h2>
                	<div class="row">
                    	<div class="col-lg-6">
							<div id="div_card_{{++$aux}}" class="" >
								<a href="#">
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
							<div id="div_card_{{++$aux}}" >
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
							<div id="div_card_{{++$aux}}" class="" >
								<a href="#">
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
							<div id="div_card_{{++$aux}}" >
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
	    
	    for (var i = 0; i < valorMaximo; i++) {
	        console.log(i);
	        console.log('div_card_'+i);
	        console.log(cores[(valor+i)%9]);
	        console.log(document.getElementById('div_card_' + i));

	        //Gera numeros aleatorios baseado no valor maximo
	        document.getElementById('div_card_' + i).className = cores[(valor+i)%9]; //Colore card sequencialmente com cores aleatorias
	    }
	     
	</script>
@endsection