@extends('master-admin')

@section('modals')

<div class="modal fade" id="verImagem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Imagem da Propaganda</h4>
            </div>
            <div class="modal-body">
                <img id="src" src="" alt="" style="max=height: 800px;">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="criarPropaganda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Nova Propaganda</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/criarPropaganda" enctype="multipart/form-data">
                    <div id="div_nome" class="form-group">
                        <label class="control-label" for="titulo"><i id="icone_titulo" class="fa"></i> Título</label>
                        <input type="text" autocomplete="off" id="titulo" name="titulo" class="form-control" >
                    </div>
                    <div id="div_nome" class="form-group">
                        <label class="control-label" for="urlImagem"><i id="icone_urlImagem" class="fa"></i> Imagem</label>
                        <input type="file" autocomplete="off" id="urlImagem" name="urlImagem" class="form-control" >
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

<div class="modal fade" id="editarPropaganda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Editar Propaganda</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/atualizarPropaganda" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id" value="">
                    </div>
                    <div id="div_nome" class="form-group">
                        <label class="control-label" for="titulo"><i id="icone_titulo" class="fa"></i> Título</label>
                        <input type="text" autocomplete="off" id="titulo" name="titulo" class="form-control" >
                    </div>
                    <div id="div_nome" class="form-group">
                        <label class="control-label" for="urlImagem"><i id="icone_urlImagem" class="fa"></i> Imagem</label>
                        <input type="file" autocomplete="off" id="urlImagem" name="urlImagem" class="form-control" >
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
	    <h1>Propagandas</h1>
	    <ol class="breadcrumb">
	        <li><a href="#" ><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Propagandas</li>
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
			                <th>Link Externo</th>
			                <th>Criado Por</th>
			                <th><button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarPropaganda" ><i class="fa fa-plus"></i></button></th>
			            </tr>
			        </thead>
			 
			        <tfoot>
			            <tr>
			                <th>#</th>
			                <th>Título</th>
			                <th>Link Externo</th>
			                <th>Criado Por</th>
			                <th><button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarPropaganda" ><i class="fa fa-plus"></i></button></th>
			            </tr>
			        </tfoot>
			    </table>
	        </div>
	    </div>
	</section>

@endsection

@section('scripts')
<script src="/js/dataTables.tableTools.js" type="text/javascript"></script>

<script>

	$('#verImagem').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var datasrc = button.data('src');

        var modal = $(this)
        modal.find('#src').attr('src', datasrc)

    });

	$('#editarPropaganda').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var dataid = button.data('id');
        var datatitulo = button.data('titulo')

        var modal = $(this)
        modal.find('#id').val(dataid)
        modal.find('#titulo').val(datatitulo)

    });

	$('.item').first().addClass("active");

	$('#example').DataTable( {
	  "ajax":"/admin/listarPropagandas" ,
	    "columns": [
	        { data: 'id' },
	        { data: 'titulo' },
	        { data: 'linkView' },
	        { data: 'criadoPor' },
	        { data: 'action' }
	    ],

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