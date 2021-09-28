<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin Builder
 */
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

    public function module(): BelongsToMany
    {
        return $this->belongsToMany(Module::class);
    }

    public function currencies(): BelongsToMany
    {
        return $this->belongsToMany(Currency::class);
    }

    public function parameters(): BelongsToMany
    {
        return $this->belongsToMany(Parameter::class);
    }

}
