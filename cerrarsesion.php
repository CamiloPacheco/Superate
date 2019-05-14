<?php
require 'vendor/autoload.php';
session_start();
if (!empty($_SESSION)) {
	FB::log($_SESSION);
	$_SESSION['id']=  null;
	$_SESSION['email']=null ;
	$_SESSION['tipo']= null;
	$_session['Nombre']=null ;
	session_unset();
	 session_destroy();
	FB::log($_SESSION);

}
echo "<script> window.location='index.php'; </script>";


?>
