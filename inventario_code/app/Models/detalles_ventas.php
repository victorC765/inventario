<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table = 'detalles_ventas';
    protected $primaryKey = 'idDetalles_ventas';
    public $timestamps = false;

    protected $fillable = [
        'cantidad',
        'precio_unitario',
        'subtotal',
        'producto_idProductos',
        'venta_idVentas',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_idProductos', 'idProductos');
    }

    public function venta()
    {
        return $this->belongsTo(Venta::class, 'venta_idVentas', 'idVentas');
    }
}
