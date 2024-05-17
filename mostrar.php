<?php 

	$conexion=mysqli_connect('localhost','root','','cinecove');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>

<center><body>

<br>

	<table border="1" >
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>email</td>
			<td>pelicula</td>	
		</tr>

		<?php 
		$sql="SELECT * from solicitudes_de_tikets";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['email'] ?></td>
			<td><?php echo $mostrar['pelicula'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body></center>
</html>