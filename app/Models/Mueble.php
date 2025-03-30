<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mueble extends Model
{
    /** @use HasFactory<\Database\Factories\MuebleFactory> */
    use HasFactory;

    public function muebleable()
    {
        return $this->morphTo('muebleable');
    }
}
