<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	include("conexion.php");
	$nombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
	$sexo=(isset($_POST['sexo']))?$_POST['sexo']:"";
	$participantes=(isset($_POST['participantes']))?$_POST['participantes']:"";
	$correo=(isset($_POST['correo']))?$_POST['correo']:"";
	$telefono=(isset($_POST['telefono']))?$_POST['telefono']:"";
	$lugares=(isset($_POST['lugares']))?$_POST['lugares']:"";

	$sentenciaSQL=$conexion->prepare ("INSERT INTO reservaciones (Nombre, Sexo, Participantes, Correo, Telefono, Lugares)
	VALUES ('$nombre','$sexo','$participantes','$correo','$telefono','$lugares')");

	$sentenciaSQL->executable();
	?>
</body>
</html>