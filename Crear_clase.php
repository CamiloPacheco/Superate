<html>
<head>
  <title>Programando Ando</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  	<center><h1>Añadir Clases</h1></center>
  	<form method="POST" action="MostrarClases.php"  >

      <div class="form-group">
	    <label for="id">id</label>
        <input type="text" name="id" class="form-control" id="id">
	</div>

  	<div class="form-group">
	    <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" class="form-control" id="Nombre">
	</div>

	<div class="form-group">
	    <label for="Descripcion">Descripcion </label>
	    <input type="text" name="Descripcion" class="form-control" id="Descripcion">
	</div>

    <div class="form-group">
	    <label for="id_curso">id_curso</label>
        <input type="text" name="id_curso" class="form-control" id="id_curso">
    </div>

   <div class="form-group">
	    <label for="Ruta_video">Ruta video </label>
	    <input type="text" name="Ruta_video" class="form-control" id="Ruta_video">
	</div>

    <div class="form-group">
	    <label for="disponible">disponible</label>
        <input type="text" name="disponible" class="form-control" id="disponible">
	</div>

    <center><input type="submit" value="Enviar" class="btn btn-success" name="btn1"></center>

  </form>

  <?php
  	if(isset($_POST['btn1']))
  	{
      $conn=mysqli_connect("localhost","root","","superatedatabase");
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      else {
        echo "Connected successfully";
      }
         $id=$_POST['id'];
        $Nombre=$_POST['Nombre'];
        $Descripcion=$_POST['Descripcion'];
        $id_curso=$_POST['id_curso'];
  		  $ruta_video=$_POST['Ruta_video'];
        $disponible=$_POST['disponible'];
        $sql = "INSERT INTO Clases (ID,Nombre,Descripcion,id_curso,Ruta_Video,Disponible) VALUES ('$id','$Nombre','$Descripcion','$id_curso','$ruta_video','$disponible')";
        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
  ?>



  </div>
  <div class="col-md-4"></div>
</div>





</body>
</html>
