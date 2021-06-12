<?php 
 include('./../vista/menu/menu.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Alumnos inscritos</title>
    <!-- <script src="../media/js/jquery-1.10.2.js"></script>
    <script src="../media/js/jquery.dataTables.min.js"></script>
    <script src="../media/js/dataTables.bootstrap.min.js"></script> -->
    <script src="../media/js/TraePersonas.js"></script>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <!-- <script src="../../media/js/jquery-1.10.2.js"></script> -->

    <!--
  Al hacer esto ya no interrumpe con el menu por el bootstrap
  <script src="../media/js/bootstrap.js"></script> -->

</head>

<body>
<!-- <div class="container"> -->
      <div class="col-md-8 col-md-offset-2">
        <table id="Encabezado" style="width:100%">

            <tbody>
                       <h1>Lista de Alumnos<h1>
            </tbody>
        </table>
 
        <table id="tablaAlumnos" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre </th>
                    <th>No boleta </th>
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                    <th>Usuario</th>
                    <th>Acciones</th>
                    <th>Cantidad</th>
                    <th>Usuario</th>
                    <th>Acciones</th>
                    <th>Cantidad</th>
                    <th>Usuario</th>

                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
                <tr>
                     <th>Codigo</th>
                    <th>Nombre </th>
                    <th>No boleta </th>
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                    <th>Usuario</th>
                    <th>Acciones</th>
                    <th>Cantidad</th>
                    <th>Usuario</th>
                    <th>Acciones</th>
                    <th>Cantidad</th>
                    <th>Usuario</th>
                </tr>
            </tfoot>
        </table>
    <!-- </div> -->
  
</body>

</html>