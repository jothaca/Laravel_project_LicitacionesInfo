<?php $__env->startSection('content'); ?>
<h1>Crear Cliente</h1>

<form method="POST" action="/laravel/public/customers/store">
<?php echo e(csrf_field()); ?>

<fieldset class="scheduler-border">
  <legend class="scheduler-border">Datos Personales:</legend>
  <div class="row">
        <div class="col-sm-3">
        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="">
        </div>
        </div>
        <div class="col-sm-3">
           <div class="form-group">
            <label for="phone">Acción:</label>
            <input type="number" class="form-control" id="id_action" name="id_action" placeholder="Acción">
          </div>
        </div>
        
        
        <div class="col-sm-3">
          <div class="form-group">
            <label for="country">Estado:</label>
            <input type="text" class="form-control" id="state" name="state" placeholder="Estado">
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label for="department">Descripción:</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Descripción">
          </div>
        </div>
        
  </div> 
  </div>

  <button type="submit" class="btn-primary form-control col-2">Crear</button>
</form> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>