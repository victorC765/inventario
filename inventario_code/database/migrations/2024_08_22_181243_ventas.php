<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('idVentas');
            $table->dateTime('fecha_venta')->nullable();
            $table->float('monto_total')->nullable();
            $table->unsignedBigInteger('metodos_pagos_idMetodos_pagos');
            $table->unsignedBigInteger('user_id'); // Relación con el modelo User
            $table->unsignedBigInteger('cliente_idClientes');
            $table->timestamps();

            $table->foreign('metodos_pagos_idMetodos_pagos')->references('idMetodos_pagos')->on('metodos_pagos')->onDelete('no action');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('no action');
            $table->foreign('cliente_idClientes')->references('idClientes')->on('clientes')->onDelete('no action');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ventas');
    }
};
