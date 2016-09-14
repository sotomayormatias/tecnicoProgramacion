<?php 
	require "includes/conexion.php";
	require "includes/header.php";

	$codigo = $_GET['codigo'];
	$sql = "SELECT codigo, nombre, curs_corr_cursar, aprob_corr_cursar, corr_rendir, cuatrimestre 
			FROM materias 
			WHERE codigo = '".$codigo."'";

	$result = mysqli_query($link, $sql) or die(("error al traer datos de la base - ". mysqli_error($link)));
	$registro = mysqli_fetch_assoc($result);
	mysqli_close($link);
?>

<div class="tituloCentral"><h1>Edición de Materia</h1></div><br><br>
<div class="col-xs-4 center">
	<form action="editMateriasForm.php" method="post">
		<div class="form-group">
			<label for="codigo">Código</label>
			<input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código" value="<?php echo $registro['codigo']; ?>">
		</div>
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $registro['nombre']; ?>">
		</div>
		<div class="form-group">
			<label for="curs_corr_cursar">Cursadas necesarias para cursar</label>
			<input type="text" class="form-control" id="curs_corr_cursar" name="curs_corr_cursar" placeholder="código1/código2/código3..." value="<?php echo $registro['curs_corr_cursar']; ?>">
		</div>
		<div class="form-group">
			<label for="aprob_corr_cursar">Aprobadas necesarias para cursar</label>
			<input type="text" class="form-control" id="aprob_corr_cursar" name="aprob_corr_cursar" placeholder="código1/código2/código3..." value="<?php echo $registro['aprob_corr_cursar']; ?>">
		</div>
		<div class="form-group">
			<label for="corr_rendir">Correlativas necesarias para rendir</label>
			<input type="text" class="form-control" id="corr_rendir" name="corr_rendir" placeholder="código1/código2/código3..." value="<?php echo $registro['corr_rendir']; ?>">
		</div>
		<div class="form-group">
			<label for="cuatrimestre">Cuatrimestre</label>
			<input type="text" class="form-control" id="cuatrimestre" name="cuatrimestre" placeholder="Cuatrimestre" value="<?php echo $registro['cuatrimestre']; ?>">
		</div>
		
		<input type="submit" value="Editar" class="btn btn-primary" name="submitButton">
		<input type="button" value="Volver" class="btn btn-primary" onclick="location.href='materias.php'">

	</form>
</div>
<?php require 'includes/footer.php'; ?>