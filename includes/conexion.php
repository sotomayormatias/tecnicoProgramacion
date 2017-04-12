<?php 
	const SERVER = "localhost";
	const USUARIO = "root";
	const CLAVE = "";
	const BASE = "tecnico_programacion"; 

	$link = mysqli_connect(SERVER, USUARIO, CLAVE, BASE);
	mysqli_set_charset($link, "utf8");
?>