
<!DOCTYPE HTML>
<html>
<head>
<title>Icndy Bootstarp Website Template | Home :: w3layouts</title>
<link href="../../css/csstienda/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="../../css/csstienda/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="../../js/jstienda/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../../js/jstienda/hover_pack.js"></script>
<link href="../../css/csstienda/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../../js/jstienda/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
</script>
</head>
<body>
	<?php
		include 'conexion.php';
		$re=mysql_query("select * from cursos where categoria='CONFERENCIAS'")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?> 
   <div class="main">
    <div class="container">
     <div class="top_grid" id="arrow">
   	  
   	  <div class="content_middle">
   	  	<div class="col-md-4 col2">
   	  		<a href="../usuarioregistrado/tiendatalentos.php" class="b-link-stroke b-animate-go  thickbox">
		   <img src="../../images/imagestienda/pic4.jpg" class="img-responsive" alt=""/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Talento Veracruzano</h2><p class="b-animate b-from-right    b-delay03 ">18 de mayo.</p></div></a>
   	  	</div>
   	  	<div class="col-md-4 col2">
   	  		<a href="../usuarioregistrado/detalles.php?identificador=<?php  echo $f['identificador'];?>" class="b-link-stroke b-animate-go  thickbox">
   	  		<!-- <a href="../usuarioregistrado/tiendaconferencia.php" class="b-link-stroke b-animate-go  thickbox">-->
		   <img src="../../images/imagestienda/pic5.jpg" class="img-responsive" alt=""/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Conferencias</h2><p class="b-animate b-from-right    b-delay03 ">19 de mayo.</p></div></a>
   	  	</div>
		<div class="col-md-4 col2">
   	  		<a href="../usuarioregistrado/tiendatalleres.php" class="b-link-stroke b-animate-go  thickbox">
		   <img src="../../images/imagestienda/pic6.jpg" class="img-responsive" alt=""/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Taller Magistral</h2><p class="b-animate b-from-right    b-delay03 ">20 de mayo.</p></div></a>
   	  	</div>
   	  	
   	  	<div class="clearfix"> </div>
   	  </div>
   	  </div>
   	</div>
   		<?php
		}
	?>
	
			
</body>
</html>		