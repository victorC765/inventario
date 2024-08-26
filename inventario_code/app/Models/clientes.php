<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'idClientes';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'telefono',
    ];

    public function ventas()
    {
        return $this->hasMany(Venta::class, 'cliente_idClientes', 'idClientes');
    }
}