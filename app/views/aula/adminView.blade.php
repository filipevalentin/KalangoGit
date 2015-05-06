@extends('master-admin')

@section('modals')

<div class="modal fade" id="editarAula" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Editar Aula</h4>
            </div>
            <div class="modal-body">
                <form action="/admin/atualizarAula" method="POST">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id">
                    </div>
                    <div id="div_nome-editar-aula" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome-editar-aula" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" onblur="fcn_recarregaCoresEditarAula();" maxlength="100" class="form-control somenteLetrasENumeros nomeObrigatorio-editar-aula"></input>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar-editar-aula" value="Salvar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('maincontent')
	<section class="content-header">
	    <h1>Aulas</h1>
	    <!--<ol class="breadcrumb">
	        <li><a href="/admin/home" ><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Aulas</li>
	    </ol>-->
	</section>

	<section class="content">
		<div class="row">
	        <div class="col-md-12">
				<table id="example" class="display" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th>#</th>
			                <th>Nome</th>
			                <th>Módulo</th>
			                <th>Curso</th>
			                <th>Idioma</th>
			                <th>Nº de Ativid.</th>
			                <th>Nº de Mat. de Apoio</th>
			                <th>Status</th>
			                <th>Ação</th>
			            </tr>
			        </thead>
			 
			        <tfoot>
			            <tr>
			                <th>#</th>
			                <th>Nome</th>
			                <th>Módulo</th>
			                <th>Curso</th>
			                <th>Idioma</th>
			                <th>Nº de Ativid.</th>
			                <th>Nº de Mat. de Apoio</th>
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

	$('#editarAula').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var dataid = button.data('id')
            var datanome = button.data('nome')
            var modal = $(this)

            modal.find('#id').val(dataid)
            modal.find('#nome').val(datanome)
            })

	$('.item').first().addClass("active");

	$('#example').DataTable( {
	  "ajax":"/admin/listarAulas" ,
	    "columns": [
	        { data: 'id' },
	        { data: 'titulo' },
	        { data: 'modulo2' },
	        { data: 'curso' },
	        { data: 'idioma' },
	        { data: 'atividades2' },
	        { data: 'materiais' },
	        { data: 'excluido' },
	        { data: 'action' }

	    ],

	    "scrollX": true,

	    "columnDefs": [ {
		      "targets": 8,
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