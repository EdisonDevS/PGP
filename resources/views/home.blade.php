@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ URL::asset('css/home/home.css') }}" />

<div>
  <div class="row">

    <!-- barra de navegación lateral-->
    <div class="col-md-3 sidebar">
      <ul class="nav flex-column">
        <li class="nav-item" id="cargar_inicio">
          <h4 class="nav-link"><i class="material-icons purple">home</i>   INICIO</h4>
        </li>
        <li class="nav-item" id="cargar_cuentas">
          <h4 class="nav-link"><i class="material-icons purple">credit_card</i>   CUENTAS</h4>
        </li>
        <li class="nav-item" id="cargar_tarjetas">
          <h4 class="nav-link"><i class="material-icons purple">credit_card</i>   TARJETAS</h4>
        </li>
        <li class="nav-item" id="cargar_transacciones">
          <h4 class="nav-link"><i class="material-icons purple">monetization_on</i>   TRANSACCIONES</h4>
        </li>
        <li class="nav-item" id="cargar_presupuestos">
          <h4 class="nav-link"><i class="material-icons purple">insert_chart</i>   PRESUPUESTOS</h4>
        </li>
        <li class="nav-item" id="cargar_smart_progress">
          <h4 class="nav-link"><i class="material-icons purple">score</i>   SMART PROGRESS</h4>
        </li>
        <li class="nav-item" id="cargar_chequera">
          <h4 class="nav-link"><i class="material-icons purple">account_balance_wallet</i>   CHEQUERA</h4>
        </li>
        <li class="nav-item settings-button" id="cargar_configuracion">
          <h4 class="nav-link"><i class="material-icons purple">settings_applications</i>  CONFIGURACIÓN</h4>
        </li>
      </ul>
    </div>
    
    <!-- contenido de la pagina-->
    <div class="col-md-9" id="content">
      
    </div>

  </div>

  <script type="text/javascript" src="{{ asset('js/home/home.js') }}"></script>
  
</div>

@endsection