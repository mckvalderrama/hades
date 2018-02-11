{{-- calling layouts \ ajaxrecinto.blade.php --}}
@extends('layouts.ajaxrecinto')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Lista de Recintos</h1>
  </div>
</div>

<div class="row">
  <div class="table table-responsive">
    <table class="table table-bordered" id="table">
      <tr>
        <th width="150px">ID</th>
        <th>Nombre</th>
        <th>Activo</th>
        <th>Status</th>
        <th class="text-center" width="150px">
          <a href="#" class="create-modal btn btn-success btn-sm">
            <i class="glyphicon glyphicon-plus">AgregarRecinto</i>
          </a>
        </th>
      </tr>
      {{ csrf_field() }}
      
      @foreach ($recinto as $value)
      <tr class="recinto{{$value->id}}">
        <td>{{ $value->id }}</td>
        <td>{{ $value->nombre }}</td>
        <td>{{ $value->activo }}</td>
        <td>{{ $value->status_id }}</td>
        <td>
          <a href="#" class="show-modal btn btn-info btn-sm" data-id="{{$value->id}}" data-nombre="{{$value->nombre}}" data-activo="{{$value->activo}}" data-statu="{{$value->status_id}}">
            <i class="fa fa-eye"></i>
          </a>
          <a href="#" class="edit-modal btn btn-warning btn-sm" data-id="{{$value->id}}" data-nombre="{{$value->nombre}}" data-activo="{{$value->activo}}" data-statu="{{$value->status_id}}">
            <i class="glyphicon glyphicon-pencil"></i>
          </a>
          <a href="#" class="delete-modal btn btn-danger btn-sm" data-id="{{$value->id}}" data-nombre="{{$value->nombre}}" data-activo="{{$value->activo}}" data-statu="{{$value->status_id}}">
            <i class="glyphicon glyphicon-trash"></i>
          </a>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
  {{$recinto->links()}}
</div>
{{-- Modal Formulario creacion persona --}}
<div id="create" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-recinto"></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group row add">
            <label class="control-label col-sm-2" for="nombre">Nombre del recinto:</label>
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
          <div class="form-group">
            <label class="control-label col-sm-2" for="status_id">Status :</label>
            <div class="col-sm-10">
             <select>
              @foreach($recinto as $value)
              <option value="{{ $value->status_id }}"> {{ $value->status }} </option>
              @endforeach
            </select> 
            <p class="error text-center alert alert-danger hidden"></p>
          </div>
        </div>

      </form>
    </div>
    <div class="modal-footer">
      <button class="btn btn-warning" type="submit" id="add">
        <span class="glyphicon glyphicon-plus"></span>Guardar Recinto
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
        <h4 class="modal-recinto"></h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="">ID :</label>
          <b id="idd"/>
        </div>
        <div class="form-group">
          <label for="">Nombre :</label>
          <b id="no"/>
        </div>
        <div class="form-group">
          <label for="">Activo :</label>
          <b id="ac"/>
        </div>

                    <!--<div class="form-group">
                      <label for="">Apellido Materno :</label>
                      <b id="ma"/>
                    </div> -->
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
                    <h4 class="modal-recinto"></h4>
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
                        <label class="control-label col-sm-2" for="activo">Apellido Paterno</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="a"></input>
                        </div>
                      </div>

          <!--<div class="form-group">
            <label class="control-label col-sm-2" for="am">Status</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="m"></input>
            </div>
          </div>
        -->
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
        <span class="glyphicon glyphicon"></span>Cerrar
      </button>

    </div>
  </div>
</div>
</div>
@endsection
