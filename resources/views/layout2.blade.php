<!DOCTYPE html>
<html>
<head>
  <title>MicroE</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="js/pinterest_grid.js"></script>


  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/lumen/bootstrap.min.css" rel="stylesheet">

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="/css/main.css">




</head>
<body style="background-image: url(/img/img2.jpg);background-repeat: no-repeat;background-image: fixed;background-image: center;background-size: cover;">
<div class="d-flex flex-column h-screen">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <a class="navbar-brand px-3" href="#">MicroE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse px-3" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item">
          <a class="nav-link" href="{{route('productos.index')}}">¡Catálogo de Productos!</a>
        </li>

      </ul>


      <ul class="navbar-nav ml-auto" >
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('¡Registrate!') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Volver</a>
              </li>
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

  <div >
   
    <div class="container col-md-12">
    <main>
      <br>
      @yield('content')
    </main>
  </div>
  </div>
  
  
</div>
</body>

</html>