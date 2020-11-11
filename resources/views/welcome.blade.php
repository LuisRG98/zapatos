
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
      <img src="/img/loguito.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
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
        </div>
      </div>



      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
          <li class="nav-item ">
            <a href="{{ route('login') }}" class="d nav-link " style="color: white">
              <i class="fas fa-sign-out-alt nav-icon"></i>
              <p>
                Iniciar Sesión
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{ route('register') }}" class="d nav-link " style="color: white">
              <i class="fas fa-sign-out-alt nav-icon"></i>
              <p>
                Registrate
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{route('productos.index')}}" class="d nav-link " style="color: white">
              <i class="fas fa-sign-out-alt nav-icon"></i>
              <p>
                Catálogo de Productos
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
  <div class="content-wrapper" style="background-image: url(/img/img1.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: cover">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <center>
        <h3>Bienvenidos</h3>
      </center>
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
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
  <img width="197px" src="/storage/img/profilespics/dis.png">
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
