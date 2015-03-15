@extends('master')

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
                <div id="user-profile-2" class="user-profile"> 
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
                                            <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" style="height: 200px;" src="/{{Auth::user()->urlImagem}}">
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
                                                <div class="profile-info-name">Matrícula</div>

                                                <div class="profile-info-value">
                                                    <span>{{Aluno::find(Auth::user()->id)->matricula}}</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">E-mail</div>

                                                <div class="profile-info-value">
                                                    <span>{{Auth::user()->email}}</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Data de Nascimento</div>

                                                <div class="profile-info-value">
                                                    <span>{{Aluno::find(Auth::user()->id)->dataNascimento}}</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Dia Venc. Boleto</div>

                                                <div class="profile-info-value">
                                                    <span>{{Aluno::find(Auth::user()->id)->dataVencimentoBoleto}}</span>
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
                                                    <p>{{Aluno::find(Auth::user()->id)->sobreMim}}</p>
                                                </div>
                                            </div>

                                            <div class="info-box bg-green">
                                                <span class="info-box-icon" style="font-size: -webkit-xxx-large;float: left;padding: 10px 20px 10px 20px;height: 100%;"><i class="fa fa-thumbs-o-up"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Likes</span>
                                                    <span class="info-box-number" style="display: block;">41,410</span>
                                                    <div class="progress" style="height: 5px;background: rgb(0, 134, 73);">
                                                        <div class="progress-bar" style="width: 70%;background-color: white;">
                                                        </div>
                                                    </div>
                                                    <span class="progress-description">
                                                        70% Increase in 30 Days
                                                    </span>
                                                </div><!-- /.info-box-content -->
                                            </div>

                                        </div>
                                    </div>                                  <!-- Fim Texto do Usuário -->

                                    <div class="col-xs-12 col-sm-6">        <!-- Habilidades -->
                                        <div class="widget-box transparent">
                                            <div class="widget-header widget-header-small header-color-blue2">
                                                <h4 class="widget-title smaller">
                                                    <i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
                                                    Habilidades
                                                </h4>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main padding-16">
                                                    <div class="clearfix">
                                                        <div class="grid3 center">
                                                            <div style="display: inline; width: 90px; height: 90px;"><input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgcolor="#3c8dbc" data-readonly="true" readonly="readonly" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 18px; line-height: normal; font-family: Arial; text-align: center; color: rgb(60, 141, 188); padding: 0px; -webkit-appearance: none; background: none;"></div>
                                                            <div class="knob-label">Respostas Corretas</div>
                                                        </div>

                                                        <div class="grid3 center">
                                                            <div style="display: inline; width: 90px; height: 90px;"><input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgcolor="#3c8dbc" data-readonly="true" readonly="readonly" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 18px; line-height: normal; font-family: Arial; text-align: center; color: rgb(60, 141, 188); padding: 0px; -webkit-appearance: none; background: none;"></div>
                                                            <div class="knob-label">Respostas Erradas</div>
                                                        </div>

                                                        <div class="grid3 center">
                                                            <div style="display: inline; width: 90px; height: 90px;"><input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgcolor="#3c8dbc" data-readonly="true" readonly="readonly" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 18px; line-height: normal; font-family: Arial; text-align: center; color: rgb(60, 141, 188); padding: 0px; -webkit-appearance: none; background: none;"></div>
                                                            <div class="knob-label">Atividades Extras</div>
                                                        </div>
                                                    </div>

                                                    <div class="hr hr-16"></div>

                                                    <div class="profile-skills">
                                                        <div class="progress">
                                                            <div class="progress-bar" style="width:80%">
                                                                <span class="pull-left">HTML5 &amp; CSS3</span>
                                                                <span class="pull-right">80%</span>
                                                            </div>
                                                        </div>

                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-success" style="width:72%">
                                                                <span class="pull-left">Javascript &amp; jQuery</span>

                                                                <span class="pull-right">72%</span>
                                                            </div>
                                                        </div>

                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-purple" style="width:70%">
                                                                <span class="pull-left">PHP &amp; MySQL</span>

                                                                <span class="pull-right">70%</span>
                                                            </div>
                                                        </div>

                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-warning" style="width:50%">
                                                                <span class="pull-left">Wordpress</span>

                                                                <span class="pull-right">50%</span>
                                                            </div>
                                                        </div>

                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-danger" style="width:38%">
                                                                <span class="pull-left">Photoshop</span>

                                                                <span class="pull-right">38%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                  <!-- Fim Habilidades -->
                                </div>
                            </div><!-- /#home -->
                            
                            <div id="editar" class="tab-pane"> <!-- Aba "editar" -->
                                <div id="edit-basic" class="tab-pane active">
                                    {{ Form::open(array('url'=>'/aluno/atualizaCadastro', 'files'=>true)) }}
                                        <h4 class="header">Perfil</h4>
                                        <hr>
                                        <div class="box box-primary">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-3 center" style="text-align: center; padding: 30px 0 0 30px;">  <!-- FotoPerfil+Botões -->
                                                    <span class="profile-picture">
                                                        <img class="editable img-responsive" style="height: 200px;" alt="Alex's Avatar" id="avatar2" style="height: 200px;" {{'src="'.Aluno::find(Auth::user()->id)->urlImagem.'"'}}>
                                                    </span>

                                                    <div class="space space-4"></div><br>

                                                    <a href="" class="btn btn-sm btn-block btn-success">
                                                        {{ Form::file('urlImagem') }}             
                                                    </a>

                                                </div>

                                                <div class="col-sm-9 col-xs-12">
                                                    <input type="text" name="id" class="form-control" style="display:none;" value={{Auth::user()->id}}>
                                                    <div class="form-group has-success margin">
                                                        <label class="control-label" for="nome"><i class="fa fa-check"></i></label> <b>Nome</b>
                                                        <input type="text" name="nome" class="form-control" required="" value={{Auth::user()->nome}}>
                                                    </div>
                                                    <div class="form-group has-success margin">
                                                        <label class="control-label" for="sobrenome"><i class="fa fa-check"></i></label> <b>Sobrenome</b>
                                                        <input type="text" name="sobrenome" class="form-control" required="" value={{Auth::user()->sobrenome}}>
                                                    </div>
                                                    <div class="form-group has-warning margin">
                                                        <label class="control-label" for="email"><i class="fa fa-warning"></i></label> <b>E-mail</b>
                                                        <input type="text" name="email" class="form-control" required="" value={{Auth::user()->email}}>
                                                    </div>
                                                    <div class="form-group has-success margin">
                                                        <label class="control-label" for="dataNascimento"><i class="fa fa-check"></i></label> <b>Data de nascimento</b>
                                                        <input type="text" name="dataNascimento" class="form-control" required="" value={{Aluno::find(Auth::user()->id)->dataNascimento}}>
                                                    </div>
                                                    <div class="form-group has-success margin">
                                                        <label class="control-label" for="sobreMim"><i class="fa fa-check"></i></label> <b>Sobre mim</b>
                                                        <input type="text" class="form-control" name="sobreMim" style="height: 80px;" {{'value="'.Aluno::find(Auth::user()->id)->sobreMim.'"'}}>
                                                    </div>
                                                    <div class="margin" style="padding-bottom:10px;">
                                                        <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {{Form::close()}}
                                    
                                    <form action="atualizaSenha" method="POST" role="form">
                                        <input type="text" name="id" class="form-control" style="display:none;" value={{Auth::user()->id}}>
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