@extends('master-admin')

@section('modals')

<!--  ### MODALS ### -->

<div class="modal fade" id="editarmodulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Editar Módulo</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/atualizarModulo">
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

<div class="modal fade" id="editarturma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Editar Turma</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="idprofessor" name="idprofessor">
                    </div>
                    <div class="form-group">
                        <label for="nome" class="control-label">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="professor" class="control-label">Professor</label>
                        <select id="idprofessor" name="idprofessor" class="form-control">
                        @foreach(Professor::all() as $professor)
                            <option value="{{$professor->id}}">{{User::find($professor->id)->nome . " " . User::find($professor->id)->sobrenome }}</option>
                        @endforeach
                        </select>
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

<div class="modal fade" id="editarcurso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Editar Curso</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/atualizarCurso">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id">
                    </div>
                    <div class="form-group">
                        <label for="nome" class="control-label">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="descricao" class="control-label">Descrição</label>
                        <input type="text" id="descricao" name="descricao" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="idioma" class="control-label">Idioma</label>
                        <input type="text" id="idioma" name="idioma" class="form-control"></input>
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

<div class="modal fade" id="criarcurso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Novo Curso</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/criarCurso">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id">
                    </div>
                    <div class="form-group">
                        <label for="nome" class="control-label">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="descricao" class="control-label">Descrição</label>
                        <input type="text" id="descricao" name="descricao" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="idioma" class="control-label">Idioma</label>
                        <select id="idioma" name="idioma" class="form-control">
                          <option value="Inglês">Inglês</option>
                          <option value="Espanhol">Espanhol</option>
                        </select>
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

<div class="modal fade" id="criarturma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Nova Turma</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/criarTurma">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="idmodulo" name="idModulo">
                    </div>
                    <div class="form-group">
                        <label for="nome" class="control-label">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="professor" class="control-label">Professor</label>
                        <select id="idprofessor" name="idprofessor" class="form-control">
                            <option value="" disabled>Selecione um Professor</option>
                        @foreach(Professor::all() as $professor)
                            <option value="{{$professor->id}}">{{User::find($professor->id)->nome . " " . User::find($professor->id)->sobrenome }}</option>
                        @endforeach
                        </select>
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

<div class="modal fade" id="criarmodulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Novo Módulo</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/criarModulo">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="idcurso" name="idCurso">
                    </div>
                    <div class="form-group">
                        <label for="nome" class="control-label">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control"></textarea>
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

@endsection


@section('maincontent')

<section class="content-header">
    <h1>Gerenciar Cursos - Inglês</h1>
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
                    <h3 class="box-title">Cursos</h3>
                    <div class="box-tools pull-right" style="padding: 10px 20px 5px 5px;">
                        <button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarcurso" ><i class="fa fa-plus"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                        @for($i=0; $i <= (int)(count($cursosArray)/5); $i++)
        
                            <div class="item">

                            @for($j=4*$i; $j<4*$i+4 && $j<(count($cursosArray)); $j++)


                                <div class="col-sm-3">
                                    <div class="box-body">
                                        <div class="small-box bg-blue">
                                            <div class="inner">
                                                <div class="box-tools pull-right">
                                
                                                    <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#editarcurso" data-id="{{$cursosArray[$j]['id']}}" data-nome="{{$cursosArray[$j]['nome']}}" data-descricao="{{$cursosArray[$j]['descricao']}}" data-idioma="{{$cursosArray[$j]['idioma']}}"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button>
                                                </div>
                                                <div class="curso" style="cursor:pointer;" id="{{$cursosArray[$j]['id']}}">
                                                    <h4 style="font-size: 20px;">{{$cursosArray[$j]['nome']}}</h4>
                                                    <p style="margin:0px;">{{$cursos->find($cursosArray[$j]['id'])->turmas->count()}} Turmas</p>
                                                </div>
                                            </div>

                                            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
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

            @foreach($cursos as $curso)

            <div class="conteudocurso" id="{{$curso->id}}" style="display:none;">

                <h2 class="page-header">{{$curso->nome}}</h2>

                <div class="box box-solid">
                    <div class="box-header">
                        <h3 class="box-title">Módulos</h3>
                        <div class="box-tools pull-right" style="padding: 10px 20px 5px 5px;">
                            <button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarmodulo" data-idcurso="{{$curso->id}}"><i class="fa fa-plus"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="box-group" id="accordion">
                            <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->

                        @foreach($curso->modulos as $modulo)    
                            <div class="panel box box-primary">
                                <div class="box-header">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#Modulo{{$modulo->id}}">
                                            {{$modulo->nome}}
                                        </a>
                                    </h4>
                                    <div class="box-tools pull-right">
                                        <a href="moduloView/{{$modulo->id}}"><button class="btn btn-primary btn-sm" ><i class="fa fa-book"></i></button></a>
                                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editarmodulo" data-id="{{$modulo->id}}" data-nome="{{$modulo->nome}}" data-descricao="{{$modulo->descricao}}"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-sm" ><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div id="Modulo{{$modulo->id}}" class="panel-collapse collapse">
                                    <div class="row">

                                    @foreach($modulo->turmas as $turma)
                                        <div class="col-md-3">
                                            <div class="box-body">
                                                <div class="small-box bg-blue">
                                                    <div class="inner">
                                                        <div class="box-tools pull-right">
                                        
                                                            <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#editarturma" data-id="{{$turma->id}}" data-nome="{{$turma->nome}}" data-professor="{{User::find($turma->professor->id)->nome}}" data-idprofessor="{{$turma->professor->id}}"><i class="fa fa-pencil"></i></button>
                                                            <button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button>
                                                        </div>
                                                        <a href="turmaView/{{$turma->id}}" style="color: inherit;" class="turma" id="{{$turma->id}}">
                                                            <h4 style="font-size: 20px;">{{$turma->nome}}</h4>
                                                            <p>{{TurmasAluno::where('idTurma', '=', $turma->id)->count()." Alunos"}}</p>
                                                            <p style="margin:0px;">{{User::find($professor->id)->nome . " " . User::find($professor->id)->sobrenome }}</p>
                                                        </a>
                                                    </div>

                                                    <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                        <div class="box-tools pull-right" style="padding: 100px 25px 5px 5px;">
                                            <button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarturma" data-idmodulo="1{{$modulo->id}"><i class="fa fa-plus"></i></button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                        </div>
                    </div><!-- /.box-body -->
                </div>
            </div>

            @endforeach

        </div>
    </div> 
</section>

    @section('scripts')

        <script>
            $('#editarmodulo').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var dataid = button.data('id')
                var datanome = button.data('nome')
                var datadescricao = button.data('descricao') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('Editar Módulo ' + dataid)
                modal.find('#id').val(dataid)
                modal.find('#nome').val(datanome)
                modal.find('#descricao').val(datadescricao)
                })

            $('#editarturma').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var dataid = button.data('id')
                var datanome = button.data('nome')
                var dataidprofessor = button.data('idprofessor') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('Editar Turma ' + datanome)
                modal.find('#id').val(dataid)
                modal.find('#nome').val(datanome)
                modal.find('#idprofessor').val(dataidprofessor)
                })

            $('#editarcurso').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var dataid = button.data('id')
                var datanome = button.data('nome')
                var datadescricao = button.data('descricao')
                var dataidioma = button.data('idioma') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('Editar Curso ' + datanome)
                modal.find('#id').val(dataid)
                modal.find('#nome').val(datanome)
                modal.find('#descricao').val(datadescricao)
                modal.find('#idioma').val(dataidioma)
                })

            $('#criarmodulo').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var dataidcurso = button.data('idcurso')
                // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('#idcurso').val(dataidcurso)
                })

             $('#criarturma').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var dataidmodulo = button.data('idmodulo')
                // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('#idmodulo').val(dataidmodulo)
                })

            $('div.curso').on('click', (function(event) {
                var id = $(this).attr('id');
                $("div.conteudocurso").fadeOut();
                
                $("div.conteudocurso[id="+id+"]").delay(401).fadeIn();
            }));


            $('.item').first().addClass("active")

        </script>
    @endsection

@endsection
