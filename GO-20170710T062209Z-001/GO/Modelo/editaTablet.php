<?php
	$identificador = $_POST['identificador'];
	$categoria = $_POST['categoria'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$costo = $_POST['costo'];
	$horario= $_POST['horario'];
	$sede = $_POST['sede'];
	$profesor = $_POST['profesor'];
	$materiales = $_POST['materiales'];
	$existencia = $_POST['existencia'];
	$imagen = $_FILES["imagen"]["name"];
	$origen = $_FILES["imagen"]["tmp_name"];
	$destino= "../Vista/images/imgguarda/".$imagen;
	
	
	
	if (move_uploaded_file ($origen, $destino)) {
		echo ("Imagen grabada");
	} else {
		echo ("La imagen no se ha podido grabar.");
	}
	
	$conexion = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conexion, "overlight");
	if (!$conexion){
		die("No se pudo conectar a la base de datos.");
	}
	else{
		if ($imagen == ""){
					$sql="UPDATE `cursos` SET `categoria`='$categoria',`nombre`='$nombre', `descripcion`='$descripcion', `costo`='$costo', `horario`='$horario', 
		`sede`=$sede, `profesor`='$profesor',`materiales`='$materiales',`existencia`='$existencia' WHERE `identificador`='$identificador'";
			
			
		}else{
		$sql="UPDATE `products` SET `categoria`='$categoria', `nombre`='$nombre', `descripcion`='$descripcion', `costo`='$costo', `horario`='$horario', 
		`sede`=$sede, `profesor`='$profesor', `materiales`='$materiales', `existencia`='$existencia', `imagen`='$imagen' WHERE `identificador`='$identificador'";
		
		}
		mysqli_query($conexion, $sql);
		
	}
	mysqli_close($conexion);
	header("Location: ../Vista/paginas/admin/vercursos.php");
?> 