function activarMenu(idMenu){
	switch (idMenu){
		case 1:
			$("#menuProductos").addClass("active");
			$("#menuVentas").removeClass("active");
			$("#menuClientes").removeClass("active");
			$("#menuCategorias").removeClass("active");
			$("#menuBuscador").removeClass("active");
			break;
		case 2:
			$("#menuProductos").removeClass("active");
			$("#menuVentas").addClass("active");
			$("#menuClientes").removeClass("active");
			$("#menuCategorias").removeClass("active");
			$("#menuBuscador").removeClass("active");
			break;
		case 3:
			$("#menuProductos").removeClass("active");
			$("#menuVentas").removeClass("active");
			$("#menuClientes").addClass("active");
			$("#menuCategorias").removeClass("active");
			$("#menuBuscador").removeClass("active");
			break;
		case 4:
			$("#menuProductos").removeClass("active");
			$("#menuVentas").removeClass("active");
			$("#menuClientes").removeClass("active");
			$("#menuCategorias").addClass("active");
			$("#menuBuscador").removeClass("active");
			break;
		case 5:
			$("#menuProductos").removeClass("active");
			$("#menuVentas").removeClass("active");
			$("#menuClientes").removeClass("active");
			$("#menuCategorias").removeClass("active");
			$("#menuBuscador").addClass("active");
			break;
		default:
			$("#menuProductos").removeClass("active");
			$("#menuVentas").removeClass("active");
			$("#menuClientes").removeClass("active");
			$("#menuCategorias").removeClass("active");
			$("#menuBuscador").removeClass("active");
	}
}

function eliminarMateria(codMateria, esAprobada){
	debugger;
	var jsonRequest = new XMLHttpRequest();
	if(esAprobada){
	var url = "delMateriaAprobadaForm.php?codigo="+ codMateria;
	}
	else {
		var url = "delMateriasForm.php?codigo="+ codMateria;
	}
	jsonRequest.onreadystatechange = function() {
		if (jsonRequest.readyState == 4 && jsonRequest.status == 200){
			if(esAprobada){
				window.location.href = 'materiasAprobadas.php';
			}
			else {
				window.location.href = 'materias.php';
			}
		}
	};
	jsonRequest.open("GET", url, true);
	jsonRequest.send();
}
