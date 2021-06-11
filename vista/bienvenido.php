<?php
include('./../vista/menu/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <h1>Bienvenido</h1>
    <form class="" name="myForm" action="../controlador/control.ingresar.php"  onsubmit="return validateForm()" method="post">
                    <div class="modal-body">
                            <section class="main row">
                                <br>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                        <label for="name" class="form-label">Carnet</label>
                                        <input type="text" name ="carnet" class="form-control" id="carnet">
                                        </div>
                                        <div class="mb-3">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input type="text" name ="name" class="form-control" id="name">
                                        </div>

                                        <div class="mb-3">
                                        <label for="name" class="form-label">Apellidos</label>
                                        <input type="text" name ="lastName" class="form-control" id="apellidos">
                                        </div>
                                        <div class="mb-3">
                                        <label for="name" class="form-label">Direccion</label>
                                        <input type="text" name ="direction" class="form-control" id="apellidos">
                                        </div>
                                        <div class="mb-3">
                                        <label for="name" class="form-label">Género</label>
                                        <select name ="gender" class="form-select" aria-label="Default select example">
                                          <option selected>Selecciona tu género</option>
                                          <option value="Masculino">Masculino</option>
                                          <option value="Femenino">Femenino</option>
                                        </select>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                        <label for="name" class="form-label">Telefono</label>
                                        <input type="text" name ="phone" class="form-control" id="phone">
                                        </div>
                                        <div class="mb-3">
                                        <label for="name" class="form-label">fecha de Nacimiento</label>
                                        <input type="date" name ="birth" class="form-control" id="birth">
                                        </div>

                                        <div class="mb-3">
                                        <label for="name" class="form-label">Carrera</label>
                                        <input type="text" name ="career" class="form-control" id="career">
                                        </div>
                                        <div class="mb-3">
                                        <label for="name" class="form-label">Genero de poesía</label>
                                        <select name ="poetry" class="form-select" aria-label="Default select example">
                                          <option selected>Selecciona tu género</option>
                                          <option value="Lírica">Lírica</option>
                                          <option value="épica">épica</option>
                                          <option value="dramática">dramática</option>
                                        </select>
                                        </div>

                                    </div>
                            </section>
                    </div>
                    <div class="modal-footer">
                                    <div class="">
                                        <input type="submit" class="btn btn-primary" role="button" value="Guardar"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i>

                                        <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    </div>
                                </div>
                </form>
<script src="../vista/validacion.js"></script>

</body>
</html>