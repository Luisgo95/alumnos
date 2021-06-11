<!DOCTYPE html>
<html lang="en" dir="ltr">

<header>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" href="../bienvenido/bienvenido.php">Inicio</a>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Usuarios</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="../usuarios/usuarios.view.php">Ingresar</a>
        <div class="dropdown-divider"></div>
         </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Roles</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="../roles/roles.view.php">Ingresar</a>
        <div class="dropdown-divider"></div>

       </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Departamentos</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="../departamentos/departamentos.view.php">Ingresar</a>
        <div class="dropdown-divider"></div>
        </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Municipios</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="../municipios/municipios.view.php">Ingresar</a>
        <div class="dropdown-divider"></div>
         </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Comunidades</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="../comunidades/comunidades.view.php">Ingresar</a>
        <div class="dropdown-divider"></div>
         </div>
    </li>



    <li class="nav-item dropdown">
      <a class="icono izquierda fa fa-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Bienvenido</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="../../modelo/login/logout.php">Salir</a>
      </div>
    </li>

</header>

<body>
  <script src="../../media/js/jquery-1.10.2.js"></script>
  <script src="../../media/js/jquery.dataTables.min.js"></script>
  <script src="../../media/js/dataTables.bootstrap.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>