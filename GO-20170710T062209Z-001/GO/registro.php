<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="./css/main.css">
	
	<!-- ESTILOS DE MENU DE NAVEGACIÓN -->
		<link rel="stylesheet" href="Vista/css/cssmenunav/bootstrapmenunav.css">
	<link rel="stylesheet" href="Vista/css/cssmenunav/stylemenunav.css">
	<link rel="stylesheet" href="Vista/css/cssmenunav/bootstrap-thememenunav.css" media="screen" > 
	<link rel="stylesheet" href="Vista/css/cssmenunav/mainmenunav.css"> 
	<!-- ESTILOS DE FONDO-IMAGEN-->
	<link rel="stylesheet" href="vista/css/cssfondo/responsive-full-background-image.css">
	<!-- JavaScript DE MENU DE NAVEGACIÓN-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="vista/js/jsmununav/bootstrap.js"></script>
	<script type="text/javascript" src="vista/js/jsadmin/tab.js"></script>
	<!---->
	
	  
		<script type="text/javascript" src="vista/js/jsregistro/validar.js"></script>
		<script type="text/javascript" src="vista/js/jsregistro/valletras.js"></script>
	    <script type="text/javascript" src="vista/js/jsregistro/valnum.js"></script>
	    <script type="text/javascript" src="vista/js/jsregistro/bloqueoespecial.js"></script>


	
	
		
</head>


<body>
	
	
	
	
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="Vista/images/imagesregistro/logo.png" alt="GO DESIGN"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="index.php">Inicio</a></li>
					<li><a href="index.php#acerca">Acerca</a></li>
					<li><a href="index.php#conferencistas">conferencistas</a></li>
					<li><a href="index.php#paquetes">Paquetes</a></li>					
					<li><a href="index.php#contacto">Contacto</a></li>
					<li><a href="registro.php">Registro</a></li>
		
					<li><a class="btn" data-toggle="modal" data-target=".modal-login" href="#">INICIAR SESIÓN</a></li>
				
					
					
					
					
				</ul>
			</div>
		</div>
	</div> 
	
	
	
	
	
	
	
	     <div class="modal fade modal-login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
          <div class="modal-content" id="modal-form-login">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title text-center text-primary" id="myModalLabel">Iniciar sesión</h4>
                </div>
            <form method="post" action="controlador/login.php"  role="form" style="margin: 20px;" class="FormCatElec" data-form="login">
                  <div class="form-group">
                      <label><span></span>&nbsp;Correo electrónico</label>
                      <input type="text" class="form-control" id="correo" name="usuario" placeholder="Escribe tu correo eletrónico" oncopy="return false;" onpaste="return false;" oncut="return false;" />
                  </div>
                  <div class="form-group">
                      <label><span></span>&nbsp;Contraseña</label>
                      <input type="password" class="form-control" id="pass"  name="contrasena" placeholder="Escribe tu contraseña" oncopy="return false;" onpaste="return false;" oncut="return false;" />
                  </div>


                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm" onClick="return validarregistro();">Iniciar sesión</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
                  </div>
                  <div class="ResFormL" style="width: 100%; text-align: center; margin: 0;"></div>
              </form>
          </div>
      </div>
    </div>
	
	
	
	
	
	
	
	
	
	
	
	<br><br>
	<div>
	<br>
	
	<br>
		
		
		
		
		
		<fieldset>
		<div class="contenedor">
		<div class="form__top">
			<h2>Registro <span>GoDesign</span></h2>
		</div>		
			
				<form class="form__reg"  action="" method="post">
					
					
					<label> Nombre</label>
						<br>
						<input class="inputform" type="text" id="nombre" name="nombre" onkeypress="return justLetters(event);">
						<br>
					<label> Apellido Paterno</label>
						<input class="inputform" type="text" id="apepat" name="apepat" onkeypress="return justLetters(event);">
						<br>
					<label> Apellido Materno</label>
						<input class="inputform" type="text" id="apemat" name="apemat" onkeypress="return justLetters(event);">
						<br>
					<label> Correo electrónico</label>
						<input class="inputform" type="text" id="correo" name="correo">
						<br>
					<label> Teléfono </label>
						<input class="inputform" type="text" id="telefono" name="telefono" onkeypress="return justNumbers(event);">
						<br>
					<label> Contraseña</label>
						<input class="inputform" type="password" id="pass" name="pass" onkeypress="return justLyn(event);">
						<br>
					<label> Repite Contraseña</label>
						<input class="inputform" type="password" id="pass"  name="rpass" onkeypress="return justLyn(event);">
						<br>
					
							                
						
                            <br>
                            <!-- <p><input type="submit" name="submit" type ="submit" value="Registrar" class="btn btn-success btn-block" onClick="return validar();"> -->
							
                            <div class="ResForm" style="width: 100%; color: #fff; text-align: center; margin: 0;"></div>				
					
					
					
					
										
						
						
					
						 <div class="btn__form">
            	<input class="btn__submit" type="submit" name="submit" type ="submit" value="Registrar" class="btn btn-success btn-block" onClick="return validar();">
            	<input class="btn__reset" type="button" name="Submit" value="Cancelar" onClick="window.location = 'regusu.php';">
            </div>
						
						
				</form> 
						<?php
		if(isset($_POST['submit'])){
			require("vista/../Modelo/registro.php");
		}
	?>
		</fieldset>
	</div>
</body>
