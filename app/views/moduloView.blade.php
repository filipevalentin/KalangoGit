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
                    <form action="/atualizarAula" method="POST">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id">
                        </div>
                        <div class="form-group">
                            <label for="nome" class="control-label">Nome</label>
                            <input type="text" id="nome" name="nome" class="form-control"></input>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-primary" value="Salvar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editarexercicio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Editar Exercício</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/atualizarExercicio">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id">
                        </div>
                        <div class="form-group">
                            <label for="nome" class="control-label">Nome</label>
                            <input type="text" id="nome" name="nome" class="form-control"></input>
                        </div>
                        <div class="form-group">
                            <label for="descricao" class="control-label">Descrição</label>
                            <input type="text" id="descricao" name="descricao" class="form-control"></input>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-primary" value="Salvar">
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
                    <form action="/atualizarMaterial" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id">
                        </div>
                        <div class="form-group">
                            <label for="nome" class="control-label">Nome</label>
                            <input type="text" id="nome" name="nome" class="form-control"></input>
                        </div>
                        <div class="form-group">
                            <label for="descricao" class="control-label">Descrição</label>
                            <input type="text" id="descricao" name="descricao" class="form-control"></input>
                        </div>
                        <div class="form-group">
                            <label for="arquivo" class="control-label">Arquivo</label>
                            <input type="file" id="arquivo" name="arquivo" class="form-control"></input>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-primary" value="Salvar">
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
                    <form method="POST" action="/criarAula">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="idmodulo" name="idModulo">
                        </div>
                        <div class="form-group">
                            <label for="nome" class="control-label">Nome</label>
                            <input type="text" id="nome" name="nome" class="form-control"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-primary" value="Salvar">
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
    <section class="content-header">
        <h1>Gerenciar Turmas - Inglês Kids</h1>
        <ol class="breadcrumb">
            <li><a href="#" ><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Widgets</li>
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
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>
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
                                                        <a href="http://tcc.teste/Viewer#/{{$material->url}}"><button class="btn btn-primary btn-xs"><i class="fa fa-external-link"></i></button></a>
                                                        <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#editarmaterial" data-id="{{$material->id}}" data-nome="{{$material->nome}}" data-descricao="{{$material->descricao}}"><i class="fa fa-pencil"></i></button>
                                                        <button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                            @endforeach

                                            @foreach ($aula->exercicios as $exercicio)
                                                <div class="alert alert-info alert-dismissable" style="min-height: 55px;">
                                                    <i class="fa  fa-check-circle" style="left: -15px; top: 7px;"></i>
                                                    <p style="float:left;">{{$exercicio->nome}}</p>
                                                    <div class="box-tools pull-right">
                                                        <a href="/editarExercicio/{{$exercicio->id}}"><button class="btn btn-primary btn-xs"><i class="fa fa-question"></i></button></a>
                                                        <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#editarexercicio" data-id="{{$exercicio->id}}" data-nome="{{$exercicio->nome}}" data-descricao="{{$exercicio->descricao}}"><i class="fa fa-pencil"></i></button>
                                                        <button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                            @endforeach

                                                 <div class="box-tools pull-right" style="padding: 0px 25px 5px 5px;">
                                                    <button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarconteudo" data-idaula="1"><i class="fa fa-plus"></i></button>
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
        //  var materiais = [];
        //  $('input.check').on('click', function(){
        //      if($(this).is(":checked")){
        //          materiais.push($(this).data('id'));
        //          console.log('adicionado '+$(this).data('id'));
        //      }else{
        //          materiais.splice(materiais.indexOf($(this).data('id')),1);
        //          console.log('removido '+$(this).data('id'));
        //      }
        //  });
     //    } ).dataTable();

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

        $('#editarexercicio').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var dataid = button.data('id')
            var datanome = button.data('nome')
            var datadescricao = button.data('descricao') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('#id').val(dataid)
            modal.find('#nome').val(datanome)
            modal.find('#descricao').val(datadescricao)
            })

        $('#editarmaterial').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var dataid = button.data('id')
            var datanome = button.data('nome')
            var datadescricao = button.data('descricao')
            var dataarquivo = button.data('arquivo') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('#id').val(dataid)
            modal.find('#nome').val(datanome)
            modal.find('#descricao').val(datadescricao)
            modal.find('#arquivo').val(dataarquivo)
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
            var button = $(event.relatedTarget) // Button that triggered the modal
            var dataidaula = button.data('idaula')
            // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('input#idaula').val(dataidaula)
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
             $('#formMaterial').hide();
             $('#formCopiarMaterial').show();
         })

         $('#btnAtividade').on('click', function(event) {
             event.preventDefault();
             $('#formNovoMaterial').hide();
             $('#formCopiarMaterial').hide();
             $('#formAtividade').show();
         })

    </script>
@endsection