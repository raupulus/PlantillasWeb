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
			//Leer todos los archivos del directorio entrada a un array
			$arrayEntradas = scandir('./Entradas/');
			unset($arrayEntradas[0]);//Borra punto nivel actual
			unset($arrayEntradas[1]);//Borra dos puntos nivel superior
			$arrayEntradas = array_values($arrayEntradas);//Ordena posiciones del array

			//Dar la vuelta al array dejando en Descendente para mostrar última entrada
			$arrayEntradas = array_reverse($arrayEntradas);

			//Bucle que recorre el array pintando las 10 primeras entradas
			$i = 0;
			$o = 9;//Entradas totales por página (empieza por 0)
			$tamanoArray = count($arrayEntradas);
			if ($tamanoArray<=10) {//Si hay menos de 10 entradas cambia $o
				$o = $tamanoArray;
			}
			while ($i<=$o) {
				echo "Array: ".$i;
				include ("./Entradas/".$arrayEntradas[$i]);
				$i = $i+1;
			}

			//Función para comprobar si hay más de 10/20/30... así hasta conocer cuantos números de páginas se crean en el pie para crear luego botón
			if ($tamanoArray<<$o){
				$totaldepaginas = ($tamanoArray/$o);
				echo "Se necesitan ".$totaldepaginas." páginas en total";
			}

			//Botón que muestra las siguientes 10 entradas o las anteriores



			//print (substr($arrayEntradas, 14));
			?>
		</DIV>

		<DIV id="CajaLateral">
			Caja con el menú lateral
			<?php
			include ('menulateral.php');
			?>
		</DIV>
	</DIV>
<?php

?>
</BODY>
</HTML>
