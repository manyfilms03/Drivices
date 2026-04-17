<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Relatorio extends Model
{
    /** @use HasFactory<\Database\Factories\RelatorioFactory> */
    use HasFactory;

    public function servico(): BelongsTo
    {
        return $this->belongsTo(Servico::class);
    }
}
