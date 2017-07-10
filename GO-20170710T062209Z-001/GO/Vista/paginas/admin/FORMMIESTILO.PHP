<?php
session_start();
	$sNom="";
	$sError="";
	if (isset($_SESSION["usuario"]))
		$sNom = $_SESSION["usuario"];
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
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="./css/main.css">
	
	<!-- ESTILOS DE MENU DE NAVEGACIÓN -->
	<link rel="stylesheet" href="../../css/cssmenunav/bootstrap.css">
    <link rel="stylesheet" href="../../css/cssmenunav/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" type="text/css"  href="../../css/cssmenunav/style.css">
	<!-- ESTILOS DE FONDO-IMAGEN-->
	<link rel="stylesheet" href="../../css/cssfondo/responsive-full-background-image.css">
	<!-- JavaScript DE MENU DE NAVEGACIÓN-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/jsmununav/bootstrap.js"></script>
	<script type="text/javascript" src="../../js/jsadmin/tab.js"></script>
	<!---->
	
	
	<title>Go design</title>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
				<div class="container">
				<div class="navbar-header">
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="../../images/imagesmenu/logo.png" alt="Overlight"></a>
				</div>
				<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="index.php#acerca">Acerca</a></li>
					<li><a href="vista/paginas/usuarionoregistrado/galeria.php">Galeria</a></li>
					<li class="dropdown">
						<a href="regusu.php" class="dropdown-toggle" data-toggle="dropdown">Usuarios <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="regusu.php"> Ver </a></li>
							<li><a href="eliminadosUsuario.php"> Restaurar </a></li>
							<li><a href="eliminadosUsuario.php"> Agregar </a></li>
							
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION["usuario"]; ?> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="../../../controlador/logout.php"> Cerrar sesion</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div> 
	<br></br>
	<br></br>
	<br></br>
	<div class="container">
		<div class="form__top">
			<h2>Modificar <span>Usuario</span></h2>
		</div>		
		<form class="form__reg" action="">
			<input class="inputform" type="text" placeholder="&#128100;  Nombre" autofocus>
			<input class="inputform" type="text" placeholder="&#128100;  Apellido Paterno"  autofocus>
			<input class="inputform" type="text" placeholder="&#128100;  Apellido Materno"  autofocus>
			<input class="inputform" type="text" placeholder="&#128100;  Correo"  autofocus>
			<input class="inputform" type="text" placeholder="&#128222;  Telefono" autofocus >
			<input class="inputform" type="text" placeholder="&#128222;  Contrasena" autofocus>
			<input class="inputform" type="text" placeholder="&#128222;  Tipo de usuario" autofocus>
            
			
			
			<select  class="menudesp" name="select">
			<option class="menudesp" value="value1">Value 1</option> 
			<option  class="menudesp" value="value2">Value 2</option>
			<option class="menudesp" value="value3">Value 3</option>
			</select>
			
			
			
			
            <div class="btn__form">
            	<input class="btn__submit" type="submit" value="Guardar">
            	<input class="btn__reset" type="reset" value="Cancelar">	
            </div>
		</form>
	</div>
	
</body>
<?php
		}//cierra if
		else
			header("Location: error.php?sErr=".$sError."&sBack=".$sBack);		
?>
</html>
