@extends('master-admin')

@section('modals')

@endsection

@section('maincontent')
	<section class="content-header">
	    <h1>Questões</h1>
	    <ol class="breadcrumb">
	        <li><a href="/admin/home" ><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Questões</li>
	    </ol>
	</section>

	<section class="content">
		<div class="row">
	        <div class="col-md-12">
				<table id="example" class="display" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th>#</th>
			                <th>Título</th>
			                <th>Atividade</th>
			                <th>Aula</th>
			                <th>Módulo</th>
			                <th>Curso</th>
			                <th>Idioma</th>
			                <th>Tipo</th>
			                <th>Status</th>
			                <th>Ação</th>
			            </tr>
			        </thead>
			 
			        <tfoot>
			            <tr>
			                <th>#</th>
			                <th>Título</th>
			                <th>Atividade</th>
			                <th>Aula</th>
			                <th>Módulo</th>
			                <th>Curso</th>
			                <th>Idioma</th>
			                <th>Tipo</th>
			                <th>Status</th>
			                <th>Ação</th>
			            </tr>
			        </tfoot>
			    </table>
	        </div>
	    </div>
	</section>

@endsection

@section('scripts')
<script src="{{ URL::asset('/js/dataTables.tableTools.js') }}" type="text/javascript"></script>

<script>

	$('.item').first().addClass("active");

	$('#example').DataTable( {
	  "ajax":"/admin/listarQuestoes" ,
	    "columns": [
	        { data: 'id' },
	        { data: 'titulo' },
	        { data: 'atividade2' },
	        { data: 'aula2' },
	        { data: 'modulo2' },
	        { data: 'curso' },
	        { data: 'idioma' },
	        { data: 'tipo' },
	        { data: 'excluido' },
	        { data: 'action' }

	    ],

	    "scrollX": true,

	    "columnDefs": [ {
		      "targets": 9,
		      "orderable": false,
		      "searchable": false
		    } ],

	    "dataSrc": "",
	     dom: 'T<"clear">lfrtip',
        tableTools: {
            "sSwfPath": "/swf/copy_csv_xls_pdf.swf"
        },

        responsive: true,

        language: {
		    "emptyTable":     "Nenhum registro disponível",
		    "info":           "Mostrando _START_ a _END_ de _TOTAL_ valores",
		    "infoEmpty":      "Mostrando 0 to 0 of 0 valores",
		    "infoFiltered":   "(Filtrado dentre _MAX_ valores)",
		    "infoPostFix":    "",
		    "thousands":      ",",
		    "lengthMenu":     "Mostrar _MENU_ valores",
		    "loadingRecords": "Carregando...",
		    "processing":     "Processando...",
		    "search":         "Pesquisa:",
		    "zeroRecords":    "Nenhum resultado encontrado",
		    "paginate": {
		        "first":      "Primeiro",
		        "last":       "Último",
		        "next":       "Próximo",
		        "previous":   "Anterior"
		    },
		    "aria": {
		        "sortAscending":  ": activate to sort column ascending",
		        "sortDescending": ": activate to sort column descending"
		    }
		}
    } );

</script>

<script> //Validações
	

	
</script>

@endsection