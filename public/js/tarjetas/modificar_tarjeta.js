$(function(){
	var info_tarjetas;

	$.ajax({
		url:'/consultar_tarjetas',
		type:'POST',
		data:{user_id:$('#user_id').val()},
		success:function(response)
		{
			info_tarjetas=response;
			//console.log(info_cuentas);
			
		},
		error: function(error)
		{
			console.log(error);	
		}
	});


	$('#tarjeta_id').change(function(){
		info_tarjetas.forEach(function(element){
			//console.log(element);
			if (element.id==$('#tarjeta_id').val()){
				$('#cuenta_id').val(element.cuenta_id);
				$('#nombre_tarjeta').val(element.nombre_tarjeta);
				$('#saldo_actual').val(element.saldo);
				$('#descripcion').val(element.descripcion);
				$('#saldo_bajo').val(element.saldo_bajo);
				$('#divisa').val(element.divisa);
			}
		});
		
	});


	$('#btn_guardar_cambios').click(function(){
		$.ajax({
			url:'/actualizar_tarjeta',
			type:'POST',
			data:{
				tarjeta_id:$("#tarjeta_id").val(),
				cuenta_id:$("#cuenta_id").val(),
				nombre_tarjeta:$("#nombre_tarjeta").val(),
				saldo_actual:$("#saldo_actual").val(),
				descripcion:$("#descripcion").val(),
				saldo_bajo:$("#saldo_bajo").val(),
				divisa:$("#divisa").val(),
			},
			success:function(response){
				console.log(response);
				alert('Se ha modificado la tarjeta con exito');
				$("#tarjeta_id").val("")
				$("#cuenta_id").val("")
				$("#nombre_tarjeta").val("")
				$("#saldo_actual").val("")
				$("#descripcion").val("")
				$("#saldo_bajo").val("")
				$("#divisa").val("")
			},
			error:function(error)
			{
				console.log(error);
			}
		});
	});
})