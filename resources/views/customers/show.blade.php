@extends('layout')

@section('content')

 <h1> {{$model->name}} <br> </h1>
{{-- Alertas --}}
  @if (session('status'))
          <div class="alert alert-primary alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
            {!! html_entity_decode(session('status')) !!}
        </div>
  @endif
    @if (session('statusone'))
          <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
            {!! html_entity_decode(session('statusone')) !!}
        </div>
  @endif
  @if (session('statustwo'))
          <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
            {!! html_entity_decode(session('statustwo')) !!}
        </div>
  @endif
  {{-- fin alertas --}}
<div class="card-block">
  <form action="customers/{{$model->id}}/edit">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-md-6">
        
            <div class="row"><div class="col-md-6"><span class="lavel"><strong>Nombre:</strong></span></div> <div class="col-md-6">{{$model->name}}</div></div>
        
            <div class="row"><div class="col-md-6"><span class="lavel"><strong>Documento:</strong></span></div> <div class="col-md-6">{{$model->document}}</div></div>
        
            <div class="row"><div class="col-md-6"><span class="lavel"><strong>Teléfono:</strong></span></div> <div class="col-md-6">{{$model->phone}}</div></div>
       
            <div class="row"><div class="col-md-6"><span class="lavel"><strong>Celular:</strong></span></div> <div class="col-md-6">{{$model->phone2}}</div></div>
       
            <div class="row"><div class="col-md-6"><span class="lavel"><strong>Correo Electrónico:</strong></span></div> <div class="col-md-6">{{$model->email}}</div></div>
        
            <div class="row"><div class="col-md-6"><span class="lavel"><strong>Dirección:</strong></span></div> <div class="col-md-6">{{$model->address}}</div></div>
        
            <div class="row"><div class="col-md-6"><span class="lavel"><strong>Departamento:</strong></span></div> <div class="col-md-6">{{$model->department}}</div></div>
        
            <div class="row"><div class="col-md-6"><span class="lavel"><strong>Ciudad:</strong></span></div> <div class="col-md-6">{{$model->city}}</div></div>
        
    		<div class="row"><div class="col-md-6"><span class="lavel"><strong>Persona de Contacto:</strong></span></div> <div class="col-md-6">{{$model->contact_name}}</div></div>
    	
    		<div class="row"><div class="col-md-6"><span class="lavel"><strong>Email del Contacto:</strong></span></div> <div class="col-md-6">{{$model->contact_email}}</div></div>	 
      </div>
      
      <div class="col-md-6">
        
            <div class="row"><div class="col-md-6"><span class="lavel"><strong>País:</strong></span></div> <div class="col-md-6">{{$model->country}}</div></div>
        
            <div class="row"><div class="col-md-6"><span class="lavel"><strong>Empresa:</strong></span></div> <div class="col-md-6">{{$model->business}}</div></div>
        
            <div class="row"><div class="col-md-6"><span class="lavel"><strong>Cargo:</strong></span></div> <div class="col-md-6">{{$model->position}}</div></div>
            
          <div class="row"><div class="col-md-6"><strong>Estado:</strong></div> <div class="col-md-6">@if(isset($model->status)&& !is_null($model->status)&&$model->status!=''){{$model->status->name}}@endif
                    </div></div>
        
              <div class="row"><div class="col-md-6"><span class="lavel"><strong>Producto Adquirido:</strong></span></div> <div class="col-md-6">{{$model->bought_products}}</div></div>
      
          <div class="row"><div class="col-md-6"><strong>Asignado a:</strong></div> <div class="col-md-6">
                              @if(isset($model->user)&& !is_null($model->user)&&$model->user!=''){{$model->user->name}} @else Sin asignar @endif
                    </div></div>
     
          <div class="row"><div class="col-md-6"><strong>Fuente:</strong></div> <div class="col-md-6">
                                @if(isset($model->source)&& !is_null($model->source)&&$model->source!=''){{$model->source->name}}
                                @endif
                      </div></div>

        
    		<div class="row"><div class="col-md-6"><span class="lavel"><strong>Telefono del Contacto:</strong></span></div> <div class="col-md-6">{{$model->contact_phone2}}</div></div>
    	   
    	   	<div class="row"><div class="col-md-6"><span class="lavel"><strong>Proyecto:</strong></span></div> <div class="col-md-6">@if(isset($model->project)){{$model->project->name}}@endif</div></div>

    		<div class="row"><div class="col-md-6"><span class="lavel"><strong>Cargo del Contacto:</strong></span></div> <div class="col-md-6">{{$model->contact_position}}</div></div>
            <!--<div class="row"><div class="col-md-6"><span class="lavel"><strong>Cantidad de empanadas que hace:</strong></span></div> <div class="col-md-6">{{$model->count_empanadas}}</div></div>-->
                
            
              <!-- <div class="row"><div class="col-md-6"><span class="lavel"><strong>Notas:</strong></span></div> <div class="col-md-6"></div></div> -->
      </div>

    </div>
    <div class="row">
      <div class="col-md-12"><span class="lavel"><strong>Notas:</strong></span></div> <div class="col-md-12">{{$model->notes}}</div>
    </div>

    
    <div class="row">
      <div class="col-md-12"><span class="lavel"><strong>Visitas Técnicas:</strong></span></div> <div class="col-md-6">{{$model->technical_visit}}</div>
    </div>
	
    <br>
    <a href="/customers/{{$model->id}}/edit">
            <span class="btn btn-primary btn-sm" aria-hidden="true">Editar prospecto</span>
          </a>
  @if(is_null($model->user_id) || $model->user_id==0)
	  <a href="/customers/{{$model->id}}/assignMe">
            <span class="btn btn-primary btn-sm" aria-hidden="true">Asignarme prospecto</span>
          </a>
   @endif
  </form>
</div>
<br>

@if($actual)
  <div class="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
       <h3>
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       Envío de correos
        </button>
     </h3>
    </div>
     <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
       <form action="/customers/{{$model->id}}/action/mail" method="POST">
  {{ csrf_field() }}
  <div>
    <select name="email_id" id="email_id">
              <option value="">Seleccione una opción</option>
              @foreach($email_options as $email_option)
        <option value="{{$email_option->id}}">{{$email_option->subject}}</option>
                @endforeach
    </select>
  </div>
  <div>
     <input type="hidden" id="customer_id" name="customer_id" value="{{$model->id}}">
     <input class="btn btn-primary btn-sm" type="submit" value="Enviar correo">
  </div>
  </form>
     </div>
   </div>
     </div>
@endif

    <h2>Acciones</h2>
    <div>
      <form action="/customers/{{$model->id}}/action/store" method="POST">
          {{ csrf_field() }}
        <div>
    @if(isset($actionProgramed))
      <input type="hidden" name="ActionProgrameId" value="{{$actionProgramed->id}}">
      <h3>Acción pendiente: <strong>{{$actionProgramed->note}}</strong></h3>
    @endif
          <textarea name="note" id="note" cols="100" rows="5" required="required"></textarea>
        </div>
        <div>
           <select name="type_id" id="type_id" required>
              <option value="">Seleccione una acción</option>
              @foreach($action_options as $action_option)
                             <option value="{{$action_option->id}}">{{$action_option->name}}</option>
                @endforeach
                        </select>
           <select name="status_id" id="status_id">
              <option value="">Seleccione un estado</option>
              @foreach($statuses_options as $status_option)
                             <option value="{{$status_option->id}}">{{$status_option->name}}</option>
                @endforeach
                        </select>
           
         </div>
    <div style="margin-bottom:1rem;">
      <label for="example-datetime-local-input" class="col-form-label">Fecha y hora</label>
      <div>
      <input class="form-control" name="date_programed" type="datetime-local" value="{{$today}}" id="example-datetime-local-input">
      </div>
    </div>
        <div>
          <input class="btn btn-primary btn-sm" type="submit" value="Enviar acción">
          <input type="hidden" id="customer_id" name="customer_id" value="{{$model->id}}">
        </div>
      </form>
    </div>

<!-- <div style="margin:1rem 0">
	<h3>Envío de correos</h3>
	<form action="/customers/{{$model->id}}/action/mail" method="POST">
	{{ csrf_field() }}
	<div>
		<select name="email_id" id="email_id">
              <option value="">Seleccione una opción</option>
              @foreach($email_options as $email_option)
				<option value="{{$email_option->id}}">{{$email_option->subject}}</option>
                @endforeach
		</select>
	</div>
	<div>
		 <input type="hidden" id="customer_id" name="customer_id" value="{{$model->id}}">
		 <input class="btn btn-primary btn-sm" type="submit" value="Enviar correo">
	</div>
	</form>
</div> -->

  <table class="table table-striped">
  <thead>
    
    <th>Fecha</th>
    <th>Tipo Acción</th>
    <th>Creado por</th>
    
    <th>Descripción</th>
    <th></th>
    
  </thead>
  <tbody>
      @foreach($actions as $action)
      <tr>
      <td>
                <a href="/actions/{{$action->id}}/show">
        
          {{$action->created_at}}
                </a>
              </td>
      <td>@if(isset($action->type)&& !is_null($action->type)&& $action->type!=''){{$action->type->name}}@endif</td>
      <td>@if(isset($action->creator)&& !is_null($action->creator)&& $action->creator!=''){{$action->creator->name}}@else Automático @endif</td>
      <td>@if($action->type_id==2 || $action->type_id==4) {{$action->getEmailSubject()}} @else {{$action->note}}@endif</td>
      <td>

                <a href="/actions/{{$action->id}}/destroy">
          <span class="btn btn-sm btn-danger fa fa-trash-o" aria-hidden="true" title="Eliminar"></span>
        </a>
              </td>
      
    </tr>
    @endforeach
    
    </tbody>
</table>

  <h2>Archivos</h2>
  <form method="POST" action="/customer_files" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="form-group">
    <div class="container">
      <div class="row">
        <div class="col">Seleccione el archivo</div>
        <div class="col"><input type="file" class="form-control" id="file" name="file" placeholder="email" ></div>
        <input type="hidden" id="customer_id" name="customer_id" value="{{$model->id}}">
        <div class="col"><input type="submit" class="btn btn-sm btn-primary glyphicon glyphicon-pencil" aria-hidden="true"></div>
      </div>
    </div>
    
     
  </div>
  
  
  
</form>

  <div>
      <div class="table">
    <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  
                  <th>Url</th>
                  <th>Fecha de Creación</th>
                  
                  <th></th>
                </tr>
              </thead>
              <tbody>
                  @foreach($model->customer_files as $file)
					 <tr>
                  <th>{{$file->id}}</th>
                  
                  <th><a href="/public/files/{{$file->customer_id}}/{{$file->url}}">{{$file->url}}</a></th>
                  <th>{{$file->created_at}}</th>
                  
                  <th>
                  <a class="btn btn-danger btn-sm" href="/customer_files/{{$file->id}}/delete" title="Eliminar">Eliminar</a>
                  </th>
                </tr>
                  @endforeach                              
              </tbody>
            </table>        

      </div>
  </div>
  <br>

  <h2>Historial</h2>
    <div class="table-responsive">
    
          <ul class="list-group">
                              
           <?php $now = \Carbon\Carbon::now();?>                 
        @foreach($histories as $history)
        <?php //dd($histories[1]->user->id);?>
            <li class="list-group-item">Cambio de estado a @if (isset($history->status_id) && ($history->status_id != ''))
               <strong>{{$history->status->name}}</strong>, @endif actualizado: {{$history->updated_at}} 
               por @if(isset($history->user_id) && ($history->user_id != '') && !is_null($history->user)){{$history->user->name}} @else Automatico @endif
           
             
            <span class="badge" style="background-color: @if(isset($history->status_id) && ($history->status_id != '')) {{$history->status->color}};@else gray @endif">
<?php
                $end = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $history->updated_at);
                $years = $end->diffInYears($now);
                $months = $end->diffInMonths($now);
                $days = $end->diffInDays($now);
                $hours = $end->diffInHours($now);

                $minutes = $end->diffInMinutes($now);
                $seconds = $end->diffInSeconds($now);
                
               // dd($now);
             ?>
            @if($years>0){{ $years }} years
            @else @if ($months>0) {{ $months }} hours 
            @else @if ($days>0) {{ $days }} days 
            @else @if ($hours>0) {{ $hours }} hours 
            @else @if ($hours>0) {{ $hours }} hours 
            @else @if ($minutes>0) {{$minutes}} minutes 
            @else @if ($seconds>0) {{$seconds}} seconds 
             @endif @endif @endif @endif @endif @endif @endif
            </span></li>
        @endforeach
        <li class="list-group-item">Cambio de estado <strong>@if(isset($model->status)&& !is_null($model->status)&&$model->status!=''){{$model->status->name}}@endif</strong>
            <span class="badge" style="background-color: @if(isset($model->status)&& !is_null($model->status)&&$model->status!=''){{$model->status->color}}@else gray @endif;">
                Actual</span></li>
               </ul>
    
    </div>
@endsection
