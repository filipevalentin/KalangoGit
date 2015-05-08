@extends('master-admin')

@section('modals')

<div class="modal fade" id="editarCurso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

@endsection

@section('maincontent')
	<section class="content-header">
	    <h1>Cursos</h1>
	    <ol class="breadcrumb">
		    <?php
		    	$aux2 = Session::get('bc');
		    ?>
	    	@foreach($aux2 as $b)
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
			                <th>#</th>
			                <th>Nome</th>
			                <th>Idioma</th>
			                <th>Nº de turmas</th>
			                <th>Status</th>
			                <th>Ação</th>
			            </tr>
			        </thead>
			 
			        <tfoot>
			            <tr>
			                <th>#</th>
			                <th>Nome</th>
			                <th>Idioma</th>
			                <th>Nº de turmas</th>
			                <th>Status</th>
			                <th>Ação</th>
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

	$('#editarCurso').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var dataid = button.data('id')
        var datanome = button.data('nome')
        var dataidioma = button.data('idioma') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Editar Curso ' + datanome)
        modal.find('#id').val(dataid)
        modal.find('#nome').val(datanome)
        modal.find('#idioma').val(dataidioma)
    })

	$('.item').first().addClass("active");

	$('#example').DataTable( {
	  "ajax":"/admin/listarCursos" ,
	    "columns": [
	        { data: 'id' },
	        { data: 'nome' },
	        { data: 'idioma2' },
	        { data: 'turmas2' },
	        { data: 'excluido' },
	        { data: 'action' }

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

</script>

<script> //Validações
	

	
</script>

@endsection