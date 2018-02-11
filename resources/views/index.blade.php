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
  <body>


    <section class="content">

      <div class="col-md-12" align="center">
        <div class="box">
          <div class="with-border">
            <h3 class="box-title">Acceder</h3>
            <i class="fas fa-user-circle" style="font-size: 100px"></i>
            <div class="box-body">
             <div class="row">
              <div class="container">
                @foreach($errors as $error)
                 <h1>{{ print_r($error) }}</h1>
                @endforeach
                <form action="{{ action('InicioController@inicio') }}" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <br>
                  <label>Usuario</label>
                  <br>
                  <input type="text" class="form-control" name="user" id="user" required="">
                  <br>
                  <label>Contraseña</label>
                  <br>
                  <input type="password" class="form-control" id="pass" name="pass" required="">
                  <br>
                  <input type="submit" class="form-control btn btn-success" value="Iniciar">
                </form>
              </div>
            </div>
          </div>
          <br>
        </div>
      </div>
    </div>

  </section>
  

  <!-- jQuery 2.1.4 -->
  <script src="js/jQuery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="js/app.min.js"></script>

</body>
</html>
