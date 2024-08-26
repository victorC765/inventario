<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'idCategoria';
    public $timestamps = false;

    protected $fillable = [
        'categoria',
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'categoria_idCategoria', 'idCategoria');
    }
}
