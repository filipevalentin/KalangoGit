@extends('master')

<?php
    $aux = -1;
    $propagandas = Propaganda::all();
?>

@section('css')
<style>
	@media (min-width: 1200px){
		.fix-espacos-left {
		  padding-right: 5px;
		}

		.fix-espacos-right {
		  padding-left: 5px;
		}
	}

	@media (min-width: 922px){
		.fix-grupo-left {
		  padding-right: 25px;
		}

		.fix-grupo-right {
		  padding-left: 25px;
		}
	}
	
</style>
	
@endsection

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
                                <a target="_blank" href="{{$propaganda->link}}"><img src="/{{$propaganda->urlImagem}}" alt="{{$propaganda->titulo}}" style="max-height: 400px; margin:auto;"></a>
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
        {{Auth::user()->nome}}, bem vindo ao KalanGO!
        <!-- <small>Meus Cursos</small> -->
    </h1>
    <ol class="breadcrumb">
	    <?php
	    	$aux2 = Session::get('bc');
	    ?>
    	@foreach($aux22 as $b)
        	<li><a href="{{$b['link']}}" >{{$b['nome']}}</a></li>
		@endforeach
    </ol>
@stop

	<!-- Main content -->
@section('maincontent')
	<section class="content">
	    <div class="row">
	        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 fix-grupo-left">
	        	<h2 class="page-header center" style="border-bottom:1px solid #000;">Meu Curso</h2>

                <div class="row">

					<div class="col-lg-6" style="padding: 0;"> <!-- Coluna de cursos -->

	                    @foreach ( $turmas as $turma)
	                    	<a {{'href=modulo/'.$turma->modulo->id}}>
	                            <div class="col-md-12 fix-espacos-left">
	                                <div id="div_card_{{++$aux}}" class="box" style="">
	                                    <div class="inner" style="height: 122px;">
	                                        <h3>{{$turma->modulo->curso->idioma->nome.' - '}}{{$turma->modulo->curso->nome}}</h3>
	                                        <p style="font-size: 25px; font-weight: 600;">{{$turma->modulo->nome}}</p>
	                                        <p style="">{{$turma->modulo->descricao}}</p>
	                                    </div>
	                                    <div class="icon">
	                                        <i class="fa fa-book"></i>
	                                    </div>
	                                    <a href="" class="small-box-footer">
	                                         
	                                    </a>
	                              	</div>
	                            </div>
	                        </a>
	                    @endforeach

						<div class="col-md-12 fix-espacos-left">
							<div id="div_card_{{++$aux}}" class="box" >
								<a href="/aluno/cursos/anteriores" >
									<div class="inner" style="height: 122px;">
										<span style="color:#FFF;font-size:30px;"><b>Cursos Anteriores</b></span><br>
										<span style="color:#FFF;">
											Aqui você cosegue consultar os materiais dos cursos feitos anteriormente
										</span>
									</div>
									<div class="icon">
										<i class="fa fa-mail-reply"></i>
									</div>
								</a> 
								<a href="javascript:void(0);" class="small-box-footer">
									 
								</a>
							</div>
						</div>

	                </div> <!-- fim coluna de cursos -->
					
					<div class="col-lg-6" style="padding: 0;">
                    	<div class="col-md-12 fix-espacos-right">
							<div id="div_card_{{++$aux}}" class="box" >
								<a href="/aluno/atividades/extra">
									<div class="inner" style="height: 122px;">
										<span style="color:#FFF;font-size:30px;"><b>Atividades Extras</b></span><br>
										<span style="color:#FFF;">
											Realize Atividades Extras para melhorar seus conhecimentos, e assim ganhar pontos para subir no Ranking!
										</span>
									</div>
									<div class="icon">
										<i class="fa fa-star-o"></i>
									</div>
								</a>
								<a href="/aluno/atividades/extra" class="small-box-footer">
									 
								</a>
							</div>
						</div>

						<div class="col-md-12 fix-espacos-right">
							<div id="div_card_{{++$aux}}" class="box">
								<a href="/aluno/dashboard" >
									<div class="inner" style="height: 122px;">
										<span style="color:#FFF;font-size:30px;"><b>Desempenho</b></span><br>
										<span style="color:#FFF;">
											Veja seus pontos, sua posição no Ranking, seus acertos e erros das atividades respondidas
										</span>
									</div>
									<div class="icon">
										<i class="fa fa-bar-chart-o"></i>
									</div>
								</a>
								<a href="javascript:void(0);" class="small-box-footer">
									 
								</a>
							</div>
						</div>
					</div>
                    
                </div> <!-- .row -->
            
	        </div>

			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 fix-grupo-right">
	        	<h2 class="page-header center" style="border-bottom:1px solid #000;">Comunicação</h2>
                	<div class="row">
                    	<div class="col-lg-6 fix-espacos-left">
							<div id="div_card_{{++$aux}}" class="box" >
								<a href="/aluno/mensagens/entrada">
									<div class="inner" style="height: 122px;">
										<span style="color:#FFF;font-size:30px;"><b>Mensagens</b></span><br>
										<span style="color:#FFF;">
											Envie e Responda Mensagens para seus professores. Tire suas dúvidas!
										</span>
									</div>
									<div class="icon">
										<i class="fa fa-envelope-o"></i>
									</div>
								</a>
								<a href="#" class="small-box-footer">
									 
								</a>
							</div>
						</div>

						<div class="col-lg-6 fix-espacos-right">
							<div id="div_card_{{++$aux}}" class="box" >
								<a href="/aluno/avisos" >
									<div class="inner" style="height: 122px;">
										<span style="color:#FFF;font-size:30px;"><b>Avisos</b></span><br>
										<span style="color:#FFF;">
											Veja os próximos acontecimentos e avisos
										</span>
									</div>
									<div class="icon">
										<i class="fa fa-bell-o"></i>
									</div>
								</a>
								<a href="javascript:void(0);" class="small-box-footer">
									 
								</a>
							</div>
						</div>

						<div class="col-lg-6 fix-espacos-left">
							<div id="div_card_{{++$aux}}" class="box" >
								<a href="/aluno/perfil">
									<div class="inner" style="height: 122px;">
										<span style="color:#FFF;font-size:30px;"><b>Perfil</b></span><br>
										<span style="color:#FFF;">
											Gerencie as informações relativas ao seu perfil ou altere sua senha
										</span>
									</div>
									<div class="icon">
										<i class="fa fa-user"></i>
									</div>
								</a>
								<a href="#" class="small-box-footer">
									 
								</a>
							</div>
						</div>

						<div class="col-lg-6 fix-espacos-right">
							<div id="div_card_{{++$aux}}" class="box" >
								<a href="javascript:void(0);" >
									<div class="inner" style="height: 122px;">
										<span style="color:#FFF;font-size:30px;"><b>Contato</b></span><br>
										<span style="color:#FFF;">
											Dúvidas ou algum problema com o sistema? Entre em contato diretamente com os adminstradores.
										</span>
									</div>
									<div class="icon">
										<i class="fa fa-send-o"></i>
									</div>
								</a>
								<a href="javascript:void(0);" class="small-box-footer">
									 
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
	        $('#div_card_' + i).addClass(cores[(valor+i)%6]) //Colore card sequencialmente com cores aleatorias
	    }
	     
	</script>
@endsection