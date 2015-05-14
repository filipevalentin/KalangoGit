@extends('master-admin')

@section('css')
	<!-- iCheck -->
    <link href="/plugins/iCheck/flat/green.css" rel="stylesheet" type="text/css" />
@endsection

@section('modals')
	<div class="modal fade" id="criarconteudo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Novo Conteúdo</h4>
                </div>
                <div class="modal-body">
                    
                    <div class="text-center">
                    	<div class="btn-group">
                    		<button type="button" class="btn btn-info">Material de Apoio</button>
                    		<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    			<span class="caret"></span>
                    			<span class="sr-only">Toggle Dropdown</span>
                    		</button>
                    		<ul class="dropdown-menu" role="menu">
                    			<li><a id="btnNovoMaterial" href="">Novo Material</a></li>
                    			<li><a id="btnCopiarMaterial" href="">Copiar Material</a></li>
                    		</ul>
                    	</div>
                        <button class="btn btn-success" type="button" id="btnAtividade">Exercício</button>
                    </div>

                    <form action="/admin/criarMaterial" method="POST" id="formNovoMaterial" style="display:none;"enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="idaula" name="idAula">
                        </div>
                        <div id="div_nome-novoConteudo-material" class="form-group">
                            <label class="control-label" for="nome"><i id="icone_nome-novoConteudo-material" class="fa"></i> Nome</label>
                            <input type="text" autocomplete="off" id="nome" name="nome" onblur="fcn_recarregaCoresNovoConteudoMaterial();" maxlength="100" class="form-control somenteLetras nomeObrigatorio-novoConteudo-material"></input>
                        </div>
                        <div id="div_arquivo-novoConteudo-material" class="form-group">
                            <label class="control-label" for="arquivo"><i id="icone_arquivo-novoConteudo-material" class="fa"></i> Arquivo</label>
                            <input type="file" id="arquivo" name="arquivo" onblur="fcn_recarregaCoresNovoConteudoMaterial();fcn_validaArquivo(this.form, this.form.arquivo.value)" class="form-control arquivoObrigatorio-novoConteudo-material"></input>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-primary btn-salvar-novoConteudo-material" value="Salvar">
                        </div>
                    </form>

                    <form action="/admin/copiarMaterial" method="POST" id="formCopiarMaterial" style="display:none;"enctype="multipart/form-data">
                     	<div class="form-group">
                            <input type="hidden" class="form-control" id="idaula" name="idAula">
                        </div>
	                    <div class="row">
					        <div class="col-md-12">
								<table id="example" class="display" cellspacing="0" width="100$">
							        <thead>
							            <tr>
							                <th>Nome</th>
							                <th>tipo</th>
							                <th>Curso</th>
							                <th>Modulo</th>
							                <th>Aula</th>
							                <th>Selecionar</th>
							            </tr>
							        </thead>
							 
							        <tfoot>
							            <tr>
							                <th>Nome</th>
							                <th>tipo</th>
							                <th>Curso</th>
							                <th>Modulo</th>
							                <th>Aula</th>
							                <th>Selecionar</th>
							            </tr>
							        </tfoot>
							    </table>
					        </div>
					    </div>
                        <div class="form-group">
                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-primary btn-salvar-novoConteudo-material" value="Salvar">
                        </div>
                    </form>

                    <form action="/admin/criarAtividade" method="POST" id="formAtividade" style="display:none;">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="idaula" name="idAula">
                        </div>
                        <div id="div_nome-novoConteudo-exercicio" class="form-group">
                            <label class="control-label" for="nome"><i id="icone_nome-novoConteudo-exercicio" class="fa"></i> Nome</label>
                            <input type="text" autocomplete="off" id="nome" name="nome" onblur="fcn_recarregaCoresNovoConteudoExercicio();" maxlength="100" class="form-control somenteLetras nomeObrigatorio-novoConteudo-exercicio"></input>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-primary btn-salvar-novoConteudo-exercicio" value="Salvar">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('maincontent')

	<section class="content">

		<div class="row">
			<div class="col-md-12">
				<div class="box-tools center" style="padding: 0px 25px 5px 5px;">
					<button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarconteudo" data-idaula=""><i class="fa fa-plus"></i></button>
				</div>
			</div>
		</div>

	</section>

@endsection

@section('scripts')

	 <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Data Tables -->
	<script src="{{ URL::asset('/js/dataTables.tableTools.js') }}" type="text/javascript"></script>

	<script>

	function confirmar(){
		if(!(confirm("Deseja realmente apagar este material de apoio ?"))){
			return false
		}
	}

		$('#example').DataTable( {
		  "ajax":"/admin/listarMateriais" ,
		    "columns": [
		        { data: 'nome' },
		        { data: 'tipo' },
		        { data: 'curso2' },
		        { data: 'modulo2' },
		        { data: 'aula2' },
		        { data: 'action'}
		    ],

		    // "scrollX": true,

			"columnDefs": [ {
			      "targets": 5,
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
		
		// $('#example').on( 'init.dt', function () {
		// 	var materiais = [];
		// 	$('input.check').on('click', function(){
		// 		if($(this).is(":checked")){
		// 			materiais.push($(this).data('id'));
		// 			console.log('adicionado '+$(this).data('id'));
		// 		}else{
		// 			materiais.splice(materiais.indexOf($(this).data('id')),1);
		// 			console.log('removido '+$(this).data('id'));
		// 		}
		// 	});
	 //    } ).dataTable();

	</script>
	

	<script>
		$('#btnNovoMaterial').on('click', function(event) {
             event.preventDefault();
             $('#formAtividade').hide();
             $('#formCopiarMaterial').hide();
             $('#formNovoMaterial').show();
         })

		$('#btnCopiarMaterial').on('click', function(event) {
             event.preventDefault();
             $('#formAtividade').hide();
             $('#formMaterial').hide();
             $('#formCopiarMaterial').show();
         })

         $('#btnAtividade').on('click', function(event) {
             event.preventDefault();
             $('#formNovoMaterial').hide();
             $('#formCopiarMaterial').hide();
             $('#formAtividade').show();
         })

         $('#criarconteudo').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var dataidaula = button.data('idaula')
            console.log(dataidaula)
            // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('input#idaula').val(dataidaula)
            })
	</script>
@endsection