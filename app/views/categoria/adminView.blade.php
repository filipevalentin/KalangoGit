@extends('master-admin')

@section('modals')

<div class="modal fade" id="editarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Editar Categoria</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/atualizarCategoria">
                    <div class="form-group">
                        <input type="hidden" id="id" name="id" class="form-control"></textarea>
                    </div>

                    <div id="div_nome-editar-categoria" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome-editar-categoria" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" onblur="fcn_recarregaCoresEditarCategoria();" maxlength="50" class="form-control somenteLetras nomeObrigatorio-editar-categoria"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar-editar-categoria" value="Salvar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('maincontent')
	<section class="content-header">
	    <h1>Categorias de Ativ. Extras</h1>
	    <ol class="breadcrumb">
		    <?php
		    	$aux2 = Session::get('bc');
		    ?>
	    	@foreach($aux2 as $b)
	        	<li><a href="{{$b['link']}}" >{{$b['nome']}}</a></li>
			@endforeach
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
			                <th>Nº de Ativ. Extras</th>
			                <th>Status</th>
			                <th>Ação</th>
			            </tr>
			        </thead>
			 
			        <tfoot>
			            <tr>
			                <th>#</th>
			                <th>Nome</th>
			                <th>Nº de Ativ. Extras</th>
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

	$('#editarCategoria').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var dataid = button.data('id')
        var datanome = button.data('nome')

        var modal = $(this)
        modal.find('#id').val(dataid)
        modal.find('#nome').val(datanome)
        })

	$('.item').first().addClass("active");

	$('#example').DataTable( {
	  "ajax":"/admin/listarCategorias" ,
	    "columns": [
	        { data: 'id' },
	        { data: 'nome' },
	        { data: 'atividades2' },
	        { data: 'excluido' },
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

<script> //Validações
	
	$(".btn-salvar-editar-categoria").click(function(event){
		
		var obrigatorioPendente = 0;
		
		if($(".nomeObrigatorio-editar-categoria").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_nome-editar-categoria" ).removeClass("has-success");
			$( "#icone_nome-editar-categoria" ).removeClass("fa-check");
			$( "#div_nome-editar-categoria" ).addClass("has-error");
			$( "#icone_nome-editar-categoria" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_nome-editar-categoria" ).removeClass("has-error");
			$( "#icone_nome-editar-categoria" ).removeClass("fa-times-circle-o");
			$( "#div_nome-editar-categoria" ).addClass("has-success");
			$( "#icone_nome-editar-categoria" ).addClass("fa-check");
		}
		
		if(obrigatorioPendente == 1){
			alert("É necessário preencher todos os campos obrigatórios!");
			return false;
		}
		
	})
	
	function fcn_recarregaCoresEditarCategoria(){
		
		if($(".nomeObrigatorio-editar-categoria").val() == ""){
			$( "#div_nome-editar-categoria" ).removeClass("has-success");
			$( "#icone_nome-editar-categoria" ).removeClass("fa-check");
			$( "#div_nome-editar-categoria" ).addClass("has-error");
			$( "#icone_nome-editar-categoria" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_nome-editar-categoria" ).removeClass("has-error");
			$( "#icone_nome-editar-categoria" ).removeClass("fa-times-circle-o");
			$( "#div_nome-editar-categoria" ).addClass("has-success");
			$( "#icone_nome-editar-categoria" ).addClass("fa-check");
		}
		
	}
	
</script>

@endsection