$(function(){
	var info_tarjetas;
	var cuenta_tarjeta

	$.ajax({
		url:'/consultar_tarjetas',
		type:'POST',
		data:{user_id:$('#user_id').val()},
		success:function(response)
		{
			info_tarjetas=response;
			//console.log(info_cuentas);
			
		}
	});


	$('#tarjeta_id').change(function(){
		$.ajax({
			url:'/consultar_cuenta_tarjeta',
			type:'POST',
			data:{tarjeta_id:$('#tarjeta_id').val()},
			success:function(response)
			{
				cuenta_tarjeta=response;
				//console.log(info_cuentas);
				$('#lbl_tipo_cuenta').html('Tipo de cuenta: '+cuenta_tarjeta.tipo_cuenta);
				$('#lbl_cuenta').html('Cuenta: '+cuenta_tarjeta.nombre_cuenta);
			}
		});

		info_tarjetas.forEach(function(element){
			//console.log(element);
			if (element.id==$('#tarjeta_id').val()){
				$('#lbl_saldo_tarjeta').html('Saldo de tarjeta: '+element.saldo);
			}
		});
		
	});


	$('#cuenta_destino').keyup(function(){
		$.ajax({
			url:'/consultar_cuenta_numero',
			type:'POST',
			data:{cuenta_destino:$("#cuenta_destino").val()},
			success:function(response){

				console.log(response.length);
				if(response.length != 0)
				{
					console.log(response);
					$('#lbl_info_cuenta').css('color','black');
					$('#lbl_info_cuenta').html('<b>Propietario: </b>'+response.nombres+' '+response.apellidos);
					$('#cuenta_destino_id').val(response.id);
				}
				else
				{
					console.log(response);
					$('#lbl_info_cuenta').css('color','red');
					$('#lbl_info_cuenta').html('<b>No existe una cuenta con este número</b>');
					$('#cuenta_destino_id').val();
				}
			},
			error:function(error)
			{
				console.log(error);
			}
		});
	});


	$('#btn_crear_transaccion').click(function(){

		$.ajax({
			url:'/crear_transaccion',
			type:'POST',
			data:{
				tarjeta_id:$("#tarjeta_id").val(),
				valor:$("#valor").val(),
				descripcion:$("#descripcion").val(),
				cuenta_destino_id:$("#cuenta_destino_id").val(),
			},
			success:function(response){
				console.log(response);
				alert('Se ha creado la transacción con exito');
				$("#tarjeta_id").val("")
				$("#valor").val("")
				$("#descripcion").val("")
				$("#cuenta_destino_id").val("")
			},
			error:function(error)
			{
				console.log(error);
			}
		});
	});
})