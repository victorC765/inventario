<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    protected $table = 'metodos_pagos';
    protected $primaryKey = 'idMetodos_Pagos';
    public $timestamps = false;

    protected $fillable = [
        'metodo_pago',
    ];

    public function ventas()
    {
        return $this->hasMany(Venta::class, 'metodos_pagos_idMetodos_Pagos', 'idMetodos_Pagos');
    }
}
