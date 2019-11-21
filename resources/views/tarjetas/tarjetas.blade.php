<div>
	<div class="row">
		<input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}" placeholder="">
		
		<div class="col-md-6">
			<button class="option-button" type="button" id="boton_agregar_tarjeta">
			Agregar tarjeta	<i class="material-icons purple">add_circle_outline</i>
		</button>
		</div>

		<div class="col-md-6">
			<button class="option-button" type="button" id="boton_modificar_tarjeta">Modificar tarjeta<i class="material-icons purple">edit</i></button>
		</div>

		
	</div>

	<div class="row" style="padding-top: 30px">
		<div class="col-md-12">
			<div id="toolbar">
			  <button id="remove" class="btn btn-danger">
			    <i class="glyphicon glyphicon-remove"></i> Eliminar
			  </button>
			</div>
			<table id="table"
			data-search="true"
			data-page-size="5"
			data-toolbar="#toolbar"
			data-locale="es-ES"
  			data-sortable="true"
  			data-show-fullscreen="true"
			data-show-export="true"
			data-pagination="true"
			data-id-field="id"
			data-click-to-select="true"
			data-page-list="[10, 20, 50, 100, all]">
			  <thead>
			    <tr>
			      <th data-field="state" data-checkbox="true"></th>
			      <th data-field="nombre_tarjeta">Etiqueta</th>
			      <th data-field="numero_tarjeta">Número</th>
			      <th data-field="saldo">Saldo</th>
			      <th data-field="descripcion">Descripción</th>
			      <th data-field="created_at">Fecha de creación</th>
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

	<script type="text/javascript" src="{{ asset('js/tarjetas/tarjetas.js') }}"></script>
	
</div>