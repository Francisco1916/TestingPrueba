<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro</title>
    <?php include './inc/link.php'; ?>
    <?php include './inc/navbar.php'; ?>
	
	
</head>
<body id="container-page-registration">
	
	 
    <script type="text/javascript" src="../../js/jsregistro/validar.js"></script>
    <script type="text/javascript" src="../../js/jsadmin/valletras.js"></script>
    <script type="text/javascript" src="../../js/jsadmin/valnum.js"></script>
    <script type="text/javascript" src="../../js/jsadmin/bloqueoespecial.js"></script>
	
    <section id="form-registration">
        <div class="container">
            <div class="row">
              
                <div class="col-xs-12 col-sm-6 text-center">
                   <br><br><br>
                    <p><i class="fa fa-users fa-5x"></i></p>
                    <p class="lead">
					<br>
                        Al registrarse podrá adquirir una gran variedad de productos.
                    </p>
                    <br>
                    <img src="assets/img/img-registration.png" alt="electrodomesticos" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-6">
                   <br><br>
                    <div id="container-form">
                       <p style="color:#fff;" class="text-center lead">Deberá de llenar todos los campos para registrarse</p>
                       <br><br>
                       <form class="form-horizontal FormCatElec" action="" method="post">
                  
                            
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese su nombre"  id="nombre" name="nombre" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre." onkeypress="return justLetters(event);" oncopy="return false;" onpaste="return false;" oncut="return false;">
                              </div>
                            </div>
                      
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese su apellido paterno" id="apepat" name="apepat" name="clien-fullname" data-toggle="tooltip" data-placement="top" title="Ingrese su apellido paterno." onkeypress="return justLetters(event);" oncopy="return false;" onpaste="return false;" oncut="return false;">
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese su apellido materno"  id="apemat" name="apemat" data-toggle="tooltip" data-placement="top" title="Ingrese sus apellido materno." onkeypress="return justLetters(event);" oncopy="return false;" onpaste="return false;" oncut="return false;">
                              </div>
                            </div>
							
                           
							<div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-at"></i></div>
                                <input class="form-control all-elements-tooltip" type="email" placeholder="Ingrese su Email"  id="correo" name="correo" data-toggle="tooltip" data-placement="top" title="Ingrese la dirección de su Email"  oncopy="return false;" onpaste="return false;" oncut="return false;">
                              </div>
                            </div>
							<div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese su telefono"  id="telefono" name="telefono" data-toggle="tooltip" data-placement="top" title="Ingrese la dirección de su Email"  oncopy="return false;" onpaste="return false;" oncut="return false;"  onkeypress="return justLyn(event);">
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                <input class="form-control all-elements-tooltip" type="password" placeholder="Introdusca una contraseña"  id="pass" name="pass" data-toggle="tooltip" data-placement="top" title="Defina una contraseña para iniciar sesión" oncopy="return false;" onpaste="return false;" oncut="return false;">
                              </div>
                            </div>
							  <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                <input class="form-control all-elements-tooltip" type="password" placeholder="Repite tu contraseña"  id="rpass" name="rpass" data-toggle="tooltip" data-placement="top" title="Repite tu contraseña para confirmar"  oncopy="return false;" onpaste="return false;" oncut="return false;" >
                              </div>
                            </div>
                            
                            
                            
                            
                            <br>
                            <p><input type="submit" name="submit" type ="submit" value="Registrar" class="btn btn-success btn-block" onClick="return validar();">
							
                            <div class="ResForm" style="width: 100%; color: #fff; text-align: center; margin: 0;"></div>
                        </form> 
						<?php
		if(isset($_POST['submit'])){
			require("../../../Modelo/registro.php");
		}
	?>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>