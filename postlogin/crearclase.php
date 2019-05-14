<?php 
require '../db/conexion.php';
require '../vendor/autoload.php';
if (isset($_POST['clase']) && isset($_POST['message']) && isset($_POST['curso'])  && isset($_FILES['file'])  ) {
    FB::log($_POST);

     if ($_FILES['file']['type']=="video/webm" ||$_FILES['file']['type']=="video/ogg"  ||$_FILES['file']['type']=="video/mp4" ) {
        $db=database::conectar();
        $clase=$db->real_escape_string($_POST['clase']);
        $message=$db->real_escape_string($_POST['message']);
        $curso = (int) $db->real_escape_string($_POST['curso']);
        move_uploaded_file($_FILES['file']['tmp_name'],"videos/".$_FILES['file']['name']);
        $video=$_FILES['file']['name'];

        $db->query("insert into clases values(null,'$clase','$message','$curso','$video',null)");
        $id=$db->insert_id;
        FB::log($db->error);
       
        header("Location:inicio.php");
     }else{
       
        header("Location:inicio.php?formatoIMGnovalido");
     }


}





?>