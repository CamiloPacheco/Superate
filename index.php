<!DOCTYPE html>
<html lang="zxx" class="no-js">
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


?>
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->

	<!--
			Google Font
			============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">

	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
   
</head>

<body>

	<!-- Start Header Area -->
	<header id="header">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.html"><img src="img/logo.jpg" alt="" title="" /></a>
				</div>
				
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="index.html">Inicio</a></li>
						<li><a href="#about">Sobre Nosotros</a></li>
						<li><a href="#cursos">Cursos</a></li>
						<li><a href="#contact">Contacto</a></li>
						<li class="menu-has-children"><a href="">Log in</a>
							<ul>
								 
								<div class="login">

									<form action="login.php" method="post">
										<a  href="courses.html">
											<i class="fa fa-user L logi"  ></i> Desarrollo
										</a>
										<p for="user"> Usuarios
										<input id="user" name="email" class="form-control" type="email" placeholder="Ingresa tu email">
									</p>
									<br>
									 
										<p for="">Contraseña
									 
										<input name="psw" class="form-control" type="password" placeholder="Ingresa tu contraseña" required>
									</p>
									<br>
									<input type="submit" class=" input" required value="iniciar sesion  "/><br>

									</form>
								 </div>
							</ul>
						</li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header>
	<!-- End Header Area -->


	<!-- Start Banner Area -->
	<section  class="home-banner-area relative">
	
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-8 col-md-12">
					<h1 class="wow fadeIn" data-wow-duration="4s">Tenemos los mejores cursos  <br> de la Web</h1>
					<p class="text-white">
						Superate es un sitio que te ayudara a aprender y enseñar como tu quieras con cursos de cualquier area del conocimiento
					</p>
					
					<div class="input-wrap">
						<form action="" class="form-box d-flex justify-content-between">
							<input type="text" placeholder="Buscar Cursos" class="form-control" name="username">
							<button type="submit" class="btn search-btn">Buscar</button>
						</form>
					</div>
					<input type="button" class="button_active" onclick="location.href='login.php';" value="iniciar sesion o registrarse "/><br>

					<!--<a href ="sesion.html">Inicio de Sesion o Registrarse</a>-->
					<h4 class="text-white">Cursos Top!</h4>
					<a name="about" href=""></a>
					<div class="courses pt-20">
						<a href="#" data-wow-duration="1s" data-wow-delay=".3s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Matematicas</a>
						<a href="#" data-wow-duration="1s" data-wow-delay=".6s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Python</a>
						<a href="#" data-wow-duration="1s" data-wow-delay=".9s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Historia</a>
						<a href="#" data-wow-duration="1s" data-wow-delay="1.2s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">UI/UX
							Design
						</a>
						<a href="#" data-wow-duration="1s" data-wow-delay="1.5s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Fisca</a>
						<a href="#" data-wow-duration="1s" data-wow-delay="2.1s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Cryptocurrency</a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="rocket-img">
			<img src="img/rocket.png" alt="">
		</div>
	</section>
	<!-- End Banner Area -->


	<!-- Start About Area -->
	<section class="about-area section-gap">
		<div class="container">
				<a href="courses.html" class="primary-btn">Explorar Cursos</a>
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-5 col-md-6 about-left">
					<img class="img-fluid" src="img/about.jpg" alt="">
				</div>
				<div class="offset-lg-1 col-lg-6 offset-md-0 col-md-12 about-right">
					<h1>
						alrededor de 1500 cursos  <br> con profesores y monitores calificados
					</h1>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							Tenemos varios cursos creados por profesores y monitores que han sido evaluados anteriormente con varios examenes,
							tenemos articulos de informacion en el que podras leer, aunque tu tambien podras ayudarnos a mejorar animate a hacer
							parte de esta comunidad.
						</p>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	<!-- End About Area -->
	<a name="cursos" href=""></a>

	<!-- Start Courses Area -->
	<section class="courses-area section-gap">
		
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 about-right">
					<h1>
						Por esto  <br> Somos importantes
					</h1>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							Tenemos una base de datos donde podras ingresar para aprender o para ayudarnos a enseñar, ya que cada documento cada clase la
							podras editar de manera que todos puedan acceder, validando que la informacion que estes regalando sea valida y correcta.
							Que estas esperando para resgistrarte.
						</p>
					</div>
				</div>
				<div class="offset-lg-1 col-lg-6">
					<div class="courses-right">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<ul class="courses-list">
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay=".1s">
											<i class="fa fa-book"></i> Desarrollo
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay=".3s">
											<i class="fa fa-book"></i> IT & Software
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay=".5s">
											<i class="fa fa-book"></i> fotografia
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay=".7s">
											<i class="fa fa-book"></i> Lenguas
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay=".9s">
											<i class="fa fa-book"></i> Arte
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay="1.1s">
											<i class="fa fa-book"></i> Negocios
										</a>
									</li>
									<li>
										<a class="wow fadeInLeft" href="courses.html" data-wow-duration="1s" data-wow-delay="1.3s">
											<i class="fa fa-book"></i> Cocina
										</a>
									</li>
								</ul>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<ul class="courses-list">
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay="1.3s">
											<i class="fa fa-book"></i> Diseño
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay="1.1s">
											<i class="fa fa-book"></i> Matematicas
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay=".9s">
											<i class="fa fa-book"></i> Moda
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay=".7s">
											<i class="fa fa-book"></i> Humanidades
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay=".5s">
											<i class="fa fa-book"></i> Ventas
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay=".3s">
											<i class="fa fa-book"></i> Economia
										</a>
									</li>
									<li>
										<a class="wow fadeInRight" href="courses.html" data-wow-duration="1s" data-wow-delay=".1s">
											<i class="fa fa-book"></i> Historia
										</a>
									</li>
								</ul>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	<!-- End Courses Area -->

	<section class="contact-page-area section-gap">
			
			<div class="container">
				<div class="row">
					<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
					<div class="col-lg-4 d-flex flex-column address-wrap">
						<div class="single-contact-address d-flex flex-row">
							<div class="icon">
								<span class="lnr lnr-home"></span>
							</div>
							<div class="contact-details">
								<h5>Barranquilla, Atlantico</h5>
								<p>
									Uninorte
								</p>
							</div>
						</div>
						<div class="single-contact-address d-flex flex-row">
							<div class="icon">
								<span class="lnr lnr-phone-handset"></span>
							</div>
							<div class="contact-details">
								<h5>+57 3004785624</h5>
								<p>lunes to Jueves 9am a 6 pm , Colombia</p>
							</div>
						</div>
						<div class="single-contact-address d-flex flex-row">
							<div class="icon">
								<span class="lnr lnr-envelope"></span>
							</div>
							<div class="contact-details">
								<h5>adminsuperate@superate.com</h5>
								<p>envianos tu sugerencias a cualquier hora!</p>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
							<div class="row">
								<div class="col-lg-6 form-group">
									<input name="name" placeholder="ingresa tu nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ingresa tu nombre'"
									 class="common-input mb-20 form-control" required="" type="text">
	
									<input name="email" placeholder="ingresa tu direccion electronica" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'ingresa tu direccion electronica'" class="common-input mb-20 form-control" required="" type="email">
	
									<input name="subject" placeholder="ingresa el tema" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ingresa el tema'"
									 class="common-input mb-20 form-control" required="" type="text">
								</div>
								<div class="col-lg-6 form-group">
									<textarea class="common-textarea form-control" name="message" placeholder="Ingresa el mensaje" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
								</div>
								<div class="col-lg-12">
									<div class="alert-msg" style="text-align: left;"></div>
									<button class="primary-btn" style="float: right;">Enviar el mensaje</button>
								</div>
							</div>
							<a name="contact">Contacto</a>
						</form>
					</div>
				</div>
			</div>
		</section>
	

 

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#"></a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
</body>

</html>