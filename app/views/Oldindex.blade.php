<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kalango v2.1</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
		<link href="css/Custom.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">

        <!-- NAVBAR -->

        <div class="navbar navbar-inverse navbar-fixed-top">
          
            <div class="navbar-header"><!-- Botão + Logo link para home page -->

                <div class="logo1">
                    <a href="" class="logo">
                        <!-- Logo Kalango -->
                        Kalango V2.1
                        <img style="width:80px;" src="img/KalangoBranco.png">
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
                                    <li class="user-header bg-light-blue">
                                        <img src="img/avatar3.png" class="img-circle" alt="User Image" />
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
                                            <a href="perfil">Perfil</a>
                                        </div>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="perfil" class="btn btn-default btn-flat">Perfil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="logout" class="btn btn-default btn-flat">Sair</a>
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
            <!-- Left side column. contains the logo and sidebar -->
            
           <!--  <aside class="left-side sidebar-offcanvas">

                <section class="sidebar">

                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Jane</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>

                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.html">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="pages/widgets.html">
                                <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Charts</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i> Morris</a></li>
                                <li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i> Flot</a></li>
                                <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>UI Elements</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/UI/general.html"><i class="fa fa-angle-double-right"></i> General</a></li>
                                <li><a href="pages/UI/icons.html"><i class="fa fa-angle-double-right"></i> Icons</a></li>
                                <li><a href="pages/UI/buttons.html"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
                                <li><a href="pages/UI/sliders.html"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
                                <li><a href="pages/UI/timeline.html"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Forms</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/forms/general.html"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
                                <li><a href="pages/forms/advanced.html"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
                                <li><a href="pages/forms/editors.html"><i class="fa fa-angle-double-right"></i> Editors</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Tables</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
                                <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Data tables</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="pages/calendar.html">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="pages/mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Examples</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                                <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                                <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                                <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                                <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </aside> -->

            <!-- Right side column. Contains the navbar and content of the page -->


            <!-- Carrossel Com notícias -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">Novidades</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="http://placehold.it/1980x450/39CCCC/ffffff&amp;text=KalanGO!" alt="First slide">
                                        <div class="carousel-caption">
                                            <!-- Legenda do banner -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="http://placehold.it/1980x450/3c8dbc/ffffff&amp;text=KalanGO!" alt="Second slide">
                                        <div class="carousel-caption">
                                            <!-- Legenda do banner -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="http://placehold.it/1980x450/f39c12/ffffff&amp;text=KalanGO!" alt="Third slide">
                                        <div class="carousel-caption">
                                           <!-- Legenda do banner -->
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>

            <!-- Conteúdo principal -->
            <aside class="right-side" style="margin-left:0px;">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Bem vindo ao KalanGO!
                        <!-- <small>Meus Cursos</small> -->
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Meus Cursos</li>
                    </ol>
                </section>

                <!-- Main content -->

                <section class="content">
                    <h2 class="page-header">Meus Cursos</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-primary">
                                <div class="box-body">
                                    <div class="row">
                                        <a href="#">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="small-box bg-aqua card" style=";">
                                                    <div class="inner">
                                                        <h3>Inglês - Teens</br>Módulo 1</h3>
                                                        <p style="height:40px;">Dê os primeiros passos para o aprender a língua inglesa</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="ion ion-paper-airplane"></i>
                                                    </div>
                                                    <a href="" class="small-box-footer">
                                                        Voltar para última lição <i class="fa fa-arrow-circle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="small-box bg-aqua card" style=";">
                                                    <div class="inner">
                                                        <h3>Nível Básico</br> 102</h3>
                                                        <p style="height:40px;">Pratique os conteúdos do módulo anterior e aprenda novas estruturas</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="ion ion-paper-airplane"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">
                                                        Voltar para última lição <i class="fa fa-arrow-circle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </a>             

                                        <a href="#">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="small-box bg-aqua card" style=";">
                                                    <div class="inner">
                                                        <h3>Nível Básico</br> 103</h3>
                                                        <p style="height:40px;">Pratique a conversação através de diálogos simples do dia a dia</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="ion ion-paper-airplane"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">
                                                        Voltar para última lição <i class="fa fa-arrow-circle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </a>              

                                        <a href="#">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="small-box bg-aqua card" style=";">
                                                    <div class="inner">
                                                        <h3>Nível Básico</br> 104</h3>
                                                        <p style="height:40px;">Aprenda a fazer afirmações, negações e perguntas</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="ion ion-paper-airplane"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">
                                                        Voltar para última lição <i class="fa fa-arrow-circle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </a>              

                                        <a href="#">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="small-box bg-aqua card" style=";">
                                                    <div class="inner">
                                                        <h3>Nível Básico</br> 105</h3>
                                                        <p style="height:40px;">Aprenda a fazer afirmações, negações e perguntas</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="ion ion-paper-airplane"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">
                                                        Voltar para última lição <i class="fa fa-arrow-circle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </a>              

                                        <a href="#">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="small-box bg-aqua card" style=";">
                                                    <div class="inner">
                                                        <h3>Nível Básico</br> 106</h3>
                                                        <p style="height:40px;">Aprenda a fazer afirmações, negações e perguntas</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="ion ion-paper-airplane"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">
                                                        Voltar para última lição <i class="fa fa-arrow-circle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </a>
                                    </div> <!-- .row -->
                                </div> <!-- /.box-body -->
                            </div> <!-- /.box-primary -->
                        </div> <!-- col-md-12 -->
                    </div> <!-- /.row -->

                    <h2 class="page-header">Atividades Extras</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-primary">
                                <div class="box-body">
                                    <div class="row">
                                        <a href="#">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="small-box bg-aqua card" style=";">
                                                    <div class="inner">
                                                        <h3>Nível Básico</br> 101</h3>
                                                        <p style="height:40px;">Dê os primeiros passos para o aprender a língua inglesa</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="ion ion-paper-airplane"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">
                                                        Detalhes <i class="fa fa-arrow-circle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="small-box bg-aqua card" style=";">
                                                    <div class="inner">
                                                        <h3>Nível Básico</br> 102</h3>
                                                        <p style="height:40px;">Pratique os conteúdos do módulo anterior e aprenda novas estruturas</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="ion ion-paper-airplane"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">
                                                        Detalhes <i class="fa fa-arrow-circle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </a>             

                                        <a href="#">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="small-box bg-aqua card" style=";">
                                                    <div class="inner">
                                                        <h3>Nível Básico</br> 103</h3>
                                                        <p style="height:40px;">Pratique a conversação através de diálogos simples do dia a dia</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="ion ion-paper-airplane"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">
                                                        Detalhes <i class="fa fa-arrow-circle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </a>              

                                        <a href="#">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="small-box bg-aqua card" style=";">
                                                    <div class="inner">
                                                        <h3>Nível Básico</br> 104</h3>
                                                        <p style="height:40px;">Aprenda a fazer afirmações, negações e perguntas</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="ion ion-paper-airplane"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">
                                                        Detalhes <i class="fa fa-arrow-circle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </a>              

                                        <a href="#">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="small-box bg-aqua card" style=";">
                                                    <div class="inner">
                                                        <h3>Nível Básico</br> 105</h3>
                                                        <p style="height:40px;">Aprenda a fazer afirmações, negações e perguntas</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="ion ion-paper-airplane"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">
                                                        Detalhes <i class="fa fa-arrow-circle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </a>              

                                        <a href="#">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="small-box bg-aqua card" style=";">
                                                    <div class="inner">
                                                        <h3>Nível Básico</br> 106</h3>
                                                        <p style="height:40px;">Aprenda a fazer afirmações, negações e perguntas</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="ion ion-paper-airplane"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">
                                                        Detalhes <i class="fa fa-arrow-circle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </a>
                                    </div> <!-- .row -->
                                </div> <!-- /.box-body -->
                            </div> <!-- /.box-primary -->
                        </div> <!-- col-md-12 -->
                    </div> <!-- /.row -->

                </section><!-- /.content -->

            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->

        <!-- Scripts import -->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
            <!-- Morris.js charts -->
            <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
            <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
            <!-- Sparkline -->
            <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
            <!-- jvectormap -->
            <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
            <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
            <!-- jQuery Knob Chart -->
            <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
            <!-- daterangepicker -->
            <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
            <!-- datepicker -->
            <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
            <!-- Bootstrap WYSIHTML5 -->
            <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
            <!-- iCheck -->
            <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

            <!-- AdminLTE App -->
            <script src="js/AdminLTE/app.js" type="text/javascript"></script>

            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>

            <!-- AdminLTE for demo purposes -->
            <script src="js/AdminLTE/demo.js" type="text/javascript"></script>
            <script>
                $('.carousel').carousel({
                interval: 5000 //changes the speed
                })
            </script>
        <!-- Scripts import -->
    </body>
</html>