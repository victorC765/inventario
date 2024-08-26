<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id('idProveedores');
            $table->string('nombre_proveedores', 45)->nullable();
            $table->integer('telefono')->nullable();
            $table->string('email', 45)->nullable();
            $table->unsignedBigInteger('producto_idProductos');
            $table->timestamps();

            $table->foreign('producto_idProductos')->references('idProductos')->on('productos')->onDelete('no action');
        });
    }

    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
};
