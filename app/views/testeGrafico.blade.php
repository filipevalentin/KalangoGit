@extends('master-admin')
@section('modals')

@endsection



@section('maincontent')

	<section class="content">
		<div class="row">
			<div class="col-md-4">
				<select class="form-control" name="idioma" id="">
					@foreach(Idioma::all() as $idioma)
						<option value="{{$idioma->id}}">{{$idioma->nome}}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-4">
				<select class="form-control" name="curso" id="">
					
				</select>
			</div>
			<div class="col-md-4">
				<select class="form-control" name="modulo" id="">
					
				</select>
			</div>
			<div class="col-md-12 center">        
    			<canvas id="grafico" width="800" height="400"></canvas>           
			</div>
		</div>
	</section>

@endsection


@section('scripts')
	<script>

		$('#idioma').on('change', function (event){
			var idIdioma = $(this).val();

			$.get('/admin/listarCursos/'+idIdioma, function( data ) {
				$('select#curso').children().remove();
				$.each(data, function(key, val){
					$('select#curso').append("<option value="+val.id+">"+val.nome+"</option>");
				})
			});


		$('#curso').on('change', function (event){
			var idCurso = $(this).val();

			$.get('/admin/listarModulos/'+idCurso, function( data ) {
				$('select#modulo').children().remove();
				$.each(data, function(key, val){
					$('select#modulo').append("<option value="+val.id+">"+val.nome+"</option>");
				})
			});


		var data = {
		    labels: ["January", "February", "March", "April", "May", "June", "July"],
		    datasets: [
		        {
		            label: "My First dataset",
		            fillColor: "rgba(220,220,220,0.5)",
		            strokeColor: "rgba(220,220,220,0.8)",
		            highlightFill: "rgba(220,220,220,0.75)",
		            highlightStroke: "rgba(220,220,220,1)",
		            data: [65, 59, 80, 81, 56, 55, 40]
		        },
		        {
		            label: "My Second dataset",
		            fillColor: "rgba(151,187,205,0.5)",
		            strokeColor: "rgba(151,187,205,0.8)",
		            highlightFill: "rgba(151,187,205,0.75)",
		            highlightStroke: "rgba(151,187,205,1)",
		            data: [28, 48, 40, 19, 86, 27, 90]
		        }
		    ]
		};
		var canvas = document.getElementById('grafico').getContext("2d");
		var grafico = new Chart(canvas).Bar(data);

	</script>
@endsection

