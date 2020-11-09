 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
     <link rel="stylesheet"href="/css/app.css">
  <script src="/js/app.js" defer></script>
 </head>
 <body style="background-image: url(/img/img1.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: cover">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <a class="navbar-brand px-3" href="#">MicroE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse px-3" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto" >
        <li class="nav-item">
          <a class="nav-link" href="{{route('productos.index')}}">¡Catálogo de Productos!</a>
        </li>
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
  <div class="container">
        
        
          
        <img src="/img/loguito.png">
        <center>
        <h1 style="color: white;border: 1px">Bienvenidos</h1>
        
        </center>
  </div>
 
 </body>
 </html>