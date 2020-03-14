@extends('layout')

@section('content')
<h1>Acciones</h1>

<div class="col-3">
  <a href="/laravel/public/actions/create"><span class="btn btn-sm btn-primary fa fa-trash-o" aria-hidden="true" title="Añadir acción">Añadir acción</span></a>
</div>

<div class="row">

  
  <div class="col-6">
    <h4>Finalizadas: </h4>
    <table class="table table-striped">
      <thead>
          <tr>
            <th>
              Tipo acción
            </th>
            <th>  
              Cliente
            </th>
            <th>  
              Estado
            </th>
          </tr>
      </thead>
      @foreach($actionsEnds as $item)
        <tr>
            <td>
                {{$item->type}}
            </td>
            <td>
                {{$item->customer->name}}
              </td>
              <td>
                {{$item->state}}
              </td>
              <td>
                <a href="actions/{{$item->id}}/delete"><span class="btn btn-sm btn-danger fa fa-trash-o" aria-hidden="true" title="Eliminar">Eliminar</span></a>
              </td>
        </tr>
        @endforeach
      <tbody>

      </tbody>
    </table>
     

  </div>
  <div class="col-6">
    <h4>Pendientes: </h4>
    <table class="table table-striped">
      <thead>
          <tr>
            <th>
              Tipo acción
            </th>
            <th>  
              Cliente
            </th>
            <th>  
              Estado
            </th>
          </tr>
      </thead>
      @foreach($actionsMay as $item)
        <tr>
            <td>
                {{$item->type}}
            </td>
            <td>
                {{$item->customer->name}}
              </td>
              <td>
                {{$item->state}}
              </td>
              <td>
                <a href="actions/{{$item->id}}/delete"><span class="btn btn-sm btn-danger fa fa-trash-o" aria-hidden="true" title="Eliminar">Eliminar</span></a>
              </td>
        </tr>
        @endforeach
      <tbody>

      </tbody>
    </table>
     

  </div>
</div>

@endsection
