<div>
	<div class="row">
		
		<input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
		
		<div class="col-md-12">
			<button id="boton_crear_cheque" class="option-button" type="button">
			Crear cheque	<i class="material-icons purple">add_circle_outline</i>
			</button>
		</div>
		
	</div>

	<div class="row" style="padding-top: 30px">
		<div class="col-md-12">
			<div id="toolbar">
			  <button id="remove" class="btn btn-danger">
			    <i class="glyphicon glyphicon-remove"></i> Cancelar cheque
			  </button>
			</div>
			<table id="table"
			data-search="true"
			data-toolbar="#toolbar"
			data-page-size="5"
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
			      <th data-field="numero_cheque">Número</th>
			      <th data-field="nombre_destinatario">Destinatario</th>
			      <th data-field="documento_destinatario">Documento destinatario</th>
			      <th data-field="fecha_de_expendio">Fecha de expedición</th>
			      <th data-field="descripcion">Descripción</th>
			      <th data-field="valor">Valor</th>
			    </tr>
			  </thead>
			</table>	
		</div>
		
	</div>

	<script type="text/javascript" src="{{ asset('js/chequera/chequera.js') }}"></script>
	
</div>