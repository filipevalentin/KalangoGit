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
                    <div id="div_nome-editar-turma" class="form-group">
                        <label class="control-label" for="status"><i id="icone_status-editar-turma" class="fa"></i> Status</label>
                        <select autocomplete="off" id="status" name="status" maxlength="50" onblur="" class="form-control">
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

                    <div id="div_nome-nova-turma" class="form-group">
                        <label class="control-label" for="curso"><i id="icone_nome-nova-turma" class="fa"></i> Curso</label>
                        <select name="curso" id="curso" class="form-control">
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

                    <div id="div_nome-nova-turma" class="form-group">
                        <label class="control-label" for="curso"><i id="icone_nome-nova-turma" class="fa"></i> Modulo</label>
                        <select name="curso" id="modulo" class="form-control">
	                        
                        </select>
                    </div>

                    <div id="div_nome-nova-turma" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome-nova-turma" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" maxlength="50" onblur="fcn_recarregaCoresNovaTurma();" class="form-control nomeObrigatorio-nova-turma">
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
	
@endsection

@section('maincontent')

<section class="content-header">
    <h1>Gerenciar Turmas</h1>
    <ol class="breadcrumb">
        <li><a href="/" ><i class="fa fa-dashboard"></i> Home</a></li>
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
					$('select#modulo').append("<option val="+val.id+">"+val.nome+"</option>");
				})
			});
    })

	$('#curso').on('change', function (event){
		var idCurso = $(this).val();

		$.get('/admin/listarModulos/'+idCurso, function( data ) {
			$('select#modulo').children().remove();
			$.each(data, function(key, val){
				$('select#modulo').append("<option val="+val.id+">"+val.nome+"</option>");
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

$(".btn-salvar").click(function(event){
	
	var obrigatorioPendente = 0;
	
	if($(".nomeObrigatorio").val() == ""){
		obrigatorioPendente = 1;
		$( "#div_nome" ).removeClass("has-success");
		$( "#icone_nome" ).removeClass("fa-check");
		$( "#div_nome" ).addClass("has-error");
		$( "#icone_nome" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_nome" ).removeClass("has-error");
		$( "#icone_nome" ).removeClass("fa-times-circle-o");
		$( "#div_nome" ).addClass("has-success");
		$( "#icone_nome" ).addClass("fa-check");
	}
	
	if($(".sobrenomeObrigatorio").val() == ""){
		obrigatorioPendente = 1;
		$( "#div_sobrenome" ).removeClass("has-success");
		$( "#icone_sobrenome" ).removeClass("fa-check");
		$( "#div_sobrenome" ).addClass("has-error");
		$( "#icone_sobrenome" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_sobrenome" ).removeClass("has-error");
		$( "#icone_sobrenome" ).removeClass("fa-times-circle-o");
		$( "#div_sobrenome" ).addClass("has-success");
		$( "#icone_sobrenome" ).addClass("fa-check");
	}
	
	if($(".formacaoAcademicaObrigatoria").val() == ""){
		obrigatorioPendente = 1;
		$( "#div_formacaoAcademica" ).removeClass("has-success");
		$( "#icone_formacaoAcademica" ).removeClass("fa-check");
		$( "#div_formacaoAcademica" ).addClass("has-error");
		$( "#icone_formacaoAcademica" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_formacaoAcademica" ).removeClass("has-error");
		$( "#icone_formacaoAcademica" ).removeClass("fa-times-circle-o");
		$( "#div_formacaoAcademica" ).addClass("has-success");
		$( "#icone_formacaoAcademica" ).addClass("fa-check");
	}
	
	if($(".emailObrigatorio").val() == ""){
		obrigatorioPendente = 1;
		$( "#div_email" ).removeClass("has-success");
		$( "#icone_email" ).removeClass("fa-check");
		$( "#div_email" ).addClass("has-error");
		$( "#icone_email" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_email" ).removeClass("has-error");
		$( "#icone_email" ).removeClass("fa-times-circle-o");
		$( "#div_email" ).addClass("has-success");
		$( "#icone_email" ).addClass("fa-check");
	}
	
	if($(".codigoRegistroObrigatorio").val() == ""){
		obrigatorioPendente = 1;
		$( "#div_codigoRegistro" ).removeClass("has-success");
		$( "#icone_codigoRegistro" ).removeClass("fa-check");
		$( "#div_codigoRegistro" ).addClass("has-error");
		$( "#icone_codigoRegistro" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_codigoRegistro" ).removeClass("has-error");
		$( "#icone_codigoRegistro" ).removeClass("fa-times-circle-o");
		$( "#div_codigoRegistro" ).addClass("has-success");
		$( "#icone_codigoRegistro" ).addClass("fa-check");
	}
	
	if($(".senhaObrigatoria").val() == ""){
		obrigatorioPendente = 1;
		$( "#div_senha" ).removeClass("has-success");
		$( "#icone_senha" ).removeClass("fa-check");
		$( "#div_senha" ).addClass("has-error");
		$( "#icone_senha" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_senha" ).removeClass("has-error");
		$( "#icone_senha" ).removeClass("fa-times-circle-o");
		$( "#div_senha" ).addClass("has-success");
		$( "#icone_senha" ).addClass("fa-check");
	}
	
	if(obrigatorioPendente == 1){
		alert("É necessário preencher todos os campos obrigatórios!");
		return false;
	}
	
})

function fcn_recarregaCores(){
	
	if($(".nomeObrigatorio").val() == ""){
		$( "#div_nome" ).removeClass("has-success");
		$( "#icone_nome" ).removeClass("fa-check");
		$( "#div_nome" ).addClass("has-error");
		$( "#icone_nome" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_nome" ).removeClass("has-error");
		$( "#icone_nome" ).removeClass("fa-times-circle-o");
		$( "#div_nome" ).addClass("has-success");
		$( "#icone_nome" ).addClass("fa-check");
	}
	
	if($(".sobrenomeObrigatorio").val() == ""){
		$( "#div_sobrenome" ).removeClass("has-success");
		$( "#icone_sobrenome" ).removeClass("fa-check");
		$( "#div_sobrenome" ).addClass("has-error");
		$( "#icone_sobrenome" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_sobrenome" ).removeClass("has-error");
		$( "#icone_sobrenome" ).removeClass("fa-times-circle-o");
		$( "#div_sobrenome" ).addClass("has-success");
		$( "#icone_sobrenome" ).addClass("fa-check");
	}
	
	if($(".formacaoAcademicaObrigatoria").val() == ""){
		$( "#div_formacaoAcademica" ).removeClass("has-success");
		$( "#icone_formacaoAcademica" ).removeClass("fa-check");
		$( "#div_formacaoAcademica" ).addClass("has-error");
		$( "#icone_formacaoAcademica" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_formacaoAcademica" ).removeClass("has-error");
		$( "#icone_formacaoAcademica" ).removeClass("fa-times-circle-o");
		$( "#div_formacaoAcademica" ).addClass("has-success");
		$( "#icone_formacaoAcademica" ).addClass("fa-check");
	}
	
	if($(".emailObrigatorio").val() == ""){
		$( "#div_email" ).removeClass("has-success");
		$( "#icone_email" ).removeClass("fa-check");
		$( "#div_email" ).addClass("has-error");
		$( "#icone_email" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_email" ).removeClass("has-error");
		$( "#icone_email" ).removeClass("fa-times-circle-o");
		$( "#div_email" ).addClass("has-success");
		$( "#icone_email" ).addClass("fa-check");
	}
	
	if($(".codigoRegistroObrigatorio").val() == ""){
		$( "#div_codigoRegistro" ).removeClass("has-success");
		$( "#icone_codigoRegistro" ).removeClass("fa-check");
		$( "#div_codigoRegistro" ).addClass("has-error");
		$( "#icone_codigoRegistro" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_codigoRegistro" ).removeClass("has-error");
		$( "#icone_codigoRegistro" ).removeClass("fa-times-circle-o");
		$( "#div_codigoRegistro" ).addClass("has-success");
		$( "#icone_codigoRegistro" ).addClass("fa-check");
	}
	
	if($(".senhaObrigatoria").val() == ""){
		$( "#div_senha" ).removeClass("has-success");
		$( "#icone_senha" ).removeClass("fa-check");
		$( "#div_senha" ).addClass("has-error");
		$( "#icone_senha" ).addClass("fa-times-circle-o");
	}else{
		$( "#div_senha" ).removeClass("has-error");
		$( "#icone_senha" ).removeClass("fa-times-circle-o");
		$( "#div_senha" ).addClass("has-success");
		$( "#icone_senha" ).addClass("fa-check");
	}
				
}

function fcn_validaEmail(pstr_email){
	if (pstr_email.value != '') {	
		er = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}/;
		if (!er.exec(pstr_email.value)) {
			
			$( "#div_email" ).removeClass("has-success");
			$( "#icone_email" ).removeClass("fa-check");
			$( "#div_email" ).addClass("has-error");
			$( "#icone_email" ).addClass("fa-times-circle-o");
			
			pstr_email.focus();
			alert("É necessário o preenchimento de um endereço de e-mail válido.");
			pstr_email.focus();
			return false;
		}
	}
}

function fcn_validaSenha(minimo, maximo, pstr_valor){
	
	var senha = document.getElementById('senha').value;
	var str = pstr_valor;
	
	if(senha != ""){
	
		if (senha.length > maximo) {
			document.getElementById('senha').value = senha.substring(0, maximo);
		} else {
			
			if(senha.length < minimo){
				
				$( "#div_senha" ).removeClass("has-success");
				$( "#icone_senha" ).removeClass("fa-check");
				$( "#div_senha" ).addClass("has-error");
				$( "#icone_senha" ).addClass("fa-times-circle-o");
				
				alert("A senha deve ter entre 6 e 12 caracteres.");
				document.getElementById('senha').focus();
				return false;
			}
			
		}
		
		//Caracteres especiais
		if (!(
				str.indexOf('"') > 0 || str.indexOf('!') > 0 || str.indexOf('@') > 0 || str.indexOf('#') > 0 || str.indexOf('$') > 0 || 
				str.indexOf('%') > 0 || str.indexOf('¨') > 0 || str.indexOf('&') > 0 || str.indexOf('*') > 0 ||	str.indexOf('(') > 0 || 
				str.indexOf(')') > 0 || str.indexOf('-') > 0 ||	str.indexOf('_') > 0 || str.indexOf('=') > 0 || str.indexOf('+') > 0 || 
				str.indexOf('¹') > 0 || str.indexOf('²') > 0 || str.indexOf('³') > 0 || str.indexOf('£') > 0 || str.indexOf('¢') > 0 || 
				str.indexOf('¬') > 0 || str.indexOf(',') > 0 || str.indexOf('.') > 0 || str.indexOf(';') > 0 || str.indexOf('/') > 0 || 
				str.indexOf('<') > 0 || str.indexOf('>') > 0 || str.indexOf(':') > 0 || str.indexOf('?') > 0 || str.indexOf('~') > 0 || 
				str.indexOf('^') > 0 || str.indexOf(']') > 0 || str.indexOf('}') > 0 || str.indexOf('{') > 0 || str.indexOf('[') > 0 || 
				str.indexOf('º') > 0 || str.indexOf('ª') > 0 || str.indexOf('§') > 0 || str.indexOf('*') > 0 || str.indexOf('°') > 0
			)) {
			
			$( "#div_senha" ).removeClass("has-success");
			$( "#icone_senha" ).removeClass("fa-check");
			$( "#div_senha" ).addClass("has-error");
			$( "#icone_senha" ).addClass("fa-times-circle-o");
			
			alert("A senha deve ter pelo menos 1 caracter especial.");
			document.getElementById('senha').focus();
			return false;
		}
		
	}
	
}

function fcn_validaArquivo(formulario, arquivo) { 
   
	if(arquivo != ""){
		extensoes_permitidas = new Array(".jpg", ".png", ".jpeg"); 
		meuerro = ""; 
		 
		extensao = (arquivo.substring(arquivo.lastIndexOf("."))).toLowerCase(); 
		permitida = false; 
		for (var i = 0; i < extensoes_permitidas.length; i++) { 
			if (extensoes_permitidas[i] == extensao) { 
				permitida = true; 
				break; 
			} 
		} 
		
		if (permitida == false) { 
			alert("Verifique a extensão do arquivo anexado. \n\nAs extensões permitidas são: " + extensoes_permitidas.join()); 
			document.getElementById('urlImagem').value = "";
			return 1;
		}
		 
		return 0; 
	}
} 
</script>

@endsection