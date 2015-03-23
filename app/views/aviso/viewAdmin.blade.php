@extends('master-admin')

@section('modals')

<div class="modal fade" id="criarAviso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Novo Aviso</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/criarAviso" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="tipo" name="tipo" value="1">
                    </div>
                    <div id="div_nome" class="form-group">
                        <label class="control-label" for="titulo"><i id="icone_nome" class="fa"></i> Titulo</label>
                        <input type="text" autocomplete="off" id="titulo" name="titulo" class="form-control" >
                    </div>
                    <div id="div_sobrenome" class="form-group">
                        <label class="control-label" for="descricao"><i id="icone_descricao" class="fa"></i> Descrição</label>
                        <input type="text" autocomplete="off" id="descricao" name="descricao" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="urlImagem" class="control-label">Imagem</label>
                        <input type="file" id="urlImagem" name="urlImagem" class="form-control">
                    </div>
                    <div id="dataExpiracao" class="form-group">
                        <label class="control-label" for="dataExpiracao"><i id="icone_dataExpiracao" class="fa"></i> Data de Expiração</label>
                        <input type="text" autocomplete="off" id="dataExpiracao" name="dataExpiracao" class="form-control">
					</div>
					<div id="idCurso" class="form-group">
                        <label class="control-label" for="idCurso"><i id="icone_idCurso" class="fa"></i> Enviar para:</label>
                        <select type="text" autocomplete="off" id="idCurso" name="idCurso" class="form-control">
                        	<option value="">Todos os alunos</option>
							@foreach(Curso::all() as $curso)
                        		<option value="{{$curso->id}}">Curso: {{$curso->nome}}-{{$curso->idioma->nome}}</option>
                        	@endforeach
                        </select>
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

<div class="modal fade" id="editarAviso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Editar Aviso</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/atualizarAviso" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id" value="">
                    </div>
                    <div id="div_nome" class="form-group">
                        <label class="control-label" for="titulo"><i id="icone_nome" class="fa"></i> Titulo</label>
                        <input type="text" autocomplete="off" id="titulo" name="titulo" class="form-control" >
                    </div>
                    <div id="div_sobrenome" class="form-group">
                        <label class="control-label" for="descricao"><i id="icone_descricao" class="fa"></i> Descrição</label>
                        <input type="text" autocomplete="off" id="descricao" name="descricao" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="urlImagem" class="control-label">Imagem</label>
                        <input type="file" id="urlImagem" name="urlImagem" class="form-control">
                    </div>
                    <div id="dataExpiracao" class="form-group">
                        <label class="control-label" for="dataExpiracao"><i id="icone_dataExpiracao" class="fa"></i> Data de Expiração</label>
                        <input type="text" autocomplete="off" id="dataExpiracao" name="dataExpiracao" class="form-control">
					</div>
					<div id="idCurso" class="form-group">
                        <label class="control-label" for="idCurso"><i id="icone_idCurso" class="fa"></i> Curso</label>
                        <select type="text" autocomplete="off" id="idCurso" name="idCurso" class="form-control">
							<option value="">Todos os alunos</option>
							@foreach(Curso::all() as $curso)
                        		<option value="{{$curso->id}}">Curso: {{$curso->nome}}-{{$curso->idioma->nome}}</option>
                        	@endforeach
                        </select>
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
	    <h1>Avisos</h1>
	    <ol class="breadcrumb">
	        <li><a href="#" ><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Avisos</li>
	    </ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid">
	                <div class="box-header">
	                    <h3 class="box-title">Filtre os avisos por Curso</h3>
	                </div><!-- /.box-header -->
	                <div class="box-body">
	                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	                        <div class="carousel-inner">

	                        @for($i=0; $i <= (int)($categorias->count()/5); $i++)

	                            <div class="item">

	                            @for($j=4*$i; $j<4*$i+4 && $j<($categorias->count()); $j++)

	                                <div class="col-sm-3">
	                                    <div class="box-body">
	                                        <div class="small-box bg-blue">
	                                            <div class="inner">
	                                                <div class="curso" style="cursor:pointer;" id="{{$categorias[$j]->id}}">
	                                                    <h4 style="font-size: 20px;">{{$categorias[$j]->nome}} - {{$categorias[$j]->idioma->nome}}</h4>
	                                                    <p style="margin:0px;">  </p>
	                                                </div>
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
	        </div>

	        <div class="col-md-12">
				<table id="example" class="display" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th>#</th>
			                <th>Titulo</th>
			                <th>Data Expiração</th>
			                <th>Enviado para</th>
			                <th>Criado Por</th>
			                <th><button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarAviso" ><i class="fa fa-plus"></i></button></th>
			            </tr>
			        </thead>
			 
			        <tfoot>
			            <tr>
			                <th>#</th>
			                <th>Titulo</th>
			                <th>Data Expiração</th>
			                 <th>Enviado para</th>
			                <th>Criado Por</th>
			                <th><button class="btn btn-primary btn-md" style="border-radius: 50px;" data-toggle="modal" data-target="#criarAviso" ><i class="fa fa-plus"></i></button></th>
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

	$('.curso').on('click', function (event){
		var table = $('#example').DataTable();
		table.ajax.url( '/admin/listarAvisos/'+$(this).attr('id') ).load();
	});

	$('#editarAviso').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var dataid = button.data('id');
        var datatitulo = button.data('titulo')
        var datadescricao = button.data('descricao')
        var dataurlimagem = button.data('urlimagem')
        var datadataexpiracao = button.data('dataexpiracao')
        var dataidcurso = button.data('idcurso')


        var modal = $(this)
        modal.find('#id').val(dataid)
        modal.find('#titulo').val(datatitulo)
        modal.find('#descricao').val(datadescricao)
        modal.find('#urlImagem').val(dataurlimagem)
        modal.find('#dataExpiracao').val(datadataexpiracao)
        modal.find('#idCurso').val(dataidcurso)

    });

	$('.item').first().addClass("active");

	$('#example').DataTable( {
	  "ajax":"/admin/listarAvisos" ,
	    "columns": [
	        { data: 'id' },
	        { data: 'titulo' },
	        { data: 'dataExpiracao' },
	        { data: 'enviadoPara'},
	        { data: 'criadoPor' },
	        { data: 'action' }
	    ],

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

</script>
	
@endsection