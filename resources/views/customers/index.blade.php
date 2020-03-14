@extends('layout')

@section('content')
<h1>Clientes</h1>

<div class="col-3">
  <a href="/laravel/public/customers/create"><span class="btn btn-sm btn-primary fa fa-trash-o" aria-hidden="true" title="Añadir cliente">Añadir cliente</span></a>
</div>

<div>

  
  <div>
    <table class="table table-striped">
      <thead>
          <tr>
            <th>
              Nombre Cliente
            </th>
            
            <th>  Descripción
            </th>
          </tr>
      </thead>
      @foreach($model as $item)
        <tr>
            <td>
                {{$item->name}}
            </td>
            <td>
                {{$item->description}}
              </td>
              <td>
                <a href="customers/{{$item->id}}/edit"><span class="btn btn-sm btn-primary fa fa-trash-o" aria-hidden="true" title="Editar">Editar</span></a>
              </td>
              <td>
                <a href="customers/{{$item->id}}/delete"><span class="btn btn-sm btn-danger fa fa-trash-o" aria-hidden="true" title="Eliminar">Eliminar</span></a>
              </td>
        </tr>
        @endforeach
      <tbody>

      </tbody>
    </table>
     

  </div>
  
</div>

@endsection
