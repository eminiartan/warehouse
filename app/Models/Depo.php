<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Depo extends Model
{
    use HasFactory;

    protected $fillable = 'name';

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function invoices(): hasMany
    {
        return $this->hasMany(Invoice::class);
    }

    public function products(): MorphToMany
    {
        return $this->morphToMany(Product::class, 'depo_product');
    }

}
