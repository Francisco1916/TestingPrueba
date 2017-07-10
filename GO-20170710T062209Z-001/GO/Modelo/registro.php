<?php

	$nombre=$_POST['nombre'];
	$apepat=$_POST['apepat'];
	$apemat=$_POST['apemat'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	
	
	
	


	require("connect_db.php");
	$checkemail=mysql_query("SELECT * FROM usuario WHERE correo='$correo'");
	$check_mail=mysql_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				//require("connect_db.php");
				
				
				mysql_query("INSERT INTO usuario VALUES('','$nombre','$apepat','$apemat','$correo','$telefono',
				'$pass','cliente',true)");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				mysql_close($link);
			}
			
		}else{
			echo ' <script language="javascript">alert("Las contraseñas son incorrectas");</script> ';
		}

	
?>