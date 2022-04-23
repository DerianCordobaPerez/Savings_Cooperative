<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_role_id',
        'request_id',
        'amount',
        'cash',
        'check',
        'transfer'
    ];

    public function userRole(): BelongsTo
    {
        return $this->belongsTo(UserRole::class);
    }

    public function request(): HasMany
    {
        return $this->hasMany(Request::class);
    }

}
