<?php
	$identificador = $_REQUEST['identificador'];
	
	$conexion = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conexion, "overlight");
	if (!$conexion){
		die("No se pudo conectar a la base de datos.");
	}
	else{
		$sql="UPDATE `cursos` SET `bandera`=TRUE where `identificador`='$identificador'";
		mysqli_query($conexion, $sql);
	}
	mysqli_close($conexion);
	header("Location: ../vista/paginas/admin/eliminados.php");
?> 