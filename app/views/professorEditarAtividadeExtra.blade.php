@extends('master-prof')

@section('modals')

<div class="modal fade" id="editarme" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Editar Questão</h4>
            </div>
            <div class="modal-body">

                <form method="POST" action="/atualizarMultiplaEscolha" id="form" enctype="multipart/form-data">

                    <h3>Pergunta</h3><hr>

                    <div class="form-group">
                        <label for="idioma" class="control-label">Tipo</label>
                        <select id="pergunta" name="pergunta" class="form-control">
                          <option id="texto" value="1">Texto</option> <!-- nessa opção Retirar o campo URL/Arquivo com jquery-->
                          <option id="imagem" value="2">Imagem</option>
                          <option id="audio" value="3">Áudio</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="categoria" name="categoria">
                    </div>
                    <div class="form-group">
                        <label for="titulo" class="control-label">Tíitulo</label>
                        <input type="text" id="titulo" name="titulo" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="arquivo" class="control-label">Arquivo</label>
                        <input type="file" id="arquivo" name="arquivo" class="form-control" ></input>
                    </div>
                    
                    <h3>Alternativas</h3><hr>

                    <div class="form-group">
                        <label for="idioma" class="control-label">Tipo</label>
                        <select id="resposta" name="resposta" class="form-control">
                          <option id="texto" value="1">Texto</option> <!-- nessa opção Retirar o campo URL/Arquivo com jquery-->
                          <option id="imagem" value="2">Imagem</option>
                          <option id="audio" value="3">Áudio</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="a" class="control-label">Alternativa A</label>
                        <input type="text" id="a" name="a" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="b" class="control-label">Alternativa B</label>
                        <input type="text" id="b" name="b" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="c" class="control-label">Alternativa C</label>
                        <input type="text" id="c" name="c" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="d" class="control-label">Alternativa D</label>
                        <input type="text" id="d" name="d" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="idioma" class="control-label">Resposta Correta</label>
                        <select name="respostacerta" id="respostacerta" class="form-control">
                          <option id="a" value="a">Alternativa A</option> <!-- nessa opção Retirar o campo URL/Arquivo com jquery-->
                          <option id="b" value="b">Alternativa B</option>
                          <option id="c" value="c">Alternativa C</option>
                          <option id="d" value="d">Alternativa D</option>
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

<div class="modal fade" id="editarru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Editar Questão</h4>
            </div>
            <div class="modal-body">

                <form method="POST" action="/atualizarRespostaUnica" id="form" enctype="multipart/form-data">

                    <h3>Pergunta</h3><hr>

                    <div class="form-group">
                        <label for="idioma" class="control-label">Tipo</label>
                        <select id="pergunta" name="pergunta" class="form-control">
                          <option id="texto" value="1">Texto</option> <!-- nessa opção Retirar o campo URL/Arquivo com jquery-->
                          <option id="imagem" value="2">Imagem</option>
                          <option id="audio" value="3">Áudio</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id">
                    </div>
                    <div class="form-group">
                        <label for="titulo" class="control-label">Tíitulo</label>
                        <input type="text" id="titulo" name="titulo" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="arquivo" class="control-label">Arquivo</label>
                        <input type="file" id="arquivo" name="arquivo" class="form-control"></input>
                    </div>
                    
                    <h3>Resposta Correta</h3><hr>

                    <div class="form-group">
                        <label for="respostaCerta" class="control-label">Resposta Correta</label>
                        <input type="text" id="respostaCerta" name="respostaCerta" class="form-control"></input>
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

<div class="modal fade" id="criarquestao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Nova Questão</h4>
            </div>
            <div class="modal-body">

                <div class="text-center">
                    <button class="btn btn-primary" type="button" id="btnMe">Múltipla Escolha</button>
                    <button class="btn btn-success" type="button" id="btnRu">Dissertativa</button>
                </div>

                <form method="POST" action="/criarQuestaoME" id="formme" style="display:none;" enctype="multipart/form-data">

                    <h3>Pergunta</h3><hr>

                    <div class="form-group">
                        <label for="idioma" class="control-label">Tipo</label>
                        <select name="pergunta" id="pergunta" class="form-control">
                          <option id="texto" value="1">Texto</option> <!-- nessa opção Retirar o campo URL/Arquivo com jquery-->
                          <option id="imagem" value="2">Imagem</option>
                          <option id="audio" value="3">Áudio</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="hidden" class="form-control" id="idexercicio" name="idexercicio">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="categoria" name="categoria">
                    </div>
                    <div class="form-group">
                        <label for="titulo" class="control-label">Tíitulo</label>
                        <input type="text" id="titulo" name="titulo" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="arquivo" class="control-label">Arquivo</label>
                        <input type="file" id="arquivo" name="arquivo" class="form-control"></input>
                    </div>
                    
                    <h3>Alternativas</h3><hr>

                    <div class="form-group">
                        <label for="idioma" class="control-label">Tipo</label>
                        <select name="resposta" id="resposta" class="form-control">
                          <option id="texto" value="1">Texto</option> <!-- nessa opção Retirar o campo URL/Arquivo com jquery-->
                          <option id="imagem" value="2">Imagem</option>
                          <option id="audio" value="3">Áudio</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="a" class="control-label">Alternativa A</label>
                        <input type="text" id="a" name="a" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="b" class="control-label">Alternativa B</label>
                        <input type="text" id="b" name="b" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="c" class="control-label">Alternativa C</label>
                        <input type="text" id="c" name="c" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="d" class="control-label">Alternativa D</label>
                        <input type="text" id="d" name="d" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="idioma" class="control-label">Resposta Correta</label>
                        <select name="respostaCerta" id="respostaCerta" class="form-control">
                          <option id="a" value="a">Alternativa A</option> <!-- nessa opção Retirar o campo URL/Arquivo com jquery-->
                          <option id="b" value="b">Alternativa B</option>
                          <option id="c" value="c">Alternativa C</option>
                          <option id="d" value="d">Alternativa D</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary" value="Salvar">
                    </div>
                </form>
                
                <form action="/criarQuestaoRU" method="POST" id="formru" style="display:none;" enctype="multipart/form-data">

                    <h3>Pergunta</h3><hr>

                    <div class="form-group">
                        <label for="idioma" class="control-label">Tipo</label>
                        <select name="pergunta" id="pergunta" class="form-control">
                          <option id="texto" value="1">Texto</option> <!-- nessa opção Retirar o campo URL/Arquivo com jquery-->
                          <option id="imagem" value="2">Imagem</option>
                          <option id="audio" value="3">Áudio</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="hidden" class="form-control" id="idexercicio" name="idexercicio">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="categoria" name="categoria">
                    </div>
                    <div class="form-group">
                        <label for="titulo" class="control-label">Tíitulo</label>
                        <input type="text" id="titulo" name="titulo" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="arquivo" class="control-label">Arquivo</label>
                        <input type="file" id="arquivo" name="arquivo" class="form-control"></input>
                    </div>
                    
                    <h3>Resposta Correta</h3><hr>

                    <div class="form-group">
                        <label for="respostaCerta" class="control-label">Resposta Correta</label>
                        <input type="text" id="respostaCerta" name="respostaCerta" class="form-control"></input>
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
    <h1>Criar Exercício</h1>
    <ol class="breadcrumb">
        <?php
            $aux = Session::get('bc');
        ?>
        @foreach($aux as $b)
            <li><a href="{{$b['link']}}" >{{$b['nome']}}</a></li>
        @endforeach
    </ol>
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">

            <h2 class="page-header">Inglês - Teens - Módulo 1 - Aula 2</h2>

            <div class="col-md-8">
                <div class="box box-solid">
                    <div class="box-header">
                        <h3 class="box-title">{{$exercicio->nome}}</h3>
                        <div class="box-tools pull-right" style="padding: 10px 20px 5px 5px;">
                            <button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarquestao" data-idexercicio="{{$exercicio->id}}"><i class="fa fa-plus"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="box-group connectedSortable ui-sortable" id="accordion">
                        <?php $aux = 1;
                            $questoes = $exercicio->questoesRU->combine($exercicio->questoesME)->sortBy('numero');
                        ?>
                            
                            @if($questoes->count() == 0)

                            <div class="callout callout-danger">
                                <h4>Nenhuma questão cadastrada</h4>
                            </div>
                                
                            @endif

                            @foreach($questoes as $questao)
                                @if(get_class($questao) == "QuestaoMultiplaEscolha")

                                <div class="panel box box-primary ui-sortable-handle">
                                    <div class="box-header">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#ME{{$questao->id}}" class="">Questão {{$aux++}}</a>
                                        </h4>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editarme" data-id="{{$questao->id}}" data-titulo="{{$questao->titulo}}" data-categoria="{{$questao->categoria}}" data-a="{{$questao->alternativaA}}" data-b="{{$questao->alternativaB}}" data-c="{{$questao->alternativaC}}" data-d="{{$questao->alternativaD}}" data-respostacerta="{{$questao->respostaCerta}}" data-numero="{{$questao->numero}}" data-tipo="me"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div id="ME{{$questao->id}}" class="panel-collapse collapse">
                                        <div class="box-body">
                                            <div class="row" style="margin:0px;">
                                                <div class="box text-center">
                                                    <div class="box-header">
                                                        <h3 class="box-title center" style="float: none;">{{$questao->titulo}}</h3>
                                                    </div>
                                                    <div class="box-body">
                                                    <?php $categoria = (string)($questao->categoria);?>

                                                    @if(substr($categoria, 0, 1)==2)
                                                        <img src="/{{$questao->urlMidia}}" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 300px;">
                                                    @elseif(substr($categoria, 0, 1)==3)
                                                        <audio id="audio" controls="controls" style="display:none;">  
                                                            <source src="/{{$questao->urlMidia}}" />
                                                        </audio>
                                                        <div id="playParent" class="row">
                                                            <div class="small-box bg-aqua" style="width: 100px; margin:auto; font-size: -webkit-xxx-large;">
                                                                <i id="play" class="ion ion-play" style=""></i>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    
                                                    </div>
                                                    
                                                    <div class="row" style="width: 98%; margin: auto;">

                                                        @if(substr($categoria, 1)==2)
                                                            <div class="col-md-6" style="padding-bottom: 5px;">
                                                                <button class="btn btn-block btn-flat bg-aqua" style="border-radius: 16px;">
                                                                    <img src="/{{$questao->alternativaA}}" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 100px;">
                                                                </button>
                                                                <button class="btn btn-block btn-flat bg-red" style="border-radius: 16px;">
                                                                     <img src="/{{$questao->alternativaB}}" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 100px;">
                                                                </button>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <button class="btn btn-block btn-flat bg-green" style="border-radius: 16px;">
                                                                     <img src="/{{$questao->alternativaC}}" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 100px;">
                                                                </button>
                                                                <button class="btn btn-block btn-flat bg-orange" style="border-radius: 16px;">
                                                                     <img src="/{{$questao->alternativaD}}" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 100px;">
                                                                </button>
                                                            </div>

                                                        @elseif(substr($questao->categoria, 1)==3)
                                                            <div class="col-md-6 " style="padding-bottom: 5px;">
                                                                <audio id="audio" controls="controls" style="display:none;">  
                                                                    <source src="/{{$questao->alternativaA}}">
                                                                </audio>
                                                                <div id="playParent" class="row" style="margin: auto;padding-left: 30px;">
                                                                    <button class="btn btn-primary" style="  font-size: xx-large;">
                                                                        <i id="play" class="ion ion-play" style=""></i>
                                                                    </button>
                                                                    <button class="btn btn-info" style="width: 140px;  font-size: xx-large;">
                                                                        <i id="enviar" class="ion ion-checkmark" style=""></i>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 " style="padding-bottom: 5px;">
                                                                <audio id="audio" controls="controls" style="display:none;">  
                                                                    <source src="/{{$questao->alternativaB}}">
                                                                </audio>
                                                                <div id="playParent" class="row" style="margin: auto;padding-left: 30px;">
                                                                    <button class="btn btn-primary" style="  font-size: xx-large;">
                                                                        <i id="play" class="ion ion-play" style=""></i>
                                                                    </button>
                                                                    <button class="btn btn-danger" style="width: 140px;  font-size: xx-large;">
                                                                        <i id="enviar" class="ion ion-checkmark" style=""></i>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 " style="padding-bottom: 5px;">
                                                                <audio id="audio" controls="controls" style="display:none;">  
                                                                    <source src="/{{$questao->alternativaC}}">
                                                                </audio>
                                                                <div id="playParent" class="row" style="margin: auto;padding-left: 30px;">
                                                                    <button class="btn btn-primary" style="  font-size: xx-large;">
                                                                        <i id="play" class="ion ion-play" style=""></i>
                                                                    </button>
                                                                    <button class="btn btn-success" style="width: 140px;  font-size: xx-large;">
                                                                        <i id="enviar" class="ion ion-checkmark" style=""></i>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 " style="padding-bottom: 5px;">
                                                                <audio id="audio" controls="controls" style="display:none;">  
                                                                    <source src="/{{$questao->alternativaD}}">
                                                                </audio>
                                                                <div id="playParent" class="row" style="margin: auto;padding-left: 30px;">
                                                                    <button class="btn btn-primary" style="  font-size: xx-large;">
                                                                        <i id="play" class="ion ion-play" style=""></i>
                                                                    </button>
                                                                    <button class="btn btn-warning" style="width: 140px;  font-size: xx-large;">
                                                                        <i id="enviar" class="ion ion-checkmark" style=""></i>
                                                                    </button>
                                                                </div>
                                                            </div>


                                                        @elseif(substr($categoria, 1)==1)
                                                            <div class="col-md-6" style="padding-bottom: 5px;">
                                                                <button class="btn btn-block btn-flat bg-aqua">{{$questao->alternativaA}}</button>
                                                                <button class="btn btn-block btn-flat bg-red">{{$questao->alternativaB}}</button>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <button class="btn btn-block btn-flat bg-green">{{$questao->alternativaC}}</button>
                                                                <button class="btn btn-block btn-flat bg-orange">{{$questao->alternativaD}}</button>
                                                            </div>
                                                        @endif
                                                        

                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if(get_class($questao) == "QuestaoRespostaUnica")

                                <div class="panel box box-primary ui-sortable-handle">
                                    <div class="box-header">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#RU{{$questao->id}}" class="">Questão {{$aux++}}</a>
                                        </h4>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editarru" data-id="{{$questao->id}}" data-titulo="{{$questao->titulo}}" data-categoria="{{$questao->categoria}}" data-respostaCerta="{{$questao->respostaCerta}}" data-numero="{{$questao->numero}}" data-tipo="ru"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div id="RU{{$questao->id}}" class="panel-collapse collapse">
                                        <div class="box-body">
                                            <div class="row" style="margin:0px;">
                                                <div class="box text-center">
                                                    <div class="box-header">
                                                        <h3 class="box-title center" style="float: none;">{{$questao->titulo}}</h3>
                                                    </div>
                                                    <div class="box-body">

                                                    @if(substr((string)$questao->categoria, 0, 1)==2)
                                                        <img src="/{{$questao->urlMidia}}" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 300px;">
                                                    @elseif(substr((string)$questao->categoria, 0, 1)==3)
                                                        <audio id="audio" controls="controls" style="display:none;">  
                                                            <source src="/{{$questao->urlMidia}}" />
                                                        </audio>
                                                        <div id="playParent" class="row">
                                                            <div class="small-box bg-aqua" style="width: 100px; margin:auto; font-size: -webkit-xxx-large;">
                                                                <i id="play" class="ion ion-play" style=""></i>
                                                            </div>
                                                        </div>

                                                        
                                                    @endif

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-1"></div>

                                                        <div class="col-md-10" style="padding-bottom: 5px;">
                                                            <label for="repostaCorreta" class="control-label">Resposta Correta</label>
                                                            <p>{{$questao->respostaCerta}}</p>
                                                        </div>

                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
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

<script>

    $('#audio, #audioA, #audioB, #audioC, #audioD').on('ended', function(){
        $(this).siblings("div#playParent").find('i#play').removeClass('ion-pause').addClass('ion-play');
    });


    $('i#play').click(function () {
        console.log('Fui clicado');
        var button = $(this);
        var audio = $(this).closest('div#playParent').siblings('#audio')[0];

        if (audio.paused){
            audio.play();
            button.removeClass("ion ion-play").addClass('ion ion-pause');
        }else{
            audio.pause();
            button.removeClass("ion ion-pause").addClass('ion ion-play');
        }
    });

</script>

<script>

    var ordemAtual = [];
    var cont=0;

    var ordemNova = [];
    var idExercicio = $('button[data-idexercicio]').attr('data-idexercicio');
    var data= {0: idExercicio};


    $( ".ui-sortable" ).sortable({

        revert:true,

        start: function( event, ui){
            ordemAtual = [];
            $('button[data-numero]').each(function(index, el) {
                ordemAtual.push($(el).attr('data-numero'));        
            });
            ordemAtual = ordemAtual.sort();
            
        },

        update: function( event, ui ) {

            ordemNova = [];
            $('button[data-numero]').each(function(index, el) {
                ordemNova.push($(el).attr('data-numero'));
            });
            console.log("Oderm Nova: "+ordemNova);

            $.each(ordemNova, function(index, val) {
                console.log(ordemNova.indexOf((index+1).toString())+1);
                data[index+1] = ordemNova.indexOf((index+1).toString())+1;
            });
            console.log(data);

            $.post('/alterarOrdem',data,
                        function(data){
                            alert(data);
                        }
                    );

            $('button[data-numero]').each(function(index, el) {
                $(el).attr('data-numero', ordemAtual[index]);        
            });
            
        }
    });
</script>

<script>
    $('#editarme').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget) // Button that triggered the modal
        var dataid = button.data('id')
        var datatitulo = button.data('titulo')
        var datacategoria = button.data('categoria')
        var pergunta = String(datacategoria).substring(0,1)
        var resposta = String(datacategoria).substring(1,2)
        var respostacerta = button.data('respostacerta');
         // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('#id').val(dataid)
        modal.find('#titulo').val(datatitulo)
        modal.find('#categoria').val(datacategoria)
        modal.find('#pergunta').val(pergunta)
        modal.find('#resposta').val(resposta)
        modal.find('#respostacerta').val(respostacerta);

        if(modal.find('select#resposta').val()!=1){
                modal.find('#a, #b, #c, #d').attr("type", "file")
            }
            else{
                modal.find('#a, #b, #c, #d').attr("type", "text")
                var dataa = button.data('a');
                var datab = button.data('b');
                var datac = button.data('c');
                var datad = button.data('d');
                modal.find('#a').val(dataa);
                modal.find('#b').val(datab);
                modal.find('#c').val(datac);
                modal.find('#d').val(datad);
            }

        if(modal.find('select#pergunta').val()==1){
            modal.find('#arquivo').fadeOut().siblings().fadeOut();
        }
        else{
           modal.find('#arquivo').fadeIn().siblings().fadeIn();
        }
        
    })

    $('#editarru').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget) // Button that triggered the modal
        var dataid = button.data('id')
        var datatitulo = button.data('titulo')
        var datacategoria = button.data('categoria')
        var pergunta = datacategoria
        var respostaCerta = button.data('respostacerta')
         // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('#id').val(dataid)
        modal.find('#titulo').val(datatitulo)
        modal.find('#categoria').val(datacategoria)
        modal.find('#pergunta').val(pergunta)
        modal.find('#respostaCerta').val(respostaCerta)


        if(modal.find('select#pergunta').val()==1){
            modal.find('#arquivo').fadeOut().siblings().fadeOut();
        }
        else{
           modal.find('#arquivo').fadeIn().siblings().fadeIn();
        }
            
    })

    $('select#pergunta').on('change', function (event){
        if($(this).val()==1){
            $(this).parents('.modal-body').find('#arquivo').fadeOut().siblings().fadeOut();
        }
        else{
            $(this).parents('.modal-body').find('#arquivo').fadeIn().siblings().fadeIn();
        }
    })

    $('select#resposta').on('change', function (event){
        if($(this).val()!=1){
            $(this).parents('.modal-body').find('input#a, input#b, input#c, input#d').attr("type", "file")
        }
        else{
            $(this).parents('.modal-body').find('input#a, input#b, input#c, input#d').attr("type", "text")
        }
    })

    $('#criarquestao').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var dataidexercicio = button.data('idexercicio')
        // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('input#idexercicio').val(dataidexercicio)

        if(modal.find('select#resposta').val()!=1){
                modal.find('#a, #b, #c, #d').attr("type", "file")
            }
            else{
                modal.find('#a, #b, #c, #d').attr("type", "text")
            }

        if(modal.find('select#pergunta').val()==1){
            modal.find('#arquivo').fadeOut().siblings().fadeOut();
        }
        else{
           modal.find('#arquivo').fadeIn().siblings().fadeIn();
        }
        
    })

    $('button#btnMe').on('click', function(event) {
         event.preventDefault();
         $('form#formru').hide();
         $('form#formme').fadeIn();
     })

     $('button#btnRu').on('click', function(event) {
         event.preventDefault();
         $('form#formme').hide();
         $('form#formru').fadeIn();
     })

</script>
@endsection
           <!-- Scripts import -->