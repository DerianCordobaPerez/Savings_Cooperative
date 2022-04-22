<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin Builder
 */
class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'movement_id',
        'branch_office_id',
        'office_id',
        'partner_id',
        'opening_date',
        'official_count',
        'status',
        'cash_balance',
        'check_balance_24',
        'check_balance_48',
        'check_balance',
        'notebook_balance',
        'date_of_last_movement'
    ];

    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Movement::class);
    }

    public function movements(): BelongsToMany
    {
        return $this->belongsToMany(Movement::class);
    }

    public function branch_offices(): BelongsToMany
    {
        return $this->belongsToMany(Movement::class);
    }

    public function offices(): BelongsToMany
    {
        return $this->belongsToMany(Movement::class);
    }

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }

}
