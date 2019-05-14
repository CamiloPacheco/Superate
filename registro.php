<?php
require 'db/conexion.php';
require 'vendor/autoload.php';

FB::log($_POST);
if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email'])&& !empty($_POST['tel']) && !empty($_POST['psw']) && !empty($_POST['tipo'])  )
{
    $db=database::conectar();
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$tel=(int)$_POST['tel'];
$psw=$_POST['psw'];
$tipo=(int)$_POST['tipo'];


$r=$db->query("insert into usuarios values(null,'$nombre','$apellido','$email',$tel,'$psw',$tipo,1)");
FB::log($db->error);
if ($r) {
   session_start();
   $_SESSION['id']= $db->insert_id;
   $_SESSION['email']=$_POST['email'];
   $_SESSION['tipo']=$tipo ;
   $_SESSION['Nombre']=$nombre.' '.$apellido;

   if ($tipo==2) {

    echo "<script> window.location='inicio.php'; </script>";

     } else {
       # Aqui va cuando es estudiante.
       echo "<script> window.location='estudiante.php'; </script>";
     }
} else {
    // header("Location:registro.php?nosepuedo");
}



}










?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>i+d</title>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style2.css">


</head>

<body>

  <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <!--<link rel="stylesheet" href="/css/master.css">-->
  </head>
  <body>

    <div class="login-box">
      <h1>Ingresa aqui</h1>
      <form method="post" action="registro.php">
        <label name ="name" for="username">Nombre </label>
        <input type="text" name="nombre" placeholder="Ingresar Nombre" required>
        <label name ="apellido" for="username">Apellido </label>
        <input type="text" name="apellido" placeholder="Ingresar Apellido" required>

        <label for="username">Tipo </label>
        <select class="custom-select" name="tipo" id="inputGroupSelect01" required>
          <option selected>Escoger</option>
          <option value="2">Profesor</option>
          <option value="3">Estudiante</option>
        </select>
        <br>
        <br>
        <label name="mail" for="username">Email </label>
        <input type="email"  name="email" placeholder="Ingresar Email" required>
        <!-- USERNAME INPUT -->

        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input name="psw"  type="password" placeholder="Ingresar Contraseña" required>
        <label name ="name" for="username">Tel </label>
        <input type="text" name="tel" placeholder="Ingresar telefono" pattern="[0-9]{10}"required>
        <input type="submit" class="button_active"   value="registrarse "/><br>

      </form>
    </div>

  </body>
</html>



</body>

</html>
