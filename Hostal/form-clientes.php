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

			<SECTION>
				<H3>Nuevo Cliente</H3>
				<P>
					Rellena los siguientes datos, los que tienen "*" son obligatorios
				</P>

				<FORM id="formCliente">
					Nombre <INPUT type="search" /><BR /><BR />
					Apellidos <INPUT type="search" /><BR /><BR />
					DNI <INPUT type="search" /><BR /><BR />
					Sexo <INPUT type="search" /><BR /><BR />
					Fecha de Nacimiento <INPUT type="search" /><BR /><BR />
					País <INPUT type="search" /><BR /><BR />
					Provincia <INPUT type="search" /><BR /><BR />
					Ciudad <INPUT type="search" /><BR /><BR />
					Código Postal <INPUT type="search" /><BR /><BR />
					Dirección <INPUT type="search" /><BR /><BR />
					Teléfono <INPUT type="search" /><BR /><BR />
					Observación <INPUT type="textarea" /><BR /><BR />
				</FORM>
			</SECTION>
		</ARTICLE>
		<?php
			echo '</DIV><BR/>';
			echo '</DIV>';
			include ('footer.php');
		?>
	</BODY>
</HTML>
