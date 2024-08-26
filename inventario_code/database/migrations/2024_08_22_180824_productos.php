<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('idProductos');
            $table->string('nombre_producto', 55)->nullable();
            $table->text('descripcion')->nullable();
            $table->unsignedBigInteger('categoria_idCategoria');
            $table->float('precio')->nullable();
            $table->integer('stock_actual')->nullable();
            $table->date('fecha_llegada')->nullable();
            $table->timestamps();

            $table->foreign('categoria_idCategoria')->references('idCategoria')->on('categoria')->onDelete('no action');
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
