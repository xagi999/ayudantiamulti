<?php 
$mbd = new PDO('mysql:host=localhost;dbname=prueba', $usuario, $contraseña);


	if (isset($_REQUEST['alumno'])){
	$nombre		 = $_REQUEST['nombre'];
	$apellido	 = $_REQUEST['apellido'];
	$rut		 = $_REQUEST['rut'];
	echo "la weas de alumnos se subieron bien";
	}

	if (isset($_REQUEST['notas'])){
	$ramo		 = $_REQUEST['ramo'];
	$nota		 = $_REQUEST['nota'];
	echo "la weas de notas se subieron bien";
	}
	
 ?>