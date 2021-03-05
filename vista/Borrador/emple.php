
<!DOCTYPE html>

	<html class="no-js"> 
	<?php include('head_login.php') ?>
	<body>
	

		<section id="fh5co-home" data-section="home" style="background-image: url(images/jaja2.png);" data-stellar-background-ratio="0.5">
			<div class="gradient"></div>
				<div class="text-wrap">
					
									<div class="container-all"> 
				
											<div class="ctn-form">
											<a  title="Volver a inicio" href="index.php"><img src="images/LOGO.png" alt="L.I.S" class="logo" /></a>
												
												<h1 class="title">Empleado</h1>
									
											<form action="../controlador/validar.php" method="post">
												<label for="">Correo</label>
												<input type="email" name="correo_empleado">
								
												<label for="">Contraseña</label>
												<input type="password" name="contraseña_empleado">
												<center>
												<input class="boton" type="submit" value="Iniciar Sesión" >
												</center>
											</form>
									  
											</div>
											<div class="ctn-text">
												<div class="capa"> </div>
												
												<div class="title-description" data-aos="fade-up" data-aos-duration="9000" data-aos-delay="0">Empleado en LIS</div>
												<p class="text-description" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0"> 
													El empleado ingresará a su perfil por medio del usuario y la contraseña que se le ha suministrado el administrador. En el tendrá un sistema de préstamos, además podrá crear y controlar los usuarios de la organización, administrando el historial de préstamos y los tramites. También administrara el inventario de la organización de una manera fácil y rápida.
													</p>
									
											</div>
									</div>
							</div>
			<div class="slant"></div>
		</section>

	<!-- FOOTER -->

	<?php include('footer_login.php') ?>
				  
				  
	</body>
</html>

