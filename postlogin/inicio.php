<?php 
require '../db/conexion.php';
require '../vendor/autoload.php';
require 'base.php';

$db=database::conectar();
$categorias=$db->query("select Nombre,id from Categoria")->fetch_all(MYSQLI_ASSOC);
session_start();
$email=$_SESSION['email'];
FB::log($_SESSION);
$cursos=$db->query("SELECT * from curso where curso.id in (SELECT c.id_curso from usuarios_cursos as c where c.id_usuario= (SELECT u.id from usuarios as u where u.Email='$email'))")->fetch_all(MYSQLI_ASSOC);

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
        
        <!-- <link rel="shortcut icon" href="img/favicon.png"> -->
        
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
                    <img src="img/logo.jpg" alt="">
                </a>
            </div>
            <nav class="left-nav">
                <ul id="nav">
                    <li class="current"><a href="#welcome">Welcome</a></li>
                    <li><a href="#installation">Crear curso</a></li>
                    <li><a href="#tmpl-structure">Añadir clase</a></li>
                    <li><a href="#css-structure">Mis curso</a></li>
                    <li> <a href="cerrarsesion.php">cerrar sesion</a></li>
                     
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

                        <p>Perfil profesor </p>

                        <p>  Dedicarse a la docencia es una profesión muy vocacional, donde tiene gran peso la motivación por transmitir conocimientos y estar en contacto con estudiantes y profesionales deseosos de seguir aprendidendo y evolucionando.</p>
		            </div>
		            
		            <div class="features">
		                <h2 class="twenty">Aqui prodras</h2>
		                
		                <ul>
		                    <li> crear cursos   </li>
                            <li> Crear clases para tus cursos </li>
                            <li>Subir video y imagenes para cursos y clases </li>
                             
		                </ul>
		            </div>

		        </section>
		        
		        <section id="installation">
                    <div class="content-header">
		                <h1>Crear curso </h1>
                    </div>
                     
                    
                    <div class="section-content">
                    <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <form action="crearC.php" method="post" enctype="multipart/form-data">
                <div class="feature-item">
                    <i class="ti-crown"></i>
                    <h4>Nombre del curso</h4>
                    <div class="input-wrap">
                            <div class="form-box d-flex justify-content-between">
                                <input type="text" placeholder="Nombre del curso" class="form-control" name="nombreC">
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-item">
                    <i class="ti-briefcase"></i>
                    <h4>Descripcion</h4>
                    <div class="input-wrap">
                            <!--<form action="" class="form-box d-flex justify-content-between">
                                <input type="text" placeholder="Descripcion de la clase" class="form-control" name="Descripcion de la clase">
                            </form>-->
                            <textarea class="common-textarea form-control" name="desc" placeholder="Ingresa el mensaje" onfocus="this.placeholder = ''"
                             onblur="this.placeholder = 'ingresa la Descripcion'" required=""></textarea>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-item">
                    <i class="ti-medall-alt"></i>
                    <h4>Categoria </h4>
                    <div class="input-wrap">
                    <select class="custom-select" name="tipo" id="inputGroupSelect01" required>
                         <?php 
                         
                         foreach ($categorias as $f ) {
                            
                             echo "<option value={$f['id']}>{$f['Nombre']}</option>";
                         }
                         
                         ?>
                     </select>
                    
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-item">
                    <i class="ti-medall-alt"></i>
                    <h4>Img del curso </h4>
                    <div class="input-wrap">
                     
                    <div class="custom-file">
                            <input type="file" name="file" accept ="image/png, image/jpeg "class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                            <button for="inputGroupFile04" type="submit" class="btn search-btn">Agregar curso</button>
                     
                    </div>
                   
                </div>
            </div>
</form>


                    </div>
                    </div>
		            
		        </section>


		        <section id="tmpl-structure">
                <div class="content-header">
		                <h1>Añadir clase </h1>
                </div>
		              <section class="feature-area" style="
    padding-top: 0px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                
                    <p>
                        Añadir clases de la manera mas facil sigue los pasos y sube una clase de una manera rapida y sencilla
                    </p>
                </div>
            </div>
        </div>
        <div class="feature-inner row">
            <div class="col-lg-4 col-md-6">
                <div class="feature-item">
                    <form action="crearclase.php" method="post" enctype="multipart/form-data" >
                    <i class="ti-crown"></i>
                    <h4>Nombre de la clase</h4>
                    <div class="input-wrap">
                            <div  class="form-box d-flex justify-content-between">
                                <input type="text" placeholder="Nombre de la clase" class="form-control" name="clase">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-item">
                    <i class="ti-briefcase"></i>
                    <h4>Descripcion</h4>
                    <div class="input-wrap">
                            <!--<form action="" class="form-box d-flex justify-content-between">
                                <input type="text" placeholder="Descripcion de la clase" class="form-control" name="Descripcion de la clase">
                            </form>-->
                            <textarea class="common-textarea form-control" name="message" placeholder="Ingresa el mensaje" onfocus="this.placeholder = ''"
                             onblur="this.placeholder = 'ingresa la Descripcion'" required=""></textarea>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-item">
                    <i class="ti-medall-alt"></i>
                    <h4>Subir Archivo</h4>
                    <div class="input-wrap">
                            <div class="form-box d-flex justify-content-between">
                            <div class="custom-file">
                            <input type="file" name="file" accept ="video/webm, video/ogg ,video/mp4"class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>

                            </div>
                                                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-item">
                    <i class="ti-key"></i>
                    <h4>Curso</h4>
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
                    <select class="custom-select" name="curso" id="inputGroupSelect01" required>

                    <?php 
                         
                         foreach ($cursos as $f ) {
                            
                             echo "<option value={$f['id']}>{$f['Nombre']}</option>";
                         }
                         ?>
                         </select>
                    </div>
                </div>
            </div>	
            <div class="col-lg-4 col-md-6">
                <div class="feature-item">
                    <i class="ti-files"></i>
                    <h4>Autor</h4>
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                        <div action="" class="form-box d-flex justify-content-between">
                            <div  class="form-box d-flex justify-content-between">
                                <input  disabled type="text" placeholder="Autor de la clase" class="form-control" value="<?=$_SESSION['Nombre']?>" name="Autor de la clase">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-item">
                    <i class="ti-headphone-alt"></i>
                    <h4>Publicar</h4>
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="form-box d-flex justify-content-between">
                            <button type="submit" class="btn search-btn">Publicar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
		            </pre>
		        </section>


		        <section id="css-structure">
                <div class="content-header">
		                <h1>Mis cursos  </h1>
                    </div>
		           
		            <p class="fifteen">En esta seccion estan todos tus cursos    <strong>los cursos que no estan aqui no los creaste</strong>.</p>
                    <div class="row">
                    <?php if(count($cursos)>0){
                        
                        foreach ($cursos as $c ) {
                        ?>
            
  <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
  <img src="img/imgcursos/<?= $c['img']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$c['Nombre']?></h5>
    <p class="card-text"><?=$c['Descripción']?></p>
    <a href="#" class="btn btn-primary">Eliminar</a>
  </div>
                    </div>

  </div>
            

		            <?php } }else{echo"<h2>No tienes cursos aun </h2>";}?>
                    </div>
                </section>
		        
	 
		        
		         
		 
		
		
		<!-- Essential JavaScript Libraries
		==============================================-->
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <script type="text/javascript" src="syntax-highlighter/scripts/shCore.js"></script> 
        <script type="text/javascript" src="syntax-highlighter/scripts/shBrushXml.js"></script> 
        <script type="text/javascript" src="syntax-highlighter/scripts/shBrushCss.js"></script> 
        <script type="text/javascript" src="syntax-highlighter/scripts/shBrushJScript.js"></script> 
        <script type="text/javascript" src="syntax-highlighter/scripts/shBrushPhp.js"></script> 
        <script type="text/javascript">
            SyntaxHighlighter.all()
        </script>
        <script type="text/javascript" src="js/custom.js"></script>
		
    </body>
</html>
