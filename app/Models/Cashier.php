<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cashier extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_role_id',
        'branch_office_id',
        'office_id',
        'date',
        'type_of_transfer',
        'value'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserRole::class);
    }

    public function branch_office(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }

    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }

}
