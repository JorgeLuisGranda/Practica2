<?php

	header ("Content-Type: text/hmtl;charset=utf-8"); //Para aceptar acentos y caracteres

	$numero = $_POST['numerocontrol'];
	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
	$telefono = $_POST['telefono'];
	$semestre = $_POST['semestre'];
	echo "$nombre, su número de control es $numero, tiene $edad años, su número de teléfono es $telefono, y va en $semestre semestre, excelente dia";
?>