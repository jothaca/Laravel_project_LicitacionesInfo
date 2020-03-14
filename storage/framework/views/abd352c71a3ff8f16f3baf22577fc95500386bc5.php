<?php $__env->startSection('content'); ?>
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
      <?php $__currentLoopData = $model; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <?php echo e($item->name); ?>

            </td>
            <td>
                <?php echo e($item->description); ?>

              </td>
              <td>
                <a href="customers/<?php echo e($item->id); ?>/edit"><span class="btn btn-sm btn-primary fa fa-trash-o" aria-hidden="true" title="Editar">Editar</span></a>
              </td>
              <td>
                <a href="customers/<?php echo e($item->id); ?>/delete"><span class="btn btn-sm btn-danger fa fa-trash-o" aria-hidden="true" title="Eliminar">Eliminar</span></a>
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