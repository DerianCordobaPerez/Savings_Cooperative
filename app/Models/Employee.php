<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'identification',
        'sex',
        'marital_status',
        'profession',
        'nationality',
        'date_of_birth',
        'date_of_admission',
        'departure_date',
        'internal_mail',
        'personal_mail'
    ];

    public function userRole(): BelongsTo
    {
        return $this->belongsTo(UserRole::class);
    }

}
