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

	$("#boton_agregar_transaccion").click(
	{
		url:"/agregar_transaccion"
	},
	cargar_contenido
	);

})