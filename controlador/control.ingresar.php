<?php session_start();

// obtenemos los metodos para hacer peticiones http
require_once('../modelo/crud.php');
$mensaje=null;
//Nombre del servicio de la ruta
$servicio ='alumno/';

if ($_SERVER['REQUEST_METHOD']=='POST') {

        $carnet = filter_var(strtolower($_POST['carnet']), FILTER_SANITIZE_STRING);
        $name = filter_var(strtolower($_POST['name']), FILTER_SANITIZE_STRING);
        $lastName = filter_var(strtolower($_POST['lastName']), FILTER_SANITIZE_STRING);
        $direction = filter_var(strtolower($_POST['direction']), FILTER_SANITIZE_STRING);
        $gender = filter_var(strtolower($_POST['gender']), FILTER_SANITIZE_STRING);
        $phone = filter_var(strtolower($_POST['phone']), FILTER_SANITIZE_STRING);
        $birth =$_POST['birth'];
        $birth = $birth.'T10:06:00Z';
        //  $birth = "2021-06-11T10:06:00Z";
        $career = filter_var(strtolower($_POST['career']), FILTER_SANITIZE_STRING);
        $poetry = filter_var(strtolower($_POST['poetry']), FILTER_SANITIZE_STRING);

          $consultas = new Matriz();

          $datos = [
                "carnet" => $carnet,
                "nombre" => $name,
                "apellidos" => $lastName,
                "direccion" => $direction,
                "genero" => $gender,
                "telefono" => $phone,
                "fechaNacimiento" => $birth,
                "carrera" => $career,
                "generoPoesia" => $poetry
                ];
                
          $mensaje = $consultas -> insertarJSON($datos,$servicio);
                
        //   var_dump(get_object_vars($mensaje));
        //  $JSON = json_encode($mensaje);
         echo $id=$mensaje->id;
          echo $carnet=$mensaje->carnet;
         echo  $name=$mensaje->nombre;
         echo  $lastName=$mensaje->apellidos;
         echo  $direccion=$mensaje->direccion;
         echo  $genero=$mensaje->genero;
         echo  $telefono=$mensaje->telefono;
         echo  $fechaNacimiento=$mensaje->fechaNacimiento;
         $fechaNacimiento = explode("T", $fechaNacimiento);
         $fechaNacimiento = $fechaNacimiento[0];
         echo  $carrera=$mensaje->carrera;
         echo  $poetry=$mensaje->generoPoesia;
         echo  $fechaInscripcion=$mensaje->fechaInscripcion;
         $fechaInscripcion = explode("T", $fechaInscripcion);
         $fechaInscripcion = $fechaInscripcion[0];
         echo  $fechaExposicion=$mensaje->fechaExposicion;
         $fechaExposicion = explode("T", $fechaExposicion);
         $fechaExposicion = $fechaExposicion[0];
        //  var_dump($JSON);
        //  echo $JSON->telefono;
          // echo $mensaje->data['carnet'];
          // foreach ($mensaje as $row) {
          //   echo $row['id'];
          // }
          // echo $mensaje[5];
            header('Location: ../vista/inscrito.php?carnet='.$carnet.'&id='.$id.'&name='.$name.'&lastName='.$lastName.'&direccion='.$direccion
            .'&genero='.$genero.'&telefono='.$telefono.'&fechaNacimiento='.$fechaNacimiento.'&carrera='.$carrera.'&poetry='.$poetry.'&fechaInscripcion='.$fechaInscripcion
            .'&fechaExposicion='.$fechaExposicion);
        }
 ?>