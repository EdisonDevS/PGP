$(function(){

	//función para la carga de los contenidos
	function cargar_contenido(event){

		$("li").css("background-color", "white");
		$(event.data.id_boton).css("background-color", "#DDADFF");	

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


	$("#cargar_inicio").click();
	
	$("#cargar_cuentas").click(
		{
			url: "/cuentas",
			id_boton:"#cargar_cuentas"
		},
		cargar_contenido
	);

	$("#cargar_transacciones").click(
		{
			url: "/transacciones",
			id_boton:"#cargar_transacciones"
		},
		cargar_contenido
	);


	$("#cargar_presupuestos").click();

	$("#cargar_smart_progress").click(
		{
			url: "/smart_progress",
			id_boton:"#cargar_smart_progress"
		},
		cargar_contenido
	);

	$("#cargar_chequera").click(
		{
			url: "/chequera",
			id_boton:"#cargar_chequera"
		},
		cargar_contenido
	);

	$("#cargar_configuracion").click();
})