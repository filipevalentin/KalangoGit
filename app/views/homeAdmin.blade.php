@extends('master-admin')

@section('maincontent')

	<section class="content-header">
		<h1>Home - KalanGO!</h1>
	    <ol class="breadcrumb">
		    <?php
		    	$aux2 = Session::get('bc');
		    ?>
	    	@foreach($aux as $b)
	        	<li><a href="{{$b['link']}}" >{{$b['nome']}}</a></li>
			@endforeach
	    </ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12 center">        
               <img src="/img/kalangoverde.png" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 800px; opacity: 0.05;">
			</div>
		</div>
	</section>

@endsection

@section('scripts')
	
@endsection