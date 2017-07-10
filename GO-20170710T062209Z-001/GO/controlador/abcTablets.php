<?php 
	session_start();
		
	$ope = $_POST['operacion'];
	$identificador = $_POST['identificador'];
	$ruta = $_POST['ruta'];
	
	if($ope == 'agregar'){
		header("Location: ../vista/paginas/admin/formAgregaTablet.php");	
	}
	if($ope == 'editar'){
		header("Location: ../Vista/paginas/admin/formEditaTablet.php?identificador=".$identificador);	
	}
	if($ope == 'borrar'){
		header("Location: ../Modelo/borrarTablet.php?identificador=".$identificador);
	}
	if($ope == 'cancelado'){
		header("Location: ../vista/paginas/admin/inicio.php");	
	}
	if($ope == 'cancelado2'){
		header("Location: ../vista/paginas/admin/inicio.php");	
	}
	if($ope == 'mostrar'){
		$_SESSION['cursos'] = $_POST["cursos"];
		$_SESSION['suma'] = $_POST["suma"];
		$_SESSION['ruta'] = $_POST["ruta"];
		header("Location: mostrarCompra.php");
	}
	if($ope == 'reestablecer'){
		header("Location: ../Modelo/reestablecer.php?identificador=".$identificador);
	}
	if($ope == 'eliminar'){
		header("Location: ../vista/paginas/admin/eliminarTablet.php?identificador=".$identificador);
	}
?>