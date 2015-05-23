@extends('master-admin')
@section('modals')

@endsection

@section('css')
	<style type="text/css">
		.chart-legend li span{
		    display: inline-block;
		    width: 12px;
		    height: 12px;
		    margin-right: 5px;
		}
		.chart-legend li {
		    list-style: none;
		}
	</style>
@endsection

@section('maincontent')

	<section class="content">
		<div class="row">
			<div class="col-md-12 center">
				<form action="" class="form-inline">
					<div class="form-group center">
						<label class="" for="idioma" style="display:block;">Idioma</label>
						<select class="form-control" name="idioma" id="idioma" style="min-width:100px;">
							<option value="todos">Todos</option>
							@foreach(Idioma::all() as $idioma)
								<option value="{{$idioma->id}}">{{$idioma->nome}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group center">
						<label class="" for="curso" style="display:block;">Curso</label>
						<select class="form-control" name="curso" id="curso" style="min-width:100px;" placeholder="Curso">
						</select>
					</div>
					<div class="form-group center">
						<label class="" for="modulo" style="display:block;">Módulo</label>
						<select class="form-control" name="modulo" id="modulo" style="min-width:100px;" placeholder="Módulo">
						</select>
					</div>
					<div class="form-group center">
						<label class="" for="inicio" style="display:block;">Período</label>
						<input type="date" class="form-control" name="inicio" id="inicio" style="min-width:100px;" placeholder="Início">
						<input type="date" class="form-control" name="fim" id="fim" style="min-width:100px;" placeholder="Fim">
					</div>
					<div class="form-group center">
						<label class="" for="fim" style="display:block;"> &nbsp;</label>    
						<button class="btn btn-primary form-control" id="gerar">Gerar Relátorio</button>
					</div>
					<div class="col-md-12 center">    
		    			<canvas id="grafico2" width="800" height="400"></canvas>           
					</div>
					<div id="js-legend" class="chart-legend col-md-12"></div>
				</form>
			</div>
				
		</div>
	</section>

@endsection


@section('scripts')
	<script>
		var canvas;
		var grafico;

		$('#idioma').on('change', function (event){
			var idIdioma = $(this).val();

			if(idIdioma == 'todos'){
				$('select#curso').children().remove();
				$('select#modulo').children().remove();
			}

			$.get('/admin/listarCursos2/'+idIdioma, function( data ) {
				$('select#curso').children().remove();
				$('select#modulo').children().remove();
				$.each(data, function(key, val){
					$('select#curso').append("<option value="+val.id+">"+val.nome+"</option>");
				})
				$('select#curso').prepend("<option value='todos'>Todos</option>");
				$('select#curso').prepend("<option value='null'>------</option>");
			})

		})

		$('#curso').on('change', function (event){
			var idCurso = $(this).val();

			if(idCurso == 'todos' || idCurso == 'null'){
				$('select#modulo').children().remove();
			}

			$.get('/admin/listarModulos/'+idCurso, function( data ) {
				$('select#modulo').children().remove();
				$.each(data, function(key, val){
					$('select#modulo').append("<option value="+val.id+">"+val.nome+"</option>");
				})
				$('select#modulo').prepend("<option value='todos'>Todos</option>");
				$('select#modulo').prepend("<option value='null'>------</option>");
			});
		})

		$('#gerar').on('click', function(event){
			event.preventDefault();
			if(grafico){
				grafico.destroy();
			}

			var idIdioma = $('#idioma').val();
			var inicio = $('#inicio').val();
			var fim = $('#fim').val();

			$.get('/admin/contratacoes/idioma/'+idIdioma+'/'+inicio+'/'+fim, function(data){
				console.log('/admin/contratacoes/idioma/'+idIdioma+'/'+inicio+'/'+fim);
				canvas = document.getElementById('grafico2').getContext("2d");
				grafico = new Chart(canvas).Bar(data, {responsive:true, maintainAspectRatio: false});
				document.getElementById('js-legend').innerHTML = grafico.generateLegend();
			});


		});
		

	</script>
@endsection

