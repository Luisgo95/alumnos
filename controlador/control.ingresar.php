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
        $birth = filter_var(strtolower($_POST['birth']), FILTER_SANITIZE_STRING);
        // $birth = "2021-06-11T10:06:00Z";
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
                "generoPoesia" => $poetry,
                "fechaInscripcion"=>$birth,
                "fechaExposicion"=>$birth
                ];
              //   var_dump($datos);

         $mensaje = $consultas -> insertarJSON($datos,$servicio);
         echo $mensaje;
        //    header('Location: ../../vista/inscrito.php');
        }
 ?>