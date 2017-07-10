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
<?PHP include "ADMINENLACES.PHP"?>
	<script language="JavaScript">		
		function reestablecer(operacion, identificador, valor){
			operacion.value='reestablecer';
			identificador.value=valor;
		}
		
		function eliminar(operacion, identificador, valor){
			var respuesta=confirm("\u00BFEst\u00E1s seguro que deseas eliminar el producto "+valor+" de forma permanente?");
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
										<li><a href="formAgregaTablet.php"> Ver </a></li>
										<li><a href="eliminados.php"> Restaurar </a></li>
										<li><a href="registrocursos.php"> Agregar </a></li>
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
<body>
<br><br>

<br>
	
	<br>
	
	<br><br>
	<center>
					
	<div class="derecha" align="center" id="buscar"> <input type="search" class="light-table-filter" data-table="order-table" placeholder="Buscar"></div>
	</center>
	
	<form name="ListaTablets" method="post" action="../../../Controlador/abcTablets.php">
		<input type="hidden" name="operacion">
		<input type="hidden" name="identificador">
		
	
		
		
		<br>
		<?php 
			$sColor1= "#404040";
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
				<th>Categoria</th>
		
			
				<th>Costo</th>
				<th>Horario</th>
				<th>Sede</th>
				<th>Profesor</th>
		
	
				<th>Existencia</th>
				<th>Imagen</th>
				
		
			
				
			
				<th>Restablecer</th>
				<th>Eliminar</th>
				<!--<th>Caracteristicas</th>-->
				</thead>
			</tr>
			<?php
			$conexion = mysqli_connect("localhost", "root", "");
			mysqli_select_db($conexion, "overlight");
			if (!$conexion){
				die("No se pudo conectar a la base de datos.");
			}
			else{
				$sql = "SELECT * FROM cursos where `bandera`=FALSE ORDER BY identificador";
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
								<?php echo '<input type="image" src="../../images/imagesadmin/restaurar.png" width=50 height=50 onClick="reestablecer(operacion, identificador,'.$fila['identificador'].')"/>' ?>
							</td>
							<td>
								<?php echo '<input type="image" src="../../images/imagesadmin/borrar.png" width=50 height=50 onClick="eliminar(operacion, identificador,'.$fila['identificador'].')"/>' ?>
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