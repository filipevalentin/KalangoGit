@extends('master-admin')

@section('modals')

<div class="modal fade" id="criarTopico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Novo Tópico</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/criarTopico" enctype="multipart/form-data">
                    <div id="div_nome" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" class="form-control" >
                    </div>
					<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar" value="Salvar" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editarTopico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Editar Tópico</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/atualizarTopico" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id" value="">
                    </div>
                    <div id="div_nome" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" class="form-control" >
                    </div>
					<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar" value="Salvar" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('maincontent')
	<section class="content-header">
	    <h1>Topicos</h1>
	    <ol class="breadcrumb">
	        <li><a href="#" ><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Topicos</li>
	    </ol>
	</section>

	<section class="content">
		<div class="row">
	        <div class="col-md-12">
				<table id="example" class="display" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th>#</th>
			                <th>Nome</th>
			                <th>Nº de Questões</th>
			                <th>Criado Por</th>
			                <th><button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarTopico" ><i class="fa fa-plus"></i></button></th>
			            </tr>
			        </thead>
			 
			        <tfoot>
			            <tr>
			                <th>#</th>
			                <th>Nome</th>
			                <th>Nº de Questões</th>
			                <th>Criado Por</th>
			                <th><button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarTopico" ><i class="fa fa-plus"></i></button></th>
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

	$('#editarTopico').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var dataid = button.data('id');
        var datanome = button.data('nome')

        var modal = $(this)
        modal.find('#id').val(dataid)
        modal.find('#nome').val(datanome)

    });

	$('.item').first().addClass("active");

	$('#example').DataTable( {
	  "ajax":"/admin/listarTopicos" ,
	    "columns": [
	        { data: 'id' },
	        { data: 'nome' },
	        { data: 'numQuestoes' },
	        { data: 'criadoPor' },
	        { data: 'action' }
	    ],

	    "scrollX": true,

		"columnDefs": [ {
		      "targets": 4,
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
	
@endsection