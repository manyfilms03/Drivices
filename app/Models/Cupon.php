<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cupon extends Model
{
    /** @use HasFactory<\Database\Factories\CuponFactory> */
    use HasFactory;
    use SoftDeletes;

    public function pedidos(): HasMany
    {
        return $this->hasMany(Pedido::class);
    }
}
