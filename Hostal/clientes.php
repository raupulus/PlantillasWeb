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
				<H2>CLIENTES</H2>
				<P>Detalles de clientes registrados</P>
				<TIME datetime="2017-02-14T01:20:00+01:00"><SMALL>Último cliente registrado 14-02-2017 a las 01:20</SMALL></TIME>
			</HEADER>

			<SECTION>
				<H3>Con reserva en este momento</H3>
				<P>Clientes que tienen reserva</P>
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
			echo '</DIV><BR/>';
			include ('footer.php');
		?>
	</BODY>
</HTML>
