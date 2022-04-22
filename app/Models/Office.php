<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin Builder
 */
class Office extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_office_id',
        'name',
        'province',
        'city',
        'direction',
        'phone'
    ];

    public function branch_office(): BelongsTo
    {
        return $this->belongsTo(BranchOffice::class);
    }

}
