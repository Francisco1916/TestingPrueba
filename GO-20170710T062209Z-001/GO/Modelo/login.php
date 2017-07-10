<?php
session_start();
	$sError = "";

	if (isset($_POST["usuario"]) && !empty($_POST["usuario"])&& isset($_POST["contrasena"]) && !empty($_POST["contrasena"])){
		$conexion = mysqli_connect("localhost", "root", "");
		mysqli_select_db($conexion, "overlight");
		
		$sql = "SELECT `correo`, `contrasena`, `identificador`, `tipo`
			    FROM usuario 
			    WHERE correo = '".$_POST["usuario"]."' AND contrasena= '".$_POST["contrasena"]."'";
		$consulta = mysqli_query($conexion, $sql);
		$extraido= mysqli_fetch_array($consulta);
		mysqli_close($conexion); 
		if (!empty($extraido['correo']) && !empty($extraido['contrasena'])){
				$_SESSION["usuario"]=$_POST["usuario"];
				$_SESSION["contrasena"]=$_POST["contrasena"];
				$_SESSION["identificador"]=$extraido["identificador"];
				$_SESSION["tipo"]=$extraido["tipo"];
		}
		else
			$sError = "Los datos son incorrectos, favor de verificar.";	
	}
	if ($sError == "")
		header("Location: ../vista/paginas/admin/regusu.php"); 
	else
		header("Location: index.php?sErr=".$sError);
?>

<?php/*
	session_start();
	$sError = "";

	if (isset($_POST["usuario"]) && !empty($_POST["usuario"])&& isset($_POST["password"]) && !empty($_POST["password"])){
		if($_POST["usuario"]=="nancy" && $_POST["password"]=="nancy"){
			$_SESSION["usuario"]=$_POST["usuario"];
			$_SESSION["password"]=$_POST["password"];
		}
		else
			$sError = "Los datos son incorrectos, favor de verificar.";	
	}
	if ($sError == "")
		header("Location: inicio.php");
	else
		header("Location: index.php?sErr=".$sError);
*/
?>