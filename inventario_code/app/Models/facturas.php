<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';
    protected $primaryKey = 'idFacturas';
    public $timestamps = false;

    protected $fillable = [
        'numero_factura',
        'fecha_emision',
        'impuesto_aplicado',        
        'venta_idVentas',
    ];

    public function venta()
    {
        return $this->belongsTo(Venta::class, 'venta_idVentas', 'idVentas');
    }
}
