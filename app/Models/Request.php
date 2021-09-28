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

    public function user_role(): BelongsTo
    {
        return $this->belongsTo(UserRole::class);
    }

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }

}
