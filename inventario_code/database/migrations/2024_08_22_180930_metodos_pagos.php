<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{public function up()
    {
        Schema::create('metodos_pagos', function (Blueprint $table) {
            $table->id('idMetodos_pagos');
            $table->string('metodo_pago', 45)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('metodos_pagos');
    }
};
