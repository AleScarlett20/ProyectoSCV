<?php
$host= "localhost";
$bd="agencia";
$usuario="root";
$contraseña="ITESME";

try {
	$conexion= new PDO("mysql:host=$host;dbname=$bd",$usuario,$contraseña);
	if ($conexion) {
		echo "conexion exitosa";
	}
	
} catch ( Exception $ex) {
	echo $ex->getMessage();
}
?>