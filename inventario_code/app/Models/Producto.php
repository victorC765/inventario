<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'idProductos';
    public $timestamps = false;

    protected $fillable = [
        'nombre_producto',
        'descripcion',
        'categoria_idCategoria',
        'precio',
        'stock_actual',
        'fecha_llegada',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_idCategoria', 'idCategoria');
    }

    public function proveedores()
    {
        return $this->hasMany(Proveedor::class, 'productos_idProductos', 'idProductos');
    }

    public function detallesVentas()
    {
        return $this->hasMany(DetalleVenta::class, 'productos_idProductos', 'idProductos');
    }

    public function historialInventario()
    {
        return $this->hasMany(HistorialInventario::class, 'productos_idProductos', 'idProductos');
    }
}
