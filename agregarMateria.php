<?php 
	require "includes/header.php";
?>

<div class="tituloCentral"><h1>Alta de Materia</h1></div><br><br>
<div class="col-xs-4 center">
	<form action="materiasForm.php" method="post">
		<div class="form-group">
			<label for="codigo">Código</label>
			<input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código">
		</div>
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
		</div>
		<div class="form-group">
			<label for="curs_corr_cursar">Cursadas necesarias para cursar</label>
			<input type="text" class="form-control" id="curs_corr_cursar" name="curs_corr_cursar" placeholder="código1/código2/código3...">
		</div>
		<div class="form-group">
			<label for="aprob_corr_cursar">Aprobadas necesarias para cursar</label>
			<input type="text" class="form-control" id="aprob_corr_cursar" name="aprob_corr_cursar" placeholder="código1/código2/código3...">
		</div>
		<div class="form-group">
			<label for="corr_rendir">Correlativas necesarias para rendir</label>
			<input type="text" class="form-control" id="corr_rendir" name="corr_rendir" placeholder="código1/código2/código3...">
		</div>
		<div class="form-group">
			<label for="cuatrimestre">Cuatrimestre</label>
			<input type="text" class="form-control" id="cuatrimestre" name="cuatrimestre" placeholder="Cuatrimestre">
		</div>
		
		<input type="submit" value="Agregar" class="btn btn-primary" name="submitButton">
		<input type="button" value="Volver" class="btn btn-primary" onclick="location.href='materias.php'">

	</form>
</div>
<?php require 'includes/footer.php'; ?>