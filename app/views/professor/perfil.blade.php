@extends('master-prof')

@section('maincontent')
    <section class="content-header">
        <h1>
            Bem vindo ao KalanGO!
            <small>Meus Cursos</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Meus Cursos</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content" id="profile">
        
        <div class="row">
            
            <div class="">
                <div id="user-profile-2" class="user-profile" style="margin: 0px 5px 0px 5px;"> 
                    <div class="tabbable">                  
                        <ul class="nav nav-tabs padding-18">    <!-- Abas - Menu -->
                            <li class="active">
                                <a data-toggle="tab" href="#home">
                                    <i class="green ace-icon fa fa-user bigger-120"></i>
                                    Profile
                                </a>
                            </li>

                            <li class="">
                                <a data-toggle="tab" href="#editar">
                                    <i class="orange ace-icon fa fa-pencil bigger-120"></i>
                                    Editar
                                </a>
                            </li>

                        </ul>                                   <!-- Fim Abas - Menu -->

                        <div class="tab-content no-border padding-24 profile">
                            <div id="home" class="tab-pane active">     <!-- Aba "home" -->
                                <div class="row">
                                    <div class="col-xs-12 col-sm-3 center" style="text-align: center">  <!-- FotoPerfil+Botões -->
                                        <span class="profile-picture">
                                            @if(Auth::user()->urlImagem != null)
                                                <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" style="max-height: 200px;" src="Auth::user()->urlImagem">
                                            @else
                                                 <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" style="max-height: 200px;" src="/images/default.png">
                                            @endif
                                        </span>

                                        <div class="space space-4"></div></br>

                                        <a data-toggle="tab" href="#editar" class="btn btn-sm btn-block btn-success">
                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                            <span class="bigger-110">Editar Perfil</span>
                                        </a>

                                    </div>                                                              <!--Fim FotoPerfil+Botões  -->

                                    <div class="col-xs-12 col-sm-9">
                                        <h4 class="blue">
                                            <span class="middle">{{Auth::user()->nome}} {{" "}} {{Auth::user()->sobrenome}}</span>
                                        </h4> <!-- Fim Nome -->

                                        <div class="profile-user-info">     <!-- Conjunto de Info do Usuário -->

                                            <div class="profile-info-row">  <!-- Username -->
                                                <div class="profile-info-name">Nome</div>

                                                <div class="profile-info-value">
                                                    <span>{{Auth::user()->nome}}</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Sobrenome</div>

                                                <div class="profile-info-value">
                                                    <span>{{Auth::user()->sobrenome}}</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Código Registro</div>

                                                <div class="profile-info-value">
                                                    <span>{{Auth::user()->professor->codRegistro}}</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">E-mail</div>

                                                <div class="profile-info-value">
                                                    <span>{{Auth::user()->email}}</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Formação Acadêmica</div>

                                                <div class="profile-info-value">
                                                    <span>{{Auth::user()->professor->formacaoAcademica}}</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Experiência Profissional</div>

                                                <div class="profile-info-value">
                                                    <span>{{$professor->ExperienciaProfissional}}</span>
                                                </div>
                                            </div>

                                        </div>                              <!-- Fim Conjunto de Info do Usuário -->

                                        <div class="hr hr-8 dotted"></div> </br>

                                    </div><!-- /.col -->
                                </div><!-- /.row -->

                                </br>

                                <div class="row">                                       
                                    <div class="col-xs-12 col-sm-6">        <!-- Texto do Usuário -->
                                        <div class="widget-box transparent">
                                            <div class="widget-header widget-header-small">
                                                <h4 class="widget-title smaller">
                                                    <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                    Sobre Mim
                                                </h4>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main">
                                                    <p>{{Auth::user()->professor->sobreMim}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                  <!-- Fim Texto do Usuário -->
                                               <!-- Fim Habilidades -->
                                </div>

                                <p>Colocar Coisas adicionais aqui para o Admin</p>

                            </div><!-- /#home -->
                            
                            <div id="editar" class="tab-pane"> <!-- Aba "editar" -->
                                <div id="edit-basic" class="tab-pane active">
                                    {{ Form::open(array('url'=>'/professor/atualizaCadastro', 'files'=>true)) }}
                                        <h4 class="header">Perfil</h4>
                                        <hr>
                                        <div class="box box-primary">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-3 center" style="text-align: center; padding: 30px 0 0 30px;">  <!-- FotoPerfil+Botões -->
                                                    <span class="profile-picture">
                                                        <img class="editable img-responsive" style="height: 200px;" alt="Alex's Avatar" id="avatar2" style="height: 200px;" src="/<?php (Auth::user()->urlImagem != null) Auth::user()->urlImagem : '/images/default.png' ?>">
                                                    </span>

                                                    <div class="space space-4"></div><br>

                                                    <a href="" class="btn btn-sm btn-block btn-success">
                                                        {{ Form::file('urlImagem') }}             
                                                    </a>

                                                </div>

                                                <div class="col-sm-9 col-xs-12">
                                                    <input type="text" name="id" class="form-control" style="display:none;" value="{{Auth::user()->id}}">
                                                    <div class="form-group has-success margin">
                                                        <label class="control-label" for="nome"><i class="fa fa-check"></i></label> <b>Nome</b>
                                                        <input type="text" name="nome" class="form-control" required="" value="{{Auth::user()->nome}}">
                                                    </div>
                                                    <div class="form-group has-success margin">
                                                        <label class="control-label" for="sobrenome"><i class="fa fa-check"></i></label> <b>Sobrenome</b>
                                                        <input type="text" name="sobrenome" class="form-control" required="" value="{{Auth::user()->sobrenome}}">
                                                    </div>
                                                    <div class="form-group has-warning margin">
                                                        <label class="control-label" for="email"><i class="fa fa-warning"></i></label> <b>E-mail</b>
                                                        <input type="text" name="email" class="form-control" required="" value="{{Auth::user()->email}}">
                                                    </div>
                                                    <div class="form-group has-success margin">
                                                        <label class="control-label" for="dataNascimento"><i class="fa fa-check"></i></label> <b>Formação Acadêmica</b>
                                                        <input type="text" name="formacaoAcademica" class="form-control" required="" value="{{Auth::user()->professor->formacaoAcademica}}">
                                                    </div>

                                                    <div class="form-group margin">
                                                        <label class="control-label" for="dataNascimento"><b> Experiência Profissional</b></label>
                                                        <input type="text" name="ExperienciaProfissional" id="formacaoAcademica" onblur="fcn_recarregaCores();" maxlength="8000" class="form-control" value="{{$professor->ExperienciaProfissional}}">
                                                    </div>

                                                    
                                                    <div class="form-group has-success margin">
                                                        <label class="control-label" for="dataNascimento"><i class="fa fa-check"></i></label> <b>Código Registro</b>
                                                        <input type="text" name="codRegistro" class="form-control" required="" value="{{Auth::user()->professor->codRegistro}}">
                                                    </div>
                                                    <div class="margin" style="padding-bottom:10px;">
                                                        <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {{Form::close()}}
                                    
                                    <form action="atualizaSenha" method="POST" role="form">
                                        <input type="text" name="id" class="form-control" style="display:none;" value={{Auth::user()->professor}}>
                                        <h4 class="header">Acesso</h4>
                                        <hr>
                                        <div class="box box-primary">
                                            <div class="row">
                                            <div class="col-sm-3">
                                                <div class="callout callout-info">
                                                    <h4>Segurança da Senha</h4>
                                                    <p>A senha deve conter:</p>
                                                    <p> Mínimo de 6 caracteres</p>
                                                    <p> Ao menos 1 número ou caractere especial</p>
                                                </div>
                                            </div>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <div class="form-group has-warning margin">
                                                        <label class="control-label" for="inputSuccess"><i class="fa fa-warning"></i></label> <b>Senha Atual</b>
                                                        <input type="password" class="form-control" name="senhaAtual" required="">
                                                    </div>
                                                    <div class="form-group has-warning margin">
                                                        <label class="control-label" for="inputSuccess"><i class="fa fa-warning"></i></label> <b>Nova Senha</b>
                                                        <input type="password" class="form-control" name="senha" required="">
                                                    </div>
                                                    <div class="form-group has-warning margin">
                                                        <label class="control-label" for="inputSuccess"><i class="fa fa-warning"></i></label> <b>Confirmar Nova Senha</b>
                                                        <input type="password" class="form-control" name="novaSenha" required="">
                                                    </div>
                                                    <div class="margin" style="padding-bottom:10px;">
                                                        <button type="submit" class="btn btn-primary btn-block">Alterar Senha</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </form>
                                </div>  
                            </div> <!-- /#editar -->

                        </div>
                    </div>
                </div>
            </div>
                  
        </div>

    </section><!-- /.content -->
@endsection