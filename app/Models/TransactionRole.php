<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function module(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function roles(): HasMany
    {
        return $this->hasMany(Role::class);
    }

    public function transaction(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

}
