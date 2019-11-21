<div>
	<div class="row">
		<div class="col-md-12">
			<h4>Información de la cuenta del remitente</h4>
		</div>

		<input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}" placeholder="">
		
		<div class="col-md-4">
			<div class="col-md-12">
				<select class="form-control" id="tarjeta_id">
					<option>Seleccionar tarjeta</option>
					@foreach ($info_tarjetas as $tarjeta)
					<option value="{{ $tarjeta->id }}">{{ $tarjeta->numero_tarjeta }}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-12">
				<input class="form-control" type="number" id="valor" name="" value="" placeholder="Valor">
			</div>
			
		</div>
		<div class="col-md-4">
			<div class="col-md-12">
				<p id="lbl_tipo_cuenta" style="padding-top: 3px; margin-bottom: 35px">Tipo de cuenta: </p>
			</div>
			<div class="col-md-12">
				<p id="lbl_saldo_tarjeta" style="padding-top: 3px; margin-bottom: 35px">Saldo de tarjeta: </p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="col-md-12">
				<p id="lbl_cuenta" style="padding-top: 3px; margin-bottom: 35px">Cuenta: </p>
			</div>
		</div>
		<div class="col-md-12">
			<textarea class="form-control" rows="5" id="descripcion" placeholder="Descripción"></textarea>
		</div>
		<div class="col-md-12">
			<h4>Información de la cuenta del receptor</h4>
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6">
					<input class="form-control" type="number" id="cuenta_destino" name="" value="" placeholder="Número de cuenta">
				</div>
				<div class="col-md-6">
					<p id="lbl_info_cuenta"></p>
				</div>
				<input type="hidden" name="cuenta_destino_id" id="cuenta_destino_id" value="" placeholder="">
				
			</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
					<button class="btn btn-block" id="btn_crear_transaccion" style="background-color: #7E56C1; color: white">Continuar</button>
				</div>
				<div class="col-md-6">
					<button class="btn btn-block" style="background-color: #EBEBEB">Cancelar</button>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="{{ asset('js/transacciones/agregar_transaccion.js') }}"></script>
</div>