<?php
require 'db/conexion.php';
require 'vendor/autoload.php';


$db=database::conectar();
if (!empty($_POST['email']) && !empty( $_POST['psw'])) {
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $p=mysqli_real_escape_string($db,$_POST['psw']);
    $pswd=$p;
    $r=$db->query("select* from usuarios where Email='$email' and Psw='$pswd' ");

    $re=$r->fetch_array(MYSQLI_ASSOC);
    FB::log($re);
    if (count($re)<1) {
      echo "<script> window.location='index.php?datosErroneos'; </script>";
    }else{
    session_start();
    $_SESSION['Nombre']=$re['Nombre']." ".$re['Apellido'];
    if ((int)$re['tipo']==2) {
      $_SESSION['id']=$re['id'];
      $_SESSION['email']=$re['Email'];
   $_SESSION['tipo']=$re['tipo'];

   echo "<script> window.location='inicio.php'; </script>";

    } else {
      # Aqui va cuando es estudiante.
      echo "<script> window.location='estudiante.php'; </script>";
    }
  }

}


?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>i+d</title>
      <link rel="stylesheet" href="css/style.css">


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
        <button class="Button_1" style="left:12%; margin-bottom: 10px; position:relative; border-radius: 5px; border: none; background-color: rgb(59, 89, 152); padding: 0.6rem;"><span class="Box_120drhm-o_O-centerJustify_1nezfbd-o_O-centerAlign_19zvu2s-o_O-displayflex_poyjc"><span class="iconWrapper_16cpruw-o_O-iconLeft_w5glpm"><svg class="SvgIcon_8wfvj4" viewBox="0 0 24 24" role="img" aria-labelledby="Facebookb52a9bb1-feaf-421d-b9a2-7554588a68df Facebookb52a9bb1-feaf-421d-b9a2-7554588a68dfDesc" xmlns="http://www.w3.org/2000/svg" style="fill: rgb(255, 255, 255); height: 18px; width: 18px;"><title id="Facebookb52a9bb1-feaf-421d-b9a2-7554588a68df">Facebook</title><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" role="presentation"></path></svg></span>  Entra con Facebook</span></button>
        <button type="button" class="google-button">
          <span class="google-button__icon">
            <svg viewBox="0 0 366 372" xmlns="http://www.w3.org/2000/svg"><path d="M125.9 10.2c40.2-13.9 85.3-13.6 125.3 1.1 22.2 8.2 42.5 21 59.9 37.1-5.8 6.3-12.1 12.2-18.1 18.3l-34.2 34.2c-11.3-10.8-25.1-19-40.1-23.6-17.6-5.3-36.6-6.1-54.6-2.2-21 4.5-40.5 15.5-55.6 30.9-12.2 12.3-21.4 27.5-27 43.9-20.3-15.8-40.6-31.5-61-47.3 21.5-43 60.1-76.9 105.4-92.4z" id="Shape" fill="#EA4335"/><path d="M20.6 102.4c20.3 15.8 40.6 31.5 61 47.3-8 23.3-8 49.2 0 72.4-20.3 15.8-40.6 31.6-60.9 47.3C1.9 232.7-3.8 189.6 4.4 149.2c3.3-16.2 8.7-32 16.2-46.8z" id="Shape" fill="#FBBC05"/><path d="M361.7 151.1c5.8 32.7 4.5 66.8-4.7 98.8-8.5 29.3-24.6 56.5-47.1 77.2l-59.1-45.9c19.5-13.1 33.3-34.3 37.2-57.5H186.6c.1-24.2.1-48.4.1-72.6h175z" id="Shape" fill="#4285F4"/><path d="M81.4 222.2c7.8 22.9 22.8 43.2 42.6 57.1 12.4 8.7 26.6 14.9 41.4 17.9 14.6 3 29.7 2.6 44.4.1 14.6-2.6 28.7-7.9 41-16.2l59.1 45.9c-21.3 19.7-48 33.1-76.2 39.6-31.2 7.1-64.2 7.3-95.2-1-24.6-6.5-47.7-18.2-67.6-34.1-20.9-16.6-38.3-38-50.4-62 20.3-15.7 40.6-31.5 60.9-47.3z" fill="#34A853"/></svg>
          </span>
          <span class="google-button__text go">Sign in with Google</span>
        </button>
      <h1>Ingresa aqui</h1>
      <form action="login.php" method="post">
            <hr>

        <!-- USERNAME INPUT -->
        <label for="username">Nombre de usuario </label>
        <input name="email" type="email" placeholder="Ingresar Email" required>
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input name="psw" type="password" placeholder="Ingresar Contraseña">
        <input type="submit" class="button_active"   value="ingresar "/><br>
        <br>
        <br>
        <br>
        <a href="#">Haz olvidado la contraseña?</a><br>
        <a href="registro.php">No tienes cuenta?</a>




      </form>
    </div>

  </body>
</html>



</body>

</html>
