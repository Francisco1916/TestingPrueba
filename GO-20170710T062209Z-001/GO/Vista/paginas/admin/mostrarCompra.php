<?php
	session_start();
	$cursos = $_SESSION['cursos'];

	$conexion = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conexion, "overlight");
	if (!$conexion){
		die("No se pudo conectar a la base de datos.");
	}
	else{
?>
<!-- ENLACES -->
<link href="../usuarioregistrado/cssdetalles/demo-page.css" rel="stylesheet" media="all">
		<link href="../usuarioregistrado/hover.css" rel="stylesheet" media="all">
<?PHP include "CLIENTEENLACES.PHP"?>
	<link rel="stylesheet" href="./css/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="./css/main.css">
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
								<!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION["usuario"]; ?> <b class="caret"></b></a> -->
									<ul class="dropdown-menu">
										<li><a href="../../../controlador/logout.php"> Cerrar sesion</a></li>
									</ul>
						</li>
					</ul>
				</div>
			</div>
		</div> 

		<head>
			<script language="JavaScript">
				function calcular(arrayForm, cantidad, costo, subtotal){
					
					var totalProductos=0, totalPagar=0;
					for(var i=0;i<arrayForm.length;i++){
						if(arrayForm[i].name.indexOf('cantidad') == 0){
							totalProductos += Number(arrayForm[i].value);
						}
					}
					document.getElementById('suma').value = totalProductos;
					document.getElementById('sumao').value = totalProductos;
					subtotal.value = cantidad*costo;
					
			
					var c=0;
					for(var i=0;i<arrayForm.length;i++){
						if(arrayForm[i].name.indexOf('subtotal'+c) == 0){
							totalPagar += Number(arrayForm[i].value);
							c++;
						}
					}	
					document.getElementById('total').value = totalPagar;
					document.getElementById('totalo').value = totalPagar;
				}

			</script>
			
			<script language="JavaScript">	
		function editar(operacion, identificador, valor){
			operacion.value='editar';
			identificador.value=valor;
		}	
		
		function borrar(operacion, identificador, valor){
			var respuesta=confirm("\u00BFEst\u00E1s seguro que deseas eliminar este producto ");
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
		<body>
		<br><br><br>
		<div>
		<br>
		
			<br>
		</div>
		<div align=center>

			<br>
				
				<br>
				<font face="Arial Black"><h4><strong>Detalle de Compra</h4></strong></font>
				<br><br>
				
			<form name="detalle" id="detalle" method="post" action="comprar.php">
			<?php 
					$sColor1="#282429";
					$sColor2="#000";
					$sColorF=$sColor1;
				?>
				<div class="datagrid">
					<div class="container">
						<div class="row">
							<div class="table-responsive">
								<table class="table table-hover table-striped table-bordered order-table table">
									<thead>
											<tr class="warning"bgcolor="<?php echo $sColor1; ?>">
											
											<th>Imagen</th>
											<th>categoria</th>
											<th>Nombre</th>
											<th>costo</th>
											<th>Cantidad</th>
											<th>Subtotal</th>
											
														
									</thead>
		
					
				<?php
				for($i=0;$i<count($cursos);$i++){
					$sql="SELECT * FROM cursos WHERE identificador='".$cursos[$i]."';";
					$resultado = mysqli_query($conexion, $sql);
					$filas = mysqli_num_rows($resultado);
					for ($j=0; $j<$filas; $j++){
						$fila = mysqli_fetch_assoc($resultado);
						if ($sColorF==$sColor1)
							$sColorF=$sColor2;
						else
							$sColorF=$sColor1;
				?>
						<tr bgcolor="<?php echo $sColorF;?>">	
						
						<td><?php 
								if($fila['imagen']==' ' || $fila['imagen']==null)
									echo '<img src="../../images/imgguarda/sin_imagen.jpg" width=80 height=80/>'; 
								else
									echo '<img src="../../images/imgguarda/'.$fila['imagen'].'" width=80 height=80/>'; 
							?>
						</td>
						<td><?php echo $fila['categoria']; ?></td>
						<td><?php echo $fila['nombre']; ?></td>
						
						<td align=left>$<?php echo $fila['costo']; ?></td>	
						
						
						
						
						<td align=center>
							<?php $cantidad = 0; echo '<input style="text-align: right; color: #000;" type="text" name="cantidad[]" maxlength="5" size="10" value="'.$cantidad.'" onchange="calcular(this.form, this.value,'.$fila['costo'].',subtotal'.$i.')"></td>';?>
						<td><?php $subtotal = 0; echo '<input style="text-align: right; color: #000;" type="text" name="subtotal'.$i.'" id="subtotal'.$i.'" value="'.$subtotal.'" maxlength="10" size="10" disabled/></td>' ?>
						
						
			
				
				<?php
					}
				}
				?>




				<tr>
					<td  bgcolor="<?php echo $sColorF;?>" colspan=4 align=right>Total</td>
					<td align=right bgcolor="<?php echo $sColorF;?>">
						<?php $suma=0; echo '<input style="text-align: right; color: #000;" type="text" name="suma" id="suma" value="'.$suma.'" maxlength="10" size="10" disabled/>'; ?>
						<?php echo '<input type="hidden" name="sumao" id="sumao" value="'.$suma.'">' ?>
					</td>
					<td align=left bgcolor="<?php echo $sColorF;?>">
						<?php $total=0; echo '<input style="text-align: right; color: #000;" type="text" name="total" id="total" value="'.$total.'" maxlength="10" size="10" disabled/>'; ?>
						<?php echo '<input type="hidden" name="totalo" id="totalo" value="'.$total.'">' ?>
					</td>
				</tr>
					</table>
							</div>
						</div>
					</div>
				</div>
				<!--
				<input style="background:#FF54E8;color:#fff;border-radius: 18px 18px;-moz-border-radius: 18px 18px;-webkit-border-radius: 18px 18px;font-size:18px;font-style:normal;border:solid 2px #f4c4f2;" type="submit" name="submit" value="Comprar">
				<a href="../usuarioregistrado/tienda.php"><input style="background:#FF54E8;color:#fff;border-radius: 18px 18px;-moz-border-radius: 18px 18px;-webkit-border-radius: 18px 18px;font-size:18px;font-style:normal;border:solid 2px #f4c4f2;" type="button" value="Cancelar"></a>-->
				<div class="btn__form">
							<input class="btn__submit" type ="submit" value="Comprar">
							<input class="btn__reset"   type="button" name="Submit" value="Cancelar" onClick="location.href='../usuarioregistrado/tiendatalentos.php'">
				</DIV>
			</form>
	
		<br/><br/>
	</body>
<?php
	}
?>
						
