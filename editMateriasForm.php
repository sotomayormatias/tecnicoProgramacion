<?php 
	require "includes/conexion.php";
	require "includes/header.php";

	$codigo = $_POST['codigo'];
	$nombre = $_POST['nombre'];
	$curs_corr_cursar = $_POST['curs_corr_cursar'];
	$aprob_corr_cursar = $_POST['aprob_corr_cursar'];
	$corr_rendir = $_POST['corr_rendir'];
	$cuatrimestre = $_POST['cuatrimestre'];

	$sql = "UPDATE materias
			SET nombre='".$nombre."',
				curs_corr_cursar='".$curs_corr_cursar."',
				aprob_corr_cursar='".$aprob_corr_cursar."',
				corr_rendir='".$corr_rendir."',
				cuatrimestre=".$cuatrimestre."
			WHERE codigo='".$codigo."'";

	mysqli_query($link, $sql) or die("error al insertar datos en la base - ". mysqli_error($link));
	
	mysqli_close($link);
	header("location:materias.php");
	
	require_once('includes/footer.php'); 
?>