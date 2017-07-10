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
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Overlight</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- ESTILOS DE MENU DE NAVEGACIÓN -->
	<link rel="stylesheet" href="../../css/cssmenunav/bootstrappanel.css">
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
	

									<!-- SEPARACION DE TIPOS DE USUARIO -->
									
									
									<!-- TIPO DE USUARIO ADMINISTRADOR -->
									<!-- TIPO DE USUARIO ADMINISTRADOR -->
									<!-- TIPO DE USUARIO ADMINISTRADOR -->
									
<?php
					if($_SESSION["tipo"]=="administrador"){
						?>
						
						
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
							<li><a href="eliminadosUsuario.php"> Restaurar </a></li>
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
			</div><!--/.nav-collapse -->
		</div>
	</div> 
						
						
						<script language="JavaScript">	
		function editar(operacion, identificador, valor){
			operacion.value='editar';
			identificador.value=valor;
		}	
		
		function borrar(operacion, identificador, valor){
			var respuesta=confirm("¿Estás seguro que deseas eliminar a este cliente ?");
			if (respuesta==true){
				operacion.value='borrar';
				identificador.value=valor;
			}
			else{
				operacion.value='cancelado';
			}
		}
	</script>
	
	<body  background="../../images/imagesadmin/fondo1p.png">
<form name="ListaTablets" method="post" action="../../../controlador/abcTablets.php">
		<input type="hidden" name="operacion">
		<input type="hidden" name="identificador">
		<input type="hidden" name="ruta" value="inicioclientes.php">
		<table border=0 align=left>
			
		</table>
		<br><br>
		<br><br><br><br>
		<center>
					
	<div class="derecha" align="center" id="buscar"> <input type="search" class="light-table-filter" data-table="order-table" placeholder="Buscar"></div>
	</center>
	<br></br>
		<?php 
			$sColor1= "#282429";
			$sColor2="white";
			$sColorF=$sColor1;
		?>
		<div class="datagrid">
	<div class="container">
		<div class="row">
			<div class="table-responsive">
			<table class="table table-hover table-striped table-bordered order-table table">
			<thead>
				<tr class="warning"bgcolor="<?php echo $sColor1; ?>">
				<th>Nombre</th>
				<th>Categoria</th>
		
			
				<th>Costo</th>
				<th>Horario</th>
				<th>Sede</th>
				<th>Profesor</th>
		
	
				<th>Existencia</th>
				<th>Imagen</th>
				
				<th>Editar</th>
				<th>Borrar</th>
				
				</thead>
				</tr>
				
				<?php
			$conexion = mysqli_connect("localhost", "root", "");
			mysqli_select_db($conexion, "overlight");
			if (!$conexion){
				die("No se pudo conectar a la base de datos.");
			}
			else{
				$sql = "SELECT * FROM cursos where `bandera`= TRUE";
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
							<td><?php echo $fila['categoria']; ?></td>
							
							<td><?php echo $fila['costo']; ?></td>
							<td><?php echo $fila['horario']; ?></td>
							<td><?php echo $fila['sede']; ?></td>
							<td><?php echo $fila['profesor']; ?></td>
						
						
							<td><?php echo $fila['existencia']; ?></td>
							
							
							
							
							
							<td><?php 
									if($fila['imagen']==' ' || $fila['imagen']==null)
										echo '<img src="../../images/imagesguarda/sin_imagen.jpg" width=90 height=90/>';  
									else
										echo '<img src="../../images/imagesguarda/'.$fila['imagen'].'" width=80 height=80/>'; 
								?>
								
							</td>
							
							
							
							
						<td>
								<?php echo '<input type="image" src="../../images/imagesadmin/editar.png" onClick="editar(operacion, identificador,'.$fila['identificador'].')"/>' ?>
							</td>
							<td>
								<?php echo '<input type="image" src="../../images/imagesadmin/borrar.png" onClick="borrar(operacion, identificador,'.$fila['identificador'].')"/>' ?>
							</td>
						</tr>	
						
		<?php
		}//cierra while
				}//cierra if
				else{// Si no hay registros desplegar el mensaje
		?>
					<font size="-1">Sin datos.</font>
		<?php
				}//cierra else
				mysqli_close($conexion);//cierra la conexion a la base de datos
			}//cierra else de la conexion
		?>			
			
			</table>
			</div>
			</div>
		</div>
	</div>
						
						
						
						
						
						    
							
							
									<!-- TIPO DE USUARIO EDITOR -->
									<!-- TIPO DE USUARIO EDITOR -->
									<!-- TIPO DE USUARIO EDITOR -->
						<?php
					}elseif ($_SESSION["tipo"]=="editor") {
						
						?>
					<p>EDITOR</p>
					
					
					
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
					
					
					
					<script language="JavaScript">	
		function editar(operacion, identificador, valor){
			operacion.value='editar';
			identificador.value=valor;
		}	
		
		function borrar(operacion, identificador, valor){
			var respuesta=confirm("¿Estás seguro que deseas eliminar la tablet "+valor+" ?");
			if (respuesta==true){
				operacion.value='borrar';
				identificador.value=valor;
			}
			else{
				operacion.value='cancelado';
			}
		}
	</script>
	
	<body  background="../../images/imagesadmin/fondo1p.png">
<form name="ListaTablets" method="post" action="../../../controlador/abcUsuario.php">
		<input type="hidden" name="operacion">
		<input type="hidden" name="identificador">
		<input type="hidden" name="ruta" value="inicioclientes.php">
		<table border=0 align=left>
			
		</table>
		<br><br>
		<br><br><br><br>
		<center>
					
	<div class="derecha" align="center" id="buscar"> <input type="search" class="light-table-filter" data-table="order-table" placeholder="Buscar"></div>
	</center>
	<br></br>
		<?php 
			$sColor1= "#282429";
			$sColor2="white";
			$sColorF=$sColor1;
		?>
	<div class="container">
		<div class="row">
			<div class="table-responsive">
			<table   border=0 class="table table-striped table-bordered order-table table">
			<thead>
				<tr class="warning"bgcolor="<?php echo $sColor1; ?>">
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Correo electrónico</th>
				<th>Telefono</th>
				<th>contrasena</th>
				<th>tipo</th>
				<th>Editar</th>
				<th>Borrar</th>
				</tr>
				</thead>
				
				
				<?php
			$conexion = mysqli_connect("localhost", "root", "");
			mysqli_select_db($conexion, "overlight");
			if (!$conexion){
				die("No se pudo conectar a la base de datos.");
			}
			else{
				$sql = "SELECT * FROM usuario where `bandera`= TRUE and tipo='cliente' ORDER BY `identificador`";
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
							<td><?php echo $fila['correo']; ?></td>
							<td><?php echo $fila['telefono']; ?></td>
							<td><?php echo $fila['contrasena']; ?></td>
							<td><?php echo $fila['tipo']; ?></td>
						<td>
								<?php echo '<input type="image" src="../../images/imagesadmin/editar.png" onClick="editar(operacion, identificador,'.$fila['identificador'].')"/>' ?>
							</td>
							<td>
								<?php echo '<input type="image" src="../../images/imagesadmin/borrar.png" onClick="borrar(operacion, identificador,'.$fila['identificador'].')"/>' ?>
							</td>
						</tr>	
						
		<?php
		}//cierra while
				}//cierra if
				else{// Si no hay registros desplegar el mensaje
		?>
					<font size="-1">Sin datos.</font>
		<?php
				}//cierra else
				mysqli_close($conexion);//cierra la conexion a la base de datos
			}//cierra else de la conexion
		?>			
			</table>
			</div>
		</div>
	</div>
					
					
					
					
					
					
					<?php
					} else {
						?>
									<!-- TIPO DE USUARIO CLIENTE -->
									<!-- TIPO DE USUARIO CLIENTE -->
									<!-- TIPO DE USUARIO CLIENTE -->
									
									
									
				
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
					
					<?php
}
						?>
<!-- FINAL DE TIPO DE USUARIOS -->
						
	
	
	<script src="../../js/jsadmin/jquery-1.11.3.min.js"></script>
	<script src="../../js/jsadmin/bootstrap.min.js"></script>
</body>
</html>
<?php
		}//cierra if
		else
			header("Location: error.php?sErr=".$sError."&sBack=".$sBack);		
?>