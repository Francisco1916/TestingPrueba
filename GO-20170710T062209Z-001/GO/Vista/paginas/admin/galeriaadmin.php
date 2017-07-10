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
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Galeria</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="http://www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="../../css/cssgal/zerogrid.css">
	<link rel="stylesheet" href="../../css/cssgal/style.css">
	<link rel="stylesheet" href="../../css/cssgal/lightbox.css">
	<link href="../../font/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<link rel="stylesheet" href="../../css/cssgal/bootstrap.min.css">
<link rel="stylesheet" href="../../css/cssgal/font-awesome.min.css">

<link rel="stylesheet" type="text/css"  href="../../css/cssinicio/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/cssinicio/responsive.css">
	
<link rel="shortcut icon" href="../../images/imagesregistro/gt_favicon.png">
<!-- Custom styles for our template -->
<link rel="stylesheet" href="../../css/cssgal/bootstrap-theme.css" media="screen" >
<link rel="stylesheet" href="../../css/cssgal/main.css">

 <script src="../../js/jsgal/jquery-1.11.3.min.js"></script>
<script src="../../js/jsgal/bootstrap.min.js"></script>
	
	
	<script src="../../js/jquery1111.min.js" type="text/javascript"></script>
	<script src="../../js/script.js"></script>
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="../../images/imagesregistro/logo.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav pull-right">
					<li><a href="principaladmin.php">Inicio</a></li>
					<li><a href="principaladmin.php#acerca">Acerca</a></li>
					<li class="active"><a href="galeriaadmin.php">Galeria</a></li>
					<li><a href="compras.php">Reporte</a></li>
					
					<li><a href="contactoadmin.php">Contacto</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="inicioclientes.php"> Gestionar</a></li>
							<li><a href="eliminadosUsuario.php"> Restablecer</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="formAgregaTablet.php"> Agregar</a></li>
							<li><a href="inicio.php"> Gestionar</a></li>
							<li><a href="eliminados.php"> Restablecer</a></li>
						</ul>
					</li>
					
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

</div> <br>
		<br>
			<br>
			<br>
			<br>
		<section class="content-box box-gallery"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
					<div class="col-1-3">
						<div class="wrap-col ">
							<div class="item">
								<a class="example-image-link" href="../../images/imagesgal/33.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
									<div class="zoom-container">
										<div class="zoom-caption">
											<div class="caption-inner">
												<div class="caption-inner1">
													<i class="fa fa-eye"></i>
												</div>
											</div>
										</div>
										<img class="example-image" src="../../images/imagesgal/33.jpg" alt=""/>
									</div>
								</a>
								<div class="item-content">
									<a href="#">CABALLERO</a>
									<p>Reloj para cabellero color palteado, elegante, para cualquier ocasión.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col">
							<div class="item">
								<a class="example-image-link" href="../../images/imagesgal/37.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
									<div class="zoom-container">
										<div class="zoom-caption">
											<div class="caption-inner">
												<div class="caption-inner1">
													<i class="fa fa-eye"></i>
												</div>
											</div>
										</div>
										<img class="example-image" src="../../images/imagesgal/37.jpg" alt=""/>
									</div>
								</a>
								<div class="item-content">
									<a href="#">DAMA</a>
									<p>Juego de collar con aretes, piedra color azul safiro. </p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col">
							<div class="item">
								<a class="example-image-link" href="../../images/imagesgal/36.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
									<div class="zoom-container">
										<div class="zoom-caption">
											<div class="caption-inner">
												<div class="caption-inner1">
													<i class="fa fa-eye"></i>
												</div>
											</div>
										</div>
										<img class="example-image" src="../../images/imagesgal/36.jpg" alt=""/>
									</div>
								</a>
								<div class="item-content">
									<a href="#">PARA PAREJAS</a>
									<p>Par de relojs para cabellero y dama, color oro, marca Rolex.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-1-3">
						<div class="wrap-col ">
							<div class="item">
								<a class="example-image-link" href="../../images/imagesgal/35.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
									<div class="zoom-container">
										<div class="zoom-caption">
											<div class="caption-inner">
												<div class="caption-inner1">
													<i class="fa fa-eye"></i>
												</div>
											</div>
										</div>
										<img class="example-image" src="../../images/imagesgal/35.jpg" alt=""/>
									</div>
								</a>
								<div class="item-content">
									<a href="#">TIFFANY&CO </a>
									<p>Brazalete Tiffany&CO color dorado, para dama. </p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col">
							<div class="item">
								<a class="example-image-link" href="../../images/imagesgal/39.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
									<div class="zoom-container">
										<div class="zoom-caption">
											<div class="caption-inner">
												<div class="caption-inner1">
													<i class="fa fa-eye"></i>
												</div>
											</div>
										</div>
										<img class="example-image" src="../../images/imagesgal/39.jpg" alt=""/>
									</div>
								</a>
								<div class="item-content">
									<a href="#">CARTIER.</a>
									<p>Par de rejoles para dama y caballero color plateado, excelente para toda ocasión.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col">
							<div class="item">
								<a class="example-image-link" href="../../images/imagesgal/38.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
									<div class="zoom-container">
										<div class="zoom-caption">
											<div class="caption-inner">
												<div class="caption-inner1">
													<i class="fa fa-eye"></i>
												</div>
											</div>
										</div>
										<img class="example-image" src="../../images/imagesgal/38.jpg" alt=""/>
									</div>
								</a>
								<div class="item-content">
									<a href="#">COLLAR CIRCULAR</a>
									<p>Collar y aretes circular, color dorado.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-1-3">
						<div class="wrap-col ">
							<div class="item">
								<a class="example-image-link" href="../../images/imagesgal/43.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
									<div class="zoom-container">
										<div class="zoom-caption">
											<div class="caption-inner">
												<div class="caption-inner1">
													<i class="fa fa-eye"></i>
												</div>
											</div>
										</div>
										<img class="example-image" src="../../images/imagesgal/43.jpg" alt=""/>
									</div>
								</a>
								<div class="item-content">
									<a href="#">COLLAR "PAREJA"</a>
									<p>Collar y aretes de pareja en forma de corazón color dorado.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col">
							<div class="item">
								<a class="example-image-link" href="../../images/imagesgal/40.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
									<div class="zoom-container">
										<div class="zoom-caption">
											<div class="caption-inner">
												<div class="caption-inner1">
													<i class="fa fa-eye"></i>
												</div>
											</div>
										</div>
										<img class="example-image" src="../../images/imagesgal/40.jpg" alt=""/>
									</div>
								</a>
								<div class="item-content">
									<a href="#">COLLAR OSITO</a>
									<p>Paquete de collar y aretes en forma de ositos, color dorado.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col">
							<div class="item">
								<a class="example-image-link" href="../../images/imagesgal/44.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
									<div class="zoom-container">
										<div class="zoom-caption">
											<div class="caption-inner">
												<div class="caption-inner1">
													<i class="fa fa-eye"></i>
												</div>
											</div>
										</div>
										<img class="example-image" src="../../images/imagesgal/44.jpg" alt=""/>
									</div>
								</a>
								<div class="item-content">
									<a href="#">COLLAR FLOR</a>
									<p>Collar y aretes en forma de flor con diferentes colores.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
		<hr class="line">
	</div>
</section>
<script src="../../js/jsgal/lightbox-plus-jquery.min.js"></script>

<script type="text/javascript">         
</script>
    <!--<script src="../../js/jsregistro/registro.js"></script>-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="../../js/jsregistro/headroom.min.js"></script>
	<!--<script src="../../js/jsregistro/jQuery.headroom.min.js"></script>
	<script src="../../js/jsregistro/template.js"></script> -->


</div>
</body></html>
<?php
		}//cierra if
		else
			header("Location: error.php?sErr=".$sError."&sBack=".$sBack);		
?>