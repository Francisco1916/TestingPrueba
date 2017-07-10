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

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Overlight </title>
    <meta name="description" content="Your Description Here">
    <meta name="keywords" content="free boostrap, bootstrap template, freebies, free theme, free website, free portfolio theme, portfolio, personal, cv">
    <meta name="author" content="Jenn, ThemeForces.com">

    <link rel="shortcut icon" href="Vista/images/imagesmenu/logito.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
	<!-- Estilos generales -->
   <link rel="stylesheet" href="../../css/cssmenunav/bootstrap.css">
   <link rel="stylesheet" href="../../css/cssmenunav/bootstrap-theme.css" media="screen" >
   <link rel="stylesheet" type="text/css"  href="../../css/cssmenunav/style.css">
   <!-- ESTILOS DE FONDO-IMAGEN-->
	<link rel="stylesheet" href="../../css/cssfondo/responsive-full-background-image.css">
   <!-- javascripts menu-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script type="text/javascript" src="../../js/jsmununav/bootstrap.js"></script>
	
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
					<li class="active"><a href="index.php">Inicio</a></li>
					<li><a href="index.php#acerca">Acerca</a></li>
					<li><a href="vista/paginas/usuarionoregistrado/galeria.php">Galeria</a></li>
					
					
					<li><a href="vista/paginas/usuarionoregistrado/contacto.php">Contacto</a></li>
					<li><a href="vista/paginas/usuarionoregistrado/registro.php">Registro</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION["usuario"]; ?> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="../../../controlador/logout.php"> Cerrar sesion</a></li>
						</ul>
					</li>
					
					
					
					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
		
		
		<br><br><br><br>
		<fieldset>
			
				<form id="formEditaUsuario" name="formEditaUsuario" method="post" action="../../../Modelo/editaUsuario.php">
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
					
					<table border=0 align="center">
						<tr>
							<th align=right>id</th>
							<td>
								<input type="text" name="identificador" maxlength="5" size="3" value="<?php echo $fila['identificador']; ?>" disabled>
								<input type="hidden" name="identificador" value="<?php echo $fila['identificador']; ?>">
							</td>
						</tr>
						<tr>
							<th align=right> Nombre</th>
							<td><input type="text" name="nombre" maxlength="50" size="25" value="<?php echo $fila['nombre']; ?>"></td>
						</tr>
						<tr>
							<th align=right>Apellido paterno</th>
							<td><input type="text" name="apepat" maxlength="50" size="25" value="<?php echo $fila['apepat']; ?>"></td>
						</tr>
						<tr>
							<th align=right>Apellido Materno</th>
							<td><input type="text" name="apemat" maxlength="50" size="25" value="<?php echo $fila['apemat']; ?>"></td>
						</tr>
						<tr>
							<th align=right>correo</th>
							<td><input type="text" name="correo" maxlength="50" size="25" value="<?php echo $fila['correo']; ?>"></td>
						</tr>
						<tr>
							<th align=right>telefono</th>
							<td><input type="text" name="telefono" maxlength="50" size="25" value="<?php echo $fila['telefono']; ?>"></td>
						</tr>
						<tr>
							<th align=right>contraseña</th>
							<td><input type="text" name="contrasena" maxlength="50" size="25" value="<?php echo $fila['contrasena']; ?>"></td>
						</tr>
						
							                <th align=right>categoria</th>
										
										<td>
											<select name="tipo">
												<option value="<?php echo $fila['tipo']; ?>"><?php echo $fila['tipo']; ?></option>
												<option value="cliente">cliente</option>
												<option value="administrador">administrador</option>
									
																					
											</select>
										</td>
						</tr>
						
						<tr>
							<th align=center colspan=2><input style="background:#541f39;color:#fff;border-radius: 18px 18px;-moz-border-radius: 18px 18px;-webkit-border-radius: 18px 18px;font-size:18px;font-style:normal;border:solid 2px #a94e9b;" type ="submit" value="Editar" onClick="return validarCampos();">
							<input style="background:#541f39;color:#fff;border-radius: 18px 18px;-moz-border-radius: 18px 18px;-webkit-border-radius: 18px 18px;font-size:18px;font-style:normal;border:solid 2px #a94e9b;" type="submit" name="Submit" value="Cancelar" onClick="formEditaUsuario.action='inicioclientes.php';"></td>
						</tr>				
						<?php mysqli_close($conexion); ?>
					</table>
					
					<?php 
							}
						} 
					?>
				</form>
		</fieldset>
	</div>
</body>
<?php
		}//cierra if
		else
			header("Location: error.php?sErr=".$sError."&sBack=".$sBack);		
?>