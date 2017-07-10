<?php
session_start();
	$sNom="";
	$sError="";

	if (isset($_SESSION["usuario"]))
		$sNom = $_SESSION["usuario"];
	else{
		$sError = "No has iniciado sesion, da clic en el siguiente enlace";
		$sBack = "index.php";
	}
?>
<?php
		if ($sError == ""){
?>
<head>
<title>Overlight</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <!-- ESTILOS DE MENU DE NAVEGACIÓN -->
	<link rel="stylesheet" href="../../css/cssmenunav/bootstrappanelrespaldo.css">
    <link rel="stylesheet" href="../../css/cssmenunav/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" type="text/css"  href="../../css/cssmenunav/style.css">
	<!-- ESTILOS DE FONDO-IMAGEN-->
	<link rel="stylesheet" href="../../css/cssfondo/responsive-full-background-image.css">
	<!-- JavaScript DE MENU DE NAVEGACIÓN-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/jsmununav/bootstrap.js"></script>
	<script type="text/javascript" src="../../js/jsadmin/tab.js"></script>
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/jsmenunav/bootstrapmenunav.js"></script>
	<!---->
	
	<script language="JavaScript">		
		function reestablecer(operacion, identificador, valor){
			operacion.value='reestablecer';
			identificador.value=valor;
		}
		function eliminar(operacion, identificador, valor){
			var respuesta=confirm("\u00BFEst\u00E1s seguro que deseas eliminar el usuario "+valor+" de forma permanente?");
			if (respuesta==true){
				operacion.value='eliminar';
				identificador.value=valor;
			}
			else{
				operacion.value='cancelado2';
			}
		}
	</script>
</head>

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
					
					<li class="dropdown">
						<a href="regusu.php" class="dropdown-toggle" data-toggle="dropdown">Usuarios <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="regusu.php"> Ver </a></li>
							<li><a href="eliminadosUsuario.php"> Restaurar </a></li>
							
						</ul>
					</li>
					
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

<body  background="../../images/imagesadmin/fondo1p.png">
<br><br>

<br>
	
	<br>
	
	<br><br>
	<center>
					
	<div class="derecha" align="center" id="buscar"> <input type="search" class="light-table-filter" data-table="order-table" placeholder="Buscar"></div>
	</center>
	
	<form name="ListaTablets" method="post" action="../../../Controlador/abcUsuario.php">
		<input type="hidden" name="operacion">
		<input type="hidden" name="identificador">
		
	
		
		
		<br>
		<?php 
			$sColor1= "#404040 ";
			$sColor2="white";
			$sColorF=$sColor1;
		?>
		<div class="container">
		<div class="row">
			<div class="table-responsive">
			<table class="table table-hover table-striped table-bordered order-table table">
			<thead>
				<tr class="warning"bgcolor="<?php echo $sColor1; ?>">
				
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Correo</th>
				<th>Telefono</th>
				<th>Contraseña</th>
				<th>Restablecer</th>
				<th>Eliminar</th>
				
				</thead>
			</tr>
			<?php
			$conexion = mysqli_connect("localhost", "root", "");
			mysqli_select_db($conexion, "overlight");
			if (!$conexion){
				die("No se pudo conectar a la base de datos.");
			}
			else{
				$sql = "SELECT * FROM usuario where `bandera`=FALSE ORDER BY identificador";
				$consulta = mysqli_query($conexion, $sql) or die("Error en la consulta: $sql. ".mysqli_error($conexion));
				$filas = mysqli_num_rows($consulta);
				if ($filas > 0){
					while($fila = mysqli_fetch_assoc($consulta)){
						if ($sColorF==$sColor1)
							$sColorF=$sColor2;
						else
							$sColorF=$sColor1;
			?>
						<tr bgcolor="<?php echo $sColorF;?>">	
							
							<td><?php echo $fila['nombre']; ?></td>
							<td><?php echo $fila['apepat']; ?></td>
							
							<td><?php echo $fila['apemat']; ?></td>
							<td><?php echo $fila['telefono']; ?></td>
							<td><?php echo $fila['correo']; ?></td>
							<td><?php echo $fila['contrasena']; ?></td>
							
							
							
							
						
							
							
							
							<td>
							<?php echo '<input type="image" src="../../images/imagesadmin/restaurar.png" onClick="reestablecer(operacion, identificador,'.$fila['identificador'].')"/>' ?>

							</td>
							<td>
								<?php echo '<input type="image" src="../../images/imagesadmin/borrar.png" onClick="eliminar(operacion, identificador,'.$fila['identificador'].')"/>' ?>
							</td>
						</tr>		
		<?php
					}//cierra while
				}//cierra if
				else{// Si no hay registros desplegar el mensaje
		?>
			<table border=0 align=center>
				<tr><td>Sin datos disponibles.</td></tr>
			</table>
		<?php
				}//cierra else
				mysqli_close($conexion);//cierra la conexion a la base de datos
			}//cierra else de la conexion
		?>			
		</table>
		</div>
		</div>
	</div>

	</form>

</body>

<?php
		}//cierra if
		else
			header("Location: error.php?sErr=".$sError."&sBack=".$sBack);		
?>