<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Market extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = ['name'];

    public function invoices(): hasMany
    {
        return $this->hasMany(Invoice::class);
    }
}
