@extends('master-prof')

@section('modals')


@endsection

@section('maincontent')
<section class="content-header">
    <h1>Criar Exercício</h1>
    <ol class="breadcrumb">
        <?php
            $aux2 = Session::get('bc');
        ?>
        @foreach($aux as $b)
            <li><a href="{{$b['link']}}" >{{$b['nome']}}</a></li>
        @endforeach
    </ol>
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">

                <div class="box-header">
                    <h3 class="box-title">Turmas</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                        @for($i=0; $i <= (int)(count($turmasArray)/5); $i++)
        
                            <div class="item">

                            @for($j=4*$i; $j<4*$i+4 && $j<(count($turmasArray)); $j++)


                                <div class="col-sm-3">
                                    <div class="box-body">
                                        <div class="small-box bg-blue">
                                            <div class="inner">
                                                <div class="turma" style="cursor:pointer;" data-idTurma="{{$turmasArray[$j]['id']}}">
                                                    <h4 style="font-size: 20px;">{{$turmasArray[$j]['nome']}}</h4>
                                                    <p style="margin:0px;">{{$turmasArray[$j]['alunosTurma']->count()}} Alunos</p>
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

            <h2 class="page-header">Inglês - Teens - Módulo 1 - Aula 2</h2>

            <div class="col-md-8">
                <div class="box box-solid">
                    <div class="box-header">
                        <h3 class="box-title">{{$exercicio->nome}}</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="box-group " id="accordion">
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

                                <div class="panel box box-primary">
                                    <div class="box-header">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-questao="{{$aux-1}}" data-parent="#accordion" href="#ME{{$questao->id}}" class="">Questão {{$aux++}}</a>
                                        </h4>
                                    </div>
                                    <div id="ME{{$questao->id}}" class="panel-collapse collapse">
                                        <div class="box-body">
                                            <div class="row" style="margin:0px;">
                                                <div class="box text-center">
                                                    <div class="box-header">
                                                        <h3 class="box-title center" style="float: none;">{{$questao->titulo}}</h3>
                                                    </div>
                                                    <div class="box-body">
                                                        <?php $categoria = (string)($questao->categoria); ?>

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
                                                                <button class="btn btn-block btn-flat bg-aqua" data-alternativa="A" style="border-radius: 16px;">
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

                                                    <div class="row">
                                                        <div class="col-md-1"></div>

                                                        <div class="col-md-10" style="padding-bottom: 5px;">
                                                            <label for="repostaCorreta" class="control-label">Resposta Correta</label>
                                                           <?php
                                                                switch($questao->respostaCerta)
                                                                {
                                                                    case 'a':
                                                                        echo '<p class="bg-aqua"> A) Azul</p>';
                                                                        break;

                                                                    case 'b':
                                                                        echo '<p class="bg-red"> B) Vermelho</p>';
                                                                        break;

                                                                    case 'c':
                                                                        echo '<p class="bg-green"> C) Verde</p>';
                                                                        break;
                                                                        
                                                                    case 'd':
                                                                        echo '<p class="bg-orange"> D) Laranja</p>';
                                                                        break;

                                                                }
                                                            ?>
                                                        </div>

                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if(get_class($questao) == "QuestaoRespostaUnica")

                                <div class="panel box box-primary ">
                                    <div class="box-header">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion" data-questao="{{$aux-1}}" href="#RU{{$questao->id}}" class="">Questão {{$aux++}}</a>
                                        </h4>
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

            @foreach($turmas as $turma)

                <?php $alunos = $turma->alunosTurma; ?>

                <div class="col-md-4 alunosTurma" id="{{$turma->id}}" style="display: none;">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Relatório de Acesso - Turma {{$turma->nome}} </h3>
                        </div><!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table">
                                <tbody>
                                    <tr>
                                        <th style="/* width: 10px */ display:none;">#</th>
                                        <th>Nome</th>
                                        <th>Desempenho</th>
                                        <th>Ação</th>
                                    </tr>
                                    @foreach($alunos as $aluno)
                                    <tr id="aluno" data-respostas="<?php
                                        for ($i=0; $i <sizeof($aluno->respostas) ; $i++) { 
                                            echo $aluno->respostas[$i];
                                        }

                                     ?>">
                                        <td style="display: none;">{{$aluno->matricula}}</td>
                                        <td>{{User::find($aluno->id)->nome}} {{User::find($aluno->id)->sobrenome}}</td>
                                        <td>90%</td>
                                        <td>
                                            <div class="box-tools" style="padding:0px">
                                                <button>Enviar feedback</button>
                                            </div>
                                        </td> 
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.box-body -->
                    </div>
                </div>

            @endforeach

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

    $('div.turma').on('click', (function(event) {
        var idTurma = $(this).data('idturma');
        $('div.alunosTurma').fadeOut();
        $('div.alunosTurma#'+idTurma).fadeIn();
        
        //$("div.conteudocurso[id="+id+"]").delay(401).fadeIn();
    }));

    $('.item').first().addClass("active");

</script>

<script>
    // *Inserir lógica na rota:-> adicionar a cada obejto aluno a info se ele respondeu um exercicio ou nao, buscando no banco
    // ao carregar a página colocar os alunos que não respondeu com um destaque, e por no fim da lista
    // Escutar quando uma questão é clicada

    $('a[data-questao]').on('click', (function(event) {
        var button = $(this);
        var questao = button.data('questao');
        //console.log(questao);
        var alunos = $('tr#aluno');
        //console.log(alunos);

        $.each(alunos, function(index, val) {
            var texto = $(val).data('respostas');
            if($.type(texto) == "number"){
                texto = texto.toString();
            }
            console.log(texto[questao]);
            if(texto[questao] == 1){
                $(val).css("background-color","blue");
                console.log('Mudando cor para azul');
            }else{
                $(val).css("background-color","red");
                console.log('Mudando cor para vermelho');
            }
        });

    }));
    // buscar todos os alunos que responderam todas as questoes
    // adicionar uma classe data-respostas="" conforme o resultado -Acertou ou Errou

</script>
@endsection

<!-- Scripts import -->