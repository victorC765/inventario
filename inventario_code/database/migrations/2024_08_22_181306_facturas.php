<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{ public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id('idFacturas');
            $table->integer('numero_factura')->nullable();
            $table->dateTime('fecha_emision')->nullable();
            $table->float('impuesto_aplicado')->nullable();
            $table->unsignedBigInteger('venta_idVentas');
            $table->timestamps();

            $table->foreign('venta_idVentas')->references('idVentas')->on('ventas')->onDelete('no action');
        });
    }

    public function down()
    {
        Schema::dropIfExists('facturas');
    }
};
