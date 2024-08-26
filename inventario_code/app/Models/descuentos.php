<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Descuento extends Model
{
    protected $table = 'descuentos';
    protected $primaryKey = 'idDescuentos';
    public $timestamps = false;

    protected $fillable = [
        'descuento',
        'monto_descuento',
        'Ventas_idVentas',
    ];

    public function venta()
    {
        return $this->belongsTo(Venta::class, 'venta_idVentas', 'idVentas');
    }
}
