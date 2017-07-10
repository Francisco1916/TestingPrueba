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
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../css/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="../../../css/main.css">
	<?PHP include "ADMINENLACES.PHP"?>
</head>
									<!-- SEPARACION DE TIPOS DE USUARIO -->
									
									<!-- TIPO DE USUARIO ADMINISTRADOR -->
									<!-- TIPO DE USUARIO ADMINISTRADOR -->
									<!-- TIPO DE USUARIO ADMINISTRADOR -->
							<?php
								if($_SESSION["tipo"]=="administrador"){
							?>
<body>

	  	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						<a class="navbar-brand" href="index.html"><img src="../../images/imagesmenu/logo.png" alt="Overlight"></a>
				</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav pull-right">
							<li class="dropdown">
								<a href="regusu.php" class="dropdown-toggle" data-toggle="dropdown">Usuarios <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="regusu.php"> Ver </a></li>
										<li><a href="eliminadosUsuario.php"> Restaurar </a></li>
										<li><a href="registro.php"> Agregar </a></li>	
									</ul>
							</li>
							<li class="dropdown">
								<a href="regusu.php" class="dropdown-toggle" data-toggle="dropdown">Cursos <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="vercursos.php"> Ver </a></li>
										<li><a href="eliminados.php"> Restaurar </a></li>
										<li><a href="formagregatablet.php"> Agregar </a></li>
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
<br><br>
	<div>
		<br><br>
		<fieldset>
			<div class="contenedor">
				<div class="form__top">
					<h2>Registro <span>GoDesign</span></h2>
				</div>		
						<form class="form__reg"  action="" method="post">
							<label> Nombre</label>
								<br>
								<input class="inputform" type="text" name="nombre">
								<br>
							<label> Apellido Paterno</label>
								<input class="inputform" type="text" name="apepat">
								<br>
							<label> Apellido Materno</label>
								<input class="inputform" type="text" name="apemat">
								<br>
							<label> Correo electrónico</label>
								<input class="inputform" type="text" name="correo">
								<br>
							<label> Teléfono </label>
								<input class="inputform" type="text" name="telefono">
								<br>
							<label> Contraseña</label>
								<input class="inputform" type="text" name="pass">
								<br>
							<label> Repite Contraseña</label>
								<input class="inputform" type="text" name="rpass">
								<br><br>
									<div class="ResForm" style="width: 100%; color: #fff; text-align: center; margin: 0;"></div>				
									<div class="btn__form">
										<input class="btn__submit" type="submit" name="submit" type ="submit" value="Registrar" class="btn btn-success btn-block" onClick="return validar();">
										<input class="btn__reset" type="button" name="Submit" value="Cancelar" onClick="window.location = 'regusu.php';">
									</div>
								
								
						</form> 
						<?php
							if(isset($_POST['submit'])){
								require("../../../Modelo/registro.php");
														}
						?>
			</fieldset>
	</div>
</body>

				<?php
					}elseif ($_SESSION["tipo"]=="editor") {		
				?>
				<body>

	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						<a class="navbar-brand" href="index.html"><img src="../../images/imagesmenu/logo.png" alt="Overlight"></a>
				</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav pull-right">
							<li class="dropdown">
								<a href="regusu.php" class="dropdown-toggle" data-toggle="dropdown">Usuarios <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="regusu.php"> Ver </a></li>
										<li><a href="eliminadosUsuario.php"> Restaurar </a></li>
										<li><a href="registro.php"> Agregar </a></li>	
									</ul>
							</li>
							<li class="dropdown">
								<a href="regusu.php" class="dropdown-toggle" data-toggle="dropdown">Cursos <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="vercursos.php"> Ver </a></li>
										<li><a href="eliminados.php"> Restaurar </a></li>
										<li><a href="formagregatablet.php"> Agregar </a></li>
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
<br><br>
	<div>
		<br><br>
		<fieldset>
			<div class="contenedor">
				<div class="form__top">
					<h2>Registro <span>GoDesign</span></h2>
				</div>		
						<form class="form__reg"  action="" method="post">
							<label> Nombre</label>
								<br>
								<input class="inputform" type="text" name="nombre">
								<br>
							<label> Apellido Paterno</label>
								<input class="inputform" type="text" name="apepat">
								<br>
							<label> Apellido Materno</label>
								<input class="inputform" type="text" name="apemat">
								<br>
							<label> Correo electrónico</label>
								<input class="inputform" type="text" name="correo">
								<br>
							<label> Teléfono </label>
								<input class="inputform" type="text" name="telefono">
								<br>
							<label> Contraseña</label>
								<input class="inputform" type="text" name="pass">
								<br>
							<label> Repite Contraseña</label>
								<input class="inputform" type="text" name="rpass">
								<br><br>
									<div class="ResForm" style="width: 100%; color: #fff; text-align: center; margin: 0;"></div>				
									<div class="btn__form">
										<input class="btn__submit" type="submit" name="submit" type ="submit" value="Registrar" class="btn btn-success btn-block" onClick="return validar();">
										<input class="btn__reset" type="button" name="Submit" value="Cancelar" onClick="window.location = 'regusu.php';">
									</div>
								
								
						</form> 
						<?php
							if(isset($_POST['submit'])){
								require("../../../Modelo/registro.php");
														}
						?>
			</fieldset>
	</div>
</body>


<?php
					} else {
					?>
									<!-- TIPO DE USUARIO CLIENTE -->
									<!-- TIPO DE USUARIO CLIENTE -->
									<!-- TIPO DE USUARIO CLIENTE -->
					
					<?php
			}
						?>



<?php
		}//cierra if
		else
			header("Location: error.php?sErr=".$sError."&sBack=".$sBack);		
?>