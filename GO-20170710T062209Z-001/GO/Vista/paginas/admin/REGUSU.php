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
	<?PHP include "ADMINENLACES.PHP"?>

	

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
							<li><a href="compras.php">Registro</a></li>
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
	
<body>
	<form name="ListaTablets" method="post" action="../../../controlador/abcUsuario.php">
		<input type="hidden" name="operacion">
		<input type="hidden" name="identificador">
		<input type="hidden" name="ruta" value="inicioclientes.php">
			<br><br><br><br><br><br>
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
												<th>Apellido Paterno</th>
												<th>Apellido Materno</th>
												<th>Correo electr&oacute;nico</th>
												<th>Telefono</th>
												<th>Contrase&ntilde;a</th>
												<th>Tipo</th>
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
										$sql = "SELECT * FROM usuario where `bandera`= TRUE and tipo='cliente' or tipo='editor' ORDER BY `identificador`";
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
											}
													}
													else{
											?>
														<font size="-1">Sin datos.</font>
											<?php
													}
													mysqli_close($conexion);
												}
											?>			
			
								</table>
							</div>
						</div>
					</div>
				</div>
			</form>
						
									<!-- TIPO DE USUARIO EDITOR -->
									<!-- TIPO DE USUARIO EDITOR -->
									<!-- TIPO DE USUARIO EDITOR -->
			<?php
				}elseif ($_SESSION["tipo"]=="editor") {		
			?>
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						<a class="navbar-brand" href="index.html"><img src="../../images/imagesmenu/logo.png" alt="Overlight"></a>
				</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav pull-right">
						<li><a href="compras.php">Registro</a></li>
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
				<br><br><br><br><br><br>
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
					}
							}
							else{
					?>
								<font size="-1">Sin datos.</font>
					<?php
							}
							mysqli_close($conexion);
						}
					?>			
				</table>
			</div>
		</div>
	</div>
	</form>
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
				<?php include "../usuarioregistrado/tienda.php";?>				
					<?php
			}
						?>
</body>
</html>
<?php
		}//cierra if
		else
			header("Location: error.php?sErr=".$sError."&sBack=".$sBack);		
?>