<?php 
	require "includes/conexion.php";
	require "includes/header.php";

	$sql = "SELECT codigo, nombre
			FROM materias";
	$result = mysqli_query($link, $sql) or die(("error al traer datos de la base - ". mysqli_error($link)));
	mysqli_close($link);
?>

<div class="tituloCentral"><h1>Alta de Materia Aprobada</h1></div><br><br>
<div class="col-xs-4 center">
	<form action="materiasAprobadasForm.php" method="post">
		<div class="form-group">
			<label for="materia">Materia</label>
			<select class="form-control" name="materia" id="materia">
			<?php 
				while ($registro = mysqli_fetch_assoc($result))
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
			<input class="form-control" id="nota" name="nota" placeholder="Nota" list="notas">
			<datalist id="notas">
			<?php for($i = 1; $i < 11; $i++){ ?>
				<option value="<?php echo $i; ?>">
			<?php } ?>
			</datalist>
		</div>
		
		<input type="submit" value="Agregar" class="btn btn-primary" name="submitButton">
		<input type="button" value="Volver" class="btn btn-primary" onclick="location.href='materias.php'">
	</form>
</div>
<?php require 'includes/footer.php'; ?>