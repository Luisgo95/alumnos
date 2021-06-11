<?php
session_start();
include('class.conexion.php');

class Matriz
{

  public function insertarJSON($datos, $servicio)
  {
    try {
      $modelo = new Conexion();
      $conexion = $modelo->URL();

      $nuevo = $conexion . $servicio;
      // Los codificamos
      $datosCodificados = json_encode($datos);
      // Comenzar a crear el objeto de curl
      # A dónde se hace la petición...
      $ch = curl_init($nuevo);
      # Ahora le ponemos todas las opciones
        curl_setopt_array($ch, array(
        // Indicar que vamos a hacer una petición POST
        CURLOPT_CUSTOMREQUEST => "POST",
        // Justo aquí ponemos los datos dentro del cuerpo
        CURLOPT_POSTFIELDS => $datosCodificados,
        // Encabezados
        //CURLOPT_HEADER => true,
        CURLOPT_HTTPHEADER => array(
          'Content-Type: application/json',
          'Authorization: Bearer '.$_SESSION['Token'],
          'Content-Length: ' . strlen($datosCodificados), // Abajo podríamos agregar más encabezados
          'Personalizado: Luis te saluda', # Un encabezado personalizado
        ),
        # indicar que regrese los datos, no que los imprima directamente
        CURLOPT_RETURNTRANSFER => true,
      ));
      # Hora de hacer la petición
      $resultado = curl_exec($ch);
      # Vemos si el código es 200, es decir, HTTP_OK
      $codigoRespuesta = curl_getinfo($ch, CURLINFO_HTTP_CODE);
      if ($codigoRespuesta === 200) {
        # Decodificar JSON porque esa es la respuesta
        $respuestaDecodificada = json_decode($resultado);
       // $respuestaDecodificada =$resultado;

        $_SESSION['Mensaje'] = 200;
        return $respuestaDecodificada;
        # Simplemente los imprimimos
      } else {
        # Error
        $_SESSION['Mensaje'] = 500;
        echo "Error consultando. Código de respuesta: $codigoRespuesta";
      }

      curl_close($ch);
    } catch (\Exception $e) {
      echo $e;
    }
  }

  public function leerlugar($servicio)
  {
    try {
      $modelo = new Conexion();
      $conexion = $modelo->URL();
      $nuevo = $conexion . $servicio;
      //echo $nuevo;
      $curl = curl_init($nuevo);
      curl_setopt_array($curl, array(
        CURLOPT_URL =>  $nuevo,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer '.$_SESSION['Token'],
          "cache-control: no-cache"
        ),
      ));
      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      //decode convierte un convierte un JSON en un objeto Array.
      $response = json_decode($response, true); //because of true, it's in an array
      //echo 'Online: '. $response['players']['online'];
      return $response;
    } catch (\Exception $e) {
      echo $e;
    }
  }
  public function ObtenerPorId($servicio, $Id)
  {
    try {
      $modelo = new Conexion();
      $conexion = $modelo->URL();

      $nuevo = $conexion . $servicio . $Id;
      //echo $nuevo;
      $curl = curl_init($nuevo);
      curl_setopt_array($curl, array(
        CURLOPT_URL =>  $nuevo,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer '.$_SESSION['Token'],
          "cache-control: no-cache"
        ),
      ));
      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      //decode convierte un convierte un JSON en un objeto Array.
      $response = json_decode($response, true); //because of true, it's in an array
      //echo 'Online: '. $response['players']['online'];
      return $response;
    } catch (\Exception $e) {
      echo $e;
    }
  }
//-----------------------------------------
public function Eliminar($servicio, $Id)
  {
    try {
      $modelo = new Conexion();
      $conexion = $modelo->URL();

      $nuevo = $conexion . $servicio.'/'.$Id;
      //echo $nuevo;
      $curl = curl_init($nuevo);
      curl_setopt_array($curl, array(
        CURLOPT_URL =>  $nuevo,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "DELETE",
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer '.$_SESSION['Token'],
          "cache-control: no-cache"
        ),
      ));
      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      //decode convierte un convierte un JSON en un objeto Array.
      $response = json_decode($response, true); //because of true, it's in an array
      //echo 'Online: '. $response['players']['online'];
      return $response;
    } catch (\Exception $e) {
      echo $e;
    }
  }


public function ActualizarJSON($datos, $servicio)
  {
    try {
      $modelo = new Conexion();
      $conexion = $modelo->URL();

      $nuevo = $conexion . $servicio;
      // Los codificamos
       $datosCodificados = json_encode($datos);
      // Comenzar a crear el objeto de curl
      # A dónde se hace la petición...
      $ch = curl_init($nuevo);
      # Ahora le ponemos todas las opciones
        curl_setopt_array($ch, array(
        // Indicar que vamos a hacer una petición POST
        CURLOPT_CUSTOMREQUEST => "PUT",
        // Justo aquí ponemos los datos dentro del cuerpo
        CURLOPT_POSTFIELDS => $datosCodificados,
        // Encabezados
        //CURLOPT_HEADER => true,
        CURLOPT_HTTPHEADER => array(
          'Content-Type: application/json',
          'Authorization: Bearer '.$_SESSION['Token'],
          'Content-Length: ' . strlen($datosCodificados), // Abajo podríamos agregar más encabezados
          'Personalizado: ¡Xpro!', # Un encabezado personalizado
        ),
        # indicar que regrese los datos, no que los imprima directamente
        CURLOPT_RETURNTRANSFER => true,
      ));
      # Hora de hacer la petición
      $resultado = curl_exec($ch);
      # Vemos si el código es 200, es decir, HTTP_OK
      $codigoRespuesta = curl_getinfo($ch, CURLINFO_HTTP_CODE);
      if ($codigoRespuesta === 200) {
        # Decodificar JSON porque esa es la respuesta
        $respuestaDecodificada = json_decode($resultado);
       // $respuestaDecodificada =$resultado;

        $_SESSION['Mensaje'] = 200;
        return $respuestaDecodificada;
        # Simplemente los imprimimos
      } else {
        # Error
        $_SESSION['Mensaje'] = 500;
        echo "Error consultando. Código de respuesta: $codigoRespuesta";
      }

      curl_close($ch);
    } catch (\Exception $e) {
      echo $e;
    }
  }

}
