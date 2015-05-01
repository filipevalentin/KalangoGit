@extends('master-admin')

@section('modals')

<!--  ### MODALS ### -->

<div class="modal fade" id="editarmodulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Editar Módulo</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/atualizarModulo">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id">
                    </div>
                    <div id="div_nome-editar-modulo" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome-editar-modulo" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" maxlength="50" id="nome" name="nome" onblur="fcn_recarregaCoresEditarModulo();" class="form-control somenteLetrasENumeros nomeObrigatorio-editar-modulo" onblur="fcn_recarregaCoresEditarModulo();" >
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar-editar-modulo" value="Salvar">
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<div class="modal fade" id="editarturma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Editar Turma</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/atualizarTurma">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="idprofessor" name="idprofessor">
                    </div>
                    <div id="div_nome-editar-turma" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome-editar-turma" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" maxlength="50" onblur="fcn_recarregaCoresEditarTurma();" class="form-control nomeObrigatorio-editar-turma">
                    </div>
                    <div id="div_professor-editar-turma" class="form-group">
                        <label class="control-label" for="professor"><i id="icone_professor-editar-turma" class="fa"></i> Professor</label>
                        <select id="idprofessor" name="idprofessor" onblur="fcn_recarregaCoresEditarTurma();" class="form-control professorObrigatorio-editar-turma">
                        @foreach(Professor::all() as $professor)
                            <option value="{{$professor->id}}">{{User::find($professor->id)->nome . " " . User::find($professor->id)->sobrenome }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div id="div_status-editar-turma" class="form-group">
                        <label class="control-label" for="status"><i id="icone_status-editar-turma" class="fa"></i> Andamento</label>
                        <select autocomplete="off" id="status" name="status" maxlength="50" onblur="fcn_recarregaCoresEditarTurma()" class="form-control statusObrigatorio-editar-turma">
                            <option value="1">Em andamento</option>
                            <option value="0">Concluída</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar-editar-turma" value="Salvar">
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<div class="modal fade" id="editarcurso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Editar Curso</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/atualizarCurso">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id">
                    </div>
                    <div id="div_nome-editar-curso" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome-editar-curso" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" onblur="fcn_recarregaCoresEditarCurso();" maxlength="50" class="form-control somenteLetras nomeObrigatorio-editar-curso" ></textarea>
                    </div>
                    <div id="div_idioma-editar-curso" class="form-group">
                        <label class="control-label" for="idioma"><i id="icone_idioma-editar-curso" class="fa"></i> Idioma</label>
                        <select id="idioma" name="idioma" class="form-control">
                            @foreach(Idioma::all() as $idioma)
                                <option value={{$idioma->id}}>{{$idioma->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar-editar-curso" value="Salvar">
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<div class="modal fade" id="criarcurso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Novo Curso</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/criarCurso">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id">
                    </div>
                    <div id="div_nome-novo-curso" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome-novo-curso" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" onblur="fcn_recarregaCoresNovoCurso();" maxlength="50" class="form-control somenteLetras nomeObrigatorio-novo-curso">
                    </div>
                    <div id="div_idioma-novo-curso" class="form-group">
                        <label class="control-label" for="idioma"><i id="icone_idioma-novo-curso" class="fa"></i> Idioma</label>
                        <select id="idioma" name="idioma" class="form-control">
                          @foreach(Idioma::all() as $idioma)
                            <option value={{$idioma->id}}>{{$idioma->nome}}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar-novo-curso" value="Salvar">
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<div class="modal fade" id="criarturma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Nova Turma</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/criarTurma">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="idmodulo" name="idModulo">
                    </div>
                    <div id="div_nome-nova-turma" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome-nova-turma" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" maxlength="50" onblur="fcn_recarregaCoresNovaTurma();" class="form-control nomeObrigatorio-nova-turma"></textarea>
                    </div>
                    <div id="div_professor-nova-turma" class="form-group">
                        <label class="control-label" for="professor"><i id="icone_professor-nova-turma" class="fa"></i> Professor</label>
                        <select id="idprofessor" name="idprofessor" onblur="fcn_recarregaCoresNovaTurma();" class="form-control professorObrigatorio-nova-turma">
                            <option value="" disabled>Selecione um Professor</option>
                        @foreach(Professor::all() as $professor)
                            <option value="{{$professor->id}}">{{User::find($professor->id)->nome . " " . User::find($professor->id)->sobrenome }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar-nova-turma" value="Salvar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="criarmodulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Novo Módulo</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/criarModulo">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="idcurso" name="idCurso">
                    </div>
                    <div id="div_nome-novo-modulo" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome-novo-modulo" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" maxlength="50"onblur="fcn_recarregaCoresNovoModulo();" class="form-control somenteLetrasENumeros nomeObrigatorio-novo-modulo"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar-novo-modulo" value="Salvar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('maincontent')

<section class="content-header">
    <h1>Gerenciar Cursos</h1>
    <ol class="breadcrumb">
        <li><a href="/admin/home" ><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Gerenciar Cursos</li>
    </ol>
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Cursos</h3>
                    <div class="box-tools pull-right" style="padding: 10px 20px 5px 5px;" data-toggle="tooltip" data-placement="left" title="Criar Curso">
                        <button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarcurso"><i class="fa fa-plus"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                         @if($cursos->count() == 0)
                            <div class="callout callout-danger" style="max-width:50%; margin:auto;">
                                <h4 class="center">Nenhum Curso</h4>
                            </div>
                         @endif

                        @for($i=0; $i <= (int)(count($cursosArray)/5); $i++)
        
                            <div class="item">

                            @for($j=4*$i; $j<4*$i+4 && $j<(count($cursosArray)); $j++)


                                <div class="col-sm-3">
                                    <div class="box-body">
                                        <div class="small-box bg-blue">
                                            <div class="inner">
                                                <div class="box-tools pull-right">
                                
                                                    <button class="btn btn-success btn-xs" data-toggle="modal" rel="tooltip" data-placement="left" title="Editar Curso" data-target="#editarcurso" data-id="{{$cursosArray[$j]['id']}}" data-nome="{{$cursosArray[$j]['nome']}}" data-idioma="{{$cursosArray[$j]['idIdioma']}}"><i class="fa fa-pencil"></i></button>
                                                    <a href="/admin/curso/deletar/{{$cursosArray[$j]['id']}}"><button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></a>
                                                </div>
                                                <div class="curso" style="cursor:pointer;" id="{{$cursosArray[$j]['id']}}">
                                                    <h4 style="font-size: 20px;">{{$cursosArray[$j]['nome']}}</h4>
                                                    <p style="margin:0px;">{{$cursos->find($cursosArray[$j]['id'])->turmas()->where('status','=',1)->count()}} Turmas <span style="font-size: 12px; margin-left:2px;" >(em andamento)</span></p>
                                                    <p style="margin:5px 0px 0px 0px; font-size: 12px;">(Total: {{$cursos->find($cursosArray[$j]['id'])->turmas->count()}} Turmas)</p>
                                                </div>
                                            </div>

                                            <a href="#" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
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

            @foreach($cursos as $curso)

            <div class="conteudocurso" id="{{$curso->id}}" style="display:none;">

                <h2 class="page-header">{{$curso->nome}}</h2>

                <div class="box box-solid">
                    <div class="box-header">
                        <h3 class="box-title">Módulos</h3>
                        <div class="box-tools pull-right" style="padding: 3px 20px 5px 5px;" data-toggle="tooltip" data-placement="left" title="Criar Módulo">
                            <button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarmodulo" data-idcurso="{{$curso->id}}"><i class="fa fa-plus"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="box-group" id="accordion">
                            <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->

                        @foreach($curso->modulos as $modulo)    
                            <div class="panel box box-primary">
                                <div class="box-header">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#Modulo{{$modulo->id}}">
                                            {{$modulo->nome}}  <small style="padding-left:5px;">({{$modulo->turmas->count()}} Turmas)</small>
                                        </a>
                                    </h4>
                                    <div class="box-tools pull-right">
                                        <a href="/admin/modulo/{{$modulo->id}}"><button rel="tooltip" data-placement="right" title="Ver Aulas do Módulo" class="btn btn-primary btn-sm" ><i class="fa fa-book"></i></button></a>
                                        <button class="btn btn-success btn-sm" rel="tooltip" data-placement="left" title="Editar Módulo" data-toggle="modal" data-target="#editarmodulo" data-id="{{$modulo->id}}" data-nome="{{$modulo->nome}}"><i class="fa fa-pencil"></i></button>
                                        <a href="/admin/modulo/deletar/{{$modulo->id}}"><button class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button></a>
                                    </div>
                                </div>
                                <div id="Modulo{{$modulo->id}}" class="panel-collapse collapse">
                                    <div class="row">

                                    @foreach($modulo->turmas()->where('status','=',1)->get() as $turma)
                                        <div class="col-md-3">
                                            <div class="box-body">
                                                <div class="small-box bg-green">
                                                    <div class="inner">
                                                        <div class="box-tools pull-right">
                                        
                                                            <button class="btn btn-success btn-xs" rel="tooltip" data-placement="left" title="Editar Turma" data-toggle="modal" data-target="#editarturma" data-id="{{$turma->id}}" data-nome="{{$turma->nome}}" data-professor="{{User::find($turma->professor->id)->nome}}" data-idprofessor="{{$turma->professor->id}}" data-status="{{$turma->status}}"><i class="fa fa-pencil"></i></button>
                                                            <a href="/admin/turma/deletar/{{$turma->id}}"><button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></a>
                                                        </div>
                                                        <a href="/admin/turma/{{$turma->id}}" style="color: inherit;" class="turma" id="{{$turma->id}}">
                                                            <h4 style="font-size: 20px;">{{$turma->nome}}</h4>
                                                            <p>{{TurmasAluno::where('idTurma', '=', $turma->id)->count()." Alunos"}}</p>
                                                            <p style="margin:0px;">{{$turma->professor->usuario->nome . " " . $turma->professor->usuario->sobrenome }}</p>
                                                        </a>
                                                    </div>

                                                    <a href="/admin/turma/{{$turma->id}}" class="small-box-footer">Ver Alunos <i class="fa fa-arrow-circle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                        <div class="box-tools pull-right" style="padding: 100px 25px 5px 5px;">
                                            <div data-toggle="tooltip" data-placement="left" title="Criar Turma">
                                            <button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarturma" data-idmodulo="{{$modulo->id}}"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        </div>
                    </div><!-- /.box-body -->
                </div>
            </div>

            @endforeach

        </div>
    </div> 
</section>

    @section('scripts')

        <script>
            $(function () {
              $('[rel="tooltip"]').tooltip()
            })

            $('#editarmodulo').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var dataid = button.data('id')
                var datanome = button.data('nome')
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('Editar Módulo ' + dataid)
                modal.find('#id').val(dataid)
                modal.find('#nome').val(datanome)
                })

            $('#editarturma').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var dataid = button.data('id')
                var datanome = button.data('nome')
                var dataidprofessor = button.data('idprofessor')
                var datastatus = button.data('status');

                var modal = $(this)
                modal.find('.modal-title').text('Editar Turma ' + datanome)
                modal.find('#id').val(dataid)
                modal.find('#nome').val(datanome)
                modal.find('#idprofessor').val(dataidprofessor)
                modal.find('#status').val(datastatus);
                })

            $('#editarcurso').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var dataid = button.data('id')
                var datanome = button.data('nome')
                var dataidioma = button.data('idioma') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('Editar Curso ')
                modal.find('#id').val(dataid)
                modal.find('#nome').val(datanome)
                modal.find('#idioma').val(dataidioma)
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
			
			$(".btn-salvar-editar-modulo").click(function(event){
			
				var obrigatorioPendente = 0;
			
				if($(".nomeObrigatorio-editar-modulo").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_nome-editar-modulo" ).removeClass("has-success");
					$( "#icone_nome-editar-modulo" ).removeClass("fa-check");
					$( "#div_nome-editar-modulo" ).addClass("has-error");
					$( "#icone_nome-editar-modulo" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_nome-editar-modulo" ).removeClass("has-error");
					$( "#icone_nome-editar-modulo" ).removeClass("fa-times-circle-o");
					$( "#div_nome-editar-modulo" ).addClass("has-success");
					$( "#icone_nome-editar-modulo" ).addClass("fa-check");
				}
				
				if(obrigatorioPendente == 1){
					alert("É necessário preencher todos os campos obrigatórios!");
					return false;
				}
				
			})
			
			$(".btn-salvar-editar-turma").click(function(event){
			
				var obrigatorioPendente = 0;
			
				if($(".nomeObrigatorio-editar-turma").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_nome-editar-turma" ).removeClass("has-success");
					$( "#icone_nome-editar-turma" ).removeClass("fa-check");
					$( "#div_nome-editar-turma" ).addClass("has-error");
					$( "#icone_nome-editar-turma" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_nome-editar-turma" ).removeClass("has-error");
					$( "#icone_nome-editar-turma" ).removeClass("fa-times-circle-o");
					$( "#div_nome-editar-turma" ).addClass("has-success");
					$( "#icone_nome-editar-turma" ).addClass("fa-check");
				}
				
				if($(".professorObrigatorio-editar-turma").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_professor-editar-turma" ).removeClass("has-success");
					$( "#icone_professor-editar-turma" ).removeClass("fa-check");
					$( "#div_professor-editar-turma" ).addClass("has-error");
					$( "#icone_professor-editar-turma" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_professor-editar-turma" ).removeClass("has-error");
					$( "#icone_professor-editar-turma" ).removeClass("fa-times-circle-o");
					$( "#div_professor-editar-turma" ).addClass("has-success");
					$( "#icone_professor-editar-turma" ).addClass("fa-check");
				}
				
				if($(".statusObrigatorio-editar-turma").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_status-editar-turma" ).removeClass("has-success");
					$( "#icone_status-editar-turma" ).removeClass("fa-check");
					$( "#div_status-editar-turma" ).addClass("has-error");
					$( "#icone_status-editar-turma" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_status-editar-turma" ).removeClass("has-error");
					$( "#icone_status-editar-turma" ).removeClass("fa-times-circle-o");
					$( "#div_status-editar-turma" ).addClass("has-success");
					$( "#icone_status-editar-turma" ).addClass("fa-check");
				}
				
				if(obrigatorioPendente == 1){
					alert("É necessário preencher todos os campos obrigatórios!");
					return false;
				}
				
			})
			
			$(".btn-salvar-editar-curso").click(function(event){
			
				var obrigatorioPendente = 0;
			
				if($(".nomeObrigatorio-editar-curso").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_nome-editar-curso" ).removeClass("has-success");
					$( "#icone_nome-editar-curso" ).removeClass("fa-check");
					$( "#div_nome-editar-curso" ).addClass("has-error");
					$( "#icone_nome-editar-curso" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_nome-editar-curso" ).removeClass("has-error");
					$( "#icone_nome-editar-curso" ).removeClass("fa-times-circle-o");
					$( "#div_nome-editar-curso" ).addClass("has-success");
					$( "#icone_nome-editar-curso" ).addClass("fa-check");
				}
				
				if($(".idiomaObrigatorio-editar-idioma").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_idioma-editar-curso" ).removeClass("has-success");
					$( "#icone_idioma-editar-curso" ).removeClass("fa-check");
					$( "#div_idioma-editar-curso" ).addClass("has-error");
					$( "#icone_idioma-editar-curso" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_idioma-editar-curso" ).removeClass("has-error");
					$( "#icone_idioma-editar-curso" ).removeClass("fa-times-circle-o");
					$( "#div_idioma-editar-curso" ).addClass("has-success");
					$( "#icone_idioma-editar-curso" ).addClass("fa-check");
				}
				
				if(obrigatorioPendente == 1){
					alert("É necessário preencher todos os campos obrigatórios!");
					return false;
				}
				
			})
			
			$(".btn-salvar-novo-curso").click(function(event){
			
				var obrigatorioPendente = 0;
			
				if($(".nomeObrigatorio-novo-curso").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_nome-novo-curso" ).removeClass("has-success");
					$( "#icone_nome-novo-curso" ).removeClass("fa-check");
					$( "#div_nome-novo-curso" ).addClass("has-error");
					$( "#icone_nome-novo-curso" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_nome-novo-curso" ).removeClass("has-error");
					$( "#icone_nome-novo-curso" ).removeClass("fa-times-circle-o");
					$( "#div_nome-novo-curso" ).addClass("has-success");
					$( "#icone_nome-novo-curso" ).addClass("fa-check");
				}
				
				if($(".idiomaObrigatorio-novo-curso").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_idioma-novo-curso" ).removeClass("has-success");
					$( "#icone_idioma-novo-curso" ).removeClass("fa-check");
					$( "#div_idioma-novo-curso" ).addClass("has-error");
					$( "#icone_idioma-novo-curso" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_idioma-novo-curso" ).removeClass("has-error");
					$( "#icone_idioma-novo-curso" ).removeClass("fa-times-circle-o");
					$( "#div_idioma-novo-curso" ).addClass("has-success");
					$( "#icone_idioma-novo-curso" ).addClass("fa-check");
				}
				
				if(obrigatorioPendente == 1){
					alert("É necessário preencher todos os campos obrigatórios!");
					return false;
				}
				
			})
			
			$(".btn-salvar-nova-turma").click(function(event){
			
				var obrigatorioPendente = 0;
			
				if($(".nomeObrigatorio-nova-turma").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_nome-nova-turma" ).removeClass("has-success");
					$( "#icone_nome-nova-turma" ).removeClass("fa-check");
					$( "#div_nome-nova-turma" ).addClass("has-error");
					$( "#icone_nome-nova-turma" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_nome-nova-turma" ).removeClass("has-error");
					$( "#icone_nome-nova-turma" ).removeClass("fa-times-circle-o");
					$( "#div_nome-nova-turma" ).addClass("has-success");
					$( "#icone_nome-nova-turma" ).addClass("fa-check");
				}
				
				if($(".professorObrigatorio-nova-turma").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_professor-nova-turma" ).removeClass("has-success");
					$( "#icone_idioma-novo-curso" ).removeClass("fa-check");
					$( "#div_professor-nova-turma" ).addClass("has-error");
					$( "#icone_idioma-novo-curso" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_professor-nova-turma" ).removeClass("has-error");
					$( "#icone_professor-nova-turma" ).removeClass("fa-times-circle-o");
					$( "#div_professor-nova-turma" ).addClass("has-success");
					$( "#icone_professor-nova-turma" ).addClass("fa-check");
				}
				
				if(obrigatorioPendente == 1){
					alert("É necessário preencher todos os campos obrigatórios!");
					return false;
				}
				
			})
			
			$(".btn-salvar-novo-modulo").click(function(event){
			
				var obrigatorioPendente = 0;
			
				if($(".nomeObrigatorio-novo-modulo").val() == ""){
					obrigatorioPendente = 1;
					$( "#div_nome-novo-modulo" ).removeClass("has-success");
					$( "#icone_nome-novo-modulo" ).removeClass("fa-check");
					$( "#div_nome-novo-modulo" ).addClass("has-error");
					$( "#icone_nome-novo-modulo" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_nome-novo-modulo" ).removeClass("has-error");
					$( "#icone_nome-novo-modulo" ).removeClass("fa-times-circle-o");
					$( "#div_nome-novo-modulo" ).addClass("has-success");
					$( "#icone_nome-novo-modulo" ).addClass("fa-check");
				}
				
				if(obrigatorioPendente == 1){
					alert("É necessário preencher todos os campos obrigatórios!");
					return false;
				}
				
			})
			
			function fcn_recarregaCoresEditarModulo(){
				
				if($(".nomeObrigatorio-editar-modulo").val() == ""){
					$( "#div_nome-editar-modulo" ).removeClass("has-success");
					$( "#icone_nome-editar-modulo" ).removeClass("fa-check");
					$( "#div_nome-editar-modulo" ).addClass("has-error");
					$( "#icone_nome-editar-modulo" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_nome-editar-modulo" ).removeClass("has-error");
					$( "#icone_nome-editar-modulo" ).removeClass("fa-times-circle-o");
					$( "#div_nome-editar-modulo" ).addClass("has-success");
					$( "#icone_nome-editar-modulo" ).addClass("fa-check");
				}
				
			}
			
			function fcn_recarregaCoresEditarTurma(){
				
				if($(".nomeObrigatorio-editar-turma").val() == ""){
					$( "#div_nome-editar-turma" ).removeClass("has-success");
					$( "#icone_nome-editar-turma" ).removeClass("fa-check");
					$( "#div_nome-editar-turma" ).addClass("has-error");
					$( "#icone_nome-editar-turma" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_nome-editar-turma" ).removeClass("has-error");
					$( "#icone_nome-editar-turma" ).removeClass("fa-times-circle-o");
					$( "#div_nome-editar-turma" ).addClass("has-success");
					$( "#icone_nome-editar-turma" ).addClass("fa-check");
				}
				
				if($(".professorObrigatorio-editar-turma").val() == ""){
					$( "#div_professor-editar-turma" ).removeClass("has-success");
					$( "#icone_professor-editar-turma" ).removeClass("fa-check");
					$( "#div_professor-editar-turma" ).addClass("has-error");
					$( "#icone_professor-editar-turma" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_professor-editar-turma" ).removeClass("has-error");
					$( "#icone_professor-editar-turma" ).removeClass("fa-times-circle-o");
					$( "#div_professor-editar-turma" ).addClass("has-success");
					$( "#icone_professor-editar-turma" ).addClass("fa-check");
				}
				
				if($(".statusObrigatorio-editar-turma").val() == ""){
					$( "#div_status-editar-turma" ).removeClass("has-success");
					$( "#icone_status-editar-turma" ).removeClass("fa-check");
					$( "#div_status-editar-turma" ).addClass("has-error");
					$( "#icone_status-editar-turma" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_status-editar-turma" ).removeClass("has-error");
					$( "#icone_status-editar-turma" ).removeClass("fa-times-circle-o");
					$( "#div_status-editar-turma" ).addClass("has-success");
					$( "#icone_status-editar-turma" ).addClass("fa-check");
				}
				
			}
			
			function fcn_recarregaCoresEditarCurso(){
				
				if($(".nomeObrigatorio-editar-curso").val() == ""){
					$( "#div_nome-editar-curso" ).removeClass("has-success");
					$( "#icone_nome-editar-curso" ).removeClass("fa-check");
					$( "#div_nome-editar-curso" ).addClass("has-error");
					$( "#icone_nome-editar-curso" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_nome-editar-curso" ).removeClass("has-error");
					$( "#icone_nome-editar-curso" ).removeClass("fa-times-circle-o");
					$( "#div_nome-editar-curso" ).addClass("has-success");
					$( "#icone_nome-editar-curso" ).addClass("fa-check");
				}
				
				if($(".idiomaObrigatorio-editar-idioma").val() == ""){
					$( "#div_idioma-editar-curso" ).removeClass("has-success");
					$( "#icone_idioma-editar-curso" ).removeClass("fa-check");
					$( "#div_idioma-editar-curso" ).addClass("has-error");
					$( "#icone_idioma-editar-curso" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_idioma-editar-curso" ).removeClass("has-error");
					$( "#icone_idioma-editar-curso" ).removeClass("fa-times-circle-o");
					$( "#div_idioma-editar-curso" ).addClass("has-success");
					$( "#icone_idioma-editar-curso" ).addClass("fa-check");
				}
				
			}
			
			function fcn_recarregaCoresNovoCurso(){
			
				if($(".nomeObrigatorio-novo-curso").val() == ""){
					$( "#div_nome-novo-curso" ).removeClass("has-success");
					$( "#icone_nome-novo-curso" ).removeClass("fa-check");
					$( "#div_nome-novo-curso" ).addClass("has-error");
					$( "#icone_nome-novo-curso" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_nome-novo-curso" ).removeClass("has-error");
					$( "#icone_nome-novo-curso" ).removeClass("fa-times-circle-o");
					$( "#div_nome-novo-curso" ).addClass("has-success");
					$( "#icone_nome-novo-curso" ).addClass("fa-check");
				}
				
				if($(".idiomaObrigatorio-novo-curso").val() == ""){
					$( "#div_idioma-novo-curso" ).removeClass("has-success");
					$( "#icone_idioma-novo-curso" ).removeClass("fa-check");
					$( "#div_idioma-novo-curso" ).addClass("has-error");
					$( "#icone_idioma-novo-curso" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_idioma-novo-curso" ).removeClass("has-error");
					$( "#icone_idioma-novo-curso" ).removeClass("fa-times-circle-o");
					$( "#div_idioma-novo-curso" ).addClass("has-success");
					$( "#icone_idioma-novo-curso" ).addClass("fa-check");
				}
			
			}
			
			function fcn_recarregaCoresNovaTurma(){
				
				if($(".nomeObrigatorio-nova-turma").val() == ""){
					$( "#div_nome-nova-turma" ).removeClass("has-success");
					$( "#icone_nome-nova-turma" ).removeClass("fa-check");
					$( "#div_nome-nova-turma" ).addClass("has-error");
					$( "#icone_nome-nova-turma" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_nome-nova-turma" ).removeClass("has-error");
					$( "#icone_nome-nova-turma" ).removeClass("fa-times-circle-o");
					$( "#div_nome-nova-turma" ).addClass("has-success");
					$( "#icone_nome-nova-turma" ).addClass("fa-check");
				}
				
				if($(".professorObrigatorio-nova-turma").val() == ""){
					$( "#div_professor-nova-turma" ).removeClass("has-success");
					$( "#icone_idioma-novo-curso" ).removeClass("fa-check");
					$( "#div_professor-nova-turma" ).addClass("has-error");
					$( "#icone_idioma-novo-curso" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_professor-nova-turma" ).removeClass("has-error");
					$( "#icone_professor-nova-turma" ).removeClass("fa-times-circle-o");
					$( "#div_professor-nova-turma" ).addClass("has-success");
					$( "#icone_professor-nova-turma" ).addClass("fa-check");
				}
				
			}
			
			function fcn_recarregaCoresNovoModulo(){
				
				if($(".nomeObrigatorio-novo-modulo").val() == ""){
					$( "#div_nome-novo-modulo" ).removeClass("has-success");
					$( "#icone_nome-novo-modulo" ).removeClass("fa-check");
					$( "#div_nome-novo-modulo" ).addClass("has-error");
					$( "#icone_nome-novo-modulo" ).addClass("fa-times-circle-o");
				}else{
					$( "#div_nome-novo-modulo" ).removeClass("has-error");
					$( "#icone_nome-novo-modulo" ).removeClass("fa-times-circle-o");
					$( "#div_nome-novo-modulo" ).addClass("has-success");
					$( "#icone_nome-novo-modulo" ).addClass("fa-check");
				}
				
			}
			
		</script>
    @endsection

@endsection
