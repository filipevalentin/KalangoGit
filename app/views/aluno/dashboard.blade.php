@extends('master')

@section('modals')
	
@endsection

@section('maincontent')

<section class="content-header">
    <h1>Desempenho</h1>
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

    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
        @foreach($turmas as $turma)
            <li class="tab"><a href="#{{$turma->id}}" data-toggle="tab">{{$turma->nome}}</a></li>
        @endforeach
        </ul>
        <div class="tab-content">
        @foreach($turmas as $turma)
            <div class="tab-pane fade" id="{{$turma->id}}">
                <!-- Dados Gerais -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box box-solid" style="background: #B6703D; color: black;">
                            <div class="box-header">
                                <h3 class="box-title" style="color: white;">Meu Desempenho</h3>
                            </div> 
                            <div class="box-body" style="background: rgb(236, 236, 236)">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-3 center" style="text-align: center">
                                        <span class="profile-picture">
                                             @if(Auth::user()->urlImagem != null)
                                                <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" style="max-height: 200px;" src="/{{Auth::user()->urlImagem}}">
                                            @else
                                                 <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" style="max-height: 200px;" src="/images/default.png">
                                            @endif
                                        </span>
                                    </div>
                                    <div class="col-sm-9">
                                        <ul style="padding:0px; list-style: none;">
                                            <li style="font-size: x-large;font-weight: 600;">{{Auth::user()->nome}} {{Auth::user()->sobrenome}}</li>
                                            <li style="font-size: large;font-weight: 500;">{{$turma->nome}}</li>
                                            <li style="font-size: large;font-weight: 500;">Ranking Turma: {{$turma->meuRanking['turma']+1}}º  - Ranking Módulo: {{$turma->meuRanking['modulo']+1}}º</li>
                                            <li style="font-size: large;font-weight: 500;">Pontuação: {{$turma->pivot->pontuacao}} Pontos
                                                <?php
                                                    $pontos = $turma->pivot->pontuacao;
                                                ?> 
                                                @if($pontos < 5000)
                                                    <small class="pull-right">{{($pontos/5000)*100}}%</small>
                                                    <div class="progress" style="margin-top:5px; margin-bottom: 5px; height: 20px;background: white;">
                                                        <div class="progress-bar" style="width: {{($pontos/5000)*100}}%;background-color: darkgoldenrod;"><!-- Cores: bronze: darkgoldenrod, prata: silver, ouro: gold -->
                                                        {{$turma->pivot->pontuacao}} Pontos
                                                        </div>
                                                    </div>
                                                    <p class=""> Nenhuma Medalha - Faltam {{5000 - $pontos}} pontos para Bronze</p>
                                                @elseif($pontos < 10000)
                                                    <small class="pull-right">{{(($pontos-5000)/5000)*100}}%</small>
                                                    <div class="progress" style="margin-top:5px; height: 20px;background: white;">
                                                        <div class="progress-bar" style="width: {{(($pontos-5000)/5000)*100}}%;background-color: silver;"><!-- Cores: bronze: darkgoldenrod, prata: silver, ouro: gold -->
                                                        {{$turma->pivot->pontuacao}} Pontos
                                                        </div>
                                                    </div>
                                                    <li style="font-size: large;font-weight: 500; float:left;">
                                                        <small><img src="/images/bronze.png" alt="" style="max-height:35px; padding-left:5px"></small>
                                                    </li>
                                                    <p class="pull-right">Faltam {{10000 - $pontos}} pontos para Prata</p>
                                                @elseif($pontos < 15000)
                                                    <small class="pull-right">{{(($pontos-10000)/5000)*100}}%</small>
                                                    <div class="progress" style="margin-top:5px; height: 20px;background: white;">
                                                        <div class="progress-bar" style="width: {{(($pontos-10000)/5000)*100}}%;background-color: gold;"><!-- Cores: bronze: darkgoldenrod, prata: silver, ouro: gold -->
                                                        {{$turma->pivot->pontuacao}} Pontos
                                                        </div>
                                                    </div>
                                                    <li style="font-size: large;font-weight: 500; float:left;">
                                                        <small><img src="/images/bronze.png" alt="" style="max-height:35px; padding-left:5px"></small>
                                                        <small><img src="/images/prata.png" alt="" style="max-height:35px; padding-left:5px"></small>
                                                    </li>
                                                    <p class="pull-right"> Faltam {{15000 - $pontos}} pontos para Ouro</p>
                                                @elseif($pontos >= 20000)
                                                    <small class="pull-right">100%</small>
                                                    <div class="progress" style="margin-top:5px; height: 20px;background: white;">
                                                        <div class="progress-bar" style="width: 100%;background-color: gold;"><!-- Cores: bronze: darkgoldenrod, prata: silver, ouro: gold -->
                                                        {{$turma->pivot->pontuacao}} Pontos
                                                        </div>
                                                    </div>
                                                    <li style="font-size: large;font-weight: 500; float:left;">
                                                        <small><img src="/images/bronze.png" alt="" style="max-height:35px; padding-left:5px"></small>
                                                        <small><img src="/images/prata.png" alt="" style="max-height:35px; padding-left:5px"></small><small><img src="/images/ouro.png" alt="" style="max-height:35px; padding-left:5px"></small>
                                                    </li>
                                                    <p class="pull-right">Parabéns!!! Você conquistou todas as Medalhas!</p>
                                                @endif
                                            </li>
                                        </ul>
                                    </div>   
                                </div>
                            </div> 
                        </div> 
                    </div>
                    <div class="col-lg-6">
                        <div class="box box-solid " style="background: #3F74D3; color: black;">
                            <div class="box-header">
                                <h3 class="box-title" style="color: white;">Estatísticas</h3>
                            </div> 
                            <div class="box-body" style="background: rgb(236, 236, 236)">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 center">
                                        <p> Respostas Corretas </p>
                                        <input type="text" class="knob" data-fgColor="green" data-bgColor="white" data-inputColor="black" data-width="95" data-height="95" data-skin="tron" value="{{$turma->acertos}}" data-max="{{$turma->questoes->count()}}" data-readOnly="true">
                                    </div>
                                    <div class="col-xs-12 col-sm-4 center">
                                        <p> Respostas Erradas </p>
                                        <input type="text" class="knob" data-fgColor="tomato" data-bgColor="white" data-inputColor="black" data-width="95" data-height="95" data-skin="tron" value="{{$turma->erros}}" data-max="{{$turma->questoes->count()}}" data-readOnly="true">
                                    </div>
                                    <div class="col-xs-12 col-sm-4 center">
                                        <p> Respostas Total </p>
                                        <input type="text" class="knob" data-fgColor="orange" data-bgColor="white" data-inputColor="black" data-width="95" data-height="95" data-skin="tron" value="{{$turma->questoes->count()}}" data-max="{{$turma->questoes->count()}}" data-readOnly="true">
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </div>
                </div>

                <!-- Tópicos -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box box-solid " style="background: limegreen; color: black;">
                            <div class="box-header">
                                <h3 class="box-title" style="color: white;">Tópicos</h3>
                            </div> 
                            <div class="box-body" style="background: rgb(236, 236, 236)">
                                <ul style="padding:0px; list-style: none;">
                                @foreach($turma->topicos as $topico)
                                    @if($topico->pontos < 2500)
                                        <li style="font-size:larger; font-weight: 500;">{{$topico->nome}}:
                                            <small class="pull-right">{{($topico->pontos/2500)*100}}%</small>
                                            <div class="progress" style="margin-top:5px; height: 15px;background: white;">
                                                <div class="progress-bar" style="width: {{($topico->pontos/2500)*100}}%;background-color: darkgoldenrod; line-height: 15px;"> <!-- Cores: bronze: darkgoldenrod, prata: silver, ouro: gold -->
                                                {{$topico->pontos}} pontos
                                                </div>
                                            </div>
                                        </li>
                                    @elseif($topico->pontos < 5000)
                                        <li style="font-size:larger; font-weight: 500;">{{$topico->nome}}:
                                            <small><img src="/images/bronze.png" alt="" style="max-height:25px; padding-left:5px"></small>
                                            <small class="pull-right">{{(($topico->pontos-2500)/2500)*100}}%</small>
                                            <div class="progress" style="margin-top:5px; height: 15px;background: white;">
                                                <div class="progress-bar" style="width: {{(($topico->pontos-2500)/2500)*100}}%;background-color: silver; line-height: 15px;"> <!-- Cores: bronze: darkgoldenrod, prata: silver, ouro: gold -->
                                                {{$topico->pontos}} pontos
                                                </div>
                                            </div>
                                        </li>
                                    @elseif($topico->pontos < 7500)
                                        <li style="font-size:larger; font-weight: 500;">{{$topico->nome}}:
                                            <small><img src="/images/bronze.png" alt="" style="max-height:25px; padding-left:5px"></small>
                                            <small><img src="/images/silver.png" alt="" style="max-height:25px; padding-left:5px"></small>
                                            <small class="pull-right">{{(($topico->pontos-5000)/2500)*100}}%</small>
                                            <div class="progress" style="margin-top:5px; height: 15px;background: white;">
                                                <div class="progress-bar" style="width: {{(($topico->pontos-5000)/2500)*100}}%;background-color: gold; line-height: 15px;"> <!-- Cores: bronze: darkgoldenrod, prata: silver, ouro: gold -->
                                                {{$topico->pontos}} pontos
                                                </div>
                                            </div>
                                        </li>
                                    @elseif($topico->pontos > 12500)
                                        <li style="font-size:larger; font-weight: 500;">{{$topico->nome}}:
                                            <small><img src="/images/bronze.png" alt="" style="max-height:25px; padding-left:5px"></small>
                                            <small><img src="/images/silver.png" alt="" style="max-height:25px; padding-left:5px"></small>
                                            <small><img src="/images/ouro.png" alt="" style="max-height:25px; padding-left:5px"></small>
                                            <small class="pull-right">{{(($topico->pontos-10000)/2500)*100}}%</small>
                                            <div class="progress" style="margin-top:5px; height: 15px;background: white;">
                                                <div class="progress-bar" style="width: {{(($topico->pontos-10000)/2500)*100}}%;background-color: gold; line-height: 15px;"> <!-- Cores: bronze: darkgoldenrod, prata: silver, ouro: gold -->
                                                {{$topico->pontos}} pontos
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                                </ul>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box box-solid " style="background: darkgrey; color: black;">
                            <div class="box-header">
                                <h3 class="box-title" style="color: white;">Top Tópicos</h3>
                            </div> 
                            <div class="box-body" style="background: rgb(236, 236, 236)">

                                <div class="row">
                                    <div class=" bg-green" style="margin: 10px 20px" >
                                        <span class="" style="font-size: -webkit-xxx-large;float: left;padding: 10px 20px 10px 20px;height: 100%;"><i class="fa fa-thumbs-o-up"></i></span>
                                        <div class="">
                                            <span class="" style="display: block;"><?php if($turma->topTopicos['melhor'] != null)echo $turma->topTopicos['melhor']->nome; ?></span>
                                            <span class=""><?php if($turma->topTopicos['melhor'] != null) echo $turma->topTopicos['melhor']->pontos; ?> pontos</span>
                                            <small class="pull-right" style="display: block;">90%</small>
                                            <div class="progress" style="height: 15px;background: rgb(0, 134, 73);">
                                                <div class="progress-bar" style="width: 50%;background-color: white;">
                                                </div>
                                            </div>
                                            <span class="progress-description">
                                               Parabéns!
                                            </span>
                                        </div><!-- /.info-box-content -->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="bg-red" style="margin: 10px 20px">
                                        <span class="" style="font-size: -webkit-xxx-large;float: left;padding: 10px 20px 10px 20px;height: 100%;"><i class="fa fa-thumbs-o-down"></i></span>
                                        <div class="">
                                            <span class="" style="display: block;"><?php if($turma->topTopicos['pior'] != null)echo $turma->topTopicos['pior']->nome; ?></span>
                                            <span class=""><?php if($turma->topTopicos['pior'] != null) echo $turma->topTopicos['pior']->pontos; ?> pontos</span>
                                            <small class="pull-right" style="display: block;">90%</small>
                                            <div class="progress" style="height: 15px;background: rgb(0, 134, 73);">
                                                <div class="progress-bar" style="width: 10%;background-color: white;">
                                                </div>
                                            </div>
                                            <span class="progress-description">
                                                Que tal revisar esse tópico?
                                            </span>
                                        </div><!-- /.info-box-content -->
                                    </div>
                                </div>
                                   
                            </div> 
                        </div>
                    </div>
                </div>

                <!-- Rankings -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Ranking: {{$turma->modulo->curso->nome}}-{{$turma->modulo->nome}}</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body no-padding">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th>Turma</th>
                                            <th>Pontuação</th>
                                            <th>Medalha</th>
                                        </tr>
                                        <?php $count=1; ?>
                                        @foreach($turma->rankingModulo as $aluno)
                                        <tr>
                                            <td>{{$count++}}º</td>
                                            <td>{{$aluno->usuario->nome}} {{$aluno->usuario->sobrenome}}</td>
                                            <td>{{Turma::find($aluno->pivot->idTurma)->nome}}</td>
                                            <td>{{$aluno->pivot->pontuacao}}</td>
                                            <td>Medalha</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!-- /.box-body -->
                        </div>
                    </div>

                    <div class="col-lg-6">
                         <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Ranking Turma</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body no-padding">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th>Pontuação</th>
                                            <th>Medalha</th>
                                        </tr>
                                        <?php $count=1; ?>
                                        @foreach($turma->rankingTurma as $aluno)
                                        <tr>
                                            <td>{{$count++}}º</td>
                                            <td>{{$aluno->usuario->nome}} {{$aluno->usuario->sobrenome}}</td>
                                            <td>{{$aluno->pivot->pontuacao}}</td>
                                            <td>Medalha</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!-- /.box-body -->
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
        </div> 
    </div>

</section>

@endsection

@section('scripts')

<script>
	$(".knob").knob();
    $(".tab-pane:first").addClass('active in');
    $("li.tab:first").addClass('active');
</script>

@endsection