<?php $__env->startSection('content'); ?>
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
      <?php $__currentLoopData = $actionsEnds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <?php echo e($item->type); ?>

            </td>
            <td>
                <?php echo e($item->customer->name); ?>

              </td>
              <td>
                <?php echo e($item->state); ?>

              </td>
              <td>
                <a href="actions/<?php echo e($item->id); ?>/delete"><span class="btn btn-sm btn-danger fa fa-trash-o" aria-hidden="true" title="Eliminar">Eliminar</span></a>
              </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
      <?php $__currentLoopData = $actionsMay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <?php echo e($item->type); ?>

            </td>
            <td>
                <?php echo e($item->customer->name); ?>

              </td>
              <td>
                <?php echo e($item->state); ?>

              </td>
              <td>
                <a href="actions/<?php echo e($item->id); ?>/delete"><span class="btn btn-sm btn-danger fa fa-trash-o" aria-hidden="true" title="Eliminar">Eliminar</span></a>
              </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <tbody>

      </tbody>
    </table>
     

  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>