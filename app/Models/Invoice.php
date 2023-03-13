<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'depo_id',
        'items',
    ];

    protected $casts = [
        'items' => 'array',
    ];

    public function market(): BelongsTo
    {
        return $this->belongsTo(Market::class);
    }

    public function depo(): BelongsTo
    {
        return $this->belongsTo(Depo::class);
    }
}
