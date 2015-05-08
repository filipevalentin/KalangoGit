@extends('master-admin')

@section('modals')

<div class="modal fade" id="criarProfessor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Novo Professor</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/criarProfessor" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="tipo" name="tipo" value="2">
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
                        <label for="formacaoAcademica" class="control-label">Formação Acadêmica</label>
                        <input type="text" id="formacaoAcademica" name="formacaoAcademica" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">E-mail</label>
                        <input type="text" id="email" name="email" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="codRegistro" class="control-label">Código de Registro (nome de usuário)</label>
                        <input type="text" id="codRegistro" name="codRegistro" class="form-control"></textarea>
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
    <h1>Gerenciar Professores</h1>
    <ol class="breadcrumb">
	    <?php
	    	$aux2 = Session::get('bc');
	    ?>
    	@foreach($aux as $b)
        	<li><a href="{{$b['link']}}" >{{$b['nome']}}</a></li>
		@endforeach
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
		                <th>Registro</th>
		                <th>Formação Acadêmica</th>
		                <th><button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarProfessor" ><i class="fa fa-plus"></i></button></th>
		            </tr>
		        </thead>
		 
		        <tfoot>
		            <tr>
		                <th>Nome</th>
		                <th>Sobrenome</th>
		                <th>Login</th>
		                <th>E-mail.</th>
		                <th>Registro</th>
		                <th>Formação Acadêmica</th>
		                <th><button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarProfessor" ><i class="fa fa-plus"></i></button></th>
		            </tr>
		        </tfoot>
		    </table>
        </div>
    </div>

</section>

@endsection

@section('scripts')
<script src="/plugins/datatables/dataTables.tableTools.js" type="text/javascript"></script>

<script>
	
	$.get('/listarProfessores', function(data) {
		console.log(data);
	});

	$('#example').DataTable( {
	  "ajax":"/listarProfessores" ,
	    "columns": [
	        { data: 'nome' },
	        { data: 'sobrenome' },
	        { data: 'username' },
	        { data: 'email' },
	        { data: 'codRegistro' },
	        { data: 'formacaoAcademica' },
	        { data: 'action'}
	    ],

	    "scrollX": true,

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

@endsection