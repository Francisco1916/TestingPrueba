<html>
<?php

	$conexion = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conexion, "overlight");
	if (!$conexion){
		die("No se pudo conectar a la base de datos.");
	}
	else{
		$sql="SELECT nombre FROM cursos WHERE categoria= 'TALENTO VERACRUZANO'";
		$resultado = mysqli_query($conexion, $sql);
		$filas = mysqli_num_rows($resultado);
		?>
		<select name="categoria">
		<?php
		for ($j=0; $j<$filas; $j++){
			$fila = mysqli_fetch_assoc($resultado);
?>
			<option value="00"><?php echo $fila['nombre']?></option>
						
	<?php
		}
	}
?>
</html>