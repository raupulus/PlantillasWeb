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
			//Variables
			$paginas = $_GET['paginas'];
			if ($paginas == "" || $paginas == 1) {
				$paginas = 1;
			}/* else {
				$paginas = intval($paginas);
				echo "aaaaaaa".$paginas;
			}*/
			$EntradasPorPaginas = 9;
			$CantidadPaginas = $_GET['CantidadPaginas'];
			$contador = 0;
			if ($_GET['contador'] == "" || $_GET['contador'] == 0) {
				$contador = 0;
			} else {
				$contador = $_GET['contador'];
			}


			//Leer todos los archivos del directorio entrada a un array
			$arrayEntradas = scandir('./Entradas/');
			unset($arrayEntradas[0]);//Borra punto nivel actual
			unset($arrayEntradas[1]);//Borra dos puntos nivel superior
			$arrayEntradas = array_values($arrayEntradas);//Ordena posiciones del array

			//Dar la vuelta al array dejando en Descendente para mostrar última entrada
			$arrayEntradas = array_reverse($arrayEntradas);

			//Bucle que recorre el array pintando las 10 primeras entradas
			$tamanoArray = count($arrayEntradas);
			/*
			if ($tamanoArray<=10) {//Si hay menos de 10 entradas cambia $o
				$EntradasPorPaginas = $tamanoArray-1;//Le quito 1 porque el array empieza desde 0
			}
			*/
			$Recontador = $contador+$EntradasPorPaginas; //???? Y LOS QUE SOBRAN?????

			while ($contador<=$Recontador) {
				echo "Array: ".$contador;
				include ("./Entradas/".$arrayEntradas[$contador]);
				$contador = $contador+1;
			}

			//Función para comprobar si hay más de 10/20/30... así hasta conocer cuantos números de páginas se crean en el pie para crear luego botón
			echo "<BR/><BR/><HR/><BR/>";

			if ($_GET['CantidadPaginas'] == ""){
				$CantidadPaginas = ($tamanoArray/$contador);
				$CantidadPaginas = intval($CantidadPaginas)+1;
				echo "Se necesitan ".$CantidadPaginas." páginas en total<BR/>";
				echo "Página principal<BR/>";

				$a = 1;
				while ($a <= $CantidadPaginas) {

				echo "<A href=index.php?contador=$contador&CantidadPaginas=$CantidadPaginas><B style='color:red;'>$a</B></A>";
				$a = $a+1;
				}
			} else {
				echo "Se necesitan ".$CantidadPaginas." páginas en total<BR/>";
				echo "Página secundaria<BR/>";
				$a = 1;
				$CantidadPaginas = $_GET['CantidadPaginas'];
				while ($a <= $CantidadPaginas) {
				echo "<A href=index.php?contador=$contador&CantidadPaginas=$CantidadPaginas><B style='color:red;'>$a</B></A>";
				$a = $a+1;
				}
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
