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
                <form method="POST" action="/admin/atualizarCategoria">
                    <div class="form-group">
                        <input type="hidden" id="id" name="id" class="form-control"></textarea>
                    </div>

                    <div id="div_nome-editar-categoria" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome-editar-categoria" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" onblur="fcn_recarregaCoresEditarCategoria();" maxlength="50" class="form-control somenteLetras nomeObrigatorio-editar-categoria"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar-editar-categoria" value="Salvar">
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
                <form method="POST" action="/admin/criarCategoria">
                    <div id="div_nome-nova-categoria" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome-nova-categoria" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" onblur="fcn_recarregaCoresNovaCategoria();" maxlength="50" class="form-control somenteLetras nomeObrigatorio-nova-categoria"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar-nova-categoria" value="Salvar">
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
                <form method="POST" action="/admin/criarAtividadeExtra">
                    <div id="div_nome-nova-atividadeExtra" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome-nova-atividadeExtra" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" onblur="fcn_recarregaCoresNovaAtividadeExtra();" maxlength="50" class="form-control somenteLetrasENumeros nomeObrigatorio-nova-atividadeExtra"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="idModulo">Módulo</label>
                        <select id="idModulo" name="idModulo" onblur="fcn_recarregaCoresNovaAtividadeExtra();" class="form-control">
                            <option value="">Sem módulo</option>
							@foreach(Modulo::all() as $modulo)
                                <option value="{{$modulo->id}}">{{$modulo->nome}}-{{$modulo->curso->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="idCategoria"><i class="fa"></i> Categoria</label>
                        <select id="idCategoria" name="idCategoria" onblur="fcn_recarregaCoresNovaAtividadeExtra();" class="form-control">
                            <option value="">Sem categoria</option>
                            @foreach(Categoria::all() as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar-nova-atividadeExtra" value="Salvar">
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
                <form method="POST" action="/admin/atualizarAtividadeExtra">
                    <div class="form-group">
                        <input type="hidden" id="id" name="id" class="form-control"></textarea>
                    </div>

                    <div id="div_nome-editar-atividadeExtra" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome-editar-atividadeExtra" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" onblur="fcn_recarregaCoresEditarAtividadeExtra();" maxlength="50" class="form-control somenteLetrasENumeros nomeObrigatorio-editar-atividadeExtra"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="idModulo">Módulo</label>
                        <select id="idModulo" name="idModulo" onblur="fcn_recarregaCoresEditarAtividadeExtra();" class="form-control">
                            @foreach(Modulo::all() as $modulo)
                                <option value="{{$modulo->id}}">{{$modulo->nome}}-{{$modulo->curso->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="idCategoria"><i class="fa"></i> Categoria</label>
                        <select id="idCategoria" name="idCategoria" onblur="fcn_recarregaCoresEditarAtividadeExtra();" class="form-control">
                            <option value="">Sem categoria</option>
							@foreach(Categoria::all() as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div id="div_status-editar-atividadeExtra" class="form-group">
                        <label class="control-label" for="status"><i id="icone_status-editar-atividadeExtra" class="fa"></i> Visibilidade</label>
                        <select type="text" autocomplete="off" onblur="fcn_recarregaCoresEditarAtividadeExtra();" id="status" name="status" class="form-control statusObrigatorio-editar-atividadeExtra">
                            <option value="0"> Oculto</option>
                            <option value="1"> Visível</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar-editar-atividadeExtra" value="Salvar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('maincontent')

<section class="content-header">
    <h1>Atividades Extras</h1>
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
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Filtre as Atividades por categoria ou módulo</h3>
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
                                    if(get_class($categorias[$j]) == "Modulo"){
                                        if($categorias[$j]->id == null){
                                            $atividades = Atividade::where('tipo','=', '2')->get()->lists('id');
                                            $atividades = json_encode($atividades);
                                        }else{
                                            $atividades = Atividade::where('idModulo', '=', $categorias[$j]->id)->get()->lists('id'); 
                                            $atividades = json_encode($atividades);
                                        }
                                    }else{
                                        $atividades = Atividade::where('idCategoria', '=', $categorias[$j]->id)->get()->lists('id'); 
                                        $atividades = json_encode($atividades);
                                    }
                                ?>


                                <div class="col-sm-3">
                                    <div class="box-body">
                                        <div class="small-box bg-blue">
                                            <div class="inner">
                                                @if(get_class($categorias[$j]) =="Modulo")
                                                <div class="curso" style="cursor:pointer;" id="{{$categorias[$j]->id}}" data-tipo="{{get_class($categorias[$j])}}" data-atividades="{{$atividades}}">
                                                    <h4 style="font-size: 20px;">{{$categorias[$j]->nome}} - {{$categorias[$j]->curso->nome}}</h4>
                                                    <p style="margin:0px;">  </p>
                                                </div>
                                                @else
                                                <div class="box-tools pull-right">
                                                    <button class="btn btn-success btn-xs" rel="tooltip" data-placement="left" title="Editar Categoria" data-toggle="modal" data-target="#editarCategoria" data-id="{{$categorias[$j]->id}}" data-nome="{{$categorias[$j]->nome}}" data-tipo="{{get_class($categorias[$j])}}"><i class="fa fa-pencil"></i></button>
                                                    <a href="/admin/categoria/deletar/{{$categorias[$j]->id}}"><button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></a>
                                                </div>
                                                <div class="curso" style="cursor:pointer;" id="{{$categorias[$j]->id}}" data-tipo="{{get_class($categorias[$j])}}" data-atividades="{{$atividades}}">
                                                    <h4 style="font-size: 20px;">{{$categorias[$j]->nome}}</h4>
                                                    <p style="margin:0px;">  </p>
                                                </div>
                                                @endif
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
                        <button class="btn btn-primary btn-md" style="border-radius: 50px;" id="criarAtividadeExtra" data-idmodulo="0" data-toggle="modal" data-target="#criarAtividadeExtra"><i class="fa fa-plus"></i></button>
                    </div>
                </div>

                <div class="box-body">

                    <div class="row">
                        @foreach($atividadesExtras as $atividade)

                        @if($atividade->status == '0')
                            <div class="col-lg-3 atividade" id="{{$atividade->id}}" style="background-color: white; margin:10px;">
                            <b style="color: red;"> Oculta</b>
                        @else
                            <div class="col-lg-3 atividade" id="{{$atividade->id}}" style="margin:10px;">
                        @endif
                            <div id="div_card_4" class="small-box bg-olive card">
                                    <div style="padding: 10px;" class="inner">

                                    <div class="box-tools pull-right">
                                        <button class="btn btn-success btn-xs" rel="tooltip" data-placement="left" title="Editar Atividade" data-toggle="modal" data-target="#editarAtividadeExtra" data-id="{{$atividade->id}}" data-nome="{{$atividade->nome}}" data-idModulo="{{$atividade->idModulo}}" data-idCategoria="{{$atividade->idCategoria}}" data-status="{{$atividade->status}}"><i class="fa fa-pencil"></i></button>
                                        <a href="/admin/atividade/deletar/{{$atividade->id}}"><button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></a>
                                    </div>
                                    <a href="/admin/atividade/{{$atividade->id}}/editar">

                                        <span style="color:#FFF;font-size:30px;"><b>{{$atividade->nome}}</b></span><br>
                                    </a>
                                    <p>{{$atividade->questoes->count()}} Questões</p>
                                        
                                    </div>

                                <a href="/admin/atividade/{{$atividade->id}}/editar" class="small-box-footer">
                                    Gerenciar Atividade <i class="fa fa-arrow-circle-right"></i>
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
                var dataidModulo = button.data('idmodulo')
                var dataidCategoria = button.data('idcategoria')
                var datastatus = button.data('status') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('#id').val(dataid)
                modal.find('#nome').val(datanome)
                modal.find('#descricao').val(datadescricao)
                modal.find('#idModulo').val(dataidModulo)
                modal.find('#idCategoria').val(dataidCategoria)
                modal.find('#status').val(datastatus);
                })

            $('#editarCategoria').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var dataid = button.data('id')
                var datanome = button.data('nome')

                var modal = $(this)
                modal.find('#id').val(dataid)
                modal.find('#nome').val(datanome)
                })

             $('#criarAtividadeExtra').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var dataidmodulo = button.data('idmodulo')

                var modal = $(this)
                modal.find('#idmodulo').val(dataidmodulo)
                })

            $('#criarmodulo').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var dataidmodulo = button.data('idmodulo')
                // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('#idmodulo').val(dataidmodulo)
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
                var id = $(this).attr('id');
                $('div.atividade').fadeOut();
                $.each(atividades, function(index, val) {
                    $('div.atividade#'+val).delay(900).fadeIn();
                });
                var tipo = $(this).data('tipo');
                if(tipo == "Modulo"){
                    $('button#criarAtividadeExtra').data('idmodulo', id);
                }
                
                //$("div.conteudocurso[id="+id+"]").delay(401).fadeIn();
            }));


            $('.item').first().addClass("active")

        </script>
		
		<script> //Validações
			$( ".somenteLetras" ).keyup(function() {
				//Não ativa função ao clicar tecla direção esquerda e direito, botão apagar e botão deletar
				if(event.keyCode != 37 && event.keyCode != 39 && event.keyCode != 46 && event.keyCode != 8){
					var valor = $(this).val().replace(/[^a-zA-ZãÃáÁàÀâÂéÉèÈêÊíÍìÌîÎõÕóÓòÒôÔúÚùÙûÛÇç ]+/g,'');
					$(this).val(valor);
				}
			});
			
			$( ".somenteLetrasENumeros" ).keyup(function() {
				//Não ativa função ao clicar tecla direção esquerda e direito, botão apagar e botão deletar
				if(event.keyCode != 37 && event.keyCode != 39 && event.keyCode != 46 && event.keyCode != 8){
					var valor = $(this).val().replace(/[^0-9a-zA-ZãÃáÁàÀâÂéÉèÈêÊíÍìÌîÎõÕóÓòÒôÔúÚùÙûÛÇç ]+/g,'');
					$(this).val(valor);
				}
			});
			
			$(".btn-salvar-editar-categoria").click(function(event){
			
				var obrigatorioPendente = 0;
			
				if($(".nomeObrigatorio-editar-categoria").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_nome-editar-categoria" ).removeClass("has-success");
					$( "#icone_nome-editar-categoria" ).removeClass("fa-check");
					$( "#div_nome-editar-categoria" ).addClass("has-error");
					$( "#icone_nome-editar-categoria" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_nome-editar-categoria" ).removeClass("has-error");
					$( "#icone_nome-editar-categoria" ).removeClass("fa-times-circle-o");
					$( "#div_nome-editar-categoria" ).addClass("has-success");
					$( "#icone_nome-editar-categoria" ).addClass("fa-check");
				}
				
				if(obrigatorioPendente == 1){
					alert("É necessário preencher todos os campos obrigatórios!");
					return false;
				}
				
			})
			
			$(".btn-salvar-nova-categoria").click(function(event){
			
				var obrigatorioPendente = 0;
			
				if($(".nomeObrigatorio-nova-categoria").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_nome-nova-categoria" ).removeClass("has-success");
					$( "#icone_nome-nova-categoria" ).removeClass("fa-check");
					$( "#div_nome-nova-categoria" ).addClass("has-error");
					$( "#icone_nome-nova-categoria" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_nome-nova-categoria" ).removeClass("has-error");
					$( "#icone_nome-nova-categoria" ).removeClass("fa-times-circle-o");
					$( "#div_nome-nova-categoria" ).addClass("has-success");
					$( "#icone_nome-nova-categoria" ).addClass("fa-check");
				}
				
				if(obrigatorioPendente == 1){
					alert("É necessário preencher todos os campos obrigatórios!");
					return false;
				}
				
			})
			
			$(".btn-salvar-nova-atividadeExtra").click(function(event){
			
				var obrigatorioPendente = 0;
			
				if($(".nomeObrigatorio-nova-atividadeExtra").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_nome-nova-atividadeExtra" ).removeClass("has-success");
					$( "#icone_nome-nova-atividadeExtra" ).removeClass("fa-check");
					$( "#div_nome-nova-atividadeExtra" ).addClass("has-error");
					$( "#icone_nome-nova-atividadeExtra" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_nome-nova-atividadeExtra" ).removeClass("has-error");
					$( "#icone_nome-nova-atividadeExtra" ).removeClass("fa-times-circle-o");
					$( "#div_nome-nova-atividadeExtra" ).addClass("has-success");
					$( "#icone_nome-nova-atividadeExtra" ).addClass("fa-check");
				}
				
				if(obrigatorioPendente == 1){
					alert("É necessário preencher todos os campos obrigatórios!");
					return false;
				}
				
			})
			
			$(".btn-salvar-editar-atividadeExtra").click(function(event){
			
				var obrigatorioPendente = 0;
			
				if($(".nomeObrigatorio-editar-atividadeExtra").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_nome-editar-atividadeExtra" ).removeClass("has-success");
					$( "#icone_nome-editar-atividadeExtra" ).removeClass("fa-check");
					$( "#div_nome-editar-atividadeExtra" ).addClass("has-error");
					$( "#icone_nome-editar-atividadeExtra" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_nome-editar-atividadeExtra" ).removeClass("has-error");
					$( "#icone_nome-editar-atividadeExtra" ).removeClass("fa-times-circle-o");
					$( "#div_nome-editar-atividadeExtra" ).addClass("has-success");
					$( "#icone_nome-editar-atividadeExtra" ).addClass("fa-check");
				}
				
				if($(".statusObrigatorio-editar-atividadeExtra").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_status-editar-atividadeExtra" ).removeClass("has-success");
					$( "#icone_status-editar-atividadeExtra" ).removeClass("fa-check");
					$( "#div_status-editar-atividadeExtra" ).addClass("has-error");
					$( "#icone_status-editar-atividadeExtra" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_status-editar-atividadeExtra" ).removeClass("has-error");
					$( "#icone_status-editar-atividadeExtra" ).removeClass("fa-times-circle-o");
					$( "#div_status-editar-atividadeExtra" ).addClass("has-success");
					$( "#icone_status-editar-atividadeExtra" ).addClass("fa-check");
				} 
				
				if(obrigatorioPendente == 1){
					alert("É necessário preencher todos os campos obrigatórios!");
					return false;
				}
				
			})
			
			function fcn_recarregaCoresEditarCategoria(){
				
				if($(".nomeObrigatorio-editar-categoria").val() == ""){
					$( "#div_nome-editar-categoria" ).removeClass("has-success");
					$( "#icone_nome-editar-categoria" ).removeClass("fa-check");
					$( "#div_nome-editar-categoria" ).addClass("has-error");
					$( "#icone_nome-editar-categoria" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_nome-editar-categoria" ).removeClass("has-error");
					$( "#icone_nome-editar-categoria" ).removeClass("fa-times-circle-o");
					$( "#div_nome-editar-categoria" ).addClass("has-success");
					$( "#icone_nome-editar-categoria" ).addClass("fa-check");
				}
				
			}
			
			function fcn_recarregaCoresNovaCategoria(){
				
				if($(".nomeObrigatorio-nova-categoria").val() == ""){
					$( "#div_nome-nova-categoria" ).removeClass("has-success");
					$( "#icone_nome-nova-categoria" ).removeClass("fa-check");
					$( "#div_nome-nova-categoria" ).addClass("has-error");
					$( "#icone_nome-nova-categoria" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_nome-nova-categoria" ).removeClass("has-error");
					$( "#icone_nome-nova-categoria" ).removeClass("fa-times-circle-o");
					$( "#div_nome-nova-categoria" ).addClass("has-success");
					$( "#icone_nome-nova-categoria" ).addClass("fa-check");
				}
				
			}
			
			function fcn_recarregaCoresNovaAtividadeExtra(){
				
				if($(".nomeObrigatorio-nova-atividadeExtra").val() == ""){
					$( "#div_nome-nova-atividadeExtra" ).removeClass("has-success");
					$( "#icone_nome-nova-atividadeExtra" ).removeClass("fa-check");
					$( "#div_nome-nova-atividadeExtra" ).addClass("has-error");
					$( "#icone_nome-nova-atividadeExtra" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_nome-nova-atividadeExtra" ).removeClass("has-error");
					$( "#icone_nome-nova-atividadeExtra" ).removeClass("fa-times-circle-o");
					$( "#div_nome-nova-atividadeExtra" ).addClass("has-success");
					$( "#icone_nome-nova-atividadeExtra" ).addClass("fa-check");
				}
				
			}
			
			function fcn_recarregaCoresEditarAtividadeExtra(){
				
				if($(".nomeObrigatorio-editar-atividadeExtra").val() == ""){
					$( "#div_nome-editar-atividadeExtra" ).removeClass("has-success");
					$( "#icone_nome-editar-atividadeExtra" ).removeClass("fa-check");
					$( "#div_nome-editar-atividadeExtra" ).addClass("has-error");
					$( "#icone_nome-editar-atividadeExtra" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_nome-editar-atividadeExtra" ).removeClass("has-error");
					$( "#icone_nome-editar-atividadeExtra" ).removeClass("fa-times-circle-o");
					$( "#div_nome-editar-atividadeExtra" ).addClass("has-success");
					$( "#icone_nome-editar-atividadeExtra" ).addClass("fa-check");
				}
				
				if($(".statusObrigatorio-editar-atividadeExtra").val() == ""){
					$( "#div_status-editar-atividadeExtra" ).removeClass("has-success");
					$( "#icone_status-editar-atividadeExtra" ).removeClass("fa-check");
					$( "#div_status-editar-atividadeExtra" ).addClass("has-error");
					$( "#icone_status-editar-atividadeExtra" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_status-editar-atividadeExtra" ).removeClass("has-error");
					$( "#icone_status-editar-atividadeExtra" ).removeClass("fa-times-circle-o");
					$( "#div_status-editar-atividadeExtra" ).addClass("has-success");
					$( "#icone_status-editar-atividadeExtra" ).addClass("fa-check");
				}
				
			}
			
		</script>
    @endsection

@endsection
