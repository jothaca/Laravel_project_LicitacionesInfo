<?php $__env->startSection('content'); ?>
<h1>Crear Cliente</h1>

<form method="POST" action="/laravel/public/customers/update">
<?php echo e(csrf_field()); ?>

<fieldset class="scheduler-border">
  <legend class="scheduler-border">Datos Personales:</legend>
  <div class="row">
        <div class="col-sm-3">
        <div class="form-group">
          <label for="name">Nombre:</label>
        <input type="text" class="form-control" id="name" name="name"  value="<?php echo e($model->name); ?>">
        </div>
        </div>
        <div class="col-sm-3">
           <div class="form-group">
            <label for="phone">Acción:</label>
            <input type="number" class="form-control" id="id_action" name="id_action"  value="<?php echo e($model->id_action); ?>">
          </div>
        </div>
        
        
        <div class="col-sm-3">
          <div class="form-group">
            <label for="country">Estado:</label>
            <input type="text" class="form-control" id="state" name="state" value="<?php echo e($model->state); ?>">
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label for="department">Descripción:</label>
            <input type="text" class="form-control" id="description" name="description" value="<?php echo e($model->description); ?>">
          </div>
        </div>
        <input type="hidden" class="hidden" id="id" name="id" value="<?php echo e($model->id); ?>">
  </div> 
  </div>

  <button type="submit" class="btn-primary form-control col-2">Actualizar</button>
</form> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>