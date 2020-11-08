
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="csrf-token" content="{{csrf_token()}}">

<title>Zapatos</title>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>


<link rel="stylesheet" href="{{mix('css/app.css')}}">
<script type="text/javascript" src="{{mix('js/app.js')}}" defer></script>

<style>
a.d:hover
{
  background-color: rgb(52,144,211);color: white;
}
</style>

</head>
<body class="hold-transition sidebar-mini" >
<div class="wrapper" >

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar  elevation-4"  style="background-color:#273746">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/img/fondo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">MicroE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- <img src="/img/user.png" class="img-circle elevation-2" alt="User Image">
          <img height="100" src="{{Storage::url(auth()->user()->avatar)}}" class="img-circle elevation-2" alt="User Image"> --}}
        </div>
        <br>
        <div class="info">
          <a href="/usuarios/{{auth()->user()->id}}/edit" class="d-block">
            {{auth()->user()->name}}</a>
        </div>
      </div>



      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          {{-- <li class="nav-item has-treeview ">
            <a href="#" class="d nav-link {{setActive('usuarios.*')}}"style="color: white">
              <i class="fas fa-user-friends nav-icon "></i>
              <p class="" >
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('usuarios.index')}}" class="nav-link px-4" >
                  <i class="fas fa-address-book nav-icon"></i>
                  <p>Listado</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('usuarios.create')}}" class="nav-link px-4" >
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Nuevo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('edi')}}" class="nav-link px-4" >
                  <i class="fas fa-user-edit nav-icon"></i>
                  <p>Editar</p>
                </a>
              </li>
              @if(auth()->user()->remember_token)
              <li class="nav-item">
                <a href="/reset/{{auth()->user()->id}}" class="nav-link px-4" >
                  <i class="fas fa-key nav-icon"></i>
                  <p>Restablecer</p>
                </a>
              </li>
              @else
              <li class="nav-item">
                <a href="{{route('cambio')}}" class="nav-link px-4" >
                  <i class="fas fa-key nav-icon"></i>
                  <p>Cambiar Contraseña</p>
                </a>
              </li>
              @endif
            </ul>
          </li> --}}



          <li class="nav-item has-treeview ">
            <a href="#" class="d nav-link {{setActive('zapatos.*')}}" style="color: white">
              <i class="fas fa-shoe-prints nav-icon"></i>
              <p>
                ¡Productos!
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('produccion.index')}}" class="nav-link px-4" >
                  
                  <i class="fas fa-plus nav-icon"></i>
                  <p>¡Registrar tus producción!</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('zapatos.index')}}" class="nav-link px-4" >
                  
                  <i class="fas fa-list-ul nav-icon"></i>
                  <p>Listado de productos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('insumos.index')}}" class="nav-link px-4" >
                  <i class="fas fa-list-ul nav-icon"></i>
                  <p>Listado de insumos</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview ">
            <a href="#" class="d nav-link {{setActive('zapatos.*')}}" style="color: white">
              <i class="fas fa-shoe-prints nav-icon"></i>
              <p>
                ¡Registra!
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              @if(auth()->user()->infoempresa=="vacio")
              <li class="nav-item">
                <a href="{{route('usuarios.index')}}" class="nav-link px-4" >
                  <i class="fas fa-plus nav-icon"></i>
                  <p>¡Empresa!</p>
                </a>
              </li>
              @endif

              @if(auth()->user()->infoempresa=="Casi")
              <li class="nav-item">
                <a href="{{route('insumos.create')}}" class="nav-link px-4" >
                  <i class="fas fa-plus nav-icon"></i>
                  <p>¡Principal Insumo!</p>
                </a>
              </li>
              @endif
              <label hidden="hidden">{{$idecito=auth()->user()->id}}</label>
              @if(auth()->user()->infoempresa=="Lleno")
              <li class="nav-item">
                <a href="{{route('zapatos.create') }}" class="nav-link px-4">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>¡Productos!</p>
                </a>
              </li>
              @endif
            </ul>
          </li>


          <li class="nav-item has-treeview ">
            <a href="#" class="d nav-link {{setActive('ventas.*')}}" style="color: white">
              <i class="fas fa-user-tie nav-icon"></i>
              <p>
                ¡Ventas!
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">   
              <li class="nav-item">
                <a href="{{ route('ventas.create')}}" class="nav-link px-4" >
                  <i class="fas fa-book-open nav-icon"></i>
                  <p>¡Historial de ventas!</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('ventas.index')}}" class="nav-link px-4" >
                  <i class="fas fa-id-badge nav-icon"></i>
                  <p>¡Realiza una venta!</p>
                </a>
              </li>
            </ul>
          </li>


          {{-- <li class="nav-item has-treeview ">
            <a href="#" class="d nav-link" style="color: white">
              <i class="fas fa-file-alt nav-icon"></i>
              <p class="">
                Reportes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('reports.index')}}" class="nav-link px-4" >
                  <i class="fas fa-id-card nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('reports.create')}}" class="nav-link px-4">
                  <i class="fas fa-anchor nav-icon"></i>
                  <p>Embarcaciones</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('avanzado')}}" class="nav-link px-4">
                  <i class="fas fa-atlas nav-icon"></i>
                  <p>Avanzado</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('historics.index')}}" class="nav-link px-4">
                  <i class="fas fa-info nav-icon"></i>
                  <p>Historios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('stats.index')}}" class="nav-link px-4" >
                  <i class="fas fa-chart-pie nav-icon"></i>
                  <p>Estadisticas</p>
                </a>
              </li>
            </ul>
          </li> --}}


          <li class="nav-item">
            <a href="#" class="nav-link"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" style="color: white">
              <i class="fas fa-sign-out-alt nav-icon"></i>
              <p>
                Cerrar Sesión
              </p>
            </a>
          </li>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->


    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:#abb2B9">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 px-3 text-dark display-6"><b> VENTA DE ZAPATOS</b></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item text-dark" style="text-decoration: none; margin-right: 30px"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active" style="margin-right: 30px">Página de Inicio</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" >
      <div class="container-fluid">
        @yield('content')
        @include('sweetalert::alert')
        <br>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->

    <!-- Default to the left -->
    <strong>Copyright &copy;  2020 <a href="http://www.mindef.gob.bo/maritima/unidad_de%20_marina_mercante.html">MicroE La Paz- Bolivia</a>.</strong> Todos los derechos reservados.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
</body>
</html>
