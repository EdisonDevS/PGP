<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaccions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tarjeta_id');
            $table->float('valor');
            $table->string('descripcion');
            $table->unsignedBigInteger('cuenta_destino_id');
            $table->boolean('transaccion_activa')->default(true);
            $table->foreign('cuenta_destino_id')->references('id')->on('cuentas');
            $table->foreign('tarjeta_id')->references('id')->on('tarjetas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaccions');
    }
}
