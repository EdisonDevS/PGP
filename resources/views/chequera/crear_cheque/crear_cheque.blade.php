<div>
	<div class="row">
		
		<div class="col-md-4">
			<div class="col-md-12">
				<input id="numero_cheque" class="form-control" type="number" name="" value="" placeholder="Numero de cheque">
			</div>
			<div class="col-md-12">
				<input id="nombre_destinatario" class="form-control" type="text" name="" value="" placeholder="Nombre del destinatario">
			</div>
			
		</div>
		<div class="col-md-4">
			<div class="col-md-12">
				<select id="cuenta_id" class="form-control"	>
					<option>Seleccionar cuenta</option>
					@foreach ($info_cuentas as $cuenta)
					<option value="{{ $cuenta->id }}">{{ $cuenta->numero_cuenta }}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-12">
				<input id="documento_destinatario" class="form-control" type="number" name="" value="" placeholder="Documento del destinatario">
			</div>
		</div>
		<div class="col-md-4">
			<div class="col-md-12">
				<input id="valor" class="form-control" type="number" name="" value="" placeholder="Valor">
			</div>
			<div class="col-md-12">
				<input id="fecha_de_expendio" class="form-control" type="date" name="" value="">
			</div>
		</div>
		<div class="col-md-12">
			<textarea id="descripcion" class="form-control" rows="5" id="comment" placeholder="Descripción"></textarea>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
					<button id="btn_crear_cheque" class="btn btn-block" style="background-color: #7E56C1; color: white">Continuar</button>
				</div>
				<div class="col-md-6">
					<button class="btn btn-block" style="background-color: #EBEBEB">Cancelar</button>
				</div>
			</div>
			
			
		</div>
		
	</div>
	<script type="text/javascript" src="{{ asset('js/chequera/crear_cheque.js') }}"></script>
</div>