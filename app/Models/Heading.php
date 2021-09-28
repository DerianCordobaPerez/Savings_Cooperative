<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin Builder
 */
class Heading extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'transaction_id',
        'description',
        'mnemonic',
        'movement_type'
    ];

    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Transaction::class);
    }

    public function transactions(): BelongsToMany
    {
        return $this->belongsToMany(Transaction::class);
    }

}
