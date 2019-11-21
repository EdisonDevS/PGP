$(function(){

	$('#remove').click(function () {
		var datos = $table.bootstrapTable('getSelections');

		datos.forEach((elemento) => {
			$.ajax({
				url:'/borrar_tarjetas',
				type:'POST',
				data:elemento,
				success:function(response)
				{
					$table.bootstrapTable({data: response});
					
					console.log(response);
					
					var ids = $.map($table.bootstrapTable('getSelections'), function (row) {
			          return row.id
			        })
			        $table.bootstrapTable('remove', {
			          field: 'id',
			          values: ids
			        })
					
				},
				error:function(error)
				{
					console.log(error);
				}
			});

		});
      	
    });

	var $table = $('#table')

	$.ajax({
		url:'/consultar_tarjetas',
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

	function detailFormatter(index, row) {
	    var html = []
	    console.log('holi')
	    $.each(row, function (key, value) {
	      html.push('<p><b>' + key + ':</b> ' + value + '</p>')
	    })
	    return html.join('')
	  }

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

	$("#boton_agregar_tarjeta").click(
	{
		url:"/agregar_tarjeta"
	},
	cargar_contenido
	);

	$("#boton_modificar_tarjeta").click(
	{
		url:"/modificar_tarjeta"
	},
	cargar_contenido
	);

	$("#boton_borrar_tarjeta").click(
	{
		url:"/borrar_tarjeta"
	},
	cargar_contenido
	);

})