@extends('master-prof')

@section('maincontent')

	<section class="content-header">
		<h1>Avisos - {{$aviso->titulo}}</h1>
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
		<div class="row">
			<div class="col-md-12">        
                <div class="box text-center">
                    <div class="box-header">
                        <h3 class="box-title center" style="float: none;">{{$aviso->titulo}}</h3>
                    </div>
                    <div class="box-body center">
                    	<h3>{{$aviso->descricao}}</h3>
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