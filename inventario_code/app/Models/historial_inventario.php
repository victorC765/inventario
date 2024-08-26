<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistorialInventario extends Model
{
    protected $table = 'historial_inventario';
    protected $primaryKey = 'idHistorial_inventario';
    public $timestamps = false;

    protected $fillable = [
        'cambio_stock',
        'tipo_movimiento',
        'fecha_movimiento',
        'producto_idProductos',
        'users_id',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'productos_idProductos', 'idProductos');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
