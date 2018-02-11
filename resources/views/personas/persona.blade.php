{{-- calling layouts \ ajaxpersona.blade.php --}}
@extends('layouts.ajaxpersona')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Lista de personas</h1>
  </div>
</div>

<div class="row">
  <div class="table table-responsive">
    <table class="table table-bordered" id="table">
      <tr>
        <th width="150px">ID</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th class="text-center" width="150px">
          <a href="#" class="create-modal btn btn-success btn-sm">
            <i class="glyphicon glyphicon-plus">AgregarPersona</i>
          </a>
        </th>
      </tr>
      {{ csrf_field() }}
      
      @foreach ($persona as $value)
        <tr class="persona{{$value->id}}">
          <td>{{ $value->id }}</td>
          <td>{{ $value->nombre }}</td>
          <td>{{ $value->ap }}</td>
          <td>{{ $value->am }}</td>
          <td>
            <a href="#" class="show-modal btn btn-info btn-sm" data-id="{{$value->id}}" data-nombre="{{$value->nombre}}" data-ap="{{$value->ap}}" data-am="{{$value->am}}">
              <i class="fa fa-eye"></i>
            </a>
            <a href="#" class="edit-modal btn btn-warning btn-sm" data-id="{{$value->id}}" data-nombre="{{$value->nombre}}" data-ap="{{$value->ap}}" data-am="{{$value->am}}">
              <i class="glyphicon glyphicon-pencil"></i>
            </a>
            <a href="#" class="delete-modal btn btn-danger btn-sm" data-id="{{$value->id}}" data-nombre="{{$value->nombre}}" data-ap="{{$value->ap}}" data-am="{{$value->am}}">
              <i class="glyphicon glyphicon-trash"></i>
            </a>
          </td>
        </tr>
      @endforeach
    </table>
  </div>
  {{$persona->links()}}
</div>
{{-- Modal Formulario creacion persona --}}
<div id="create" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group row add">
            <label class="control-label col-sm-2" for="nombre">nombre :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name="nombre"
              placeholder="Tu nombre.." required>
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="ap">apellido paterno :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="ap" name="ap"
              placeholder="Tu Apellido Paterno.." required>
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="am">apellido materno :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="am" name="am"
              placeholder="Tu Apellido Materno" required>
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
        </form>
      </div>
          <div class="modal-footer">
            <button class="btn btn-warning" type="submit" id="add">
              <span class="glyphicon glyphicon-plus"></span>Guardar Persona
            </button>
            <button class="btn btn-warning" type="button" data-dismiss="modal">
              <span class="glyphicon glyphicon-remobe"></span>Close
            </button>
          </div>
    </div>
  </div>
</div></div>
{{-- Ventana modal de mostrar --}}
<div id="show" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
                  </div>
                    <div class="modal-body">
                    <div class="form-group">
                      <label for="">ID :</label>
                      <b id="ie"/>
                    </div>
                    <div class="form-group">
                      <label for="">Nombre :</label>
                      <b id="no"/>
                    </div>
                    <div class="form-group">
                      <label for="">Apellido Paterno :</label>
                      <b id="pe"/>
                    </div>
                    <div class="form-group">
                      <label for="">Apellido Materno :</label>
                      <b id="ma"/>
                    </div>
                    </div>
                    </div>
                  </div>
                  </div>

{{-- Ventana modal de editar --}}
<div id="myModal"class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="modal">

          <div class="form-group">
            <label class="control-label col-sm-2" for="id">ID</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="fid" disabled>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="nombre">Nombre</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="n">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="ap">Apellido Paterno</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="p"></input>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="am">Apellido Materno</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="m"></input>
            </div>
          </div>
        </form>
                {{-- ventana de eliminar--}}
        <div class="deleteContent">
          Seguro que desea eliminar a la persona <span class="nombre"></span>?
          <span class="hidden id"></span>
        </div>

      </div>
      <div class="modal-footer">

        <button type="button" class="btn actionBtn" data-dismiss="modal">
          <span id="footer_action_button" class="glyphicon"></span>
        </button>

        <button type="button" class="btn btn-warning" data-dismiss="modal">
          <span class="glyphicon glyphicon"></span>close
        </button>

      </div>
    </div>
  </div>
</div>
@endsection
