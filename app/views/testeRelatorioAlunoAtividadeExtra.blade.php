@extends('master-prof')

@section('css')

	<style>
		.pull-right strong {
		  color: green;
		}

		ul.list-unstyled > li > :first-child {
		  color: mediumblue;
		}
	</style>

@endsection

@section('maincontent')
	<section class="content-header">
	    <h1>Relatório do Aluno</h1>
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
		<div class="row">
			<div class="col-md-1"></div>
	        <div class="col-md-10">
	        <div class="box box-solid" style="padding: 2% 3%;">
	        	<div class="col-md-12 center" style="padding-bottom: 25px;"><h3>Relatório Geral de Atividades Extras</h3></div>
	        	<div class="box-header with-border">
	        		<div class="col-sm-6">
	        			<h3 class="box-title" style="font-size:20px; padding-right:70px;"><strong>{{$aluno->usuario->nome}} {{$aluno->usuario->sobrenome}}</strong></h3>
	        			<span> <strong>Turma:</strong> {{$aluno->turma->nome}}</span>
	        		</div>
	        		<div class="col-sm-3">
	        			<strong>Média Geral:</strong> <span style="padding-right:20px;">{{round($aluno->mediaGeral*10,1)}}/10</span>
	        		</div>
	        		<div class="col-sm-3">
	        			<strong>Presença Geral:</strong> <span style="padding-right:20px;">{{round($aluno->presencaGeral*100,2)}}%</span>
	        		</div>
	        	</div></br><!-- /.box-header -->
	        	<div class="box-body">
	        		<ul class="list-unstyled">
	        			@foreach($aluno->categoriasAluno as $aula)
		        			<li>
		        				<span><strong>{{$aula->titulo}}</strong></span>
		        				<div class="pull-right">
		        					<span style="padding-right:20px;"><strong>Média:</strong> {{round($aula->media*10,1)}}/10 </span>
		        					<span> <strong>Presença:</strong>  {{round($aula->presenca*100,2)}}%</span>
		        				</div>
			        			<hr style="margin-top:0px; margin-bottom:10px;">

		        			@foreach($aula->atividadesAluno as $atividade)
			        			<ul>
			        				<li>
			        					<span><strong>{{$atividade->nome}}</strong></span>
			        					<span>
			        						@if($atividade->nota == 0)
			        						<strong style="color:red;">Não Respondido</strong>
			        						@else
			        						{{round($atividade->nota*10,1)}}/10
			        						@endif
			        					</span>
			        				</li>
			        			</ul>
		        			@endforeach
	        				<br></br>
	        				</li>
			        	@endforeach
			        </ul>
	        	</div><!-- /.box-body -->
            </div>
	    </div>
	</section>

@endsection

@section('scripts')



@endsection