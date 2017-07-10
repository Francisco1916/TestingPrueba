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
<!DOCTYPE HTML>
<html>
<head>
<title>Shoplist A Ecommerce Category Flat Bootstrap Responsive  Website Template | Home :: w3layouts</title>



		<!-- ESTILOS DE MENU DE NAVEGACIÓN -->
	<link rel="stylesheet" href="../../css/cssmenunav/bootstrappanelMOSTRAR.css">
    <link rel="stylesheet" href="../../css/cssmenunav/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" type="text/css"  href="../../css/cssmenunav/style.css">
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




<link href="../../css/csstiendaseccion/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../../js/jstiendaseccion/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="../../css/csstiendaseccion/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoplist Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Hind:400,500,300,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="../../js/jstiendaseccion/move-top.js"></script>
<script type="text/javascript" src="../../js/jstiendaseccion/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	
	
	
	
	
	
		<link rel="stylesheet" href="./css/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="./css/main.css">
	
	
	
	
	
<script src="../../js/jstiendaseccion/simpleCart.min.js"> </script>
<script src="../../js/jstiendaseccion/bootstrap.min.js"></script>

<link href="cssdetalles/demo-page.css" rel="stylesheet" media="all">
		<link href="cssdetalles/hover.css" rel="stylesheet" media="all">


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
<form class="form__reg"  name="ListaCursos" id="ListaCursos" method="post" action="../../../Controlador/abcUsuario.php">
		<input type="hidden" name="operacion">
		<input type="hidden" name="identificador">
		<input type="hidden" name="ruta" value="tienda.php">
		
			<!-- <div class="download aligncenter">
					<input class="button cta hvr-float-shadow" type="submit" name="submit" value="Comprar" onClick="return validaCheck(operacion);"/>	
					<input class="buttoncancelar cta hvr-float-shadow" type="reset" value="Limpiar"></td>
			</DIV> -->
			<div class="btn__form">
							<input class="btn__submit" type ="submit" name="submit" value="Comprar" onClick="return validaCheck(operacion);"/>
							<input class="btn__reset" type ="reset" name="submit" value="Comprar" onClick="return validaCheck(operacion);"/>
							
				</DIV>
			


<div class="home-block">
	<div class="container">
		<div class="home-block-main">
		<?php
		include 'conexion.php';
		$re=mysql_query("select * from cursos where categoria='TALENTO VERACRUZANO'")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>
			<div class="col-md-3 home-grid">
				<div class="home-product-main">
				   <div class="home-product-top">
				      <a href="./detalles.php?identificador=<?php  echo $f['identificador'];?>"><img src="../../images/imagesguarda/<?php echo $f['imagen'];?>" alt="" class="img-responsive zoom-img"></a>
				   </div>
					<div class="home-product-bottom">
							<h3><a href="./detalles.php?identificador=<?php  echo $f['identificador'];?>"><?php echo $f['nombre'];?></span></a></h3>
							<p>Disponibles: <?php echo $f['existencia'];?></p>	
	
	
	
	
						<td align="center"><?php 
													if($f['existencia']==0)
														echo '<input type="checkbox" name="cursos[]" value="'.$f["identificador"].'" onClick="if(this.checked==true){b=true;}else{b=false;}imprime(b,'.$f["costo"].',suma)"; disabled>';
													else
														echo '<input type="checkbox" name="cursos[]" value="'.$f["identificador"].'" onClick="if(this.checked==true){b=true;}else{b=false;}imprime(b,'.$f["costo"].',suma)";>';
											   ?></td>	
		

			

							
					</div>
					<div class="srch">
						<span>$<?php echo $f['costo'];?></span>
					</div>
					<div class="btn__form" style="background:#320535;">
							<input class="btn__submit" type ="submit" name="submit" value="Comprar" onClick="return validaCheck(operacion);"/>
							
				</DIV>
				</div>
			</div>
			<?php
		}
	?>
			
						
					
						
			</form>
	</DIV>			

			
			<div class="clearfix"> </div>
		</div>
	</div>
</div>	

</body>
</html>
<?php
		}//cierra if
		else
			header("Location: error.php?sErr=".$sError."&sBack=".$sBack);		
?>