<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
	$conexion = new mysqli("localhost","root","ITESME","agencia");
	if ($conexion){
		echo "conexión correcta";
	}
	else{
		echo "conexion incorrecta";
	}
?>
<body>
	
</body>
</html>