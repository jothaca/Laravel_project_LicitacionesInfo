     <nav class="navbar navbar-expand-md navbar-white fixed-top bg-white">
      
      <button class="navbar-toggler d-lg-none collapsed" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarsExampleDefault" style="">
        <ul class="navbar-nav mr-auto">
          
          <?php if(Auth::guest()): ?>
          <li class="nav-item"><a class="nav-link" href="/laravel/public/register">Registrarse</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>">Iniciar Sesion</a></li>
          <?php else: ?>

          

              <li class="dropdown">
                  <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                  </a>
              </li>
              <li>

                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('customers')); ?>">Clientes</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('actions')); ?>">Acciones</a>
                </li>
                
                
              </li>
          <?php endif; ?>
        </ul>
          

        <?php if(!Auth::guest()): ?>
          <li>
              <a href="<?php echo e(route('logout')); ?>"
                  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                  Salir
              </a>

              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                  <?php echo e(csrf_field()); ?>

                  
              </form>
          </li>
        <?php endif; ?>
      </div>
    </nav>