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
                <form method="POST" action="/matricularAluno">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="idTurma" name="idTurma" value="{{$turma->id}}">
                    </div>
                    <div class="form-group">
                        <label for="Aluno" class="control-label">Selecione o Aluno:</label>
                        <select name="idAluno" id="idAluno" class="form-control">
                        @foreach(Aluno::all() as $aluno)
                          <option value="{{$aluno->id}}">{{$aluno->matricula}} - {{User::find($aluno->id)->nome}} {{User::find($aluno->id)->sobrenome}}</option>
                        @endforeach
                        </select>
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

<?php $cont = 1; ?>


@section('maincontent')

<section class="content-header">
    <h1>Gerenciar Turmas</h1>
    <ol class="breadcrumb">
        <?php
            $aux = Session::get('bc');
        ?>
        @foreach($aux as $b)
            <li><a href="{{$b['link']}}" >{{$b['nome']}}</a></li>
        @endforeach
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
                                        <a href="/perfilAluno/{{$aluno->id}}"><button rel="tooltip" data-placement="left" title="Ver Perfil do Aluno" class="btn btn-success btn-xs"><i class="fa fa-external-link"></i></button></a>
                                        <a href="/desmatricularAluno/{{$aluno->id}}/{{$turma->id}}"><button rel="tooltip" data-placement="left" title="Desmatricular Aluno" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></a>
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
    @endsection

@endsection
