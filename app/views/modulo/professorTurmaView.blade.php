@extends('master-prof')

@section('modals')

<div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><i class="fa fa-envelope-o"> </i> Enviar Feedback</h4>
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
                        <input class="form-control tituloObrigatorio" type="text" id="titulo" maxlength="100" placeholder="Titulo" name="titulo">
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

<div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Vídeo</h4>
                </div>
                <div class="modal-body">
                    <video class="center-block" width="320" height="240" id="videoplayer" controls style="max-width:100%; display: block; height:auto;">
                      <source src="" type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>

@endsection

<?php $cont = 1; ?>

@section('maincontent')
    <section class="content-header">
        <h1>Gerenciar Aulas</h1>
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

                <h2 class="page-header">Inglês - Teens - Módulo 1</h2>

                <div class="col-md-8">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">Conteúdos</h3>
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
                                    </div>
                                    <div id="{{$aula->id}}" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="box-body">
                                            <div class="row" style="margin:0px;">
                                            
                                            @if($aula->materialApoio->count() == 0 && $aula->atividades->count() == 0 )
                                                <div class="callout callout-danger" style="max-width:50%; margin:auto;">
                                                    <h4 class="center">Nenhum conteúdo de aula</h4>
                                                </div>
                                            @endif

                                            

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
                                                    </div>
                                                </div>
                                            @endforeach

                                            @foreach ($aula->atividades as $atividade)
                                                <div class="alert bg-primary alert-dismissable" style="min-height: 55px;">
                                                    <i class="fa  fa-check-circle" style="left: -15px; top: 7px;"></i>
                                                    <p style="float:left;">{{$atividade->nome}}</p>
                                                    <div class="box-tools pull-right">
                                                        <a href="/professor/atividade/turma/{{$atividade->id}}/{{$turma->id}}"><button class="btn btn-primary btn-xs"><i class="fa fa-file-text-o"></i></button></a>
                                                    </div>
                                                </div>
                                            @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div><!-- /.box-body -->
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Relatório de Acesso - Turma {{$turma->nome}} </h3>
                        </div><!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th style="/* width: 10px */">#</th>
                                        <th>Nome</th>
                                        <th>Atividades Acessadas</th>
                                    </tr>
                                    @foreach($alunos as $aluno)
                                    <tr>
                                        <td>{{$cont++}}</td>
                                        <td>{{User::find($aluno->id)->nome}} {{User::find($aluno->id)->sobrenome}}</td>
                                        <td>{{$aluno->presenca*100}}%</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.box-body -->
                    </div>
                </div>

            </div>
        </div> 
    </section>

@endsection
    

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

    $('#video').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var datasrc = "http://tcc.git/";
            var src = button.data('url');
            datasrc = datasrc.concat(src);
            var modal = $(this)

            modal.find('source').attr('src', datasrc);
            modal.find('video').load();
            })

        $('#video').on('hidden.bs.modal', function () {
            var modal = $(this)
            var vid = document.getElementById('videoplayer')
            vid.pause();
        })
</script>
   
@endsection