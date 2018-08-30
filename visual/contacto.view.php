<?php 

include 'include/header.php';

?>
<?php 

include 'include/menu.php';

?>

	<section class="main">
		<article class="center">
			<h1>Escuela de Adiestramiento Canino Profesional <br>
				ADKANZ <br>
				Cursos Adiestramientos Asesorias Rehabilitacion Canina</h1>
			<p>Jonathan Tostado V.<br>
				Instructor Canino <br>
				<i class="fa fa-phone"></i> Cel. <a href="tel:3929271012"> 044-392-927-10-12</a><br>
				Recibe Whatsapp<br>
				E-mail <br>
				<a href="mailto:adkanz@hotmail.com">adkanz@hotmail.com</a></p>
		</article>
	</section>

	<section class="wrap">
		
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

			<input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo($nombre) ?>">

			<input id="correo" type="text" class="form-control" name="correo" placeholder="Correo:" value="<?php if(!$enviado && isset($correo)) echo($correo) ?>">

			<textarea name="mensaje" class="form" id="mensaje" placeholder="Mensaje:" ><?php if(!$enviado && isset($mensaje)) echo($mensaje) ?></textarea>

				<?php if (!empty($errores)): ?>
					<div class="alert error">
						<?php echo $errores; ?>
					</div>

					<?php elseif($enviado): ?>
						<div class="alert success">
							<p>Enviado Correctamente</p>
						</div>
				<?php endif ?>

			<input type="submit" name="submit" class="btn btn-primary" value="Envar Correo">


		</form>

	</section>
 <?php

 	require 'include/aside.php';

 ?>

 <?php

 	require 'include/footer.php';

 ?>
	
</body>
</html>