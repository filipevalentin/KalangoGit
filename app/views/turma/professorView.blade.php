@extends('master-admin')

@section('modals')


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
                                        <button>Enviar mensagem</button>
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
