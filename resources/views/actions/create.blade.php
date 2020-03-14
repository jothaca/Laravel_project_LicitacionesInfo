@extends('layout')

@section('content')
<h1>Crear Acción</h1>

<form method="POST" action="/laravel/public/actions/store">
{{ csrf_field() }}
<fieldset class="scheduler-border">
  <div class="row">
        <div class="col-sm-3">
        <div class="form-group">
          <label for="type">Tipo:</label>
          <select name="type" class="form-control">
            <option value="Venta">Venta</option> 
            <option value="Compra">Compra</option>
            <option value="Deuda">Deuda</option>
          </select>
        </div>
        </div>
        <div class="col-sm-3">
           <div class="form-group">
            <label for="state">Estado:</label>
            <select name="state" class="form-control">
                <option value="finalizado">Finalizado</option> 
                <option value="pendiente">Pendiente</option>
              </select>
          </div>
        </div>
        
        <div class="col-sm-3">
          <div class="form-group">
            <label for="">Cliente:</label>
            <select name="id_client" class="form-control">
                <option value="0">Seleccione un cliente</option> 
                @foreach ($model as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option> 
                @endforeach
              </select>
          </div>
        </div>  
  </div> 
  </div>

  <button type="submit" class="btn-primary form-control col-2">Crear</button>
</form> 
@endsection
