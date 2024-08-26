<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{public function up()
    {
        Schema::create('historial_inventario', function (Blueprint $table) {
            $table->id('idHistorial_inventario');
            $table->string('cambio_stock', 45)->nullable();
            $table->string('tipo_movimiento', 45)->nullable();
            $table->date('fecha_movimiento')->nullable();
            $table->unsignedBigInteger('producto_idProductos');
            $table->unsignedBigInteger('user_id'); // Relación con el modelo User
            $table->timestamps();

            $table->foreign('producto_idProductos')->references('idProductos')->on('productos')->onDelete('no action');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('no action');
        });
    }

    public function down()
    {
        Schema::dropIfExists('historial_inventario');
    }
};
