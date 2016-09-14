<?php
	require "includes/conexion.php";
	require "includes/header.php";

	$codigo = $_GET['codigo'];
	$sql = "DELETE FROM materias_aprobadas
			WHERE codigo = '".$codigo."'";

	mysqli_query($link, $sql) or die("error al insertar datos en la base - ". mysqli_error($link));
	
	mysqli_close($link);
?>