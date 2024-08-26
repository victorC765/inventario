<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'Ventas';
    protected $primaryKey = 'idVentas';
    public $timestamps = false;

    protected $fillable = [
        'fecha_venta',
        'monto_total',
        'metodos_pagos_idMetodos_Pagos',
        'users_id',
        'clientes_idClientes',
    ];

    public function metodoPago()
    {
        return $this->belongsTo(MetodoPago::class, 'metodos_pagos_idMetodos_Pagos', 'idMetodos_Pagos');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'clientes_idClientes', 'idClientes');
    }

    public function detallesVentas()
    {
        return $this->hasMany(DetalleVenta::class, 'ventas_idVentas', 'idVentas');
    }

    public function facturas()
    {
        return $this->hasMany(Factura::class, 'ventas_idVentas', 'idVentas');
    }

    public function descuentos()
    {
        return $this->hasMany(Descuento::class, 'ventas_idVentas', 'idVentas');
    }
}
