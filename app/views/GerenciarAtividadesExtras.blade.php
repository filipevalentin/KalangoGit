@extends('master-admin')

@section('modals')

<!--  ### MODALS ### -->

<!-- Mudar esses modais para editar categoria e criar categoria -->

<div class="modal fade" id="editarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Editar Categoria</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/atualizarCategoria">
                    <div class="form-group">
                        <input type="hidden" id="id" name="id" class="form-control"></textarea>
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

<div class="modal fade" id="criarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Nova Categoria</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/criarCategoria">
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

<div class="modal fade" id="criarAtividadeExtra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Nova Atividade Extra</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/criarAtividadeExtra">
                    <div class="form-group">
                        <label for="nome" class="control-label">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="descricao" class="control-label">Descrição</label>
                        <input type="text" id="descricao" name="descricao" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="idCurso" class="control-label">Curso</label>
                        <select id="idCurso" name="idCurso" class="form-control">
                            <option value="">Restrinja a um curso - Todos</option>
                            @foreach(Curso::all() as $curso)
                                <option value="{{$curso->id}}">{{$curso->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="idCategoria" class="control-label">Categoria</label>
                        <select id="idCategoria" name="idCategoria" class="form-control">
                            <option value="">Atribua uma categoria - Sem categoria</option>
                            @foreach(Categoria::all() as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
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

<div class="modal fade" id="editarAtividadeExtra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Editar Atividade Extra</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/atualizarAtividadeExtra">
                    <div class="form-group">
                        <input type="hidden" id="id" name="id" class="form-control"></textarea>
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
                        <label for="idCurso" class="control-label">Curso</label>
                        <select id="idCurso" name="idCurso" class="form-control">
                            @foreach(Curso::all() as $curso)
                                <option value="{{$curso->id}}">{{$curso->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="idCategoria" class="control-label">Categoria</label>
                        <select id="idCategoria" name="idCategoria" class="form-control">
                            @foreach(Categoria::all() as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
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

@endsection


@section('maincontent')

<section class="content-header">
    <h1>Gerenciar Cursos - Inglês</h1>
    <ol class="breadcrumb">
        <li><a href="#" ><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Widgets</li>
    </ol>
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Categorias</h3>
                    <div class="box-tools pull-right" style="padding: 10px 20px 5px 5px;">
                        <button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarCategoria" ><i class="fa fa-plus"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                        @for($i=0; $i <= (int)($categorias->count()/5); $i++)
        
                            <div class="item">

                            @for($j=4*$i; $j<4*$i+4 && $j<($categorias->count()); $j++)

                                <?php
                                    if(get_class($categorias[$j]) == "Curso"){
                                        $atividades = AtividadesExtra::where('idCurso', '=', $categorias[$j]->id)->get()->lists('id'); 
                                        $atividades = json_encode($atividades);
                                    }else{
                                        $atividades = AtividadesExtra::where('idCategoria', '=', $categorias[$j]->id)->get()->lists('id'); 
                                        $atividades = json_encode($atividades);
                                    }
                                ?>


                                <div class="col-sm-3">
                                    <div class="box-body">
                                        <div class="small-box bg-blue">
                                            <div class="inner">
                                                <div class="box-tools pull-right">

                                                @if(get_class($categorias[$j])!="Curso")                                
                                                    <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#editarCategoria" data-id="{{$categorias[$j]->id}}" data-nome="{{$categorias[$j]->nome}}" data-tipo="{{get_class($categorias[$j])}}"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button>
                                                @endif
                                                </div>
                                                <div class="curso" style="cursor:pointer;" id="{{$categorias[$j]->id}}" data-atividades="{{$atividades}}">
                                                    <h4 style="font-size: 20px;">{{$categorias[$j]->nome}}</h4>
                                                    <p style="margin:0px;">  </p>
                                                </div>
                                            </div>

                                            <a href="#" class="small-box-footer"></a>
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

            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Atividades Extras</h3>
                    <div class="box-tools pull-right" style="padding: 10px 20px 5px 5px;">
                        <button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarAtividadeExtra"><i class="fa fa-plus"></i></button>
                    </div>
                </div>

                <div class="box-body">
                    <div class="input-group" style="padding-bottom: 20px;">
                        <input type="text" name="q" class="form-control" placeholder="Procurar... NÂO FUNCIONA AINDA">
                        <span class="input-group-btn">
                            <button type="submit" name="seach" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                        </span>
                    </div>

                    <div class="row">
                        @foreach($atividadesExtras as $atividade)
                        <div class="col-lg-3 atividade" id="{{$atividade->id}}">
                            <div id="div_card_4" class="small-box bg-olive card">
                                    <div style="padding: 10px;" class="inner">

                                    <div class="box-tools pull-right">
                                        <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#editarAtividadeExtra" data-id="{{$atividade->id}}" data-nome="{{$atividade->titulo}}" data-descricao="{{$atividade->descricao}}" data-idCurso="{{$atividade->idCurso}}" data-idCategoria="{{$atividade->idCategoria}}"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button>
                                    </div>
                                    <a href="/editarAtividadeExtra/{{$atividade->id}}">

                                        <span style="color:#FFF;font-size:30px;"><b>{{$atividade->titulo}}</b></span><br>
                                    </a>
                                    <p>{{$atividade->questoes->count()}} Questões</p>
                                    </div>

                                <a href="#" class="small-box-footer">
                                    Detalhes <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            

        </div>
    </div> 
</section>

    @section('scripts')

        <script>
            $('#editarAtividadeExtra').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var dataid = button.data('id')
                var datanome = button.data('nome')
                var datadescricao = button.data('descricao')
                var dataidCurso = button.data('idcurso')
                var dataidCategoria = button.data('idcategoria') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('#id').val(dataid)
                modal.find('#nome').val(datanome)
                modal.find('#descricao').val(datadescricao)
                modal.find('#idCurso').val(dataidCurso)
                modal.find('#idCategoria').val(dataidCategoria)
                })

            $('#editarCategoria').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var dataid = button.data('id')
                var datanome = button.data('nome')

                var modal = $(this)
                modal.find('#id').val(dataid)
                modal.find('#nome').val(datanome)
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

            $('div.curso').on('click', (function(event) {
                var atividades = $(this).data('atividades');
                $('div.atividade').fadeOut();
                $.each(atividades, function(index, val) {
                    $('div.atividade#'+val).fadeIn();
                });
                
                //$("div.conteudocurso[id="+id+"]").delay(401).fadeIn();
            }));


            $('.item').first().addClass("active")

        </script>
    @endsection

@endsection
