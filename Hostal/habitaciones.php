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
				<H3>Ocupadas toda la semana</H3>
				<P>Habitaciones ocupadas para toda la semana completa</P>
				<TABLE>
					<TR>
						<TH>Nº Habitación</TH>
						<TH>Fecha de Entrada</TH>
						<TH>Fecha de Salida</TH>
					</TR>

					<!--Temporal para diseño, esta parte se llena con la BD-->
					<TR>
						<TD>Pepe</TD>
						<TD>Mero Calistro</TD>
						<TD>612123123</TD>
					</TR>
					<TR>
						<TD>Ana</TD>
						<TD>Corneta Quemada</TD>
						<TD>6987987</TD>
					</TR>
					<TR>
						<TD>Pepe</TD>
						<TD>Mero Calistro</TD>
						<TD>612123123</TD>
					</TR>
					<TR>
						<TD>Ana</TD>
						<TD>Corneta Quemada</TD>
						<TD>6987987</TD>
					</TR>
					<!--Fin de la parte temporal-->

					<?php

					?>
				</TABLE>
			</SECTION>

			<SECTION>
				<H3>Sin reserva en este momento</H3>
				<P>Clientes que tienen no tienen reserva</P>
				<TABLE>
					<TR>
						<TH>Nombre</TH>
						<TH>Apellidos</TH>
						<TH>Teléfono</TH>
						<TH>Ciudad</TH>
						<TH>Nº Habitación</TH>
					</TR>

					<!--Temporal para diseño, esta parte se llena con la BD-->
					<TR>
						<TD>Pepe</TD>
						<TD>Mero Calistro</TD>
						<TD>612123123</TD>
						<TD>Chipiona</TD>
						<TD>13</TD>
					</TR>
					<TR>
						<TD>Ana</TD>
						<TD>Corneta Quemada</TD>
						<TD>6987987</TD>
						<TD>Sevilla</TD>
						<TD>11</TD>
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
