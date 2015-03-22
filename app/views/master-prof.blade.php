<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kalango v2.1</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="/css/dataTables.tableTools.css" type="text/css">
        <link href="/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <!-- Theme style -->
        <link href="/css/AdminLTE-Admin.css" rel="stylesheet" type="text/css" />
        <link href="/css/Custom-Admin.css" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="../img/favicon.ico">
        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">

    @yield('modals')

        <div id="barra" style="height: 50px; width: 100%; background: #089F01; position: fixed;"></div>
        <header class="header" style="max-width: 1300px; height: 50px; margin: auto; position=fixed;">
            <a href="/professor/home/" class="logo">
                Kalango
            </a>

            <nav class="navbar navbar-static-top" role="navigation" style="">

                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>{{Auth::user()->nome}}<i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu" style="margin-left: -165px;">
                                <!-- User image -->
                                <li class="user-header" style="background: #088F01;">
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

        <div class="wrapper row-offcanvas row-offcanvas-left" style="min-height: 681px; max-width: 1300px; margin: auto; padding-top: 50px;">
            
            <aside class="left-side sidebar-offcanvas" style="min-height: 2323px; top: 50px;">

                <section class="sidebar">

                    <div class="user-panel">
                        <h3 style="margin:3px;">Menu</h3>
                    </div>

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

            </aside>

            <aside class="right-side">

                @yield('maincontent')

                @if (Session::has('message'))
                    <div style="margin:21px;" class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <h5><strong>{{ Session::get('message') }}</strong></h5>
                    </div>
                @endif

            </aside>
        </div>
    </body>

        <!-- Scripts import -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/js/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="/js/raphael-min.js"></script>
        <script src="/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="/js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="/js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="/js/AdminLTE/dashboard.js" type="text/javascript"></script>

        <script src="http://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="/js/AdminLTE/demo.js" type="text/javascript"></script>
        <script>
            $('.carousel').carousel({
                interval: 0 //changes the speed
            })

        </script>
        @if (isset($mensagem2))
            <script>
                alert("{{$mensagem}}");
            </script>
        @endif

        @yield('scripts')
        
            <!-- Scripts import -->
    </body>
</html>