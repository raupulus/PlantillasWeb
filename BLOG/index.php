<!DOCTYPE html>
<?php

?>
<HTML lang="es">
<HEAD>
	<TITLE>BLOG</TITLE>
	<META charset="utf-8"/>
	<META name="description" content="BLOG"/>
	<META name="keywords" content="ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
	<META name="author" content="Raúl Caro Pastorino"/>
	<LINK rel="shortcut icon" href="./images/favicon.png"/>
	<LINK rel="stylesheet" href="./CSS/styles.css"/>
	<LINK rel="stylesheet" href="./CSS/1000.css"/>
	<LINK rel="stylesheet" href="./CSS/+1000.css"/>
	<SCRIPT src="JS/scripts.js"></SCRIPT>
</HEAD>

<BODY>
	<H1>Nombre del BLOG</H1>
	<P>Descripción</P>
	<DIV id="CajaGeneral">
		<DIV id="CajaEntradas">
			<H2>Entradas</H2>
			<?php
				include ('./Entradas/0001-EntradaPrueba.php');
			?>
		</DIV>

		<DIV id="CajaLateral">
			Caja con el menú lateral
			<?php

			?>
		</DIV>
	</DIV>
<?php

?>
</BODY>
</HTML>
