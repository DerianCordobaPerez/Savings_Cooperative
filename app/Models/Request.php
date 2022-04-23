<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_role_id',
        'partner_id',
        'date_of_admission',
        'module',
        'product',
        'branch_office',
        'office',
        'date',
        'direction',
        'observation',
        'status',
        'number_account',
        'amount',
        'cash',
        'check'
    ];

    public function userRole(): HasMany
    {
        return $this->hasMany(UserRole::class);
    }

    public function partner(): HasMany
    {
        return $this->hasMany(Partner::class);
    }

}
