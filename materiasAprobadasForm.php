<?php 
	require "includes/conexion.php";
	require "includes/header.php";

	$codigo = $_POST['materia'];
	$nota = $_POST['nota'];

	$sql = "INSERT INTO materias_aprobadas(codigo, nota)
			VALUES('".$codigo."', ".$nota.")";

	mysqli_query($link, $sql) or die("error al insertar datos en la base - ". mysqli_error($link));
	
	mysqli_close($link);
	header("location:materiasAprobadas.php");
	
	require_once('includes/footer.php'); 
?>