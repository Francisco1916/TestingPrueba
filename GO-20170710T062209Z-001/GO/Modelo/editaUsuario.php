<?php
	$identificador = $_POST['identificador'];
	$nombre = $_POST['nombre'];
	$apepat = $_POST['apepat'];
	$apemat = $_POST['apemat'];
	$correo = $_POST['correo'];
	$telefono = $_POST['telefono'];
	$contrasena = $_POST['contrasena'];
	$tipo = $_POST['tipo'];
	
	$conexion = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conexion, "overlight");
	if (!$conexion){
		die("No se pudo conectar a la base de datos.");
	}
	else{
		$sql="UPDATE `usuario` SET `nombre`='$nombre', `apepat`='$apepat', `apemat`='$apemat',`correo`='$correo',`telefono`='$telefono',`contrasena`='$contrasena',`tipo`='$tipo' WHERE `identificador`='$identificador'";
		mysqli_query($conexion, $sql);
	}
	mysqli_close($conexion);
	header("Location: ../vista/paginas/admin/regusu.php");
?> 