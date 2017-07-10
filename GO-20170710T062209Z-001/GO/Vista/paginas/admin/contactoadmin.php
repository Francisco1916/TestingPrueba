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
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Divas Mom&Baby </title>
	 <script type="text/javascript" src="../../js/jsadmin/bloqueoespecial.js"></script>
	  <script type="text/javascript" src="../../js/jsadmin/valnum.js"></script>

	<link rel="shortcut icon" href="../../images/imagesregistro/gt_favicon.png"> <!-- IMAGEN DE ARRIBA T -->
	  <!-- MENU DE NAVEGACION-->
	  <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	  <link rel="stylesheet" href="../../css/cssregistro/bootstrap.min.css"> <!-- MENU RESPONSIVO -->
	<link rel="stylesheet" href="../../css/cssregistro/font-awesome.min.css">
	<link rel="stylesheet" href="../../css/csscontacto/contac.css">
	
	<link rel="stylesheet" type="text/css"  href="../../css/cssinicio/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/cssinicio/responsive.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../../css/cssregistro/bootstrap-theme.css" media="screen" > <!-- MENU RESPONSIVO -->
	<link rel="stylesheet" href="../../css/cssregistro/main.css"> <!-- MENU RESPONSIVO -->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
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
					<li><a href="principaladmin.php">Inicio</a></li>
					<li><a href="principaladmin.php#acerca">Acerca</a></li>
					<li><a href="galeriaadmin.php">Galeria</a></li>
					
					<li class="active"><a href="contactoadmin.php">Contacto</a></li>
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

	<br><br><br><br><br>
	<!-- /Contacto -->
	<link rel="stylesheet" type="text/css" href="../../css/cssadmin/contac.css">
	<form action="enviar.php" method="post">
		<h2>Contacto</h2>
		<input type="text" name="Nombre" placeholder="Nombre" required>
		<input type="text" name="Correo" placeholder="Correo" required>
		<input type="text" name="Telefono" placeholder="Telefono" required onkeypress="return justNumbers(event);">
		<textarea name="Mensaje" placeholder="Escriba aqui su mensaje" required></textarea>
		<input type="button" value="Enviar" id="boton">
	</form>


	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contactanos</h3>
						<div class="widget-body">
							<p>271 709 9504<br>
								<a href="mailto:#">divasm&baby@gamil.com</a><br>
								<br>
								Av. constitucion #234 entre
								calles 8 y 10 colonia Papu
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<!--<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>-->

					</div>
					<div class="col-md-6 widget">
						<h3 class="widget-title">Tenemos...</h3>
						<div class="widget-body">
							<p>Venta de mayoreo y menudeo de ropa, zapatos y accesorios; asi como productos de temporada de calidad.
								Hacemos envios dentro y fuera de la republica</p>	
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="../../js/jsinicio/headroom.min.js"></script>
	<!--<script src="../../js/jsinicio/jQuery.headroom.min.js"></script>
	<script src="../../js/jsinicio/template.js"></script>-->
</body>
</html>
<?php
		}//cierra if
		else
			header("Location: error.php?sErr=".$sError."&sBack=".$sBack);		
?>