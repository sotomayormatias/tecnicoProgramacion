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
	activarMenu(2);
</script>

<h1>Materias Aprobadas</h1>
<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Código</th>
			<th>Nombre</th>
			<th>Nota</th>
			<th colspan=2><a href="agregarMateriaAprobada.php"><span class='glyphicon glyphicon-plus' aria-hidden='true'></span></a></th>
		</tr>
		<?php 
			while ($registro = mysqli_fetch_assoc($resultMaterias))
			{
		?>
			<tr>
				<td><?php echo $registro['codigo'] ?></td>
				<td><?php echo $registro['nombre'] ?></td>
				<td><?php echo $registro['nota'] ?></td>
				<td><button type='button' onClick='eliminarMateria(<?php echo $registro['codigo'] ?>)' class='btnSinBorde'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button></td>
				<td><a href="editarMateria.php?codigo=<?php echo $registro['codigo'] ?>&nombre=<?php echo $registro["nombre"] ?>&cuatrimestre=<?php echo $registro["cuatrimestre"] ?>"><span class='glyphicon glyphicon-list-alt' aria-hidden='true'></span></a></td>
			</tr>
		<?php
			};
		?>
	</table>
</div>

<?php  
	require "includes/footer.php";
?>