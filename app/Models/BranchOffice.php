<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BranchOffice extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bce_id',
        'super_id'
    ];

    public function office(): HasMany
    {
        return $this->hasMany(Office::class);
    }

    public function movement(): BelongsTo
    {
        return $this->belongsTo(Movement::class);
    }
}
