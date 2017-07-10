<?php
	session_start();
	$identificador = $_REQUEST["identificador"];
	$sNom="";
	$sError="";

	if (isset($_SESSION["usuario"]))
		$sNom = $_SESSION["usuario"];
	else{
		$sError = "No has iniciado sesion, da clic en el siguiente enlace";
		$sBack = "index.php";
	}
	if ($sError == ""){
?>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="./css/main.css">
	
	<!-- ESTILOS DE MENU DE NAVEGACIÓN -->
	<link rel="stylesheet" href="../../css/cssmenunav/bootstrapformedita.css">
    <link rel="stylesheet" href="../../css/cssmenunav/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" type="text/css"  href="../../css/cssmenunav/style.css">
	<!-- ESTILOS DE FONDO-IMAGEN-->
	<link rel="stylesheet" href="../../css/cssfondo/responsive-full-background-image.css">
	<!-- JavaScript DE MENU DE NAVEGACIÓN-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/jsmununav/bootstrap.js"></script>
	<script type="text/javascript" src="../../js/jsadmin/tab.js"></script>
	<!---->
	
	
		<script language="javascript">
			function validarCampos(){  
				var ot=document.formEditaUsuario;
				if(ot.precio.value==""){
					alert("El campo precio esta vacio");
					ot.precio.focus();
					return false;
				}
				if(isNaN(ot.precio.value)){
					alert("Ingrese solo numeros en el campo precio");
					return false;
				}
				else 
					return true;
			}
		</script>
</head>
<!-- SEPARACION DE TIPOS DE USUARIO -->
									
									
									<!-- TIPO DE USUARIO ADMINISTRADOR -->
									<!-- TIPO DE USUARIO ADMINISTRADOR -->
									<!-- TIPO DE USUARIO ADMINISTRADOR -->
									
<?php
	if($_SESSION["tipo"]=="administrador"){
?>


<body>
	<br><br>
	<div>
	<br>
	
	<br>
		
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
		
		
		
		<fieldset>
		<div class="contenedor">
		<div class="form__top">
			<h2>Modificar <span>Usuario</span></h2>
		</div>		
			
				<form class="form__reg" id="formEditaUsuario" name="formEditaUsuario" method="post" action="../../../Modelo/editaUsuario.php">
					<?php
						$conexion = mysqli_connect("localhost", "root", "");
						mysqli_select_db($conexion, "overlight");
						if (!$conexion){
							die("No se pudo conectar a la base de datos.");
						}
						else{
							$sql = "SELECT * FROM usuario where `identificador`='$identificador';";
							$consulta = mysqli_query($conexion, $sql) or die("Error en la consulta: $sql. ".mysqli_error($conexion));
							while($fila = mysqli_fetch_assoc($consulta)){
					?>
					
					
						<input type="hidden" name="identificador" value="<?php echo $fila['identificador']; ?>">
						<br>
						<input class="inputform" type="text" name="nombre" value="<?php echo $fila['nombre']; ?>">
						<br>
						<input class="inputform" type="text" name="apepat"  value="<?php echo $fila['apepat']; ?>">
						<br>
						<input class="inputform" type="text" name="apemat"  value="<?php echo $fila['apemat']; ?>">
						<br>
						<input class="inputform" type="text" name="correo"  value="<?php echo $fila['correo']; ?>">
						<br>
						<input class="inputform" type="text" name="telefono"  value="<?php echo $fila['telefono']; ?>">
						<br>
						<input class="inputform" type="text" name="contrasena"  value="<?php echo $fila['contrasena']; ?>">
						<br>
						
							                
										
					<?php
					if($_SESSION["tipo"]=="administrador"){
						?>
						
						
									
											<select class="menudesp" name="tipo">
												<option class="menudesp" value="<?php echo $fila['tipo']; ?>"><?php echo $fila['tipo']; ?></option>
												<option class="menudesp" value="cliente">Cliente</option>
												<option class="menudesp" value="editor">Editor</option>
												<option class="menudesp" value="administrador">Administrador</option>
									
																					
											</select>
					<?php
								} else {
						?>
					<select class="menudesp" name="tipo">
												<option class="menudesp" value="<?php echo $fila['tipo']; ?>"><?php echo $fila['tipo']; ?></option>
												
												
									
																					
											</select>
					
					<?php
}
						?>
										
						
						<br><br><br><br><br><br><br><br><br>
					
						 <div class="btn__form">
            	<input class="btn__submit" type ="submit" value="Guardar" onClick="return validarCampos();">
            	<input class="btn__reset" type="button" name="Submit" value="Cancelar" onClick="window.location = 'regusu.php';">
            </div>
						
						<?php mysqli_close($conexion); ?>
					
					
					<?php 
							}
						} 
					?>
				</form>
		</fieldset>
	</div>
</body>
									<!-- TIPO DE USUARIO EDITOR -->
									<!-- TIPO DE USUARIO EDITOR -->
									<!-- TIPO DE USUARIO EDITOR -->
			<?php
				}elseif ($_SESSION["tipo"]=="editor") {		
			?>
<body>
	<br><br>
	<div>
	<br>
	
	<br>
		
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
		
		
		
		
		<fieldset>
		<div class="contenedor">
		<div class="form__top">
			<h2>Modificar <span>Usuario</span></h2>
		</div>		
			
				<form class="form__reg" id="formEditaUsuario" name="formEditaUsuario" method="post" action="../../../Modelo/editaUsuario.php">
					<?php
						$conexion = mysqli_connect("localhost", "root", "");
						mysqli_select_db($conexion, "overlight");
						if (!$conexion){
							die("No se pudo conectar a la base de datos.");
						}
						else{
							$sql = "SELECT * FROM usuario where `identificador`='$identificador';";
							$consulta = mysqli_query($conexion, $sql) or die("Error en la consulta: $sql. ".mysqli_error($conexion));
							while($fila = mysqli_fetch_assoc($consulta)){
					?>
					
					
						<input type="hidden" name="identificador" value="<?php echo $fila['identificador']; ?>">
						<br>
						<input class="inputform" type="text" name="nombre" value="<?php echo $fila['nombre']; ?>">
						<br>
						<input class="inputform" type="text" name="apepat"  value="<?php echo $fila['apepat']; ?>">
						<br>
						<input class="inputform" type="text" name="apemat"  value="<?php echo $fila['apemat']; ?>">
						<br>
						<input class="inputform" type="text" name="correo"  value="<?php echo $fila['correo']; ?>">
						<br>
						<input class="inputform" type="text" name="telefono"  value="<?php echo $fila['telefono']; ?>">
						<br>
						<input class="inputform" type="text" name="contrasena"  value="<?php echo $fila['contrasena']; ?>">
						<br>
						
							                
										
					<?php
					if($_SESSION["tipo"]=="administrador"){
						?>
						
						
									
											<select class="menudesp" name="tipo">
												<option class="menudesp" value="<?php echo $fila['tipo']; ?>"><?php echo $fila['tipo']; ?></option>
												<option class="menudesp" value="cliente">Cliente</option>
												
									
																					
											</select>
					<?php
								} else {
						?>
					<select class="menudesp" name="tipo">
												<option class="menudesp" value="<?php echo $fila['tipo']; ?>"><?php echo $fila['tipo']; ?></option>
												
												
									
																					
											</select>
					
					<?php
}
						?>
										
						
						<br><br><br><br><br><br><br><br><br>
					
						 <div class="btn__form">
            	<input class="btn__submit" type ="submit" value="Guardar" onClick="return validarCampos();">
            	<input class="btn__reset" type="button" name="Submit" value="Cancelar" onClick="window.location = 'regusu.php';">
            </div>
						
						<?php mysqli_close($conexion); ?>
					
					
					<?php 
							}
						} 
					?>
				</form>
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