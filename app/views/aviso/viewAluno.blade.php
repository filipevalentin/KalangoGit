@extends('master')

@section('maincontent')

	<section class="content-header">
		<h1>Avisos</h1>
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
			<div class="col-md-12">
			@if($avisos->count() == 0)
    			<div class="col-lg-12 center">
    				<div class="callout center callout-danger ui-sortable-handle">
                        <h4>Não Existem Avisos...</h4>
                    </div>
    			</div>
            @endif
			@foreach($avisos as $aviso)        
                <div class="box text-center" style="margin-bottom: 20px;">
                    <div class="box-header">
                        <h2 class="box-title center" style="float: none;">{{$aviso->titulo}}</h2>
                    </div>
                    <div class="box-body center">
                    	<h3>{{$aviso->descricao}}</h3>
                        @if($aviso->urlMidia != null)
                            <img src="/{{$aviso->urlMidia}}" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 800px;">
                        @endif
                    </div>
				</div>
			@endforeach
			</div>
		</div>
	</section>

@endsection

@section('scripts')
	
@endsection