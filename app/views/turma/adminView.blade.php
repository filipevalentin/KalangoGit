@extends('master-admin')

@section('modals')

<!--  ### MODALS ### -->

<div class="modal fade" id="adicionaraluno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Adicionar Aluno à turma</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/matricularAluno">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="idTurma" name="idTurma" value="{{$turma->id}}">
                    </div>
                    <div id="div_aluno" class="form-group">
                        <label class="control-label" for="Aluno"><i id="icone_aluno" class="fa"></i> Selecione o Aluno:</label>
                        <select name="idAluno" id="idAluno" onblur="fcn_recarregaCores();" class="form-control alunoObrigatorio">
                        @foreach(Aluno::all() as $aluno)
                          <option value="{{$aluno->id}}">{{$aluno->matricula}} - {{User::find($aluno->id)->nome}} {{User::find($aluno->id)->sobrenome}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar" value="Salvar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

<?php $cont = 1; ?>


@section('maincontent')

<section class="content-header">
    <h1>Gerenciar Turmas</h1>
    <ol class="breadcrumb">
        <li><a href="#" ><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Widgets</li>
    </ol>
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">

            <h2 class="page-header"> {{$turma->modulo->nome}}</h2>

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lista de Alunos - Turma {{$turma->nome}} </h3>
                    <div class="box-tools pull-right" style="padding: 3px 20px 5px 5px;">
                        <button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#adicionaraluno" data-idturma="1"><i class="fa fa-plus"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th style="/* width: 10px */">#</th>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th style="/* width: 40px */">E-mail</th>
                                <th>Ação</th>
                            </tr>
                            @foreach($alunos as $aluno)
                            <tr>
                                <td>{{$cont++}}</td>
                                <td>{{User::find($aluno->id)->nome}}</td>
                                <td>{{User::find($aluno->id)->sobrenome}}</td>
                                <td>{{User::find($aluno->id)->email}}</td>
                                <td>
                                    <div class="box-tools" style="padding:0px">
                                        <a href="/admin/aluno/{{$aluno->id}}"><button class="btn btn-success btn-xs"><i class="fa fa-external-link"></i></button></a>
                                        <a href="/admin/desmatricularAluno/{{$aluno->id}}/{{$turma->id}}"><button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></a>
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
           
            $('.item').first().addClass("active")
			
        </script>
		
		<script> //Validações
			
			$(".btn-salvar").click(function(event){
				
				var obrigatorioPendente = 0;
	
				if($(".alunoObrigatorio").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_aluno" ).removeClass("has-success");
					$( "#icone_aluno" ).removeClass("fa-check");
					$( "#div_aluno" ).addClass("has-error");
					$( "#icone_aluno" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_aluno" ).removeClass("has-error");
					$( "#icone_aluno" ).removeClass("fa-times-circle-o");
					$( "#div_aluno" ).addClass("has-success");
					$( "#icone_aluno" ).addClass("fa-check");
				}
				
				if(obrigatorioPendente == 1){
					alert("É necessário preencher todos os campos obrigatórios!");
					return false;
				}
				
			})
			
			function fcn_recarregaCores(){
				
				if($(".alunoObrigatorio").val() == ""){
					$( "#div_aluno" ).removeClass("has-success");
					$( "#icone_aluno" ).removeClass("fa-check");
					$( "#div_aluno" ).addClass("has-error");
					$( "#icone_aluno" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_aluno" ).removeClass("has-error");
					$( "#icone_aluno" ).removeClass("fa-times-circle-o");
					$( "#div_aluno" ).addClass("has-success");
					$( "#icone_aluno" ).addClass("fa-check");
				}
				
			}
			
		</script>
    @endsection

@endsection
