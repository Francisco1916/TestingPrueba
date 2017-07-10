<?php
session_start();
	$sNom="";
	$sError="";
	if (isset($_SESSION["nombre"]))
		$sNom = $_SESSION["nombre"];
	else{
		$sError = "No has iniciado sesion, da clic en el siguiente enlace";
		$sBack = "../usuarionoregistrado/registro.php";
	}
?>
<?php
		if ($sError == ""){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Divas Mom&Bbay </title>
    <meta name="description" content="Your Description Here">
    <meta name="keywords" content="free boostrap, bootstrap template, freebies, free theme, free website, free portfolio theme, portfolio, personal, cv">
    <meta name="author" content="Jenn, ThemeForces.com">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="../../images/imagesregistro/gt_favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
	<link rel="stylesheet" href="../../css/cssinicio/animate.css">
	<link rel="stylesheet" href="../../css/cssinicio/bootstrap.css">
	<link rel="stylesheet" href="../../css/cssinicio/owl.carousel.css">
	<link rel="stylesheet" href="../../css/cssinicio/owl.theme.css">
	<link rel="stylesheet" href="../../css/cssinicio/responsive.css">
	<link rel="stylesheet" href="../../css/cssinicio/style.css">

	
	
	  <!-- MENU DE NAVEGACION-->
	  <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	  <link rel="stylesheet" href="../../css/cssregistro/bootstrap.min.css"> <!-- MENU RESPONSIVO -->
	<link rel="stylesheet" href="../../css/cssregistro/font-awesome.min.css">


	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../../css/cssregistro/bootstrap-theme.css" media="screen" > <!-- MENU RESPONSIVO -->
	<link rel="stylesheet" href="../../css/cssregistro/main.css"> <!-- MENU RESPONSIVO -->

	
	
	<!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="../../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../font/font-awesome-4.2.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../../css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/animate.css">

    <!-- Slider
    ================================================== -->
    <link href="../../css/cssinicio/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="../../css/cssinicio/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="../../css/cssinicio/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/cssinicio/responsive.css"> 


    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="../../js/jsinicio/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    

    <!-- Home Section -->
    <div id="home">
        <div class="container text-center">
            

            <div class="content">
                <h4>Divas Mom&Baby</h4>
                <hr>
                <div class="header-text btn">
                    <h1><span id="head-title"></span></h1>
                </div>
            </div>

        </div>
    </div>
              <!--Menu-->

        <body>
    <!-- Fixed navbar -->
  <!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="../../images/imagesregistro/logo.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="#home">Inicio</a></li>
					<li><a href="#acerca">Acerca</a></li>
					<li><a href="galerianormal.php">Galeria</a></li>
					
					<li><a href="contactonormal.php">Contacto</a></li>
					<li><a href="tienda.php">Comprar</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION["nombre"]; ?> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="../../../controlador/logout.php"> Cerrar sesion</a></li>
						</ul>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 






    <!-- Meet Us Section -->

        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h1>Divas Mom&Baby</h1>
                        <hr>
                    </div>
                    <p>Lo más importante es recordar que puedes vestir la mejor ropa o los mejores zapatos, pero tienes que tener un buen espíritu en tu interior..</p>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Overview Video Section -->
    <div id="overview-video">
        <div class="overlay">
            <div class="container">
                
                    
                </a>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div id="acerca">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
					<br></br><br></br>
                        <h2 name="funciones">Acerca de...</h2>
                        <hr>
                    </div>
                    <p>Venta de mayoreo y menudeo de ropa, zapatos y accesorios, así como productos de temporada de calidad. Hacemos envió dentro y fuera de la república. Nos especializamos en dúos de ropa, zapatos y accesorios de mamá e hija(o) y papá e hija(o) así como vendemos ropa importada y nacional, ropa deportiva de buena cálida, igualmente manejamos productos clon calidad Premium. Todo a un precio accesible.</p>
                </div>
            </div>

            <div class="space"></div>

            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="service">
                        <span class="fa fa-book fa-3x" style="font-size:36px"></span>
                        <h4>Misión</h4>
                        <p>Ofrecer a nuestros clientes ropa, accesorios y zapatos de la más alta calidad al mejor precio del mercado, siempre tratando de estar al corriente con lo último de la moda.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="service">
                        <span class="fa fa-eye" style="font-size:36px"></span>
                        <h4>Visión</h4>
                        <p>Ser una empresa líder en distribución de ropa, zapatos y accesorios; así como productos de temporada de calidad, en continuo crecimiento, con presencia internacional, que se distinga por proporcionar una calidad de atención y servicio excelente a sus clientes</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="service">
                        <i class="fa fa-user" style="font-size:36px"></i>
                        <h4>¿Quienes somos?</h4>
                        <p>Somos una empresa dedicada a la venta de ropa para la familia, especializándonos en dúos (madre/hija y también en parejas) buscando siempre lo mejor para ustedes.
                        </p>
                    </div>
                </div>
            </div>
           
        </div>
    </div>

    <!-- Call-to-Action Section -->
    <div id="cta">
        <div class="container text-center">
           
        </div>
    </div>

    <!-- Portfolio Section -->
    <div id="works">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2>Sabías que...</h2>
                        <hr>
                    </div>
                    <p>Divas Mom&Baby  inicia su operación en el año del 2015,teniendo como venta principal la venta de ropa para madre e hijo(a).
                        La idea surge debido a la primera niña,Nos agrado la idea de ir siempre combinadas y así poder sentir un lazo más estrecho. Quiso que todas las madres sintieran la misma felicidad que ella al vestirse de esa manera.</p>
                </div>
            </div>
            <div class="space"></div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h5>Atención</h5>
                                    <p class="lead">Servicio</p>
                                    <div class="hline"></div>
                                </div>
                                <img src="../../images/imagesinicio/portfolio/4.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h5>Accesorios</h5>
                                    <p class="lead">Para toda ocasión</p>
                                    <div class="hline"></div>
                                </div>
                                <img src="../../images/imagesinicio/portfolio/2.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h5>Dúos</h5>
                                    <p class="lead">Mamá e Hija</p>
                                    <div class="hline"></div>
                                </div>
                            </a>
                            <img src="../../images/imagesinicio/portfolio/3.jpg" class="img-responsive" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h5>Productos con</h5>
                                    <p class="lead">Calidad premiun</p>
                                    <div class="hline"></div>
                                </div>
                            </a>
                            <img src="../../images/imagesinicio/portfolio/1.jpg" class="img-responsive" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <div class="text-center">
            
        </div>
    </div>

    <!-- Clients Section -->
    <div id="clients">
        <div class="overlay">
            <div class="container text-center">
                <div class="section-title">
                    <h2>Divas Mom&Baby Ofrece..</h2>
                    <hr>
                </div>

                <ul class="clients">
                    <li><a href="#"><img src="../../images/imagesinicio/clients/q.png" class="img-responsive" width="195" height="250"></a></li>
                    <li><a href="#"><img src="../../images/imagesinicio/clients/en.png" class="img-responsive" width="195" height="250"></a></li>
                    <li><a href="#"><img src="../../images/imagesinicio/clients/no.png" class="img-responsive" width="195" height="250"></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div id="about-us">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2>Nuestros Valores</h2>
                        <hr>
                    </div>
                    <p>Nuestros valores son nuestros pilares más importantes para nosotros, Son las grandes fuerzas de como se impulsa nuestro trabajo,Mejorando de una forma continua.</p>
                </div>
            </div>
           <center> <div class="space"></div>
            <div class="row">
                <div class="col-md-10 col-sm-10">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="team">
                                <img src="../../images/imagesinicio/team/r.png" class="img-responsive img-circle" alt="...">
                                <br>
                                <h4>Responsabilidad</h4>
                                <p class="small">Somos una empresa responsable, al grado de conocer la satisfacción de las entregas a nuestros clientes</p>
                                <hr>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="team">
                                <img src="../../images/imagesinicio/team/s.png" class="img-responsive img-circle" alt="...">
                                <br>
                                <h4>Seguridad</h4>
                                <p class="small">Tenemos un vínculo de confianza,con nuestros clientes en sus necesidades y deseos.</p>
                                <hr>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="team">
                                <img src="../../images/imagesinicio/team/h.png" class="img-responsive img-circle" alt="...">
                                <br>
                                <h4>Honestidad</h4>
                                <p class="small">Divas Mom&Bbaby siempre sera honesto y leal con sus clientes a la hora de su compra.</p>
                                <hr>
                            </div>
                        </div>

                    </div>
                </div></center>

       

        </div>
    </div>

        <!-- Testimonial Section -->
    <div id="testimonials">
        <div class="overlay">
            <div class="container">
                <div class="section-title">
                    <h2>Usted es nuestra prioridad...</h2>
                    <hr>
                </div>

                <div id="testimonial" class="owl-carousel owl-theme">
                  <div class="item">
                    <h3>La moda es lo que te ofrecen cuatro veces año los diseñadores. El estilo es lo que tú eliges.</h3>
                    <br>
                    <h6>Lauren Hutton.</h6>
                  </div>

                  <div class="item">
                    <h3>La moda no trata necesariamente de etiquetas. No trata de marcas. Trata de algo más que llega desde el interior.</h3>
                    <br>
                    <h6>Ralph Lauren.</h6>
                  </div>

                  <div class="item">
                    <h3>La ropa no significa nada hasta que alguien vive en ella.</h3>
                    <br>
                    <h6>Marc Jacobs.</h6>
                  </div>
                </div>
            </div>
        </div>
    </div>


    <nav id="footer">
        <div class="container">
             <div class="pull-left">
                <p>2017 © Divas Mom&Baby.Todos los derechos reservados by: <a href="Terminos y Condiciones DivasMom&Baby.pdf">DivasM&B</a>
                <br><br>
                <i class="fa fa-instagram" style="font-size:24px"></i>
                <i class="fa fa-google-plus-square" style="font-size:24px"></i>
                <i class="fa fa-facebook-square" style="font-size:24px"></i>
                <i class="fa fa-cc-paypal" style="font-size:24px"></i>
            </div>
            <div class="pull-right"> 
                <a href="#home" class="page-scroll">Volver arriba<span class="fa fa-angle-up"></span></a>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/jsinicio/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="../../js/jsinicio/bootstrap.js"></script>
    <script type="text/javascript" src="../../js/jsinicio/SmoothScroll.js"></script>
    <script type="text/javascript" src="../../js/jsinicio/jasny-bootstrap.min.js"></script>

    <script src="../../js/jsinicio/owl.carousel.js"></script>
    <script src="../../js/jsinicio/typed.js"></script>
    <script>
      $(function(){
          $("#head-title").typed({
            strings: ["La moda caduca pero el estilo jamás", "Siempre a la moda" ,"Moda y Glamour"],
            typeSpeed: 100,
            loop: true,
            startDelay: 100
          });
      });
    </script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="../../js/jsinicio/main.js"></script>

  </body>
</html>
<?php
		}//cierra if
		else
			header("Location: error.php?sErr=".$sError."&sBack=".$sBack);		
?>