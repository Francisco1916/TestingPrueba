<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="./css/main.css">

	<script language="JavaScript">
		function imprime(b, costo, suma){  
			var tmp=0;
			if(b==true){
				tmp=parseInt(suma.value)+parseInt(precio);
				suma.value=tmp+'.00';
			}
			else{
				tmp=parseInt(suma.value)-parseInt(precio);
				suma.value=tmp+'.00';
			}
		}	
		
		function validaCheck(operacion){  
				var flag=false;
				var ot=document.getElementById("ListaCursos");
				if(ot!=null){
					var arrayForm=ot.getElementsByTagName("input");
					if(arrayForm!=null){
						for(var i=0;i<arrayForm.length;i++){
							if(arrayForm[i].type=="checkbox"){ 
								if(arrayForm[i].checked==true){
									flag=true;
								}
							}
						}
						if(flag==true){ 
							operacion.value='mostrar';
							return true;
						}
						else if(flag==false){
							alert("Seleccione al menos un producto"); 
							return false;
						}
					}
				}
			}
	</script>
	<body>
<br>
<div>
	<br>
	<br></br>
	<br></br>

	<table border=0 align="right">
		<tr>
			<td><label></label></td>
		</tr>
	</table>
</div>
<br>
<div>
<div class="contenedor">
<div class="form__top">
					<h2>GO<span>DESIGN</span></h2>
				</div>	
	<form class="form__reg"  name="ListaCursos" id="ListaCursos" method="post" action="../../../Controlador/abcUsuario.php">
		<input type="hidden" name="operacion">
		<input type="hidden" name="identificador">
		<input type="hidden" name="ruta" value="tienda.php">
		
			<div class="btn__form">
					<input class="btn__submit" type="submit" name="submit" value="Comprar" onClick="return validaCheck(operacion);"/>	
					<input class="btn__reset" type="reset" value="Limpiar"></td>
			</DIV>	
	
		<br><br><br><br>
		<?php 
			$sColor1="white";
			$sColor2="white";
			$sColorF=$sColor1;
		?>
		<table border=0 align="center">
			<tr  bgcolor="<?php echo $sColor1; ?>">
				<th>Elegir</th>
			
				<th></th>
				
				<!--<th>Caracteristicas</th>-->
				
			</tr>
			<?php
			$conexion = mysqli_connect("localhost", "root", "");
			mysqli_select_db($conexion, "overlight");
			if (!$conexion){
				die("No se pudo conectar a la base de datos.");
			}
			else{
				$sql = "SELECT * FROM cursos where `bandera`= TRUE and categoria='TALENTO VERACRUZANO' ORDER BY `identificador`";

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
							<td align="center"><?php 
													if($fila['existencia']==0)
														echo '<input type="checkbox" name="cursos[]" value="'.$fila["identificador"].'" onClick="if(this.checked==true){b=true;}else{b=false;}imprime(b,'.$fila["costo"].',suma)"; disabled>';
													else
														echo '<input type="checkbox" name="cursos[]" value="'.$fila["identificador"].'" onClick="if(this.checked==true){b=true;}else{b=false;}imprime(b,'.$fila["costo"].',suma)";>';
											   ?></td>										
							
							<td><?php 
									if($fila['imagen']==' ' || $fila['imagen']==null)
										echo '<img src="../../images/imgguarda/sin_imagen.jpg" width=400 height=400/>'; 
									else
										echo '<img src="../../images/imgguarda/'.$fila['imagen'].'" width=350 height=350/>';?>
						
						<?php echo "<strong>" .$fila['nombre']."</strong>"; ?>									
								
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
		<?php /*echo"<p align=center>".$_pagi_navegacion."</p>";*/ ?>
	</form>
	</DIV>	
</div>
</body>


