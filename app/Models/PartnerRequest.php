<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function userRole(): HasMany
    {
        return $this->hasMany(Request::class);
    }

    public function request(): HasMany
    {
        return $this->hasMany(Request::class);
    }

    public function partner(): HasMany
    {
        return $this->hasMany(Request::class);
    }

}
