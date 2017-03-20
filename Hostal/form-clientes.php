<!DOCTYPE html>
<HTML lang="es">
	<HEAD>
		<TITLE>Administración Hotel</TITLE>
		<?php //Metaetiquetas globales importadas
			include ('metaetiquetas-generales.php');
		?>
		<META name='revised' content='Tuesday, February 20th, 2017, 11:08 pm' /><!--Última revisión del sitio-->
	</HEAD>

	<BODY>
		<?php
			include ('titulo.php');
			include ('menu-principal.php');
			echo '<DIV id="cajaContenido"><BR/>';
			echo '<DIV id="cajaEntradas"><BR/>';
		?>


		<ARTICLE>
			<HEADER>
				<H2>Agregar Cliente</H2>
				<P>Formulario para agregar un nuevo cliente</P>
				<TIME datetime="2017-02-14T01:20:00+01:00"><SMALL>Último cliente añadido 14-02-2017 a las 01:20</SMALL></TIME>
			</HEADER>

		</ARTICLE>
		<?php
			echo '</DIV><BR/>';
			echo '</DIV>';
			include ('footer.php');
		?>
	</BODY>
</HTML>
