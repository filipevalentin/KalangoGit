@extends('master-admin')

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
                    <div id="div_nome" class="form-group">
                        <label class="control-label" for="nome"><i id="icone_nome" class="fa"></i> Nome</label>
                        <input type="text" autocomplete="off" id="nome" name="nome" onblur="fcn_recarregaCores();" maxlength="50" class="form-control somenteLetras nomeObrigatorio" >
                    </div>
                    <div id="div_sobrenome" class="form-group">
                        <label class="control-label" for="sobrenome"><i id="icone_sobrenome" class="fa"></i> Sobrenome</label>
                        <input type="text" autocomplete="off" id="sobrenome" name="sobrenome" onblur="fcn_recarregaCores();" maxlength="50" class="form-control somenteLetras sobrenomeObrigatorio">
                    </div>
                    <div id="div_dataNascimento" class="form-group">
                        <label class="control-label" for="dataNascimento"><i id="icone_dataNascimento" class="fa"></i> Data de Nascimento</label>
                        <input type="text" autocomplete="off" id="dataNascimento" name="dataNascimento" onblur="fcn_recarregaCores();fcn_validaDtNascimento(this);" class="form-control validaData dataNascimentoObrigatorio">
					</div>
					<div id="div_email" class="form-group">
                        <label class="control-label" for="email"><i id="icone_email" class="fa"></i> E-mail</label>
                        <input type="text" autocomplete="off" id="email" name="email" class="form-control emailObrigatorio" maxlength="50" onblur="fcn_recarregaCores();fcn_validaEmail(this);" >
                    </div>
                    <div id="div_diaVencimentoBoleto" class="form-group">
                        <label class="control-label" for="dataVencimentoBoleto"><i id="icone_diaVencimentoBoleto" class="fa"></i> Dia do Vencimento do Boleto</label>
						<select name="dataVencimentoBoleto" id="diaVencimentoBoleto" onblur="fcn_recarregaCores();" class="form-control diaVencimentoObrigatorio">
							<option value="" >Selecione</option>
							<option value="1" >1</option>
							<option value="2" >2</option>
							<option value="3" >3</option>
							<option value="4" >4</option>
							<option value="5" >5</option>
							<option value="6" >6</option>
							<option value="7" >7</option>
							<option value="8" >8</option>
							<option value="9" >9</option>
							<option value="10" >10</option>
							<option value="11" >11</option>
							<option value="12" >12</option>
							<option value="13" >13</option>
							<option value="14" >14</option>
							<option value="15" >15</option>
							<option value="16" >16</option>
							<option value="17" >17</option>
							<option value="18" >18</option>
							<option value="19" >19</option>
							<option value="20" >20</option>
							<option value="21" >21</option>
							<option value="22" >22</option>
							<option value="23" >23</option>
							<option value="24" >24</option>
							<option value="25" >25</option>
							<option value="26" >26</option>
							<option value="27" >27</option>
							<option value="28" >28</option>
						</select>
                    </div>
                    <div id="div_matricula" class="form-group">
                        <label class="control-label" for="matricula"><i id="icone_matricula" class="fa"></i> Matrícula</label>
                        <input type="text" autocomplete="off" id="matricula" name="matricula" onblur="fcn_recarregaCores();" maxlength="10" class="form-control somenteNumeros matriculaObrigatoria">
                    </div>
                    <div id="div_senha" class="form-group">
						<label class="control-label" for="senha"><i id="icone_senha" class="fa"></i> Senha</label>
						<input type="password" autocomplete="off" id="senha" name="password" maxlength="12" class="form-control senhaObrigatoria" onblur="fcn_recarregaCores();fcn_validaSenha(6, 12, this.value);" >
					</div>
					<div class="form-group">
                        <label for="urlImagem" class="control-label">Imagem Perfil</label>
                        <input type="file" id="urlImagem" name="urlImagem" onblur="fcn_validaArquivo(this.form, this.form.urlImagem.value)" class="form-control">
                    </div>
					<div class="form-group">
                        <label class="control-label" for="sobreMim">Sobre Mim</label>
                        <textarea id="sobreMim" name="sobreMim" maxlength="8000" onblur="fcn_recarregaCores();" class="form-control" rows="3"></textarea>
                    </div>
					<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary btn-salvar" value="Salvar" >
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
        <div class="col-md-12">
			<table id="example" class="display" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Nome</th>
		                <th>Sobrenome</th>
		                <th>Login</th>
		                <th>E-mail.</th>
		                <th>Matrícula</th>
		                <th>Data de Nascimento</th>
		                <th><button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarAluno" ><i class="fa fa-plus"></i></button></th>
		            </tr>
		        </thead>
		 
		        <tfoot>
		            <tr>
		                <th>Nome</th>
		                <th>Sobrenome</th>
		                <th>Login</th>
		                <th>E-mail.</th>
		                <th>Matrícula</th>
		                <th>Data de Nascimento</th>
		                <th><button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarAluno" ><i class="fa fa-plus"></i></button></th>
		            </tr>
		        </tfoot>
		    </table>
        </div>
    </div>

</section>

@endsection

@section('scripts')
<script src="/js/dataTables.tableTools.js" type="text/javascript"></script>

<script>
	
	$.get('/admin/listarAlunos', function(data) {
		console.log(data);
	});

	$('#example').DataTable( {
	  "ajax":"/admin/listarAlunos" ,
	    "columns": [
	        { data: 'nome' },
	        { data: 'sobrenome' },
	        { data: 'login' },
	        { data: 'email' },
	        { data: 'matricula' },
	        { data: 'dataNascimento' },
	        { data: 'action'}
	    ],

		"columnDefs": [ {
		      "targets": 6,
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
</script>
<script src="../js/jquery.maskedinput.min.js"></script>
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
	
	$(".validaData").mask("99/99/9999");
	
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
		
		if($(".dataNascimentoObrigatorio").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_dataNascimento" ).removeClass("has-success");
			$( "#icone_dataNascimento" ).removeClass("fa-check");
			$( "#div_dataNascimento" ).addClass("has-error");
			$( "#icone_dataNascimento" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_dataNascimento" ).removeClass("has-error");
			$( "#icone_dataNascimento" ).removeClass("fa-times-circle-o");
			$( "#div_dataNascimento" ).addClass("has-success");
			$( "#icone_dataNascimento" ).addClass("fa-check");
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
		
		if($(".diaVencimentoObrigatorio").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_diaVencimentoBoleto" ).removeClass("has-success");
			$( "#icone_diaVencimentoBoleto" ).removeClass("fa-check");
			$( "#div_diaVencimentoBoleto" ).addClass("has-error");
			$( "#icone_diaVencimentoBoleto" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_diaVencimentoBoleto" ).removeClass("has-error");
			$( "#icone_diaVencimentoBoleto" ).removeClass("fa-times-circle-o");
			$( "#div_diaVencimentoBoleto" ).addClass("has-success");
			$( "#icone_diaVencimentoBoleto" ).addClass("fa-check");
		}
		
		if($(".matriculaObrigatoria").val() == ""){
			obrigatorioPendente = 1;
			$( "#div_matricula" ).removeClass("has-success");
			$( "#icone_matricula" ).removeClass("fa-check");
			$( "#div_matricula" ).addClass("has-error");
			$( "#icone_matricula" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_matricula" ).removeClass("has-error");
			$( "#icone_matricula" ).removeClass("fa-times-circle-o");
			$( "#div_matricula" ).addClass("has-success");
			$( "#icone_matricula" ).addClass("fa-check");
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
		
		if($(".dataNascimentoObrigatorio").val() == ""){
			$( "#div_dataNascimento" ).removeClass("has-success");
			$( "#icone_dataNascimento" ).removeClass("fa-check");
			$( "#div_dataNascimento" ).addClass("has-error");
			$( "#icone_dataNascimento" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_dataNascimento" ).removeClass("has-error");
			$( "#icone_dataNascimento" ).removeClass("fa-times-circle-o");
			$( "#div_dataNascimento" ).addClass("has-success");
			$( "#icone_dataNascimento" ).addClass("fa-check");
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
		
		if($(".diaVencimentoObrigatorio").val() == ""){
			$( "#div_diaVencimentoBoleto" ).removeClass("has-success");
			$( "#icone_diaVencimentoBoleto" ).removeClass("fa-check");
			$( "#div_diaVencimentoBoleto" ).addClass("has-error");
			$( "#icone_diaVencimentoBoleto" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_diaVencimentoBoleto" ).removeClass("has-error");
			$( "#icone_diaVencimentoBoleto" ).removeClass("fa-times-circle-o");
			$( "#div_diaVencimentoBoleto" ).addClass("has-success");
			$( "#icone_diaVencimentoBoleto" ).addClass("fa-check");
		}
		
		if($(".matriculaObrigatoria").val() == ""){
			$( "#div_matricula" ).removeClass("has-success");
			$( "#icone_matricula" ).removeClass("fa-check");
			$( "#div_matricula" ).addClass("has-error");
			$( "#icone_matricula" ).addClass("fa-times-circle-o");
		}else{
			$( "#div_matricula" ).removeClass("has-error");
			$( "#icone_matricula" ).removeClass("fa-times-circle-o");
			$( "#div_matricula" ).addClass("has-success");
			$( "#icone_matricula" ).addClass("fa-check");
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
	
	function fcn_validaDtNascimento(element) 
	{
		if(element.value != "" && element.value != "__/__/____"){
			regex = /^((((0?[1-9]|1\d|2[0-8])\/(0?[1-9]|1[0-2]))|((29|30)\/(0?[13456789]|1[0-2]))|(31\/(0?[13578]|1[02])))\/((19|20)?\d\d))$|((29\/0?2\/)((19|20)?(0[48]|[2468][048]|[13579][26])|(20)?00))$/;
			
			resultado = regex.exec(element.value);
			if(!resultado)
			{
				$( "#div_dataNascimento" ).removeClass("has-success");
				$( "#icone_dataNascimento" ).removeClass("fa-check");
				$( "#div_dataNascimento" ).addClass("has-error");
				$( "#icone_dataNascimento" ).addClass("fa-times-circle-o");
				
				alert("Data de Nascimento inválida!");
				document.getElementById('dataNascimento').focus();
				return false;
			}
			
			var data = element.value;
			var objDate = new Date();
			objDate.setYear(data.split("/")[2]);
			objDate.setMonth(data.split("/")[1]  - 1);//- 1 pq em js é de 0 a 11 os meses
			objDate.setDate(data.split("/")[0]);

			if(objDate.getTime() > new Date().getTime()){
				
				$( "#div_dataNascimento" ).removeClass("has-success");
				$( "#icone_dataNascimento" ).removeClass("fa-check");
				$( "#div_dataNascimento" ).addClass("has-error");
				$( "#icone_dataNascimento" ).addClass("fa-times-circle-o");
				
				alert("A data de nascimento deve ser menor ou igual à data atual.");
				document.getElementById('dataNascimento').focus();
				return false;
			}
			
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