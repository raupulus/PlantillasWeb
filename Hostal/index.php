<!DOCTYPE html>
<HTML lang="es">
	<HEAD>
		<TITLE>Administración Hotel</TITLE>
		<?php //Metaetiquetas globales importadas
				include ('metaetiquetas-generales.php');
			?>
		<META name="keywords" content="administración, hotel, plantilla, web, fryntiz" /><!--Etiquetas-->
		<META name="subject" content="Web para administrar Hotel" /><!--Descripción cortísima-->
		<META name="description" content="" /><!--Breve resumen-->
		<META name='revised' content='Tuesday, February 12th, 2017, 13:22 pm' /><!--Última revisión del sitio-->

		<!--Metaetiquetas para mostrar WEB en Facebook-->
		<META property='og:title' content='Titulo de la página' />
		<META property='og:description' content='Descripción' />
		<META property='og:image' content='http://www.dominioDelSitioWEB.es/img/logo.png' /><!--Miniatura que se mostrará junto al enlace-->

		<!--Metaetiquetas para mostrar WEB en Twitter-->
		<META name="twitter:title" content="Nombre de la publicación en twitter" />
		<META name="twitter:description" content="Descripción de la página, máximo 200 caracteres" />
	</HEAD>

	<BODY>
		<?php
			include ('titulo.php');
			include ('menu-principal.php');
		?>
				<DIV id="cajaContenido">
					<DIV id="cajaEntradas">
						<?php include ('contenido.php');?>

					</DIV>
						<?php include ('aside.php');?>
				</DIV>
		<?php
			include ('footer.php');
		?>
	</BODY>
</HTML>
