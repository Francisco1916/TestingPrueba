<?php 
	session_start();
		
	$ope = $_POST['operacion'];
	$identificador = $_POST['identificador'];
	$ruta = $_POST['ruta'];
	if($ope == 'editar'){
		header("Location: ../vista/paginas/admin/formEditaUsuario.php?identificador=".$identificador);	
	}
	if($ope == 'borrar'){
		header("Location: ../Modelo/borrarUsuario.php?identificador=".$identificador);
	}
	if($ope == 'cancelado'){
		header("Location: ../vista/paginas/admin/regusu.php");	
	}
	if($ope == 'cancelado2'){
		header("Location: ../vista/paginas/admin/eliminadosUsuario.php");	
	}
	if($ope == 'mostrar'){
		$_SESSION['cursos'] = $_POST["cursos"];
		$_SESSION['suma'] = $_POST["suma"];
		$_SESSION['ruta'] = $_POST["ruta"];
		header("Location: ../Vista/paginas/admin/mostrarCompra.php");
	}
	if($ope == 'reestablecer'){
		header("Location: ../Modelo/reestablecerUsuario.php?identificador=".$identificador);
	}
	if($ope == 'eliminar'){
		header("Location: ../Modelo/eliminarUsuario.php?identificador=".$identificador);
	}
?>