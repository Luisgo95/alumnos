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
   
</head>
<body>
  <div class="container">
    <h1>Bienvenido</h1>
    <form class="" name="myForm" action="../controlador/control.ingresar.php"  onsubmit="return validateForm()" method="post">
          <section class="main row">
                
                                <br>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                        <label for="name" class="form-label">Carnet</label>
                                        <input type="text" name ="carnet" placeholder="Carnet" class="form-control" id="carnet">
                                        </div>
                                        <div class="mb-3">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input type="text" name ="name" placeholder="Nombre"  class="form-control" id="name">
                                        </div>

                                        <div class="mb-3">
                                        <label for="name" class="form-label">Apellidos</label>
                                        <input type="text" name ="lastName" placeholder="Apellidos"  class="form-control" id="apellidos">
                                        </div>
                                        <div class="mb-3">
                                        <label for="name" class="form-label">Dirección</label>
                                        <input type="text" name ="direction" placeholder="Dirección"  class="form-control" id="apellidos">
                                        </div>
                                        <div class="mb-3">
                                        <label for="name" class="form-label">Género</label>
                                        <select name ="gender" class="form-control" >
                                          <option selected>Selecciona tu género</option>
                                          <option value="Masculino">Masculino</option>
                                          <option value="Femenino">Femenino</option>
                                        </select>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                        <label for="name" class="form-label">Telefono</label>
                                        <input type="text" name ="phone" placeholder="Telefono"  class="form-control" id="phone">
                                        </div>
                                        <div class="mb-3">
                                        <label for="name" class="form-label">fecha de Nacimiento</label>
                                        <input type="date" name ="birth" placeholder="Fecha de Nacimiento"  class="form-control" id="birth">
                                        </div>

                                        <div class="mb-3">
                                        <label for="name" class="form-label">Carrera</label>
                                        <input type="text" name ="career" placeholder="Carrera"  class="form-control" id="career">
                                        </div>
                                        <div class="mb-3">
                                        <label for="name" class="form-label">Genero de poesía</label>
                                        <select name ="poetry" class="form-control">
                                          <option selected>Selecciona tu género</option>
                                          <option value="Lirica">Lírica</option>
                                          <option value="epica">épica</option>
                                          <option value="dramatica">dramática</option>
                                        </select>
                                        </div>

                               
                        <br> 
            
             
                                      <input type="submit" class="btn btn-primary" role="button" value="Guardar"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                                      
                                      <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                      </div>
                                    </section>
      </form>
      </div>
<script src="../vista/validacion.js"></script>

</body>
</html>