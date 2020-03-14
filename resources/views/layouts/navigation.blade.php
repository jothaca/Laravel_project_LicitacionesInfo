     <nav class="navbar navbar-expand-md navbar-white fixed-top bg-white">
      
      <button class="navbar-toggler d-lg-none collapsed" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarsExampleDefault" style="">
        <ul class="navbar-nav mr-auto">
          
          @if (Auth::guest())
          <li class="nav-item"><a class="nav-link" href="/laravel/public/register">Registrarse</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Iniciar Sesion</a></li>
          @else

          

              <li class="dropdown">
                  <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
              </li>
              <li>

                <li class="nav-item">
                  <a class="nav-link" href="{{route('customers')}}">Clientes</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="{{route('actions')}}">Acciones</a>
                </li>
                
                {{-- <li class="nav-item">
                  <a class="nav-link" href="/config">Configuracion</a>
                </li> --}}
              </li>
          @endif
        </ul>
          

        @if (!Auth::guest())
          <li>
              <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                  Salir
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                  {{ csrf_field() }}
                  
              </form>
          </li>
        @endif
      </div>
    </nav>