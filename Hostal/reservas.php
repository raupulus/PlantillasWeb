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

			<DIV class="agregar" onClick="location.href = 'form-reservas.php'">
				+Nueva Reserva
			</DIV>

			<DIV class="agregar mostrarBuscar" onClick="document.getElementById('buscar').style.display = 'block';">
				Buscar Reserva
			</DIV>

			<DIV id="buscar">
				<FORM>
					<INPUT type="button" value="Buscar" onClick="document.getElementById('busqueda').style.display = 'block';"/>
					Día <INPUT type="search" />
					Mes <INPUT type="search" />
					Habitación <INPUT type="search" />
				</FORM>
			</DIV>

			<SECTION id="busqueda"><!--No se muestra hasta que se pulsa buscar-->
				<H3>Resultado de la búsqueda</H3>
				<P>Las coincidencias con la búsqueda son:</P>
				<TABLE>
					<TR>
						<TH>Nº</TH>
						<TH>Nombre</TH>
						<TH>Días</TH>
						<TH>Precio</TH>
						<TH>Fecha<BR />Entrada</TH>
						<TH>Fecha<BR />Salida</TH>
						<TH>Cliente</TH>
						<TH>Teléfono</TH>
					</TR>
				</TABLE>
			</SECTION>

			<SECTION>
				<H3>Reservas los próximos 10 días</H3>
				<P>Habitaciones reservadas en los próximos 10 días</P>
				<TABLE>
					<TR>
						<TH>Nº</TH>
						<TH>Nombre</TH>
						<TH>Días</TH>
						<TH>Precio</TH>
						<TH>Fecha<BR />Entrada</TH>
						<TH>Fecha<BR />Salida</TH>
						<TH>Cliente</TH>
						<TH>Teléfono</TH>
					</TR>

					<!--Temporal para diseño, esta parte se llena con la BD-->
					<TR>
						<TD>4</TD>
						<TD>Habitación Simple</TD>
						<TD>11 Días</TD>
						<TD>678€</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
						<TD>Antonio</TD>
						<TD>634678678</TD>
					</TR>
					<TR>
						<TD>5</TD>
						<TD>Habitación Doble</TD>
						<TD>2 Días</TD>
						<TD>131€</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
						<TD>Pepe</TD>
						<TD>634678678</TD>
					</TR>
					<TR>
						<TD>7</TD>
						<TD>Habitación Triple</TD>
						<TD>23 Días</TD>
						<TD>1533€</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
						<TD>Ana</TD>
						<TD>634678678</TD>
					</TR>
					<TR>
						<TD>2</TD>
						<TD>Habitación Cuádruple</TD>
						<TD>5 Días</TD>
						<TD>391€</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
						<TD>Marcos</TD>
						<TD>634678678</TD>
					</TR>
					<!--Fin de la parte temporal-->

					<?php

					?>
				</TABLE>
			</SECTION>

			<SECTION>
				<H3>Todas las reservas</H3>
				<P>Se muestran todas las reservas</P>
				<TABLE>
					<TR>
						<TH>Nº</TH>
						<TH>Nombre</TH>
						<TH>Días</TH>
						<TH>Precio</TH>
						<TH>Fecha<BR />Entrada</TH>
						<TH>Fecha<BR />Salida</TH>
						<TH>Cliente</TH>
						<TH>Teléfono</TH>
					</TR>

					<!--Temporal para diseño, esta parte se llena con la BD-->
					<TR>
						<TD>4</TD>
						<TD>Habitación Simple</TD>
						<TD>11 Días</TD>
						<TD>678€</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
						<TD>Luis</TD>
						<TD>634678678</TD>
					</TR>
					<TR>
						<TD>5</TD>
						<TD>Habitación Doble</TD>
						<TD>2 Días</TD>
						<TD>131€</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
						<TD>Maria</TD>
						<TD>634678678</TD>
					</TR>
					<TR>
						<TD>7</TD>
						<TD>Habitación Triple</TD>
						<TD>23 Días</TD>
						<TD>1533€</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
						<TD>Alejandro</TD>
						<TD>634678678</TD>
					</TR>
					<TR>
						<TD>2</TD>
						<TD>Habitación Cuádruple</TD>
						<TD>5 Días</TD>
						<TD>391€</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
						<TD>Josefa</TD>
						<TD>634678678</TD>
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
