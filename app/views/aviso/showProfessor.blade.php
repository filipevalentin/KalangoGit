@extends('master-prof')

@section('maincontent')

	<section class="content-header">
		<h1>Avisos - {{$aviso->titulo}}</h1>
	    <ol class="breadcrumb">
	        <li><a href="#" ><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Avisos - {{$aviso->titulo}}</li>
	    </ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">        
                <div class="box text-center">
                    <div class="box-header">
                        <h3 class="box-title center" style="float: none;">{{$aviso->titulo}}</h3>
                    </div>
                    <div class="box-body">
                    	<p>{{$aviso->descricao}}</p>
                        @if($aviso->urlImagem != null)
                            <img src="/{{$aviso->urlImagem}}" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 800px;">
                        @endif
                    </div>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('scripts')
	
@endsection