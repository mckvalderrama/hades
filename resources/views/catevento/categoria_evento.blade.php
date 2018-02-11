{{-- calling layouts \ ajaxcategoriaevento.blade.php --}}
@extends('layouts.ajaxcategoriaevento')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Lista de tipos de eventos</h1>
  </div>
</div>

<div class="row">
  <div class="table table-responsive">
    <table class="table table-bordered" id="table">
      <tr>
        <th width="150px">ID</th>
        <th>Nombre</th>
        <th>activo</th>

        <th class="text-center" width="150px">
          <a href="#" class="create-modal btn btn-success btn-sm">
            <i class="glyphicon glyphicon-plus">AgregarEvento</i>
          </a>
        </th>
      </tr>
      {{ csrf_field() }}
      
      @foreach ($categoria_evento as $value)
      <tr class="catevento{{$value->id}}">
        <td>{{ $value->id }}</td>
        <td>{{ $value->nombre }}</td>
        <td>{{ $value->activo }}</td>
        
        <td>
          <a href="#" class="show-modal btn btn-info btn-sm" data-id="{{$value->id}}" data-nombre="{{$value->nombre}}" data-activo="{{$value->activo}}">
            <i class="fa fa-eye"></i>
          </a>
          <a href="#" class="edit-modal btn btn-warning btn-sm" data-id="{{$value->id}}" data-nombre="{{$value->nombre}}" data-activo="{{$value->activo}}">
            <i class="glyphicon glyphicon-pencil"></i>
          </a>
          <a href="#" class="delete-modal btn btn-danger btn-sm" data-id="{{$value->id}}" data-nombre="{{$value->nombre}}" data-activo="{{$value->activo}}">
            <i class="glyphicon glyphicon-trash"></i>
          </a>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
  {{$categoria_evento->links()}}
</div>
{{-- Modal Formulario creacion evento --}}
<div id="create" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-catevento"></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group row add">
            <label class="control-label col-sm-2" for="nombre">Nombre de el evento:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name="nombre"
              placeholder=" nombre.." required>
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="activo">Activo :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="activo" name="activo"
              placeholder="Activo..." required>
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
          

        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning" type="submit" id="add">
          <span class="glyphicon glyphicon-plus"></span>Guardar Evento
        </button>
        <button class="btn btn-warning" type="button" data-dismiss="modal">
          <span class="glyphicon glyphicon-remobe"></span>Cerrar
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
        <h4 class="modal-catevento"></h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="">ID :</label>
          <b id="ids"/>
        </div>
        <div class="form-group">
          <label for="">Nombre :</label>
          <b id="NO"/>
        </div>
        <div class="form-group">
          <label for="">Activo :</label>
          <b id="A"/>
        </div>


      </div>
    </div>
  </div>
</div>

{{-- Ventana modal de editar --}}
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-catevento"></h4>
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
            <label class="control-label col-sm-2" for="descripcion">Activo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="a"></input>
            </div>
          </div>

          
      </form>
      {{-- ventana de eliminar--}}
      <div class="deleteContent">
        Seguro que desea eliminar el evento <span class="nombre"></span>?
        <span class="hidden id"></span>
      </div>

    </div>
    <div class="modal-footer">

      <button type="button" class="btn actionBtn" data-dismiss="modal">
        <span id="footer_action_button" class="glyphicon"></span>
      </button>

      <button type="button" class="btn btn-warning" data-dismiss="modal">
        <span class="glyphicon glyphicon"></span>Cerrar
      </button>

    </div>
  </div>
</div>
</div>
@endsection
