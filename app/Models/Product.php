<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'barcode',
    ];

    public function property(): HasOne
    {
        return $this->hasOne(Property::class);
    }

    public function depos(): BelongsToMany
    {
        return $this->belongsToMany(Depo::class)->withPivot('quantity');
    }

}
