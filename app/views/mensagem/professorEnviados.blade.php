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
								<option value="">Selecionar Aluno</option>
								@foreach(Auth::user()->professor->turmas as $turma)
									<option disabled>--Turma: {{$turma->nome}} --</option>
									@foreach($turma->alunos as $aluno)
									<option value="{{$aluno->id}}">{{$aluno->usuario->nome}}</option>
									@endforeach
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<input class="form-control tituloObrigatorio" type="text" id="titulo" maxlength="100" placeholder="Titulo">
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

<div class="modal fade" id="responder" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title"><i class="fa fa-envelope-o"> </i> Responder Mensagem</h4>
			</div>
			<form action="/professor/mensagem/responder" method="post">
				<div class="modal-body">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">Para:</span>
							<input class="form-control" type="text" id="nomeDestino" value="" disabled>
							<input type="hidden" id="idUsuarioDestino" name="idUsuarioDestino" value="" disabled>
						</div>
					</div>
					<div class="form-group">
						<input class="form-control tituloRespostaObrigatorio" type="text" id="titulo" name="titulo" maxlength="100" placeholder="">
					</div>
					<div class="form-group">
						<textarea name="conteudo" id="email_message" class="form-control mensagemRespostaObrigatoria" maxlength="8000" placeholder="Mensagem" style="height: 120px;"></textarea>
					</div>
					<div class="form-group">
						<input name="idRE" type="hidden" id="idRE" class="form-control" style="height: 120px;">
					</div>
				</div>
				<div class="modal-footer clearfix">
					<button type="submit" class="btn btn-primary pull-right btn-enviarResposta"><i class="fa fa-envelope"></i> Enviar</button>
					<button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Descartar</button>
				</div>
			</form>
		</div> 
	</div> 
</div>
@endsection



@section('maincontent')
	<section class="content-header no-margin">
		<h1>
	        Mensagens
			<small>Enviados</small>
	    </h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Mensagens</li>
	    </ol>
	</section>

	<section class="content">

		<div class="mailbox row">
			<div class="col-xs-12">
				<div class="box box-solid">
					<div class="box-body">
						<div class="row">
							<div class="col-md-3 col-sm-4">

								<div class="box-header">
									<i class="fa fa-inbox"></i>
									<h3 class="box-title">Caixa de Entrada</h3>
								</div>

								<a class="btn btn-block btn-primary" data-toggle="modal" data-target="#compose-modal"><i class="fa fa-pencil">&nbsp;</i>Nova Mensagem</a>

								<div style="margin-top: 15px;">
									<ul class="nav nav-pills nav-stacked">
										<li class="header">Pastas</li>
										<?php global $count; 
											$inbox= Mensagem::where('idUsuarioDestino', '=', Auth::user()->id)->get(); 
										?> 
										<?php $inbox->each(function($mensagem){
											global $count;
											if($mensagem->lida!=1){
												$count++;
											}
										}) ?>
										@if($count==0)
										<li class=""><a href="/professor/mensagens/entrada"><i class="fa fa-inbox"></i> Inbox</a></li>
										@else
										<li class=""><a href="/professor/mensagens/entrada"><i class="fa fa-inbox"></i> Inbox ({{$count}})</a></li>
										@endif
										<li class="active"><a href="/professor/mensagens/enviados"><i class="fa fa-mail-forward"></i> Enviados</a></li>
									</ul>
								</div>
							</div> 
							<div class="col-md-9 col-sm-8">
								<div class="row pad" style="padding-bottom:-10px;">
									<div class="col-sm-6">
										<label style="margin-right: 10px;" class="">
											<h4>Mensagens</h4>
										</label>

									</div>
									<div class="col-sm-6 search-form">
										<form action="#" class="text-right">
											<div class="input-group">
												<input type="text" class="form-control input-sm" placeholder="Busca">
												<div class="input-group-btn">
													<button type="submit" name="q" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
												</div>
											</div>
										</form>
									</div>
								</div><hr style="margin-top:-5px;">
								<div class="table-responsive">

									<table class="table table-mailbox">
										<tbody>
										@foreach($mensagens as $mensagem)
											<tr>
												<td class="small-col"> <!-- Checkbox -->
													Para:
												</td>
												<td class="name"> <!-- Remetente -->
													<a href="/professor/mensagem/{{$mensagem->id}}">{{User::find($mensagem->idUsuarioDestino)->nome}}</a>
												</td>
												<td class="subject"> <!-- Assunto -->
													<a href="/professor/mensagem/{{$mensagem->id}}">{{$mensagem->titulo}}</a>
												</td>
												<td>
													<div class="box-tools pull-right" style="padding-top: 8px;">
	                                                    <button class="btn btn-default" data-toggle="modal" data-target="#responder" data-idRE="{{$mensagem->id}}" data-idUsuarioDestino="{{$mensagem->idUsuarioOrgiem}}" data-nomeDestino="{{User::find($mensagem->idUsuarioOrgiem)->nome}}" data-titulo="RE: {{$mensagem->titulo}}"><i class="fa fa-reply" ></i> Responder</button>
	                                                </div>
												</td>
											</tr>
										@endforeach

										</tbody>
									</table>
								</div> 
							</div> 
						</div> 
					</div> 
					<div class="box-footer clearfix">
						<div class="pull-right">
							<?php echo $mensagens->links(); ?>
						</div>
					</div> 
				</div> 
			</div> 
		</div>

	</section>


@endsection



@section('scripts')
	<script>
		$('textarea').wysihtml5({
	        "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
	        "emphasis": true, //Italics, bold, etc. Default true
	        "lists": false, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
	        "html": false, //Button which allows you to edit the generated HTML. Default false
	        "link": false, //Button to insert a link. Default true
	        "image": false, //Button to insert an image. Default true,
	        "color": true //Button to change color of font  
	    });

    $('#responder').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var idUsuarioDestino = button.data('idusuariodestino');
        var nomeDestino = button.data('nomedestino');
        var idRE = button.data('idre');
        var titulo = button.data('titulo');

        var modal = $(this);

        modal.find('#idUsuarioDestino').val(idUsuarioDestino);
        modal.find('#idRE').val(idRE);
        modal.find('#titulo').val(titulo);
        modal.find('#nomeDestino').val(nomeDestino);
    });
	</script>
	
	<script>
	
		$(".btn-enviar").click(function(event){
				
			if($(".alunoObrigatorio").val() == ""){
				alert("É necessário preencher o Aluno que deverá receber a mensagem!");
				$(".alunoObrigatorio").focus();
				return false;
			} 
			
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
		
		$(".btn-enviarResposta").click(function(event){
				
			if($(".tituloRespostaObrigatorio").val() == ""){
				alert("É necessário preencher o Título da Mensagem!");
				$(".tituloRespostaObrigatorio").focus();
				return false;
			}

			if($(".mensagemRespostaObrigatoria").val() == ""){
				alert("É necessário preencher a Mensagem!");
				$(".mensagemRespostaObrigatoria").focus();
				return false;
			}			
			
		})
				
	</script>
@endsection
