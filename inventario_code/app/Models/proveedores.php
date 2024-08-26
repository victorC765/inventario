<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    protected $primaryKey = 'idProveedores';
    public $timestamps = false;

    protected $fillable = [
        'nombre_proveedores',
        'telefono',
        'email',
        'productos_idProductos',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'productos_idProductos', 'idProductos');
    }
}
