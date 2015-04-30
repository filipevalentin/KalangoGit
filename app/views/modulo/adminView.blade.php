@extends('master-admin')

@section('modals')
    <div class="modal fade" id="editaraula" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

    <div class="modal fade" id="editaratividade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Editar Exercício</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/admin/atualizarAtividade">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id">
                        </div>
                        <div id="div_nome-editar-exercicio" class="form-group">
                            <label class="control-label" for="nome"><i id="icone_nome-editar-exercicio" class="fa"></i> Título</label>
                            <input type="text" autocomplete="off" id="nome" name="nome" onblur="fcn_recarregaCoresEditarExercicio();" maxlength="100" class="form-control somenteLetras nomeObrigatorio-editar-exercicio"></input>
                        </div>
                        <div id="div_status_editar-exercicio" class="form-group">
                            <label class="control-label" for="status"><i id="icone_status-editar-exercicio" class="fa"></i> Visibilidade</label>
                            <select type="text" onblur="fcn_recarregaCoresEditarExercicio();" id="status" name="status" class="form-control statusObrigatorio-editar-exercicio">
                                <option value="0"> Oculto</option>
                                <option value="1"> Visível</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-primary btn-salvar-editar-exercicio" value="Salvar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editarmaterial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Editar Material</h4>
                </div>
                <div class="modal-body">
                    <form action="/admin/atualizarMaterial" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="tipo"><i id="" class="fa"></i> Tipo</label>
                            <select type="" class="form-control" id="tipo" name="tipo">
                                <option value="1">Documento</option>
                                <option value="2">Vídeo</option>
                                <option value="3">Link</option>
                            </select>
                        </div>
                        <div id="div_nome-editar-material" class="form-group">
                            <label class="control-label" for="nome"><i id="icone_nome-editar-material" class="fa"></i> Nome</label>
                            <input type="text" autocomplete="off" id="nome" name="nome" onblur="fcn_recarregaCoresEditarMaterial();" maxlength="100" class="form-control somenteLetras nomeObrigatorio-editar-material"></input>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="arquivo"><i class="fa"></i> Arquivo/URL</label>
                            <input type="file" id="arquivo" name="arquivo" onblur="fcn_recarregaCoresEditarMaterial();fcn_validaArquivo(this.form, this.form.arquivo.value)" class="form-control"></input>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-primary btn-salvar-editar-material" value="Salvar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="criaraula" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Nova Aula</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/admin/criarAula">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="idmodulo" name="idModulo">
                        </div>
                        <div id="div_nome-nova-aula" class="form-group">
                            <label class="control-label" for="nome"><i id="icone_nome-nova-aula" class="fa"></i> Nome</label>
                            <input type="text" autocomplete="off" id="nome" name="nome" onblur="fcn_recarregaCoresNovaAula();" maxlength="100" class="form-control somenteLetrasENumeros nomeObrigatorio-nova-aula"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-primary btn-salvar-nova-aula" value="Salvar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
                        <button class="btn btn-success" type="button" id="btnAtividade">Atividade</button>
                    </div>

                    <form action="/admin/criarMaterial" method="POST" id="formNovoMaterial" style="display:none;"enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="idaula" name="idAula">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="tipo"><i id="" class="fa"></i> Tipo</label>
                            <select type="" class="form-control" id="tipo" name="tipo">
                                <option value="1">Documento</option>
                                <option value="2">Vídeo</option>
                                <option value="3">Link</option>
                            </select>
                        </div>
                        <div id="div_nome-novoConteudo-material" class="form-group">
                            <label class="control-label" for="nome"><i id="icone_nome-novoConteudo-material" class="fa"></i> Nome</label>
                            <input type="text" autocomplete="off" id="nome" name="nome" onblur="fcn_recarregaCoresNovoConteudoMaterial();" maxlength="100" class="form-control nomeObrigatorio-novoConteudo-material"></input>
                        </div>
                        <div id="div_arquivo-novoConteudo-material" class="form-group">
                            <label class="control-label" for="arquivo"><i id="icone_arquivo-novoConteudo-material" class="fa"></i> Arquivo/URL</label>
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
                            <input type="submit" class="btn btn-primary" value="Salvar">
                        </div>
                    </form>

                    <form action="/admin/criarAtividade" method="POST" id="formAtividade" style="display:none;">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="idaula" name="idAula">
                        </div>
                        <div id="div_nome-novoConteudo-exercicio" class="form-group">
                            <label class="control-label" for="nome"><i id="icone_nome-novoConteudo-exercicio" class="fa"></i> Título</label>
                            <input type="text" autocomplete="off" id="nome" name="nome" onblur="fcn_recarregaCoresNovoConteudoExercicio();" maxlength="100" class="form-control nomeObrigatorio-novoConteudo-exercicio"></input>
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

    <div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Vídeo</h4>
                </div>
                <div class="modal-body">
                    <video class="center-block" width="320" height="240" controls style="max-width:100%; display: block; height:auto;">
                      <source src="" type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('maincontent')
    <section class="content-header">
        <h1>Gerenciar Aulas</h1>
        <ol class="breadcrumb">
            <li><a href="/admin/home" ><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="{{URL::previous()}}" >Gerenciar Cursos</a></li>
			<li class="active">Gerenciar Aulas</li>
        </ol>
    </section>

    <section class="content">

        <div class="row">
            <div class="col-md-12">

                <h2 class="page-header">Inglês - Teens - Módulo 1</h2>

                <div class="col-md-8">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">Conteúdos</h3>
                            <div class="box-tools pull-right" style="padding: 10px 20px 5px 5px;">
                                <button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criaraula" data-idmodulo="{{$modulo->id}}"><i class="fa fa-plus"></i></button>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="box-group" id="accordion">
                                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                @foreach ( ($modulo->aulas) as $aula)
                                <div class="panel box box-primary">
                                    <div class="box-header">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="{{"#".$aula->id}}" class="collapsed">
                                                {{$aula->titulo}}
                                            </a>
                                        </h4>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editaraula" data-id="{{$aula->id}}" data-nome="{{$aula->titulo}}"><i class="fa fa-pencil"></i></button>
                                            <a href="/admin/aula/deletar/{{$aula->id}}"><button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></a>
                                        </div>
                                    </div>
                                    <div id="{{$aula->id}}" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="box-body">
                                            <div class="row" style="margin:0px;">

                                            @foreach ($aula->materialApoio as $material)
                                                <div class="alert alert-success alert-dismissable" style="min-height: 55px;">
                                                    <i class="fa  fa-check-circle" style="left: -15px; top: 7px;"></i>
                                                    <p style="float:left;">{{$material->nome}}</p>
                                                    <div class="box-tools pull-right">
                                                        @if($material->tipo == 1)
                                                            <a href="/Viewer#/{{$material->url}}"><button class="btn btn-primary btn-xs"><i class="fa fa-file-pdf-o"></i></button></a>
                                                        @elseif($material->tipo == 2)
                                                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#video" data-url="{{$material->url}}"><i class="fa fa-film"></i></button>
                                                        @elseif($material->tipo == 3)
                                                            <a href="{{$material->url}}" target="_blank"><button class="btn btn-primary btn-xs"><i class="fa fa-external-link"></i></button></a>
                                                        @endif
                                                        <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#editarmaterial" data-id="{{$material->id}}" data-nome="{{$material->nome}}" data-tipo="{{$material->tipo}}"><i class="fa fa-pencil"></i></button>
                                                        <a href="/admin/material/deletar/{{$material->id}}"><button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></a>
                                                    </div>
                                                </div>
                                            @endforeach

                                            @foreach ($aula->atividades as $atividade)
                                                @if($atividade->status == '0')
                                                    <div class="alert bg-primary alert-dismissable" style="min-height: 55px; background-color: rgb(103, 103, 103);">
                                                    <b style="color: red;">&nbsp;(Oculta)</b>
                                                @else
                                                <div class="alert bg-primary alert-dismissable" style="min-height: 55px;">
                                                @endif
                                                    <i class="fa  fa-check-circle" style="left: -15px; top: 7px;"></i>
                                                    <p style="float:left;">{{$atividade->nome}}</p>
                                                    <div class="box-tools pull-right">
                                                        <a href="/admin/atividade/{{$atividade->id}}/editar"><button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button></a>
                                                        <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#editaratividade" data-id="{{$atividade->id}}" data-nome="{{$atividade->nome}}" data-status="{{$atividade->status}}" ><i class="fa fa-pencil"></i></button>
                                                        <a href="/admin/atividade/deletar/{{$atividade->id}}"><button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></a>
                                                    </div>
                                                </div>
                                            @endforeach

                                                 <div class="box-tools pull-right" style="padding: 0px 25px 5px 5px;">
                                                    <button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarconteudo" data-idaula="{{$aula->id}}"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div><!-- /.box-body -->
                    </div>
                </div>

            </div>
        </div> 
    </section>

@endsection
    

@section('scripts')
    <!-- Data Tables -->
    <script src="{{ URL::asset('/js/dataTables.tableTools.js') }}" type="text/javascript"></script>

    <script>

        $('#example').DataTable( {
          "ajax":"/admin/listarMateriais" ,
            "columns": [
                { data: 'nome' },
                { data: 'tipo2' },
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
        
    </script>

    <script>
        $('#editaraula').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var dataid = button.data('id')
            var datanome = button.data('nome')
            var modal = $(this)

            modal.find('#id').val(dataid)
            modal.find('#nome').val(datanome)
            })

        $('#editaratividade').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var dataid = button.data('id')
            var datanome = button.data('nome')
            var datastatus = button.data('status');
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('#id').val(dataid)
            modal.find('#nome').val(datanome)
            modal.find('#status').val(datastatus);
            })

        $('#editarmaterial').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var dataid = button.data('id')
            var datanome = button.data('nome')
            var dataarquivo = button.data('arquivo')
            var datatipo = button.data('tipo')

            var modal = $(this)
            modal.find('#id').val(dataid)
            modal.find('#nome').val(datanome)
            modal.find('#arquivo').val(dataarquivo)
            modal.find('#tipo').val(datatipo)
        })

        $('#criaraula').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var dataidmodulo = button.data('idmodulo')
            // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('#idmodulo').val(dataidmodulo)
        })

        $('#criarconteudo').on('show.bs.modal', function (event) {
            $('#formAtividade').hide();
            $('#formCopiarMaterial').hide();
            $('#formNovoMaterial').hide();
            var button = $(event.relatedTarget) // Button that triggered the modal
            var dataidaula = button.data('idaula')
            // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('input#idaula').val(dataidaula);

            var table = $('#example').DataTable();
            table.ajax.url("/admin/listarMateriais/"+dataidaula).load();

        })

         $('#btnNovoMaterial').on('click', function(event) {
             event.preventDefault();
             $('#formAtividade').hide();
             $('#formCopiarMaterial').hide();
             $('#formNovoMaterial').show();
         })

        $('#btnCopiarMaterial').on('click', function(event) {
             event.preventDefault();
             $('#formAtividade').hide();
             $('#formNovoMaterial').hide();
             $('#formCopiarMaterial').show();
         })

        $('#btnAtividade').on('click', function(event) {
             event.preventDefault();
             $('#formNovoMaterial').hide();
             $('#formCopiarMaterial').hide();
             $('#formAtividade').show();
        })

        $('select#tipo').on('change', function (event){
            if($(this).val()!=3){
                $(this).parents('.modal-body').find('input#arquivo').attr("type", "file")
            }
            else{
                $(this).parents('.modal-body').find('input#arquivo').attr("type", "text")
            }
        })

    </script>
	
	<script>//Validações
		
		$( ".somenteLetras" ).keyup(function() {
			//Não ativa função ao clicar tecla direção esquerda e direito, botão apagar e botão deletar
			if(event.keyCode != 37 && event.keyCode != 39 && event.keyCode != 46 && event.keyCode != 8){
				var valor = $(this).val().replace(/[^a-zA-ZãÃáÁàÀâÂéÉèÈêÊíÍìÌîÎõÕóÓòÒôÔúÚùÙûÛÇç ]+/g,'');
				$(this).val(valor);
			}
		});
		
		$( ".somenteLetrasENumeros" ).keyup(function() {
			//Não ativa função ao clicar tecla direção esquerda e direito, botão apagar e botão deletar
			if(event.keyCode != 37 && event.keyCode != 39 && event.keyCode != 46 && event.keyCode != 8){
				var valor = $(this).val().replace(/[^0-9a-zA-ZãÃáÁàÀâÂéÉèÈêÊíÍìÌîÎõÕóÓòÒôÔúÚùÙûÛÇç ]+/g,'');
				$(this).val(valor);
			}
		});
		
		$(".btn-salvar-editar-aula").click(function(event){
			
			var obrigatorioPendente = 0;
		
			if($(".nomeObrigatorio-editar-aula").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_nome-editar-aula" ).removeClass("has-success");
				$( "#icone_nome-editar-aula" ).removeClass("fa-check");
				$( "#div_nome-editar-aula" ).addClass("has-error");
				$( "#icone_nome-editar-aula" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_nome-editar-aula" ).removeClass("has-error");
				$( "#icone_nome-editar-aula" ).removeClass("fa-times-circle-o");
				$( "#div_nome-editar-aula" ).addClass("has-success");
				$( "#icone_nome-editar-aula" ).addClass("fa-check");
			}
			
			if(obrigatorioPendente == 1){
				alert("É necessário preencher todos os campos obrigatórios!");
				return false;
			}
			
		})
		
		$(".btn-salvar-nova-aula").click(function(event){
			
			var obrigatorioPendente = 0;
		
			if($(".nomeObrigatorio-nova-aula").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_nome-nova-aula" ).removeClass("has-success");
				$( "#icone_nome-nova-aula" ).removeClass("fa-check");
				$( "#div_nome-nova-aula" ).addClass("has-error");
				$( "#icone_nome-nova-aula" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_nome-nova-aula" ).removeClass("has-error");
				$( "#icone_nome-nova-aula" ).removeClass("fa-times-circle-o");
				$( "#div_nome-nova-aula" ).addClass("has-success");
				$( "#icone_nome-nova-aula" ).addClass("fa-check");
			}
			
			if(obrigatorioPendente == 1){
				alert("É necessário preencher todos os campos obrigatórios!");
				return false;
			}
			
		})
		
		$(".btn-salvar-novoConteudo-material").click(function(event){
			
			var obrigatorioPendente = 0;
		
			if($(".nomeObrigatorio-novoConteudo-material").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_nome-novoConteudo-material" ).removeClass("has-success");
				$( "#icone_nome-novoConteudo-material" ).removeClass("fa-check");
				$( "#div_nome-novoConteudo-material" ).addClass("has-error");
				$( "#icone_nome-novoConteudo-material" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_nome-novoConteudo-material" ).removeClass("has-error");
				$( "#icone_nome-novoConteudo-material" ).removeClass("fa-times-circle-o");
				$( "#div_nome-novoConteudo-material" ).addClass("has-success");
				$( "#icone_nome-novoConteudo-material" ).addClass("fa-check");
			}
			
			if($(".arquivoObrigatorio-novoConteudo-material").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_arquivo-novoConteudo-material" ).removeClass("has-success");
				$( "#icone_arquivo-novoConteudo-material" ).removeClass("fa-check");
				$( "#div_arquivo-novoConteudo-material" ).addClass("has-error");
				$( "#icone_arquivo-novoConteudo-material" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_arquivo-novoConteudo-material" ).removeClass("has-error");
				$( "#icone_arquivo-novoConteudo-material" ).removeClass("fa-times-circle-o");
				$( "#div_arquivo-novoConteudo-material" ).addClass("has-success");
				$( "#icone_arquivo-novoConteudo-material" ).addClass("fa-check");
			}
			
			if(obrigatorioPendente == 1){
				alert("É necessário preencher todos os campos obrigatórios!");
				return false;
			}
			
		})
		
		$(".btn-salvar-novoConteudo-exercicio").click(function(event){
			
			var obrigatorioPendente = 0;
		
			if($(".nomeObrigatorio-novoConteudo-exercicio").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_nome-novoConteudo-exercicio" ).removeClass("has-success");
				$( "#icone_nome-novoConteudo-exercicio" ).removeClass("fa-check");
				$( "#div_nome-novoConteudo-exercicio" ).addClass("has-error");
				$( "#icone_nome-novoConteudo-exercicio" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_nome-novoConteudo-exercicio" ).removeClass("has-error");
				$( "#icone_nome-novoConteudo-exercicio" ).removeClass("fa-times-circle-o");
				$( "#div_nome-novoConteudo-exercicio" ).addClass("has-success");
				$( "#icone_nome-novoConteudo-exercicio" ).addClass("fa-check");
			}
			
			if(obrigatorioPendente == 1){
				alert("É necessário preencher todos os campos obrigatórios!");
				return false;
			}
			
		})
		
		$(".btn-salvar-editar-material").click(function(event){
			
			var obrigatorioPendente = 0;
		
			if($(".nomeObrigatorio-editar-material").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_nome-editar-material" ).removeClass("has-success");
				$( "#icone_nome-editar-material" ).removeClass("fa-check");
				$( "#div_nome-editar-material" ).addClass("has-error");
				$( "#icone_nome-editar-material" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_nome-editar-material" ).removeClass("has-error");
				$( "#icone_nome-editar-material" ).removeClass("fa-times-circle-o");
				$( "#div_nome-editar-material" ).addClass("has-success");
				$( "#icone_nome-editar-material" ).addClass("fa-check");
			}
			
			if(obrigatorioPendente == 1){
				alert("É necessário preencher todos os campos obrigatórios!");
				return false;
			}
			
		})
		
		$(".btn-salvar-editar-exercicio").click(function(event){
			
			var obrigatorioPendente = 0;
		
			if($(".nomeObrigatorio-editar-exercicio").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_nome-editar-exercicio" ).removeClass("has-success");
				$( "#icone_nome-editar-exercicio" ).removeClass("fa-check");
				$( "#div_nome-editar-exercicio" ).addClass("has-error");
				$( "#icone_nome-editar-exercicio" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_nome-editar-exercicio" ).removeClass("has-error");
				$( "#icone_nome-editar-exercicio" ).removeClass("fa-times-circle-o");
				$( "#div_nome-editar-exercicio" ).addClass("has-success");
				$( "#icone_nome-editar-exercicio" ).addClass("fa-check");
			}
			
			if($(".statusObrigatorio-editar-exercicio").val() == ""){
				obrigatorioPendente = 1;
				$( "#div_status_editar-exercicio" ).removeClass("has-success");
				$( "#icone_status-editar-exercicio" ).removeClass("fa-check");
				$( "#div_status_editar-exercicio" ).addClass("has-error");
				$( "#icone_status-editar-exercicio" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_status_editar-exercicio" ).removeClass("has-error");
				$( "#icone_status-editar-exercicio" ).removeClass("fa-times-circle-o");
				$( "#div_status_editar-exercicio" ).addClass("has-success");
				$( "#icone_status-editar-exercicio" ).addClass("fa-check");
			}
			
			if(obrigatorioPendente == 1){
				alert("É necessário preencher todos os campos obrigatórios!");
				return false;
			}
			
		})
		
		function fcn_recarregaCoresEditarAula(){
			
			if($(".nomeObrigatorio-editar-aula").val() == ""){
				$( "#div_nome-editar-aula" ).removeClass("has-success");
				$( "#icone_nome-editar-aula" ).removeClass("fa-check");
				$( "#div_nome-editar-aula" ).addClass("has-error");
				$( "#icone_nome-editar-aula" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_nome-editar-aula" ).removeClass("has-error");
				$( "#icone_nome-editar-aula" ).removeClass("fa-times-circle-o");
				$( "#div_nome-editar-aula" ).addClass("has-success");
				$( "#icone_nome-editar-aula" ).addClass("fa-check");
			}
			
		}
		
		function fcn_recarregaCoresNovaAula(){
			
			if($(".nomeObrigatorio-nova-aula").val() == ""){
				$( "#div_nome-nova-aula" ).removeClass("has-success");
				$( "#icone_nome-nova-aula" ).removeClass("fa-check");
				$( "#div_nome-nova-aula" ).addClass("has-error");
				$( "#icone_nome-nova-aula" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_nome-nova-aula" ).removeClass("has-error");
				$( "#icone_nome-nova-aula" ).removeClass("fa-times-circle-o");
				$( "#div_nome-nova-aula" ).addClass("has-success");
				$( "#icone_nome-nova-aula" ).addClass("fa-check");
			}
			
		}
		
		function fcn_recarregaCoresNovoConteudoMaterial(){
			
			if($(".nomeObrigatorio-novoConteudo-material").val() == ""){
				$( "#div_nome-novoConteudo-material" ).removeClass("has-success");
				$( "#icone_nome-novoConteudo-material" ).removeClass("fa-check");
				$( "#div_nome-novoConteudo-material" ).addClass("has-error");
				$( "#icone_nome-novoConteudo-material" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_nome-novoConteudo-material" ).removeClass("has-error");
				$( "#icone_nome-novoConteudo-material" ).removeClass("fa-times-circle-o");
				$( "#div_nome-novoConteudo-material" ).addClass("has-success");
				$( "#icone_nome-novoConteudo-material" ).addClass("fa-check");
			}
			
			if($(".arquivoObrigatorio-novoConteudo-material").val() == ""){
				$( "#div_arquivo-novoConteudo-material" ).removeClass("has-success");
				$( "#icone_arquivo-novoConteudo-material" ).removeClass("fa-check");
				$( "#div_arquivo-novoConteudo-material" ).addClass("has-error");
				$( "#icone_arquivo-novoConteudo-material" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_arquivo-novoConteudo-material" ).removeClass("has-error");
				$( "#icone_arquivo-novoConteudo-material" ).removeClass("fa-times-circle-o");
				$( "#div_arquivo-novoConteudo-material" ).addClass("has-success");
				$( "#icone_arquivo-novoConteudo-material" ).addClass("fa-check");
			}
			
		}
		
		function fcn_recarregaCoresNovoConteudoExercicio(){
		
			if($(".nomeObrigatorio-novoConteudo-exercicio").val() == ""){
				$( "#div_nome-novoConteudo-exercicio" ).removeClass("has-success");
				$( "#icone_nome-novoConteudo-exercicio" ).removeClass("fa-check");
				$( "#div_nome-novoConteudo-exercicio" ).addClass("has-error");
				$( "#icone_nome-novoConteudo-exercicio" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_nome-novoConteudo-exercicio" ).removeClass("has-error");
				$( "#icone_nome-novoConteudo-exercicio" ).removeClass("fa-times-circle-o");
				$( "#div_nome-novoConteudo-exercicio" ).addClass("has-success");
				$( "#icone_nome-novoConteudo-exercicio" ).addClass("fa-check");
			}
		
		}
		
		function fcn_recarregaCoresEditarMaterial(){
			
			if($(".nomeObrigatorio-editar-material").val() == ""){
				$( "#div_nome-editar-material" ).removeClass("has-success");
				$( "#icone_nome-editar-material" ).removeClass("fa-check");
				$( "#div_nome-editar-material" ).addClass("has-error");
				$( "#icone_nome-editar-material" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_nome-editar-material" ).removeClass("has-error");
				$( "#icone_nome-editar-material" ).removeClass("fa-times-circle-o");
				$( "#div_nome-editar-material" ).addClass("has-success");
				$( "#icone_nome-editar-material" ).addClass("fa-check");
			}
			
		}
		
		function fcn_recarregaCoresEditarExercicio(){
			
			if($(".nomeObrigatorio-editar-exercicio").val() == ""){
				$( "#div_nome-editar-exercicio" ).removeClass("has-success");
				$( "#icone_nome-editar-exercicio" ).removeClass("fa-check");
				$( "#div_nome-editar-exercicio" ).addClass("has-error");
				$( "#icone_nome-editar-exercicio" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_nome-editar-exercicio" ).removeClass("has-error");
				$( "#icone_nome-editar-exercicio" ).removeClass("fa-times-circle-o");
				$( "#div_nome-editar-exercicio" ).addClass("has-success");
				$( "#icone_nome-editar-exercicio" ).addClass("fa-check");
			}
			
			if($(".statusObrigatorio-editar-exercicio").val() == ""){
				$( "#div_status_editar-exercicio" ).removeClass("has-success");
				$( "#icone_status-editar-exercicio" ).removeClass("fa-check");
				$( "#div_status_editar-exercicio" ).addClass("has-error");
				$( "#icone_status-editar-exercicio" ).addClass("fa-times-circle-o");
			}else{
				$( "#div_status_editar-exercicio" ).removeClass("has-error");
				$( "#icone_status-editar-exercicio" ).removeClass("fa-times-circle-o");
				$( "#div_status_editar-exercicio" ).addClass("has-success");
				$( "#icone_status-editar-exercicio" ).addClass("fa-check");
			}
			
		}
		
		function fcn_validaArquivo(formulario, arquivo) { 
		   
			if(arquivo != ""){
				extensoes_permitidas = new Array(".pdf", ".odt", ".ods", ".odp"); 
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
					document.getElementById('arquivo').value = "";
					return 1;
				}
				 
				return 0; 
			}
		}
		
	</script>
@endsection