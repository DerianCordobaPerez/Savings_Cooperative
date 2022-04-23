<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RateRange extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'currency_id',
        'parameter_id',
        'rate_type',
        'currency',
        'ride_from',
        'ride_to',
        'date_from',
        'date_to',
        'margin'
    ];

    public function module(): HasMany
    {
        return $this->hasMany(Module::class);
    }

    public function currencies(): HasMany
    {
        return $this->hasMany(Currency::class);
    }

    public function parameters(): HasMany
    {
        return $this->hasMany(Parameter::class);
    }

}
