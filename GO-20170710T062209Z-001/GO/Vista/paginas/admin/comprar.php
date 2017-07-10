<?php
	session_start();
	$cursos = $_SESSION['cursos'];	
	$cantidad = $_POST['cantidad'];
	$suma = $_POST['sumao'];
	$total = $_POST['totalo'];
	
	$conexion = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conexion, "overlight");
	if (!$conexion){
		die("No se pudo establecer la conexion al servidor de base de datos.");
	}
	else{	
		//Se inserta la compra
		mysqli_query($conexion, "INSERT INTO compra(total) VALUES ($total)");
		
		//Para obtener el folio de la última compra
		$sql = "SELECT MAX(folioCompra) as folio FROM compra";
		$resultado = mysqli_query($conexion, $sql);
		$fila = mysqli_fetch_assoc($resultado);
		$folio = $fila['folio'];

		//Se insertará el detalle de compra de ese folio obtenido
		for($i=0;$i<count($cursos);$i++){
			$sql="SELECT * FROM cursos WHERE identificador='".$cursos[$i]."';";
			$resultado = mysqli_query($conexion, $sql);
			$filas = mysqli_num_rows($resultado);
			for ($j=0; $j<$filas; $j++){
				$fila = mysqli_fetch_assoc($resultado);
				$sql="INSERT INTO detallecompra(folioCompra, identificador, costo, cantidad, subtotal) 
				      VALUES(".$folio.", ".$fila['identificador'].", ".$fila['costo'].", ".$cantidad[$i].", ".$fila['costo']*$cantidad[$i].")";
				$resultado = mysqli_query($conexion, $sql);
			}
		}
		
		//Se restan las tablets compradas del inventario
		for($i=0;$i<count($cursos);$i++){
			$sql = "UPDATE cursos SET existencia = existencia-".$cantidad[$i]." WHERE identificador='".$cursos[$i]."';";
			$resultado = mysqli_query($conexion, $sql);
		}
		mysqli_close($conexion);
		header("Location: ../admin/regusu.php");
	}
?>