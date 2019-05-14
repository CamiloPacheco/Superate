<?php 
if ($_GET['id']) {
    require '../db/conexion.php';
require '../vendor/autoload.php';

$db=database::conectar();
$video=$db->query("select ruta_video from clases where id=".$_GET['id'])->fetch_assoc();
if (!empty($video['ruta_video'])) {
  ?>
  <video width="100%" height="100%" controls>
  <source src="videos/<?= $video['ruta_video']?>" type="video/mp4">
  
Your browser does not support the video tag.
</video>
<?php }else{
    echo "<h1>No video </h1>";
}
}


?>
