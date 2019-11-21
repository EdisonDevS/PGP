$(function(){

	var $table = $('#table')

	$.ajax({
		url:'/consultar_presupuestos',
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
			data: {user_id: $('#user_id').val()},
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
		url:"/crear_presupuesto"
	},
	cargar_contenido
	);

	$("#boton_modificar_presupuesto").click(
	{
		url:"/modificar_presupuesto"
	},
	cargar_contenido
	);


})