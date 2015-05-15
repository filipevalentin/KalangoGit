<?php
    $vint_valorMaximo = 9;  // tem que vir do banco -> numero de cursos + cards fixos
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>KalanGO!</title>
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
        <!-- Theme style -->
        <link href="/css/AdminLTE.css" rel="stylesheet" type="text/css" />
		<link href="/css/Custom.css" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="../img/favicon.ico">
        @yield('css')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">

     @yield('modals')

        <!-- NAVBAR -->

        <div class="navbar navbar-inverse navbar-fixed-top">
          
            <div class="navbar-header"><!-- Botão + Logo link para home page -->

                <div class="logo1">
                    <a href="/" class="logo">
                        <!-- Logo Kalango -->
                        KalanGO!
                        <img style="width:80px;" src="/img/KalangoBranco.png">
                    </a>
                </div> <!-- Logo link para home page -->
                
                <div class="usermenu" style="height: 1px;">
                    <!-- <div class="navbar-right" id="bs-example-navbar-collapse-1"> -->
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="glyphicon glyphicon-user"></i>
                                    <span>{{Auth::user()->nome}}<i class="caret"></i></span>
                                </a>
                                <ul class="dropdown-menu" style="margin-left: -165px;">
                                    <!-- User image -->
                                    <li class="user-header" style="background: #088F01;">
                                        @if(Auth::user()->urlImagem != null)
                                            <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" style="max-height: 200px;" src="Auth::user()->urlImagem">
                                        @else
                                             <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" style="max-height: 200px;" src="/images/default.png">
                                        @endif
                                        <p>
                                            {{Auth::user()->nome}} {{" "}} {{Auth::user()->sobrenome}}
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
                                            <a href="/aluno/perfil">Perfil</a>
                                        </div>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="/aluno/perfil" class="btn btn-default btn-flat">Perfil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/logout" class="btn btn-default btn-flat">Sair</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    <!-- </div> -->
                </div><!-- Lado Direito da Navbar /.nav-collapse -->

            </div> <!-- Lado esquerdo da Navbar -->

        </div>

        <!-- Sidebar esquerda - DESATIVADA -->

        <div class="wrapper row-offcanvas row-offcanvas-left" style="padding-top: 55px">

            <!-- Right side column. Contains the navbar and content of the page -->

            @yield('carrossel')
            <!-- Carrossel Com notícias -->

            <!-- Conteúdo principal -->
            <aside class="right-side" style="margin-left:0px; padding-bottom:52px;">
                
                @yield('maincontent')

            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <footer class="footer">
          <div class="" style="padding: 0% 10% 0% 10%;">
            <p class="center" style="color: white; margin:display: block;-webkit-margin-before: 1em;-webkit-margin-after: 1em;-webkit-margin-start: 0px; -webkit-margin-end: 0px;">
                KalanGO!
            </p>
          </div>
        </footer>

        <!-- add new calendar event modal -->

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
            <script src="/js/plugins/datepicker/locales/bootstrap-datepicker.pt-BR.js" type="text/javascript"></script>
            <!-- Bootstrap WYSIHTML5 -->
            <script src="/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
            <!-- iCheck -->
            <script src="/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

            <!-- AdminLTE App -->
            <script src="/js/AdminLTE/app.js" type="text/javascript"></script>

            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="/js/AdminLTE/dashboard.js" type="text/javascript"></script>

            <!-- AdminLTE for demo purposes -->
            <script src="/js/AdminLTE/demo.js" type="text/javascript"></script>

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
                valor = Math.floor((Math.random() * 9)+9);  // Gera um número aleatório entre 9 e 17
                var cores= ["small-box bg-aqua card","small-box bg-red card","small-box bg-green card","small-box bg-olive card","small-box bg-orange card","small-box bg-purple card","small-box bg-light-blue card","small-box bg-fuchsia card","small-box bg-teal card"];
                var valorMaximo = <?=$vint_valorMaximo?>; //valorMaximo deve ser calculado via banco pois a quantidade de cursos torna o numero dinamico
            </script>

            <!-- Script para colorir os cards dinamicamente -->

            @yield('scripts')
        <!-- Scripts import -->
    </body>
</html>