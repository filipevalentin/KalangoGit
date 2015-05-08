@extends('master-prof')

@section('modals')

@endsection

@section('maincontent')
    <section class="content-header">
        <h1>Gerenciar Turmas - Inglês Kids</h1>
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
                                                        <a href="http://tcc.teste/Viewer#/{{$material->url}}"><button class="btn btn-primary btn-xs"><i class="fa fa-external-link"></i></button></a>
                                                    </div>
                                                </div>
                                            @endforeach

                                            @foreach ($aula->exercicios as $exercicio)
                                                <div class="alert alert-info alert-dismissable" style="min-height: 55px;">
                                                    <i class="fa  fa-check-circle" style="left: -15px; top: 7px;"></i>
                                                    <p style="float:left;">{{$exercicio->nome}}</p>
                                                    <div class="box-tools pull-right">
                                                        <a href="/professorVisualizarExercicio/{{$exercicio->id}}"><button class="btn btn-primary btn-xs"><i class="fa fa-question"></i></button></a>
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

            </div>
        </div> 
    </section>

@endsection
    

@section('scripts')
   
@endsection