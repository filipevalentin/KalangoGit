@extends('master-prof')

@section('modals')

<div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><i class="fa fa-envelope-o"> </i> Nova Mensagem</h4>
            </div>
            <form action="/professor/mensagem/enviar" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">Para:</span>
                            <select class="form-control alunoObrigatorio" name="idUsuarioDestino" id="idUsuarioDestino">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control tituloObrigatorio" type="text" id="titulo" name="titulo" maxlength="100" placeholder="Titulo">
                    </div>
                    <div class="form-group">
                        <textarea name="conteudo" id="email_message" class="form-control mensagemObrigatoria" maxlength="8000" placeholder="Mensagem" style="height: 120px;"></textarea>
                    </div>
                </div>
                <div class="modal-footer clearfix">
                    <button type="submit" class="btn btn-primary pull-right btn-enviar"><i class="fa fa-envelope"></i> Enviar</button>
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Descartar</button>
                </div>
            </form>
        </div> 
    </div> 
</div>

@endsection

<?php $cont = 1; ?>


@section('maincontent')

<section class="content-header">
    <h1>Gerenciar Turmas</h1>
    <ol class="breadcrumb">
        <li><a href="#" ><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Widgets</li>
    </ol>
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">

            <h2 class="page-header"> {{$turma->modulo->nome}}</h2>

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lista de Alunos - Turma {{$turma->nome}} </h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th style="/* width: 10px */">#</th>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th style="/* width: 40px */">E-mail</th>
                                <th>Ação</th>
                            </tr>
                            @foreach($alunos as $aluno)
                            <tr>
                                <td>{{$cont++}}</td>
                                <td>{{User::find($aluno->id)->nome}}</td>
                                <td>{{User::find($aluno->id)->sobrenome}}</td>
                                <td>{{User::find($aluno->id)->email}}</td>
                                <td>
                                    <div class="box-tools" style="padding:0px">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#compose-modal" data-idUsuarioDestino="{{$aluno->id}}" data-nomeDestino="{{$aluno->usuario->nome}}">Enviar mensagem</button>
                                    </div>
                                </td> 
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div>

        </div>
    </div> 

</section>

    @section('scripts')

        <script>
        $('#compose-modal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var idUsuarioDestino = button.data('idusuariodestino');
            var nomeDestino = button.data('nomedestino');
            var modal = $(this);

            modal.find('#idUsuarioDestino option').val(idUsuarioDestino);
            modal.find('#idUsuarioDestino option').text(nomeDestino);
        });
           

            $('.item').first().addClass("active")

        </script>
    @endsection

@endsection
