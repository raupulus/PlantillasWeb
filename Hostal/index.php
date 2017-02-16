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
			echo	'<DIV id="cajaContenido">';
			echo	'<DIV id="cajaEntradas">';
			include ('contenido.php');
			echo '</DIV>';
			include ('aside.php');
			echo	'</DIV>';
			include ('footer.php');
		?>
	</BODY>
</HTML>
