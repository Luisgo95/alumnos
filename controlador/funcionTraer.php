<?php
//   require_once('../Verificacion.php');
require_once('../modelo/crud.php');
$pagination=1;
// session_start();
	///$modelo = new Conexion();c
    // $servicio ='alumno/?page='.$pagination;
    $servicio ='alumno/';
	// echo $servicio;
	$Peticion = new Matriz();
	$consulta = $Peticion->leerlugar($servicio);

	$data =$consulta['results'];
	// var_dump($data);
$tabla="";
foreach ($data as $row) {
// 	$editar = '<a   href=\"editarMarcas.view.php?a='.$row['id'].'&b='.$row['Nombres'].'&c='.$row['Apellidos']
// .'\"data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
// $eliminar = '<a href=\"../Controlador/Personas/control.eliminar.php?id='.$row['id'].'\" onclick=\"return confirm(\'¿Seguro que desea eliminiar este objeto?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';
// $Gestion = '<a href=\"Temporal.view.php?a='.$row['id'].'&b='.$row['Nombres'].'&c='.$row['Apellidos'].'&d='.$row['Nit'].'&Tel='.$row['Telefono'].'\" onclick=\"return confirm(\'¿ Desea agregar Un tramite ?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Tramite\" class=\"btn btn-success\"><i class=\"glyphicon glyphicon-new-window\" aria-hidden=\"true\"></i></a>';
	$naci =date_create($row['fechaNacimiento']);
	$nacimiento = date_format($naci,"d/m/Y");

	$inscrip =date_create($row['fechaInscripcion']);
	$inscripcion = date_format($inscrip,"d/m/Y");

	$expo =date_create($row['fechaExposicion']);
	$exposicion = date_format($expo,"d/m/Y");
	
	$tabla.='{
		"id":"'.$row['id'].'",
		"carnet":"'.$row['carnet'].'",
		"nombre":"'.$row['nombre'].'",
		"apellidos":"'.$row['apellidos'].'",
		"direccion":"'.$row['direccion'].'",
		"genero":"'.$row['genero'].'",
		"telefono":"'.$row['telefono'].'",
		"fechaNacimiento":"'.$nacimiento.'",
		"generoPoesia":"'.$row['generoPoesia'].'",
		"carrera":"'.$row['carrera'].'",
		"fechaInscripcion":"'.$inscripcion.'",
		"fechaExposicion":"'.$exposicion.'"

	},';
}
$tabla = substr($tabla,0, strlen($tabla) - 1);
// $_SESSION['DatosLista']=$tabla;
// echo $_SESSION['DatosLista'];
echo '{"data":['.$tabla.']}';



?>