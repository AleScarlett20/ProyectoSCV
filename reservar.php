<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	include("conexion.php");
	$varNombre=$_POST['nombre'];
	$varSexo=$_POST['sexo'];
	$varParticipantes=$_POST['Participantes'];
	$varCorreo=$_POST['correo'];
	$varTelefono=$_POST['telefono'];
    $varLugares=$_POST['lugares'];
	
	$query = "INSERT INTO reservaciones (Nombre,Sexo,Participantes,Correo,Telefono,Lugares) 
    VALUES('$varNombre','$varSexo','$varParticipantes','$varCorreo','$varTelefono','$varLugares')";

	$almacenar = $conexion -> query($query);
	if($almacenar){
		echo("Registro exitoso");
	}else{
		echo("No se pudieron almacenar los datos");
	}
?>
</body>
</html>