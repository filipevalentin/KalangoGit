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
                    <div id="div_nome_novo_topico" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome_novo_topico" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" onblur="fcn_recarregaCoresNovoTopico();" maxlength="100" class="form-control somenteLetras nomeObrigatorio_novo_topico" >
                    </div>
					<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar btn-novo-topico" value="Salvar" >
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
                    <div id="div_nome_editar_topico" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome_editar_topico" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" onblur="fcn_recarregaCoresEditarTopico();" maxlength="100" class="form-control somenteLetras nomeObrigatorio_editar_topico" >
                    </div>
					<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar btn-editar-topico" value="Salvar" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('maincontent')
	<section class="content-header">
	    <h1>Tópicos de Questões</h1>
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
			                <th>Nº de Questões</th>
			                <th>Status</th>
			                <th><button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarTopico" ><i class="fa fa-plus"></i></button></th>
			            </tr>
			        </thead>
			 
			        <tfoot>
			            <tr>
			                <th>#</th>
			                <th>Nome</th>
			                <th>Nº de Questões</th>
			                <th>Status</th>
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

	function confirmar(){
		if(!(confirm("Deseja realmente apagar este tópico ?"))){
			return false
		}
	}

	$('#example').DataTable( {
	  "ajax":"/admin/listarTopicos" ,
	    "columns": [
	        { data: 'id' },
	        { data: 'nome' },
	        { data: 'numQuestoes' },
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
	
	$( ".somenteLetras" ).keyup(function() {
		//Não ativa função ao clicar tecla direção esquerda e direito, botão apagar e botão deletar
		if(event.keyCode != 37 && event.keyCode != 39 && event.keyCode != 46 && event.keyCode != 8){
			var valor = $(this).val().replace(/[^a-zA-ZãÃáÁàÀâÂéÉèÈêÊíÍìÌîÎõÕóÓòÒôÔúÚùÙûÛÇç ]+/g,'');
			$(this).val(valor);
		}
	});
	
	$(".btn-novo-topico").click(function(event){
		
		var obrigatorioPendente = 0;
		
		if($(".nomeObrigatorio_novo_topico").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_nome_novo_topico" ).removeClass("has-success");
			$( "#icone_nome_novo_topico" ).removeClass("fa-check");
			$( "#div_nome_novo_topico" ).addClass("has-error");
			$( "#icone_nome_novo_topico" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_nome_novo_topico" ).removeClass("has-error");
			$( "#icone_nome_novo_topico" ).removeClass("fa-times-circle-o");
			$( "#div_nome_novo_topico" ).addClass("has-success");
			$( "#icone_nome_novo_topico" ).addClass("fa-check");
		}
		
		if(obrigatorioPendente == 1){
			alert("É necessário preencher todos os campos obrigatórios!");
			return false;
		}
		
	})
	
	$(".btn-editar-topico").click(function(event){
		
		var obrigatorioPendente = 0;
		
		if($(".nomeObrigatorio_editar_topico").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_nome_editar_topico" ).removeClass("has-success");
			$( "#icone_nome_editar_topico" ).removeClass("fa-check");
			$( "#div_nome_editar_topico" ).addClass("has-error");
			$( "#icone_nome_editar_topico" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_nome_editar_topico" ).removeClass("has-error");
			$( "#icone_nome_editar_topico" ).removeClass("fa-times-circle-o");
			$( "#div_nome_editar_topico" ).addClass("has-success");
			$( "#icone_nome_editar_topico" ).addClass("fa-check");
		}
		
		if(obrigatorioPendente == 1){
			alert("É necessário preencher todos os campos obrigatórios!");
			return false;
		}
		
	})
	
	function fcn_recarregaCoresNovoTopico(){
		
		if($(".nomeObrigatorio_novo_topico").val() == ""){
			$( "#div_nome_novo_topico" ).removeClass("has-success");
			$( "#icone_nome_novo_topico" ).removeClass("fa-check");
			$( "#div_nome_novo_topico" ).addClass("has-error");
			$( "#icone_nome_novo_topico" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_nome_novo_topico" ).removeClass("has-error");
			$( "#icone_nome_novo_topico" ).removeClass("fa-times-circle-o");
			$( "#div_nome_novo_topico" ).addClass("has-success");
			$( "#icone_nome_novo_topico" ).addClass("fa-check");
		}
		
	}
	
	function fcn_recarregaCoresEditarTopico(){
		
		if($(".nomeObrigatorio_editar_topico").val() == ""){
			$( "#div_nome_editar_topico" ).removeClass("has-success");
			$( "#icone_nome_editar_topico" ).removeClass("fa-check");
			$( "#div_nome_editar_topico" ).addClass("has-error");
			$( "#icone_nome_editar_topico" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_nome_editar_topico" ).removeClass("has-error");
			$( "#icone_nome_editar_topico" ).removeClass("fa-times-circle-o");
			$( "#div_nome_editar_topico" ).addClass("has-success");
			$( "#icone_nome_editar_topico" ).addClass("fa-check");
		}
		
	}
	
</script>

@endsection