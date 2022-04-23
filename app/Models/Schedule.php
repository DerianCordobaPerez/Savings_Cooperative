<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_role_id',
        'days_week',
        'start_time',
        'end_time'
    ];

    public function userRole(): HasMany
    {
        return $this->hasMany(UserRole::class);
    }

}
