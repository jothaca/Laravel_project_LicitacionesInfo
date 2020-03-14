@extends('layout')

@section('content')
<h1>Crear Cliente</h1>

<form method="POST" action="/laravel/public/customers/update">
{{ csrf_field() }}
<fieldset class="scheduler-border">
  <legend class="scheduler-border">Datos Personales:</legend>
  <div class="row">
        <div class="col-sm-3">
        <div class="form-group">
          <label for="name">Nombre:</label>
        <input type="text" class="form-control" id="name" name="name"  value="{{$model->name}}">
        </div>
        </div>
        <div class="col-sm-3">
           <div class="form-group">
            <label for="phone">Acción:</label>
            <input type="number" class="form-control" id="id_action" name="id_action"  value="{{$model->id_action}}">
          </div>
        </div>
        
        
        <div class="col-sm-3">
          <div class="form-group">
            <label for="country">Estado:</label>
            <input type="text" class="form-control" id="state" name="state" value="{{$model->state}}">
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label for="department">Descripción:</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$model->description}}">
          </div>
        </div>
        <input type="hidden" class="hidden" id="id" name="id" value="{{$model->id}}">
  </div> 
  </div>

  <button type="submit" class="btn-primary form-control col-2">Actualizar</button>
</form> 
@endsection
