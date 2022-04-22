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

    public function user_role(): BelongsTo
    {
        return $this->belongsTo(Request::class);
    }

    public function request(): BelongsToMany
    {
        return $this->belongsToMany(Request::class);
    }

}
