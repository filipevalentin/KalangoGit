<!DOCTYPE html>
<html lang="pt-br">
<head>

    <title>Project name</title> 

    <meta charset="utf-8">

	{{ HTML::style('/css/style.css"') }}
	{{ HTML::style('/css/bootstrap.min.css') }}

	{{ HTML::script('/js/jquery-1.11.0.min.js') }}
	{{ HTML::script('/js/bootstrap.min.js') }}

	{{ HTML::style('/css/jquery.dataTables.css') }}
	{{ HTML::style('/css/dataTables.bootstrap.css') }}

	{{ HTML::script('/js/jquery.dataTables.min.js') }}
	{{ HTML::script('/js/dataTables.bootstrap.js') }}
    
</head>

<body>

	<div class="navbar navbar-default navbar-static-top" role="navigation">

	    <div class="container">

	        <div class="navbar-header">

	            <a class="navbar-brand" href="{{ URL::to('/admin') }}">Projeto</a>

	        </div>

	        <div class="navbar-collapse collapse">
	            
	            <ul class="nav navbar-nav navbar-right">
	                @include('layouts.sidebar')
	            </ul>

	        </div>

	    </div>

	</div>

	<div class="container-mensagens" style="width: 1170px; margin-right: auto;margin-left: auto;">
	    @if (Session::has('message'))
			<div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert">×</button>
	        	<h5><strong>{{ Session::get('message') }}</strong></h5>
			</div>
		@endif
	</div>

	<div class="container">
		<div style="padding:20px 0px 0px 0px;"></div>

	</div>

	<div style="position: fixed; bottom: 10px;  width: 100%; text-align: center;">© 2014, Rizer. Todos os direitos reservados</div>

	<script type="text/javascript">
		$(".close").click(function(){$(".alert").show().hide("slow");});
	</script>

</body>
</html>
