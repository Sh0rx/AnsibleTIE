<?php 

	$conexion=mysqli_connect('localhost','root','admin','persona');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Mostrar Persona</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>apellido</td>
			<td>correo</td>	
		</tr>

		<?php 
		$sql="SELECT * from persona";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido'] ?></td>
			<td><?php echo $mostrar['correo'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>
