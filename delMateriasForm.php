<?php
	require "includes/conexion.php";
	require "includes/header.php"

	$codigo = $_POST['codigo'];
	$sql = "DELETE FROM materias 
			WHERE codigo = '".$codigo."'";

	mysqli_query($link, $sql) or die("error al insertar datos en la base - ". mysqli_error($link));
	
	mysqli_close($link);
	header('Location: index.php');
?>