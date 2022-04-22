<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin Builder
 */
class BranchOffice extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bce_id',
        'super_id'
    ];

    public function offices(): BelongsToMany
    {
        return $this->belongsToMany(Office::class);
    }

}
