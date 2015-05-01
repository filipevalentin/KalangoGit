@extends('master-prof')

@section('modals')

<!--  ### MODALS ### -->

@endsection


@section('maincontent')

<section class="content-header">
    <h1>Gerenciar Cursos</h1>
    <ol class="breadcrumb">
        <li><a href="/professor/home" ><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Gerenciar Cursos</li>
    </ol>
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Cursos</h3>
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
                                                <div class="curso" style="cursor:pointer;" id="{{$cursosArray[$j]['id']}}">
                                                    <h4 style="font-size: 20px;">{{$cursos[$j]['nome']}}</h4>
                                                    <p style="margin:0px;">{{$cursos[$j]->numTurmas}} Turmas em andamento</p>
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
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="box-group" id="accordion">
                            <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->

                        @foreach($curso->modulos as $modulo)    
                            <div class="panel box box-primary">
                                <div class="box-header">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#Modulo{{$modulo->id}}">
                                            {{$modulo->nome}} <small style="padding-left:5px;">({{$modulo->turmas->count()}} Turmas)</small>
                                        </a>
                                    </h4>
                                    <div class="box-tools pull-right">
                                        <a href="/professor/modulo/{{$modulo->id}}"><button rel="tooltip" data-placement="left" title="Ver Aulas do Módulo" class="btn btn-primary btn-sm" ><i class="fa fa-book"></i></button></a>
                                    </div>
                                </div>
                                <div id="Modulo{{$modulo->id}}" class="panel-collapse collapse">
                                    <div class="row">

                                    @foreach($modulo->turmas()->where('status','=', 1)->get() as $turma)
                                        <div class="col-md-3">
                                            <div class="box-body">
                                                <div class="small-box bg-green">
                                                    <div class="inner">
                                                        <a href="/professor/modulo/{{$modulo->id}}/{{$turma->id}}" style="color: inherit;" class="turma" id="{{$turma->id}}">
                                                            <h4 style="font-size: 20px;">{{$turma->nome}}</h4>
                                                            <p>{{TurmasAluno::where('idTurma', '=', $turma->id)->count()." Alunos"}}</p>
                                                            <p style="margin:0px;">{{User::find($turma->professor->id)->nome . " " . User::find($turma->professor->id)->sobrenome }}</p>
                                                        </a>
                                                    </div>

                                                    <a href="/professor/turma/{{$turma->id}}" class="small-box-footer">Ver Alunos <i class="fa fa-arrow-circle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

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
            $('#editarmodulo').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var dataid = button.data('id')
                var datanome = button.data('nome')
                var datadescricao = button.data('descricao') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('Editar Módulo ' + dataid)
                modal.find('#id').val(dataid)
                modal.find('#nome').val(datanome)
                modal.find('#descricao').val(datadescricao)
                })

            $('#editarturma').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var dataid = button.data('id')
                var datanome = button.data('nome')
                var dataidprofessor = button.data('idprofessor') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('Editar Turma ' + datanome)
                modal.find('#id').val(dataid)
                modal.find('#nome').val(datanome)
                modal.find('#idprofessor').val(dataidprofessor)
                })

            $('#editarcurso').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var dataid = button.data('id')
                var datanome = button.data('nome')
                var datadescricao = button.data('descricao')
                var dataidioma = button.data('idioma') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('Editar Curso ' + datanome)
                modal.find('#id').val(dataid)
                modal.find('#nome').val(datanome)
                modal.find('#descricao').val(datadescricao)
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
    @endsection

@endsection
