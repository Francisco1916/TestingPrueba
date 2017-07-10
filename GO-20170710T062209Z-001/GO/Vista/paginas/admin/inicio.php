<?php
session_start();
	$sNom="";
	$sError="";
	if (isset($_SESSION["nombre"]))
		$sNom = $_SESSION["nombre"];
	else{
		$sError = "No has iniciado sesion, da clic en el siguiente enlace";
		$sBack = "../usuarionoregistrado/registro.php";
	}
?>
<?php
		if ($sError == ""){
?>
<head>
<script type="text/javascript" src="../../js/jsadmin/tab.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="../../js/jsinicio/headroom.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="../../js/jsinicio/headroom.min.js"></script>
	<link rel="shortcut icon" href="../../images/imagesregistro/gt_favicon.png"> <!-- IMAGEN DE ARRIBA T -->
	  <!-- MENU DE NAVEGACION-->
	  <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	  <link rel="stylesheet" href="../../css/cssregistro/bootstrap.min.css"> <!-- MENU RESPONSIVO -->
	<link rel="stylesheet" href="../../css/cssregistro/font-awesome.min.css">
	<link rel="stylesheet" type="text/css"  href="../../css/cssinicio/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/cssinicio/responsive.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../../css/cssregistro/bootstrap-theme.css" media="screen" > <!-- MENU RESPONSIVO -->
	<link rel="stylesheet" href="../../css/cssregistro/main.css"> <!-- MENU RESPONSIVO -->
	<script rel="stylesheet" src="../../js/tablets/jquery.dataTables.js"></script>

	<script language="JavaScript">	
		function ver(folio, valor){
			folio.value=valor;
		}
	</script>
	
	<script language="JavaScript">	
		function editar(operacion, identificador, valor){
			operacion.value='editar';
			identificador.value=valor;
		}	
		
		function borrar(operacion, identificador, valor){
			var respuesta=confirm("\u00BFEst\u00E1s seguro que deseas eliminar este producto "+valor+"?");
			if (respuesta==true){
				operacion.value='borrar';
				identificador.value=valor;
			}
			else{
				operacion.value='cancelado';
			}
		}
	</script>
</head>
<body background="../../images/imagesadmin/fondo1p.png">
<br><br>
<div>

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
							<li class="active"><a href="inicio.php"> Gestionar</a></li>
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
	
	
	<br><br><br><br><br>
	<form name="ListaTablets" method="post" action="../../../Controlador/abcTablets.php">
		<input type="hidden" name="operacion">
		<input type="hidden" name="identificador">
		<input type="hidden" name="ruta" value="inicio.php">
		
		
		<center>
					
	<div class="derecha" align="center" id="buscar"> <input type="search" class="light-table-filter" data-table="order-table" placeholder="Buscar"></div>
	</center>
		<br><br>
		<?php 
			$sColor1= "white";
			$sColor2="white";
			$sColorF=$sColor1;
		?>
	<div class="container">
		<div class="row">
			<div class="table-responsive">
			<table class="table table-striped table-bordered order-table table">
			<thead>
				<tr class="warning"bgcolor="<?php echo $sColor1; ?>">
				<th>ID</th>
				<th>imagen</th>
				<th>categor&iacute;a</th>
				<th>genero</th>
				<th>nombre</th>
				<th>descripci&oacute;n</th>
				<th>tama&ntilde;o</th>
				<!--<th>DD</th>-->
				<!--<th>SO</th>-->
				<th>color</th>
				<th>existencia</th>
				<th>costo</th>
				<th>Editar</th>
				<th>Borrar</th>
				<!--<th>Caracteristicas</th>-->
			</tr>
			</thead>
			<?php
			$conexion = mysqli_connect("localhost", "root", "");
			mysqli_select_db($conexion, "products");
			if (!$conexion){
				die("No se pudo conectar a la base de datos.");
			}
			else{
				$sql = "SELECT * FROM products where `bandera`= TRUE ORDER BY `identificador`";
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
							<td><?php echo $fila['identificador']; ?></td>
							<td><?php 
									if($fila['imagen']==' ' || $fila['imagen']==null)
										echo '<img src="../../images/imgguarda/sin_imagen.jpg" width=90 height=90/>';  
									else
										echo '<img src="../../images/imgguarda/'.$fila['imagen'].'" width=80 height=80/>'; 
								?>
								
							</td>
							<td><?php echo $fila['categoria']; ?></td>
							<td><?php echo $fila['genero']; ?></td>
							<td><?php echo $fila['nombre']; ?></td>
							<td><?php echo $fila['descripcion']; ?></td>
							<td><?php echo $fila['tamano']; ?></td>
							<td><?php echo $fila['color']; ?></td>
							<td><?php echo $fila['existencia']; ?></td>
							<td align=right><?php echo "$".$fila['costo'].".00"; ?></td>
							<td>
								<?php echo '<input type="image" src="../../images/imagesadmin/ropae.png" width=50 height=50 onClick="editar(operacion, identificador,'.$fila['identificador'].')"/>' ?>
							</td>
							<td>
								<?php echo '<input type="image" src="../../images/imagesadmin/ropa.png"  width=50 height=50 onClick="borrar(operacion, identificador,'.$fila['identificador'].')"/>' ?>
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