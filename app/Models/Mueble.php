<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mueble extends Model
{
    /** @use HasFactory<\Database\Factories\MuebleFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['denominacion', 'precio'];

    public function muebleable()
    {
        return $this->morphTo('muebleable');
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
