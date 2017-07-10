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

			<br></br>
		<?PHP include "ADMINENLACES.PHP"?>	
		
	<br></br>
	<br></br>
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

<h4 align=center><strong>Detalle de la compra</strong></h4>
		<h4 align=center>	<strong> Folio <?php echo $_POST['folio']; ?> </strong></h4>
		<br>
			
		
		
		<?php 
			$sColor1="#282429";
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
			
				<th>IDENTIFICADOR DE CURSO</th>
				<th>PRECIO</th>
				<th>CANTIDAD</th>
				<th>SUBTOTAL</th>
											</tr>
									</thead>
			<?php
			$conexion = mysqli_connect("localhost", "root", "");
			mysqli_select_db($conexion, "overlight");
			if (!$conexion){
				die("No se pudo conectar a la base de datos.");
			}
			else{
				$sql = "SELECT * FROM detallecompra where foliocompra=".$_POST['folio'];
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
							
							<td><?php echo $fila['identificador']; ?></td>
							<td align=right><?php echo $fila['costo']; ?></td>
							<td align=right><?php echo $fila['cantidad']; ?></td>
							<td align=right><?php echo $fila['subtotal']; ?></td>
							
						
						
						</tr>
						
						
						
					
		<?php
		
					}//cierra while	
				
				$dd = "SELECT total FROM compra where foliocompra=".$_POST['folio'];
				
				
				$consulta = mysqli_query($conexion, $dd) or die("Error en la consulta: $sql. ".mysqli_error($conexion));
				
				$fila = mysqli_fetch_assoc($consulta);
				
				
			

						
						
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
	</form>
		
	<h4 align="center"><strong>Total de la compra: $<?php echo $fila['total']; ?></strong></h4>
			
			
		

</body>
<?php
		}//cierra if
		else
			header("Location: error.php?sErr=".$sError."&sBack=".$sBack);		
?>