<?php
	
	$identificador = $_POST['identificador'];
	$categoria = $_POST['categoria'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$costo= $_POST['costo'];
	$horario = $_POST['horario'];
	$sede = $_POST['sede'];
	$profesor = $_POST['profesor'];
	$materiales = $_POST['materiales'];
	$existencia = $_POST['existencia'];
	$imagen = $_FILES["imagen"]["name"];
	$origen = $_FILES["imagen"]["tmp_name"];
	$destino= "../Vista/images/imagesguarda/".$imagen;
	
	if (move_uploaded_file ($origen, $destino)) {
		echo ("Imagen grabada");
	} else {
		echo ("La imagen no se ha podido grabar.");
	}
	
	//Se inserta la nueva tablet en la base de datos
	$conexion = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conexion, "overlight");
	if (!$conexion){
		die("No se pudo conectar a la base de datos.");
	}
	else{
		$sql = "INSERT INTO `cursos`(`categoria`,`nombre`, `descripcion`, `costo`, `horario`, `sede`, `profesor`, `materiales`,`existencia`, `imagen`, `bandera`) 
		VALUES('$categoria','$nombre', '$descripcion', '$costo', '$horario', '$sede', '$profesor', '$materiales', '$existencia','$imagen', true)";  
		mysqli_query($conexion, $sql);
	}
	mysqli_close($conexion);
	header("Location: ../vista/paginas/admin/vercursos.php");
?>