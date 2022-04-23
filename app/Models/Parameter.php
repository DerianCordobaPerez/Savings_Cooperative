<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Parameter extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'currency_id',
        'library',
        'checks',
        'account_status',
        'pay_interest',
        'td_allows',
        'overdraft_allows',
        'calculation_basis',
        'passive_rate',
        'active_rate',
        'minimum_opening_balance',
        'minimum_balance',
        'maximum_balance',
        'cut_cycle',
        'allows_low_minimum_retention',
        'number_of_days_of_immobilization',
        'product_immobilizes',
        'description'
    ];

    public function module(): HasMany
    {
        return $this->hasMany(Module::class);
    }

    public function currency(): HasMany
    {
        return $this->hasMany(Currency::class);
    }

}
