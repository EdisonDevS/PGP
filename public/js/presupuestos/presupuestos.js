$(function(){

	//función para la carga de los contenidos
	function cargar_contenido(event){
		$.ajax({
			url:event.data.url,
			type: "GET",
			success: function(response){
				$("#content").html("");
				$("#content").html(response);
			},
			error: function(error){
				console.log(error);
			}
		});
	}

	$("#boton_ver_presupuesto").click(
	{
		url:"/agregar_cuenta"
	},
	cargar_contenido
	);

	$("#boton_modificar_presupuesto").click(
	{
		url:"/modificar_cuenta"
	},
	cargar_contenido
	);

	$("#boton_crear_grupo_de_cuentas").click(
	{
		url:"/borrar_cuenta"
	},
	cargar_contenido
	);

})