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
				<H2>RESERVAS</H2>
				<P>Detalles de las reservas actuales</P>
				<TIME datetime="2017-02-14T01:20:00+01:00"><SMALL>Último reserva realizada 14-02-2017 a las 01:20</SMALL></TIME>
			</HEADER>

			<DIV class="agregar">
				+Nueva Reserva
			</DIV>

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
						<TD>4</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
					</TR>
					<TR>
						<TD>4</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
					</TR>
					<TR>
						<TD>4</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
					</TR>
					<TR>
						<TD>4</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
					</TR>
					<!--Fin de la parte temporal-->

					<?php

					?>
				</TABLE>
			</SECTION>

			<SECTION>
				<H3>Sin reserva en este momento</H3>
				<P>Habitaciones que tienen no tienen reserva</P>
				<TABLE>
					<TR>
						<TH>Nº Habitación</TH>
						<TH>Fecha de Entrada</TH>
						<TH>Fecha de Salida</TH>
					</TR>

					<!--Temporal para diseño, esta parte se llena con la BD-->
					<TR>
						<TD>4</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
					</TR>
					<TR>
						<TD>4</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
					</TR>
					<TR>
						<TD>4</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
					</TR>
					<TR>
						<TD>4</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
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
