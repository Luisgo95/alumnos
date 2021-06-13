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
    <h1>Felicitaciones ya estas inscrito estos son tus datos</h1>
    <section class="main row">
    <form class="" name="myForm" action="#"  method="post">
                
                                <br>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                        <label for="name" class="form-label">Codigo</label>
                                        <input type="text" name ="carnet" placeholder="Carnet" class="form-control" id="carnet"value="<?php echo $_GET['id']; ?>">
                                        </div>
                                        <div class="mb-3">
                                        <label for="name" class="form-label">Carnet</label>
                                        <input type="text" name ="carnet" placeholder="Carnet" class="form-control" id="carnet"value="<?php echo $_GET['carnet']; ?>">
                                        </div>
                                        <div class="mb-3">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input type="text" name ="name" placeholder="Nombre"  class="form-control" id="name"value="<?php echo $_GET['name']; ?>">
                                        </div>

                                        <div class="mb-3">
                                        <label for="name" class="form-label">Apellidos</label>
                                        <input type="text" name ="lastName" placeholder="Apellidos"  class="form-control" id="apellidos"value="<?php echo $_GET['lastName']; ?>">
                                        </div>
                                        <div class="mb-3">
                                        <label for="name" class="form-label">Dirección</label>
                                        <input type="text" name ="direction" placeholder="Dirección"  class="form-control" id="apellidos"value="<?php echo $_GET['direccion']; ?>">
                                        </div>
                                        <div class="mb-3">
                                        <label for="name" class="form-label">Género</label>
                                        <select name ="gender" class="form-control" > 
                                        <?php 
                                        echo '<option value="' . $_GET['genero'] . '">' . $_GET['genero'] . '</option>';
                                        ?>
                                          <!-- <option selected>Selecciona tu género</option> -->
                                          <option value="Masculino">Masculino</option>
                                          <option value="Femenino">Femenino</option>
                                        </select>
                                        </div>
                              
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                        <label for="name" class="form-label">Telefono</label>
                                        <input type="text" name ="phone" placeholder="Telefono"  class="form-control" id="phone"value="<?php echo $_GET['telefono']; ?>">
                                        </div>
                                        <div class="mb-3">
                                        <label for="name" class="form-label">fecha de Nacimiento</label>
                                        <input type="date" name ="birth" placeholder="Fecha de Nacimiento"  class="form-control" id="birth" value="<?php echo $_GET['fechaNacimiento']; ?>">
                                        </div>

                                        <div class="mb-3">
                                        <label for="name" class="form-label">Carrera</label>
                                        <input type="text" name ="career" placeholder="Carrera"  class="form-control" id="career"value="<?php echo $_GET['carrera']; ?>">
                                        </div>
                                        <div class="mb-3">
                                        <label for="name" class="form-label">Genero de poesía</label>
                                        <select name ="poetry" class="form-control">
                                        <?php 
                                        echo '<option value="' . $_GET['poetry'] . '">' . $_GET['poetry'] . '</option>';
                                        ?>
                                          <!-- <option selected>Selecciona tu género</option> -->
                                          <option value="Lírica">Lírica</option>
                                          <option value="épica">épica</option>
                                          <option value="dramática">dramática</option>
                                        </select>
                                        
                                        <div class="mb-3">
                                        <label for="name" class="form-label">fecha de Inscripción</label>
                                        <input type="date" name ="birth" placeholder="Fecha de Nacimiento"  class="form-control" id="birth"value="<?php echo $_GET['fechaInscripcion']; ?>">
                                        </div>
                                        
                                        <div class="mb-3">
                                        <label for="name" class="form-label">fecha de Exposicion</label>
                                        <input type="date" name ="birth" placeholder="Fecha de Nacimiento"  class="form-control" id="birth"value="<?php echo $_GET['fechaExposicion']; ?>">
                                        </div>
                                    </div>

                               
                        <br> 
                        
                        <a class="btn btn-primary" href="http://localhost/universidad/vista/bienvenido.php" role="button">Regresar</a> 
                        </div>
                    </form>
             </section>
                                      <!-- <input type="submit" class="btn btn-primary" role="button" value="Guardar"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> -->
                             
                                      <!-- <button type="submit" class="btn btn-danger" data-dismiss="modal">Regresar</button> -->
                       
      </div>


</body>
</html>