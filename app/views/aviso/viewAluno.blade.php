@extends('master')

@section('maincontent')

	<section class="content-header">
		<h1>Avisos</h1>
	    <ol class="breadcrumb">
	        <li><a href="#" ><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Avisos</li>
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
                        <h3 class="box-title center" style="float: none;">{{$aviso->titulo}}</h3>
                    </div>
                    <div class="box-body">
                    	<p>{{$aviso->descricao}}</p>
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