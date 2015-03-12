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

            <a href="index.html" class="logo">
                <!-- Logo Kalango -->
                Kalango V2.1
                <img style="width:80px;" src="KalangoBranco.png">
            </a>
        </div> <!-- Logo link para home page -->
        
        <div class="usermenu" style="height: 1px;">
            <!-- <div class="navbar-right" id="bs-example-navbar-collapse-1"> -->
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                            <span>Jane Doe <i class="caret"></i></span>
                        </a>
                        <ul class="dropdown-menu" style="margin-left: -165px;">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                <p>
                                    Eduarda Suplicy
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
                                    <a href="#">Perfil</a>
                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            <!-- </div> -->
        </div><!-- Lado Direito da Navbar /.nav-collapse -->

      </div> <!-- Lado esquerdo da Navbar -->
    </div><!-- fim Navbar-->

        <div class="wrapper row-offcanvas row-offcanvas-left" style="padding-top: 55px">

            <!-- Right side column. Contains the navbar and content of the page -->

            <!-- Conteúdo principal -->
            <aside class="right-side" style="margin-left:0px;">

                <!-- Content Header (Page header) -->
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
                                            <a data-toggle="tab" href="#feed">
                                                <i class="orange ace-icon fa fa-rss bigger-120"></i>
                                                Activity Feed
                                            </a>
                                        </li>

                                    </ul>                                   <!-- Fim Abas - Menu -->

                                    <div class="tab-content no-border padding-24 profile">
                                        <div id="home" class="tab-pane active">     <!-- Aba "home" -->
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-3 center" style="text-align: center">  <!-- FotoPerfil+Botões -->
                                                    <span class="profile-picture">
                                                        <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="profile-pic.jpg">
                                                    </span>

                                                    <div class="space space-4"></div>

                                                    <a href="#" class="btn btn-sm btn-block btn-success">
                                                        <i class="ace-icon fa fa-plus-circle bigger-120"></i>
                                                        <span class="bigger-110">Add as a friend</span>
                                                    </a>

                                                    <a href="#" class="btn btn-sm btn-block btn-primary">
                                                        <i class="ace-icon fa fa-envelope-o bigger-110"></i>
                                                        <span class="bigger-110">Send a message</span>
                                                    </a>
                                                </div>                                                              <!--Fim FotoPerfil+Botões  -->
    
                                                <div class="col-xs-12 col-sm-9">
                                                    <h4 class="blue">
                                                        <span class="middle">{{Auth::user()->nome}} {{" "}} {{Auth::user()->sobrenome}}/span>
                                                    </h4> <!-- Fim Nome -->

                                                    <div class="profile-user-info">     <!-- Conjunto de Info do Usuário -->

                                                        <div class="profile-info-row">  <!-- Username -->
                                                            <div class="profile-info-name">Matrícula</div>

                                                            <div class="profile-info-value">
                                                                <span>{{Aluno::find(Auth::user()->id)->matricula}}</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Location </div>

                                                            <div class="profile-info-value">
                                                                <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                <span>Netherlands</span>
                                                                <span>Amsterdam</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Age </div>

                                                            <div class="profile-info-value">
                                                                <span>38</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Joined </div>

                                                            <div class="profile-info-value">
                                                                <span>2010/06/20</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Last Online </div>

                                                            <div class="profile-info-value">
                                                                <span>3 hours ago</span>
                                                            </div>
                                                        </div>
                                                    </div>                              <!-- Fim Conjunto de Info do Usuário -->

                                                    <div class="hr hr-8 dotted"></div>

                                                    <div class="profile-user-info">     <!-- Contatos do Usuário -->
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Website </div>

                                                            <div class="profile-info-value">
                                                                <a href="#" target="_blank">www.alexdoe.com</a>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name">
                                                                <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
                                                            </div>

                                                            <div class="profile-info-value">
                                                                <a href="#">Find me on Facebook</a>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name">
                                                                <i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
                                                            </div>

                                                            <div class="profile-info-value">
                                                                <a href="#">Follow me on Twitter</a>
                                                            </div>
                                                        </div>
                                                    </div>                              <!-- Fim Contatos do Usuário -->
                                                </div><!-- /.col -->
                                            </div><!-- /.row -->

                                            </br>

                                            <div class="row">                                       
                                                <div class="col-xs-12 col-sm-6">        <!-- Texto do Usuário -->
                                                    <div class="widget-box transparent">
                                                        <div class="widget-header widget-header-small">
                                                            <h4 class="widget-title smaller">
                                                                <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                                Little About Me
                                                            </h4>
                                                        </div>

                                                        <div class="widget-body">
                                                            <div class="widget-main">
                                                                <p>
                                                                    My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.
                                                                </p>
                                                                <p>
                                                                    Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.
                                                                </p>
                                                                <p>
                                                                    The best thing about my job is that vestibulum id ligula porta felis euismod and nullam quis risus eget urna mollis ornare.
                                                                </p>
                                                                <p>
                                                                    Thanks for visiting my profile.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                  <!-- Fim Texto do Usuário -->

                                                <div class="col-xs-12 col-sm-6">        <!-- Habilidades -->
                                                    <div class="widget-box transparent">
                                                        <div class="widget-header widget-header-small header-color-blue2">
                                                            <h4 class="widget-title smaller">
                                                                <i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
                                                                My Skills
                                                            </h4>
                                                        </div>

                                                        <div class="widget-body">
                                                            <div class="widget-main padding-16">
                                                                <div class="clearfix">
                                                                    <div class="grid3 center">
                                                                        <div style="display: inline; width: 90px; height: 90px;"><input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgcolor="#3c8dbc" data-readonly="true" readonly="readonly" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 18px; line-height: normal; font-family: Arial; text-align: center; color: rgb(60, 141, 188); padding: 0px; -webkit-appearance: none; background: none;"></div>
                                                                        <div class="knob-label">data-width="90"</div>
                                                                    </div>

                                                                    <div class="grid3 center">
                                                                        <div style="display: inline; width: 90px; height: 90px;"><input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgcolor="#3c8dbc" data-readonly="true" readonly="readonly" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 18px; line-height: normal; font-family: Arial; text-align: center; color: rgb(60, 141, 188); padding: 0px; -webkit-appearance: none; background: none;"></div>
                                                                        <div class="knob-label">data-width="90"</div>
                                                                    </div>

                                                                    <div class="grid3 center">
                                                                        <div style="display: inline; width: 90px; height: 90px;"><input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgcolor="#3c8dbc" data-readonly="true" readonly="readonly" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 18px; line-height: normal; font-family: Arial; text-align: center; color: rgb(60, 141, 188); padding: 0px; -webkit-appearance: none; background: none;"></div>
                                                                        <div class="knob-label">data-width="90"</div>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                              
                    </div>

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