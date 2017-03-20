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

<!--Sería mejor separar esta parte y crear otra pagina donde pida seleccionar el usuario al que asignar la reserva primero y luego llevar a esta página donde se crea la reserva para el usuario elegido-->
		<ARTICLE>
			<HEADER>
				<H2>Agregar Reserva</H2>
				<P>Formulario para agregar una nueva reserva</P>
				<TIME datetime="2017-02-14T01:20:00+01:00"><SMALL>Última reserva añadida 14-02-2017 a las 12:10</SMALL></TIME>
			</HEADER>

			<SECTION>
				<H3>Buscar cliente</H3>
				<P>
					Introduce algún dato del cliente para que aparezca en la lista
				</P>

				<DIV id="buscarCliente">
					<P>Escribe un dato por el que buscar cliente:</P>
					<BR />

					<FORM>
						Nombre<INPUT type="search" /> Apellidos <INPUT type="search" />
						<BR /><BR />
						Teléfono <INPUT type="search" /> DNI <INPUT type="search" />
						<BR /><BR />
						<INPUT type="button" value="Buscar" />
					</FORM>
				</DIV>
			</SECTION>

			<SECTION>
				<H3>Seleccionar cliente</H3>
				<P>
					Elige el cliente al que asociar la reserva (tiene que estar creado previamente)
				</P>

				<FORM id="seleccionarCliente">
					<BR/><BR/>
					<SELECT>
						<OPTION>cliente 1 Nombre, Apellidos - DNI - Telefono</OPTION>
						<OPTION>cliente 2 Nombre, Apellidos - DNI - Telefono</OPTION>
						<OPTION>cliente 3 Nombre, Apellidos - DNI - Telefono</OPTION>
						<OPTION>cliente 4 Nombre, Apellidos - DNI - Telefono</OPTION>
					</SELECT>
				</FORM>
			</SECTION>

			<SECTION>
				<H3>Datos de la nueva Reserva</H3>
				<P>
					Rellena los siguientes datos, los que tienen "*" son obligatorios
				</P>

				<FORM id="formCliente">
					Nº Habitación <INPUT type="search" /><BR /><BR />
					Fecha de Entrada <INPUT type="search" /><BR /><BR />
					Fecha de Salida <INPUT type="search" /><BR /><BR />
					Precio <INPUT type="search" /><BR /><BR />
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
