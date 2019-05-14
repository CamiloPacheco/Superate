<?php


  $conn=mysqli_connect("localhost","root","","superatedatabase");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  else {
    echo "Connected successfully";
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>Descripcion</td>
			<td>id_curso</td>
			<td>Ruta_Video</td>
      <td>Disponible</td>
		</tr>

		<?php
		$sql="SELECT * from Clases";
		$result=mysqli_query($conn,$sql);
    if (mysqli_query($conn, $sql)) {
      echo "New record Load successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['ID'] ?></td>
			<td><?php echo $mostrar['Nombre'] ?></td>
			<td><?php echo $mostrar['Descripcion'] ?></td>
			<td><?php echo $mostrar['id_curso'] ?></td>
			<td><?php echo $mostrar['Ruta_Video'] ?></td>
      <td><?php echo $mostrar['Disponible'] ?></td>
		</tr>
	<?php
	}
	 ?>
	</table>

</body>
</html>
