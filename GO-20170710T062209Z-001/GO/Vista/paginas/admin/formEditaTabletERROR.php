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

	

		 
</head>
	<?PHP include "ADMINENLACES.PHP"?>


	<br><br>
	<div>
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
											<li><a href="formAgregaTablet.php"> Ver </a></li>
											<li><a href="eliminadosTablet.php"> Restaurar </a></li>
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
	
	
	
	
	<br>
		
		<br><br><br><br>
		<fieldset>
			
				<form id="formEditaTablet" name="formEditaTablet" method="post" action="../../../Modelo/editaTablet.php"  enctype="multipart/form-data">
					<?php
						$conexion = mysqli_connect("localhost", "root", "");
						mysqli_select_db($conexion, "overlight");
						if (!$conexion){
							die("No se pudo conectar a la base de datos.");
						}
						else{
							$sql = "SELECT * FROM cursos where `identificador`='$identificador';";
							$consulta = mysqli_query($conexion, $sql) or die("Error en la consulta: $sql. ".mysqli_error($conexion));
							while($fila = mysqli_fetch_assoc($consulta)){
					?>
					<table align="center" border=0>
						<tr>
							<th align=right>Id</th>
							<td>
								<input type="text" name="identificador" maxlength="5" size="3" value="<?php echo $fila['identificador']; ?>" disabled>
								<input type="hidden" name="identificador" value="<?php echo $fila['identificador']; ?>">
							</td>
						</tr>
						<tr>
						                <th align=right>categoria</th>
										
										<td>
											<select name="categoria">
												<option value="<?php echo $fila['categoria']; ?>"><?php echo $fila['categoria']; ?></option>
												<option value="Accesorios">Accesorios</option>
												<option value="Calzado">Calzado</option>
												<option value="Ropa">Ropa</option>
																					
											</select>
										</td>
						</tr>
						
						<tr>
							<th align=right>nombre</th>
							<td><input type="text" name="nombre" maxlength="50" size="50" value="<?php echo $fila['nombre']; ?>"></td>
						</tr>
						<tr>
							<th align=right>descripcion</th>
							<td><input type="text" name="descripcion" maxlength="50" size="50" value="<?php echo $fila['descripcion']; ?>"></td>
						</tr>
						<tr>
							<th align=right>costo</th>
							<td><input type="text" name="costo" maxlength="50" size="50" value="<?php echo $fila['costo']; ?>"></td>
						</tr>
						<tr>
							<th align=right> horario</th>
							<td><input type="text" name="horario" maxlength="50" size="50" value="<?php echo $fila['horario']; ?>"></td>
						</tr>
						<tr>
							<th align=right>sede</th>
							<td><input type="text" name="sede" maxlength="50" size="50" value="<?php echo $fila['sede']; ?>"></td>
						</tr>
						<tr>
							<th align=right>profesor</th>
							<td><input type="text" name="profesor" maxlength="10" size="10" value="<?php echo $fila['profesor']; ?>"></td>
						</tr>
						<tr>
							<th align=right>materiales</th>
							<td><input type="text" name="materiales" maxlength="10" size="10" value="<?php echo $fila['materiales']; ?>"></td>
						</tr>
						<tr>
							<th align=right>existencia</th>
							<td><input type="text" name="existencia" maxlength="10" size="10" value="<?php echo $fila['existencia']; ?>"></td>
						</tr>
						
						
						
						
						<tr>
							<th align=right>Imagen</th>
							<td><input type="file" name="imagen" id="fichero" value="<?php echo $fila['imagen']; ?>"></td>
						</tr>
						
<td><?php 
									if($fila['imagen']==' ' || $fila['imagen']==null)
										echo '<img src="../../images/imagesguarda/sin_imagen.jpg" width=90 height=90/>';  
									else
										echo '<img src="../../images/imagesguarda/'.$fila['imagen'].'" width=80 height=80/>'; 
								?>
								
							</td>
						
						
						
						
						
						
						
						<tr>
							<th align=center colspan=2><input style="background:#541f39;color:#fff;border-radius: 18px 18px;-moz-border-radius: 18px 18px;-webkit-border-radius: 18px 18px;font-size:18px;font-style:normal;border:solid 2px #a94e9b;" type ="submit" value="Editar" onClick="return validarCampos();">
							<input style="background:#541f39;color:#fff;border-radius: 18px 18px;-moz-border-radius: 18px 18px;-webkit-border-radius: 18px 18px;font-size:18px;font-style:normal;border:solid 2px #a94e9b;" type="submit" name="Submit" value="Cancelar" onClick="formEditaTablet.action='inicio.php';"></td>
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
<script src="../../js/jsadmin/jquery-1.11.3.min.js"></script>
	<script src="../../js/jsadmin/bootstrap.min.js"></script>
<?php
		}//cierra if
		else
			header("Location: error.php?sErr=".$sError."&sBack=".$sBack);		
?>