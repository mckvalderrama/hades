<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Persona</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-ststic-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{ action('PersonaController@persona')}}">CodELog</a>
        </div>
      </div>
    </nav>
    <div class="container">
      @yield('content')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   
   <script type="text/javascript">
{{-- crear persona--}}
  $(document).on('click','.create-modal', function() {
    $('#create').modal('show');
    $('.form-horizontal').show();
    $('.modal-title').text('Añadir persona');
  });
  $("#add").click(function() {
    $.ajax({
      type: 'POST',
      url: 'addPersona',
      data: {
        '_token': $('input[name=_token]').val(),
        'nombre': $('input[name=nombre]').val(),
        'ap': $('input[name=ap]').val(),
        'am': $('input[name=am').val()
      },
      success: function(data){
        if ((data.errors)) {
          $('.error').removeClass('hidden');
          $('.error').text(data.errors.nombre);
          $('.error').text(data.errors.ap);
          $('.error').text(data.errors.am);
        } else {
          $('.error').remove();
          $('#table').append("<tr class='persona" + data.id + "'>"+
          "<td>" + data.id + "</td>"+
          "<td>" + data.nombre + "</td>"+
          "<td>" + data.ap + "</td>"+
          "<td>" + data.am + "</td>"+
          "<td><button class='show-modal btn btn-info btn-sm' data-id='" + data.id + "' data-nombre='" + data.nombre + "' data-ap='" + data.ap + "' data-am='" + data.am + "'><span class='fa fa-eye'></span></button> <button class='edit-modal btn btn-warning btn-sm' data-id='" + data.id + "' data-nombre='" + data.nombre + "' data-ap='" + data.ap + "' data-am='" + data.am + "'><span class='glyphicon glyphicon-pencil'></span></button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "' data-nombre='" + data.nombre + "' data-ap='" + data.ap + "' data-am='" + data.am + "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
          "</tr>");
        }
      },
    });
    $('#nombre').val('');
    $('#ap').val('');
    $('am').val('');
  });

// function Edit POST
$(document).on('click', '.edit-modal', function() {
$('#footer_action_button').text(" Actualizar Persona");
$('#footer_action_button').addClass('glyphicon-check');
$('#footer_action_button').removeClass('glyphicon-trash');
$('.actionBtn').addClass('btn-success');
$('.actionBtn').removeClass('btn-danger');
$('.actionBtn').addClass('edit');
$('.modal-title').text('Editar Persona');
$('.deleteContent').hide();
$('.form-horizontal').show();
$('#fid').val($(this).data('id'));
$('#n').val($(this).data('nombre'));
$('#p').val($(this).data('ap'));
$('#m').val($(this).data('am'));
$('#myModal').modal('show');
});

$('.modal-footer').on('click', '.edit', function() {
  $.ajax({
    type: 'POST',
    url: 'editPersona',
    data: {
'_token': $('input[name=_token]').val(),
'id': $("#fid").val(),
'nombre': $('#n').val(),
'ap': $('#p').val(),
'am': $('#m').val()

},
success: function(data) {
      $('.persona' + data.id).replaceWith(" "+
      "<tr class='persona" + data.id + "'>"+
      "<td>" + data.id + "</td>"+
      "<td>" + data.nombre + "</td>"+
      "<td>" + data.ap + "</td>"+
      "<td>" + data.am + "</td>"+
 "<td><button class='show-modal btn btn-info btn-sm' data-id='" + data.id + "' data-nombre='" + data.nombre + "' data-ap='" + data.ap + "' data-am='" + data.am + "'><span class='fa fa-eye'></span></button> <button class='edit-modal btn btn-warning btn-sm' data-id='" + data.id + "' data-nombre='" + data.nombre + "' data-ap='" + data.ap + "' data-am='" + data.am + "'><span class='glyphicon glyphicon-pencil'></span></button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "' data-nombre='" + data.nombre + "' data-ap='" + data.ap + "' data-am='" + data.am + "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
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
$('.modal-title').text('Eliminar Persona');
$('.id').text($(this).data('id'));
$('.deleteContent').show();
$('.form-horizontal').hide();
$('.nombre').html($(this).data('nombre'));
$('#myModal').modal('show');
});

$('.modal-footer').on('click', '.delete', function(){
  $.ajax({
    type: 'POST',
    url: 'deletePersona',
    data: {
      '_token': $('input[name=_token]').val(),
      'id': $('.id').text()
    },
    success: function(data){
       $('.persona' + $('.id').text()).remove();
    }
  });
});



  // Show function
  $(document).on('click', '.show-modal', function() {
  $('#show').modal('show');
  $('#ei').text($(this).data('id'));
  $('#no').text($(this).data('nombre'));
  $('#pe').text($(this).data('ap'));
  $('#ma').text($(this).data('am'));
  $('.modal-title').text('Mostrar Persona');
  });
</script>
</body>
</html> 