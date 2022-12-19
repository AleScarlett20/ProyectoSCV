<?php
    include("conexion.php");
	$nombre=$_POST['nombre'];
	$sexo=$_POST['sexo'];
	$participantes=$_POST['participantes'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$lugares=$_POST['lugares'];
	$consulta = "INSERT INTO reservaciones(Nombre,Sexo,Participantes,Correo,Telefono,Lugares) VALUES ('$nombre','$sexo','$participantes','$correo','$telefono','$lugares')";
	$insertar = $conexion->query($consulta);

    if ($insertar){
    	echo ("Registro exitoso");
	}else{
		echo("No se pudieron almacenar los datos");
	}
	mysql_close($conexion);
    ?>