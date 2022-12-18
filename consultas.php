<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<body>
	
	<table width="100%" >
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Sexo</th>
      <th>Participantes</th>
      <th>Correo</th>
      <th>Telefono</th>
	  <th>Lugares</th>	
	  
    </tr>
  </thead>
  <tbody>
<?php
	  include("conexion.php");
	  $query = "SELECT * FROM reservaciones";
      $resultado = $conexion -> query($query);
	  while ($row=$resultado->fetch_assoc()){
?>
      <tr>
		  <td><?php echo $row['Nombre']; ?></td>
		  <td><?php echo $row['Sexo']; ?></td>
		  <td><?php echo $row['Participantes']; ?></td>
		  <td><?php echo $row['Correo']; ?></td>
		  <td><?php echo $row['Telefono']; ?></td>
		  <td><?php echo $row['Lugares'];?></td>
	  </tr>
<?php
	  }
?>

 </tbody>
</table>
</font>
</body>
</html>