$(function(){
	var info_cuentas;

	$.ajax({
		url:'/consultar_cuentas',
		type:'POST',
		data:{user_id:$('#user_id').val()},
		success:function(response)
		{
			info_cuentas=response;
			//console.log(info_cuentas);
			
		}
	});


	$('#numero_cuenta').change(function(){
		info_cuentas.forEach(function(element){
			//console.log(element);
			if (element.id==$('#numero_cuenta').val()){
				$('#tipo_cuenta').val(element.tipo_cuenta);
				$('#nombre_cuenta').val(element.nombre_cuenta);
				$('#saldo_actual').val(element.saldo);
				$('#descripcion').val(element.descripcion);
				$('#saldo_bajo').val(element.saldo_bajo);
				$('#divisa').val(element.divisa);
			}
		});
		
	});


	$('#btn_guardar_cambios').click(function(){
		$.ajax({
			url:'/actualizar_cuenta',
			type:'POST',
			data:{
				cuenta_id:$("#numero_cuenta").val(),
				numero_cuenta:$("#numero_cuenta").val(),
				tipo_cuenta:$("#tipo_cuenta").val(),
				nombre_cuenta:$("#nombre_cuenta").val(),
				saldo_actual:$("#saldo_actual").val(),
				descripcion:$("#descripcion").val(),
				saldo_bajo:$("#saldo_bajo").val(),
				divisa:$("#divisa").val(),
			},
			success:function(response){
				console.log(response);
			}
		});
	});
})