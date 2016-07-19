<?php 
	require "includes/conexion.php";
	$sqlMaterias = "SELECT matap.codigo codigo, mat.nombre nombre, matap.nota nota
					 FROM materias_aprobadas matap
					 INNER JOIN materias mat
					 ON mat.codigo = matap.codigo
					 ORDER BY cuatrimestre, codigo";
	$resultMaterias = mysqli_query($link, $sqlMaterias) or die(("error al traer datos de la base - ". mysqli_error($link)));

	mysqli_close($link);

	include "includes/header.php";
?>

<script type="text/javascript">
	activarMenu(1);
</script>

<h1>Materias Aprobadas</h1>
<?php if(mysqli_num_rows($resultMaterias) > 0){ ?>
<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Código</th>
			<th>Nombre</th>
			<th>Nota</th>
		</tr>
		<?php 
			while ($registro = mysqli_fetch_assoc($resultMaterias))
			{
		?>
			<tr>
				<td><?php echo $registro['codigo'] ?></td>
				<td><?php echo $registro['nombre'] ?></td>
				<td><?php echo $registro['nota'] ?></td>
			</tr>
		<?php
			};
		?>
	</table>
</div>

<?php } else { ?>
	<h2>No existen materias</h2>
<?php } ?>

<?php  
	require "includes/footer.php";
?>