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
				<H2>Agregar Reserva</H2>
				<P>Formulario para agregar una nueva reserva</P>
				<TIME datetime="2017-02-14T01:20:00+01:00"><SMALL>Última reserva añadida 14-02-2017 a las 12:10</SMALL></TIME>
			</HEADER>

			<SECTION>
				<H3>Nueva Reserva</H3>
				<P>
					Rellena los siguientes datos, los que tienen "*" son obligatorios
				</P>

			</SECTION>
		</ARTICLE>
		<?php
			echo '</DIV><BR/>';
			echo '</DIV>';
			include ('footer.php');
		?>
	</BODY>
</HTML>
