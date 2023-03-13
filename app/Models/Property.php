<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'cost',
        'price',
        'color',
        'dimension',
        'image',
        'category',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
