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
	if ($sError == ""){
?>
<head> 
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../css/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="../../../css/main.css">
	<?PHP include "ADMINENLACES.PHP"?>
<script language="javascript">
			/*Este script valida que:
					1.- Los campos de texto no esten vacios.
					2.- Que se haya ingresado el tipo de dato correcto en cada uno.
					3.- En los que son de opcion que se haya seleccionado alguna.
					4.- En el check se valida que al menos se haya marcado una casilla.*/
			
			function validarCampos(){  
				var oa=document.datosAlumno;
				var formatoCurp=/^\D{4}\d{6}\D{1}\D{2}\D{3}\d{2}$/;
				var formatoCorreo=/^(\D|\d)*(\.?(\D|\d)*)?@(\D|\d){2,}(\.\D{2,3})(\.\D{2})?$/;
				if(oa.categoria.value=="00") {
					alert("Seleccione la categoria");
					oa.categoria.focus();
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

<body background="../../images/imagesadmin/fondo1p.png">
<br><br>
<div>

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
	<br><br>
	<div>

	
	

		<fieldset>
		
				<form id="formAgregaTablet" class="form__reg" name="formAgregaTablet" method="post" action="../../../Modelo/agregaTablet.php" enctype="multipart/form-data">
				
					<div class="contenedor">
						<div class="form__top">
							<h2>Registro <span>Talleres</span></h2>
						</div>	
						
						
								<!--<label> ID</label>-->
								<br>
							
								<?php
									$conexion = mysqli_connect("localhost", "root", "");
									mysqli_select_db($conexion, "overlight");
									if (!$conexion){
										die("No se pudo conectar a la base de datos.");
									}
									else{
										$sql = "SELECT MAX(`identificador`) as secuencia FROM cursos";
										$r = mysqli_query($conexion, $sql);
										$r = mysqli_fetch_assoc($r);
										$identificador = $r['secuencia']+1;
									}
								?>
							<!--	<input class="inputform" type="text" name="identificador" maxlength="5" size="50" value="<?php echo $identificador ?>" disabled>-->
								<input class="inputform" type="hidden" name="identificador" value="<?php echo $identificador ?>">
							
						
						
						                
										<br>
										<label> Categoria</label>
										<br>
											<select class="inputform" name="categoria" style="width:400px; text-align:center; ">
												<option class="inputform" align="center" value="00">Escoja una categoria</option>
												<option class="inputform" value="TALENTO VERACRUZANO">TALENTO VERACRUZANO</option>
												<option class="inputform" value="CONFERENCIAS">CONFERENCIAS</option>
												<option class="inputform" value="TALLER MAGISTRAL">TALLER MAGISTRAL</option>
																					
											</select>
						
							<br>
							<label> Nombre</label>
							<br>
							<input class="inputform" type="text" id="nombre" name="nombre"  maxlength="50" size="50" value="" onkeypress="return justLyn(event);">
							<br>
							<label> Descripción</label>
							<br>
							<input class="inputform" type="text" id="descripcion" name="descripcion" maxlength="50" size="50" value="" onkeypress="return justLyn(event);">
							<br>
							<label> Horario</label>
							<br>
							<input class="inputform" type="text" id="horario" name="horario" maxlength="50" size="50" value="" onkeypress="return justLyn(event);">
							<br>
							<label> Sede</label>
							<br>
							<input class="inputform" type="text" id="sede" name="sede" maxlength="50" size="50" value="" onkeypress="return justLetters(event);">
							<br>
							<label> Profesor</label>
							<br>
							<td><input class="inputform" type="text" id="profesor" name="profesor" maxlength="50" size="50" value="" onkeypress="return justLetters(event);">
							<br>
							<label> Materiales</label>
							<br>
							<input class="inputform" type="text" id="materiales" name="materiales" maxlength="50" size="50" value="" onkeypress="return justLetters(event);">
							<br>
							<label> Existencia</label>
							<br>
							<input class="inputform" type="text" id="existencia" name="existencia" maxlength="50" size="50" value="" onkeypress="return justNumbers(event);">
							<br>
							<label> Costo</label>
							<br>
							<input class="inputform" type="text" id="costo" name="costo" maxlength="10" size="50" value="" onkeypress="return justNumbers(event);">
							<br>
							<label> Imagen</label>
							<br>
							<td><input style="width:400px;" class="inputform" type="file" name="imagen" id="fichero"></td>
							
							<div class="btn__form">
							<input class="btn__submit" type ="submit" value="Agregar" onClick="return validarCampos();">
							<input  class="btn__reset" type="submit" name="Submit" value="Cancelar" onClick="formAgregaTablet.action='inicio.php';">
							</div>
									
						<?php mysqli_close($conexion); ?>
				
					
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
			<body background="../../images/imagesadmin/fondo1p.png">
<br><br>
<div>

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
	<br><br>
	<div>

	
	

		<fieldset>
		
				<form id="formAgregaTablet" class="form__reg" name="formAgregaTablet" method="post" action="../../../Modelo/agregaTablet.php" enctype="multipart/form-data">
				
					<div class="contenedor">
						<div class="form__top">
							<h2>Registro <span>Talleres</span></h2>
						</div>	
						
						
								<!--<label> ID</label>-->
								<br>
							
								<?php
									$conexion = mysqli_connect("localhost", "root", "");
									mysqli_select_db($conexion, "overlight");
									if (!$conexion){
										die("No se pudo conectar a la base de datos.");
									}
									else{
										$sql = "SELECT MAX(`identificador`) as secuencia FROM cursos";
										$r = mysqli_query($conexion, $sql);
										$r = mysqli_fetch_assoc($r);
										$identificador = $r['secuencia']+1;
									}
								?>
							<!--	<input class="inputform" type="text" name="identificador" maxlength="5" size="50" value="<?php echo $identificador ?>" disabled>-->
								<input class="inputform" type="hidden" name="identificador" value="<?php echo $identificador ?>">
							
						
						
						                
										<br>
										<label> Categoria</label>
										<br>
											<select class="inputform" name="categoria" style="width:400px; text-align:center; ">
												<option class="inputform" align="center" value="00">Escoja una categoria</option>
												<option class="inputform" value="TALENTO VERACRUZANO">TALENTO VERACRUZANO</option>
												<option class="inputform" value="CONFERENCIAS">CONFERENCIAS</option>
												<option class="inputform" value="TALLER MAGISTRAL">TALLER MAGISTRAL</option>
																					
											</select>
						
							<br>
							<label> Nombre</label>
							<br>
							<input class="inputform" type="text" id="nombre" name="nombre"  maxlength="50" size="50" value="" onkeypress="return justLyn(event);">
							<br>
							<label> Descripción</label>
							<br>
							<input class="inputform" type="text" id="descripcion" name="descripcion" maxlength="50" size="50" value="" onkeypress="return justLyn(event);">
							<br>
							<label> Horario</label>
							<br>
							<input class="inputform" type="text" id="horario" name="horario" maxlength="50" size="50" value="" onkeypress="return justLyn(event);">
							<br>
							<label> Sede</label>
							<br>
							<input class="inputform" type="text" id="sede" name="sede" maxlength="50" size="50" value="" onkeypress="return justLetters(event);">
							<br>
							<label> Profesor</label>
							<br>
							<td><input class="inputform" type="text" id="profesor" name="profesor" maxlength="50" size="50" value="" onkeypress="return justLetters(event);">
							<br>
							<label> Materiales</label>
							<br>
							<input class="inputform" type="text" id="materiales" name="materiales" maxlength="50" size="50" value="" onkeypress="return justLetters(event);">
							<br>
							<label> Existencia</label>
							<br>
							<input class="inputform" type="text" id="existencia" name="existencia" maxlength="50" size="50" value="" onkeypress="return justNumbers(event);">
							<br>
							<label> Costo</label>
							<br>
							<input class="inputform" type="text" id="costo" name="costo" maxlength="10" size="50" value="" onkeypress="return justNumbers(event);">
							<br>
							<label> Imagen</label>
							<br>
							<td><input style="width:400px;" class="inputform" type="file" name="imagen" id="fichero"></td>
							
							<div class="btn__form">
							<input class="btn__submit" type ="submit" value="Agregar" onClick="return validarCampos();">
							<input  class="btn__reset" type="submit" name="Submit" value="Cancelar" onClick="formAgregaTablet.action='inicio.php';">
							</div>
									
						<?php mysqli_close($conexion); ?>
				
					
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
		}
		else
			header("Location: error.php?sErr=".$sError."&sBack=".$sBack);		
?>