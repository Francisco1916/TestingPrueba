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
	<title>Document</title>
	<script type="text/javascript" src="../../js/jsadmin/tab.js"></script>
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../../css/cssadmin/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/cssadmin/font-awesome.min.css">
	
	<link rel="shortcut icon" href="../../images/imagesregistro/gt_favicon.png">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../../css/cssadmin/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="../../css/cssadmin/main.css">
	<link rel="stylesheet" href="../../css/cssadmin/bootstrap.css">
	<!--<link rel="stylesheet" href="css/cssadmini/bootstrap-theme.css">-->
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
					<li><a href="compras.php">Reporte</a></li>
					
					<li><a href="contactoadmin.php">Contacto</a></li>
					<li class="dropdown active">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="active"><a href="inicioclientes.php"> Gestionar</a></li>
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
<form name="ListaTablets" method="post" action="../../../Controlador/abcUsuario.php">
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
						<!-- CONEXION NUMERO 2 -->
	<?php
			$conexiondos = mysqli_connect("localhost", "root", "");
			mysqli_select_db($conexiondos, "products");
			if (!$conexiondos){
				die("No se pudo conectar a la base de datos.");
			}
			else{
	$qlm= "SELECT Count(*) AS Total FROM products";
	
	
				$consultados = mysqli_query($conexiondos, $qlm) or die("Error en la consulta: $qlm. ".mysqli_error($conexiondos));
			
			
				$filasdos = mysqli_num_rows($consultados);
				if ($filasdos > 0){  
					while($filados = mysqli_fetch_assoc($consultados)){
					
						/*if ($sColorF==$sColor1)
							$sColorF=$sColor2;
						else
							$sColorF=$sColor1;*/
			?>
			<tr>
			<!-- <td align="center" WIDTH="50" height="30px"><?php echo ("Total de usuarios: ".$filados["Total"]); ?></td>-->
				</tr>			
							
							
							
								
						
		<?php
					}//cierra while
					
				}//cierra if
				else{// Si no hay registros desplegar el mensaje
				
		?>
					<font size="-1">Sin datos.</font>
		
		<?php
				}//cierra else
					
				mysqli_close($conexiondos);//cierra la conexion a la base de datos
			}//cierra else de la conexion
		?>
		
		<!--CIERRE DE CONTADOR DE PRODUCTOS-->
		<br></br>
		<?php 
			$sColor1= "#f4c4f2";
			$sColor2="white";
			$sColorF=$sColor1;
		?>
	<div class="container">
		<div class="row">
			<div class="table-responsive">
			<table   border=0 class="table table-striped table-bordered order-table table">
			<thead>
				<tr class="warning"bgcolor="<?php echo $sColor1; ?>">
					
					
				<!--<th>ID</th>-->
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Sexo</th>
				<th>País</th>
				<th>Estado</th>
				<!--<th>Código postal</th> -->
				<th>ciudad</th>
				<!--<th>colonia</th>-->
				<!--<th>calle</th>-->
				<th>Correo electrónico</th>
				<th>Contraseña usuario</th>
				<!--<th>Contraseña administrador</th>-->
		
				
				<th>Editar</th>
				<th>Borrar</th>
				</tr>
				
				</thead>
				
				
				<?php
			$conexion = mysqli_connect("localhost", "root", "");
			mysqli_select_db($conexion, "products");
			if (!$conexion){
				die("No se pudo conectar a la base de datos.");
			}
			else{
				$sql = "SELECT * FROM usuario where `bandera`= TRUE ORDER BY `identificador`";
				$consulta = mysqli_query($conexion, $sql) or die("Error en la consulta: $sql. ".mysqli_error($conexion));
				$filas = mysqli_num_rows($consulta);
				if ($filas > 0){  
					while($fila = mysqli_fetch_assoc($consulta)){
						if ($sColorF==$sColor1)
							$sColorF=$sColor2;
						else
							$sColorF=$sColor1;
			?>
			<tbody>
				<tr bgcolor="<?php echo $sColorF;?>">	
					<!--<td><?php echo $fila['identificador']; ?></td>-->
							
							<td><?php echo $fila['nombre']; ?></td>
							<td><?php echo $fila['apepat']; ?></td>
							<td><?php echo $fila['apemat']; ?></td>
							<td><?php echo $fila['sexo']; ?></td>
							<td><?php echo $fila['pais']; ?></td>
							<td><?php echo $fila['estado']; ?></td>
							<!--<td><?php echo $fila['postal']; ?></td>-->
							<td><?php echo $fila['ciudad']; ?></td>
							<!--<td><?php echo $fila['colonia']; ?></td>-->
							<!--<td><?php echo $fila['calle']; ?></td>-->
							<td><?php echo $fila['correo']; ?></td>
							<td><?php echo $fila['password']; ?></td>
							<!--<td><?php echo $fila['pasadmin']; ?></td>-->
							
							
							
						<td>
								<?php echo '<input type="image" src="../../images/imagesadmin/editar.png" onClick="editar(operacion, identificador,'.$fila['identificador'].')"/>' ?>
							</td>
							<td>
								<?php echo '<input type="image" src="../../images/imagesadmin/borrar.png" onClick="borrar(operacion, identificador,'.$fila['identificador'].')"/>' ?>
							</td>
						</tr>	
</tbody>						
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


	<script src="../../js/jsadmin/jquery-1.11.3.min.js"></script>
	<script src="../../js/jsadmin/bootstrap.min.js"></script>
</body>
</html>
<?php
		}//cierra if
		else
			header("Location: error.php?sErr=".$sError."&sBack=".$sBack);		
?>