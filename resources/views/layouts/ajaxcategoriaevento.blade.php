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

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    
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
                  <li><a href="#"><i class="fa fa-circle-o"></i> Registrar evento</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Categorías</a></li>
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
                  <li><a href="#" ><i class="fa fa-circle-o"></i> Dar de alta</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Directorio</a></li>
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
                    <h3 class="box-title" >Capillas</h3>


                    <!-- /.box-header -->
                    <div class="box-body">
                     <div class="row">
                      <div class="col-md-12">
                        <!--Contenido-->
                        @yield('content')

                        <div class="panel-body">


                        </div>

                        <!--Fin Contenido-->
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
      {{-- crear categoria evento--}}
      $(document).on('click','.create-modal', function() {
        $('#create').modal('show');
        $('.form-horizontal').show();
        $('.modal-catevento').text('Añadir Evento');
      });
      $("#add").click(function() {
        $.ajax({
          type: 'POST',
          url: 'addCatevento',
          data: {
            '_token': $('input[name=_token]').val(),
            'nombre': $('input[name=nombre]').val(),
            'activo': $('input[name=activo]').val()
          },
          success: function(data){
            if ((data.errors)) {
              $('.error').removeClass('hidden');
              $('.error').text(data.errors.nombre);
              $('.error').text(data.errors.activo);
            } else {
              $('.error').remove();
              $('#table').append("<tr class='catevento" + data.id + "'>"+
                "<td>" + data.id + "</td>"+
                "<td>" + data.nombre + "</td>"+
                "<td>" + data.activo + "</td>"+
                "<td><button class='show-modal btn btn-info btn-sm' data-id='" + data.id + "' data-nombre='" + data.nombre + "' data-activo='" + data.activo + "'><span class='fa fa-eye'></span></button> <button class='edit-modal btn btn-warning btn-sm' data-id='" + data.id + "' data-nombre='" + data.nombre + "' data-activo='" + data.activo + "'><span class='glyphicon glyphicon-pencil'></span></button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "' data-nombre='" + data.nombre + "' data-activo='" + data.activo + "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
                "</tr>");
            }
          },
        });
        $('#nombre').val('');
        $('#activo').val('');
      });

// function Edit POST
$(document).on('click', '.edit-modal', function() {
  $('#footer_action_button').text(" Actualizar evento");
  $('#footer_action_button').addClass('glyphicon-check');
  $('#footer_action_button').removeClass('glyphicon-trash');
  $('.actionBtn').addClass('btn-success');
  $('.actionBtn').removeClass('btn-danger');
  $('.actionBtn').addClass('edit');
  $('.modal-catevento').text('Editar evento');
  $('.deleteContent').hide();
  $('.form-horizontal').show();
  $('#fid').val($(this).data('id'));
  $('#n').val($(this).data('nombre'));
  $('#a').val($(this).data('activo'));
  $('#myModal').modal('show');
});

$('.modal-footer').on('click', '.edit', function() {
  $.ajax({
    type: 'POST',
    url: 'editCatevento',
    data: {
      '_token': $('input[name=_token]').val(),
      'id': $("#fid").val(),
      'nombre': $('#n').val(),
      'activo': $('#a').val()
      

    },
    success: function(data) {
      $('.catevento' + data.id).replaceWith(" "+
        "<tr class='catevento" + data.id + "'>"+
        "<td>" + data.id + "</td>"+
        "<td>" + data.nombre + "</td>"+
        "<td>" + data.activo + "</td>"+
        "<td><button class='show-modal btn btn-info btn-sm' data-id='" + data.id + "' data-nombre='" + data.nombre + "' data-activo='" + data.activo + "'><span class='fa fa-eye'></span></button> <button class='edit-modal btn btn-warning btn-sm' data-id='" + data.id + "' data-nombre='" + data.nombre + "' data-activo='" + data.activo + "'><span class='glyphicon glyphicon-pencil'></span></button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "' data-nombre='" + data.nombre + "' data-activo='" + data.activo + "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
        "</tr>");
    }
  });
});


// form Delete function
$(document).on('click', '.delete-modal', function() {
  $('#footer_action_button').text(" Eliminar");
  $('#footer_action_button').removeClass('glyphicon-check');
  $('#footer_action_button').addClass('glyphicon-trash');
  $('.actionBtn').removeClass('btn-success');
  $('.actionBtn').addClass('btn-danger');
  $('.actionBtn').addClass('delete');
  $('.modal-catevento').text('Eliminar evento');
  $('.id').text($(this).data('id'));
  $('.deleteContent').show();
  $('.form-horizontal').hide();
  $('.nombre').html($(this).data('nombre'));
  $('#myModal').modal('show');
});

$('.modal-footer').on('click', '.delete', function(){
  $.ajax({
    type: 'POST',
    url: 'deleteCatevento',
    data: {
      '_token': $('input[name=_token]').val(),
      'id': $('.id').text()
    },
    success: function(data){
     $('.catevento' + $('.id').text()).remove();
   }
 });
});



  // Show function
  $(document).on('click', '.show-modal', function() {
    $('#show').modal('show');
    $('#ids').text($(this).data('id'));
    $('#NO').text($(this).data('nombre'));
    $('#A').text($(this).data('activo'));
    $('.modal-catevento').text('Mostrar evento');
  });
</script>

<!-- jQuery 2.1.4 -->
<script src="js/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="js/app.min.js"></script>

</body>
</html> 

