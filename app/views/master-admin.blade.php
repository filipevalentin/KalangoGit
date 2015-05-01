<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>KalanGO!</title>

        <!-- Arquivos Básicos -->
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="theme-color" content="#008d4c" style="color: #008d4c;">
        <!-- Bootstrap 3.3.2 -->
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <link href="/dist/css/skins/skin-green.min.css" rel="stylesheet" type="text/css" />
        <!-- Arquivos Básicos -->

        <!-- bootstrap wysihtml5 - text editor -->
        <link href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <link href="/css/Custom-Admin.css" rel="stylesheet" type="text/css" />
        <!-- Data Tables -->
        <link rel="stylesheet" href="/css/dataTables.tableTools.css" type="text/css">
        <link href="/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" href="../img/favicon.ico">
        @yield('css')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

     <body class="skin-green">
     @yield('modals')
        <div class="wrapper">
            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <div class="logo1">
                    <a href="/" class="logo">
                        <!-- Logo Kalango -->
                        KalanGO!
                        <img style="width:80px;" src="/img/KalangoBranco.png">
                    </a>
                </div> <!-- Logo link para home page -->

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <!-- Notifications Menu -->
                            <?php $avisos = Aviso::where('dataExpiracao','>', date('Y-m-d'))->orderBy('dataExpiracao')->get(); ?>
                            <li class="dropdown notifications-menu">
                                <!-- Menu toggle button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">{{$avisos->count()}}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">Você tem {{$avisos->count()}} avisos</li>
                                    <li>
                                        <!-- Inner Menu: contains the notifications -->
                                        <ul class="menu">
                                        @foreach($avisos as $aviso)
                                            <li><!-- start notification -->
                                                <a href="/admin/aviso/{{$aviso->id}}">
                                                    <i class="fa fa-check"></i>{{$aviso->titulo}}
                                                </a>
                                            </li><!-- end notification -->                      
                                        @endforeach
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="/admin/avisos">Ver todos</a></li>
                                </ul>
                            </li>
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="glyphicon glyphicon-user"></i>
                                    <span>{{Auth::user()->nome}}<i class="caret"></i></span>
                                </a>
                                <ul class="dropdown-menu" style="margin-left: -165px;">
                                    <!-- User image -->
                                    <li class="user-header">
                                        @if(Auth::user()->urlImagem != null)
                                        <img class="editable img-circle" alt="Alex's Avatar" id="avatar2" style="max-height: 200px;" src="/{{Auth::user()->urlImagem}}">
                                        @else
                                             <img class="editable img-circle" alt="Alex's Avatar" id="avatar2" style="max-height: 200px;" src="/images/default.png">
                                        @endif
                                        <p>
                                            {{Auth::user()->nome}} {{" "}} {{Auth::user()->sobrenome}}
                                            <small>Membro desde Nov/2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <!--<li class="user-body">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Cursos</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Desempenho</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="/admin/perfil">Perfil</a>
                                        </div>
                                    </li>-->
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="/admin/perfil" class="btn btn-default btn-flat">Perfil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/logout" class="btn btn-default btn-flat">Sair</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard de Cursos</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                            @foreach(Idioma::all() as $idioma)
                                <li><a href="/admin/home/{{$idioma->nome}}" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> {{$idioma->nome}}</a></li>
                            @endforeach 
                            </ul>
                        </li>

                        <li>
                            <a href="/admin/idiomas">
                                <i class="fa fa-quote-right"></i> <span>Idiomas</span>
                            </a>
                        </li>

                        <li>
                            <a href="/admin/cursos">
                                <i class="fa fa-graduation-cap"></i> <span>Cursos</span>
                            </a>
                        </li>

                        <li>
                            <a href="/admin/modulos">
                                <i class="fa fa-sitemap"></i> <span>Módulos</span>
                            </a>
                        </li>

                        <li>
                            <a href="/admin/aulas">
                                <i class="fa fa-book"></i> <span>Aulas</span>
                            </a>
                        </li>

                        <li>
                            <a href="/admin/atividades">
                                <i class="fa fa-pencil-square-o"></i> <span>Atividades</span>
                            </a>
                        </li>

                        <li>
                            <a href="/admin/categorias">
                                <i class="fa fa-bookmark-o"></i> <span>Categorias de Ativ. Extras</span>
                            </a>
                        </li>

                        <li>
                            <a href="/admin/atividadesExtras">
                                <i class="fa fa-star"></i> <span>Atividades Extras</span>
                            </a>
                        </li>

                        <li>
                            <a href="/admin/questoes">
                                <i class="fa fa-question-circle"></i> <span>Questões</span>
                            </a>
                        </li>

                        <li>
                            <a href="/admin/topicos">
                                <i class="fa fa-th"></i> <span>Tópicos de Questões</span>
                            </a>
                        </li>

                        <li>
                            <a href="/admin/turmas">
                                <i class="fa fa-group"></i> <span>Gerenciar Turmas</span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <span>Gerenciar Usuários</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/alunos" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Aluno</a></li>
                                <li><a href="/admin/professores" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Professor</a></li>
                                <li><a href="/admin/administradores" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Administrador</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="/admin/empresas">
                                <i class="fa fa-building-o"></i> <span>Empresas</span>
                            </a>
                        </li>

                        <li>
                            <a href="/admin/propagandas">
                                <i class="fa fa-bullhorn"></i> <span>Propagandas</span>
                            </a>
                        </li>

                        <li>
                            <a href="/admin/avisos">
                                <i class="fa fa-bell-o"></i> <span>Avisos</span>
                            </a>
                        </li>
                        


                    </ul><!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                @yield('content-header')

                @yield('maincontent')
            </div><!-- /.content-wrapper -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="center">
                    Copyright &copy;
                    <img style="height:25px;" src="/img/KalangoVerde.png">
                </div>
            </footer>

        </div><!-- ./wrapper -->

        <!-- IMPORTS JS -->

        <!-- jQuery 2.1.3 -->
        <script src="/plugins/jQuery/jQuery-2.1.3.min.js"></script>
        <!-- jQuery UI 1.11.2 -->
        <script src="/js/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
          $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
        <!-- jQuery Knob Chart -->
        <script src="/plugins/knob/jquery.knob.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- Data Tables -->
        <script src="{{ URL::asset('/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="/dist/js/app.min.js" type="text/javascript"></script>

         @if (Session::has('warning'))
            <div style="position: absolute; width: 100%; top:55px; border-radius: 5px 0px 0px 5px; z-index: 99999">
                <div class="alert alert-danger alert-dismissable" style="width: 80%; max-width:500px; margin: auto; box-shadow: rgba(0, 0, 0, 0.55) 0px 14px 27px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Opps...</h4>
                    {{Session::get('warning')}}
                </div>
            </div>
        @endif
        @if (Session::has('info'))
            <div style="position: absolute; width: 100%; top:55px; border-radius: 5px 0px 0px 5px; z-index: 99999">
                <div class="alert alert-success alert-dismissable" style="width: 80%; max-width:500px; margin: auto; box-shadow: rgba(0, 0, 0, 0.55) 0px 14px 27px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-success"></i> Mensagem</h4>
                    {{Session::get('info')}}
                </div>
            </div>
        @endif

        <script>
            $('.carousel').carousel({
                interval: 0 //changes the speed
            })

        </script>

        @yield('scripts')
        
            <!-- Scripts import -->
    </body>
</html>