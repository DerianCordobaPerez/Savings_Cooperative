<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function module(): HasMany
    {
        return $this->hasMany(Module::class);
    }

    public function transaction(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function movement(): BelongsTo
    {
        return $this->belongsTo(Movement::class);
    }
}
