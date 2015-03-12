@extends('master-admin')

@section('maincontent')

<div class="row">
    <section class="col-lg-7 connectedSortable ui-sortable">
        <div class="box box-solid">
                    <div class="box-header">
                        <h3 class="box-title">Quiz - Teste 1</h3>
                        <div class="box-tools pull-right" style="padding: 10px 20px 5px 5px;">
                            <button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarquestao" data-idexercicio="5"><i class="fa fa-plus"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="box-group" id="accordion">
                                                    
                            
                            
                            <div class="panel box box-primary">
                                <div class="box-header ui-sortable-handle">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ME1" class="collapsed">Questão 1</a>
                                    </h4>
                                    <div class="box-tools pull-right" style="padding-top: 8px;">
                                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editarme" data-id="1" data-titulo="Qual é o seu nome?" data-categoria="21" data-a="aaaaa" data-b="asdasasd" data-c="asdas" data-d="dasd" data-respostacerta="c"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div id="ME1" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="box-body">
                                        <div class="row" style="margin:0px;">
                                            <div class="box text-center">
                                                <div class="box-header">
                                                    <h3 class="box-title center" style="float: none;">Qual é o seu nome?</h3>
                                                </div>
                                                <div class="box-body">
                                                
                                                                                                    <img src="/files/photo_00001.jpg" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 300px;">
                                                                                                
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-md-1"></div>

                                                                                                            <div class="col-md-5" style="padding-bottom: 5px;">
                                                                <button class="btn btn-block btn-flat bg-aqua">aaaaa</button>
                                                                <button class="btn btn-block btn-flat bg-red">asdasasd</button>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <button class="btn btn-block btn-flat bg-green">asdas</button>
                                                                <button class="btn btn-block btn-flat bg-orange">dasd</button>
                                                            </div>
                                                                                                        

                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="panel box box-primary">
                                <div class="box-header ui-sortable-handle">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#RU3" class="collapsed">Questão 2</a>
                                    </h4>
                                    <div class="box-tools pull-right" style="padding-top: 8px;">
                                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editarru" data-id="3" data-titulo="Qual é o seu nome?" data-categoria="2" data-respostacerta="abc"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div id="RU3" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="box-body">
                                        <div class="row" style="margin:0px;">
                                            <div class="box text-center">
                                                <div class="box-header">
                                                    <h3 class="box-title center" style="float: none;">Qual é o seu nome?</h3>
                                                </div>
                                                <div class="box-body">

                                                                                                    <img src="/files/photo_00001.jpg" class="img-responsive center" alt="Responsive image" style="display: initial; max-height: 300px;">
                                                
                                                <div class="row">
                                                    <div class="col-md-1"></div>

                                                    <div class="col-md-10" style="padding-bottom: 5px;">
                                                        <label for="repostaCorreta" class="control-label">Resposta Correta</label>
                                                        <p>abc</p>
                                                    </div>

                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel box box-primary">
                                <div class="box-header ui-sortable-handle">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#RU4" class="collapsed">Questão 3</a>
                                    </h4>
                                    <div class="box-tools pull-right" style="padding-top: 8px;">
                                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editarru" data-id="4" data-titulo="Qual a porta mais a direita?" data-categoria="1" data-respostacerta="1234"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div id="RU4" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="box-body">
                                        <div class="row" style="margin:0px;">
                                            <div class="box text-center">
                                                <div class="box-header">
                                                    <h3 class="box-title center" style="float: none;">Qual a porta mais a direita?</h3>
                                                </div>
                                                <div class="box-body">

                                                
                                                <div class="row">
                                                    <div class="col-md-1"></div>

                                                    <div class="col-md-10" style="padding-bottom: 5px;">
                                                        <label for="repostaCorreta" class="control-label">Resposta Correta</label>
                                                        <p>1234</p>
                                                    </div>

                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                        
                        </div>
                    </div><!-- /.box-body -->
                </div>
            </div>

        </div>
    </section>
</div>

@endsection