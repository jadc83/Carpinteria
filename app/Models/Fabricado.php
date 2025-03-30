<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricado extends Model
{
    /** @use HasFactory<\Database\Factories\FabricadoFactory> */
    use HasFactory;

    public function muebleable()
    {
        return $this->hasOne(Mueble::class, 'muebleable');
    }
}
