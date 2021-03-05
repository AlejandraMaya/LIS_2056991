
<!DOCTYPE html>

	<html class="no-js"> 
	<?php include('head_login.php') ?>
	<body>
	

	<section id="fh5co-home" data-section="home" style="background-image: url(images/jeje2.png);" data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
			<div class="text-wrap">
				
								<div class="container-all"> 
            
										<div class="ctn-form">
											<a  title="Volver a inicio" href="index.php"><img src="images/LOGO.png" alt="L.I.S" class="logo" /></a>
											<h1 class="title">Inicio Sesión</h1>
								
											<form action="../controlador/validar_login.php" method="post">
												<label for="">Correo</label>
												<input type="email" name="correo">
								
												<label for="">Contraseña</label>
												<input type="password" name=clave>
												<center>
												<input class="boton" type="submit" value="Iniciar Sesión" >
												</center>
											</form>
								
										</div>
										<div class="ctn-text">
											<div class="capa"> </div>
											<div class="title-description">Usuarios de LIS</div>
											<p class="text-description text-justify">El administrador por medio del sistema podrá supervisar y estar al pendiente de los inventarios y control de préstamos. Podrá crear un perfil para los empleados con el cual ingresará, con la posibilidad de crear cuantos empleados se necesite.
											<br><br>El empleado ingresará a su perfil por medio del documento y la contraseña que se le ha suministrado el administrador.
											<br><br>Los alumnos/Profesores ingresaran a su perfil por medio del documento y la contraseña que se le ha suministrado el empleado.	</p>
								
										</div>
								
									</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slant"></div>
	</section>


	
	<!-- FOOTER -->

	<?php include('footer_login.php') ?>

	</body>
</html>

