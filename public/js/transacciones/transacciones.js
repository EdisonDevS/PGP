$(function(){

	var $table = $('#table');

  $('#remove').click(function () {
    var datos = $table.bootstrapTable('getSelections');

    datos.forEach((elemento) => {
      $.ajax({
        url:'/borrar_transacciones',
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

	function getIdSelections() {
    return $.map($table.bootstrapTable('getSelections'), function (row) {
      return row.id
    })
  }


	function initTable() {
    $table.bootstrapTable('destroy').bootstrapTable({
      height: 550,
      locale: $('#locale').val(),
      columns: [
        [{
          field: 'state',
          checkbox: true,
          rowspan: 2,
          align: 'center',
          valign: 'middle'
        }, {
          field: 'id',
          title: 'ID',
          sortable: true,
          footerFormatter: totalNameFormatter,
          align: 'center'
        }, {
          field: 'tarjeta_id',
          title: 'Tarjeta de origen',
          sortable: true,
          align: 'center',
          footerFormatter: totalPriceFormatter
        }, {
          field: 'cuenta_destino_id',
          title: 'Cuenta destino',
          align: 'center',
          clickToSelect: false,
          events: window.operateEvents,
          formatter: operateFormatter
        }, {
          field: 'descripcion',
          title: 'Descripción',
          align: 'center',
          clickToSelect: false,
          events: window.operateEvents,
          formatter: operateFormatter
        }]
      ]
    });

    $table.on('check.bs.table uncheck.bs.table ' +
      'check-all.bs.table uncheck-all.bs.table',
    function () {
      $remove.prop('disabled', !$table.bootstrapTable('getSelections').length)

      // save your data, here just save the current page
      selections = getIdSelections()
      // push or splice the selections if you want to save all data selections
    })
    $table.on('all.bs.table', function (e, name, args) {
      console.log(name, args)
    })
    $remove.click(function () {
      var ids = getIdSelections()
      $table.bootstrapTable('remove', {
        field: 'id',
        values: ids
      })
      $remove.prop('disabled', true)
    })
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