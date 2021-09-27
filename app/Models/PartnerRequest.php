<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin Builder
 */
class PartnerRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_role_id',
        'request_id',
        'partner_id',
        'relation',
        'direction'
    ];

    public function user_role(): BelongsToMany
    {
        return $this->belongsToMany(Request::class);
    }

    public function request(): BelongsToMany
    {
        return $this->belongsToMany(Request::class);
    }

    public function partner(): BelongsToMany
    {
        return $this->belongsToMany(Request::class);
    }

}
