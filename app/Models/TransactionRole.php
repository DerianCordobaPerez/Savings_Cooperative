<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin Builder
 */
class TransactionRole extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'role_id',
        'allowed_amount',
        'requires_authorization',
        'transaction_id'
    ];

    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Transaction::class);
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public function transactions(): BelongsToMany
    {
        return $this->belongsToMany(Transaction::class);
    }

}
