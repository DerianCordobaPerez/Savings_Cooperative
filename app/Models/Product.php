<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'name',
        'description'
    ];

    public function module(): HasMany
    {
        return $this->hasMany(Module::class);
    }

}
