@extends('master-admin')

@section('modals')

<div class="modal fade" id="verImagem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Imagem da Propaganda</h4>
            </div>
            <div class="modal-body">
                <img id="src" class="img-responsive" src="" alt="" style="margin:auto;">
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
                	<div id="div_empresa_nova_propaganda" class="form-group">
                        <label class="control-label" for="empresa"><i id="icone_empresa_nova_propaganda" class="fa"></i> Empresa</label>
                        <select id="idempresa" name="idEmpresa" onblur="fcn_recarregaCoresNovaPropaganda();" class="form-control empresaObrigatoria_nova_propaganda">
                        <option value="" >Selecione</option>
						@foreach(Empresa::all() as $empresa)
                            <option value="{{$empresa->id}}">{{$empresa->nome}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div id="div_titulo_nova_propaganda" class="form-group">
                        <label class="control-label" for="titulo"><i id="icone_titulo_nova_propaganda" class="fa"></i> Título</label>
                        <input type="text" autocomplete="off" id="titulo" name="titulo" maxlength="100" onblur="fcn_recarregaCoresNovaPropaganda();" class="form-control tituloObrigatorio_nova_propaganda" >
                    </div>
                    <div id="div_link_nova_propaganda" class="form-group">
                        <label class="control-label" for="titulo"><i id="icone_link_nova_propaganda" class="fa"></i> Link Externo</label>
                        <input type="text" autocomplete="off" id="link" name="link" maxlength="200" value="http://" onblur="fcn_recarregaCoresNovaPropaganda();fcn_validaLink(this.value, 1);" class="form-control linkObrigatorio_nova_propaganda" >
                    </div>
                    <div id="div_imagem_nova_propaganda" class="form-group">
                        <label class="control-label" for="urlImagem"><i id="icone_imagem_nova_propaganda" class="fa"></i> Imagem</label>
                        <input type="file" autocomplete="off" id="urlImagem" name="urlImagem" onblur="fcn_recarregaCoresNovaPropaganda();fcn_validaArquivoNovaPropaganda(this.form, this.form.urlImagem.value);" class="form-control campo_imagem_nova_propaganda imagemObrigatoria_nova_propaganda" >
                    </div>
					<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar-nova-propaganda" value="Salvar" >
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
                    <div id="div_professor-editar-turma" class="form-group">
                        <label class="control-label" for="empresa"><i id="icone_empresa-editar-turma" class="fa"></i> Empresa</label>
                        <select id="idempresa" name="idEmpresa" onblur="fcn_recarregaCoresEditarTurma();" class="form-control">
                        <option value="" >Selecione</option>
						@foreach(Empresa::all() as $empresa)
                            <option value="{{$empresa->id}}">{{$empresa->nome}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div id="div_titulo_editar_propaganda" class="form-group">
                        <label class="control-label" for="titulo"><i id="icone_titulo_editar_propaganda" class="fa"></i> Título</label>
                        <input type="text" autocomplete="off" maxlength="100" id="titulo" name="titulo" onblur="fcn_recarregaCoresEditarPropaganda();" class="form-control tituloObrigatorio_editar_propaganda" >
                    </div>
                    <div id="div_link_editar_propaganda" class="form-group">
                        <label class="control-label" for="titulo"><i id="icone_link_editar_propaganda" class="fa"></i> Link Externo</label>
                        <input type="text" autocomplete="off" id="link" name="link"maxlength="200" onblur="fcn_recarregaCoresEditarPropaganda();fcn_validaLink(this.value, 2);" maxlength="200" class="form-control linkObrigatorio_editar_propaganda" >
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="urlImagem"><i class="fa"></i> Imagem</label>
                        <input type="file" autocomplete="off" id="urlImagem" name="urlImagem" onblur="fcn_recarregaCoresEditarPropaganda();fcn_validaArquivoEditarPropaganda(this.form, this.form.urlImagem.value);" class="form-control campo_imagem_editar_propaganda" >
                    </div>
					<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar-editar-propaganda" value="Salvar" >
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
	        <li><a href="/admin/home" ><i class="fa fa-dashboard"></i> Home</a></li>
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
			                <th>Empresa</th>
			                <th>Link Externo</th>
			                <th>Criado Por</th>
			                <th><button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarPropaganda" ><i class="fa fa-plus"></i></button></th>
			            </tr>
			        </thead>
			 
			        <tfoot>
			            <tr>
			                <th>#</th>
			                <th>Título</th>
			                <th>Empresa</th>
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
<script src="{{ URL::asset('/js/dataTables.tableTools.js') }}" type="text/javascript"></script>

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
        var datalink = button.data('link')
        var dataidempresa = button.data('idempresa');

        var modal = $(this)
        modal.find('#id').val(dataid)
        modal.find('#titulo').val(datatitulo)
        modal.find('#link').val(datalink)
        modal.find('#idempresa').val(dataidempresa)

    });

	$('.item').first().addClass("active");

	$('#example').DataTable( {
	  "ajax":"/admin/listarPropagandas" ,
	    "columns": [
	        { data: 'id' },
	        { data: 'titulo' },
	        { data: 'empresa' },
	        { data: 'linkView' },
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

<script> //validações
	
	$(".btn-salvar-nova-propaganda").click(function(event){
	
		var obrigatorioPendente = 0;
		
		if($(".empresaObrigatoria_nova_propaganda").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_empresa_nova_propaganda" ).removeClass("has-success");
			$( "#icone_empresa_nova_propaganda" ).removeClass("fa-check");
			$( "#div_empresa_nova_propaganda" ).addClass("has-error");
			$( "#icone_empresa_nova_propaganda" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_empresa_nova_propaganda" ).removeClass("has-error");
			$( "#icone_empresa_nova_propaganda" ).removeClass("fa-times-circle-o");
			$( "#div_empresa_nova_propaganda" ).addClass("has-success");
			$( "#icone_empresa_nova_propaganda" ).addClass("fa-check");
		}
		
		if($(".tituloObrigatorio_nova_propaganda").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_titulo_nova_propaganda" ).removeClass("has-success");
			$( "#icone_titulo_nova_propaganda" ).removeClass("fa-check");
			$( "#div_titulo_nova_propaganda" ).addClass("has-error");
			$( "#icone_titulo_nova_propaganda" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_titulo_nova_propaganda" ).removeClass("has-error");
			$( "#icone_titulo_nova_propaganda" ).removeClass("fa-times-circle-o");
			$( "#div_titulo_nova_propaganda" ).addClass("has-success");
			$( "#icone_titulo_nova_propaganda" ).addClass("fa-check");
		}
		
		if($(".linkObrigatorio_nova_propaganda").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_link_nova_propaganda" ).removeClass("has-success");
			$( "#icone_link_nova_propaganda" ).removeClass("fa-check");
			$( "#div_link_nova_propaganda" ).addClass("has-error");
			$( "#icone_link_nova_propaganda" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_link_nova_propaganda" ).removeClass("has-error");
			$( "#icone_link_nova_propaganda" ).removeClass("fa-times-circle-o");
			$( "#div_link_nova_propaganda" ).addClass("has-success");
			$( "#icone_link_nova_propaganda" ).addClass("fa-check");
		}
		
		if($(".imagemObrigatoria_nova_propaganda").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_imagem_nova_propaganda" ).removeClass("has-success");
			$( "#icone_imagem_nova_propaganda" ).removeClass("fa-check");
			$( "#div_imagem_nova_propaganda" ).addClass("has-error");
			$( "#icone_imagem_nova_propaganda" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_imagem_nova_propaganda" ).removeClass("has-error");
			$( "#icone_imagem_nova_propaganda" ).removeClass("fa-times-circle-o");
			$( "#div_imagem_nova_propaganda" ).addClass("has-success");
			$( "#icone_imagem_nova_propaganda" ).addClass("fa-check");
		}
		
		if(obrigatorioPendente == 1){
			alert("É necessário preencher todos os campos obrigatórios!");
			return false;
		}
		
	})
	
	$(".btn-salvar-editar-propaganda").click(function(event){
	
		var obrigatorioPendente = 0;
		
		if($(".tituloObrigatorio_editar_propaganda").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_titulo_editar_propaganda" ).removeClass("has-success");
			$( "#icone_titulo_editar_propaganda" ).removeClass("fa-check");
			$( "#div_titulo_editar_propaganda" ).addClass("has-error");
			$( "#icone_titulo_editar_propaganda" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_titulo_editar_propaganda" ).removeClass("has-error");
			$( "#icone_titulo_editar_propaganda" ).removeClass("fa-times-circle-o");
			$( "#div_titulo_editar_propaganda" ).addClass("has-success");
			$( "#icone_titulo_editar_propaganda" ).addClass("fa-check");
		}
		
		if($(".linkObrigatorio_editar_propaganda").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_link_editar_propaganda" ).removeClass("has-success");
			$( "#icone_link_editar_propaganda" ).removeClass("fa-check");
			$( "#div_link_editar_propaganda" ).addClass("has-error");
			$( "#icone_link_editar_propaganda" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_link_editar_propaganda" ).removeClass("has-error");
			$( "#icone_link_editar_propaganda" ).removeClass("fa-times-circle-o");
			$( "#div_link_editar_propaganda" ).addClass("has-success");
			$( "#icone_link_editar_propaganda" ).addClass("fa-check");
		}
		
		if($(".imagemObrigatoria_nova_propaganda").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_imagem_editar_propaganda" ).removeClass("has-success");
			$( "#icone_imagem_editar_propaganda" ).removeClass("fa-check");
			$( "#div_imagem_editar_propaganda" ).addClass("has-error");
			$( "#icone_imagem_editar_propaganda" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_imagem_editar_propaganda" ).removeClass("has-error");
			$( "#icone_imagem_editar_propaganda" ).removeClass("fa-times-circle-o");
			$( "#div_imagem_editar_propaganda" ).addClass("has-success");
			$( "#icone_imagem_editar_propaganda" ).addClass("fa-check");
		}
		
		if(obrigatorioPendente == 1){
			alert("É necessário preencher todos os campos obrigatórios!");
			return false;
		}
		
	})
	
	function fcn_recarregaCoresNovaPropaganda(){
		
		if($(".empresaObrigatoria_nova_propaganda").val() == ""){
			$( "#div_empresa_nova_propaganda" ).removeClass("has-success");
			$( "#icone_empresa_nova_propaganda" ).removeClass("fa-check");
			$( "#div_empresa_nova_propaganda" ).addClass("has-error");
			$( "#icone_empresa_nova_propaganda" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_empresa_nova_propaganda" ).removeClass("has-error");
			$( "#icone_empresa_nova_propaganda" ).removeClass("fa-times-circle-o");
			$( "#div_empresa_nova_propaganda" ).addClass("has-success");
			$( "#icone_empresa_nova_propaganda" ).addClass("fa-check");
		}
		
		if($(".tituloObrigatorio_nova_propaganda").val() == ""){
			$( "#div_titulo_nova_propaganda" ).removeClass("has-success");
			$( "#icone_titulo_nova_propaganda" ).removeClass("fa-check");
			$( "#div_titulo_nova_propaganda" ).addClass("has-error");
			$( "#icone_titulo_nova_propaganda" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_titulo_nova_propaganda" ).removeClass("has-error");
			$( "#icone_titulo_nova_propaganda" ).removeClass("fa-times-circle-o");
			$( "#div_titulo_nova_propaganda" ).addClass("has-success");
			$( "#icone_titulo_nova_propaganda" ).addClass("fa-check");
		}
		
		if($(".linkObrigatorio_nova_propaganda").val() == ""){
			$( "#div_link_nova_propaganda" ).removeClass("has-success");
			$( "#icone_link_nova_propaganda" ).removeClass("fa-check");
			$( "#div_link_nova_propaganda" ).addClass("has-error");
			$( "#icone_link_nova_propaganda" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_link_nova_propaganda" ).removeClass("has-error");
			$( "#icone_link_nova_propaganda" ).removeClass("fa-times-circle-o");
			$( "#div_link_nova_propaganda" ).addClass("has-success");
			$( "#icone_link_nova_propaganda" ).addClass("fa-check");
		}
		
		if($(".imagemObrigatoria_nova_propaganda").val() == ""){
			$( "#div_imagem_nova_propaganda" ).removeClass("has-success");
			$( "#icone_imagem_nova_propaganda" ).removeClass("fa-check");
			$( "#div_imagem_nova_propaganda" ).addClass("has-error");
			$( "#icone_imagem_nova_propaganda" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_imagem_nova_propaganda" ).removeClass("has-error");
			$( "#icone_imagem_nova_propaganda" ).removeClass("fa-times-circle-o");
			$( "#div_imagem_nova_propaganda" ).addClass("has-success");
			$( "#icone_imagem_nova_propaganda" ).addClass("fa-check");
		}
		
	}
	
	function fcn_recarregaCoresEditarPropaganda(){
		
		if($(".tituloObrigatorio_editar_propaganda").val() == ""){
			$( "#div_titulo_editar_propaganda" ).removeClass("has-success");
			$( "#icone_titulo_editar_propaganda" ).removeClass("fa-check");
			$( "#div_titulo_editar_propaganda" ).addClass("has-error");
			$( "#icone_titulo_editar_propaganda" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_titulo_editar_propaganda" ).removeClass("has-error");
			$( "#icone_titulo_editar_propaganda" ).removeClass("fa-times-circle-o");
			$( "#div_titulo_editar_propaganda" ).addClass("has-success");
			$( "#icone_titulo_editar_propaganda" ).addClass("fa-check");
		}
		
		if($(".linkObrigatorio_editar_propaganda").val() == ""){
			$( "#div_link_editar_propaganda" ).removeClass("has-success");
			$( "#icone_link_editar_propaganda" ).removeClass("fa-check");
			$( "#div_link_editar_propaganda" ).addClass("has-error");
			$( "#icone_link_editar_propaganda" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_link_editar_propaganda" ).removeClass("has-error");
			$( "#icone_link_editar_propaganda" ).removeClass("fa-times-circle-o");
			$( "#div_link_editar_propaganda" ).addClass("has-success");
			$( "#icone_link_editar_propaganda" ).addClass("fa-check");
		}
		
		if($(".imagemObrigatoria_nova_propaganda").val() == ""){
			$( "#div_imagem_editar_propaganda" ).removeClass("has-success");
			$( "#icone_imagem_editar_propaganda" ).removeClass("fa-check");
			$( "#div_imagem_editar_propaganda" ).addClass("has-error");
			$( "#icone_imagem_editar_propaganda" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_imagem_editar_propaganda" ).removeClass("has-error");
			$( "#icone_imagem_editar_propaganda" ).removeClass("fa-times-circle-o");
			$( "#div_imagem_editar_propaganda" ).addClass("has-success");
			$( "#icone_imagem_editar_propaganda" ).addClass("fa-check");
		}
		
	}
	
	function fcn_validaArquivoNovaPropaganda(formulario, arquivo) { 
		
		if(arquivo != ""){
			extensoes_permitidas = new Array(".jpg", ".png", ".jpeg"); 
			meuerro = ""; 
			 
			extensao = (arquivo.substring(arquivo.lastIndexOf("."))).toLowerCase(); 
			permitida = false; 
			for (var i = 0; i < extensoes_permitidas.length; i++) { 
				if (extensoes_permitidas[i] == extensao) { 
					permitida = true; 
					break; 
				} 
			} 
			
			if (permitida == false) { 
				alert("Verifique a extensão do arquivo anexado. \n\nAs extensões permitidas são: " + extensoes_permitidas.join()); 
				$('.campo_imagem_nova_propaganda').val("");
				return 1;
				
			}
			 
			return 0; 
		}
	}
	
	function fcn_validaArquivoEditarPropaganda(formulario, arquivo) { 
		
		if(arquivo != ""){
			extensoes_permitidas = new Array(".jpg", ".png", ".jpeg"); 
			meuerro = ""; 
			 
			extensao = (arquivo.substring(arquivo.lastIndexOf("."))).toLowerCase(); 
			permitida = false; 
			for (var i = 0; i < extensoes_permitidas.length; i++) { 
				if (extensoes_permitidas[i] == extensao) { 
					permitida = true; 
					break; 
				} 
			} 
			
			if (permitida == false) { 
				alert("Verifique a extensão do arquivo anexado. \n\nAs extensões permitidas são: " + extensoes_permitidas.join()); 
				$('.campo_imagem_editar_propaganda').val("");
				return 1;
				
			}
			 
			return 0; 
		}
	}
	
	function fcn_validaLink(pstr_link, pint_entrada){
		if(pstr_link != ""){
			if (pstr_link.substring(0, 7) != "http://"){
				
				alert("Link deverá começar sempre com 'http://'"); 
				
				if(pint_entrada == "1"){
					$('.linkObrigatorio_nova_propaganda').focus();
				}
				
				if(pint_entrada == "2"){
					$('.linkObrigatorio_editar_propaganda').focus();
				}
				
			}
		}
	}
	
</script>
	
@endsection