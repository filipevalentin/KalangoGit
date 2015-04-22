@extends('master-admin')

@section('modals')

<div class="modal fade" id="criarEmpresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Nova Empresa</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/criarEmpresa" enctype="multipart/form-data">
                    <div id="div_nome_nova_empresa" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome_nova_empresa" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" onblur="fcn_recarregaCoresNovaEmpresa();" maxlength="100" class="form-control nomeObrigatorio_nova_empresa" >
                    </div>
                    <div id="div_razaosocial_nova_empresa" class="form-group">
                        <label class="control-label" for="razaoSocial"><i id="icone_razaosocial_nova_empresa" class="fa"></i> Razão Social</label>
                        <input type="text" autocomplete="off" id="razaoSocial" name="razaoSocial" onblur="fcn_recarregaCoresNovaEmpresa();" maxlength="100" class="form-control razaosocialObrigatoria_nova_empresa" >
                    </div>
                    <div id="div_cnpj_nova_empresa" class="form-group">
                        <label class="control-label" for="cnpj"><i id="icone_cnpj_nova_empresa" class="fa"></i> CNPJ</label>
                        <input type="text" autocomplete="off" id="cnpj" name="cnpj" onblur="fcn_recarregaCoresNovaEmpresa();" maxlength="100" class="form-control cnpjObrigatorio_nova_empresa" >
                    </div>
					<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar btn-nova-empresa" value="Salvar" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editarEmpresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Editar Empresa</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/atualizarEmpresa" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id" value="">
                    </div>
                    <div id="div_nome_editar_empresa" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome_editar_empresa" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" onblur="fcn_recarregaCoresEditarEmpresa();" maxlength="100" class="form-control nomeObrigatorio_editar_empresa" >
                    </div>
                    <div id="div_razaosocial_editar_empresa" class="form-group">
                        <label class="control-label" for="razaoSocial"><i id="icone_razaoSocial_editar_empresa" class="fa"></i> Razão Social</label>
                        <input type="text" autocomplete="off" id="razaoSocial" name="razaoSocial" onblur="fcn_recarregaCoresEditarEmpresa();" maxlength="100" class="form-control razaoSocialObrigatoria_editar_empresa" >
                    </div>
                    <div id="div_cnpj_editar_empresa" class="form-group">
                        <label class="control-label" for="cnpj"><i id="icone_cnpj_editar_empresa" class="fa"></i> CNPJ</label>
                        <input type="text" autocomplete="off" id="cnpj" name="cnpj" onblur="fcn_recarregaCoresEditarEmpresa();" maxlength="100" class="form-control cnpjObrigatorio_editar_empresa" >
                    </div>
					<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar btn-editar-empresa" value="Salvar" >
                    </div>	
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('maincontent')
	<section class="content-header">
	    <h1>Empresas</h1>
	    <ol class="breadcrumb">
	        <li><a href="/admin/home" ><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Empresas</li>
	    </ol>
	</section>

	<section class="content">
		<div class="row">
	        <div class="col-md-12">
				<table id="example" class="display" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th>Nome</th>
			                <th>Razão Social</th>
			                <th>CNPJ</th>
			                <th>Nº de Propagandas</th>
			                <th><button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarEmpresa" ><i class="fa fa-plus"></i></button></th>
			            </tr>
			        </thead>
			 
			        <tfoot>
			            <tr>
			                <th>Nome</th>
			                <th>Razão Social</th>
			                <th>CNPJ</th>
			                <th>Nº de Propagandas</th>
			                <th><button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarEmpresa" ><i class="fa fa-plus"></i></button></th>
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

	$('#editarEmpresa').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var dataid = button.data('id');
        var datanome = button.data('nome')
        var datarazaosocial = button.data('razaosocial')
        var datacnpj = button.data('cnpj')

        var modal = $(this)
        modal.find('#id').val(dataid)
        modal.find('#nome').val(datanome)
        modal.find('#razaosocial').val(datarazaosocial)
        modal.find('#cnpj').val(datacnpj)

    });


	$('#example').DataTable( {
	  "ajax":"/admin/listarEmpresas" ,
	    "columns": [
	        { data: 'nome' },
	        { data: 'razaoSocial' },
	        { data: 'cnpj' },
	        { data: 'numPropagandas' },
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
	
	$(".btn-nova-empresa").click(function(event){
		
		var obrigatorioPendente = 0;
		
		if($(".nomeObrigatorio_nova_empresa").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_nome_nova_empresa" ).removeClass("has-success");
			$( "#icone_nome_nova_empresa" ).removeClass("fa-check");
			$( "#div_nome_nova_empresa" ).addClass("has-error");
			$( "#icone_nome_nova_empresa" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_nome_nova_empresa" ).removeClass("has-error");
			$( "#icone_nome_nova_empresa" ).removeClass("fa-times-circle-o");
			$( "#div_nome_nova_empresa" ).addClass("has-success");
			$( "#icone_nome_nova_empresa" ).addClass("fa-check");
		}
		
		if($(".razaosocialObrigatoria_nova_empresa").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_razaosocial_nova_empresa" ).removeClass("has-success");
			$( "#icone_razaosocial_nova_empresa" ).removeClass("fa-check");
			$( "#div_razaosocial_nova_empresa" ).addClass("has-error");
			$( "#icone_razaosocial_nova_empresa" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_razaosocial_nova_empresa" ).removeClass("has-error");
			$( "#icone_razaosocial_nova_empresa" ).removeClass("fa-times-circle-o");
			$( "#div_razaosocial_nova_empresa" ).addClass("has-success");
			$( "#icone_razaosocial_nova_empresa" ).addClass("fa-check");
		}
		
		if($(".cnpjObrigatorio_nova_empresa").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_cnpj_nova_empresa" ).removeClass("has-success");
			$( "#icone_cnpj_nova_empresa" ).removeClass("fa-check");
			$( "#div_cnpj_nova_empresa" ).addClass("has-error");
			$( "#icone_cnpj_nova_empresa" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_cnpj_nova_empresa" ).removeClass("has-error");
			$( "#icone_cnpj_nova_empresa" ).removeClass("fa-times-circle-o");
			$( "#div_cnpj_nova_empresa" ).addClass("has-success");
			$( "#icone_cnpj_nova_empresa" ).addClass("fa-check");
		}
		
		if(obrigatorioPendente == 1){
			alert("É necessário preencher todos os campos obrigatórios!");
			return false;
		}
		
	})
	
	$(".btn-editar-empresa").click(function(event){
		
		var obrigatorioPendente = 0;
		
		if($(".nomeObrigatorio_editar_empresa").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_nome_editar_empresa" ).removeClass("has-success");
			$( "#icone_nome_editar_empresa" ).removeClass("fa-check");
			$( "#div_nome_editar_empresa" ).addClass("has-error");
			$( "#icone_nome_editar_empresa" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_nome_editar_empresa" ).removeClass("has-error");
			$( "#icone_nome_editar_empresa" ).removeClass("fa-times-circle-o");
			$( "#div_nome_editar_empresa" ).addClass("has-success");
			$( "#icone_nome_editar_empresa" ).addClass("fa-check");
		}
		
		if($(".razaoSocialObrigatoria_editar_empresa").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_razaosocial_editar_empresa" ).removeClass("has-success");
			$( "#icone_razaoSocial_editar_empresa" ).removeClass("fa-check");
			$( "#div_razaosocial_editar_empresa" ).addClass("has-error");
			$( "#icone_razaoSocial_editar_empresa" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_razaosocial_editar_empresa" ).removeClass("has-error");
			$( "#icone_razaoSocial_editar_empresa" ).removeClass("fa-times-circle-o");
			$( "#div_razaosocial_editar_empresa" ).addClass("has-success");
			$( "#icone_razaoSocial_editar_empresa" ).addClass("fa-check");
		}
		
		if($(".cnpjObrigatorio_editar_empresa").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_cnpj_editar_empresa" ).removeClass("has-success");
			$( "#icone_cnpj_editar_empresa" ).removeClass("fa-check");
			$( "#div_cnpj_editar_empresa" ).addClass("has-error");
			$( "#icone_cnpj_editar_empresa" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_cnpj_editar_empresa" ).removeClass("has-error");
			$( "#icone_cnpj_editar_empresa" ).removeClass("fa-times-circle-o");
			$( "#div_cnpj_editar_empresa" ).addClass("has-success");
			$( "#icone_cnpj_editar_empresa" ).addClass("fa-check");
		}
		
		if(obrigatorioPendente == 1){
			alert("É necessário preencher todos os campos obrigatórios!");
			return false;
		}
		
	})
	
	function fcn_recarregaCoresNovaEmpresa(){
		
		if($(".nomeObrigatorio_nova_empresa").val() == ""){
			$( "#div_nome_nova_empresa" ).removeClass("has-success");
			$( "#icone_nome_nova_empresa" ).removeClass("fa-check");
			$( "#div_nome_nova_empresa" ).addClass("has-error");
			$( "#icone_nome_nova_empresa" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_nome_nova_empresa" ).removeClass("has-error");
			$( "#icone_nome_nova_empresa" ).removeClass("fa-times-circle-o");
			$( "#div_nome_nova_empresa" ).addClass("has-success");
			$( "#icone_nome_nova_empresa" ).addClass("fa-check");
		}
		
		if($(".razaosocialObrigatoria_nova_empresa").val() == ""){
			$( "#div_razaosocial_nova_empresa" ).removeClass("has-success");
			$( "#icone_razaosocial_nova_empresa" ).removeClass("fa-check");
			$( "#div_razaosocial_nova_empresa" ).addClass("has-error");
			$( "#icone_razaosocial_nova_empresa" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_razaosocial_nova_empresa" ).removeClass("has-error");
			$( "#icone_razaosocial_nova_empresa" ).removeClass("fa-times-circle-o");
			$( "#div_razaosocial_nova_empresa" ).addClass("has-success");
			$( "#icone_razaosocial_nova_empresa" ).addClass("fa-check");
		}
		
		if($(".cnpjObrigatorio_nova_empresa").val() == ""){
			$( "#div_cnpj_nova_empresa" ).removeClass("has-success");
			$( "#icone_cnpj_nova_empresa" ).removeClass("fa-check");
			$( "#div_cnpj_nova_empresa" ).addClass("has-error");
			$( "#icone_cnpj_nova_empresa" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_cnpj_nova_empresa" ).removeClass("has-error");
			$( "#icone_cnpj_nova_empresa" ).removeClass("fa-times-circle-o");
			$( "#div_cnpj_nova_empresa" ).addClass("has-success");
			$( "#icone_cnpj_nova_empresa" ).addClass("fa-check");
		}
		
	}
	
	function fcn_recarregaCoresEditarEmpresa(){
		
		if($(".nomeObrigatorio_editar_empresa").val() == ""){
			$( "#div_nome_editar_empresa" ).removeClass("has-success");
			$( "#icone_nome_editar_empresa" ).removeClass("fa-check");
			$( "#div_nome_editar_empresa" ).addClass("has-error");
			$( "#icone_nome_editar_empresa" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_nome_editar_empresa" ).removeClass("has-error");
			$( "#icone_nome_editar_empresa" ).removeClass("fa-times-circle-o");
			$( "#div_nome_editar_empresa" ).addClass("has-success");
			$( "#icone_nome_editar_empresa" ).addClass("fa-check");
		}
		
		if($(".razaoSocialObrigatoria_editar_empresa").val() == ""){
			$( "#div_razaosocial_editar_empresa" ).removeClass("has-success");
			$( "#icone_razaoSocial_editar_empresa" ).removeClass("fa-check");
			$( "#div_razaosocial_editar_empresa" ).addClass("has-error");
			$( "#icone_razaoSocial_editar_empresa" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_razaosocial_editar_empresa" ).removeClass("has-error");
			$( "#icone_razaoSocial_editar_empresa" ).removeClass("fa-times-circle-o");
			$( "#div_razaosocial_editar_empresa" ).addClass("has-success");
			$( "#icone_razaoSocial_editar_empresa" ).addClass("fa-check");
		}
		
		if($(".cnpjObrigatorio_editar_empresa").val() == ""){
			$( "#div_cnpj_editar_empresa" ).removeClass("has-success");
			$( "#icone_cnpj_editar_empresa" ).removeClass("fa-check");
			$( "#div_cnpj_editar_empresa" ).addClass("has-error");
			$( "#icone_cnpj_editar_empresa" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_cnpj_editar_empresa" ).removeClass("has-error");
			$( "#icone_cnpj_editar_empresa" ).removeClass("fa-times-circle-o");
			$( "#div_cnpj_editar_empresa" ).addClass("has-success");
			$( "#icone_cnpj_editar_empresa" ).addClass("fa-check");
		}
				
	}
	
</script>

@endsection