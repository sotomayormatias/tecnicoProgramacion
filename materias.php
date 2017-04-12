<?php 
	require "includes/conexion.php";
	$sqlMaterias = "SELECT codigo, nombre, cuatrimestre
					 FROM materias
					 ORDER BY cuatrimestre, codigo";
	$resultMaterias = mysqli_query($link, $sqlMaterias) or die(("error al traer datos de la base - ". mysqli_error($link)));

	mysqli_close($link);

	include "includes/header.php";
?>

<script type="text/javascript">
	activarMenu(1);

	function eliminarMateria(codMateria){
		var jsonRequest = new XMLHttpRequest();
		var url = "delMateriasForm.php?codigo="+ codMateria;
		jsonRequest.onreadystatechange = function() {
			if (jsonRequest.readyState == 4 && jsonRequest.status == 200){
				window.location.href = 'materias.php';
			}
		};
		jsonRequest.open("GET", url, true);
		jsonRequest.send();
	}
</script>

<h1>Materias</h1>
<?php if(mysqli_num_rows($resultMaterias) > 0){ ?>
<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Código</th>
			<th>Nombre</th>
			<th>Cutrimestre</th>
			<th colspan=2><a href="agregarMateria.php"><span class='glyphicon glyphicon-plus' aria-hidden='true'></span></a></th>
		</tr>
		<?php 
			while ($registro = mysqli_fetch_assoc($resultMaterias))
			{
		?>
			<tr>
				<td><?php echo $registro['codigo'] ?></td>
				<td><?php echo $registro['nombre'] ?></td>
				<td><?php echo $registro['cuatrimestre'] ?></td>
				<td><button type='button' onClick='eliminarMateria("<?php echo $registro['codigo'] ?>")' class='btnSinBorde'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button></td>
				<td><a href="editarMateria.php?codigo=<?php echo $registro['codigo'] ?>"><span class='glyphicon glyphicon-list-alt' aria-hidden='true'></span></a></td>
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