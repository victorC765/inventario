<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('descuentos', function (Blueprint $table) {
            $table->id('idDescuentos');
            $table->string('descuento', 45)->nullable();
            $table->float('monto_descuento')->nullable();
            $table->unsignedBigInteger('venta_idVentas');
            $table->timestamps();

            $table->foreign('venta_idVentas')->references('idVentas')->on('ventas')->onDelete('no action');
        });
    }

    public function down()
    {
        Schema::dropIfExists('descuentos');
    }
};
