<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('detalles_ventas', function (Blueprint $table) {
            $table->id('idDetalles_ventas');
            $table->integer('cantidad')->nullable();
            $table->float('precio_unitario')->nullable();
            $table->float('subtotal')->nullable();
            $table->unsignedBigInteger('producto_idProductos');
            $table->unsignedBigInteger('venta_idVentas');
            $table->timestamps();

            $table->foreign('producto_idProductos')->references('idProductos')->on('productos')->onDelete('no action');
            $table->foreign('venta_idVentas')->references('idVentas')->on('ventas')->onDelete('no action');
        });
    }

    public function down()
    {
        Schema::dropIfExists('detalles_ventas');
    }
};
