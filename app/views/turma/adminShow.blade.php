@extends('master-admin')

@section('modals')

<div class="modal fade" id="editarTurma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <div id="div_nome_editar_turma" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome_editar_turma" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" maxlength="50" onblur="fcn_recarregaCoresEditarTurma();" class="form-control nomeObrigatorio_editar_turma">
                    </div>
                    <div id="div_professor_editar_turma" class="form-group">
                        <label class="control-label" for="professor"><i id="icone_professor_editar_turma" class="fa"></i> Professor</label>
                        <select id="idprofessor" name="idprofessor" onblur="fcn_recarregaCoresEditarTurma();" class="form-control professorObrigatorio_editar_turma">
                        @foreach(Professor::all() as $professor)
                            <option value="{{$professor->id}}">{{User::find($professor->id)->nome . " " . User::find($professor->id)->sobrenome }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div id="div_status_editar_turma" class="form-group">
                        <label class="control-label" for="status"><i id="icone_status_editar_turma" class="fa"></i> Status</label>
                        <select autocomplete="off" id="status" name="status" maxlength="50" onblur="fcn_recarregaCoresNovaTurma();" class="form-control statusObrigatorio_editar_turma">
                            <option value="1">Aberta (em andamento)</option>
                            <option value="0">Fechada (concluída)</option>
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

<div class="modal fade" id="criarTurma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                    <div id="div_curso_nova_turma" class="form-group">
                        <label class="control-label" for="curso"><i id="icone_curso_nova_turma" class="fa"></i> Curso</label>
                        <select name="curso" id="curso" class="form-control cursoObrigatorio_nova_turma" onblur="fcn_recarregaCoresNovaTurma();">
                        @foreach(Idioma::all() as $idioma)
	                        <optgroup label="{{$idioma->nome}}">
	                        	@foreach($idioma->cursos as $curso)
	                        		<option value="{{$curso->id}}">{{$curso->nome}}</option>
	                        	@endforeach
	                        	<option value="" disabled=""></option>
	                        </optgroup>
                        @endforeach
                        </select>
                    </div>

                    <div id="div_modulo_nova_turma" class="form-group">
                        <label class="control-label" for="curso"><i id="icone_modulo_nova_turma" class="fa"></i> Modulo</label>
                        <select name="idModulo" id="modulo" onblur="fcn_recarregaCoresNovaTurma();" class="form-control moduloObrigatorio_nova_turma">
	                        
                        </select>
                    </div>

                    <div id="div_nome_nova_turma" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome_nova_turma" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" maxlength="50" onblur="fcn_recarregaCoresNovaTurma();" class="form-control nomeObrigatorio_nova_turma">
                    </div>
                    <div id="div_professor_nova_turma" class="form-group">
                        <label class="control-label" for="professor"><i id="icone_professor_nova_turma" class="fa"></i> Professor</label>
                        <select id="idprofessor" name="idprofessor" onblur="fcn_recarregaCoresNovaTurma();" class="form-control professorObrigatorio_nova_turma">
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
	
@endsection

@section('maincontent')

<section class="content-header">
    <h1>Gerenciar Turmas</h1>
    <ol class="breadcrumb">
        <li><a href="/admin/home" ><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Gerenciar Turmas</li>
    </ol>
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12 box box-body">
			<table id="example" class="display" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Nome</th>
		                <th>Curso</th>
		                <th>Modulo</th>
		                <th>Professor</th>
		                <th>Status</th>
		                <th><button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarTurma" ><i class="fa fa-plus"></i></button></th>
		            </tr>
		        </thead>
		 
		        <tfoot>
		            <tr>
		               	<th>Nome</th>
		                <th>Curso</th>
		                <th>Modulo</th>
		                <th>Professor</th>
		                <th>Status</th>
		                <th><button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarTurma" ><i class="fa fa-plus"></i></button></th>
		            </tr>
		        </tfoot>
		    </table>
        </div>
    </div>

</section>

@endsection

@section('scripts')
<script src="{{ URL::asset('/js/dataTables.tableTools.js') }}" type="text/javascript"></script>

<script>

	$('#criarTurma').on('show.bs.modal', function (event) {
        var modal = $(this)
		
		var idCurso = $(this).find('#curso').val();

			$.get('/admin/listarModulos/'+idCurso, function( data ) {
				$('select#modulo').children().remove();
				$.each(data, function(key, val){
					$('select#modulo').append("<option value="+val.id+">"+val.nome+"</option>");
				})
			});
    })

	$('#curso').on('change', function (event){
		var idCurso = $(this).val();

		$.get('/admin/listarModulos/'+idCurso, function( data ) {
			$('select#modulo').children().remove();
			$.each(data, function(key, val){
				$('select#modulo').append("<option value="+val.id+">"+val.nome+"</option>");
			})
		});

		

	});
	

	$('#example').DataTable( {
	  "ajax":"/admin/listarTurmas" ,
	    "columns": [
	        { data: 'nome' },
	        { data: 'curso' },
	        { data: 'modulo2' },
	        { data: 'professor2' },
	        { data: 'status2' },
	        { data: 'action'}
	    ],

	    "scrollX": true,

	    "columnDefs": [ {
		      "targets": 5,
		      "orderable": false,
		      "searchable": false
		    } ],
		    
	    "dataSrc": "",
	     dom: 'T<"clear">lfrtip',
        tableTools: {
            "sSwfPath": "/swf/copy_csv_xls_pdf.swf"
        },

        responsive: true,

        language: {
		    "emptyTable":     "Nenhum registro disponível",
		    "info":           "Mostrando _START_ a _END_ de _TOTAL_ valores",
		    "infoEmpty":      "Mostrando 0 to 0 of 0 valores",
		    "infoFiltered":   "(Filtrado dentre _MAX_ valores)",
		    "infoPostFix":    "",
		    "thousands":      ",",
		    "lengthMenu":     "Mostrar _MENU_ valores",
		    "loadingRecords": "Carregando...",
		    "processing":     "Processando...",
		    "search":         "Pesquisa:",
		    "zeroRecords":    "Nenhum resultado encontrado",
		    "paginate": {
		        "first":      "Primeiro",
		        "last":       "Último",
		        "next":       "Próximo",
		        "previous":   "Anterior"
		    },
		    "aria": {
		        "sortAscending":  ": activate to sort column ascending",
		        "sortDescending": ": activate to sort column descending"
		    }
		}
    } );

	$('#editarTurma').on('show.bs.modal', function (event) {
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

</script>

<script> //Validações
$( ".somenteLetras" ).keyup(function() {
	//Não ativa função ao clicar tecla direção esquerda e direito, botão apagar e botão deletar
	if(event.keyCode != 37 && event.keyCode != 39 && event.keyCode != 46 && event.keyCode != 8){
		var valor = $(this).val().replace(/[^a-zA-ZãÃáÁàÀâÂéÉèÈêÊíÍìÌîÎõÕóÓòÒôÔúÚùÙûÛÇç ]+/g,'');
		$(this).val(valor);
	}
});

$( ".somenteNumeros" ).keyup(function() {
	//Não ativa função ao clicar tecla direção esquerda e direito, botão apagar e botão deletar
	if(event.keyCode != 37 && event.keyCode != 39 && event.keyCode != 46 && event.keyCode != 8){
		var valor = $(this).val().replace(/[^0-9]+/g,'');
		$(this).val(valor);
	}
});

$(".btn-salvar-nova-turma").click(function(event){
	
	var obrigatorioPendente = 0;
	
	if($(".cursoObrigatorio_nova_turma").val() == ""){
		obrigatorioPendente = 1;
		$( "#div_curso_nova_turma" ).removeClass("has-success");
		$( "#icone_curso_nova_turma" ).removeClass("fa-check");
		$( "#div_curso_nova_turma" ).addClass("has-error");
		$( "#icone_curso_nova_turma" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_curso_nova_turma" ).removeClass("has-error");
		$( "#icone_curso_nova_turma" ).removeClass("fa-times-circle-o");
		$( "#div_curso_nova_turma" ).addClass("has-success");
		$( "#icone_curso_nova_turma" ).addClass("fa-check");
	}
	
	if($(".moduloObrigatorio_nova_turma").val() == ""){
		obrigatorioPendente = 1;
		$( "#div_modulo_nova_turma" ).removeClass("has-success");
		$( "#icone_modulo_nova_turma" ).removeClass("fa-check");
		$( "#div_modulo_nova_turma" ).addClass("has-error");
		$( "#icone_modulo_nova_turma" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_modulo_nova_turma" ).removeClass("has-error");
		$( "#icone_modulo_nova_turma" ).removeClass("fa-times-circle-o");
		$( "#div_modulo_nova_turma" ).addClass("has-success");
		$( "#icone_modulo_nova_turma" ).addClass("fa-check");
	}
	
	if($(".nomeObrigatorio_nova_turma").val() == ""){
		obrigatorioPendente = 1;
		$( "#div_nome_nova_turma" ).removeClass("has-success");
		$( "#icone_nome_nova_turma" ).removeClass("fa-check");
		$( "#div_nome_nova_turma" ).addClass("has-error");
		$( "#icone_nome_nova_turma" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_nome_nova_turma" ).removeClass("has-error");
		$( "#icone_nome_nova_turma" ).removeClass("fa-times-circle-o");
		$( "#div_nome_nova_turma" ).addClass("has-success");
		$( "#icone_nome_nova_turma" ).addClass("fa-check");
	}
	
	if($(".professorObrigatorio_nova_turma").val() == ""){
		obrigatorioPendente = 1;
		$( "#div_professor_nova_turma" ).removeClass("has-success");
		$( "#icone_professor_nova_turma" ).removeClass("fa-check");
		$( "#div_professor_nova_turma" ).addClass("has-error");
		$( "#icone_professor_nova_turma" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_professor_nova_turma" ).removeClass("has-error");
		$( "#icone_professor_nova_turma" ).removeClass("fa-times-circle-o");
		$( "#div_professor_nova_turma" ).addClass("has-success");
		$( "#icone_professor_nova_turma" ).addClass("fa-check");
	}
	
	if(obrigatorioPendente == 1){
		alert("É necessário preencher todos os campos obrigatórios!");
		return false;
	}
	
})

$(".btn-salvar-editar-turma").click(function(event){
	
	var obrigatorioPendente = 0;
	
	if($(".nomeObrigatorio_editar_turma").val() == ""){
		obrigatorioPendente = 1;
		$( "#div_nome_editar_turma" ).removeClass("has-success");
		$( "#icone_nome_editar_turma" ).removeClass("fa-check");
		$( "#div_nome_editar_turma" ).addClass("has-error");
		$( "#icone_nome_editar_turma" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_nome_editar_turma" ).removeClass("has-error");
		$( "#icone_nome_editar_turma" ).removeClass("fa-times-circle-o");
		$( "#div_nome_editar_turma" ).addClass("has-success");
		$( "#icone_nome_editar_turma" ).addClass("fa-check");
	}
	
	if($(".professorObrigatorio_editar_turma").val() == ""){
		obrigatorioPendente = 1;
		$( "#div_professor_editar_turma" ).removeClass("has-success");
		$( "#icone_professor_editar_turma" ).removeClass("fa-check");
		$( "#div_professor_editar_turma" ).addClass("has-error");
		$( "#icone_professor_editar_turma" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_professor_editar_turma" ).removeClass("has-error");
		$( "#icone_professor_editar_turma" ).removeClass("fa-times-circle-o");
		$( "#div_professor_editar_turma" ).addClass("has-success");
		$( "#icone_professor_editar_turma" ).addClass("fa-check");
	}
	
	if($(".statusObrigatorio_editar_turma").val() == ""){
		obrigatorioPendente = 1;
		$( "#div_status_editar_turma" ).removeClass("has-success");
		$( "#icone_status_editar_turma" ).removeClass("fa-check");
		$( "#div_status_editar_turma" ).addClass("has-error");
		$( "#icone_status_editar_turma" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_status_editar_turma" ).removeClass("has-error");
		$( "#icone_status_editar_turma" ).removeClass("fa-times-circle-o");
		$( "#div_status_editar_turma" ).addClass("has-success");
		$( "#icone_status_editar_turma" ).addClass("fa-check");
	}
	
	if(obrigatorioPendente == 1){
		alert("É necessário preencher todos os campos obrigatórios!");
		return false;
	}
	
})

function fcn_recarregaCoresNovaTurma(){

	if($(".cursoObrigatorio_nova_turma").val() == ""){
		$( "#div_curso_nova_turma" ).removeClass("has-success");
		$( "#icone_curso_nova_turma" ).removeClass("fa-check");
		$( "#div_curso_nova_turma" ).addClass("has-error");
		$( "#icone_curso_nova_turma" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_curso_nova_turma" ).removeClass("has-error");
		$( "#icone_curso_nova_turma" ).removeClass("fa-times-circle-o");
		$( "#div_curso_nova_turma" ).addClass("has-success");
		$( "#icone_curso_nova_turma" ).addClass("fa-check");
	}
	
	if($(".moduloObrigatorio_nova_turma").val() == ""){
		$( "#div_modulo_nova_turma" ).removeClass("has-success");
		$( "#icone_modulo_nova_turma" ).removeClass("fa-check");
		$( "#div_modulo_nova_turma" ).addClass("has-error");
		$( "#icone_modulo_nova_turma" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_modulo_nova_turma" ).removeClass("has-error");
		$( "#icone_modulo_nova_turma" ).removeClass("fa-times-circle-o");
		$( "#div_modulo_nova_turma" ).addClass("has-success");
		$( "#icone_modulo_nova_turma" ).addClass("fa-check");
	}
	
	if($(".nomeObrigatorio_nova_turma").val() == ""){
		$( "#div_nome_nova_turma" ).removeClass("has-success");
		$( "#icone_nome_nova_turma" ).removeClass("fa-check");
		$( "#div_nome_nova_turma" ).addClass("has-error");
		$( "#icone_nome_nova_turma" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_nome_nova_turma" ).removeClass("has-error");
		$( "#icone_nome_nova_turma" ).removeClass("fa-times-circle-o");
		$( "#div_nome_nova_turma" ).addClass("has-success");
		$( "#icone_nome_nova_turma" ).addClass("fa-check");
	}
	
	if($(".professorObrigatorio_nova_turma").val() == ""){
		$( "#div_professor_nova_turma" ).removeClass("has-success");
		$( "#icone_professor_nova_turma" ).removeClass("fa-check");
		$( "#div_professor_nova_turma" ).addClass("has-error");
		$( "#icone_professor_nova_turma" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_professor_nova_turma" ).removeClass("has-error");
		$( "#icone_professor_nova_turma" ).removeClass("fa-times-circle-o");
		$( "#div_professor_nova_turma" ).addClass("has-success");
		$( "#icone_professor_nova_turma" ).addClass("fa-check");
	}

}

function fcn_recarregaCoresEditarTurma(){
	
	if($(".nomeObrigatorio_editar_turma").val() == ""){
		$( "#div_nome_editar_turma" ).removeClass("has-success");
		$( "#icone_nome_editar_turma" ).removeClass("fa-check");
		$( "#div_nome_editar_turma" ).addClass("has-error");
		$( "#icone_nome_editar_turma" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_nome_editar_turma" ).removeClass("has-error");
		$( "#icone_nome_editar_turma" ).removeClass("fa-times-circle-o");
		$( "#div_nome_editar_turma" ).addClass("has-success");
		$( "#icone_nome_editar_turma" ).addClass("fa-check");
	}
	
	if($(".professorObrigatorio_editar_turma").val() == ""){
		$( "#div_professor_editar_turma" ).removeClass("has-success");
		$( "#icone_professor_editar_turma" ).removeClass("fa-check");
		$( "#div_professor_editar_turma" ).addClass("has-error");
		$( "#icone_professor_editar_turma" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_professor_editar_turma" ).removeClass("has-error");
		$( "#icone_professor_editar_turma" ).removeClass("fa-times-circle-o");
		$( "#div_professor_editar_turma" ).addClass("has-success");
		$( "#icone_professor_editar_turma" ).addClass("fa-check");
	}
	
	if($(".statusObrigatorio_editar_turma").val() == ""){
		$( "#div_status_editar_turma" ).removeClass("has-success");
		$( "#icone_status_editar_turma" ).removeClass("fa-check");
		$( "#div_status_editar_turma" ).addClass("has-error");
		$( "#icone_status_editar_turma" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_status_editar_turma" ).removeClass("has-error");
		$( "#icone_status_editar_turma" ).removeClass("fa-times-circle-o");
		$( "#div_status_editar_turma" ).addClass("has-success");
		$( "#icone_status_editar_turma" ).addClass("fa-check");
	}
				
}
 
</script>

@endsection