@extends('master-admin')

@section('css')
	<link rel="stylesheet" type="text/css" href="/plugins/bootstrap-select/css/bootstrap-select.css">
@endsection

@section('modals')

<link rel="stylesheet" href="../plugins/jQueryUI/calendario/jquery-ui.css">
<script src="../plugins/jQuery/jQuery-2.1.3.min.js"></script>
<script>
  
  $(function() {
    $( ".dataExpiracaoObrigatoria_novo_aviso" ).datepicker({
		dateFormat: 'dd/mm/yy',
		dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
		dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
		dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
		monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
		monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
		nextText: 'Próximo',
		prevText: 'Anterior',
		changeMonth: true,
		changeYear: true,
		yearRange: "-100:+0"
	});
  });
  
  $(function() {
    $( ".dataExpiracaoObrigatoria_editar_aviso" ).datepicker({
		dateFormat: 'dd/mm/yy',
		dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
		dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
		dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
		monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
		monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
		nextText: 'Próximo',
		prevText: 'Anterior',
		changeMonth: true,
		changeYear: true,
		yearRange: "-100:+0"
	});
  });
  
</script>

<div class="modal fade" id="criarAviso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Novo Aviso</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/criarAviso" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="tipo" name="tipo" value="1">
                    </div>
                    <div id="div_titulo_novo_aviso" class="form-group">
                        <label class="control-label" for="titulo"><i id="icone_titulo_novo_aviso" class="fa"></i> Titulo</label>
                        <input type="text" autocomplete="off" maxlength="100" id="titulo" name="titulo" onblur="fcn_recarregaCores_novo_aviso();" class="form-control tituloObrigatorio_novo_aviso" >
                    </div>
                    <div id="div_descricao_novo_aviso" class="form-group">
                        <label class="control-label" for="descricao"><i id="icone_descricao_novo_aviso" class="fa"></i> Descrição</label>
                        <textarea autocomplete="off" maxlength="8000" id="descricao" name="descricao" onblur="fcn_recarregaCores_novo_aviso();" class="form-control descricaoObrigatoria_novo_aviso"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="urlImagem" class="control-label">Imagem</label>
                        <input type="file" id="urlImagem" name="urlImagem" maxlength="200" onblur="fcn_validaArquivoNovoAviso(this.form, this.form.urlImagem.value);" class="form-control campo_imagem_novo_aviso">
                    </div>
                    <div id="div_dataExpiracao_novo_aviso" class="form-group">
                        <label class="control-label" for="dataExpiracao"><i id="icone_dataExpiracao_novo_aviso" class="fa"></i> Data de Expiração</label>
                        <input type="text" readonly autocomplete="off" id="dataExpiracao" name="dataExpiracao" onblur="fcn_recarregaCores_novo_aviso();" class="form-control dataExpiracaoObrigatoria_novo_aviso">
					</div>
					<div class="form-group">
                        <label class="control-label" for="enviarPara">Enviar para:</label>
                        <select type="text" id="idTurma" name="idTurma[]" data-live-search="true" data-selected-text-format="count > 5" data-size="5"onblur="fcn_recarregaCores_novo_aviso();" class="form-control selectjs" multiple title='Escolha as turmas...'>
                        	<option value="todos">Todas as turmas</option>
							@foreach(Curso::all() as $curso)
							<optgroup label="{{$curso->idioma->nome}} - {{$curso->nome}}">
								@foreach($curso->turmas as $turma)
                        		<option value="{{$turma->id}}">{{$turma->modulo->nome}} - {{$turma->nome}}</option>
                        		@endforeach
                        	</optgroup>
                        	@endforeach	
                        </select>
					</div>
					<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar-novo-aviso" value="Salvar" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editarAviso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Editar Aviso</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/atualizarAviso" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id" value="">
                    </div>
                    <div id="div_titulo_editar_aviso" class="form-group">
                        <label class="control-label" for="titulo"><i id="icone_titulo_editar_aviso" class="fa"></i> Titulo</label>
                        <input type="text" autocomplete="off" onblur="fcn_recarregaCores_editar_aviso();" maxlength="100" id="titulo" name="titulo" class="form-control tituloObrigatorio_editar_aviso" >
                    </div>
                    <div id="div_descricao_editar_aviso" class="form-group">
                        <label class="control-label" for="descricao"><i id="icone_descricao_editar_aviso" class="fa"></i> Descrição</label>
                        <textarea autocomplete="off" onblur="fcn_recarregaCores_editar_aviso();" maxlength="8000" id="descricao" name="descricao" class="form-control descricaoObrigatoria_editar_aviso"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="urlImagem" class="control-label">Imagem</label>
                        <input type="file" id="urlImagem" name="urlImagem" maxlength="200" onblur="fcn_validaArquivoEditarAviso(this.form, this.form.urlImagem.value);" class="form-control campo_imagem_editar_aviso">
                    </div>
                    <div id="div_dataExpiracao_editar_aviso" class="form-group">
                        <label class="control-label" for="dataExpiracao"><i id="icone_dataExpiracao_editar_aviso" class="fa"></i> Data de Expiração</label>
                        <input type="text" readonly autocomplete="off" onblur="fcn_recarregaCores_editar_aviso();" id="dataExpiracaoEditar" name="dataExpiracao" class="form-control dataExpiracaoObrigatoria_editar_aviso">
					</div>
					<div class="form-group">
                        <label class="control-label" for="enviarPara">Enviar para:</label>
                        <select type="text" id="idTurma" name="idTurma[]" data-live-search="true" data-selected-text-format="count > 5" data-size="5"onblur="fcn_recarregaCores_novo_aviso();" class="form-control selectjs" multiple title='Escolha as turmas...'>
                        	<option value="todos">Todas as turmas</option>
							@foreach(Curso::all() as $curso)
							<optgroup label="{{$curso->idioma->nome}} - {{$curso->nome}}">
								@foreach($curso->turmas as $turma)
                        		<option value="{{$turma->id}}">{{$turma->modulo->nome}} - {{$turma->nome}}</option>
                        		@endforeach
                        	</optgroup>
                        	@endforeach	
                        </select>
					</div>
					<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar-editar-aviso" value="Salvar" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('maincontent')
	<section class="content-header">
	    <h1>Avisos</h1>
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
				<div class="box box-solid">
	                <div class="box-header">
	                    <h3 class="box-title">Filtre os avisos por Turma</h3>
	                </div><!-- /.box-header -->
	                <div class="box-body">
	                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	                        <div class="carousel-inner">

	                        @for($i=0; $i <= (int)($categorias->count()/5); $i++)

	                            <div class="item">

	                            @for($j=4*$i; $j<4*$i+4 && $j<($categorias->count()); $j++)

	                                <div class="col-sm-3">
	                                    <div class="box-body">
	                                        <div class="small-box bg-blue">
	                                            <div class="inner">
	                                                <div class="curso" style="cursor:pointer;" id="{{$categorias[$j]->id}}">
	                                                    <h4 style="font-size: 20px;">{{$categorias[$j]->nome}} @if($j!=4*$i) - {{$categorias[$j]->modulo->curso->nome}} @endif</h4>
	                                                    <p style="margin:0px;">  </p>
	                                                </div>
	                                            </div>

	                                            <a href="#" class="small-box-footer"></a>
	                                        </div>
	                                    </div>
	                                </div>

	                            @endfor

	                            </div>
	                        @endfor

	                        </div>
	                    
	                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev" style="background-image:none; width:3%;"><span class="glyphicon glyphicon-chevron-left"></span></a>
	                        
	                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next" style="background-image:none; width:3%;"><span class="glyphicon glyphicon-chevron-right"></span></a>

	                    </div>
	                </div> <!-- /.box-body -->
	            </div>
	        </div>

	        <div class="col-md-12">
				<table id="example" class="display" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th>#</th>
			                <th>Titulo</th>
			                <th>Data Expiração</th>
			                <th>Enviado para</th>
			                <th>Criado Por</th>
			                <th><button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarAviso" ><i class="fa fa-plus"></i></button></th>
			            </tr>
			        </thead>
			 
			        <tfoot>
			            <tr>
			                <th>#</th>
			                <th>Titulo</th>
			                <th>Data Expiração</th>
			                 <th>Enviado para</th>
			                <th>Criado Por</th>
			                <th><button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarAviso" ><i class="fa fa-plus"></i></button></th>
			            </tr>
			        </tfoot>
			    </table>
	        </div>
	    </div>
	</section>

@endsection

@section('scripts')
<script src="{{ URL::asset('/js/dataTables.tableTools.js') }}" type="text/javascript"></script>
<script src="/js/moment.min.js" type="text/javascript"></script>
<script src="/js/datetime-moment.js" type="text/javascript"></script>
<script src="/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<script>

	$('.curso').on('click', function (event){
		var table = $('#example').DataTable();
		table.ajax.url( '/admin/listarAvisos/'+$(this).attr('id') ).load();
	});

	$('.selectjs').selectpicker();

	$('.selectjs').change(function(){
		var select = $(this);
		if(select.find('option:first').is(':checked')){
			select.find('option').not('option:first').attr('disabled', true).attr('selected', false);
			select.selectpicker('refresh');
		}else{
			select.find('option').not('.selectjs option:first').attr('disabled', false);
			select.selectpicker('refresh');
		}
	});

	$('#editarAviso').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var dataid = button.data('id');
        var datatitulo = button.data('titulo');
        var datadescricao = button.data('descricao')
        var datadataexpiracao = button.data('dataexpiracao')
        var dataidturma = String(button.data('idturma'));


        var modal = $(this)
        modal.find('#id').val(dataid)
        modal.find('#titulo').val(datatitulo)
        modal.find('#descricao').val(datadescricao)
        modal.find('#dataExpiracaoEditar').val(datadataexpiracao)

        if(dataidturma != "todos"){
        	var turmas = dataidturma.split(',');
        	modal.find('#idTurma').val(dataidturma);
        }else{
        	modal.find('#idTurma').val(dataidturma);
        }

        modal.find( ".selectjs" ).trigger( "change" );
        

    });

    function confirmar(){
		if(!(confirm("Deseja realmente apagar este aviso?"))){
			return false
		}
	}

	$('.item').first().addClass("active");

	$(document).ready(function() {
	    $.fn.dataTable.moment( 'DD/MM/YYYY' );

	    $('#example').DataTable( {
		  "ajax":"/admin/listarAvisos" ,
		    "columns": [
		        { data: 'id' },
		        { data: 'titulo' },
		        { data: 'dataExpiracao' },
		        { data: 'enviadoPara'},
		        { data: 'criadoPor' },
		        { data: 'action' }
		    ],

		    "scrollX": true,

			"columnDefs": [ 
				{
			      "targets": 5,
			      "orderable": false,
			      "searchable": false,
			    }
			],

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
	 
	} );


</script>

<script> //validações
	
	$(".btn-salvar-novo-aviso").click(function(event){
		
		fcn_validaDtExpiracao_Novo_Aviso($(".dataExpiracaoObrigatoria_novo_aviso").val());
		
		var obrigatorioPendente = 0;
		
		if($(".tituloObrigatorio_novo_aviso").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_titulo_novo_aviso" ).removeClass("has-success");
			$( "#icone_titulo_novo_aviso" ).removeClass("fa-check");
			$( "#div_titulo_novo_aviso" ).addClass("has-error");
			$( "#icone_titulo_novo_aviso" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_titulo_novo_aviso" ).removeClass("has-error");
			$( "#icone_titulo_novo_aviso" ).removeClass("fa-times-circle-o");
			$( "#div_titulo_novo_aviso" ).addClass("has-success");
			$( "#icone_titulo_novo_aviso" ).addClass("fa-check");
		}
		
		if($(".descricaoObrigatoria_novo_aviso").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_descricao_novo_aviso" ).removeClass("has-success");
			$( "#icone_descricao_novo_aviso" ).removeClass("fa-check");
			$( "#div_descricao_novo_aviso" ).addClass("has-error");
			$( "#icone_descricao_novo_aviso" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_descricao_novo_aviso" ).removeClass("has-error");
			$( "#icone_descricao_novo_aviso" ).removeClass("fa-times-circle-o");
			$( "#div_descricao_novo_aviso" ).addClass("has-success");
			$( "#icone_descricao_novo_aviso" ).addClass("fa-check");
		}
		
		if($(".dataExpiracaoObrigatoria_novo_aviso").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_dataExpiracao_novo_aviso" ).removeClass("has-success");
			$( "#icone_dataExpiracao_novo_aviso" ).removeClass("fa-check");
			$( "#div_dataExpiracao_novo_aviso" ).addClass("has-error");
			$( "#icone_dataExpiracao_novo_aviso" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_dataExpiracao_novo_aviso" ).removeClass("has-error");
			$( "#icone_dataExpiracao_novo_aviso" ).removeClass("fa-times-circle-o");
			$( "#div_dataExpiracao_novo_aviso" ).addClass("has-success");
			$( "#icone_dataExpiracao_novo_aviso" ).addClass("fa-check");
		}
		
		if(obrigatorioPendente == 1){
			alert("É necessário preencher todos os campos obrigatórios!");
			return false;
		}
		
	});
	
	$(".btn-salvar-editar-aviso").click(function(event){
		
		fcn_validaDtExpiracao_Editar_Aviso($(".dataExpiracaoObrigatoria_editar_aviso").val());
		
		var obrigatorioPendente = 0;
		
		if($(".tituloObrigatorio_editar_aviso").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_titulo_editar_aviso" ).removeClass("has-success");
			$( "#icone_titulo_editar_aviso" ).removeClass("fa-check");
			$( "#div_titulo_editar_aviso" ).addClass("has-error");
			$( "#icone_titulo_editar_aviso" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_titulo_editar_aviso" ).removeClass("has-error");
			$( "#icone_titulo_editar_aviso" ).removeClass("fa-times-circle-o");
			$( "#div_titulo_editar_aviso" ).addClass("has-success");
			$( "#icone_titulo_editar_aviso" ).addClass("fa-check");
		}
		
		if($(".descricaoObrigatoria_editar_aviso").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_descricao_editar_aviso" ).removeClass("has-success");
			$( "#icone_descricao_editar_aviso" ).removeClass("fa-check");
			$( "#div_descricao_editar_aviso" ).addClass("has-error");
			$( "#icone_descricao_editar_aviso" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_descricao_editar_aviso" ).removeClass("has-error");
			$( "#icone_descricao_editar_aviso" ).removeClass("fa-times-circle-o");
			$( "#div_descricao_editar_aviso" ).addClass("has-success");
			$( "#icone_descricao_editar_aviso" ).addClass("fa-check");
		}
		
		if($(".dataExpiracaoObrigatoria_editar_aviso").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_dataExpiracao_editar_aviso" ).removeClass("has-success");
			$( "#icone_dataExpiracao_editar_aviso" ).removeClass("fa-check");
			$( "#div_dataExpiracao_editar_aviso" ).addClass("has-error");
			$( "#icone_dataExpiracao_editar_aviso" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_dataExpiracao_editar_aviso" ).removeClass("has-error");
			$( "#icone_dataExpiracao_editar_aviso" ).removeClass("fa-times-circle-o");
			$( "#div_dataExpiracao_editar_aviso" ).addClass("has-success");
			$( "#icone_dataExpiracao_editar_aviso" ).addClass("fa-check");
		}
		
		if(obrigatorioPendente == 1){
			alert("É necessário preencher todos os campos obrigatórios!");
			return false;
		}
		
	});
	
	function fcn_recarregaCores_novo_aviso(){
		
		if($(".tituloObrigatorio_novo_aviso").val() == ""){
			$( "#div_titulo_novo_aviso" ).removeClass("has-success");
			$( "#icone_titulo_novo_aviso" ).removeClass("fa-check");
			$( "#div_titulo_novo_aviso" ).addClass("has-error");
			$( "#icone_titulo_novo_aviso" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_titulo_novo_aviso" ).removeClass("has-error");
			$( "#icone_titulo_novo_aviso" ).removeClass("fa-times-circle-o");
			$( "#div_titulo_novo_aviso" ).addClass("has-success");
			$( "#icone_titulo_novo_aviso" ).addClass("fa-check");
		}
		
		if($(".descricaoObrigatoria_novo_aviso").val() == ""){
			$( "#div_descricao_novo_aviso" ).removeClass("has-success");
			$( "#icone_descricao_novo_aviso" ).removeClass("fa-check");
			$( "#div_descricao_novo_aviso" ).addClass("has-error");
			$( "#icone_descricao_novo_aviso" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_descricao_novo_aviso" ).removeClass("has-error");
			$( "#icone_descricao_novo_aviso" ).removeClass("fa-times-circle-o");
			$( "#div_descricao_novo_aviso" ).addClass("has-success");
			$( "#icone_descricao_novo_aviso" ).addClass("fa-check");
		}
		
		if($(".dataExpiracaoObrigatoria_novo_aviso").val() == ""){
			$( "#div_dataExpiracao_novo_aviso" ).removeClass("has-success");
			$( "#icone_dataExpiracao_novo_aviso" ).removeClass("fa-check");
			$( "#div_dataExpiracao_novo_aviso" ).addClass("has-error");
			$( "#icone_dataExpiracao_novo_aviso" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_dataExpiracao_novo_aviso" ).removeClass("has-error");
			$( "#icone_dataExpiracao_novo_aviso" ).removeClass("fa-times-circle-o");
			$( "#div_dataExpiracao_novo_aviso" ).addClass("has-success");
			$( "#icone_dataExpiracao_novo_aviso" ).addClass("fa-check");
		}
		
	};
	
	function fcn_recarregaCores_editar_aviso(){
		
		if($(".tituloObrigatorio_editar_aviso").val() == ""){
			$( "#div_titulo_editar_aviso" ).removeClass("has-success");
			$( "#icone_titulo_editar_aviso" ).removeClass("fa-check");
			$( "#div_titulo_editar_aviso" ).addClass("has-error");
			$( "#icone_titulo_editar_aviso" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_titulo_editar_aviso" ).removeClass("has-error");
			$( "#icone_titulo_editar_aviso" ).removeClass("fa-times-circle-o");
			$( "#div_titulo_editar_aviso" ).addClass("has-success");
			$( "#icone_titulo_editar_aviso" ).addClass("fa-check");
		}
		
		if($(".descricaoObrigatoria_editar_aviso").val() == ""){
			$( "#div_descricao_editar_aviso" ).removeClass("has-success");
			$( "#icone_descricao_editar_aviso" ).removeClass("fa-check");
			$( "#div_descricao_editar_aviso" ).addClass("has-error");
			$( "#icone_descricao_editar_aviso" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_descricao_editar_aviso" ).removeClass("has-error");
			$( "#icone_descricao_editar_aviso" ).removeClass("fa-times-circle-o");
			$( "#div_descricao_editar_aviso" ).addClass("has-success");
			$( "#icone_descricao_editar_aviso" ).addClass("fa-check");
		}
		
		if($(".dataExpiracaoObrigatoria_editar_aviso").val() == ""){
			$( "#div_dataExpiracao_editar_aviso" ).removeClass("has-success");
			$( "#icone_dataExpiracao_editar_aviso" ).removeClass("fa-check");
			$( "#div_dataExpiracao_editar_aviso" ).addClass("has-error");
			$( "#icone_dataExpiracao_editar_aviso" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_dataExpiracao_editar_aviso" ).removeClass("has-error");
			$( "#icone_dataExpiracao_editar_aviso" ).removeClass("fa-times-circle-o");
			$( "#div_dataExpiracao_editar_aviso" ).addClass("has-success");
			$( "#icone_dataExpiracao_editar_aviso" ).addClass("fa-check");
		}
		
	}
	
	function fcn_validaArquivoNovoAviso(formulario, arquivo) { 
		
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
				$('.campo_imagem_novo_aviso').val("");
				return 1;
				
			}
			 
			return 0; 
		}
	}
	
	function fcn_validaArquivoEditarAviso(formulario, arquivo) { 
		
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
				$('.campo_imagem_editar_aviso').val("");
				return 1;
				
			}
			 
			return 0; 
		}
	}
	
	function fcn_validaDtExpiracao_Novo_Aviso(element) 
	{
		if(element != "" && element != "__/__/____"){
			regex = /^((((0?[1-9]|1\d|2[0-8])\/(0?[1-9]|1[0-2]))|((29|30)\/(0?[13456789]|1[0-2]))|(31\/(0?[13578]|1[02])))\/((19|20)?\d\d))$|((29\/0?2\/)((19|20)?(0[48]|[2468][048]|[13579][26])|(20)?00))$/;
			
			resultado = regex.exec(element);
			
			if(!resultado || element.length != 10)
			{
				$( "#div_dataExpiracao_novo_aviso" ).removeClass("has-success");
				$( "#icone_dataExpiracao_novo_aviso" ).removeClass("fa-check");
				$( "#div_dataExpiracao_novo_aviso" ).addClass("has-error");
				$( "#icone_dataExpiracao_novo_aviso" ).addClass("fa-times-circle-o");
				
				alert("Data de Expiração inválida!");
				document.getElementById('dataExpiracao').value = "";
				return false;
			}
			
		}
	}
	
	function fcn_validaDtExpiracao_Editar_Aviso(element) 
	{
		if(element != "" && element != "__/__/____"){
			regex = /^((((0?[1-9]|1\d|2[0-8])\/(0?[1-9]|1[0-2]))|((29|30)\/(0?[13456789]|1[0-2]))|(31\/(0?[13578]|1[02])))\/((19|20)?\d\d))$|((29\/0?2\/)((19|20)?(0[48]|[2468][048]|[13579][26])|(20)?00))$/;
			
			resultado = regex.exec(element);
			
			if(!resultado || element.length != 10)
			{
				$( "#div_dataExpiracao_editar_aviso" ).removeClass("has-success");
				$( "#icone_dataExpiracao_editar_aviso" ).removeClass("fa-check");
				$( "#div_dataExpiracao_editar_aviso" ).addClass("has-error");
				$( "#icone_dataExpiracao_editar_aviso" ).addClass("fa-times-circle-o");
				
				alert("Data de Expiração inválida!");
				document.getElementById('dataExpiracaoEditar').value = "";
				return false;
			}
			
		}
	}
	
</script>
	
@endsection