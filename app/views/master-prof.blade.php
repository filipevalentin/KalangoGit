<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>KalanGO!</title>

        <!-- Arquivos Básicos -->
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
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
        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

     <body class="skin-green sidebar-collapse">
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
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <!-- Menu toggle button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 4 messages</li>
                                    <li>
                                        <!-- inner menu: contains the messages -->
                                        <ul class="menu">
                                            <li><!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <!-- User Image -->
                                                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                                                    </div>
                                                    <!-- Message title and timestamp -->
                                                    <h4>                            
                                                        Support Team
                                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <!-- The message -->
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li><!-- end message -->                      
                                        </ul><!-- /.menu -->
                                    </li>
                                    <li class="footer"><a href="#">See All Messages</a></li>
                                </ul>
                            </li><!-- /.messages-menu -->

                            <!-- Notifications Menu -->
                            <li class="dropdown notifications-menu">
                                <!-- Menu toggle button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">10</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>
                                    <li>
                                        <!-- Inner Menu: contains the notifications -->
                                        <ul class="menu">
                                            <li><!-- start notification -->
                                                <a href="#">
                                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                </a>
                                            </li><!-- end notification -->                      
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
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
                                        <img src="/img/avatar3.png" class="img-circle" alt="User Image" />
                                        <p>
                                            {{Auth::user()->nome}} {{" "}} {{Auth::user()->sobrenome}}
                                            <small>Membro desde Nov/2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Cursos</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Desempenho</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="/professor/perfil">Perfil</a>
                                        </div>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="/professor/perfil" class="btn btn-default btn-flat">Perfil</a>
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
                        <li>
                            <a href="/professor/home/">
                                <i class="fa fa-dashboard"></i> <span>Home</span>
                            </a>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-graduation-cap"></i>
                                <span>Gerenciar Turmas</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                @foreach(Idioma::all() as $idioma)
                                <li><a href="/professor/home/{{$idioma->nome}}" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> {{$idioma->nome}}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <span>Buscar</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#/professorBuscarAlunos" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Aluno</a></li>
                                <li><a href="#/professorBuscarProfessores" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Professor</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="/professor/atividadesExtras">
                                <i class="fa fa-star"></i> <span>Atividades Extras</span>
                                <small class="badge pull-right bg-red">3</small>
                            </a>
                        </li>

                        <li>
                            <a href="/professor/mensagens/entrada">
                                <i class="fa fa-envelope"></i> <span>Mensagens</span>
                            </a>
                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                @yield('content-header')

                <!-- Main content -->
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
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
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
        <script src="http://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="/dist/js/app.min.js" type="text/javascript"></script>

        @if (isset($mensagem))
            <script>
                alert("{{$mensagem}}");
            </script>
        @endif

        <script>
            $('.carousel').carousel({
            interval: 5000 //changes the speed
            })
        </script>
        <script>
            $('.carousel').carousel({
                interval: 0 //changes the speed
            })

        </script>
        @if (isset($mensagem))
            <script>
                alert("{{$mensagem}}");
            </script>
        @endif

        @yield('scripts')
        
            <!-- Scripts import -->
    </body>
</html>