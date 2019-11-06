$(function(){

	var $table = $('#table');

	$.ajax({
		url:'/consultar_cuentas',
		type:'POST',
		data:{user_id:$('#user_id').val()},
		success:function(response)
		{
			$table.bootstrapTable({data: response});
			console.log(response);
			
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

	$("#boton_agregar_cuenta").click(
	{
		url:"/agregar_cuenta"
	},
	cargar_contenido
	);

	$("#boton_modificar_cuenta").click(
	{
		url:"/modificar_cuenta"
	},
	cargar_contenido
	);

	$("#boton_borrar_cuenta").click(
	{
		url:"/borrar_cuenta"
	},
	cargar_contenido
	);

})