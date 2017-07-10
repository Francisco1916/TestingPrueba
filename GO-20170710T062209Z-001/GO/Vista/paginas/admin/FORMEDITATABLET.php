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
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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

		 
</head>
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
<body background="../../images/imagesadmin/fondo1p.png">

	<br><br>
	<div>
	<br>

	
		
		<br><br>
		<fieldset>
			<div class="contenedor">
				<div class="form__top">
					<h2>Registro <span>GoDesign</span></h2>
				</div>		
				<form  class="form__reg" id="formEditaTablet" name="formEditaTablet" method="post" action="../../../Modelo/editaTablet.php"  enctype="multipart/form-data">
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
				
								
							
								<!-- <input type="text" class="inputform" name="identificador" maxlength="5" size="3" value="<?php echo $fila['identificador']; ?>" disabled> -->
								<input type="hidden" name="identificador" value="<?php echo $fila['identificador']; ?>">
								<BR>
								<label> Categoria</label>
								<br>
								<select class="inputform" name="categoria">
												<option class="inputform" value="<?php echo $fila['categoria']; ?>"><?php echo $fila['categoria']; ?></option>
												<option class="inputform" value="TALENTO VERACRUZANO">TALENTO VERACRUZANO</option>
												<option class="inputform" value="CONFERENCIAS">CONFERENCIAS</option>
												<option class="inputform" value="TALLER MAGISTRAL">TALLER MAGISTRAL</option>									
								</select>
								<BR>
								<label> Nombre</label>
								<br>		 
							 <input class="inputform" type="text" name="nombre" maxlength="50" size="50" value="<?php echo $fila['nombre']; ?>"> 
								<BR>
								<label> Descripcion</label>
								<br>
							 <input class="inputform" type="text" name="descripcion" maxlength="50" size="50" value="<?php echo $fila['descripcion']; ?>"> 
								<BR>
								<label> Horario</label>
								<br>
							 <input class="inputform" type="text" name="horario" maxlength="50" size="50" value="<?php echo $fila['horario']; ?>"> 
								<BR>
								<label> Sede</label>
								<br>
							 <input class="inputform" type="text" name="sede" maxlength="50" size="50" value="<?php echo $fila['sede']; ?>"> 
								<BR>
								<label> Profesor</label>
								<br>
							 <input class="inputform" type="text" name="profesor" maxlength="50" size="50" value="<?php echo $fila['profesor']; ?>"> 
								<BR>
								<label> Materiales</label>
								<br>
							 <input class="inputform" type="text" name="materiales" maxlength="10" size="10" value="<?php echo $fila['materiales']; ?>"> 
								<BR>
								<label> EXISTENCIA</label>
								<br>
							 <input class="inputform" type="text" name="existencia" maxlength="10" size="10" value="<?php echo $fila['existencia']; ?>"> 
								<br>
							 <label> Costo</label>
								<br>
							 <input class="inputform" type="text" name="costo" maxlength="10" size="10" value="<?php echo $fila['costo']; ?>"> 
								<BR>
							 
								<BR>
								<label> IMAGEN</label>
								<br>
						
						
						
						 <br><br><br><br><br><br><br>
						
							 <input class="inputform" type="file" name="imagen" id="fichero" value="<?php echo $fila['imagen']; ?>"> 
						 
						

						
						
						<?php 
									if($fila['imagen']==' ' || $fila['imagen']==null)
										echo '<img src="../../images/imgguarda/sin_imagen.jpg" width=80 height=80/>';  
									else
										echo '<img src="../../images/imgguarda/'.$fila['imagen'].'" style="border-style: solid;

																									border-width:1px;
																									border-color: #f4b906;
																									padding:2px;
																								border-radius: 5px;
																								-moz-border-radius: 5px;
																								-webkit-border-radius: 5px;
																									background-color:#2e2e2e;
																									border-style: solid;
																									border-width:1px;
																									border-color: #87c6cb;
																									padding:2px;
																								border-radius: 5px;
																								-moz-border-radius: 5px;
																								-webkit-border-radius: 5px;
																									filter: alpha(opacity=60);
																									-moz-opacity: 0.6;
																									background-color:#2e2e2e;
	"/>'; 
								?>
						
						
						
						
						<div class="btn__form">
							<input class="btn__submit" type ="submit" value="Editar" onClick="return validarCampos();">
							<input class="btn__reset"  type="submit" name="Submit" value="Cancelar" onClick="formEditaTablet.action='inicio.php';">
						</DIV>	
						<?php mysqli_close($conexion); ?>
					
					<?php 
							}
						} 
					?>
				</form>
			</div>
		</fieldset>
	</div>
</body>
									<!-- TIPO DE USUARIO EDITOR -->
									<!-- TIPO DE USUARIO EDITOR -->
									<!-- TIPO DE USUARIO EDITOR -->
			<?php
				}elseif ($_SESSION["tipo"]=="editor") {		
			?>
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
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="inicioclientes.php"> Gestionar</a></li>
							<li><a href="eliminadosUsuario.php"> Restablecer</a></li>
						</ul>
					</li>
					<li class="dropdown active">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="formAgregaTablet.php"> Agregar</a></li>
							<li><a href="inicio.php"> Gestionar</a></li>
							<li><a href="eliminados.php"> Restablecer</a></li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION["nombre"]; ?> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="../../../controlador/logout.php"> Cerrar sesion</a></li>
						</ul>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
<body background="../../images/imagesadmin/fondo1p.png">

	<br><br>
	<div>
	<br>

	
		
		<br><br>
		<fieldset>
			<div class="contenedor">
				<div class="form__top">
					<h2>Registro <span>GoDesign</span></h2>
				</div>		
				<form  class="form__reg" id="formEditaTablet" name="formEditaTablet" method="post" action="../../../Modelo/editaTablet.php"  enctype="multipart/form-data">
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
				
								
							
								<!-- <input type="text" class="inputform" name="identificador" maxlength="5" size="3" value="<?php echo $fila['identificador']; ?>" disabled> -->
								<input type="hidden" name="identificador" value="<?php echo $fila['identificador']; ?>">
								<BR>
								<label> Categoria</label>
								<br>
								<select class="inputform" name="categoria">
												<option class="inputform" value="<?php echo $fila['categoria']; ?>"><?php echo $fila['categoria']; ?></option>
												<option class="inputform" value="TALENTO VERACRUZANO">TALENTO VERACRUZANO</option>
												<option class="inputform" value="CONFERENCIAS">CONFERENCIAS</option>
												<option class="inputform" value="TALLER MAGISTRAL">TALLER MAGISTRAL</option>									
								</select>
								<BR>
								<label> Nombre</label>
								<br>		 
							 <input class="inputform" type="text" name="nombre" maxlength="50" size="50" value="<?php echo $fila['nombre']; ?>"> 
								<BR>
								<label> Descripcion</label>
								<br>
							 <input class="inputform" type="text" name="descripcion" maxlength="50" size="50" value="<?php echo $fila['descripcion']; ?>"> 
								<BR>
								<label> Horario</label>
								<br>
							 <input class="inputform" type="text" name="horario" maxlength="50" size="50" value="<?php echo $fila['horario']; ?>"> 
								<BR>
								<label> Sede</label>
								<br>
							 <input class="inputform" type="text" name="sede" maxlength="50" size="50" value="<?php echo $fila['sede']; ?>"> 
								<BR>
								<label> Profesor</label>
								<br>
							 <input class="inputform" type="text" name="profesor" maxlength="50" size="50" value="<?php echo $fila['profesor']; ?>"> 
								<BR>
								<label> Materiales</label>
								<br>
							 <input class="inputform" type="text" name="materiales" maxlength="10" size="10" value="<?php echo $fila['materiales']; ?>"> 
								<BR>
								<label> EXISTENCIA</label>
								<br>
							 <input class="inputform" type="text" name="existencia" maxlength="10" size="10" value="<?php echo $fila['existencia']; ?>"> 
								<br>
							 <label> Costo</label>
								<br>
							 <input class="inputform" type="text" name="costo" maxlength="10" size="10" value="<?php echo $fila['costo']; ?>"> 
								<BR>
							 
								<BR>
								<label> IMAGEN</label>
								<br>
						
						
						
						 <br><br><br><br><br><br><br>
						
							 <input class="inputform" type="file" name="imagen" id="fichero" value="<?php echo $fila['imagen']; ?>"> 
						 
						

						
						
						<?php 
									if($fila['imagen']==' ' || $fila['imagen']==null)
										echo '<img src="../../images/imgguarda/sin_imagen.jpg" width=80 height=80/>';  
									else
										echo '<img src="../../images/imgguarda/'.$fila['imagen'].'" style="border-style: solid;

																									border-width:1px;
																									border-color: #f4b906;
																									padding:2px;
																								border-radius: 5px;
																								-moz-border-radius: 5px;
																								-webkit-border-radius: 5px;
																									background-color:#2e2e2e;
																									border-style: solid;
																									border-width:1px;
																									border-color: #87c6cb;
																									padding:2px;
																								border-radius: 5px;
																								-moz-border-radius: 5px;
																								-webkit-border-radius: 5px;
																									filter: alpha(opacity=60);
																									-moz-opacity: 0.6;
																									background-color:#2e2e2e;
	"/>'; 
								?>
						
						
						
						
						<div class="btn__form">
							<input class="btn__submit" type ="submit" value="Editar" onClick="return validarCampos();">
							<input class="btn__reset"  type="submit" name="Submit" value="Cancelar" onClick="formEditaTablet.action='inicio.php';">
						</DIV>	
						<?php mysqli_close($conexion); ?>
					
					<?php 
							}
						} 
					?>
				</form>
			</div>
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
		}
		else
			header("Location: error.php?sErr=".$sError."&sBack=".$sBack);		
?>