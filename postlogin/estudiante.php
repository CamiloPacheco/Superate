<?php 
require '../db/conexion.php';
require '../vendor/autoload.php';

$db=database::conectar();
$categorias=$db->query("select Nombre,id from Categoria")->fetch_all(MYSQLI_ASSOC);
 
$cursos=$db->query("SELECT * from curso ")->fetch_all(MYSQLI_ASSOC);

FB::log($categorias);

?>



<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Educature Education</title>
        <meta name="description" content="">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
           <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>
        
        <!-- Syntax Highlighter -->
        <link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shCore.css" media="all">
        <link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shThemeDefault.css" media="all">
		
		<!-- Font Awesome CSS-->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Normalize/Reset CSS-->
		<link rel="stylesheet" href="css/normalize.min.css">
		<!-- Main CSS-->
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">

	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="../css/linearicons.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<link rel="stylesheet" href="../css/nice-select.css">
	<link rel="stylesheet" href="../css/animate.min.css">
	<link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/main.css">
		
    </head>
	
    <body id="welcome">
    
        <aside class="left-sidebar">
            <div class="logo">
                <a href="#welcome">
                    <img src="img/logo.png" alt="">
                </a>
            </div>
            <nav class="left-nav">
                <ul id="nav">
                    <li class="current"><a href="#welcome">Welcome</a></li>
                    <li><a href="#installation">cursos</a></li>
                  
                    <li><a href="cerrarsesion.php">cerrar sesion </a></li>
                     
                     
                </ul>
            </nav>
        </aside>
		
		<div id="main-wrapper">
		    <div class="main-content">
		        <section id="welcome">
		            <div class="content-header">
		                <h1>Bienvenido </h1>
		            </div>
		            <div class="welcome">
                        
                        <h2 class="twenty"><?php    echo isset($_SESSION['Nombre'])?$_SESSION['Nombre'] : "no login" ?></h2>

                        <p>Firstly, a huge thanks for purchasing this theme, your support is truly appreciated!</p>

                        <p>This document covers the installation and use of this theme and often reveals answers to common problems and issues - read this document thoroughly if you are experiencing any difficulties. If you have any questions that are beyond the scope of this document, feel free to email at <code><a href="mailto:support@pixelcoder.net">support@pixelcoder.net</a></code> Thank you so much!</p>
		            </div>
		            
		            <div class="features">
		                <h2 class="twenty">Titulos y reconocimientos</h2>
		                
		                <ul>
		                    <li>Clean &amp; Simple Design</li>
                            <li>HTML5 &amp; CSS3</li>
                            <li>Fully Responsive Design</li>
                            <li>PHP/Ajax Powered Working Contact Form</li>
                            <li>All files are well commented</li>
                            <li>Cross Browser Compatible with IE11+, Firefox, Safari, Opera, Chrome</li>
                            <li>Extensive Documentation</li>
		                </ul>
		            </div>

		        </section>
		        
		        <section id="installation">
                    <div class="content-header">
		                <h1>Cursos</h1>
                    </div>
                    <div class="row">
                    <?php if(count($cursos)>0){
                        
                        foreach ($cursos as $c ) {
                        
                        ?>
            
  <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
  <img src="img/imgcursos/<?= $c['img']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$c['Nombre']?></h5>
    <p class="card-text"><?=$c['Descripción']?></p>
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?= $c['id']?>">
    <i class="fas fa-eye"></i>ver 
    </button>
  </div>
 

<!-- Modal -->

                    </div>

  </div>
            

		            <?php } }else{echo"<h2>No tienes cursos aun </h2>";}?>
                    </div>
    <?php foreach   ($cursos as $c){?>   
<div class="modal fade" id="exampleModal<?= $c['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Clases del curso <?= $c['id']?> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <ul class="list-group">
         <?php $clases=$db->query("select * from clases where id_curso=".$c['id'])->fetch_all(MYSQLI_ASSOC); 
                    
                    if (count($clases)>0) {
                        foreach ($clases as $clase  ) {
                            $id=strval( $clase['id']);
                            echo "<li class='list-group-item'>  {$clase['Nombre']} <a href='"."verclases.php?id=$id' class= 'btn btn-primary'> <i class='fas fa-eye'></i>ver </a> </li>"; 
                         }
                    }else{
                        echo "<li class='list-group-item'>   no hay clases aun </li>"; 
                    }
                    ?>
                    

</ul>
      </div>
      <div class="modal-footer">
       
  
      </div>
    </div>
  </div>
</div>  
 
    <?php }?>	            
		        </section>


		      
		        
		       
		         
		    </div>
		</div>
		
		
		<!-- Essential JavaScript Libraries
		==============================================-->
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <script type="text/javascript" src="syntax-highlighter/scripts/shCore.js"></script> 
        <script type="text/javascript" src="syntax-highlighter/scripts/shBrushXml.js"></script> 
        <script type="text/javascript" src="syntax-highlighter/scripts/shBrushCss.js"></script> 
        <script type="text/javascript" src="syntax-highlighter/scripts/shBrushJScript.js"></script> 
        <script type="text/javascript" src="syntax-highlighter/scripts/shBrushPhp.js"></script> 
            <!-- <link rel="shortcut icon" href="img/favicon.png"> -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
        <script type="text/javascript">
            $('#exampleModal').modal('show')
        </script>
        <script type="text/javascript" src="js/custom.js"></script>
		
    </body>
</html>
