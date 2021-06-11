<?php include('./../vista/menu/menu.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Alumnos inscritos</title>
    <script src="../media/js/jquery-1.10.2.js"></script>
    <script src="../media/js/jquery.dataTables.min.js"></script>
    <script src="../media/js/dataTables.bootstrap.min.js"></script>
    <!--
  Al hacer esto ya no interrumpe con el menu por el bootstrap
  <script src="../media/js/bootstrap.js"></script> -->
    <script src="../media/js/TraePersonas.js"></script>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="ModalDePago" tabindex="-1" role="dialog" aria-labelledby="ModalDePago" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="ModalDePago">Ingresa los datos</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="" action="../Controlador/Egresos/control.egresos.php" method="post">
                             
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon" id="txtEmpresa">Egreso</span>
                                <input type="text" name="Nombre" class="form-control" placeholder="Nombre del gasto" aria-describedby="basic-addon1" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon" id="TxtComprobante">No Comprobante</span>
                                <input type="text" name="Comprobante" class="form-control" placeholder="No de comprobante" aria-describedby="basic-addon1" required>
                            </div>                    
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon" id="TxtDescripcion">Descripcion</span>
                                <input type="text" name="Descripcion" class="form-control" placeholder="Descripcion" aria-describedby="basic-addon1" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon" id="txtEmpresa">Monto</span>
                                <input type="number" name="Monto" class="form-control" placeholder="Monto" aria-describedby="basic-addon1" required>
                            </div>
                            <br>
                            <div>
                                <input type="submit" class="btn btn-primary" role="button" value="Guardar"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                            </div>
                        </div>
                    </form>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                </div>
            </div>
        </div>
    </div>


    <div class="col-md-8 col-md-offset-2">
        <table id="Encabezado" style="width:100%">

            <tbody>
                <tr>
                    <td>

                        <script>
                            window.onload = function() {
                                var fecha = new Date(); //Fecha actual
                                var mes = fecha.getMonth() + 1; //obteniendo mes
                                var dia = fecha.getDate(); //obteniendo dia
                                var ano = fecha.getFullYear(); //obteniendo año
                                if (dia < 10)
                                    dia = '0' + dia; //agrega cero si el menor de 10
                                if (mes < 10)
                                    mes = '0' + mes //agrega cero si el menor de 10
                                document.getElementById('fechaActual').value = ano + "-" + mes + "-" + dia;
                            }
                        </script>
                        <input type="date" id="fechaActual" readonly>

                    </td>

                    <td>
                        <p> </p>
                        <h1>--------Lista de Alumnos--------<h1>

                    </td>
                    <td>
                        <p> </p>
                    </td>
                    <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalDePago">
                            Ingresar Egreso
                        </button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-8 col-md-offset-2">
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
    </div>
</body>

</html>