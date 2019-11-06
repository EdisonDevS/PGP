<div>
	<div class="row">
		
		<div class="col-md-8">
			<div class="row">
				<input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
				
				<div class="col-md-12">
					<h4>Información de la cuenta</h4>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" id="numero_cuenta" name="numero_cuenta" value="" placeholder="Numero de cuenta">
				</div>
				
				<div class="col-md-6">
					<select class="form-control" id="tipo_cuenta">
						<option>Seleccionar tipo</option>
						<option>Ahorros</option>
						<option>Corriente</option>
					</select>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" id="nombre_cuenta" name="" value="" placeholder="Etiqueta">
				</div>
				<div class="col-md-6">
					<input class="form-control" type="number" id="saldo_inicial" name="" value="" placeholder="Saldo inicial">
				</div>
				<div class="col-md-12">
					<textarea class="form-control" rows="5" id="descripcion" placeholder="Descripción"></textarea>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="col-md-12">
				<h4>Configuración</h4>
			</div>
			
			<div class="col-md-12">
				<input class="form-control" type="text" id="saldo_bajo" name="" value="" placeholder="Saldo bajo">
			</div>
			
			<div class="col-md-12">
				<select class="form-control"	 id="divisa">
					<option>Divisa</option>
					<option>COP</option>
					<option>BOL</option>
					<option>EUR</option>
				</select>
			</div>
			
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
					<button class="btn btn-block" id="btn_crear_cuenta" style="background-color: #7E56C1; color: white">Continuar</button>
				</div>
				<div class="col-md-6">
					<button class="btn btn-block" style="background-color: #EBEBEB">Cancelar</button>
				</div>
			</div>
			
			
		</div>
	</div>
	<script type="text/javascript" src="{{ asset('js/cuentas/agregar_cuenta.js') }}"></script>
</div>