<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin Builder
 */
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

    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class);
    }

    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }

}
