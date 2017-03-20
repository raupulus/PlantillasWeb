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

			<DIV class="agregar" onClick="location.href = 'form-clientes.php'">
				+Nuevo Cliente
			</DIV>

			<DIV class="agregar mostrarBuscar" onClick="document.getElementById('buscar').style.display = 'block';">
				Buscar Cliente
			</DIV>

			<DIV id="buscar">
				<FORM>
					<INPUT type="button" value="Buscar" onClick="document.getElementById('busqueda').style.display = 'block';"/>
					Nombre <INPUT type="search" />
					Apellidos <INPUT type="search" />
					<BR /><BR />
					DNI <INPUT type="search" />
					Teléfono <INPUT type="search" />
				</FORM>
			</DIV>

			<SECTION id="busqueda"><!--No se muestra hasta que se pulsa buscar-->
				<H3>Resultado de la búsqueda</H3>
				<P>Las coincidencias con la búsqueda son:</P>
				<TABLE>
					<TR>
						<TH>Nombre</TH>
						<TH>Apellidos</TH>
						<TH>Teléfono</TH>
						<TH>Provincia</TH>
						<TH>Ciudad</TH>
						<TH>Tiene Reservas</TH>
					</TR>
				</TABLE>
			</SECTION>

			<SECTION>
				<H3>Con reserva en este momento</H3>
				<P>Clientes que tienen reserva</P>
				<TABLE>
					<TR>
						<TH>Nombre</TH>
						<TH>Apellidos</TH>
						<TH>Teléfono</TH>
						<TH>Provincia</TH>
						<TH>Ciudad</TH>
						<TH>Nº Habitación</TH>
						<TH>Días</TH>
						<TH>Precio</TH>
					</TR>

					<!--Temporal para diseño, esta parte se llena con la BD-->
					<TR>
						<TD>Pepe</TD>
						<TD>Mero Calistro</TD>
						<TD>612123123</TD>
						<TD>Cádiz</TD>
						<TD>Chipiona</TD>
						<TD>13</TD>
						<TD>2 días</TD>
						<TD>112€</TD>
					</TR>
					<TR>
						<TD>Ana</TD>
						<TD>Corneta Quemada</TD>
						<TD>6987987</TD>
						<TD>Sevilla</TD>
						<TD>Dos hermanas</TD>
						<TD>11</TD>
						<TD>4 días</TD>
						<TD>192€</TD>
					</TR>
					<TR>
						<TD>Pepe</TD>
						<TD>Mero Calistro</TD>
						<TD>612123123</TD>
						<TD>Cádiz</TD>
						<TD>Chipiona</TD>
						<TD>13</TD>
						<TD>8 días</TD>
						<TD>392€</TD>
					</TR>
					<TR>
						<TD>Ana</TD>
						<TD>Corneta Quemada</TD>
						<TD>6987987</TD>
						<TD>Sevilla</TD>
						<TD>Camas</TD>
						<TD>11</TD>
						<TD>5 días</TD>
						<TD>292€</TD>
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
						<TH>Provincia</TH>
						<TH>Ciudad</TH>
					</TR>

					<!--Temporal para diseño, esta parte se llena con la BD-->
					<TR>
						<TD>Pepe</TD>
						<TD>Mero Calistro</TD>
						<TD>612123123</TD>
						<TD>Cádiz</TD>
						<TD>Chipiona</TD>
					</TR>
					<TR>
						<TD>Ana</TD>
						<TD>Corneta Quemada</TD>
						<TD>6987987</TD>
						<TD>Sevilla</TD>
						<TD>Dos Hermanas</TD>
					</TR>
					<!--Fin de la parte temporal-->

					<?php

					?>
				</TABLE>
			</SECTION>

			<SECTION>
				<H3>Clientes que nunca han reservados</H3>
				<P>Clientes que no han creado nuna una reserva</P>
				<TABLE>
					<TR>
						<TH>Nombre</TH>
						<TH>Apellidos</TH>
						<TH>Teléfono</TH>
						<TH>Provincia</TH>
						<TH>Ciudad</TH>
					</TR>

					<!--Temporal para diseño, esta parte se llena con la BD-->
					<TR>
						<TD>Pepe</TD>
						<TD>Mero Calistro</TD>
						<TD>612123123</TD>
						<TD>Cádiz</TD>
						<TD>Chipiona</TD>
					</TR>
					<TR>
						<TD>Ana</TD>
						<TD>Corneta Quemada</TD>
						<TD>6987987</TD>
						<TD>Sevilla</TD>
						<TD>Dos Hermanas</TD>
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
