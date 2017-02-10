<?php

	echo "<a href = 'formulario.php' >Nuevo</a>";
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'Mostrar.php' >Continuar</a>"; 
	echo "&nbsp;";
	echo "&nbsp;";  

$n = $_GET['Nombre'];
$p = $_GET['Parcial'];
$f = $_GET['Final'];
$m = $_GET['Mejoramiento'];
$a = 1;
?>

<?php
include_once("NotaCollector.php");
$NotaCollectorObj = new NotaCollector();
$NotaCollectorObj->insertarNota($n,$p,$f,$m,$a);
echo "&nbsp;";  
echo "Registro Ingresado : ".$n. " " .$p. " ". $f. " ".$m. " ".$a;
?>
