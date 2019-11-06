$(function(){

	var $table = $('#table');

	$.ajax({
		url:'/consultar_transacciones',
		type:'POST',
		data:{user_id:$('#user_id').val()},
		success:function(response)
		{
			$table.bootstrapTable({data: response});
			console.log(response);
		},
		error:function(error)
		{
			console.log(error);
		}
	});

	//función para la carga de los contenidos
	function cargar_contenido(event){
		$.ajax({
			url:event.data.url,
			type: "GET",
			data:{user_id:$('#user_id').val()},
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

	$("#boton_agregar_transaccion_programada").click(
	{
		url:"/transaccion_programada"
	},
	cargar_contenido
	);

	$("#boton_modificar_transaccion").click(
	{
		url:"/modificar_transaccion"
	},
	cargar_contenido
	);

})