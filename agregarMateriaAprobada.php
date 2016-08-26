<?php 
	require "includes/conexion.php";
	$sqlMaterias = "SELECT codigo, nombre
					 FROM materias
					 ORDER BY nombre";
	$resultMaterias = mysqli_query($link, $sqlMaterias) or die(("error al traer datos de la base - ". mysqli_error($link)));

	mysqli_close($link);
	require "includes/header.php";
?>

<div class="tituloCentral"><h1>Alta de Materia Aprobada</h1></div><br><br>
<div class="col-xs-4 center">
	<form action="materiasAprobadasForm.php" method="post">
		<div class="form-group">
			<label for="codigo">Código</label>
			<select class="form-control" id="materia" name="materia" placeholder="Materia">
				<?php 
					while ($registro = mysqli_fetch_assoc($resultMaterias))
					{ 
				?>
					<option value="<?php echo $registro['codigo'] ?>"><?php echo $registro['nombre'] ?></option>
				<?php 
					}
				?>

			</select>
		</div>
		<div class="form-group">
			<label for="nota">Nota</label>
			<input type="number" class="form-control" id="nota" name="nota" placeholder="Nota" min="0" max="10">
		</div>
		
		<input type="submit" value="Agregar" class="btn btn-primary" name="submitButton">
		<input type="button" value="Volver" class="btn btn-primary" onclick="location.href='materiasAprobadas.php'">

	</form>
</div>
<?php require 'includes/footer.php'; ?>