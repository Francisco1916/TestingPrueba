<!DOCTYPE html>
<html lang="en">
  <head>
   
   
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Divas Mom&Bbay </title>
	
	<?php include 'enlace.php'; ?>
	<link href="vista/css/cssvideo/stylevideo.css" rel='stylesheet' type='text/css' />	
	<link href="vista/css/cssvideo/popuo-boxvideo.css" rel="stylesheet" type="text/css" media="all" />
	<!-- <script type="text/javascript" src="../../js/jsregistro/validarregistro.js"></script>-->
    <link rel="shortcut icon" href="Vista/images/imagesregistro/gt_favicon.png" type="image/x-icon">
	
	
   <!-- validaciones -->

   <script type="text/javascript" src="vista/js/jsregistro/validar.js"></script>
   
    
    <script type="text/javascript" src="vista/js/jsadmin/valletras.js"></script>
    <script type="text/javascript" src="vista/js/jsadmin/valnum.js"></script>
    <script type="text/javascript" src="vista/js/jsadmin/bloqueoespecial.js"></script>
  
  

   
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
					<li><a href="#acerca">Acerca</a></li>
					<li><a href="#conferencistas">conferencistas</a></li>
					<li><a href="#paquetes">Paquetes</a></li>					
					<li><a href="#contacto">Contacto</a></li>
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
                      <input type="text" class="form-control" id="correo" name="usuario" placeholder="Escribe tu correo eletrónico"/> <!--oncopy="return false;" onpaste="return false;" oncut="return false;"--> 
                  </div>
                  <div class="form-group">
                      <label><span></span>&nbsp;Contraseña</label>
                      <input type="password" class="form-control" id="pass"  name="contrasena" placeholder="Escribe tu contraseña"/> <!--oncopy="return false;" onpaste="return false;" oncut="return false;"-->
                  </div>


                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm" onClick="return validar();">Iniciar sesión</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
                  </div>
                  <div class="ResFormL" style="width: 100%; text-align: center; margin: 0;"></div>
              </form>
          </div>
      </div>
    </div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
   
    <!-- Banner -->
	<div id="fh5co-main">
		<div class="fh5co-overlay-mobile"></div>
		<div id="fh5co-home" class="js-fullheight" data-section="home">

			<div class="flexslider">
				
				<div class="fh5co-overlay"></div>
				<div class="fh5co-text">
					<div class="container">
						<div class="row text-center">
							<h1 class="animate-box">FESTIVAL INTERNACIONAL DE ARTES VISUALES</h1>
							<div class="fh5co-go animate-box">
								<a href="#" class="js-fh5co-next">
									VER MÁS
									<span><i class="icon-arrow-down2"></i></span>
								</a>
								
							</div>
						</div>
					</div>
				</div>
			  	<ul class="slides">
			   	<li style="background-image: url(vista/images/imagesbanner/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(vista/images/imagesbanner/slide_1.jpg);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(vista/images/imagesbanner/slide_3.jpg);" data-stellar-background-ratio="0.5"></li>
			  	</ul>

			</div>
		</div>
		
		


		<div id="acerca" data-section="portfolio">
			
			
			<div class="about" id="about">
		<div class="container">
		
		
		
		

			
		

			
			
			
			<div id="acerca" data-section="portfolio">
			
			
			<div class="about" id="about">
		<div class="container">
		
		
		
		
		
		<div class="schedule-tab">
					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>ACERCA DE GO DESIGN</h2>
					</div>
	</div>
		<br>
		<br>
		
		
		
			
			<div class="agileits-about-grids">
				<div class="col-md-6 agileits-about-grid">
					<p>Go Design! Es una celebración. Reunimos en la ciudad de Xalapa, Veracruz a cientos de diseñadores e ilustradores del centro y sureste del país para vivir una experiencia de 3 días donde podrán convivir, participar y coexistir en torno a sus más grandes pasiones: El diseño y la Ilustración.<p>
					<br>
					<p>Es un Festival que busca impulsar al talento xalapeño y reunir a expertos en Ilustración, Diseño Gráfico, Artes plásticas, Fotografía, Diseño Editorial, Animación y Caligrafía reconocidos a nivel nacional e internacional, permitiendo un espacio de interacción entre estudiantes, profesionistas y personas interesadas en la materia, del Estado de Veracruz y República Mexicana. .</p>
				</div>
				<div class="col-md-6 agileits-about-grid">
					<p>En el marco del Festival Internacional de Artes Visuales Go Design! 2017 se realizará un bazar con Conferencistas internacionales y talentos locales, este estará disponible para el público con acceso al evento. El bazar se colocará en las tres sedes del evento y contará con alrededor de 600 visitantes de la república.</p>
					<strong> Fecha : </strong><p> 18 - 20 de Mayo de 2017</p>
					<strong> Lugar : </strong><p> Xalapa, Veracruz</p>
					<strong> Actividades : </strong><p> 7 Conferencias y más de 20 talleres</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
			</div>
			

				</div>
			</div>
		</div>

		
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<br>
		<br>
		
		
		
			<div class="schedule-tab" id="conferencistas">
					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>Conferencistas</h2>
					</div>
	</div>
		<div class="gallery" id="gallery">
		<div class="container">
				
			<div class="gallery-grids">
			<section>
				<ul id="da-thumbs" class="da-thumbs">
					<li>
						<a href="vista/images/imagesconfe/member-1c.png" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagesconfe/member-1.png" alt="" />
							<div>
							
							</div>
						</a>
					</li>
					<li>
						<a href="vista/images/imagesconfe/member-2c.png" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagesconfe/member-2.png" alt="" />
							<div>
								
							</div>
						</a>
					</li>
					<li>
						<a href="vista/images/imagesconfe/member-3c.png" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagesconfe/member-3.png" alt="" />
							<div>
								
								
							</div>
						</a>
					</li>
					<li>
						<a href="vista/images/imagesconfe/member-5c.png" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagesconfe/member-5.png" alt="" />
							<div>
								
								
							</div>
						</a>
					</li>
					<li>
						<a href="vista/images/imagesconfe/member-4c.png" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagesconfe/member-4.png" alt="" />
							<div>
								
								
							</div>
						</a>
					</li>
					<li>
						<a href="vista/images/imagesconfe/member-6c.png" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagesconfe/member-6.png" alt="" />
							<div>
								
								
							</div>
						</a>
					</li>
					
					
					
					
					
				</ul>
			</section>
        </div>
<!--script-->
	</div>
</div>
		

		
		
		
		
		
		
		
		<br>
		<br>
		
		
		
		
		
		
		<div class="schedule-tab" id="talleristas">
					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>Talento Veracruzano</h2>
					</div>
	</div>
		<div class="gallery" id="gallery">
		<div class="container">
				
			<div class="gallery-grids">
			<section>
				<ul id="da-thumbs" class="da-thumbs">
					<li>
						<a href="vista/images/imagesconfe/member-1t.png" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagesconfe/member-1t.png" alt="" />
							<div>
							
							</div>
						</a>
					</li>
					<li>
						<a href="vista/images/imagesconfe/member-2t.png" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagesconfe/member-2t.png" alt="" />
							<div>
								
							</div>
						</a>
					</li>
					<li>
						<a href="vista/images/imagesconfe/member-3t.png" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagesconfe/member-3t.png" alt="" />
							<div>
								
								
							</div>
						</a>
					</li>
					<li>
						<a href="vista/images/imagesconfe/member-4t.png" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagesconfe/member-4t.png" alt="" />
							<div>
								
								
							</div>
						</a>
					</li>
					<li>
						<a href="vista/images/imagesconfe/member-5t.png" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagesconfe/member-5t.png" alt="" />
							<div>
								
								
							</div>
						</a>
					</li>
					<li>
						<a href="vista/images/imagesconfe/member-6t.png" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagesconfe/member-6t.png" alt="" />
							<div>
								
								
							</div>
						</a>
					</li>
					
					
					
					
					
				</ul>
			</section>
        </div>
<!--script-->
	</div>
</div>
		
		
		
		
		
		<br>
		<br>
		
		
		
		
		
		
		
		
		
		
		
		<!-- //team -->
<br>
		<div class="schedule-tab" id="paquetes">
					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>PAQUETES</h2>
					</div>
	</div>
		<div class="gallery" id="gallery">
		<div class="container">
				
			<div class="gallery-grids">
			<section>
				<ul id="da-thumbs" class="da-thumbs">
					<li>
						<a href="vista/images/imagespaquetes/1.jpg" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagespaquetes/1.jpg" alt="" />
							<div>
								<h5><span>PAQUETE </span>1</h5>
							</div>
						</a>
					</li>
					<li>
						<a href="vista/images/imagespaquetes/2.jpg" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagespaquetes/2.jpg" alt="" />
							<div>
								<h5><span>PAQUETE </span>2</h5>
								<!--<p>non suscipit leo fringilla non suscipit leo fringilla molestie</p>-->
							</div>
						</a>
					</li>
					<li>
						<a href="vista/images/imagespaquetes/3.jpg" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagespaquetes/3.jpg" alt="" />
							<div>
								<h5><span>PAQUETE </span>3</h5>
								
							</div>
						</a>
					</li>
					<li>
						<a href="vista/images/imagespaquetes/4.jpg" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagespaquetes/4.jpg" alt="" />
							<div>
								<h5><span>PAQUETE </span>4</h5>
								
							</div>
						</a>
					</li>
					<li>
						<a href="vista/images/imagespaquetes/5.jpg" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagespaquetes/5.jpg" alt="" />
							<div>
								<h5><span>PAQUETE </span>5</h5>
								
							</div>
						</a>
					</li>
					<li>
						<a href="vista/images/imagespaquetes/6.jpg" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagespaquetes/6.jpg" alt="" />
							<div>
								<h5><span>PAQUETE </span>6</h5>
								
							</div>
						</a>
					</li>
					
					
					
					
					
				</ul>
			</section>
        </div>
<!--script-->
	</div>
</div>
<BR>
<BR>
<!--//gallery-->

<!-- DESCARGAR PROGRAMA-->
		
		<div id="schedule" class="parallax-section padding" style="background-position: 50% -353px;">
		<div class="overlay-bg"></div>
		<div class="container">
			<div class="schedule-tab">
					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>Calendario de eventos</h2>
						<br>
						<br>
						
					</div>
					
				<div class="tab-content">
					<div class="tab-pane fade in active" id="day-one">
						<div class="row schedule-details">
						
							
					</div>
			<div class="download-shedule text-center">
				<a href="http://www.godesign.mx/calendario%20de%20eventos.pdf" download="calendario de eventos.pdf" class="btn btn-primary"> Descarga el calendario en PDF</a>
				<p>Tamaño: 1 . 15 MB</p>
			</div>
		</div>
	</div>
	
	
	</div>
	</div>
	</div>
	<BR>
	<BR>
	
	
	
		
		
		
		 <!--/video-->
		<div id="video" class="video">
			<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><span> </span></a>
		</div>
		<div id="small-dialog" class="mfp-hide">
	  <iframe src="https://player.vimeo.com/video/17622300"></iframe>
		</div>
		<script src="vista/js/jsvideo/jquery.magnific-popupvideo.js" type="text/javascript"></script>
		 <script>
				$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});
				});
		</script>		
		
		

		<br>
		<br>
		<br>
		<br>
		
		
		
		
		
	
	
	
	
	
	
			<!-- //team -->
<br>
		<div class="schedule-tab" id="formasdepago">
					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>Formas de pago</h2>
					</div>
	</div>
		<div class="gallery" id="gallery">
		<div class="container">
				
			<div class="gallery-grids">
			<section>
				<ul id="da-thumbs" class="da-thumbs">
					<li>
						<a href="vista/images/imagesformas/g11.jpg" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagesformas/g1.jpg" alt="" />
							<div>
								<h5><span> </span></h5>
							</div>
						</a>
					</li>
					<li>
						<a href="vista/images/imagesformas/g22.jpg" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagesformas/g2.jpg" alt="" />
							<div>
								<h5><span> </span></h5>
								<!--<p>non suscipit leo fringilla non suscipit leo fringilla molestie</p>-->
							</div>
						</a>
					</li>
					<li>
						<a href="vista/images/imagesformas/g33.jpg" class="b-link-stripe b-animate-go  thickbox">
							<img src="vista/images/imagesformas/g3.jpg" alt="" />
							<div>
								<h5><span> </span></h5>
								
							</div>
						</a>
					</li>
					
					
					
					
					
					
				</ul>
			</section>
        </div>
<!--script-->
	</div>
</div>
<BR>
<BR>
<!--//gallery-->




   

				<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>

					
						  <!-- dropdown -->

	<!--banner-Slider-->
						
						 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
						auto: true,
						pager: true,
						nav:false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
						  });

						});
						  </script>
						   <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 3
			      $("#slider3").responsiveSlides({
			        auto: true,
			        pager:false,
			        nav:true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>

<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--/script-->
       
		
		<!--light-box-files -->
		<script type="text/javascript">
		$(function() {
			$('.gallery a').Chocolat();
		});
		</script>
	
		<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

			});
		</script>
<!-- //gallery -->
<!-- pop-up-box -->   
		
		
		 <script>
				$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});
				});
		</script>		
		
		<!--//pop-up-box -->
<!--JS-->


<!--//JS-->
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	<BR><BR>
	
	
<div class="clearfix"></div>
    <div class="content-banner2">
	<div class="container">
	   <div class="some-happy-clients">
	     <div class="some-happy-clients-head text-center">
		
		
			<h3>PATROCINADORES</h3>
		 </div>
	<div class="some-happy-clients-list text-center">
		 <div class="clients">
       <ul id="flexiselDemo3">

			
			
			
			<li><a href="http://www.diiicomm.org/landing/index"><img src="vista/images/imagespatro/c1.png" alt="" /></a></li>
			<li><a href="http://www.diiicomm.org/landing/index"><img src="vista/images/imagespatro/c2.png" alt="" /></a></li>
			<li><a href="http://www.diiicomm.org/landing/index"><img src="vista/images/imagespatro/c3.png" alt="" /></a></li>
			<li><a href="http://www.diiicomm.org/landing/index"><img src="vista/images/imagespatro/c4.png" alt="" /></a></li>
			<li><a href="http://www.diiicomm.org/landing/index"><img src="vista/images/imagespatro/c5.png" alt="" /></a></li>
			<li><a href="http://www.diiicomm.org/landing/index"><img src="vista/images/imagespatro/c6.png" alt="" /></a></li>
			<li><a href="http://www.diiicomm.org/landing/index"><img src="vista/images/imagespatro/c7.png" alt="" /></a></li>
			<li><a href="http://www.diiicomm.org/landing/index"><img src="vista/images/imagespatro/c8.png" alt="" /></a></li>
			<li><a href="http://www.diiicomm.org/landing/index"><img src="vista/images/imagespatro/c9.png" alt="" /></a></li>
			<li><a href="http://www.diiicomm.org/landing/index"><img src="vista/images/imagespatro/c10.png" alt="" /></a></li>
			<li><a href="http://www.diiicomm.org/landing/index"><img src="vista/images/imagespatro/c11.png" alt="" /></a></li>
			<li><a href="http://www.diiicomm.org/landing/index"><img src="vista/images/imagespatro/c12.png" alt="" /></a></li>
			
	
			
			
			
		</ul>
	<script type="text/javascript">
$(window).load(function() {
	
  $("#flexiselDemo3").flexisel({
		visibleItems: 4,
		animationSpeed: 1000,
		autoPlay: true,
		autoPlaySpeed: 3000,    		
		pauseOnHover: true,
		enableResponsiveBreakpoints: true,
    	responsiveBreakpoints: { 
    		portrait: { 
    			changePoint:480,
    			visibleItems: 1
    		}, 
    		landscape: { 
    			changePoint:640,
    			visibleItems: 2
    		},
    		tablet: { 
    			changePoint:768,
    			visibleItems: 3
    		}
    	}
    });
    });
</script>


 </div>
		     </div>
	   </div>
	</div>
	</div>
	
	
	
	
	<!-- LUGARES -->
	<div class="new-section">
								<div class="container">
									
									
						
			
		
					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>Ubicación Y Lugares De Celebración</h2>
						
					</div>
					
						<div class="news-grids">
											<div class="col-md-4 new-grid">
												 <a href="https://es-la.facebook.com/OverlightCursos/" class="mask"><img src="vista/images/imageslugares/n1.jpg" alt="image" class="img-responsive zoom-img"></a>
												 <h4><a href="https://es-la.facebook.com/OverlightCursos/">Overlight Espacio Creativo Xalapa</a></h4>
												<p>Talleres Con Talento Veracruzano</p>
												<strong> Av. 20 de Noviembre #271 </strong>
												<p>(frente a clínica de urología)</p>
											</div>
											<div class="col-md-4 new-grid">
											<a href="https://www.facebook.com/pages/Teatro-Imac/379687035443427" class="mask"><img src="vista/images/imageslugares/n2.jpg" alt="image" class="img-responsive zoom-img"></a>
												 <h4><a href="https://www.facebook.com/pages/Teatro-Imac/379687035443427">Teatro IMAC</a></h4>
												<p>Conferencias</p>
												<strong> Boulevard Adolfo Ruiz Cortínez </strong>
												<p>(entrada a Coapexpan)</p>
											</div>
											<div class="col-md-4 new-grid">
											<a href="https://www.google.com.mx/search?q=one+hotel&oq=one+hote&gs_l=serp.3...1766.3462.0.4012.10.8.1.0.0.0.268.976.2-4.4.0....0...1.1.64.serp..5.5.984...0j0i67k1j0i10i19k1j0i22i10i30i19k1j0i22i30i19k1.5X4XlkAqIp8" class="mask"><img src="vista/images/imageslugares/n3.jpg" alt="image" class="img-responsive zoom-img"></a>
												 <h4><a href="https://www.google.com.mx/search?q=one+hotel&oq=one+hote&gs_l=serp.3...1766.3462.0.4012.10.8.1.0.0.0.268.976.2-4.4.0....0...1.1.64.serp..5.5.984...0j0i67k1j0i10i19k1j0i22i10i30i19k1j0i22i30i19k1.5X4XlkAqIp8">ONE Hotel</a></h4>
												<p>Hotel Sede</p>
												<strong> Cristóbal Colón #26 </strong>
												<p>(frente a hospital Los Ángeles)</p>
											</div>
											<div class="clearfix"></div>
										</div>
								</div>
							</div>
	
	
	
	
	
	
	
	
	
	
	<!-- CONTACTO -->
	<div id="contacto" class="spacer">

<div class="container contactform center">



<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>CONTACTO</h2>
						
					</div>
					<BR>
					<BR>
					











  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">      
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Company">
        <textarea rows="5" placeholder="Message"></textarea>
        <button class="botoncontacto"><i class="fa fa-paper-plane"></i> Send</button>
      </div>
  </div>

</div>

</div>
<div id="map"></div>

<div class="footer text-center spacer">
<p class="wowload flipInX"><a href="#"><i class="fa fa-facebook fa-2x"></i></a> <a href="#"><i class="fa fa-instagram fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a href="#"><i class="fa fa-flickr fa-2x"></i></a> </p>
© Copyright 2017 Go Design. Todos los derechos reservados.
</div>






	
								<!--end-smooth-scrolling-->
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>