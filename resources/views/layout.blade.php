<!DOCTYPE html>
<html>
<head>
  <title>MicroE</title>
  <link rel="stylesheet"href="/css/app.css">
  <script src="/js/app.js" defer></script>
</head>
<body style="background-color: rgb(108,178,235);">
<div class="d-flex flex-column h-screen">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <a class="navbar-brand px-3" href="#">MicroE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse px-3" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        @if(Auth::user()->infoempresa=='vacio')
        <li class="nav-item">
          <a class="nav-link" href="{{route('usuarios.index')}}">Registrar Datos</a>
        </li>
        @elseif(Auth::user()->infoempresa=='Lleno')
        <li class="nav-item">
          <a class="nav-link" href="{{route('usuarios.index')}}">Editar Datos</a>
        </li>
        @endif
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            Productos
          </a>
          <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('zapatos.create') }}">Registrar Material</a>
              <a class="dropdown-item" href="{{ route('logout') }}">Historial</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>


      <ul class="navbar-nav ml-auto" >
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Cerrar Sesión') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>

    </div>
  </nav>

  <div class="container col-md-12">
    <main>
      <br>
      @yield('content')
    </main>
  </div>

</div>
</body>

</html>