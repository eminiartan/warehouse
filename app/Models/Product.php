<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'barcode',
    ];

    public function detail(): HasOne
    {
        return $this->hasOne(Detail::class);
    }

    public function depos(): MorphToMany
    {
        return $this->morphedByMany(Depo::class, 'depo_product');
    }

}
