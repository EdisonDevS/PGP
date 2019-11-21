<div>
	<div class="row">
		
		<div class="col-md-8">
			<div class="row">

				<input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
				
				<div class="col-md-12">
					<h4>Información de la cuenta</h4>
				</div>
				

				<div class="col-md-6">
					<select class="form-control" id="cuenta_id">
						<option>Seleccionar cuenta</option>
						@foreach ($info_cuentas as $cuenta)
						<option value="{{ $cuenta->id }}">{{ $cuenta->numero_cuenta }}</option>
						@endforeach
					</select>
				</div>

				<div class="col-md-6">
					<input class="form-control" type="text" id="nombre_presupuesto" name="" value="" placeholder="Nombre del presupuesto">
				</div>

				<div class="col-md-6">
					<input class="form-control" type="number" id="saldo_presupuesto" name="" value="" placeholder="Tope del presupuesto">
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
					<button class="btn btn-block" id="btn_guardar_cambios" style="background-color: #7E56C1; color: white">Continuar</button>
				</div>
				<div class="col-md-6">
					<button class="btn btn-block" style="background-color: #EBEBEB">Cancelar</button>
				</div>
			</div>
			
			
		</div>
	</div>
	<script type="text/javascript" src="{{ asset('js/presupuestos/crear_presupuesto.js') }}"></script>
</div>