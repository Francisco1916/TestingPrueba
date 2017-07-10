<?php
session_start();
	$sNom="";
	$sError="";
	if (isset($_SESSION["usuario"]))
		$sNom = $_SESSION["usuario"];
	else{
		$sError = "No has iniciado sesion, da clic en el siguiente enlace";
		$sBack = "../usuarionoregistrado/registro.php";
	}
?>
<?php
		if ($sError == ""){
?>

<!DOCTYPE html>
<html>
<head>
<title>E Shop Product Details Widget A Flat Responsive Widget Template :: W3layouts</title>



<!-- ESTILOS DE MENU DE NAVEGACIÓN -->
	<link rel="stylesheet" href="../../css/cssmenunav/bootstrappanelDETALLES.css">
    <link rel="stylesheet" href="../../css/cssmenunav/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" type="text/css"  href="../../css/cssmenunav/styleDETALLES.css">
	<!-- ESTILOS DE FONDO-IMAGEN
	<link rel="stylesheet" href="../../css/cssfondo/responsive-full-background-image.css">-->
	<!-- JavaScript DE MENU DE NAVEGACIÓN-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <!--<script type="text/javascript" src="../../js/jsmununav/bootstrap.js"></script>-->
	<script type="text/javascript" src="../../js/jsadmin/tab.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/jsmenunav/bootstrapmenunav.js"></script>
	<script src="../../js/jsadmin/jquery-1.11.3.min.js"></script> 
	<script src="../../js/jsadmin/bootstrap.min.js"></script>-->

<!-- For-Mobile-Apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="E Shop Product Details Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Android Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->

<!-- Web-Fonts -->
	<link href='//fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<!-- //Web-Fonts -->

<!-- Custom-Theme-Files -->
	<link rel="stylesheet" href="../../css/cssdetalles/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="../../css/cssfondo/responsive-full-background-image.css" type="text/css" media="all" />


	<link rel="stylesheet" href="./css/maindetallesBIEN.css">
	
	
	
	<script language="JavaScript">
		function imprime(b, costo, suma){  
			var tmp=0;
			if(b==true){
				tmp=parseInt(suma.value)+parseInt(precio);
				suma.value=tmp+'.00';
			}
			else{
				tmp=parseInt(suma.value)-parseInt(precio);
				suma.value=tmp+'.00';
			}
		}	
		
		function validaCheck(operacion){  
				var flag=false;
				var ot=document.getElementById("ListaCursos");
				if(ot!=null){
					var arrayForm=ot.getElementsByTagName("input");
					if(arrayForm!=null){
						for(var i=0;i<arrayForm.length;i++){
							if(arrayForm[i].type=="checkbox"){ 
								if(arrayForm[i].checked==true){
									flag=true;
								}
							}
						}
						if(flag==true){ 
							operacion.value='mostrar';
							return true;
						}
						else if(flag==false){
							alert("Seleccione al menos un producto"); 
							return false;
						}
					}
				}
			}
	</script>
<form class="form__reg"  name="ListaCursos" id="ListaCursos" method="post" action="../../../Controlador/abcUsuario.php">
		<input type="hidden" name="operacion">
		<input type="hidden" name="identificador">
		<input type="hidden" name="ruta" value="tienda.php">
		
			<!-- <div class="download aligncenter">
					<input class="button cta hvr-float-shadow" type="submit" name="submit" value="Comprar" onClick="return validaCheck(operacion);"/>	
					<input class="buttoncancelar cta hvr-float-shadow" type="reset" value="Limpiar"></td>
			</DIV> -->
		
	
	
	
	
	
	
<!-- //Custom-Theme-Files -->
</head>

<div class="navbar navbar-inverse navbar-fixed-top headroom" >
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						<a class="navbar-brand" href="index.html"><img src="../../images/imagesmenu/logo.png" alt="Overlight"></a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav pull-right">	
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION["usuario"]; ?> <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="../../../controlador/logout.php"> Cerrar sesion</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div> 
<body>





	<?php
		include 'conexion.php';
		$re=mysql_query("select * from cursos where identificador=".$_GET['identificador'])or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>
		
		
		
	<div class="content">

	<h1></h1>

		<div class="containerdos">

			<h2><?php echo $f['nombre'];?></h2>

			<div class="product">
				<div class="product-image">
					<br>
					<?php 
									if($f['imagen']==' ' || $f['imagen']==null)
										echo '<img src="../../images/images/sin_imagen.jpg" width=80 height=80/>';  
									else
										echo '<img src="../../images/images/'.$f['imagen'].'" />'; 
								?>
						
				</div>
				<div class="product-info">
					<p><span>Precio: </span>$<?php echo $f['costo'];?></p>
					<p><span>Disponible: </span><?php echo $f['existencia'];?></p>
		
						<?php 
													if($f['existencia']==0)
														echo '<input type="checkbox" name="cursos[]" value="'.$f["identificador"].'" onClick="if(this.checked==true){b=true;}else{b=false;}imprime(b,'.$f["costo"].',suma)"; disabled>';
													else
														echo '<input type="checkbox" name="cursos[]" value="'.$f["identificador"].'" onClick="if(this.checked==true){b=true;}else{b=false;}imprime(b,'.$f["costo"].',suma)";>';
											   ?>
		
		<!--<div class="cart" type="checkbox"><a href="#">Add to Cart</a></div> -->
											   
				
							<input class="btn__submit" type ="submit" name="submit" value="Comprar" onClick="return validaCheck(operacion);"/>
							
				
					</form>
					
					
			
				</div>
				<div class="clear"></div>
			</div>

			<div class="accordion">
				<section class="ac-containerdos">
					<div>
						<input id="ac-1" name="accordion-1" type="checkbox" />
						<label for="ac-1">Descripcion</label>
						<article class="ac-small">
							<p> <?php echo $f['descripcion'];?></p>
						</article>
					</div>
				
					<div>
						<input id="ac-3" name="accordion-1" type="checkbox" />
						<label for="ac-3">Horario</label>
						<article class="ac-large ac-review">
							<h3>CONOCE NUESTRO HORARIO EN CLASES GRUPALES Y VEN A DIVERTIRTE CON TUS AMIGOS</h3>
							
							<h4>Imparte: <?php echo $f['profesor'];?></h4> <br>
							<h4>Horario:   <?php echo $f['horario'];?></h4> <br>
							<h4>Sede:   <?php echo $f['sede'];?></h4> <br>
							<h4>Materiales:   <?php echo $f['materiales'];?></h4> <br>
						</article>
					</div>
				</section>
			</div>

		</div>
		
	</div>

	
	
		<?php
		}
	?>
	
	<!-- //Copyright-Ends-Here -->

</body>
<!-- Body-Ends-Here -->

</html>
<?php
		}//cierra if
		else
			header("Location: error.php?sErr=".$sError."&sBack=".$sBack);		
?>