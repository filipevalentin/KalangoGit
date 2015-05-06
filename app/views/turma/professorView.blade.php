@extends('master-prof')

@section('modals')

<div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><i class="fa fa-envelope-o"> </i> Nova Mensagem </h4>
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

<div class="modal fade" id="compose-modal-turma" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><i class="fa fa-envelope-o"> </i> Nova Mensagem </h4>
            </div>
            <form action="/professor/mensagem/turma/enviar" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">Para:</span>
                            <select class="form-control alunoObrigatorio" name="idTurma" id="idTurma">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control tituloObrigatorio_turma" type="text" id="titulo" name="titulo" maxlength="100" placeholder="Titulo">
                    </div>
                    <div class="form-group">
                        <textarea name="conteudo" id="email_message" class="form-control mensagemObrigatoria_turma" maxlength="8000" placeholder="Mensagem" style="height: 120px;"></textarea>
                    </div>
                </div>
                <div class="modal-footer clearfix">
                    <button type="submit" class="btn btn-primary pull-right btn-enviar_turma"><i class="fa fa-envelope"></i> Enviar</button>
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
        <li><a href="/professor/home" ><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="{{URL::previous()}}" >Gerenciar Cursos</a></li>
		<li class="active">Gerenciar Turmas</li>
    </ol>
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">

            <h2 class="page-header"> {{$turma->modulo->nome}}</h2>

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lista de Alunos - Turma {{$turma->nome}} </h3>
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#compose-modal-turma" data-idTurma="{{$turma->id}}" data-nomeDestino="Turma {{$turma->nome}}" style="margin-right:5px;">Mensagem à Turma</button>
                        <button type="button" class="btn btn-info">Relatórios de Turma</button>
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a id="" href="/professor/relatorios/aula/turma/{{$turma->id}}">Aula</a></li>
                            <li><a id="" href="/professor/relatorios/atividadesExtras/turma/{{$turma->id}}">Atividades Extras</a></li>
                        </ul>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th style="width: 5%;">#</th>
                                <th style="width: 15%;">Nome</th>
                                <th style="width: 17%;">Sobrenome</th>
                                <th style="width: 20%">E-mail</th>
                                <th style="width: 20%;">Ação</th>
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
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info">Relatórios</button>
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a id="" href="/professor/relatorios/aula/aluno/{{$aluno->id}}/{{$turma->id}}">Aula</a></li>
                                                <li><a id="" href="/professor/relatorios/atividadesExtras/aluno/{{$aluno->id}}/{{$turma->id}}">Atividades Extras</a></li>
                                            </ul>
                                        </div>
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

        $('#compose-modal-turma').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var idTurma = button.data('idturma');
            var nomeDestino = button.data('nomedestino');
            var modal = $(this);

            modal.find('#idTurma option').val(idTurma);
            modal.find('#idTurma option').text(nomeDestino);
        });
           

            $('.item').first().addClass("active")

        </script>
		
		<script> //Validações

		$(".btn-enviar").click(function(event){
			
			if($(".tituloObrigatorio").val() == ""){
				alert("É necessário preencher o Título da Mensagem!");
				$(".tituloObrigatorio").focus();
				return false;
			}

			if($(".mensagemObrigatoria").val() == ""){
				alert("É necessário preencher a Mensagem!");
				$(".mensagemObrigatoria").focus();
				return false;
			}			
			
		})
		
		$(".btn-enviar_turma").click(function(event){
			
			if($(".tituloObrigatorio_turma").val() == ""){
				alert("É necessário preencher o Título da Mensagem!");
				$(".tituloObrigatorio_turma").focus();
				return false;
			}

			if($(".mensagemObrigatoria_turma").val() == ""){
				alert("É necessário preencher a Mensagem!");
				$(".mensagemObrigatoria_turma").focus();
				return false;
			}			
			
		})
					
		</script>
    @endsection

@endsection
