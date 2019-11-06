<div>
	<div class="row">

		<input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}" placeholder="">
		
		<div class="col-md-4">
			<button id="boton_agregar_transaccion" class="option-button" type="button">
			Nueva transacción	<i class="material-icons purple">add_circle_outline</i>
		</button>
		</div>

		<div class="col-md-4">
			<button id="boton_agregar_transaccion_programada" class="option-button" type="button">Transacciones programadas	<i class="material-icons purple">alarm</i></button>
		</div>
		
		<div class="col-md-4">
			<button id="boton_modificar_transaccion" class="option-button" type="button">Modificar transacción	<i class="material-icons purple">edit</i></button>
		</div>
		
	</div>

	<div class="row" style="margin-top: 30px">
		
		<div class="col-md-4">
			<button class="option-button" type="button">
			Cancelar transacción	<i class="material-icons purple">indeterminate_check_box</i>
		</button>
		</div>

		<div class="col-md-4">
			<button class="option-button" type="button">Búsqueda avanzada		<i class="material-icons purple">search</i></button>
		</div>
		
		<div class="col-md-4">
			<button class="option-button" type="button">Exportar transacciones	<i class="material-icons purple">cloud_download</i></button>
		</div>
		
	</div>

	<div class="row" style="padding-top: 30px">
		<div class="col-md-12">
			<table id="table"
			data-search="true"
			data-page-size="5"
			data-locale="es-ES"
			data-detail-view="true"
  			data-sortable="true"
  			data-show-fullscreen="true"
			data-show-export="true"
			data-pagination="true"
			data-id-field="id"
			data-page-list="[10, 20, 50, 100, all]"
			data-detail-formatter="detailFormatter">
			  <thead>
			    <tr>
			      <th data-field="id">ID</th>
			      <th data-field="tarjeta_id">Tarjeta de origen</th>
			      <th data-field="cuenta_destino_id">Cuenta destino</th>
			      <th data-field="descripcion">Descripción</th>
			      <th data-field="valor">Valor</th>
			    </tr>
			  </thead>
			</table>	
		</div>
		
	</div>
	
	<link href="{{ asset('css/bootstrap-table/bootstrap-table.min.css') }}" rel="stylesheet">
  <script src="{{ asset('js/bootstrap-table/tableExport.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap-table/bootstrap-table.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap-table/bootstrap-table-export.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap-table/bootstrap-table-locale-all.min.js') }}"></script> 
  
	<script type="text/javascript" src="{{ asset('js/transacciones/transacciones.js') }}"></script>
</div>