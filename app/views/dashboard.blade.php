@extends('master')

@section('modals')

<div class="modal fade" id="criarAluno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Novo Aluno</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/criarAluno" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="tipo" name="tipo" value="1">
                    </div>
                    <div class="form-group">
                        <label for="nome" class="control-label">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="sobrenome" class="control-label">Sobrenome</label>
                        <input type="text" id="sobrenome" name="sobrenome" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="sobreMim" class="control-label">Sobre Mim</label>
                        <input type="text" id="sobreMim" name="sobreMim" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="dataNascimento" class="control-label">Data de Nascimento</label>
                        <input type="text" id="dataNascimento" name="dataNascimento" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">E-mail</label>
                        <input type="text" id="email" name="email" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="dataVencimentoBoleto" class="control-label">Data de Vencimento do Boleto</label>
                        <input type="text" id="dataVencimentoBoleto" name="dataVencimentoBoleto" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="codRegistro" class="control-label">Matrícula (nome de usuário)</label>
                        <input type="text" id="matricula" name="matricula" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="senha" class="control-label">Senha</label>
                        <input type="text" id="senha" name="password" class="form-control"></textarea>
                    </div>	
                    <div class="form-group">
                        <label for="respostaSecreta" class="control-label">Resposta Secreta</label>
                        <input type="text" id="respostaSecreta" name="respostaSecreta" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="urlImagem" class="control-label">Imagem Perfil</label>
                        <input type="file" id="urlImagem" name="urlImagem" class="form-control"></textarea>
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
    <h1>Gerenciar Alunos</h1>
    <ol class="breadcrumb">
        <li><a href="#" ><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Widgets</li>
    </ol>
</section>

<section class="content">

    <div class="row">
    	<div class="col-md-8">
    		<div class="box box-solid bg-green">
    			<div class="box-header">
    				<h3 class="box-title">Meus pontos</h3>
    			</div> 
    			<div class="box-body">
    				<div class="row">
        				<div class="col-xs-12 col-sm-3 center" style="text-align: center">
                            <span class="profile-picture">
                                <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" style="max-height: 200px;" src="/{{Auth::user()->urlImagem}}">
                            </span>
                        </div>
                        <div class="col-sm-9">
                        	<ul style="padding:0px; list-style: none;">
                        		<li style="font-size: x-large;font-weight: 600;">{{Auth::user()->nome}} {{Auth::user()->sobrenome}}</li>
                        		<li style="font-size: large;font-weight: 500;">{{Auth::user()->aluno->turmas->first()->nome}}</li>
                        		<li style="font-size: large;font-weight: 500;">Ranking: Turma: 5º / Módulo: 10º</li>
                        		<li style="font-size: large;font-weight: 500;">Medalha:
	                        		<div class="progress" style="margin-top:5px; height: 20px;background: rgb(0, 134, 73);">
	                                    <div class="progress-bar" style="width: 70%;background-color: white;">
	                                    </div>
	                                </div>
                                </li>
                        	</ul>
                        </div>   
                  	</div>
    			</div> 
    		</div> 
    	</div>
    	<div class="col-md-4">
    		<div class="box box-solid bg-green">
    			<div class="box-header">
    				<h3 class="box-title">Estatísticas</h3>
    			</div> 
    			<div class="box-body">
    				<div class="row">
        				<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
        					<input type="text" class="dial" data-width="150"data-fgColor="#ffec03"data-skin="tron"data-thickness=".2"data-displayPrevious=true>
						</div>
                  	</div>
    			</div> 
    		</div> 
    	</div>
    </div>

</section>

@endsection

@section('scripts')

<script>
	
	
</script>

@endsection