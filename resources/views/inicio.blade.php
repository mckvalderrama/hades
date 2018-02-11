<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Capilla</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('https://www.w3schools.com/w3css/4/w3.css') }}">

  <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/icon?family=Material+Icons') }}">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('css/_all-skins.min.css') }}">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="shortcut icon" href="img/favicon.ico">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a  class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>P.F.</b>G.</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Capilla</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- <small class="bg-black">Online</small> -->
                  <span class="hidden-xs">{{session()->get('name_user')}}</span>
                  <i class="fas fa-cogs"></i>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  
                  <li class="user-header">
                    <p>
                      Bienvenido
                      <small>Administrador</small>
                      <i class="fas fa-user-circle" style="font-size: 100px "></i>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">

                    <div class="pull-right">
                      <a href="{{ action('InicioController@session_destroy') }}" class="btn btn-default btn-flat">Cerrar Sesion</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>

            <li class="treeview">
              <a href="#">
                <i class="fas fa-book"></i>
                <span>Eventos</span>
                <i class=""></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ action('Categoria_eventoController@index')}}"><i class="fa fa-circle-o"></i> Registrar evento</a></li>
                <li><a href=" "><i class="fa fa-circle-o"></i> Categorías</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fas fa-address-book"></i>
                <span>Servicio</span>
                <i class=""></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Registrar evento</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Categorías</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fas fa-tasks"></i>
                <span>Inventario</span>
                <i class=""></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Registrar</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Categorías</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fas fa-address-book"></i>
                <span>Personas</span>
                <i class=""></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ action('PersonaController@index')}}" ><i class="fa fa-circle-o"></i> Listado de personas</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Directorio</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fas fa-globe"></i>
                <span>Recintos</span>
                <i class=""></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ action('RecintoController@index')}}" ><i class="fa fa-circle-o"></i> Dar de alta</a></li>
                
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fas fa-university"></i>
                <span>Capillas</span>
                <i class=""></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ action('CapillaController@index')}}" ><i class="fa fa-circle-o"></i> Dar de alta</a></li>
                
              </ul>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

    
    <!--Contenido-->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Main content -->
      <section class="content">

        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title" >Eventos pendientes</h3>

                <!-- PONER AQUI LOS DATOS DE LOS EVENTOS OSEA MOSTRAR LOS EVENTOS PROXIMOS -->
                <!-- /.box-header -->
                <div class="box-body">
                 <div class="row">
                  <div class="col-md-12">
                    <!--Contenido-->
                    @yield('contenido')
                    
                  </div>
                </div>

              </div>

              
              <br>
              <br>

              
            </div><!-- /.row -->

          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->

  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->



<!-- jQuery 2.1.4 -->
<script src="js/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="js/app.min.js"></script>

</body>
</html>
