<!DOCTYPE html>
<HTML lang="es">
	<HEAD>
		<TITLE>Administración Hotel</TITLE>
		<?php //Metaetiquetas globales importadas
			include ('metaetiquetas-generales.php');
		?>
		<META name='revised' content='Tuesday, February 13th, 2017, 13:22 pm' /><!--Última revisión del sitio-->
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
				<H2>HABITACIONES</H2>
				<P>Detalles de cada habitación</P>
				<TIME datetime="2017-02-14T01:20:00+01:00"><SMALL>Último habitación ocupada 14-02-2017 a las 01:20</SMALL></TIME>
			</HEADER>

			<SECTION>
				<H3>Listado de Habitaciones</H3>
				<P>El siguiente listado muestra todas las habitaciones existentes</P>
				<TABLE>
					<TR>
						<TH>Nº</TH>
						<TH>Nombre</TH>
						<TH>Precio Base</TH>
						<TH>Descripción</TH>
					</TR>

					<!--Temporal para diseño, esta parte se llena con la BD-->
					<TR>
						<TD>1</TD>
						<TD>Habitación Simple</TD>
						<TD>50€</TD>
						<TD>Habitación sin vistas al exterior</TD>
					</TR>
					<TR>
						<TD>2</TD>
						<TD>Habitación Doble</TD>
						<TD>50€</TD>
						<TD>Habitación con dos camas</TD>
					</TR><TR>
						<TD>3</TD>
						<TD>Habitación Triple</TD>
						<TD>50€</TD>
						<TD>Habitación con tres camas</TD>
					</TR><TR>
						<TD>4</TD>
						<TD>Habitación Cuádruple</TD>
						<TD>50€</TD>
						<TD>Habitación con cuatro camas</TD>
					</TR><TR>
						<TD>5</TD>
						<TD>Habitación Simple</TD>
						<TD>50€</TD>
						<TD>Habitación sin vistas al exterior</TD>
					</TR><TR>
						<TD>6</TD>
						<TD>Habitación Simple</TD>
						<TD>50€</TD>
						<TD>Habitación sin vistas al exterior</TD>
					</TR><TR>
						<TD>7</TD>
						<TD>Habitación Simple</TD>
						<TD>50€</TD>
						<TD>Habitación sin vistas al exterior</TD>
					</TR><TR>
						<TD>8</TD>
						<TD>Habitación Simple</TD>
						<TD>50€</TD>
						<TD>Habitación sin vistas al exterior</TD>
					</TR><TR>
						<TD>9</TD>
						<TD>Habitación Simple</TD>
						<TD>50€</TD>
						<TD>Habitación sin vistas al exterior</TD>
					</TR><TR>
						<TD>10</TD>
						<TD>Habitación Simple</TD>
						<TD>50€</TD>
						<TD>Habitación sin vistas al exterior</TD>
					</TR><TR>
						<TD>11</TD>
						<TD>Habitación Simple</TD>
						<TD>50€</TD>
						<TD>Habitación sin vistas al exterior</TD>
					</TR><TR>
						<TD>12</TD>
						<TD>Habitación Simple</TD>
						<TD>50€</TD>
						<TD>Habitación sin vistas al exterior</TD>
					</TR><TR>
						<TD>13</TD>
						<TD>Habitación Simple</TD>
						<TD>50€</TD>
						<TD>Habitación sin vistas al exterior</TD>
					</TR>
					<!--Fin de la parte temporal-->

					<?php

					?>
				</TABLE>
			</SECTION>
		</ARTICLE>

		<?php
			echo '</DIV><BR/>';
			echo '</DIV>';
			include ('footer.php');
		?>
	</BODY>
</HTML>
